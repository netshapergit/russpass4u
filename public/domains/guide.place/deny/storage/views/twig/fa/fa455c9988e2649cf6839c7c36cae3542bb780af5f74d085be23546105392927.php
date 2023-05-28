<?php

/* module_types.announcement.preview */
class __TwigTemplate_9cf4a98b51778a304035ff09201740299b04351f063512cdddb6cf0ec6a135e6 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.module_types.announcement.rows", "module_types.announcement.preview", 1);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.module_types.announcement.rows";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 5);
        $filters = array("default" => 5, "escape" => 7);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_item($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"media-body blog\">
\t\t";
        // line 5
        if ((($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "parent_page", array(), "any", false, true), "field_header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "parent_page", array(), "any", false, true), "field_header", array()), "")) : (""))) {
            // line 6
            echo "\t\t<div class=\"item_category-name\">
\t\t\t<a href=\"";
            // line 7
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "parent_page", array()), "field_path", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "parent_page", array()), "field_header", array()), "html", null, true));
            echo "</a> 
\t\t</div>
\t\t";
        }
        // line 10
        echo "\t\t
\t";
        // line 11
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_header", array()), "")) : (""))) {
            // line 12
            echo "\t\t\t<h4 class=\"media-heading\">
\t\t\t\t<a href=\"";
            // line 13
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_header", array()), "html", null, true));
            echo "</a>
\t\t\t</h4>
\t\t";
        }
        // line 16
        echo "
\t";
        // line 17
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_image", array()), "")) : (""))) {
            // line 18
            echo "\t\t
\t\t<div class=\"media-img\">
\t\t<a class=\"pull\" href=\"";
            // line 20
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
            echo "\">
\t\t\t<div class=\"icon\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/medium/";
            // line 22
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_image", array()), "html", null, true));
            echo "\">\t
\t\t\t</div>\t
\t\t</a>
\t\t
\t\t</div>
\t";
        }
        // line 28
        echo "
\t\t";
        // line 29
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_summary", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_summary", array()), "")) : (""))) {
            // line 30
            echo "\t\t\t\t<p>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_summary", array()), "html", null, true));
            echo "</p>
\t\t";
        }
        // line 32
        echo "\t\t</div>

<!--
\t<script type=\"text/javascript\">(function() {
  if (window.pluso)if (typeof window.pluso.start == \"function\") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>
<div class=\"pluso\" data-background=\"transparent\" data-options=\"medium,square,line,horizontal,counter,theme=02\" data-services=\"vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print\" data-url=\"http://ru.holiday";
        // line 44
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
        echo "\" data-title=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_header", array()), "html", null, true));
        echo "\" data-description=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_summary", array()), "html", null, true));
        echo "\"></div>



<!--<a href=\"http://vk.com/share.php?url=http://ru.holiday";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
        echo "\" target=\"_blank\">Поделиться ВКонтакте</a>-->

