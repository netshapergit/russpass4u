<?php

/* module_types.announcement.sity */
class __TwigTemplate_5038eb87009d626790085a8bc774baf9a9b5040d0e6070a7f608bdd1bdbbe680 extends TwigBridge\Twig\Template
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
        $tags = array("if" => 1, "for" => 13);
        $filters = array("length" => 1, "default" => 1, "escape" => 19, "raw" => 48);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array('length', 'default', 'escape', 'raw'),
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
            echo "
\t<script src=\"/packages/perfect-scrollbar/0.4.11/min/perfect-scrollbar.with-mousewheel.min.js\"></script>
\t<link rel=\"stylesheet\" href=\"/packages/perfect-scrollbar/0.4.11/min/perfect-scrollbar.min.css\">
\t<script>
\t\t\$(function() {
\t\t\t\$('.module.announcement.layout_faq .tab-pane').perfectScrollbar();
\t\t});
\t</script>

\t<div class=\"questions-bar\">
\t\t<ul class=\"nav nav-pills\" role=\"tablist\">
\t\t\t";
            // line 13
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 14
                echo "\t\t\t\t<li
\t\t\t\t\t";
                // line 15
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    // line 16
                    echo "\t\t\t\t\t\tclass=\"active\"
\t\t\t\t\t";
                }
                // line 18
                echo "\t\t\t\t>
\t\t\t\t\t<a data-toggle=\"tab\" href=\"#faq_";
                // line 19
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true));
                echo "\" role=\"tab\">
\t\t\t\t\t\t";
                // line 20
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true));
                echo "
\t\t\t\t\t</a>
\t\t\t\t</li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t</ul>
\t</div>

\t<input class=\"search form-control\" placeholder=\"Поиск\" type=\"text\">

\t<div class=\"tab-content\">
\t\t";
            // line 30
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 31
                echo "\t\t\t<div
\t\t\t\tclass=\"
\t\t\t\t\ttab-pane
\t\t\t\t\t";
                // line 34
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    // line 35
                    echo "\t\t\t\t\t\tactive
\t\t\t\t\t";
                }
                // line 37
                echo "\t\t\t\t\"
\t\t\t\tid=\"faq_";
                // line 38
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true));
                echo "\"
\t\t\t>
\t\t\t\t";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute($context["category"], "active_sub_pages", array(), "any", false, true), "sortBy", array(0 => "order"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["category"], "active_sub_pages", array(), "any", false, true), "sortBy", array(0 => "order"), "method"), array())) : (array())));
                foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                    // line 41
                    echo "\t\t\t\t\t<div class=\"question\">
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t";
                    // line 44
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["question"], "title", array()), "html", null, true));
                    echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"display-none answer\">
\t\t\t\t\t\t\t";
                    // line 48
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->getAttribute($context["question"], "field_answer", array()));
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "\t\t\t</div>
\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t</div>

";
        }
    }

    public function getTemplateName()
    {
        return "module_types.announcement.sity";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 54,  179 => 52,  169 => 48,  162 => 44,  157 => 41,  153 => 40,  148 => 38,  145 => 37,  141 => 35,  139 => 34,  134 => 31,  117 => 30,  109 => 24,  91 => 20,  87 => 19,  84 => 18,  80 => 16,  78 => 15,  75 => 14,  58 => 13,  45 => 2,  43 => 1,);
    }
}
/* {% if config.pages|default([])|length > 0 %}*/
/* */
/* 	<script src="/packages/perfect-scrollbar/0.4.11/min/perfect-scrollbar.with-mousewheel.min.js"></script>*/
/* 	<link rel="stylesheet" href="/packages/perfect-scrollbar/0.4.11/min/perfect-scrollbar.min.css">*/
/* 	<script>*/
/* 		$(function() {*/
/* 			$('.module.announcement.layout_faq .tab-pane').perfectScrollbar();*/
/* 		});*/
/* 	</script>*/
/* */
/* 	<div class="questions-bar">*/
/* 		<ul class="nav nav-pills" role="tablist">*/
/* 			{% for category in config.pages %}*/
/* 				<li*/
/* 					{% if loop.index == 1 %}*/
/* 						class="active"*/
/* 					{% endif %}*/
/* 				>*/
/* 					<a data-toggle="tab" href="#faq_{$ category.id $}" role="tab">*/
/* 						{$ category.title $}*/
/* 					</a>*/
/* 				</li>*/
/* 			{% endfor %}*/
/* 		</ul>*/
/* 	</div>*/
/* */
/* 	<input class="search form-control" placeholder="Поиск" type="text">*/
/* */
/* 	<div class="tab-content">*/
/* 		{% for category in config.pages %}*/
/* 			<div*/
/* 				class="*/
/* 					tab-pane*/
/* 					{% if loop.index == 1 %}*/
/* 						active*/
/* 					{% endif %}*/
/* 				"*/
/* 				id="faq_{$ category.id $}"*/
/* 			>*/
/* 				{% for question in category.active_sub_pages.sortBy('order')|default([]) %}*/
/* 					<div class="question">*/
/* 						<div class="title">*/
/* 							<a href="#">*/
/* 								{$ question.title $}*/
/* 							</a>*/
/* 						</div>*/
/* 						<div class="display-none answer">*/
/* 							{$ question.field_answer|raw $}*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 		{% endfor %}*/
/* 	</div>*/
/* */
/* {% endif %}*/
/* */
