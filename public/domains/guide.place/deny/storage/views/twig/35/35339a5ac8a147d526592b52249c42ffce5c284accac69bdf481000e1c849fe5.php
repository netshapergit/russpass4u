<?php

/* _.admin.system.settings */
class __TwigTemplate_c1f06f96c5927b311740d2966c06a518ddc1acc23349157d843f87d11c6072b7 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.admin.settings", "_.admin.system.settings", 1);
        $this->blocks = array(
            'fields' => array($this, 'block_fields'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.admin.settings";
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fields($context, array $blocks = array())
    {
        // line 4
        echo "
\t<div class=\"row\">

\t\t<div class=\"col-sm-2\">
\t\t\t<ns-checkbox alias=\"debug\" item=\"item\" label=\"Режим отладки\" size=\"12\"></ns-checkbox>
\t\t</div>

\t\t<div class=\"col-sm-2\">
\t\t\t<ns-checkbox alias=\"free_registration\" item=\"item\" label=\"Свободная регистрация\" size=\"12\"></ns-checkbox>
\t\t</div>
\t\t
\t\t<div class=\"col-sm-2\">
\t\t\t<ns-checkbox alias=\"to_user_reg\" item=\"item\" label=\"Переадресация в личный кабинет после регистрации\" size=\"12\"></ns-checkbox>
\t\t</div>
\t\t
\t\t<div class=\"col-sm-2\">
\t\t\t<ns-checkbox alias=\"to_user_auh\" item=\"item\" label=\"Переадресация в личный кабинет после авторизации\" size=\"12\"></ns-checkbox>
\t\t</div>
\t</div>

\t<h4>Изображения</h4>

\t<hr>

\t<div class=\"row\">

\t\t<div class=\"col-sm-4\" ng-repeat=\"(imageSize, imageHeader) in { large: 'Большое', medium: 'Среднее', small: 'Малое' }\">

\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\" ng-bind=\"imageHeader\"></div>
\t\t\t\t<div class=\"panel-body\">

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<ns-integer alias=\"image_{{ imageSize }}_width\" item=\"item\" label=\"Ширина\" size=\"6\"></ns-integer>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<ns-integer alias=\"image_{{ imageSize }}_height\" item=\"item\" label=\"Высота\" size=\"6\"></ns-integer>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<ns-option alias=\"image_{{ imageSize }}_type\" item=\"item\" label=\"Масштабирование\" options=\"list.imageResizeTypes\" size=\"6\"></ns-option>

\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t</div>

\t<div ng-show=\"actual !== '1'\">
\t\t<h4>Шаблон сайта</h4>

\t\t<hr>

\t\t<div class=\"row\">

\t\t\t<div class=\"col-sm-2\">
\t\t\t\t<ns-checkbox alias=\"layout_fluid\" item=\"item\" label=\"Тянущаяся верстка\" size=\"12\"></ns-checkbox>
\t\t\t</div>

\t\t\t<div class=\"col-sm-2\">
\t\t\t\t<ns-checkbox alias=\"layout_single_container\" item=\"item\" label=\"Единый контейнер\" size=\"12\"></ns-checkbox>
\t\t\t</div>

\t\t</div>

\t\t<div class=\"row\">

\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<ns-option alias=\"layout_verso_size\" item=\"item\" label=\"Размер самой левой колонки\" options=\"list.columnSizes\" size=\"4\"></ns-option>
\t\t\t</div>

\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<ns-option alias=\"layout_left_size\" item=\"item\" label=\"Размер левой колонки\" options=\"list.columnSizes\" size=\"4\"></ns-option>
\t\t\t</div>

\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<ns-option alias=\"layout_right_size\" item=\"item\" label=\"Размер правой колонки\" options=\"list.columnSizes\" size=\"4\"></ns-option>
\t\t\t</div>

\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<ns-option alias=\"layout_recto_size\" item=\"item\" label=\"Размер самой правой колонки\" options=\"list.columnSizes\" size=\"4\"></ns-option>
\t\t\t</div>

\t\t</div>
\t</div>

\t<h4>Исходящая почта (SMTP)</h4>

\t<hr>

\t<div class=\"row\">

\t\t<div class=\"col-sm-4\">
\t\t\t<ns-string alias=\"mailing_host\" item=\"item\" label=\"Хост\" size=\"9\"></ns-string>
\t\t</div>

\t\t<div class=\"col-sm-2\">
\t\t\t<ns-integer alias=\"mailing_port\" item=\"item\" label=\"Порт\" size=\"6\"></ns-integer>
\t\t</div>

\t</div>

\t<div class=\"row\">

\t\t<div class=\"col-sm-4\">
\t\t\t<ns-string alias=\"mailing_username\" item=\"item\" label=\"Логин\" size=\"9\"></ns-string>
\t\t</div>

\t\t<div class=\"col-sm-3\">
\t\t\t<ns-password alias=\"mailing_password\" item=\"item\" label=\"Пароль\" size=\"8\"></ns-password>
\t\t</div>

\t</div>

\t<div class=\"row\">

\t\t<div class=\"col-sm-4\">
\t\t\t<ns-string alias=\"mailing_from_address\" item=\"item\" label=\"От кого (адрес)\" size=\"9\"></ns-string>
\t\t</div>

\t\t<div class=\"col-sm-4\">
\t\t\t<ns-string alias=\"mailing_from_name\" item=\"item\" label=\"От кого (имя)\" size=\"9\"></ns-string>
\t\t</div>

\t</div>

";
    }

    public function getTemplateName()
    {
        return "_.admin.system.settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 4,  52 => 3,  11 => 1,);
    }
}
/* {% extends '_.admin.settings' %}*/
/* */
/* {% block fields %}*/
/* */
/* 	<div class="row">*/
/* */
/* 		<div class="col-sm-2">*/
/* 			<ns-checkbox alias="debug" item="item" label="Режим отладки" size="12"></ns-checkbox>*/
/* 		</div>*/
/* */
/* 		<div class="col-sm-2">*/
/* 			<ns-checkbox alias="free_registration" item="item" label="Свободная регистрация" size="12"></ns-checkbox>*/
/* 		</div>*/
/* 		*/
/* 		<div class="col-sm-2">*/
/* 			<ns-checkbox alias="to_user_reg" item="item" label="Переадресация в личный кабинет после регистрации" size="12"></ns-checkbox>*/
/* 		</div>*/
/* 		*/
/* 		<div class="col-sm-2">*/
/* 			<ns-checkbox alias="to_user_auh" item="item" label="Переадресация в личный кабинет после авторизации" size="12"></ns-checkbox>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<h4>Изображения</h4>*/
/* */
/* 	<hr>*/
/* */
/* 	<div class="row">*/
/* */
/* 		<div class="col-sm-4" ng-repeat="(imageSize, imageHeader) in { large: 'Большое', medium: 'Среднее', small: 'Малое' }">*/
/* */
/* 			<div class="panel panel-default">*/
/* 				<div class="panel-heading" ng-bind="imageHeader"></div>*/
/* 				<div class="panel-body">*/
/* */
/* 					<div class="row">*/
/* 						<div class="col-sm-6">*/
/* 							<ns-integer alias="image_{{ imageSize }}_width" item="item" label="Ширина" size="6"></ns-integer>*/
/* 						</div>*/
/* 						<div class="col-sm-6">*/
/* 							<ns-integer alias="image_{{ imageSize }}_height" item="item" label="Высота" size="6"></ns-integer>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<ns-option alias="image_{{ imageSize }}_type" item="item" label="Масштабирование" options="list.imageResizeTypes" size="6"></ns-option>*/
/* */
/* 				</div>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* */
/* 	</div>*/
/* */
/* 	<div ng-show="actual !== '1'">*/
/* 		<h4>Шаблон сайта</h4>*/
/* */
/* 		<hr>*/
/* */
/* 		<div class="row">*/
/* */
/* 			<div class="col-sm-2">*/
/* 				<ns-checkbox alias="layout_fluid" item="item" label="Тянущаяся верстка" size="12"></ns-checkbox>*/
/* 			</div>*/
/* */
/* 			<div class="col-sm-2">*/
/* 				<ns-checkbox alias="layout_single_container" item="item" label="Единый контейнер" size="12"></ns-checkbox>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* */
/* 		<div class="row">*/
/* */
/* 			<div class="col-sm-3">*/
/* 				<ns-option alias="layout_verso_size" item="item" label="Размер самой левой колонки" options="list.columnSizes" size="4"></ns-option>*/
/* 			</div>*/
/* */
/* 			<div class="col-sm-3">*/
/* 				<ns-option alias="layout_left_size" item="item" label="Размер левой колонки" options="list.columnSizes" size="4"></ns-option>*/
/* 			</div>*/
/* */
/* 			<div class="col-sm-3">*/
/* 				<ns-option alias="layout_right_size" item="item" label="Размер правой колонки" options="list.columnSizes" size="4"></ns-option>*/
/* 			</div>*/
/* */
/* 			<div class="col-sm-3">*/
/* 				<ns-option alias="layout_recto_size" item="item" label="Размер самой правой колонки" options="list.columnSizes" size="4"></ns-option>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<h4>Исходящая почта (SMTP)</h4>*/
/* */
/* 	<hr>*/
/* */
/* 	<div class="row">*/
/* */
/* 		<div class="col-sm-4">*/
/* 			<ns-string alias="mailing_host" item="item" label="Хост" size="9"></ns-string>*/
/* 		</div>*/
/* */
/* 		<div class="col-sm-2">*/
/* 			<ns-integer alias="mailing_port" item="item" label="Порт" size="6"></ns-integer>*/
/* 		</div>*/
/* */
/* 	</div>*/
/* */
/* 	<div class="row">*/
/* */
/* 		<div class="col-sm-4">*/
/* 			<ns-string alias="mailing_username" item="item" label="Логин" size="9"></ns-string>*/
/* 		</div>*/
/* */
/* 		<div class="col-sm-3">*/
/* 			<ns-password alias="mailing_password" item="item" label="Пароль" size="8"></ns-password>*/
/* 		</div>*/
/* */
/* 	</div>*/
/* */
/* 	<div class="row">*/
/* */
/* 		<div class="col-sm-4">*/
/* 			<ns-string alias="mailing_from_address" item="item" label="От кого (адрес)" size="9"></ns-string>*/
/* 		</div>*/
/* */
/* 		<div class="col-sm-4">*/
/* 			<ns-string alias="mailing_from_name" item="item" label="От кого (имя)" size="9"></ns-string>*/
/* 		</div>*/
/* */
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
