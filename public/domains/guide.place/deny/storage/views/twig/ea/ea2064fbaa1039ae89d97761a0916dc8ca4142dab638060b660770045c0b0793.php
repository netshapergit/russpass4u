<?php

/* layouts.blogitem */
class __TwigTemplate_89189ff5f3bdcfe91529e753b93044967fba9e0823523b8a05da8e059bb525b6 extends TwigBridge\Twig\Template
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
        $tags = array("if" => 6, "for" => 34, "set" => 35);
        $filters = array("escape" => 3, "default" => 6, "striptags" => 52, "raw" => 55);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array('escape', 'default', 'striptags', 'raw'),
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
        echo "<div class=\"blog_item\">
\t<div class=\"item_category-name\">
\t\t\t\t<a href=\"/\">";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_hashtag", array()), "html", null, true));
        echo "</a> 
\t\t\t</div>

\t";
        // line 6
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array()), "")) : (""))) {
            // line 7
            echo "\t\t<h1>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array()), "html", null, true));
            echo "</h1>
\t";
        }
        // line 9
        echo "

\t";
        // line 11
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_image", array()), "")) : (""))) {
            // line 12
            echo "\t<div class=\"blog_image\">
\t\t<div class=\"block position-banner_parallax\">
\t\t\t<div class=\"position-parallax\">
\t\t<img data-rel=\"images\" data-popup=\"/site/data/images/large/";
            // line 15
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), ("field_image" . (isset($context["index"]) ? $context["index"] : null)), array(), "array"), "html", null, true));
            echo "\" src=\"/site/data/images/large/";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), ("field_image" . (isset($context["index"]) ? $context["index"] : null)), array(), "array"), "html", null, true));
            echo "\">
\t\t\t</div>
\t\t </div>
\t</div>
\t";
        }
        // line 20
        echo "


\t<div class=\"group_image\">\t\t

\t\t\t";
        // line 25
        if (((((((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_image", array()), "")) : ("")) || (($this->getAttribute(        // line 26
(isset($context["page"]) ? $context["page"] : null), "field_image2", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_image2", array()), "")) : (""))) || (($this->getAttribute(        // line 27
(isset($context["page"]) ? $context["page"] : null), "field_image3", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_image3", array()), "")) : (""))) || (($this->getAttribute(        // line 28
(isset($context["page"]) ? $context["page"] : null), "field_image4", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_image4", array()), "")) : (""))) || (($this->getAttribute(        // line 29
(isset($context["page"]) ? $context["page"] : null), "field_image5", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_image5", array()), "")) : (""))) || (($this->getAttribute(        // line 30
(isset($context["page"]) ? $context["page"] : null), "field_image6", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_image6", array()), "")) : ("")))) {
            // line 32
            echo "\t\t\t<div class=\"images col-sm-12 col-md-12\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(2, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 35
                echo "\t\t\t\t\t\t";
                $context["index"] = ((($context["i"] > 1)) ? ($context["i"]) : (""));
                // line 36
                echo "\t\t\t\t\t\t";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), ("field_image" . (isset($context["index"]) ? $context["index"] : null)), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), ("field_image" . (isset($context["index"]) ? $context["index"] : null)), array(), "array"), "")) : (""))) {
                    // line 37
                    echo "\t\t\t\t\t\t\t<div class=\"col-xs-6 col-md-2 col-sm-2\">
\t\t\t\t\t\t\t\t<div class=\"field_image";
                    // line 38
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : null), "html", null, true));
                    echo "\">
\t\t\t\t\t\t\t\t\t<img data-rel=\"images\" data-popup=\"/site/data/images/large/";
                    // line 39
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), ("field_image" . (isset($context["index"]) ? $context["index"] : null)), array(), "array"), "html", null, true));
                    echo "\" src=\"/site/data/images/medium/";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), ("field_image" . (isset($context["index"]) ? $context["index"] : null)), array(), "array"), "html", null, true));
                    echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 43
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 47
        echo "
\t\t</div>\t



