<?php

/* layouts.routes */
class __TwigTemplate_e5b3c76f362ab02d86c6cb97b3c2d3398036d5262fa707b4dde05b14cb46b114 extends TwigBridge\Twig\Template
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
        $tags = array("if" => 1, "set" => 3, "for" => 9, "include" => 41);
        $filters = array("split" => 6, "length" => 10, "slice" => 12, "lower" => 12, "merge" => 13, "escape" => 37, "json_encode" => 37);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'for', 'include'),
                array('split', 'length', 'slice', 'lower', 'merge', 'escape', 'json_encode'),
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
        if (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "json", array()) == "yes")) {
            // line 2
            echo "
\t";
            // line 3
            $context["items"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_sub_pages", array());
            // line 4
            echo "
\t";
            // line 5
            if ($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "query", array())) {
                // line 6
                echo "\t\t";
                $context["query"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "query", array()), " ");
                // line 7
                echo "\t\t";
                $context["results"] = array();
                // line 8
                echo "
\t\t";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 10
                    echo "\t\t\t";
                    if ((twig_length_filter($this->env, (isset($context["query"]) ? $context["query"] : null)) > 0)) {
                        // line 11
                        echo "\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["query"]) ? $context["query"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["que"]) {
                            // line 12
                            echo "\t\t\t\t\t";
                            if (((twig_length_filter($this->env, twig_slice($this->env, $context["que"], 0,  -1)) >= 3) && twig_in_filter(twig_lower_filter($this->env, twig_slice($this->env, $context["que"], 0,  -1)), twig_lower_filter($this->env, $this->getAttribute($context["item"], "field_header", array()))))) {
                                // line 13
                                echo "\t\t\t\t\t\t";
                                $context["results"] = twig_array_merge((isset($context["results"]) ? $context["results"] : null), array(0 => $context["item"]));
                                // line 14
                                echo "\t\t\t\t\t";
                            }
                            // line 15
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['que'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 16
                        echo "\t\t\t";
                    }
                    // line 17
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "
\t\t";
                // line 19
                $context["items"] = (isset($context["results"]) ? $context["results"] : null);
                echo "\t\t

\t";
            }
            // line 22
            echo "
\t";
            // line 23
            $context["uniqResults"] = array();
            // line 24
            echo "\t";
            $context["uniqIDs"] = array();
            // line 25
            echo "
\t";
            // line 26
            if ((twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null)) > 0)) {
                // line 27
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 28
                    echo "\t\t\t";
                    if (!twig_in_filter($this->getAttribute($context["item"], "id", array()), (isset($context["uniqIDs"]) ? $context["uniqIDs"] : null))) {
                        // line 29
                        echo "\t\t\t\t";
                        $context["uniqResults"] = twig_array_merge((isset($context["uniqResults"]) ? $context["uniqResults"] : null), array(0 => $context["item"]));
                        // line 30
                        echo "\t\t\t\t";
                        $context["uniqIDs"] = twig_array_merge((isset($context["uniqIDs"]) ? $context["uniqIDs"] : null), array(0 => $this->getAttribute($context["item"], "id", array())));
                        // line 31
                        echo "\t\t\t";
                    }
                    // line 32
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "\t";
            }
            // line 34
            echo "
\t";
            // line 35
            $context["items"] = (isset($context["uniqResults"]) ? $context["uniqResults"] : null);
            // line 36
            echo "
<div id=\"ajax-answer\" data-answer=\"";
            // line 37
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["uniqResults"]) ? $context["uniqResults"] : null)), "html", null, true));
            echo "\" ";
            if (((twig_length_filter($this->env, (isset($context["results"]) ? $context["results"] : null)) == 0) && ($this->getAttribute((isset($context["query"]) ? $context["query"] : null), 0, array(), "array") != ""))) {
                echo "data-empty=\"1\"";
            }
            echo "></div>

";
        } else {
            // line 40
            echo "
";
            // line 41
            $this->loadTemplate("header", "layouts.routes", 41)->display($context);
            // line 42
            echo "

<div class=\"data-pages\" style=\"display: none;\" data-answer=\"";
            // line 44
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_sub_pages", array())), "html", null, true));
            echo "\" ";
            if (((twig_length_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_sub_pages", array())) == 0) && ($this->getAttribute((isset($context["query"]) ? $context["query"] : null), 0, array(), "array") != ""))) {
                echo "data-empty=\"1\"";
            }
            echo "></div>
<section class=\"search\" id=\"v-search-root\" data-find-inset=\"1\" data-lid=\"";
            // line 45
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "layout_id", array()), "html", null, true));
            echo "\">
\t<div class=\"search__wrapper\" :class=\"{'search__wrapper--fw': isFullWidthLayout}\">
\t\t<div v-show=\"isSearchShowlist\" class=\"search-item search-item--list\">
\t\t\t<div class=\"search-filters-cat\" :class=\"{'search-filters-cat--active': isCatFiltersShow}\">
\t\t\t\t<div class=\"search-filters-cat__actions\">
\t\t\t\t\t<button class=\"icon-btn filter_btn\" @click=\"isCatFiltersShow = !isCatFiltersShow\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"19\" viewBox=\"0 0 19 19\" fill=\"none\"><path d=\"M18.3235 2.62752C18.714 2.23699 18.714 1.60383 18.3235 1.2133C17.933 0.822779 17.2998 0.822779 16.9093 1.2133L9.58343 8.53918L2.25764 1.21339C1.86712 0.822866 1.23396 0.822865 0.84343 1.21339C0.452906 1.60391 0.452906 2.23708 0.84343 2.6276L8.16922 9.95339L0.843499 17.2791C0.452975 17.6696 0.452974 18.3028 0.843499 18.6933C1.23402 19.0838 1.86719 19.0838 2.25771 18.6933L9.58343 11.3676L16.9092 18.6934C17.2998 19.0839 17.9329 19.0839 18.3235 18.6934C18.714 18.3029 18.714 17.6697 18.3235 17.2792L10.9976 9.95339L18.3235 2.62752Z\" fill=\"#2D2727\"/></svg>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"search-filters-btn-showitems\" :disabled=\"filteredItems.length == 0\" @click=\"isCatFiltersShow = !isCatFiltersShow\">
\t\t\t\t\t\t<span v-if=\"filteredItems.length != 0\">Показать {{filteredItems.length}} элементов</span>
\t\t\t\t\t\t<span v-else>0 элементов</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"serch-filters-main-cat__wrapper\">
\t\t\t\t\t<div class=\"filters__wrapper\">
\t\t\t\t\t\t<div class=\"filter__group\">
\t\t\t\t\t\t\t<div class=\"filter filter--routes1-type\">
\t\t\t\t\t\t\t\t<div class=\"filter__title\">Тип</div>
\t\t\t\t\t\t\t\t<div class=\"filter-radios\">
\t\t\t\t\t\t\t\t\t<div class=\"filter-radio\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" value=\"\" name=\"cat-filter-routes1-type\" @change=\"selectedCatFilters.routes1.type.items = []\" id=\"cat-filter-routes1-type-0\">
\t\t\t\t\t\t\t\t\t\t<label for=\"cat-filter-routes1-type-0\">Все</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"filter-radio\" v-for=\"(item,i) in catFilters.routes1.types\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" :value=\"item.value\" name=\"cat-filter-routes1-type\" @change=\"selectedCatFilters.routes1.type.items = [item.value]\" :id=\"`cat-filter-routes1-type-\${i + 1}`\">
\t\t\t\t\t\t\t\t\t\t<label :for=\"`cat-filter-routes1-type-\${i + 1}`\">{{item.name}}</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"search-main\">
\t\t\t\t<div class=\"search-top\">
\t\t\t\t\t<div class=\"cont\">
\t\t\t\t\t\t<h1 style=\"font-size:24px; padding-left: 15px; font-weight: 100; text-transform: uppercase;\">";
            // line 82
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array()), "html", null, true));
            echo "</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"search-totop\" @click=\"scrollToMap\">Карта</div>
