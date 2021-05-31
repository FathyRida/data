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

/* themes/custom/marsa/templates/node/node--actualites.html.twig */
class __TwigTemplate_405acad530eaa977dc1bded3d2d28f276537a4452b889c8be0124235843babde extends \Twig\Template
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

   <div class=\"container news\">
        <div class=\"row\">
            <div class=\"col-12 actu_detaillee\">
                ";
        // line 79
        echo "                 ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
        echo "
                <div class=\"infos_news info_detailed\">
                    <div class=\"date\">
                        <span class=\"date_new\"> ";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_date", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
        echo "</span>
                    </div>
                    <div class=\"body_news\">
                        ";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
        echo "
                        <div class=\"share_social\">
                            <span class=\"share_this\">Partagez cet article</span>
                            <ul class=\"liens_social\">
                                <li class=\"social\"><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li class=\"social\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li class=\"social\"><a href=\"#\"><i class=\"fa fa-whatsapp\"></i></a></li>
                                <li class=\"social\"><a href=\"#\"><i class=\"fa fa-share-alt\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("actualites", "block_2"), "html", null, true);
        echo "

    </div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/node/node--actualites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 99,  59 => 85,  53 => 82,  46 => 79,  39 => 73,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/node/node--actualites.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/node/node--actualites.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 79);
        static $functions = array("drupal_view" => 99);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
