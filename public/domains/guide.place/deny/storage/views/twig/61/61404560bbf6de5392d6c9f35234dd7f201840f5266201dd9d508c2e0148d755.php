<?php

/* _.field */
class __TwigTemplate_a26e806a05106032803ae1dcce0a864afe6fe38958488fcb506f4d915f403188 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'checkbox' => array($this, 'block_checkbox'),
            'label' => array($this, 'block_label'),
            'control' => array($this, 'block_control'),
            'type_text' => array($this, 'block_type_text'),
            'type_html' => array($this, 'block_type_html'),
            'type_string' => array($this, 'block_type_string'),
            'type_email' => array($this, 'block_type_email'),
            'type_integer' => array($this, 'block_type_integer'),
            'type_double' => array($this, 'block_type_double'),
            'type_date' => array($this, 'block_type_date'),
            'type_time' => array($this, 'block_type_time'),
            'type_datetime' => array($this, 'block_type_datetime'),
            'type_file' => array($this, 'block_type_file'),
            'type_option' => array($this, 'block_type_option'),
            'type_options' => array($this, 'block_type_options'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 1, "if" => 6, "for" => 197);
        $filters = array("escape" => 4, "default" => 9);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'if', 'for'),
                array('escape', 'default'),
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
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = array())
    {
        // line 2
        echo "\t<div class=\"
\t\tform-group
\t\ttype_";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldType", array()), "alias", array()), "html", null, true));
        echo "
\t\tfield_";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array()), "html", null, true));
        echo "
\t\t";
        // line 6
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "has", array(0 => ("field_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array()))), "method")) {
            // line 7
            echo "\t\t\thas-error
\t\t";
        }
        // line 9
        echo "\t\t";
        if (((array_key_exists("required", $context)) ? (_twig_default_filter((isset($context["required"]) ? $context["required"] : null), false)) : (false))) {
            // line 10
            echo "\t\t\trequired
\t\t";
        }
        // line 12
        echo "\t\">
\t";
        // line 13
        if (($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldType", array()), "alias", array()) == "checkbox")) {
            // line 14
            echo "
\t\t";
            // line 15
            $this->displayBlock('checkbox', $context, $blocks);
            // line 59
            echo "
\t";
        } else {
            // line 61
            echo "
\t\t";
            // line 62
            $this->displayBlock('label', $context, $blocks);
            // line 69
            echo "
\t\t";
            // line 70
            $this->displayBlock('control', $context, $blocks);
            // line 249
            echo "
\t";
        }
        // line 251
        echo "\t</div>
";
    }

    // line 15
    public function block_checkbox($context, array $blocks = array())
    {
        // line 16
        echo "
\t\t\t<input name=\"field_";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array()), "html", null, true));
        echo "\" type=\"hidden\" value=\"\">

\t\t\t";
        // line 19
        if (((array_key_exists("horizontal", $context)) ? (_twig_default_filter((isset($context["horizontal"]) ? $context["horizontal"] : null), false)) : (false))) {
            // line 20
            echo "\t\t\t\t<div class=\"col-sm-offset-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (12 - ((array_key_exists("size", $context)) ? (_twig_default_filter((isset($context["size"]) ? $context["size"] : null), 9)) : (9))), "html", null, true));
            echo " col-sm-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((array_key_exists("size", $context)) ? (_twig_default_filter((isset($context["size"]) ? $context["size"] : null), 9)) : (9)), "html", null, true));
            echo "\">
\t\t\t";
        }
        // line 22
        echo "
\t\t\t<div class=\"checkbox\">
\t\t\t\t<label>
\t\t\t\t\t<input
\t\t\t\t\t\t";
        // line 26
        if ((($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), ("field_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), ("field_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array())), array(), "array"), "")) : (""))) {
            // line 27
            echo "\t\t\t\t\t\t\tchecked
\t\t\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t\t\tname=\"field_";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array()), "html", null, true));
        echo "\"
\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\tvalue=\"1\"
\t\t\t\t\t\t";
        // line 32
        if (((array_key_exists("required", $context)) ? (_twig_default_filter((isset($context["required"]) ? $context["required"] : null), false)) : (false))) {
            // line 33
            echo "\t\t\t\t\t\t\trequired
\t\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t>
\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true));
        echo "