\t\t\t\t<div class=\"search-filters\">
\t\t\t\t\t<div class=\"cont\">
\t\t\t\t\t\t<div class=\"flexer flexer--jcb flexer--aic\">
\t\t\t\t\t\t\t";
            // line 89
            $this->loadTemplate("cityswitcher", "layouts.routes", 89)->display($context);
            // line 90
            echo "\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<button class=\"icon-btn filter_btn\" @click=\"isCatFiltersShow = !isCatFiltersShow\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"18\" viewBox=\"0 0 22 18\" fill=\"none\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0.259521 3.46436C0.259521 2.91207 0.707237 2.46436 1.25952 2.46436H20.2595C20.8118 2.46436 21.2595 2.91207 21.2595 3.46436C21.2595 4.01664 20.8118 4.46436 20.2595 4.46436H1.25952C0.707237 4.46436 0.259521 4.01664 0.259521 3.46436Z\" fill=\"#2D2727\"/><line x1=\"1.25952\" y1=\"14.4644\" x2=\"20.2595\" y2=\"14.4644\" stroke=\"#2D2727\" stroke-width=\"2\" stroke-linecap=\"round\"/><circle cx=\"7.25952\" cy=\"14.4644\" r=\"2.95605\" fill=\"#2D2727\"/><circle cx=\"14.3887\" cy=\"3.46436\" r=\"2.95605\" fill=\"#2D2727\"/></svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"filters\">
\t\t\t\t\t\t\t<div class=\"filters__wrapper\">
\t\t\t\t\t\t\t\t<div class=\"filter__group\">
\t\t\t\t\t\t\t\t\t<div class=\"filter filter--tags\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tagsearch__input\">
\t\t\t\t\t\t\t\t\t\t\t<vue-tags-input
\t\t\t\t\t\t\t\t\t\t\t\tv-model=\"tag\"
\t\t\t\t\t\t\t\t\t\t\t\t:tags=\"tags\"
\t\t\t\t\t\t\t\t\t\t\t\t:autocomplete-items=\"filteredTags\"
\t\t\t\t\t\t\t\t\t\t\t\t@tags-changed=\"newTags => tags = newTags\"
\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"Поиск...\"
\t\t\t\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--div class=\"filter__group filter__group--flex\">
\t\t\t\t\t\t\t\t\t<div class=\"filter filter--date\">
\t\t\t\t\t\t\t\t\t\t<v-date-picker 
\t\t\t\t\t\t\t\t\t\t\tmode='range' 
\t\t\t\t\t\t\t\t\t\t\t:min-date='new Date()'
\t\t\t\t\t\t\t\t\t\t\tv-model='range'
\t\t\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"filter filter--sort\">
\t\t\t\t\t\t\t\t\t\t<select v-model=\"sortType\" class=\"form-input form-input--select\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" disabled selected>Сортировка</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"priceUp\">Цена ↑</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"priceDown\">Цена ↓</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"search-list search-list--skeleton\" v-if=\"!isAppLoaded\">
\t\t\t\t\t<div class=\"search-results__wrapper\">
\t\t\t\t\t\t";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 135
                echo "\t\t\t\t\t\t<div class=\"search-card search-card--skeleton\">
\t\t\t\t\t\t\t<div class=\"search-card__gallery\"></div>
\t\t\t\t\t\t\t<div class=\"search-card__info\">
\t\t\t\t\t\t\t\t<div class=\"search-card__text\">
\t\t\t\t\t\t\t\t\t<div class=\"search-card__title\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"search-card__infoblock search-card__infoblock--address\"> </div> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"search-card__actions\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"search-list\" v-cloak>
\t\t\t\t\t<div class=\"cont\">
\t\t\t\t\t\t<div class=\"search-warning\" v-show=\"filteredItems.length == 0\" v-cloak>Результатов по вашему запросу нет</div>
\t\t\t\t\t\t<transition-group 
\t\t\t\t\t\t\tmode=\"out-in\" 
\t\t\t\t\t\t\tname=\"search-transition2\" 
\t\t\t\t\t\t\ttag=\"div\" 
\t\t\t\t\t\t\tclass=\"search-results__wrapper\"
\t\t\t\t\t\t>
\t\t\t\t\t\t\t<div
\tv-for=\"item in pageItems\"
\t:key=\"item.id\" 
\tclass=\"search-card\">
\t<div v-if=\"item.field_gallery.length > 0\" class=\"search-card__gallery splide\" :style=\"`background: url(/site/data/images/medium/\${item.field_gallery[0]}) no-repeat center / cover`\">
\t\t<div class=\"swiper-wrapper splide__track\">
\t\t\t<div class=\"splide__list\">
\t\t\t\t<a :href=\"item.path\" v-for=\"img in item.field_gallery\" class=\"search-card__gallery-item splide__slide\">
\t\t\t\t\t<img :src=\"'/site/data/images/medium/' + img\">
\t\t\t\t</a> 
\t\t\t</div>
\t\t</div>

