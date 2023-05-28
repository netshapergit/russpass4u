<?php

/* _.root */
class __TwigTemplate_897f23a19f341b1623e5aa72ac8f15cc9df243339782e2824f4969a448ef297c extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 5);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block'),
                array(),
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
        echo "<!doctype html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 7
        echo "\t</head>
\t<body>
\t\t";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "\t\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 11
        echo "\t</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_.root";
    }

    public function getDebugInfo()
    {
        return array (  89 => 10,  84 => 9,  79 => 6,  74 => 5,  68 => 11,  65 => 10,  63 => 9,  59 => 7,  57 => 6,  53 => 5,  47 => 1,);
    }
}
/* <!doctype html>*/
/* <html>*/
/* 	<head>*/
/* 		<meta charset="UTF-8">*/
/* 		<title>{% block title %}{% endblock %}</title>*/
/* 		{% block head %}{% endblock %}*/
/* 	</head>*/
/* 	<body>*/
/* 		{% block body %}{% endblock %}*/
/* 		{% block footer %}{% endblock %}*/
/* 	</body>*/
/* </html>*/
/* */
