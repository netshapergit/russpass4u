<?php

/* blog_item */
class __TwigTemplate_7823f1163678ba679c48ac48f0beefae6c8cff2dbc6cb63524411cfbc0155544 extends TwigBridge\Twig\Template
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
        $tags = array("if" => 3);
        $filters = array("default" => 3, "escape" => 5);
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

        // line 1
        echo "<div class=\"thumbnail\">

\t";
        // line 3
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_header", array()), "")) : (""))) {
            // line 4
            echo "\t\t<div class=\"field_header\">
\t\t\t<a href=\"";
            // line 5
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
            echo "\">
\t\t\t\t";
            // line 6
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_header", array()), "html", null, true));
            echo "
\t\t\t</a>
\t\t</div>
\t";
        }
        // line 10
        echo "
\t";
        // line 11
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_image", array()), "")) : (""))) {
            // line 12
            echo "\t\t<div class=\"field_image\">
\t\t\t<a href=\"";
            // line 13
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
            echo "\">
\t\t\t\t<img src=\"/site/data/images/medium/";
            // line 14
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_image", array()), "html", null, true));
            echo "\">
\t\t\t</a>
\t\t</div>
\t";
        }
        // line 18
        echo "\t
\t";
        // line 19
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_summary", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_summary", array()), 0)) : (0))) {
            // line 20
            echo "\t\t<div class=\"field_summary\">
\t\t\t";
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_summary", array()), "html", null, true));
            echo "
\t\t</div>
\t";
        }
        // line 24
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "blog_item";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 24,  90 => 21,  87 => 20,  85 => 19,  82 => 18,  75 => 14,  71 => 13,  68 => 12,  66 => 11,  63 => 10,  56 => 6,  52 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }
}
/* <div class="thumbnail">*/
/* */
/* 	{% if item.field_header|default('') %}*/
/* 		<div class="field_header">*/
/* 			<a href="{$ item.path $}">*/
/* 				{$ item.field_header $}*/
/* 			</a>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if item.field_image|default('') %}*/
/* 		<div class="field_image">*/
/* 			<a href="{$ item.path $}">*/
/* 				<img src="/site/data/images/medium/{$ item.field_image $}">*/
/* 			</a>*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	*/
/* 	{% if item.field_summary|default(0) %}*/
/* 		<div class="field_summary">*/
/* 			{$ item.field_summary $}*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* </div>*/
