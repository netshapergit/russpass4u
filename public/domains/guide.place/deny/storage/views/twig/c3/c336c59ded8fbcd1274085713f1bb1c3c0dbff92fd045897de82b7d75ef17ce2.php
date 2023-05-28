<?php

/* layouts.place */
class __TwigTemplate_52dd22388d4c2531a11cd83a84694dfde59a42ca8b65f349fd25f35c0cc5969c extends TwigBridge\Twig\Template
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
        $tags = array("include" => 1);
        $filters = array("escape" => 3, "raw" => 16, "split" => 169, "trim" => 169);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include'),
                array('escape', 'raw', 'split', 'trim'),
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
        $this->loadTemplate("header", "layouts.place", 1)->display($context);
        // line 2
        echo "
<section class=\"search search--route\" id=\"v-search-root\" data-ids=\"";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_route_string", array()), "html", null, true));
        echo "\" data-gtk=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_good_to_know", array()), "html", null, true));
        echo "\" data-hfull=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_helpfull", array()), "html", null, true));
        echo "\">
\t<div class=\"search__wrapper\" :class=\"{'search__wrapper--fw': isFullWidthLayout}\">
\t\t<div v-show=\"isSearchShowlist\" class=\"search-item search-item--info\">
\t\t\t<div class=\"cont\">
\t\t\t\t<!--div class=\"flexer flexer--jcb flexer--aic\">
\t\t\t\t\t<div></div>
\t\t\t\t\t<button class=\"icon-btn\" @click=\"isFullWidthLayout = !isFullWidthLayout\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"26\" height=\"26\" viewBox=\"0 0 26 26\" fill=\"none\"><rect y=\"0.787598\" width=\"5.57533\" height=\"5.57533\" rx=\"1\" fill=\"#E85768\"/><rect x=\"9.75684\" y=\"0.787598\" width=\"5.57533\" height=\"5.57533\" rx=\"1\" fill=\"#E85768\"/><rect x=\"19.5139\" y=\"0.787598\" width=\"5.57533\" height=\"5.57533\" rx=\"1\" fill=\"#E85768\"/><rect y=\"10.5444\" width=\"5.57533\" height=\"5.57533\" rx=\"1\" fill=\"#E85768\"/><rect x=\"9.75684\" y=\"10.5444\" width=\"5.57533\" height=\"5.57533\" rx=\"1\" fill=\"#E85768\"/><rect x=\"19.5139\" y=\"10.5444\" width=\"5.57533\" height=\"5.57533\" rx=\"1\" fill=\"#E85768\"/><rect y=\"20.3013\" width=\"5.57533\" height=\"5.57533\" rx=\"1\" fill=\"#E85768\"/><rect x=\"9.75684\" y=\"20.3013\" width=\"5.57533\" height=\"5.57533\" rx=\"1\" fill=\"#E85768\"/><rect x=\"19.5139\" y=\"20.3013\" width=\"5.57533\" height=\"5.57533\" rx=\"1\" fill=\"#E85768\"/></svg>
\t\t\t\t\t</button>
\t\t\t\t</div-->
\t\t\t\t<div class=\"route-main\">
\t\t\t\t\t<div class=\"route-top\">
\t\t\t\t\t\t<div class=\"route-images\">
\t\t\t\t\t\t\t<div class=\"route-images-data\" ref=\"galleryData\" style=\"display: none;\">";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_gallery", array()));
        echo "</div>
\t\t\t\t\t\t\t<div class=\"route-image\" v-for=\"item in pageGallery\">
\t\t\t\t\t\t\t\t<a :href=\"item.replace('medium', 'large').replace('small', 'large')\" data-fancybox=\"gallery\">
\t\t\t\t\t\t\t\t\t<img :src=\"item\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"route-images-nav__wrap\">
\t\t\t\t\t\t\t<div class=\"route-images-nav\">
\t\t\t\t\t\t\t\t<div class=\"route-image-nav\" v-for=\"item in pageGallery\">
\t\t\t\t\t\t\t\t\t<img :src=\"item\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"route-info\">
\t\t\t\t\t\t<h1>";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array()), "html", null, true));
        echo "</h1>
