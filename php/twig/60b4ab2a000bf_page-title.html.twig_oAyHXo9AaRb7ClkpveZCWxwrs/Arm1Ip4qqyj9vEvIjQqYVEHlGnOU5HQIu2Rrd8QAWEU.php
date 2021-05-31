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

/* themes/custom/marsa/templates/partials/page-title.html.twig */
class __TwigTemplate_4252cecf2df8a9bace558e8ab6348e4d0c315050375622d94f0ca0fcbcdf6097 extends \Twig\Template
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
        // line 17
        echo "

";
        // line 19
        if (twig_in_filter("custom_ws", ($context["route_name"] ?? null))) {
            // line 20
            echo "    <div class=\"container-fluid esp_titre\">
        <img src=\"/";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 21, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 21, $this->source)), "html", null, true);
            echo "/assets/images_icons/back_client.png\">
        <div class=\"cont_titre_client\">
            <h1 class=\"title_client\">";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 23, $this->source), "html", null, true);
            echo "</h1>
        </div>
    </div>
";
        } else {
            // line 27
            echo "
    <div class=\"header_ports owl-carousel owl-theme\">
        <div class=\"item container-fluid header_page_interne\">
            ";
            // line 30
            if (($context["header_slider"] ?? null)) {
                // line 31
                echo "                <img src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->extensions['Drupal\twig_tweak\TwigExtension']->imageStyle($this->sandbox->ensureToStringAllowed(($context["header_slider"] ?? null), 31, $this->source), "image_header_slider")]), "html", null, true);
                echo "\">
            ";
            } else {
                // line 33
                echo "                <img src=\"/";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 33, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 33, $this->source)), "html", null, true);
                echo "/assets/images_icons/e-services-abckgr.png\">
            ";
            }
            // line 35
            echo "            <div class=\"container cont_titre_client\">
                <h1 class=\"title_client\">";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 36, $this->source), "html", null, true);
            echo "</h1>
            </div>
        </div>
        ";
            // line 45
            echo "        ";
            // line 63
            echo "    </div>

";
        }
        // line 72
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/partials/page-title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 72,  90 => 63,  88 => 45,  82 => 36,  79 => 35,  73 => 33,  67 => 31,  65 => 30,  60 => 27,  53 => 23,  48 => 21,  45 => 20,  43 => 19,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/partials/page-title.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/partials/page-title.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19);
        static $filters = array("escape" => 21, "image_style" => 31);
        static $functions = array("file_url" => 31);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'image_style'],
                ['file_url']
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
