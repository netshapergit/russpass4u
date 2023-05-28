<?php

/* _.admin.file */
class __TwigTemplate_3dd0c24d7e187fafa01c744473a9df528964d90cc76bbdd7859123392bb03a4d extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.admin.base", "_.admin.file", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'link' => array($this, 'block_link'),
            'fields' => array($this, 'block_fields'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.admin.base";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 21, "block" => 74);
        $filters = array("escape" => 6, "default" => 14);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'block'),
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
\t\t";
        // line 14
        echo "\t\taction=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "admin", array()), "html", null, true));
        echo "/";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "segments", array()), 1, array(), "array"), "html", null, true));
        echo "/";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), "")) : ("")), "html", null, true));
        echo "\"
\t\tclass=\"form-horizontal\"
\t\tmethod=\"post\"
\t\tng-controller=\"NetShaperAdminFormController\"
\t>

\t\t";
        // line 21
        echo "\t\t";
        if (((array_key_exists("item", $context)) ? (_twig_default_filter((isset($context["item"]) ? $context["item"] : null), null)) : (null))) {
            // line 22
            echo "\t\t\t<input name=\"_method\" type=\"hidden\" value=\"put\">
\t\t";
        }
        // line 24
        echo "
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-3\" ng-class=\"{'has-error': errors.id.length > 0}\">

\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input class=\"form-control\" name=\"name\" type=\"text\" value=\"{{ item.name }}\">
\t\t\t\t\t<div class=\"input-group-addon\" ng-bind=\"'.' + (item.id ? item.extension : extension)\"></div>
\t\t\t\t</div>
\t\t\t\t<p class=\"help-block\" ng-bind=\"error\" ng-repeat=\"error in errors.id\"></p>

\t\t\t</div>
\t\t\t<div class=\"col-sm-9\">

\t\t\t\t<div class=\"pull-right\">

\t\t\t\t\t<button class=\"btn btn-danger btn-sm\" id=\"destroy_button\" ng-show=\"item.id\" type=\"button\">
\t\t\t\t\t\t<span class=\"fa fa-trash-o\"></span>
\t\t\t\t\t\tУдалить
\t\t\t\t\t</button>

\t\t\t\t\t<a class=\"btn btn-warning btn-sm\" href=\"";
        // line 44
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "admin", array()), "html", null, true));
        echo "/";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "segments", array()), 1, array(), "array"), "html", null, true));
        echo "\">
\t\t\t\t\t\t<span class=\"fa fa-reply\"></span>
\t\t\t\t\t\tК списку
\t\t\t\t\t</a>

\t\t\t\t\t<button class=\"btn btn-primary btn-sm\" id=\"save_button\" ng-show=\"item.id\" type=\"submit\">
\t\t\t\t\t\t<span class=\"fa fa-save\"></span>
\t\t\t\t\t\tСохранить
\t\t\t\t\t</button>

\t\t\t\t\t<button class=\"btn btn-success btn-sm\" ng-show=\"!item.id\" type=\"submit\">
\t\t\t\t\t\t<span class=\"fa fa-plus\"></span>
\t\t\t\t\t\tСоздать
\t\t\t\t\t</button>

\t\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t\t<hr>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<ul class=\"nav nav-pills nav-stacked files\">
\t\t\t\t\t<li
\t\t\t\t\t\tng-class=\"{active: file.id === item.id}\"
\t\t\t\t\t\tng-repeat=\"file in items\"
\t\t\t\t\t>
\t\t\t\t\t\t<a ng-href=\"{{ url.admin }}/{{ request.segments[1] }}/{{ file.id }}/edit\">
\t\t\t\t\t\t\t";
        // line 74
        $this->displayBlock('link', $context, $blocks);
        // line 77
        echo "\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-sm-9\">

\t\t\t\t<div class=\"form-group\" ng-show=\"item.path\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<input class=\"form-control\" readonly type=\"text\" value=\"{{ item.path }}{{ item.id }}\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
        // line 89
        $this->displayBlock('fields', $context, $blocks);
        // line 100
        echo "
\t\t\t</div>
\t\t</div>

\t</form>

