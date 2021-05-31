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

/* themes/custom/marsa/templates/node/node--filiales.html.twig */
class __TwigTemplate_539a877b0507f92801a00763e2ffbbdd30955dc52ad1ae62e79d32fd672a9bc1 extends \Twig\Template
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
        echo "<div class=\"container-fluid page_detail_filiale\">
    <div class=\"container description\">
        <div class=\"img\">
            ";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "

        </div>

        ";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
        echo "

    </div>

    ";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("port_chiffres_cles", "block_filiales"), "html", null, true);
        echo "


    ";
        // line 87
        if (twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_photos", [], "any", false, false, true, 87))))) {
            // line 88
            echo "        <div class=\"container-fluid filiale_slider\">
            <div class=\"outer container\">
                <div id=\"big\" class=\"owl-carousel owl-theme\">
                    ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_photos", [], "any", false, false, true, 91)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["#items"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 92
                echo "
                        <div class=\"item\">
                            <img src=\"";
                // line 94
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_tweak\TwigExtension']->imageStyle($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["photo"], "entity", [], "any", false, false, true, 94), "field_media_image", [], "any", false, false, true, 94), "entity", [], "any", false, false, true, 94), "uri", [], "any", false, false, true, 94), "value", [], "any", false, false, true, 94), 94, $this->source), "image_detail_long"), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["photo"], "entity", [], "any", false, false, true, 94), "field_media_image", [], "any", false, false, true, 94), "entity", [], "any", false, false, true, 94), "filename", [], "any", false, false, true, 94), "value", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
                echo "\">
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo " 

                </div>
                <div id=\"thumbs\" class=\"owl-carousel owl-theme\">
                    ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_photos", [], "any", false, false, true, 100)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["#items"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 101
                echo "                        <div class=\"item\">
                            <img src=\"";
                // line 102
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_tweak\TwigExtension']->imageStyle($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["photo"], "entity", [], "any", false, false, true, 102), "field_media_image", [], "any", false, false, true, 102), "entity", [], "any", false, false, true, 102), "uri", [], "any", false, false, true, 102), "value", [], "any", false, false, true, 102), 102, $this->source), "image_detail_thumb"), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["photo"], "entity", [], "any", false, false, true, 102), "field_media_image", [], "any", false, false, true, 102), "entity", [], "any", false, false, true, 102), "filename", [], "any", false, false, true, 102), "value", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                echo "\">
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo " 

                </div>
            </div>
        </div>
    ";
        }
        // line 110
        echo "    <div class=\"container description global_list\">
        ";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_a_propos", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
        echo "
    </div>
    ";
        // line 113
        if (twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_contact", [], "any", false, false, true, 113))))) {
            // line 114
            echo "        <div class=\"container-fluid contact-services\">
            <div class=\"container contact-port\">
                <div class=\"col-sm-12 col-md-6\">
                    <div class=\"contact\">
                        <span class=\"cont_us\"> ";
            // line 118
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contact us"));
            echo "</span>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-6\">
                    <ul class=\"infos-contact\">
                        ";
            // line 123
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_contact", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
            echo "

                    </ul>
                </div>
            </div>
        </div>
      <div class=\"container-fluid filiale_contact\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12 col-sm-6 infos\">
                        <div class=\"img\"><img src=\"/";
            // line 133
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 133, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 133, $this->source)), "html", null, true);
            echo "/assets/images/contact_icon.png\"></div>
                        <div class=\"contact\">
                            <span>";
            // line 135
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contact us"));
            echo "</span>
                        </div>
                    </div>
                    <div class=\"col-12 col-sm-6 pl-80\">
                          ";
            // line 139
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_contact", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
            echo "
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 145
        echo "</div>
<div class=\"container-fluid p-0 see_more_nos_filiales\">
";
        // line 147
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("filiales", "autres_filiales"), "html", null, true);
        echo "   
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/node/node--filiales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 147,  180 => 145,  171 => 139,  164 => 135,  159 => 133,  146 => 123,  138 => 118,  132 => 114,  130 => 113,  125 => 111,  122 => 110,  114 => 104,  103 => 102,  100 => 101,  96 => 100,  90 => 96,  79 => 94,  75 => 92,  71 => 91,  66 => 88,  64 => 87,  58 => 84,  51 => 80,  44 => 76,  39 => 73,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/node/node--filiales.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/node/node--filiales.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 87, "for" => 91);
        static $filters = array("escape" => 76, "trim" => 87, "striptags" => 87, "render" => 87, "image_style" => 94, "t" => 118);
        static $functions = array("drupal_view" => 84);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'trim', 'striptags', 'render', 'image_style', 't'],
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
