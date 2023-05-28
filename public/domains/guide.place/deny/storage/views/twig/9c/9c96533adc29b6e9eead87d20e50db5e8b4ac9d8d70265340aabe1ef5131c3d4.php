<?php

/* homepage_catalog */
class __TwigTemplate_d62cd1c41d8e02f1acc0fc4924942f0dca318648e921efb8028b7522c7ce8b76 extends TwigBridge\Twig\Template
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
        $tags = array("set" => 1, "for" => 4, "if" => 5);
        $filters = array("length" => 5, "merge" => 16, "reverse" => 55, "sort" => 55, "escape" => 71, "split" => 78);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for', 'if'),
                array('length', 'merge', 'reverse', 'sort', 'escape', 'split'),
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
        $context["homepage"] = (isset($context["page"]) ? $context["page"] : null);
        // line 2
        $context["index"] = (isset($context["page"]) ? $context["page"] : null);
        // line 3
        $context["check"] = true;
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            if ((isset($context["check"]) ? $context["check"] : null)) {
                // line 5
                echo "\t";
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["index"]) ? $context["index"] : null), "parent_page", array())) > 0)) {
                    // line 6
                    echo "\t\t";
                    $context["index"] = $this->getAttribute((isset($context["index"]) ? $context["index"] : null), "parent_page", array());
                    // line 7
                    echo "\t\t";
                    $context["homepage"] = (isset($context["index"]) ? $context["index"] : null);
                    // line 8
                    echo "\t";
                } else {
                    // line 9
                    echo "\t\t";
                    $context["check"] = false;
                    // line 10
                    echo "\t";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t

";
        // line 13
        $context["items"] = array();
        // line 14
        echo "
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["homepage"]) ? $context["homepage"] : null), "active_sub_pages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subpage1"]) {
            // line 16
            echo "\t\t";
            $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : null), array(0 => $context["subpage1"]));
            // line 17
            echo "\t";
            if ((twig_length_filter($this->env, $this->getAttribute($context["subpage1"], "active_sub_pages", array())) > 0)) {
                // line 18
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subpage1"], "active_sub_pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["subpage2"]) {
                    // line 19
                    echo "\t\t\t\t";
                    $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : null), array(0 => $context["subpage2"]));
                    // line 20
                    echo "\t\t\t";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["subpage2"], "active_sub_pages", array())) > 0)) {
                        // line 21
                        echo "\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subpage2"], "active_sub_pages", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["subpage3"]) {
                            // line 22
                            echo "\t\t\t\t\t\t";
                            $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : null), array(0 => $context["subpage3"]));
                            // line 23
                            echo "\t\t\t\t\t";
                            if ((twig_length_filter($this->env, $this->getAttribute($context["subpage3"], "active_sub_pages", array())) > 0)) {
                                // line 24
                                echo "\t\t\t\t\t\t";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subpage3"], "active_sub_pages", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["subpage4"]) {
                                    // line 25
                                    echo "\t\t\t\t\t\t\t\t";
                                    $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : null), array(0 => $context["subpage4"]));
                                    // line 26
                                    echo "\t\t\t\t\t\t\t";
                                    if ((twig_length_filter($this->env, $this->getAttribute($context["subpage4"], "active_sub_pages", array())) > 0)) {
                                        // line 27
                                        echo "\t\t\t\t\t\t\t\t";
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subpage4"], "active_sub_pages", array()));
                                        foreach ($context['_seq'] as $context["_key"] => $context["subpage5"]) {
                                            // line 28
                                            echo "\t\t\t\t\t\t\t\t\t\t";
                                            $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : null), array(0 => $context["subpage5"]));
                                            // line 29
                                            echo "\t\t\t\t\t\t\t\t\t";
                                            if ((twig_length_filter($this->env, $this->getAttribute($context["subpage5"], "active_sub_pages", array())) > 0)) {
                                                // line 30
                                                echo "\t\t\t\t\t\t\t\t\t\t";
                                                $context['_parent'] = $context;
                                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subpage5"], "active_sub_pages", array()));
                                                foreach ($context['_seq'] as $context["_key"] => $context["subpage6"]) {
                                                    // line 31
                                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                                    $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : null), array(0 => $context["subpage6"]));
                                                    // line 32
                                                    echo "\t\t\t\t\t\t\t\t\t\t";
                                                }
                                                $_parent = $context['_parent'];
                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage6'], $context['_parent'], $context['loop']);
                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                // line 33
                                                echo "\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 34
                                            echo "\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage5'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 35
                                        echo "\t\t\t\t\t\t\t";
                                    }
                                    // line 36
                                    echo "\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage4'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 37
                                echo "\t\t\t\t\t";
                            }
                            // line 38
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage3'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 39
                        echo "\t\t\t";
                    }
                    // line 40
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
";
        // line 44
        $context["curItems"] = array();
        // line 45
        $context["orders"] = array();
        // line 46
        $context["curLayouts"] = array(0 => 4);
        // line 47
        echo "
