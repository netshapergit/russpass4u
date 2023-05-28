<?php

/* _.admin.form */
class __TwigTemplate_7466353b66dbe90c478f2a9de9d1c99eeb746f7e2ed2a41f2390db9608697d9c extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.admin.base", "_.admin.form", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'buttons' => array($this, 'block_buttons'),
            'fields' => array($this, 'block_fields'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.admin.base";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 23, "if" => 64);
        $filters = array("escape" => 6, "default" => 64);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'if'),
                array('escape', 'default'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "
\t";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
\t<script src=\"/packages/netshaper/admin/js/form.js?v=";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>

";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
\t<form
\t\taction=\"{{ getFormAction() }}\"
\t\tclass=\"form-horizontal\"
\t\tmethod=\"post\"
\t\tng-controller=\"NetShaperAdminFormController\"
\t>

\t\t<input name=\"_method\" type=\"hidden\" value=\"{{ getFormMethod() }}\">

\t\t<div class=\"pull-right\">

\t\t\t";
        // line 23
        $this->displayBlock('buttons', $context, $blocks);
        // line 24
        echo "
\t\t\t<button class=\"btn btn-danger btn-sm\" id=\"destroy_button\" ng-show=\"actions.delete && item.id\" type=\"button\">
\t\t\t\t<span class=\"fa fa-trash-o\"></span>
\t\t\t\tУдалить
\t\t\t</button>

\t\t\t<a class=\"btn btn-warning btn-sm\" href=\"";
        // line 30
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "admin", array()), "html", null, true));
        echo "/";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "segments", array()), 1, array(), "array"), "html", null, true));
        echo "\">
\t\t\t\t<span class=\"fa fa-reply\"></span>
\t\t\t\tК списку
\t\t\t</a>

\t\t\t<button class=\"btn btn-primary btn-sm\" id=\"save_button\" ng-show=\"actions.edit && item.id\" type=\"submit\">
\t\t\t\t<span class=\"fa fa-save\"></span>
\t\t\t\tСохранить
\t\t\t</button>

\t\t\t<button class=\"btn btn-success btn-sm\" ng-click=\"saveAs()\" ng-show=\"actions.create && item.id\" type=\"submit\">
\t\t\t\t<span class=\"fa fa-save\"></span>
\t\t\t\tСохранить как
\t\t\t</button>

\t\t\t<button class=\"btn btn-success btn-sm\" ng-show=\"actions.create && !item.id\" type=\"submit\">
\t\t\t\t<span class=\"fa fa-plus\"></span>
\t\t\t\tСоздать
\t\t\t</button>

\t\t</div>

\t\t<h3>
\t\t\t<span ng-bind=\"'Редактирование'\" ng-show=\"item.id\"></span>
\t\t\t<span ng-bind=\"'Создание'\" ng-show=\"!item.id\"></span>
\t\t\t<span ng-bind=\"text.formHeader\" ng-show=\"text.formHeader\"></span>
\t\t</h3>

\t\t<hr>

\t\t";
        // line 60
        $this->displayBlock('fields', $context, $blocks);
        // line 61
        echo "
\t</form>

\t";
        // line 64
        if (((array_key_exists("item", $context)) ? (_twig_default_filter((isset($context["item"]) ? $context["item"] : null), null)) : (null))) {
            // line 65
            echo "\t\t<form
\t\t\taction=\"";
            // line 66
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "admin", array()), "html", null, true));
            echo "/";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "segments", array()), 1, array(), "array"), "html", null, true));
            echo "/";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), "html", null, true));
            echo "\"
\t\t\tclass=\"display-none\"
\t\t\tid=\"destroy_form\"
\t\t\tmethod=\"post\"
\t\t>
\t\t\t<input name=\"_method\" type=\"hidden\" value=\"delete\">
\t\t</form>
\t";
        }
        // line 74
        echo "
";
    }

    // line 23
    public function block_buttons($context, array $blocks = array())
    {
    }

    // line 60
    public function block_fields($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_.admin.form";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 60,  166 => 23,  161 => 74,  146 => 66,  143 => 65,  141 => 64,  136 => 61,  134 => 60,  99 => 30,  91 => 24,  89 => 23,  75 => 11,  72 => 10,  65 => 6,  61 => 5,  58 => 4,  55 => 3,  11 => 1,);
    }
}
/* {% extends '_.admin.base' %}*/
/* */
/* {% block head %}*/
/* */
/* 	{$ parent() $}*/
/* 	<script src="/packages/netshaper/admin/js/form.js?v={$ V $}"></script>*/
/* */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* 	<form*/
/* 		action="{{ getFormAction() }}"*/
/* 		class="form-horizontal"*/
/* 		method="post"*/
/* 		ng-controller="NetShaperAdminFormController"*/
/* 	>*/
/* */
/* 		<input name="_method" type="hidden" value="{{ getFormMethod() }}">*/
/* */
/* 		<div class="pull-right">*/
/* */
/* 			{% block buttons %}{% endblock %}*/
/* */
/* 			<button class="btn btn-danger btn-sm" id="destroy_button" ng-show="actions.delete && item.id" type="button">*/
/* 				<span class="fa fa-trash-o"></span>*/
/* 				Удалить*/
/* 			</button>*/
/* */
/* 			<a class="btn btn-warning btn-sm" href="{$ url.admin $}/{$ request.segments[1] $}">*/
/* 				<span class="fa fa-reply"></span>*/
/* 				К списку*/
/* 			</a>*/
/* */
/* 			<button class="btn btn-primary btn-sm" id="save_button" ng-show="actions.edit && item.id" type="submit">*/
/* 				<span class="fa fa-save"></span>*/
/* 				Сохранить*/
/* 			</button>*/
/* */
/* 			<button class="btn btn-success btn-sm" ng-click="saveAs()" ng-show="actions.create && item.id" type="submit">*/
/* 				<span class="fa fa-save"></span>*/
/* 				Сохранить как*/
/* 			</button>*/
/* */
/* 			<button class="btn btn-success btn-sm" ng-show="actions.create && !item.id" type="submit">*/
/* 				<span class="fa fa-plus"></span>*/
/* 				Создать*/
/* 			</button>*/
/* */
/* 		</div>*/
/* */
/* 		<h3>*/
/* 			<span ng-bind="'Редактирование'" ng-show="item.id"></span>*/
/* 			<span ng-bind="'Создание'" ng-show="!item.id"></span>*/
/* 			<span ng-bind="text.formHeader" ng-show="text.formHeader"></span>*/
/* 		</h3>*/
/* */
/* 		<hr>*/
/* */
/* 		{% block fields %}{% endblock %}*/
/* */
/* 	</form>*/
/* */
/* 	{% if item|default(null) %}*/
/* 		<form*/
/* 			action="{$ url.admin $}/{$ request.segments[1] $}/{$ item.id $}"*/
/* 			class="display-none"*/
/* 			id="destroy_form"*/
/* 			method="post"*/
/* 		>*/
/* 			<input name="_method" type="hidden" value="delete">*/
/* 		</form>*/
/* 	{% endif %}*/
/* */
/* {% endblock %}*/
/* */
