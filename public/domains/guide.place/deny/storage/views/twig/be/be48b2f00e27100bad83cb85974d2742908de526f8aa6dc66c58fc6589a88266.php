<?php

/* base */
class __TwigTemplate_01763072768410eb6d4599c78e534561622f1bdc49387cb27225a42edfcff17e extends TwigBridge\Twig\Template
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
        echo "\t🚕 ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
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
\t<script src=\"/site/theme/js/sessvars.js\"></script>
<link id=\"base_day\" rel=\"stylesheet\" href=\"/site/theme/css/base7.css\">
<script type=\"text/javascript\">

  var date = new Date (); // создаем объект Date с текущей датой и временем

  var h = date.getHours (); // получаем текущий час

  //if (h>20 || h<8) document.getElementById (\"base_day\").href = \"/site/theme/css/base_night.css\"; // если сейчас ночь, то меняем файл стилей

</script>
\t
\t<link rel=\"stylesheet\" href=\"/site/theme/css/slideshow.css\">
\t<link rel=\"stylesheet\" href=\"/site/theme/css/mobile.css\">
\t<link rel=\"stylesheet\" href=\"/site/theme/css/parallax.css\">
\t<link rel=\"stylesheet\" href=\"/site/theme/css/city.css\">
\t<link rel=\"stylesheet\" href=\"/site/theme/css/blog1.css\">
\t<link rel=\"stylesheet\" href=\"/site/theme/css/contentcity2.css\">
\t<link rel=\"stylesheet\" href=\"/site/theme/css/weather.css\">
\t<script src=\"/site/theme/js/base6.js\"></script>
\t
\t<script src=\"/site/theme/js/parallax.js\"></script>
\t<link href='https://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
\t<link href='https://fonts.googleapis.com/css?family=Cuprum&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css\">
<link id=\"page_favicon\" href=\"/site/theme/images/favicon.ico\" rel=\"icon\" type=\"image/x-icon\">
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.1.0/jquery.simpleWeather.min.js\"></script>

<script type=\"text/javascript\" src=\"//vk.com/js/api/openapi.js?121\"></script>

<script type=\"text/javascript\" src=\"http://vk.com/js/api/share.js?90\" charset=\"windows-1251\"></script>

<meta name='yandex-verification' content='41cc99da67f3b2cc' />

<script type=\"text/javascript\">
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
</script>

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
/* 	🚕 {$ parent() $}*/
/* 	{% if site.field_name %}*/
/* 		| {$ site.field_name $}*/
/* 	{% endif %}*/
/* {% endblock %}*/
/* */
/* {% block head %}*/
/* 	{$ parent() $}*/
/* 	<script src="/site/theme/js/sessvars.js"></script>*/
/* <link id="base_day" rel="stylesheet" href="/site/theme/css/base7.css">*/
/* <script type="text/javascript">*/
/* */
/*   var date = new Date (); // создаем объект Date с текущей датой и временем*/
/* */
/*   var h = date.getHours (); // получаем текущий час*/
/* */
/*   //if (h>20 || h<8) document.getElementById ("base_day").href = "/site/theme/css/base_night.css"; // если сейчас ночь, то меняем файл стилей*/
/* */
/* </script>*/
/* 	*/
/* 	<link rel="stylesheet" href="/site/theme/css/slideshow.css">*/
/* 	<link rel="stylesheet" href="/site/theme/css/mobile.css">*/
/* 	<link rel="stylesheet" href="/site/theme/css/parallax.css">*/
/* 	<link rel="stylesheet" href="/site/theme/css/city.css">*/
/* 	<link rel="stylesheet" href="/site/theme/css/blog1.css">*/
/* 	<link rel="stylesheet" href="/site/theme/css/contentcity2.css">*/
/* 	<link rel="stylesheet" href="/site/theme/css/weather.css">*/
/* 	<script src="/site/theme/js/base6.js"></script>*/
/* 	*/
/* 	<script src="/site/theme/js/parallax.js"></script>*/
/* 	<link href='https://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>*/
/* 	<link href='https://fonts.googleapis.com/css?family=Cuprum&subset=latin,cyrillic' rel='stylesheet' type='text/css'>*/
/* 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">*/
/* <link id="page_favicon" href="/site/theme/images/favicon.ico" rel="icon" type="image/x-icon">*/
/* <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.1.0/jquery.simpleWeather.min.js"></script>*/
/* */
/* <script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>*/
/* */
/* <script type="text/javascript" src="http://vk.com/js/api/share.js?90" charset="windows-1251"></script>*/
/* */
/* <meta name='yandex-verification' content='41cc99da67f3b2cc' />*/
/* */
/* <script type="text/javascript">*/
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
/* </script>*/
/* */
/* {% endblock %}*/
/* */