";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 49
            echo "\t";
            if (twig_in_filter($this->getAttribute($context["item"], "layout_id", array()), (isset($context["curLayouts"]) ? $context["curLayouts"] : null))) {
                // line 50
                echo "\t\t";
                $context["curItems"] = twig_array_merge((isset($context["curItems"]) ? $context["curItems"] : null), array(0 => $context["item"]));
                // line 51
                echo "\t\t";
                $context["orders"] = twig_array_merge((isset($context["orders"]) ? $context["orders"] : null), array(0 => $this->getAttribute($context["item"], "order", array())));
                // line 52
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
";
        // line 55
        $context["sortedOrders"] = twig_reverse_filter($this->env, twig_sort_filter((isset($context["orders"]) ? $context["orders"] : null)));
        // line 56
        $context["sortedItems"] = array();
        // line 57
        $context["sortedIDs"] = array();
        // line 58
        echo "
";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sortedOrders"]) ? $context["sortedOrders"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 60
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["curItems"]) ? $context["curItems"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 61
                echo "\t\t";
                if ((($this->getAttribute($context["item"], "order", array()) == $context["order"]) && !twig_in_filter($this->getAttribute($context["item"], "id", array()), (isset($context["sortedIDs"]) ? $context["sortedIDs"] : null)))) {
                    // line 62
                    echo "\t\t\t";
                    $context["sortedItems"] = twig_array_merge((isset($context["sortedItems"]) ? $context["sortedItems"] : null), array(0 => $context["item"]));
                    // line 63
                    echo "\t\t\t";
                    $context["sortedIDs"] = twig_array_merge((isset($context["sortedIDs"]) ? $context["sortedIDs"] : null), array(0 => $this->getAttribute($context["item"], "id", array())));
                    // line 64
                    echo "\t\t";
                }
                // line 65
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
<div class=\"scatalog\">
\t";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sortedItems"]) ? $context["sortedItems"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 70
            echo "\t\t<div class=\"scatalog-item\">
\t\t\t<div class=\"scatalog-item__gallery\" data-gallery=\"";
            // line 71
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "field_gallery", array()), "html", null, true));
            echo "\" data-href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "path", array()), "html", null, true));
            echo "\">
\t\t\t\t
\t\t\t</div>
\t\t\t<a href=\"";
            // line 74
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "path", array()), "html", null, true));
            echo "\" class=\"scatalog-item__price\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"23\" height=\"23\" viewBox=\"0 0 23 23\" fill=\"none\">
