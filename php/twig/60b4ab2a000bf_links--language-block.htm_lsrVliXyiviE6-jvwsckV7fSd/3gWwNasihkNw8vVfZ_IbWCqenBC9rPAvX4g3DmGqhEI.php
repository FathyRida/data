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

/* themes/custom/marsa/templates/language/links--language-block.html.twig */
class __TwigTemplate_f0993aef951f81bd85049df99ff3c1a18d8ef9cd8ed722fc2db3682d06df9d6e extends \Twig\Template
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
        // line 36
        if (($context["links"] ?? null)) {
            // line 37
            $context["count_lang"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["links"] ?? null), 37, $this->source));
            // line 38
            echo "
    <li class=\"top_menu_link switcher-lang\">
        <div class=\"dropdown bloc-switcher-lang\">
            <button type=\"button\" class=\"btn btn-primary choose-lang\" data-toggle=\"dropdown\">
                ";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["current_lang"] ?? null), "name", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "
            </button>
            <div class=\"dropdown-menu liste-langue\">

                ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 47
                echo "                    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                echo "
                    <div class=\"dropdown-divider\"></div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </div>
        </div>
    </li>";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/language/links--language-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 50,  60 => 47,  56 => 46,  49 => 42,  43 => 38,  41 => 37,  39 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/language/links--language-block.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/language/links--language-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 36, "set" => 37, "for" => 46);
        static $filters = array("length" => 37, "escape" => 42);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['length', 'escape'],
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
