<?php

/* _.admin.layouts.form */
class __TwigTemplate_1274550542bc92be3f230d14001503038366a84d3700650c05e4c33078f787c8 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.admin.form", "_.admin.layouts.form", 1);
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
\t\t\t\t\t<ns-integer alias=\"id\" disabled item=\"item\" label=\"ID\" ng-show=\"item.id\" size=\"6\"></ns-integer>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t<ns-string alias=\"alias\" item=\"item\" label=\"Алиас\" size=\"9\"></ns-string>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<ns-string alias=\"name\" item=\"item\" label=\"Название\"></ns-string>
\t\t\t<ns-checkbox alias=\"structure\" default=\"0\" item=\"item\" label=\"Элемент структуры\" size=\"8\"></ns-checkbox>

\t\t</div>

\t\t<div class=\"col-sm-6\">

\t\t\t<ns-options alias=\"fields\" item=\"item\" label=\"Поля\" options=\"list.fields\" order require></ns-options>

\t\t</div>

\t</div>

\t<ns-code
\t\talias=\"code\"
\t\titem=\"item\"
\t\tmethod=\"put\"
\t\tsize=\"12\"
\t\turl=\"{{ item.id ? url.admin + '/' + request.segments[1] + '/' + item.id : null }}\"
\t></ns-code>

";
    }

    public function getTemplateName()
    {
        return "_.admin.layouts.form";
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
/* 					<ns-integer alias="id" disabled item="item" label="ID" ng-show="item.id" size="6"></ns-integer>*/
/* 				</div>*/
/* 				<div class="col-sm-8">*/
/* 					<ns-string alias="alias" item="item" label="Алиас" size="9"></ns-string>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<ns-string alias="name" item="item" label="Название"></ns-string>*/
/* 			<ns-checkbox alias="structure" default="0" item="item" label="Элемент структуры" size="8"></ns-checkbox>*/
/* */
/* 		</div>*/
/* */
/* 		<div class="col-sm-6">*/
/* */
/* 			<ns-options alias="fields" item="item" label="Поля" options="list.fields" order require></ns-options>*/
/* */
/* 		</div>*/
/* */
/* 	</div>*/
/* */
/* 	<ns-code*/
/* 		alias="code"*/
/* 		item="item"*/
/* 		method="put"*/
/* 		size="12"*/
/* 		url="{{ item.id ? url.admin + '/' + request.segments[1] + '/' + item.id : null }}"*/
/* 	></ns-code>*/
/* */
/* {% endblock %}*/
/* */
