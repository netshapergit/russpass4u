<?php

/* _.admin.grid.rows */
class __TwigTemplate_74b5618e23744197ed41e0bf0070498bdd92b128aa570057bcfc3867796880de extends TwigBridge\Twig\Template
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
        $tags = array("if" => 65, "include" => 66);
        $filters = array("escape" => 1, "default" => 1);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'include'),
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
        echo "<div class=\"grid empty\" ng-repeat-start=\"position in ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((array_key_exists("parentVar", $context)) ? (_twig_default_filter((isset($context["parentVar"]) ? $context["parentVar"] : null), "position")) : ("position")), "html", null, true));
        echo ".sub_positions\">
\t<div class=\"grid-cover\">
\t\t<div class=\"grid-cascade\">
\t\t\t<div class=\"grid-row\">
\t\t\t\t<div class=\"grid-col empty\" ng-drop=\"true\" ng-drop-success=\"onDrop(\$data, \$event, ROW, ";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((array_key_exists("parentVar", $context)) ? (_twig_default_filter((isset($context["parentVar"]) ? $context["parentVar"] : null), "position")) : ("position")), "html", null, true));
        echo ", position)\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div
\tclass=\"grid filled\"
\tng-class=\"{
\t\tinactive: position !== edited && position.active !== '1',
\t\tselected: position === edited
\t}\"
\tng-repeat-end
>
\t<div class=\"meta\">
\t\t<span
\t\t\tclass=\"label label-danger drag\"
\t\t\tng-drag=\"true\"
\t\t\tng-drag-data=\"position\"
\t\t\tng-drag-success=\"onDrag(\$data, \$event, ROW, ";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((array_key_exists("parentVar", $context)) ? (_twig_default_filter((isset($context["parentVar"]) ? $context["parentVar"] : null), "position")) : ("position")), "html", null, true));
        echo ")\"
\t\t>
\t\t\t<span ng-bind=\"position.alias\"></span>
\t\t</span>
\t\t<span class=\"label label-danger pointer\" ng-click=\"setUp(\$event, ROW, ";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((array_key_exists("parentVar", $context)) ? (_twig_default_filter((isset($context["parentVar"]) ? $context["parentVar"] : null), "position")) : ("position")), "html", null, true));
        echo ", position)\">
\t\t\t<span class=\"fa fa-cog\"></span>
\t\t</span>
\t\t";
        // line 31
        echo "\t</div>
\t<div class=\"grid-cover\">
\t\t<div class=\"grid-cascade\">
\t\t\t<div class=\"grid-row\">
\t\t\t\t<div
\t\t\t\t\tclass=\"grid-col empty\"
\t\t\t\t\tng-drop=\"true\"
\t\t\t\t\tng-drop-success=\"onDrop(\$data, \$event, COL, position, subPosition)\"
\t\t\t\t\tng-repeat-start=\"subPosition in position.sub_positions\"
\t\t\t\t></div>
\t\t\t\t<div
\t\t\t\t\tclass=\"grid-col filled\"
\t\t\t\t\tng-class=\"{
\t\t\t\t\t\tinactive: subPosition !== edited && subPosition.active !== '1',
\t\t\t\t\t\tselected: subPosition === edited
\t\t\t\t\t}\"
\t\t\t\t\tng-repeat-end
\t\t\t\t>
\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t<span
\t\t\t\t\t\t\tclass=\"label label-success drag\"
\t\t\t\t\t\t\tng-drag=\"true\"
\t\t\t\t\t\t\tng-drag-data=\"subPosition\"
\t\t\t\t\t\t\tng-drag-success=\"onDrag(\$data, \$event, COL, position)\"
\t\t\t\t\t\t>
\t\t\t\t\t\t\t<span ng-bind=\"subPosition.alias\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"label label-success pointer\" ng-click=\"setUp(\$event, COL, position, subPosition)\">
\t\t\t\t\t\t\t<span class=\"fa fa-cog\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
        // line 62
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div ng-show=\"subPosition.sub_positions.length > 0\">
\t\t\t\t\t\t";
        // line 65
        echo "\t\t\t\t\t\t";
        if ((((array_key_exists("level", $context)) ? (_twig_default_filter((isset($context["level"]) ? $context["level"] : null), 0)) : (0)) < 5)) {
            // line 66
            echo "\t\t\t\t\t\t\t";
            $this->loadTemplate("_.admin.grid.rows", "_.admin.grid.rows", 66)->display(array_merge($context, array("level" => (((array_key_exists("level", $context)) ? (_twig_default_filter((isset($context["level"]) ? $context["level"] : null), 0)) : (0)) + 1), "parentVar" => "subPosition")));
            // line 67
            echo "\t\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div ng-show=\"subPosition.sub_positions.length === 0\">
\t\t\t\t\t\t";
        // line 70
        $this->loadTemplate("_.admin.grid.modules", "_.admin.grid.rows", 70)->display(array_merge($context, array("positionVar" => "subPosition")));
        // line 71
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div
\t\t\t\t\tclass=\"grid-col empty\"
\t\t\t\t\tng-drop=\"true\"
\t\t\t\t\tng-drop-success=\"onDrop(\$data, \$event, COL, position)\"
\t\t\t\t></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"grid empty ";
        // line 82
        if ((((array_key_exists("level", $context)) ? (_twig_default_filter((isset($context["level"]) ? $context["level"] : null), 0)) : (0)) == 0)) {
            echo "default";
        }
        echo "\">
\t<div class=\"grid-cover\">
\t\t<div class=\"grid-cascade\">
\t\t\t<div class=\"grid-row\">
\t\t\t\t<div
\t\t\t\t\tclass=\"grid-col empty ";
        // line 87
        if ((((array_key_exists("level", $context)) ? (_twig_default_filter((isset($context["level"]) ? $context["level"] : null), 0)) : (0)) == 0)) {
            echo "target";
        }
        echo "\"
\t\t\t\t\tng-drop=\"true\"
\t\t\t\t\tng-drop-success=\"onDrop(\$data, \$event, ROW, ";
        // line 89
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((array_key_exists("parentVar", $context)) ? (_twig_default_filter((isset($context["parentVar"]) ? $context["parentVar"] : null), "position")) : ("position")), "html", null, true));
        echo ")\"
