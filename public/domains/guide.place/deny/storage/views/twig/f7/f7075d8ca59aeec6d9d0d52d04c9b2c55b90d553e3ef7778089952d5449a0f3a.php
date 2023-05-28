<?php

/* layouts.category_blog */
class __TwigTemplate_9dbade3b5d75e495d3a32fcbf9d078a5eaf9de8e9dfe1b511ace8ebc0157d629 extends TwigBridge\Twig\Template
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
        $tags = array("if" => 1, "set" => 7, "for" => 16, "include" => 21);
        $filters = array("default" => 1, "escape" => 2, "length" => 5, "round" => 9);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'for', 'include'),
                array('default', 'escape', 'length', 'round'),
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
            echo "\t<h1 class=\"field_header\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array()), "html", null, true));
            echo "</h1>
";
        }
        // line 4
        echo "
";
        // line 5
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_sub_pages", array())) > 0)) {
            // line 6
            echo "
\t";
            // line 7
            $context["perPage"] = 8;
            // line 8
            echo "\t";
            $context["pageCurrent"] = (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array(), "any", false, true), "p", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array(), "any", false, true), "p", array()), 1)) : (1));
            // line 9
            echo "\t";
            $context["pageCount"] = twig_round((twig_length_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_sub_pages", array())) / (isset($context["perPage"]) ? $context["perPage"] : null)), 0, "ceil");
            // line 10
            echo "
\t";
            // line 11
            $context["items"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_sub_pages", array()), "sortBy", array(0 => "order"), "method"), "slice", array(0 => ((isset($context["perPage"]) ? $context["perPage"] : null) * ((isset($context["pageCurrent"]) ? $context["pageCurrent"] : null) - 1)), 1 => (isset($context["perPage"]) ? $context["perPage"] : null)), "method");
            // line 12
            echo "
<ul class=\"media-list\">
\t\t\t\t\t\t\t\t\t

\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                echo "
\t\t
\t\t\t\t
\t\t<li class=\"media\">
\t\t\t";
                // line 21
                $this->loadTemplate("item_cat_blog", "layouts.category_blog", 21)->display($context);
                // line 22
                echo "\t\t</li>

\t\t\t
\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "
\t\t\t
</ul>

\t\t\t\t\t\t\t\t\t\t
\t";
            // line 31
            if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > 1)) {
                // line 32
                echo "\t\t<div class=\"text-center\">
\t\t\t<ul class=\"pagination\">
\t\t\t\t";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pageCount"]) ? $context["pageCount"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["pageNumber"]) {
                    // line 35
                    echo "\t\t\t\t\t<li
\t\t\t\t\t\t";
                    // line 36
                    if (($context["pageNumber"] == (isset($context["pageCurrent"]) ? $context["pageCurrent"] : null))) {
                        // line 37
                        echo "\t\t\t\t\t\t\tclass=\"active\"
\t\t\t\t\t\t";
                    }
                    // line 39
                    echo "\t\t\t\t\t>
\t\t\t\t\t\t<a href=\"";
                    // line 40
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "url", array()), "html", null, true));
                    echo "?p=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["pageNumber"], "html", null, true));
                    echo "\">
\t\t\t\t\t\t\t";
                    // line 41
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["pageNumber"], "html", null, true));
                    echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageNumber'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "\t\t\t</ul>
\t\t</div>
\t";
            }
            // line 48
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "layouts.category_blog";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 48,  165 => 45,  155 => 41,  149 => 40,  146 => 39,  142 => 37,  140 => 36,  137 => 35,  133 => 34,  129 => 32,  127 => 31,  120 => 26,  103 => 22,  101 => 21,  95 => 17,  78 => 16,  72 => 12,  70 => 11,  67 => 10,  64 => 9,  61 => 8,  59 => 7,  56 => 6,  54 => 5,  51 => 4,  45 => 2,  43 => 1,);
    }
}
/* {% if page.field_header|default('') %}*/
/* 	<h1 class="field_header">{$ page.field_header $}</h1>*/
/* {% endif %}*/
/* */
/* {% if page.active_sub_pages|length > 0 %}*/
/* */
/* 	{% set perPage = 8 %}*/
/* 	{% set pageCurrent = request.input.p|default(1) %}*/
/* 	{% set pageCount = (page.active_sub_pages|length / perPage)|round(0, 'ceil') %}*/
/* */
/* 	{% set items = page.active_sub_pages.sortBy('order').slice(perPage * (pageCurrent - 1), perPage) %}*/
/* */
/* <ul class="media-list">*/
/* 									*/
/* */
/* 	{% for item in items %}*/
/* */
/* 		*/
/* 				*/
/* 		<li class="media">*/
/* 			{% include 'item_cat_blog' %}*/
/* 		</li>*/
/* */
/* 			*/
/* 	{% endfor %}*/
/* */
/* 			*/
/* </ul>*/
/* */
/* 										*/
/* 	{% if pageCount > 1 %}*/
/* 		<div class="text-center">*/
/* 			<ul class="pagination">*/
/* 				{% for pageNumber in 1..pageCount %}*/
/* 					<li*/
/* 						{% if pageNumber == pageCurrent %}*/
/* 							class="active"*/
/* 						{% endif %}*/
/* 					>*/
/* 						<a href="{$ request.url $}?p={$ pageNumber $}">*/
/* 							{$ pageNumber $}*/
/* 						</a>*/
/* 					</li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* {% endif %}*/
/* */
