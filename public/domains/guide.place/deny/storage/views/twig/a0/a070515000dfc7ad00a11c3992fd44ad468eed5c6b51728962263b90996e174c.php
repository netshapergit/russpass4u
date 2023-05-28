<?php

/* layouts.search_campings_twig_vue */
class __TwigTemplate_c9a20fd6d53e1eb1a7207c728edc0b8c871e7fc65e9b2f5625897bddd64057f0 extends TwigBridge\Twig\Template
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
            $this->loadTemplate("header", "layouts.search_campings_twig_vue", 41)->display($context);
            // line 42
            echo "<div class=\"data-pages\" style=\"display: none;\" data-answer=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_sub_pages", array())), "html", null, true));
            echo "\" ";
            if (((twig_length_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_sub_pages", array())) == 0) && ($this->getAttribute((isset($context["query"]) ? $context["query"] : null), 0, array(), "array") != ""))) {
                echo "data-empty=\"1\"";
            }
            echo "></div>
<section class=\"search\" id=\"v-search-root\" data-find-inset=\"1\" data-lid=\"";
            // line 43
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
\t\t\t\t\t\t\t<div class=\"filter filter--hotels-type\">
\t\t\t\t\t\t\t\t<div class=\"filter__title\">Тип</div>
\t\t\t\t\t\t\t\t<div class=\"filter-radios\">
\t\t\t\t\t\t\t\t\t<div class=\"filter-radio\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" value=\"\" name=\"cat-filter-hotels-type\" @change=\"selectedCatFilters.hotels.type.items = []\" id=\"cat-filter-hotels-type-0\">
\t\t\t\t\t\t\t\t\t\t<label for=\"cat-filter-hotels-type-0\">Все</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"filter-radio\" v-for=\"(item,i) in catFilters.hotels.types\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" :value=\"item.value\" name=\"cat-filter-hotels-type\" @change=\"selectedCatFilters.hotels.type.items = [item.value]\" :id=\"`cat-filter-hotels-type-\${i + 1}`\">
\t\t\t\t\t\t\t\t\t\t<label :for=\"`cat-filter-hotels-type-\${i + 1}`\">{{item.name}}</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"filter filter--hotels-food\">
\t\t\t\t\t\t\t\t<div class=\"filter__title\">Питание</div>
\t\t\t\t\t\t\t\t<div class=\"filter-radios\">
\t\t\t\t\t\t\t\t\t<div class=\"filter-radio\" v-for=\"(item,i) in catFilters.hotels.food\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" :value=\"item.value\" name=\"cat-filter-hotels-food\" v-model=\"selectedCatFilters.hotels.food.items\" :id=\"`cat-filter-hotels-food-\${i + 1}`\">
\t\t\t\t\t\t\t\t\t\t<label :for=\"`cat-filter-hotels-food-\${i + 1}`\">{{item.name}}</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"filter filter--hotels-stars\">
\t\t\t\t\t\t\t\t<div class=\"filter__title\">Количество звезд</div>
\t\t\t\t\t\t\t\t<div class=\"filter-radios\">
\t\t\t\t\t\t\t\t\t<div class=\"filter-radio\" v-for=\"(item,i) in catFilters.hotels.stars\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" :value=\"item.value\" name=\"cat-filter-hotels-stars\" v-model=\"selectedCatFilters.hotels.stars.items\" :id=\"`cat-filter-hotels-stars-\${i + 1}`\">
\t\t\t\t\t\t\t\t\t\t<label :for=\"`cat-filter-hotels-stars-\${i + 1}`\">{{ '☆'.repeat(Number(item.value)) }}</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"filter filter--price\">
\t\t\t\t\t\t\t\t<div class=\"filter__title\">Цена</div>
\t\t\t\t\t\t\t\t<div class=\"filter-slider\">
\t\t\t\t\t\t\t\t\t<vue-slider 
\t\t\t\t\t\t\t\t\t\tref=\"filter-pricerange\"
\t\t\t\t\t\t\t\t\t\tv-model=\"selectedCatFilters.common.price.range\" 
\t\t\t\t\t\t\t\t\t\t:min=\"selectedCatFilters.common.price.min\" 
\t\t\t\t\t\t\t\t\t\t:max=\"selectedCatFilters.common.price.max\"
\t\t\t\t\t\t\t\t\t\t:enable-cross=\"false\"
\t\t\t\t\t\t\t\t\t\t:tooltip=\"'always'\"
\t\t\t\t\t\t\t\t\t\t:tooltip-formatter=\"selectedCatFilters.common.price.format\"
\t\t\t\t\t\t\t\t\t\t:min-range=\"1\"
\t\t\t\t\t\t\t\t\t\t:contained=\"true\"
\t\t\t\t\t\t\t\t\t\t:lazy=\"true\"
\t\t\t\t\t\t\t\t\t></vue-slider>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"search-main\">
\t\t\t\t<div class=\"search-top\">
\t\t\t\t\t<div class=\"cont\">
\t\t\t\t\t\t<h1 style=\"font-size:24px; padding-left: 15px; font-weight: 100; text-transform: uppercase;\">";
            // line 114
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array()), "html", null, true));
            echo "</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"search-totop\" @click=\"scrollToMap\">Карта</div>
