<?php

/* _.module_types.slideshow2.main */
class __TwigTemplate_3b6b4c013bd030622ee0461780658a9d7fcd38bb9303914ec243d9be1aca4852 extends TwigBridge\Twig\Template
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
        $tags = array("set" => 1, "if" => 13, "for" => 23);
        $filters = array("escape" => 9, "default" => 12);
        $functions = array("random" => 1);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('escape', 'default'),
                array('random')
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
        $context["id"] = ("slideshow2_" . twig_random($this->env));
        // line 2
        echo "
<link rel=\"stylesheet\" href=\"/packages/owl-carousel/2.0.0-beta.2.4/assets/owl.carousel.css\">
<link rel=\"stylesheet\" href=\"/packages/owl-carousel/2.0.0-beta.2.4/assets/owl.theme.default.min.css\">
<script src=\"/packages/owl-carousel/2.0.0-beta.2.4/owl.carousel.min.js\"></script>

<script>
\t\$(function() {
\t\t\$('#";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true));
        echo "').owlCarousel({
\t\t\tautoplay: true,
\t\t\tautoplayHoverPause: true,
\t\t\tautoplayTimeout: ";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "interval", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "interval", array()), 3)) : (3)) * 1000), "html", null, true));
        echo ",
\t\t\tdots: ";
        // line 13
        if ((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "bullets", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "bullets", array()), false)) : (false))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
\t\t\titems: 1,
\t\t\tloop: true,
\t\t\tnav: ";
        // line 16
        if ((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "arrows", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "arrows", array()), false)) : (false))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
\t\t\tnavText: ['', '']
\t\t});
\t});
</script>

<div id=\"";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true));
        echo "\">