\t";
        // line 106
        if (((array_key_exists("item", $context)) ? (_twig_default_filter((isset($context["item"]) ? $context["item"] : null), null)) : (null))) {
            // line 107
            echo "\t\t<form
\t\t\taction=\"";
            // line 108
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
        // line 116
        echo "
";
    }

    // line 74
    public function block_link($context, array $blocks = array())
    {
        // line 75
        echo "\t\t\t\t\t\t\t\t<span ng-bind=\"file.id\"></span>
\t\t\t\t\t\t\t";
    }

    // line 89
    public function block_fields($context, array $blocks = array())
    {
        // line 90
        echo "\t\t\t\t\t<ns-code
\t\t\t\t\t\talias=\"code\"
\t\t\t\t\t\tdefault=\"{{ default }}\"
\t\t\t\t\t\titem=\"item\"
\t\t\t\t\t\tmethod=\"put\"
\t\t\t\t\t\tmode=\"{{ mode }}\"
\t\t\t\t\t\tsize=\"12\"
\t\t\t\t\t\turl=\"{{ item.id ? url.admin + '/' + request.segments[1] + '/' + item.id : null }}\"
\t\t\t\t\t></ns-code>
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "_.admin.file";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 90,  216 => 89,  211 => 75,  208 => 74,  203 => 116,  188 => 108,  185 => 107,  183 => 106,  175 => 100,  173 => 89,  159 => 77,  157 => 74,  122 => 44,  100 => 24,  96 => 22,  93 => 21,  79 => 14,  75 => 11,  72 => 10,  65 => 6,  61 => 5,  58 => 4,  55 => 3,  11 => 1,);
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
/* 		{# TODO getFormAction() #}*/
/* 		action="{$ url.admin $}/{$ request.segments[1] $}/{$ item.id|default('') $}"*/
/* 		class="form-horizontal"*/
/* 		method="post"*/
/* 		ng-controller="NetShaperAdminFormController"*/
/* 	>*/
/* */
/* 		{# TODO getFormMethod() #}*/
/* 		{% if item|default(null) %}*/
/* 			<input name="_method" type="hidden" value="put">*/
/* 		{% endif %}*/
/* */
/* 		<div class="row">*/
/* 			<div class="col-sm-3" ng-class="{'has-error': errors.id.length > 0}">*/
/* */
/* 				<div class="input-group">*/
/* 					<input class="form-control" name="name" type="text" value="{{ item.name }}">*/
/* 					<div class="input-group-addon" ng-bind="'.' + (item.id ? item.extension : extension)"></div>*/
/* 				</div>*/
/* 				<p class="help-block" ng-bind="error" ng-repeat="error in errors.id"></p>*/
/* */
/* 			</div>*/
/* 			<div class="col-sm-9">*/
/* */
/* 				<div class="pull-right">*/
/* */
/* 					<button class="btn btn-danger btn-sm" id="destroy_button" ng-show="item.id" type="button">*/
/* 						<span class="fa fa-trash-o"></span>*/
/* 						Удалить*/
/* 					</button>*/
/* */
/* 					<a class="btn btn-warning btn-sm" href="{$ url.admin $}/{$ request.segments[1] $}">*/
/* 						<span class="fa fa-reply"></span>*/
/* 						К списку*/
/* 					</a>*/
/* */
/* 					<button class="btn btn-primary btn-sm" id="save_button" ng-show="item.id" type="submit">*/
/* 						<span class="fa fa-save"></span>*/
/* 						Сохранить*/
/* 					</button>*/
/* */
/* 					<button class="btn btn-success btn-sm" ng-show="!item.id" type="submit">*/
/* 						<span class="fa fa-plus"></span>*/
/* 						Создать*/
/* 					</button>*/
/* */
/* 				</div>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<hr>*/
/* */
/* 		<div class="row">*/
/* 			<div class="col-sm-3">*/
/* 				<ul class="nav nav-pills nav-stacked files">*/
/* 					<li*/
/* 						ng-class="{active: file.id === item.id}"*/
/* 						ng-repeat="file in items"*/
/* 					>*/
/* 						<a ng-href="{{ url.admin }}/{{ request.segments[1] }}/{{ file.id }}/edit">*/
/* 							{% block link %}*/
/* 								<span ng-bind="file.id"></span>*/
/* 							{% endblock %}*/
/* 						</a>*/
/* 					</li>*/
/* 				</ul>*/
/* 			</div>*/
/* 			<div class="col-sm-9">*/
/* */
/* 				<div class="form-group" ng-show="item.path">*/
/* 					<div class="col-sm-12">*/
/* 						<input class="form-control" readonly type="text" value="{{ item.path }}{{ item.id }}">*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				{% block fields %}*/
/* 					<ns-code*/
/* 						alias="code"*/
/* 						default="{{ default }}"*/
/* 						item="item"*/
/* 						method="put"*/
/* 						mode="{{ mode }}"*/
/* 						size="12"*/
/* 						url="{{ item.id ? url.admin + '/' + request.segments[1] + '/' + item.id : null }}"*/
/* 					></ns-code>*/
/* 				{% endblock %}*/
/* */
/* 			</div>*/
/* 		</div>*/
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
