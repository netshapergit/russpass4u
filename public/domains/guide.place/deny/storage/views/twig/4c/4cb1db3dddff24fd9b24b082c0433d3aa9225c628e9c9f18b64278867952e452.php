<?php

/* layouts.get_tags */
class __TwigTemplate_29a053bd0c99b676d21b9ba2e07ce35188aae94ef68518b2e51ecaada4fd5b71 extends TwigBridge\Twig\Template
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
        $tags = array("set" => 1, "for" => 4, "if" => 5);
        $filters = array("length" => 5, "merge" => 16, "trim" => 75, "lower" => 75, "split" => 80, "raw" => 110, "json_encode" => 110);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for', 'if'),
                array('length', 'merge', 'trim', 'lower', 'split', 'raw', 'json_encode'),
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
        $context["homepage"] = (isset($context["page"]) ? $context["page"] : null);
        // line 2
        $context["index"] = (isset($context["page"]) ? $context["page"] : null);
        // line 3
        $context["check"] = true;
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            if ((isset($context["check"]) ? $context["check"] : null)) {
                // line 5
                echo "\t";
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["index"]) ? $context["index"] : null), "parent_page", array())) > 0)) {
                    // line 6
                    echo "\t\t";
                    $context["index"] = $this->getAttribute((isset($context["index"]) ? $context["index"] : null), "parent_page", array());
                    // line 7
                    echo "\t\t";
                    $context["homepage"] = (isset($context["index"]) ? $context["index"] : null);
                    // line 8
                    echo "\t";
                } else {
                    // line 9
                    echo "\t\t";
                    $context["check"] = false;
                    // line 10
                    echo "\t";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t

";
        // line 13
        $context["items"] = array();
        // line 14
        echo "
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["homepage"]) ? $context["homepage"] : null), "active_sub_pages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subpage1"]) {
            // line 16
            echo "\t\t";
            $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : null), array(0 => $context["subpage1"]));
            // line 17
            echo "\t";
            if ((twig_length_filter($this->env, $this->getAttribute($context["subpage1"], "active_sub_pages", array())) > 0)) {
                // line 18
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subpage1"], "active_sub_pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["subpage2"]) {
                    // line 19
                    echo "\t\t\t\t";
                    $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : null), array(0 => $context["subpage2"]));
                    // line 20
                    echo "\t\t\t";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["subpage2"], "active_sub_pages", array())) > 0)) {
                        // line 21
                        echo "\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subpage2"], "active_sub_pages", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["subpage3"]) {
                            // line 22
                            echo "\t\t\t\t\t\t";
                            $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : null), array(0 => $context["subpage3"]));
                            // line 23
                            echo "\t\t\t\t\t";
                            if ((twig_length_filter($this->env, $this->getAttribute($context["subpage3"], "active_sub_pages", array())) > 0)) {
                                // line 24
                                echo "\t\t\t\t\t\t";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subpage3"], "active_sub_pages", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["subpage4"]) {
                                    // line 25
                                    echo "\t\t\t\t\t\t\t\t";
                                    $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : null), array(0 => $context["subpage4"]));
                                    // line 26
                                    echo "\t\t\t\t\t\t\t";
                                    if ((twig_length_filter($this->env, $this->getAttribute($context["subpage4"], "active_sub_pages", array())) > 0)) {
                                        // line 27
                                        echo "\t\t\t\t\t\t\t\t";
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subpage4"], "active_sub_pages", array()));
                                        foreach ($context['_seq'] as $context["_key"] => $context["subpage5"]) {
                                            // line 28
                                            echo "\t\t\t\t\t\t\t\t\t\t";
                                            $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : null), array(0 => $context["subpage5"]));
                                            // line 29
                                            echo "\t\t\t\t\t\t\t\t\t";
                                            if ((twig_length_filter($this->env, $this->getAttribute($context["subpage5"], "active_sub_pages", array())) > 0)) {
                                                // line 30
                                                echo "\t\t\t\t\t\t\t\t\t\t";
                                                $context['_parent'] = $context;
                                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subpage5"], "active_sub_pages", array()));
                                                foreach ($context['_seq'] as $context["_key"] => $context["subpage6"]) {
                                                    // line 31
                                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                                    $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : null), array(0 => $context["subpage6"]));
                                                    // line 32
                                                    echo "\t\t\t\t\t\t\t\t\t\t";
                                                }
                                                $_parent = $context['_parent'];
                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage6'], $context['_parent'], $context['loop']);
                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                // line 33
                                                echo "\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 34
                                            echo "\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage5'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 35
                                        echo "\t\t\t\t\t\t\t";
                                    }
                                    // line 36
                                    echo "\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage4'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 37
                                echo "\t\t\t\t\t";
                            }
                            // line 38
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage3'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 39
                        echo "\t\t\t";
                    }
                    // line 40
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "


";
        // line 46
        $context["curItems"] = array();
        // line 47
        $context["curLayouts"] = array(0 => 53, 1 => 51, 2 => 22, 3 => 17, 4 => 24, 5 => 49, 6 => 50, 7 => 52);
        // line 48
        echo "