\t\t\t\t<div class=\"search-filters\">
\t\t\t\t\t<div class=\"cont\">
\t\t\t\t\t\t<div class=\"flexer flexer--jcb flexer--aic\">
\t\t\t\t\t\t\t";
            // line 121
            $this->loadTemplate("cityswitcher", "layouts.search_campings_twig_vue", 121)->display($context);
            // line 122
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
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 167
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
            // line 178
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"search-list\" v-cloak>
\t\t\t\t\t<div class=\"cont\">
\t\t\t\t\t\t<div class=\"search-warning\" v-show=\"filteredItems.length == 0\" v-cloak>Результатов по вашему запросу нет</div>
\t\t\t\t\t\t<transition-group 
\t\t\t\t\t    mode=\"out-in\" 
\t\t\t\t\t    name=\"search-transition2\" 
\t\t\t\t\t    tag=\"div\" 
\t\t\t\t\t    class=\"search-results__wrapper\"
\t\t\t\t\t>
\t\t\t\t\t\t";
            // line 189
            $this->loadTemplate("item_vue", "layouts.search_campings_twig_vue", 189)->display($context);
            // line 190
            echo "\t\t\t\t\t\t</transition-group>
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
            // line 208
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent_page", array()), "field_coords", array()), "html", null, true));
            echo "],
