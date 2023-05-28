<?php

/* _.admin.base */
class __TwigTemplate_093244b48967e8bd04795a911614e9c1df38d02996d0589a3844b000f90b19b2 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.root", "_.admin.base", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.root";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 3, "for" => 109, "if" => 111, "block" => 184);
        $filters = array("escape" => 6, "json_encode" => 96, "default" => 116);
        $functions = array("constant" => 3);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for', 'if', 'block'),
                array('escape', 'json_encode', 'default'),
                array('constant')
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

        // line 3
        $context["V"] = twig_constant("V");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "\tAdmin | ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "domain", array()), "html", null, true));
        echo " | NetShaper
";
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        // line 10
        echo "
\t";
        // line 12
        echo "\t<link rel=\"stylesheet\" href=\"/packages/bootstrap-themes/yeti/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"/packages/font-awesome/4.1.0/css/font-awesome.min.css\">
\t<link rel=\"stylesheet\" href=\"/packages/summernote/0.5.1/dist/summernote.css\">
\t<link rel=\"stylesheet\" href=\"/packages/codemirror/4.3/lib/codemirror.css\">
\t<link rel=\"stylesheet\" href=\"/packages/codemirror/4.3/theme/ambiance.css\">
\t<link rel=\"stylesheet\" href=\"/packages/codemirror/4.3/addon/display/fullscreen.css\">

\t<link rel=\"stylesheet\" href=\"/packages/netshaper/admin/css/base.css?v=";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\">

\t<script src=\"/packages/jquery/2.1.1/jquery.min.js\"></script>
\t<script src=\"/packages/angular/1.2.17/angular.min.js\"></script>
\t<script src=\"/packages/angular-ui/ui-utils/0.1.1/ui-utils.min.js\"></script>
\t<script src=\"/packages/fatlinesofcode/ng-draggable/ngDraggable.js\"></script>
\t<script src=\"/packages/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
\t<script src=\"/packages/summernote/0.5.1/dist/summernote.min.js\"></script>
\t<script src=\"/packages/summernote/0.5.1/lang/summernote-ru-RU.js\"></script>
\t<script src=\"/packages/jquery-ocupload/jquery.ocupload-min.js\"></script>
\t<script src=\"/packages/codemirror/4.3/lib/codemirror.js\"></script>
\t<script src=\"/packages/codemirror/4.3/mode/css/css.js\"></script>
\t<script src=\"/packages/codemirror/4.3/mode/htmlmixed/htmlmixed.js\"></script>
\t<script src=\"/packages/codemirror/4.3/mode/javascript/javascript.js\"></script>
\t<script src=\"/packages/codemirror/4.3/mode/xml/xml.js\"></script>
\t<script src=\"/packages/codemirror/4.3/addon/display/fullscreen.js\"></script>

\t<script src=\"/packages/faf/directives/range/range.js\"></script>
\t<script src=\"/packages/faf/directives/datetime/datetime.js\"></script>

\t<script>window.V = '";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "';</script>

