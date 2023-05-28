<?php

/* layouts.search */
class __TwigTemplate_083b5419d1d46cbc7a29b5918af0eb84c9a0d6b8318f982e6dbc9f1ef12a3487 extends TwigBridge\Twig\Template
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
        $tags = array("set" => 1, "for" => 8, "if" => 9, "include" => 177);
        $filters = array("split" => 1, "length" => 9, "merge" => 20, "trim" => 129, "lower" => 133);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for', 'if', 'include'),
                array('split', 'length', 'merge', 'trim', 'lower'),
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
        $context["query"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "query", array()), " ");
        // line 2
        $context["city"] = $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "city", array());
        // line 3
        $context["cat"] = $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "cat", array());
        // line 4
        echo "
";
        // line 5
        $context["homepage"] = (isset($context["page"]) ? $context["page"] : null);
        // line 6
        $context["index"] = (isset($context["page"]) ? $context["page"] : null);
        // line 7
        $context["check"] = true;
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            if ((isset($context["check"]) ? $context["check"] : null)) {
                // line 9
                echo "\t";
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["index"]) ? $context["index"] : null), "parent_page", array())) > 0)) {
                    // line 10
                    echo "\t\t";
                    $context["index"] = $this->getAttribute((isset($context["index"]) ? $context["index"] : null), "parent_page", array());
                    // line 11
                    echo "\t\t";
                    $context["homepage"] = (isset($context["index"]) ? $context["index"] : null);
                    // line 12
                    echo "\t";
                } else {
                    // line 13
                    echo "\t\t";
                    $context["check"] = false;
                    // line 14
                    echo "\t";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t

";
        // line 17
        $context["items"] = array();
        // line 18
        echo "
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["homepage"]) ? $context["homepage"] : null), "active_sub_pages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subpage1"]) {
            // line 20
            echo "\t\t";
            $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : null), array(0 => $context["subpage1"]));
            // line 21
            echo "\t";
            if ((twig_length_filter($this->env, $this->getAttribute($context["subpage1"], "active_sub_pages", array())) > 0)) {
                // line 22
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subpage1"], "active_sub_pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["subpage2"]) {
                    // line 23
                    echo "\t\t\t\t";
                    $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : null), array(0 => $context["subpage2"]));
                    // line 24
                    echo "\t\t\t";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["subpage2"], "active_sub_pages", array())) > 0)) {
                        // line 25
                        echo "\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subpage2"], "active_sub_pages", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["subpage3"]) {
                            // line 26
                            echo "\t\t\t\t\t\t";
                            $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : null), array(0 => $context["subpage3"]));
                            // line 27
                            echo "\t\t\t\t\t";
                            if ((twig_length_filter($this->env, $this->getAttribute($context["subpage3"], "active_sub_pages", array())) > 0)) {
                                // line 28
                                echo "\t\t\t\t\t\t";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subpage3"], "active_sub_pages", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["subpage4"]) {
                                    // line 29
                                    echo "\t\t\t\t\t\t\t\t";
                                    $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : null), array(0 => $context["subpage4"]));
                                    // line 30
                                    echo "\t\t\t\t\t\t\t";
                                    if ((twig_length_filter($this->env, $this->getAttribute($context["subpage4"], "active_sub_pages", array())) > 0)) {
                                        // line 31
                                        echo "\t\t\t\t\t\t\t\t";
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subpage4"], "active_sub_pages", array()));
                                        foreach ($context['_seq'] as $context["_key"] => $context["subpage5"]) {
                                            // line 32
                                            echo "\t\t\t\t\t\t\t\t\t\t";
                                            $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : null), array(0 => $context["subpage5"]));
                                            // line 33
                                            echo "\t\t\t\t\t\t\t\t\t";
                                            if ((twig_length_filter($this->env, $this->getAttribute($context["subpage5"], "active_sub_pages", array())) > 0)) {
                                                // line 34
                                                echo "\t\t\t\t\t\t\t\t\t\t";
                                                $context['_parent'] = $context;
                                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subpage5"], "active_sub_pages", array()));
                                                foreach ($context['_seq'] as $context["_key"] => $context["subpage6"]) {
                                                    // line 35
                                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                                    $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : null), array(0 => $context["subpage6"]));
                                                    // line 36
                                                    echo "\t\t\t\t\t\t\t\t\t\t";
                                                }
                                                $_parent = $context['_parent'];
                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage6'], $context['_parent'], $context['loop']);
                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                // line 37
                                                echo "\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 38
                                            echo "\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage5'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 39
                                        echo "\t\t\t\t\t\t\t";
                                    }
                                    // line 40
                                    echo "\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage4'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 41
                                echo "\t\t\t\t\t";
                            }
                            // line 42
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage3'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 43
                        echo "\t\t\t";
                    }
                    // line 44
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
";
        // line 48
        $context["cities"] = null;
        // line 49
        echo "
