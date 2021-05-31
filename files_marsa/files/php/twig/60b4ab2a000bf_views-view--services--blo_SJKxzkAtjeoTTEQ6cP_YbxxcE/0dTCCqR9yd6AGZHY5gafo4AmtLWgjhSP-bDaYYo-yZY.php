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

/* themes/custom/marsa/templates/views/block_detail_services_marsa/views-view--services--block-2.html.twig */
class __TwigTemplate_9fce921ae48134fe6621d0d137cf9b5a33b8c626facba4fb75793018874ba03c extends \Twig\Template
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
            echo "     <div class=\"container-fluid cont_serv\">
        <div class=\"container cont_services\">
            <div class=\"row_service row\">
                ";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 40, $this->source), "html", null, true);
            echo "

            </div>        
        </div>
    </div>
";
        }
        // line 46
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/views/block_detail_services_marsa/views-view--services--block-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 46,  49 => 40,  44 => 37,  42 => 36,  39 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/views/block_detail_services_marsa/views-view--services--block-2.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/views/block_detail_services_marsa/views-view--services--block-2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 36);
        static $filters = array("escape" => 40);
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