\t\t\t\t</label>
\t\t\t</div>

\t\t\t";
        // line 41
        echo "\t\t\t";
        // line 42
        echo "\t\t\t";
        // line 43
        echo "\t\t\t";
        // line 44
        echo "\t\t\t";
        // line 45
        echo "\t\t\t";
        // line 46
        echo "\t\t\t";
        // line 47
        echo "
\t\t\t";
        // line 48
        if ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array()), "")) : (""))) {
            // line 49
            echo "\t\t\t\t<p class=\"help-block\">
\t\t\t\t\t";
            // line 50
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array()), "html", null, true));
            echo "
\t\t\t\t</p>
\t\t\t";
        }
        // line 53
        echo "
\t\t\t";
        // line 54
        if (((array_key_exists("horizontal", $context)) ? (_twig_default_filter((isset($context["horizontal"]) ? $context["horizontal"] : null), false)) : (false))) {
            // line 55
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 57
        echo "
\t\t";
    }

    // line 62
    public function block_label($context, array $blocks = array())
    {
        // line 63
        echo "\t\t\t<label
\t\t\t\t";
        // line 64
        if (((array_key_exists("horizontal", $context)) ? (_twig_default_filter((isset($context["horizontal"]) ? $context["horizontal"] : null), false)) : (false))) {
            // line 65
            echo "\t\t\t\t\tclass=\"col-sm-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (12 - ((array_key_exists("size", $context)) ? (_twig_default_filter((isset($context["size"]) ? $context["size"] : null), 9)) : (9))), "html", null, true));
            echo " control-label\"
\t\t\t\t";
        }
        // line 67
        echo "\t\t\t>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true));
        echo "</label>
\t\t";
    }

    // line 70
    public function block_control($context, array $blocks = array())
    {
        // line 71
        echo "
\t\t\t";
        // line 72
        if (((array_key_exists("horizontal", $context)) ? (_twig_default_filter((isset($context["horizontal"]) ? $context["horizontal"] : null), false)) : (false))) {
            // line 73
            echo "\t\t\t\t<div class=\"col-sm-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((array_key_exists("size", $context)) ? (_twig_default_filter((isset($context["size"]) ? $context["size"] : null), 9)) : (9)), "html", null, true));
            echo "\">
\t\t\t";
        }
        // line 75
        echo "
\t\t\t";
        // line 76
        if (($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldType", array()), "alias", array()) == "text")) {
            // line 77
            echo "\t\t\t\t";
            $this->displayBlock('type_text', $context, $blocks);
            // line 88
            echo "            ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldType", array()), "alias", array()) == "html")) {
            // line 89
            echo "\t\t\t\t";
            $this->displayBlock('type_html', $context, $blocks);
            // line 101
            echo "\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldType", array()), "alias", array()) == "string")) {
            // line 102
            echo "\t\t\t\t";
            $this->displayBlock('type_string', $context, $blocks);
            // line 114
            echo "\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldType", array()), "alias", array()) == "email")) {
            // line 115
            echo "\t\t\t\t";
            $this->displayBlock('type_email', $context, $blocks);
            // line 127
            echo "\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldType", array()), "alias", array()) == "integer")) {
            // line 128
            echo "\t\t\t\t";
            $this->displayBlock('type_integer', $context, $blocks);
            // line 140
            echo "\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldType", array()), "alias", array()) == "double")) {
            // line 141
            echo "\t\t\t\t";
            $this->displayBlock('type_double', $context, $blocks);
            // line 153
            echo "\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldType", array()), "alias", array()) == "date")) {
            // line 154
            echo "\t\t\t\t";
            $this->displayBlock('type_date', $context, $blocks);
            // line 155
            echo "\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldType", array()), "alias", array()) == "time")) {
            // line 156
            echo "\t\t\t\t";
            $this->displayBlock('type_time', $context, $blocks);
            // line 157
            echo "\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldType", array()), "alias", array()) == "datetime")) {
            // line 158
            echo "\t\t\t\t";
            $this->displayBlock('type_datetime', $context, $blocks);
            // line 159
            echo "\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldType", array()), "alias", array()) == "file")) {
            // line 160
            echo "\t\t\t\t";
            $this->displayBlock('type_file', $context, $blocks);
            // line 187
            echo "\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldType", array()), "alias", array()) == "option")) {
            // line 188
            echo "\t\t\t\t";
            $this->displayBlock('type_option', $context, $blocks);
            // line 209
            echo "\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldType", array()), "alias", array()) == "options")) {
            // line 210
            echo "\t\t\t\t";
            $this->displayBlock('type_options', $context, $blocks);
            // line 228
            echo "\t\t\t";
        }
        // line 229
        echo "
