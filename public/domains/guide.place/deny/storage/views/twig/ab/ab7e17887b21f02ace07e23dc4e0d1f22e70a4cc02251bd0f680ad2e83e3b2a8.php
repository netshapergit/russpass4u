<?php

/* _.admin.pages.list */
class __TwigTemplate_cf16e3c38aa2b4db252c445c329dfa63155b7a82f7b332e6644a53e556873ed2 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.admin.base", "_.admin.pages.list", 1);
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
        $filters = array("escape" => 6);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('escape'),
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
\t<form
\t\taction=\"";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "admin", array()), "html", null, true));
        echo "/";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "segments", array()), 1, array(), "array"), "html", null, true));
        echo "/mass_update\"
\t\tmethod=\"post\"
\t\tng-controller=\"NetShaperAdminListPagesController\"
\t>

\t\t<input name=\"_method\" type=\"hidden\" value=\"put\">

\t\t<div class=\"display-none\" ng-repeat=\"item in changed\">
\t\t\t<input name=\"items[{{ item.page.id }}][order]\" ng-model=\"item.order\" type=\"text\">
\t\t</div>

\t\t<div class=\"pull-right\">

\t\t\t<a class=\"btn btn-success btn-sm\" ng-href=\"{{ url.admin }}/{{ request.segments[1] }}/create\" ng-show=\"actions.create && changed.length === 0\">
\t\t\t\t<span class=\"fa fa-plus\"></span>
\t\t\t\tСоздать
\t\t\t</a>

\t\t\t<a class=\"btn btn-warning btn-sm\" ng-href=\"{{ url.admin }}/{{ request.segments[1] }}\" ng-show=\"changed.length > 0\">
\t\t\t\t<span class=\"fa fa-reply\"></span>
\t\t\t\tОтменить
\t\t\t</a>

\t\t\t<button class=\"btn btn-primary btn-sm\" id=\"save_button\" ng-show=\"changed.length > 0\" type=\"submit\">
\t\t\t\t<span class=\"fa fa-save\"></span>
\t\t\t\tСохранить
\t\t\t</button>

\t\t</div>

\t\t<h3 ng-bind=\"text.listHeader\"></h3>

\t\t<hr>

