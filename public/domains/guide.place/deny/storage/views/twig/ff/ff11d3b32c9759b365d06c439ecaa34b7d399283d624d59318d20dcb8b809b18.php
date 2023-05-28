<?php

/* layouts.article */
class __TwigTemplate_66a387c0eea25d5932f41b65e0189f2adf1b8c2cf9b0df2cd40e8a944b289ccb extends TwigBridge\Twig\Template
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
        $tags = array("include" => 1, "set" => 19, "for" => 20);
        $filters = array("escape" => 6, "raw" => 16, "split" => 19, "trim" => 20);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include', 'set', 'for'),
                array('escape', 'raw', 'split', 'trim'),
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
        $this->loadTemplate("header", "layouts.article", 1)->display($context);
        // line 2
        echo "
<section class=\"article\">
\t<div class=\"article-top\">
\t\t<div class=\"article-top__img\">
\t\t\t<img src=\"/site/data/images/large/";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_image", array()), "html", null, true));
        echo "\">
\t\t</div>
\t</div>
\t<div class=\"article-mid\">
\t\t<div class=\"cont_blog\">
\t\t\t<h1 class=\"article__title\">";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array()), "html", null, true));
        echo "</h1>
\t\t\t<div class=\"article__summary\">
\t\t\t\t";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_summary", array()), "html", null, true));
        echo "
\t\t\t</div>
\t\t\t<div class=\"article__content\">
\t\t\t\t";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_content", array()));
        echo "
\t\t\t</div>
\t\t\t<div class=\"article__tags\">
\t\t\t\t";
        // line 19
        $context["tags"] = twig_split_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_tags", array()), ",");
        // line 20
        echo "\t\t\t    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            echo "<a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent_page", array()), "path", array()), "html", null, true));
            echo "?tags=";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, trim($context["tag"]), "html", null, true));
            echo "\">#";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, trim($context["tag"]), "html", null, true));
            echo "</a>&nbsp;&nbsp;&nbsp;";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</section>

";
        // line 26
        $this->loadTemplate("footer", "layouts.article", 26)->display($context);
    }

    public function getTemplateName()
    {
        return "layouts.article";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 26,  94 => 21,  78 => 20,  76 => 19,  70 => 16,  64 => 13,  59 => 11,  51 => 6,  45 => 2,  43 => 1,);
    }
}
/* {% include 'header' %}*/
/* */
/* <section class="article">*/
/* 	<div class="article-top">*/
/* 		<div class="article-top__img">*/
/* 			<img src="/site/data/images/large/{$ page.field_image $}">*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="article-mid">*/
/* 		<div class="cont_blog">*/
/* 			<h1 class="article__title">{$ page.field_header $}</h1>*/
/* 			<div class="article__summary">*/
/* 				{$ page.field_summary $}*/
/* 			</div>*/
/* 			<div class="article__content">*/
/* 				{$ page.field_content|raw $}*/
/* 			</div>*/
/* 			<div class="article__tags">*/
/* 				{% set tags = page.field_tags|split(',') %}*/
/* 			    {% for tag in tags %}<a href="{$ page.parent_page.path $}?tags={$ tag|trim $}">#{$ tag|trim $}</a>&nbsp;&nbsp;&nbsp;{% endfor %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* */
/* {% include 'footer' %}*/
