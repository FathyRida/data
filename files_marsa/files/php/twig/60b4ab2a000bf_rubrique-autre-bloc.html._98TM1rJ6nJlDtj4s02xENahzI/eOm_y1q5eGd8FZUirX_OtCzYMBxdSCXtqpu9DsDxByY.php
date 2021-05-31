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

/* modules/custom/custom_menus/templates/rubrique-autre-bloc.html.twig */
class __TwigTemplate_39783505d9d47ffe1a9506715fd20d843768da028b657b36991e3e70ca48494f extends \Twig\Template
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
        // line 3
        if (($context["tree"] ?? null)) {
            // line 4
            echo "
    <div class=\"container block_decouvrir_plus\">
        <h2>";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Discover more on Marsa Maroc"));
            echo "</h2>

        <div class=\"row m-0 p-0\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tree"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "                <div class=\"col-12 col-sm-4\">
                    <div class=\"col-12 p-0 decouvrir\">
                        <div class=\"img\">
                            ";
                // line 13
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "route_name", [], "any", false, false, true, 13) == "entity.node.canonical")) {
                    // line 14
                    echo "                                <a class=\"decouvrir_lien\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, $context["item"], "nid", [], "any", false, false, true, 14)]), "html", null, true);
                    echo "\">


                                ";
                } else {
                    // line 18
                    echo "                                    <a class=\"decouvrir_lien\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "route_name", [], "any", false, false, true, 18), 18, $this->source)));
                    echo "\">
                                    ";
                }
                // line 20
                echo "                                    <img alt=\"base\" src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->extensions['Drupal\twig_tweak\TwigExtension']->imageStyle($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 20), 20, $this->source), "thumbnail_custom_bloc")]), "html", null, true);
                echo "\" >
                                </a>
                        </div>

                        <div class=\"overlay\">
                            <h3>
                                ";
                // line 26
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "route_name", [], "any", false, false, true, 26) == "entity.node.canonical")) {
                    // line 27
                    echo "                                    <a class=\"decouvrir_lien\"  data-widget=\"image\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, $context["item"], "nid", [], "any", false, false, true, 27)]), "html", null, true);
                    echo "\">
                                    ";
                } else {
                    // line 29
                    echo "                                        <a class=\"decouvrir_lien\" data-widget=\"image\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "route_name", [], "any", false, false, true, 29), 29, $this->source)));
                    echo "\">
                                        ";
                }
                // line 31
                echo "
                                        ";
                // line 32
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "</a>
                            </h3>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        </div>
    </div>



    ";
            // line 66
            echo "
";
        }
        // line 68
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/custom/custom_menus/templates/rubrique-autre-bloc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 68,  126 => 66,  119 => 38,  107 => 32,  104 => 31,  98 => 29,  92 => 27,  90 => 26,  80 => 20,  74 => 18,  66 => 14,  64 => 13,  59 => 10,  55 => 9,  49 => 6,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/custom_menus/templates/rubrique-autre-bloc.html.twig", "/var/www/marsa/web/modules/custom/custom_menus/templates/rubrique-autre-bloc.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "for" => 9);
        static $filters = array("t" => 6, "escape" => 14, "image_style" => 20);
        static $functions = array("path" => 14, "file_url" => 20);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['t', 'escape', 'image_style'],
                ['path', 'file_url']
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