\t\t\t\t\t\t<div class=\"route__desc\">
\t\t\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_content", array()));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"route-list\">
\t\t\t\t\t\t\t<transition-group 
\t\t\t\t\t\t\t\tmode=\"out-in\" 
\t\t\t\t\t\t\t\tname=\"search-transition\" 
\t\t\t\t\t\t\t\ttag=\"div\" 
\t\t\t\t\t\t\t\tclass=\"search-results__wrapper\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tv-for=\"item in filteredList\"
\t\t\t\t\t\t\t\t:key=\"item.path\" 
\t\t\t\t\t\t\t\tclass=\"search-card\">
\t\t\t\t\t\t\t\t<div v-if=\"item.field_gallery.length > 0\" class=\"search-card__gallery\">
\t\t\t\t\t\t\t\t\t<a :href=\"item.path\" v-for=\"img in item.field_gallery\" class=\"search-card__gallery-item\">
\t\t\t\t\t\t\t\t\t\t<img :src=\"img.src\">
\t\t\t\t\t\t\t\t\t</a> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div v-else class=\"search-card__gallery\">
\t\t\t\t\t\t\t\t\t<div  class=\"search-card__gallery-item search-card__gallery-item--noimage\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/site/theme/images/noimage.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a :href=\"item.path\" class=\"search-card__info\">
\t\t\t\t\t\t\t\t\t<div class=\"search-card__title\">{{item.field_header}}</div>
\t\t\t\t\t\t\t\t\t<div v-if=\"item.field_summary\" class=\"search-card__infoblock search-card__infoblock--desc\">
\t\t\t\t\t\t\t\t\t\t{{item.field_summary}}
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t<div v-if=\"item.field_address\" class=\"search-card__infoblock search-card__infoblock--address\">
\t\t\t\t\t\t\t\t\t\t<span class=\"search-card__infoblock-icon\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"19\" viewBox=\"0 0 12 19\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.77347 0.122131C8.80285 0.122131 11.2564 2.59894 11.2564 5.65261C11.2564 8.24755 8.26216 14.7388 7.12029 17.1763C6.45274 18.6017 5.10396 18.6017 4.43445 17.1763C3.34333 14.8471 0.288574 8.06839 0.288574 5.65261C0.288574 2.59697 2.74409 0.122131 5.77152 0.122131L5.77347 0.122131ZM5.77347 2.18745C7.61413 2.18745 9.10539 3.69165 9.10539 5.54826C9.10539 7.40488 7.61413 8.90908 5.77347 8.90908C3.93281 8.90908 2.44154 7.40488 2.44154 5.54826C2.44154 3.69165 3.93281 2.18745 5.77347 2.18745Z\" fill=\"#14C5D0\"></path>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t{{item.field_address}}
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t<div v-if=\"item.min_price\" class=\"search-card__infoblock search-card__infoblock--price\">
\t\t\t\t\t\t\t\t\t\t<span class=\"search-card__infoblock-icon\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"17\" height=\"17\" viewBox=\"0 0 17 17\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M4.49301 4.41122C3.99972 4.95159 3.16428 4.96627 2.65314 4.45528C2.15566 3.95793 2.15671 3.1542 2.65419 2.65685C3.16533 2.14586 4.00077 2.1595 4.49406 2.69987C4.93172 3.17833 4.93067 3.93275 4.49301 4.41226V4.41122ZM5.98023 0.252989L2.38446 0.00536361C1.71065 -0.0408039 1.09456 0.214167 0.656896 0.65066L0.651648 0.655906C0.216084 1.0924 -0.0400071 1.70937 0.0051237 2.38299L0.250719 5.98196C0.303197 6.74582 0.629607 7.46457 1.17118 8.00599L9.84258 16.675C10.276 17.1083 10.9803 17.1083 11.4138 16.675L16.6741 11.4161C17.1086 10.9817 17.1086 10.2776 16.6741 9.8443L8.00166 1.17424C7.46114 0.633872 6.74325 0.307551 5.98023 0.254039V0.252989Z\" fill=\"#14C5D0\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\tот {{item.min_price}}₽/сутки
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</transition-group>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div v-if=\"goodToKnow.length > 0\" class=\"obj-cards obj-cards--gtk\">
\t\t\t\t\t\t<div class=\"obj-cards__title\">Полезно знать:</div>
\t\t\t\t\t\t<div class=\"obj-cards__list\">
\t\t\t\t\t\t\t<div class=\"obj-card\" v-for=\"item in goodToKnow\">
\t\t\t\t\t\t\t\t<div class=\"obj-card__top\">
\t\t\t\t\t\t\t\t\t<div class=\"obj-card__img\">
\t\t\t\t\t\t\t\t\t\t<a :href=\"item.path\">
\t\t\t\t\t\t\t\t\t\t\t<img :src=\"`/site/data/images/medium/\${item.field_image}`\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"obj-card__mid\">
\t\t\t\t\t\t\t\t\t<div class=\"obj-card__info\">
\t\t\t\t\t\t\t\t\t\t<div class=\"obj-card__title\"><a :href=\"item.path\">{{item.field_header}}</a></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"obj-card__actions\">
\t\t\t\t\t\t\t\t\t\t<div class=\"obj-card__action\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"21\" height=\"16\" viewBox=\"0 0 21 16\" fill=\"none\"><path d=\"M1.40094 0.0727141L1.43665 0.080906L7.75398 1.98669L14.0716 0.080906C14.1552 0.061573 14.241 0.061573 14.3246 0.080906L20.6812 1.99848C20.7553 2.02044 20.8189 2.06959 20.8625 2.12988C20.9047 2.18854 20.9306 2.26194 20.9306 2.33599V4.76573C20.9306 4.92531 20.8012 5.05442 20.6419 5.05442C20.4823 5.05442 20.3532 4.92499 20.3532 4.76573V2.5018L14.4871 0.732004V2.18657C14.4871 2.34615 14.3577 2.47526 14.1984 2.47526C14.0389 2.47526 13.9098 2.34582 13.9098 2.18657V0.732004L8.04332 2.5018V3.89575C8.04332 4.05533 7.91389 4.18443 7.75463 4.18443C7.59505 4.18443 7.46595 4.055 7.46595 3.89575V2.5018L1.59984 0.732004V5.37358C1.59984 5.53316 1.4704 5.66226 1.31115 5.66226C1.15157 5.66226 1.02247 5.53283 1.02247 5.37358V0.391873C1.02247 0.361727 1.02771 0.329614 1.03721 0.297502C1.05655 0.230328 1.0962 0.173312 1.14993 0.132352L1.17484 0.115312C1.2253 0.0835275 1.28232 0.0664882 1.34392 0.0664882C1.36194 0.0664882 1.3816 0.0684542 1.40192 0.0723864L1.40094 0.0727141ZM20.3532 7.47236C20.3532 7.31278 20.4827 7.18368 20.6419 7.18368C20.8015 7.18368 20.9306 7.31311 20.9306 7.47236V14.7406C20.9306 14.7721 20.925 14.8052 20.9152 14.8376L20.9149 14.8386C20.8949 14.9048 20.8559 14.9608 20.8022 15.0011C20.7904 15.01 20.7779 15.0182 20.7651 15.025C20.7176 15.0519 20.6649 15.0663 20.6095 15.0663C20.578 15.0663 20.5466 15.0614 20.5154 15.0519L14.1981 13.1461L7.88046 15.0519C7.81525 15.0712 7.69238 15.0712 7.62749 15.0519L1.27183 13.1347C1.25676 13.1304 1.24267 13.1245 1.22891 13.1179C1.17254 13.0921 1.12405 13.0511 1.08964 13.0026L1.08866 13.0013C1.04737 12.9439 1.02148 12.8712 1.02148 12.7965V9.26804C1.02148 9.10846 1.15092 8.97936 1.31017 8.97936C1.46975 8.97936 1.59885 9.10879 1.59885 9.26804V12.6304L7.46497 14.4002V12.8525C7.46497 12.6929 7.5944 12.5638 7.75365 12.5638C7.91323 12.5638 8.04234 12.6933 8.04234 12.8525V14.4002L13.9088 12.6304V3.5412C13.9088 3.38162 14.0382 3.25251 14.1975 3.25251C14.357 3.25251 14.4861 3.38194 14.4861 3.5412V12.6304L20.3523 14.4002V7.47203L20.3532 7.47236ZM7.46529 6.60237C7.46529 6.44279 7.59473 6.31369 7.75398 6.31369C7.91356 6.31369 8.04266 6.44312 8.04266 6.60237V10.1466C8.04266 10.3061 7.91323 10.4352 7.75398 10.4352C7.5944 10.4352 7.46529 10.3058 7.46529 10.1466V6.60237ZM1.59918 8.00386C1.59918 8.16344 1.46975 8.29254 1.3105 8.29254C1.15092 8.29254 1.02181 8.16311 1.02181 8.00386V6.63842C1.02181 6.47884 1.15125 6.34973 1.3105 6.34973C1.47008 6.34973 1.59918 6.47917 1.59918 6.63842V8.00386Z\" fill=\"#E85768\" stroke=\"#E85768\" stroke-width=\"0.1\"/></svg>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"obj-card__action\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"11\" viewBox=\"0 0 25 11\" fill=\"none\"><path d=\"M17.1783 1.1277C16.9848 1.01546 16.918 0.767093 17.0302 0.573653C17.1424 0.380212 17.3908 0.313344 17.5843 0.425587L24.3666 4.36604C24.5015 4.43291 24.5935 4.57023 24.5935 4.73023C24.5935 4.89024 24.5015 5.02875 24.3666 5.09443L17.5843 9.03488C17.3908 9.14712 17.1424 9.08145 17.0302 8.88682C16.918 8.69337 16.9836 8.44501 17.1783 8.33276L22.6806 5.13622H17.0589C13.7286 5.13622 10.4461 5.42996 7.59103 6.27895H7.58983C4.77181 7.11719 2.36813 8.49874 0.752547 10.6767C0.618811 10.857 0.365666 10.8941 0.185361 10.7603C0.0050553 10.6266 -0.0319611 10.3734 0.101776 10.1931C1.83319 7.85872 4.38254 6.38642 7.36057 5.50041C10.3028 4.62515 13.6629 4.32186 17.0601 4.32186H22.6818L17.1795 1.12532L17.1783 1.1277Z\" fill=\"#E85768\"/></svg>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"obj-card__action\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"16\" viewBox=\"0 0 19 16\" fill=\"none\"><path d=\"M9.32 15.0664C8.75483 15.0664 5.32626 13.2832 2.97037 10.4474C1.61699 8.81828 0.586914 6.83708 0.586914 4.63533C0.586914 3.37468 1.09819 2.23182 1.92526 1.40475C2.75233 0.577684 3.89518 0.0664062 5.15584 0.0664062C6.29117 0.0664062 7.17087 0.394727 7.89894 0.927308C8.45158 1.33207 8.90772 1.84961 9.32 2.42731C9.73228 1.84836 10.1884 1.33082 10.741 0.927308C11.4691 0.394727 12.3476 0.0664062 13.4829 0.0664062C14.7436 0.0664062 15.8864 0.577684 16.7135 1.40475C17.5405 2.23182 18.0518 3.37468 18.0518 4.63533C18.0518 6.83834 17.0218 8.81828 15.6684 10.4474C13.3125 13.2832 9.88391 15.0664 9.31874 15.0664H9.32ZM3.59318 9.92981C5.79744 12.584 8.84005 14.2544 9.32 14.2544C9.79995 14.2544 12.8426 12.5852 15.0468 9.92981C16.2912 8.43107 17.2385 6.62154 17.2385 4.63533C17.2385 3.59899 16.8175 2.65914 16.1383 1.97994C15.4591 1.30074 14.5192 0.879689 13.4829 0.879689C12.538 0.879689 11.8137 1.14661 11.2197 1.58144C10.6095 2.02881 10.1195 2.66039 9.66461 3.36716C9.63328 3.41728 9.59193 3.46114 9.5393 3.49498C9.35133 3.61653 9.09945 3.56139 8.97915 3.37217C8.52426 2.66415 8.03303 2.03007 7.42025 1.58144C6.82626 1.14661 6.1032 0.879689 5.15709 0.879689C4.12075 0.879689 3.1809 1.30074 2.5017 1.97994C1.8225 2.65914 1.40145 3.59899 1.40145 4.63533C1.40145 6.62154 2.34882 8.43107 3.59318 9.92981Z\" fill=\"#E85768\"/></svg>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div v-if=\"helpfull.length > 0\" class=\"obj-cards obj-cards--hfull\">
\t\t\t\t\t\t<div class=\"obj-cards__title\">Вам пригодится:</div>
\t\t\t\t\t\t<div class=\"obj-cards__list\">
\t\t\t\t\t\t\t<div class=\"obj-card\" v-for=\"item in helpfull\">
\t\t\t\t\t\t\t\t<div class=\"obj-card__top\">
\t\t\t\t\t\t\t\t\t<div class=\"obj-card__img\">
\t\t\t\t\t\t\t\t\t\t<a :href=\"item.path\">
\t\t\t\t\t\t\t\t\t\t\t<img :src=\"`/site/data/images/medium/\${item.field_image}`\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"obj-card__mid\">
\t\t\t\t\t\t\t\t\t<div class=\"obj-card__info\">
\t\t\t\t\t\t\t\t\t\t<div class=\"obj-card__title\"><a :href=\"item.path\">{{item.field_header}}</a></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"obj-card__actions\">
\t\t\t\t\t\t\t\t\t\t<div class=\"obj-card__action\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"21\" height=\"16\" viewBox=\"0 0 21 16\" fill=\"none\"><path d=\"M1.40094 0.0727141L1.43665 0.080906L7.75398 1.98669L14.0716 0.080906C14.1552 0.061573 14.241 0.061573 14.3246 0.080906L20.6812 1.99848C20.7553 2.02044 20.8189 2.06959 20.8625 2.12988C20.9047 2.18854 20.9306 2.26194 20.9306 2.33599V4.76573C20.9306 4.92531 20.8012 5.05442 20.6419 5.05442C20.4823 5.05442 20.3532 4.92499 20.3532 4.76573V2.5018L14.4871 0.732004V2.18657C14.4871 2.34615 14.3577 2.47526 14.1984 2.47526C14.0389 2.47526 13.9098 2.34582 13.9098 2.18657V0.732004L8.04332 2.5018V3.89575C8.04332 4.05533 7.91389 4.18443 7.75463 4.18443C7.59505 4.18443 7.46595 4.055 7.46595 3.89575V2.5018L1.59984 0.732004V5.37358C1.59984 5.53316 1.4704 5.66226 1.31115 5.66226C1.15157 5.66226 1.02247 5.53283 1.02247 5.37358V0.391873C1.02247 0.361727 1.02771 0.329614 1.03721 0.297502C1.05655 0.230328 1.0962 0.173312 1.14993 0.132352L1.17484 0.115312C1.2253 0.0835275 1.28232 0.0664882 1.34392 0.0664882C1.36194 0.0664882 1.3816 0.0684542 1.40192 0.0723864L1.40094 0.0727141ZM20.3532 7.47236C20.3532 7.31278 20.4827 7.18368 20.6419 7.18368C20.8015 7.18368 20.9306 7.31311 20.9306 7.47236V14.7406C20.9306 14.7721 20.925 14.8052 20.9152 14.8376L20.9149 14.8386C20.8949 14.9048 20.8559 14.9608 20.8022 15.0011C20.7904 15.01 20.7779 15.0182 20.7651 15.025C20.7176 15.0519 20.6649 15.0663 20.6095 15.0663C20.578 15.0663 20.5466 15.0614 20.5154 15.0519L14.1981 13.1461L7.88046 15.0519C7.81525 15.0712 7.69238 15.0712 7.62749 15.0519L1.27183 13.1347C1.25676 13.1304 1.24267 13.1245 1.22891 13.1179C1.17254 13.0921 1.12405 13.0511 1.08964 13.0026L1.08866 13.0013C1.04737 12.9439 1.02148 12.8712 1.02148 12.7965V9.26804C1.02148 9.10846 1.15092 8.97936 1.31017 8.97936C1.46975 8.97936 1.59885 9.10879 1.59885 9.26804V12.6304L7.46497 14.4002V12.8525C7.46497 12.6929 7.5944 12.5638 7.75365 12.5638C7.91323 12.5638 8.04234 12.6933 8.04234 12.8525V14.4002L13.9088 12.6304V3.5412C13.9088 3.38162 14.0382 3.25251 14.1975 3.25251C14.357 3.25251 14.4861 3.38194 14.4861 3.5412V12.6304L20.3523 14.4002V7.47203L20.3532 7.47236ZM7.46529 6.60237C7.46529 6.44279 7.59473 6.31369 7.75398 6.31369C7.91356 6.31369 8.04266 6.44312 8.04266 6.60237V10.1466C8.04266 10.3061 7.91323 10.4352 7.75398 10.4352C7.5944 10.4352 7.46529 10.3058 7.46529 10.1466V6.60237ZM1.59918 8.00386C1.59918 8.16344 1.46975 8.29254 1.3105 8.29254C1.15092 8.29254 1.02181 8.16311 1.02181 8.00386V6.63842C1.02181 6.47884 1.15125 6.34973 1.3105 6.34973C1.47008 6.34973 1.59918 6.47917 1.59918 6.63842V8.00386Z\" fill=\"#E85768\" stroke=\"#E85768\" stroke-width=\"0.1\"/></svg>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"obj-card__action\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"11\" viewBox=\"0 0 25 11\" fill=\"none\"><path d=\"M17.1783 1.1277C16.9848 1.01546 16.918 0.767093 17.0302 0.573653C17.1424 0.380212 17.3908 0.313344 17.5843 0.425587L24.3666 4.36604C24.5015 4.43291 24.5935 4.57023 24.5935 4.73023C24.5935 4.89024 24.5015 5.02875 24.3666 5.09443L17.5843 9.03488C17.3908 9.14712 17.1424 9.08145 17.0302 8.88682C16.918 8.69337 16.9836 8.44501 17.1783 8.33276L22.6806 5.13622H17.0589C13.7286 5.13622 10.4461 5.42996 7.59103 6.27895H7.58983C4.77181 7.11719 2.36813 8.49874 0.752547 10.6767C0.618811 10.857 0.365666 10.8941 0.185361 10.7603C0.0050553 10.6266 -0.0319611 10.3734 0.101776 10.1931C1.83319 7.85872 4.38254 6.38642 7.36057 5.50041C10.3028 4.62515 13.6629 4.32186 17.0601 4.32186H22.6818L17.1795 1.12532L17.1783 1.1277Z\" fill=\"#E85768\"/></svg>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"obj-card__action\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"16\" viewBox=\"0 0 19 16\" fill=\"none\"><path d=\"M9.32 15.0664C8.75483 15.0664 5.32626 13.2832 2.97037 10.4474C1.61699 8.81828 0.586914 6.83708 0.586914 4.63533C0.586914 3.37468 1.09819 2.23182 1.92526 1.40475C2.75233 0.577684 3.89518 0.0664062 5.15584 0.0664062C6.29117 0.0664062 7.17087 0.394727 7.89894 0.927308C8.45158 1.33207 8.90772 1.84961 9.32 2.42731C9.73228 1.84836 10.1884 1.33082 10.741 0.927308C11.4691 0.394727 12.3476 0.0664062 13.4829 0.0664062C14.7436 0.0664062 15.8864 0.577684 16.7135 1.40475C17.5405 2.23182 18.0518 3.37468 18.0518 4.63533C18.0518 6.83834 17.0218 8.81828 15.6684 10.4474C13.3125 13.2832 9.88391 15.0664 9.31874 15.0664H9.32ZM3.59318 9.92981C5.79744 12.584 8.84005 14.2544 9.32 14.2544C9.79995 14.2544 12.8426 12.5852 15.0468 9.92981C16.2912 8.43107 17.2385 6.62154 17.2385 4.63533C17.2385 3.59899 16.8175 2.65914 16.1383 1.97994C15.4591 1.30074 14.5192 0.879689 13.4829 0.879689C12.538 0.879689 11.8137 1.14661 11.2197 1.58144C10.6095 2.02881 10.1195 2.66039 9.66461 3.36716C9.63328 3.41728 9.59193 3.46114 9.5393 3.49498C9.35133 3.61653 9.09945 3.56139 8.97915 3.37217C8.52426 2.66415 8.03303 2.03007 7.42025 1.58144C6.82626 1.14661 6.1032 0.879689 5.15709 0.879689C4.12075 0.879689 3.1809 1.30074 2.5017 1.97994C1.8225 2.65914 1.40145 3.59899 1.40145 4.63533C1.40145 6.62154 2.34882 8.43107 3.59318 9.92981Z\" fill=\"#E85768\"/></svg>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"search-item search-item--map\">
\t\t\t<!--span class=\"search-switchmode\" @click=\"isSearchShowlist = true\">Список</span-->
\t\t\t<div id=\"map\" style=\"width: 100%; height: calc(100vh - 63px);\"></div>
\t\t</div>
\t</div>
</section>
<script src=\"https://api-maps.yandex.ru/2.1/?apikey=b303c4d1-e74e-4a8d-942f-15e384f9386b&lang=ru_RU\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\tymaps.ready(init);
\tfunction init() {
\t\tlet myMap = new ymaps.Map(\"map\", {
\t\t\t\tcenter: [";
        // line 169
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, trim($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_coords", array())), ","), 0, array(), "array"), "html", null, true));
        echo ", ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, trim($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_coords", array())), ","), 1, array(), "array"), "html", null, true));
        echo "],