\t<script src=\"/packages/netshaper/admin/app/app.js?v=";
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/code_editor/code_editor.js?v=";
        // line 42
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/field_types/checkbox/checkbox.js?v=";
        // line 43
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/field_types/code/code.js?v=";
        // line 44
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/field_types/color/color.js?v=";
        // line 45
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/field_types/date/date.js?v=";
        // line 46
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/field_types/datetime/datetime.js?v=";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/field_types/double/double.js?v=";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/field_types/email/email.js?v=";
        // line 49
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/field_types/file/file.js?v=";
        // line 50
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/field_types/html/html.js?v=";
        // line 51
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/field_types/image/image.js?v=";
        // line 52
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/field_types/integer/integer.js?v=";
        // line 53
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/field_types/link/link.js?v=";
        // line 54
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/field_types/money/money.js?v=";
        // line 55
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/field_types/option/option.js?v=";
        // line 56
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/field_types/options/options.js?v=";
        // line 57
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/field_types/page/page.js?v=";
        // line 58
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/field_types/password/password.js?v=";
        // line 59
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/field_types/string/string.js?v=";
        // line 60
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/field_types/text/text.js?v=";
        // line 61
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/field_types/time/time.js?v=";
        // line 62
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/form_group/form_group.js?v=";
        // line 63
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/form_upload/form_upload.js?v=";
        // line 64
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/incognito/incognito.js?v=";
        // line 65
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/incognito_module_type/incognito_module_type.js?v=";
        // line 66
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/list_controls/list_controls.js?v=";
        // line 67
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/list_item_controls/list_item_controls.js?v=";
        // line 68
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/module_types/announcement/announcement.js?v=";
        // line 69
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/module_types/banner/banner.js?v=";
        // line 70
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/module_types/carousel/carousel.js?v=";
        // line 71
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/module_types/form/form.js?v=";
        // line 72
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/module_types/gallery/gallery.js?v=";
        // line 73
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/module_types/html/html.js?v=";
        // line 74
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/module_types/map/map.js?v=";
        // line 75
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/module_types/menu/menu.js?v=";
        // line 76
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/module_types/plan/plan.js?v=";
        // line 77
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/module_types/slideshow/slideshow.js?v=";
        // line 78
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/module_types/slideshow2/slideshow2.js?v=";
        // line 79
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/module_types/source/source.js?v=";
        // line 80
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/module_types/text/text.js?v=";
        // line 81
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/target/target.js?v=";
        // line 82
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/upload/upload.js?v=";
        // line 83
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/directives/wysiwyg/wysiwyg.js?v=";
        // line 84
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>
\t<script src=\"/packages/netshaper/admin/app/services/global/global.js?v=";
        // line 85
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\"></script>

";
    }

    // line 89
    public function block_body($context, array $blocks = array())
    {
        // line 90
        echo "
\t<div
\t\tclass=\"display-none\"
\t\tid=\"root\"
\t\tng-app=\"netshaper.admin\"
\t\tng-controller=\"NetShaperAdminRootController\"
\t\tng-init=\"init(";
        // line 96
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["vars"]) ? $context["vars"] : null)), "html", null, true));
        echo ", ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "toArray", array(), "method")), "html", null, true));
        echo ")\"
\t>

\t\t<header>
\t\t\t<nav class=\"navbar navbar-default navbar-static-top\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 103
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "admin", array()), "html", null, true));
        echo "\">
\t\t\t\t\t\t\t<img alt=\"NetShaper\" src=\"/packages/netshaper/admin/images/logo.png\" title=\"NetShaper\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"nav navbar-nav\">

\t\t\t\t\t\t";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["partition"]) {
            // line 110
            echo "
\t\t\t\t\t\t\t";
            // line 111
            if ($this->getAttribute($context["partition"], "items", array(), "any", true, true)) {
                // line 112
                echo "
\t\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\t\tclass=\"
\t\t\t\t\t\t\t\t\t\tdropdown
\t\t\t\t\t\t\t\t\t\t";
                // line 116
                if ((($this->getAttribute($context["partition"], "active", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["partition"], "active", array()), false)) : (false))) {
                    // line 117
                    echo "\t\t\t\t\t\t\t\t\t\t\tactive
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 119
                echo "\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t\t\t";
                // line 122
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["partition"], "label", array()), "html", null, true));
                echo "
