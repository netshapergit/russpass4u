<?php

/* base */
class __TwigTemplate_33a1700b48e17b044d12c10333fca53650f730f0f4289ece918664d43b00e9bf extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.new", "base", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.new";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 5);
        $filters = array("escape" => 6);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('escape'),
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
        // line 4
        echo "\t ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 🚕
\t";
        // line 5
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "field_name", array())) {
            // line 6
            echo "\t\t| ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "field_name", array()), "html", null, true));
            echo "
\t";
        }
    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        // line 11
        echo "\t";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t<link href=\"https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css\" />

\t<link rel=\"manifest\" href=\"/manifest.json\">
\t<meta name=\"mobile-web-app-capable\" content=\"yes\">
\t<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
\t<meta name=\"application-name\" content=\"guide.place\">
\t<meta name=\"apple-mobile-web-app-title\" content=\"guide.place\">
\t<meta name=\"theme-color\" content=\"#f91942\">
\t<meta name=\"msapplication-navbutton-color\" content=\"#f91942\">
\t<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">
\t<meta name=\"msapplication-starturl\" content=\"/\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t<link rel=\"icon\" sizes=\"512x512\" href=\"/site/theme/images/guideplace_logo.png\">
\t<link rel=\"apple-touch-icon\" sizes=\"192x192\" href=\"/site/theme/images/guideplace_logo.png\">
\t<link rel=\"icon\" href=\"/site/theme/images/guideplace_logo_192.png\">
\t<link rel=\"apple-touch-icon\" href=\"/site/theme/images/guideplace_logo_192.png\">


\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css\">
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/vue-slider-component@3.1.4/theme/default.css\">
\t<link rel=\"stylesheet\" href=\"/site/theme/css/base.css\">
\t
\t<script src=\"/site/theme/js/vue.js\"></script>
\t<script src=\"/site/theme/js/store.js\"></script>

