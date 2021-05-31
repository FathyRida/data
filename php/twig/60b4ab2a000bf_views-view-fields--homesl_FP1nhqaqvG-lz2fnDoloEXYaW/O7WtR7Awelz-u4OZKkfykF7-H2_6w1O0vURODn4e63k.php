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

/* themes/custom/marsa/templates/views/block_home_slider/views-view-fields--homeslider--block-sticky.html.twig */
class __TwigTemplate_5fb25ca8f1565bdc5cdffae107e2451a2c93ea9824dbbaeebd4a11843924eedf extends \Twig\Template
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
        // line 36
        $context["cover"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "_entity", [], "any", false, false, true, 36), "field_image", [], "any", false, false, true, 36), "entity", [], "any", false, false, true, 36), "field_media_image", [], "any", false, false, true, 36), "entity", [], "any", false, false, true, 36), "uri", [], "any", false, false, true, 36), "value", [], "any", false, false, true, 36);
        echo " 


<div class=\"grp_slide\">

    ";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "_entity", [], "any", false, false, true, 41), "field_lien_slider", [], "any", false, false, true, 41), 0, [], "any", false, false, true, 41), "url", [], "any", false, false, true, 41), "routeName", [], "any", false, false, true, 41) == "entity.node.canonical")) {
            // line 42
            echo "        <a class=\"lien_bloc_slid\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "_entity", [], "any", false, false, true, 42), "field_lien_slider", [], "any", false, false, true, 42), 0, [], "any", false, false, true, 42), "url", [], "any", false, false, true, 42), "routeParameters", [], "any", false, false, true, 42), "node", [], "any", false, false, true, 42)]), "html", null, true);
            echo "\">
            <img class=\"img_bloc_slid\" src=\"";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_tweak\TwigExtension']->imageStyle($this->sandbox->ensureToStringAllowed(($context["cover"] ?? null), 43, $this->source), "thumb_sticky_slider"), "html", null, true);
            echo "\">
            <span> ";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 44), "content", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "</span>
        </a>

    ";
        } else {
            // line 48
            echo "        <a class=\"lien_bloc_slid\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "_entity", [], "any", false, false, true, 48), "field_lien_slider", [], "any", false, false, true, 48), 0, [], "any", false, false, true, 48), "url", [], "any", false, false, true, 48), "routeName", [], "any", false, false, true, 48), 48, $this->source)));
            echo "\">
            <img class=\"img_bloc_slid\" src=\"";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_tweak\TwigExtension']->imageStyle($this->sandbox->ensureToStringAllowed(($context["cover"] ?? null), 49, $this->source), "thumb_sticky_slider"), "html", null, true);
            echo "\">
            <span> ";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 50), "content", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "</span>
        </a>
    ";
        }
        // line 53
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/views/block_home_slider/views-view-fields--homeslider--block-sticky.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 53,  80 => 50,  76 => 49,  71 => 48,  64 => 44,  60 => 43,  55 => 42,  53 => 41,  45 => 36,  42 => 35,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/views/block_home_slider/views-view-fields--homeslider--block-sticky.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/views/block_home_slider/views-view-fields--homeslider--block-sticky.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 36, "if" => 41);
        static $filters = array("escape" => 42, "image_style" => 43);
        static $functions = array("path" => 42, "url" => 48);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'image_style'],
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
