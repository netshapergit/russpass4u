<?php

/* _.module_types.slideshow.main */
class __TwigTemplate_b0df08c6618a019bd983a924db3dc47d56c2f26bf69a61ed015b1e6fa139dfb0 extends TwigBridge\Twig\Template
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
        $tags = array("set" => 1, "if" => 10, "for" => 86);
        $filters = array("default" => 2, "escape" => 9, "length" => 10);
        $functions = array("random" => 1);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('default', 'escape', 'length'),
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
        $context["id"] = twig_random($this->env);
        // line 2
        $context["width"] = (($this->getAttribute((isset($context["system"]) ? $context["system"] : null), (("image_" . (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "image_size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "image_size", array()), "large")) : ("large"))) . "_width"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["system"]) ? $context["system"] : null), (("image_" . (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "image_size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "image_size", array()), "large")) : ("large"))) . "_width"), array(), "array"), 640)) : (640));
        // line 3
        $context["height"] = (($this->getAttribute((isset($context["system"]) ? $context["system"] : null), (("image_" . (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "image_size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "image_size", array()), "large")) : ("large"))) . "_height"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["system"]) ? $context["system"] : null), (("image_" . (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "image_size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "image_size", array()), "large")) : ("large"))) . "_height"), array(), "array"), 480)) : (480));
        // line 4
        echo "
<script src=\"/packages/jssor-slider/js/jssor.slider.mini.js\"></script>

<script>
\t\$(function() {
\t\tvar slider = new \$JssorSlider\$('";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true));
        echo "', {
\t\t\t";
        // line 10
        if (((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "arrows", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "arrows", array()), false)) : (false)) && (twig_length_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "items", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "items", array()), array())) : (array()))) > 1))) {
            // line 11
            echo "\t\t\t\t\$ArrowNavigatorOptions: {
\t\t\t\t\t\$AutoCenter: 2,
\t\t\t\t\t\$ChanceToShow: 1,
\t\t\t\t\t\$Class: \$JssorArrowNavigator\$
\t\t\t\t},
\t\t\t";
        }
        // line 17
        echo "\t\t\t";
        if (((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "bullets", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "bullets", array()), false)) : (false)) && (twig_length_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "items", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "items", array()), array())) : (array()))) > 1))) {
            // line 18
            echo "\t\t\t\t\$BulletNavigatorOptions: {
\t\t\t\t\t\$AutoCenter: 1,
\t\t\t\t\t\$ChanceToShow: 2,
\t\t\t\t\t\$Class: \$JssorBulletNavigator\$,
\t\t\t\t\t\$SpacingY: 5
\t\t\t\t},
\t\t\t";
        }
        // line 25
        echo "\t\t\t\$AutoPlay: true,
\t\t\t\$AutoPlayInterval: ";
        // line 26
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "interval", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "interval", array()), 3)) : (3)) * 1000), "html", null, true));
        echo "
\t\t});

\t\tfunction scale() {
\t\t\tvar parentWidth = \$('#";
        // line 30
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true));
        echo "').parent().width();
\t\t\tif (parentWidth) {
\t\t\t\tslider.\$SetScaleWidth(parentWidth);
\t\t\t} else {
\t\t\t\twindow.setTimeout(scale, 30);
\t\t\t}
\t\t}

\t\tscale();

\t\tif (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
\t\t\t\$(window).bind('resize', scale);
\t\t}
\t});
</script>