\t</div>
\t<div v-else class=\"search-card__gallery\">
\t\t<div  class=\"search-card__gallery-item search-card__gallery-item--noimage\">
\t\t\t<img src=\"/site/theme/images/noimage.png\">
\t\t</div>
\t</div>
\t<div class=\"search-card__info\">
\t\t<div class=\"search-card__text\">
\t\t\t<div class=\"search-card__title\">{{item.field_header}}</div>
\t\t\t<div v-if=\"item.field_address\" class=\"search-card__infoblock search-card__infoblock--address\">
\t\t\t\t<span class=\"search-card__infoblock-icon\">
\t\t\t\t\t<!--svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"19\" viewBox=\"0 0 12 19\" fill=\"none\">
\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.77347 0.122131C8.80285 0.122131 11.2564 2.59894 11.2564 5.65261C11.2564 8.24755 8.26216 14.7388 7.12029 17.1763C6.45274 18.6017 5.10396 18.6017 4.43445 17.1763C3.34333 14.8471 0.288574 8.06839 0.288574 5.65261C0.288574 2.59697 2.74409 0.122131 5.77152 0.122131L5.77347 0.122131ZM5.77347 2.18745C7.61413 2.18745 9.10539 3.69165 9.10539 5.54826C9.10539 7.40488 7.61413 8.90908 5.77347 8.90908C3.93281 8.90908 2.44154 7.40488 2.44154 5.54826C2.44154 3.69165 3.93281 2.18745 5.77347 2.18745Z\" fill=\"#14C5D0\"></path>
\t\t\t\t\t</svg-->
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"25\" viewBox=\"0 0 19 25\" fill=\"none\">
\t\t\t\t\t\t\t<path d=\"M10.1259 24.6906C10.0912 24.7253 10.0912 24.7253 10.0566 24.7599C10.022 24.7599 10.022 24.7945 9.98734 24.7945C9.95271 24.7945 9.91808 24.8292 9.88344 24.8292C9.84881 24.8638 9.77955 24.8638 9.74492 24.8638C9.71028 24.8638 9.64102 24.8638 9.60639 24.8984C9.57176 24.8984 9.57176 24.8984 9.53712 24.8984C9.50249 24.8984 9.43323 24.8984 9.39859 24.8638C9.36396 24.8638 9.2947 24.8292 9.26007 24.8292L9.15617 24.7945C9.12154 24.7945 9.08691 24.7599 9.08691 24.7599C9.05227 24.7253 9.05227 24.7253 9.01764 24.6906C8.22111 24.0326 7.4592 23.3054 6.6973 22.4742C5.97002 21.6777 5.27738 20.8119 4.61937 19.9114C3.996 19.0456 3.44188 18.1452 2.9224 17.2101C2.43756 16.3097 2.02197 15.3746 1.67565 14.4742C1.60639 14.2318 1.60639 14.024 1.71028 13.8162C1.81418 13.6084 1.98734 13.4352 2.19513 13.366C2.43756 13.2967 2.64535 13.2967 2.85314 13.4006C3.06093 13.5045 3.23409 13.6777 3.30336 13.8855C3.61505 14.7166 3.996 15.5824 4.44621 16.4136C4.89643 17.2794 5.45054 18.1106 6.03929 18.9417C6.5934 19.7383 7.21678 20.5002 7.84015 21.1928C8.39427 21.8162 8.98301 22.4049 9.57176 22.9244C10.4722 22.1279 11.3726 21.1582 12.2384 20.1192C13.1042 19.0456 13.9008 17.8681 14.5934 16.656C15.2514 15.4785 15.7709 14.2664 16.1172 13.0543C16.4289 11.9461 16.6367 10.8032 16.6367 9.69497C16.6367 8.72528 16.4635 7.82484 16.1172 6.99368C15.7709 6.12787 15.2514 5.36597 14.5934 4.70796C13.9354 4.04995 13.1735 3.53047 12.3077 3.18415C11.4765 2.83783 10.5761 2.66467 9.60639 2.66467C8.63669 2.66467 7.73626 2.83783 6.90509 3.18415C6.03929 3.53047 5.27738 4.04995 4.61937 4.70796C3.96137 5.36597 3.44189 6.12787 3.09556 6.99368C2.74924 7.82484 2.57608 8.72528 2.57608 9.69497V9.97203V10.2145L2.61072 10.4915L2.64535 10.7686C2.67998 11.011 2.61072 11.2188 2.43756 11.3919C2.29903 11.5651 2.09124 11.669 1.84881 11.7036C1.60639 11.7383 1.39859 11.669 1.22543 11.4958C1.05227 11.3573 0.948379 11.1495 0.913746 10.9071L0.879114 10.5954L0.844482 10.2837V9.97203V9.66034C0.844482 8.48285 1.08691 7.34 1.50249 6.30103C1.95271 5.22744 2.61072 4.25774 3.40725 3.46121C4.20379 2.66467 5.17349 2.00666 6.24708 1.55645C7.28604 1.14086 8.4289 0.898438 9.60639 0.898438C10.7839 0.898438 11.9267 1.14086 12.9657 1.55645C14.0393 2.00666 15.009 2.66467 15.8055 3.46121C16.6021 4.25774 17.2601 5.22744 17.7103 6.30103C18.1259 7.34 18.3683 8.48285 18.3683 9.66034C18.3683 10.9071 18.1605 12.1885 17.7795 13.4699C17.3986 14.8205 16.8099 16.1712 16.0826 17.4525C15.3207 18.8378 14.4202 20.1538 13.4159 21.366C12.377 22.6474 11.2341 23.7556 10.1259 24.7253V24.6906ZM9.57176 6.4742C10.0566 6.4742 10.5415 6.57809 10.9917 6.75125C11.3726 6.92441 11.7536 7.1322 12.0653 7.44389L12.1692 7.54779C12.5155 7.89411 12.7925 8.27506 12.9657 8.75991C13.1389 9.21013 13.2428 9.66034 13.2428 10.1798C13.2428 10.6647 13.1389 11.1495 12.9657 11.5997C12.7925 12.05 12.5155 12.4655 12.1692 12.8119C11.8228 13.1582 11.4419 13.4352 10.9917 13.6084C10.5415 13.7816 10.0912 13.8855 9.57176 13.8855C9.08691 13.8855 8.60206 13.7816 8.15184 13.6084C7.84015 13.4699 7.52847 13.2967 7.25141 13.0889L6.97435 12.8119C6.62803 12.4655 6.35098 12.0846 6.17782 11.5997C6.00466 11.1495 5.90076 10.6993 5.90076 10.1798C5.90076 9.69497 6.00466 9.21013 6.17782 8.75991C6.35098 8.30969 6.62803 7.89411 6.97435 7.58242C7.32067 7.2361 7.70163 6.95904 8.15184 6.78588C8.60206 6.61272 9.05227 6.50883 9.57176 6.50883V6.4742ZM10.8531 8.72528C10.68 8.58675 10.5068 8.44822 10.299 8.37896C10.0566 8.27506 9.81418 8.24043 9.57176 8.24043C9.2947 8.24043 9.05227 8.27506 8.84448 8.37896C8.60206 8.48285 8.39427 8.62138 8.22111 8.79454C8.04795 8.9677 7.90942 9.17549 7.80552 9.41792C7.70163 9.66034 7.66699 9.90277 7.66699 10.1452C7.66699 10.4222 7.70163 10.6647 7.80552 10.8725C7.90942 11.1149 8.04795 11.3227 8.22111 11.4958L8.29037 11.5651C8.46353 11.7036 8.63669 11.8422 8.84448 11.9461C9.08691 12.05 9.32933 12.0846 9.57176 12.0846C9.84881 12.0846 10.0912 12.05 10.299 11.9461C10.5415 11.8422 10.7492 11.7036 10.9224 11.5305C11.0956 11.3573 11.2341 11.1495 11.338 10.9071C11.4419 10.6647 11.4765 10.4222 11.4765 10.1798C11.4765 9.90277 11.4419 9.66034 11.338 9.45255C11.2341 9.21013 11.0956 9.00233 10.9224 8.82917L10.8531 8.75991V8.72528Z\" fill=\"#14C5D0\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t</span>
\t\t\t\t{{item.field_address}}
\t\t\t</div> 
\t\t\t<div v-if=\"item.field_prices\" class=\"search-card__infoblock search-card__infoblock--price\">
\t\t\t\t<span class=\"search-card__infoblock-icon\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"17\" height=\"17\" viewBox=\"0 0 17 17\" fill=\"none\">
\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M4.49301 4.41122C3.99972 4.95159 3.16428 4.96627 2.65314 4.45528C2.15566 3.95793 2.15671 3.1542 2.65419 2.65685C3.16533 2.14586 4.00077 2.1595 4.49406 2.69987C4.93172 3.17833 4.93067 3.93275 4.49301 4.41226V4.41122ZM5.98023 0.252989L2.38446 0.00536361C1.71065 -0.0408039 1.09456 0.214167 0.656896 0.65066L0.651648 0.655906C0.216084 1.0924 -0.0400071 1.70937 0.0051237 2.38299L0.250719 5.98196C0.303197 6.74582 0.629607 7.46457 1.17118 8.00599L9.84258 16.675C10.276 17.1083 10.9803 17.1083 11.4138 16.675L16.6741 11.4161C17.1086 10.9817 17.1086 10.2776 16.6741 9.8443L8.00166 1.17424C7.46114 0.633872 6.74325 0.307551 5.98023 0.254039V0.252989Z\" fill=\"#14C5D0\"/>
\t\t\t\t\t</svg>
\t\t\t\t</span>
\t\t\t\t {{item.field_prices}}₽
\t\t\t</div>
\t\t</div>
\t\t<div class=\"search-card__actions\">
\t\t\t<div class=\"search-card__action\">
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"search-card__action\">
\t\t\t\t<button class=\"ibtn\" @click.stop=\"showOnMap(item.field_coords)\">
\t\t\t\t\t<span>Начало маршрута</span>
\t\t\t\t\t<svg width=\"21\" height=\"27\" viewBox=\"0 0 21 27\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t<path d=\"M11.2511 26.7662C11.2122 26.8052 11.2122 26.8052 11.1732 26.8442C11.1342 26.8442 11.1342 26.8831 11.0953 26.8831C11.0563 26.8831 11.0174 26.9221 10.9784 26.9221C10.9394 26.961 10.8615 26.961 10.8226 26.961C10.7836 26.961 10.7057 26.961 10.6667 27C10.6278 27 10.6278 27 10.5888 27C10.5498 27 10.4719 27 10.4329 26.961C10.394 26.961 10.3161 26.9221 10.2771 26.9221L10.1602 26.8831C10.1213 26.8831 10.0823 26.8442 10.0823 26.8442C10.0433 26.8052 10.0433 26.8052 10.0044 26.7662C9.10827 26.026 8.25113 25.2078 7.39399 24.2727C6.5758 23.3766 5.79658 22.4026 5.05632 21.3896C4.35502 20.4156 3.73165 19.4026 3.14723 18.3506C2.60178 17.3377 2.13425 16.2857 1.74464 15.2727C1.66671 15 1.66671 14.7662 1.7836 14.5325C1.90048 14.2987 2.09528 14.1039 2.32905 14.026C2.60178 13.9481 2.83554 13.9481 3.06931 14.0649C3.30308 14.1818 3.49788 14.3766 3.5758 14.6104C3.92645 15.5455 4.35502 16.5195 4.86152 17.4545C5.36801 18.4286 5.99139 19.3636 6.65373 20.2987C7.2771 21.1948 7.9784 22.0519 8.6797 22.8312C9.30308 23.5325 9.96541 24.1948 10.6278 24.7792C11.6407 23.8831 12.6537 22.7922 13.6278 21.6234C14.6018 20.4156 15.4979 19.0909 16.2771 17.7273C17.0174 16.4026 17.6018 15.039 17.9914 13.6753C18.342 12.4286 18.5758 11.1429 18.5758 9.8961C18.5758 8.80519 18.381 7.79221 17.9914 6.85714C17.6018 5.88312 17.0174 5.02597 16.2771 4.28571C15.5368 3.54545 14.6797 2.96104 13.7057 2.57143C12.7706 2.18182 11.7576 1.98701 10.6667 1.98701C9.5758 1.98701 8.56282 2.18182 7.62775 2.57143C6.65373 2.96104 5.79658 3.54545 5.05632 4.28571C4.31606 5.02597 3.73165 5.88312 3.34204 6.85714C2.95243 7.79221 2.75762 8.80519 2.75762 9.8961V10.2078V10.4805L2.79658 10.7922L2.83554 11.1039C2.87451 11.3766 2.79658 11.6104 2.60178 11.8052C2.44593 12 2.21217 12.1169 1.93944 12.1558C1.66671 12.1948 1.43295 12.1169 1.23814 11.9221C1.04334 11.7662 0.926453 11.5325 0.887492 11.2597L0.848531 10.9091L0.80957 10.5584V10.2078V9.85714C0.80957 8.53247 1.0823 7.24675 1.54983 6.07792C2.05632 4.87013 2.79658 3.77922 3.69269 2.88312C4.58879 1.98701 5.6797 1.24675 6.88749 0.74026C8.05632 0.272727 9.34204 0 10.6667 0C11.9914 0 13.2771 0.272727 14.4459 0.74026C15.6537 1.24675 16.7446 1.98701 17.6407 2.88312C18.5368 3.77922 19.2771 4.87013 19.7836 6.07792C20.2511 7.24675 20.5239 8.53247 20.5239 9.85714C20.5239 11.2597 20.2901 12.7013 19.8615 14.1429C19.4329 15.6623 18.7706 17.1818 17.9524 18.6234C17.0953 20.1818 16.0823 21.6623 14.9524 23.026C13.7836 24.4675 12.4979 25.7143 11.2511 26.8052V26.7662ZM10.6278 6.27273C11.1732 6.27273 11.7187 6.38961 12.2252 6.58442C12.6537 6.77922 13.0823 7.01299 13.4329 7.36364L13.5498 7.48052C13.9394 7.87013 14.2511 8.2987 14.4459 8.84416C14.6407 9.35065 14.7576 9.85714 14.7576 10.4416C14.7576 10.987 14.6407 11.5325 14.4459 12.039C14.2511 12.5455 13.9394 13.013 13.5498 13.4026C13.1602 13.7922 12.7316 14.1039 12.2252 14.2987C11.7187 14.4935 11.2122 14.6104 10.6278 14.6104C10.0823 14.6104 9.53684 14.4935 9.03035 14.2987C8.6797 14.1429 8.32905 13.9481 8.01736 13.7143L7.70567 13.4026C7.31606 13.013 7.00438 12.5844 6.80957 12.039C6.61476 11.5325 6.49788 11.026 6.49788 10.4416C6.49788 9.8961 6.61476 9.35065 6.80957 8.84416C7.00438 8.33766 7.31606 7.87013 7.70567 7.51948C8.09528 7.12987 8.52386 6.81818 9.03035 6.62338C9.53684 6.42857 10.0433 6.31169 10.6278 6.31169V6.27273ZM12.0693 8.80519C11.8745 8.64935 11.6797 8.49351 11.4459 8.41559C11.1732 8.2987 10.9005 8.25974 10.6278 8.25974C10.3161 8.25974 10.0433 8.2987 9.80957 8.41559C9.53684 8.53247 9.30308 8.68831 9.10827 8.88312C8.91347 9.07792 8.75762 9.31169 8.64074 9.58442C8.52386 9.85714 8.4849 10.1299 8.4849 10.4026C8.4849 10.7143 8.52386 10.987 8.64074 11.2208C8.75762 11.4935 8.91347 11.7273 9.10827 11.9221L9.18619 12C9.381 12.1558 9.5758 12.3117 9.80957 12.4286C10.0823 12.5455 10.355 12.5844 10.6278 12.5844C10.9394 12.5844 11.2122 12.5455 11.4459 12.4286C11.7187 12.3117 11.9524 12.1558 12.1472 11.961C12.342 11.7662 12.4979 11.5325 12.6148 11.2597C12.7316 10.987 12.7706 10.7143 12.7706 10.4416C12.7706 10.1299 12.7316 9.85714 12.6148 9.62338C12.4979 9.35065 12.342 9.11688 12.1472 8.92208L12.0693 8.84416V8.80519Z\" fill=\"#E85768\"/>
\t\t\t\t\t</svg>\t
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
\t\t\t\t\t\t</transition-group>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"search-item search-item--map\">
\t\t\t<span class=\"search-switchmode\" @click=\"scrollToList\">Список</span>
\t\t\t<div id=\"map\" style=\"width: 100%; height: calc(100vh);\"></div>
\t\t</div>
\t</div>
</section>
<script src=\"https://api-maps.yandex.ru/2.1/?apikey=b303c4d1-e74e-4a8d-942f-15e384f9386b&lang=ru_RU\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\t
    ymaps.ready(init);
    function init(){
        // Создание карты.
\t\twindow.myMap = new ymaps.Map('map', {
\t\t\tcenter: [";
            // line 232
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent_page", array()), "field_coords", array()), "html", null, true));
            echo "],
\t\t\tcontrols: ['zoomControl'],
\t\t\tzoom: ";
            // line 234
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent_page", array()), "field_initial_zoom", array())) ? ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent_page", array()), "field_initial_zoom", array())) : (12)), "html", null, true));
            echo "
        }, {
            searchControlProvider: 'yandex#search'
        })
