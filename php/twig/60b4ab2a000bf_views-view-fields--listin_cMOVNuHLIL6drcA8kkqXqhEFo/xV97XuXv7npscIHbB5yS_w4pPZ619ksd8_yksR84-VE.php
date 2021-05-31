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

/* themes/custom/marsa/templates/views/block_rse/views-view-fields--listing-rse--block-2.html.twig */
class __TwigTemplate_ec1629d8f0c8a0763a3b9a31f1ecfd2f230a8e29e38b1f3d821bd3dcbcdd97df extends \Twig\Template
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

<div class=\"col-12 col-sm-6 col-md-3 p-0\">
    <div class=\"rse_item\">
        <div class=\"img\">
            ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_image", [], "any", false, false, true, 40), "content", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        echo "
        </div>
        <div class=\"overlay\">
            ";
        // line 43
        if (twig_test_empty(twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_lien_utile", [], "any", false, false, true, 43), "content", [], "any", false, false, true, 43)))))) {
            // line 44
            echo "                <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "_entity", [], "any", false, false, true, 44), "nid", [], "any", false, false, true, 44), "value", [], "any", false, false, true, 44)]), "html", null, true);
            echo "\">
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 45
($context["row"] ?? null), "_entity", [], "any", false, false, true, 45), "field_lien_utile", [], "any", false, false, true, 45), 0, [], "any", false, false, true, 45), "url", [], "any", false, false, true, 45), "routeName", [], "any", false, false, true, 45) == "entity.node.canonical")) {
            // line 46
            echo "                <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "_entity", [], "any", false, false, true, 46), "field_lien_utile", [], "any", false, false, true, 46), 0, [], "any", false, false, true, 46), "url", [], "any", false, false, true, 46), "routeParameters", [], "any", false, false, true, 46), "node", [], "any", false, false, true, 46)]), "html", null, true);
            echo "\">
            ";
        } else {
            // line 48
            echo "                <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "_entity", [], "any", false, false, true, 48), "field_lien_utile", [], "any", false, false, true, 48), 0, [], "any", false, false, true, 48), "url", [], "any", false, false, true, 48), "routeName", [], "any", false, false, true, 48), 48, $this->source)));
            echo "\">   
            ";
        }
        // line 49
        echo " 
            <div class=\"title\">
                <h3>";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 51), "content", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "</h3>
            </div>
            </a>
        </div>
    </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/views/block_rse/views-view-fields--listing-rse--block-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 51,  76 => 49,  70 => 48,  64 => 46,  62 => 45,  57 => 44,  55 => 43,  49 => 40,  42 => 35,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/views/block_rse/views-view-fields--listing-rse--block-2.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/views/block_rse/views-view-fields--listing-rse--block-2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 43);
        static $filters = array("escape" => 40, "trim" => 43, "striptags" => 43, "render" => 43);
        static $functions = array("path" => 44, "url" => 48);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'trim', 'striptags', 'render'],
                ['path', 'url']
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