\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M6.57013 6.04312C5.93917 6.73448 4.87058 6.75327 4.21681 6.0995C3.58048 5.46318 3.58183 4.43486 4.21815 3.79853C4.87192 3.14476 5.94052 3.16221 6.57147 3.85357C7.13127 4.46573 7.12993 5.43096 6.57013 6.04446V6.04312ZM8.47238 0.722973L3.87314 0.406154C3.01128 0.347086 2.22326 0.673303 1.66346 1.23176L1.65675 1.23848C1.09963 1.79694 0.77207 2.5863 0.829796 3.44815L1.14393 8.05277C1.21105 9.03008 1.62856 9.94966 2.32126 10.6424L13.4126 21.7337C13.967 22.2881 14.8678 22.2881 15.4223 21.7337L22.1506 15.0053C22.7064 14.4496 22.7064 13.5488 22.1506 12.9943L11.0579 1.90165C10.3666 1.21028 9.44835 0.792781 8.47238 0.724316V0.722973Z\" fill=\"#14C5D0\"/>
\t\t\t\t</svg>
\t\t\t\t<span class=\"scatalog-item__price-text\">от ";
            // line 78
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute($context["item"], "field_prices", array()), ","), 0, array(), "array"), "html", null, true));
            echo "</span>
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"15\" viewBox=\"0 0 12 15\" fill=\"none\">
\t\t\t\t\t<path d=\"M7.59585 0.164001H3.20259C2.74955 0.164001 2.38227 0.531283 2.38227 0.984314V7.19315H1.44531C0.992281 7.19315 0.625 7.56043 0.625 8.01346C0.625 8.46649 0.992281 8.83378 1.44531 8.83378H2.38227V10.7078H1.44531C0.992281 10.7078 0.625 11.075 0.625 11.5281C0.625 11.9811 0.992281 12.3484 1.44531 12.3484H2.38227V14.164C2.38227 14.617 2.74955 14.9843 3.20259 14.9843C3.65562 14.9843 4.0229 14.617 4.0229 14.164V12.3484H7.59585C8.04888 12.3484 8.41616 11.9811 8.41616 11.5281C8.41616 11.075 8.04888 10.7078 7.59585 10.7078H4.0229V8.83378H7.59585C9.98613 8.83378 11.9308 6.88914 11.9308 4.49886C11.9307 2.04952 9.93555 0.164001 7.59585 0.164001ZM7.59585 7.19315H4.0229V1.80463H7.59585C9.07252 1.80463 10.2901 2.99572 10.2901 4.49892C10.2901 5.98456 9.08149 7.19315 7.59585 7.19315Z\" fill=\"#6A6A6A\"/>
\t\t\t\t</svg>
\t\t\t</a>
\t\t\t<a href=\"";
            // line 83
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "path", array()), "html", null, true));
            echo "\" class=\"scatalog-item__info\">
\t\t\t\t<div class=\"scatalog-item__info-main\">
\t\t\t\t\t<div class=\"scatalog-item__title\">";
            // line 85
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "field_header", array()), "html", null, true));
            echo "</div>
\t\t\t\t\t";
            // line 86
            if ($this->getAttribute($context["item"], "field_address", array())) {
                // line 87
                echo "\t\t\t\t\t<div class=\"scatalog-item__address\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"19\" viewBox=\"0 0 12 19\" fill=\"none\">
\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.77347 0.122131C8.80285 0.122131 11.2564 2.59894 11.2564 5.65261C11.2564 8.24755 8.26216 14.7388 7.12029 17.1763C6.45274 18.6017 5.10396 18.6017 4.43445 17.1763C3.34333 14.8471 0.288574 8.06839 0.288574 5.65261C0.288574 2.59697 2.74409 0.122131 5.77152 0.122131L5.77347 0.122131ZM5.77347 2.18745C7.61413 2.18745 9.10539 3.69165 9.10539 5.54826C9.10539 7.40488 7.61413 8.90908 5.77347 8.90908C3.93281 8.90908 2.44154 7.40488 2.44154 5.54826C2.44154 3.69165 3.93281 2.18745 5.77347 2.18745Z\" fill=\"#14C5D0\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t";
                // line 91
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "field_address", array()), "html", null, true));
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 94
            echo "\t\t\t\t</div>
\t\t\t\t<!--div class=\"scatalog-item__info-action\">
\t\t\t\t\t<a href=\"";
            // line 96
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "path", array()), "html", null, true));
            echo "\" class=\"scatalog-item__link\">Подробнее</a>
