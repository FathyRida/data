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

/* themes/custom/marsa/templates/views/block_filiales/views-view--filiales--autres-filiales.html.twig */
class __TwigTemplate_3a9213746733e728a0792aa87260905e85bfa0b617fd159e5d5efad8c0f71d2f extends \Twig\Template
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
            echo "    <div class=\"container-fluid cont_see_more white-bg\">
        <div class=\"container\">
            <div class=\"titre_see_more\">
                <h2 class=\"title_see_more\">";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Discover our other subsidiairies"));
            echo "</h2>
            </div>
        </div>
        <div class=\"container contain_more\">
            <div class=\"row\">
                ";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 45, $this->source), "html", null, true);
            echo "

            </div>
        </div>
    </div>
    ";
            // line 74
            echo " 
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/views/block_filiales/views-view--filiales--autres-filiales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 74,  57 => 45,  49 => 40,  44 => 37,  42 => 36,  39 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/views/block_filiales/views-view--filiales--autres-filiales.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/views/block_filiales/views-view--filiales--autres-filiales.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 36);
        static $filters = array("t" => 40, "escape" => 45);
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
