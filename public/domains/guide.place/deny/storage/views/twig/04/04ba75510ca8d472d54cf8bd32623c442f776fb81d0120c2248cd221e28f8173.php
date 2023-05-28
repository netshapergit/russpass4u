<?php

/* base */
class __TwigTemplate_8bab467bbdc2a81962f6ae605a554d58ea76c145569a7f024efadb82afe8576c extends TwigBridge\Twig\Template
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

\t<!--link rel=\"stylesheet\" href=\"https://unpkg.com/swiper/swiper-bundle.css\" /-->
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css\">

\t
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/vue-slider-component@3.1.4/theme/default.css\">
\t<link rel=\"stylesheet\" href=\"/site/theme/css/base.css\">
\t
\t<script src=\"/site/theme/js/vue.js\"></script>

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
\t<!--script src=\"/site/theme/js/sessvars.js\"></script>
<link id=\"base_day\" rel=\"stylesheet\" href=\"/site/theme/css/base7.css\"-->
<!--script type=\"text/javascript\">

  var date = new Date (); // создаем объект Date с текущей датой и временем
  var h = date.getHours (); // получаем текущий час

  //if (h>20 || h<8) document.getElementById (\"base_day\").href = \"/site/theme/css/base_night.css\"; // если сейчас ночь, то меняем файл стилей

</script-->
\t
\t<!--link rel=\"stylesheet\" href=\"/site/theme/css/slideshow.css\">
\t<link rel=\"stylesheet\" href=\"/site/theme/css/mobile.css\">
\t<link rel=\"stylesheet\" href=\"/site/theme/css/parallax.css\">
\t<link rel=\"stylesheet\" href=\"/site/theme/css/city.css\">
\t<link rel=\"stylesheet\" href=\"/site/theme/css/blog1.css\">
\t<link rel=\"stylesheet\" href=\"/site/theme/css/contentcity2.css\">
\t<link rel=\"stylesheet\" href=\"/site/theme/css/weather.css\">
\t<script src=\"/site/theme/js/base6.js\"></script>
\t<script src=\"/site/theme/js/parallax.js\"></script-->

\t<link href='https://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
\t<link href='https://fonts.googleapis.com/css?family=Cuprum&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
\t<!--link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css\"-->
<link id=\"page_favicon\" href=\"/site/theme/images/favicon.ico\" rel=\"icon\" type=\"image/x-icon\">
<!--script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.1.0/jquery.simpleWeather.min.js\"></script-->

<script type=\"text/javascript\" src=\"//vk.com/js/api/openapi.js?121\"></script>
<script type=\"text/javascript\" src=\"https://vk.com/js/api/share.js?90\" charset=\"windows-1251\"></script>
<meta name='yandex-verification' content='41cc99da67f3b2cc' />
<meta name=\"yandex-verification\" content=\"8f87560414cdccae\" />
<!--script type=\"text/javascript\">
(function() {
    if (typeof window.janrain !== 'object') window.janrain = {};
    if (typeof window.janrain.settings !== 'object') window.janrain.settings = {};
    
    janrain.settings.tokenUrl = 'ru.holiday';

    function isReady() { janrain.ready = true; };
    if (document.addEventListener) {
      document.addEventListener(\"DOMContentLoaded\", isReady, false);
    } else {
      window.attachEvent('onload', isReady);
    }

    var e = document.createElement('script');
    e.type = 'text/javascript';
    e.id = 'janrainAuthWidget';

    if (document.location.protocol === 'https:') {
      e.src = 'https://rpxnow.com/js/lib/ru-holiday/engage.js';
    } else {
      e.src = 'http://widget-cdn.rpxnow.com/js/lib/ru-holiday/engage.js';
    }

    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(e, s);
})();
</script-->



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
/* 	<!--link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" /-->*/
/* 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">*/
/* */
/* 	*/
/* 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vue-slider-component@3.1.4/theme/default.css">*/
/* 	<link rel="stylesheet" href="/site/theme/css/base.css">*/
/* 	*/
/* 	<script src="/site/theme/js/vue.js"></script>*/
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
/* 	<!--script src="/site/theme/js/sessvars.js"></script>*/
/* <link id="base_day" rel="stylesheet" href="/site/theme/css/base7.css"-->*/
/* <!--script type="text/javascript">*/
/* */
/*   var date = new Date (); // создаем объект Date с текущей датой и временем*/
/*   var h = date.getHours (); // получаем текущий час*/
/* */
/*   //if (h>20 || h<8) document.getElementById ("base_day").href = "/site/theme/css/base_night.css"; // если сейчас ночь, то меняем файл стилей*/
/* */
/* </script-->*/
/* 	*/
/* 	<!--link rel="stylesheet" href="/site/theme/css/slideshow.css">*/
/* 	<link rel="stylesheet" href="/site/theme/css/mobile.css">*/
/* 	<link rel="stylesheet" href="/site/theme/css/parallax.css">*/
/* 	<link rel="stylesheet" href="/site/theme/css/city.css">*/
/* 	<link rel="stylesheet" href="/site/theme/css/blog1.css">*/
/* 	<link rel="stylesheet" href="/site/theme/css/contentcity2.css">*/
/* 	<link rel="stylesheet" href="/site/theme/css/weather.css">*/
/* 	<script src="/site/theme/js/base6.js"></script>*/
/* 	<script src="/site/theme/js/parallax.js"></script-->*/
/* */
/* 	<link href='https://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>*/
/* 	<link href='https://fonts.googleapis.com/css?family=Cuprum&subset=latin,cyrillic' rel='stylesheet' type='text/css'>*/
/* 	<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"-->*/
/* <link id="page_favicon" href="/site/theme/images/favicon.ico" rel="icon" type="image/x-icon">*/
/* <!--script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.1.0/jquery.simpleWeather.min.js"></script-->*/
/* */
/* <script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>*/
/* <script type="text/javascript" src="https://vk.com/js/api/share.js?90" charset="windows-1251"></script>*/
/* <meta name='yandex-verification' content='41cc99da67f3b2cc' />*/
/* <meta name="yandex-verification" content="8f87560414cdccae" />*/
/* <!--script type="text/javascript">*/
/* (function() {*/
/*     if (typeof window.janrain !== 'object') window.janrain = {};*/
/*     if (typeof window.janrain.settings !== 'object') window.janrain.settings = {};*/
/*     */
/*     janrain.settings.tokenUrl = 'ru.holiday';*/
/* */
/*     function isReady() { janrain.ready = true; };*/
/*     if (document.addEventListener) {*/
/*       document.addEventListener("DOMContentLoaded", isReady, false);*/
/*     } else {*/
/*       window.attachEvent('onload', isReady);*/
/*     }*/
/* */
/*     var e = document.createElement('script');*/
/*     e.type = 'text/javascript';*/
/*     e.id = 'janrainAuthWidget';*/
/* */
/*     if (document.location.protocol === 'https:') {*/
/*       e.src = 'https://rpxnow.com/js/lib/ru-holiday/engage.js';*/
/*     } else {*/
/*       e.src = 'http://widget-cdn.rpxnow.com/js/lib/ru-holiday/engage.js';*/
/*     }*/
/* */
/*     var s = document.getElementsByTagName('script')[0];*/
/*     s.parentNode.insertBefore(e, s);*/
/* })();*/
/* </script-->*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
