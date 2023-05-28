<?php

class FormsController extends BaseController {

	public function send($formeId)
	{
		$redirect = Redirect::to(Request::server('HTTP_REFERER') ?: '/');

		DB::beginTransaction();

		$path = substr(Request::server('HTTP_REFERER'), 0, strlen(Request::root())) === Request::root()
			? substr(Request::server('HTTP_REFERER'), strlen(Request::root()))
			: null;

		$page = Page::findByPath($path);

		if (!$page)
		{
			App::abort(404);
		}

		$user = Auth::user()->get();

		$forme = Forme::findOrFail($formeId);
		$feedback = new Feedback;
		$feedback->forme_id = $forme->id;
		$feedback->page_id = $page->id;
		if ($user)
		{
			$feedback->user_id = $user->id;
		}

		$ua = array(
    "domain" => Request::server('HTTP_HOST'),
    "useragent" => Request::server('HTTP_USER_AGENT')
);
		//$ua->domain = Request::server('HTTP_HOST');
		//$ua->useragent = Request::server('HTTP_USER_AGENT');
		$feedback->ip = Request::server('REMOTE_ADDR');
		$feedback->useragent = Request::server('HTTP_HOST');
		//$feedback->useragent = Request::server('HTTP_USER_AGENT') ?: '';

		foreach (Input::all() as $key => $value)
		{
			if (preg_match('#^field_#', $key))
			{
				$feedback->$key = $value;
			}
		}

		if ($feedback->save())
		{
			DB::commit();

			Session::put('forme_id', $formeId);

			try
			{
				$this->sendMail($feedback);

				$feedback->sent = true;
				$feedback->save();
			}
			catch(Exception $e)
			{
				if (Config::get('app.debug'))
				{
					throw $e;
				}
			}
		}
		else
		{
			DB::rollback();

			$redirect
				->withErrors($feedback->validator)
				->with('input', Input::except('_method'));
		}

		return $redirect;
	}

	protected function sendMail(Feedback $feedback)
	{
		$email = Config::get('settings.site.email');
		$subject = $feedback->forme->name . ' | ' . DOMAIN;

		if ($email)
		{
			Mail::send(
				'_.emails.feedback',
				array(
					'feedback' => $feedback,
				),
				function($message) use ($email, $subject)
				{
					$message->to($email);

					if ($subject)
					{
						$message->subject($subject);
					}
				}
			);
		}
		else
		{
			throw new Exception('E-mail is empty');
		}
	}

}
