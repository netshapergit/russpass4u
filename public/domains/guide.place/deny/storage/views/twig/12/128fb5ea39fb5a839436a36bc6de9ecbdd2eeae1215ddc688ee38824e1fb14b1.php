<?php

/* _.grid_module */
class __TwigTemplate_f017abb298485e1553b959e83de5b2b3bf80091d0c5177a323cc43ddf4b621c5 extends TwigBridge\Twig\Template
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
        $tags = array("if" => 2, "for" => 4);
        $filters = array("escape" => 1, "default" => 1, "split" => 4, "raw" => 10);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array('escape', 'default', 'split', 'raw'),
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
        echo "<div class=\"module layout-";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "module_type_layout", array(), "any", false, true), "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "module_type_layout", array(), "any", false, true), "alias", array()), "none")) : ("none")), "html", null, true));
        echo " type-";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "module_type", array(), "any", false, true), "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "module_type", array(), "any", false, true), "alias", array()), "none")) : ("none")), "html", null, true));
        echo "\">
\t";
        // line 2
        if ((($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "show_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "show_name", array()), false)) : (false))) {
            // line 3
            echo "\t\t<div class=\"module-heading\">
\t\t\t";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, (($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "name", array()), "")) : ("")), "
"));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 5
                echo "\t\t\t\t<span>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["line"], "html", null, true));
                echo "</span>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "\t\t</div>
\t";
        }
        // line 9
        echo "\t<div class=\"module-body\">
\t\t";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed((($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "content", array()), "")) : ("")));
        echo "
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "_.grid_module";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 10,  73 => 9,  69 => 7,  60 => 5,  55 => 4,  52 => 3,  50 => 2,  43 => 1,);
    }
}
/* <div class="module layout-{$ module.module_type_layout.alias|default('none') $} type-{$ module.module_type.alias|default('none') $}">*/
/* 	{% if module.show_name|default(false) %}*/
/* 		<div class="module-heading">*/
/* 			{% for line in module.name|default('')|split('\n') %}*/
/* 				<span>{$ line $}</span>*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	<div class="module-body">*/
/* 		{$ module.content|default('')|raw $}*/
/* 	</div>*/
/* </div>*/
/* */
