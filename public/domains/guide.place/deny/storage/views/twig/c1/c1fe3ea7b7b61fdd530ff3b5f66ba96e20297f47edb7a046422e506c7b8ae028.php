<?php

/* layouts.event_old */
class __TwigTemplate_5c8b3cff76ce6ad2332413ede00b10bd53f38533dedfad7698b3f461a8c5dd5e extends TwigBridge\Twig\Template
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
        $tags = array("include" => 1, "if" => 3);
        $filters = array("escape" => 4, "raw" => 85, "trim" => 102, "split" => 142);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include', 'if'),
                array('escape', 'raw', 'trim', 'split'),
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
        $this->loadTemplate("header", "layouts.event_old", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_gallery", array())) {
            // line 4
            echo "<section class=\"hotel-gallery\" data-gallery=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_gallery", array()), "html", null, true));
            echo "\">
\t<div class=\"hotel-gallery__wrapper\">
\t\t<div class=\"hotel-gallery__main\">
\t\t\t
\t\t</div>
\t\t<div class=\"hotel-gallery__arrows\">
\t\t\t<div class=\"cont\">
\t\t\t\t<div class=\"hotel-gallery-arrows__wrapper\">
\t\t\t\t\t<div class=\"hotel-gallery-arrow hotel-gallery-arrow--prev\"></div>
\t\t\t\t\t<div class=\"hotel-gallery-arrow hotel-gallery-arrow--next\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<script>
\t\$(document).ready(function() {
\t\tconst gallery = \$('.hotel-gallery')
\t\tconst data = \$(gallery.attr('data-gallery')) || null
\t\tif (data) {
\t\t\tgallery.removeAttr('data-gallery')
\t\t\tlet imgs = []
\t\t\tfor(let k = 0; k < data.length; k++) {
\t\t\t\tif(\$(data[k]).is('img')) imgs.push(`<div class=\"hotel-gallery-item\">\${data[k].outerHTML}</div>`)
\t\t\t}
\t\t\tif (imgs.length > 0) {
\t\t\t\tconst html = imgs.join('')
\t\t\t\t\$('.hotel-gallery__main').html(html)
\t\t\t}
\t\t\tif (imgs.length > 1) {
\t\t\t\t\$('.hotel-gallery__main').slick({
\t\t\t\t\tslidesToShow: 4,
\t\t\t\t\tvariableWidth: true,
\t\t\t\t\tslidesToScroll: 1,
\t\t\t\t\tprevArrow: \$('.hotel-gallery-arrow--prev'),
\t\t\t\t\tnextArrow: \$('.hotel-gallery-arrow--next'),
\t\t\t\t\tinfinite: true,
\t\t\t\t\tcenterMode: true
\t\t\t\t})
\t\t\t} else {
\t\t\t\t\$('.hotel-gallery').hide()
\t\t\t\t\$('.hotel').css('padding-top', '120px')
\t\t\t}
\t\t}\t
\t})
</script>
";
        }
        // line 51
        echo "
<section class=\"hotel\">
\t<div class=\"cont\">
\t\t<div class=\"hotel__main\">
\t\t\t<div class=\"hotel__main-item\">
\t\t\t\t<h1 class=\"hotel-title\">";
        // line 56
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array()), "html", null, true));
        echo "</h1>
\t\t\t\t";
        // line 57
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_address", array())) {
            // line 58
            echo "\t\t\t\t<div class=\"hotel-address\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"19\" viewBox=\"0 0 12 19\" fill=\"none\">