\t\t\t\t\t\t\t\t\t\t<b class=\"caret\"></b>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t";
                // line 126
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["partition"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 127
                    echo "\t\t\t\t\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 128
                    if (($this->getAttribute($context["item"], "alias", array()) == (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "segments", array(), "any", false, true), 1, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "segments", array(), "any", false, true), 1, array(), "array"), "")) : ("")))) {
                        // line 129
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"active\"
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 131
                    echo "\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 132
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "admin", array()), "html", null, true));
                    echo "/";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "alias", array()), "html", null, true));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 133
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true));
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 137
                echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t";
            } else {
                // line 141
                echo "
\t\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\t\t";
                // line 143
                if (($this->getAttribute($context["partition"], "alias", array()) == (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "segments", array(), "any", false, true), 1, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "segments", array(), "any", false, true), 1, array(), "array"), "")) : ("")))) {
                    // line 144
                    echo "\t\t\t\t\t\t\t\t\t\tclass=\"active\"
\t\t\t\t\t\t\t\t\t";
                }
                // line 146
                echo "\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 147
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "admin", array()), "html", null, true));
                echo "/";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["partition"], "alias", array()), "html", null, true));
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
                // line 148
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["partition"], "label", array()), "html", null, true));
                echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t";
            }
            // line 153
            echo "
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"nav navbar-nav pull-right\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 159
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "root", array()), "html", null, true));
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-globe\"></span>
\t\t\t\t\t\t\t\tСайт
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/auth/logout/admin\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-sign-out\"></span>
\t\t\t\t\t\t\t\tВыход
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<p class=\"navbar-text pull-right\">
\t\t\t\t\t\t<span class=\"text-info\">
\t\t\t\t\t\t\t<span class=\"fa fa-user\"></span>
\t\t\t\t\t\t\t";
        // line 174
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "login", array()), "html", null, true));
        echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</header>

\t\t<div class=\"mean\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t";
        // line 184
        $this->displayBlock('content', $context, $blocks);
        // line 185
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<footer>
\t\t\t<div class=\"container-fluid\">

\t\t\t\t<hr>

\t\t\t\t<div class=\"text-right text-muted\">
\t\t\t\t\t<small>
\t\t\t\t\t\tPowered by
\t\t\t\t\t\t<a href=\"http://netshaper.org/\" target=\"_blank\">NetShaper</a>
\t\t\t\t\t</small>
\t\t\t\t</div>

\t\t\t</div>
\t\t</footer>

\t</div>

