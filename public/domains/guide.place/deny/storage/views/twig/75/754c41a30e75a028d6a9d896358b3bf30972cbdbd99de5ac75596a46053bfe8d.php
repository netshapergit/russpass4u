<?php

/* module_types.announcement.travellers */
class __TwigTemplate_10f5ded1ab28525c156c06646822258feb897d98c6a2111dd607ebed7a53ee35 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.module_types.announcement.rows", "module_types.announcement.travellers", 1);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.module_types.announcement.rows";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 5);
        $filters = array("default" => 5, "escape" => 6);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('default', 'escape'),
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
    public function block_item($context, array $blocks = array())
    {
        // line 4
        echo "\t
\t";
        // line 5
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_image", array()), "")) : (""))) {
            // line 6
            echo "\t\t<a class=\"pull\" href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
            echo "\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/medium/";
            // line 7
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_image", array()), "html", null, true));
            echo "\">\t
\t\t</a>
\t";
        }
        // line 9
        echo "\t
\t\t
\t";
        // line 11
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_header", array()), "")) : (""))) {
            // line 12
            echo "\t\t<h4 class=\"media-heading\">
\t\t\t<a href=\"";
            // line 13
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_header", array()), "html", null, true));
            echo "</a>
\t\t</h4>
\t";
        }
        // line 16
        echo "
\t";
        // line 17
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_summary", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_summary", array()), "")) : (""))) {
            // line 18
            echo "\t\t<p>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_summary", array()), "html", null, true));
            echo "</p>
\t";
        }
        // line 20
        echo "
";
    }

    public function getTemplateName()
    {
        return "module_types.announcement.travellers";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 20,  93 => 18,  91 => 17,  88 => 16,  80 => 13,  77 => 12,  75 => 11,  71 => 9,  65 => 7,  60 => 6,  58 => 5,  55 => 4,  52 => 3,  11 => 1,);
    }
}
/* {% extends '_.module_types.announcement.rows' %}*/
/* */
/* {% block item %}*/
/* 	*/
/* 	{% if item.field_image|default('') %}*/
/* 		<a class="pull" href="{$ item.path $}">*/
/* 			<img class="media-object" src="/site/data/images/medium/{$ item.field_image $}">	*/
/* 		</a>*/
/* 	{% endif %}	*/
/* 		*/
/* 	{% if item.field_header|default('') %}*/
/* 		<h4 class="media-heading">*/
/* 			<a href="{$ item.path $}">{$ item.field_header $}</a>*/
/* 		</h4>*/
/* 	{% endif %}*/
/* */
/* 	{% if item.field_summary|default('') %}*/
/* 		<p>{$ item.field_summary $}</p>*/
/* 	{% endif %}*/
/* */
/* {% endblock %}*/
/* */
