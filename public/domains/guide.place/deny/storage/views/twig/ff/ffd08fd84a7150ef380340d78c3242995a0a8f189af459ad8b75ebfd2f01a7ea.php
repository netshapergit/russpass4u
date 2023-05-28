<?php

/* _.admin.domains.form */
class __TwigTemplate_97928a530db6b6ee45f78382494cc141f29b71174e27a7901614854fca6776db extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.admin.form", "_.admin.domains.form", 1);
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
\t<input class=\"display-none\" name=\"origin_domain_id\" ng-model=\"item.id\" type=\"text\">

\t<div class=\"row\">

\t\t<div class=\"col-sm-6\">

\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<ns-integer alias=\"id\" disabled item=\"item\" label=\"ID\" ng-show=\"item.id\" size=\"6\"></ns-integer>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<ns-checkbox alias=\"actual\" default=\"1\" item=\"item\" label=\"Актуальная версия\" size=\"12\"></ns-checkbox>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<ns-checkbox alias=\"active\" default=\"1\" item=\"item\" label=\"Домен активен\" size=\"12\"></ns-checkbox>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<ns-string alias=\"name\" item=\"item\" label=\"Имя\"></ns-string>

\t\t\t<ns-options alias=\"admins\" item=\"item\" key=\"login\" label=\"Админы\" options=\"list.admins\"></ns-options>

\t\t</div>

\t\t<div class=\"col-sm-6\">

\t\t\t<ns-options alias=\"module_types\" item=\"item\" label=\"Типы модулей\" options=\"list.module_types\"></ns-options>

\t\t\t<ns-options alias=\"module_type_additions\" item=\"item\" label=\"Дополнения модулей\" options=\"list.module_type_additions\"></ns-options>

\t\t</div>

\t</div>

";
    }

    public function getTemplateName()
    {
        return "_.admin.domains.form";
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
/* 	<input class="display-none" name="origin_domain_id" ng-model="item.id" type="text">*/
/* */
/* 	<div class="row">*/
/* */
/* 		<div class="col-sm-6">*/
/* */
/* 			<div class="row">*/
/* */
/* 				<div class="col-sm-4">*/
/* 					<ns-integer alias="id" disabled item="item" label="ID" ng-show="item.id" size="6"></ns-integer>*/
/* 				</div>*/
/* 				<div class="col-sm-4">*/
/* 					<ns-checkbox alias="actual" default="1" item="item" label="Актуальная версия" size="12"></ns-checkbox>*/
/* 				</div>*/
/* 				<div class="col-sm-4">*/
/* 					<ns-checkbox alias="active" default="1" item="item" label="Домен активен" size="12"></ns-checkbox>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<ns-string alias="name" item="item" label="Имя"></ns-string>*/
/* */
/* 			<ns-options alias="admins" item="item" key="login" label="Админы" options="list.admins"></ns-options>*/
/* */
/* 		</div>*/
/* */
/* 		<div class="col-sm-6">*/
/* */
/* 			<ns-options alias="module_types" item="item" label="Типы модулей" options="list.module_types"></ns-options>*/
/* */
/* 			<ns-options alias="module_type_additions" item="item" label="Дополнения модулей" options="list.module_type_additions"></ns-options>*/
/* */
/* 		</div>*/
/* */
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