";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 50
            echo "\t";
            if (twig_in_filter($this->getAttribute($context["item"], "layout_id", array()), (isset($context["curLayouts"]) ? $context["curLayouts"] : null))) {
                // line 51
                echo "\t\t";
                $context["curItems"] = twig_array_merge((isset($context["curItems"]) ? $context["curItems"] : null), array(0 => $context["item"]));
                // line 52
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
";
        // line 55
        $context["items"] = (isset($context["curItems"]) ? $context["curItems"] : null);
        // line 56
        echo "
";
        // line 57
        $context["uniqResults"] = array();
        // line 58
        $context["uniqIDs"] = array();
        // line 59
        echo "
";
        // line 60
        if ((twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null)) > 0)) {
            // line 61
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 62
                echo "\t\t";
                if (!twig_in_filter($this->getAttribute($context["item"], "id", array()), (isset($context["uniqIDs"]) ? $context["uniqIDs"] : null))) {
                    // line 63
                    echo "\t\t\t";
                    $context["uniqResults"] = twig_array_merge((isset($context["uniqResults"]) ? $context["uniqResults"] : null), array(0 => $context["item"]));
                    // line 64
                    echo "\t\t\t";
                    $context["uniqIDs"] = twig_array_merge((isset($context["uniqIDs"]) ? $context["uniqIDs"] : null), array(0 => $this->getAttribute($context["item"], "id", array())));
                    // line 65
                    echo "\t\t";
                }
                // line 66
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 68
        echo "
";
        // line 69
        $context["items"] = (isset($context["uniqResults"]) ? $context["uniqResults"] : null);
        // line 70
        echo "
";
        // line 71
        $context["tagsCloud"] = array();
        // line 72
        echo "
";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 74
            echo "
\t";
            // line 75
            if (!twig_in_filter(trim(twig_lower_filter($this->env, $this->getAttribute($context["item"], "field_header", array()))), (isset($context["tagsCloud"]) ? $context["tagsCloud"] : null))) {
                // line 76
                echo "\t\t";
                $context["tagsCloud"] = twig_array_merge((isset($context["tagsCloud"]) ? $context["tagsCloud"] : null), array(0 => trim(twig_lower_filter($this->env, $this->getAttribute($context["item"], "field_header", array())))));
                // line 77
                echo "\t";
            }
            // line 78
            echo "
\t";
            // line 79
            if ($this->getAttribute($context["item"], "field_tags", array())) {
                // line 80
                echo "\t\t";
                $context["itemTags"] = twig_split_filter($this->env, $this->getAttribute($context["item"], "field_tags", array()), ",");
                // line 81
                echo "\t\t";
                if ((twig_length_filter($this->env, (isset($context["itemTags"]) ? $context["itemTags"] : null)) > 0)) {
                    // line 82
                    echo "\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["itemTags"]) ? $context["itemTags"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["itemTag"]) {
                        // line 83
                        echo "\t\t\t\t";
                        $context["preparedItemTag"] = trim(twig_lower_filter($this->env, $context["itemTag"]));
                        // line 84
                        echo "\t\t\t\t";
                        if (((twig_length_filter($this->env, (isset($context["preparedItemTag"]) ? $context["preparedItemTag"] : null)) > 0) && !twig_in_filter((isset($context["preparedItemTag"]) ? $context["preparedItemTag"] : null), (isset($context["tagsCloud"]) ? $context["tagsCloud"] : null)))) {
                            echo " 
\t\t\t\t\t";
                            // line 85
                            $context["tagsCloud"] = twig_array_merge((isset($context["tagsCloud"]) ? $context["tagsCloud"] : null), array(0 => (isset($context["preparedItemTag"]) ? $context["preparedItemTag"] : null)));
                            // line 86
                            echo "\t\t\t\t";
                        }
                        // line 87
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemTag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 88
                    echo "\t\t";
                }
                // line 89
                echo "\t";
            }
            // line 90
            echo "
\t";
            // line 107
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "
";
        // line 110
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_jsonencode_filter((isset($context["tagsCloud"]) ? $context["tagsCloud"] : null)));
        echo "

";
    }

    public function getTemplateName()
    {
        return "layouts.get_tags";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 110,  346 => 109,  339 => 107,  336 => 90,  333 => 89,  330 => 88,  324 => 87,  321 => 86,  319 => 85,  314 => 84,  311 => 83,  306 => 82,  303 => 81,  300 => 80,  298 => 79,  295 => 78,  292 => 77,  289 => 76,  287 => 75,  284 => 74,  280 => 73,  277 => 72,  275 => 71,  272 => 70,  270 => 69,  267 => 68,  260 => 66,  257 => 65,  254 => 64,  251 => 63,  248 => 62,  243 => 61,  241 => 60,  238 => 59,  236 => 58,  234 => 57,  231 => 56,  229 => 55,  226 => 54,  219 => 52,  216 => 51,  213 => 50,  209 => 49,  206 => 48,  204 => 47,  202 => 46,  197 => 43,  190 => 41,  184 => 40,  181 => 39,  175 => 38,  172 => 37,  166 => 36,  163 => 35,  157 => 34,  154 => 33,  148 => 32,  145 => 31,  140 => 30,  137 => 29,  134 => 28,  129 => 27,  126 => 26,  123 => 25,  118 => 24,  115 => 23,  112 => 22,  107 => 21,  104 => 20,  101 => 19,  96 => 18,  93 => 17,  90 => 16,  86 => 15,  83 => 14,  81 => 13,  77 => 11,  69 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% set homepage = page %}*/
