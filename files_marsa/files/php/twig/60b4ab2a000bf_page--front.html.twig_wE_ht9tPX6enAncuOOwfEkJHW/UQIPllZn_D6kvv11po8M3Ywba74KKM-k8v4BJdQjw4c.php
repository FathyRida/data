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

/* themes/custom/marsa/templates/system/page--front.html.twig */
class __TwigTemplate_c0a48808e8275ff430bc441c6bcc6d8a9233304e99d6adb12dc9bc1b980601e9 extends \Twig\Template
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
        // line 48
        $this->loadTemplate("@marsa/partials/header.html.twig", "themes/custom/marsa/templates/system/page--front.html.twig", 48)->display($context);
        // line 49
        echo "<!-- End of header -->


  ";
        // line 96
        echo "    <div class=\"fixed-right-menu\">
        <div class=\"bouton-fixed\">
            <a href=\"#\" target=\"_blank\">
                <div class=\"icone\"><img src=\"";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 99, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 99, $this->source)), "html", null, true);
        echo "/assets/images_icons/cont.png\"></div>
                <div class=\"informations\"><span class=\"title\">Suivi conteneurs</span></div>
            </a>
        </div>
        <div class=\"bouton-fixed\">
            <a href=\"#\" target=\"_blank\">
                <div class=\"icone\"><img src=\"";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 105, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 105, $this->source)), "html", null, true);
        echo "/assets/images_icons/cruise.png\"></div>
                <div class=\"informations\"><span class=\"title\">Suivi navires</span>
                </div>
            </a></div>
        <div class=\"bouton-fixed\">
            <a href=\"#\" target=\"_blank\">
                <div class=\"icone\"><img src=\"";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 111, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 111, $this->source)), "html", null, true);
        echo "/assets/images_icons/calculator.png\"></div>
                <div class=\"informations\">
                    <span class=\"title\">Calculs devis</span></div>
            </a>
        </div>
        <div class=\"bouton-fixed\">
            <a href=\"#\" target=\"_blank\">
                <div class=\"icone\"><img src=\"";
        // line 118
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 118, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 118, $this->source)), "html", null, true);
        echo "/assets/images_icons/price-tag.png\"></div>
                <div class=\"informations\">
                    <span class=\"title\">Tarifications</span></div>
            </a>
        </div>
    </div>
";
        // line 124
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_slider", [], "any", false, false, true, 124)) {
            // line 125
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_slider", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
            echo "
";
        }
        // line 127
        echo "
";
        // line 128
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_top", [], "any", false, false, true, 128)) {
            // line 129
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_top", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
            echo "
";
        }
        // line 131
        echo "
";
        // line 132
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_center", [], "any", false, false, true, 132)) {
            // line 133
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_center", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
            echo "
";
        }
        // line 135
        echo "
";
        // line 136
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_bottom", [], "any", false, false, true, 136)) {
            // line 137
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_bottom", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
            echo "
";
        }
        // line 139
        echo "

";
        // line 141
        $this->loadTemplate("@marsa/partials/footer.html.twig", "themes/custom/marsa/templates/system/page--front.html.twig", 141)->display($context);
        // line 142
        echo "<script>
var a = 0;
  \$(window).scroll(function() {
    
  
    var oTop = \$('#chiffre-count').offset().top - window.innerHeight;
    if (a == 0 && \$(window).scrollTop() > oTop) {
      \$('.chiffre_title').each(function() {
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
              //alert('finished');
            }
  
          });
      });
      a = 1;
    }
  });
</script>
<!-- -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/system/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 142,  133 => 141,  129 => 139,  123 => 137,  121 => 136,  118 => 135,  112 => 133,  110 => 132,  107 => 131,  101 => 129,  99 => 128,  96 => 127,  90 => 125,  88 => 124,  79 => 118,  69 => 111,  60 => 105,  51 => 99,  46 => 96,  41 => 49,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/system/page--front.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/system/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 48, "if" => 124);
        static $filters = array("escape" => 99);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                []
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