\t\t\t\t</div-->
\t\t\t</a>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "</div>
<script>
\tconst items = \$('.scatalog-item')
\tfor(let i = 0; i < items.length; i++) {
\t\tconst gallery = \$(items[i]).find('.scatalog-item__gallery'),
\t\t\t  data = \$(gallery.attr('data-gallery')) || null,
\t\t\t  href = gallery.attr('data-href')
\t\tif (data) {
\t\t\tgallery.removeAttr('data-gallery')
\t\t\tlet imgs = []
\t\t\tfor(let k = 0; k < data.length; k++) {
\t\t\t\tif(\$(data[k]).is('img')) imgs.push(`<a href=\"\${href}\" class=\"scatalog-item__gallery-item\">\${data[k].outerHTML}</a>`)
\t\t\t}
\t\t\tif (imgs.length > 0) {
\t\t\t\tconst html = imgs.join('')
\t\t\t\tgallery.html(html)
\t\t\t} else {
\t\t\t\tgallery.html('<a href=\"\${href}\" class=\"scatalog-item__gallery-item scatalog-item__gallery-item--noimage\"><img src=\"/site/theme/images/noimage.png\"></a>')
\t\t\t}
\t\t\tif (imgs.length > 1) {
\t\t\t\tgallery.slick({
\t\t\t\t\tslidesToShow: 1,
\t\t\t\t\tslidesToScroll: 1,
\t\t\t\t\tarrows: true,
\t\t\t\t\tdots: true,
\t\t\t\t\tresponsive: [
\t\t\t\t\t\t{
\t\t\t\t\t\t\tbreakpoint: 768,
\t\t\t\t\t\t\tsettings: {
\t\t\t\t\t\t\t\tarrows: true,
\t\t\t\t\t\t\t\tswipe: false
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t]
\t\t\t\t})
\t\t\t}
\t\t} else {
\t\t\tgallery.html(`<a href=\"\${href}\" class=\"scatalog-item__gallery-item scatalog-item__gallery-item--noimage\"><img src=\"/site/theme/images/noimage.png\"></a>`)
\t\t}
\t}
\t
\t\$('.scatalog').slick({
\t\tslidesToShow: 4,
\t\tslidesToScroll: 4,
\t\tswipe: false,
\t\tinfinite: false,
\t\tresponsive: [
\t\t\t{
\t\t\t\tbreakpoint: 768,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 2,
\t\t\t\t\tslidesToScroll: 2,
\t\t\t\t\tswipe: true,
\t\t\t\t\tvariableWidth: true
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 480,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 1,
\t\t\t\t\tslidesToScroll: 1,
\t\t\t\t\tswipe: true
\t\t\t\t}
\t\t\t}
\t\t]
\t})
</script>";
    }

    public function getTemplateName()
    {
        return "homepage_catalog";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 101,  333 => 96,  329 => 94,  323 => 91,  317 => 87,  315 => 86,  311 => 85,  306 => 83,  298 => 78,  291 => 74,  283 => 71,  280 => 70,  276 => 69,  272 => 67,  262 => 65,  259 => 64,  256 => 63,  253 => 62,  250 => 61,  245 => 60,  241 => 59,  238 => 58,  236 => 57,  234 => 56,  232 => 55,  229 => 54,  222 => 52,  219 => 51,  216 => 50,  213 => 49,  209 => 48,  206 => 47,  204 => 46,  202 => 45,  200 => 44,  197 => 43,  190 => 41,  184 => 40,  181 => 39,  175 => 38,  172 => 37,  166 => 36,  163 => 35,  157 => 34,  154 => 33,  148 => 32,  145 => 31,  140 => 30,  137 => 29,  134 => 28,  129 => 27,  126 => 26,  123 => 25,  118 => 24,  115 => 23,  112 => 22,  107 => 21,  104 => 20,  101 => 19,  96 => 18,  93 => 17,  90 => 16,  86 => 15,  83 => 14,  81 => 13,  77 => 11,  69 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% set homepage = page %}*/
