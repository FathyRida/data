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

/* themes/custom/marsa/templates/system/html.html.twig */
class __TwigTemplate_267907c44c112918a976195ed067fd7059cf2bcaf00f377a48abe6316a85f9bd extends \Twig\Template
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
        // line 26
        echo "
";
        // line 35
        echo "
<!DOCTYPE html>
<html";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 37, $this->source), "html", null, true);
        echo ">

    <head>
    <head-placeholder token=\"";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 40, $this->source));
        echo "\">
        <title>";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 41, $this->source), " | "));
        echo "</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <meta name=\"msapplication-TileColor\" content=\"#da532c\">
        <meta name=\"theme-color\" content=\"#ffffff\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <link rel=\"stylesheet\" href=\"/";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 46, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 46, $this->source)), "html", null, true);
        echo "/assets/owlcarousel/owl.carousel.min.css\"/>
        <link rel=\"stylesheet\" href=\"/";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 47, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 47, $this->source)), "html", null, true);
        echo "/assets/owlcarousel/owl.theme.default.min.css\"/>
        <link rel=\"stylesheet\" href=\"/";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 48, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 48, $this->source)), "html", null, true);
        echo "/assets/css/fontawesome.min.css\"/>
        <link rel=\"stylesheet\" href=\"/";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 49, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 49, $this->source)), "html", null, true);
        echo "/assets/css/brands.min.css\"/>
        <link rel=\"stylesheet\" href=\"/";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 50, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 50, $this->source)), "html", null, true);
        echo "/assets/css/regular.min.css\"/>
        <link rel=\"stylesheet\" href=\"/";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 51, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 51, $this->source)), "html", null, true);
        echo "/assets/css/solid.min.css\"/>
        <link rel=\"stylesheet\" href=\"/";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 52, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 52, $this->source)), "html", null, true);
        echo "/assets/css/svg-with-js.min.css\"/>
        <link rel=\"stylesheet\" href=\"/";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 53, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 53, $this->source)), "html", null, true);
        echo "/assets/css/v4-shims.min.css\"/>
        <link rel=\"stylesheet\" href=\"/";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 54, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 54, $this->source)), "html", null, true);
        echo "/assets/css/responsive.css\"/>

        <link rel=\"stylesheet\" href=\"/";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 56, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 56, $this->source)), "html", null, true);
        echo "/assets/bootstrap/css/bootstrap.min.css\"/>

        ";
        // line 63
        echo "<link rel=\"stylesheet\" href=\"/";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 63, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 63, $this->source)), "html", null, true);
        echo "/assets/css/backend/jquery.qtip.min.css\" />
        ";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("marsa/global-css"), "html", null, true);
        echo "
        ";
        // line 65
        if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["html_attributes"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["dir"] ?? null) : null) == "rtl")) {
            // line 66
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("marsa/global-css-rtl"), "html", null, true);
        }
        // line 68
        echo "<link rel=\"stylesheet\" href=\"/";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 68, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 68, $this->source)), "html", null, true);
        echo "/assets/css/sk.css\"/>
            <css-placeholder token=\"";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 69, $this->source));
        echo "\">
            <link rel=\"stylesheet\" href=\"/";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 70, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 70, $this->source)), "html", null, true);
        echo "/assets/css/responsive_sk.css\"/>

            </head>
                <body ";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addclass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 73), 73, $this->source), "html", null, true);
        echo ">

                <js-placeholder token=\"";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 75, $this->source));
        echo "\">
                    <script src=\"/";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 76, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 76, $this->source)), "html", null, true);
        echo "/assets/owlcarousel/jquery-3.4.1.js\"></script>
                    <script src=\"/";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 77, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 77, $this->source)), "html", null, true);
        echo "/assets/owlcarousel/owl.carousel.min.js\"></script>
                    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
                    <script src=\"/";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 79, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 79, $this->source)), "html", null, true);
        echo "/assets/bootstrap/js/bootstrap.min.js\"></script>   
                    <script src=\"/";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 80, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 80, $this->source)), "html", null, true);
        echo "/assets/dist/scripts.js\"></script>   

                    <js-bottom-placeholder token=\"";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 82, $this->source));
        echo "\">

                        ";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 84, $this->source), "html", null, true);
        echo "
                        ";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 85, $this->source), "html", null, true);
        echo "
                        ";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 86, $this->source), "html", null, true);
        echo " 

                        <!-- jQuery first, then Tether, then Bootstrap JS. -->

                        </body>

                        </body>
                        </html>";
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/system/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 86,  172 => 85,  168 => 84,  163 => 82,  158 => 80,  154 => 79,  149 => 77,  145 => 76,  141 => 75,  136 => 73,  130 => 70,  126 => 69,  121 => 68,  117 => 66,  115 => 65,  111 => 64,  106 => 63,  101 => 56,  96 => 54,  92 => 53,  88 => 52,  84 => 51,  80 => 50,  76 => 49,  72 => 48,  68 => 47,  64 => 46,  56 => 41,  52 => 40,  46 => 37,  42 => 35,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/system/html.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/system/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 65);
        static $filters = array("escape" => 37, "raw" => 40, "safe_join" => 41);
        static $functions = array("attach_library" => 64);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw', 'safe_join'],
                ['attach_library']
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
