<?php

/* module_types.announcement.city */
class __TwigTemplate_485c1f7e96fd58a0fcb8a30a607cb5750014004123c97cb22a34ef56095ba8de extends TwigBridge\Twig\Template
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
        $tags = array("if" => 1, "for" => 13);
        $filters = array("length" => 1, "default" => 1, "escape" => 19, "raw" => 65);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array('length', 'default', 'escape', 'raw'),
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
        if ((twig_length_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "pages", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "pages", array()), array())) : (array()))) > 0)) {
            // line 2
            echo "
\t<script src=\"/packages/perfect-scrollbar/0.4.11/min/perfect-scrollbar.with-mousewheel.min.js\"></script>
\t<link rel=\"stylesheet\" href=\"/packages/perfect-scrollbar/0.4.11/min/perfect-scrollbar.min.css\">
\t<script>
\t\t\$(function() {
\t\t\t\$('.module.announcement.layout_city .tab-pane').perfectScrollbar();
\t\t});
\t</script>

\t<div class=\"questions-bar\">
\t\t<ul class=\"nav nav-pills\" role=\"tablist\">
\t\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "pages", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 14
                echo "\t\t\t\t<li
\t\t\t\t\t";
                // line 15
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    // line 16
                    echo "\t\t\t\t\t\tclass=\"active\"
\t\t\t\t\t";
                }
                // line 18
                echo "\t\t\t\t>
\t\t\t\t\t<a data-toggle=\"tab\" href=\"#faq_";
                // line 19
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true));
                echo "\" role=\"tab\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 21
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true));
                echo "
\t\t\t\t\t
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t</ul>
\t</div>

\t<input class=\"search form-control\" placeholder=\"Поиск направления\" type=\"text\">

\t<div class=\"tab-content\">
\t\t";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "pages", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 33
                echo "\t\t\t<div
\t\t\t\tclass=\"
\t\t\t\t\ttab-pane
\t\t\t\t\t";
                // line 36
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    // line 37
                    echo "\t\t\t\t\t\tactive
\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t\"
\t\t\t\tid=\"faq_";
                // line 40
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true));
                echo "\"
\t\t\t>
\t\t\t\t";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute($context["category"], "active_sub_pages", array(), "any", false, true), "sortBy", array(0 => "order"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["category"], "active_sub_pages", array(), "any", false, true), "sortBy", array(0 => "order"), "method"), array())) : (array())));
                foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                    // line 43
                    echo "\t\t\t\t\t<div class=\"question\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
                    // line 45
                    if ((($this->getAttribute($context["city"], "field_image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["city"], "field_image", array()), "")) : (""))) {
                        // line 46
                        echo "\t\t\t\t\t\t\t<div class=\"media-img\">
\t\t\t\t\t\t\t\t<a class=\"pull\" href=\"";
                        // line 47
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["city"], "field_link", array()), "html", null, true));
                        echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"icon\"><i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t\t\t\t\t<img class=\"media-object\" src=\"/site/data/images/medium/";
                        // line 49
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["city"], "field_image", array()), "html", null, true));
                        echo "\">\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 53
                    echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 56
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["city"], "field_link", array()), "html", null, true));
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 57
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["city"], "title", array()), "html", null, true));
                    echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t

\t

\t\t\t\t\t\t<div class=\"display-none answer\">
\t\t\t\t\t\t\t";
                    // line 65
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->getAttribute($context["city"], "field_content", array()));
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "\t\t\t</div>
\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "\t</div>

";
        }
        // line 74
        echo "
