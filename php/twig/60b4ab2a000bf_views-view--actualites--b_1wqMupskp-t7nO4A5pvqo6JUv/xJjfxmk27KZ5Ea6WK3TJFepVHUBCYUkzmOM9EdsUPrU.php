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

/* themes/custom/marsa/templates/views/listing_actualites/views-view--actualites--block-1.html.twig */
class __TwigTemplate_d05ff461f30e938a37e2f614ef289a2aa6a28f251a21aa08194bf28446f18bc7 extends \Twig\Template
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
        // line 35
        echo "
";
        // line 36
        if (($context["rows"] ?? null)) {
            echo " 
    <div class=\"container-fluid cont_actualites\">
        <div class=\"container cont_news\">
            <p class=\"title_1\">";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("News"));
            echo "</p>
            <p class=\"title_2\">";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("News"));
            echo "</p>
            <div class=\"row_actualites\">
                <div class=\"slider_news owl-carousel owl-theme\">
                    ";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 43, $this->source), "html", null, true);
            echo "

                </div>                
            </div>
            <div class=\"decouvrir\">
                <a class=\"btn_news\" href=\"";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("view.actualites.page_1"));
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("See all news"));
            echo " </a>
            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/views/listing_actualites/views-view--actualites--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 48,  58 => 43,  52 => 40,  48 => 39,  42 => 36,  39 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/views/listing_actualites/views-view--actualites--block-1.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/views/listing_actualites/views-view--actualites--block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 36);
        static $filters = array("t" => 39, "escape" => 43);
        static $functions = array("path" => 48);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
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