\t\t\t";
        // line 230
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())) {
            // line 231
            echo "\t\t\t\t<p class=\"help-block\">
\t\t\t\t\t";
            // line 232
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array()), "html", null, true));
            echo "
\t\t\t\t</p>
\t\t\t";
        }
        // line 235
        echo "
\t\t\t";
        // line 237
        echo "\t\t\t";
        // line 238
        echo "\t\t\t";
        // line 239
        echo "\t\t\t";
        // line 240
        echo "\t\t\t";
        // line 241
        echo "\t\t\t";
        // line 242
        echo "\t\t\t";
        // line 243
        echo "
\t\t\t";
        // line 244
        if (((array_key_exists("horizontal", $context)) ? (_twig_default_filter((isset($context["horizontal"]) ? $context["horizontal"] : null), false)) : (false))) {
            // line 245
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 247
        echo "
\t\t";
    }

    // line 77
    public function block_type_text($context, array $blocks = array())
    {
        // line 78
        echo "\t\t\t\t\t<textarea
\t\t\t\t\t\tclass=\"form-control\"
\t\t\t\t\t\tname=\"field_";
        // line 80
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array()), "html", null, true));
        echo "\"
\t\t\t\t\t\tplaceholder=\"";
        // line 81
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true));
        echo "\"
\t\t\t\t\t\t";
        // line 82
        if (((array_key_exists("required", $context)) ? (_twig_default_filter((isset($context["required"]) ? $context["required"] : null), false)) : (false))) {
            // line 83
            echo "\t\t\t\t\t\t\trequired
\t\t\t\t\t\t";
        }
        // line 85
        echo "\t\t\t\t\t\trows=\"4\"
\t\t\t\t\t>";
        // line 86
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), ("field_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), ("field_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array())), array(), "array"), "")) : ("")), "html", null, true));
        echo "</textarea>
\t\t\t\t";
    }

    // line 89
    public function block_type_html($context, array $blocks = array())
    {
        // line 90
        echo "\t\t\t\t\t<textarea
\t\t\t\t\t\tclass=\"form-control\"
\t\t\t\t\t\tid=\"";
        // line 92
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name_id", array()), "html", null, true));
        echo "\"
\t\t\t\t\t\tname=\"field_";
        // line 93
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array()), "html", null, true));
        echo "\"
\t\t\t\t\t\tplaceholder=\"";
        // line 94
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true));
        echo "\"
\t\t\t\t\t\t";
        // line 95
        if (((array_key_exists("required", $context)) ? (_twig_default_filter((isset($context["required"]) ? $context["required"] : null), false)) : (false))) {
            // line 96
            echo "\t\t\t\t\t\t\trequired
\t\t\t\t\t\t";
        }
        // line 98
        echo "\t\t\t\t\t\trows=\"4\"
\t\t\t\t\t>";
        // line 99
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), ("field_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), ("field_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array())), array(), "array"), "")) : ("")), "html", null, true));
        echo "</textarea>
\t\t\t\t";
    }

    // line 102
    public function block_type_string($context, array $blocks = array())
    {
        // line 103
        echo "\t\t\t\t\t<input
\t\t\t\t\t\tclass=\"form-control\"
\t\t\t\t\t\tname=\"field_";
        // line 105
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array()), "html", null, true));
        echo "\"
\t\t\t\t\t\tplaceholder=\"";
        // line 106
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true));
        echo "\"
\t\t\t\t\t\t";
        // line 107
        if (((array_key_exists("required", $context)) ? (_twig_default_filter((isset($context["required"]) ? $context["required"] : null), false)) : (false))) {
            // line 108
            echo "\t\t\t\t\t\t\trequired
\t\t\t\t\t\t";
        }
        // line 110
        echo "\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\tvalue=\"";
        // line 111
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), ("field_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), ("field_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array())), array(), "array"), "")) : ("")), "html", null, true));
        echo "\"