";
        // line 46
        if (((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "arrows", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "arrows", array()), false)) : (false)) && (twig_length_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "items", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "items", array()), array())) : (array()))) > 1))) {
            // line 47
            echo "\t<style>
\t\t.jssora14l, .jssora14r, .jssora14ldn, .jssora14rdn {
\t\t\tposition: absolute;
\t\t\tcursor: pointer;
\t\t\tdisplay: block;
\t\t\tbackground: url('/packages/jssor-slider/img/a14.png') no-repeat;
\t\t\toverflow:hidden;
\t\t}
\t\t.jssora14l { background-position: -15px -35px; }
\t\t.jssora14r { background-position: -75px -35px; }
\t\t.jssora14l:hover { background-position: -135px -35px; }
\t\t.jssora14r:hover { background-position: -195px -35px; }
\t\t.jssora14ldn { background-position: -255px -35px; }
\t\t.jssora14rdn { background-position: -315px -35px; }

\t</style>
";
        }
        // line 64
        echo "
";
        // line 65
        if (((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "bullets", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "bullets", array()), false)) : (false)) && (twig_length_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "items", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "items", array()), array())) : (array()))) > 1))) {
            // line 66
            echo "\t<style>
\t\t.jssorb14 div, .jssorb14 div:hover, .jssorb14 .av {
\t\t\tbackground: url('/packages/jssor-slider/img/b14.png') no-repeat;
\t\t\toverflow:hidden;
\t\t\tcursor: pointer;
\t\t}
\t\t.jssorb14 div { background-position: -9px -9px; }
\t\t.jssorb14 div:hover, .jssorb14 .av:hover { background-position: -39px -9px; }
\t\t.jssorb14 .av { background-position: -69px -9px; }
\t\t.jssorb14 .dn, .jssorb14 .dn:hover { background-position: -99px -9px; }
\t</style>
";
        }
        // line 78
        echo "
<style>
\t[u=slides] [u=caption] {color: #fff; text-shadow: #000 0 0 20px;}
</style>

<div id=\"";
        // line 83
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true));
        echo "\" style=\"position: relative; top: 0; left: 0; width: ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true));
        echo "px; height: ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true));
        echo "px;\">

\t<div u=\"slides\" style=\"cursor: move; position: absolute; overflow: hidden; left: 0; top: 0; width: ";
        // line 85
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true));
        echo "px; height: ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true));
        echo "px;\">
\t\t";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "items", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "items", array()), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ((($this->getAttribute($context["item"], "active", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "active", array()), false)) : (false))) {
                // line 87
                echo "\t\t\t<div>

\t\t\t\t";
                // line 89
                if ((($this->getAttribute($context["item"], "has_target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "has_target", array()), false)) : (false))) {
                    // line 90
                    echo "\t\t\t\t\t";
                    if (((($this->getAttribute($context["item"], "external", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "external", array()), false)) : (false)) && (($this->getAttribute($context["item"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "url", array()), "")) : ("")))) {
                        // line 91
                        echo "\t\t\t\t\t\t<a href=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                        echo "\" target=\"_blank\">
\t\t\t\t\t";
                    } elseif (( !(($this->getAttribute(                    // line 92
$context["item"], "external", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "external", array()), false)) : (false)) && (($this->getAttribute($context["item"], "page", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "page", array()), null)) : (null)))) {
                        // line 93
                        echo "\t\t\t\t\t\t<a href=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "page", array()), "path", array()), "html", null, true));
                        echo "\">
\t\t\t\t\t";
                    }
                    // line 95
                    echo "\t\t\t\t";
                }
                // line 96
                echo "
