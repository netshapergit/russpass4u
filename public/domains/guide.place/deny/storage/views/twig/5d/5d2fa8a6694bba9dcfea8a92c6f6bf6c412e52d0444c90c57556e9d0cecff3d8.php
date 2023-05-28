<?php

/* layouts.page */
class __TwigTemplate_d0ec4e83383ab01ee64f16fc2b606aca6f2423b7e39b0c0fe2171a99840e1d05 extends TwigBridge\Twig\Template
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
        $tags = array("if" => 1);
        $filters = array("default" => 1, "escape" => 2, "striptags" => 5, "raw" => 7);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('default', 'escape', 'striptags', 'raw'),
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
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array()), "")) : (""))) {
            // line 2
            echo "\t<h1>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array()), "html", null, true));
            echo "</h1>
";
        }
        // line 4
        echo "
";
        // line 5
        if (strip_tags((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_content", array()), "")) : ("")))) {
            // line 6
            echo "\t<div class=\"field_content\">
\t\t";
            // line 7
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_content", array()));
            echo "
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "layouts.page";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 7,  56 => 6,  54 => 5,  51 => 4,  45 => 2,  43 => 1,);
    }
}
/* {% if page.field_header|default('') %}*/
/* 	<h1>{$ page.field_header $}</h1>*/
/* {% endif %}*/
/* */
/* {% if page.field_content|default('')|striptags %}*/
/* 	<div class="field_content">*/
/* 		{$ page.field_content|raw $}*/
/* 	</div>*/
/* {% endif %}*/
/* */