/* {% set index = page %}*/
/* {% set check = true %}*/
/* {% for items in 1..10 if check %}*/
/* 	{% if index.parent_page|length > 0 %}*/
/* 		{% set index = index.parent_page %}*/
/* 		{% set homepage = index %}*/
/* 	{% else %}*/
/* 		{% set check = false %}*/
/* 	{% endif %}*/
/* {% endfor %}	*/
/* */
/* {% set items = [] %}*/
/* */
/* {% for subpage1 in homepage.active_sub_pages %}*/
/* 		{% set items = items|merge([subpage1]) %}*/
/* 	{% if subpage1.active_sub_pages|length > 0 %}*/
/* 		{% for subpage2 in subpage1.active_sub_pages %}*/
/* 				{% set items = items|merge([subpage2]) %}*/
/* 			{% if subpage2.active_sub_pages|length > 0 %}*/
/* 				{% for subpage3 in subpage2.active_sub_pages %}*/
/* 						{% set items = items|merge([subpage3]) %}*/
/* 					{% if subpage3.active_sub_pages|length > 0 %}*/
/* 						{% for subpage4 in subpage3.active_sub_pages %}*/
/* 								{% set items = items|merge([subpage4]) %}*/
/* 							{% if subpage4.active_sub_pages|length > 0 %}*/
/* 								{% for subpage5 in subpage4.active_sub_pages %}*/
/* 										{% set items = items|merge([subpage5]) %}*/
/* 									{% if subpage5.active_sub_pages|length > 0 %}*/
/* 										{% for subpage6 in subpage5.active_sub_pages %}*/
/* 												{% set items = items|merge([subpage6]) %}*/
/* 										{% endfor %}*/
/* 									{% endif %}*/
/* 								{% endfor %}*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	{% endif %}*/
/* {% endfor %}*/
/* */
/* */
/* */
/* {% set curItems = [] %}*/
/* {% set curLayouts = [53, 51, 22, 17, 24, 49, 50, 52] %}*/
/* */
/* {% for item in items %}*/
/* 	{% if item.layout_id in curLayouts %}*/
/* 		{% set curItems = curItems|merge([item]) %}*/
/* 	{% endif %}*/
/* {% endfor %}*/
/* */
/* {% set items = curItems %}*/
/* */
/* {% set uniqResults = [] %}*/
/* {% set uniqIDs = [] %}*/
/* */
/* {% if items|length > 0 %}*/
/* 	{% for item in items %}*/
/* 		{% if item.id not in uniqIDs %}*/
/* 			{% set uniqResults = uniqResults|merge([item]) %}*/
/* 			{% set uniqIDs = uniqIDs|merge([item.id]) %}*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* {% endif %}*/
/* */
/* {% set items = uniqResults %}*/
/* */
/* {% set tagsCloud = [] %}*/
/* */
/* {% for item in items %}*/
/* */
/* 	{% if item.field_header|lower|trim not in tagsCloud %}*/
/* 		{% set tagsCloud = tagsCloud|merge([item.field_header|lower|trim]) %}*/
/* 	{% endif %}*/
/* */
/* 	{% if item.field_tags %}*/
/* 		{% set itemTags = item.field_tags|split(',') %}*/
/* 		{% if itemTags|length > 0 %}*/
/* 			{% for itemTag in itemTags %}*/
/* 				{% set preparedItemTag = itemTag|lower|trim %}*/
/* 				{% if (preparedItemTag|length > 0) and (preparedItemTag not in tagsCloud) %} */
/* 					{% set tagsCloud = tagsCloud|merge([preparedItemTag]) %}*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 		{% endif %}*/
/* 	{% endif %}*/
/* */
/* 	{#*/
/* 	{% if item.field_filters %}*/
/* 		{% set itemFilters = item.field_filters|split(';') %}*/
/* 		{% if itemFilters|length > 0 %}*/
/* 			{% for filter in itemFilters %}*/
/* 				{% set itemParsedFilter = filter|split(':') %}*/
/* 				{% set itemParsedFilterValues = itemParsedFilter[1]|split(',') %}*/
/* 				{% for value in itemParsedFilterValues %}*/
/* 					{% if (value|lower|trim|length > 0) and (value|lower|trim not in tagsCloud) %}*/
/* 						{% set tagsCloud = tagsCloud|merge([value|lower|trim]) %}*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			{% endfor %}*/
/* 		{% endif %}*/
/* 	{% endif %}*/
/* 	#}*/
/* */
/* {% endfor %}*/
/* */
/* {$ tagsCloud|json_encode|raw $}*/
/* */
/* {#*/
/* {% for tag in tagsCloud %}*/
/* 	{$ tag $}<br>*/
/* {% endfor %}*/
/* #}*/
