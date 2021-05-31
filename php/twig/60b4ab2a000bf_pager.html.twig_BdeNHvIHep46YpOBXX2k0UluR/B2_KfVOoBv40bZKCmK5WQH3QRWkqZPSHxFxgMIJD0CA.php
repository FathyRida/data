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

/* themes/custom/marsa/templates/pager/pager.html.twig */
class __TwigTemplate_97544818db153f0c301c66fe69e58051fa2b004b428232058095a5e179676693 extends \Twig\Template
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
        if (($context["items"] ?? null)) {
            // line 36
            echo "
\t\t\t<div class=\"pagination_client\">

\t\t\t\t<h4 id=\"";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 39, $this->source), "html", null, true);
            echo "\" class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "</h4>
\t\t\t\t<ul
\t\t\t\t\tclass=\"list_pages\">
\t\t\t\t\t";
            // line 43
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 43)) {
                // line 44
                echo "\t\t\t\t\t\t<li class=\"num_page pager__item pager__item--first\">
\t\t\t\t\t\t\t<a href=\"";
                // line 45
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 45), "href", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                echo "\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 45), "attributes", [], "any", false, false, true, 45), 45, $this->source), "href", "title"), "html", null, true);
                echo ">
\t\t\t\t\t\t\t\t<span class=\"visually-hidden\">";
                // line 46
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                echo "</span>
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">";
                // line 47
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 47), "text", [], "any", true, true, true, 47)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 47), "text", [], "any", false, false, true, 47), 47, $this->source), t("«"))) : (t("«"))), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t\t";
            // line 52
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 52)) {
                // line 53
                echo "\t\t\t\t\t\t<li class=\"num_page pager__item pager__item--previous\">
\t\t\t\t\t\t\t<a href=\"";
                // line 54
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 54), "href", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 54), "attributes", [], "any", false, false, true, 54), 54, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
\t\t\t\t\t\t\t\t<span class=\"visually-hidden\">";
                // line 55
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                echo "</span>
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">";
                // line 56
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 56), "text", [], "any", true, true, true, 56)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 56), "text", [], "any", false, false, true, 56), 56, $this->source), t("‹"))) : (t("‹"))), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 60
            echo "\t\t\t\t\t";
            // line 61
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 61)) {
                // line 62
                echo "\t\t\t\t\t\t<li class=\"num_page pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
\t\t\t\t\t";
            }
            // line 64
            echo "\t\t\t\t\t";
            // line 65
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 65));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 66
                echo "\t\t\t\t\t\t<li class=\"num_page pager__item";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active") : ("")));
                echo "\">
\t\t\t\t\t\t\t";
                // line 67
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 68
                    echo "\t\t\t\t\t\t\t\t";
                    $context["title"] = t("Current page");
                    // line 69
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 70
                    echo "\t\t\t\t\t\t\t\t";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 71
                    echo "\t\t\t\t\t\t\t";
                }
                // line 72
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 72, $this->source), "html", null, true);
                echo "\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 72), 72, $this->source), "href", "title"), "html", null, true);
                echo ">
\t\t\t\t\t\t\t\t<span class=\"visually-hidden\">
\t\t\t\t\t\t\t\t\t";
                // line 74
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "
\t\t\t\t\t\t\t\t</span>";
                // line 76
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 76, $this->source), "html", null, true);
                // line 77
                echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "\t\t\t\t\t";
            // line 81
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 81)) {
                // line 82
                echo "\t\t\t\t\t\t<li class=\"num_page pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
\t\t\t\t\t";
            }
            // line 84
            echo "\t\t\t\t\t";
            // line 85
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 85)) {
                // line 86
                echo "\t\t\t\t\t\t<li class=\"num_page pager__item pager__item--next\">
\t\t\t\t\t\t\t<a href=\"";
                // line 87
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 87), "href", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                echo "\" rel=\"next\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 87), "attributes", [], "any", false, false, true, 87), 87, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
\t\t\t\t\t\t\t\t<span class=\"visually-hidden\">";
                // line 88
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                echo "</span>
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">";
                // line 89
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 89), "text", [], "any", true, true, true, 89)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 89), "text", [], "any", false, false, true, 89), 89, $this->source), t("›"))) : (t("›"))), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 93
            echo "\t\t\t\t\t";
            // line 94
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 94)) {
                // line 95
                echo "\t\t\t\t\t\t<li class=\"num_page pager__item pager__item--last\">
\t\t\t\t\t\t\t<a href=\"";
                // line 96
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 96), "href", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                echo "\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 96), "attributes", [], "any", false, false, true, 96), 96, $this->source), "href", "title"), "html", null, true);
                echo ">
\t\t\t\t\t\t\t\t<span class=\"visually-hidden\">";
                // line 97
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                echo "</span>
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">";
                // line 98
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 98), "text", [], "any", true, true, true, 98)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 98), "text", [], "any", false, false, true, 98), 98, $this->source), t("»"))) : (t("»"))), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 102
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/pager/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 102,  221 => 98,  217 => 97,  209 => 96,  206 => 95,  203 => 94,  201 => 93,  194 => 89,  190 => 88,  182 => 87,  179 => 86,  176 => 85,  174 => 84,  170 => 82,  167 => 81,  165 => 80,  157 => 77,  155 => 76,  151 => 74,  141 => 72,  138 => 71,  135 => 70,  132 => 69,  129 => 68,  127 => 67,  122 => 66,  117 => 65,  115 => 64,  111 => 62,  108 => 61,  106 => 60,  99 => 56,  95 => 55,  87 => 54,  84 => 53,  81 => 52,  79 => 51,  72 => 47,  68 => 46,  60 => 45,  57 => 44,  54 => 43,  46 => 39,  41 => 36,  39 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/pager/pager.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/pager/pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 35, "for" => 65, "set" => 68);
        static $filters = array("escape" => 39, "t" => 39, "without" => 45, "default" => 47);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 't', 'without', 'default'],
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