/* {% set index = page %}*/
/* {% set check = true %}*/
/* {% for items in 1..10 if check %}*/
/* 	{% if index.parent_page|length > 0 %}*/
/* 		{% set index = index.parent_page %}*/
/* 		{% set homepage = index %}*/
/* 	{% else %}*/
/* 		{% set check = false %}*/
/* 	{% endif %}*/
/* {% endfor %}	*/
/* */
/* {% set items = [] %}*/
/* */
/* {% for subpage1 in homepage.active_sub_pages %}*/
/* 		{% set items = items|merge([subpage1]) %}*/
/* 	{% if subpage1.active_sub_pages|length > 0 %}*/
/* 		{% for subpage2 in subpage1.active_sub_pages %}*/
/* 				{% set items = items|merge([subpage2]) %}*/
/* 			{% if subpage2.active_sub_pages|length > 0 %}*/
/* 				{% for subpage3 in subpage2.active_sub_pages %}*/
/* 						{% set items = items|merge([subpage3]) %}*/
/* 					{% if subpage3.active_sub_pages|length > 0 %}*/
/* 						{% for subpage4 in subpage3.active_sub_pages %}*/
/* 								{% set items = items|merge([subpage4]) %}*/
/* 							{% if subpage4.active_sub_pages|length > 0 %}*/
/* 								{% for subpage5 in subpage4.active_sub_pages %}*/
/* 										{% set items = items|merge([subpage5]) %}*/
/* 									{% if subpage5.active_sub_pages|length > 0 %}*/
/* 										{% for subpage6 in subpage5.active_sub_pages %}*/
/* 												{% set items = items|merge([subpage6]) %}*/
/* 										{% endfor %}*/
/* 									{% endif %}*/
/* 								{% endfor %}*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	{% endif %}*/
/* {% endfor %}*/
/* */
/* {% set curItems = [] %}*/
/* {% set orders = [] %}*/
/* {% set curLayouts = [4] %}*/
/* */
/* {% for item in items %}*/
/* 	{% if item.layout_id in curLayouts %}*/
/* 		{% set curItems = curItems|merge([item]) %}*/
/* 		{% set orders = orders|merge([item.order]) %}*/
/* 	{% endif %}*/
/* {% endfor %}*/
/* */
/* {% set sortedOrders = orders|sort|reverse %}*/
/* {% set sortedItems = [] %}*/
/* {% set sortedIDs = [] %}*/
/* */
/* {% for order in sortedOrders %}*/
/* 	{% for item in curItems %}*/
/* 		{% if item.order == order and item.id not in sortedIDs %}*/
/* 			{% set sortedItems = sortedItems|merge([item]) %}*/
/* 			{% set sortedIDs = sortedIDs|merge([item.id]) %}*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* {% endfor %}*/
/* */
/* <div class="scatalog">*/
/* 	{% for item in sortedItems %}*/
/* 		<div class="scatalog-item">*/
/* 			<div class="scatalog-item__gallery" data-gallery="{$ item.field_gallery $}" data-href="{$ item.path $}">*/
/* 				*/
/* 			</div>*/
/* 			<a href="{$ item.path $}" class="scatalog-item__price">*/
/* 				<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">*/
/* 					<path fill-rule="evenodd" clip-rule="evenodd" d="M6.57013 6.04312C5.93917 6.73448 4.87058 6.75327 4.21681 6.0995C3.58048 5.46318 3.58183 4.43486 4.21815 3.79853C4.87192 3.14476 5.94052 3.16221 6.57147 3.85357C7.13127 4.46573 7.12993 5.43096 6.57013 6.04446V6.04312ZM8.47238 0.722973L3.87314 0.406154C3.01128 0.347086 2.22326 0.673303 1.66346 1.23176L1.65675 1.23848C1.09963 1.79694 0.77207 2.5863 0.829796 3.44815L1.14393 8.05277C1.21105 9.03008 1.62856 9.94966 2.32126 10.6424L13.4126 21.7337C13.967 22.2881 14.8678 22.2881 15.4223 21.7337L22.1506 15.0053C22.7064 14.4496 22.7064 13.5488 22.1506 12.9943L11.0579 1.90165C10.3666 1.21028 9.44835 0.792781 8.47238 0.724316V0.722973Z" fill="#14C5D0"/>*/
/* 				</svg>*/
/* 				<span class="scatalog-item__price-text">от {$ item.field_prices|split(',')[0] $}</span>*/
/* 				<svg xmlns="http://www.w3.org/2000/svg" width="12" height="15" viewBox="0 0 12 15" fill="none">*/
/* 					<path d="M7.59585 0.164001H3.20259C2.74955 0.164001 2.38227 0.531283 2.38227 0.984314V7.19315H1.44531C0.992281 7.19315 0.625 7.56043 0.625 8.01346C0.625 8.46649 0.992281 8.83378 1.44531 8.83378H2.38227V10.7078H1.44531C0.992281 10.7078 0.625 11.075 0.625 11.5281C0.625 11.9811 0.992281 12.3484 1.44531 12.3484H2.38227V14.164C2.38227 14.617 2.74955 14.9843 3.20259 14.9843C3.65562 14.9843 4.0229 14.617 4.0229 14.164V12.3484H7.59585C8.04888 12.3484 8.41616 11.9811 8.41616 11.5281C8.41616 11.075 8.04888 10.7078 7.59585 10.7078H4.0229V8.83378H7.59585C9.98613 8.83378 11.9308 6.88914 11.9308 4.49886C11.9307 2.04952 9.93555 0.164001 7.59585 0.164001ZM7.59585 7.19315H4.0229V1.80463H7.59585C9.07252 1.80463 10.2901 2.99572 10.2901 4.49892C10.2901 5.98456 9.08149 7.19315 7.59585 7.19315Z" fill="#6A6A6A"/>*/
/* 				</svg>*/
/* 			</a>*/
/* 			<a href="{$ item.path $}" class="scatalog-item__info">*/
/* 				<div class="scatalog-item__info-main">*/
/* 					<div class="scatalog-item__title">{$ item.field_header $}</div>*/
/* 					{% if item.field_address %}*/
/* 					<div class="scatalog-item__address">*/
/* 						<svg xmlns="http://www.w3.org/2000/svg" width="12" height="19" viewBox="0 0 12 19" fill="none">*/
/* 							<path fill-rule="evenodd" clip-rule="evenodd" d="M5.77347 0.122131C8.80285 0.122131 11.2564 2.59894 11.2564 5.65261C11.2564 8.24755 8.26216 14.7388 7.12029 17.1763C6.45274 18.6017 5.10396 18.6017 4.43445 17.1763C3.34333 14.8471 0.288574 8.06839 0.288574 5.65261C0.288574 2.59697 2.74409 0.122131 5.77152 0.122131L5.77347 0.122131ZM5.77347 2.18745C7.61413 2.18745 9.10539 3.69165 9.10539 5.54826C9.10539 7.40488 7.61413 8.90908 5.77347 8.90908C3.93281 8.90908 2.44154 7.40488 2.44154 5.54826C2.44154 3.69165 3.93281 2.18745 5.77347 2.18745Z" fill="#14C5D0"/>*/
/* 						</svg>*/
/* 						{$ item.field_address $}*/
/* 					</div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 				<!--div class="scatalog-item__info-action">*/
/* 					<a href="{$ item.path $}" class="scatalog-item__link">Подробнее</a>*/
/* 				</div-->*/
/* 			</a>*/
/* 		</div>*/
/* 	{% endfor %}*/
/* </div>*/
/* <script>*/
/* 	const items = $('.scatalog-item')*/
/* 	for(let i = 0; i < items.length; i++) {*/
/* 		const gallery = $(items[i]).find('.scatalog-item__gallery'),*/
/* 			  data = $(gallery.attr('data-gallery')) || null,*/
/* 			  href = gallery.attr('data-href')*/
/* 		if (data) {*/
/* 			gallery.removeAttr('data-gallery')*/
/* 			let imgs = []*/
/* 			for(let k = 0; k < data.length; k++) {*/
/* 				if($(data[k]).is('img')) imgs.push(`<a href="${href}" class="scatalog-item__gallery-item">${data[k].outerHTML}</a>`)*/
/* 			}*/
/* 			if (imgs.length > 0) {*/
/* 				const html = imgs.join('')*/
/* 				gallery.html(html)*/
/* 			} else {*/
/* 				gallery.html('<a href="${href}" class="scatalog-item__gallery-item scatalog-item__gallery-item--noimage"><img src="/site/theme/images/noimage.png"></a>')*/
/* 			}*/
/* 			if (imgs.length > 1) {*/
/* 				gallery.slick({*/
/* 					slidesToShow: 1,*/
/* 					slidesToScroll: 1,*/
/* 					arrows: true,*/
/* 					dots: true,*/
/* 					responsive: [*/
/* 						{*/
/* 							breakpoint: 768,*/
/* 							settings: {*/
/* 								arrows: true,*/
/* 								swipe: false*/
/* 							}*/
/* 						}*/
/* 					]*/
/* 				})*/
/* 			}*/
/* 		} else {*/
/* 			gallery.html(`<a href="${href}" class="scatalog-item__gallery-item scatalog-item__gallery-item--noimage"><img src="/site/theme/images/noimage.png"></a>`)*/
/* 		}*/
/* 	}*/
/* 	*/
/* 	$('.scatalog').slick({*/
/* 		slidesToShow: 4,*/
/* 		slidesToScroll: 4,*/
/* 		swipe: false,*/
/* 		infinite: false,*/
/* 		responsive: [*/
/* 			{*/
/* 				breakpoint: 768,*/
/* 				settings: {*/
/* 					slidesToShow: 2,*/
/* 					slidesToScroll: 2,*/
/* 					swipe: true,*/
/* 					variableWidth: true*/
/* 				}*/
/* 			},*/
/* 			{*/
/* 				breakpoint: 480,*/
/* 				settings: {*/
/* 					slidesToShow: 1,*/
/* 					slidesToScroll: 1,*/
/* 					swipe: true*/
/* 				}*/
/* 			}*/
/* 		]*/
/* 	})*/
/* </script>*/
