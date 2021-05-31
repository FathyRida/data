<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/marsa/templates/node/node--segment.html.twig */
class __TwigTemplate_7ba93e3ea4219ea255a7b3e020240133f3b0482927f02255eca81883bcad0c6c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "


<div class=\"container-fluid seg_detail \">

    <div class=\"container-fluid seg_cards\">
        <div class=\"container description\">
            <div class=\"col-12\">
                ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "
            </div>
        </div>
    </div>
      ";
        // line 13
        if (twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_chiffres_cles", [], "any", false, false, true, 13))))) {
            // line 14
            echo "        <div class=\"container-fluid seg_cards\" id=\"chiffres_cles_1\">
            <div class=\"container\">
                <div class=\"col-12 p-0\">
                    <div class=\"row m-0 p-0\" >

                        ";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_chiffres_cles", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "


                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 27
        echo "      ";
        if (twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_atouts", [], "any", false, false, true, 27))))) {
            // line 28
            echo "        <div class=\"container\">

            <div class=\"col-12 seg_body\">
                <h2>";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Assets"));
            echo "</h2>
                ";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_atouts", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        // line 36
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_photos", [], "any", false, false, true, 36), "value", [], "any", false, false, true, 36)) {
            // line 37
            echo "
        <div class=\"container-fluid filiale_slider node_segment\">
            <div class=\"outer container\">
                <div id=\"big\" class=\"owl-carousel owl-theme\">
                    ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_photos", [], "any", false, false, true, 41)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["#items"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 42
                echo "
                        <div class=\"item\">
                            <img src=\"";
                // line 44
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_tweak\TwigExtension']->imageStyle($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["photo"], "entity", [], "any", false, false, true, 44), "field_media_image", [], "any", false, false, true, 44), "entity", [], "any", false, false, true, 44), "uri", [], "any", false, false, true, 44), "value", [], "any", false, false, true, 44), 44, $this->source), "image_detail_long"), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["photo"], "entity", [], "any", false, false, true, 44), "field_media_image", [], "any", false, false, true, 44), "entity", [], "any", false, false, true, 44), "filename", [], "any", false, false, true, 44), "value", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                echo "\">
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo " 

                </div>
                <div id=\"thumbs\" class=\"owl-carousel owl-theme\">
                    ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_photos", [], "any", false, false, true, 50)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["#items"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 51
                echo "                        <div class=\"item\">
                            <img src=\"";
                // line 52
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_tweak\TwigExtension']->imageStyle($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["photo"], "entity", [], "any", false, false, true, 52), "field_media_image", [], "any", false, false, true, 52), "entity", [], "any", false, false, true, 52), "uri", [], "any", false, false, true, 52), "value", [], "any", false, false, true, 52), 52, $this->source), "image_detail_thumb"), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["photo"], "entity", [], "any", false, false, true, 52), "field_media_image", [], "any", false, false, true, 52), "entity", [], "any", false, false, true, 52), "filename", [], "any", false, false, true, 52), "value", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                echo "\">
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo " 

                </div>
            </div>
        </div>

    ";
        } else {
            // line 61
            echo "        <div class=\"global_img\">
            ";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 65
        echo "    
  
  
</div>

";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("ports_and_terminals", "block_other"), "html", null, true);
        echo " 
<script>

var counted = 0;
\$(window).scroll(function() {

  var oTop = \$('#chiffres_cles_1').offset().top - window.innerHeight;
  if (counted == 0 && \$(window).scrollTop() > oTop) {
    \$('.num').each(function() {
      var \$this = \$(this),
        countTo = \$this.attr('data-count');
      \$({
        countNum: \$this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 2000,
          easing: 'swing',
          step: function() {
            \$this.text(Math.floor(this.countNum));
          },
          complete: function() {
            \$this.text(this.countNum);
          }

        });
    });
    counted = 1;
  }

});
</script>";
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/node/node--segment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 70,  165 => 65,  159 => 62,  156 => 61,  147 => 54,  136 => 52,  133 => 51,  129 => 50,  123 => 46,  112 => 44,  108 => 42,  104 => 41,  98 => 37,  95 => 36,  88 => 32,  84 => 31,  79 => 28,  76 => 27,  65 => 19,  58 => 14,  56 => 13,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/node/node--segment.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/node/node--segment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13, "for" => 41);
        static $filters = array("escape" => 9, "trim" => 13, "striptags" => 13, "render" => 13, "t" => 31, "image_style" => 44);
        static $functions = array("drupal_view" => 70);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'trim', 'striptags', 'render', 't', 'image_style'],
                ['drupal_view']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