<script>
// faq begin
\tvar MIN_WORD_LENGTH = 3;
\t
\t
\t\$('.module.type-announcement.layout-city').each(function(index, node) {
\t\tvar module = \$(node);
\t\tvar answers = module.find('.answer');
\t\tvar search = module.find('.search');
\t\tvar questions = module.find('.question');
\t\t
\t\tsearch.on('keyup', function() {
\t\t\tquestions.show();

\t\t\tvar words = [];
\t\t\t\$.each(search.val().toLowerCase().split(/[^\\w\\u00C0-\\u1FFF\\u2C00-\\uD7FF]/), function(index, word) {
\t\t\t\tif (word.length >= MIN_WORD_LENGTH) {
\t\t\t\t\twords.push(word);
\t\t\t\t}
\t\t\t});
\t\t\t
\t\t\tif (words.length > 0) {
\t\t\t\tquestions.each(function(index, node) {
\t\t\t\t\tvar question = \$(node);
\t\t\t\t\tvar hide = true;
\t\t\t\t\tvar title = question.find('.title a').text().toLowerCase();
\t\t\t\t\t
\t\t\t\t\t\$.each(words, function(index, word) {
\t\t\t\t\t\tif (title.indexOf(word) >= 0) {
\t\t\t\t\t\t\thide = false;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\tif (hide) {
\t\t\t\t\t\tquestion.hide();
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t});
\t\t
\t\tquestions.each(function(index, node) {
\t\t\tvar question = \$(node);
\t\t\tvar title = question.find('.title a');
\t\t\tvar answer = question.find('.answer');

\t\t\t/*title.click(function(event) {
\t\t\t\tevent.preventDefault();
\t\t\t\t
\t\t\t\tif (answer.is(':hidden')) {
\t\t\t\t\tanswers.finish().slideUp();
\t\t\t\t\tanswer.finish().slideDown();
\t\t\t\t}
\t\t\t});*/
\t\t});
\t});
\t// faq end
</script>
";
    }

    public function getTemplateName()
    {
        return "module_types.announcement.city";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 74,  225 => 71,  210 => 69,  200 => 65,  189 => 57,  185 => 56,  180 => 53,  173 => 49,  168 => 47,  165 => 46,  163 => 45,  159 => 43,  155 => 42,  150 => 40,  147 => 39,  143 => 37,  141 => 36,  136 => 33,  119 => 32,  111 => 26,  92 => 21,  87 => 19,  84 => 18,  80 => 16,  78 => 15,  75 => 14,  58 => 13,  45 => 2,  43 => 1,);
    }
}
/* {% if config.pages|default([])|length > 0 %}*/
/* */
/* 	<script src="/packages/perfect-scrollbar/0.4.11/min/perfect-scrollbar.with-mousewheel.min.js"></script>*/
/* 	<link rel="stylesheet" href="/packages/perfect-scrollbar/0.4.11/min/perfect-scrollbar.min.css">*/
/* 	<script>*/
/* 		$(function() {*/
/* 			$('.module.announcement.layout_city .tab-pane').perfectScrollbar();*/
/* 		});*/
/* 	</script>*/
/* */
/* 	<div class="questions-bar">*/
/* 		<ul class="nav nav-pills" role="tablist">*/
/* 			{% for category in config.pages %}*/
/* 				<li*/
/* 					{% if loop.index == 1 %}*/
/* 						class="active"*/
/* 					{% endif %}*/
/* 				>*/
/* 					<a data-toggle="tab" href="#faq_{$ category.id $}" role="tab">*/
/* 						*/
/* 						{$ category.title $}*/
/* 					*/
/* 					</a>*/
/* 				</li>*/
/* 			{% endfor %}*/
/* 		</ul>*/
/* 	</div>*/
/* */
/* 	<input class="search form-control" placeholder="Поиск направления" type="text">*/
/* */
/* 	<div class="tab-content">*/
/* 		{% for category in config.pages %}*/
/* 			<div*/
/* 				class="*/
/* 					tab-pane*/
/* 					{% if loop.index == 1 %}*/
/* 						active*/
/* 					{% endif %}*/
/* 				"*/
/* 				id="faq_{$ category.id $}"*/
/* 			>*/
/* 				{% for city in category.active_sub_pages.sortBy('order')|default([]) %}*/
/* 					<div class="question">*/
/* 						*/
/* 						{% if city.field_image|default('') %}*/
/* 							<div class="media-img">*/
/* 								<a class="pull" href="{$ city.field_link $}">*/
/* 									<div class="icon"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></div>*/
/* 									<img class="media-object" src="/site/data/images/medium/{$ city.field_image $}">	*/
/* 								</a>*/
/* 							</div>*/
/* 						{% endif %}*/
/* 						*/
/* 						*/
/* 						<div class="title">*/
/* 							<a href="{$ city.field_link $}">*/
/* 								{$ city.title $}*/
/* 							</a>*/
/* 						</div>*/
/* 							*/
/* */
/* 	*/
/* */
/* 						<div class="display-none answer">*/
/* 							{$ city.field_content|raw $}*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 		{% endfor %}*/
/* 	</div>*/
/* */
/* {% endif %}*/
/* */
/* <script>*/
/* // faq begin*/
/* 	var MIN_WORD_LENGTH = 3;*/
/* 	*/
/* 	*/
/* 	$('.module.type-announcement.layout-city').each(function(index, node) {*/
/* 		var module = $(node);*/
/* 		var answers = module.find('.answer');*/
/* 		var search = module.find('.search');*/
/* 		var questions = module.find('.question');*/
/* 		*/
/* 		search.on('keyup', function() {*/
/* 			questions.show();*/
/* */
/* 			var words = [];*/
/* 			$.each(search.val().toLowerCase().split(/[^\w\u00C0-\u1FFF\u2C00-\uD7FF]/), function(index, word) {*/
/* 				if (word.length >= MIN_WORD_LENGTH) {*/
/* 					words.push(word);*/
/* 				}*/
/* 			});*/
/* 			*/
/* 			if (words.length > 0) {*/
/* 				questions.each(function(index, node) {*/
/* 					var question = $(node);*/
/* 					var hide = true;*/
/* 					var title = question.find('.title a').text().toLowerCase();*/
/* 					*/
/* 					$.each(words, function(index, word) {*/
/* 						if (title.indexOf(word) >= 0) {*/
/* 							hide = false;*/
/* 						}*/
/* 					});*/
/* 					*/
/* 					if (hide) {*/
/* 						question.hide();*/
/* 					}*/
/* 				});*/
/* 			}*/
/* 		});*/
/* 		*/
/* 		questions.each(function(index, node) {*/
/* 			var question = $(node);*/
/* 			var title = question.find('.title a');*/
/* 			var answer = question.find('.answer');*/
/* */
/* 			/*title.click(function(event) {*/
/* 				event.preventDefault();*/
/* 				*/
/* 				if (answer.is(':hidden')) {*/
/* 					answers.finish().slideUp();*/
/* 					answer.finish().slideDown();*/
/* 				}*/
/* 			});*//* */
/* 		});*/
/* 	});*/
/* 	// faq end*/
/* </script>*/
/* */
