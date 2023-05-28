<?php

/* _.module_types.menu.item */
class __TwigTemplate_a123a032590e55ae4906cec549b57faf4399f97f754c345aa3fbae8d32ba762a extends TwigBridge\Twig\Template
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
        $tags = array("if" => 2, "for" => 30, "include" => 31);
        $filters = array("default" => 2, "length" => 6, "escape" => 16);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for', 'include'),
                array('default', 'length', 'escape'),
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
        echo "<li class=\"
\t";
        // line 2
        if (( !(($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "external", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "external", array()), false)) : (false)) && (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "page", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "page", array()), null)) : (null)))) {
            // line 3
            echo "\t\t";
            if ((($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "path", array()) == $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "page", array()), "path", array())) || ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "page", array()), "alias", array()) && (is_string($__internal_63e432ba9ab8a8d960752abf825c4bb34b161010a3ef3079e7100422ec0019ae = $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "path", array())) && is_string($__internal_d3e0e687f13822cb9e234cc1ff87858dcc6ad511bfe5d59e2331b73fe64265a6 = $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "page", array()), "path", array())) && ('' === $__internal_d3e0e687f13822cb9e234cc1ff87858dcc6ad511bfe5d59e2331b73fe64265a6 || 0 === strpos($__internal_63e432ba9ab8a8d960752abf825c4bb34b161010a3ef3079e7100422ec0019ae, $__internal_d3e0e687f13822cb9e234cc1ff87858dcc6ad511bfe5d59e2331b73fe64265a6)))))) {
                echo "active";
            }
            // line 4
            echo "\t\t";
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "path", array()) == $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "page", array()), "path", array()))) {
                echo "current";
            }
            // line 5
            echo "\t";
        }
        // line 6
        echo "\t";
        if ((twig_length_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "items", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "items", array()), array())) : (array()))) > 0)) {
            echo "dropdown";
        }
        // line 7
        echo "\">
\t";
        // line 8
        if (((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "nested", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "nested", array()), false)) : (false)) && (twig_length_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "items", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "items", array()), array())) : (array()))) > 0))) {
            // line 9
            echo "\t\t<a
\t\t\tclass=\"dropdown-toggle\"
\t\t\t";
            // line 12
            echo "\t\t\t";
            if ((( !(($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "external", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "external", array()), false)) : (false)) && (($this->getAttribute(            // line 13
(isset($context["item"]) ? $context["item"] : null), "page", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "page", array()), null)) : (null))) && $this->getAttribute($this->getAttribute(            // line 14
(isset($context["item"]) ? $context["item"] : null), "page", array()), "active", array()))) {
                // line 16
                echo "\t\t\t\thref=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "page", array()), "path", array()), "html", null, true));
                echo "\"
\t\t\t";
            }
            // line 18
            echo "\t\t>
\t\t\t";
            // line 19
            if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), "")) : (""))) {
                // line 20
                echo "\t\t\t\t";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), "html", null, true));
                echo "
\t\t\t";
            } elseif ((( !(($this->getAttribute(            // line 21
(isset($context["item"]) ? $context["item"] : null), "external", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "external", array()), false)) : (false)) && (($this->getAttribute(            // line 22
(isset($context["item"]) ? $context["item"] : null), "page", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "page", array()), null)) : (null))) && $this->getAttribute($this->getAttribute(            // line 23
(isset($context["item"]) ? $context["item"] : null), "page", array()), "active", array()))) {
                // line 25
                echo "\t\t\t\t";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "page", array()), "title", array()), "html", null, true));
                echo "
\t\t\t";
            }
            // line 27
            echo "\t\t\t<span class=\"caret\"></span>
