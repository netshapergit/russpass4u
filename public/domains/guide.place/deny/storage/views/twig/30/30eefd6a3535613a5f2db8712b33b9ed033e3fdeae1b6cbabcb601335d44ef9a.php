<?php

/* layouts.camping */
class __TwigTemplate_dd5972bd02395afb1e6ab4b1df73634f0f51f3fc34701bcfcd0a1bf8f0de5d32 extends TwigBridge\Twig\Template
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
        $filters = array("escape" => 3, "json_encode" => 3, "raw" => 16, "split" => 214, "trim" => 214);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include'),
                array('escape', 'json_encode', 'raw', 'split', 'trim'),
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
        $this->loadTemplate("header", "layouts.camping", 1)->display($context);
        // line 2
        echo "
<section class=\"search search--route\" data-pageitem=\"";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["page"]) ? $context["page"] : null)), "html", null, true));
        echo "\" id=\"v-search-root\" data-ids=\"";
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
\t\t\t\t\t\t<div class=\"route-info__actions\">
\t\t\t\t\t\t\t<div class=\"route-info__action search-card__action\">
\t\t\t\t\t\t\t\t<template v-if=\"!!myRouteItems.find(e => e.id == pageItem.id)\">
\t\t\t\t\t\t\t\t\t<button title=\"Удалить из моего маршрута\" class=\"ibtn ibtn--added ibtn--iconleft\" @click.stop=\"removeItemFromMyRouteById\">
\t\t\t\t\t\t\t\t\t\t<svg width=\"23\" height=\"29\" viewBox=\"0 0 23 29\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M14.7 23.4262C14.0401 23.6324 13.409 24.0429 12.9835 24.6747L11.5002 26.8767L10.0171 24.6749C9.59149 24.043 8.96041 23.6325 8.30039 23.4263C4.0537 22.0996 1 18.2118 1 13.6462C1 7.99621 5.68146 3.38098 11.5 3.38098C17.3185 3.38098 22 7.99621 22 13.6462C22 18.2116 18.9465 22.0993 14.7 23.4262Z\" stroke=\"#E85768\" stroke-width=\"2\"/>
\t\t\t\t\t\t\t\t\t\t\t<path class=\"svg-plus\" d=\"M11.1199 20.241C10.9665 20.241 10.8362 20.195 10.7289 20.103C10.6369 19.9957 10.5909 19.8653 10.5909 19.712V14.928H5.87586C5.72253 14.928 5.59219 14.882 5.48486 14.79C5.39286 14.6827 5.34686 14.5523 5.34686 14.399V13.663C5.34686 13.5097 5.39286 13.387 5.48486 13.295C5.59219 13.1877 5.72253 13.134 5.87586 13.134H10.5909V8.488C10.5909 8.33467 10.6369 8.212 10.7289 8.12C10.8362 8.01267 10.9665 7.959 11.1199 7.959H11.9249C12.0782 7.959 12.2009 8.01267 12.2929 8.12C12.4002 8.212 12.4539 8.33467 12.4539 8.488V13.134H17.1919C17.3452 13.134 17.4679 13.1877 17.5599 13.295C17.6672 13.387 17.7209 13.5097 17.7209 13.663V14.399C17.7209 14.5523 17.6672 14.6827 17.5599 14.79C17.4679 14.882 17.3452 14.928 17.1919 14.928H12.4539V19.712C12.4539 19.8653 12.4002 19.9957 12.2929 20.103C12.2009 20.195 12.0782 20.241 11.9249 20.241H11.1199Z\" fill=\"#E85768\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t<span>Добавлено</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t\t<template v-else>
\t\t\t\t\t\t\t\t\t<button title=\"Добавить в мой маршрут\" class=\"ibtn ibtn--iconleft\" @click.stop=\"addItemToMyRoute\">
\t\t\t\t\t\t\t\t\t\t<svg width=\"23\" height=\"29\" viewBox=\"0 0 23 29\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M14.7 23.4262C14.0401 23.6324 13.409 24.0429 12.9835 24.6747L11.5002 26.8767L10.0171 24.6749C9.59149 24.043 8.96041 23.6325 8.30039 23.4263C4.0537 22.0996 1 18.2118 1 13.6462C1 7.99621 5.68146 3.38098 11.5 3.38098C17.3185 3.38098 22 7.99621 22 13.6462C22 18.2116 18.9465 22.0993 14.7 23.4262Z\" stroke=\"#E85768\" stroke-width=\"2\"/>
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.1199 20.241C10.9665 20.241 10.8362 20.195 10.7289 20.103C10.6369 19.9957 10.5909 19.8653 10.5909 19.712V14.928H5.87586C5.72253 14.928 5.59219 14.882 5.48486 14.79C5.39286 14.6827 5.34686 14.5523 5.34686 14.399V13.663C5.34686 13.5097 5.39286 13.387 5.48486 13.295C5.59219 13.1877 5.72253 13.134 5.87586 13.134H10.5909V8.488C10.5909 8.33467 10.6369 8.212 10.7289 8.12C10.8362 8.01267 10.9665 7.959 11.1199 7.959H11.9249C12.0782 7.959 12.2009 8.01267 12.2929 8.12C12.4002 8.212 12.4539 8.33467 12.4539 8.488V13.134H17.1919C17.3452 13.134 17.4679 13.1877 17.5599 13.295C17.6672 13.387 17.7209 13.5097 17.7209 13.663V14.399C17.7209 14.5523 17.6672 14.6827 17.5599 14.79C17.4679 14.882 17.3452 14.928 17.1919 14.928H12.4539V19.712C12.4539 19.8653 12.4002 19.9957 12.2929 20.103C12.2009 20.195 12.0782 20.241 11.9249 20.241H11.1199Z\" fill=\"#E85768\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t<span>В маршрут</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"route-info__action route-info__action--flex search-card__action\" v-if=\"pageItem.field_prices\">
\t\t\t\t\t\t\t\t<div class=\"route-info__price\">
\t\t\t\t\t\t\t\t\t<svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M10 0C12.7612 0 15.2618 1.1194 17.0712 2.92882C18.8806 4.73823 20 7.23881 20 10C20 12.7612 18.8806 15.2618 17.0712 17.0712C15.2618 18.8806 12.7612 20 10 20C7.23881 20 4.73823 18.8806 2.92882 17.0712C1.1194 15.2618 0 12.7612 0 10C0 7.23881 1.1194 4.73823 2.92882 2.92882C4.73823 1.1194 7.23881 0 10 0V0ZM10.2021 11.2836C12.2101 11.2836 13.5006 10.1251 13.5006 8.04363C13.5006 6.32836 12.6361 4.76005 10.2021 4.76005H8.04707C7.6659 4.76005 7.34328 5.08266 7.34328 5.46383V12.7417H7.08611C6.76349 12.7417 6.49943 13.0057 6.49943 13.3284C6.49943 13.651 6.76349 13.915 7.08611 13.915H7.34328V15.5959C7.34328 15.9323 7.62227 16.2113 7.92997 16.2113C8.25258 16.2113 8.51665 15.9185 8.51665 15.5959V13.915H11.7394C12.062 13.915 12.3261 13.651 12.3261 13.3284C12.3261 13.0057 12.062 12.7417 11.7394 12.7417H8.51665V11.2836H10.2021ZM8.51665 5.90356H10.2021C11.9323 5.90356 12.3272 6.97359 12.3272 8.0287C12.3272 9.46498 11.5947 10.1401 10.2021 10.1401H8.51665V5.90356ZM16.3869 3.61424C14.7532 1.98048 12.4948 0.969001 10 0.969001C7.50631 0.969001 5.24799 1.98048 3.61309 3.61424C1.97933 5.24799 0.967853 7.50631 0.967853 10.0011C0.967853 12.4948 1.97933 14.7532 3.61309 16.3881C5.24684 18.0218 7.50517 19.0333 10 19.0333C12.4937 19.0333 14.752 18.0218 16.3869 16.3881C18.0207 14.7543 19.0321 12.496 19.0321 10.0011C19.0321 7.50746 18.0207 5.24914 16.3869 3.61424Z\" fill=\"#2B2A29\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\tот {{pageItem.field_prices}} ₽
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a target=\"_blank\" v-if=\"pageItem.field_vdnh_tickets\" class=\"v-btn v-btn--color-acc\" :href=\"pageItemTicketsLink\">Купить билет</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 76
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"route__desc\">
\t\t\t\t\t\t\t";
        // line 78
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
\t\t\t\t\t";
        // line 199
        $this->loadTemplate("vfb", "layouts.camping", 199)->display($context);
        // line 200
        echo "\t\t\t\t</div>
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
        // line 214
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
        // line 224
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
        // line 233
        $this->loadTemplate("footer", "layouts.camping", 233)->display($context);
    }

    public function getTemplateName()
    {
        return "layouts.camping";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 233,  284 => 224,  269 => 214,  253 => 200,  251 => 199,  127 => 78,  123 => 76,  89 => 32,  70 => 16,  48 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% include 'header' %}*/
