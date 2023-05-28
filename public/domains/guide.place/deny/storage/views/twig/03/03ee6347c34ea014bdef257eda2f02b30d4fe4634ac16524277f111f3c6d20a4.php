<?php

/* _.admin.grid.settings */
class __TwigTemplate_369ac235d682b4b0d7b9a912c11f1af6bed23835d65930de7807c24b663772c6 extends TwigBridge\Twig\Template
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

        // line 2
        echo "\t";
        // line 3
        echo "\t\t<div class=\"modal-content settings\" ng-show=\"edited\" role=\"dialog\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button class=\"close\" ng-click=\"setUp()\">
\t\t\t\t\t&times;
\t\t\t\t</button>
\t\t\t\t<h4 class=\"modal-title\">
\t\t\t\t\t<span class=\"fa fa-cog\"></span>
\t\t\t\t\t<span ng-show=\"mode === ROW\">Ряд</span>
\t\t\t\t\t<span ng-show=\"mode === COL\">Позиция</span>
\t\t\t\t\t<span ng-bind=\"edited.module_type.name\" ng-show=\"mode === MODULE\"></span>
\t\t\t\t</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<form class=\"form-horizontal\">
\t\t\t\t\t<div ng-show=\"mode === ROW || mode === COL\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<ns-checkbox alias=\"active\" item=\"edited\" label=\"Активен\" size=\"8\"></ns-checkbox>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ns-string alias=\"alias\" ng-disabled=\"isManager()\" item=\"edited\" label=\"Алиас\"></ns-string>
\t\t\t\t\t</div>
\t\t\t\t\t<div ng-show=\"mode === MODULE\">

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<ns-integer alias=\"id\" disabled item=\"edited\" label=\"ID\" ng-show=\"edited.id\" size=\"6\"></ns-integer>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t";
        // line 35
        echo "\t\t\t\t\t\t\t\t";
        // line 36
        echo "\t\t\t\t\t\t\t";
        // line 37
        echo "\t\t\t\t\t\t\t<div class=\"col-sm-6\" ng-show=\"moduleTypeLayouts.length > 0\">
\t\t\t\t\t\t\t\t<ns-option
\t\t\t\t\t\t\t\t\talias=\"module_type_layout_id\"
\t\t\t\t\t\t\t\t\tempty
\t\t\t\t\t\t\t\t\titem=\"edited\"
\t\t\t\t\t\t\t\t\tlabel=\"Макет модуля\"
\t\t\t\t\t\t\t\t\toptions=\"moduleTypeLayouts\"
\t\t\t\t\t\t\t\t\tsize=\"8\"
\t\t\t\t\t\t\t\t></ns-option>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t<ns-text alias=\"name\" item=\"edited\" label=\"Название\" size=\"9\"></ns-text>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<ns-checkbox alias=\"show_name\" item=\"edited\" label=\"Заголовок\" size=\"12\"></ns-checkbox>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\tВидимость
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<ns-option alias=\"access_level\" item=\"edited\" label=\"Доступ\" options=\"list.accessLevels\" size=\"8\"></ns-option>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<ns-checkbox alias=\"active\" item=\"edited\" label=\"Модуль активен\" size=\"8\"></ns-checkbox>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\tОтображение
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<ns-option alias=\"bind_layouts\" item=\"edited\" label=\"Макеты\" options=\"list.binds\" size=\"8\"></ns-option>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<ns-option alias=\"bind_pages\" item=\"edited\" label=\"Страницы\" options=\"list.binds\" size=\"8\"></ns-option>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted\" ng-switch=\"edited.bind_layouts + '_' + edited.bind_pages\">
\t\t\t\t\t\t\t\t\t\t\t<span ng-show=\"edited.bind_layouts && edited.bind_pages\">Модуль будет показан</span>
\t\t\t\t\t\t\t\t\t\t\t<span ng-switch-when=\"all_all\">на всех страницах</span>
\t\t\t\t\t\t\t\t\t\t\t<span ng-switch-when=\"all_except\">на всех страницах, кроме выбранных</span>
\t\t\t\t\t\t\t\t\t\t\t<span ng-switch-when=\"all_for\">только на выбранных страницах</span>
\t\t\t\t\t\t\t\t\t\t\t<span ng-switch-when=\"except_all\">на всех страницах, кроме выбранных макетов</span>
\t\t\t\t\t\t\t\t\t\t\t<span ng-switch-when=\"except_except\">на всех страницах, кроме выбранных макетов, и кроме выбранных страниц</span>
\t\t\t\t\t\t\t\t\t\t\t<span ng-switch-when=\"except_for\">на всех страницах, кроме выбранных макетов, и на выбранных страницах (любых макетов)</span>
\t\t\t\t\t\t\t\t\t\t\t<span ng-switch-when=\"for_all\">только на страницах выбранных макетов</span>
\t\t\t\t\t\t\t\t\t\t\t<span ng-switch-when=\"for_except\">на страницах выбранных макетов, кроме выбранных страниц</span>
\t\t\t\t\t\t\t\t\t\t\t<span ng-switch-when=\"for_for\">на страницах выбранных макетов и на выбранных страницах (любых макетов)</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ns-options alias=\"layoutIds\" item=\"edited\" label=\"Макеты\" ng-show=\"showBinding(edited.bind_layouts)\" options=\"list.layouts\"></ns-options>
\t\t\t\t\t\t\t\t<ns-options alias=\"pageIds\" item=\"edited\" label=\"Страницы\" ng-show=\"showBinding(edited.bind_pages)\" pages=\"list.pages\"></ns-options>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<ns-incognito-module-type
\t\t\t\t\t\t\tconfig=\"editedConfig\"
\t\t\t\t\t\t\tmodule-type=\"{{ moduleType.alias }}\"
\t\t\t\t\t\t\tng-repeat=\"moduleType in list.moduleTypes\"
\t\t\t\t\t\t\tng-show=\"moduleType.id === edited.module_type_id\"
\t\t\t\t\t\t></ns-incognito-module-type>

