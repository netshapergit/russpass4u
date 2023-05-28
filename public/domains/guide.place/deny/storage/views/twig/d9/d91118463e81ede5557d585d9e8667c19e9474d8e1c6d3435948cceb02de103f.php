<?php

/* _.admin.feedbacks.form */
class __TwigTemplate_7403b1216ad9ecc0df871e30dcbee7fef32c5435a703233344b477380bc60878 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.admin.form", "_.admin.feedbacks.form", 1);
        $this->blocks = array(
            'fields' => array($this, 'block_fields'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.admin.form";
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

\t\t<div class=\"col-sm-6\">

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<ns-integer alias=\"id\" disabled item=\"item\" label=\"ID\" size=\"6\"></ns-integer>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-4\"></div>
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<ns-checkbox alias=\"sent\" disabled item=\"item\" label=\"Отправлено\" size=\"12\"></ns-checkbox>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<ns-option alias=\"user_id\" disabled item=\"item\" key=\"login\" label=\"Пользователь\" options=\"list.users\" size=\"8\"></ns-option>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<ns-option alias=\"forme_id\" disabled item=\"item\" label=\"Форма\" options=\"list.formes\" size=\"8\"></ns-option>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<ns-page alias=\"page_id\" disabled item=\"item\" label=\"Страница\" pages=\"list.pages\" size=\"8\"></ns-page>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<ns-datetime alias=\"created_at\" disabled item=\"item\" label=\"Дата\" size=\"8\"></ns-datetime>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<ns-string alias=\"ip\" disabled item=\"item\" label=\"IP\" size=\"8\"></ns-string>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<ns-text alias=\"useragent\" disabled item=\"item\" label=\"Браузер\"></ns-text>

\t\t\t<ns-text alias=\"note\" item=\"item\" label=\"Заметка\"></ns-text>

\t\t</div>

\t\t<div class=\"col-sm-6\">
\t\t\t<ns-incognito
\t\t\t\talias=\"field_{{ field.alias }}\"
\t\t\t\tdisabled
\t\t\t\tfield-type=\"{{ field.field_type.alias.replace('pages', 'options') }}\"
\t\t\t\titem=\"item\"
\t\t\t\tlabel=\"{{ field.name }}\"
\t\t\t\tlayouts=\"field.layouts\"
\t\t\t\tselects=\"field.selects\"
\t\t\t\tng-repeat=\"field in item.forme.fields\"
\t\t\t></ns-incognito>
\t\t</div>

\t</div>

";
    }

    public function getTemplateName()
    {
        return "_.admin.feedbacks.form";
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
/* {% extends '_.admin.form' %}*/
/* */
/* {% block fields %}*/
/* */
/* 	<div class="row">*/
/* */
/* 		<div class="col-sm-6">*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-sm-4">*/
/* 					<ns-integer alias="id" disabled item="item" label="ID" size="6"></ns-integer>*/
/* 				</div>*/
/* 				<div class="col-sm-4"></div>*/
/* 				<div class="col-sm-4">*/
/* 					<ns-checkbox alias="sent" disabled item="item" label="Отправлено" size="12"></ns-checkbox>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-sm-6">*/
/* 					<ns-option alias="user_id" disabled item="item" key="login" label="Пользователь" options="list.users" size="8"></ns-option>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-sm-6">*/
/* 					<ns-option alias="forme_id" disabled item="item" label="Форма" options="list.formes" size="8"></ns-option>*/
/* 				</div>*/
/* 				<div class="col-sm-6">*/
/* 					<ns-page alias="page_id" disabled item="item" label="Страница" pages="list.pages" size="8"></ns-page>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-sm-6">*/
/* 					<ns-datetime alias="created_at" disabled item="item" label="Дата" size="8"></ns-datetime>*/
/* 				</div>*/
/* 				<div class="col-sm-6">*/
/* 					<ns-string alias="ip" disabled item="item" label="IP" size="8"></ns-string>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<ns-text alias="useragent" disabled item="item" label="Браузер"></ns-text>*/
/* */
/* 			<ns-text alias="note" item="item" label="Заметка"></ns-text>*/
/* */
/* 		</div>*/
/* */
/* 		<div class="col-sm-6">*/
/* 			<ns-incognito*/
/* 				alias="field_{{ field.alias }}"*/
/* 				disabled*/
/* 				field-type="{{ field.field_type.alias.replace('pages', 'options') }}"*/
/* 				item="item"*/
/* 				label="{{ field.name }}"*/
/* 				layouts="field.layouts"*/
/* 				selects="field.selects"*/
/* 				ng-repeat="field in item.forme.fields"*/
/* 			></ns-incognito>*/
/* 		</div>*/
/* */
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
