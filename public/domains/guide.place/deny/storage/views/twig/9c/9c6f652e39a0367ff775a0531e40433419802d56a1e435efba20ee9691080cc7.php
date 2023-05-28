<?php

/* _.admin.list */
class __TwigTemplate_6d0dcf2193e423ceb1fb651c9fb296cf50c3d9b06a5ac4dd8e9b8df5000b60c3 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.admin.base", "_.admin.list", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'row' => array($this, 'block_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.admin.base";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("for" => 18, "if" => 20, "block" => 59, "set" => 72);
        $filters = array("escape" => 5, "default" => 20, "length" => 85);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if', 'block', 'set'),
                array('escape', 'default', 'length'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
\t<a class=\"btn btn-success btn-sm pull-right\" href=\"";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "admin", array()), "html", null, true));
        echo "/";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "segments", array()), 1, array(), "array"), "html", null, true));
        echo "/create\" ng-show=\"actions.create\">
\t\t<span class=\"fa fa-plus\"></span>
\t\tСоздать
\t</a>

\t<h3 ng-bind=\"text.listHeader\"></h3>

\t<hr>

\t<table class=\"table table-condensed table-hover\">
\t\t<thead>
\t\t\t<tr>

\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) ? $context["columns"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 19
            echo "\t\t\t\t\t<th>
\t\t\t\t\t\t";
            // line 20
            if (((($this->getAttribute($context["column"], "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["column"], "alias", array()), "")) : ("")) || (($this->getAttribute($context["column"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["column"], "label", array()), "")) : ("")))) {
                // line 21
                echo "
\t\t\t\t\t\t\t";
                // line 22
                if ((($this->getAttribute($context["column"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["column"], "type", array()), "")) : (""))) {
                    // line 23
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 24
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($context["column"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["column"], "label", array()), $this->getAttribute($context["column"], "alias", array()))) : ($this->getAttribute($context["column"], "alias", array()))), "html", null, true));
                    echo "

\t\t\t\t\t\t\t";
                } else {
                    // line 27
                    echo "
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 28
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "url", array()), "html", null, true));
                    echo "?sort=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["column"], "alias", array()), "html", null, true));
                    if ((((($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array(), "any", false, true), "sort", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array(), "any", false, true), "sort", array()), "id")) : ("id")) == $this->getAttribute($context["column"], "alias", array())) &&  !(($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array(), "any", false, true), "desc", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array(), "any", false, true), "desc", array()), false)) : (false)))) {
                        echo "&desc=1";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 29
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($context["column"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["column"], "label", array()), $this->getAttribute($context["column"], "alias", array()))) : ($this->getAttribute($context["column"], "alias", array()))), "html", null, true));
                    echo "
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t";
                    // line 32
                    if (((($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array(), "any", false, true), "sort", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array(), "any", false, true), "sort", array()), "id")) : ("id")) == $this->getAttribute($context["column"], "alias", array()))) {
                        // line 33
                        echo "\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\tclass=\"
\t\t\t\t\t\t\t\t\t\t\tfa
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 36
                        if ((($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array(), "any", false, true), "desc", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array(), "any", false, true), "desc", array()), false)) : (false))) {
                            // line 37
                            echo "\t\t\t\t\t\t\t\t\t\t\t\tfa-sort-alpha-desc
\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 39
                            echo "\t\t\t\t\t\t\t\t\t\t\t\tfa-sort-alpha-asc
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 41
                        echo "\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t></span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 44
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 46
                echo "
\t\t\t\t\t\t";
            }
            // line 48
            echo "\t\t\t\t\t</th>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
\t\t\t\t<th></th>

\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
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
            // line 57
            echo "\t\t\t\t<tr>

\t\t\t\t\t";
            // line 59
            $this->displayBlock('row', $context, $blocks);
            // line 121
            echo "
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 123
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "admin", array()), "html", null, true));
            echo "/";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "segments", array()), 1, array(), "array"), "html", null, true));
            echo "/";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true));
            echo "/edit\" ng-show=\"actions.edit\">
\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
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
        // line 129
        echo "\t\t</tbody>
\t</table>

