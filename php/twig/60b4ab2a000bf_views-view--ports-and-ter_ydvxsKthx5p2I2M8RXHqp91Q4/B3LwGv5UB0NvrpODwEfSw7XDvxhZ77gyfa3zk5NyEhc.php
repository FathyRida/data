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

/* themes/custom/marsa/templates/views/block_ports_detail/views-view--ports-and-terminals--block-other.html.twig */
class __TwigTemplate_22085fc97b615ddb1e8594fc51b0d06281462f57da0a8c51b74f13a4419d44e4 extends \Twig\Template
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
        echo "
";
        // line 36
        if (($context["rows"] ?? null)) {
            // line 37
            echo "
    <div class=\"container block_decouvrir_plus decouvrir_segment_1 full\">
        <h2>";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Découvrir les ports qui gèrent ce type d’activité"));
            echo "</h2>
    </div>
    <div class=\"container-fluid block_decouvrir_plus decouvrir_seg_slider full\">
        <div class=\" owl-carousel owl-theme slider_decouvrir_plus\">

            ";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 44, $this->source), "html", null, true);
            echo "

        </div>
    </div>

";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/views/block_ports_detail/views-view--ports-and-terminals--block-other.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 44,  48 => 39,  44 => 37,  42 => 36,  39 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/views/block_ports_detail/views-view--ports-and-terminals--block-other.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/views/block_ports_detail/views-view--ports-and-terminals--block-other.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 36);
        static $filters = array("t" => 39, "escape" => 44);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
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
