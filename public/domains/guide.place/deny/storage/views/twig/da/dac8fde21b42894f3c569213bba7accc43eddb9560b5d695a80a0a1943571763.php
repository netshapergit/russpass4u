<?php

/* _.admin.images.file */
class __TwigTemplate_6bca5813d523a47c4222da65afb1793f6d98be9f91d4bd57cc25f23a686f1c89 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.admin.file", "_.admin.images.file", 1);
        $this->blocks = array(
            'link' => array($this, 'block_link'),
            'fields' => array($this, 'block_fields'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.admin.file";
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
    public function block_link($context, array $blocks = array())
    {
        // line 4
        echo "
\t<span class=\"preview\">
\t\t<img class=\"inner-width\" ng-src=\"/site/theme/images/{{ file.id }}\">
\t</span>

\t";
        // line 9
        $this->displayParentBlock("link", $context, $blocks);
        echo "

";
    }

    // line 13
    public function block_fields($context, array $blocks = array())
    {
        // line 14
        echo "
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-12\">
\t\t\t<img class=\"inner-width\" ng-src=\"/site/theme/images/{{ item.id }}\">
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "_.admin.images.file";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 14,  70 => 13,  63 => 9,  56 => 4,  53 => 3,  11 => 1,);
    }
}
/* {% extends '_.admin.file' %}*/
/* */
/* {% block link %}*/
/* */
/* 	<span class="preview">*/
/* 		<img class="inner-width" ng-src="/site/theme/images/{{ file.id }}">*/
/* 	</span>*/
/* */
/* 	{$ parent() $}*/
/* */
/* {% endblock %}*/
/* */
/* {% block fields %}*/
/* */
/* 	<div class="form-group">*/
/* 		<div class="col-sm-12">*/
/* 			<img class="inner-width" ng-src="/site/theme/images/{{ item.id }}">*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