<div class=\"social\">
<script type=\"text/javascript\">
<!--
//document.write(VK.Share.button());
document.write(VK.Share.button({url: 'http://ru.holiday";
        // line 54
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
        echo "', title: '";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_header", array()), "html", null, true));
        echo "', description:'";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_summary", array()), "html", null, true));
        echo "', image:'http://ru.holiday/site/data/images/medium/";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_image", array()), "html", null, true));
        echo "' }, {type: 'custom', text: '<i class=\"fa fa-vk\" aria-hidden=\"true\"></i>'})); 
-->
</script>\t

<a onClick=\"openWin2()\">
 <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
</a>
<script><!-- hide
function openWin2() {
myWin=open(\"http://www.facebook.com/sharer.php?u=http://ru.holiday";
        // line 63
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
        echo "\",\"displayWindow\",\"width=520,height=300,left=350,top=170,status=no,toolbar=no,menubar=no\");
}
// -->
</script>
\t
<a href=\"https://plus.google.com/share?url=http://ru.holiday";
        // line 68
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
        echo "\" onclick=\"javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;\">
\t<i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i>
</a>\t
\t\t
<a href=\"https://twitter.com/intent/tweet?hashtags=ruholiday&amp;original_referer=http://ru.holiday";
        // line 73
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
        echo "&amp;ref_src=twsrc%5Etfw&amp;related=&amp;text=";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_header", array()), "html", null, true));
        echo "&amp;tw_p=tweetbutton&amp;url=http://ru.holiday";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
        echo "\" target=\"_blank\">
\t<i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
</a>
\t
<a href=\"http://connect.mail.ru/share?url=http://ru.holiday";
        // line 77
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
        echo "&title=";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_header", array()), "html", null, true));
        echo "&description=";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_summary", array()), "html", null, true));
        echo "&imageurl=http://ru.holiday/site/data/images/medium/";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_image", array()), "html", null, true));
        echo "\">
\t<i class=\"fa fa-at\" aria-hidden=\"true\"></i>
</a>
\t
</div>\t

<div class=\"hashtag\"> \t\t
\t";
        // line 84
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_hashtag", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_hashtag", array()), "")) : (""))) {
            // line 85
            echo "\t\t<a href=\"http://ru.holiday/search?searchid=2269018&text=%23";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_hashtag", array()), "html", null, true));
            echo "&web=0#priceLow=&priceHigh=&categoryId=\">#";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_hashtag", array()), "html", null, true));
            echo "</a> 
\t";
        }
        // line 87
        echo "</div>

<!-- 
\t<div id=\"vk_like_";
        // line 90
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), "html", null, true));
        echo "\"></div>
\t<script type=\"text/javascript\">
\t\tVK.init({apiId: 5466329, onlyWidgets: true});
\t\tVK.Widgets.Like(\"vk_like_";
        // line 93
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), "html", null, true));
        echo "\", {type: \"vertical\", pageTitle:\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_header", array()), "html", null, true));
        echo "\", pageDescription:\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_summary", array()), "html", null, true));
        echo "\" }, ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), "html", null, true));
        echo ");
\t</script>

\t<div class=\"fb-like\" data-href=\"";
        // line 96
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
        echo "\" data-width=\"24\" data-layout=\"box_count\" data-action=\"like\" data-show-faces=\"true\" data-share=\"false\"></div>
 -->
\t


