<?php

/* auth_form */
class __TwigTemplate_c29d33e5e95da7531d0aae8a870213b1d767f000256eed726eb88308c325cd33 extends TwigBridge\Twig\Template
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
        echo "<form action=\"/auth/login\" class=\"auth js-auth-form\" method=\"post\">
\t<div class=\"form-group\">
\t\t<input class=\"form__data form-control\" name=\"login\" placeholder=\"Логин\" type=\"text\" value=\"\">
\t</div>
\t<div class=\"form-group\">
\t\t<input class=\"form__data form-control\" name=\"password\" placeholder=\"Пароль\" type=\"password\">
\t</div>
\t<div class=\"form-group form-group--tac\" >
\t\t<button class=\"form__button btn btn-main btn-reset\" type=\"submit\">Войти</button>
\t</div>
\t<div class=\"form-group hidden\">
\t\t<a href=\"#\" class=\"mbtn mbtn--flat js-reg\">Зарегистрироваться</a>
\t</div>
\t<div class=\"form-group hidden\">
\t\t<a href=\"#\" class=\"mbtn mbtn--flat js-pas\">Забыли пароль?</a>
\t</div>
</form>";
    }

    public function getTemplateName()
    {
        return "auth_form";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* <form action="/auth/login" class="auth js-auth-form" method="post">*/
/* 	<div class="form-group">*/
/* 		<input class="form__data form-control" name="login" placeholder="Логин" type="text" value="">*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		<input class="form__data form-control" name="password" placeholder="Пароль" type="password">*/
/* 	</div>*/
/* 	<div class="form-group form-group--tac" >*/
/* 		<button class="form__button btn btn-main btn-reset" type="submit">Войти</button>*/
/* 	</div>*/
/* 	<div class="form-group hidden">*/
/* 		<a href="#" class="mbtn mbtn--flat js-reg">Зарегистрироваться</a>*/
/* 	</div>*/
/* 	<div class="form-group hidden">*/
/* 		<a href="#" class="mbtn mbtn--flat js-pas">Забыли пароль?</a>*/
/* 	</div>*/
/* </form>*/
