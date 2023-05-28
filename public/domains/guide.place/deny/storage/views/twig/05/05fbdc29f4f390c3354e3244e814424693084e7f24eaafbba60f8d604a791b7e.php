<?php

/* _.site */
class __TwigTemplate_e71cb2cb96ec7a5cff8677126b2c2bee678be26c601fa07c89b44a52b49c365d extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.root", "_.site", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.root";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array("escape" => 3, "default" => 3);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "")) : ("")), "html", null, true));
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "
\t";
        // line 7
        $this->displayParentBlock("head", $context, $blocks);
        echo "

\t<meta name=\"keywords\" content=\"";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "keywords", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "keywords", array()), "")) : ("")), "html", null, true));
        echo "\">
\t<meta name=\"description\" content=\"";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description", array()), "")) : ("")), "html", null, true));
        echo "\">

\t";
        // line 13
        echo "
\t<link rel=\"stylesheet\" href=\"/packages/colorbox/1.5.9/example5/colorbox.css\">

\t<script src=\"/packages/jquery/2.1.0/jquery.min.js\"></script>
\t<script src=\"/packages/colorbox/1.5.9/jquery.colorbox-min.js\"></script>
\t<script src=\"/packages/colorbox/1.5.9/i18n/jquery.colorbox-ru.js\"></script>

\t<script src=\"/packages/netshaper/site/js/site.js\"></script>
\t<link rel=\"stylesheet\" href=\"/packages/netshaper/site/css/site.css\">

";
    }

    public function getTemplateName()
    {
        return "_.site";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 13,  74 => 10,  70 => 9,  65 => 7,  62 => 6,  59 => 5,  53 => 3,  11 => 1,);
    }
}
/* {% extends '_.root' %}*/
/* */
/* {% block title %}{$ page.title|default('') $}{% endblock %}*/
/* */
/* {% block head %}*/
/* */
/* 	{$ parent() $}*/
/* */
/* 	<meta name="keywords" content="{$ page.keywords|default('') $}">*/
/* 	<meta name="description" content="{$ page.description|default('') $}">*/
/* */
/* 	{# TODO set up scripts via admin panel #}*/
/* */
/* 	<link rel="stylesheet" href="/packages/colorbox/1.5.9/example5/colorbox.css">*/
/* */
/* 	<script src="/packages/jquery/2.1.0/jquery.min.js"></script>*/
/* 	<script src="/packages/colorbox/1.5.9/jquery.colorbox-min.js"></script>*/
/* 	<script src="/packages/colorbox/1.5.9/i18n/jquery.colorbox-ru.js"></script>*/
/* */
/* 	<script src="/packages/netshaper/site/js/site.js"></script>*/
/* 	<link rel="stylesheet" href="/packages/netshaper/site/css/site.css">*/
/* */
/* {% endblock %}*/
/* */