";
    }

    public function getTemplateName()
    {
        return "module_types.announcement.preview";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 96,  237 => 93,  231 => 90,  226 => 87,  218 => 85,  216 => 84,  200 => 77,  189 => 73,  181 => 68,  173 => 63,  155 => 54,  146 => 48,  135 => 44,  121 => 32,  115 => 30,  113 => 29,  110 => 28,  101 => 22,  96 => 20,  92 => 18,  90 => 17,  87 => 16,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  63 => 7,  60 => 6,  58 => 5,  55 => 4,  52 => 3,  11 => 1,);
    }
}
/* {% extends '_.module_types.announcement.rows' %}*/
/* */
/* {% block item %}*/
/* 	<div class="media-body blog">*/
/* 		{% if item.parent_page.field_header|default('') %}*/
/* 		<div class="item_category-name">*/
/* 			<a href="{$ item.parent_page.field_path $}">{$ item.parent_page.field_header $}</a> */
/* 		</div>*/
/* 		{% endif %}*/
/* 		*/
/* 	{% if item.field_header|default('') %}*/
/* 			<h4 class="media-heading">*/
/* 				<a href="{$ item.path $}">{$ item.field_header $}</a>*/
/* 			</h4>*/
/* 		{% endif %}*/
/* */
/* 	{% if item.field_image|default('') %}*/
/* 		*/
/* 		<div class="media-img">*/
/* 		<a class="pull" href="{$ item.path $}">*/
/* 			<div class="icon">*/
/* 			<img class="media-object" src="/site/data/images/medium/{$ item.field_image $}">	*/
/* 			</div>	*/
/* 		</a>*/
/* 		*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 		{% if item.field_summary|default('') %}*/
/* 				<p>{$ item.field_summary $}</p>*/
/* 		{% endif %}*/
/* 		</div>*/
/* */
/* <!--*/
/* 	<script type="text/javascript">(function() {*/
/*   if (window.pluso)if (typeof window.pluso.start == "function") return;*/
/*   if (window.ifpluso==undefined) { window.ifpluso = 1;*/
/*     var d = document, s = d.createElement('script'), g = 'getElementsByTagName';*/
/*     s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;*/
/*     s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';*/
/*     var h=d[g]('body')[0];*/
/*     h.appendChild(s);*/
/*   }})();</script>*/
/* <div class="pluso" data-background="transparent" data-options="medium,square,line,horizontal,counter,theme=02" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print" data-url="http://ru.holiday{$ item.path $}" data-title="{$ item.field_header $}" data-description="{$ item.field_summary $}"></div>*/
/* */
/* */
/* */
/* <!--<a href="http://vk.com/share.php?url=http://ru.holiday{$ item.path $}" target="_blank">Поделиться ВКонтакте</a>-->*/
/* */
/* <div class="social">*/
/* <script type="text/javascript">*/
/* <!--*/
/* //document.write(VK.Share.button());*/
/* document.write(VK.Share.button({url: 'http://ru.holiday{$ item.path $}', title: '{$ item.field_header $}', description:'{$ item.field_summary $}', image:'http://ru.holiday/site/data/images/medium/{$ item.field_image $}' }, {type: 'custom', text: '<i class="fa fa-vk" aria-hidden="true"></i>'})); */
/* -->*/
/* </script>	*/
/* */
/* <a onClick="openWin2()">*/
/*  <i class="fa fa-facebook" aria-hidden="true"></i>*/
/* </a>*/
/* <script><!-- hide*/
/* function openWin2() {*/
/* myWin=open("http://www.facebook.com/sharer.php?u=http://ru.holiday{$ item.path $}","displayWindow","width=520,height=300,left=350,top=170,status=no,toolbar=no,menubar=no");*/
/* }*/
/* // -->*/
/* </script>*/
/* 	*/
/* <a href="https://plus.google.com/share?url=http://ru.holiday{$ item.path $}" onclick="javascript:window.open(this.href,*/
/*   '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">*/
/* 	<i class="fa fa-google-plus" aria-hidden="true"></i>*/
/* </a>	*/
/* 		*/
/* <a href="https://twitter.com/intent/tweet?hashtags=ruholiday&amp;original_referer=http://ru.holiday{$ item.path $}&amp;ref_src=twsrc%5Etfw&amp;related=&amp;text={$ item.field_header $}&amp;tw_p=tweetbutton&amp;url=http://ru.holiday{$ item.path $}" target="_blank">*/
/* 	<i class="fa fa-twitter" aria-hidden="true"></i>*/
/* </a>*/
/* 	*/
/* <a href="http://connect.mail.ru/share?url=http://ru.holiday{$ item.path $}&title={$ item.field_header $}&description={$ item.field_summary $}&imageurl=http://ru.holiday/site/data/images/medium/{$ item.field_image $}">*/
/* 	<i class="fa fa-at" aria-hidden="true"></i>*/
/* </a>*/
/* 	*/
/* </div>	*/
/* */
/* <div class="hashtag"> 		*/
/* 	{% if item.field_hashtag|default('') %}*/
/* 		<a href="http://ru.holiday/search?searchid=2269018&text=%23{$ item.field_hashtag $}&web=0#priceLow=&priceHigh=&categoryId=">#{$ item.field_hashtag $}</a> */
/* 	{% endif %}*/
/* </div>*/
/* */
/* <!-- */
/* 	<div id="vk_like_{$ item.id $}"></div>*/
/* 	<script type="text/javascript">*/
/* 		VK.init({apiId: 5466329, onlyWidgets: true});*/
/* 		VK.Widgets.Like("vk_like_{$ item.id $}", {type: "vertical", pageTitle:"{$ item.field_header $}", pageDescription:"{$ item.field_summary $}" }, {$ item.id $});*/
/* 	</script>*/
/* */
/* 	<div class="fb-like" data-href="{$ item.path $}" data-width="24" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></div>*/
/*  -->*/
/* 	*/
/* */
/* */
/* {% endblock %}*/
/* */
