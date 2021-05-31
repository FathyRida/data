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

/* themes/custom/marsa/templates/node/node--page-rse.html.twig */
class __TwigTemplate_842bb86d31fd2e491852867694b9a4cda0d4997de93929ef930440c92caf3374 extends \Twig\Template
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
        // line 73
        echo "<div class=\"container-fluid page_strategie_rse page_globale p-0\">
    <div class=\"container description\">
        ";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "
    </div>


    ";
        // line 79
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_image_de_contenu", [], "any", false, false, true, 79), "value", [], "any", false, false, true, 79))) {
            // line 80
            echo "        <div class=\"container-fluid bg_strategie\">
            <div class=\"container\">
                <div class=\"row m-0 infos_strategie\">
                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-3 cards\">
                        <div class=\"col-12 p-0 h-50\">
                            <div class=\"card_info\">
                                <p>
                                    ";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Continuously improve operational performance on all types of traffic."));
            echo "
                                </p>
                            </div>
                        </div>
                        <div class=\"col-12 p-0 h-50 \">
                            <div class=\"card_info\">
                                <p>
                                    ";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Strengthen the position of a leading port operator in Morocco."));
            echo "
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 cards\">
                        <div class=\"img\">
                            ";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image_de_contenu", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "
                        </div>
                    </div>
                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-3 cards\">
                        <div class=\"col-12 p-0 h-50\">
                            <div class=\"card_info\">
                                <p>
                                    ";
            // line 108
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Develop the resources and skills of employees, while providing a healthy working environment and preserving their safety."));
            echo "
                                </p>
                            </div>
                        </div>
                        <div class=\"col-12 p-0 h-50\">
                            <div class=\"card_info\">
                                <p>
                                    ";
            // line 115
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("To perpetuate the commitment materialized by the ISO 14001 environmental certifications in all the operated terminals."));
            echo "
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-12 d-flex\">
                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 p-0\">
                            <div class=\"card_info\">
                                <p>
                                    ";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contribute to the economic and social development of the communities in the areas where it operates throughout the Kingdom. "));
            echo "
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 133
        echo "    <!-- ACCORDIONS   -->
    ";
        // line 134
        if (twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ajouter_nouvel_accordion", [], "any", false, false, true, 134))))) {
            // line 135
            echo "        <div class=\"container\">


            <div class=\"global_accordion bg_white\">
                <div id=\"accordion\" class=\"global_accordions panel-group \">
                    ";
            // line 140
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ajouter_nouvel_accordion", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
            echo "


                </div>
            </div>

        </div>
    ";
        }
        // line 148
        echo "


    ";
        // line 151
        if (twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_double_titre", [], "any", false, false, true, 151))))) {
            // line 152
            echo "        <div class=\"container-fluid bg_gray\">
            <div class=\"global_accordion container\">
                ";
            // line 154
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_double_titre", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
            echo "

            </div>
        </div>
    ";
        }
        // line 159
        echo "    <!-- END OF ACCORDIONS   -->
</div>

";
        // line 162
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("listing_rse", "block_2", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "method", false, false, true, 162), 162, $this->source)), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/node/node--page-rse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 162,  167 => 159,  159 => 154,  155 => 152,  153 => 151,  148 => 148,  137 => 140,  130 => 135,  128 => 134,  125 => 133,  113 => 124,  101 => 115,  91 => 108,  81 => 101,  71 => 94,  61 => 87,  52 => 80,  50 => 79,  43 => 75,  39 => 73,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/node/node--page-rse.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/node/node--page-rse.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 79);
        static $filters = array("escape" => 75, "t" => 87, "trim" => 134, "striptags" => 134, "render" => 134);
        static $functions = array("drupal_view" => 162);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'trim', 'striptags', 'render'],
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
