<?php

/* _.module_types.form.main */
class __TwigTemplate_c737581eee1ccce57b48e28de60a110db6c1288ee2b1e89796c54bb73cf0d517 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'notification' => array($this, 'block_notification'),
            'form' => array($this, 'block_form'),
            'submit' => array($this, 'block_submit'),
            'button' => array($this, 'block_button'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 1, "if" => 46, "block" => 47, "for" => 64, "include" => 66);
        $filters = array("escape" => 7, "raw" => 49, "default" => 57);
        $functions = array("random" => 1);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block', 'for', 'include'),
                array('escape', 'raw', 'default'),
                array('random')
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
        $context["id"] = ("form_" . twig_random($this->env));
        // line 2
        echo "
<script src=\"/packages/jquery-ocupload/jquery.ocupload-min.js\"></script>

<script>
\t\$(function() {
\t\t\$('#";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true));
        echo " .file-upload').each(function(index, node) {
\t\t\tvar button = \$(node);
\t\t\tvar wrap = button.parents('.file-upload-wrapper');

\t\t\tvar input = wrap.children('input');
\t\t\tvar uploaded = wrap.children('.btn-link');

\t\t\tbutton.upload({
\t\t\t\taction: '/form_uploads',
\t\t\t\tonComplete: function(responseRaw) {
\t\t\t\t\tvar response;

\t\t\t\t\ttry {
\t\t\t\t\t\tresponse = JSON.parse(responseRaw)
\t\t\t\t\t} catch (err) {
\t\t\t\t\t\tconsole.error(err);
\t\t\t\t\t}

\t\t\t\t\tif (response) {
\t\t\t\t\t\tinput.val(response.fileName);
\t\t\t\t\t\tconsole.log(uploaded.length)
\t\t\t\t\t\tuploaded.removeClass('invisible');
\t\t\t\t\t\tuploaded.prop('href', response.path + response.fileName);
\t\t\t\t\t} else {
\t\t\t\t\t\talert('Произошла ошибка');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t});
\t});
</script>

<style>
\t#";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true));
        echo " .file-upload-wrapper form input {
\t\tleft: 0;
\t\ttop: 0;
\t}
</style>

";
        // line 46
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "sent", array())) {
            // line 47
            echo "\t";
            $this->displayBlock('notification', $context, $blocks);
        }
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('form', $context, $blocks);
    }

    // line 47
    public function block_notification($context, array $blocks = array())
    {
        // line 48
        echo "\t\t<div class=\"alert alert-success\">
\t\t\t";
        // line 49
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "forme", array()), "notification", array()));
        echo "
\t\t</div>
\t";
    }

    // line 54
    public function block_form($context, array $blocks = array())
    {
        // line 55
        echo "\t<form
\t\taction=\"/form/";
        // line 56
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "forme", array()), "id", array()), "html", null, true));
        echo "\"
\t\t";
        // line 57
        if ((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "horizontal", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "horizontal", array()), false)) : (false))) {
            // line 58
            echo "\t\t\tclass=\"form-horizontal\"
\t\t";
        }
        // line 60
        echo "\t\tid=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true));
        echo "\"
\t\tmethod=\"post\"
\t>

\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "forme", array()), "fields", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 65
            echo "\t\t\t";
            // line 66
            $this->loadTemplate("_.field", "_.module_types.form.main", 66)->display(array_merge($context, array("horizontal" => (($this->getAttribute(            // line 67
(isset($context["config"]) ? $context["config"] : null), "horizontal", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "horizontal", array()), false)) : (false)), "required" => (($this->getAttribute($this->getAttribute(            // line 68
$context["field"], "pivot", array(), "any", false, true), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["field"], "pivot", array(), "any", false, true), "required", array()), false)) : (false)), "size" => (($this->getAttribute(            // line 69
(isset($context["config"]) ? $context["config"] : null), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "size", array()), 9)) : (9)))));
            // line 72
            echo "\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
\t\t";
        // line 74
        $this->displayBlock('submit', $context, $blocks);
        // line 91
        echo "
\t</form>
";
    }

    // line 74
    public function block_submit($context, array $blocks = array())
    {
        // line 75
        echo "\t\t\t<div class=\"form-group\">

\t\t\t\t";
        // line 77
        if ((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "horizontal", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "horizontal", array()), false)) : (false))) {
            // line 78
            echo "\t\t\t\t\t<div class=\"col-sm-offset-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (12 - (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "size", array()), 9)) : (9))), "html", null, true));
            echo " col-sm-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "size", array()), 9)) : (9)), "html", null, true));
            echo "\">
\t\t\t\t";
        }
        // line 80
        echo "
