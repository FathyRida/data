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

/* themes/custom/marsa/templates/system/page.html.twig */
class __TwigTemplate_e4ef514085e235fd592c10c344217560ac0907ff38c1022f3af34c3dc69105d9 extends \Twig\Template
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
        // line 48
        $this->loadTemplate("@marsa/partials/header.html.twig", "themes/custom/marsa/templates/system/page.html.twig", 48)->display($context);
        // line 49
        echo "<!-- End of header -->

";
        // line 51
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 51)) {
            // line 52
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "
";
        }
        // line 54
        echo "
";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 55)) {
            // line 56
            echo "    <div class=\"container-fluid cont_breadcrumb\">
        <div class=\"container \">
            <div class=\"breadcrumb\">
                ";
            // line 64
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "
            </div>
        </div>
    </div>
";
        }
        // line 69
        echo "<div class=\"fixed-right-menu\">
    <div class=\"bouton-fixed\">
        <a href=\"#\" target=\"_blank\">
            <div class=\"icone\"><img src=\"";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 72, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 72, $this->source)), "html", null, true);
        echo "/assets/images_icons/cont.png\"></div>
            <div class=\"informations\"><span class=\"title\">Suivi conteneurs</span></div>
        </a>
    </div>
    <div class=\"bouton-fixed\">
        <a href=\"#\" target=\"_blank\">
            <div class=\"icone\"><img src=\"";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 78, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 78, $this->source)), "html", null, true);
        echo "/assets/images_icons/cruise.png\"></div>
            <div class=\"informations\"><span class=\"title\">Suivi navires</span>
            </div>
        </a></div>
    <div class=\"bouton-fixed\">
        <a href=\"#\" target=\"_blank\">
            <div class=\"icone\"><img src=\"";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 84, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 84, $this->source)), "html", null, true);
        echo "/assets/images_icons/calculator.png\"></div>
            <div class=\"informations\">
                <span class=\"title\">Calculs devis</span></div>
        </a>
    </div>
    <div class=\"bouton-fixed\">
        <a href=\"#\" target=\"_blank\">
            <div class=\"icone\"><img src=\"";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 91, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 91, $this->source)), "html", null, true);
        echo "/assets/images_icons/price-tag.png\"></div>
            <div class=\"informations\">
                <span class=\"title\">Tarifications</span></div>
        </a>
    </div>
</div>
";
        // line 97
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 97)) {
            // line 98
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            echo "
";
        }
        // line 100
        $this->loadTemplate("@marsa/partials/footer.html.twig", "themes/custom/marsa/templates/system/page.html.twig", 100)->display($context);
        // line 101
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 101,  122 => 100,  116 => 98,  114 => 97,  105 => 91,  95 => 84,  86 => 78,  77 => 72,  72 => 69,  63 => 64,  58 => 56,  56 => 55,  53 => 54,  47 => 52,  45 => 51,  41 => 49,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/system/page.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/system/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 48, "if" => 51);
        static $filters = array("escape" => 52);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
