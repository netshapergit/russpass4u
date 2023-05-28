<?php

/* layouts.import */
class __TwigTemplate_93878146a5097dbbffdb2054d0c597a34fe33ed9875872f5b0df6ceb4955e9a9 extends TwigBridge\Twig\Template
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
        $tags = array("include" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include'),
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

        // line 1
        $this->loadTemplate("header", "layouts.import", 1)->display($context);
        // line 2
        echo "
<section class=\"tech\" id=\"import-app\">
\t<div class=\"tech__wrapper\">
\t\t<div class=\"tech-select\">
\t\t\t<div class=\"tech-select__label\">Выберите город</div>
\t\t\t<select v-model=\"importData.city\" @change=\"cityChange\">
\t\t\t\t<option v-for=\"item in citiesData\" :key=\"item.city\" :value=\"item\">{{ item.city }}</option>
\t\t\t</select>
\t\t</div>
\t\t<div v-if=\"importData.city\" class=\"tech-select\">
\t\t\t<div class=\"tech-select__label\">Выберите тип объекта</div>
\t\t\t<select v-model=\"importData.objType\">
\t\t\t\t<option v-for=\"item in importData.city.cat\" :key=\"item.id\" :value=\"item\">{{ catsVoc[item.layout_id].name }}</option>
\t\t\t</select>
\t\t</div>
\t\t<div class=\"tech-select\">
\t\t\t<div class=\"tech-select__label\">Введите заголовок</div>
\t\t\t<input type=\"text\" v-model=\"importData.title\">
\t\t</div>
\t\t<div class=\"tech-select\">
\t\t\t<div class=\"tech-select__label\">Количество картинок галереи</div>
\t\t\t<input type=\"number\" min=\"0\" v-model.number=\"importData.galSize\">
\t\t</div>
\t\t<hr>
\t\t<div v-if=\"importData.objType\" class=\"\">
\t\t\t<ul>
\t\t\t\t<li>ID родительской страницы (parent_page_id): {{importData.objType.id }}</li>
\t\t\t\t<li>ID макета объекта (layout_id): {{ catsVoc[importData.objType.layout_id].content_id }}</li>
\t\t\t\t<li>Заголовок (title): {{ importData.title }}</li>
\t\t\t\t<li>Алиас (alias): {{translitedTitle}}</li>
\t\t\t\t<li>Основное изображение (field_image): {{imgPath + '-' + Date.now().toString().slice(-4) }}.jpg</li>
\t\t\t\t<li>Галерея (field_gallery_arr): 
\t\t\t\t\t<ol>
\t\t\t\t\t\t<li v-for=\"i in importData.galSize\">
\t\t\t\t\t\t\t{{imgPath + '-' + (Number(Date.now().toString().slice(-4)) + i + 1) }}.jpg
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\"<template v-for=\"i in importData.galSize\">
\t\t\t\t\t\t\t\t{{ imgPath + '-' + (Number(Date.now().toString().slice(-4)) + i + 1) + '.jpg,' }}
\t\t\t\t\t\t\t</template>\"
\t\t\t\t\t\t</li>
\t\t\t\t\t</ol>
\t\t\t\t</li>
\t\t\t\t<li>grid: 0</li>
\t\t\t\t<li>order: 0</li>
\t\t\t\t<li>active: 1</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</section>


";
        // line 54
        $this->loadTemplate("footer", "layouts.import", 54)->display($context);
        // line 55
        echo "
<script src=\"/site/theme/js/import.js\"></script>";
    }

    public function getTemplateName()
    {
        return "layouts.import";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 55,  99 => 54,  45 => 2,  43 => 1,);
    }
}
/* {% include 'header' %}*/
/* */
/* <section class="tech" id="import-app">*/
/* 	<div class="tech__wrapper">*/
/* 		<div class="tech-select">*/
/* 			<div class="tech-select__label">Выберите город</div>*/
/* 			<select v-model="importData.city" @change="cityChange">*/
/* 				<option v-for="item in citiesData" :key="item.city" :value="item">{{ item.city }}</option>*/
/* 			</select>*/
/* 		</div>*/
/* 		<div v-if="importData.city" class="tech-select">*/
/* 			<div class="tech-select__label">Выберите тип объекта</div>*/
/* 			<select v-model="importData.objType">*/
/* 				<option v-for="item in importData.city.cat" :key="item.id" :value="item">{{ catsVoc[item.layout_id].name }}</option>*/
/* 			</select>*/
/* 		</div>*/
/* 		<div class="tech-select">*/
/* 			<div class="tech-select__label">Введите заголовок</div>*/
/* 			<input type="text" v-model="importData.title">*/
/* 		</div>*/
/* 		<div class="tech-select">*/
/* 			<div class="tech-select__label">Количество картинок галереи</div>*/
/* 			<input type="number" min="0" v-model.number="importData.galSize">*/
/* 		</div>*/
/* 		<hr>*/
/* 		<div v-if="importData.objType" class="">*/
/* 			<ul>*/
/* 				<li>ID родительской страницы (parent_page_id): {{importData.objType.id }}</li>*/
/* 				<li>ID макета объекта (layout_id): {{ catsVoc[importData.objType.layout_id].content_id }}</li>*/
/* 				<li>Заголовок (title): {{ importData.title }}</li>*/
/* 				<li>Алиас (alias): {{translitedTitle}}</li>*/
/* 				<li>Основное изображение (field_image): {{imgPath + '-' + Date.now().toString().slice(-4) }}.jpg</li>*/
/* 				<li>Галерея (field_gallery_arr): */
/* 					<ol>*/
/* 						<li v-for="i in importData.galSize">*/
/* 							{{imgPath + '-' + (Number(Date.now().toString().slice(-4)) + i + 1) }}.jpg*/
/* 						</li>*/
/* 						<li>*/
/* 							"<template v-for="i in importData.galSize">*/
/* 								{{ imgPath + '-' + (Number(Date.now().toString().slice(-4)) + i + 1) + '.jpg,' }}*/
/* 							</template>"*/
/* 						</li>*/
/* 					</ol>*/
/* 				</li>*/
/* 				<li>grid: 0</li>*/
/* 				<li>order: 0</li>*/
/* 				<li>active: 1</li>*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* */
/* */
/* {% include 'footer' %}*/
/* */
/* <script src="/site/theme/js/import.js"></script>*/
