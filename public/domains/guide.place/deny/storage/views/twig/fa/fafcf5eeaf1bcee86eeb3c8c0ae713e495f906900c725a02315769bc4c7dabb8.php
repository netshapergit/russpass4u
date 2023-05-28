<?php

/* _.admin.grid.modules */
class __TwigTemplate_e13f2b52292fe9713f79bd5a20738c7fee18642a5bdfe5d84b268f1f376f0b3c extends TwigBridge\Twig\Template
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
        $filters = array("escape" => 4, "default" => 4);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo "<div
\tclass=\"module empty\"
\tng-drop=\"true\"
\tng-drop-success=\"onDrop(\$data, \$event, MODULE, ";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((array_key_exists("positionVar", $context)) ? (_twig_default_filter((isset($context["positionVar"]) ? $context["positionVar"] : null), "position")) : ("position")), "html", null, true));
        echo ", module)\"
\tng-repeat-start=\"module in ";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((array_key_exists("positionVar", $context)) ? (_twig_default_filter((isset($context["positionVar"]) ? $context["positionVar"] : null), "position")) : ("position")), "html", null, true));
        echo ".modules\"
></div>
<div
\tclass=\"module filled\"
\tng-class=\"{
\t\tinactive: module !== edited && module.active !== '1',
\t\tselected: module === edited
\t}\"
\tng-repeat-end
>
\t<span
\t\tclass=\"label label-info drag\"
\t\tng-drag=\"true\"
\t\tng-drag-data=\"module\"
\t\tng-drag-success=\"onDrag(\$data, \$event, MODULE, ";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((array_key_exists("positionVar", $context)) ? (_twig_default_filter((isset($context["positionVar"]) ? $context["positionVar"] : null), "position")) : ("position")), "html", null, true));
        echo ")\"
\t>
\t\t<span ng-bind=\"module.name\" ng-show=\"module.name\"></span>
\t\t<span ng-bind=\"module.module_type.name\" ng-show=\"!module.name\"></span>
\t</span>
\t<span class=\"label label-info pointer\" ng-click=\"setUp(\$event, MODULE, ";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((array_key_exists("positionVar", $context)) ? (_twig_default_filter((isset($context["positionVar"]) ? $context["positionVar"] : null), "position")) : ("position")), "html", null, true));
        echo ", module)\">
\t\t<span class=\"fa fa-cog\"></span>
\t</span>
</div>
<div
\tclass=\"module empty target\"
\tng-drop=\"true\"
\tng-drop-success=\"onDrop(\$data, \$event, MODULE, ";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((array_key_exists("positionVar", $context)) ? (_twig_default_filter((isset($context["positionVar"]) ? $context["positionVar"] : null), "position")) : ("position")), "html", null, true));
        echo ")\"
></div>
";
    }

    public function getTemplateName()
    {
        return "_.admin.grid.modules";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 31,  77 => 24,  69 => 19,  52 => 5,  48 => 4,  43 => 1,);
    }
}
/* <div*/
/* 	class="module empty"*/
/* 	ng-drop="true"*/
/* 	ng-drop-success="onDrop($data, $event, MODULE, {$ positionVar|default('position') $}, module)"*/
/* 	ng-repeat-start="module in {$ positionVar|default('position') $}.modules"*/
/* ></div>*/
/* <div*/
/* 	class="module filled"*/
/* 	ng-class="{*/
/* 		inactive: module !== edited && module.active !== '1',*/
/* 		selected: module === edited*/
/* 	}"*/
/* 	ng-repeat-end*/
/* >*/
/* 	<span*/
/* 		class="label label-info drag"*/
/* 		ng-drag="true"*/
/* 		ng-drag-data="module"*/
/* 		ng-drag-success="onDrag($data, $event, MODULE, {$ positionVar|default('position') $})"*/
/* 	>*/
/* 		<span ng-bind="module.name" ng-show="module.name"></span>*/
/* 		<span ng-bind="module.module_type.name" ng-show="!module.name"></span>*/
/* 	</span>*/
/* 	<span class="label label-info pointer" ng-click="setUp($event, MODULE, {$ positionVar|default('position') $}, module)">*/
/* 		<span class="fa fa-cog"></span>*/
/* 	</span>*/
/* </div>*/
/* <div*/
/* 	class="module empty target"*/
/* 	ng-drop="true"*/
/* 	ng-drop-success="onDrop($data, $event, MODULE, {$ positionVar|default('position') $})"*/
/* ></div>*/
/* */