\t\t\t\t";
                // line 97
                if ((($this->getAttribute($context["item"], "image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "image", array()), "")) : (""))) {
                    // line 98
                    echo "\t\t\t\t\t<img
\t\t\t\t\t\t";
                    // line 99
                    if ((($this->getAttribute($context["item"], "header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "header", array()), "")) : (""))) {
                        // line 100
                        echo "\t\t\t\t\t\t\talt=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "header", array()), "html", null, true));
                        echo "\"
\t\t\t\t\t\t";
                    }
                    // line 102
                    echo "\t\t\t\t\t\tsrc=\"/site/data/images/";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "image_size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "image_size", array()), "large")) : ("large")), "html", null, true));
                    echo "/";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "image", array()), "html", null, true));
                    echo "\"
\t\t\t\t\t\tu=\"image\"
\t\t\t\t\t>
\t\t\t\t";
                }
                // line 106
                echo "
\t\t\t\t";
                // line 107
                if (((($this->getAttribute($context["item"], "header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "header", array()), "")) : ("")) || (($this->getAttribute($context["item"], "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "description", array()), "")) : ("")))) {
                    // line 108
                    echo "\t\t\t\t\t<div
\t\t\t\t\t\tstyle=\" text-align: center; position: absolute; bottom: ";
                    // line 109
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((isset($context["height"]) ? $context["height"] : null) * 0.15), "html", null, true));
                    echo "px; left: ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((isset($context["width"]) ? $context["width"] : null) * 0.15), "html", null, true));
                    echo "px; width: ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((isset($context["width"]) ? $context["width"] : null) * 0.7), "html", null, true));
                    echo "px;\"
\t\t\t\t\t\tt=\"caption-transition-name\"
\t\t\t\t\t\tu=\"caption\"
\t\t\t\t\t>
\t\t\t\t\t\t";
                    // line 113
                    if ((($this->getAttribute($context["item"], "header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "header", array()), "")) : (""))) {
                        // line 114
                        echo "\t\t\t\t\t\t\t<h3>";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "header", array()), "html", null, true));
                        echo "</h3>
\t\t\t\t\t\t";
                    }
                    // line 116
                    echo "\t\t\t\t\t\t";
                    if ((($this->getAttribute($context["item"], "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "description", array()), "")) : (""))) {
                        // line 117
                        echo "\t\t\t\t\t\t\t<p style=\"white-space: pre-wrap;\">";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true));
                        echo "</p>
\t\t\t\t\t\t";
                    }
                    // line 119
                    echo "\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 121
                echo "
\t\t\t\t";
                // line 122
                if ((($this->getAttribute($context["item"], "has_target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "has_target", array()), false)) : (false))) {
                    // line 123
                    echo "\t\t\t\t\t";
                    if (((($this->getAttribute($context["item"], "external", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "external", array()), false)) : (false)) && (($this->getAttribute($context["item"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "url", array()), false)) : (false)))) {
                        // line 124
                        echo "\t\t\t\t\t\t</a>
\t\t\t\t\t";
                    } elseif (( !(($this->getAttribute(                    // line 125
$context["item"], "external", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "external", array()), false)) : (false)) && (($this->getAttribute($context["item"], "page", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "page", array()), null)) : (null)))) {
                        // line 126
                        echo "\t\t\t\t\t\t</a>
\t\t\t\t\t";
                    }
                    // line 128
                    echo "\t\t\t\t";
                }
                // line 129
                echo "
\t\t\t</div>
\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "\t</div>

\t";
        // line 134
        if (((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "arrows", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "arrows", array()), false)) : (false)) && (twig_length_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "items", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "items", array()), array())) : (array()))) > 1))) {
            // line 135
            echo "\t\t<span u=\"arrowleft\" class=\"jssora14l\" style=\"width: 30px; height: 50px; top: 123px; left: 0px;\"></span>
\t\t<span u=\"arrowright\" class=\"jssora14r\" style=\"width: 30px; height: 50px; top: 123px; right: 0px\"></span>

\t";
        }
        // line 139
        echo "