\t\t
        var\tobjectManager = new ymaps.ObjectManager({
\t\t\tclusterize: true,
\t\t\tgridSize: 32,
\t\t\t//clusterDisableClickZoom: true,
            //geoObjectOpenBalloonOnClick: false,
            clusterOpenBalloonOnClick: false
\t\t});
\t\t
\t\t
\t\t
\t\tobjectManager.objects.options.set('preset', 'islands#redStretchyIcon')
\t\tobjectManager.clusters.options.set('preset', 'islands#redClusterIcons')
\t\t
\t\t//console.log(objectManager.objects)
\t\t
\t\tfunction onObjectEvent (e) {
\t\t\tvar objectId = e.get('objectId');
\t\t\tif (e.get('type') == 'mouseenter') {
\t\t\t\t// Метод setObjectOptions позволяет задавать опции объекта \"на лету\".
\t\t\t\tobjectManager.objects.setObjectOptions(objectId, {
\t\t\t\t\tpreset: 'islands#yellowCircleDotIcon'
\t\t\t\t});
\t\t\t} else {
\t\t\t\tobjectManager.objects.setObjectOptions(objectId, {
\t\t\t\t\tpreset: 'islands#redCircleDotIcon'
\t\t\t\t});
\t\t\t}
\t\t}

\t\tfunction onClusterEvent (e) {
\t\t\tvar objectId = e.get('objectId');
\t\t\tif (e.get('type') == 'mouseenter') {
\t\t\t\tobjectManager.clusters.setClusterOptions(objectId, {
\t\t\t\t\tpreset: 'islands#yellowClusterIcons'
\t\t\t\t});
\t\t\t} else {
\t\t\t\tobjectManager.clusters.setClusterOptions(objectId, {
\t\t\t\t\tpreset: 'islands#redClusterIcons'
\t\t\t\t});
\t\t\t}
\t\t}

\t\tobjectManager.objects.events.add(['mouseenter', 'mouseleave'], onObjectEvent);
\t\tobjectManager.clusters.events.add(['mouseenter', 'mouseleave'], onClusterEvent);
\t\t
\t\tconst json = { 
\t\t   \"type\":\"FeatureCollection\",
\t\t   \"features\":[ 
\t\t\t\t{ 
\t\t\t\t\t\"type\":\"Feature\",
\t\t\t\t\t\"id\":0,
\t\t\t\t\t\"geometry\":{ 
\t\t\t\t\t\"type\":\"Point\",
\t\t\t\t\t\"coordinates\":[ 
\t\t\t\t\t\t53.215555,
\t\t\t\t\t    50.187128
\t\t\t\t\t]
\t\t\t\t\t},
\t\t\t\t\t\"properties\":{ 
\t\t\t\t\t\t\"balloonContentHeader\":\"<font size=3><b><a target='_blank' href='https://yandex.ru'>Здесь может быть ваша ссылка</a></b></font>\",
\t\t\t\t\t\t\"balloonContentBody\":\"<p>Ваше имя: <input name='login'></p><p><em>Телефон в формате 2xxx-xxx:</em>  <input></p><p><input type='submit' value='Отправить'></p>\",
\t\t\t\t\t\t\"balloonContentFooter\":\"<font size=1>Информация предоставлена: </font> <strong>этим балуном</strong>\",
\t\t\t\t\t\t\"clusterCaption\":\"<strong><s>Еще</s> одна</strong> метка\",
\t\t\t\t\t\t\"hintContent\":\"<strong>Текст  <s>подсказки</s></strong>\"
\t\t\t\t\t}
\t\t\t\t}
\t\t  \t]
\t\t }
\t\t
\t\t
\t\t//objectManager.objects.options.set('preset', 'islands#greenDotIcon');
\t\t//objectManager.clusters.options.set('preset', 'islands#greenClusterIcons');
\t\tmyMap.geoObjects.add(objectManager);

