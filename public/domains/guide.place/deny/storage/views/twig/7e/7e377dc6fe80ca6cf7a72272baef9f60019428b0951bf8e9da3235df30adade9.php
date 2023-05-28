<?php

/* layouts.excurse_old */
class __TwigTemplate_ae9b3f1f7c6c4975f7d6c07bdb50f7705ca8eeb56ca6fd613338a573dabbd8c0 extends TwigBridge\Twig\Template
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
        $filters = array("escape" => 4, "raw" => 110, "trim" => 127, "split" => 167);
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
        $this->loadTemplate("header", "layouts.excurse_old", 1)->display($context);
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
\t\t
\t\t\$('#history-back').on('click', function() {
\t\t\twindow.history.back()
\t\t})
\t\t\t
\t})
</script>
";
        }
        // line 56
        echo "
<div class=\"article-top\">
\t\t<div class=\"article-top__img\">
\t\t\t<img src=\"/site/data/images/large/";
        // line 59
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_image", array()), "html", null, true));
        echo "\">
\t\t</div>
\t</div>

<section class=\"hotel\">
\t<div class=\"cont\">
\t\t<div class=\"hotel__main\">
\t\t\t<div class=\"hotel__main-item\">
\t\t\t\t<h1 class=\"hotel-title\">";
        // line 67
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array()), "html", null, true));
        echo "</h1>
\t\t\t\t
\t\t\t\t";
        // line 69
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_address", array())) {
            // line 70
            echo "\t\t\t\t<div class=\"hotel-address\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"25\" viewBox=\"0 0 19 25\" fill=\"none\">