\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.77347 0.122131C8.80285 0.122131 11.2564 2.59894 11.2564 5.65261C11.2564 8.24755 8.26216 14.7388 7.12029 17.1763C6.45274 18.6017 5.10396 18.6017 4.43445 17.1763C3.34333 14.8471 0.288574 8.06839 0.288574 5.65261C0.288574 2.59697 2.74409 0.122131 5.77152 0.122131L5.77347 0.122131ZM5.77347 2.18745C7.61413 2.18745 9.10539 3.69165 9.10539 5.54826C9.10539 7.40488 7.61413 8.90908 5.77347 8.90908C3.93281 8.90908 2.44154 7.40488 2.44154 5.54826C2.44154 3.69165 3.93281 2.18745 5.77347 2.18745Z\" fill=\"#14c5d0\"/>
\t\t\t\t\t</svg>
\t\t\t\t\t";
            // line 62
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_address", array()), "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 65
        echo "\t\t\t</div>
\t\t\t<div class=\"hotel__main-item\">
\t\t\t\t";
        // line 67
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_order_id", array())) {
            // line 68
            echo "\t\t\t\t<a href=\"#reservation\" class=\"mbtn mbtn--icon\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"19\" viewBox=\"0 0 22 19\" fill=\"none\">
\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M15.9405 2.29795H15.108V0.910461H13.7205V2.29796L4.56296 2.29795V0.910461H3.17546V2.29796L2.34297 2.29795C1.19537 2.29795 0.261719 3.23161 0.261719 4.37921V16.5892C0.261719 17.7368 1.19537 18.6705 2.34297 18.6705H15.9405C17.0881 18.6705 18.0217 17.7368 18.0217 16.5892V11.8704L16.6342 13.2579V16.5892C16.6342 16.9717 16.323 17.283 15.9405 17.283L2.34297 17.283C1.96043 17.283 1.64922 16.9717 1.64922 16.5892L1.64921 7.43171H16.6342V8.67839L18.0217 7.29089V4.37921C18.0217 3.23161 17.0881 2.29795 15.9405 2.29795ZM16.6342 6.04421H1.64921V4.37921C1.64921 3.99668 1.96042 3.68546 2.34296 3.68546H3.17546V5.07297L4.56296 5.07296V3.68546H13.7205V5.07297L15.108 5.07296V3.68546H15.9405C16.323 3.68546 16.6342 3.99668 16.6342 4.37921V6.04421Z\" fill=\"white\"/>
\t\t\t\t\t\t<path d=\"M4.28545 8.8886H2.89795V10.2761H4.28545V8.8886Z\" fill=\"white\"/>
\t\t\t\t\t\t<path d=\"M4.28545 11.6636H2.89795V13.0511H4.28545V11.6636Z\" fill=\"white\"/>
\t\t\t\t\t\t<path d=\"M7.06035 11.6636H5.67285V13.0511H7.06035V11.6636Z\" fill=\"white\"/>
\t\t\t\t\t\t<path d=\"M4.28545 14.4386H2.89795V15.8261H4.28545V14.4386Z\" fill=\"white\"/>
\t\t\t\t\t\t<path d=\"M7.06035 14.4386H5.67285V15.8261H7.06035V14.4386Z\" fill=\"white\"/>
\t\t\t\t\t\t<path d=\"M9.83526 14.4386H8.44775V15.8261H9.83526V14.4386Z\" fill=\"white\"/>
\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M6.77606 8.92754C7.14609 8.5575 7.75156 8.5575 8.12157 8.92754L12.7093 13.5152L19.7989 6.42564C20.1689 6.05563 20.7744 6.05563 21.1444 6.42564C21.5144 6.79567 21.5144 7.40114 21.1444 7.77115L13.3936 15.5219C13.2307 15.6848 13.0222 15.776 12.8083 15.7954C12.5297 15.827 12.2396 15.7366 12.0271 15.5241L6.77606 10.273C6.40603 9.90302 6.40603 9.29755 6.77606 8.92754Z\" fill=\"white\"/>
\t\t\t\t\t</svg>
\t\t\t\t\tЗабронировать сейчас
\t\t\t\t</a>
\t\t\t\t";
        }
        // line 82
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"hotel__content\">
\t\t\t";
        // line 85
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_content", array()));
        echo "