";
    }

    // line 59
    public function block_row($context, array $blocks = array())
    {
        // line 60
        echo "
\t\t\t\t\t\t";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) ? $context["columns"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 62
            echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
            // line 63
            if (((($this->getAttribute($context["column"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["column"], "type", array()), "")) : ("")) == "")) {
                // line 64
                echo "\t\t\t\t\t\t\t\t\t";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), $this->getAttribute($context["column"], "alias", array()), array(), "array"), "html", null, true));
                echo "
\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 65
$context["column"], "type", array()) == "checkbox")) {
                // line 66
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), $this->getAttribute($context["column"], "alias", array()), array(), "array")) {
                    // line 67
                    echo "\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-check-square-o text-success\"></span>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 69
                    echo "\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-square-o text-danger\"></span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 71
                echo "\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute($context["column"], "type", array()) == "relation")) {
                // line 72
                echo "\t\t\t\t\t\t\t\t\t";
                $context["relation"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), $this->getAttribute($context["column"], "alias", array()), array(), "array");
                // line 73
                echo "\t\t\t\t\t\t\t\t\t";
                if ((isset($context["relation"]) ? $context["relation"] : null)) {
                    // line 74
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["column"], "url", array())) {
                        // line 75
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "admin", array()), "html", null, true));
                        echo "/";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["column"], "url", array()), "html", null, true));
                        echo "/";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["relation"]) ? $context["relation"] : null), "id", array()), "html", null, true));
                        echo "/edit\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 76
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute((isset($context["relation"]) ? $context["relation"] : null), (($this->getAttribute($context["column"], "key", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["column"], "key", array()), "name")) : ("name")), array(), "array")) ? ($this->getAttribute((isset($context["relation"]) ? $context["relation"] : null), (($this->getAttribute($context["column"], "key", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["column"], "key", array()), "name")) : ("name")), array(), "array")) : ($this->getAttribute((isset($context["relation"]) ? $context["relation"] : null), "id", array()))), "html", null, true));
                        echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 79
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 80
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute((isset($context["relation"]) ? $context["relation"] : null), (($this->getAttribute($context["column"], "key", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["column"], "key", array()), "name")) : ("name")), array(), "array")) ? ($this->getAttribute((isset($context["relation"]) ? $context["relation"] : null), (($this->getAttribute($context["column"], "key", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["column"], "key", array()), "name")) : ("name")), array(), "array")) : ($this->getAttribute((isset($context["relation"]) ? $context["relation"] : null), "id", array()))), "html", null, true));
                        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 83
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 84
                echo "\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute($context["column"], "type", array()) == "collection")) {
                // line 85
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), $this->getAttribute($context["column"], "alias", array()), array(), "array")) > 0)) {
                    // line 86
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), $this->getAttribute($context["column"], "alias", array()), array(), "array")), "html", null, true));
                    echo ":
\t\t\t\t\t\t\t\t\t\t";
                    // line 87
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), $this->getAttribute($context["column"], "alias", array()), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["relation"]) {
                        // line 88
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if ((($this->getAttribute($context["column"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["column"], "url", array()), false)) : (false))) {
                            // line 89
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                            // line 90
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "admin", array()), "html", null, true));
                            echo "/";
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["column"], "url", array()), "html", null, true));
                            echo "/";
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["relation"], "id", array()), "html", null, true));
                            echo "/edit\"
\t\t\t\t\t\t\t\t\t\t\t\t>";
                            // line 91
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($context["relation"], (($this->getAttribute($context["column"], "key", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["column"], "key", array()), "name")) : ("name")), array(), "array")) ? ($this->getAttribute($context["relation"], (($this->getAttribute($context["column"], "key", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["column"], "key", array()), "name")) : ("name")), array(), "array")) : ($this->getAttribute($context["relation"], "id", array()))), "html", null, true));
                            echo "</a>,
\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 93
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">";
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($context["relation"], (($this->getAttribute($context["column"], "key", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["column"], "key", array()), "name")) : ("name")), array(), "array")) ? ($this->getAttribute($context["relation"], (($this->getAttribute($context["column"], "key", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["column"], "key", array()), "name")) : ("name")), array(), "array")) : ($this->getAttribute($context["relation"], "id", array()))), "html", null, true));
                            echo "</div>,
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 95
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['relation'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 96
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 97
                echo "\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute($context["column"], "type", array()) == "option")) {
                // line 98
                echo "\t\t\t\t\t\t\t\t\t";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["column"], "options", array(), "any", false, true), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), $this->getAttribute($context["column"], "alias", array()), array(), "array"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["column"], "options", array(), "any", false, true), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), $this->getAttribute($context["column"], "alias", array()), array(), "array"), array(), "array"), "")) : ("")), "html", null, true));
                echo "
