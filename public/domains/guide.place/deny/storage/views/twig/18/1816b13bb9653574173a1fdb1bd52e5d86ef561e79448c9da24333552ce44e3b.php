<?php

/* _.new */
class __TwigTemplate_1a83c36c11695cf5d502aa57a5b9404f0a9dab69c978bcc568cd7ab6522bcba0 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.site", "_.new", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.site";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("for" => 14, "include" => 15);
        $filters = array("raw" => 20, "default" => 20);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'include'),
                array('raw', 'default'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=0\">
\t<link rel=\"stylesheet\" href=\"/packages/bootstrap/3.2.0/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"/packages/netshaper/site/css/new.css\">
\t<script src=\"/packages/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "\t";
        // line 13
        echo "\t<div class=\"page\">
\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["positions"]) ? $context["positions"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 15
            echo "\t\t\t";
            $this->loadTemplate("_.grid", "_.new", 15)->display($context);
            // line 16
            echo "\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t</div>
\t<div class=\"hide\">
\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dummy"]) ? $context["dummy"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 20
            echo "\t\t\t";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed((($this->getAttribute($context["module"], "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["module"], "content", array()), "")) : ("")));
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "_.new";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 22,  117 => 20,  113 => 19,  109 => 17,  95 => 16,  92 => 15,  75 => 14,  72 => 13,  70 => 12,  67 => 11,  56 => 4,  53 => 3,  11 => 1,);
    }
}
/* {% extends '_.site' %}*/
/* */
/* {% block head %}*/
/* 	{$ parent() $}*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">*/
/* 	<link rel="stylesheet" href="/packages/bootstrap/3.2.0/css/bootstrap.min.css">*/
/* 	<link rel="stylesheet" href="/packages/netshaper/site/css/new.css">*/
/* 	<script src="/packages/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	{# todo add class based on page path #}*/
/* 	<div class="page">*/
/* 		{% for position in positions %}*/
/* 			{% include '_.grid' %}*/
/* 		{% endfor %}*/
/* 	</div>*/
/* 	<div class="hide">*/
/* 		{% for module in dummy %}*/
/* 			{$ module.content|default('')|raw $}*/
/* 		{% endfor %}*/
/* 	</div>*/
/* {% endblock %}*/
/* */
