<?php

/* module_types.custom.finder */
class __TwigTemplate_60897791c3d853e1ca27f3c3248feba13eff0687ddacc441d0142251ed97d2ba extends TwigBridge\Twig\Template
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
        $filters = array("length" => 5, "merge" => 16, "escape" => 81);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for', 'if'),
                array('length', 'merge', 'escape'),
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
                                            echo "\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage5'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 30
                                        echo "\t\t\t\t\t\t\t";
                                    }
                                    // line 31
                                    echo "\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage4'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 32
                                echo "\t\t\t\t\t";
                            }
                            // line 33
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage3'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 34
                        echo "\t\t\t";
                    }
                    // line 35
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
";
        // line 39
        $context["cities"] = null;
        // line 40
        echo "
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ( !(isset($context["cities"]) ? $context["cities"] : null)) {
                // line 42
                echo "\t";
                if (($this->getAttribute($context["item"], "id", array()) == 63)) {
                    // line 43
                    echo "\t\t";
                    $context["cities"] = $context["item"];
                    // line 44
                    echo "\t";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
";
        // line 47
        $context["cats"] = array();
        // line 48
        echo "
";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cities"]) ? $context["cities"] : null), "active_sub_pages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 50
            echo "\t";
            if ((twig_length_filter($this->env, $this->getAttribute($context["city"], "active_sub_pages", array())) > 0)) {
                // line 51
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["city"], "active_sub_pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 52
                    echo "\t\t\t";
                    $context["cats"] = twig_array_merge((isset($context["cats"]) ? $context["cats"] : null), array(0 => $context["cat"]));
                    // line 53
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
";
        // line 57
        $context["uniqCats"] = array();
        // line 58
        $context["uniqCatsIds"] = array();
        // line 59
        echo "
";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cats"]) ? $context["cats"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 61
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["item"], "layout", array()), "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["xxx"]) {
                // line 62
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["xxx"], "selects", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["sel"]) {
                    // line 63
                    echo "\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["sel"], "options", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
                        // line 64
                        echo "\t\t\t\t";
                        if (!twig_in_filter($this->getAttribute($context["opt"], "id", array()), (isset($context["uniqCatsIds"]) ? $context["uniqCatsIds"] : null))) {
                            // line 65
                            echo "\t\t\t\t\t";
                            $context["uniqCatsIds"] = twig_array_merge((isset($context["uniqCatsIds"]) ? $context["uniqCatsIds"] : null), array(0 => $this->getAttribute($context["opt"], "id", array())));
                            // line 66
                            echo "\t\t\t\t\t";
                            $context["uniqCats"] = twig_array_merge((isset($context["uniqCats"]) ? $context["uniqCats"] : null), array(0 => $context["opt"]));
                            // line 67
                            echo "\t\t\t\t";
                        }
                        // line 68
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 69
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sel'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['xxx'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
<form id=\"finder\">
\t<div class=\"finder__item finder__item--query\">
\t\t<input type=\"text\" name=\"finder__query\" placeholder=\"Найди своё путешествие\">
\t</div>
\t<div class=\"finder__item finder__item--city\">
\t\t<select name=\"finder__city\">
\t\t\t<option value=\"\">Все города</option>
\t\t\t";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cities"]) ? $context["cities"] : null), "active_sub_pages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 81
            echo "\t\t\t\t<option value=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["city"], "id", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["city"], "title", array()), "html", null, true));
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "\t\t</select>
\t</div>
\t<div class=\"finder__item finder__item--category\">
\t\t<select name=\"finder__cat\">
\t\t\t<option value=\"\">Все объекты</option>
\t\t\t";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["uniqCats"]) ? $context["uniqCats"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 89
            echo "\t\t\t\t<option value=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true));
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "\t\t</select>
\t</div>
\t<div class=\"finder__item finder__item--submit\">
\t\t<button type=\"submit\" class=\"fa fa-search fa-flip-horizontal\"></button>
\t</div>
</form>";
    }

    public function getTemplateName()
    {
        return "module_types.custom.finder";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 91,  339 => 89,  335 => 88,  328 => 83,  317 => 81,  313 => 80,  303 => 72,  293 => 70,  287 => 69,  281 => 68,  278 => 67,  275 => 66,  272 => 65,  269 => 64,  264 => 63,  259 => 62,  254 => 61,  250 => 60,  247 => 59,  245 => 58,  243 => 57,  240 => 56,  233 => 54,  227 => 53,  224 => 52,  219 => 51,  216 => 50,  212 => 49,  209 => 48,  207 => 47,  204 => 46,  196 => 44,  193 => 43,  190 => 42,  185 => 41,  182 => 40,  180 => 39,  177 => 38,  170 => 36,  164 => 35,  161 => 34,  155 => 33,  152 => 32,  146 => 31,  143 => 30,  137 => 29,  134 => 28,  129 => 27,  126 => 26,  123 => 25,  118 => 24,  115 => 23,  112 => 22,  107 => 21,  104 => 20,  101 => 19,  96 => 18,  93 => 17,  90 => 16,  86 => 15,  83 => 14,  81 => 13,  77 => 11,  69 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
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
/* {% set cities = null %}*/
/* */
/* {% for item in items if not cities %}*/
/* 	{% if item.id == 63 %}*/
/* 		{% set cities = item %}*/
/* 	{% endif %}*/
/* {% endfor %}*/
/* */
/* {% set cats = [] %}*/
/* */
/* {% for city in cities.active_sub_pages %}*/
/* 	{% if city.active_sub_pages|length > 0 %}*/
/* 		{% for cat in city.active_sub_pages %}*/
/* 			{% set cats = cats|merge([cat]) %}*/
/* 		{% endfor %}*/
/* 	{% endif %}*/
/* {% endfor %}*/
/* */
/* {% set uniqCats = [] %}*/
/* {% set uniqCatsIds = [] %}*/
/* */
/* {% for item in cats %}*/
/* 	{% for xxx in item.layout.fields %}*/
/* 		{% for sel in xxx.selects %}*/
/* 			{% for opt in sel.options %}*/
/* 				{% if opt.id not in uniqCatsIds %}*/
/* 					{% set uniqCatsIds = uniqCatsIds|merge([opt.id]) %}*/
/* 					{% set uniqCats = uniqCats|merge([opt]) %}*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 		{% endfor %}*/
/* 	{% endfor %}*/
/* {% endfor %}*/
/* */
/* <form id="finder">*/
/* 	<div class="finder__item finder__item--query">*/
/* 		<input type="text" name="finder__query" placeholder="Найди своё путешествие">*/
/* 	</div>*/
/* 	<div class="finder__item finder__item--city">*/
/* 		<select name="finder__city">*/
/* 			<option value="">Все города</option>*/
/* 			{% for city in cities.active_sub_pages %}*/
/* 				<option value="{$ city.id $}">{$ city.title $}</option>*/
/* 			{% endfor %}*/
/* 		</select>*/
/* 	</div>*/
/* 	<div class="finder__item finder__item--category">*/
/* 		<select name="finder__cat">*/
/* 			<option value="">Все объекты</option>*/
/* 			{% for cat in uniqCats %}*/
/* 				<option value="{$ cat.id $}">{$ cat.name $}</option>*/
/* 			{% endfor %}*/
/* 		</select>*/
/* 	</div>*/
/* 	<div class="finder__item finder__item--submit">*/
/* 		<button type="submit" class="fa fa-search fa-flip-horizontal"></button>*/
/* 	</div>*/
/* </form>*/