\t\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button class=\"btn btn-warning btn-sm\" ng-click=\"split(edited)\" ng-show=\"mode === ROW || mode === COL\">
\t\t\t\t\t<span class=\"fa fa-th-large\"></span>
\t\t\t\t\tРазделить
\t\t\t\t</button>
\t\t\t\t<button
\t\t\t\t\tclass=\"btn btn-danger btn-sm\"
\t\t\t\t\tng-click=\"remove(mode, edited)\"
\t\t\t\t\tng-show=\"mode === MODULE || !edited.alias || !isManager()\"
\t\t\t\t>
\t\t\t\t\t<span class=\"fa fa-o-trash\"></span>
\t\t\t\t\tУдалить
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "_.admin.grid.settings";
    }

    public function getDebugInfo()
    {
        return array (  82 => 37,  80 => 36,  78 => 35,  45 => 3,  43 => 2,);
    }
}
/* {#<div class="modal">#}*/
/* 	{#<div class="modal-dialog">#}*/
/* 		<div class="modal-content settings" ng-show="edited" role="dialog">*/
/* 			<div class="modal-header">*/
/* 				<button class="close" ng-click="setUp()">*/
/* 					&times;*/
/* 				</button>*/
/* 				<h4 class="modal-title">*/
/* 					<span class="fa fa-cog"></span>*/
/* 					<span ng-show="mode === ROW">Ряд</span>*/
/* 					<span ng-show="mode === COL">Позиция</span>*/
/* 					<span ng-bind="edited.module_type.name" ng-show="mode === MODULE"></span>*/
/* 				</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 				<form class="form-horizontal">*/
/* 					<div ng-show="mode === ROW || mode === COL">*/
/* 						<div class="row">*/
/* 							<div class="col-sm-6">*/
/* 								<ns-checkbox alias="active" item="edited" label="Активен" size="8"></ns-checkbox>*/
/* 							</div>*/
/* 						</div>*/
/* 						<ns-string alias="alias" ng-disabled="isManager()" item="edited" label="Алиас"></ns-string>*/
/* 					</div>*/
/* 					<div ng-show="mode === MODULE">*/
/* */
/* 						<div class="row">*/
/* 							<div class="col-sm-4">*/
/* 								<ns-integer alias="id" disabled item="edited" label="ID" ng-show="edited.id" size="6"></ns-integer>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div class="row">*/
/* 							{#<div class="col-sm-6">#}*/
/* 								{#<ns-option alias="module_type_id" item="edited" label="Тип модуля" options="list.moduleTypes" size="8"></ns-option>#}*/
/* 							{#</div>#}*/
/* 							<div class="col-sm-6" ng-show="moduleTypeLayouts.length > 0">*/
/* 								<ns-option*/
/* 									alias="module_type_layout_id"*/
/* 									empty*/
/* 									item="edited"*/
/* 									label="Макет модуля"*/
/* 									options="moduleTypeLayouts"*/
/* 									size="8"*/
/* 								></ns-option>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div class="row">*/
/* 							<div class="col-sm-8">*/
/* 								<ns-text alias="name" item="edited" label="Название" size="9"></ns-text>*/
/* 							</div>*/
/* 							<div class="col-sm-4">*/
/* 								<ns-checkbox alias="show_name" item="edited" label="Заголовок" size="12"></ns-checkbox>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div class="panel panel-default">*/
/* 							<div class="panel-heading">*/
/* 								Видимость*/
/* 							</div>*/
/* 							<div class="panel-body">*/
/* 								<div class="row">*/
/* 									<div class="col-sm-6">*/
/* 										<ns-option alias="access_level" item="edited" label="Доступ" options="list.accessLevels" size="8"></ns-option>*/
/* 									</div>*/
/* 									<div class="col-sm-6">*/
/* 										<ns-checkbox alias="active" item="edited" label="Модуль активен" size="8"></ns-checkbox>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div class="panel panel-default">*/
/* 							<div class="panel-heading">*/
/* 								Отображение*/
/* 							</div>*/
/* 							<div class="panel-body">*/
/* 								<div class="row">*/
/* 									<div class="col-sm-6">*/
/* 										<ns-option alias="bind_layouts" item="edited" label="Макеты" options="list.binds" size="8"></ns-option>*/
/* 									</div>*/
/* 									<div class="col-sm-6">*/
/* 										<ns-option alias="bind_pages" item="edited" label="Страницы" options="list.binds" size="8"></ns-option>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="row">*/
/* 									<div class="col-sm-offset-2 col-sm-10">*/
/* 										<p class="small text-muted" ng-switch="edited.bind_layouts + '_' + edited.bind_pages">*/
/* 											<span ng-show="edited.bind_layouts && edited.bind_pages">Модуль будет показан</span>*/
/* 											<span ng-switch-when="all_all">на всех страницах</span>*/
/* 											<span ng-switch-when="all_except">на всех страницах, кроме выбранных</span>*/
/* 											<span ng-switch-when="all_for">только на выбранных страницах</span>*/
/* 											<span ng-switch-when="except_all">на всех страницах, кроме выбранных макетов</span>*/
/* 											<span ng-switch-when="except_except">на всех страницах, кроме выбранных макетов, и кроме выбранных страниц</span>*/
/* 											<span ng-switch-when="except_for">на всех страницах, кроме выбранных макетов, и на выбранных страницах (любых макетов)</span>*/
/* 											<span ng-switch-when="for_all">только на страницах выбранных макетов</span>*/
/* 											<span ng-switch-when="for_except">на страницах выбранных макетов, кроме выбранных страниц</span>*/
/* 											<span ng-switch-when="for_for">на страницах выбранных макетов и на выбранных страницах (любых макетов)</span>*/
/* 										</p>*/
/* 									</div>*/
/* 								</div>*/
/* 								<ns-options alias="layoutIds" item="edited" label="Макеты" ng-show="showBinding(edited.bind_layouts)" options="list.layouts"></ns-options>*/
/* 								<ns-options alias="pageIds" item="edited" label="Страницы" ng-show="showBinding(edited.bind_pages)" pages="list.pages"></ns-options>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<ns-incognito-module-type*/
/* 							config="editedConfig"*/
/* 							module-type="{{ moduleType.alias }}"*/
/* 							ng-repeat="moduleType in list.moduleTypes"*/
/* 							ng-show="moduleType.id === edited.module_type_id"*/
/* 						></ns-incognito-module-type>*/
/* */
/* 						<div class="clearfix"></div>*/
/* */
/* 					</div>*/
/* 				</form>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				<button class="btn btn-warning btn-sm" ng-click="split(edited)" ng-show="mode === ROW || mode === COL">*/
/* 					<span class="fa fa-th-large"></span>*/
/* 					Разделить*/
/* 				</button>*/
/* 				<button*/
/* 					class="btn btn-danger btn-sm"*/
/* 					ng-click="remove(mode, edited)"*/
/* 					ng-show="mode === MODULE || !edited.alias || !isManager()"*/
/* 				>*/
/* 					<span class="fa fa-o-trash"></span>*/
/* 					Удалить*/
/* 				</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	{#</div>#}*/
/* {#</div>#}*/
/* */
