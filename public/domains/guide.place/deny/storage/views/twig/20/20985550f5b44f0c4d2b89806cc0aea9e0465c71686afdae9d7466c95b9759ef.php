<?php

/* layouts.route */
class __TwigTemplate_9f7e4c3d8fb7a1c65ab53c89c8259dec23c18dfa01145a629a741a061de5eda9 extends TwigBridge\Twig\Template
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
        $tags = array("if" => 1, "set" => 3, "for" => 5, "include" => 48);
        $filters = array("split" => 7, "length" => 17, "slice" => 19, "lower" => 19, "merge" => 20, "escape" => 44, "json_encode" => 44, "raw" => 63);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'for', 'include'),
                array('split', 'length', 'slice', 'lower', 'merge', 'escape', 'json_encode', 'raw'),
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
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 6
                echo "\t\t
\t\t";
                // line 7
                $context["routeOjectsIDs"] = twig_split_filter($this->env, $this->getAttribute($context["item"], "field_route_string", array()), ";");
                // line 8
                echo "\t\t

\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "
\t";
            // line 12
            if ($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "query", array())) {
                // line 13
                echo "\t\t";
                $context["query"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "query", array()), " ");
                // line 14
                echo "\t\t";
                $context["results"] = array();
                // line 15
                echo "
\t\t";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 17
                    echo "\t\t\t";
                    if ((twig_length_filter($this->env, (isset($context["query"]) ? $context["query"] : null)) > 0)) {
                        // line 18
                        echo "\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["query"]) ? $context["query"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["que"]) {
                            // line 19
                            echo "\t\t\t\t\t";
                            if (((twig_length_filter($this->env, twig_slice($this->env, $context["que"], 0,  -1)) >= 3) && twig_in_filter(twig_lower_filter($this->env, twig_slice($this->env, $context["que"], 0,  -1)), twig_lower_filter($this->env, $this->getAttribute($context["item"], "field_header", array()))))) {
                                // line 20
                                echo "\t\t\t\t\t\t";
                                $context["results"] = twig_array_merge((isset($context["results"]) ? $context["results"] : null), array(0 => $context["item"]));
                                // line 21
                                echo "\t\t\t\t\t";
                            }
                            // line 22
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['que'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 23
                        echo "\t\t\t";
                    }
                    // line 24
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "
\t\t";
                // line 26
                $context["items"] = (isset($context["results"]) ? $context["results"] : null);
                echo "\t\t

\t";
            }
            // line 29
            echo "
\t";
            // line 30
            $context["uniqResults"] = array();
            // line 31
            echo "\t";
            $context["uniqIDs"] = array();
            // line 32
            echo "
\t";
            // line 33
            if ((twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null)) > 0)) {
                // line 34
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 35
                    echo "\t\t\t";
                    if (!twig_in_filter($this->getAttribute($context["item"], "id", array()), (isset($context["uniqIDs"]) ? $context["uniqIDs"] : null))) {
                        // line 36
                        echo "\t\t\t\t";
                        $context["uniqResults"] = twig_array_merge((isset($context["uniqResults"]) ? $context["uniqResults"] : null), array(0 => $context["item"]));
                        // line 37
                        echo "\t\t\t\t";
                        $context["uniqIDs"] = twig_array_merge((isset($context["uniqIDs"]) ? $context["uniqIDs"] : null), array(0 => $this->getAttribute($context["item"], "id", array())));
                        // line 38
                        echo "\t\t\t";
                    }
                    // line 39
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "\t";
            }
            // line 41
            echo "
\t";
            // line 42
            $context["items"] = (isset($context["uniqResults"]) ? $context["uniqResults"] : null);
            // line 43
            echo "
<div id=\"ajax-answer\" data-answer=\"";
            // line 44
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["uniqResults"]) ? $context["uniqResults"] : null)), "html", null, true));
            echo "\" ";
            if (((twig_length_filter($this->env, (isset($context["results"]) ? $context["results"] : null)) == 0) && ($this->getAttribute((isset($context["query"]) ? $context["query"] : null), 0, array(), "array") != ""))) {
                echo "data-empty=\"1\"";
            }
            echo "></div>

";
        } else {
            // line 47
            echo "
";
            // line 48
            $this->loadTemplate("header", "layouts.route", 48)->display($context);
            // line 49
            echo "
<section class=\"search search--route\" id=\"v-search-root\" v-cloak data-ids=\"";
            // line 50
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
            // line 63
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
            // line 79
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array()), "html", null, true));
            echo "</h1>