<path d=\"M10.1259 24.6906C10.0912 24.7253 10.0912 24.7253 10.0566 24.7599C10.022 24.7599 10.022 24.7945 9.98734 24.7945C9.95271 24.7945 9.91808 24.8292 9.88344 24.8292C9.84881 24.8638 9.77955 24.8638 9.74492 24.8638C9.71028 24.8638 9.64102 24.8638 9.60639 24.8984C9.57176 24.8984 9.57176 24.8984 9.53712 24.8984C9.50249 24.8984 9.43323 24.8984 9.39859 24.8638C9.36396 24.8638 9.2947 24.8292 9.26007 24.8292L9.15617 24.7945C9.12154 24.7945 9.08691 24.7599 9.08691 24.7599C9.05227 24.7253 9.05227 24.7253 9.01764 24.6906C8.22111 24.0326 7.4592 23.3054 6.6973 22.4742C5.97002 21.6777 5.27738 20.8119 4.61937 19.9114C3.996 19.0456 3.44188 18.1452 2.9224 17.2101C2.43756 16.3097 2.02197 15.3746 1.67565 14.4742C1.60639 14.2318 1.60639 14.024 1.71028 13.8162C1.81418 13.6084 1.98734 13.4352 2.19513 13.366C2.43756 13.2967 2.64535 13.2967 2.85314 13.4006C3.06093 13.5045 3.23409 13.6777 3.30336 13.8855C3.61505 14.7166 3.996 15.5824 4.44621 16.4136C4.89643 17.2794 5.45054 18.1106 6.03929 18.9417C6.5934 19.7383 7.21678 20.5002 7.84015 21.1928C8.39427 21.8162 8.98301 22.4049 9.57176 22.9244C10.4722 22.1279 11.3726 21.1582 12.2384 20.1192C13.1042 19.0456 13.9008 17.8681 14.5934 16.656C15.2514 15.4785 15.7709 14.2664 16.1172 13.0543C16.4289 11.9461 16.6367 10.8032 16.6367 9.69497C16.6367 8.72528 16.4635 7.82484 16.1172 6.99368C15.7709 6.12787 15.2514 5.36597 14.5934 4.70796C13.9354 4.04995 13.1735 3.53047 12.3077 3.18415C11.4765 2.83783 10.5761 2.66467 9.60639 2.66467C8.63669 2.66467 7.73626 2.83783 6.90509 3.18415C6.03929 3.53047 5.27738 4.04995 4.61937 4.70796C3.96137 5.36597 3.44189 6.12787 3.09556 6.99368C2.74924 7.82484 2.57608 8.72528 2.57608 9.69497V9.97203V10.2145L2.61072 10.4915L2.64535 10.7686C2.67998 11.011 2.61072 11.2188 2.43756 11.3919C2.29903 11.5651 2.09124 11.669 1.84881 11.7036C1.60639 11.7383 1.39859 11.669 1.22543 11.4958C1.05227 11.3573 0.948379 11.1495 0.913746 10.9071L0.879114 10.5954L0.844482 10.2837V9.97203V9.66034C0.844482 8.48285 1.08691 7.34 1.50249 6.30103C1.95271 5.22744 2.61072 4.25774 3.40725 3.46121C4.20379 2.66467 5.17349 2.00666 6.24708 1.55645C7.28604 1.14086 8.4289 0.898438 9.60639 0.898438C10.7839 0.898438 11.9267 1.14086 12.9657 1.55645C14.0393 2.00666 15.009 2.66467 15.8055 3.46121C16.6021 4.25774 17.2601 5.22744 17.7103 6.30103C18.1259 7.34 18.3683 8.48285 18.3683 9.66034C18.3683 10.9071 18.1605 12.1885 17.7795 13.4699C17.3986 14.8205 16.8099 16.1712 16.0826 17.4525C15.3207 18.8378 14.4202 20.1538 13.4159 21.366C12.377 22.6474 11.2341 23.7556 10.1259 24.7253V24.6906ZM9.57176 6.4742C10.0566 6.4742 10.5415 6.57809 10.9917 6.75125C11.3726 6.92441 11.7536 7.1322 12.0653 7.44389L12.1692 7.54779C12.5155 7.89411 12.7925 8.27506 12.9657 8.75991C13.1389 9.21013 13.2428 9.66034 13.2428 10.1798C13.2428 10.6647 13.1389 11.1495 12.9657 11.5997C12.7925 12.05 12.5155 12.4655 12.1692 12.8119C11.8228 13.1582 11.4419 13.4352 10.9917 13.6084C10.5415 13.7816 10.0912 13.8855 9.57176 13.8855C9.08691 13.8855 8.60206 13.7816 8.15184 13.6084C7.84015 13.4699 7.52847 13.2967 7.25141 13.0889L6.97435 12.8119C6.62803 12.4655 6.35098 12.0846 6.17782 11.5997C6.00466 11.1495 5.90076 10.6993 5.90076 10.1798C5.90076 9.69497 6.00466 9.21013 6.17782 8.75991C6.35098 8.30969 6.62803 7.89411 6.97435 7.58242C7.32067 7.2361 7.70163 6.95904 8.15184 6.78588C8.60206 6.61272 9.05227 6.50883 9.57176 6.50883V6.4742ZM10.8531 8.72528C10.68 8.58675 10.5068 8.44822 10.299 8.37896C10.0566 8.27506 9.81418 8.24043 9.57176 8.24043C9.2947 8.24043 9.05227 8.27506 8.84448 8.37896C8.60206 8.48285 8.39427 8.62138 8.22111 8.79454C8.04795 8.9677 7.90942 9.17549 7.80552 9.41792C7.70163 9.66034 7.66699 9.90277 7.66699 10.1452C7.66699 10.4222 7.70163 10.6647 7.80552 10.8725C7.90942 11.1149 8.04795 11.3227 8.22111 11.4958L8.29037 11.5651C8.46353 11.7036 8.63669 11.8422 8.84448 11.9461C9.08691 12.05 9.32933 12.0846 9.57176 12.0846C9.84881 12.0846 10.0912 12.05 10.299 11.9461C10.5415 11.8422 10.7492 11.7036 10.9224 11.5305C11.0956 11.3573 11.2341 11.1495 11.338 10.9071C11.4419 10.6647 11.4765 10.4222 11.4765 10.1798C11.4765 9.90277 11.4419 9.66034 11.338 9.45255C11.2341 9.21013 11.0956 9.00233 10.9224 8.82917L10.8531 8.75991V8.72528Z\" fill=\"#8a8a8a\"/>
</svg>
\t\t\t\t\t";
            // line 74
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_address", array()), "html", null, true));
            echo "
