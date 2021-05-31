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

/* themes/custom/marsa/templates/views/block_home_slider/views-view-fields--homeslider--block-1.html.twig */
class __TwigTemplate_7d5c34dd221bcf7ee2a1ce3bd13be4270a0080bf60eb2f9bfef331ac2d9ac6c5 extends \Twig\Template
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
        echo "
";
        // line 37
        echo "
<div class=\"item\">
    ";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_image", [], "any", false, false, true, 39), "content", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "


    <div class=\"slide_info carousel-caption d-block text-left\">
        <div class=\"slide_title\">
            <h1>
                ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 45), "content", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "
            </h1>
        </div>
        <p class=\"lien_slider\">
            ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_lien_slider", [], "any", false, false, true, 49), "content", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "
        </p>
        ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("homeslider", "block_sticky"), "html", null, true);
        echo "
        ";
        // line 72
        echo "    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/views/block_home_slider/views-view-fields--homeslider--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 72,  70 => 51,  65 => 49,  58 => 45,  49 => 39,  45 => 37,  42 => 35,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/views/block_home_slider/views-view-fields--homeslider--block-1.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/views/block_home_slider/views-view-fields--homeslider--block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 39);
        static $functions = array("drupal_view" => 51);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
