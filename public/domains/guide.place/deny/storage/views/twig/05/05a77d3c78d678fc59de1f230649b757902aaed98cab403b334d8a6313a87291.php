<?php

/* _.module_types.announcement.main */
class __TwigTemplate_ab7dfa15ee19bf721522906a9e6ebc290fae474097314d2b4af00d6cc199c7a2 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'items' => array($this, 'block_items'),
            'item' => array($this, 'block_item'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 1, "block" => 3, "for" => 4);
        $filters = array("length" => 1, "default" => 1, "escape" => 7);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'block', 'for'),
                array('length', 'default', 'escape'),
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
        if ((twig_length_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "pages", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "pages", array()), array())) : (array()))) > 0)) {
            // line 2
            echo "\t<ul>
\t\t";
            // line 3
            $this->displayBlock('items', $context, $blocks);
            // line 12
            echo "\t</ul>
";
        }
    }

    // line 3
    public function block_items($context, array $blocks = array())
    {
        // line 4
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "pages", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "\t\t\t\t<li>
\t\t\t\t\t";
            // line 6
            $this->displayBlock('item', $context, $blocks);
            // line 9
            echo "\t\t\t\t</li>
\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t";
    }

    // line 6
    public function block_item($context, array $blocks = array())
    {
        // line 7
        echo "\t\t\t\t\t\t<a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "html", null, true));
        echo "</a>
\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "_.module_types.announcement.main";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 7,  103 => 6,  99 => 11,  84 => 9,  82 => 6,  79 => 5,  61 => 4,  58 => 3,  52 => 12,  50 => 3,  47 => 2,  45 => 1,);
    }
}
/* {% if config.pages|default([])|length > 0 %}*/
/* 	<ul>*/
/* 		{% block items %}*/
/* 			{% for item in config.pages %}*/
/* 				<li>*/
/* 					{% block item %}*/
/* 						<a href="{$ item.path $}">{$ item.title $}</a>*/
/* 					{% endblock %}*/
/* 				</li>*/
/* 			{% endfor %}*/
/* 		{% endblock %}*/
/* 	</ul>*/
/* {% endif %}*/
/* */