\t\t
\t\t//objectManager.add(json);
\t\t
\t\t
\t\t
\t\t
\t\tdocument.addEventListener('redrawMap', function(e) {
\t\t\tobjectManager.removeAll()
\t\t\t//console.log(e.detail)
\t\t\tlet objects = e.detail
\t\t\t
\t\t\t/*
\t\t\tobjects.searchInside(myMap)
        // И затем добавим найденные объекты на карту.
\t\t\t\t.addToMap(myMap);

\t\t\tmyMap.events.add('boundschange', function () {
\t\t\t\t// После каждого сдвига карты будем смотреть, какие объекты попадают в видимую область.
\t\t\t\tvar visibleObjects = objects.searchInside(myMap).objectManager.add(myMap);
\t\t\t\t// Оставшиеся объекты будем удалять с карты.
\t\t\t\tobjects.remove(visibleObjects).removeFromMap(myMap);
\t\t\t});
\t\t\t*/
\t\t\t
\t\t\tobjectManager.add(e.detail);
\t\t\t//console.log(objectManager.objects)
\t\t\t/*myMap.geoObjects.add(new ymaps.Placemark([53.201717, 50.141131], {
            balloonContent: 'цвет <strong>влюбленной жабы</strong>'
        }, {
            preset: 'islands#circleIcon',
            iconColor: '#3caa3c'
        }));*/
\t\t})
\t\t
\t\t
    }
\t
\t
\t
</script>
<!--script src=\"https://unpkg.com/swiper/swiper-bundle.js\"></script-->