\t";
        // line 52
        if (strip_tags((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_content", array()), "")) : ("")))) {
            // line 53
            echo "\t\t<div class=\"field_content\">
\t\t\t<h2>Описание</h2>
\t\t\t";
            // line 55
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_content", array()));
            echo "
\t\t</div>
\t";
        }
        // line 58
        echo "\t
\t
\t<div class=\"social\">
<script type=\"text/javascript\">
<!--
//document.write(VK.Share.button());
document.write(VK.Share.button({url: 'http://ru.holiday";
        // line 64
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array()), "html", null, true));
        echo "', title: '";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array()), "html", null, true));
        echo "', description:'";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_summary", array()), "html", null, true));
        echo "', image:'http://ru.holiday/site/data/images/medium/";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_image", array()), "html", null, true));
        echo "' }, {type: 'custom', text: '<i class=\"fa fa-vk\" aria-hidden=\"true\"></i>'})); 
-->
</script>\t

<a onClick=\"openWin2()\">
 <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
</a>
<script><!-- hide
function openWin2() {
myWin=open(\"http://www.facebook.com/sharer.php?u=http://ru.holiday";
        // line 73
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array()), "html", null, true));
        echo "\",\"displayWindow\",\"width=520,height=300,left=350,top=170,status=no,toolbar=no,menubar=no\");
}
// -->
</script>
\t
<a href=\"https://plus.google.com/share?url=http://ru.holiday";
        // line 78
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array()), "html", null, true));
        echo "\" onclick=\"javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;\">
\t<i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i>
</a>\t
\t\t
<a href=\"https://twitter.com/intent/tweet?hashtags=ruholiday&amp;original_referer=http://ru.holiday";
        // line 83
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array()), "html", null, true));
        echo "&amp;ref_src=twsrc%5Etfw&amp;related=&amp;text=";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array()), "html", null, true));
        echo "&amp;tw_p=tweetbutton&amp;url=http://ru.holiday";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array()), "html", null, true));
        echo "\" target=\"_blank\">
\t<i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
</a>
\t
<a href=\"http://connect.mail.ru/share?url=http://ru.holiday";
        // line 87
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array()), "html", null, true));
        echo "&title=";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array()), "html", null, true));
        echo "&description=";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_summary", array()), "html", null, true));
        echo "&imageurl=http://ru.holiday/site/data/images/medium/";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_image", array()), "html", null, true));
        echo "\">
\t<i class=\"fa fa-at\" aria-hidden=\"true\"></i>
</a>
\t
</div>\t

\t<!--<div id=\"vk_like_";
        // line 93
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array()), "html", null, true));
        echo "\"></div>
\t<script type=\"text/javascript\">
\t\tVK.init({apiId: 5466329, onlyWidgets: true});
\t\tVK.Widgets.Like(\"vk_like_";
        // line 96
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array()), "html", null, true));
        echo "\", {type: \"vertical\", pageTitle:\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array()), "html", null, true));
        echo "\", pageDescription:\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_summary", array()), "html", null, true));
        echo "\" }, ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), "html", null, true));
        echo ");
\t</script>-->

\t
<div class=\"like\">
\t<!--vk-->
\t<div id=\"vk_like\"></div>
\t<script type=\"text/javascript\">
\t\tVK.init({apiId: 5466329, onlyWidgets: true});
\t\tVK.Widgets.Like(\"vk_like\", {type: \"button\",height: 20});
\t</script>
\t<!--f-->
\t<div class=\"fb-like\" data-href=\"";
        // line 108
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array()), "html", null, true));
        echo "\" data-width=\"24\" data-layout=\"button_count\" data-action=\"like\" data-show-faces=\"true\" data-share=\"false\"></div>
