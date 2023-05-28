<?php

/* item_cat_blog */
class __TwigTemplate_b1c4bedef5092335a136d4d5ac82a9a16a3d4ac5c18882374e12a1fda80b825f extends TwigBridge\Twig\Template
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
        $tags = array("if" => 2, "set" => 81, "for" => 82);
        $filters = array("default" => 2, "escape" => 4, "split" => 81, "trim" => 81);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'for'),
                array('default', 'escape', 'split', 'trim'),
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
        echo "<div class=\"media-body blog\">
\t";
        // line 2
        if ((($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "parent_page", array(), "any", false, true), "field_header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "parent_page", array(), "any", false, true), "field_header", array()), "")) : (""))) {
            // line 3
            echo "\t\t<div class=\"item_category-name\">
\t\t\t<a href=\"";
            // line 4
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "parent_page", array()), "path", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "parent_page", array()), "field_header", array()), "html", null, true));
            echo "</a> 
\t\t</div>
\t";
        }
        // line 7
        echo "\t
\t";
        // line 8
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_header", array()), "")) : (""))) {
            // line 9
            echo "\t\t\t<h4 class=\"media-heading\">
\t\t\t\t<a href=\"";
            // line 10
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_header", array()), "html", null, true));
            echo "</a>
\t\t\t</h4>
\t";
        }
        // line 13
        echo "
\t";
        // line 14
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_image", array()), "")) : (""))) {
            // line 15
            echo "\t\t
\t\t<div class=\"media-img\">
\t\t<a class=\"pull\" href=\"";
            // line 17
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
            echo "\">
\t\t\t<div class=\"icon\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/large/";
            // line 19
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_image", array()), "html", null, true));
            echo "\">
\t\t\t</div>
\t\t</a>
\t\t
\t\t</div>
\t";
        }
        // line 25
        echo "
\t\t";
        // line 26
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_summary", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_summary", array()), "")) : (""))) {
            // line 27
            echo "\t\t\t\t<p>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_summary", array()), "html", null, true));
            echo "</p>
\t\t";
        }
        // line 29
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
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
        echo "\" data-title=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_header", array()), "html", null, true));
        echo "\" data-description=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_summary", array()), "html", null, true));
        echo "\"></div>



<!--<a href=\"http://vk.com/share.php?url=http://ru.holiday";
        // line 45
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
        echo "\" target=\"_blank\">Поделиться ВКонтакте</a>-->

<div class=\"social\">
<script type=\"text/javascript\">
<!--
//document.write(VK.Share.button());
document.write(VK.Share.button({url: 'http://ru.holiday";
        // line 51
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
        // line 60
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
        echo "\",\"displayWindow\",\"width=520,height=300,left=350,top=170,status=no,toolbar=no,menubar=no\");
}
// -->
</script>
\t
<a href=\"https://plus.google.com/share?url=http://ru.holiday";
        // line 65
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
        echo "\" onclick=\"javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;\">
\t<i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i>
</a>\t
\t\t
<a href=\"https://twitter.com/intent/tweet?hashtags=ruholiday&amp;original_referer=http://ru.holiday";
        // line 70
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
        // line 74
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
</div>\t

<div class=\"hashtag\"> \t\t
\t";
        // line 80
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_hashtag", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_hashtag", array()), "")) : (""))) {
            // line 81
            echo "\t\t";
            $context["tags"] = twig_split_filter($this->env, trim($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_hashtag", array())), ",");
            // line 82
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 83
                echo "\t\t\t<a href=\"http://ru.holiday/search?searchid=2269018&text=";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["tag"], "html", null, true));
                echo "&web=0#priceLow=&priceHigh=&categoryId=\">#";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["tag"], "html", null, true));
                echo "</a> 
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "\t";
        }
        // line 86
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "item_cat_blog";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 86,  224 => 85,  213 => 83,  208 => 82,  205 => 81,  203 => 80,  188 => 74,  177 => 70,  169 => 65,  161 => 60,  143 => 51,  134 => 45,  123 => 41,  109 => 29,  103 => 27,  101 => 26,  98 => 25,  89 => 19,  84 => 17,  80 => 15,  78 => 14,  75 => 13,  67 => 10,  64 => 9,  62 => 8,  59 => 7,  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }
}
/* <div class="media-body blog">*/
/* 	{% if item.parent_page.field_header|default('') %}*/
/* 		<div class="item_category-name">*/
/* 			<a href="{$ item.parent_page.path $}">{$ item.parent_page.field_header $}</a> */
/* 		</div>*/
/* 	{% endif %}*/
/* 	*/
/* 	{% if item.field_header|default('') %}*/
/* 			<h4 class="media-heading">*/
/* 				<a href="{$ item.path $}">{$ item.field_header $}</a>*/
/* 			</h4>*/
/* 	{% endif %}*/
/* */
/* 	{% if item.field_image|default('') %}*/
/* 		*/
/* 		<div class="media-img">*/
/* 		<a class="pull" href="{$ item.path $}">*/
/* 			<div class="icon">*/
/* 			<img class="media-object" src="/site/data/images/large/{$ item.field_image $}">*/
/* 			</div>*/
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
/* </div>	*/
/* */
/* <div class="hashtag"> 		*/
/* 	{% if item.field_hashtag|default('') %}*/
/* 		{% set tags = item.field_hashtag|trim|split(',') %}*/
/* 		{% for tag in tags %}*/
/* 			<a href="http://ru.holiday/search?searchid=2269018&text={$ tag $}&web=0#priceLow=&priceHigh=&categoryId=">#{$ tag $}</a> */
/* 		{% endfor %}*/
/* 	{% endif %}*/
/* </div>*/
/* */
/* */