\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 99
$context["column"], "type", array()) == "url")) {
                // line 100
                echo "\t\t\t\t\t\t\t\t\t";
                if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), $this->getAttribute($context["column"], "alias", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), $this->getAttribute($context["column"], "alias", array()), array(), "array"), "")) : (""))) {
                    // line 101
                    echo "\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\thref=\"";
                    // line 102
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), $this->getAttribute($context["column"], "alias", array()), array(), "array"), "html", null, true));
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 103
                    if ((($this->getAttribute($context["column"], "targetBlank", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["column"], "targetBlank", array()), false)) : (false))) {
                        // line 104
                        echo "\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 106
                    echo "\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 107
                    if ((($this->getAttribute($context["column"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["column"], "icon", array()), "")) : (""))) {
                        // line 108
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["column"], "icon", array()), "html", null, true));
                        echo "\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 110
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), $this->getAttribute($context["column"], "alias", array()), array(), "array"), "html", null, true));
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 112
                    echo "\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 114
                echo "\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute($context["column"], "type", array()) == "datetime")) {
                // line 115
                echo "\t\t\t\t\t\t\t\t\t<datetime format=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["column"], "format", array()), "html", null, true));
                echo "\" value=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), $this->getAttribute($context["column"], "alias", array()), array(), "array"), "html", null, true));
                echo "\"></datetime>
\t\t\t\t\t\t\t\t";
            }
            // line 117
            echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "
