<?php

/* _.grid */
class __TwigTemplate_ee16fa660899a1c4011ff5bf85dc85d6e8ce3f024c9bb8d2e3d897d37b4d630e extends TwigBridge\Twig\Template
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
        $tags = array("set" => 1, "for" => 8, "include" => 11);
        $filters = array("default" => 1, "escape" => 2);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for', 'include'),
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
        $context["alias"] = (($this->getAttribute((isset($context["position"]) ? $context["position"] : null), "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["position"]) ? $context["position"] : null), "alias", array()), "none")) : ("none"));
        // line 2
        echo "<div class=\"block position-";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true));
        echo "\">
\t<div class=\"inner position-";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true));
        echo "\">
\t\t<div class=\"grid position-";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true));
        echo "\">
\t\t\t<div class=\"grid-cover position-";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true));
        echo "\">
\t\t\t\t<div class=\"grid-cascade position-";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true));
        echo "\">
\t\t\t\t\t<div class=\"grid-row position-";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true));
        echo "\">
\t\t\t\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute((isset($context["position"]) ? $context["position"] : null), "sub_positions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["position"]) ? $context["position"] : null), "sub_positions", array()), array())) : (array())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["subPosition"]) {
            // line 9
            echo "\t\t\t\t\t\t\t<div class=\"grid-col position-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($context["subPosition"], "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["subPosition"], "alias", array()), "none")) : ("none")), "html", null, true));
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($this->getAttribute($context["subPosition"], "sub_positions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["subPosition"], "sub_positions", array()), array())) : (array())));
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
            foreach ($context['_seq'] as $context["_key"] => $context["grandSubPosition"]) {
                // line 11
                echo "\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("_.grid", "_.grid", 11)->display(array_merge($context, array("position" => $context["grandSubPosition"])));
                // line 12
                echo "\t\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grandSubPosition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($this->getAttribute($context["subPosition"], "modules", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["subPosition"], "modules", array()), array())) : (array())));
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
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 14
                echo "\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("_.grid_module", "_.grid", 14)->display($context);
                // line 15
                echo "\t\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 22
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute((isset($context["position"]) ? $context["position"] : null), "modules", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["position"]) ? $context["position"] : null), "modules", array()), array())) : (array())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 23
            echo "\t\t\t\t";
            $this->loadTemplate("_.grid_module", "_.grid", 23)->display($context);
            // line 24
            echo "\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "_.grid";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 25,  202 => 24,  199 => 23,  181 => 22,  176 => 18,  161 => 16,  147 => 15,  144 => 14,  126 => 13,  112 => 12,  109 => 11,  92 => 10,  87 => 9,  70 => 8,  66 => 7,  62 => 6,  58 => 5,  54 => 4,  50 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% set alias = position.alias|default('none') %}*/
/* <div class="block position-{$ alias $}">*/
/* 	<div class="inner position-{$ alias $}">*/
/* 		<div class="grid position-{$ alias $}">*/
/* 			<div class="grid-cover position-{$ alias $}">*/
/* 				<div class="grid-cascade position-{$ alias $}">*/
/* 					<div class="grid-row position-{$ alias $}">*/
/* 						{% for subPosition in position.sub_positions|default([]) %}*/
/* 							<div class="grid-col position-{$ subPosition.alias|default('none') $}">*/
/* 								{% for grandSubPosition in subPosition.sub_positions|default([]) %}*/
/* 									{% include '_.grid' with { 'position': grandSubPosition } %}*/
/* 								{% endfor %}*/
/* 								{% for module in subPosition.modules|default([]) %}*/
/* 									{% include '_.grid_module' %}*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 						{% endfor %}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			{# TODO remove it #}*/
/* 			{% for module in position.modules|default([]) %}*/
/* 				{% include '_.grid_module' %}*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
