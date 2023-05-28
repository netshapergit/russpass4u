<?php

/* layouts.category_blog_filter */
class __TwigTemplate_ed07eae0d451cd3cd521fefeb78003b78707123602650ba7d28b77316343a780 extends TwigBridge\Twig\Template
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
        $tags = array("if" => 1, "set" => 7, "for" => 9, "include" => 33);
        $filters = array("default" => 1, "escape" => 2, "length" => 5, "merge" => 14, "round" => 20, "slice" => 22);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'for', 'include'),
                array('default', 'escape', 'length', 'merge', 'round', 'slice'),
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
            $context["items"] = array();
            // line 8
            echo "
";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_sub_pages", array()), "sortBy", array(0 => "order"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "\t\t";
                if (((twig_length_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array(), "any", false, true), "blogname_id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array(), "any", false, true), "blogname_id", array()), array())) : (array()))) == 0) || twig_in_filter((($this->getAttribute(                // line 11
$context["item"], "field_blogname_id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "field_blogname_id", array()), 0)) : (0)), $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "blogname_id", array())))) {
                    // line 14
                    echo "\t\t\t";
                    $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : null), array(0 => $context["item"]));
                    // line 15
                    echo "\t\t";
                }
                // line 16
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "
\t";
            // line 18
            $context["perPage"] = 8;
            // line 19
            echo "\t";
            $context["pageCurrent"] = (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array(), "any", false, true), "p", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array(), "any", false, true), "p", array()), 1)) : (1));
            // line 20
            echo "\t";
            $context["pageCount"] = twig_round((twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null)) / (isset($context["perPage"]) ? $context["perPage"] : null)), 0, "ceil");
            // line 21
            echo "
\t";
            // line 22
            $context["items"] = twig_slice($this->env, (isset($context["items"]) ? $context["items"] : null), ((isset($context["perPage"]) ? $context["perPage"] : null) * ((isset($context["pageCurrent"]) ? $context["pageCurrent"] : null) - 1)), (isset($context["perPage"]) ? $context["perPage"] : null));
            // line 23
            echo "

<ul class=\"media-list\">
\t\t\t\t\t\t\t\t\t

\t";
            // line 28
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
                // line 29
                echo "
\t\t
\t\t\t\t
\t\t<li class=\"media\">
\t\t\t";
                // line 33
                $this->loadTemplate("item_cat_blog", "layouts.category_blog_filter", 33)->display($context);
                // line 34
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
            // line 38
            echo "
\t\t\t
</ul>

\t\t\t\t\t\t\t\t\t\t
\t";
            // line 43
            if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > 1)) {
                // line 44
                echo "\t\t<div class=\"text-center\">
\t\t\t<ul class=\"pagination\">
\t\t\t\t";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pageCount"]) ? $context["pageCount"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["pageNumber"]) {
                    // line 47
                    echo "\t\t\t\t\t<li
\t\t\t\t\t\t";
                    // line 48
                    if (($context["pageNumber"] == (isset($context["pageCurrent"]) ? $context["pageCurrent"] : null))) {
                        // line 49
                        echo "\t\t\t\t\t\t\tclass=\"active\"
\t\t\t\t\t\t";
                    }
                    // line 51
                    echo "\t\t\t\t\t>
\t\t\t\t\t\t<a href=\"";
                    // line 52
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "url", array()), "html", null, true));
                    echo "?p=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["pageNumber"], "html", null, true));
                    echo "\">
\t\t\t\t\t\t\t";
                    // line 53
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["pageNumber"], "html", null, true));
                    echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageNumber'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "\t\t\t</ul>
\t\t</div>
\t";
            }
            // line 60
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "layouts.category_blog_filter";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 60,  194 => 57,  184 => 53,  178 => 52,  175 => 51,  171 => 49,  169 => 48,  166 => 47,  162 => 46,  158 => 44,  156 => 43,  149 => 38,  132 => 34,  130 => 33,  124 => 29,  107 => 28,  100 => 23,  98 => 22,  95 => 21,  92 => 20,  89 => 19,  87 => 18,  84 => 17,  78 => 16,  75 => 15,  72 => 14,  70 => 11,  68 => 10,  64 => 9,  61 => 8,  59 => 7,  56 => 6,  54 => 5,  51 => 4,  45 => 2,  43 => 1,);
    }
}
/* {% if page.field_header|default('') %}*/
/* 	<h1 class="field_header">{$ page.field_header $}</h1>*/
/* {% endif %}*/
/* */
/* {% if page.active_sub_pages|length > 0 %}*/
/* */
/* 	{% set items = [] %}*/
/* */
/* {% for item in page.active_sub_pages.sortBy('order') %}*/
/* 		{% if (request.input.blogname_id|default([])|length == 0*/
/* 				or item.field_blogname_id|default(0) in request.input.blogname_id)*/
/* */
/* 		%}*/
/* 			{% set items = items|merge([item]) %}*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* */
/* 	{% set perPage = 8 %}*/
/* 	{% set pageCurrent = request.input.p|default(1) %}*/
/* 	{% set pageCount = (items|length / perPage)|round(0, 'ceil') %}*/
/* */
/* 	{% set items = items|slice(perPage * (pageCurrent - 1), perPage) %}*/
/* */
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
