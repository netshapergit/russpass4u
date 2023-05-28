<?php

/* _.admin.files */
class __TwigTemplate_73b3785c212468224138215e39fbd0e26fa493cd93bb38924177524e9c0aeb72 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.admin.base", "_.admin.files", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.admin.base";
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
\t<div class=\"row\" ng-controller=\"NetShaperAdminFilesController\">

\t\t<div class=\"col-sm-4\" ng-repeat=\"type in types\">

\t\t\t<h4>

\t\t\t\t<span class=\"pull-left\" ng-bind=\"type.name\"></span>

\t\t\t\t<div class=\"pull-left file-add\">
\t\t\t\t\t<a
\t\t\t\t\t\tclass=\"text-success\"
\t\t\t\t\t\tng-href=\"{{ url.admin }}/{{ type.alias }}/create\"
\t\t\t\t\t\tng-show=\"['images', 'documents'].indexOf(type.alias) < 0\"
\t\t\t\t\t>
\t\t\t\t\t\t<span class=\"fa fa-plus\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<a
\t\t\t\t\t\tclass=\"text-success\"
\t\t\t\t\t\thref=\"#\"
\t\t\t\t\t\tng-show=\"type.alias === 'images'\"
\t\t\t\t\t\tns-upload=\"{{ url.admin }}/upload_theme_images\"
\t\t\t\t\t\ton-complete=\"onComplete(type, response)\"
\t\t\t\t\t\ton-submit=\"onSubmit(type)\"
\t\t\t\t\t>
\t\t\t\t\t\t<span class=\"fa fa-plus\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<a
\t\t\t\t\t\tclass=\"text-success\"
\t\t\t\t\t\thref=\"#\"
\t\t\t\t\t\tng-show=\"type.alias === 'documents'\"
\t\t\t\t\t\tns-upload=\"{{ url.admin }}/upload_documents\"
\t\t\t\t\t\ton-complete=\"onComplete(type, response)\"
\t\t\t\t\t\ton-submit=\"onSubmit(type)\"
\t\t\t\t\t>
\t\t\t\t\t\t<span class=\"fa fa-plus\"></span>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t</h4>

\t\t\t<ul class=\"nav nav-pills nav-stacked files\">
\t\t\t\t<li ng-repeat=\"file in type.files\">
\t\t\t\t\t<a ng-href=\"{{ url.admin }}/{{ type.alias }}/{{ file.id }}/edit\">
\t\t\t\t\t\t<span class=\"preview\" ng-show=\"type.alias === 'images'\">
\t\t\t\t\t\t\t<img class=\"inner-width\" ng-src=\"/site/theme/images/{{ file.id }}\">
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span ng-bind=\"file.id\"></span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>

\t\t</div>

\t</div>

";
    }

    public function getTemplateName()
    {
        return "_.admin.files";
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
/* {% extends '_.admin.base' %}*/
/* */
/* {% block content %}*/
/* */
/* 	<div class="row" ng-controller="NetShaperAdminFilesController">*/
/* */
/* 		<div class="col-sm-4" ng-repeat="type in types">*/
/* */
/* 			<h4>*/
/* */
/* 				<span class="pull-left" ng-bind="type.name"></span>*/
/* */
/* 				<div class="pull-left file-add">*/
/* 					<a*/
/* 						class="text-success"*/
/* 						ng-href="{{ url.admin }}/{{ type.alias }}/create"*/
/* 						ng-show="['images', 'documents'].indexOf(type.alias) < 0"*/
/* 					>*/
/* 						<span class="fa fa-plus"></span>*/
/* 					</a>*/
/* 					<a*/
/* 						class="text-success"*/
/* 						href="#"*/
/* 						ng-show="type.alias === 'images'"*/
/* 						ns-upload="{{ url.admin }}/upload_theme_images"*/
/* 						on-complete="onComplete(type, response)"*/
/* 						on-submit="onSubmit(type)"*/
/* 					>*/
/* 						<span class="fa fa-plus"></span>*/
/* 					</a>*/
/* 					<a*/
/* 						class="text-success"*/
/* 						href="#"*/
/* 						ng-show="type.alias === 'documents'"*/
/* 						ns-upload="{{ url.admin }}/upload_documents"*/
/* 						on-complete="onComplete(type, response)"*/
/* 						on-submit="onSubmit(type)"*/
/* 					>*/
/* 						<span class="fa fa-plus"></span>*/
/* 					</a>*/
/* 				</div>*/
/* */
/* 				<div class="clearfix"></div>*/
/* */
/* 			</h4>*/
/* */
/* 			<ul class="nav nav-pills nav-stacked files">*/
/* 				<li ng-repeat="file in type.files">*/
/* 					<a ng-href="{{ url.admin }}/{{ type.alias }}/{{ file.id }}/edit">*/
/* 						<span class="preview" ng-show="type.alias === 'images'">*/
/* 							<img class="inner-width" ng-src="/site/theme/images/{{ file.id }}">*/
/* 						</span>*/
/* 						<span ng-bind="file.id"></span>*/
/* 					</a>*/
/* 				</li>*/
/* 			</ul>*/
/* */
/* 		</div>*/
/* */
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