<script src=\"https://cdn.jsdelivr.net/npm/vue-slider-component@3.1.4/dist/vue-slider-component.umd.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js\"></script>
<script src=\"/site/theme/js/search_twig.js\"></script>
";
            // line 358
            $this->loadTemplate("footer", "layouts.routes", 358)->display($context);
            // line 359
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "layouts.routes";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  523 => 359,  521 => 358,  394 => 234,  389 => 232,  301 => 146,  285 => 135,  281 => 134,  235 => 90,  233 => 89,  223 => 82,  183 => 45,  175 => 44,  171 => 42,  169 => 41,  166 => 40,  156 => 37,  153 => 36,  151 => 35,  148 => 34,  145 => 33,  139 => 32,  136 => 31,  133 => 30,  130 => 29,  127 => 28,  122 => 27,  120 => 26,  117 => 25,  114 => 24,  112 => 23,  109 => 22,  103 => 19,  100 => 18,  94 => 17,  91 => 16,  85 => 15,  82 => 14,  79 => 13,  76 => 12,  71 => 11,  68 => 10,  64 => 9,  61 => 8,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% if request.input.json == 'yes' %}*/
/* */
/* 	{% set items = page.active_sub_pages %}*/
/* */
/* 	{% if request.input.query %}*/
/* 		{% set query = request.input.query|split(' ') %}*/
/* 		{% set results = [] %}*/
/* */
/* 		{% for item in items %}*/
/* 			{% if query|length > 0 %}*/
/* 				{% for que in query %}*/
/* 					{% if que|slice(0, -1)|length >= 3 and que|slice(0, -1)|lower in item.field_header|lower %}*/
/* 						{% set results = results|merge([item]) %}*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* */
/* 		{% set items = results %}		*/
/* */
/* 	{% endif %}*/
/* */
/* 	{% set uniqResults = [] %}*/
/* 	{% set uniqIDs = [] %}*/
/* */
/* 	{% if items|length > 0 %}*/
/* 		{% for item in items %}*/
/* 			{% if item.id not in uniqIDs %}*/
/* 				{% set uniqResults = uniqResults|merge([item]) %}*/
/* 				{% set uniqIDs = uniqIDs|merge([item.id]) %}*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	{% endif %}*/
/* */
/* 	{% set items = uniqResults %}*/
/* */
/* <div id="ajax-answer" data-answer="{$ uniqResults|json_encode() $}" {% if results|length == 0 and query[0] != '' %}data-empty="1"{% endif %}></div>*/
/* */
/* {% else %}*/
/* */
/* {% include 'header' %}*/
/* */
/* */
/* <div class="data-pages" style="display: none;" data-answer="{$ page.active_sub_pages|json_encode() $}" {% if page.active_sub_pages|length == 0 and query[0] != '' %}data-empty="1"{% endif %}></div>*/
/* <section class="search" id="v-search-root" data-find-inset="1" data-lid="{$ page.layout_id $}">*/
/* 	<div class="search__wrapper" :class="{'search__wrapper--fw': isFullWidthLayout}">*/
/* 		<div v-show="isSearchShowlist" class="search-item search-item--list">*/
/* 			<div class="search-filters-cat" :class="{'search-filters-cat--active': isCatFiltersShow}">*/
/* 				<div class="search-filters-cat__actions">*/
/* 					<button class="icon-btn filter_btn" @click="isCatFiltersShow = !isCatFiltersShow">*/
/* 						<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none"><path d="M18.3235 2.62752C18.714 2.23699 18.714 1.60383 18.3235 1.2133C17.933 0.822779 17.2998 0.822779 16.9093 1.2133L9.58343 8.53918L2.25764 1.21339C1.86712 0.822866 1.23396 0.822865 0.84343 1.21339C0.452906 1.60391 0.452906 2.23708 0.84343 2.6276L8.16922 9.95339L0.843499 17.2791C0.452975 17.6696 0.452974 18.3028 0.843499 18.6933C1.23402 19.0838 1.86719 19.0838 2.25771 18.6933L9.58343 11.3676L16.9092 18.6934C17.2998 19.0839 17.9329 19.0839 18.3235 18.6934C18.714 18.3029 18.714 17.6697 18.3235 17.2792L10.9976 9.95339L18.3235 2.62752Z" fill="#2D2727"/></svg>*/
/* 					</button>*/
/* 					<button class="search-filters-btn-showitems" :disabled="filteredItems.length == 0" @click="isCatFiltersShow = !isCatFiltersShow">*/
/* 						<span v-if="filteredItems.length != 0">Показать {{filteredItems.length}} элементов</span>*/
/* 						<span v-else>0 элементов</span>*/
/* 					</button>*/
/* 				</div>*/
/* 				<div class="serch-filters-main-cat__wrapper">*/
/* 					<div class="filters__wrapper">*/
/* 						<div class="filter__group">*/
/* 							<div class="filter filter--routes1-type">*/
/* 								<div class="filter__title">Тип</div>*/
/* 								<div class="filter-radios">*/
/* 									<div class="filter-radio">*/
/* 										<input type="radio" value="" name="cat-filter-routes1-type" @change="selectedCatFilters.routes1.type.items = []" id="cat-filter-routes1-type-0">*/
/* 										<label for="cat-filter-routes1-type-0">Все</label>*/
/* 									</div>*/
/* 									<div class="filter-radio" v-for="(item,i) in catFilters.routes1.types">*/
/* 										<input type="radio" :value="item.value" name="cat-filter-routes1-type" @change="selectedCatFilters.routes1.type.items = [item.value]" :id="`cat-filter-routes1-type-${i + 1}`">*/
/* 										<label :for="`cat-filter-routes1-type-${i + 1}`">{{item.name}}</label>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="search-main">*/
/* 				<div class="search-top">*/
/* 					<div class="cont">*/
/* 						<h1 style="font-size:24px; padding-left: 15px; font-weight: 100; text-transform: uppercase;">{$ page.field_header $}</h1>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="search-totop" @click="scrollToMap">Карта</div>*/
/* 				<div class="search-filters">*/
/* 					<div class="cont">*/
/* 						<div class="flexer flexer--jcb flexer--aic">*/
/* 							{% include 'cityswitcher' %}*/
/* 							<div>*/
/* 							<button class="icon-btn filter_btn" @click="isCatFiltersShow = !isCatFiltersShow">*/
/* 								<svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" viewBox="0 0 22 18" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.259521 3.46436C0.259521 2.91207 0.707237 2.46436 1.25952 2.46436H20.2595C20.8118 2.46436 21.2595 2.91207 21.2595 3.46436C21.2595 4.01664 20.8118 4.46436 20.2595 4.46436H1.25952C0.707237 4.46436 0.259521 4.01664 0.259521 3.46436Z" fill="#2D2727"/><line x1="1.25952" y1="14.4644" x2="20.2595" y2="14.4644" stroke="#2D2727" stroke-width="2" stroke-linecap="round"/><circle cx="7.25952" cy="14.4644" r="2.95605" fill="#2D2727"/><circle cx="14.3887" cy="3.46436" r="2.95605" fill="#2D2727"/></svg>*/
/* 							</button>*/
/* 							</div>	*/
/* 						</div>*/
/* 						<div class="filters">*/
/* 							<div class="filters__wrapper">*/
/* 								<div class="filter__group">*/
/* 									<div class="filter filter--tags">*/
/* 										<div class="tagsearch__input">*/
/* 											<vue-tags-input*/
/* 												v-model="tag"*/
/* 												:tags="tags"*/
/* 												:autocomplete-items="filteredTags"*/
/* 												@tags-changed="newTags => tags = newTags"*/
/* 												placeholder="Поиск..."*/
/* 											/>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<!--div class="filter__group filter__group--flex">*/
/* 									<div class="filter filter--date">*/
/* 										<v-date-picker */
/* 											mode='range' */
/* 											:min-date='new Date()'*/
/* 											v-model='range'*/
/* 										/>*/
/* 									</div>*/
/* 									<div class="filter filter--sort">*/
/* 										<select v-model="sortType" class="form-input form-input--select">*/
/* 											<option value="0" disabled selected>Сортировка</option>*/
/* 											<option value="priceUp">Цена ↑</option>*/
/* 											<option value="priceDown">Цена ↓</option>*/
/* 										</select>*/
/* 									</div>*/
/* 								</div-->*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 					</div>*/
/* 				</div>*/
/* 				<div class="search-list search-list--skeleton" v-if="!isAppLoaded">*/
/* 					<div class="search-results__wrapper">*/
/* 						{% for item in 1..4 %}*/
/* 						<div class="search-card search-card--skeleton">*/
/* 							<div class="search-card__gallery"></div>*/
/* 							<div class="search-card__info">*/
/* 								<div class="search-card__text">*/
/* 									<div class="search-card__title"></div>*/
/* 									<div class="search-card__infoblock search-card__infoblock--address"> </div> */
/* 								</div>*/
/* 								<div class="search-card__actions"></div>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% endfor %}*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="search-list" v-cloak>*/
/* 					<div class="cont">*/
/* 						<div class="search-warning" v-show="filteredItems.length == 0" v-cloak>Результатов по вашему запросу нет</div>*/
/* 						<transition-group */
/* 							mode="out-in" */
/* 							name="search-transition2" */
/* 							tag="div" */
/* 							class="search-results__wrapper"*/
/* 						>*/
/* 							<div*/
/* 	v-for="item in pageItems"*/
/* 	:key="item.id" */
/* 	class="search-card">*/
/* 	<div v-if="item.field_gallery.length > 0" class="search-card__gallery splide" :style="`background: url(/site/data/images/medium/${item.field_gallery[0]}) no-repeat center / cover`">*/
/* 		<div class="swiper-wrapper splide__track">*/
/* 			<div class="splide__list">*/
/* 				<a :href="item.path" v-for="img in item.field_gallery" class="search-card__gallery-item splide__slide">*/
/* 					<img :src="'/site/data/images/medium/' + img">*/
/* 				</a> */
/* 			</div>*/
/* 		</div>*/
/* */
/* 	</div>*/
/* 	<div v-else class="search-card__gallery">*/
/* 		<div  class="search-card__gallery-item search-card__gallery-item--noimage">*/
/* 			<img src="/site/theme/images/noimage.png">*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="search-card__info">*/
/* 		<div class="search-card__text">*/
/* 			<div class="search-card__title">{{item.field_header}}</div>*/
/* 			<div v-if="item.field_address" class="search-card__infoblock search-card__infoblock--address">*/
/* 				<span class="search-card__infoblock-icon">*/
/* 					<!--svg xmlns="http://www.w3.org/2000/svg" width="12" height="19" viewBox="0 0 12 19" fill="none">*/
/* 						<path fill-rule="evenodd" clip-rule="evenodd" d="M5.77347 0.122131C8.80285 0.122131 11.2564 2.59894 11.2564 5.65261C11.2564 8.24755 8.26216 14.7388 7.12029 17.1763C6.45274 18.6017 5.10396 18.6017 4.43445 17.1763C3.34333 14.8471 0.288574 8.06839 0.288574 5.65261C0.288574 2.59697 2.74409 0.122131 5.77152 0.122131L5.77347 0.122131ZM5.77347 2.18745C7.61413 2.18745 9.10539 3.69165 9.10539 5.54826C9.10539 7.40488 7.61413 8.90908 5.77347 8.90908C3.93281 8.90908 2.44154 7.40488 2.44154 5.54826C2.44154 3.69165 3.93281 2.18745 5.77347 2.18745Z" fill="#14C5D0"></path>*/
/* 					</svg-->*/
/* 						<svg xmlns="http://www.w3.org/2000/svg" width="19" height="25" viewBox="0 0 19 25" fill="none">*/
/* 							<path d="M10.1259 24.6906C10.0912 24.7253 10.0912 24.7253 10.0566 24.7599C10.022 24.7599 10.022 24.7945 9.98734 24.7945C9.95271 24.7945 9.91808 24.8292 9.88344 24.8292C9.84881 24.8638 9.77955 24.8638 9.74492 24.8638C9.71028 24.8638 9.64102 24.8638 9.60639 24.8984C9.57176 24.8984 9.57176 24.8984 9.53712 24.8984C9.50249 24.8984 9.43323 24.8984 9.39859 24.8638C9.36396 24.8638 9.2947 24.8292 9.26007 24.8292L9.15617 24.7945C9.12154 24.7945 9.08691 24.7599 9.08691 24.7599C9.05227 24.7253 9.05227 24.7253 9.01764 24.6906C8.22111 24.0326 7.4592 23.3054 6.6973 22.4742C5.97002 21.6777 5.27738 20.8119 4.61937 19.9114C3.996 19.0456 3.44188 18.1452 2.9224 17.2101C2.43756 16.3097 2.02197 15.3746 1.67565 14.4742C1.60639 14.2318 1.60639 14.024 1.71028 13.8162C1.81418 13.6084 1.98734 13.4352 2.19513 13.366C2.43756 13.2967 2.64535 13.2967 2.85314 13.4006C3.06093 13.5045 3.23409 13.6777 3.30336 13.8855C3.61505 14.7166 3.996 15.5824 4.44621 16.4136C4.89643 17.2794 5.45054 18.1106 6.03929 18.9417C6.5934 19.7383 7.21678 20.5002 7.84015 21.1928C8.39427 21.8162 8.98301 22.4049 9.57176 22.9244C10.4722 22.1279 11.3726 21.1582 12.2384 20.1192C13.1042 19.0456 13.9008 17.8681 14.5934 16.656C15.2514 15.4785 15.7709 14.2664 16.1172 13.0543C16.4289 11.9461 16.6367 10.8032 16.6367 9.69497C16.6367 8.72528 16.4635 7.82484 16.1172 6.99368C15.7709 6.12787 15.2514 5.36597 14.5934 4.70796C13.9354 4.04995 13.1735 3.53047 12.3077 3.18415C11.4765 2.83783 10.5761 2.66467 9.60639 2.66467C8.63669 2.66467 7.73626 2.83783 6.90509 3.18415C6.03929 3.53047 5.27738 4.04995 4.61937 4.70796C3.96137 5.36597 3.44189 6.12787 3.09556 6.99368C2.74924 7.82484 2.57608 8.72528 2.57608 9.69497V9.97203V10.2145L2.61072 10.4915L2.64535 10.7686C2.67998 11.011 2.61072 11.2188 2.43756 11.3919C2.29903 11.5651 2.09124 11.669 1.84881 11.7036C1.60639 11.7383 1.39859 11.669 1.22543 11.4958C1.05227 11.3573 0.948379 11.1495 0.913746 10.9071L0.879114 10.5954L0.844482 10.2837V9.97203V9.66034C0.844482 8.48285 1.08691 7.34 1.50249 6.30103C1.95271 5.22744 2.61072 4.25774 3.40725 3.46121C4.20379 2.66467 5.17349 2.00666 6.24708 1.55645C7.28604 1.14086 8.4289 0.898438 9.60639 0.898438C10.7839 0.898438 11.9267 1.14086 12.9657 1.55645C14.0393 2.00666 15.009 2.66467 15.8055 3.46121C16.6021 4.25774 17.2601 5.22744 17.7103 6.30103C18.1259 7.34 18.3683 8.48285 18.3683 9.66034C18.3683 10.9071 18.1605 12.1885 17.7795 13.4699C17.3986 14.8205 16.8099 16.1712 16.0826 17.4525C15.3207 18.8378 14.4202 20.1538 13.4159 21.366C12.377 22.6474 11.2341 23.7556 10.1259 24.7253V24.6906ZM9.57176 6.4742C10.0566 6.4742 10.5415 6.57809 10.9917 6.75125C11.3726 6.92441 11.7536 7.1322 12.0653 7.44389L12.1692 7.54779C12.5155 7.89411 12.7925 8.27506 12.9657 8.75991C13.1389 9.21013 13.2428 9.66034 13.2428 10.1798C13.2428 10.6647 13.1389 11.1495 12.9657 11.5997C12.7925 12.05 12.5155 12.4655 12.1692 12.8119C11.8228 13.1582 11.4419 13.4352 10.9917 13.6084C10.5415 13.7816 10.0912 13.8855 9.57176 13.8855C9.08691 13.8855 8.60206 13.7816 8.15184 13.6084C7.84015 13.4699 7.52847 13.2967 7.25141 13.0889L6.97435 12.8119C6.62803 12.4655 6.35098 12.0846 6.17782 11.5997C6.00466 11.1495 5.90076 10.6993 5.90076 10.1798C5.90076 9.69497 6.00466 9.21013 6.17782 8.75991C6.35098 8.30969 6.62803 7.89411 6.97435 7.58242C7.32067 7.2361 7.70163 6.95904 8.15184 6.78588C8.60206 6.61272 9.05227 6.50883 9.57176 6.50883V6.4742ZM10.8531 8.72528C10.68 8.58675 10.5068 8.44822 10.299 8.37896C10.0566 8.27506 9.81418 8.24043 9.57176 8.24043C9.2947 8.24043 9.05227 8.27506 8.84448 8.37896C8.60206 8.48285 8.39427 8.62138 8.22111 8.79454C8.04795 8.9677 7.90942 9.17549 7.80552 9.41792C7.70163 9.66034 7.66699 9.90277 7.66699 10.1452C7.66699 10.4222 7.70163 10.6647 7.80552 10.8725C7.90942 11.1149 8.04795 11.3227 8.22111 11.4958L8.29037 11.5651C8.46353 11.7036 8.63669 11.8422 8.84448 11.9461C9.08691 12.05 9.32933 12.0846 9.57176 12.0846C9.84881 12.0846 10.0912 12.05 10.299 11.9461C10.5415 11.8422 10.7492 11.7036 10.9224 11.5305C11.0956 11.3573 11.2341 11.1495 11.338 10.9071C11.4419 10.6647 11.4765 10.4222 11.4765 10.1798C11.4765 9.90277 11.4419 9.66034 11.338 9.45255C11.2341 9.21013 11.0956 9.00233 10.9224 8.82917L10.8531 8.75991V8.72528Z" fill="#14C5D0"/>*/
/* 						</svg>*/
/* 				</span>*/
/* 				{{item.field_address}}*/
/* 			</div> */
/* 			<div v-if="item.field_prices" class="search-card__infoblock search-card__infoblock--price">*/
/* 				<span class="search-card__infoblock-icon">*/
/* 					<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">*/
/* 						<path fill-rule="evenodd" clip-rule="evenodd" d="M4.49301 4.41122C3.99972 4.95159 3.16428 4.96627 2.65314 4.45528C2.15566 3.95793 2.15671 3.1542 2.65419 2.65685C3.16533 2.14586 4.00077 2.1595 4.49406 2.69987C4.93172 3.17833 4.93067 3.93275 4.49301 4.41226V4.41122ZM5.98023 0.252989L2.38446 0.00536361C1.71065 -0.0408039 1.09456 0.214167 0.656896 0.65066L0.651648 0.655906C0.216084 1.0924 -0.0400071 1.70937 0.0051237 2.38299L0.250719 5.98196C0.303197 6.74582 0.629607 7.46457 1.17118 8.00599L9.84258 16.675C10.276 17.1083 10.9803 17.1083 11.4138 16.675L16.6741 11.4161C17.1086 10.9817 17.1086 10.2776 16.6741 9.8443L8.00166 1.17424C7.46114 0.633872 6.74325 0.307551 5.98023 0.254039V0.252989Z" fill="#14C5D0"/>*/
/* 					</svg>*/
/* 				</span>*/
/* 				 {{item.field_prices}}₽*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="search-card__actions">*/
/* 			<div class="search-card__action">*/
/* 				*/
/* 			</div>*/
/* 			<div class="search-card__action">*/
/* 				<button class="ibtn" @click.stop="showOnMap(item.field_coords)">*/
/* 					<span>Начало маршрута</span>*/
/* 					<svg width="21" height="27" viewBox="0 0 21 27" fill="none" xmlns="http://www.w3.org/2000/svg">*/
/* 						<path d="M11.2511 26.7662C11.2122 26.8052 11.2122 26.8052 11.1732 26.8442C11.1342 26.8442 11.1342 26.8831 11.0953 26.8831C11.0563 26.8831 11.0174 26.9221 10.9784 26.9221C10.9394 26.961 10.8615 26.961 10.8226 26.961C10.7836 26.961 10.7057 26.961 10.6667 27C10.6278 27 10.6278 27 10.5888 27C10.5498 27 10.4719 27 10.4329 26.961C10.394 26.961 10.3161 26.9221 10.2771 26.9221L10.1602 26.8831C10.1213 26.8831 10.0823 26.8442 10.0823 26.8442C10.0433 26.8052 10.0433 26.8052 10.0044 26.7662C9.10827 26.026 8.25113 25.2078 7.39399 24.2727C6.5758 23.3766 5.79658 22.4026 5.05632 21.3896C4.35502 20.4156 3.73165 19.4026 3.14723 18.3506C2.60178 17.3377 2.13425 16.2857 1.74464 15.2727C1.66671 15 1.66671 14.7662 1.7836 14.5325C1.90048 14.2987 2.09528 14.1039 2.32905 14.026C2.60178 13.9481 2.83554 13.9481 3.06931 14.0649C3.30308 14.1818 3.49788 14.3766 3.5758 14.6104C3.92645 15.5455 4.35502 16.5195 4.86152 17.4545C5.36801 18.4286 5.99139 19.3636 6.65373 20.2987C7.2771 21.1948 7.9784 22.0519 8.6797 22.8312C9.30308 23.5325 9.96541 24.1948 10.6278 24.7792C11.6407 23.8831 12.6537 22.7922 13.6278 21.6234C14.6018 20.4156 15.4979 19.0909 16.2771 17.7273C17.0174 16.4026 17.6018 15.039 17.9914 13.6753C18.342 12.4286 18.5758 11.1429 18.5758 9.8961C18.5758 8.80519 18.381 7.79221 17.9914 6.85714C17.6018 5.88312 17.0174 5.02597 16.2771 4.28571C15.5368 3.54545 14.6797 2.96104 13.7057 2.57143C12.7706 2.18182 11.7576 1.98701 10.6667 1.98701C9.5758 1.98701 8.56282 2.18182 7.62775 2.57143C6.65373 2.96104 5.79658 3.54545 5.05632 4.28571C4.31606 5.02597 3.73165 5.88312 3.34204 6.85714C2.95243 7.79221 2.75762 8.80519 2.75762 9.8961V10.2078V10.4805L2.79658 10.7922L2.83554 11.1039C2.87451 11.3766 2.79658 11.6104 2.60178 11.8052C2.44593 12 2.21217 12.1169 1.93944 12.1558C1.66671 12.1948 1.43295 12.1169 1.23814 11.9221C1.04334 11.7662 0.926453 11.5325 0.887492 11.2597L0.848531 10.9091L0.80957 10.5584V10.2078V9.85714C0.80957 8.53247 1.0823 7.24675 1.54983 6.07792C2.05632 4.87013 2.79658 3.77922 3.69269 2.88312C4.58879 1.98701 5.6797 1.24675 6.88749 0.74026C8.05632 0.272727 9.34204 0 10.6667 0C11.9914 0 13.2771 0.272727 14.4459 0.74026C15.6537 1.24675 16.7446 1.98701 17.6407 2.88312C18.5368 3.77922 19.2771 4.87013 19.7836 6.07792C20.2511 7.24675 20.5239 8.53247 20.5239 9.85714C20.5239 11.2597 20.2901 12.7013 19.8615 14.1429C19.4329 15.6623 18.7706 17.1818 17.9524 18.6234C17.0953 20.1818 16.0823 21.6623 14.9524 23.026C13.7836 24.4675 12.4979 25.7143 11.2511 26.8052V26.7662ZM10.6278 6.27273C11.1732 6.27273 11.7187 6.38961 12.2252 6.58442C12.6537 6.77922 13.0823 7.01299 13.4329 7.36364L13.5498 7.48052C13.9394 7.87013 14.2511 8.2987 14.4459 8.84416C14.6407 9.35065 14.7576 9.85714 14.7576 10.4416C14.7576 10.987 14.6407 11.5325 14.4459 12.039C14.2511 12.5455 13.9394 13.013 13.5498 13.4026C13.1602 13.7922 12.7316 14.1039 12.2252 14.2987C11.7187 14.4935 11.2122 14.6104 10.6278 14.6104C10.0823 14.6104 9.53684 14.4935 9.03035 14.2987C8.6797 14.1429 8.32905 13.9481 8.01736 13.7143L7.70567 13.4026C7.31606 13.013 7.00438 12.5844 6.80957 12.039C6.61476 11.5325 6.49788 11.026 6.49788 10.4416C6.49788 9.8961 6.61476 9.35065 6.80957 8.84416C7.00438 8.33766 7.31606 7.87013 7.70567 7.51948C8.09528 7.12987 8.52386 6.81818 9.03035 6.62338C9.53684 6.42857 10.0433 6.31169 10.6278 6.31169V6.27273ZM12.0693 8.80519C11.8745 8.64935 11.6797 8.49351 11.4459 8.41559C11.1732 8.2987 10.9005 8.25974 10.6278 8.25974C10.3161 8.25974 10.0433 8.2987 9.80957 8.41559C9.53684 8.53247 9.30308 8.68831 9.10827 8.88312C8.91347 9.07792 8.75762 9.31169 8.64074 9.58442C8.52386 9.85714 8.4849 10.1299 8.4849 10.4026C8.4849 10.7143 8.52386 10.987 8.64074 11.2208C8.75762 11.4935 8.91347 11.7273 9.10827 11.9221L9.18619 12C9.381 12.1558 9.5758 12.3117 9.80957 12.4286C10.0823 12.5455 10.355 12.5844 10.6278 12.5844C10.9394 12.5844 11.2122 12.5455 11.4459 12.4286C11.7187 12.3117 11.9524 12.1558 12.1472 11.961C12.342 11.7662 12.4979 11.5325 12.6148 11.2597C12.7316 10.987 12.7706 10.7143 12.7706 10.4416C12.7706 10.1299 12.7316 9.85714 12.6148 9.62338C12.4979 9.35065 12.342 9.11688 12.1472 8.92208L12.0693 8.84416V8.80519Z" fill="#E85768"/>*/
/* 					</svg>	*/
/* 				</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* 						</transition-group>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="search-item search-item--map">*/
/* 			<span class="search-switchmode" @click="scrollToList">Список</span>*/
/* 			<div id="map" style="width: 100%; height: calc(100vh);"></div>*/
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* <script src="https://api-maps.yandex.ru/2.1/?apikey=b303c4d1-e74e-4a8d-942f-15e384f9386b&lang=ru_RU" type="text/javascript"></script>*/
/* <script type="text/javascript">*/
/* 	*/
/*     ymaps.ready(init);*/
/*     function init(){*/
/*         // Создание карты.*/
/* 		window.myMap = new ymaps.Map('map', {*/
/* 			center: [{$ page.parent_page.field_coords $}],*/
/* 			controls: ['zoomControl'],*/
/* 			zoom: {$ page.parent_page.field_initial_zoom ? page.parent_page.field_initial_zoom : 12 $}*/
/*         }, {*/
/*             searchControlProvider: 'yandex#search'*/
/*         })*/
/* 		*/
/*         var	objectManager = new ymaps.ObjectManager({*/
/* 			clusterize: true,*/
/* 			gridSize: 32,*/
/* 			//clusterDisableClickZoom: true,*/
/*             //geoObjectOpenBalloonOnClick: false,*/
/*             clusterOpenBalloonOnClick: false*/
/* 		});*/
/* 		*/
/* 		*/
/* 		*/
/* 		objectManager.objects.options.set('preset', 'islands#redStretchyIcon')*/
/* 		objectManager.clusters.options.set('preset', 'islands#redClusterIcons')*/
/* 		*/
/* 		//console.log(objectManager.objects)*/
/* 		*/
/* 		function onObjectEvent (e) {*/
/* 			var objectId = e.get('objectId');*/
/* 			if (e.get('type') == 'mouseenter') {*/
/* 				// Метод setObjectOptions позволяет задавать опции объекта "на лету".*/
/* 				objectManager.objects.setObjectOptions(objectId, {*/
/* 					preset: 'islands#yellowCircleDotIcon'*/
/* 				});*/
/* 			} else {*/
/* 				objectManager.objects.setObjectOptions(objectId, {*/
/* 					preset: 'islands#redCircleDotIcon'*/
/* 				});*/
/* 			}*/
/* 		}*/
/* */
/* 		function onClusterEvent (e) {*/
/* 			var objectId = e.get('objectId');*/
/* 			if (e.get('type') == 'mouseenter') {*/
/* 				objectManager.clusters.setClusterOptions(objectId, {*/
/* 					preset: 'islands#yellowClusterIcons'*/
/* 				});*/
/* 			} else {*/
/* 				objectManager.clusters.setClusterOptions(objectId, {*/
/* 					preset: 'islands#redClusterIcons'*/
/* 				});*/
/* 			}*/
/* 		}*/
/* */
/* 		objectManager.objects.events.add(['mouseenter', 'mouseleave'], onObjectEvent);*/
/* 		objectManager.clusters.events.add(['mouseenter', 'mouseleave'], onClusterEvent);*/
/* 		*/
/* 		const json = { */
/* 		   "type":"FeatureCollection",*/
/* 		   "features":[ */
/* 				{ */
/* 					"type":"Feature",*/
/* 					"id":0,*/
/* 					"geometry":{ */
/* 					"type":"Point",*/
/* 					"coordinates":[ */
/* 						53.215555,*/
/* 					    50.187128*/
/* 					]*/
/* 					},*/
/* 					"properties":{ */
/* 						"balloonContentHeader":"<font size=3><b><a target='_blank' href='https://yandex.ru'>Здесь может быть ваша ссылка</a></b></font>",*/
/* 						"balloonContentBody":"<p>Ваше имя: <input name='login'></p><p><em>Телефон в формате 2xxx-xxx:</em>  <input></p><p><input type='submit' value='Отправить'></p>",*/
/* 						"balloonContentFooter":"<font size=1>Информация предоставлена: </font> <strong>этим балуном</strong>",*/
/* 						"clusterCaption":"<strong><s>Еще</s> одна</strong> метка",*/
/* 						"hintContent":"<strong>Текст  <s>подсказки</s></strong>"*/
/* 					}*/
/* 				}*/
/* 		  	]*/
/* 		 }*/
/* 		*/
/* 		*/
/* 		//objectManager.objects.options.set('preset', 'islands#greenDotIcon');*/
/* 		//objectManager.clusters.options.set('preset', 'islands#greenClusterIcons');*/
/* 		myMap.geoObjects.add(objectManager);*/
/* */
/* 		*/
/* 		//objectManager.add(json);*/
/* 		*/
/* 		*/
/* 		*/
/* 		*/
/* 		document.addEventListener('redrawMap', function(e) {*/
/* 			objectManager.removeAll()*/
/* 			//console.log(e.detail)*/
/* 			let objects = e.detail*/
/* 			*/
/* 			/**/
/* 			objects.searchInside(myMap)*/
/*         // И затем добавим найденные объекты на карту.*/
/* 				.addToMap(myMap);*/
/* */
/* 			myMap.events.add('boundschange', function () {*/
/* 				// После каждого сдвига карты будем смотреть, какие объекты попадают в видимую область.*/
/* 				var visibleObjects = objects.searchInside(myMap).objectManager.add(myMap);*/
/* 				// Оставшиеся объекты будем удалять с карты.*/
/* 				objects.remove(visibleObjects).removeFromMap(myMap);*/
/* 			});*/
/* 			*//* */
/* 			*/
/* 			objectManager.add(e.detail);*/
/* 			//console.log(objectManager.objects)*/
/* 			/*myMap.geoObjects.add(new ymaps.Placemark([53.201717, 50.141131], {*/
/*             balloonContent: 'цвет <strong>влюбленной жабы</strong>'*/
/*         }, {*/
/*             preset: 'islands#circleIcon',*/
/*             iconColor: '#3caa3c'*/
/*         }));*//* */
/* 		})*/
/* 		*/
/* 		*/
/*     }*/
/* 	*/
/* 	*/
/* 	*/
/* </script>*/
/* <!--script src="https://unpkg.com/swiper/swiper-bundle.js"></script-->*/
/* */
/* <script src="https://cdn.jsdelivr.net/npm/vue-slider-component@3.1.4/dist/vue-slider-component.umd.min.js"></script>*/
/* <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>*/
/* <script src="/site/theme/js/search_twig.js"></script>*/
/* {% include 'footer' %}*/
/* */
/* {% endif %}*/