\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "_.admin.list";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 119,  400 => 117,  392 => 115,  389 => 114,  385 => 112,  379 => 110,  373 => 108,  371 => 107,  368 => 106,  364 => 104,  362 => 103,  358 => 102,  355 => 101,  352 => 100,  350 => 99,  345 => 98,  342 => 97,  339 => 96,  333 => 95,  327 => 93,  322 => 91,  314 => 90,  311 => 89,  308 => 88,  304 => 87,  299 => 86,  296 => 85,  293 => 84,  290 => 83,  284 => 80,  281 => 79,  275 => 76,  266 => 75,  263 => 74,  260 => 73,  257 => 72,  254 => 71,  250 => 69,  246 => 67,  243 => 66,  241 => 65,  236 => 64,  234 => 63,  231 => 62,  227 => 61,  224 => 60,  221 => 59,  214 => 129,  190 => 123,  186 => 121,  184 => 59,  180 => 57,  163 => 56,  155 => 50,  148 => 48,  144 => 46,  140 => 44,  135 => 41,  131 => 39,  127 => 37,  125 => 36,  120 => 33,  118 => 32,  112 => 29,  103 => 28,  100 => 27,  94 => 24,  91 => 23,  89 => 22,  86 => 21,  84 => 20,  81 => 19,  77 => 18,  59 => 5,  56 => 4,  53 => 3,  11 => 1,);
    }
}
/* {% extends '_.admin.base' %}*/
/* */
/* {% block content %}*/
/* */
/* 	<a class="btn btn-success btn-sm pull-right" href="{$ url.admin $}/{$ request.segments[1] $}/create" ng-show="actions.create">*/
/* 		<span class="fa fa-plus"></span>*/
/* 		Создать*/
/* 	</a>*/
/* */
/* 	<h3 ng-bind="text.listHeader"></h3>*/
/* */
/* 	<hr>*/
/* */
/* 	<table class="table table-condensed table-hover">*/
/* 		<thead>*/
/* 			<tr>*/
/* */
/* 				{% for column in columns %}*/
/* 					<th>*/
/* 						{% if column.alias|default('') or column.label|default('') %}*/
/* */
/* 							{% if column.type|default('') %}*/
/* */
/* 								{$ column.label|default(column.alias) $}*/
/* */
/* 							{% else %}*/
/* */
/* 								<a href="{$ request.url $}?sort={$ column.alias $}{% if request.input.sort|default('id') == column.alias and not request.input.desc|default(false) %}&desc=1{% endif %}">*/
/* 									{$ column.label|default(column.alias) $}*/
/* 								</a>*/
/* */
/* 								{% if request.input.sort|default('id') == column.alias %}*/
/* 									<span*/
/* 										class="*/
/* 											fa*/
/* 											{% if request.input.desc|default(false) %}*/
/* 												fa-sort-alpha-desc*/
/* 											{% else %}*/
/* 												fa-sort-alpha-asc*/
/* 											{% endif %}*/
/* 										"*/
/* 									></span>*/
/* 								{% endif %}*/
/* */
/* 							{% endif %}*/
/* */
/* 						{% endif %}*/
/* 					</th>*/
/* 				{% endfor %}*/
/* */
/* 				<th></th>*/
/* */
/* 			</tr>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 			{% for item in items %}*/
/* 				<tr>*/
/* */
/* 					{% block row %}*/
/* */
/* 						{% for column in columns %}*/
/* 							<td>*/
/* 								{% if column.type|default('') == '' %}*/
/* 									{$ item[column.alias] $}*/
/* 								{% elseif column.type == 'checkbox' %}*/
/* 									{% if item[column.alias] %}*/
/* 										<span class="fa fa-check-square-o text-success"></span>*/
/* 									{% else %}*/
/* 										<span class="fa fa-square-o text-danger"></span>*/
/* 									{% endif %}*/
/* 								{% elseif column.type == 'relation' %}*/
/* 									{% set relation = item[column.alias] %}*/
/* 									{% if relation %}*/
/* 										{% if column.url %}*/
/* 											<a href="{$ url.admin $}/{$ column.url $}/{$ relation.id $}/edit">*/
/* 												{$ relation[column.key|default('name')] ?: relation.id$}*/
/* 											</a>*/
/* 										{% else %}*/
/* 											<div class="text-muted">*/
/* 												{$ relation[column.key|default('name')] ?: relation.id$}*/
/* 											</div>*/
/* 										{% endif %}*/
/* 									{% endif %}*/
/* 								{% elseif column.type == 'collection' %}*/
/* 									{% if item[column.alias]|length > 0 %}*/
/* 										{$ item[column.alias]|length $}:*/
/* 										{% for relation in item[column.alias] %}*/
/* 											{% if column.url|default(false) %}*/
/* 												<a*/
/* 													href="{$ url.admin $}/{$ column.url $}/{$ relation.id $}/edit"*/
/* 												>{$ relation[column.key|default('name')] ?: relation.id $}</a>,*/
/* 											{% else %}*/
/* 												<div class="text-muted">{$ relation[column.key|default('name')] ?: relation.id $}</div>,*/
/* 											{% endif %}*/
/* 										{% endfor %}*/
/* 									{% endif %}*/
/* 								{% elseif column.type == 'option' %}*/
/* 									{$ column.options[item[column.alias]]|default('') $}*/
/* 								{% elseif column.type == 'url' %}*/
/* 									{% if item[column.alias]|default('') %}*/
/* 										<a*/
/* 											href="{$ item[column.alias] $}"*/
/* 											{% if column.targetBlank|default(false) %}*/
/* 												target="_blank"*/
/* 											{% endif %}*/
/* 										>*/
/* 											{% if column.icon|default('') %}*/
/* 												<span class="fa fa-{$ column.icon $}"></span>*/
/* 											{% else %}*/
/* 												{$ item[column.alias] $}*/
/* 											{% endif %}*/
/* 										</a>*/
/* 									{% endif %}*/
/* 								{% elseif column.type == 'datetime' %}*/
/* 									<datetime format="{$ column.format $}" value="{$ item[column.alias] $}"></datetime>*/
/* 								{% endif %}*/
/* 							</td>*/
/* 						{% endfor %}*/
/* */
/* 					{% endblock %}*/
/* */
/* 					<td>*/
/* 						<a href="{$ url.admin $}/{$ request.segments[1] $}/{$ item.id $}/edit" ng-show="actions.edit">*/
/* 							<span class="fa fa-pencil"></span>*/
/* 						</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			{% endfor %}*/
/* 		</tbody>*/
/* 	</table>*/
/* */
/* {% endblock %}*/
/* */
