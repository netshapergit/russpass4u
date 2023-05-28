<?php

/* _.admin.site.settings */
class __TwigTemplate_0901eaabe3985397cb9cc2f1ef62f5771b7cc7d298488ef043d7393235032574 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.admin.settings", "_.admin.site.settings", 1);
        $this->blocks = array(
            'fields' => array($this, 'block_fields'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.admin.settings";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
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
    public function block_fields($context, array $blocks = array())
    {
        // line 4
        echo "
\t<div class=\"row\">

\t\t<div class=\"col-sm-6\">
\t\t\t<ns-email alias=\"email\" item=\"item\" label=\"E-mail для оповещений\"></ns-email>
\t\t</div>

\t\t<div class=\"col-sm-6\">
\t\t\t<ns-incognito
\t\t\t\talias=\"field_{{ field.alias }}\"
\t\t\t\tfield-type=\"{{ field.field_type.alias.replace('pages', 'options') }}\"
\t\t\t\titem=\"item\"
\t\t\t\tlabel=\"{{ field.name }}\"
\t\t\t\tng-repeat=\"field in list.fields\"
\t\t\t></ns-incognito>
\t\t</div>

\t</div>

";
    }

    public function getTemplateName()
    {
        return "_.admin.site.settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 4,  52 => 3,  11 => 1,);
    }
}
/* {% extends '_.admin.settings' %}*/
/* */
/* {% block fields %}*/
/* */
/* 	<div class="row">*/
/* */
/* 		<div class="col-sm-6">*/
/* 			<ns-email alias="email" item="item" label="E-mail для оповещений"></ns-email>*/
/* 		</div>*/
/* */
/* 		<div class="col-sm-6">*/
/* 			<ns-incognito*/
/* 				alias="field_{{ field.alias }}"*/
/* 				field-type="{{ field.field_type.alias.replace('pages', 'options') }}"*/
/* 				item="item"*/
/* 				label="{{ field.name }}"*/
/* 				ng-repeat="field in list.fields"*/
/* 			></ns-incognito>*/
/* 		</div>*/
/* */
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
