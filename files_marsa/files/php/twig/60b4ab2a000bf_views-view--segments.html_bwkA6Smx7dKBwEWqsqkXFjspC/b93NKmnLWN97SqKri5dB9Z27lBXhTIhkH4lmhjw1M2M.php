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

/* themes/custom/marsa/templates/views/segments/views-view--segments.html.twig */
class __TwigTemplate_b9a09619433831adebc776708851d21ae6accaeab1c40e242694c6b760d2f0e8 extends \Twig\Template
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
<div class=\"container-fluid listing_segments\">
    <div class=\"container seg_body\">
        <h2>Une expertise multi-trafics</h2>
        <div class=\"description\">
            <p>
                Marsa Maroc a développé une expertise sur tout les types de trafic, conteneur, vrac solide et liquide, conventionnel, passagers et roulier. Le Groupe Marsa Maroc se positionne comme un opérateur multi-spécialité par excellence grâce à l’expertise développée par ses équipes et son portefeuille d’équipements performants.
            </p>
        </div>
    </div>
    ";
        // line 46
        echo "    <div class=\"container-fluid listings\">
        <div class=\"container\">
            <div class=\"row m-0\">
                ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 49, $this->source), "html", null, true);
        echo "

            </div>
        </div>        </div>

</div>


";
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/views/segments/views-view--segments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 49,  51 => 46,  39 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/views/segments/views-view--segments.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/views/segments/views-view--segments.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 49);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
