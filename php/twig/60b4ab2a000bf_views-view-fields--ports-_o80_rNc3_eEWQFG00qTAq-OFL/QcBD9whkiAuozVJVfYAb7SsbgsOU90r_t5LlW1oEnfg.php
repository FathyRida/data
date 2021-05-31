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

/* themes/custom/marsa/templates/views/block_home_ports/views-view-fields--ports-and-terminals--block-1.html.twig */
class __TwigTemplate_a46bbc66c697f17c5fe1257243cba82b2e65aceb1688ef4444c248108a8b8481 extends \Twig\Template
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
<div class=\"affich_port\">
    <div class=\"slider_ports owl-carousel owl-theme\">

        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "_entity", [], "any", false, false, true, 39), "field_photos", [], "any", false, false, true, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 40
            echo "            <div class=\"item\">
                    <img class=\"img_port\" src=\"";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_tweak\TwigExtension']->imageStyle($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["photo"], "entity", [], "any", false, false, true, 41), "field_media_image", [], "any", false, false, true, 41), "entity", [], "any", false, false, true, 41), "uri", [], "any", false, false, true, 41), "value", [], "any", false, false, true, 41), 41, $this->source), "home_port"), "html", null, true);
            echo "\">
                    <div class=\"infos_port\">
                        <div class=\"nom_port\">
                            <span class=\"title_port\"><strong>";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 44), "content", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "</strong></span>
                        </div>
                        <div class=\"infos_selected_port\">
                            ";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_sommaire_des_chiffres_cles", [], "any", false, false, true, 47), "content", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "
                            ";
            // line 49
            echo "                        </div>
                        <div class=\"link-view-port\">
                            <a class=\"lien_pont\" href=\"";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "_entity", [], "any", false, false, true, 51), "nid", [], "any", false, false, true, 51), "value", [], "any", false, false, true, 51)]), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Discover the port"));
            echo "</a>
                        </div>
                </div>
            </div>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        
    </div>
    ";
        // line 68
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/views/block_home_ports/views-view-fields--ports-and-terminals--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 68,  89 => 57,  75 => 51,  71 => 49,  67 => 47,  61 => 44,  55 => 41,  52 => 40,  48 => 39,  42 => 35,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/views/block_home_ports/views-view-fields--ports-and-terminals--block-1.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/views/block_home_ports/views-view-fields--ports-and-terminals--block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 39);
        static $filters = array("escape" => 41, "image_style" => 41, "t" => 51);
        static $functions = array("path" => 51);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'image_style', 't'],
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