\t\t\t\t\t>
\t\t\t\t";
    }

    // line 115
    public function block_type_email($context, array $blocks = array())
    {
        // line 116
        echo "\t\t\t\t\t<input
\t\t\t\t\t\tclass=\"form-control\"
\t\t\t\t\t\tname=\"field_";
        // line 118
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array()), "html", null, true));
        echo "\"
\t\t\t\t\t\tplaceholder=\"";
        // line 119
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true));
        echo "\"
\t\t\t\t\t\t";
        // line 120
        if (((array_key_exists("required", $context)) ? (_twig_default_filter((isset($context["required"]) ? $context["required"] : null), false)) : (false))) {
            // line 121
            echo "\t\t\t\t\t\t\trequired
\t\t\t\t\t\t";
        }
        // line 123
        echo "\t\t\t\t\t\ttype=\"email\"
\t\t\t\t\t\tvalue=\"";
        // line 124
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), ("field_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), ("field_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array())), array(), "array"), "")) : ("")), "html", null, true));
        echo "\"
\t\t\t\t\t>
\t\t\t\t";
    }

    // line 128
    public function block_type_integer($context, array $blocks = array())
    {
        // line 129
        echo "\t\t\t\t\t<input
\t\t\t\t\t\tclass=\"form-control\"
\t\t\t\t\t\tname=\"field_";
        // line 131
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array()), "html", null, true));
        echo "\"
\t\t\t\t\t\tplaceholder=\"";
        // line 132
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true));
        echo "\"
\t\t\t\t\t\t";
        // line 133
        if (((array_key_exists("required", $context)) ? (_twig_default_filter((isset($context["required"]) ? $context["required"] : null), false)) : (false))) {
            // line 134
            echo "\t\t\t\t\t\t\trequired
\t\t\t\t\t\t";
        }
        // line 136
        echo "\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\tvalue=\"";
        // line 137
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), ("field_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), ("field_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array())), array(), "array"), "")) : ("")), "html", null, true));
        echo "\"
\t\t\t\t\t>
\t\t\t\t";
    }

    // line 141
    public function block_type_double($context, array $blocks = array())
    {
        // line 142
        echo "\t\t\t\t\t<input
\t\t\t\t\t\tclass=\"form-control\"
\t\t\t\t\t\tname=\"field_";
        // line 144
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array()), "html", null, true));
        echo "\"
\t\t\t\t\t\tplaceholder=\"";
        // line 145
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true));
        echo "\"
\t\t\t\t\t\t";
        // line 146
        if (((array_key_exists("required", $context)) ? (_twig_default_filter((isset($context["required"]) ? $context["required"] : null), false)) : (false))) {
            // line 147
            echo "\t\t\t\t\t\t\trequired
\t\t\t\t\t\t";
        }
        // line 149
        echo "\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\tvalue=\"";
        // line 150
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), ("field_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), ("field_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array())), array(), "array"), "")) : ("")), "html", null, true));
        echo "\"
\t\t\t\t\t>
\t\t\t\t";
    }

    // line 154
    public function block_type_date($context, array $blocks = array())
    {
    }

    // line 156
    public function block_type_time($context, array $blocks = array())
    {
    }

    // line 158
    public function block_type_datetime($context, array $blocks = array())
    {
    }

    // line 160
    public function block_type_file($context, array $blocks = array())
    {
        // line 161
        echo "\t\t\t\t\t<div class=\"file-upload-wrapper\">
\t\t\t\t\t\t<input
\t\t\t\t\t\t\tname=\"field_";
        // line 163
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array()), "html", null, true));
        echo "\"
\t\t\t\t\t\t\ttype=\"hidden\"
\t\t\t\t\t\t\tvalue=\"";
        // line 165
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), ("field_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), ("field_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array())), array(), "array"), "")) : ("")), "html", null, true));
        echo "\"