\t\t<table class=\"table table-condensed table-hover\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>ID</th>
\t\t\t\t\t<th>Порядок</th>
\t\t\t\t\t<th></th>
\t\t\t\t\t
\t\t\t\t\t<th>Заголовок</th>
\t\t\t\t\t<th>Макет</th>
\t\t\t\t\t<!--
\t\t\t\t\t<th>Уровень</th>
\t\t\t\t\t-->
\t\t\t\t\t<th>Доступ</th>
\t\t\t\t\t<th>Активна</th>
\t\t\t\t\t<th>Путь</th>\t
\t\t\t\t\t<th></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr ng-class=\"{warning: isChanged(item)}\" ng-repeat=\"item in items\" ng-show=\"!isCollapsed(item.page.parent_page_id)\">
\t\t\t\t\t<td ng-bind=\"item.page.id\"></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<span ng-repeat=\"i in []|range:item.level - 1\" style=\"display: inline-block; width: 20px;\"></span>
\t\t\t\t\t\t<span
\t\t\t\t\t\t\tclass=\"fa fa-arrow-up pointer text-primary\"
\t\t\t\t\t\t\tng-class=\"{invisible: item.level <= 0 || isFirst(item)}\"
\t\t\t\t\t\t\tng-click=\"up(\$index)\"
\t\t\t\t\t\t></span>
\t\t\t\t\t\t<span ng-bind=\"item.page.order\"></span>
\t\t\t\t\t\t<span
\t\t\t\t\t\t\tclass=\"fa fa-arrow-down pointer text-primary\"
\t\t\t\t\t\t\tng-class=\"{invisible: item.level <= 0 || isLast(item)}\"
\t\t\t\t\t\t\tng-click=\"down(\$index)\"
\t\t\t\t\t\t></span>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<span
\t\t\t\t\t\t\tclass=\"fa fa-minus pointer text-primary\"
\t\t\t\t\t\t\tng-click=\"collapse(item.page.id)\"
\t\t\t\t\t\t\tng-show=\"item.page.parent_page_id && !isCollapsed(item.page.id) && item.page.sub_pages.length > 0\"
\t\t\t\t\t\t></span>
\t\t\t\t\t\t<span
\t\t\t\t\t\t\tclass=\"fa fa-plus pointer text-primary\"
\t\t\t\t\t\t\tng-click=\"expand(item.page.id)\"
\t\t\t\t\t\t\tng-show=\"item.page.parent_page_id && isCollapsed(item.page.id) && item.page.sub_pages.length > 0\"
\t\t\t\t\t\t></span>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t<span ng-repeat=\"i in []|range:item.level\" style=\"display: inline-block; width: 20px;\"></span>
\t\t\t\t\t\t<span ng-bind=\"item.page.sub_pages.length\" ng-show=\"item.page.sub_pages.length > 0\"></span>
\t\t\t\t\t\t<span class=\"fa fa-file-text text-primary\" ng-show=\"item.page.sub_pages.length > 0\"></span>
\t\t\t\t\t\t<a ng-href=\"{{ url.admin }}/{{ request.segments[1] }}/{{ item.page.id }}\" ng-show=\"actions.edit\">
\t\t\t\t\t\t\t<span ng-bind=\"item.page.title\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-muted\" ng-bind=\"item.page.layout.name\"></td>
\t\t\t\t\t<!--<td>
\t\t\t\t\t\t<span ng-show=\"item.level == 0\"><span ng-bind=\"item.page.title\" class=\"title_level_0\"></span></span>
\t\t\t\t\t\t<span ng-show=\"item.level == 1\"><span ng-bind=\"item.page.title\" class=\"title_level_1\"></span></span>
\t\t\t\t\t\t<span ng-show=\"item.level == 2\"><span ng-bind=\"item.page.title\" class=\"title_level_2\"></span></span>
\t\t\t\t\t\t<span ng-show=\"item.level == 3\"><span ng-bind=\"item.page.title\" class=\"title_level_3\"></span></span>
\t\t\t\t\t</td>-->
\t\t\t\t\t
\t\t\t\t\t<!--
\t\t\t\t\t<td>
\t\t\t\t\t\t<span ng-bind=\"item.level\" ng-show=\"item.level >= 0\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t-->
\t\t\t\t\t<td ng-bind=\"accessLevels[item.page.access_level]\"></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<span class=\"fa fa-check-square-o text-success\" ng-show=\"item.page.active\"></span>
\t\t\t\t\t\t<span class=\"fa fa-square-o text-danger\" ng-show=\"item.page.active == 0\"></span>
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t<span ng-show=\"item.level >= 0\">
\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\tclass=\"text-muted\"
\t\t\t\t\t\t\t\tng-bind=\"item.page.parent_page.path\"
\t\t\t\t\t\t\t\tng-show=\"item.page.parent_page && (item.page.parent_page.path !== '/' || !item.page.alias)\"
\t\t\t\t\t\t\t\tstyle=\"margin-right: 3px;\"
\t\t\t\t\t\t\t></span><a
\t\t\t\t\t\t\t\tng-href=\"{{ item.page.path }}\"
\t\t\t\t\t\t\t\tng-show=\"!item.page.parent_page_id || item.page.alias\"
\t\t\t\t\t\t\t\ttarget=\"_blank\"
\t\t\t\t\t\t\t>/<span ng-bind=\"item.page.alias\"></span></a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t<a ng-href=\"{{ url.admin }}/{{ request.segments[1] }}/{{ item.page.id }}\" ng-show=\"actions.edit\">
\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>

\t</form>

