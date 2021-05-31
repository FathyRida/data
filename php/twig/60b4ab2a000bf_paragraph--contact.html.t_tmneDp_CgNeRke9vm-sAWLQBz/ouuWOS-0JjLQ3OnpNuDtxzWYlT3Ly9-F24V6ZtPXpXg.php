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

/* themes/custom/marsa/templates/paragraph/paragraph--contact.html.twig */
class __TwigTemplate_ad57a574b44f12f7519bcacf8a477bdc986bdea9d1a64c666257020f6816a221 extends \Twig\Template
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
        // line 41
        echo "

    <span class=\"adress\">";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Adresse"));
        echo " : <span class=\"bold\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_addresse", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo "</span></span>
    <span class=\"adress\">";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Mail"));
        echo " : <span class=\"bold\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_email", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "</span></span>
    ";
        // line 45
        if (twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_contact_commercial", [], "any", false, false, true, 45))))) {
            // line 46
            echo "     <span class=\"adress\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Commercial contact"));
            echo " : <span class=\"bold\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_contact_commercial", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "</span></span>
    ";
        }
        // line 48
        echo "    <span class=\"adress\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Tel"));
        echo " : <span class=\"bold\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_telephone", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "</span></span>
    <span class=\"adress\">";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Fax"));
        echo " : <span class=\"bold\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_fax", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "</span></span>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/paragraph/paragraph--contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 49,  65 => 48,  57 => 46,  55 => 45,  49 => 44,  43 => 43,  39 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/paragraph/paragraph--contact.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/paragraph/paragraph--contact.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 45);
        static $filters = array("t" => 43, "escape" => 43, "trim" => 45, "striptags" => 45, "render" => 45);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape', 'trim', 'striptags', 'render'],
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