\t\t\t\t\t\t>
\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t<button class=\"btn btn-default file-upload\" type=\"button\">
\t\t\t\t\t\t\t\tВыбрать файл
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a
\t\t\t\t\t\t\tclass=\"
\t\t\t\t\t\t\t\tbtn btn-link pull-left
\t\t\t\t\t\t\t\t";
        // line 175
        if ( !(($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), ("field_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), ("field_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array())), array(), "array"), "")) : (""))) {
            // line 176
            echo "\t\t\t\t\t\t\t\t\tinvisible
\t\t\t\t\t\t\t\t";
        }
        // line 178
        echo "\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\thref=\"/site/data/feedbacks/";
        // line 179
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), ("field_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), ("field_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array())), array(), "array"), "")) : ("")), "html", null, true));
        echo "\"
\t\t\t\t\t\t\ttarget=\"_blank\"
\t\t\t\t\t\t>
\t\t\t\t\t\t\tФайл загружен
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t";
    }

    // line 188
    public function block_type_option($context, array $blocks = array())
    {
        // line 189
        echo "\t\t\t\t\t<select
\t\t\t\t\t\tclass=\"form-control\"
\t\t\t\t\t\tname=\"field_";
        // line 191
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array()), "html", null, true));
        echo "\"
\t\t\t\t\t\t";
        // line 192
        if (((array_key_exists("required", $context)) ? (_twig_default_filter((isset($context["required"]) ? $context["required"] : null), false)) : (false))) {
            // line 193
            echo "\t\t\t\t\t\t\trequired
\t\t\t\t\t\t";
        }
        // line 195
        echo "\t\t\t\t\t>
\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["select"]) {
            // line 198
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["select"], "options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 199
                echo "\t\t\t\t\t\t\t\t<option
\t\t\t\t\t\t\t\t\t";
                // line 200
                if (($this->getAttribute($context["option"], "id", array()) == (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), ("field_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "inputPrev", array(), "any", false, true), ("field_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array())), array(), "array"), "")) : ("")))) {
                    // line 201
                    echo "\t\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t\t";
                }
                // line 203
                echo "\t\t\t\t\t\t\t\t\tvalue=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["option"], "id", array()), "html", null, true));
                echo "\"
\t\t\t\t\t\t\t\t>";
                // line 204
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", array()), "html", null, true));
                echo "</option>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['select'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "\t\t\t\t\t</select>
\t\t\t\t";
    }

    // line 210
    public function block_type_options($context, array $blocks = array())
    {
        // line 211
        echo "\t\t\t\t\t<input name=\"field_";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array()), "html", null, true));
        echo "\" type=\"hidden\" value=\"\">
\t\t\t\t\t<select
\t\t\t\t\t\tclass=\"form-control\"
\t\t\t\t\t\tmultiple
\t\t\t\t\t\tname=\"field_";
        // line 215
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "alias", array()), "html", null, true));
        echo "[]\"
\t\t\t\t\t\t";
        // line 216
        if (((array_key_exists("required", $context)) ? (_twig_default_filter((isset($context["required"]) ? $context["required"] : null), false)) : (false))) {
            // line 217
            echo "\t\t\t\t\t\t\trequired
\t\t\t\t\t\t";
        }
        // line 219
        echo "\t\t\t\t\t\tsize=\"8\"