\t\t\tcontrols: ['zoomControl'],
\t\t\tzoom: ";
            // line 210
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
\t\t\t
\t\t\tvar objectId = e.get('objectId');
\t\t\tif (e.get('type') == 'mouseenter') {
\t\t\t\tobjectManager.objects.setObjectOptions(objectId, {
\t\t\t\t\tpreset: 'islands#yellowStretchyIcon'
\t\t\t\t});
\t\t\t} else {
\t\t\t\tobjectManager.objects.setObjectOptions(objectId, {
\t\t\t\t\tpreset: 'islands#redStretchyIcon'
\t\t\t\t});
\t\t\t}
\t\t\t
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
            // line 335
            $this->loadTemplate("footer", "layouts.search_campings_twig_vue", 335)->display($context);
            // line 336
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "layouts.search_campings_twig_vue";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 336,  500 => 335,  372 => 210,  367 => 208,  347 => 190,  345 => 189,  332 => 178,  316 => 167,  312 => 166,  266 => 122,  264 => 121,  254 => 114,  180 => 43,  171 => 42,  169 => 41,  166 => 40,  156 => 37,  153 => 36,  151 => 35,  148 => 34,  145 => 33,  139 => 32,  136 => 31,  133 => 30,  130 => 29,  127 => 28,  122 => 27,  120 => 26,  117 => 25,  114 => 24,  112 => 23,  109 => 22,  103 => 19,  100 => 18,  94 => 17,  91 => 16,  85 => 15,  82 => 14,  79 => 13,  76 => 12,  71 => 11,  68 => 10,  64 => 9,  61 => 8,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
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
/* 							<div class="filter filter--hotels-type">*/
/* 								<div class="filter__title">Тип</div>*/
/* 								<div class="filter-radios">*/
/* 									<div class="filter-radio">*/
/* 										<input type="radio" value="" name="cat-filter-hotels-type" @change="selectedCatFilters.hotels.type.items = []" id="cat-filter-hotels-type-0">*/
/* 										<label for="cat-filter-hotels-type-0">Все</label>*/
/* 									</div>*/
/* 									<div class="filter-radio" v-for="(item,i) in catFilters.hotels.types">*/
/* 										<input type="radio" :value="item.value" name="cat-filter-hotels-type" @change="selectedCatFilters.hotels.type.items = [item.value]" :id="`cat-filter-hotels-type-${i + 1}`">*/
/* 										<label :for="`cat-filter-hotels-type-${i + 1}`">{{item.name}}</label>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="filter filter--hotels-food">*/
/* 								<div class="filter__title">Питание</div>*/
/* 								<div class="filter-radios">*/
/* 									<div class="filter-radio" v-for="(item,i) in catFilters.hotels.food">*/
/* 										<input type="checkbox" :value="item.value" name="cat-filter-hotels-food" v-model="selectedCatFilters.hotels.food.items" :id="`cat-filter-hotels-food-${i + 1}`">*/
/* 										<label :for="`cat-filter-hotels-food-${i + 1}`">{{item.name}}</label>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="filter filter--hotels-stars">*/
/* 								<div class="filter__title">Количество звезд</div>*/
/* 								<div class="filter-radios">*/
/* 									<div class="filter-radio" v-for="(item,i) in catFilters.hotels.stars">*/
/* 										<input type="checkbox" :value="item.value" name="cat-filter-hotels-stars" v-model="selectedCatFilters.hotels.stars.items" :id="`cat-filter-hotels-stars-${i + 1}`">*/
/* 										<label :for="`cat-filter-hotels-stars-${i + 1}`">{{ '☆'.repeat(Number(item.value)) }}</label>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="filter filter--price">*/
/* 								<div class="filter__title">Цена</div>*/
/* 								<div class="filter-slider">*/
/* 									<vue-slider */
/* 										ref="filter-pricerange"*/
/* 										v-model="selectedCatFilters.common.price.range" */
/* 										:min="selectedCatFilters.common.price.min" */
/* 										:max="selectedCatFilters.common.price.max"*/
/* 										:enable-cross="false"*/
/* 										:tooltip="'always'"*/
/* 										:tooltip-formatter="selectedCatFilters.common.price.format"*/
/* 										:min-range="1"*/
/* 										:contained="true"*/
/* 										:lazy="true"*/
/* 									></vue-slider>*/
/* 								</div>*/
/* 							</div>*/
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
/* 					    mode="out-in" */
/* 					    name="search-transition2" */
/* 					    tag="div" */
/* 					    class="search-results__wrapper"*/
/* 					>*/
/* 						{% include 'item_vue' %}*/
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
/* 			*/
/* 			var objectId = e.get('objectId');*/
/* 			if (e.get('type') == 'mouseenter') {*/
/* 				objectManager.objects.setObjectOptions(objectId, {*/
/* 					preset: 'islands#yellowStretchyIcon'*/
/* 				});*/
/* 			} else {*/
/* 				objectManager.objects.setObjectOptions(objectId, {*/
/* 					preset: 'islands#redStretchyIcon'*/
/* 				});*/
/* 			}*/
/* 			*/
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
