<?php

/* layouts.travellers */
class __TwigTemplate_0a33e185bc74467df99cb8fde3eb483539b2202d4244a3bb7ce82dc115c83b9e extends TwigBridge\Twig\Template
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
        $filters = array("default" => 3, "escape" => 5, "striptags" => 13, "raw" => 16);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('default', 'escape', 'striptags', 'raw'),
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
        echo "<div class=\"travellers_item\">
\t
\t";
        // line 3
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_image", array()), "")) : (""))) {
            // line 4
            echo "\t<div class=\"travellers_image\">
\t\t<img data-rel=\"images\" data-popup=\"/site/data/images/large/";
            // line 5
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), ("field_image" . (isset($context["index"]) ? $context["index"] : null)), array(), "array"), "html", null, true));
            echo "\" src=\"/site/data/images/medium/";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), ("field_image" . (isset($context["index"]) ? $context["index"] : null)), array(), "array"), "html", null, true));
            echo "\">
\t</div>
\t";
        }
        // line 8
        echo "
\t";
        // line 9
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array()), "")) : (""))) {
            // line 10
            echo "\t\t<h1>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array()), "html", null, true));
            echo "</h1>
\t";
        }
        // line 12
        echo "
\t";
        // line 13
        if (strip_tags((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_content", array()), "")) : ("")))) {
            // line 14
            echo "\t\t<div class=\"field_content\">
\t\t\t<!--<h2>Описание</h2>-->
\t\t\t";
            // line 16
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_content", array()));
            echo "
\t\t</div>
\t";
        }
        // line 19
        echo "\t
\t

\t
\t
</div>";
    }

    public function getTemplateName()
    {
        return "layouts.travellers";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 19,  80 => 16,  76 => 14,  74 => 13,  71 => 12,  65 => 10,  63 => 9,  60 => 8,  52 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }
}
/* <div class="travellers_item">*/
/* 	*/
/* 	{% if page.field_image|default('') %}*/
/* 	<div class="travellers_image">*/
/* 		<img data-rel="images" data-popup="/site/data/images/large/{$ page['field_image' ~ index] $}" src="/site/data/images/medium/{$ page['field_image' ~ index] $}">*/
/* 	</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if page.field_header|default('') %}*/
/* 		<h1>{$ page.field_header $}</h1>*/
/* 	{% endif %}*/
/* */
/* 	{% if page.field_content|default('')|striptags %}*/
/* 		<div class="field_content">*/
/* 			<!--<h2>Описание</h2>-->*/
/* 			{$ page.field_content|raw $}*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	*/
/* 	*/
/* */
/* 	*/
/* 	*/
/* </div>*/