\t\t</a>
\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "items", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                if ((($this->getAttribute($context["item"], "active", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "active", array()), false)) : (false))) {
                    // line 31
                    echo "\t\t\t\t";
                    $this->loadTemplate("_.module_types.menu.item", "_.module_types.menu.item", 31)->display($context);
                    // line 32
                    echo "\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t</ul>
\t";
        } elseif (((($this->getAttribute(        // line 34
(isset($context["item"]) ? $context["item"] : null), "external", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "external", array()), false)) : (false)) && (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url", array()), "")) : ("")))) {
            // line 35
            echo "\t\t<a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url", array()), "html", null, true));
            echo "\" target=\"_blank\">
\t\t\t";
            // line 36
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url", array()))) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url", array()))), "html", null, true));
            echo "
\t\t</a>
\t";
        } elseif ((( !(($this->getAttribute(        // line 38
(isset($context["item"]) ? $context["item"] : null), "external", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "external", array()), false)) : (false)) && (($this->getAttribute(        // line 39
(isset($context["item"]) ? $context["item"] : null), "page", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "page", array()), null)) : (null))) && $this->getAttribute($this->getAttribute(        // line 40
(isset($context["item"]) ? $context["item"] : null), "page", array()), "active", array()))) {
            // line 42
            echo "\t\t<a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "page", array()), "path", array()), "html", null, true));
            echo "\">
\t\t\t";
            // line 43
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "page", array()), "title", array()))) : ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "page", array()), "title", array()))), "html", null, true));
            echo "
\t\t</a>
\t";
        }
        // line 46
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "_.module_types.menu.item";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 46,  159 => 43,  154 => 42,  152 => 40,  151 => 39,  150 => 38,  145 => 36,  140 => 35,  138 => 34,  135 => 33,  125 => 32,  122 => 31,  111 => 30,  106 => 27,  100 => 25,  98 => 23,  97 => 22,  96 => 21,  91 => 20,  89 => 19,  86 => 18,  80 => 16,  78 => 14,  77 => 13,  75 => 12,  71 => 9,  69 => 8,  66 => 7,  61 => 6,  58 => 5,  53 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }
}
/* <li class="*/
/* 	{% if not item.external|default(false) and item.page|default(null) %}*/
/* 		{% if request.path == item.page.path or item.page.alias and request.path starts with item.page.path %}active{% endif %}*/
/* 		{% if request.path == item.page.path %}current{% endif %}*/
/* 	{% endif %}*/
/* 	{% if item.items|default([])|length > 0 %}dropdown{% endif %}*/
/* ">*/
/* 	{% if config.nested|default(false) and item.items|default([])|length > 0 %}*/
/* 		<a*/
/* 			class="dropdown-toggle"*/
/* 			{# data-toggle="dropdown" #}*/
/* 			{% if not item.external|default(false)*/
/* 				and item.page|default(null)*/
/* 				and item.page.active*/
/* 			%}*/
/* 				href="{$ item.page.path $}"*/
/* 			{% endif %}*/
/* 		>*/
/* 			{% if item.label|default('') %}*/
/* 				{$ item.label $}*/
/* 			{% elseif not item.external|default(false)*/
/* 				and item.page|default(null)*/
/* 				and item.page.active*/
/* 			%}*/
/* 				{$ item.page.title $}*/
/* 			{% endif %}*/
/* 			<span class="caret"></span>*/
/* 		</a>*/
/* 		<ul class="dropdown-menu" role="menu">*/
/* 			{% for item in item.items if item.active|default(false) %}*/
/* 				{% include '_.module_types.menu.item' %}*/
/* 			{% endfor %}*/
/* 		</ul>*/
/* 	{% elseif item.external|default(false) and item.url|default('') %}*/
/* 		<a href="{$ item.url $}" target="_blank">*/
/* 			{$ item.label|default(item.url) $}*/
/* 		</a>*/
/* 	{% elseif not item.external|default(false)*/
/* 		and item.page|default(null)*/
/* 		and item.page.active*/
/* 	%}*/
/* 		<a href="{$ item.page.path $}">*/
/* 			{$ item.label|default(item.page.title) $}*/
/* 		</a>*/
/* 	{% endif %}*/
/* </li>*/
/* */
