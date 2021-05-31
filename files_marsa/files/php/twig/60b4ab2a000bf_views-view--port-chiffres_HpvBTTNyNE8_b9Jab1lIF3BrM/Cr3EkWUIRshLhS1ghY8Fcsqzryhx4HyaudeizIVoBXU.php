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

/* themes/custom/marsa/templates/views/chiffres_cles_blocks/views-view--port-chiffres-cles--block-filiales.html.twig */
class __TwigTemplate_b2c3fe8b313b8fdc92364f41536da6d93f5efab142d1e50fbfda6aa56a30e628 extends \Twig\Template
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
        // line 35
        if (($context["rows"] ?? null)) {
            // line 36
            echo "<div class=\"container-fluid chiffres\" id=\"chiffres_cles_1\">
        <div class=\"container\">
            <div class=\"row\">
                ";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 39, $this->source), "html", null, true);
            echo "
                
            </div>
        </div>
    </div>
";
        }
        // line 45
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
        return "themes/custom/marsa/templates/views/chiffres_cles_blocks/views-view--port-chiffres-cles--block-filiales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 45,  46 => 39,  41 => 36,  39 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/views/chiffres_cles_blocks/views-view--port-chiffres-cles--block-filiales.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/views/chiffres_cles_blocks/views-view--port-chiffres-cles--block-filiales.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 35);
        static $filters = array("escape" => 39);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
