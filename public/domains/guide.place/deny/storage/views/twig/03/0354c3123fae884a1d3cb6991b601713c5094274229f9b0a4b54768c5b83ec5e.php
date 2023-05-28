<?php

/* _.emails.feedback */
class __TwigTemplate_236649983324d54022e27be3c7507afe51c9893146129258cc57d26eb6ed4976 extends TwigBridge\Twig\Template
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
        $tags = array("for" => 2, "if" => 8);
        $filters = array("escape" => 5, "join" => 11);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if'),
                array('escape', 'join'),
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
        echo "<table>
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["feedback"]) ? $context["feedback"] : null), "forme", array()), "fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 3
            echo "\t\t<tr>
\t\t\t<th style=\"text-align: left; vertical-align: top;\">
\t\t\t\t";
            // line 5
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true));
            echo "
\t\t\t</th>
\t\t\t<td style=\"vertical-align: top; white-space: pre-wrap;\">";
            // line 8
            if (($this->getAttribute($this->getAttribute($context["field"], "field_type", array()), "alias", array()) == "option")) {
                // line 9
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["feedback"]) ? $context["feedback"] : null), $this->getAttribute($context["field"], "getRelationName", array(), "method"), array(), "array"), "name", array()), "html", null, true));
            } elseif (($this->getAttribute($this->getAttribute(            // line 10
$context["field"], "field_type", array()), "alias", array()) == "options")) {
                // line 11
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute((isset($context["feedback"]) ? $context["feedback"] : null), $this->getAttribute($context["field"], "getRelationName", array(), "method"), array(), "array"), "lists", array(0 => "name"), "method"), ", "), "html", null, true));
            } elseif (($this->getAttribute($this->getAttribute(            // line 12
$context["field"], "field_type", array()), "alias", array()) == "file")) {
                // line 13
                echo "<a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((("http://" . $this->getAttribute((isset($context["feedback"]) ? $context["feedback"] : null), "useragent", array())) . "/site/data/files/") . $this->getAttribute((isset($context["feedback"]) ? $context["feedback"] : null), ("field_" . $this->getAttribute($context["field"], "alias", array())), array(), "array")), "html", null, true));
                echo "\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["feedback"]) ? $context["feedback"] : null), ("field_" . $this->getAttribute($context["field"], "alias", array())), array(), "array"), "html", null, true));
                echo "</a>";
            } else {
                // line 15
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["feedback"]) ? $context["feedback"] : null), ("field_" . $this->getAttribute($context["field"], "alias", array())), array(), "array"), "html", null, true));
            }
            // line 17
            echo "</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</table>


";
    }

    public function getTemplateName()
    {
        return "_.emails.feedback";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 20,  79 => 17,  76 => 15,  69 => 13,  67 => 12,  65 => 11,  63 => 10,  61 => 9,  59 => 8,  54 => 5,  50 => 3,  46 => 2,  43 => 1,);
    }
}
/* <table>*/
/* 	{% for field in feedback.forme.fields %}*/
/* 		<tr>*/
/* 			<th style="text-align: left; vertical-align: top;">*/
/* 				{$ field.name $}*/
/* 			</th>*/
/* 			<td style="vertical-align: top; white-space: pre-wrap;">{#*/
/* 				#}{% if field.field_type.alias == 'option' %}{#*/
/* 					#}{$ feedback[field.getRelationName()].name $}{#*/
/* 				#}{% elseif field.field_type.alias == 'options' %}{#*/
/* 					#}{$ feedback[field.getRelationName()].lists('name')|join(', ') $}{#*/
/* 				#}{% elseif field.field_type.alias == 'file' %}{#*/
/* 					#}<a href="{$ 'http://' ~ feedback.useragent ~ '/site/data/files/' ~ feedback['field_' ~ field.alias] $}">{$ feedback['field_' ~ field.alias] $}</a>{#*/
/* 				#}{% else %}{#*/
/* 					#}{$ feedback['field_' ~ field.alias] $}{#*/
/* 				#}{% endif %}{#*/
/* 			#}</td>*/
/* 		</tr>*/
/* 	{% endfor %}*/
/* </table>*/
/* */
/* */
/* */
