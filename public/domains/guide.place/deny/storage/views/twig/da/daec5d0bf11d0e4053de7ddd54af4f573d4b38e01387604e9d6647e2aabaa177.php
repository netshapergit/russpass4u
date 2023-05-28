<?php

/* vfb */
class __TwigTemplate_7543f01c9eb9cfbf24b878551cc680f5197054fa9e9f409c2d58976fd84f89ca extends TwigBridge\Twig\Template
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

        // line 1
        echo "<div class=\"vfb\">
\t<div class=\"vfb__title\">
\t\tУже были здесь? <br>Расскажите об этом!
\t</div>
\t<div class=\"vfb__main\">
\t\t<div class=\"vfb-form\">
\t\t\t<div class=\"vfb-form__group vfb-form__group--grid\">
\t\t\t\t<div class=\"vfb-form__input\">
\t\t\t\t\t<input type=\"text\" placeholder=\"Имя\">
\t\t\t\t</div>
\t\t\t\t<div class=\"vfb-form__input\">
\t\t\t\t\t<input type=\"email\" placeholder=\"E-mail\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"vfb-form__group\">
\t\t\t\t<div class=\"vfb-form__input vfb-form__input--area\">
\t\t\t\t\t<textarea placeholder=\"Вот, что я думаю...\"></textarea>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"vfb-form__group vfb-form__group--grid\">
\t\t\t\t<div class=\"vfb-form__warn\">
\t\t\t\t\t*Все отзывы проходят модерацию <br>в течение 24 часов с момента отправки
\t\t\t\t</div>
\t\t\t\t<div class=\"vfb-form__action\">
\t\t\t\t\t<button style=\"    background: none;
    border: none;\" class=\"vfb-form__submitbtn\" type=\"button\">ДОБАВИТЬ ОТЗЫВ</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "vfb";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* <div class="vfb">*/
/* 	<div class="vfb__title">*/
/* 		Уже были здесь? <br>Расскажите об этом!*/
/* 	</div>*/
/* 	<div class="vfb__main">*/
/* 		<div class="vfb-form">*/
/* 			<div class="vfb-form__group vfb-form__group--grid">*/
/* 				<div class="vfb-form__input">*/
/* 					<input type="text" placeholder="Имя">*/
/* 				</div>*/
/* 				<div class="vfb-form__input">*/
/* 					<input type="email" placeholder="E-mail">*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="vfb-form__group">*/
/* 				<div class="vfb-form__input vfb-form__input--area">*/
/* 					<textarea placeholder="Вот, что я думаю..."></textarea>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="vfb-form__group vfb-form__group--grid">*/
/* 				<div class="vfb-form__warn">*/
/* 					*Все отзывы проходят модерацию <br>в течение 24 часов с момента отправки*/
/* 				</div>*/
/* 				<div class="vfb-form__action">*/
/* 					<button style="    background: none;*/
/*     border: none;" class="vfb-form__submitbtn" type="button">ДОБАВИТЬ ОТЗЫВ</button>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
