<?php

/* _.admin.settings */
class __TwigTemplate_68daa151b224000ee491bd7087f6eaaf56379c3e299d5494f30a5e964ba39967 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.admin.base", "_.admin.settings", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fields' => array($this, 'block_fields'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.admin.base";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 28);
        $filters = array("escape" => 7);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block'),
                array('escape'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
\t<form
\t\t";
        // line 7
        echo "\t\taction=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "admin", array()), "html", null, true));
        echo "/";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "segments", array()), 1, array(), "array"), "html", null, true));
        echo "/\"
\t\tclass=\"form-horizontal\"
\t\tmethod=\"post\"
\t>

\t\t<input name=\"_method\" type=\"hidden\" value=\"put\">

\t\t<div class=\"pull-right\">
\t\t\t<button class=\"btn btn-primary btn-sm\" id=\"save_button\" type=\"submit\">
\t\t\t\t<span class=\"fa fa-save\"></span>
\t\t\t\tСохранить
\t\t\t</button>
\t\t</div>

\t\t<h3>
\t\t\t<span ng-bind=\"'Настройки'\"></span>
\t\t\t<span ng-bind=\"text.formHeader\" ng-show=\"text.formHeader\"></span>
\t\t</h3>

\t\t<hr>

\t\t";
        // line 28
        $this->displayBlock('fields', $context, $blocks);
        // line 29
        echo "
\t</form>

";
    }

    // line 28
    public function block_fields($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_.admin.settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 28,  89 => 29,  87 => 28,  60 => 7,  56 => 4,  53 => 3,  11 => 1,);
    }
}
/* {% extends '_.admin.base' %}*/
/* */
/* {% block content %}*/
/* */
/* 	<form*/
/* 		{# TODO getFormAction() #}*/
/* 		action="{$ url.admin $}/{$ request.segments[1] $}/"*/
/* 		class="form-horizontal"*/
/* 		method="post"*/
/* 	>*/
/* */
/* 		<input name="_method" type="hidden" value="put">*/
/* */
/* 		<div class="pull-right">*/
/* 			<button class="btn btn-primary btn-sm" id="save_button" type="submit">*/
/* 				<span class="fa fa-save"></span>*/
/* 				Сохранить*/
/* 			</button>*/
/* 		</div>*/
/* */
/* 		<h3>*/
/* 			<span ng-bind="'Настройки'"></span>*/
/* 			<span ng-bind="text.formHeader" ng-show="text.formHeader"></span>*/
/* 		</h3>*/
/* */
/* 		<hr>*/
/* */
/* 		{% block fields %}{% endblock %}*/
/* */
/* 	</form>*/
/* */
/* {% endblock %}*/
/* */