/* */
/* <section class="search search--route" data-pageitem="{$ page|json_encode() $}" id="v-search-root" data-ids="{$ page.field_route_string $}" data-gtk="{$ page.field_good_to_know $}" data-hfull="{$ page.field_helpfull $}">*/
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
/* 						<div class="route-info__actions">*/
/* 							<div class="route-info__action search-card__action">*/
/* 								<template v-if="!!myRouteItems.find(e => e.id == pageItem.id)">*/
/* 									<button title="Удалить из моего маршрута" class="ibtn ibtn--added ibtn--iconleft" @click.stop="removeItemFromMyRouteById">*/
/* 										<svg width="23" height="29" viewBox="0 0 23 29" fill="none" xmlns="http://www.w3.org/2000/svg">*/
/* 											<path d="M14.7 23.4262C14.0401 23.6324 13.409 24.0429 12.9835 24.6747L11.5002 26.8767L10.0171 24.6749C9.59149 24.043 8.96041 23.6325 8.30039 23.4263C4.0537 22.0996 1 18.2118 1 13.6462C1 7.99621 5.68146 3.38098 11.5 3.38098C17.3185 3.38098 22 7.99621 22 13.6462C22 18.2116 18.9465 22.0993 14.7 23.4262Z" stroke="#E85768" stroke-width="2"/>*/
/* 											<path class="svg-plus" d="M11.1199 20.241C10.9665 20.241 10.8362 20.195 10.7289 20.103C10.6369 19.9957 10.5909 19.8653 10.5909 19.712V14.928H5.87586C5.72253 14.928 5.59219 14.882 5.48486 14.79C5.39286 14.6827 5.34686 14.5523 5.34686 14.399V13.663C5.34686 13.5097 5.39286 13.387 5.48486 13.295C5.59219 13.1877 5.72253 13.134 5.87586 13.134H10.5909V8.488C10.5909 8.33467 10.6369 8.212 10.7289 8.12C10.8362 8.01267 10.9665 7.959 11.1199 7.959H11.9249C12.0782 7.959 12.2009 8.01267 12.2929 8.12C12.4002 8.212 12.4539 8.33467 12.4539 8.488V13.134H17.1919C17.3452 13.134 17.4679 13.1877 17.5599 13.295C17.6672 13.387 17.7209 13.5097 17.7209 13.663V14.399C17.7209 14.5523 17.6672 14.6827 17.5599 14.79C17.4679 14.882 17.3452 14.928 17.1919 14.928H12.4539V19.712C12.4539 19.8653 12.4002 19.9957 12.2929 20.103C12.2009 20.195 12.0782 20.241 11.9249 20.241H11.1199Z" fill="#E85768"/>*/
/* 										</svg>*/
/* 										<span>Добавлено</span>*/
/* 									</button>*/
/* 								</template>*/
/* 								<template v-else>*/
/* 									<button title="Добавить в мой маршрут" class="ibtn ibtn--iconleft" @click.stop="addItemToMyRoute">*/
/* 										<svg width="23" height="29" viewBox="0 0 23 29" fill="none" xmlns="http://www.w3.org/2000/svg">*/
/* 											<path d="M14.7 23.4262C14.0401 23.6324 13.409 24.0429 12.9835 24.6747L11.5002 26.8767L10.0171 24.6749C9.59149 24.043 8.96041 23.6325 8.30039 23.4263C4.0537 22.0996 1 18.2118 1 13.6462C1 7.99621 5.68146 3.38098 11.5 3.38098C17.3185 3.38098 22 7.99621 22 13.6462C22 18.2116 18.9465 22.0993 14.7 23.4262Z" stroke="#E85768" stroke-width="2"/>*/
/* 											<path d="M11.1199 20.241C10.9665 20.241 10.8362 20.195 10.7289 20.103C10.6369 19.9957 10.5909 19.8653 10.5909 19.712V14.928H5.87586C5.72253 14.928 5.59219 14.882 5.48486 14.79C5.39286 14.6827 5.34686 14.5523 5.34686 14.399V13.663C5.34686 13.5097 5.39286 13.387 5.48486 13.295C5.59219 13.1877 5.72253 13.134 5.87586 13.134H10.5909V8.488C10.5909 8.33467 10.6369 8.212 10.7289 8.12C10.8362 8.01267 10.9665 7.959 11.1199 7.959H11.9249C12.0782 7.959 12.2009 8.01267 12.2929 8.12C12.4002 8.212 12.4539 8.33467 12.4539 8.488V13.134H17.1919C17.3452 13.134 17.4679 13.1877 17.5599 13.295C17.6672 13.387 17.7209 13.5097 17.7209 13.663V14.399C17.7209 14.5523 17.6672 14.6827 17.5599 14.79C17.4679 14.882 17.3452 14.928 17.1919 14.928H12.4539V19.712C12.4539 19.8653 12.4002 19.9957 12.2929 20.103C12.2009 20.195 12.0782 20.241 11.9249 20.241H11.1199Z" fill="#E85768"/>*/
/* 										</svg>*/
/* 										<span>В маршрут</span>*/
/* 									</button>*/
/* 								</template>*/
/* 							</div>*/
/* 							<div class="route-info__action route-info__action--flex search-card__action" v-if="pageItem.field_prices">*/
/* 								<div class="route-info__price">*/
/* 									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">*/
/* 										<path d="M10 0C12.7612 0 15.2618 1.1194 17.0712 2.92882C18.8806 4.73823 20 7.23881 20 10C20 12.7612 18.8806 15.2618 17.0712 17.0712C15.2618 18.8806 12.7612 20 10 20C7.23881 20 4.73823 18.8806 2.92882 17.0712C1.1194 15.2618 0 12.7612 0 10C0 7.23881 1.1194 4.73823 2.92882 2.92882C4.73823 1.1194 7.23881 0 10 0V0ZM10.2021 11.2836C12.2101 11.2836 13.5006 10.1251 13.5006 8.04363C13.5006 6.32836 12.6361 4.76005 10.2021 4.76005H8.04707C7.6659 4.76005 7.34328 5.08266 7.34328 5.46383V12.7417H7.08611C6.76349 12.7417 6.49943 13.0057 6.49943 13.3284C6.49943 13.651 6.76349 13.915 7.08611 13.915H7.34328V15.5959C7.34328 15.9323 7.62227 16.2113 7.92997 16.2113C8.25258 16.2113 8.51665 15.9185 8.51665 15.5959V13.915H11.7394C12.062 13.915 12.3261 13.651 12.3261 13.3284C12.3261 13.0057 12.062 12.7417 11.7394 12.7417H8.51665V11.2836H10.2021ZM8.51665 5.90356H10.2021C11.9323 5.90356 12.3272 6.97359 12.3272 8.0287C12.3272 9.46498 11.5947 10.1401 10.2021 10.1401H8.51665V5.90356ZM16.3869 3.61424C14.7532 1.98048 12.4948 0.969001 10 0.969001C7.50631 0.969001 5.24799 1.98048 3.61309 3.61424C1.97933 5.24799 0.967853 7.50631 0.967853 10.0011C0.967853 12.4948 1.97933 14.7532 3.61309 16.3881C5.24684 18.0218 7.50517 19.0333 10 19.0333C12.4937 19.0333 14.752 18.0218 16.3869 16.3881C18.0207 14.7543 19.0321 12.496 19.0321 10.0011C19.0321 7.50746 18.0207 5.24914 16.3869 3.61424Z" fill="#2B2A29"/>*/
/* 									</svg>*/
/* 									от {{pageItem.field_prices}} ₽*/
/* 								</div>*/
/* 								<a target="_blank" v-if="pageItem.field_vdnh_tickets" class="v-btn v-btn--color-acc" :href="pageItemTicketsLink">Купить билет</a>*/
/* 							</div>*/
/* 							{#*/
/* 							<div v-if="pageItem.field_address" class="search-card__infoblock search-card__infoblock--address">*/
/* 								<span class="search-card__infoblock-icon">*/
/* 									<!--svg xmlns="http://www.w3.org/2000/svg" width="12" height="19" viewBox="0 0 12 19" fill="none">*/
/* 										<path fill-rule="evenodd" clip-rule="evenodd" d="M5.77347 0.122131C8.80285 0.122131 11.2564 2.59894 11.2564 5.65261C11.2564 8.24755 8.26216 14.7388 7.12029 17.1763C6.45274 18.6017 5.10396 18.6017 4.43445 17.1763C3.34333 14.8471 0.288574 8.06839 0.288574 5.65261C0.288574 2.59697 2.74409 0.122131 5.77152 0.122131L5.77347 0.122131ZM5.77347 2.18745C7.61413 2.18745 9.10539 3.69165 9.10539 5.54826C9.10539 7.40488 7.61413 8.90908 5.77347 8.90908C3.93281 8.90908 2.44154 7.40488 2.44154 5.54826C2.44154 3.69165 3.93281 2.18745 5.77347 2.18745Z" fill="#14C5D0"></path>*/
/* 									</svg-->*/
/* 									<svg xmlns="http://www.w3.org/2000/svg" width="19" height="25" viewBox="0 0 19 25" fill="none">*/
/* 										<path d="M10.1259 24.6906C10.0912 24.7253 10.0912 24.7253 10.0566 24.7599C10.022 24.7599 10.022 24.7945 9.98734 24.7945C9.95271 24.7945 9.91808 24.8292 9.88344 24.8292C9.84881 24.8638 9.77955 24.8638 9.74492 24.8638C9.71028 24.8638 9.64102 24.8638 9.60639 24.8984C9.57176 24.8984 9.57176 24.8984 9.53712 24.8984C9.50249 24.8984 9.43323 24.8984 9.39859 24.8638C9.36396 24.8638 9.2947 24.8292 9.26007 24.8292L9.15617 24.7945C9.12154 24.7945 9.08691 24.7599 9.08691 24.7599C9.05227 24.7253 9.05227 24.7253 9.01764 24.6906C8.22111 24.0326 7.4592 23.3054 6.6973 22.4742C5.97002 21.6777 5.27738 20.8119 4.61937 19.9114C3.996 19.0456 3.44188 18.1452 2.9224 17.2101C2.43756 16.3097 2.02197 15.3746 1.67565 14.4742C1.60639 14.2318 1.60639 14.024 1.71028 13.8162C1.81418 13.6084 1.98734 13.4352 2.19513 13.366C2.43756 13.2967 2.64535 13.2967 2.85314 13.4006C3.06093 13.5045 3.23409 13.6777 3.30336 13.8855C3.61505 14.7166 3.996 15.5824 4.44621 16.4136C4.89643 17.2794 5.45054 18.1106 6.03929 18.9417C6.5934 19.7383 7.21678 20.5002 7.84015 21.1928C8.39427 21.8162 8.98301 22.4049 9.57176 22.9244C10.4722 22.1279 11.3726 21.1582 12.2384 20.1192C13.1042 19.0456 13.9008 17.8681 14.5934 16.656C15.2514 15.4785 15.7709 14.2664 16.1172 13.0543C16.4289 11.9461 16.6367 10.8032 16.6367 9.69497C16.6367 8.72528 16.4635 7.82484 16.1172 6.99368C15.7709 6.12787 15.2514 5.36597 14.5934 4.70796C13.9354 4.04995 13.1735 3.53047 12.3077 3.18415C11.4765 2.83783 10.5761 2.66467 9.60639 2.66467C8.63669 2.66467 7.73626 2.83783 6.90509 3.18415C6.03929 3.53047 5.27738 4.04995 4.61937 4.70796C3.96137 5.36597 3.44189 6.12787 3.09556 6.99368C2.74924 7.82484 2.57608 8.72528 2.57608 9.69497V9.97203V10.2145L2.61072 10.4915L2.64535 10.7686C2.67998 11.011 2.61072 11.2188 2.43756 11.3919C2.29903 11.5651 2.09124 11.669 1.84881 11.7036C1.60639 11.7383 1.39859 11.669 1.22543 11.4958C1.05227 11.3573 0.948379 11.1495 0.913746 10.9071L0.879114 10.5954L0.844482 10.2837V9.97203V9.66034C0.844482 8.48285 1.08691 7.34 1.50249 6.30103C1.95271 5.22744 2.61072 4.25774 3.40725 3.46121C4.20379 2.66467 5.17349 2.00666 6.24708 1.55645C7.28604 1.14086 8.4289 0.898438 9.60639 0.898438C10.7839 0.898438 11.9267 1.14086 12.9657 1.55645C14.0393 2.00666 15.009 2.66467 15.8055 3.46121C16.6021 4.25774 17.2601 5.22744 17.7103 6.30103C18.1259 7.34 18.3683 8.48285 18.3683 9.66034C18.3683 10.9071 18.1605 12.1885 17.7795 13.4699C17.3986 14.8205 16.8099 16.1712 16.0826 17.4525C15.3207 18.8378 14.4202 20.1538 13.4159 21.366C12.377 22.6474 11.2341 23.7556 10.1259 24.7253V24.6906ZM9.57176 6.4742C10.0566 6.4742 10.5415 6.57809 10.9917 6.75125C11.3726 6.92441 11.7536 7.1322 12.0653 7.44389L12.1692 7.54779C12.5155 7.89411 12.7925 8.27506 12.9657 8.75991C13.1389 9.21013 13.2428 9.66034 13.2428 10.1798C13.2428 10.6647 13.1389 11.1495 12.9657 11.5997C12.7925 12.05 12.5155 12.4655 12.1692 12.8119C11.8228 13.1582 11.4419 13.4352 10.9917 13.6084C10.5415 13.7816 10.0912 13.8855 9.57176 13.8855C9.08691 13.8855 8.60206 13.7816 8.15184 13.6084C7.84015 13.4699 7.52847 13.2967 7.25141 13.0889L6.97435 12.8119C6.62803 12.4655 6.35098 12.0846 6.17782 11.5997C6.00466 11.1495 5.90076 10.6993 5.90076 10.1798C5.90076 9.69497 6.00466 9.21013 6.17782 8.75991C6.35098 8.30969 6.62803 7.89411 6.97435 7.58242C7.32067 7.2361 7.70163 6.95904 8.15184 6.78588C8.60206 6.61272 9.05227 6.50883 9.57176 6.50883V6.4742ZM10.8531 8.72528C10.68 8.58675 10.5068 8.44822 10.299 8.37896C10.0566 8.27506 9.81418 8.24043 9.57176 8.24043C9.2947 8.24043 9.05227 8.27506 8.84448 8.37896C8.60206 8.48285 8.39427 8.62138 8.22111 8.79454C8.04795 8.9677 7.90942 9.17549 7.80552 9.41792C7.70163 9.66034 7.66699 9.90277 7.66699 10.1452C7.66699 10.4222 7.70163 10.6647 7.80552 10.8725C7.90942 11.1149 8.04795 11.3227 8.22111 11.4958L8.29037 11.5651C8.46353 11.7036 8.63669 11.8422 8.84448 11.9461C9.08691 12.05 9.32933 12.0846 9.57176 12.0846C9.84881 12.0846 10.0912 12.05 10.299 11.9461C10.5415 11.8422 10.7492 11.7036 10.9224 11.5305C11.0956 11.3573 11.2341 11.1495 11.338 10.9071C11.4419 10.6647 11.4765 10.4222 11.4765 10.1798C11.4765 9.90277 11.4419 9.66034 11.338 9.45255C11.2341 9.21013 11.0956 9.00233 10.9224 8.82917L10.8531 8.75991V8.72528Z" fill="#14C5D0"/>*/
/* 									</svg>*/
/* 								</span>*/
/* 								{{pageItem.field_address}}*/
/* 							</div>*/
/* 							#}*/
/* 						</div>*/
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
/* 					{% include 'vfb' %}*/
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
