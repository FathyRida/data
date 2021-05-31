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

/* themes/custom/marsa/templates/views/block_rse/views-view--listing-rse--block-2.html.twig */
class __TwigTemplate_388eb9ee54521272462c3ac5e995d74acef69662730da8af60bc13a3a9c9034e extends \Twig\Template
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
        echo " ";
        if (($context["rows"] ?? null)) {
            echo " 
  <div class=\"container-fluid custom_block_rse p-0\">
        <div class=\"container block_decouvrir_plus\">
            <h2>Découvrir plus</h2>
        </div>
        <div class=\"row m-0 rse_row\">
            ";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 41, $this->source), "html", null, true);
            echo "
        </div>
    </div>
 ";
        }
        // line 44
        echo "  

";
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/views/block_rse/views-view--listing-rse--block-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 44,  49 => 41,  39 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/views/block_rse/views-view--listing-rse--block-2.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/views/block_rse/views-view--listing-rse--block-2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 35);
        static $filters = array("escape" => 41);
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
