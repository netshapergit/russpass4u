<?php

/* _.module_types.banner.main */
class __TwigTemplate_d6f94f447bd888fbdbe95c31d0deabceb17e59b9c62fd1b7b71b06acd3e046ca extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'image' => array($this, 'block_image'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 1, "block" => 8);
        $filters = array("default" => 1, "escape" => 2);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'block'),
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

        // line 1
        if (((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "external", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "external", array()), false)) : (false)) && (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "url", array()), "")) : ("")))) {
            // line 2
            echo "\t<a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "url", array()), "html", null, true));
            echo "\" target=\"_blank\">
";
        } elseif (( !(($this->getAttribute(        // line 3
(isset($context["config"]) ? $context["config"] : null), "external", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "external", array()), false)) : (false)) && (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "page", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "page", array()), null)) : (null)))) {
            // line 4
            echo "\t<a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "page", array()), "path", array()), "html", null, true));
            echo "\">
";
        }
        // line 6
        echo "
";
        // line 7
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "image", array())) {
            // line 8
            echo "\t";
            $this->displayBlock('image', $context, $blocks);
        }
        // line 12
        echo "
";
        // line 13
        if (((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "external", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "external", array()), false)) : (false)) && (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "url", array()), "")) : ("")))) {
            // line 14
            echo "\t</a>
";
        } elseif (( !(($this->getAttribute(        // line 15
(isset($context["config"]) ? $context["config"] : null), "external", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "external", array()), false)) : (false)) && (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "page", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "page", array()), null)) : (null)))) {
            // line 16
            echo "\t</a>
";
        }
    }

    // line 8
    public function block_image($context, array $blocks = array())
    {
        // line 9
        echo "\t\t<img src=\"/site/data/files/";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "image", array()), "html", null, true));
        echo "\">
\t";
    }

    public function getTemplateName()
    {
        return "_.module_types.banner.main";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 9,  84 => 8,  78 => 16,  76 => 15,  73 => 14,  71 => 13,  68 => 12,  64 => 8,  62 => 7,  59 => 6,  53 => 4,  51 => 3,  46 => 2,  44 => 1,);
    }
}
/* {% if config.external|default(false) and config.url|default('') %}*/
/* 	<a href="{$ config.url $}" target="_blank">*/
/* {% elseif not config.external|default(false) and config.page|default(null) %}*/
/* 	<a href="{$ config.page.path $}">*/
/* {% endif %}*/
/* */
/* {% if config.image %}*/
/* 	{% block image %}*/
/* 		<img src="/site/data/files/{$ config.image $}">*/
/* 	{% endblock %}*/
/* {% endif %}*/
/* */
/* {% if config.external|default(false) and config.url|default('') %}*/
/* 	</a>*/
/* {% elseif not config.external|default(false) and config.page|default(null) %}*/
/* 	</a>*/
/* {% endif %}*/
/* */
