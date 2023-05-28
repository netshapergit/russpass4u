<?php

/* _.auth */
class __TwigTemplate_0ac4c274af1b6bdc976bb18f4edf9d777ace00d79ca43c45192f11271921d8f7 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.root", "_.auth", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.root";
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
\t";
        // line 6
        echo "\t<link rel=\"stylesheet\" href=\"/packages/bootstrap-themes/flatly/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"/packages/font-awesome/4.1.0/css/font-awesome.min.css\">
\t<link rel=\"stylesheet\" href=\"/packages/netshaper/admin/css/auth.css\">
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "\tAuthentication
\t";
        // line 13
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "\t<div class=\"panel panel-primary\" id=\"login\">

\t\t<div class=\"panel-heading\">
\t\t\t<h4>
\t\t\t\t<img alt=\"NetShaper\" src=\"/packages/netshaper/admin/images/logo.png\" title=\"NetShaper\">
\t\t\t</h4>
\t\t</div>

\t\t<div class=\"panel-body\">
\t\t\t<form action=\"/auth/login/admin\" method=\"post\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input class=\"form-control\" name=\"login\" placeholder=\"Логин\" type=\"text\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input class=\"form-control\" name=\"password\" placeholder=\"Пароль\" type=\"password\">
\t\t\t\t</div>
\t\t\t\t<button class=\"btn btn-default\" type=\"submit\">
\t\t\t\t\t<span class=\"fa fa-sign-in\"></span>
\t\t\t\t\tВойти
\t\t\t\t</button>
\t\t\t</form>
\t\t</div>

\t</div>
";
    }

    public function getTemplateName()
    {
        return "_.auth";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 17,  81 => 16,  75 => 13,  72 => 12,  69 => 11,  62 => 6,  57 => 4,  54 => 3,  11 => 1,);
    }
}
/* {% extends '_.root' %}*/
/* */
/* {% block head %}*/
/* 	{$ parent() $}*/
/* 	{#<link rel="stylesheet" href="/packages/bootstrap/3.1.1/css/bootstrap.min.css">#}*/
/* 	<link rel="stylesheet" href="/packages/bootstrap-themes/flatly/bootstrap.min.css">*/
/* 	<link rel="stylesheet" href="/packages/font-awesome/4.1.0/css/font-awesome.min.css">*/
/* 	<link rel="stylesheet" href="/packages/netshaper/admin/css/auth.css">*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/* 	Authentication*/
/* 	{$ parent() $}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	<div class="panel panel-primary" id="login">*/
/* */
/* 		<div class="panel-heading">*/
/* 			<h4>*/
/* 				<img alt="NetShaper" src="/packages/netshaper/admin/images/logo.png" title="NetShaper">*/
/* 			</h4>*/
/* 		</div>*/
/* */
/* 		<div class="panel-body">*/
/* 			<form action="/auth/login/admin" method="post">*/
/* 				<div class="form-group">*/
/* 					<input class="form-control" name="login" placeholder="Логин" type="text">*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<input class="form-control" name="password" placeholder="Пароль" type="password">*/
/* 				</div>*/
/* 				<button class="btn btn-default" type="submit">*/
/* 					<span class="fa fa-sign-in"></span>*/
/* 					Войти*/
/* 				</button>*/
/* 			</form>*/
/* 		</div>*/
/* */
/* 	</div>*/
/* {% endblock %}*/
/* */
