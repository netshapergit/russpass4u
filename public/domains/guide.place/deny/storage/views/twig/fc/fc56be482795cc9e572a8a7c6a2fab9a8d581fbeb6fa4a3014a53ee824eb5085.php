<?php

/* module_types.custom.search_blog */
class __TwigTemplate_62f86f42b9a5a0c74a0632a2686de9350ffc64e70109c38384766f72e562c8f2 extends TwigBridge\Twig\Template
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
        $tags = array("for" => 6, "if" => 14);
        $filters = array("escape" => 1, "default" => 6);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if'),
                array('escape', 'default'),
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
        echo "<form class=\"search_new_building\" method=\"get\" action=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "url", array()), "html", null, true));
        echo "\">
\t

\t\t
\t\t\t\t<div class=\"checkbox col-xs-6 blogname\">
\t\t\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_sub_pages", array(), "any", false, true), 0, array(), "array", false, true), "layout", array(), "any", false, true), "fields", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_sub_pages", array(), "any", false, true), 0, array(), "array", false, true), "layout", array(), "any", false, true), "fields", array()), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            if (($this->getAttribute($context["field"], "alias", array()) == "blogname_id")) {
                // line 7
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($this->getAttribute($context["field"], "selects", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["field"], "selects", array()), array())) : (array())));
                foreach ($context['_seq'] as $context["_key"] => $context["select"]) {
                    // line 8
                    echo "\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($this->getAttribute($context["select"], "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["select"], "options", array()), array())) : (array())));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 9
                        echo "\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\t\t\t\t\tname=\"blogname_id[]\"
\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 13
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["option"], "id", array()), "html", null, true));
                        echo "\"
\t\t\t\t\t\t\t\t\t   ";
                        // line 14
                        if (twig_in_filter($this->getAttribute($context["option"], "id", array()), (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array(), "any", false, true), "blogname_id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array(), "any", false, true), "blogname_id", array()), array())) : (array())))) {
                            // line 15
                            echo "\t\t\t\t\t\t\t\t\t\t   checked
\t\t\t\t\t\t\t\t\t   ";
                        }
                        // line 17
                        echo "\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t";
                        // line 18
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", array()), "html", null, true));
                        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['select'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "\t\t\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t</div>
\t\t\t\t

\t\t<div class=\"col-xs-12 col-md-2\">
\t\t\t<div class=\"form-group submit\">
\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" value=\"Подобрать\">
\t\t\t</div>
\t\t</div>

\t
</form>";
    }

    public function getTemplateName()
    {
        return "module_types.custom.search_blog";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 23,  101 => 22,  95 => 21,  86 => 18,  83 => 17,  79 => 15,  77 => 14,  73 => 13,  67 => 9,  62 => 8,  57 => 7,  52 => 6,  43 => 1,);
    }
}
/* <form class="search_new_building" method="get" action="{$ request.url $}">*/
/* 	*/
/* */
/* 		*/
/* 				<div class="checkbox col-xs-6 blogname">*/
/* 					{% for field in page.active_sub_pages[0].layout.fields|default([]) if field.alias == 'blogname_id' %}*/
/* 						{% for select in field.selects|default([]) %}*/
/* 							{% for option in select.options|default([]) %}*/
/* 								<label>*/
/* 									<input*/
/* 										type="checkbox"*/
/* 										name="blogname_id[]"*/
/* 										value="{$ option.id $}"*/
/* 									   {% if option.id in request.input.blogname_id|default([]) %}*/
/* 										   checked*/
/* 									   {% endif %}*/
/* 									>*/
/* 									{$ option.name $}*/
/* 								</label>*/
/* 							{% endfor %}*/
/* 						{% endfor %}*/
/* 					{% endfor %}*/
/* 				</div>*/
/* 				*/
/* */
/* 		<div class="col-xs-12 col-md-2">*/
/* 			<div class="form-group submit">*/
/* 				<input class="btn btn-default" type="submit" value="Подобрать">*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 	*/
/* </form>*/
