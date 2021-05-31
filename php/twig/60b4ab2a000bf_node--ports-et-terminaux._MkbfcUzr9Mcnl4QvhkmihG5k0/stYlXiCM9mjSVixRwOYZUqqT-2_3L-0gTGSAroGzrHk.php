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

/* themes/custom/marsa/templates/node/node--ports-et-terminaux.html.twig */
class __TwigTemplate_67dd991bcaba4a5ef0da3d9c8b65b978951ec7636bab0ed593c782018b3f8e09 extends \Twig\Template
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
        echo "


<div class=\"container-fluid port_presentation\">
    <div class=\"container cont_desc_port\">

        ";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
        echo "

    </div>

    ";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("port_chiffres_cles", "block_1"), "html", null, true);
        echo "

</div>
";
        // line 86
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_principaux_atouts", [], "any", false, false, true, 86), "value", [], "any", false, false, true, 86))) {
            // line 87
            echo "    <div class=\"container-fluid p_atouts\">
        <div class=\"row\">
            <div class=\"col-sm-6 atouts\">
                <img src=\"/";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 90, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 90, $this->source)), "html", null, true);
            echo "/assets/images_icons/princip-atouts.png\">
            </div>
            <div class=\"col-sm-6 atouts\">
                <div class=\"principaux_atouts\">
                    <h2>Principaux atouts</h2>
                    ";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_principaux_atouts", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo "
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("services", "block_2"), "html", null, true);
        echo "


<div class=\"container-fluid ports_tabs\">
    <div class=\"container tabs\">
        <div class=\"row\">

            ";
        // line 108
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_tabs", [], "any", false, false, true, 108), "value", [], "any", false, false, true, 108))) {
            // line 109
            echo "
                ";
            // line 110
            $context["i"] = 0;
            // line 111
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tabs", [], "any", false, false, true, 111)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["#items"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["onglet"]) {
                // line 112
                echo "                    <div class=\"col-sm-3\">
                        ";
                // line 114
                echo "     
                        <button onclick=\"openTab(event, '";
                // line 115
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["onglet"], "target_id", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
                echo "');\" class=\"tab ";
                if ((($context["i"] ?? null) == 0)) {
                    echo " active ";
                }
                echo "\">
                            <span>";
                // line 116
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["onglet"], "entity", [], "any", false, false, true, 116), "field_titre_parent", [], "any", false, false, true, 116), "value", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
                echo "  </span>
                        </button>
                    </div>
                    ";
                // line 119
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 120
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['onglet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "         

                ";
            // line 122
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tabs", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 124
        echo "
        </div>
    </div>
</div>


";
        // line 130
        if (twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_contact", [], "any", false, false, true, 130))))) {
            // line 131
            echo "    <div class=\"container-fluid contact-services\">
        <div class=\"container contact-port\">
            <div class=\"col-sm-12 col-md-6\">
                <div class=\"contact\">
                    <span class=\"cont_us\"> ";
            // line 135
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contact us"));
            echo "</span>
                </div>
            </div>
            <div class=\"col-sm-12 col-md-6\">
                <ul class=\"infos-contact\">
                    ";
            // line 140
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_contact", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
            echo "

                </ul>
            </div>
        </div>
        ";
            // line 146
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("page_e_services", "block_1"), "html", null, true);
            echo "
    </div>

";
        }
        // line 150
        echo "

";
        // line 153
        echo "
";
        // line 162
        echo "

";
        // line 164
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_tweak\TwigExtension']->drupalEntity("block", "custommenusrubriqueblock"), "html", null, true);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/node/node--ports-et-terminaux.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 164,  189 => 162,  186 => 153,  182 => 150,  174 => 146,  166 => 140,  158 => 135,  152 => 131,  150 => 130,  142 => 124,  137 => 122,  128 => 120,  126 => 119,  120 => 116,  112 => 115,  109 => 114,  106 => 112,  101 => 111,  99 => 110,  96 => 109,  94 => 108,  84 => 101,  75 => 95,  67 => 90,  62 => 87,  60 => 86,  54 => 83,  47 => 79,  39 => 73,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/node/node--ports-et-terminaux.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/node/node--ports-et-terminaux.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 86, "set" => 110, "for" => 111);
        static $filters = array("escape" => 79, "trim" => 130, "striptags" => 130, "render" => 130, "t" => 135);
        static $functions = array("drupal_view" => 83, "drupal_entity" => 164);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'trim', 'striptags', 'render', 't'],
                ['drupal_view', 'drupal_entity']
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