\t<!--mail-->
\t<div style=\"width: 130px;\">
\t<a target=\"_blank\" class=\"mrc__plugin_uber_like_button\" href=\"http://connect.mail.ru/share\" data-mrc-config=\"{'cm' : '1', 'sz' : '20', 'st' : '2', 'tp' : 'mm'}\">Нравится</a>
<script src=\"https:/connect.mail.ru/js/loader.js\" type=\"text/javascript\" charset=\"UTF-8\"></script>
\t</div>
\t<!--ok-->
\t<div id=\"ok_shareWidget\"></div>
\t\t<script>
\t\t!function (d, id, did, st) {
\t\t  var js = d.createElement(\"script\");
\t\t  js.src = \"https://connect.ok.ru/connect.js\";
\t\t  js.onload = js.onreadystatechange = function () {
\t\t  if (!this.readyState || this.readyState == \"loaded\" || this.readyState == \"complete\") {
\t\t\tif (!this.executed) {
\t\t\t  this.executed = true;
\t\t\t  setTimeout(function () {
\t\t\t\tOK.CONNECT.insertShareWidget(id,did,st);
\t\t\t  }, 0);
\t\t\t}
\t\t  }};
\t\t  d.documentElement.appendChild(js);
\t\t}(document,\"ok_shareWidget\",document.URL,\"{width:145,height:30,st:'rounded',sz:20,ck:1}\");
\t\t</script>

\t
\t
</div>
\t\t
\t
</div>";
    }

    public function getTemplateName()
    {
        return "layouts.blogitem";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 108,  230 => 96,  224 => 93,  209 => 87,  198 => 83,  190 => 78,  182 => 73,  164 => 64,  156 => 58,  150 => 55,  146 => 53,  144 => 52,  137 => 47,  132 => 44,  126 => 43,  117 => 39,  113 => 38,  110 => 37,  107 => 36,  104 => 35,  100 => 34,  96 => 32,  94 => 30,  93 => 29,  92 => 28,  91 => 27,  90 => 26,  89 => 25,  82 => 20,  72 => 15,  67 => 12,  65 => 11,  61 => 9,  55 => 7,  53 => 6,  47 => 3,  43 => 1,);
    }
}
/* <div class="blog_item">*/
/* 	<div class="item_category-name">*/
/* 				<a href="/">{$ page.field_hashtag $}</a> */
/* 			</div>*/
/* */
/* 	{% if page.field_header|default('') %}*/
/* 		<h1>{$ page.field_header $}</h1>*/
/* 	{% endif %}*/
/* */
/* */
/* 	{% if page.field_image|default('') %}*/
/* 	<div class="blog_image">*/
/* 		<div class="block position-banner_parallax">*/
/* 			<div class="position-parallax">*/
/* 		<img data-rel="images" data-popup="/site/data/images/large/{$ page['field_image' ~ index] $}" src="/site/data/images/large/{$ page['field_image' ~ index] $}">*/
/* 			</div>*/
/* 		 </div>*/
/* 	</div>*/
/* 	{% endif %}*/
/* */
/* */
/* */
/* 	<div class="group_image">		*/
/* */
/* 			{% if page.field_image|default('')*/
/* 			or page.field_image2|default('')*/
/* 			or page.field_image3|default('')*/
/* 			or page.field_image4|default('')*/
/* 			or page.field_image5|default('')*/
/* 			or page.field_image6|default('')*/
/* 		%}*/
/* 			<div class="images col-sm-12 col-md-12">*/
/* 				<div class="row">*/
/* 					{% for i in 2..6 %}*/
/* 						{% set index = i > 1 ? i : '' %}*/
/* 						{% if page['field_image' ~ index]|default('') %}*/
/* 							<div class="col-xs-6 col-md-2 col-sm-2">*/
/* 								<div class="field_image{$ index $}">*/
/* 									<img data-rel="images" data-popup="/site/data/images/large/{$ page['field_image' ~ index] $}" src="/site/data/images/medium/{$ page['field_image' ~ index] $}">*/
/* 								</div>*/
/* 							</div>*/
/* 						{% endif %}*/
/* 					{% endfor %}*/
/* 				</div>*/
/* 			</div>*/
/* 		{% endif %}*/
/* */
/* 		</div>	*/
/* */
/* */
/* */
/* 	{% if page.field_content|default('')|striptags %}*/
/* 		<div class="field_content">*/
/* 			<h2>Описание</h2>*/
/* 			{$ page.field_content|raw $}*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	*/
/* 	*/
/* 	<div class="social">*/
/* <script type="text/javascript">*/
/* <!--*/
/* //document.write(VK.Share.button());*/
/* document.write(VK.Share.button({url: 'http://ru.holiday{$ page.path $}', title: '{$ page.field_header $}', description:'{$ page.field_summary $}', image:'http://ru.holiday/site/data/images/medium/{$ page.field_image $}' }, {type: 'custom', text: '<i class="fa fa-vk" aria-hidden="true"></i>'})); */
/* -->*/
/* </script>	*/
/* */
/* <a onClick="openWin2()">*/
/*  <i class="fa fa-facebook" aria-hidden="true"></i>*/
/* </a>*/
/* <script><!-- hide*/
/* function openWin2() {*/
/* myWin=open("http://www.facebook.com/sharer.php?u=http://ru.holiday{$ page.path $}","displayWindow","width=520,height=300,left=350,top=170,status=no,toolbar=no,menubar=no");*/
/* }*/
/* // -->*/
/* </script>*/
/* 	*/
/* <a href="https://plus.google.com/share?url=http://ru.holiday{$ page.path $}" onclick="javascript:window.open(this.href,*/
/*   '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">*/
/* 	<i class="fa fa-google-plus" aria-hidden="true"></i>*/
/* </a>	*/
/* 		*/
/* <a href="https://twitter.com/intent/tweet?hashtags=ruholiday&amp;original_referer=http://ru.holiday{$ page.path $}&amp;ref_src=twsrc%5Etfw&amp;related=&amp;text={$ page.field_header $}&amp;tw_p=tweetbutton&amp;url=http://ru.holiday{$ page.path $}" target="_blank">*/
/* 	<i class="fa fa-twitter" aria-hidden="true"></i>*/
/* </a>*/
/* 	*/
/* <a href="http://connect.mail.ru/share?url=http://ru.holiday{$ page.path $}&title={$ page.field_header $}&description={$ page.field_summary $}&imageurl=http://ru.holiday/site/data/images/medium/{$ page.field_image $}">*/
/* 	<i class="fa fa-at" aria-hidden="true"></i>*/
/* </a>*/
/* 	*/
/* </div>	*/
/* */
/* 	<!--<div id="vk_like_{$ page.id $}"></div>*/
/* 	<script type="text/javascript">*/
/* 		VK.init({apiId: 5466329, onlyWidgets: true});*/
/* 		VK.Widgets.Like("vk_like_{$ page.id $}", {type: "vertical", pageTitle:"{$ page.field_header $}", pageDescription:"{$ page.field_summary $}" }, {$ item.id $});*/
/* 	</script>-->*/
/* */
/* 	*/
/* <div class="like">*/
/* 	<!--vk-->*/
/* 	<div id="vk_like"></div>*/
/* 	<script type="text/javascript">*/
/* 		VK.init({apiId: 5466329, onlyWidgets: true});*/
/* 		VK.Widgets.Like("vk_like", {type: "button",height: 20});*/
/* 	</script>*/
/* 	<!--f-->*/
/* 	<div class="fb-like" data-href="{$ page.path $}" data-width="24" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>*/
/* 	<!--mail-->*/
/* 	<div style="width: 130px;">*/
/* 	<a target="_blank" class="mrc__plugin_uber_like_button" href="http://connect.mail.ru/share" data-mrc-config="{'cm' : '1', 'sz' : '20', 'st' : '2', 'tp' : 'mm'}">Нравится</a>*/
/* <script src="https:/connect.mail.ru/js/loader.js" type="text/javascript" charset="UTF-8"></script>*/
/* 	</div>*/
/* 	<!--ok-->*/
/* 	<div id="ok_shareWidget"></div>*/
/* 		<script>*/
/* 		!function (d, id, did, st) {*/
/* 		  var js = d.createElement("script");*/
/* 		  js.src = "https://connect.ok.ru/connect.js";*/
/* 		  js.onload = js.onreadystatechange = function () {*/
/* 		  if (!this.readyState || this.readyState == "loaded" || this.readyState == "complete") {*/
/* 			if (!this.executed) {*/
/* 			  this.executed = true;*/
/* 			  setTimeout(function () {*/
/* 				OK.CONNECT.insertShareWidget(id,did,st);*/
/* 			  }, 0);*/
/* 			}*/
/* 		  }};*/
/* 		  d.documentElement.appendChild(js);*/
/* 		}(document,"ok_shareWidget",document.URL,"{width:145,height:30,st:'rounded',sz:20,ck:1}");*/
/* 		</script>*/
/* */
/* 	*/
/* 	*/
/* </div>*/
/* 		*/
/* 	*/
/* </div>*/