\t\t\t\t\t>
\t\t\t\t\t\t";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["select"]) {
            // line 222
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["select"], "options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 223
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["option"], "id", array()), "html", null, true));
                echo "\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", array()), "html", null, true));
                echo "</option>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['select'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "\t\t\t\t\t</select>
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "_.field";
    }

    public function getDebugInfo()
    {
        return array (  737 => 226,  731 => 225,  720 => 223,  715 => 222,  711 => 221,  707 => 219,  703 => 217,  701 => 216,  697 => 215,  689 => 211,  686 => 210,  681 => 207,  675 => 206,  667 => 204,  662 => 203,  658 => 201,  656 => 200,  653 => 199,  648 => 198,  644 => 197,  640 => 195,  636 => 193,  634 => 192,  630 => 191,  626 => 189,  623 => 188,  611 => 179,  608 => 178,  604 => 176,  602 => 175,  589 => 165,  584 => 163,  580 => 161,  577 => 160,  572 => 158,  567 => 156,  562 => 154,  555 => 150,  552 => 149,  548 => 147,  546 => 146,  542 => 145,  538 => 144,  534 => 142,  531 => 141,  524 => 137,  521 => 136,  517 => 134,  515 => 133,  511 => 132,  507 => 131,  503 => 129,  500 => 128,  493 => 124,  490 => 123,  486 => 121,  484 => 120,  480 => 119,  476 => 118,  472 => 116,  469 => 115,  462 => 111,  459 => 110,  455 => 108,  453 => 107,  449 => 106,  445 => 105,  441 => 103,  438 => 102,  432 => 99,  429 => 98,  425 => 96,  423 => 95,  419 => 94,  415 => 93,  411 => 92,  407 => 90,  404 => 89,  398 => 86,  395 => 85,  391 => 83,  389 => 82,  385 => 81,  381 => 80,  377 => 78,  374 => 77,  369 => 247,  365 => 245,  363 => 244,  360 => 243,  358 => 242,  356 => 241,  354 => 240,  352 => 239,  350 => 238,  348 => 237,  345 => 235,  339 => 232,  336 => 231,  334 => 230,  331 => 229,  328 => 228,  325 => 210,  322 => 209,  319 => 188,  316 => 187,  313 => 160,  310 => 159,  307 => 158,  304 => 157,  301 => 156,  298 => 155,  295 => 154,  292 => 153,  289 => 141,  286 => 140,  283 => 128,  280 => 127,  277 => 115,  274 => 114,  271 => 102,  268 => 101,  265 => 89,  262 => 88,  259 => 77,  257 => 76,  254 => 75,  248 => 73,  246 => 72,  243 => 71,  240 => 70,  233 => 67,  227 => 65,  225 => 64,  222 => 63,  219 => 62,  214 => 57,  210 => 55,  208 => 54,  205 => 53,  199 => 50,  196 => 49,  194 => 48,  191 => 47,  189 => 46,  187 => 45,  185 => 44,  183 => 43,  181 => 42,  179 => 41,  172 => 36,  169 => 35,  165 => 33,  163 => 32,  156 => 29,  152 => 27,  150 => 26,  144 => 22,  136 => 20,  134 => 19,  129 => 17,  126 => 16,  123 => 15,  118 => 251,  114 => 249,  112 => 70,  109 => 69,  107 => 62,  104 => 61,  100 => 59,  98 => 15,  95 => 14,  93 => 13,  90 => 12,  86 => 10,  83 => 9,  79 => 7,  77 => 6,  73 => 5,  69 => 4,  65 => 2,  59 => 1,);
    }
}
/* {% block field %}*/
/* 	<div class="*/
/* 		form-group*/
/* 		type_{$ field.fieldType.alias $}*/
/* 		field_{$ field.alias $}*/
/* 		{% if errors.has('field_' ~ field.alias) %}*/
/* 			has-error*/
/* 		{% endif %}*/
/* 		{% if required|default(false) %}*/
/* 			required*/
/* 		{% endif %}*/
/* 	">*/
/* 	{% if field.fieldType.alias == 'checkbox' %}*/
/* */
/* 		{% block checkbox %}*/
/* */
/* 			<input name="field_{$ field.alias $}" type="hidden" value="">*/
/* */
/* 			{% if horizontal|default(false) %}*/
/* 				<div class="col-sm-offset-{$ 12 - size|default(9) $} col-sm-{$ size|default(9) $}">*/
/* 			{% endif %}*/
/* */
/* 			<div class="checkbox">*/
/* 				<label>*/
/* 					<input*/
/* 						{% if request.inputPrev['field_' ~ field.alias]|default('') %}*/
/* 							checked*/
/* 						{% endif %}*/
/* 						name="field_{$ field.alias $}"*/
/* 						type="checkbox"*/
/* 						value="1"*/
/* 						{% if required|default(false) %}*/
/* 							required*/
/* 						{% endif %}*/
/* 					>*/
/* 					{$ field.name $}*/
/* 				</label>*/
/* 			</div>*/
/* */
/* 			{#{% if errors.has('field_' ~ field.alias) %}#}*/
/* 			{#{% for error in errors.get('field_' ~ field.alias) %}#}*/
/* 			{#<p class="help-block">#}*/
/* 			{#{$ error $}#}*/
/* 			{#</p>#}*/
/* 			{#{% endfor %}#}*/
/* 			{#{% endif %}#}*/
/* */
/* 			{% if field.help|default('') %}*/
/* 				<p class="help-block">*/
/* 					{$ field.help $}*/
/* 				</p>*/
/* 			{% endif %}*/
/* */
/* 			{% if horizontal|default(false) %}*/
/* 				</div>*/
/* 			{% endif %}*/
/* */
/* 		{% endblock %}*/
/* */
/* 	{% else %}*/
/* */
/* 		{% block label %}*/
/* 			<label*/
/* 				{% if horizontal|default(false) %}*/
/* 					class="col-sm-{$ 12 - size|default(9) $} control-label"*/
/* 				{% endif %}*/
/* 			>{$ field.name $}</label>*/
/* 		{% endblock %}*/
/* */
/* 		{% block control %}*/
/* */
/* 			{% if horizontal|default(false) %}*/
/* 				<div class="col-sm-{$ size|default(9) $}">*/
/* 			{% endif %}*/
/* */
/* 			{% if field.fieldType.alias == 'text' %}*/
/* 				{% block type_text %}*/
/* 					<textarea*/
/* 						class="form-control"*/
/* 						name="field_{$ field.alias $}"*/
/* 						placeholder="{$ field.name $}"*/
/* 						{% if required|default(false) %}*/
/* 							required*/
/* 						{% endif %}*/
/* 						rows="4"*/
/* 					>{$ request.inputPrev['field_' ~ field.alias]|default('') $}</textarea>*/
/* 				{% endblock %}*/
/*             {% elseif field.fieldType.alias == 'html' %}*/
/* 				{% block type_html %}*/
/* 					<textarea*/
/* 						class="form-control"*/
/* 						id="{$ field.name_id $}"*/
/* 						name="field_{$ field.alias $}"*/
/* 						placeholder="{$ field.name $}"*/
/* 						{% if required|default(false) %}*/
/* 							required*/
/* 						{% endif %}*/
/* 						rows="4"*/
/* 					>{$ request.inputPrev['field_' ~ field.alias]|default('') $}</textarea>*/
/* 				{% endblock %}*/
/* 			{% elseif field.fieldType.alias == 'string' %}*/
/* 				{% block type_string %}*/
/* 					<input*/
/* 						class="form-control"*/
/* 						name="field_{$ field.alias $}"*/
/* 						placeholder="{$ field.name $}"*/
/* 						{% if required|default(false) %}*/
/* 							required*/
/* 						{% endif %}*/
/* 						type="text"*/
/* 						value="{$ request.inputPrev['field_' ~ field.alias]|default('') $}"*/
/* 					>*/
/* 				{% endblock %}*/
/* 			{% elseif field.fieldType.alias == 'email' %}*/
/* 				{% block type_email %}*/
/* 					<input*/
/* 						class="form-control"*/
/* 						name="field_{$ field.alias $}"*/
/* 						placeholder="{$ field.name $}"*/
/* 						{% if required|default(false) %}*/
/* 							required*/
/* 						{% endif %}*/
/* 						type="email"*/
/* 						value="{$ request.inputPrev['field_' ~ field.alias]|default('') $}"*/
/* 					>*/
/* 				{% endblock %}*/
/* 			{% elseif field.fieldType.alias == 'integer' %}*/
/* 				{% block type_integer %}*/
/* 					<input*/
/* 						class="form-control"*/
/* 						name="field_{$ field.alias $}"*/
/* 						placeholder="{$ field.name $}"*/
/* 						{% if required|default(false) %}*/
/* 							required*/
/* 						{% endif %}*/
/* 						type="text"*/
/* 						value="{$ request.inputPrev['field_' ~ field.alias]|default('') $}"*/
/* 					>*/
/* 				{% endblock %}*/
/* 			{% elseif field.fieldType.alias == 'double' %}*/
/* 				{% block type_double %}*/
/* 					<input*/
/* 						class="form-control"*/
/* 						name="field_{$ field.alias $}"*/
/* 						placeholder="{$ field.name $}"*/
/* 						{% if required|default(false) %}*/
/* 							required*/
/* 						{% endif %}*/
/* 						type="text"*/
/* 						value="{$ request.inputPrev['field_' ~ field.alias]|default('') $}"*/
/* 					>*/
/* 				{% endblock %}*/
/* 			{% elseif field.fieldType.alias == 'date' %}*/
/* 				{% block type_date %}{% endblock %}*/
/* 			{% elseif field.fieldType.alias == 'time' %}*/
/* 				{% block type_time %}{% endblock %}*/
/* 			{% elseif field.fieldType.alias == 'datetime' %}*/
/* 				{% block type_datetime %}{% endblock %}*/
/* 			{% elseif field.fieldType.alias == 'file' %}*/
/* 				{% block type_file %}*/
/* 					<div class="file-upload-wrapper">*/
/* 						<input*/
/* 							name="field_{$ field.alias $}"*/
/* 							type="hidden"*/
/* 							value="{$ request.inputPrev['field_' ~ field.alias]|default('') $}"*/
/* 						>*/
/* 						<div class="pull-left">*/
/* 							<button class="btn btn-default file-upload" type="button">*/
/* 								Выбрать файл*/
/* 							</button>*/
/* 						</div>*/
/* 						<a*/
/* 							class="*/
/* 								btn btn-link pull-left*/
/* 								{% if not request.inputPrev['field_' ~ field.alias]|default('') %}*/
/* 									invisible*/
/* 								{% endif %}*/
/* 							"*/
/* 							href="/site/data/feedbacks/{$ request.inputPrev['field_' ~ field.alias]|default('') $}"*/
/* 							target="_blank"*/
/* 						>*/
/* 							Файл загружен*/
/* 						</a>*/
/* 						<div class="clearfix"></div>*/
/* 					</div>*/
/* 				{% endblock %}*/
/* 			{% elseif field.fieldType.alias == 'option' %}*/
/* 				{% block type_option %}*/
/* 					<select*/
/* 						class="form-control"*/
/* 						name="field_{$ field.alias $}"*/
/* 						{% if required|default(false) %}*/
/* 							required*/
/* 						{% endif %}*/
/* 					>*/
/* 						<option value=""></option>*/
/* 						{% for select in field.selects %}*/
/* 							{% for option in select.options %}*/
/* 								<option*/
/* 									{% if option.id == request.inputPrev['field_' ~ field.alias]|default('') %}*/
/* 										selected*/
/* 									{% endif %}*/
/* 									value="{$ option.id $}"*/
/* 								>{$ option.name $}</option>*/
/* 							{% endfor %}*/
/* 						{% endfor %}*/
/* 					</select>*/
/* 				{% endblock %}*/
/* 			{% elseif field.fieldType.alias == 'options' %}*/
/* 				{% block type_options %}*/
/* 					<input name="field_{$ field.alias $}" type="hidden" value="">*/
/* 					<select*/
/* 						class="form-control"*/
/* 						multiple*/
/* 						name="field_{$ field.alias $}[]"*/
/* 						{% if required|default(false) %}*/
/* 							required*/
/* 						{% endif %}*/
/* 						size="8"*/
/* 					>*/
/* 						{% for select in field.selects %}*/
/* 							{% for option in select.options %}*/
/* 								<option value="{$ option.id $}">{$ option.name $}</option>*/
/* 							{% endfor %}*/
/* 						{% endfor %}*/
/* 					</select>*/
/* 				{% endblock %}*/
/* 			{% endif %}*/
/* */
/* 			{% if field.help %}*/
/* 				<p class="help-block">*/
/* 					{$ field.help $}*/
/* 				</p>*/
/* 			{% endif %}*/
/* */
/* 			{#{% if errors.has('field_' ~ field.alias) %}#}*/
/* 			{#{% for error in errors.get('field_' ~ field.alias) %}#}*/
/* 			{#<p class="help-block">#}*/
/* 			{#{$ error $}#}*/
/* 			{#</p>#}*/
/* 			{#{% endfor %}#}*/
/* 			{#{% endif %}#}*/
/* */
/* 			{% if horizontal|default(false) %}*/
/* 				</div>*/
/* 			{% endif %}*/
/* */
/* 		{% endblock %}*/
/* */
/* 	{% endif %}*/
/* 	</div>*/
/* {% endblock %}*/
/* */