";
    }

    // line 184
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_.admin.base";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  495 => 184,  470 => 185,  468 => 184,  455 => 174,  437 => 159,  431 => 155,  424 => 153,  416 => 148,  410 => 147,  407 => 146,  403 => 144,  401 => 143,  397 => 141,  391 => 137,  381 => 133,  375 => 132,  372 => 131,  368 => 129,  366 => 128,  363 => 127,  359 => 126,  352 => 122,  347 => 119,  343 => 117,  341 => 116,  335 => 112,  333 => 111,  330 => 110,  326 => 109,  317 => 103,  305 => 96,  297 => 90,  294 => 89,  287 => 85,  283 => 84,  279 => 83,  275 => 82,  271 => 81,  267 => 80,  263 => 79,  259 => 78,  255 => 77,  251 => 76,  247 => 75,  243 => 74,  239 => 73,  235 => 72,  231 => 71,  227 => 70,  223 => 69,  219 => 68,  215 => 67,  211 => 66,  207 => 65,  203 => 64,  199 => 63,  195 => 62,  191 => 61,  187 => 60,  183 => 59,  179 => 58,  175 => 57,  171 => 56,  167 => 55,  163 => 54,  159 => 53,  155 => 52,  151 => 51,  147 => 50,  143 => 49,  139 => 48,  135 => 47,  131 => 46,  127 => 45,  123 => 44,  119 => 43,  115 => 42,  111 => 41,  106 => 39,  83 => 19,  74 => 12,  71 => 10,  68 => 9,  61 => 6,  58 => 5,  54 => 1,  52 => 3,  11 => 1,);
    }
}
/* {% extends '_.root' %}*/
/* */
/* {% set V = constant('V') %}*/
/* */
/* {% block title %}*/
/* 	Admin | {$ request.domain $} | NetShaper*/
/* {% endblock %}*/
/* */
/* {% block head %}*/
/* */
/* 	{#<link rel="stylesheet" href="/packages/bootstrap/3.1.1/css/bootstrap.min.css">#}*/
/* 	<link rel="stylesheet" href="/packages/bootstrap-themes/yeti/bootstrap.min.css">*/
/* 	<link rel="stylesheet" href="/packages/font-awesome/4.1.0/css/font-awesome.min.css">*/
/* 	<link rel="stylesheet" href="/packages/summernote/0.5.1/dist/summernote.css">*/
/* 	<link rel="stylesheet" href="/packages/codemirror/4.3/lib/codemirror.css">*/
/* 	<link rel="stylesheet" href="/packages/codemirror/4.3/theme/ambiance.css">*/
/* 	<link rel="stylesheet" href="/packages/codemirror/4.3/addon/display/fullscreen.css">*/
/* */
/* 	<link rel="stylesheet" href="/packages/netshaper/admin/css/base.css?v={$ V $}">*/
/* */
/* 	<script src="/packages/jquery/2.1.1/jquery.min.js"></script>*/
/* 	<script src="/packages/angular/1.2.17/angular.min.js"></script>*/
/* 	<script src="/packages/angular-ui/ui-utils/0.1.1/ui-utils.min.js"></script>*/
/* 	<script src="/packages/fatlinesofcode/ng-draggable/ngDraggable.js"></script>*/
/* 	<script src="/packages/bootstrap/3.1.1/js/bootstrap.min.js"></script>*/
/* 	<script src="/packages/summernote/0.5.1/dist/summernote.min.js"></script>*/
/* 	<script src="/packages/summernote/0.5.1/lang/summernote-ru-RU.js"></script>*/
/* 	<script src="/packages/jquery-ocupload/jquery.ocupload-min.js"></script>*/
/* 	<script src="/packages/codemirror/4.3/lib/codemirror.js"></script>*/
/* 	<script src="/packages/codemirror/4.3/mode/css/css.js"></script>*/
/* 	<script src="/packages/codemirror/4.3/mode/htmlmixed/htmlmixed.js"></script>*/
/* 	<script src="/packages/codemirror/4.3/mode/javascript/javascript.js"></script>*/
/* 	<script src="/packages/codemirror/4.3/mode/xml/xml.js"></script>*/
/* 	<script src="/packages/codemirror/4.3/addon/display/fullscreen.js"></script>*/
/* */
/* 	<script src="/packages/faf/directives/range/range.js"></script>*/
/* 	<script src="/packages/faf/directives/datetime/datetime.js"></script>*/
/* */
/* 	<script>window.V = '{$ V $}';</script>*/
/* */
/* 	<script src="/packages/netshaper/admin/app/app.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/code_editor/code_editor.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/field_types/checkbox/checkbox.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/field_types/code/code.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/field_types/color/color.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/field_types/date/date.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/field_types/datetime/datetime.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/field_types/double/double.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/field_types/email/email.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/field_types/file/file.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/field_types/html/html.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/field_types/image/image.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/field_types/integer/integer.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/field_types/link/link.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/field_types/money/money.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/field_types/option/option.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/field_types/options/options.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/field_types/page/page.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/field_types/password/password.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/field_types/string/string.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/field_types/text/text.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/field_types/time/time.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/form_group/form_group.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/form_upload/form_upload.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/incognito/incognito.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/incognito_module_type/incognito_module_type.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/list_controls/list_controls.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/list_item_controls/list_item_controls.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/module_types/announcement/announcement.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/module_types/banner/banner.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/module_types/carousel/carousel.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/module_types/form/form.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/module_types/gallery/gallery.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/module_types/html/html.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/module_types/map/map.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/module_types/menu/menu.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/module_types/plan/plan.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/module_types/slideshow/slideshow.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/module_types/slideshow2/slideshow2.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/module_types/source/source.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/module_types/text/text.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/target/target.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/upload/upload.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/directives/wysiwyg/wysiwyg.js?v={$ V $}"></script>*/
/* 	<script src="/packages/netshaper/admin/app/services/global/global.js?v={$ V $}"></script>*/
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* 	<div*/
/* 		class="display-none"*/
/* 		id="root"*/
/* 		ng-app="netshaper.admin"*/
/* 		ng-controller="NetShaperAdminRootController"*/
/* 		ng-init="init({$ vars|json_encode $}, {$ errors.toArray()|json_encode $})"*/
/* 	>*/
/* */
/* 		<header>*/
/* 			<nav class="navbar navbar-default navbar-static-top">*/
/* 				<div class="container-fluid">*/
/* 					<div class="navbar-header">*/
/* 						<a class="navbar-brand" href="{$ url.admin $}">*/
/* 							<img alt="NetShaper" src="/packages/netshaper/admin/images/logo.png" title="NetShaper">*/
/* 						</a>*/
/* 					</div>*/
/* 					<ul class="nav navbar-nav">*/
/* */
/* 						{% for partition in menu %}*/
/* */
/* 							{% if partition.items is defined %}*/
/* */
/* 								<li*/
/* 									class="*/
/* 										dropdown*/
/* 										{% if partition.active|default(false) %}*/
/* 											active*/
/* 										{% endif %}*/
/* 									"*/
/* 								>*/
/* 									<a href="#" class="dropdown-toggle">*/
/* 										{$ partition.label $}*/
/* 										<b class="caret"></b>*/
/* 									</a>*/
/* 									<ul class="dropdown-menu">*/
/* 										{% for item in partition.items %}*/
/* 											<li*/
/* 												{% if item.alias == request.segments[1]|default('') %}*/
/* 													class="active"*/
/* 												{% endif %}*/
/* 											>*/
/* 												<a href="{$ url.admin $}/{$ item.alias $}">*/
/* 													{$ item.label $}*/
/* 												</a>*/
/* 											</li>*/
/* 										{% endfor %}*/
/* 									</ul>*/
/* 								</li>*/
/* */
/* 							{% else %}*/
/* */
/* 								<li*/
/* 									{% if partition.alias == request.segments[1]|default('') %}*/
/* 										class="active"*/
/* 									{% endif %}*/
/* 								>*/
/* 									<a href="{$ url.admin $}/{$ partition.alias $}">*/
/* 										{$ partition.label $}*/
/* 									</a>*/
/* 								</li>*/
/* */
/* 							{% endif %}*/
/* */
/* 						{% endfor %}*/
/* */
/* 					</ul>*/
/* 					<ul class="nav navbar-nav pull-right">*/
/* 						<li>*/
/* 							<a href="{$ url.root $}" target="_blank">*/
/* 								<span class="fa fa-globe"></span>*/
/* 								Сайт*/
/* 							</a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a href="/auth/logout/admin">*/
/* 								<span class="fa fa-sign-out"></span>*/
/* 								Выход*/
/* 							</a>*/
/* 						</li>*/
/* 					</ul>*/
/* 					<p class="navbar-text pull-right">*/
/* 						<span class="text-info">*/
/* 							<span class="fa fa-user"></span>*/
/* 							{$ user.login $}*/
/* 						</span>*/
/* 					</p>*/
/* 				</div>*/
/* 			</nav>*/
/* 		</header>*/
/* */
/* 		<div class="mean">*/
/* 			<div class="container-fluid">*/
/* 				<div class="content">*/
/* 					{% block content %}{% endblock %}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<footer>*/
/* 			<div class="container-fluid">*/
/* */
/* 				<hr>*/
/* */
/* 				<div class="text-right text-muted">*/
/* 					<small>*/
/* 						Powered by*/
/* 						<a href="http://netshaper.org/" target="_blank">NetShaper</a>*/
/* 					</small>*/
/* 				</div>*/
/* */
/* 			</div>*/
/* 		</footer>*/
/* */
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