\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "items", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "items", array()), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ((($this->getAttribute($context["item"], "active", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "active", array()), false)) : (false))) {
                // line 24
                echo "\t\t<div class=\"slide\">

\t\t\t";
                // line 26
                if ((($this->getAttribute($context["item"], "has_target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "has_target", array()), false)) : (false))) {
                    // line 27
                    echo "\t\t\t\t";
                    if (((($this->getAttribute($context["item"], "external", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "external", array()), false)) : (false)) && (($this->getAttribute($context["item"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "url", array()), "")) : ("")))) {
                        // line 28
                        echo "\t\t\t\t\t<a href=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                        echo "\" target=\"_blank\">
\t\t\t\t";
                    } elseif (( !(($this->getAttribute(                    // line 29
$context["item"], "external", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "external", array()), false)) : (false)) && (($this->getAttribute($context["item"], "page", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "page", array()), null)) : (null)))) {
                        // line 30
                        echo "\t\t\t\t\t<a href=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "page", array()), "path", array()), "html", null, true));
                        echo "\">
\t\t\t\t";
                    }
                    // line 32
                    echo "\t\t\t";
                }
                // line 33
                echo "
\t\t\t";
                // line 34
                if ((($this->getAttribute($context["item"], "image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "image", array()), "")) : (""))) {
                    // line 35
                    echo "\t\t\t\t<div class=\"image\">
\t\t\t\t\t<img src=\"/site/data/images/";
                    // line 36
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "image_size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "image_size", array()), "large")) : ("large")), "html", null, true));
                    echo "/";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "image", array()), "html", null, true));
                    echo "\">
\t\t\t\t</div>
\t\t\t";
                }
                // line 39
                echo "
\t\t\t";
                // line 40
                if (((($this->getAttribute($context["item"], "header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "header", array()), "")) : ("")) || (($this->getAttribute($context["item"], "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "description", array()), "")) : ("")))) {
                    // line 41
                    echo "\t\t\t\t<div class=\"caption\">

\t\t\t\t\t";
                    // line 43
                    if ((($this->getAttribute($context["item"], "header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "header", array()), "")) : (""))) {
                        // line 44
                        echo "\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t";
                        // line 45
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "header", array()), "html", null, true));
                        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 48
                    echo "
\t\t\t\t\t";
                    // line 49
                    if ((($this->getAttribute($context["item"], "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "description", array()), "")) : (""))) {
                        // line 50
                        echo "\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t";
                        // line 51
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true));
                        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 54
                    echo "
\t\t\t\t</div>
\t\t\t";
                }
                // line 57
                echo "
\t\t\t";
                // line 58
                if ((($this->getAttribute($context["item"], "has_target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "has_target", array()), false)) : (false))) {
                    // line 59
                    echo "\t\t\t\t";
                    if (((($this->getAttribute($context["item"], "external", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "external", array()), false)) : (false)) && (($this->getAttribute($context["item"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "url", array()), false)) : (false)))) {
                        // line 60
                        echo "\t\t\t\t\t</a>
\t\t\t\t";
                    } elseif (( !(($this->getAttribute(                    // line 61
$context["item"], "external", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "external", array()), false)) : (false)) && (($this->getAttribute($context["item"], "page", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "page", array()), null)) : (null)))) {
                        // line 62
                        echo "\t\t\t\t\t</a>
\t\t\t\t";
                    }
                    // line 64
                    echo "\t\t\t";
                }
                // line 65
                echo "
\t\t</div>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_.module_types.slideshow2.main";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 68,  196 => 65,  193 => 64,  189 => 62,  187 => 61,  184 => 60,  181 => 59,  179 => 58,  176 => 57,  171 => 54,  165 => 51,  162 => 50,  160 => 49,  157 => 48,  151 => 45,  148 => 44,  146 => 43,  142 => 41,  140 => 40,  137 => 39,  129 => 36,  126 => 35,  124 => 34,  121 => 33,  118 => 32,  112 => 30,  110 => 29,  105 => 28,  102 => 27,  100 => 26,  96 => 24,  91 => 23,  87 => 22,  74 => 16,  64 => 13,  60 => 12,  54 => 9,  45 => 2,  43 => 1,);
    }
}
/* {% set id = 'slideshow2_' ~ random() %}*/
/* */
/* <link rel="stylesheet" href="/packages/owl-carousel/2.0.0-beta.2.4/assets/owl.carousel.css">*/
/* <link rel="stylesheet" href="/packages/owl-carousel/2.0.0-beta.2.4/assets/owl.theme.default.min.css">*/
/* <script src="/packages/owl-carousel/2.0.0-beta.2.4/owl.carousel.min.js"></script>*/
/* */
/* <script>*/
/* 	$(function() {*/
/* 		$('#{$ id $}').owlCarousel({*/
/* 			autoplay: true,*/
/* 			autoplayHoverPause: true,*/
/* 			autoplayTimeout: {$ config.interval|default(3) * 1000 $},*/
/* 			dots: {% if config.bullets|default(false) %}true{% else %}false{% endif %},*/
/* 			items: 1,*/
/* 			loop: true,*/
/* 			nav: {% if config.arrows|default(false) %}true{% else %}false{% endif %},*/
/* 			navText: ['', '']*/
/* 		});*/
/* 	});*/
/* </script>*/
/* */
/* <div id="{$ id $}">*/
/* 	{% for item in config.items|default([]) if item.active|default(false) %}*/
/* 		<div class="slide">*/
/* */
/* 			{% if item.has_target|default(false) %}*/
/* 				{% if item.external|default(false) and item.url|default('') %}*/
/* 					<a href="{$ item.url $}" target="_blank">*/
/* 				{% elseif not item.external|default(false) and item.page|default(null) %}*/
/* 					<a href="{$ item.page.path $}">*/
/* 				{% endif %}*/
/* 			{% endif %}*/
/* */
/* 			{% if item.image|default('') %}*/
/* 				<div class="image">*/
/* 					<img src="/site/data/images/{$ config.image_size|default('large') $}/{$ item.image $}">*/
/* 				</div>*/
/* 			{% endif %}*/
/* */
/* 			{% if item.header|default('') or item.description|default('') %}*/
/* 				<div class="caption">*/
/* */
/* 					{% if item.header|default('') %}*/
/* 						<div class="header">*/
/* 							{$ item.header $}*/
/* 						</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if item.description|default('') %}*/
/* 						<div class="description">*/
/* 							{$ item.description $}*/
/* 						</div>*/
/* 					{% endif %}*/
/* */
/* 				</div>*/
/* 			{% endif %}*/
/* */
/* 			{% if item.has_target|default(false) %}*/
/* 				{% if item.external|default(false) and item.url|default(false) %}*/
/* 					</a>*/
/* 				{% elseif not item.external|default(false) and item.page|default(null) %}*/
/* 					</a>*/
/* 				{% endif %}*/
/* 			{% endif %}*/
/* */
/* 		</div>*/
/* 	{% endfor %}*/
/* </div>*/
/* */
