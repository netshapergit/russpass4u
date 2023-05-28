<?php

/* _.module_types.menu.main */
class __TwigTemplate_78cf670ae28146c247b09f2e136169595249b2b4051575b7430c1fd5372f9414 extends TwigBridge\Twig\Template
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
        $tags = array("if" => 3, "for" => 7, "include" => 8);
        $filters = array("default" => 3);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for', 'include'),
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
        echo "<ul class=\"
\tnav nav-pills
\t";
        // line 3
        if ((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vertical", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vertical", array()), false)) : (false))) {
            // line 4
            echo "\t\tnav-stacked
\t";
        }
        // line 6
        echo "\">
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "items", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "items", array()), array())) : (array())));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ((($this->getAttribute($context["item"], "active", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "active", array()), false)) : (false))) {
                // line 8
                echo "\t\t";
                $this->loadTemplate("_.module_types.menu.item", "_.module_types.menu.main", 8)->display($context);
                // line 9
                echo "\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "_.module_types.menu.main";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 10,  70 => 9,  67 => 8,  56 => 7,  53 => 6,  49 => 4,  47 => 3,  43 => 1,);
    }
}
/* <ul class="*/
/* 	nav nav-pills*/
/* 	{% if config.vertical|default(false) %}*/
/* 		nav-stacked*/
/* 	{% endif %}*/
/* ">*/
/* 	{% for item in config.items|default([]) if item.active|default(false) %}*/
/* 		{% include '_.module_types.menu.item' %}*/
/* 	{% endfor %}*/
/* </ul>*/
/* */
