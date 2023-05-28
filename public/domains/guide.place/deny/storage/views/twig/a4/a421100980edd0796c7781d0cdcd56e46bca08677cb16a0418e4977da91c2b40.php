<?php

/* form_partners */
class __TwigTemplate_7d721b6b28a14685e969681cfe070ab17bc490cdf208d00250b35be7ff659edd extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"form__title\">Оформление заявки</div>
<div class=\"form__body\">
\t<form data-action=\"2\" class=\"superform js-superform\">
\t\t<div class=\"
\t\t\tform-group
\t\t\ttype_string
\t\t\tfield_name
\t\t\t\t\t\t\t\trequired
\t\t\t\t\">
\t\t\t<input class=\"form-control\" name=\"field_name\" placeholder=\"Имя\" required=\"\" type=\"text\" value=\"\">
\t\t</div>
\t\t<div class=\"
\t\t\tform-group
\t\t\ttype_email
\t\t\tfield_email
\t\t\t\t\t\t\t\trequired
\t\t\t\t\">
\t\t\t<input class=\"form-control\" name=\"field_email\" placeholder=\"E-mail\" required=\"\" type=\"email\" value=\"\">
\t\t</div>
\t\t<div class=\"
\t\t\tform-group
\t\t\ttype_string
\t\t\tfield_phone
\t\t\t\t\t\t\">
\t\t\t<input class=\"form-control\" name=\"field_phone\" placeholder=\"Телефон\" type=\"text\" value=\"\">
\t\t</div>
\t\t<div class=\"
\t\t\tform-group
\t\t\ttype_string
\t\t\tfield_object_name
\t\t\t\t\t\t\">
\t\t\t<input class=\"form-control\" name=\"field_object_name\" placeholder=\"Название отеля\" type=\"text\" value=\"\">
\t\t</div>
\t\t<div class=\"
\t\t\tform-group
\t\t\ttype_string
\t\t\tfield_object_city
\t\t\t\t\t\t\">
\t\t\t<input class=\"form-control\" name=\"field_object_city\" placeholder=\"Город\" type=\"text\" value=\"\">
\t\t</div>
\t\t<div class=\"
\t\t\tform-group
\t\t\ttype_string
\t\t\tfield_object_site
\t\t\t\t\t\t\">
\t\t\t<input class=\"form-control\" name=\"field_object_site\" placeholder=\"Ссылка на сайт (если есть)\" type=\"text\" value=\"\">
\t\t</div>
\t\t<div class=\"
\t\t\tform-group
\t\t\ttype_checkbox
\t\t\tfield_policy
\t\t\t\t\t\t\t\trequired
\t\t\t\t\">
\t\t\t<input name=\"field_policy\" type=\"hidden\" value=\"\">
\t\t\t<div class=\"checkbox\">
\t\t\t\t<label>
\t\t\t\t\t<span class=\"checkbox-switch\"></span>
\t\t\t\t\t<input name=\"field_policy\" type=\"checkbox\" value=\"1\" required=\"\">
\t\t\t\t\tВы принимаете положения <a href=\"/policy\" target=\"_blank\">Политики конфиденциальности</a>
\t\t\t\t</label>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<input class=\"mbtn\" type=\"submit\" value=\"Отправить заявку\">
\t\t</div>
\t</form>
</div>";
    }

    public function getTemplateName()
    {
        return "form_partners";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* <div class="form__title">Оформление заявки</div>*/
/* <div class="form__body">*/
/* 	<form data-action="2" class="superform js-superform">*/
/* 		<div class="*/
/* 			form-group*/
/* 			type_string*/
/* 			field_name*/
/* 								required*/
/* 				">*/
/* 			<input class="form-control" name="field_name" placeholder="Имя" required="" type="text" value="">*/
/* 		</div>*/
/* 		<div class="*/
/* 			form-group*/
/* 			type_email*/
/* 			field_email*/
/* 								required*/
/* 				">*/
/* 			<input class="form-control" name="field_email" placeholder="E-mail" required="" type="email" value="">*/
/* 		</div>*/
/* 		<div class="*/
/* 			form-group*/
/* 			type_string*/
/* 			field_phone*/
/* 						">*/
/* 			<input class="form-control" name="field_phone" placeholder="Телефон" type="text" value="">*/
/* 		</div>*/
/* 		<div class="*/
/* 			form-group*/
/* 			type_string*/
/* 			field_object_name*/
/* 						">*/
/* 			<input class="form-control" name="field_object_name" placeholder="Название отеля" type="text" value="">*/
/* 		</div>*/
/* 		<div class="*/
/* 			form-group*/
/* 			type_string*/
/* 			field_object_city*/
/* 						">*/
/* 			<input class="form-control" name="field_object_city" placeholder="Город" type="text" value="">*/
/* 		</div>*/
/* 		<div class="*/
/* 			form-group*/
/* 			type_string*/
/* 			field_object_site*/
/* 						">*/
/* 			<input class="form-control" name="field_object_site" placeholder="Ссылка на сайт (если есть)" type="text" value="">*/
/* 		</div>*/
/* 		<div class="*/
/* 			form-group*/
/* 			type_checkbox*/
/* 			field_policy*/
/* 								required*/
/* 				">*/
/* 			<input name="field_policy" type="hidden" value="">*/
/* 			<div class="checkbox">*/
/* 				<label>*/
/* 					<span class="checkbox-switch"></span>*/
/* 					<input name="field_policy" type="checkbox" value="1" required="">*/
/* 					Вы принимаете положения <a href="/policy" target="_blank">Политики конфиденциальности</a>*/
/* 				</label>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="form-group">*/
/* 			<input class="mbtn" type="submit" value="Отправить заявку">*/
/* 		</div>*/
/* 	</form>*/
/* </div>*/
