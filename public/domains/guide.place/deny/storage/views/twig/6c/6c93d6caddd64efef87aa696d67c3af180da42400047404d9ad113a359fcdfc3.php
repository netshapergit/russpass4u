<?php

/* _.admin.alter_fields.form */
class __TwigTemplate_03f94433aedf14169ac2587e7355b3836241242442301f7f3d31ce973b14bd5b extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.admin.fields.form", "_.admin.alter_fields.form", 1);
        $this->blocks = array(
            'fields_right' => array($this, 'block_fields_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.admin.fields.form";
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
    public function block_fields_right($context, array $blocks = array())
    {
        // line 4
        echo "
\t";
        // line 5
        $this->displayParentBlock("fields_right", $context, $blocks);
        echo "

\t<ns-options alias=\"selects\" item=\"item\" label=\"Справочники\" ng-show=\"needsSelects()\" options=\"list.selects\"></ns-options>
\t<ns-options alias=\"layouts\" item=\"item\" label=\"Макеты\" ng-show=\"needsLayouts()\" options=\"list.layouts\"></ns-options>

";
    }

    public function getTemplateName()
    {
        return "_.admin.alter_fields.form";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 5,  55 => 4,  52 => 3,  11 => 1,);
    }
}
/* {% extends '_.admin.fields.form' %}*/
/* */
/* {% block fields_right %}*/
/* */
/* 	{$ parent() $}*/
/* */
/* 	<ns-options alias="selects" item="item" label="Справочники" ng-show="needsSelects()" options="list.selects"></ns-options>*/
/* 	<ns-options alias="layouts" item="item" label="Макеты" ng-show="needsLayouts()" options="list.layouts"></ns-options>*/
/* */
/* {% endblock %}*/
/* */