\t\t</div>
\t</div>
</section>

";
        // line 90
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_order_id", array())) {
            // line 91
            echo "<section class=\"hotel-rooms\">
\t<h2 class=\"section-title section-title--no-subtitle\">Обзор номеров</h2>
\t<div class=\"section-subtitle\"></div>
\t<div id=\"order-idplace-rooms\"></div>
\t<script>
\t\tlet iframeIDPR = document.createElement('iframe');
\t\twindow.addEventListener('message', function (e) {
\t\t\tif(e.data.idplaceRoomsHeight) {
\t\t\t\tiframeIDPR.height = e.data.idplaceRoomsHeight;
\t\t\t}
\t\t});
\t\tiframeIDPR.src = 'https://order.id.place/";
            // line 102
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, trim($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_order_id", array())), "html", null, true));
            echo "?getrooms=1';
\t\tiframeIDPR.scrolling = 'no';
\t\tiframeIDPR.setAttribute('frameborder', 0);
\t\tiframeIDPR.width = '100%';
\t\tiframeIDPR.height = 500;
\t\tdocument.querySelector('#order-idplace-rooms').appendChild(iframeIDPR);
\t</script>
</section>
\t
<section class=\"reservation\" id=\"reservation\">
\t<div class=\"cont\">
\t\t<h2 class=\"section-title section-title--no-subtitle\">Бронирование</div>
\t\t<div class=\"section-subtitle\"></div>
\t\t<div id=\"order-idplace-reservation\"></div>
\t\t<script>
\t\t\tlet iframeIDPRES = document.createElement('iframe');
\t\t\twindow.addEventListener('message', function (e) {
\t\t\t\tif(e.data.idplaceReservationHeight) {
\t\t\t\t\tiframeIDPRES.height = e.data.idplaceReservationHeight;
\t\t\t\t}
\t\t\t});
\t\t\tiframeIDPRES.src = 'https://order.id.place/";
            // line 123
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, trim($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_order_id", array())), "html", null, true));
            echo "?theme=1';
\t\t\tiframeIDPRES.scrolling = 'no';
\t\t\tiframeIDPRES.setAttribute('frameborder', 0);
\t\t\tiframeIDPRES.width = '100%';
\t\t\tiframeIDPRES.height = 500;
\t\t\tdocument.querySelector('#order-idplace-reservation').appendChild(iframeIDPRES);
\t\t</script>
\t</div>
</div>
";
        }
        // line 133
        echo "
";
        // line 134
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_coords", array())) {
            // line 135
            echo "\t<section class=\"hotel-map\">
\t\t<div id=\"hotel-map\" style=\"width: 100%; height: 500px;\"></div>
\t\t<script src=\"https://api-maps.yandex.ru/2.1/?apikey=4956c4ec-ca4d-4735-b259-0ac91cd00cf0&lang=ru_RU\" type=\"text/javascript\"></script>
\t\t<script>
\t\t\tymaps.ready(init);
\t\t\tfunction init() {
\t\t\t\tlet myMap = new ymaps.Map(\"hotel-map\", {
\t\t\t\t\t\tcenter: [";
            // line 142
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, trim($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_coords", array())), ","), 0, array(), "array"), "html", null, true));
            echo ", ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, trim($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_coords", array())), ","), 1, array(), "array"), "html", null, true));
            echo "],
\t\t\t\t\t\tzoom: 13,
\t\t\t\t\t\tconstrols: ['zoomControl']
\t\t\t\t\t}, {
\t\t\t\t\t\tsearchControlProvider: 'yandex#search'
\t\t\t\t\t}),

