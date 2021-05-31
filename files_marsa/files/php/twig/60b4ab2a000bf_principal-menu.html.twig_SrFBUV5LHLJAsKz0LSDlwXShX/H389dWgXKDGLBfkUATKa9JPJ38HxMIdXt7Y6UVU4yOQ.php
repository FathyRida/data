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

/* modules/custom/custom_menus/templates/principal-menu.html.twig */
class __TwigTemplate_f3c9992e1efdf82b76333d2a50c8ca79222369123a575edc68140a038b28a716 extends \Twig\Template
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
        echo "<div class=\"container-fluid menu_principal\">
    ";
        // line 2
        if (($context["tree"] ?? null)) {
            // line 3
            echo "        <nav class=\"navbar navbar-expand-lg\">
            <a class=\"navbar-brand\" href=\"";
            // line 4
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            echo "\">
                <img src=\"/";
            // line 5
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 5, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 5, $this->source)), "html", null, true);
            echo "/assets/images_icons/logo_marsa.jpg\" width=\"115\" height=\"52\">
            </a>            
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"><img src=\"/";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 8, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 8, $this->source)), "html", null, true);
            echo "/assets/images/menu-hamburger.png\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tree"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["#items"] ?? null) : null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 13
                echo "                        <li class=\"nav-item ";
                if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["item"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["below"] ?? null) : null)) {
                    echo " dropdown ";
                }
                echo "\">
                            <a class=\"nav-link dropdown-toggle\">";
                // line 14
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "</a>
                            ";
                // line 15
                if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["item"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["below"] ?? null) : null)) {
                    // line 16
                    echo "                                <div class=\"sous_menu_wrap\"> 
                                    <div class=\"dropdown-menu dropdown-menu-";
                    // line 17
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                    echo "\">
                                        <ul class=\"list-menu\">
                                            ";
                    // line 19
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["item"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["below"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub_item"]) {
                        echo " 
                                                <li class=\"sub_items ";
                        // line 20
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub_item"], "url", [], "any", false, false, true, 20), "getOptions", [], "method", false, false, true, 20), "attributes", [], "any", false, false, true, 20), "class", [], "any", false, false, true, 20), 0, [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                        echo "\">
                                                    ";
                        // line 21
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub_item"], "url", [], "any", false, false, true, 21), "getOptions", [], "method", false, false, true, 21), "attributes", [], "any", false, false, true, 21), "id", [], "any", false, false, true, 21), 0, [], "any", false, false, true, 21) != "remove_link")) {
                            // line 22
                            echo "                                                        <a class=\"sub_item_link no_link\" ";
                            if (twig_test_empty((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["sub_item"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["below"] ?? null) : null))) {
                                echo " href=";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sub_item"], "url", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                                echo " ";
                            }
                            echo ">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sub_item"], "title", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                            echo "</a>
                                                    ";
                        }
                        // line 24
                        echo "                                                    ";
                        if ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["sub_item"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["below"] ?? null) : null)) {
                            echo " 
                                                        <ul class=\"sous-menu\">
                                                            ";
                            // line 26
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["sub_item"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["below"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["ss_item"]) {
                                echo " 
                                                                <li>
                                                                    ";
                                // line 28
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ss_item"], "title", [], "any", false, false, true, 28), 28, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ss_item"], "url", [], "any", false, false, true, 28), 28, $this->source)), "html", null, true);
                                echo " 
                                                                </li>
                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ss_item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 31
                            echo "                                                            ";
                            // line 34
                            echo "                                                        </ul>
                                                    ";
                        }
                        // line 36
                        echo "                                                   
                                                    ";
                        // line 37
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub_item"], "url", [], "any", false, false, true, 37), "getOptions", [], "method", false, false, true, 37), "attributes", [], "any", false, false, true, 37), "class", [], "any", false, false, true, 37), 0, [], "any", false, false, true, 37) == "certifications")) {
                            // line 38
                            echo "                                                        <div class=\"card-img-film\">
                                                            <a href=\"";
                            // line 39
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sub_item"], "url", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                            echo "\">
                                                                <div class=\"img\">
                                                                    <img class=\"img-film\" src=\"/";
                            // line 41
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 41, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 41, $this->source)), "html", null, true);
                            echo "/assets/images/certif-img.png\">
                                                                </div>  
                                                            </a>  
                                                        </div>
                                                    ";
                        }
                        // line 46
                        echo "                                                    ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub_item"], "url", [], "any", false, false, true, 46), "getOptions", [], "method", false, false, true, 46), "attributes", [], "any", false, false, true, 46), "class", [], "any", false, false, true, 46), 0, [], "any", false, false, true, 46) == "film")) {
                            // line 47
                            echo "                                                        <div class=\"card-img-film\">
                                                            <a href=\"";
                            // line 48
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sub_item"], "url", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                            echo "\">
                                                                <div class=\"img\">
                                                                    <img class=\"img-film\" src=\"/";
                            // line 50
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 50, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 50, $this->source)), "html", null, true);
                            echo "/assets/images/img-film.png\">
                                                                    <div class=\"overlay\">
                                                                        <img class=\"play-icon\" src=\"/";
                            // line 52
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 52, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 52, $this->source)), "html", null, true);
                            echo "/assets/images/play-icon.png\">
                                                                    </div>
                                                                </div>  
                                                            </a>  
                                                        </div>
                                                    ";
                        }
                        // line 58
                        echo "                                                </li>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "                                        </ul>
                                    </div>

                                </div>
                            ";
                }
                // line 65
                echo "                        </li>                
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                    ";
            // line 70
            echo "                </ul>
            </div>
            <div class=\"search_div\" id=\"open-bar\">                            
                <img class=\"icon-search\" src=\"/";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 73, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 73, $this->source)), "html", null, true);
            echo "/assets/images_icons/icon-search-menu.png\">                        
            </div>
        </nav>
    ";
        }
        // line 77
        echo "</div>    
<div id=\"search-bar\" class=\"barre-de-recherche\">

    ";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_tweak\TwigExtension']->drupalEntity("block", "exposedformsite_searchpage_1"), "html", null, true);
        echo "
    <div onclick=\"this.parentElement.style.display = 'none';\" class=\"close-search-bar\">
        <img src=\"/";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 82, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 82, $this->source)), "html", null, true);
        echo "/assets/images/close-bar.png\">
    </div>
    ";
        // line 93
        echo "</div>                            
";
    }

    public function getTemplateName()
    {
        return "modules/custom/custom_menus/templates/principal-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 93,  253 => 82,  248 => 80,  243 => 77,  236 => 73,  231 => 70,  229 => 67,  214 => 65,  207 => 60,  200 => 58,  191 => 52,  186 => 50,  181 => 48,  178 => 47,  175 => 46,  167 => 41,  162 => 39,  159 => 38,  157 => 37,  154 => 36,  150 => 34,  148 => 31,  139 => 28,  132 => 26,  126 => 24,  114 => 22,  112 => 21,  108 => 20,  102 => 19,  97 => 17,  94 => 16,  92 => 15,  88 => 14,  81 => 13,  64 => 12,  57 => 8,  51 => 5,  47 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/custom_menus/templates/principal-menu.html.twig", "/var/www/marsa/web/modules/custom/custom_menus/templates/principal-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "for" => 12);
        static $filters = array("escape" => 5);
        static $functions = array("url" => 4, "link" => 28, "drupal_entity" => 80);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
                ['url', 'link', 'drupal_entity']
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