\t\t\t\t";
        // line 81
        $this->displayBlock('button', $context, $blocks);
        // line 84
        echo "
\t\t\t\t";
        // line 85
        if ((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "horizontal", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "horizontal", array()), false)) : (false))) {
            // line 86
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 88
        echo "
\t\t\t</div>
\t\t";
    }

    // line 81
    public function block_button($context, array $blocks = array())
    {
        // line 82
        echo "\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" value=\"Отправить\">
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "_.module_types.form.main";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 82,  237 => 81,  231 => 88,  227 => 86,  225 => 85,  222 => 84,  220 => 81,  217 => 80,  209 => 78,  207 => 77,  203 => 75,  200 => 74,  194 => 91,  192 => 74,  189 => 73,  175 => 72,  173 => 69,  172 => 68,  171 => 67,  170 => 66,  168 => 65,  151 => 64,  143 => 60,  139 => 58,  137 => 57,  133 => 56,  130 => 55,  127 => 54,  120 => 49,  117 => 48,  114 => 47,  110 => 54,  107 => 53,  103 => 47,  101 => 46,  92 => 40,  56 => 7,  49 => 2,  47 => 1,);
    }
}
/* {% set id = 'form_' ~ random() %}*/
/* */
/* <script src="/packages/jquery-ocupload/jquery.ocupload-min.js"></script>*/
/* */
/* <script>*/
/* 	$(function() {*/
/* 		$('#{$ id $} .file-upload').each(function(index, node) {*/
/* 			var button = $(node);*/
/* 			var wrap = button.parents('.file-upload-wrapper');*/
/* */
/* 			var input = wrap.children('input');*/
/* 			var uploaded = wrap.children('.btn-link');*/
/* */
/* 			button.upload({*/
/* 				action: '/form_uploads',*/
/* 				onComplete: function(responseRaw) {*/
/* 					var response;*/
/* */
/* 					try {*/
/* 						response = JSON.parse(responseRaw)*/
/* 					} catch (err) {*/
/* 						console.error(err);*/
/* 					}*/
/* */
/* 					if (response) {*/
/* 						input.val(response.fileName);*/
/* 						console.log(uploaded.length)*/
/* 						uploaded.removeClass('invisible');*/
/* 						uploaded.prop('href', response.path + response.fileName);*/
/* 					} else {*/
/* 						alert('Произошла ошибка');*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		});*/
/* 	});*/
/* </script>*/
/* */
/* <style>*/
/* 	#{$ id $} .file-upload-wrapper form input {*/
/* 		left: 0;*/
/* 		top: 0;*/
/* 	}*/
/* </style>*/
/* */
/* {% if data.sent %}*/
/* 	{% block notification %}*/
/* 		<div class="alert alert-success">*/
/* 			{$ config.forme.notification|raw $}*/
/* 		</div>*/
/* 	{% endblock %}*/
/* {% endif %}*/
/* */
/* {% block form %}*/
/* 	<form*/
/* 		action="/form/{$ config.forme.id $}"*/
/* 		{% if config.horizontal|default(false) %}*/
/* 			class="form-horizontal"*/
/* 		{% endif %}*/
/* 		id="{$ id $}"*/
/* 		method="post"*/
/* 	>*/
/* */
/* 		{% for field in config.forme.fields %}*/
/* 			{%*/
/* 				include '_.field' with {*/
/* 					'horizontal': config.horizontal|default(false),*/
/* 					'required': field.pivot.required|default(false),*/
/* 					'size': config.size|default(9)*/
/* 				}*/
/* 			%}*/
/* 		{% endfor %}*/
/* */
/* 		{% block submit %}*/
/* 			<div class="form-group">*/
/* */
/* 				{% if config.horizontal|default(false) %}*/
/* 					<div class="col-sm-offset-{$ 12 - config.size|default(9) $} col-sm-{$ config.size|default(9) $}">*/
/* 				{% endif %}*/
/* */
/* 				{% block button %}*/
/* 					<input class="btn btn-default" type="submit" value="Отправить">*/
/* 				{% endblock %}*/
/* */
/* 				{% if config.horizontal|default(false) %}*/
/* 					</div>*/
/* 				{% endif %}*/
/* */
/* 			</div>*/
/* 		{% endblock %}*/
/* */
/* 	</form>*/
/* {% endblock %}*/
/* */
