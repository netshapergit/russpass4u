<?php

/* _.admin.grid.edit */
class __TwigTemplate_126d66a162d369b7facf813fb1a3ce6811cab1017cd480ff65d2cfe5de5aca77 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.admin.base", "_.admin.grid.edit", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.admin.base";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("include" => 12);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"/packages/netshaper/admin/app/controllers/grid.css\">
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "\t<div class=\"controller-grid\" ng-controller=\"NetShaperAdminGridController\">

\t\t<div class=\"layout\" ng-click=\"setUp()\">
\t\t\t";
        // line 12
        $this->loadTemplate("_.admin.grid.rows", "_.admin.grid.edit", 12)->display(array_merge($context, array("parentVar" => "rootPosition")));
        // line 13
        echo "\t\t\t<div class=\"dummy\">
\t\t\t\t<div class=\"meta\">
\t\t\t\t\t<div class=\"label label-warning\">
\t\t\t\t\t\tdummy
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 19
        $this->loadTemplate("_.admin.grid.modules", "_.admin.grid.edit", 19)->display(array_merge($context, array("positionVar" => "dummyPosition")));
        // line 20
        echo "\t\t\t</div>
\t\t</div>

\t\t";
        // line 24
        echo "\t\t\t";
        // line 25
        echo "\t\t\t\t<div class=\"modal-content side\">
\t\t\t\t\t";
        // line 36
        echo "\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<ul class=\"nav nav-stacked modules\">
\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\tclass=\"module drag\"
\t\t\t\t\t\t\t\tng-drag=\"true\"
\t\t\t\t\t\t\t\tng-drag-data=\"moduleType\"
\t\t\t\t\t\t\t\tng-drag-success=\"onDrag(\$data, \$event, MODULE_TYPE)\"
\t\t\t\t\t\t\t\tng-repeat=\"moduleType in list.moduleTypes\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<a ng-bind=\"moduleType.name\"></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        // line 51
        echo "\t\t";
        // line 52
        echo "
\t\t";
        // line 53
        $this->loadTemplate("_.admin.grid.settings", "_.admin.grid.edit", 53)->display($context);
        // line 54
        echo "
\t</div>
";
    }

    public function getTemplateName()
    {
        return "_.admin.grid.edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 54,  115 => 53,  112 => 52,  110 => 51,  94 => 36,  91 => 25,  89 => 24,  84 => 20,  82 => 19,  74 => 13,  72 => 12,  67 => 9,  64 => 8,  56 => 4,  53 => 3,  11 => 1,);
    }
}
/* {% extends '_.admin.base' %}*/
/* */
/* {% block head %}*/
/* 	{$ parent() $}*/
/* 	<link rel="stylesheet" href="/packages/netshaper/admin/app/controllers/grid.css">*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* 	<div class="controller-grid" ng-controller="NetShaperAdminGridController">*/
/* */
/* 		<div class="layout" ng-click="setUp()">*/
/* 			{% include '_.admin.grid.rows' with { 'parentVar': 'rootPosition' } %}*/
/* 			<div class="dummy">*/
/* 				<div class="meta">*/
/* 					<div class="label label-warning">*/
/* 						dummy*/
/* 					</div>*/
/* 				</div>*/
/* 				{% include '_.admin.grid.modules' with { 'positionVar': 'dummyPosition' } %}*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		{#<div class="modal">#}*/
/* 			{#<div class="modal-dialog side">#}*/
/* 				<div class="modal-content side">*/
/* 					{#*/
/* 					<div class="modal-header">*/
/* 						<select*/
/* 							class="form-control input-sm"*/
/* 							ng-change="redirect()"*/
/* 							ng-model="item.id"*/
/* 							ng-options="item.page.id as item.page.title for item in items"*/
/* 						></select>*/
/* 					</div>*/
/* 					#}*/
/* 					<div class="modal-body">*/
/* 						<ul class="nav nav-stacked modules">*/
/* 							<li*/
/* 								class="module drag"*/
/* 								ng-drag="true"*/
/* 								ng-drag-data="moduleType"*/
/* 								ng-drag-success="onDrag($data, $event, MODULE_TYPE)"*/
/* 								ng-repeat="moduleType in list.moduleTypes"*/
/* 							>*/
/* 								<a ng-bind="moduleType.name"></a>*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>*/
/* 			{#</div>#}*/
/* 		{#</div>#}*/
/* */
/* 		{% include '_.admin.grid.settings' %}*/
/* */
/* 	</div>*/
/* {% endblock %}*/
/* */