\t\t\t\t\tmyGeoObject = new ymaps.GeoObject({
\t\t\t\t\t\tgeometry: {
\t\t\t\t\t\t\ttype: \"Point\",
\t\t\t\t\t\t\tcoordinates: [";
            // line 152
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, trim($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_coords", array())), ","), 0, array(), "array"), "html", null, true));
            echo ", ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, trim($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_coords", array())), ","), 1, array(), "array"), "html", null, true));
            echo "]
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t
\t\t\t\t\tmyMap.geoObjects.add(myGeoObject)
\t\t\t\t\tmyMap.behaviors.disable('scrollZoom')
\t\t\t}
\t\t</script>
\t</section>
";
        }
        // line 162
        echo "
";
        // line 163
        $this->loadTemplate("footer", "layouts.event_old", 163)->display($context);
    }

    public function getTemplateName()
    {
        return "layouts.event_old";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 163,  257 => 162,  242 => 152,  227 => 142,  218 => 135,  216 => 134,  213 => 133,  200 => 123,  176 => 102,  163 => 91,  161 => 90,  153 => 85,  148 => 82,  132 => 68,  130 => 67,  126 => 65,  120 => 62,  114 => 58,  112 => 57,  108 => 56,  101 => 51,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% include 'header' %}*/
/* */
/* {% if page.field_gallery %}*/
/* <section class="hotel-gallery" data-gallery="{$ page.field_gallery $}">*/
/* 	<div class="hotel-gallery__wrapper">*/
/* 		<div class="hotel-gallery__main">*/
/* 			*/
/* 		</div>*/
/* 		<div class="hotel-gallery__arrows">*/
/* 			<div class="cont">*/
/* 				<div class="hotel-gallery-arrows__wrapper">*/
/* 					<div class="hotel-gallery-arrow hotel-gallery-arrow--prev"></div>*/
/* 					<div class="hotel-gallery-arrow hotel-gallery-arrow--next"></div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* <script>*/
/* 	$(document).ready(function() {*/
/* 		const gallery = $('.hotel-gallery')*/
/* 		const data = $(gallery.attr('data-gallery')) || null*/
/* 		if (data) {*/
/* 			gallery.removeAttr('data-gallery')*/
/* 			let imgs = []*/
/* 			for(let k = 0; k < data.length; k++) {*/
/* 				if($(data[k]).is('img')) imgs.push(`<div class="hotel-gallery-item">${data[k].outerHTML}</div>`)*/
/* 			}*/
/* 			if (imgs.length > 0) {*/
/* 				const html = imgs.join('')*/
/* 				$('.hotel-gallery__main').html(html)*/
/* 			}*/
/* 			if (imgs.length > 1) {*/
/* 				$('.hotel-gallery__main').slick({*/
/* 					slidesToShow: 4,*/
/* 					variableWidth: true,*/
/* 					slidesToScroll: 1,*/
/* 					prevArrow: $('.hotel-gallery-arrow--prev'),*/
/* 					nextArrow: $('.hotel-gallery-arrow--next'),*/
/* 					infinite: true,*/
/* 					centerMode: true*/
/* 				})*/
/* 			} else {*/
/* 				$('.hotel-gallery').hide()*/
/* 				$('.hotel').css('padding-top', '120px')*/
/* 			}*/
/* 		}	*/
/* 	})*/
/* </script>*/
/* {% endif %}*/
/* */
/* <section class="hotel">*/
/* 	<div class="cont">*/
/* 		<div class="hotel__main">*/
/* 			<div class="hotel__main-item">*/
/* 				<h1 class="hotel-title">{$ page.field_header $}</h1>*/
/* 				{% if page.field_address %}*/
/* 				<div class="hotel-address">*/
/* 					<svg xmlns="http://www.w3.org/2000/svg" width="12" height="19" viewBox="0 0 12 19" fill="none">*/
/* 						<path fill-rule="evenodd" clip-rule="evenodd" d="M5.77347 0.122131C8.80285 0.122131 11.2564 2.59894 11.2564 5.65261C11.2564 8.24755 8.26216 14.7388 7.12029 17.1763C6.45274 18.6017 5.10396 18.6017 4.43445 17.1763C3.34333 14.8471 0.288574 8.06839 0.288574 5.65261C0.288574 2.59697 2.74409 0.122131 5.77152 0.122131L5.77347 0.122131ZM5.77347 2.18745C7.61413 2.18745 9.10539 3.69165 9.10539 5.54826C9.10539 7.40488 7.61413 8.90908 5.77347 8.90908C3.93281 8.90908 2.44154 7.40488 2.44154 5.54826C2.44154 3.69165 3.93281 2.18745 5.77347 2.18745Z" fill="#14c5d0"/>*/
/* 					</svg>*/
/* 					{$ page.field_address $}*/
/* 				</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 			<div class="hotel__main-item">*/
/* 				{% if page.field_order_id %}*/
/* 				<a href="#reservation" class="mbtn mbtn--icon">*/
/* 					<svg xmlns="http://www.w3.org/2000/svg" width="22" height="19" viewBox="0 0 22 19" fill="none">*/
/* 						<path fill-rule="evenodd" clip-rule="evenodd" d="M15.9405 2.29795H15.108V0.910461H13.7205V2.29796L4.56296 2.29795V0.910461H3.17546V2.29796L2.34297 2.29795C1.19537 2.29795 0.261719 3.23161 0.261719 4.37921V16.5892C0.261719 17.7368 1.19537 18.6705 2.34297 18.6705H15.9405C17.0881 18.6705 18.0217 17.7368 18.0217 16.5892V11.8704L16.6342 13.2579V16.5892C16.6342 16.9717 16.323 17.283 15.9405 17.283L2.34297 17.283C1.96043 17.283 1.64922 16.9717 1.64922 16.5892L1.64921 7.43171H16.6342V8.67839L18.0217 7.29089V4.37921C18.0217 3.23161 17.0881 2.29795 15.9405 2.29795ZM16.6342 6.04421H1.64921V4.37921C1.64921 3.99668 1.96042 3.68546 2.34296 3.68546H3.17546V5.07297L4.56296 5.07296V3.68546H13.7205V5.07297L15.108 5.07296V3.68546H15.9405C16.323 3.68546 16.6342 3.99668 16.6342 4.37921V6.04421Z" fill="white"/>*/
/* 						<path d="M4.28545 8.8886H2.89795V10.2761H4.28545V8.8886Z" fill="white"/>*/
/* 						<path d="M4.28545 11.6636H2.89795V13.0511H4.28545V11.6636Z" fill="white"/>*/
/* 						<path d="M7.06035 11.6636H5.67285V13.0511H7.06035V11.6636Z" fill="white"/>*/
/* 						<path d="M4.28545 14.4386H2.89795V15.8261H4.28545V14.4386Z" fill="white"/>*/
/* 						<path d="M7.06035 14.4386H5.67285V15.8261H7.06035V14.4386Z" fill="white"/>*/
/* 						<path d="M9.83526 14.4386H8.44775V15.8261H9.83526V14.4386Z" fill="white"/>*/
/* 						<path fill-rule="evenodd" clip-rule="evenodd" d="M6.77606 8.92754C7.14609 8.5575 7.75156 8.5575 8.12157 8.92754L12.7093 13.5152L19.7989 6.42564C20.1689 6.05563 20.7744 6.05563 21.1444 6.42564C21.5144 6.79567 21.5144 7.40114 21.1444 7.77115L13.3936 15.5219C13.2307 15.6848 13.0222 15.776 12.8083 15.7954C12.5297 15.827 12.2396 15.7366 12.0271 15.5241L6.77606 10.273C6.40603 9.90302 6.40603 9.29755 6.77606 8.92754Z" fill="white"/>*/
/* 					</svg>*/
/* 					Забронировать сейчас*/
/* 				</a>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="hotel__content">*/
/* 			{$ page.field_content|raw $}*/
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* */
/* {% if page.field_order_id %}*/
/* <section class="hotel-rooms">*/
/* 	<h2 class="section-title section-title--no-subtitle">Обзор номеров</h2>*/
/* 	<div class="section-subtitle"></div>*/
/* 	<div id="order-idplace-rooms"></div>*/
/* 	<script>*/
/* 		let iframeIDPR = document.createElement('iframe');*/
/* 		window.addEventListener('message', function (e) {*/
/* 			if(e.data.idplaceRoomsHeight) {*/
/* 				iframeIDPR.height = e.data.idplaceRoomsHeight;*/
/* 			}*/
/* 		});*/
/* 		iframeIDPR.src = 'https://order.id.place/{$ page.field_order_id|trim $}?getrooms=1';*/
/* 		iframeIDPR.scrolling = 'no';*/
/* 		iframeIDPR.setAttribute('frameborder', 0);*/
/* 		iframeIDPR.width = '100%';*/
/* 		iframeIDPR.height = 500;*/
/* 		document.querySelector('#order-idplace-rooms').appendChild(iframeIDPR);*/
/* 	</script>*/
/* </section>*/
/* 	*/
/* <section class="reservation" id="reservation">*/
/* 	<div class="cont">*/
/* 		<h2 class="section-title section-title--no-subtitle">Бронирование</div>*/
/* 		<div class="section-subtitle"></div>*/
/* 		<div id="order-idplace-reservation"></div>*/
/* 		<script>*/
/* 			let iframeIDPRES = document.createElement('iframe');*/
/* 			window.addEventListener('message', function (e) {*/
/* 				if(e.data.idplaceReservationHeight) {*/
/* 					iframeIDPRES.height = e.data.idplaceReservationHeight;*/
/* 				}*/
/* 			});*/
/* 			iframeIDPRES.src = 'https://order.id.place/{$ page.field_order_id|trim $}?theme=1';*/
/* 			iframeIDPRES.scrolling = 'no';*/
/* 			iframeIDPRES.setAttribute('frameborder', 0);*/
/* 			iframeIDPRES.width = '100%';*/
/* 			iframeIDPRES.height = 500;*/
/* 			document.querySelector('#order-idplace-reservation').appendChild(iframeIDPRES);*/
/* 		</script>*/
/* 	</div>*/
/* </div>*/
/* {% endif %}*/
/* */
/* {% if page.field_coords %}*/
/* 	<section class="hotel-map">*/
/* 		<div id="hotel-map" style="width: 100%; height: 500px;"></div>*/
/* 		<script src="https://api-maps.yandex.ru/2.1/?apikey=4956c4ec-ca4d-4735-b259-0ac91cd00cf0&lang=ru_RU" type="text/javascript"></script>*/
/* 		<script>*/
/* 			ymaps.ready(init);*/
/* 			function init() {*/
/* 				let myMap = new ymaps.Map("hotel-map", {*/
/* 						center: [{$ page.field_coords|trim|split(',')[0] $}, {$ page.field_coords|trim|split(',')[1] $}],*/
/* 						zoom: 13,*/
/* 						constrols: ['zoomControl']*/
/* 					}, {*/
/* 						searchControlProvider: 'yandex#search'*/
/* 					}),*/
/* */
/* 					myGeoObject = new ymaps.GeoObject({*/
/* 						geometry: {*/
/* 							type: "Point",*/
/* 							coordinates: [{$ page.field_coords|trim|split(',')[0] $}, {$ page.field_coords|trim|split(',')[1] $}]*/
/* 						}*/
/* 					})*/
/* 				*/
/* 					myMap.geoObjects.add(myGeoObject)*/
/* 					myMap.behaviors.disable('scrollZoom')*/
/* 			}*/
/* 		</script>*/
/* 	</section>*/
/* {% endif %}*/
/* */
/* {% include 'footer' %}*/