<style>
.sbar {
\t\t\tposition: fixed;
\t\t\tleft: 0;
\t\t\ttop: 0;
\t\t\tz-index: 9;
\t\t\tbackground: var(--text);
\t\t\tpadding: 115px 25px 45px;
\t\t\theight: 100vh;
\t\t\tmin-width: 85px;
\t\t\ttransition: .3s;
\t\t}
\t\t
\t\t.sbar.hovered {
\t\t\twidth: unset;
\t\t}
\t\t
\t\t.sbar-menu__list {
\t\t\tlist-style: none;
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t\ttext-align: center;
\t\t}
\t\t
\t\t.sbar-menu__item:not(:last-child) {
\t\t\tmargin-bottom: 20px;
\t\t}
\t\t
\t\t.sbar-menu__link {
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tcolor: #fff;
\t\t\tfont-size: 12px;
\t\t\tline-height: 14px;
\t\t}
\t
\t.sbar-menu__link svg path {
\t\tfill: rgb(204, 204, 204);
\t}
\t\t
\t\t.sbar-menu__link-icon {
\t\t\tflex: 0 0 35px;
\t\t}
\t\t
\t\t.sbar.hovered .sbar-menu__link-icon {
\t\t\tpadding-right: 10px;
\t\t\tflex: 0 0 45px;
\t\t}
\t\t
\t\t.sbar-menu__link-title {
\t\t\tdisplay: none;
\t\t\tfont-size: 14px;
\t\t}
\t\tli.sbar-menu__item:hover .sbar-menu__link-title {
\t\t\tborder-bottom: 1px dashed #fff;
\t\t\tcolor:#fff;
\t\t}
\t\tli.sbar-menu__item:hover path {fill:#fff; transition: .3s;} 
\t\t
\t\t.sbar.hovered .sbar-menu__link-title {
\t\t\tdisplay: block
\t\t}
\t
\t.sbar-search {
\t\tmargin-bottom: 50px;
\t}
\t
\t.sbar-search__btn {
\t\tdisplay: inline-block;
\t\ttext-align: center;
\t\twidth: 35px;
\t\ttext-align: center;
\t}
\t
\t.sbar-search__btn svg * {
\t\tfill: rgb(204, 204, 204);
\t\ttransition: .3s;
\t}
\t
\t.sbar-search__btn:hover svg * {
\t\tfill: #fff;
\t}
\t\t
</style>
<link id=\"page_favicon\" href=\"/site/theme/images/favicon.ico\" rel=\"icon\" type=\"image/x-icon\">



";
    }

    public function getTemplateName()
    {
        return "base";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 11,  71 => 10,  63 => 6,  61 => 5,  56 => 4,  53 => 3,  11 => 1,);
    }
}
/* {% extends '_.new' %}*/
/* */
/* {% block title %}*/
/* 	 {$ parent() $} 🚕*/
/* 	{% if site.field_name %}*/
/* 		| {$ site.field_name $}*/
/* 	{% endif %}*/
/* {% endblock %}*/
/* */
/* {% block head %}*/
/* 	{$ parent() $}*/
/* 	<link rel="preconnect" href="https://fonts.gstatic.com">*/
/* 	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">*/
/* 	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>*/
/* 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />*/
/* */
/* 	<link rel="manifest" href="/manifest.json">*/
/* 	<meta name="mobile-web-app-capable" content="yes">*/
/* 	<meta name="apple-mobile-web-app-capable" content="yes">*/
/* 	<meta name="application-name" content="guide.place">*/
/* 	<meta name="apple-mobile-web-app-title" content="guide.place">*/
/* 	<meta name="theme-color" content="#f91942">*/
/* 	<meta name="msapplication-navbutton-color" content="#f91942">*/
/* 	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">*/
/* 	<meta name="msapplication-starturl" content="/">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">*/
/* */
/* 	<link rel="icon" sizes="512x512" href="/site/theme/images/guideplace_logo.png">*/
/* 	<link rel="apple-touch-icon" sizes="192x192" href="/site/theme/images/guideplace_logo.png">*/
/* 	<link rel="icon" href="/site/theme/images/guideplace_logo_192.png">*/
/* 	<link rel="apple-touch-icon" href="/site/theme/images/guideplace_logo_192.png">*/
/* */
/* */
/* 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">*/
/* 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vue-slider-component@3.1.4/theme/default.css">*/
/* 	<link rel="stylesheet" href="/site/theme/css/base.css">*/
/* 	*/
/* 	<script src="/site/theme/js/vue.js"></script>*/
/* 	<script src="/site/theme/js/store.js"></script>*/
/* */
/* <style>*/
/* .sbar {*/
/* 			position: fixed;*/
/* 			left: 0;*/
/* 			top: 0;*/
/* 			z-index: 9;*/
/* 			background: var(--text);*/
/* 			padding: 115px 25px 45px;*/
/* 			height: 100vh;*/
/* 			min-width: 85px;*/
/* 			transition: .3s;*/
/* 		}*/
/* 		*/
/* 		.sbar.hovered {*/
/* 			width: unset;*/
/* 		}*/
/* 		*/
/* 		.sbar-menu__list {*/
/* 			list-style: none;*/
/* 			padding: 0;*/
/* 			margin: 0;*/
/* 			text-align: center;*/
/* 		}*/
/* 		*/
/* 		.sbar-menu__item:not(:last-child) {*/
/* 			margin-bottom: 20px;*/
/* 		}*/
/* 		*/
/* 		.sbar-menu__link {*/
/* 			display: flex;*/
/* 			align-items: center;*/
/* 			color: #fff;*/
/* 			font-size: 12px;*/
/* 			line-height: 14px;*/
/* 		}*/
/* 	*/
/* 	.sbar-menu__link svg path {*/
/* 		fill: rgb(204, 204, 204);*/
/* 	}*/
/* 		*/
/* 		.sbar-menu__link-icon {*/
/* 			flex: 0 0 35px;*/
/* 		}*/
/* 		*/
/* 		.sbar.hovered .sbar-menu__link-icon {*/
/* 			padding-right: 10px;*/
/* 			flex: 0 0 45px;*/
/* 		}*/
/* 		*/
/* 		.sbar-menu__link-title {*/
/* 			display: none;*/
/* 			font-size: 14px;*/
/* 		}*/
/* 		li.sbar-menu__item:hover .sbar-menu__link-title {*/
/* 			border-bottom: 1px dashed #fff;*/
/* 			color:#fff;*/
/* 		}*/
/* 		li.sbar-menu__item:hover path {fill:#fff; transition: .3s;} */
/* 		*/
/* 		.sbar.hovered .sbar-menu__link-title {*/
/* 			display: block*/
/* 		}*/
/* 	*/
/* 	.sbar-search {*/
/* 		margin-bottom: 50px;*/
/* 	}*/
/* 	*/
/* 	.sbar-search__btn {*/
/* 		display: inline-block;*/
/* 		text-align: center;*/
/* 		width: 35px;*/
/* 		text-align: center;*/
/* 	}*/
/* 	*/
/* 	.sbar-search__btn svg * {*/
/* 		fill: rgb(204, 204, 204);*/
/* 		transition: .3s;*/
/* 	}*/
/* 	*/
/* 	.sbar-search__btn:hover svg * {*/
/* 		fill: #fff;*/
/* 	}*/
/* 		*/
/* </style>*/
/* <link id="page_favicon" href="/site/theme/images/favicon.ico" rel="icon" type="image/x-icon">*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
