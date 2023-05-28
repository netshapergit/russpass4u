<?php

/* _.admin.module_type_layouts.form */
class __TwigTemplate_1ed085b26d0c15c4bab93745d265d8e95aac7db52a5fb6391ec6af16e618757f extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.admin.form", "_.admin.module_type_layouts.form", 1);
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

\t\t<div class=\"col-sm-2\">
\t\t\t<ns-integer alias=\"id\" disabled item=\"item\" label=\"ID\" ng-show=\"item.id\" size=\"6\"></ns-integer>
\t\t</div>

\t\t<div class=\"col-sm-3\">
\t\t\t<ns-option alias=\"module_type_id\" item=\"item\" label=\"Тип модуля\" options=\"list.moduleTypes\" size=\"8\"></ns-option>
\t\t</div>

\t\t<div class=\"col-sm-3\">
\t\t\t<ns-string alias=\"alias\" item=\"item\" label=\"Алиас\" size=\"8\"></ns-string>
\t\t</div>

\t\t<div class=\"col-sm-4\">
\t\t\t<ns-string alias=\"name\" item=\"item\" label=\"Название\" size=\"9\"></ns-string>
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
        return "_.admin.module_type_layouts.form";
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
/* 		<div class="col-sm-2">*/
/* 			<ns-integer alias="id" disabled item="item" label="ID" ng-show="item.id" size="6"></ns-integer>*/
/* 		</div>*/
/* */
/* 		<div class="col-sm-3">*/
/* 			<ns-option alias="module_type_id" item="item" label="Тип модуля" options="list.moduleTypes" size="8"></ns-option>*/
/* 		</div>*/
/* */
/* 		<div class="col-sm-3">*/
/* 			<ns-string alias="alias" item="item" label="Алиас" size="8"></ns-string>*/
/* 		</div>*/
/* */
/* 		<div class="col-sm-4">*/
/* 			<ns-string alias="name" item="item" label="Название" size="9"></ns-string>*/
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