\t\t\t\tzoom: 13,
\t\t\t\tconstrols: ['zoomControl']
\t\t\t}, {
\t\t\t\tsearchControlProvider: 'yandex#search'
\t\t\t}),

\t\t\tmyGeoObject = new ymaps.GeoObject({
\t\t\t\tgeometry: {
\t\t\t\t\ttype: \"Point\",
\t\t\t\t\tcoordinates: [";
        // line 179
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, trim($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_coords", array())), ","), 0, array(), "array"), "html", null, true));
        echo ", ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, trim($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_coords", array())), ","), 1, array(), "array"), "html", null, true));
        echo "]
\t\t\t\t}
\t\t\t})

\t\t\tmyMap.geoObjects.add(myGeoObject)
\t\t\tmyMap.behaviors.disable('scrollZoom')
\t}
</script>
<script src=\"/site/theme/js/search_object.js\"></script>
";
        // line 188
        $this->loadTemplate("footer", "layouts.place", 188)->display($context);
    }

    public function getTemplateName()
    {
        return "layouts.place";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 188,  245 => 179,  230 => 169,  92 => 34,  87 => 32,  68 => 16,  48 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% include 'header' %}*/
/* */
/* <section class="search search--route" id="v-search-root" data-ids="{$ page.field_route_string $}" data-gtk="{$ page.field_good_to_know $}" data-hfull="{$ page.field_helpfull $}">*/
/* 	<div class="search__wrapper" :class="{'search__wrapper--fw': isFullWidthLayout}">*/
/* 		<div v-show="isSearchShowlist" class="search-item search-item--info">*/
/* 			<div class="cont">*/
/* 				<!--div class="flexer flexer--jcb flexer--aic">*/
/* 					<div></div>*/
/* 					<button class="icon-btn" @click="isFullWidthLayout = !isFullWidthLayout">*/
/* 						<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none"><rect y="0.787598" width="5.57533" height="5.57533" rx="1" fill="#E85768"/><rect x="9.75684" y="0.787598" width="5.57533" height="5.57533" rx="1" fill="#E85768"/><rect x="19.5139" y="0.787598" width="5.57533" height="5.57533" rx="1" fill="#E85768"/><rect y="10.5444" width="5.57533" height="5.57533" rx="1" fill="#E85768"/><rect x="9.75684" y="10.5444" width="5.57533" height="5.57533" rx="1" fill="#E85768"/><rect x="19.5139" y="10.5444" width="5.57533" height="5.57533" rx="1" fill="#E85768"/><rect y="20.3013" width="5.57533" height="5.57533" rx="1" fill="#E85768"/><rect x="9.75684" y="20.3013" width="5.57533" height="5.57533" rx="1" fill="#E85768"/><rect x="19.5139" y="20.3013" width="5.57533" height="5.57533" rx="1" fill="#E85768"/></svg>*/
/* 					</button>*/
/* 				</div-->*/
/* 				<div class="route-main">*/
/* 					<div class="route-top">*/
/* 						<div class="route-images">*/
/* 							<div class="route-images-data" ref="galleryData" style="display: none;">{$ page.field_gallery|raw $}</div>*/
/* 							<div class="route-image" v-for="item in pageGallery">*/
/* 								<a :href="item.replace('medium', 'large').replace('small', 'large')" data-fancybox="gallery">*/
/* 									<img :src="item">*/
/* 								</a>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="route-images-nav__wrap">*/
/* 							<div class="route-images-nav">*/
/* 								<div class="route-image-nav" v-for="item in pageGallery">*/
/* 									<img :src="item">*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="route-info">*/
/* 						<h1>{$ page.field_header $}</h1>*/
/* 						<div class="route__desc">*/
/* 							{$ page.field_content|raw $}*/
/* 						</div>*/
/* 						<div class="route-list">*/
/* 							<transition-group */
/* 								mode="out-in" */
/* 								name="search-transition" */
/* 								tag="div" */
/* 								class="search-results__wrapper"*/
/* 							>*/
/* 							<div*/
/* 								v-for="item in filteredList"*/
/* 								:key="item.path" */
/* 								class="search-card">*/
/* 								<div v-if="item.field_gallery.length > 0" class="search-card__gallery">*/
/* 									<a :href="item.path" v-for="img in item.field_gallery" class="search-card__gallery-item">*/
/* 										<img :src="img.src">*/
/* 									</a> */
/* 								</div>*/
/* 								<div v-else class="search-card__gallery">*/
/* 									<div  class="search-card__gallery-item search-card__gallery-item--noimage">*/
/* 										<img src="/site/theme/images/noimage.png">*/
/* 									</div>*/
/* 								</div>*/
/* 								<a :href="item.path" class="search-card__info">*/
/* 									<div class="search-card__title">{{item.field_header}}</div>*/
/* 									<div v-if="item.field_summary" class="search-card__infoblock search-card__infoblock--desc">*/
/* 										{{item.field_summary}}*/
/* 									</div> */
/* 									<div v-if="item.field_address" class="search-card__infoblock search-card__infoblock--address">*/
/* 										<span class="search-card__infoblock-icon">*/
/* 											<svg xmlns="http://www.w3.org/2000/svg" width="12" height="19" viewBox="0 0 12 19" fill="none">*/
/* 												<path fill-rule="evenodd" clip-rule="evenodd" d="M5.77347 0.122131C8.80285 0.122131 11.2564 2.59894 11.2564 5.65261C11.2564 8.24755 8.26216 14.7388 7.12029 17.1763C6.45274 18.6017 5.10396 18.6017 4.43445 17.1763C3.34333 14.8471 0.288574 8.06839 0.288574 5.65261C0.288574 2.59697 2.74409 0.122131 5.77152 0.122131L5.77347 0.122131ZM5.77347 2.18745C7.61413 2.18745 9.10539 3.69165 9.10539 5.54826C9.10539 7.40488 7.61413 8.90908 5.77347 8.90908C3.93281 8.90908 2.44154 7.40488 2.44154 5.54826C2.44154 3.69165 3.93281 2.18745 5.77347 2.18745Z" fill="#14C5D0"></path>*/
/* 											</svg>*/
/* 										</span>*/
/* 										{{item.field_address}}*/
/* 									</div> */
/* 									<div v-if="item.min_price" class="search-card__infoblock search-card__infoblock--price">*/
/* 										<span class="search-card__infoblock-icon">*/
/* 											<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">*/
/* 												<path fill-rule="evenodd" clip-rule="evenodd" d="M4.49301 4.41122C3.99972 4.95159 3.16428 4.96627 2.65314 4.45528C2.15566 3.95793 2.15671 3.1542 2.65419 2.65685C3.16533 2.14586 4.00077 2.1595 4.49406 2.69987C4.93172 3.17833 4.93067 3.93275 4.49301 4.41226V4.41122ZM5.98023 0.252989L2.38446 0.00536361C1.71065 -0.0408039 1.09456 0.214167 0.656896 0.65066L0.651648 0.655906C0.216084 1.0924 -0.0400071 1.70937 0.0051237 2.38299L0.250719 5.98196C0.303197 6.74582 0.629607 7.46457 1.17118 8.00599L9.84258 16.675C10.276 17.1083 10.9803 17.1083 11.4138 16.675L16.6741 11.4161C17.1086 10.9817 17.1086 10.2776 16.6741 9.8443L8.00166 1.17424C7.46114 0.633872 6.74325 0.307551 5.98023 0.254039V0.252989Z" fill="#14C5D0"/>*/
/* 											</svg>*/
/* 										</span>*/
/* 										от {{item.min_price}}₽/сутки*/
/* 									</div>*/
/* 								</a>*/
/* 							</div>*/
/* 							</transition-group>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div v-if="goodToKnow.length > 0" class="obj-cards obj-cards--gtk">*/
/* 						<div class="obj-cards__title">Полезно знать:</div>*/
/* 						<div class="obj-cards__list">*/
/* 							<div class="obj-card" v-for="item in goodToKnow">*/
/* 								<div class="obj-card__top">*/
/* 									<div class="obj-card__img">*/
/* 										<a :href="item.path">*/
/* 											<img :src="`/site/data/images/medium/${item.field_image}`">*/
/* 										</a>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="obj-card__mid">*/
/* 									<div class="obj-card__info">*/
/* 										<div class="obj-card__title"><a :href="item.path">{{item.field_header}}</a></div>*/
/* 									</div>*/
/* 									<div class="obj-card__actions">*/
/* 										<div class="obj-card__action">*/
/* 											<a href="#">*/
/* 												<svg xmlns="http://www.w3.org/2000/svg" width="21" height="16" viewBox="0 0 21 16" fill="none"><path d="M1.40094 0.0727141L1.43665 0.080906L7.75398 1.98669L14.0716 0.080906C14.1552 0.061573 14.241 0.061573 14.3246 0.080906L20.6812 1.99848C20.7553 2.02044 20.8189 2.06959 20.8625 2.12988C20.9047 2.18854 20.9306 2.26194 20.9306 2.33599V4.76573C20.9306 4.92531 20.8012 5.05442 20.6419 5.05442C20.4823 5.05442 20.3532 4.92499 20.3532 4.76573V2.5018L14.4871 0.732004V2.18657C14.4871 2.34615 14.3577 2.47526 14.1984 2.47526C14.0389 2.47526 13.9098 2.34582 13.9098 2.18657V0.732004L8.04332 2.5018V3.89575C8.04332 4.05533 7.91389 4.18443 7.75463 4.18443C7.59505 4.18443 7.46595 4.055 7.46595 3.89575V2.5018L1.59984 0.732004V5.37358C1.59984 5.53316 1.4704 5.66226 1.31115 5.66226C1.15157 5.66226 1.02247 5.53283 1.02247 5.37358V0.391873C1.02247 0.361727 1.02771 0.329614 1.03721 0.297502C1.05655 0.230328 1.0962 0.173312 1.14993 0.132352L1.17484 0.115312C1.2253 0.0835275 1.28232 0.0664882 1.34392 0.0664882C1.36194 0.0664882 1.3816 0.0684542 1.40192 0.0723864L1.40094 0.0727141ZM20.3532 7.47236C20.3532 7.31278 20.4827 7.18368 20.6419 7.18368C20.8015 7.18368 20.9306 7.31311 20.9306 7.47236V14.7406C20.9306 14.7721 20.925 14.8052 20.9152 14.8376L20.9149 14.8386C20.8949 14.9048 20.8559 14.9608 20.8022 15.0011C20.7904 15.01 20.7779 15.0182 20.7651 15.025C20.7176 15.0519 20.6649 15.0663 20.6095 15.0663C20.578 15.0663 20.5466 15.0614 20.5154 15.0519L14.1981 13.1461L7.88046 15.0519C7.81525 15.0712 7.69238 15.0712 7.62749 15.0519L1.27183 13.1347C1.25676 13.1304 1.24267 13.1245 1.22891 13.1179C1.17254 13.0921 1.12405 13.0511 1.08964 13.0026L1.08866 13.0013C1.04737 12.9439 1.02148 12.8712 1.02148 12.7965V9.26804C1.02148 9.10846 1.15092 8.97936 1.31017 8.97936C1.46975 8.97936 1.59885 9.10879 1.59885 9.26804V12.6304L7.46497 14.4002V12.8525C7.46497 12.6929 7.5944 12.5638 7.75365 12.5638C7.91323 12.5638 8.04234 12.6933 8.04234 12.8525V14.4002L13.9088 12.6304V3.5412C13.9088 3.38162 14.0382 3.25251 14.1975 3.25251C14.357 3.25251 14.4861 3.38194 14.4861 3.5412V12.6304L20.3523 14.4002V7.47203L20.3532 7.47236ZM7.46529 6.60237C7.46529 6.44279 7.59473 6.31369 7.75398 6.31369C7.91356 6.31369 8.04266 6.44312 8.04266 6.60237V10.1466C8.04266 10.3061 7.91323 10.4352 7.75398 10.4352C7.5944 10.4352 7.46529 10.3058 7.46529 10.1466V6.60237ZM1.59918 8.00386C1.59918 8.16344 1.46975 8.29254 1.3105 8.29254C1.15092 8.29254 1.02181 8.16311 1.02181 8.00386V6.63842C1.02181 6.47884 1.15125 6.34973 1.3105 6.34973C1.47008 6.34973 1.59918 6.47917 1.59918 6.63842V8.00386Z" fill="#E85768" stroke="#E85768" stroke-width="0.1"/></svg>*/
/* 											</a>*/
/* 										</div>*/
/* 										<div class="obj-card__action">*/
/* 											<a href="#">*/
/* 												<svg xmlns="http://www.w3.org/2000/svg" width="25" height="11" viewBox="0 0 25 11" fill="none"><path d="M17.1783 1.1277C16.9848 1.01546 16.918 0.767093 17.0302 0.573653C17.1424 0.380212 17.3908 0.313344 17.5843 0.425587L24.3666 4.36604C24.5015 4.43291 24.5935 4.57023 24.5935 4.73023C24.5935 4.89024 24.5015 5.02875 24.3666 5.09443L17.5843 9.03488C17.3908 9.14712 17.1424 9.08145 17.0302 8.88682C16.918 8.69337 16.9836 8.44501 17.1783 8.33276L22.6806 5.13622H17.0589C13.7286 5.13622 10.4461 5.42996 7.59103 6.27895H7.58983C4.77181 7.11719 2.36813 8.49874 0.752547 10.6767C0.618811 10.857 0.365666 10.8941 0.185361 10.7603C0.0050553 10.6266 -0.0319611 10.3734 0.101776 10.1931C1.83319 7.85872 4.38254 6.38642 7.36057 5.50041C10.3028 4.62515 13.6629 4.32186 17.0601 4.32186H22.6818L17.1795 1.12532L17.1783 1.1277Z" fill="#E85768"/></svg>*/
/* 											</a>*/
/* 										</div>*/
/* 										<div class="obj-card__action">*/
/* 											<a href="#">*/
/* 												<svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16" fill="none"><path d="M9.32 15.0664C8.75483 15.0664 5.32626 13.2832 2.97037 10.4474C1.61699 8.81828 0.586914 6.83708 0.586914 4.63533C0.586914 3.37468 1.09819 2.23182 1.92526 1.40475C2.75233 0.577684 3.89518 0.0664062 5.15584 0.0664062C6.29117 0.0664062 7.17087 0.394727 7.89894 0.927308C8.45158 1.33207 8.90772 1.84961 9.32 2.42731C9.73228 1.84836 10.1884 1.33082 10.741 0.927308C11.4691 0.394727 12.3476 0.0664062 13.4829 0.0664062C14.7436 0.0664062 15.8864 0.577684 16.7135 1.40475C17.5405 2.23182 18.0518 3.37468 18.0518 4.63533C18.0518 6.83834 17.0218 8.81828 15.6684 10.4474C13.3125 13.2832 9.88391 15.0664 9.31874 15.0664H9.32ZM3.59318 9.92981C5.79744 12.584 8.84005 14.2544 9.32 14.2544C9.79995 14.2544 12.8426 12.5852 15.0468 9.92981C16.2912 8.43107 17.2385 6.62154 17.2385 4.63533C17.2385 3.59899 16.8175 2.65914 16.1383 1.97994C15.4591 1.30074 14.5192 0.879689 13.4829 0.879689C12.538 0.879689 11.8137 1.14661 11.2197 1.58144C10.6095 2.02881 10.1195 2.66039 9.66461 3.36716C9.63328 3.41728 9.59193 3.46114 9.5393 3.49498C9.35133 3.61653 9.09945 3.56139 8.97915 3.37217C8.52426 2.66415 8.03303 2.03007 7.42025 1.58144C6.82626 1.14661 6.1032 0.879689 5.15709 0.879689C4.12075 0.879689 3.1809 1.30074 2.5017 1.97994C1.8225 2.65914 1.40145 3.59899 1.40145 4.63533C1.40145 6.62154 2.34882 8.43107 3.59318 9.92981Z" fill="#E85768"/></svg>*/
/* 											</a>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div v-if="helpfull.length > 0" class="obj-cards obj-cards--hfull">*/
/* 						<div class="obj-cards__title">Вам пригодится:</div>*/
/* 						<div class="obj-cards__list">*/
/* 							<div class="obj-card" v-for="item in helpfull">*/
/* 								<div class="obj-card__top">*/
/* 									<div class="obj-card__img">*/
/* 										<a :href="item.path">*/
/* 											<img :src="`/site/data/images/medium/${item.field_image}`">*/
/* 										</a>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="obj-card__mid">*/
/* 									<div class="obj-card__info">*/
/* 										<div class="obj-card__title"><a :href="item.path">{{item.field_header}}</a></div>*/
/* 									</div>*/
/* 									<div class="obj-card__actions">*/
/* 										<div class="obj-card__action">*/
/* 											<a href="#">*/
/* 												<svg xmlns="http://www.w3.org/2000/svg" width="21" height="16" viewBox="0 0 21 16" fill="none"><path d="M1.40094 0.0727141L1.43665 0.080906L7.75398 1.98669L14.0716 0.080906C14.1552 0.061573 14.241 0.061573 14.3246 0.080906L20.6812 1.99848C20.7553 2.02044 20.8189 2.06959 20.8625 2.12988C20.9047 2.18854 20.9306 2.26194 20.9306 2.33599V4.76573C20.9306 4.92531 20.8012 5.05442 20.6419 5.05442C20.4823 5.05442 20.3532 4.92499 20.3532 4.76573V2.5018L14.4871 0.732004V2.18657C14.4871 2.34615 14.3577 2.47526 14.1984 2.47526C14.0389 2.47526 13.9098 2.34582 13.9098 2.18657V0.732004L8.04332 2.5018V3.89575C8.04332 4.05533 7.91389 4.18443 7.75463 4.18443C7.59505 4.18443 7.46595 4.055 7.46595 3.89575V2.5018L1.59984 0.732004V5.37358C1.59984 5.53316 1.4704 5.66226 1.31115 5.66226C1.15157 5.66226 1.02247 5.53283 1.02247 5.37358V0.391873C1.02247 0.361727 1.02771 0.329614 1.03721 0.297502C1.05655 0.230328 1.0962 0.173312 1.14993 0.132352L1.17484 0.115312C1.2253 0.0835275 1.28232 0.0664882 1.34392 0.0664882C1.36194 0.0664882 1.3816 0.0684542 1.40192 0.0723864L1.40094 0.0727141ZM20.3532 7.47236C20.3532 7.31278 20.4827 7.18368 20.6419 7.18368C20.8015 7.18368 20.9306 7.31311 20.9306 7.47236V14.7406C20.9306 14.7721 20.925 14.8052 20.9152 14.8376L20.9149 14.8386C20.8949 14.9048 20.8559 14.9608 20.8022 15.0011C20.7904 15.01 20.7779 15.0182 20.7651 15.025C20.7176 15.0519 20.6649 15.0663 20.6095 15.0663C20.578 15.0663 20.5466 15.0614 20.5154 15.0519L14.1981 13.1461L7.88046 15.0519C7.81525 15.0712 7.69238 15.0712 7.62749 15.0519L1.27183 13.1347C1.25676 13.1304 1.24267 13.1245 1.22891 13.1179C1.17254 13.0921 1.12405 13.0511 1.08964 13.0026L1.08866 13.0013C1.04737 12.9439 1.02148 12.8712 1.02148 12.7965V9.26804C1.02148 9.10846 1.15092 8.97936 1.31017 8.97936C1.46975 8.97936 1.59885 9.10879 1.59885 9.26804V12.6304L7.46497 14.4002V12.8525C7.46497 12.6929 7.5944 12.5638 7.75365 12.5638C7.91323 12.5638 8.04234 12.6933 8.04234 12.8525V14.4002L13.9088 12.6304V3.5412C13.9088 3.38162 14.0382 3.25251 14.1975 3.25251C14.357 3.25251 14.4861 3.38194 14.4861 3.5412V12.6304L20.3523 14.4002V7.47203L20.3532 7.47236ZM7.46529 6.60237C7.46529 6.44279 7.59473 6.31369 7.75398 6.31369C7.91356 6.31369 8.04266 6.44312 8.04266 6.60237V10.1466C8.04266 10.3061 7.91323 10.4352 7.75398 10.4352C7.5944 10.4352 7.46529 10.3058 7.46529 10.1466V6.60237ZM1.59918 8.00386C1.59918 8.16344 1.46975 8.29254 1.3105 8.29254C1.15092 8.29254 1.02181 8.16311 1.02181 8.00386V6.63842C1.02181 6.47884 1.15125 6.34973 1.3105 6.34973C1.47008 6.34973 1.59918 6.47917 1.59918 6.63842V8.00386Z" fill="#E85768" stroke="#E85768" stroke-width="0.1"/></svg>*/
/* 											</a>*/
/* 										</div>*/
/* 										<div class="obj-card__action">*/
/* 											<a href="#">*/
/* 												<svg xmlns="http://www.w3.org/2000/svg" width="25" height="11" viewBox="0 0 25 11" fill="none"><path d="M17.1783 1.1277C16.9848 1.01546 16.918 0.767093 17.0302 0.573653C17.1424 0.380212 17.3908 0.313344 17.5843 0.425587L24.3666 4.36604C24.5015 4.43291 24.5935 4.57023 24.5935 4.73023C24.5935 4.89024 24.5015 5.02875 24.3666 5.09443L17.5843 9.03488C17.3908 9.14712 17.1424 9.08145 17.0302 8.88682C16.918 8.69337 16.9836 8.44501 17.1783 8.33276L22.6806 5.13622H17.0589C13.7286 5.13622 10.4461 5.42996 7.59103 6.27895H7.58983C4.77181 7.11719 2.36813 8.49874 0.752547 10.6767C0.618811 10.857 0.365666 10.8941 0.185361 10.7603C0.0050553 10.6266 -0.0319611 10.3734 0.101776 10.1931C1.83319 7.85872 4.38254 6.38642 7.36057 5.50041C10.3028 4.62515 13.6629 4.32186 17.0601 4.32186H22.6818L17.1795 1.12532L17.1783 1.1277Z" fill="#E85768"/></svg>*/
/* 											</a>*/
/* 										</div>*/
/* 										<div class="obj-card__action">*/
/* 											<a href="#">*/
/* 												<svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16" fill="none"><path d="M9.32 15.0664C8.75483 15.0664 5.32626 13.2832 2.97037 10.4474C1.61699 8.81828 0.586914 6.83708 0.586914 4.63533C0.586914 3.37468 1.09819 2.23182 1.92526 1.40475C2.75233 0.577684 3.89518 0.0664062 5.15584 0.0664062C6.29117 0.0664062 7.17087 0.394727 7.89894 0.927308C8.45158 1.33207 8.90772 1.84961 9.32 2.42731C9.73228 1.84836 10.1884 1.33082 10.741 0.927308C11.4691 0.394727 12.3476 0.0664062 13.4829 0.0664062C14.7436 0.0664062 15.8864 0.577684 16.7135 1.40475C17.5405 2.23182 18.0518 3.37468 18.0518 4.63533C18.0518 6.83834 17.0218 8.81828 15.6684 10.4474C13.3125 13.2832 9.88391 15.0664 9.31874 15.0664H9.32ZM3.59318 9.92981C5.79744 12.584 8.84005 14.2544 9.32 14.2544C9.79995 14.2544 12.8426 12.5852 15.0468 9.92981C16.2912 8.43107 17.2385 6.62154 17.2385 4.63533C17.2385 3.59899 16.8175 2.65914 16.1383 1.97994C15.4591 1.30074 14.5192 0.879689 13.4829 0.879689C12.538 0.879689 11.8137 1.14661 11.2197 1.58144C10.6095 2.02881 10.1195 2.66039 9.66461 3.36716C9.63328 3.41728 9.59193 3.46114 9.5393 3.49498C9.35133 3.61653 9.09945 3.56139 8.97915 3.37217C8.52426 2.66415 8.03303 2.03007 7.42025 1.58144C6.82626 1.14661 6.1032 0.879689 5.15709 0.879689C4.12075 0.879689 3.1809 1.30074 2.5017 1.97994C1.8225 2.65914 1.40145 3.59899 1.40145 4.63533C1.40145 6.62154 2.34882 8.43107 3.59318 9.92981Z" fill="#E85768"/></svg>*/
/* 											</a>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="search-item search-item--map">*/
/* 			<!--span class="search-switchmode" @click="isSearchShowlist = true">Список</span-->*/
/* 			<div id="map" style="width: 100%; height: calc(100vh - 63px);"></div>*/
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* <script src="https://api-maps.yandex.ru/2.1/?apikey=b303c4d1-e74e-4a8d-942f-15e384f9386b&lang=ru_RU" type="text/javascript"></script>*/
/* <script type="text/javascript">*/
/* 	ymaps.ready(init);*/
/* 	function init() {*/
/* 		let myMap = new ymaps.Map("map", {*/
/* 				center: [{$ page.field_coords|trim|split(',')[0] $}, {$ page.field_coords|trim|split(',')[1] $}],*/
/* 				zoom: 13,*/
/* 				constrols: ['zoomControl']*/
/* 			}, {*/
/* 				searchControlProvider: 'yandex#search'*/
/* 			}),*/
/* */
/* 			myGeoObject = new ymaps.GeoObject({*/
/* 				geometry: {*/
/* 					type: "Point",*/
/* 					coordinates: [{$ page.field_coords|trim|split(',')[0] $}, {$ page.field_coords|trim|split(',')[1] $}]*/
/* 				}*/
/* 			})*/
/* */
/* 			myMap.geoObjects.add(myGeoObject)*/
/* 			myMap.behaviors.disable('scrollZoom')*/
/* 	}*/
/* </script>*/
/* <script src="/site/theme/js/search_object.js"></script>*/
/* {% include 'footer' %}*/
