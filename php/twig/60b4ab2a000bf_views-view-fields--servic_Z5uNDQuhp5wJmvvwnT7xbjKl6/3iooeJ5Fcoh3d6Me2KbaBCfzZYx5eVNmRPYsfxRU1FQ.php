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

/* themes/custom/marsa/templates/views/block_home_services/views-view-fields--services-marsa--block-1.html.twig */
class __TwigTemplate_93cd14f2498d9d590bafc56d85d2b7dfdb36f9c1b01b959901b28f411db51cfa extends \Twig\Template
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
";
        // line 35
        echo "<div class=\"col-sm-12 col-md-6 col-lg-6\">
    <div class=\"services\">
        <a class=\"lien_service\" href=\"";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("view.services.page_1"));
        echo "\">
            <div class=\"icone_service\">
                ";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_image", [], "any", false, false, true, 39), "content", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "
            </div>
            ";
        // line 42
        echo "            <div class=\"infos_service\">
                <span class=\"title_service\">";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 43), "content", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo "</span>
                <div class=\"desc_service\">";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "body", [], "any", false, false, true, 44), "content", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo " </div>
            </div>
        </a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/views/block_home_services/views-view-fields--services-marsa--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 44,  59 => 43,  56 => 42,  51 => 39,  46 => 37,  42 => 35,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/views/block_home_services/views-view-fields--services-marsa--block-1.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/views/block_home_services/views-view-fields--services-marsa--block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 39);
        static $functions = array("path" => 37);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['path']
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