\t\t\t\t\t\t<div class=\"route__desc\">
\t\t\t\t\t\t\t";
            // line 81
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_content", array()));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 131
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"vsearch-hat vsearch-hat--soloroute\" v-cloak>
\t\t\t\t\t\t\t<div class=\"cont\">
\t\t\t\t\t\t\t\t<div class=\"vsearch-hat__tags\">
\t\t\t\t\t\t\t\t\t<div class=\"vsearch-hat-tag\">
\t\t\t\t\t\t\t\t\t\t<div class=\"vsearch-hat-tag__icon\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" viewBox=\"0 0 25 25\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.5 0C15.9512 0 19.0773 1.39942 21.3389 3.66107C23.6006 5.92272 25 9.04884 25 12.5C25 15.9512 23.6006 19.0773 21.3389 21.3389C19.0773 23.6006 15.9512 25 12.5 25C9.04885 25 5.92272 23.6006 3.66107 21.3389C1.39942 19.0773 0 15.9512 0 12.5C0 9.04884 1.39942 5.92272 3.66107 3.66107C5.92272 1.39942 9.04885 0 12.5 0ZM10.4167 6.35157C10.4167 5.89112 10.7891 5.51869 11.2495 5.51869C11.71 5.51869 12.0824 5.89112 12.0824 6.35157V13.1794H19.1653C19.6258 13.1794 19.9982 13.5518 19.9982 14.0123C19.9982 14.4727 19.6258 14.8452 19.1653 14.8452H11.2473C10.7868 14.8452 10.4144 14.4727 10.4144 14.0123V6.35157H10.4167ZM20.1607 4.84155C18.2015 2.88236 15.4907 1.66802 12.5 1.66802C9.50704 1.66802 6.79848 2.8801 4.83929 4.84155C2.8801 6.80074 1.66576 9.51156 1.66576 12.5023C1.66576 15.4952 2.87784 18.2038 4.83929 20.163C6.79848 22.1222 9.5093 23.3365 12.5 23.3365C15.493 23.3365 18.2015 22.1244 20.1607 20.163C22.1199 18.2038 23.3342 15.493 23.3342 12.5023C23.3342 9.51156 22.1222 6.80074 20.1607 4.84155Z\" fill=\"#E85768\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"vsearch-hat-tag__value\">
\t\t\t\t\t\t\t\t\t\t\t{{ myRouteFullDurationText }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"vsearch-hat-tag\">
\t\t\t\t\t\t\t\t\t\t<div class=\"vsearch-hat-tag__icon\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"23\" viewBox=\"0 0 20 23\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M3.68659 6.05764C2.87114 6.48613 2.35774 7.09164 2.35774 8.04484C2.35774 9.00232 2.87643 9.61055 3.66751 10.0392C4.50276 10.4917 5.50155 10.6466 5.98867 10.6466H12.4253C12.4389 10.6466 12.4529 10.6466 12.4672 10.6466C13.2399 10.6464 14.8788 10.6459 16.3491 11.191C17.1167 11.4755 17.9051 11.9313 18.5019 12.6706C19.1112 13.4255 19.4514 14.3905 19.4514 15.5611C19.4514 16.7317 19.1112 17.6968 18.5019 18.4515C17.9051 19.1909 17.1167 19.6466 16.3491 19.9312C14.8788 20.4762 13.2399 20.4757 12.4672 20.4756C12.4529 20.4756 12.4389 20.4756 12.4253 20.4756H6.24801V18.1629H12.4253C13.2272 18.1629 14.4786 18.1522 15.5157 17.7678C16.0154 17.5825 16.397 17.3336 16.6535 17.0159C16.8973 16.7138 17.0936 16.2696 17.0936 15.5611C17.0936 14.8526 16.8973 14.4083 16.6535 14.1062C16.397 13.7885 16.0154 13.5397 15.5157 13.3545C14.4786 12.97 13.2272 12.9593 12.4253 12.9593H5.98867C5.17902 12.9593 3.7729 12.7384 2.52746 12.0635C1.23782 11.3647 0 10.0938 0 8.04484C0 5.99153 1.24313 4.71798 2.57322 4.01905C3.85857 3.34361 5.32881 3.13037 6.24801 3.13037H15.9619V5.44306H6.24801C5.61111 5.44306 4.54676 5.60562 3.68659 6.05764Z\" fill=\"#E22C38\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M4.71476 18.7409C4.38922 18.7409 4.12532 18.9997 4.12532 19.3191C4.12532 19.6384 4.38922 19.8973 4.71476 19.8973C5.04029 19.8973 5.30419 19.6384 5.30419 19.3191C5.30419 18.9997 5.04029 18.7409 4.71476 18.7409ZM1.76758 19.3191C1.76758 17.7225 3.08707 16.4282 4.71476 16.4282C6.34243 16.4282 7.66193 17.7225 7.66193 19.3191C7.66193 20.9157 6.34243 22.2099 4.71476 22.2099C3.08707 22.2099 1.76758 20.9157 1.76758 19.3191Z\" fill=\"#E22C38\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M14.8377 4.2867L12.1348 1.63532L13.8019 0L18.1722 4.2867L13.8019 8.57339L12.1348 6.93807L14.8377 4.2867Z\" fill=\"#E22C38\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"vsearch-hat-tag__value\">
\t\t\t\t\t\t\t\t\t\t\t{{ activeRoute.common.distance }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"vsearch-hat-tag\">
\t\t\t\t\t\t\t\t\t\t<div class=\"vsearch-hat-tag__icon\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"26\" viewBox=\"0 0 19 26\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9.97076 25.5594C9.93356 25.5966 9.93356 25.5966 9.89636 25.6338C9.85915 25.6338 9.85915 25.671 9.82195 25.671C9.78474 25.671 9.74754 25.7082 9.71033 25.7082C9.67313 25.7454 9.59872 25.7454 9.56152 25.7454C9.52431 25.7454 9.4499 25.7454 9.4127 25.7826C9.37549 25.7826 9.37549 25.7826 9.33829 25.7826C9.30109 25.7826 9.22668 25.7826 9.18947 25.7454C9.15227 25.7454 9.07786 25.7082 9.04066 25.7082L8.92904 25.671C8.89184 25.671 8.85463 25.6338 8.85463 25.6338C8.81743 25.5966 8.81743 25.5966 8.78023 25.5594C7.92453 24.8525 7.10603 24.0712 6.28753 23.1783C5.50624 22.3226 4.76216 21.3925 4.05527 20.4252C3.3856 19.4951 2.79033 18.5278 2.23226 17.5232C1.7114 16.5559 1.26495 15.5514 0.892904 14.5841C0.818496 14.3237 0.818496 14.1004 0.930109 13.8772C1.04172 13.654 1.22774 13.468 1.45097 13.3936C1.7114 13.3192 1.93463 13.3192 2.15785 13.4308C2.38108 13.5424 2.5671 13.7284 2.64151 13.9516C2.97635 14.8445 3.3856 15.7746 3.86925 16.6675C4.35291 17.5977 4.94818 18.4906 5.58065 19.3835C6.17592 20.2392 6.8456 21.0577 7.51528 21.8017C8.11055 22.4714 8.74302 23.1039 9.37549 23.662C10.3428 22.8063 11.3101 21.7645 12.2402 20.6484C13.1703 19.4951 14.026 18.2301 14.7701 16.928C15.477 15.663 16.0351 14.3609 16.4071 13.0587C16.742 11.8682 16.9652 10.6404 16.9652 9.4499C16.9652 8.40818 16.7792 7.44087 16.4071 6.54796C16.0351 5.61786 15.477 4.79936 14.7701 4.09248C14.0632 3.3856 13.2447 2.82753 12.3146 2.45549C11.4217 2.08344 10.4544 1.89742 9.4127 1.89742C8.37098 1.89742 7.40366 2.08344 6.51076 2.45549C5.58065 2.82753 4.76216 3.3856 4.05527 4.09248C3.34839 4.79936 2.79033 5.61786 2.41828 6.54796C2.04624 7.44087 1.86022 8.40818 1.86022 9.4499V9.74754V10.008L1.89742 10.3056L1.93463 10.6032C1.97183 10.8637 1.89742 11.0869 1.7114 11.2729C1.56258 11.4589 1.33936 11.5706 1.07893 11.6078C0.818496 11.645 0.59527 11.5705 0.409248 11.3845C0.223226 11.2357 0.111613 11.0125 0.0744087 10.7521L0.0372043 10.4172L0 10.0824V9.74754V9.4127C0 8.14775 0.26043 6.92001 0.706883 5.80388C1.19054 4.65054 1.89742 3.60882 2.75312 2.75312C3.60882 1.89742 4.65054 1.19054 5.80388 0.706882C6.92001 0.26043 8.14775 0 9.4127 0C10.6776 0 11.9054 0.26043 13.0215 0.706882C14.1749 1.19054 15.2166 1.89742 16.0723 2.75312C16.928 3.60882 17.6349 4.65054 18.1185 5.80388C18.565 6.92001 18.8254 8.14775 18.8254 9.4127C18.8254 10.7521 18.6022 12.1286 18.1929 13.5052C17.7837 14.9561 17.1512 16.4071 16.3699 17.7837C15.5514 19.2718 14.5841 20.6856 13.5052 21.9878C12.389 23.3643 11.1613 24.5549 9.97076 25.5966V25.5594ZM9.37549 5.9899C9.89636 5.9899 10.4172 6.10151 10.9009 6.28753C11.3101 6.47356 11.7194 6.69678 12.0542 7.03162L12.1658 7.14323C12.5379 7.51528 12.8355 7.92452 13.0215 8.44539C13.2075 8.92904 13.3192 9.4127 13.3192 9.97076C13.3192 10.4916 13.2075 11.0125 13.0215 11.4961C12.8355 11.9798 12.5379 12.4263 12.1658 12.7983C11.7938 13.1703 11.3845 13.468 10.9009 13.654C10.4172 13.84 9.93356 13.9516 9.37549 13.9516C8.85463 13.9516 8.33377 13.84 7.85012 13.654C7.51528 13.5052 7.18044 13.3192 6.8828 13.0959L6.58517 12.7983C6.21313 12.4263 5.91549 12.017 5.72947 11.4961C5.54345 11.0125 5.43183 10.5288 5.43183 9.97076C5.43183 9.4499 5.54345 8.92904 5.72947 8.44539C5.91549 7.96173 6.21313 7.51528 6.58517 7.18044C6.95721 6.80839 7.36646 6.51076 7.85012 6.32474C8.33377 6.13872 8.81743 6.0271 9.37549 6.0271V5.9899ZM10.7521 8.40818C10.566 8.25936 10.38 8.11055 10.1568 8.03614C9.89636 7.92453 9.63593 7.88732 9.37549 7.88732C9.07786 7.88732 8.81743 7.92453 8.5942 8.03614C8.33377 8.14775 8.11055 8.29657 7.92453 8.48259C7.7385 8.66861 7.58969 8.89184 7.47807 9.15227C7.36646 9.4127 7.32926 9.67313 7.32926 9.93356C7.32926 10.2312 7.36646 10.4916 7.47807 10.7149C7.58969 10.9753 7.7385 11.1985 7.92453 11.3845L7.99893 11.4589C8.18496 11.6078 8.37098 11.7566 8.5942 11.8682C8.85463 11.9798 9.11506 12.017 9.37549 12.017C9.67313 12.017 9.93356 11.9798 10.1568 11.8682C10.4172 11.7566 10.6404 11.6078 10.8265 11.4217C11.0125 11.2357 11.1613 11.0125 11.2729 10.7521C11.3845 10.4916 11.4217 10.2312 11.4217 9.97076C11.4217 9.67313 11.3845 9.4127 11.2729 9.18947C11.1613 8.92904 11.0125 8.70582 10.8265 8.51979L10.7521 8.44539V8.40818Z\" fill=\"#E22C38\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"vsearch-hat-tag__value\">
\t\t\t\t\t\t\t\t\t\t\t{{ myRoutePointsCountText }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"vsearch-hat-start\" v-cloak>
\t\t\t\t\t\t\t\t\t<div class=\"vselect\">
\t\t\t\t\t\t\t\t\t\t<div class=\"vselect-trigger\" @click.stop=\"isMyRouteStartPointsListActive = !isMyRouteStartPointsListActive\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"vselect-trigger__icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"24\" viewBox=\"0 0 18 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9.28139 23.7922C9.24675 23.8268 9.24675 23.8268 9.21212 23.8615C9.17749 23.8615 9.17749 23.8961 9.14286 23.8961C9.10823 23.8961 9.07359 23.9307 9.03896 23.9307C9.00433 23.9654 8.93506 23.9654 8.90043 23.9654C8.8658 23.9654 8.79654 23.9654 8.7619 24C8.72727 24 8.72727 24 8.69264 24C8.65801 24 8.58874 24 8.55411 23.9654C8.51948 23.9654 8.45022 23.9307 8.41558 23.9307L8.31169 23.8961C8.27706 23.8961 8.24242 23.8615 8.24242 23.8615C8.20779 23.8268 8.20779 23.8268 8.17316 23.7922C7.37662 23.1342 6.61472 22.4069 5.85281 21.5758C5.12554 20.7792 4.4329 19.9134 3.77489 19.013C3.15152 18.1472 2.5974 17.2468 2.07792 16.3117C1.59307 15.4113 1.17749 14.4762 0.831169 13.5758C0.761905 13.3333 0.761905 13.1255 0.865801 12.9177C0.969697 12.71 1.14286 12.5368 1.35065 12.4675C1.59307 12.3983 1.80087 12.3983 2.00866 12.5022C2.21645 12.6061 2.38961 12.7792 2.45887 12.987C2.77056 13.8182 3.15152 14.684 3.60173 15.5152C4.05195 16.381 4.60606 17.2121 5.19481 18.0433C5.74892 18.8398 6.37229 19.6017 6.99567 20.2944C7.54978 20.9177 8.13853 21.5065 8.72727 22.026C9.62771 21.2294 10.5281 20.2597 11.3939 19.2208C12.2597 18.1472 13.0563 16.9697 13.7489 15.7576C14.4069 14.5801 14.9264 13.368 15.2727 12.1558C15.5844 11.0476 15.7922 9.90476 15.7922 8.79654C15.7922 7.82684 15.619 6.92641 15.2727 6.09524C14.9264 5.22944 14.4069 4.46753 13.7489 3.80952C13.0909 3.15152 12.329 2.63203 11.4632 2.28571C10.632 1.93939 9.7316 1.76623 8.7619 1.76623C7.79221 1.76623 6.89177 1.93939 6.06061 2.28571C5.19481 2.63203 4.4329 3.15152 3.77489 3.80952C3.11688 4.46753 2.5974 5.22944 2.25108 6.09524C1.90476 6.92641 1.7316 7.82684 1.7316 8.79654V9.07359V9.31602L1.76623 9.59307L1.80087 9.87013C1.8355 10.1126 1.76623 10.3203 1.59307 10.4935C1.45455 10.6667 1.24675 10.7706 1.00433 10.8052C0.761905 10.8398 0.554113 10.7706 0.380952 10.5974C0.207792 10.4589 0.103896 10.2511 0.0692641 10.0087L0.034632 9.69697L0 9.38528V9.07359V8.7619C0 7.58442 0.242424 6.44156 0.658009 5.4026C1.10823 4.329 1.76623 3.35931 2.56277 2.56277C3.35931 1.76623 4.329 1.10823 5.4026 0.658009C6.44156 0.242424 7.58442 0 8.7619 0C9.93939 0 11.0823 0.242424 12.1212 0.658009C13.1948 1.10823 14.1645 1.76623 14.961 2.56277C15.7576 3.35931 16.4156 4.329 16.8658 5.4026C17.2814 6.44156 17.5238 7.58442 17.5238 8.7619C17.5238 10.0087 17.316 11.29 16.9351 12.5714C16.5541 13.9221 15.9654 15.2727 15.2381 16.5541C14.4762 17.9394 13.5758 19.2554 12.5714 20.4675C11.5325 21.7489 10.3896 22.8571 9.28139 23.8268V23.7922ZM8.72727 5.57576C9.21212 5.57576 9.69697 5.67965 10.1472 5.85281C10.5281 6.02597 10.9091 6.23377 11.2208 6.54545L11.3247 6.64935C11.671 6.99567 11.9481 7.37662 12.1212 7.86147C12.2944 8.31169 12.3983 8.7619 12.3983 9.28139C12.3983 9.76623 12.2944 10.2511 12.1212 10.7013C11.9481 11.1515 11.671 11.5671 11.3247 11.9134C10.9784 12.2597 10.5974 12.5368 10.1472 12.71C9.69697 12.8831 9.24675 12.987 8.72727 12.987C8.24242 12.987 7.75758 12.8831 7.30736 12.71C6.99567 12.5714 6.68398 12.3983 6.40693 12.1905L6.12987 11.9134C5.78355 11.5671 5.50649 11.1861 5.33333 10.7013C5.16017 10.2511 5.05628 9.80087 5.05628 9.28139C5.05628 8.79654 5.16017 8.31169 5.33333 7.86147C5.50649 7.41126 5.78355 6.99567 6.12987 6.68398C6.47619 6.33766 6.85714 6.06061 7.30736 5.88745C7.75758 5.71429 8.20779 5.61039 8.72727 5.61039V5.57576ZM10.0087 7.82684C9.8355 7.68831 9.66234 7.54978 9.45455 7.48052C9.21212 7.37662 8.9697 7.34199 8.72727 7.34199C8.45022 7.34199 8.20779 7.37662 8 7.48052C7.75758 7.58442 7.54978 7.72294 7.37662 7.8961C7.20346 8.06926 7.06493 8.27706 6.96104 8.51948C6.85714 8.7619 6.82251 9.00433 6.82251 9.24675C6.82251 9.52381 6.85714 9.76623 6.96104 9.97403C7.06493 10.2165 7.20346 10.4242 7.37662 10.5974L7.44589 10.6667C7.61905 10.8052 7.79221 10.9437 8 11.0476C8.24242 11.1515 8.48485 11.1861 8.72727 11.1861C9.00433 11.1861 9.24675 11.1515 9.45455 11.0476C9.69697 10.9437 9.90476 10.8052 10.0779 10.632C10.2511 10.4589 10.3896 10.2511 10.4935 10.0087C10.5974 9.76623 10.632 9.52381 10.632 9.28139C10.632 9.00433 10.5974 8.7619 10.4935 8.55411C10.3896 8.31169 10.2511 8.1039 10.0779 7.93074L10.0087 7.86147V7.82684Z\" fill=\"#2B2A29\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"vselect-trigger__title\">
\t\t\t\t\t\t\t\t\t\t\t\t{{myRouteStartPointText}}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"vselect-list\" :class=\"{'vselect-list--active': isMyRouteStartPointsListActive}\" v-click-outside=\"myRouteStartPointsListActiveClickOutside\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"vselect-list__item\" v-for=\"item in myRouteStartPointsList\" :key=\"item.name\" @click.stop=\"setMyRouteStartPoint(item)\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ item.name }}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"search-list search-list--route search-list--soloroute\">
\t\t\t\t\t\t\t<div class=\"search-results__wrapper\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tv-for=\"(item, i) in items\"
\t\t\t\t\t\t\t\t\t:key=\"item.path\" 
\t\t\t\t\t\t\t\t\tclass=\"vcard vcard--noedit\"
\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<div class=\"vcard-hat\">
\t\t\t\t\t\t\t\t\t\t<div class=\"vcard-hat__block vcard-hat__block--left\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard-rangetime\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard-rangetime__icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"23\" height=\"30\" viewBox=\"0 0 23 30\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M14.0321 0.0148948C15.5874 0.173879 16.7175 1.56326 16.5585 3.11854C16.3996 4.67382 15.0102 5.80399 13.4549 5.645C11.9013 5.48602 10.7694 4.09664 10.9284 2.54136C11.0874 0.987808 12.4768 -0.144089 14.0321 0.0148948ZM0.777639 29.1919C0.349074 29.1919 0 28.8446 0 28.4143C0 27.9857 0.347345 27.6366 0.777639 27.6366H16.4497C16.3114 27.3066 16.168 26.9281 16.0038 26.503C15.0102 23.9212 13.8645 21.4345 12.8708 18.8735C12.3541 20.1471 11.789 21.3965 11.1842 22.5958C11.1185 22.7271 11.0356 22.8464 10.9457 22.938C10.925 22.9794 10.8973 23.0105 10.8662 23.0313C9.79653 23.6862 8.01488 24.4103 7.05579 24.8561C4.99937 25.81 3.84501 26.1021 3.36633 25.1378C2.83754 24.0768 3.74478 23.4132 5.69925 22.2657C6.41986 21.8424 7.42905 21.1995 8.33975 20.6448L9.39561 14.8903C9.39906 14.8626 9.40253 14.8367 9.40772 14.809C9.68939 13.2641 9.95205 11.8246 10.1974 10.4836L10.4152 9.28608L9.08629 9.53665L7.84552 9.76995L7.80059 11.3321C7.7522 13.0015 7.68654 13.8707 6.77411 13.8569C5.89106 13.843 5.76318 13.0429 5.64913 11.3753C5.59556 10.5977 5.58173 10.0084 5.49532 9.11327C5.43657 8.51881 5.54544 7.99002 6.27469 7.85523C6.29197 7.84831 6.30924 7.84313 6.32825 7.83794C7.01603 7.63921 7.74874 7.42666 8.52983 7.20028C9.36623 6.95835 10.4152 6.61964 11.3795 6.34142C11.5333 6.27921 11.7061 6.25156 11.8823 6.26884C12.482 6.32932 13.0799 6.39154 13.6795 6.45202C14.2792 6.5125 14.8771 6.57471 15.4768 6.63692C15.6254 6.65248 15.7653 6.69913 15.8863 6.76826C16.0885 6.78727 16.327 6.98773 16.479 7.28496C16.9335 8.18011 17.3569 9.01304 17.7527 9.78895L18.2382 10.7446L19.562 10.2313C21.119 9.62651 21.945 9.35002 22.2872 10.1968C22.6172 11.0159 21.9294 11.4462 20.4381 12.1979C19.7417 12.5487 19.2042 12.7906 18.4145 13.2192C17.8892 13.5043 17.3586 13.6098 16.9508 12.9894C16.9318 12.9669 16.9128 12.941 16.8972 12.9151L16.2544 11.9059L16.1697 15.5055C16.1697 15.5279 16.168 15.5504 16.1663 15.5729C16.9715 19.0031 17.8494 22.2485 18.6426 25.6372C19.1057 27.6142 19.4583 28.632 18.5631 29.0485C18.4352 29.1418 18.278 29.1971 18.1069 29.1971H18.0499C17.9358 29.2127 17.8304 29.2127 17.7319 29.1971H0.784558L0.777639 29.1919Z\" fill=\"#E85768\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<template v-if=\"myRouteStartPoint\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard-rangetime__text\" v-if=\"activeRoute.paths.length > 0\">{{activeRoute.paths[i].distance}}, {{activeRoute.paths[i].duration.text}}</div>
\t\t\t\t\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t\t\t\t\t\t<template v-else>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard-rangetime__text\" v-if=\"i > 0 && activeRoute.paths.length > 0\">{{activeRoute.paths[i - 1].distance}}, {{activeRoute.paths[i - 1].duration.text}}</div>
\t\t\t\t\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"vcard-hat__line\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"vcard-hat__block vcard-hat__block--right\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard-pin\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard-pin__icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"37\" viewBox=\"0 0 32 37\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M19.3898 31.909C19.6683 31.4907 20.0959 31.1978 20.5778 31.0554C27.1837 29.104 32 23.0379 32 15.857C32 7.09941 24.8366 0 16 0C7.16344 0 0 7.09941 0 15.857C0 23.0381 4.81667 29.1044 11.4228 31.0556C11.9048 31.1979 12.3325 31.4909 12.611 31.9093L15.5841 36.3749C15.782 36.6721 16.2186 36.6721 16.4165 36.3749L19.3898 31.909Z\" fill=\"#336AF7\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard-pin__text\">{{i + 1}}</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard-remove\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard-remove__button\" @click.stop=\"removeItemFromMyRouteByID(item.id)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"23\" height=\"24\" viewBox=\"0 0 23 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.57159 17.3144C5.43017 17.173 5.35239 17.0104 5.33825 16.8265C5.35239 16.6427 5.43017 16.48 5.57159 16.3386L9.98394 11.9263L5.63523 7.57756C5.49381 7.43614 5.41603 7.27351 5.40189 7.08966C5.41603 6.90581 5.49381 6.74318 5.63523 6.60175L6.31406 5.92293C6.45548 5.78151 6.61104 5.7108 6.78075 5.7108C6.97874 5.7108 7.14844 5.78151 7.28986 5.92293L11.6386 10.2716L15.9236 5.98657C16.0651 5.84515 16.2206 5.77444 16.3903 5.77444C16.5883 5.77444 16.758 5.84515 16.8994 5.98657L17.6419 6.72903C17.7833 6.87046 17.847 7.03309 17.8328 7.21694C17.847 7.40079 17.7833 7.56342 17.6419 7.70484L13.3568 11.9899L17.7268 16.3598C17.8682 16.5013 17.9318 16.6639 17.9177 16.8477C17.9318 17.0316 17.8682 17.1942 17.7268 17.3356L17.0479 18.0145C16.9065 18.1559 16.7368 18.2266 16.5388 18.2266C16.3691 18.2266 16.2136 18.1559 16.0721 18.0145L11.7022 13.6445L7.28986 18.0569C7.14844 18.1983 6.97874 18.269 6.78075 18.269C6.61104 18.269 6.45548 18.1983 6.31406 18.0569L5.57159 17.3144Z\" fill=\"#E85768\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"vcard__wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"vcard__left\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard__top\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard__img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img :src=\"item.field_gallery[0].src\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard__main\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard__header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard__title\">{{item.field_header}}</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard__time\">{{myRouteItemDurationText(item.field_event_duration)}}</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard__tags\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard-tag vcard-tag--time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard-tag__icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M10 0C12.7609 0 15.2618 1.11954 17.0711 2.92886C18.8805 4.73817 20 7.23908 20 10C20 12.7609 18.8805 15.2618 17.0711 17.0711C15.2618 18.8805 12.7609 20 10 20C7.23908 20 4.73817 18.8805 2.92886 17.0711C1.11954 15.2618 0 12.7609 0 10C0 7.23908 1.11954 4.73817 2.92886 2.92886C4.73817 1.11954 7.23908 0 10 0ZM8.33333 5.08126C8.33333 4.71289 8.63128 4.41495 8.99964 4.41495C9.368 4.41495 9.66595 4.71289 9.66595 5.08126V10.5435H15.3323C15.7006 10.5435 15.9986 10.8415 15.9986 11.2098C15.9986 11.5782 15.7006 11.8761 15.3323 11.8761H8.99783C8.62947 11.8761 8.33153 11.5782 8.33153 11.2098V5.08126H8.33333ZM16.1286 3.87324C14.5612 2.30589 12.3926 1.33442 10 1.33442C7.60563 1.33442 5.43879 2.30408 3.87143 3.87324C2.30408 5.44059 1.33261 7.60925 1.33261 10.0018C1.33261 12.3962 2.30228 14.563 3.87143 16.1304C5.43879 17.6977 7.60744 18.6692 10 18.6692C12.3944 18.6692 14.5612 17.6995 16.1286 16.1304C17.6959 14.563 18.6674 12.3944 18.6674 10.0018C18.6674 7.60925 17.6977 5.44059 16.1286 3.87324Z\" fill=\"black\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard-tag__title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t9:00-22:00
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard-tag__subtitle\">открыто</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard-tag vcard-tag--place\" v-if=\"item.field_address\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard-tag__icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"24\" viewBox=\"0 0 18 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9.28139 23.7922C9.24675 23.8268 9.24675 23.8268 9.21212 23.8615C9.17749 23.8615 9.17749 23.8961 9.14286 23.8961C9.10823 23.8961 9.07359 23.9307 9.03896 23.9307C9.00433 23.9654 8.93506 23.9654 8.90043 23.9654C8.8658 23.9654 8.79654 23.9654 8.7619 24C8.72727 24 8.72727 24 8.69264 24C8.65801 24 8.58874 24 8.55411 23.9654C8.51948 23.9654 8.45022 23.9307 8.41558 23.9307L8.31169 23.8961C8.27706 23.8961 8.24242 23.8615 8.24242 23.8615C8.20779 23.8268 8.20779 23.8268 8.17316 23.7922C7.37662 23.1342 6.61472 22.4069 5.85281 21.5758C5.12554 20.7792 4.4329 19.9134 3.77489 19.013C3.15152 18.1472 2.5974 17.2468 2.07792 16.3117C1.59307 15.4113 1.17749 14.4762 0.831169 13.5758C0.761905 13.3333 0.761905 13.1255 0.865801 12.9177C0.969697 12.71 1.14286 12.5368 1.35065 12.4675C1.59307 12.3983 1.80087 12.3983 2.00866 12.5022C2.21645 12.6061 2.38961 12.7792 2.45887 12.987C2.77056 13.8182 3.15152 14.684 3.60173 15.5152C4.05195 16.381 4.60606 17.2121 5.19481 18.0433C5.74892 18.8398 6.37229 19.6017 6.99567 20.2944C7.54978 20.9177 8.13853 21.5065 8.72727 22.026C9.62771 21.2294 10.5281 20.2597 11.3939 19.2208C12.2597 18.1472 13.0563 16.9697 13.7489 15.7576C14.4069 14.5801 14.9264 13.368 15.2727 12.1558C15.5844 11.0476 15.7922 9.90476 15.7922 8.79654C15.7922 7.82684 15.619 6.92641 15.2727 6.09524C14.9264 5.22944 14.4069 4.46753 13.7489 3.80952C13.0909 3.15152 12.329 2.63203 11.4632 2.28571C10.632 1.93939 9.7316 1.76623 8.7619 1.76623C7.79221 1.76623 6.89177 1.93939 6.06061 2.28571C5.19481 2.63203 4.4329 3.15152 3.77489 3.80952C3.11688 4.46753 2.5974 5.22944 2.25108 6.09524C1.90476 6.92641 1.7316 7.82684 1.7316 8.79654V9.07359V9.31602L1.76623 9.59307L1.80087 9.87013C1.8355 10.1126 1.76623 10.3203 1.59307 10.4935C1.45455 10.6667 1.24675 10.7706 1.00433 10.8052C0.761905 10.8398 0.554113 10.7706 0.380952 10.5974C0.207792 10.4589 0.103896 10.2511 0.0692641 10.0087L0.034632 9.69697L0 9.38528V9.07359V8.7619C0 7.58442 0.242424 6.44156 0.658009 5.4026C1.10823 4.329 1.76623 3.35931 2.56277 2.56277C3.35931 1.76623 4.329 1.10823 5.4026 0.658009C6.44156 0.242424 7.58442 0 8.7619 0C9.93939 0 11.0823 0.242424 12.1212 0.658009C13.1948 1.10823 14.1645 1.76623 14.961 2.56277C15.7576 3.35931 16.4156 4.329 16.8658 5.4026C17.2814 6.44156 17.5238 7.58442 17.5238 8.7619C17.5238 10.0087 17.316 11.29 16.9351 12.5714C16.5541 13.9221 15.9654 15.2727 15.2381 16.5541C14.4762 17.9394 13.5758 19.2554 12.5714 20.4675C11.5325 21.7489 10.3896 22.8571 9.28139 23.8268V23.7922ZM8.72727 5.57576C9.21212 5.57576 9.69697 5.67965 10.1472 5.85281C10.5281 6.02597 10.9091 6.23377 11.2208 6.54545L11.3247 6.64935C11.671 6.99567 11.9481 7.37662 12.1212 7.86147C12.2944 8.31169 12.3983 8.7619 12.3983 9.28139C12.3983 9.76623 12.2944 10.2511 12.1212 10.7013C11.9481 11.1515 11.671 11.5671 11.3247 11.9134C10.9784 12.2597 10.5974 12.5368 10.1472 12.71C9.69697 12.8831 9.24675 12.987 8.72727 12.987C8.24242 12.987 7.75758 12.8831 7.30736 12.71C6.99567 12.5714 6.68398 12.3983 6.40693 12.1905L6.12987 11.9134C5.78355 11.5671 5.50649 11.1861 5.33333 10.7013C5.16017 10.2511 5.05628 9.80087 5.05628 9.28139C5.05628 8.79654 5.16017 8.31169 5.33333 7.86147C5.50649 7.41126 5.78355 6.99567 6.12987 6.68398C6.47619 6.33766 6.85714 6.06061 7.30736 5.88745C7.75758 5.71429 8.20779 5.61039 8.72727 5.61039V5.57576ZM10.0087 7.82684C9.8355 7.68831 9.66234 7.54978 9.45455 7.48052C9.21212 7.37662 8.9697 7.34199 8.72727 7.34199C8.45022 7.34199 8.20779 7.37662 8 7.48052C7.75758 7.58442 7.54978 7.72294 7.37662 7.8961C7.20346 8.06926 7.06493 8.27706 6.96104 8.51948C6.85714 8.7619 6.82251 9.00433 6.82251 9.24675C6.82251 9.52381 6.85714 9.76623 6.96104 9.97403C7.06493 10.2165 7.20346 10.4242 7.37662 10.5974L7.44589 10.6667C7.61905 10.8052 7.79221 10.9437 8 11.0476C8.24242 11.1515 8.48485 11.1861 8.72727 11.1861C9.00433 11.1861 9.24675 11.1515 9.45455 11.0476C9.69697 10.9437 9.90476 10.8052 10.0779 10.632C10.2511 10.4589 10.3896 10.2511 10.4935 10.0087C10.5974 9.76623 10.632 9.52381 10.632 9.28139C10.632 9.00433 10.5974 8.7619 10.4935 8.55411C10.3896 8.31169 10.2511 8.1039 10.0779 7.93074L10.0087 7.86147V7.82684Z\" fill=\"#2B2A29\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard-tag__title\">{{item.field_address}}</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard-tag vcard-tag--price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard-tag__icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M10.3263 7.05947H12.1406C13.0972 7.05947 13.691 7.35641 14.0209 7.78508C14.3837 8.21405 14.4827 8.80791 14.4827 9.40148C14.4827 10.1934 14.2848 10.787 13.8889 11.1499C13.4931 11.5129 12.8993 11.7106 12.1406 11.7106H10.3263V7.05947Z\" fill=\"#336AF7\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M12 24C18.6274 24 24 18.6276 24 12C24 5.37269 18.6274 0 12 0C5.37258 0 0 5.37269 0 12C0 18.6276 5.37258 24 12 24ZM12.1406 13.327C13.3612 13.327 14.3838 12.9644 15.0765 12.2716H15.1095C15.7693 11.6117 16.1651 10.6221 16.1651 9.40148C16.1651 8.28006 15.8682 7.22437 15.1095 6.46561C14.4498 5.83888 13.5261 5.44307 12.1736 5.44307H9.66659C9.40269 5.44307 9.13879 5.57511 8.97385 5.74C8.77593 5.93776 8.67696 6.16868 8.67696 6.43275V14.7457H8.51202C8.28111 14.7457 8.08319 14.8114 7.91825 14.9766C7.8903 15.0115 7.86382 15.0478 7.83946 15.0856C7.74881 15.2267 7.68734 15.3881 7.68734 15.5702C7.68734 15.8011 7.75332 15.9991 7.91825 16.164C8.08319 16.2961 8.28111 16.3949 8.51202 16.3949H8.67696V18.2094C8.67696 18.4403 8.77593 18.6381 8.90787 18.803C9.07281 18.9679 9.27075 19.067 9.50164 19.067C9.73256 19.067 9.93048 18.9679 10.0954 18.803C10.2274 18.6381 10.3263 18.4403 10.3263 18.2094V16.3949H13.922C14.1529 16.3949 14.3508 16.3289 14.5157 16.164C14.6477 15.9991 14.7466 15.8011 14.7466 15.5702C14.7466 15.3392 14.6807 15.1415 14.5157 14.9766C14.3508 14.8446 14.1529 14.7457 13.922 14.7457H10.3263V13.327H12.1406Z\" fill=\"#336AF7\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard-tag__title\">{{myRouteItemPriceText(item.field_prices)}}</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard-tag vcard-tag--workload\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard-tag__icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"workload-icon\" :class=\"myRouteItemWorkloadClass(item.field_event_workload_percent)\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard-tag__title\">{{myRouteItemWorkloadText(item.field_event_workload_percent)}}</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard__desc\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard__text\">

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"vcard__right\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"vcard__updown\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.0123 12.0038V3.40579L9.71929 4.70679C9.62704 4.8023 9.5167 4.87848 9.39469 4.93089C9.27269 4.9833 9.14147 5.01088 9.00869 5.01204C8.87591 5.01319 8.74423 4.98789 8.62133 4.93761C8.49844 4.88733 8.38679 4.81307 8.29289 4.71918C8.199 4.62529 8.12475 4.51364 8.07447 4.39074C8.02419 4.26784 7.99888 4.13616 8.00004 4.00339C8.00119 3.87061 8.02878 3.73939 8.08119 3.61738C8.1336 3.49538 8.20978 3.38503 8.30529 3.29279L11.3053 0.292787C11.4928 0.105316 11.7471 0 12.0123 0C12.2775 0 12.5318 0.105316 12.7193 0.292787L15.7193 3.29279C15.9014 3.48139 16.0022 3.73399 16 3.99619C15.9977 4.25838 15.8925 4.5092 15.7071 4.6946C15.5217 4.88001 15.2709 4.98518 15.0087 4.98746C14.7465 4.98974 14.4939 4.88894 14.3053 4.70679L13.0123 3.40679V12.0038C13.0123 12.269 12.9069 12.5234 12.7194 12.7109C12.5319 12.8984 12.2775 13.0038 12.0123 13.0038C11.7471 13.0038 11.4927 12.8984 11.3052 12.7109C11.1176 12.5234 11.0123 12.269 11.0123 12.0038ZM3.01229 3.99579C3.01229 3.73057 3.11765 3.47622 3.30518 3.28868C3.49272 3.10114 3.74707 2.99579 4.01229 2.99579C4.2775 2.99579 4.53186 3.10114 4.71939 3.28868C4.90693 3.47622 5.01229 3.73057 5.01229 3.99579V12.5938L6.30529 11.2928C6.49389 11.1106 6.74649 11.0098 7.00869 11.0121C7.27089 11.0144 7.5217 11.1196 7.70711 11.305C7.89251 11.4904 7.99768 11.7412 7.99996 12.0034C8.00224 12.2656 7.90145 12.5182 7.71929 12.7068L4.71929 15.7068C4.53176 15.8943 4.27745 15.9996 4.01229 15.9996C3.74712 15.9996 3.49282 15.8943 3.30529 15.7068L0.305288 12.7068C0.209778 12.6145 0.133596 12.5042 0.0811869 12.3822C0.0287779 12.2602 0.00119157 12.129 3.77571e-05 11.9962C-0.00111606 11.8634 0.0241854 11.7317 0.0744663 11.6088C0.124747 11.4859 0.199 11.3743 0.292893 11.2804C0.386786 11.1865 0.498438 11.1122 0.621334 11.062C0.744231 11.0117 0.87591 10.9864 1.00869 10.9875C1.14147 10.9887 1.27269 11.0163 1.39469 11.0687C1.5167 11.1211 1.62704 11.1973 1.71929 11.2928L3.01229 12.5928V3.99679V3.99579Z\" fill=\"black\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"vsearch-bt\">
\t\t\t\t\t\t\t\t<div class=\"cont\">
\t\t\t\t\t\t\t\t\t<div class=\"vsearch-pp\" v-if=\"myRoutePaidItems.length > 0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"vsearch-pp__content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"vsearch-pp-header\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vsearch-pp__header-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"28\" viewBox=\"0 0 24 28\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M4.51653 7.42122C3.5175 7.94618 2.88853 8.68801 2.88853 9.85579C2.88853 11.0288 3.52399 11.774 4.49316 12.2991C5.51644 12.8535 6.74009 13.0433 7.33686 13.0433H15.2225C15.2393 13.0433 15.2564 13.0433 15.2738 13.0433C16.2206 13.043 18.2284 13.0425 20.0297 13.7103C20.9701 14.0588 21.936 14.6172 22.6671 15.5229C23.4136 16.4477 23.8303 17.6301 23.8303 19.0642C23.8303 20.4982 23.4136 21.6806 22.6671 22.6053C21.936 23.5111 20.9701 24.0694 20.0297 24.418C18.2284 25.0857 16.2206 25.0851 15.2738 25.085C15.2564 25.085 15.2393 25.085 15.2225 25.085H7.65459V22.2517H15.2225C16.205 22.2517 17.7381 22.2386 19.0087 21.7676C19.6209 21.5406 20.0884 21.2356 20.4026 20.8465C20.7014 20.4763 20.9418 19.9321 20.9418 19.0642C20.9418 18.1962 20.7014 17.6519 20.4026 17.2817C20.0884 16.8925 19.6209 16.5877 19.0087 16.3607C17.7381 15.8897 16.205 15.8767 15.2225 15.8767H7.33686C6.34494 15.8767 4.62227 15.6059 3.09645 14.7792C1.51648 13.9231 0 12.366 0 9.85579C0 7.34023 1.52299 5.77997 3.15251 4.9237C4.72723 4.09621 6.52845 3.83496 7.65459 3.83496H19.5553V6.66829H7.65459C6.8743 6.66829 5.57035 6.86745 4.51653 7.42122Z\" fill=\"#E22C38\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.77667 22.96C5.37785 22.96 5.05454 23.2771 5.05454 23.6684C5.05454 24.0595 5.37785 24.3767 5.77667 24.3767C6.17549 24.3767 6.49881 24.0595 6.49881 23.6684C6.49881 23.2771 6.17549 22.96 5.77667 22.96ZM2.16602 23.6684C2.16602 21.7124 3.78256 20.1267 5.77667 20.1267C7.77077 20.1267 9.38733 21.7124 9.38733 23.6684C9.38733 25.6244 7.77077 27.21 5.77667 27.21C3.78256 27.21 2.16602 25.6244 2.16602 23.6684Z\" fill=\"#E22C38\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M18.1786 5.25174L14.8672 2.00346L16.9096 0L22.2637 5.25174L16.9096 10.5035L14.8672 8.5L18.1786 5.25174Z\" fill=\"#E22C38\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\tПлатные места на маршруте
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"vsearch-pp-list\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vsearch-pp-listitem\" v-for=\"item in myRoutePaidItems\" :key=\"item.id\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vsearch-pp-listitem__block vsearch-pp-listitem__block--title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"workload-icon workload-icon--low\" :class=\"myRouteItemWorkloadClass(item.field_event_workload_percent)\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vsearch-pp-listitem__title\">{{item.field_header}}</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"vsearch-pp-listitem__block vsearch-pp-listitem__block--price\">от {{item.field_prices}} ₽</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"vsearch-pp__action\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"v-btn v-btn--color-acc\" :href=\"myRoutePaidLink\" target=\"_blank\">Забронировать</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"vsearch-frs\">
\t\t\t\t\t\t\t\t\t\t<div class=\"vsearch-frs__img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/site/theme/images/friends.png\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"vsearch-frs__action\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"v-btn\" href=\"https://vdnh.ru/visitors/loyalty/\" target=\"_blank\">Получить скидку 5%</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"vsearch-frs__desc\">
\t\t\t\t\t\t\t\t\t\t\tРегистрируйтесь в программе лояльности «Друзья ВДНХ», чтобы получить скидку на билеты.
\t\t\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t\t\tПосле регистрации вы получите накопительную виртуальную или пластиковую карту. Базовый уровень скидки — 5%.
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"obj-cards obj-cards--gtk\" v-if=\"goodToKnow.length > 0\">
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
\t\t\t\t\t<div class=\"obj-cards obj-cards--hfull\" v-if=\"helpfull.length > 0\">
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
            // line 417
            $this->loadTemplate("vfb", "layouts.route", 417)->display($context);
            // line 418
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"search-item search-item--map\">
\t\t\t<span class=\"search-switchmode\" @click=\"isSearchShowlist = true\">Список</span>
\t\t\t<div id=\"vdnhmap\" style=\"width: 100%; height: calc(100vh - 63px);\"></div>
\t\t</div>
\t</div>
</section>
<script src=\"https://api-maps.yandex.ru/2.1/?apikey=b303c4d1-e74e-4a8d-942f-15e384f9386b&lang=ru_RU\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\twindow.PAGE_MAP_FIELD_ISROUTE = ";
            // line 429
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_map_isroute", array())) ? ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_map_isroute", array())) : (0)), "html", null, true));
            echo ";
    //ymaps.ready(init); //------------------------->>
    function init(){
        // Создание карты.
\t\tvar myMap = new ymaps.Map('map', {
\t\t\tcenter: [";
            // line 434
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent_page", array()), "parent_page", array()), "field_coords", array()), "html", null, true));
            echo "],
\t\t\tcontrols: ['zoomControl','routePanelControl'],
            zoom: 12
        }, {
            searchControlProvider: 'yandex#search'
        })
\t\t
\t\tvar control = myMap.controls.get('routePanelControl');
\t\tcontrol.options.set('float', 'right');
\t\t// Задание состояния для панели маршрутизации.
\t\tcontrol.routePanel.state.set({
\t\t\t// Флаг, запрещающий пользователям изменять
\t\t\t// адрес начальной точки в поле ввода.
\t\t\tfromEnabled: false,
\t\t\t// Флаг, запрещающий пользователям изменять
\t\t\t// адрес конечной точки в поле ввода.
\t\t\ttoEnabled: false
\t\t});
\t\t
        var\tobjectManager = new ymaps.ObjectManager({
\t\t\tclusterize: true,
\t\t\tgridSize: 32,
\t\t\tclusterDisableClickZoom: true
\t\t});
\t\t
\t\tobjectManager.objects.options.set('preset', 'islands#redStretchyIcon')
\t\tobjectManager.clusters.options.set('preset', 'islands#redClusterIcons')
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
\t\tvar myPolyline = new ymaps.Polyline([
            // Указываем координаты вершин ломаной.
            [55.80, 37.50],
            [55.80, 37.40],
            [55.70, 37.50],
            [55.70, 37.40]
        ], {
            // Описываем свойства геообъекта.
            // Содержимое балуна.
            balloonContent: \"Ломаная линия\"
        }, {
            // Задаем опции геообъекта.
            // Отключаем кнопку закрытия балуна.
            balloonCloseButton: false,
            // Цвет линии.
            strokeColor: \"#000000\",
            // Ширина линии.
            strokeWidth: 4,
            // Коэффициент прозрачности.
            strokeOpacity: 0.5
        });
\t\tconsole.log(myPolyline)
\t\t
\t\tmyMap.geoObjects.add(objectManager)//.add(myPolyline);
\t\t
\t\tdocument.addEventListener('redrawMap', function(e) {
\t\t\tobjectManager.removeAll()
\t\t\tobjectManager.add(e.detail.json)
\t\t\tconsole.log(e.detail.json)
\t\t\tlet polyline = new ymaps.Polyline(
\t\t\t\t// Указываем координаты вершин ломаной.
\t\t\t\te.detail.polyline
\t\t\t, {
\t\t\t\t// Описываем свойства геообъекта.
\t\t\t\t// Содержимое балуна.
\t\t\t\t//balloonContent: \"Ломаная линия\"
\t\t\t}, {
\t\t\t\t// Задаем опции геообъекта.
\t\t\t\t// Отключаем кнопку закрытия балуна.
\t\t\t\tballoonCloseButton: false,
\t\t\t\t// Цвет линии.
\t\t\t\tstrokeColor: \"#DD0A23\",
\t\t\t\t// Ширина линии.
\t\t\t\tstrokeWidth: 2,
\t\t\t\t// Коэффициент прозрачности.
\t\t\t\tstrokeOpacity: 1
\t\t\t})
\t\t\t//console.log(polyline)
\t\t\t
\t\t\t
\t\t\tvar multiRoute = new ymaps.multiRouter.MultiRoute({
\t\t\t\t// Описание опорных точек мультимаршрута.
\t\t\t\treferencePoints: e.detail.polyline,
\t\t\t\t// Параметры маршрутизации.
\t\t\t\tparams: {
\t\t\t\t\t// Ограничение на максимальное количество маршрутов, возвращаемое маршрутизатором.
\t\t\t\t\tresults: 2
\t\t\t\t}
\t\t\t}, {
\t\t\t\t// Внешний вид путевых точек.
\t\t\t\twayPointStartIconColor: \"#333\",
\t\t\t\twayPointStartIconFillColor: \"#B3B3B3\",
\t\t\t\t// Задаем собственную картинку для последней путевой точки.
\t\t\t\twayPointFinishIconImageSize: [30, 30],
\t\t\t\twayPointFinishIconImageOffset: [-15, -15],
\t\t\t\t// Позволяет скрыть иконки путевых точек маршрута.
\t\t\t\t// wayPointVisible:false,

\t\t\t\t// Внешний вид транзитных точек.
\t\t\t\tviaPointIconRadius: 7,
\t\t\t\tviaPointIconFillColor: \"#000088\",
\t\t\t\tviaPointActiveIconFillColor: \"#E63E92\",
\t\t\t\t// Транзитные точки можно перетаскивать, при этом
\t\t\t\t// маршрут будет перестраиваться.
\t\t\t\tviaPointDraggable: true,
\t\t\t\t// Позволяет скрыть иконки транзитных точек маршрута.
\t\t\t\t// viaPointVisible:false,

\t\t\t\t// Внешний вид точечных маркеров под путевыми точками.
\t\t\t\tpinIconFillColor: \"#000088\",
\t\t\t\tpinActiveIconFillColor: \"#B3B3B3\",
\t\t\t\t// Позволяет скрыть точечные маркеры путевых точек.
\t\t\t\t// pinVisible:false,

\t\t\t\t// Внешний вид линии маршрута.
\t\t\t\trouteStrokeWidth: 2,
\t\t\t\trouteStrokeColor: \"#000088\",
\t\t\t\trouteActiveStrokeWidth: 6,
\t\t\t\trouteActiveStrokeColor: \"#E63E92\",

\t\t\t\t// Внешний вид линии пешеходного маршрута.
\t\t\t\trouteActivePedestrianSegmentStrokeStyle: \"solid\",
\t\t\t\trouteActivePedestrianSegmentStrokeColor: \"#00CDCD\",

\t\t\t\t// Автоматически устанавливать границы карты так, чтобы маршрут был виден целиком.
\t\t\t\tboundsAutoApply: true
\t\t\t});
\t\t\t
\t\t\tconsole.log(multiRoute)
\t\t\t";
            // line 585
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_map_isroute", array())) {
                // line 586
                echo "\t\t\tmyMap.geoObjects.add(multiRoute) //**** ROUTING
\t\t\t";
            } else {
                // line 588
                echo "\t\t\tmyMap.geoObjects.add(polyline) //**** POLYLINE
\t\t\t";
            }
            // line 590
            echo "\t\t})
\t\t
\t\t
\t\t
    }
\t
\t
\t
</script>
<script src=\"/site/theme/js/search_routes.js\"></script>
";
            // line 600
            $this->loadTemplate("footer", "layouts.route", 600)->display($context);
            // line 601
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "layouts.route";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  732 => 601,  730 => 600,  718 => 590,  714 => 588,  710 => 586,  708 => 585,  554 => 434,  546 => 429,  533 => 418,  531 => 417,  243 => 131,  238 => 81,  233 => 79,  214 => 63,  194 => 50,  191 => 49,  189 => 48,  186 => 47,  176 => 44,  173 => 43,  171 => 42,  168 => 41,  165 => 40,  159 => 39,  156 => 38,  153 => 37,  150 => 36,  147 => 35,  142 => 34,  140 => 33,  137 => 32,  134 => 31,  132 => 30,  129 => 29,  123 => 26,  120 => 25,  114 => 24,  111 => 23,  105 => 22,  102 => 21,  99 => 20,  96 => 19,  91 => 18,  88 => 17,  84 => 16,  81 => 15,  78 => 14,  75 => 13,  73 => 12,  70 => 11,  62 => 8,  60 => 7,  57 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% if request.input.json == 'yes' %}*/
/* */
/* 	{% set items = page.active_sub_pages %}*/
/* */
/* 	{% for item in items %}*/
/* 		*/
/* 		{% set routeOjectsIDs = item.field_route_string|split(';') %}*/
/* 		*/
/* */
/* 	{% endfor %}*/
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
/* <section class="search search--route" id="v-search-root" v-cloak data-ids="{$ page.field_route_string $}" data-gtk="{$ page.field_good_to_know $}" data-hfull="{$ page.field_helpfull $}">*/
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
/* 						{#*/
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
/* 										от {{item.min_price}}₽*/
/* 									</div>*/
/* 								</a>*/
/* 							</div>*/
/* 							</transition-group>*/
/* 						</div>*/
/* 						#}*/
/* 						*/
/* 						<div class="vsearch-hat vsearch-hat--soloroute" v-cloak>*/
/* 							<div class="cont">*/
/* 								<div class="vsearch-hat__tags">*/
/* 									<div class="vsearch-hat-tag">*/
/* 										<div class="vsearch-hat-tag__icon">*/
/* 											<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">*/
/* 												<path d="M12.5 0C15.9512 0 19.0773 1.39942 21.3389 3.66107C23.6006 5.92272 25 9.04884 25 12.5C25 15.9512 23.6006 19.0773 21.3389 21.3389C19.0773 23.6006 15.9512 25 12.5 25C9.04885 25 5.92272 23.6006 3.66107 21.3389C1.39942 19.0773 0 15.9512 0 12.5C0 9.04884 1.39942 5.92272 3.66107 3.66107C5.92272 1.39942 9.04885 0 12.5 0ZM10.4167 6.35157C10.4167 5.89112 10.7891 5.51869 11.2495 5.51869C11.71 5.51869 12.0824 5.89112 12.0824 6.35157V13.1794H19.1653C19.6258 13.1794 19.9982 13.5518 19.9982 14.0123C19.9982 14.4727 19.6258 14.8452 19.1653 14.8452H11.2473C10.7868 14.8452 10.4144 14.4727 10.4144 14.0123V6.35157H10.4167ZM20.1607 4.84155C18.2015 2.88236 15.4907 1.66802 12.5 1.66802C9.50704 1.66802 6.79848 2.8801 4.83929 4.84155C2.8801 6.80074 1.66576 9.51156 1.66576 12.5023C1.66576 15.4952 2.87784 18.2038 4.83929 20.163C6.79848 22.1222 9.5093 23.3365 12.5 23.3365C15.493 23.3365 18.2015 22.1244 20.1607 20.163C22.1199 18.2038 23.3342 15.493 23.3342 12.5023C23.3342 9.51156 22.1222 6.80074 20.1607 4.84155Z" fill="#E85768"/>*/
/* 											</svg>*/
/* 										</div>*/
/* 										<div class="vsearch-hat-tag__value">*/
/* 											{{ myRouteFullDurationText }}*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="vsearch-hat-tag">*/
/* 										<div class="vsearch-hat-tag__icon">*/
/* 											<svg xmlns="http://www.w3.org/2000/svg" width="20" height="23" viewBox="0 0 20 23" fill="none">*/
/* 												<path fill-rule="evenodd" clip-rule="evenodd" d="M3.68659 6.05764C2.87114 6.48613 2.35774 7.09164 2.35774 8.04484C2.35774 9.00232 2.87643 9.61055 3.66751 10.0392C4.50276 10.4917 5.50155 10.6466 5.98867 10.6466H12.4253C12.4389 10.6466 12.4529 10.6466 12.4672 10.6466C13.2399 10.6464 14.8788 10.6459 16.3491 11.191C17.1167 11.4755 17.9051 11.9313 18.5019 12.6706C19.1112 13.4255 19.4514 14.3905 19.4514 15.5611C19.4514 16.7317 19.1112 17.6968 18.5019 18.4515C17.9051 19.1909 17.1167 19.6466 16.3491 19.9312C14.8788 20.4762 13.2399 20.4757 12.4672 20.4756C12.4529 20.4756 12.4389 20.4756 12.4253 20.4756H6.24801V18.1629H12.4253C13.2272 18.1629 14.4786 18.1522 15.5157 17.7678C16.0154 17.5825 16.397 17.3336 16.6535 17.0159C16.8973 16.7138 17.0936 16.2696 17.0936 15.5611C17.0936 14.8526 16.8973 14.4083 16.6535 14.1062C16.397 13.7885 16.0154 13.5397 15.5157 13.3545C14.4786 12.97 13.2272 12.9593 12.4253 12.9593H5.98867C5.17902 12.9593 3.7729 12.7384 2.52746 12.0635C1.23782 11.3647 0 10.0938 0 8.04484C0 5.99153 1.24313 4.71798 2.57322 4.01905C3.85857 3.34361 5.32881 3.13037 6.24801 3.13037H15.9619V5.44306H6.24801C5.61111 5.44306 4.54676 5.60562 3.68659 6.05764Z" fill="#E22C38"/>*/
/* 												<path fill-rule="evenodd" clip-rule="evenodd" d="M4.71476 18.7409C4.38922 18.7409 4.12532 18.9997 4.12532 19.3191C4.12532 19.6384 4.38922 19.8973 4.71476 19.8973C5.04029 19.8973 5.30419 19.6384 5.30419 19.3191C5.30419 18.9997 5.04029 18.7409 4.71476 18.7409ZM1.76758 19.3191C1.76758 17.7225 3.08707 16.4282 4.71476 16.4282C6.34243 16.4282 7.66193 17.7225 7.66193 19.3191C7.66193 20.9157 6.34243 22.2099 4.71476 22.2099C3.08707 22.2099 1.76758 20.9157 1.76758 19.3191Z" fill="#E22C38"/>*/
/* 												<path fill-rule="evenodd" clip-rule="evenodd" d="M14.8377 4.2867L12.1348 1.63532L13.8019 0L18.1722 4.2867L13.8019 8.57339L12.1348 6.93807L14.8377 4.2867Z" fill="#E22C38"/>*/
/* 											</svg>*/
/* 										</div>*/
/* 										<div class="vsearch-hat-tag__value">*/
/* 											{{ activeRoute.common.distance }}*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="vsearch-hat-tag">*/
/* 										<div class="vsearch-hat-tag__icon">*/
/* 											<svg xmlns="http://www.w3.org/2000/svg" width="19" height="26" viewBox="0 0 19 26" fill="none">*/
/* 												<path d="M9.97076 25.5594C9.93356 25.5966 9.93356 25.5966 9.89636 25.6338C9.85915 25.6338 9.85915 25.671 9.82195 25.671C9.78474 25.671 9.74754 25.7082 9.71033 25.7082C9.67313 25.7454 9.59872 25.7454 9.56152 25.7454C9.52431 25.7454 9.4499 25.7454 9.4127 25.7826C9.37549 25.7826 9.37549 25.7826 9.33829 25.7826C9.30109 25.7826 9.22668 25.7826 9.18947 25.7454C9.15227 25.7454 9.07786 25.7082 9.04066 25.7082L8.92904 25.671C8.89184 25.671 8.85463 25.6338 8.85463 25.6338C8.81743 25.5966 8.81743 25.5966 8.78023 25.5594C7.92453 24.8525 7.10603 24.0712 6.28753 23.1783C5.50624 22.3226 4.76216 21.3925 4.05527 20.4252C3.3856 19.4951 2.79033 18.5278 2.23226 17.5232C1.7114 16.5559 1.26495 15.5514 0.892904 14.5841C0.818496 14.3237 0.818496 14.1004 0.930109 13.8772C1.04172 13.654 1.22774 13.468 1.45097 13.3936C1.7114 13.3192 1.93463 13.3192 2.15785 13.4308C2.38108 13.5424 2.5671 13.7284 2.64151 13.9516C2.97635 14.8445 3.3856 15.7746 3.86925 16.6675C4.35291 17.5977 4.94818 18.4906 5.58065 19.3835C6.17592 20.2392 6.8456 21.0577 7.51528 21.8017C8.11055 22.4714 8.74302 23.1039 9.37549 23.662C10.3428 22.8063 11.3101 21.7645 12.2402 20.6484C13.1703 19.4951 14.026 18.2301 14.7701 16.928C15.477 15.663 16.0351 14.3609 16.4071 13.0587C16.742 11.8682 16.9652 10.6404 16.9652 9.4499C16.9652 8.40818 16.7792 7.44087 16.4071 6.54796C16.0351 5.61786 15.477 4.79936 14.7701 4.09248C14.0632 3.3856 13.2447 2.82753 12.3146 2.45549C11.4217 2.08344 10.4544 1.89742 9.4127 1.89742C8.37098 1.89742 7.40366 2.08344 6.51076 2.45549C5.58065 2.82753 4.76216 3.3856 4.05527 4.09248C3.34839 4.79936 2.79033 5.61786 2.41828 6.54796C2.04624 7.44087 1.86022 8.40818 1.86022 9.4499V9.74754V10.008L1.89742 10.3056L1.93463 10.6032C1.97183 10.8637 1.89742 11.0869 1.7114 11.2729C1.56258 11.4589 1.33936 11.5706 1.07893 11.6078C0.818496 11.645 0.59527 11.5705 0.409248 11.3845C0.223226 11.2357 0.111613 11.0125 0.0744087 10.7521L0.0372043 10.4172L0 10.0824V9.74754V9.4127C0 8.14775 0.26043 6.92001 0.706883 5.80388C1.19054 4.65054 1.89742 3.60882 2.75312 2.75312C3.60882 1.89742 4.65054 1.19054 5.80388 0.706882C6.92001 0.26043 8.14775 0 9.4127 0C10.6776 0 11.9054 0.26043 13.0215 0.706882C14.1749 1.19054 15.2166 1.89742 16.0723 2.75312C16.928 3.60882 17.6349 4.65054 18.1185 5.80388C18.565 6.92001 18.8254 8.14775 18.8254 9.4127C18.8254 10.7521 18.6022 12.1286 18.1929 13.5052C17.7837 14.9561 17.1512 16.4071 16.3699 17.7837C15.5514 19.2718 14.5841 20.6856 13.5052 21.9878C12.389 23.3643 11.1613 24.5549 9.97076 25.5966V25.5594ZM9.37549 5.9899C9.89636 5.9899 10.4172 6.10151 10.9009 6.28753C11.3101 6.47356 11.7194 6.69678 12.0542 7.03162L12.1658 7.14323C12.5379 7.51528 12.8355 7.92452 13.0215 8.44539C13.2075 8.92904 13.3192 9.4127 13.3192 9.97076C13.3192 10.4916 13.2075 11.0125 13.0215 11.4961C12.8355 11.9798 12.5379 12.4263 12.1658 12.7983C11.7938 13.1703 11.3845 13.468 10.9009 13.654C10.4172 13.84 9.93356 13.9516 9.37549 13.9516C8.85463 13.9516 8.33377 13.84 7.85012 13.654C7.51528 13.5052 7.18044 13.3192 6.8828 13.0959L6.58517 12.7983C6.21313 12.4263 5.91549 12.017 5.72947 11.4961C5.54345 11.0125 5.43183 10.5288 5.43183 9.97076C5.43183 9.4499 5.54345 8.92904 5.72947 8.44539C5.91549 7.96173 6.21313 7.51528 6.58517 7.18044C6.95721 6.80839 7.36646 6.51076 7.85012 6.32474C8.33377 6.13872 8.81743 6.0271 9.37549 6.0271V5.9899ZM10.7521 8.40818C10.566 8.25936 10.38 8.11055 10.1568 8.03614C9.89636 7.92453 9.63593 7.88732 9.37549 7.88732C9.07786 7.88732 8.81743 7.92453 8.5942 8.03614C8.33377 8.14775 8.11055 8.29657 7.92453 8.48259C7.7385 8.66861 7.58969 8.89184 7.47807 9.15227C7.36646 9.4127 7.32926 9.67313 7.32926 9.93356C7.32926 10.2312 7.36646 10.4916 7.47807 10.7149C7.58969 10.9753 7.7385 11.1985 7.92453 11.3845L7.99893 11.4589C8.18496 11.6078 8.37098 11.7566 8.5942 11.8682C8.85463 11.9798 9.11506 12.017 9.37549 12.017C9.67313 12.017 9.93356 11.9798 10.1568 11.8682C10.4172 11.7566 10.6404 11.6078 10.8265 11.4217C11.0125 11.2357 11.1613 11.0125 11.2729 10.7521C11.3845 10.4916 11.4217 10.2312 11.4217 9.97076C11.4217 9.67313 11.3845 9.4127 11.2729 9.18947C11.1613 8.92904 11.0125 8.70582 10.8265 8.51979L10.7521 8.44539V8.40818Z" fill="#E22C38"/>*/
/* 											</svg>*/
/* 										</div>*/
/* 										<div class="vsearch-hat-tag__value">*/
/* 											{{ myRoutePointsCountText }}*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="vsearch-hat-start" v-cloak>*/
/* 									<div class="vselect">*/
/* 										<div class="vselect-trigger" @click.stop="isMyRouteStartPointsListActive = !isMyRouteStartPointsListActive">*/
/* 											<div class="vselect-trigger__icon">*/
/* 												<svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24" fill="none">*/
/* 													<path d="M9.28139 23.7922C9.24675 23.8268 9.24675 23.8268 9.21212 23.8615C9.17749 23.8615 9.17749 23.8961 9.14286 23.8961C9.10823 23.8961 9.07359 23.9307 9.03896 23.9307C9.00433 23.9654 8.93506 23.9654 8.90043 23.9654C8.8658 23.9654 8.79654 23.9654 8.7619 24C8.72727 24 8.72727 24 8.69264 24C8.65801 24 8.58874 24 8.55411 23.9654C8.51948 23.9654 8.45022 23.9307 8.41558 23.9307L8.31169 23.8961C8.27706 23.8961 8.24242 23.8615 8.24242 23.8615C8.20779 23.8268 8.20779 23.8268 8.17316 23.7922C7.37662 23.1342 6.61472 22.4069 5.85281 21.5758C5.12554 20.7792 4.4329 19.9134 3.77489 19.013C3.15152 18.1472 2.5974 17.2468 2.07792 16.3117C1.59307 15.4113 1.17749 14.4762 0.831169 13.5758C0.761905 13.3333 0.761905 13.1255 0.865801 12.9177C0.969697 12.71 1.14286 12.5368 1.35065 12.4675C1.59307 12.3983 1.80087 12.3983 2.00866 12.5022C2.21645 12.6061 2.38961 12.7792 2.45887 12.987C2.77056 13.8182 3.15152 14.684 3.60173 15.5152C4.05195 16.381 4.60606 17.2121 5.19481 18.0433C5.74892 18.8398 6.37229 19.6017 6.99567 20.2944C7.54978 20.9177 8.13853 21.5065 8.72727 22.026C9.62771 21.2294 10.5281 20.2597 11.3939 19.2208C12.2597 18.1472 13.0563 16.9697 13.7489 15.7576C14.4069 14.5801 14.9264 13.368 15.2727 12.1558C15.5844 11.0476 15.7922 9.90476 15.7922 8.79654C15.7922 7.82684 15.619 6.92641 15.2727 6.09524C14.9264 5.22944 14.4069 4.46753 13.7489 3.80952C13.0909 3.15152 12.329 2.63203 11.4632 2.28571C10.632 1.93939 9.7316 1.76623 8.7619 1.76623C7.79221 1.76623 6.89177 1.93939 6.06061 2.28571C5.19481 2.63203 4.4329 3.15152 3.77489 3.80952C3.11688 4.46753 2.5974 5.22944 2.25108 6.09524C1.90476 6.92641 1.7316 7.82684 1.7316 8.79654V9.07359V9.31602L1.76623 9.59307L1.80087 9.87013C1.8355 10.1126 1.76623 10.3203 1.59307 10.4935C1.45455 10.6667 1.24675 10.7706 1.00433 10.8052C0.761905 10.8398 0.554113 10.7706 0.380952 10.5974C0.207792 10.4589 0.103896 10.2511 0.0692641 10.0087L0.034632 9.69697L0 9.38528V9.07359V8.7619C0 7.58442 0.242424 6.44156 0.658009 5.4026C1.10823 4.329 1.76623 3.35931 2.56277 2.56277C3.35931 1.76623 4.329 1.10823 5.4026 0.658009C6.44156 0.242424 7.58442 0 8.7619 0C9.93939 0 11.0823 0.242424 12.1212 0.658009C13.1948 1.10823 14.1645 1.76623 14.961 2.56277C15.7576 3.35931 16.4156 4.329 16.8658 5.4026C17.2814 6.44156 17.5238 7.58442 17.5238 8.7619C17.5238 10.0087 17.316 11.29 16.9351 12.5714C16.5541 13.9221 15.9654 15.2727 15.2381 16.5541C14.4762 17.9394 13.5758 19.2554 12.5714 20.4675C11.5325 21.7489 10.3896 22.8571 9.28139 23.8268V23.7922ZM8.72727 5.57576C9.21212 5.57576 9.69697 5.67965 10.1472 5.85281C10.5281 6.02597 10.9091 6.23377 11.2208 6.54545L11.3247 6.64935C11.671 6.99567 11.9481 7.37662 12.1212 7.86147C12.2944 8.31169 12.3983 8.7619 12.3983 9.28139C12.3983 9.76623 12.2944 10.2511 12.1212 10.7013C11.9481 11.1515 11.671 11.5671 11.3247 11.9134C10.9784 12.2597 10.5974 12.5368 10.1472 12.71C9.69697 12.8831 9.24675 12.987 8.72727 12.987C8.24242 12.987 7.75758 12.8831 7.30736 12.71C6.99567 12.5714 6.68398 12.3983 6.40693 12.1905L6.12987 11.9134C5.78355 11.5671 5.50649 11.1861 5.33333 10.7013C5.16017 10.2511 5.05628 9.80087 5.05628 9.28139C5.05628 8.79654 5.16017 8.31169 5.33333 7.86147C5.50649 7.41126 5.78355 6.99567 6.12987 6.68398C6.47619 6.33766 6.85714 6.06061 7.30736 5.88745C7.75758 5.71429 8.20779 5.61039 8.72727 5.61039V5.57576ZM10.0087 7.82684C9.8355 7.68831 9.66234 7.54978 9.45455 7.48052C9.21212 7.37662 8.9697 7.34199 8.72727 7.34199C8.45022 7.34199 8.20779 7.37662 8 7.48052C7.75758 7.58442 7.54978 7.72294 7.37662 7.8961C7.20346 8.06926 7.06493 8.27706 6.96104 8.51948C6.85714 8.7619 6.82251 9.00433 6.82251 9.24675C6.82251 9.52381 6.85714 9.76623 6.96104 9.97403C7.06493 10.2165 7.20346 10.4242 7.37662 10.5974L7.44589 10.6667C7.61905 10.8052 7.79221 10.9437 8 11.0476C8.24242 11.1515 8.48485 11.1861 8.72727 11.1861C9.00433 11.1861 9.24675 11.1515 9.45455 11.0476C9.69697 10.9437 9.90476 10.8052 10.0779 10.632C10.2511 10.4589 10.3896 10.2511 10.4935 10.0087C10.5974 9.76623 10.632 9.52381 10.632 9.28139C10.632 9.00433 10.5974 8.7619 10.4935 8.55411C10.3896 8.31169 10.2511 8.1039 10.0779 7.93074L10.0087 7.86147V7.82684Z" fill="#2B2A29"/>*/
/* 												</svg>*/
/* 											</div>*/
/* 											<div class="vselect-trigger__title">*/
/* 												{{myRouteStartPointText}}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="vselect-list" :class="{'vselect-list--active': isMyRouteStartPointsListActive}" v-click-outside="myRouteStartPointsListActiveClickOutside">*/
/* 											<div class="vselect-list__item" v-for="item in myRouteStartPointsList" :key="item.name" @click.stop="setMyRouteStartPoint(item)">*/
/* 												{{ item.name }}*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="search-list search-list--route search-list--soloroute">*/
/* 							<div class="search-results__wrapper">*/
/* 								<div*/
/* 									v-for="(item, i) in items"*/
/* 									:key="item.path" */
/* 									class="vcard vcard--noedit"*/
/* 								>*/
/* 									<div class="vcard-hat">*/
/* 										<div class="vcard-hat__block vcard-hat__block--left">*/
/* 											<div class="vcard-rangetime">*/
/* 												<div class="vcard-rangetime__icon">*/
/* 													<svg xmlns="http://www.w3.org/2000/svg" width="23" height="30" viewBox="0 0 23 30" fill="none">*/
/* 														<path fill-rule="evenodd" clip-rule="evenodd" d="M14.0321 0.0148948C15.5874 0.173879 16.7175 1.56326 16.5585 3.11854C16.3996 4.67382 15.0102 5.80399 13.4549 5.645C11.9013 5.48602 10.7694 4.09664 10.9284 2.54136C11.0874 0.987808 12.4768 -0.144089 14.0321 0.0148948ZM0.777639 29.1919C0.349074 29.1919 0 28.8446 0 28.4143C0 27.9857 0.347345 27.6366 0.777639 27.6366H16.4497C16.3114 27.3066 16.168 26.9281 16.0038 26.503C15.0102 23.9212 13.8645 21.4345 12.8708 18.8735C12.3541 20.1471 11.789 21.3965 11.1842 22.5958C11.1185 22.7271 11.0356 22.8464 10.9457 22.938C10.925 22.9794 10.8973 23.0105 10.8662 23.0313C9.79653 23.6862 8.01488 24.4103 7.05579 24.8561C4.99937 25.81 3.84501 26.1021 3.36633 25.1378C2.83754 24.0768 3.74478 23.4132 5.69925 22.2657C6.41986 21.8424 7.42905 21.1995 8.33975 20.6448L9.39561 14.8903C9.39906 14.8626 9.40253 14.8367 9.40772 14.809C9.68939 13.2641 9.95205 11.8246 10.1974 10.4836L10.4152 9.28608L9.08629 9.53665L7.84552 9.76995L7.80059 11.3321C7.7522 13.0015 7.68654 13.8707 6.77411 13.8569C5.89106 13.843 5.76318 13.0429 5.64913 11.3753C5.59556 10.5977 5.58173 10.0084 5.49532 9.11327C5.43657 8.51881 5.54544 7.99002 6.27469 7.85523C6.29197 7.84831 6.30924 7.84313 6.32825 7.83794C7.01603 7.63921 7.74874 7.42666 8.52983 7.20028C9.36623 6.95835 10.4152 6.61964 11.3795 6.34142C11.5333 6.27921 11.7061 6.25156 11.8823 6.26884C12.482 6.32932 13.0799 6.39154 13.6795 6.45202C14.2792 6.5125 14.8771 6.57471 15.4768 6.63692C15.6254 6.65248 15.7653 6.69913 15.8863 6.76826C16.0885 6.78727 16.327 6.98773 16.479 7.28496C16.9335 8.18011 17.3569 9.01304 17.7527 9.78895L18.2382 10.7446L19.562 10.2313C21.119 9.62651 21.945 9.35002 22.2872 10.1968C22.6172 11.0159 21.9294 11.4462 20.4381 12.1979C19.7417 12.5487 19.2042 12.7906 18.4145 13.2192C17.8892 13.5043 17.3586 13.6098 16.9508 12.9894C16.9318 12.9669 16.9128 12.941 16.8972 12.9151L16.2544 11.9059L16.1697 15.5055C16.1697 15.5279 16.168 15.5504 16.1663 15.5729C16.9715 19.0031 17.8494 22.2485 18.6426 25.6372C19.1057 27.6142 19.4583 28.632 18.5631 29.0485C18.4352 29.1418 18.278 29.1971 18.1069 29.1971H18.0499C17.9358 29.2127 17.8304 29.2127 17.7319 29.1971H0.784558L0.777639 29.1919Z" fill="#E85768"/>*/
/* 													</svg>*/
/* 												</div>*/
/* 												<template v-if="myRouteStartPoint">*/
/* 													<div class="vcard-rangetime__text" v-if="activeRoute.paths.length > 0">{{activeRoute.paths[i].distance}}, {{activeRoute.paths[i].duration.text}}</div>*/
/* 												</template>*/
/* 												<template v-else>*/
/* 													<div class="vcard-rangetime__text" v-if="i > 0 && activeRoute.paths.length > 0">{{activeRoute.paths[i - 1].distance}}, {{activeRoute.paths[i - 1].duration.text}}</div>*/
/* 												</template>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="vcard-hat__line"></div>*/
/* 										<div class="vcard-hat__block vcard-hat__block--right">*/
/* 											<div class="vcard-pin">*/
/* 												<div class="vcard-pin__icon">*/
/* 													<svg xmlns="http://www.w3.org/2000/svg" width="32" height="37" viewBox="0 0 32 37" fill="none">*/
/* 														<path d="M19.3898 31.909C19.6683 31.4907 20.0959 31.1978 20.5778 31.0554C27.1837 29.104 32 23.0379 32 15.857C32 7.09941 24.8366 0 16 0C7.16344 0 0 7.09941 0 15.857C0 23.0381 4.81667 29.1044 11.4228 31.0556C11.9048 31.1979 12.3325 31.4909 12.611 31.9093L15.5841 36.3749C15.782 36.6721 16.2186 36.6721 16.4165 36.3749L19.3898 31.909Z" fill="#336AF7"/>*/
/* 													</svg>*/
/* 												</div>*/
/* 												<div class="vcard-pin__text">{{i + 1}}</div>*/
/* 											</div>*/
/* 											<div class="vcard-remove">*/
/* 												<div class="vcard-remove__button" @click.stop="removeItemFromMyRouteByID(item.id)">*/
/* 													<svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" viewBox="0 0 23 24" fill="none">*/
/* 														<path d="M5.57159 17.3144C5.43017 17.173 5.35239 17.0104 5.33825 16.8265C5.35239 16.6427 5.43017 16.48 5.57159 16.3386L9.98394 11.9263L5.63523 7.57756C5.49381 7.43614 5.41603 7.27351 5.40189 7.08966C5.41603 6.90581 5.49381 6.74318 5.63523 6.60175L6.31406 5.92293C6.45548 5.78151 6.61104 5.7108 6.78075 5.7108C6.97874 5.7108 7.14844 5.78151 7.28986 5.92293L11.6386 10.2716L15.9236 5.98657C16.0651 5.84515 16.2206 5.77444 16.3903 5.77444C16.5883 5.77444 16.758 5.84515 16.8994 5.98657L17.6419 6.72903C17.7833 6.87046 17.847 7.03309 17.8328 7.21694C17.847 7.40079 17.7833 7.56342 17.6419 7.70484L13.3568 11.9899L17.7268 16.3598C17.8682 16.5013 17.9318 16.6639 17.9177 16.8477C17.9318 17.0316 17.8682 17.1942 17.7268 17.3356L17.0479 18.0145C16.9065 18.1559 16.7368 18.2266 16.5388 18.2266C16.3691 18.2266 16.2136 18.1559 16.0721 18.0145L11.7022 13.6445L7.28986 18.0569C7.14844 18.1983 6.97874 18.269 6.78075 18.269C6.61104 18.269 6.45548 18.1983 6.31406 18.0569L5.57159 17.3144Z" fill="#E85768"/>*/
/* 													</svg>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="vcard__wrapper">*/
/* 										<div class="vcard__left">*/
/* 											<div class="vcard__top">*/
/* 												<div class="vcard__img">*/
/* 													<img :src="item.field_gallery[0].src">*/
/* 												</div>*/
/* 												<div class="vcard__main">*/
/* 													<div class="vcard__header">*/
/* 														<div class="vcard__title">{{item.field_header}}</div>*/
/* 														<div class="vcard__time">{{myRouteItemDurationText(item.field_event_duration)}}</div>*/
/* 													</div>*/
/* 													<div class="vcard__tags">*/
/* 														<div class="vcard-tag vcard-tag--time">*/
/* 															<div class="vcard-tag__icon">*/
/* 																<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">*/
/* 																	<path d="M10 0C12.7609 0 15.2618 1.11954 17.0711 2.92886C18.8805 4.73817 20 7.23908 20 10C20 12.7609 18.8805 15.2618 17.0711 17.0711C15.2618 18.8805 12.7609 20 10 20C7.23908 20 4.73817 18.8805 2.92886 17.0711C1.11954 15.2618 0 12.7609 0 10C0 7.23908 1.11954 4.73817 2.92886 2.92886C4.73817 1.11954 7.23908 0 10 0ZM8.33333 5.08126C8.33333 4.71289 8.63128 4.41495 8.99964 4.41495C9.368 4.41495 9.66595 4.71289 9.66595 5.08126V10.5435H15.3323C15.7006 10.5435 15.9986 10.8415 15.9986 11.2098C15.9986 11.5782 15.7006 11.8761 15.3323 11.8761H8.99783C8.62947 11.8761 8.33153 11.5782 8.33153 11.2098V5.08126H8.33333ZM16.1286 3.87324C14.5612 2.30589 12.3926 1.33442 10 1.33442C7.60563 1.33442 5.43879 2.30408 3.87143 3.87324C2.30408 5.44059 1.33261 7.60925 1.33261 10.0018C1.33261 12.3962 2.30228 14.563 3.87143 16.1304C5.43879 17.6977 7.60744 18.6692 10 18.6692C12.3944 18.6692 14.5612 17.6995 16.1286 16.1304C17.6959 14.563 18.6674 12.3944 18.6674 10.0018C18.6674 7.60925 17.6977 5.44059 16.1286 3.87324Z" fill="black"/>*/
/* 																</svg>*/
/* 															</div>*/
/* 															<div class="vcard-tag__title">*/
/* 																9:00-22:00*/
/* 																<div class="vcard-tag__subtitle">открыто</div>*/
/* 															</div>*/
/* 														</div>*/
/* 														<div class="vcard-tag vcard-tag--place" v-if="item.field_address">*/
/* 															<div class="vcard-tag__icon">*/
/* 																<svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24" fill="none">*/
/* 																	<path d="M9.28139 23.7922C9.24675 23.8268 9.24675 23.8268 9.21212 23.8615C9.17749 23.8615 9.17749 23.8961 9.14286 23.8961C9.10823 23.8961 9.07359 23.9307 9.03896 23.9307C9.00433 23.9654 8.93506 23.9654 8.90043 23.9654C8.8658 23.9654 8.79654 23.9654 8.7619 24C8.72727 24 8.72727 24 8.69264 24C8.65801 24 8.58874 24 8.55411 23.9654C8.51948 23.9654 8.45022 23.9307 8.41558 23.9307L8.31169 23.8961C8.27706 23.8961 8.24242 23.8615 8.24242 23.8615C8.20779 23.8268 8.20779 23.8268 8.17316 23.7922C7.37662 23.1342 6.61472 22.4069 5.85281 21.5758C5.12554 20.7792 4.4329 19.9134 3.77489 19.013C3.15152 18.1472 2.5974 17.2468 2.07792 16.3117C1.59307 15.4113 1.17749 14.4762 0.831169 13.5758C0.761905 13.3333 0.761905 13.1255 0.865801 12.9177C0.969697 12.71 1.14286 12.5368 1.35065 12.4675C1.59307 12.3983 1.80087 12.3983 2.00866 12.5022C2.21645 12.6061 2.38961 12.7792 2.45887 12.987C2.77056 13.8182 3.15152 14.684 3.60173 15.5152C4.05195 16.381 4.60606 17.2121 5.19481 18.0433C5.74892 18.8398 6.37229 19.6017 6.99567 20.2944C7.54978 20.9177 8.13853 21.5065 8.72727 22.026C9.62771 21.2294 10.5281 20.2597 11.3939 19.2208C12.2597 18.1472 13.0563 16.9697 13.7489 15.7576C14.4069 14.5801 14.9264 13.368 15.2727 12.1558C15.5844 11.0476 15.7922 9.90476 15.7922 8.79654C15.7922 7.82684 15.619 6.92641 15.2727 6.09524C14.9264 5.22944 14.4069 4.46753 13.7489 3.80952C13.0909 3.15152 12.329 2.63203 11.4632 2.28571C10.632 1.93939 9.7316 1.76623 8.7619 1.76623C7.79221 1.76623 6.89177 1.93939 6.06061 2.28571C5.19481 2.63203 4.4329 3.15152 3.77489 3.80952C3.11688 4.46753 2.5974 5.22944 2.25108 6.09524C1.90476 6.92641 1.7316 7.82684 1.7316 8.79654V9.07359V9.31602L1.76623 9.59307L1.80087 9.87013C1.8355 10.1126 1.76623 10.3203 1.59307 10.4935C1.45455 10.6667 1.24675 10.7706 1.00433 10.8052C0.761905 10.8398 0.554113 10.7706 0.380952 10.5974C0.207792 10.4589 0.103896 10.2511 0.0692641 10.0087L0.034632 9.69697L0 9.38528V9.07359V8.7619C0 7.58442 0.242424 6.44156 0.658009 5.4026C1.10823 4.329 1.76623 3.35931 2.56277 2.56277C3.35931 1.76623 4.329 1.10823 5.4026 0.658009C6.44156 0.242424 7.58442 0 8.7619 0C9.93939 0 11.0823 0.242424 12.1212 0.658009C13.1948 1.10823 14.1645 1.76623 14.961 2.56277C15.7576 3.35931 16.4156 4.329 16.8658 5.4026C17.2814 6.44156 17.5238 7.58442 17.5238 8.7619C17.5238 10.0087 17.316 11.29 16.9351 12.5714C16.5541 13.9221 15.9654 15.2727 15.2381 16.5541C14.4762 17.9394 13.5758 19.2554 12.5714 20.4675C11.5325 21.7489 10.3896 22.8571 9.28139 23.8268V23.7922ZM8.72727 5.57576C9.21212 5.57576 9.69697 5.67965 10.1472 5.85281C10.5281 6.02597 10.9091 6.23377 11.2208 6.54545L11.3247 6.64935C11.671 6.99567 11.9481 7.37662 12.1212 7.86147C12.2944 8.31169 12.3983 8.7619 12.3983 9.28139C12.3983 9.76623 12.2944 10.2511 12.1212 10.7013C11.9481 11.1515 11.671 11.5671 11.3247 11.9134C10.9784 12.2597 10.5974 12.5368 10.1472 12.71C9.69697 12.8831 9.24675 12.987 8.72727 12.987C8.24242 12.987 7.75758 12.8831 7.30736 12.71C6.99567 12.5714 6.68398 12.3983 6.40693 12.1905L6.12987 11.9134C5.78355 11.5671 5.50649 11.1861 5.33333 10.7013C5.16017 10.2511 5.05628 9.80087 5.05628 9.28139C5.05628 8.79654 5.16017 8.31169 5.33333 7.86147C5.50649 7.41126 5.78355 6.99567 6.12987 6.68398C6.47619 6.33766 6.85714 6.06061 7.30736 5.88745C7.75758 5.71429 8.20779 5.61039 8.72727 5.61039V5.57576ZM10.0087 7.82684C9.8355 7.68831 9.66234 7.54978 9.45455 7.48052C9.21212 7.37662 8.9697 7.34199 8.72727 7.34199C8.45022 7.34199 8.20779 7.37662 8 7.48052C7.75758 7.58442 7.54978 7.72294 7.37662 7.8961C7.20346 8.06926 7.06493 8.27706 6.96104 8.51948C6.85714 8.7619 6.82251 9.00433 6.82251 9.24675C6.82251 9.52381 6.85714 9.76623 6.96104 9.97403C7.06493 10.2165 7.20346 10.4242 7.37662 10.5974L7.44589 10.6667C7.61905 10.8052 7.79221 10.9437 8 11.0476C8.24242 11.1515 8.48485 11.1861 8.72727 11.1861C9.00433 11.1861 9.24675 11.1515 9.45455 11.0476C9.69697 10.9437 9.90476 10.8052 10.0779 10.632C10.2511 10.4589 10.3896 10.2511 10.4935 10.0087C10.5974 9.76623 10.632 9.52381 10.632 9.28139C10.632 9.00433 10.5974 8.7619 10.4935 8.55411C10.3896 8.31169 10.2511 8.1039 10.0779 7.93074L10.0087 7.86147V7.82684Z" fill="#2B2A29"/>*/
/* 																</svg>*/
/* 															</div>*/
/* 															<div class="vcard-tag__title">{{item.field_address}}</div>*/
/* 														</div>*/
/* 														<div class="vcard-tag vcard-tag--price">*/
/* 															<div class="vcard-tag__icon">*/
/* 																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">*/
/* 																	<path d="M10.3263 7.05947H12.1406C13.0972 7.05947 13.691 7.35641 14.0209 7.78508C14.3837 8.21405 14.4827 8.80791 14.4827 9.40148C14.4827 10.1934 14.2848 10.787 13.8889 11.1499C13.4931 11.5129 12.8993 11.7106 12.1406 11.7106H10.3263V7.05947Z" fill="#336AF7"/>*/
/* 																	<path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C18.6274 24 24 18.6276 24 12C24 5.37269 18.6274 0 12 0C5.37258 0 0 5.37269 0 12C0 18.6276 5.37258 24 12 24ZM12.1406 13.327C13.3612 13.327 14.3838 12.9644 15.0765 12.2716H15.1095C15.7693 11.6117 16.1651 10.6221 16.1651 9.40148C16.1651 8.28006 15.8682 7.22437 15.1095 6.46561C14.4498 5.83888 13.5261 5.44307 12.1736 5.44307H9.66659C9.40269 5.44307 9.13879 5.57511 8.97385 5.74C8.77593 5.93776 8.67696 6.16868 8.67696 6.43275V14.7457H8.51202C8.28111 14.7457 8.08319 14.8114 7.91825 14.9766C7.8903 15.0115 7.86382 15.0478 7.83946 15.0856C7.74881 15.2267 7.68734 15.3881 7.68734 15.5702C7.68734 15.8011 7.75332 15.9991 7.91825 16.164C8.08319 16.2961 8.28111 16.3949 8.51202 16.3949H8.67696V18.2094C8.67696 18.4403 8.77593 18.6381 8.90787 18.803C9.07281 18.9679 9.27075 19.067 9.50164 19.067C9.73256 19.067 9.93048 18.9679 10.0954 18.803C10.2274 18.6381 10.3263 18.4403 10.3263 18.2094V16.3949H13.922C14.1529 16.3949 14.3508 16.3289 14.5157 16.164C14.6477 15.9991 14.7466 15.8011 14.7466 15.5702C14.7466 15.3392 14.6807 15.1415 14.5157 14.9766C14.3508 14.8446 14.1529 14.7457 13.922 14.7457H10.3263V13.327H12.1406Z" fill="#336AF7"/>*/
/* 																</svg>*/
/* 															</div>*/
/* 															<div class="vcard-tag__title">{{myRouteItemPriceText(item.field_prices)}}</div>*/
/* 														</div>*/
/* 														<div class="vcard-tag vcard-tag--workload">*/
/* 															<div class="vcard-tag__icon">*/
/* 																<span class="workload-icon" :class="myRouteItemWorkloadClass(item.field_event_workload_percent)"></span>*/
/* 															</div>*/
/* 															<div class="vcard-tag__title">{{myRouteItemWorkloadText(item.field_event_workload_percent)}}</div>*/
/* 														</div>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="vcard__desc">*/
/* 												<div class="vcard__text">*/
/* */
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="vcard__right">*/
/* 											<div class="vcard__updown">*/
/* 												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">*/
/* 													<path d="M11.0123 12.0038V3.40579L9.71929 4.70679C9.62704 4.8023 9.5167 4.87848 9.39469 4.93089C9.27269 4.9833 9.14147 5.01088 9.00869 5.01204C8.87591 5.01319 8.74423 4.98789 8.62133 4.93761C8.49844 4.88733 8.38679 4.81307 8.29289 4.71918C8.199 4.62529 8.12475 4.51364 8.07447 4.39074C8.02419 4.26784 7.99888 4.13616 8.00004 4.00339C8.00119 3.87061 8.02878 3.73939 8.08119 3.61738C8.1336 3.49538 8.20978 3.38503 8.30529 3.29279L11.3053 0.292787C11.4928 0.105316 11.7471 0 12.0123 0C12.2775 0 12.5318 0.105316 12.7193 0.292787L15.7193 3.29279C15.9014 3.48139 16.0022 3.73399 16 3.99619C15.9977 4.25838 15.8925 4.5092 15.7071 4.6946C15.5217 4.88001 15.2709 4.98518 15.0087 4.98746C14.7465 4.98974 14.4939 4.88894 14.3053 4.70679L13.0123 3.40679V12.0038C13.0123 12.269 12.9069 12.5234 12.7194 12.7109C12.5319 12.8984 12.2775 13.0038 12.0123 13.0038C11.7471 13.0038 11.4927 12.8984 11.3052 12.7109C11.1176 12.5234 11.0123 12.269 11.0123 12.0038ZM3.01229 3.99579C3.01229 3.73057 3.11765 3.47622 3.30518 3.28868C3.49272 3.10114 3.74707 2.99579 4.01229 2.99579C4.2775 2.99579 4.53186 3.10114 4.71939 3.28868C4.90693 3.47622 5.01229 3.73057 5.01229 3.99579V12.5938L6.30529 11.2928C6.49389 11.1106 6.74649 11.0098 7.00869 11.0121C7.27089 11.0144 7.5217 11.1196 7.70711 11.305C7.89251 11.4904 7.99768 11.7412 7.99996 12.0034C8.00224 12.2656 7.90145 12.5182 7.71929 12.7068L4.71929 15.7068C4.53176 15.8943 4.27745 15.9996 4.01229 15.9996C3.74712 15.9996 3.49282 15.8943 3.30529 15.7068L0.305288 12.7068C0.209778 12.6145 0.133596 12.5042 0.0811869 12.3822C0.0287779 12.2602 0.00119157 12.129 3.77571e-05 11.9962C-0.00111606 11.8634 0.0241854 11.7317 0.0744663 11.6088C0.124747 11.4859 0.199 11.3743 0.292893 11.2804C0.386786 11.1865 0.498438 11.1122 0.621334 11.062C0.744231 11.0117 0.87591 10.9864 1.00869 10.9875C1.14147 10.9887 1.27269 11.0163 1.39469 11.0687C1.5167 11.1211 1.62704 11.1973 1.71929 11.2928L3.01229 12.5928V3.99679V3.99579Z" fill="black"/>*/
/* 												</svg>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="vsearch-bt">*/
/* 								<div class="cont">*/
/* 									<div class="vsearch-pp" v-if="myRoutePaidItems.length > 0">*/
/* 										<div class="vsearch-pp__content">*/
/* 											<div class="vsearch-pp-header">*/
/* 												<div class="vsearch-pp__header-icon">*/
/* 													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 28" fill="none">*/
/* 														<path fill-rule="evenodd" clip-rule="evenodd" d="M4.51653 7.42122C3.5175 7.94618 2.88853 8.68801 2.88853 9.85579C2.88853 11.0288 3.52399 11.774 4.49316 12.2991C5.51644 12.8535 6.74009 13.0433 7.33686 13.0433H15.2225C15.2393 13.0433 15.2564 13.0433 15.2738 13.0433C16.2206 13.043 18.2284 13.0425 20.0297 13.7103C20.9701 14.0588 21.936 14.6172 22.6671 15.5229C23.4136 16.4477 23.8303 17.6301 23.8303 19.0642C23.8303 20.4982 23.4136 21.6806 22.6671 22.6053C21.936 23.5111 20.9701 24.0694 20.0297 24.418C18.2284 25.0857 16.2206 25.0851 15.2738 25.085C15.2564 25.085 15.2393 25.085 15.2225 25.085H7.65459V22.2517H15.2225C16.205 22.2517 17.7381 22.2386 19.0087 21.7676C19.6209 21.5406 20.0884 21.2356 20.4026 20.8465C20.7014 20.4763 20.9418 19.9321 20.9418 19.0642C20.9418 18.1962 20.7014 17.6519 20.4026 17.2817C20.0884 16.8925 19.6209 16.5877 19.0087 16.3607C17.7381 15.8897 16.205 15.8767 15.2225 15.8767H7.33686C6.34494 15.8767 4.62227 15.6059 3.09645 14.7792C1.51648 13.9231 0 12.366 0 9.85579C0 7.34023 1.52299 5.77997 3.15251 4.9237C4.72723 4.09621 6.52845 3.83496 7.65459 3.83496H19.5553V6.66829H7.65459C6.8743 6.66829 5.57035 6.86745 4.51653 7.42122Z" fill="#E22C38"/>*/
/* 														<path fill-rule="evenodd" clip-rule="evenodd" d="M5.77667 22.96C5.37785 22.96 5.05454 23.2771 5.05454 23.6684C5.05454 24.0595 5.37785 24.3767 5.77667 24.3767C6.17549 24.3767 6.49881 24.0595 6.49881 23.6684C6.49881 23.2771 6.17549 22.96 5.77667 22.96ZM2.16602 23.6684C2.16602 21.7124 3.78256 20.1267 5.77667 20.1267C7.77077 20.1267 9.38733 21.7124 9.38733 23.6684C9.38733 25.6244 7.77077 27.21 5.77667 27.21C3.78256 27.21 2.16602 25.6244 2.16602 23.6684Z" fill="#E22C38"/>*/
/* 														<path fill-rule="evenodd" clip-rule="evenodd" d="M18.1786 5.25174L14.8672 2.00346L16.9096 0L22.2637 5.25174L16.9096 10.5035L14.8672 8.5L18.1786 5.25174Z" fill="#E22C38"/>*/
/* 													</svg>*/
/* 												</div>*/
/* 												Платные места на маршруте*/
/* 											</div>*/
/* 											<div class="vsearch-pp-list">*/
/* 												<div class="vsearch-pp-listitem" v-for="item in myRoutePaidItems" :key="item.id">*/
/* 													<div class="vsearch-pp-listitem__block vsearch-pp-listitem__block--title">*/
/* 														<span class="workload-icon workload-icon--low" :class="myRouteItemWorkloadClass(item.field_event_workload_percent)"></span>*/
/* 														<div class="vsearch-pp-listitem__title">{{item.field_header}}</div>*/
/* 													</div>*/
/* 													<div class="vsearch-pp-listitem__block vsearch-pp-listitem__block--price">от {{item.field_prices}} ₽</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="vsearch-pp__action">*/
/* 											<a class="v-btn v-btn--color-acc" :href="myRoutePaidLink" target="_blank">Забронировать</a>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="vsearch-frs">*/
/* 										<div class="vsearch-frs__img">*/
/* 											<img src="/site/theme/images/friends.png">*/
/* 										</div>*/
/* 										<div class="vsearch-frs__action">*/
/* 											<a class="v-btn" href="https://vdnh.ru/visitors/loyalty/" target="_blank">Получить скидку 5%</a>*/
/* 										</div>*/
/* 										<div class="vsearch-frs__desc">*/
/* 											Регистрируйтесь в программе лояльности «Друзья ВДНХ», чтобы получить скидку на билеты.*/
/* 											<br><br>*/
/* 											После регистрации вы получите накопительную виртуальную или пластиковую карту. Базовый уровень скидки — 5%.*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						*/
/* 					</div>*/
/* 					*/
/* 					<div class="obj-cards obj-cards--gtk" v-if="goodToKnow.length > 0">*/
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
/* 					<div class="obj-cards obj-cards--hfull" v-if="helpfull.length > 0">*/
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
/* 			<span class="search-switchmode" @click="isSearchShowlist = true">Список</span>*/
/* 			<div id="vdnhmap" style="width: 100%; height: calc(100vh - 63px);"></div>*/
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* <script src="https://api-maps.yandex.ru/2.1/?apikey=b303c4d1-e74e-4a8d-942f-15e384f9386b&lang=ru_RU" type="text/javascript"></script>*/
/* <script type="text/javascript">*/
/* 	window.PAGE_MAP_FIELD_ISROUTE = {$ page.field_map_isroute ? page.field_map_isroute : 0 $};*/
/*     //ymaps.ready(init); //------------------------->>*/
/*     function init(){*/
/*         // Создание карты.*/
/* 		var myMap = new ymaps.Map('map', {*/
/* 			center: [{$ page.parent_page.parent_page.field_coords $}],*/
/* 			controls: ['zoomControl','routePanelControl'],*/
/*             zoom: 12*/
/*         }, {*/
/*             searchControlProvider: 'yandex#search'*/
/*         })*/
/* 		*/
/* 		var control = myMap.controls.get('routePanelControl');*/
/* 		control.options.set('float', 'right');*/
/* 		// Задание состояния для панели маршрутизации.*/
/* 		control.routePanel.state.set({*/
/* 			// Флаг, запрещающий пользователям изменять*/
/* 			// адрес начальной точки в поле ввода.*/
/* 			fromEnabled: false,*/
/* 			// Флаг, запрещающий пользователям изменять*/
/* 			// адрес конечной точки в поле ввода.*/
/* 			toEnabled: false*/
/* 		});*/
/* 		*/
/*         var	objectManager = new ymaps.ObjectManager({*/
/* 			clusterize: true,*/
/* 			gridSize: 32,*/
/* 			clusterDisableClickZoom: true*/
/* 		});*/
/* 		*/
/* 		objectManager.objects.options.set('preset', 'islands#redStretchyIcon')*/
/* 		objectManager.clusters.options.set('preset', 'islands#redClusterIcons')*/
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
/* 		var myPolyline = new ymaps.Polyline([*/
/*             // Указываем координаты вершин ломаной.*/
/*             [55.80, 37.50],*/
/*             [55.80, 37.40],*/
/*             [55.70, 37.50],*/
/*             [55.70, 37.40]*/
/*         ], {*/
/*             // Описываем свойства геообъекта.*/
/*             // Содержимое балуна.*/
/*             balloonContent: "Ломаная линия"*/
/*         }, {*/
/*             // Задаем опции геообъекта.*/
/*             // Отключаем кнопку закрытия балуна.*/
/*             balloonCloseButton: false,*/
/*             // Цвет линии.*/
/*             strokeColor: "#000000",*/
/*             // Ширина линии.*/
/*             strokeWidth: 4,*/
/*             // Коэффициент прозрачности.*/
/*             strokeOpacity: 0.5*/
/*         });*/
/* 		console.log(myPolyline)*/
/* 		*/
/* 		myMap.geoObjects.add(objectManager)//.add(myPolyline);*/
/* 		*/
/* 		document.addEventListener('redrawMap', function(e) {*/
/* 			objectManager.removeAll()*/
/* 			objectManager.add(e.detail.json)*/
/* 			console.log(e.detail.json)*/
/* 			let polyline = new ymaps.Polyline(*/
/* 				// Указываем координаты вершин ломаной.*/
/* 				e.detail.polyline*/
/* 			, {*/
/* 				// Описываем свойства геообъекта.*/
/* 				// Содержимое балуна.*/
/* 				//balloonContent: "Ломаная линия"*/
/* 			}, {*/
/* 				// Задаем опции геообъекта.*/
/* 				// Отключаем кнопку закрытия балуна.*/
/* 				balloonCloseButton: false,*/
/* 				// Цвет линии.*/
/* 				strokeColor: "#DD0A23",*/
/* 				// Ширина линии.*/
/* 				strokeWidth: 2,*/
/* 				// Коэффициент прозрачности.*/
/* 				strokeOpacity: 1*/
/* 			})*/
/* 			//console.log(polyline)*/
/* 			*/
/* 			*/
/* 			var multiRoute = new ymaps.multiRouter.MultiRoute({*/
/* 				// Описание опорных точек мультимаршрута.*/
/* 				referencePoints: e.detail.polyline,*/
/* 				// Параметры маршрутизации.*/
/* 				params: {*/
/* 					// Ограничение на максимальное количество маршрутов, возвращаемое маршрутизатором.*/
/* 					results: 2*/
/* 				}*/
/* 			}, {*/
/* 				// Внешний вид путевых точек.*/
/* 				wayPointStartIconColor: "#333",*/
/* 				wayPointStartIconFillColor: "#B3B3B3",*/
/* 				// Задаем собственную картинку для последней путевой точки.*/
/* 				wayPointFinishIconImageSize: [30, 30],*/
/* 				wayPointFinishIconImageOffset: [-15, -15],*/
/* 				// Позволяет скрыть иконки путевых точек маршрута.*/
/* 				// wayPointVisible:false,*/
/* */
/* 				// Внешний вид транзитных точек.*/
/* 				viaPointIconRadius: 7,*/
/* 				viaPointIconFillColor: "#000088",*/
/* 				viaPointActiveIconFillColor: "#E63E92",*/
/* 				// Транзитные точки можно перетаскивать, при этом*/
/* 				// маршрут будет перестраиваться.*/
/* 				viaPointDraggable: true,*/
/* 				// Позволяет скрыть иконки транзитных точек маршрута.*/
/* 				// viaPointVisible:false,*/
/* */
/* 				// Внешний вид точечных маркеров под путевыми точками.*/
/* 				pinIconFillColor: "#000088",*/
/* 				pinActiveIconFillColor: "#B3B3B3",*/
/* 				// Позволяет скрыть точечные маркеры путевых точек.*/
/* 				// pinVisible:false,*/
/* */
/* 				// Внешний вид линии маршрута.*/
/* 				routeStrokeWidth: 2,*/
/* 				routeStrokeColor: "#000088",*/
/* 				routeActiveStrokeWidth: 6,*/
/* 				routeActiveStrokeColor: "#E63E92",*/
/* */
/* 				// Внешний вид линии пешеходного маршрута.*/
/* 				routeActivePedestrianSegmentStrokeStyle: "solid",*/
/* 				routeActivePedestrianSegmentStrokeColor: "#00CDCD",*/
/* */
/* 				// Автоматически устанавливать границы карты так, чтобы маршрут был виден целиком.*/
/* 				boundsAutoApply: true*/
/* 			});*/
/* 			*/
/* 			console.log(multiRoute)*/
/* 			{% if page.field_map_isroute %}*/
/* 			myMap.geoObjects.add(multiRoute) //**** ROUTING*/
/* 			{% else %}*/
/* 			myMap.geoObjects.add(polyline) //**** POLYLINE*/
/* 			{% endif %}*/
/* 		})*/
/* 		*/
/* 		*/
/* 		*/
/*     }*/
/* 	*/
/* 	*/
/* 	*/
/* </script>*/
/* <script src="/site/theme/js/search_routes.js"></script>*/
/* {% include 'footer' %}*/
/* */
/* {% endif %}*/
