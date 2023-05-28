<?php

/* _.module_types.content.main */
class __TwigTemplate_a0b3ffce4993f8d2e1346da06bf845053ae7b0a1c5c38c12852bf16926075050 extends TwigBridge\Twig\Template
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
        $tags = array("if" => 1, "include" => 2);
        $filters = array("default" => 1);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'include'),
                array('default'),
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
        if ((($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "layout", array(), "any", false, true), "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "layout", array(), "any", false, true), "alias", array()), "")) : (""))) {
            // line 2
            echo "\t";
            $this->loadTemplate(("layouts." . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "layout", array()), "alias", array())), "_.module_types.content.main", 2)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "_.module_types.content.main";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  43 => 1,);
    }
}
/* {% if page.layout.alias|default('') %}*/
/* 	{% include 'layouts.' ~ page.layout.alias %}*/
/* {% endif %}*/
/* */