\t\t\t\t\t(";
            // line 75
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_coords", array()), "html", null, true));
            echo ")
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 78
        echo "\t\t\t\t
\t\t\t\t
\t\t\t\t";
        // line 80
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_age_min", array())) {
            // line 81
            echo "\t\t\t\t<div class=\"hotel-address\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"19\" viewBox=\"0 0 16 17\" fill=\"none\">
<path d=\"M7.81429 0C9.07367 0 10.2163 0.515321 11.042 1.34712C11.8677 2.17891 12.3792 3.32998 12.3792 4.59868C12.3792 5.86738 11.8677 7.01845 11.042 7.85025C10.2163 8.68204 9.07367 9.19736 7.81429 9.19736C6.55491 9.19736 5.41229 8.68204 4.5866 7.85025C3.76092 7.01845 3.24938 5.86738 3.24938 4.59868C3.24938 3.32998 3.76092 2.17891 4.5866 1.34712C5.41229 0.515321 6.55491 0 7.81429 0ZM6.18237 10.0488H9.42118C10.9669 10.0488 12.3736 10.6845 13.3911 11.7124C14.4087 12.7374 15.0425 14.1545 15.0425 15.7117C15.0425 16.0646 14.898 16.3867 14.6672 16.6191L14.6644 16.6219C14.4337 16.8544 14.114 17 13.7637 17H1.83988C1.48958 17 1.16987 16.8544 0.939127 16.6219L0.936347 16.6191C0.7056 16.3867 0.561035 16.0646 0.561035 15.7117C0.561035 14.1545 1.19212 12.7374 2.21241 11.7124C3.22992 10.6873 4.63664 10.0488 6.18237 10.0488ZM9.42118 11.4771H6.18237C5.02864 11.4771 3.97776 11.9532 3.21602 12.7206C2.48486 13.4572 2.02058 14.4598 1.98444 15.5689H13.6219C13.5857 14.4626 13.1187 13.4572 12.3903 12.7206C11.6286 11.9532 10.5777 11.4771 9.42396 11.4771H9.42118ZM10.0411 2.35815C9.47122 1.78402 8.68445 1.42834 7.81429 1.42834C6.94412 1.42834 6.15735 1.78402 5.58744 2.35815C5.01752 2.93229 4.66445 3.72488 4.66445 4.60148C4.66445 5.47809 5.01752 6.27067 5.58744 6.84481C6.15735 7.41895 6.94412 7.77463 7.81429 7.77463C8.68445 7.77463 9.47122 7.41895 10.0411 6.84481C10.6111 6.27067 10.9641 5.47809 10.9641 4.60148C10.9641 3.72488 10.6111 2.93229 10.0411 2.35815Z\" fill=\"#8a8a8a\"></path>
</svg>
\t
\t\t\t\t\t";
            // line 86
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_age_min", array()), "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"hotel__main-item\">
\t\t\t\t";
        // line 92
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_order_id", array())) {
            // line 93
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
        // line 107
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"hotel__content\">
\t\t\t";
        // line 110
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_content", array()));
        echo "
\t\t</div>
\t</div>
</section>

";
        // line 115
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_order_id", array())) {
            // line 116
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
            // line 127
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
            // line 148
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
        // line 158
        echo "
";
        // line 159
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_coords", array())) {
            // line 160
            echo "\t<section class=\"hotel-map\">
\t\t<div id=\"hotel-map\" style=\"width: 100%; height: 500px;\"></div>
\t\t<script src=\"https://api-maps.yandex.ru/2.1/?apikey=4956c4ec-ca4d-4735-b259-0ac91cd00cf0&lang=ru_RU\" type=\"text/javascript\"></script>
\t\t<script>
\t\t\tymaps.ready(init);
\t\t\tfunction init() {
\t\t\t\tlet myMap = new ymaps.Map(\"hotel-map\", {
\t\t\t\t\t\tcenter: [";
            // line 167
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
            // line 177
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
        // line 187
        echo "
";
        // line 188
        $this->loadTemplate("footer", "layouts.excurse_old", 188)->display($context);
    }

    public function getTemplateName()
    {
        return "layouts.excurse_old";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 188,  296 => 187,  281 => 177,  266 => 167,  257 => 160,  255 => 159,  252 => 158,  239 => 148,  215 => 127,  202 => 116,  200 => 115,  192 => 110,  187 => 107,  171 => 93,  169 => 92,  164 => 89,  158 => 86,  151 => 81,  149 => 80,  145 => 78,  139 => 75,  135 => 74,  129 => 70,  127 => 69,  122 => 67,  111 => 59,  106 => 56,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
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
/* 		*/
/* 		$('#history-back').on('click', function() {*/
/* 			window.history.back()*/
/* 		})*/
/* 			*/
/* 	})*/
/* </script>*/
/* {% endif %}*/
/* */
/* <div class="article-top">*/
/* 		<div class="article-top__img">*/
/* 			<img src="/site/data/images/large/{$ page.field_image $}">*/
/* 		</div>*/
/* 	</div>*/
/* */
/* <section class="hotel">*/
/* 	<div class="cont">*/
/* 		<div class="hotel__main">*/
/* 			<div class="hotel__main-item">*/
/* 				<h1 class="hotel-title">{$ page.field_header $}</h1>*/
/* 				*/
/* 				{% if page.field_address %}*/
/* 				<div class="hotel-address">*/
/* 									<svg xmlns="http://www.w3.org/2000/svg" width="19" height="25" viewBox="0 0 19 25" fill="none">*/
/* <path d="M10.1259 24.6906C10.0912 24.7253 10.0912 24.7253 10.0566 24.7599C10.022 24.7599 10.022 24.7945 9.98734 24.7945C9.95271 24.7945 9.91808 24.8292 9.88344 24.8292C9.84881 24.8638 9.77955 24.8638 9.74492 24.8638C9.71028 24.8638 9.64102 24.8638 9.60639 24.8984C9.57176 24.8984 9.57176 24.8984 9.53712 24.8984C9.50249 24.8984 9.43323 24.8984 9.39859 24.8638C9.36396 24.8638 9.2947 24.8292 9.26007 24.8292L9.15617 24.7945C9.12154 24.7945 9.08691 24.7599 9.08691 24.7599C9.05227 24.7253 9.05227 24.7253 9.01764 24.6906C8.22111 24.0326 7.4592 23.3054 6.6973 22.4742C5.97002 21.6777 5.27738 20.8119 4.61937 19.9114C3.996 19.0456 3.44188 18.1452 2.9224 17.2101C2.43756 16.3097 2.02197 15.3746 1.67565 14.4742C1.60639 14.2318 1.60639 14.024 1.71028 13.8162C1.81418 13.6084 1.98734 13.4352 2.19513 13.366C2.43756 13.2967 2.64535 13.2967 2.85314 13.4006C3.06093 13.5045 3.23409 13.6777 3.30336 13.8855C3.61505 14.7166 3.996 15.5824 4.44621 16.4136C4.89643 17.2794 5.45054 18.1106 6.03929 18.9417C6.5934 19.7383 7.21678 20.5002 7.84015 21.1928C8.39427 21.8162 8.98301 22.4049 9.57176 22.9244C10.4722 22.1279 11.3726 21.1582 12.2384 20.1192C13.1042 19.0456 13.9008 17.8681 14.5934 16.656C15.2514 15.4785 15.7709 14.2664 16.1172 13.0543C16.4289 11.9461 16.6367 10.8032 16.6367 9.69497C16.6367 8.72528 16.4635 7.82484 16.1172 6.99368C15.7709 6.12787 15.2514 5.36597 14.5934 4.70796C13.9354 4.04995 13.1735 3.53047 12.3077 3.18415C11.4765 2.83783 10.5761 2.66467 9.60639 2.66467C8.63669 2.66467 7.73626 2.83783 6.90509 3.18415C6.03929 3.53047 5.27738 4.04995 4.61937 4.70796C3.96137 5.36597 3.44189 6.12787 3.09556 6.99368C2.74924 7.82484 2.57608 8.72528 2.57608 9.69497V9.97203V10.2145L2.61072 10.4915L2.64535 10.7686C2.67998 11.011 2.61072 11.2188 2.43756 11.3919C2.29903 11.5651 2.09124 11.669 1.84881 11.7036C1.60639 11.7383 1.39859 11.669 1.22543 11.4958C1.05227 11.3573 0.948379 11.1495 0.913746 10.9071L0.879114 10.5954L0.844482 10.2837V9.97203V9.66034C0.844482 8.48285 1.08691 7.34 1.50249 6.30103C1.95271 5.22744 2.61072 4.25774 3.40725 3.46121C4.20379 2.66467 5.17349 2.00666 6.24708 1.55645C7.28604 1.14086 8.4289 0.898438 9.60639 0.898438C10.7839 0.898438 11.9267 1.14086 12.9657 1.55645C14.0393 2.00666 15.009 2.66467 15.8055 3.46121C16.6021 4.25774 17.2601 5.22744 17.7103 6.30103C18.1259 7.34 18.3683 8.48285 18.3683 9.66034C18.3683 10.9071 18.1605 12.1885 17.7795 13.4699C17.3986 14.8205 16.8099 16.1712 16.0826 17.4525C15.3207 18.8378 14.4202 20.1538 13.4159 21.366C12.377 22.6474 11.2341 23.7556 10.1259 24.7253V24.6906ZM9.57176 6.4742C10.0566 6.4742 10.5415 6.57809 10.9917 6.75125C11.3726 6.92441 11.7536 7.1322 12.0653 7.44389L12.1692 7.54779C12.5155 7.89411 12.7925 8.27506 12.9657 8.75991C13.1389 9.21013 13.2428 9.66034 13.2428 10.1798C13.2428 10.6647 13.1389 11.1495 12.9657 11.5997C12.7925 12.05 12.5155 12.4655 12.1692 12.8119C11.8228 13.1582 11.4419 13.4352 10.9917 13.6084C10.5415 13.7816 10.0912 13.8855 9.57176 13.8855C9.08691 13.8855 8.60206 13.7816 8.15184 13.6084C7.84015 13.4699 7.52847 13.2967 7.25141 13.0889L6.97435 12.8119C6.62803 12.4655 6.35098 12.0846 6.17782 11.5997C6.00466 11.1495 5.90076 10.6993 5.90076 10.1798C5.90076 9.69497 6.00466 9.21013 6.17782 8.75991C6.35098 8.30969 6.62803 7.89411 6.97435 7.58242C7.32067 7.2361 7.70163 6.95904 8.15184 6.78588C8.60206 6.61272 9.05227 6.50883 9.57176 6.50883V6.4742ZM10.8531 8.72528C10.68 8.58675 10.5068 8.44822 10.299 8.37896C10.0566 8.27506 9.81418 8.24043 9.57176 8.24043C9.2947 8.24043 9.05227 8.27506 8.84448 8.37896C8.60206 8.48285 8.39427 8.62138 8.22111 8.79454C8.04795 8.9677 7.90942 9.17549 7.80552 9.41792C7.70163 9.66034 7.66699 9.90277 7.66699 10.1452C7.66699 10.4222 7.70163 10.6647 7.80552 10.8725C7.90942 11.1149 8.04795 11.3227 8.22111 11.4958L8.29037 11.5651C8.46353 11.7036 8.63669 11.8422 8.84448 11.9461C9.08691 12.05 9.32933 12.0846 9.57176 12.0846C9.84881 12.0846 10.0912 12.05 10.299 11.9461C10.5415 11.8422 10.7492 11.7036 10.9224 11.5305C11.0956 11.3573 11.2341 11.1495 11.338 10.9071C11.4419 10.6647 11.4765 10.4222 11.4765 10.1798C11.4765 9.90277 11.4419 9.66034 11.338 9.45255C11.2341 9.21013 11.0956 9.00233 10.9224 8.82917L10.8531 8.75991V8.72528Z" fill="#8a8a8a"/>*/
/* </svg>*/
/* 					{$ page.field_address $}*/
/* 					({$ page.field_coords $})*/
/* 				</div>*/
/* 				{% endif %}*/
/* 				*/
/* 				*/
/* 				{% if page.field_age_min %}*/
/* 				<div class="hotel-address">*/
/* 						<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 16 17" fill="none">*/
/* <path d="M7.81429 0C9.07367 0 10.2163 0.515321 11.042 1.34712C11.8677 2.17891 12.3792 3.32998 12.3792 4.59868C12.3792 5.86738 11.8677 7.01845 11.042 7.85025C10.2163 8.68204 9.07367 9.19736 7.81429 9.19736C6.55491 9.19736 5.41229 8.68204 4.5866 7.85025C3.76092 7.01845 3.24938 5.86738 3.24938 4.59868C3.24938 3.32998 3.76092 2.17891 4.5866 1.34712C5.41229 0.515321 6.55491 0 7.81429 0ZM6.18237 10.0488H9.42118C10.9669 10.0488 12.3736 10.6845 13.3911 11.7124C14.4087 12.7374 15.0425 14.1545 15.0425 15.7117C15.0425 16.0646 14.898 16.3867 14.6672 16.6191L14.6644 16.6219C14.4337 16.8544 14.114 17 13.7637 17H1.83988C1.48958 17 1.16987 16.8544 0.939127 16.6219L0.936347 16.6191C0.7056 16.3867 0.561035 16.0646 0.561035 15.7117C0.561035 14.1545 1.19212 12.7374 2.21241 11.7124C3.22992 10.6873 4.63664 10.0488 6.18237 10.0488ZM9.42118 11.4771H6.18237C5.02864 11.4771 3.97776 11.9532 3.21602 12.7206C2.48486 13.4572 2.02058 14.4598 1.98444 15.5689H13.6219C13.5857 14.4626 13.1187 13.4572 12.3903 12.7206C11.6286 11.9532 10.5777 11.4771 9.42396 11.4771H9.42118ZM10.0411 2.35815C9.47122 1.78402 8.68445 1.42834 7.81429 1.42834C6.94412 1.42834 6.15735 1.78402 5.58744 2.35815C5.01752 2.93229 4.66445 3.72488 4.66445 4.60148C4.66445 5.47809 5.01752 6.27067 5.58744 6.84481C6.15735 7.41895 6.94412 7.77463 7.81429 7.77463C8.68445 7.77463 9.47122 7.41895 10.0411 6.84481C10.6111 6.27067 10.9641 5.47809 10.9641 4.60148C10.9641 3.72488 10.6111 2.93229 10.0411 2.35815Z" fill="#8a8a8a"></path>*/
/* </svg>*/
/* 	*/
/* 					{$ page.field_age_min $}*/
/* 				</div>*/
/* 				{% endif %}*/
/* 				*/
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