\t\t\t\t>
\t\t\t\t\t";
        // line 91
        if ((((array_key_exists("level", $context)) ? (_twig_default_filter((isset($context["level"]) ? $context["level"] : null), 0)) : (0)) == 0)) {
            // line 92
            echo "\t\t\t\t\t\t<span class=\"fa fa-hand-o-left fa-4x\"></span>
\t\t\t\t\t\t<span class=\"fa fa-hand-o-down fa-4x\"></span>
\t\t\t\t\t";
        }
        // line 95
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "_.admin.grid.rows";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 95,  173 => 92,  171 => 91,  166 => 89,  159 => 87,  149 => 82,  136 => 71,  134 => 70,  130 => 68,  127 => 67,  124 => 66,  121 => 65,  117 => 62,  85 => 31,  79 => 27,  72 => 23,  51 => 5,  43 => 1,);
    }
}
/* <div class="grid empty" ng-repeat-start="position in {$ parentVar|default('position') $}.sub_positions">*/
/* 	<div class="grid-cover">*/
/* 		<div class="grid-cascade">*/
/* 			<div class="grid-row">*/
/* 				<div class="grid-col empty" ng-drop="true" ng-drop-success="onDrop($data, $event, ROW, {$ parentVar|default('position') $}, position)"></div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <div*/
/* 	class="grid filled"*/
/* 	ng-class="{*/
/* 		inactive: position !== edited && position.active !== '1',*/
/* 		selected: position === edited*/
/* 	}"*/
/* 	ng-repeat-end*/
/* >*/
/* 	<div class="meta">*/
/* 		<span*/
/* 			class="label label-danger drag"*/
/* 			ng-drag="true"*/
/* 			ng-drag-data="position"*/
/* 			ng-drag-success="onDrag($data, $event, ROW, {$ parentVar|default('position') $})"*/
/* 		>*/
/* 			<span ng-bind="position.alias"></span>*/
/* 		</span>*/
/* 		<span class="label label-danger pointer" ng-click="setUp($event, ROW, {$ parentVar|default('position') $}, position)">*/
/* 			<span class="fa fa-cog"></span>*/
/* 		</span>*/
/* 		{#<input class="form-control input-sm" ng-model="position.alias" type="text">#}*/
/* 	</div>*/
/* 	<div class="grid-cover">*/
/* 		<div class="grid-cascade">*/
/* 			<div class="grid-row">*/
/* 				<div*/
/* 					class="grid-col empty"*/
/* 					ng-drop="true"*/
/* 					ng-drop-success="onDrop($data, $event, COL, position, subPosition)"*/
/* 					ng-repeat-start="subPosition in position.sub_positions"*/
/* 				></div>*/
/* 				<div*/
/* 					class="grid-col filled"*/
/* 					ng-class="{*/
/* 						inactive: subPosition !== edited && subPosition.active !== '1',*/
/* 						selected: subPosition === edited*/
/* 					}"*/
/* 					ng-repeat-end*/
/* 				>*/
/* 					<div class="meta">*/
/* 						<span*/
/* 							class="label label-success drag"*/
/* 							ng-drag="true"*/
/* 							ng-drag-data="subPosition"*/
/* 							ng-drag-success="onDrag($data, $event, COL, position)"*/
/* 						>*/
/* 							<span ng-bind="subPosition.alias"></span>*/
/* 						</span>*/
/* 						<span class="label label-success pointer" ng-click="setUp($event, COL, position, subPosition)">*/
/* 							<span class="fa fa-cog"></span>*/
/* 						</span>*/
/* 						{#<input class="form-control input-sm" ng-model="subPosition.alias" type="text">#}*/
/* 					</div>*/
/* 					<div ng-show="subPosition.sub_positions.length > 0">*/
/* 						{# TODO nested directive #}*/
/* 						{% if level|default(0) < 5 %}*/
/* 							{% include '_.admin.grid.rows' with { 'level': level|default(0) + 1, 'parentVar': 'subPosition' } %}*/
/* 						{% endif %}*/
/* 					</div>*/
/* 					<div ng-show="subPosition.sub_positions.length === 0">*/
/* 						{% include '_.admin.grid.modules' with { 'positionVar': 'subPosition' } %}*/
/* 					</div>*/
/* 				</div>*/
/* 				<div*/
/* 					class="grid-col empty"*/
/* 					ng-drop="true"*/
/* 					ng-drop-success="onDrop($data, $event, COL, position)"*/
/* 				></div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <div class="grid empty {% if level|default(0) == 0 %}default{% endif %}">*/
/* 	<div class="grid-cover">*/
/* 		<div class="grid-cascade">*/
/* 			<div class="grid-row">*/
/* 				<div*/
/* 					class="grid-col empty {% if level|default(0) == 0 %}target{% endif %}"*/
/* 					ng-drop="true"*/
/* 					ng-drop-success="onDrop($data, $event, ROW, {$ parentVar|default('position') $})"*/
/* 				>*/
/* 					{% if level|default(0) == 0 %}*/
/* 						<span class="fa fa-hand-o-left fa-4x"></span>*/
/* 						<span class="fa fa-hand-o-down fa-4x"></span>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
