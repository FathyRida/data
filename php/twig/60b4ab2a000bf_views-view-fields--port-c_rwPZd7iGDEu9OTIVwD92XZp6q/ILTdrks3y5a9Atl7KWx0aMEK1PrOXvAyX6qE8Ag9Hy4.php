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

/* themes/custom/marsa/templates/views/chiffres_cles_blocks/views-view-fields--port-chiffres-cles--block-filiales.html.twig */
class __TwigTemplate_87cd9aa14d9013b3f1eb0f193a6476a60fe3c9c4ee20883a6bf62cfeb1052f24 extends \Twig\Template
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
        $context["counter"] = twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "counter", [], "any", false, false, true, 36), "content", [], "any", false, false, true, 36), 36, $this->source))));
        // line 37
        $context["class"] = twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_classe_css", [], "any", false, false, true, 37), "content", [], "any", false, false, true, 37), 37, $this->source))));
        // line 38
        echo "<div class=\"col-6 col-sm-6 col-md-3\">
    <div class=\"cadre\">
        <div class=\"icon ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class"] ?? null), 40, $this->source), "html", null, true);
        echo "\"></div>
        <div class=\"info\">
            <span>";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_titre", [], "any", false, false, true, 42), "content", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "</span>
        </div>
        <div class=\"devis\">
            <span class=\"num\" data-count=\"";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_chiffre", [], "any", false, false, true, 45), "content", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "\">0</span>
            <span class=\"texte\">";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_description", [], "any", false, false, true, 46), "content", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "</span>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/views/chiffres_cles_blocks/views-view-fields--port-chiffres-cles--block-filiales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 46,  64 => 45,  58 => 42,  53 => 40,  49 => 38,  47 => 37,  45 => 36,  42 => 35,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/views/chiffres_cles_blocks/views-view-fields--port-chiffres-cles--block-filiales.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/views/chiffres_cles_blocks/views-view-fields--port-chiffres-cles--block-filiales.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 36);
        static $filters = array("trim" => 36, "striptags" => 36, "render" => 36, "escape" => 40);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['trim', 'striptags', 'render', 'escape'],
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