\t";
        // line 140
        if (((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "bullets", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "bullets", array()), false)) : (false)) && (twig_length_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "items", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "items", array()), array())) : (array()))) > 1))) {
            // line 141
            echo "\t\t<div u=\"navigator\" class=\"jssorb14\" style=\"position: absolute; bottom: ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((isset($context["height"]) ? $context["height"] : null) * 0.075), "html", null, true));
            echo "px;\">
\t\t\t<div u=\"prototype\" style=\"position: absolute; width: 12px; height: 12px;\"></div>
\t\t</div>
\t";
        }
        // line 145
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "_.module_types.slideshow.main";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 145,  315 => 141,  313 => 140,  310 => 139,  304 => 135,  302 => 134,  298 => 132,  289 => 129,  286 => 128,  282 => 126,  280 => 125,  277 => 124,  274 => 123,  272 => 122,  269 => 121,  265 => 119,  259 => 117,  256 => 116,  250 => 114,  248 => 113,  237 => 109,  234 => 108,  232 => 107,  229 => 106,  219 => 102,  213 => 100,  211 => 99,  208 => 98,  206 => 97,  203 => 96,  200 => 95,  194 => 93,  192 => 92,  187 => 91,  184 => 90,  182 => 89,  178 => 87,  173 => 86,  167 => 85,  158 => 83,  151 => 78,  137 => 66,  135 => 65,  132 => 64,  113 => 47,  111 => 46,  92 => 30,  85 => 26,  82 => 25,  73 => 18,  70 => 17,  62 => 11,  60 => 10,  56 => 9,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% set id = random() %}*/
/* {% set width = system['image_' ~ config.image_size|default('large') ~ '_width']|default(640) %}*/
/* {% set height = system['image_' ~ config.image_size|default('large') ~ '_height']|default(480) %}*/
/* */
/* <script src="/packages/jssor-slider/js/jssor.slider.mini.js"></script>*/
/* */
/* <script>*/
/* 	$(function() {*/
/* 		var slider = new $JssorSlider$('{$ id $}', {*/
/* 			{% if config.arrows|default(false) and config.items|default([])|length > 1 %}*/
/* 				$ArrowNavigatorOptions: {*/
/* 					$AutoCenter: 2,*/
/* 					$ChanceToShow: 1,*/
/* 					$Class: $JssorArrowNavigator$*/
/* 				},*/
/* 			{% endif %}*/
/* 			{% if config.bullets|default(false) and config.items|default([])|length > 1 %}*/
/* 				$BulletNavigatorOptions: {*/
/* 					$AutoCenter: 1,*/
/* 					$ChanceToShow: 2,*/
/* 					$Class: $JssorBulletNavigator$,*/
/* 					$SpacingY: 5*/
/* 				},*/
/* 			{% endif %}*/
/* 			$AutoPlay: true,*/
/* 			$AutoPlayInterval: {$ config.interval|default(3) * 1000 $}*/
/* 		});*/
/* */
/* 		function scale() {*/
/* 			var parentWidth = $('#{$ id $}').parent().width();*/
/* 			if (parentWidth) {*/
/* 				slider.$SetScaleWidth(parentWidth);*/
/* 			} else {*/
/* 				window.setTimeout(scale, 30);*/
/* 			}*/
/* 		}*/
/* */
/* 		scale();*/
/* */
/* 		if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {*/
/* 			$(window).bind('resize', scale);*/
/* 		}*/
/* 	});*/
/* </script>*/
/* */
/* {% if config.arrows|default(false) and config.items|default([])|length > 1 %}*/
/* 	<style>*/
/* 		.jssora14l, .jssora14r, .jssora14ldn, .jssora14rdn {*/
/* 			position: absolute;*/
/* 			cursor: pointer;*/
/* 			display: block;*/
/* 			background: url('/packages/jssor-slider/img/a14.png') no-repeat;*/
/* 			overflow:hidden;*/
/* 		}*/
/* 		.jssora14l { background-position: -15px -35px; }*/
/* 		.jssora14r { background-position: -75px -35px; }*/
/* 		.jssora14l:hover { background-position: -135px -35px; }*/
/* 		.jssora14r:hover { background-position: -195px -35px; }*/
/* 		.jssora14ldn { background-position: -255px -35px; }*/
/* 		.jssora14rdn { background-position: -315px -35px; }*/
/* */
/* 	</style>*/
/* {% endif %}*/
/* */
/* {% if config.bullets|default(false) and config.items|default([])|length > 1 %}*/
/* 	<style>*/
/* 		.jssorb14 div, .jssorb14 div:hover, .jssorb14 .av {*/
/* 			background: url('/packages/jssor-slider/img/b14.png') no-repeat;*/
/* 			overflow:hidden;*/
/* 			cursor: pointer;*/
/* 		}*/
/* 		.jssorb14 div { background-position: -9px -9px; }*/
/* 		.jssorb14 div:hover, .jssorb14 .av:hover { background-position: -39px -9px; }*/
/* 		.jssorb14 .av { background-position: -69px -9px; }*/
/* 		.jssorb14 .dn, .jssorb14 .dn:hover { background-position: -99px -9px; }*/
/* 	</style>*/
/* {% endif %}*/
/* */
/* <style>*/
/* 	[u=slides] [u=caption] {color: #fff; text-shadow: #000 0 0 20px;}*/
/* </style>*/
/* */
/* <div id="{$ id $}" style="position: relative; top: 0; left: 0; width: {$ width $}px; height: {$ height $}px;">*/
/* */
/* 	<div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0; top: 0; width: {$ width $}px; height: {$ height $}px;">*/
/* 		{% for item in config.items|default([]) if item.active|default(false) %}*/
/* 			<div>*/
/* */
/* 				{% if item.has_target|default(false) %}*/
/* 					{% if item.external|default(false) and item.url|default('') %}*/
/* 						<a href="{$ item.url $}" target="_blank">*/
/* 					{% elseif not item.external|default(false) and item.page|default(null) %}*/
/* 						<a href="{$ item.page.path $}">*/
/* 					{% endif %}*/
/* 				{% endif %}*/
/* */
/* 				{% if item.image|default('') %}*/
/* 					<img*/
/* 						{% if item.header|default('') %}*/
/* 							alt="{$ item.header $}"*/
/* 						{% endif %}*/
/* 						src="/site/data/images/{$ config.image_size|default('large') $}/{$ item.image $}"*/
/* 						u="image"*/
/* 					>*/
/* 				{% endif %}*/
/* */
/* 				{% if item.header|default('') or item.description|default('') %}*/
/* 					<div*/
/* 						style=" text-align: center; position: absolute; bottom: {$ height * 0.15 $}px; left: {$ width * 0.15 $}px; width: {$ width * 0.7 $}px;"*/
/* 						t="caption-transition-name"*/
/* 						u="caption"*/
/* 					>*/
/* 						{% if item.header|default('') %}*/
/* 							<h3>{$ item.header $}</h3>*/
/* 						{% endif %}*/
/* 						{% if item.description|default('') %}*/
/* 							<p style="white-space: pre-wrap;">{$ item.description $}</p>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				{% endif %}*/
/* */
/* 				{% if item.has_target|default(false) %}*/
/* 					{% if item.external|default(false) and item.url|default(false) %}*/
/* 						</a>*/
/* 					{% elseif not item.external|default(false) and item.page|default(null) %}*/
/* 						</a>*/
/* 					{% endif %}*/
/* 				{% endif %}*/
/* */
/* 			</div>*/
/* 		{% endfor %}*/
/* 	</div>*/
/* */
/* 	{% if config.arrows|default(false) and config.items|default([])|length > 1 %}*/
/* 		<span u="arrowleft" class="jssora14l" style="width: 30px; height: 50px; top: 123px; left: 0px;"></span>*/
/* 		<span u="arrowright" class="jssora14r" style="width: 30px; height: 50px; top: 123px; right: 0px"></span>*/
/* */
/* 	{% endif %}*/
/* */
/* 	{% if config.bullets|default(false) and config.items|default([])|length > 1 %}*/
/* 		<div u="navigator" class="jssorb14" style="position: absolute; bottom: {$ height * 0.075 $}px;">*/
/* 			<div u="prototype" style="position: absolute; width: 12px; height: 12px;"></div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* </div>*/
/* */