";
    }

    public function getTemplateName()
    {
        return "_.admin.pages.list";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 6,  55 => 4,  52 => 3,  11 => 1,);
    }
}
/* {% extends '_.admin.base' %}*/
/* */
/* {% block content %}*/
/* */
/* 	<form*/
/* 		action="{$ url.admin $}/{$ request.segments[1] $}/mass_update"*/
/* 		method="post"*/
/* 		ng-controller="NetShaperAdminListPagesController"*/
/* 	>*/
/* */
/* 		<input name="_method" type="hidden" value="put">*/
/* */
/* 		<div class="display-none" ng-repeat="item in changed">*/
/* 			<input name="items[{{ item.page.id }}][order]" ng-model="item.order" type="text">*/
/* 		</div>*/
/* */
/* 		<div class="pull-right">*/
/* */
/* 			<a class="btn btn-success btn-sm" ng-href="{{ url.admin }}/{{ request.segments[1] }}/create" ng-show="actions.create && changed.length === 0">*/
/* 				<span class="fa fa-plus"></span>*/
/* 				Создать*/
/* 			</a>*/
/* */
/* 			<a class="btn btn-warning btn-sm" ng-href="{{ url.admin }}/{{ request.segments[1] }}" ng-show="changed.length > 0">*/
/* 				<span class="fa fa-reply"></span>*/
/* 				Отменить*/
/* 			</a>*/
/* */
/* 			<button class="btn btn-primary btn-sm" id="save_button" ng-show="changed.length > 0" type="submit">*/
/* 				<span class="fa fa-save"></span>*/
/* 				Сохранить*/
/* 			</button>*/
/* */
/* 		</div>*/
/* */
/* 		<h3 ng-bind="text.listHeader"></h3>*/
/* */
/* 		<hr>*/
/* */
/* 		<table class="table table-condensed table-hover">*/
/* 			<thead>*/
/* 				<tr>*/
/* 					<th>ID</th>*/
/* 					<th>Порядок</th>*/
/* 					<th></th>*/
/* 					*/
/* 					<th>Заголовок</th>*/
/* 					<th>Макет</th>*/
/* 					<!--*/
/* 					<th>Уровень</th>*/
/* 					-->*/
/* 					<th>Доступ</th>*/
/* 					<th>Активна</th>*/
/* 					<th>Путь</th>	*/
/* 					<th></th>*/
/* 				</tr>*/
/* 			</thead>*/
/* 			<tbody>*/
/* 				<tr ng-class="{warning: isChanged(item)}" ng-repeat="item in items" ng-show="!isCollapsed(item.page.parent_page_id)">*/
/* 					<td ng-bind="item.page.id"></td>*/
/* 					<td>*/
/* 						<span ng-repeat="i in []|range:item.level - 1" style="display: inline-block; width: 20px;"></span>*/
/* 						<span*/
/* 							class="fa fa-arrow-up pointer text-primary"*/
/* 							ng-class="{invisible: item.level <= 0 || isFirst(item)}"*/
/* 							ng-click="up($index)"*/
/* 						></span>*/
/* 						<span ng-bind="item.page.order"></span>*/
/* 						<span*/
/* 							class="fa fa-arrow-down pointer text-primary"*/
/* 							ng-class="{invisible: item.level <= 0 || isLast(item)}"*/
/* 							ng-click="down($index)"*/
/* 						></span>*/
/* 					</td>*/
/* 					<td>*/
/* 						<span*/
/* 							class="fa fa-minus pointer text-primary"*/
/* 							ng-click="collapse(item.page.id)"*/
/* 							ng-show="item.page.parent_page_id && !isCollapsed(item.page.id) && item.page.sub_pages.length > 0"*/
/* 						></span>*/
/* 						<span*/
/* 							class="fa fa-plus pointer text-primary"*/
/* 							ng-click="expand(item.page.id)"*/
/* 							ng-show="item.page.parent_page_id && isCollapsed(item.page.id) && item.page.sub_pages.length > 0"*/
/* 						></span>*/
/* 						*/
/* 					</td>*/
/* 					*/
/* 					<td>*/
/* 						<span ng-repeat="i in []|range:item.level" style="display: inline-block; width: 20px;"></span>*/
/* 						<span ng-bind="item.page.sub_pages.length" ng-show="item.page.sub_pages.length > 0"></span>*/
/* 						<span class="fa fa-file-text text-primary" ng-show="item.page.sub_pages.length > 0"></span>*/
/* 						<a ng-href="{{ url.admin }}/{{ request.segments[1] }}/{{ item.page.id }}" ng-show="actions.edit">*/
/* 							<span ng-bind="item.page.title"></span>*/
/* 						</a>*/
/* 					</td>*/
/* 					<td class="text-muted" ng-bind="item.page.layout.name"></td>*/
/* 					<!--<td>*/
/* 						<span ng-show="item.level == 0"><span ng-bind="item.page.title" class="title_level_0"></span></span>*/
/* 						<span ng-show="item.level == 1"><span ng-bind="item.page.title" class="title_level_1"></span></span>*/
/* 						<span ng-show="item.level == 2"><span ng-bind="item.page.title" class="title_level_2"></span></span>*/
/* 						<span ng-show="item.level == 3"><span ng-bind="item.page.title" class="title_level_3"></span></span>*/
/* 					</td>-->*/
/* 					*/
/* 					<!--*/
/* 					<td>*/
/* 						<span ng-bind="item.level" ng-show="item.level >= 0"></span>*/
/* 					</td>*/
/* 					-->*/
/* 					<td ng-bind="accessLevels[item.page.access_level]"></td>*/
/* 					<td>*/
/* 						<span class="fa fa-check-square-o text-success" ng-show="item.page.active"></span>*/
/* 						<span class="fa fa-square-o text-danger" ng-show="item.page.active == 0"></span>*/
/* 					</td>*/
/* 					*/
/* 					*/
/* 					<td>*/
/* 						<span ng-show="item.level >= 0">*/
/* 							<span*/
/* 								class="text-muted"*/
/* 								ng-bind="item.page.parent_page.path"*/
/* 								ng-show="item.page.parent_page && (item.page.parent_page.path !== '/' || !item.page.alias)"*/
/* 								style="margin-right: 3px;"*/
/* 							></span><a*/
/* 								ng-href="{{ item.page.path }}"*/
/* 								ng-show="!item.page.parent_page_id || item.page.alias"*/
/* 								target="_blank"*/
/* 							>/<span ng-bind="item.page.alias"></span></a>*/
/* 						</span>*/
/* 					</td>*/
/* 					*/
/* 					<td>*/
/* 						<a ng-href="{{ url.admin }}/{{ request.segments[1] }}/{{ item.page.id }}" ng-show="actions.edit">*/
/* 							<span class="fa fa-pencil"></span>*/
/* 						</a>*/
/* 					</td>*/
/* 					*/
/* 				</tr>*/
/* 			</tbody>*/
/* 		</table>*/
/* */
/* 	</form>*/
/* */
/* {% endblock %}*/
/* */