";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ( !(isset($context["cities"]) ? $context["cities"] : null)) {
                // line 51
                echo "\t";
                if (($this->getAttribute($context["item"], "id", array()) == 63)) {
                    // line 52
                    echo "\t\t";
                    $context["cities"] = $context["item"];
                    // line 53
                    echo "\t";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
";
        // line 56
        $context["currentCity"] = null;
        // line 57
        $context["currentCat"] = null;
        // line 58
        echo "
";
        // line 59
        $context["tmpItems"] = array();
        // line 60
        echo "
";
        // line 61
        if (((isset($context["city"]) ? $context["city"] : null) && (isset($context["cat"]) ? $context["cat"] : null))) {
            // line 62
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cities"]) ? $context["cities"] : null), "active_sub_pages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["cit"]) {
                // line 63
                echo "\t\t";
                if (($this->getAttribute($context["cit"], "id", array()) == (isset($context["city"]) ? $context["city"] : null))) {
                    // line 64
                    echo "\t\t\t";
                    $context["currentCity"] = $context["cit"];
                    // line 65
                    echo "\t\t";
                }
                // line 66
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentCity"]) ? $context["currentCity"] : null), "active_sub_pages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["cate"]) {
                // line 68
                echo "\t\t";
                if (((isset($context["cat"]) ? $context["cat"] : null) == $this->getAttribute($context["cate"], "field_cat_id", array()))) {
                    // line 69
                    echo "\t\t\t";
                    $context["currentCat"] = $context["cate"];
                    // line 70
                    echo "\t\t";
                }
                // line 71
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentCat"]) ? $context["currentCat"] : null), "active_sub_pages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 73
                echo "\t\t";
                $context["tmpItems"] = twig_array_merge((isset($context["tmpItems"]) ? $context["tmpItems"] : null), array(0 => $context["item"]));
                // line 74
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 76
        echo "
";
        // line 77
        if (( !(isset($context["cat"]) ? $context["cat"] : null) && (isset($context["city"]) ? $context["city"] : null))) {
            // line 78
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cities"]) ? $context["cities"] : null), "active_sub_pages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["cit"]) {
                // line 79
                echo "\t\t";
                if (($this->getAttribute($context["cit"], "id", array()) == (isset($context["city"]) ? $context["city"] : null))) {
                    // line 80
                    echo "\t\t\t";
                    $context["currentCity"] = $context["cit"];
                    // line 81
                    echo "\t\t";
                }
                // line 82
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentCity"]) ? $context["currentCity"] : null), "active_sub_pages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["cate"]) {
                // line 84
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cate"], "active_sub_pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 85
                    echo "\t\t\t";
                    $context["tmpItems"] = twig_array_merge((isset($context["tmpItems"]) ? $context["tmpItems"] : null), array(0 => $context["item"]));
                    // line 86
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 89
        echo "
";
        // line 90
        if (((isset($context["cat"]) ? $context["cat"] : null) &&  !(isset($context["city"]) ? $context["city"] : null))) {
            // line 91
            echo "\t";
            $context["tmpCats"] = array();
            // line 92
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cities"]) ? $context["cities"] : null), "active_sub_pages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["cit"]) {
                // line 93
                echo "\t\t";
                if ((twig_length_filter($this->env, $this->getAttribute($context["cit"], "active_sub_pages", array())) > 0)) {
                    // line 94
                    echo "\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cit"], "active_sub_pages", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["cate"]) {
                        // line 95
                        echo "\t\t\t\t";
                        if (((isset($context["cat"]) ? $context["cat"] : null) == $this->getAttribute($context["cate"], "field_cat_id", array()))) {
                            // line 96
                            echo "\t\t\t\t\t";
                            $context["tmpCats"] = twig_array_merge((isset($context["tmpCats"]) ? $context["tmpCats"] : null), array(0 => $context["cate"]));
                            // line 97
                            echo "\t\t\t\t";
                        }
                        // line 98
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cate'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 99
                    echo "\t\t";
                }
                // line 100
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tmpCats"]) ? $context["tmpCats"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tmpCat"]) {
                // line 102
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tmpCat"], "active_sub_pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 103
                    echo "\t\t\t";
                    $context["tmpItems"] = twig_array_merge((isset($context["tmpItems"]) ? $context["tmpItems"] : null), array(0 => $context["item"]));
                    // line 104
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tmpCat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 107
        echo "
";
        // line 108
        if (( !(isset($context["cat"]) ? $context["cat"] : null) &&  !(isset($context["city"]) ? $context["city"] : null))) {
            // line 109
            echo "\t";
            $context["tmpCats"] = array();
            // line 110
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cities"]) ? $context["cities"] : null), "active_sub_pages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["cit"]) {
                // line 111
                echo "\t\t";
                if ((twig_length_filter($this->env, $this->getAttribute($context["cit"], "active_sub_pages", array())) > 0)) {
                    // line 112
                    echo "\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cit"], "active_sub_pages", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["cate"]) {
                        // line 113
                        echo "\t\t\t\t";
                        $context["tmpCats"] = twig_array_merge((isset($context["tmpCats"]) ? $context["tmpCats"] : null), array(0 => $context["cate"]));
                        // line 114
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cate'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 115
                    echo "\t\t";
                }
                // line 116
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tmpCats"]) ? $context["tmpCats"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tmpCat"]) {
                // line 118
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tmpCat"], "active_sub_pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 119
                    echo "\t\t\t";
                    $context["tmpItems"] = twig_array_merge((isset($context["tmpItems"]) ? $context["tmpItems"] : null), array(0 => $context["item"]));
                    // line 120
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tmpCat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 123
        echo "
";
        // line 124
        $context["queryItems"] = array();
        // line 125
        echo "
";
        // line 126
        if ((twig_length_filter($this->env, (isset($context["tmpItems"]) ? $context["tmpItems"] : null)) > 0)) {
            // line 127
            echo "\t";
            if (((isset($context["query"]) ? $context["query"] : null) && ($this->getAttribute((isset($context["query"]) ? $context["query"] : null), 0, array(), "array") != ""))) {
                // line 128
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tmpItems"]) ? $context["tmpItems"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 129
                    echo "\t\t\t";
                    $context["tags"] = twig_split_filter($this->env, trim($this->getAttribute($context["item"], "field_hashtag", array())), ",");
                    // line 130
                    echo "\t\t\t";
                    if ((isset($context["tags"]) ? $context["tags"] : null)) {
                        // line 131
                        echo "\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                            // line 132
                            echo "\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["query"]) ? $context["query"] : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["que"]) {
                                // line 133
                                echo "\t\t\t\t\t\t";
                                if ((((twig_length_filter($this->env, $context["que"]) > 3) && twig_in_filter(twig_lower_filter($this->env, $context["que"]), twig_lower_filter($this->env, $context["tag"]))) || ((twig_length_filter($this->env, $context["que"]) > 3) && twig_in_filter(twig_lower_filter($this->env, $context["que"]), twig_lower_filter($this->env, $this->getAttribute($context["item"], "field_header", array())))))) {
                                    // line 134
                                    echo "\t\t\t\t\t\t\t";
                                    $context["queryItems"] = twig_array_merge((isset($context["queryItems"]) ? $context["queryItems"] : null), array(0 => $context["item"]));
                                    // line 135
                                    echo "\t\t\t\t\t\t";
                                }
                                // line 136
                                echo "\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['que'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 137
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 138
                        echo "\t\t\t";
                    }
                    // line 139
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 140
                echo "\t";
            } else {
                // line 141
                echo "\t\t";
                $context["queryItems"] = (isset($context["tmpItems"]) ? $context["tmpItems"] : null);
                // line 142
                echo "\t";
            }
            // line 143
            echo "\t
";
        }
        // line 145
        echo "
";
        // line 146
        if ((twig_length_filter($this->env, (isset($context["queryItems"]) ? $context["queryItems"] : null)) == 0)) {
            // line 147
            echo "\t";
            if (((isset($context["query"]) ? $context["query"] : null) && ($this->getAttribute((isset($context["query"]) ? $context["query"] : null), 0, array(), "array") != ""))) {
                // line 148
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 149
                    echo "\t\t\t";
                    if (($this->getAttribute($context["item"], "layout_id", array()) == 2)) {
                        // line 150
                        echo "\t\t\t\t";
                        $context["tags"] = twig_split_filter($this->env, trim($this->getAttribute($context["item"], "field_hashtag", array())), ",");
                        // line 151
                        echo "\t\t\t\t";
                        if ((isset($context["tags"]) ? $context["tags"] : null)) {
                            // line 152
                            echo "\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                                // line 153
                                echo "\t\t\t\t\t\t";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((isset($context["query"]) ? $context["query"] : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["que"]) {
                                    // line 154
                                    echo "\t\t\t\t\t\t\t";
                                    if ((((twig_length_filter($this->env, $context["que"]) > 3) && twig_in_filter(twig_lower_filter($this->env, $context["que"]), twig_lower_filter($this->env, $context["tag"]))) || ((twig_length_filter($this->env, $context["que"]) > 3) && twig_in_filter(twig_lower_filter($this->env, $context["que"]), twig_lower_filter($this->env, $this->getAttribute($context["item"], "field_header", array())))))) {
                                        // line 155
                                        echo "\t\t\t\t\t\t\t\t";
                                        $context["queryItems"] = twig_array_merge((isset($context["queryItems"]) ? $context["queryItems"] : null), array(0 => $context["item"]));
                                        // line 156
                                        echo "\t\t\t\t\t\t\t";
                                    }
                                    // line 157
                                    echo "\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['que'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 158
                                echo "\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 159
                            echo "\t\t\t\t";
                        }
                        // line 160
                        echo "\t\t\t";
                    }
                    // line 161
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 162
                echo "\t";
            }
        }
        // line 164
        echo "
";
        // line 165
        $context["finalItems"] = array();
        // line 166
        $context["allItems"] = array();
        // line 167
        echo "
";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["queryItems"]) ? $context["queryItems"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["qitem"]) {
            echo " 
\t";
            // line 169
            if (!twig_in_filter($this->getAttribute($context["qitem"], "id", array()), (isset($context["finalItems"]) ? $context["finalItems"] : null))) {
                // line 170
                echo "\t\t";
                $context["finalItems"] = twig_array_merge((isset($context["finalItems"]) ? $context["finalItems"] : null), array(0 => $this->getAttribute($context["qitem"], "id", array())));
                // line 171
                echo "\t\t";
                $context["allItems"] = twig_array_merge((isset($context["allItems"]) ? $context["allItems"] : null), array(0 => $context["qitem"]));
                // line 172
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "
";
        // line 175
        if ((twig_length_filter($this->env, (isset($context["allItems"]) ? $context["allItems"] : null)) > 0)) {
            // line 176
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allItems"]) ? $context["allItems"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 177
                echo "\t\t";
                $this->loadTemplate("item_cat_blog", "layouts.search", 177)->display($context);
                // line 178
                echo "\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 180
            echo "\t<h2 style=\"text-align: center; color: #fff;\">По вашему запросу результатов нет</h2>
";
        }
        // line 182
        echo "
";
    }

    public function getTemplateName()
    {
        return "layouts.search";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  714 => 182,  710 => 180,  695 => 178,  692 => 177,  674 => 176,  672 => 175,  669 => 174,  662 => 172,  659 => 171,  656 => 170,  654 => 169,  648 => 168,  645 => 167,  643 => 166,  641 => 165,  638 => 164,  634 => 162,  628 => 161,  625 => 160,  622 => 159,  616 => 158,  610 => 157,  607 => 156,  604 => 155,  601 => 154,  596 => 153,  591 => 152,  588 => 151,  585 => 150,  582 => 149,  577 => 148,  574 => 147,  572 => 146,  569 => 145,  565 => 143,  562 => 142,  559 => 141,  556 => 140,  550 => 139,  547 => 138,  541 => 137,  535 => 136,  532 => 135,  529 => 134,  526 => 133,  521 => 132,  516 => 131,  513 => 130,  510 => 129,  505 => 128,  502 => 127,  500 => 126,  497 => 125,  495 => 124,  492 => 123,  485 => 121,  479 => 120,  476 => 119,  471 => 118,  466 => 117,  460 => 116,  457 => 115,  451 => 114,  448 => 113,  443 => 112,  440 => 111,  435 => 110,  432 => 109,  430 => 108,  427 => 107,  420 => 105,  414 => 104,  411 => 103,  406 => 102,  401 => 101,  395 => 100,  392 => 99,  386 => 98,  383 => 97,  380 => 96,  377 => 95,  372 => 94,  369 => 93,  364 => 92,  361 => 91,  359 => 90,  356 => 89,  349 => 87,  343 => 86,  340 => 85,  335 => 84,  330 => 83,  324 => 82,  321 => 81,  318 => 80,  315 => 79,  310 => 78,  308 => 77,  305 => 76,  298 => 74,  295 => 73,  290 => 72,  284 => 71,  281 => 70,  278 => 69,  275 => 68,  270 => 67,  264 => 66,  261 => 65,  258 => 64,  255 => 63,  250 => 62,  248 => 61,  245 => 60,  243 => 59,  240 => 58,  238 => 57,  236 => 56,  233 => 55,  225 => 53,  222 => 52,  219 => 51,  214 => 50,  211 => 49,  209 => 48,  206 => 47,  199 => 45,  193 => 44,  190 => 43,  184 => 42,  181 => 41,  175 => 40,  172 => 39,  166 => 38,  163 => 37,  157 => 36,  154 => 35,  149 => 34,  146 => 33,  143 => 32,  138 => 31,  135 => 30,  132 => 29,  127 => 28,  124 => 27,  121 => 26,  116 => 25,  113 => 24,  110 => 23,  105 => 22,  102 => 21,  99 => 20,  95 => 19,  92 => 18,  90 => 17,  86 => 15,  78 => 14,  75 => 13,  72 => 12,  69 => 11,  66 => 10,  63 => 9,  58 => 8,  56 => 7,  54 => 6,  52 => 5,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% set query = request.input.query|split(' ') %}*/
/* {% set city = request.input.city %}*/
/* {% set cat = request.input.cat %}*/
/* */
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
/* {% set cities = null %}*/
/* */
/* {% for item in items if not cities %}*/
/* 	{% if item.id == 63 %}*/
/* 		{% set cities = item %}*/
/* 	{% endif %}*/
/* {% endfor %}*/
/* */
/* {% set currentCity = null %}*/
/* {% set currentCat = null %}*/
/* */
/* {% set tmpItems = [] %}*/
/* */
/* {% if city and cat %}*/
/* 	{% for cit in cities.active_sub_pages %}*/
/* 		{% if cit.id == city %}*/
/* 			{% set currentCity = cit %}*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* 	{% for cate in currentCity.active_sub_pages %}*/
/* 		{% if cat == cate.field_cat_id %}*/
/* 			{% set currentCat = cate %}*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* 	{% for item in currentCat.active_sub_pages %}*/
/* 		{% set tmpItems = tmpItems|merge([item]) %}*/
/* 	{% endfor %}*/
/* {% endif %}*/
/* */
/* {% if not cat and city %}*/
/* 	{% for cit in cities.active_sub_pages %}*/
/* 		{% if cit.id == city %}*/
/* 			{% set currentCity = cit %}*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* 	{% for cate in currentCity.active_sub_pages %}*/
/* 		{% for item in cate.active_sub_pages %}*/
/* 			{% set tmpItems = tmpItems|merge([item]) %}*/
/* 		{% endfor %}*/
/* 	{% endfor %}*/
/* {% endif %}*/
/* */
/* {% if cat and not city %}*/
/* 	{% set tmpCats = [] %}*/
/* 	{% for cit in cities.active_sub_pages %}*/
/* 		{% if cit.active_sub_pages|length > 0 %}*/
/* 			{% for cate in cit.active_sub_pages %}*/
/* 				{% if cat == cate.field_cat_id %}*/
/* 					{% set tmpCats = tmpCats|merge([cate]) %}*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* 	{% for tmpCat in tmpCats %}*/
/* 		{% for item in tmpCat.active_sub_pages %}*/
/* 			{% set tmpItems = tmpItems|merge([item]) %}*/
/* 		{% endfor %}*/
/* 	{% endfor %}*/
/* {% endif %}*/
/* */
/* {% if not cat and not city %}*/
/* 	{% set tmpCats = [] %}*/
/* 	{% for cit in cities.active_sub_pages %}*/
/* 		{% if cit.active_sub_pages|length > 0 %}*/
/* 			{% for cate in cit.active_sub_pages %}*/
/* 				{% set tmpCats = tmpCats|merge([cate]) %}*/
/* 			{% endfor %}*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* 	{% for tmpCat in tmpCats %}*/
/* 		{% for item in tmpCat.active_sub_pages %}*/
/* 			{% set tmpItems = tmpItems|merge([item]) %}*/
/* 		{% endfor %}*/
/* 	{% endfor %}*/
/* {% endif %}*/
/* */
/* {% set queryItems = [] %}*/
/* */
/* {% if tmpItems|length > 0 %}*/
/* 	{% if query and query[0] != '' %}*/
/* 		{% for item in tmpItems %}*/
/* 			{% set tags = item.field_hashtag|trim|split(',') %}*/
/* 			{% if tags %}*/
/* 				{% for tag in tags %}*/
/* 					{% for que in query %}*/
/* 						{% if (que|length > 3 and que|lower in tag|lower) or (que|length > 3 and que|lower in item.field_header|lower) %}*/
/* 							{% set queryItems = queryItems|merge([item]) %}*/
/* 						{% endif %}*/
/* 					{% endfor %}*/
/* 				{% endfor %}*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	{% else %}*/
/* 		{% set queryItems = tmpItems %}*/
/* 	{% endif %}*/
/* 	*/
/* {% endif %}*/
/* */
/* {% if queryItems|length == 0 %}*/
/* 	{% if query and query[0] != '' %}*/
/* 		{% for item in items %}*/
/* 			{% if item.layout_id == 2 %}*/
/* 				{% set tags = item.field_hashtag|trim|split(',') %}*/
/* 				{% if tags %}*/
/* 					{% for tag in tags %}*/
/* 						{% for que in query %}*/
/* 							{% if (que|length > 3 and que|lower in tag|lower) or (que|length > 3 and que|lower in item.field_header|lower) %}*/
/* 								{% set queryItems = queryItems|merge([item]) %}*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 					{% endfor %}*/
/* 				{% endif %}*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	{% endif %}*/
/* {% endif %}*/
/* */
/* {% set finalItems = [] %}*/
/* {% set allItems = [] %}*/
/* */
/* {% for qitem in queryItems %} */
/* 	{% if qitem.id not in finalItems %}*/
/* 		{% set finalItems = finalItems|merge([qitem.id]) %}*/
/* 		{% set allItems = allItems|merge([qitem]) %}*/
/* 	{% endif %}*/
/* {% endfor %}*/
/* */
/* {% if allItems|length > 0 %}*/
/* 	{% for item in allItems %}*/
/* 		{% include 'item_cat_blog' %}*/
/* 	{% endfor %}*/
/* {% else %}*/
/* 	<h2 style="text-align: center; color: #fff;">По вашему запросу результатов нет</h2>*/
/* {% endif %}*/
/* */
/* */
