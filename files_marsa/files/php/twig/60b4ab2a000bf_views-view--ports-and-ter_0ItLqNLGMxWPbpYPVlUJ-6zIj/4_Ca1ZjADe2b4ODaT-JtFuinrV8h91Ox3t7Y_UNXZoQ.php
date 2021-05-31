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

/* themes/custom/marsa/templates/views/block_home_ports/views-view--ports-and-terminals--block-1.html.twig */
class __TwigTemplate_6ba4d524adceac5d5841f2ee82832af7b19a3faa4618af9cc6137daaa049cb84 extends \Twig\Template
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
            // line 37
            echo "
    <div class=\"container-fluid cont_port\" id=\"cont-port\">
        <div class=\"container cont_port_carte\">
            <p class=\"title_1\">";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Ports and Terminals"));
            echo "</p>
            <p class=\"title_2\">";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Ports and Terminals"));
            echo "</p>
            <div class=\"row_port\">
                <div class=\"carte_interactive\">
                    <img usemap=\"#imgmap202141103642\" class=\"carte\" src=\"";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 44, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 44, $this->source)), "html", null, true);
            echo "/assets/images/map-hp.png\">
                    <map id=\"imgmap202141103642\" name=\"imgmap202141103642\">
                        ";
            // line 46
            $context["results"] = views_get_view_result("ports_and_terminals", "block_2");
            // line 47
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                // line 48
                echo "
                            ";
                // line 50
                echo "                                ";
                $context["desc"] = strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["res"], "_entity", [], "any", false, false, true, 50), "body", [], "any", false, false, true, 50), "value", [], "any", false, false, true, 50), 50, $this->source)));
                // line 51
                echo "                                
                            ";
                // line 53
                echo "                            
                            <area data-desc =\"";
                // line 54
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["desc"] ?? null), 54, $this->source)) > 150)) ? ((twig_slice($this->env, $this->sandbox->ensureToStringAllowed(($context["desc"] ?? null), 54, $this->source), 0, 150) . "...")) : (($context["desc"] ?? null))), "html", null, true);
                echo "\" data-pic=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->extensions['Drupal\twig_tweak\TwigExtension']->imageStyle($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["res"], "_entity", [], "any", false, false, true, 54), "field_image", [], "any", false, false, true, 54), "entity", [], "any", false, false, true, 54), "field_media_image", [], "any", false, false, true, 54), "entity", [], "any", false, false, true, 54), "uri", [], "any", false, false, true, 54), "value", [], "any", false, false, true, 54), 54, $this->source), "medium")]), "html", null, true);
                echo "\" shape=\"rect\" alt=\"\"  title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["res"], "_entity", [], "any", false, false, true, 54), "title", [], "any", false, false, true, 54), "value", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                echo "\" data-name=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["res"], "_entity", [], "any", false, false, true, 54), "title", [], "any", false, false, true, 54), "value", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                echo "\"  coords=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["res"], "_entity", [], "any", false, false, true, 54), "field_longitude", [], "any", false, false, true, 54), "value", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                echo "\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["res"], "_entity", [], "any", false, false, true, 54), "nid", [], "any", false, false, true, 54), "value", [], "any", false, false, true, 54)]), "html", null, true);
                echo "\" target=\"\" />

                     ";
                // line 58
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "
                    ";
            // line 74
            echo "

                        ";
            // line 85
            echo "            
                    </map>
                </div>


                ";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 90, $this->source), "html", null, true);
            echo "

            </div>
        </div>
    </div> 
";
        }
        // line 96
        echo "<script src=\"/";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 96, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 96, $this->source)), "html", null, true);
        echo "/assets/js_map/img-map.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/qtip2/3.0.3/jquery.qtip.min.js\"></script>

<script>
    (function (\$) {

     \$(\"#imgmap202141103642 area\").click(function () {
           var href = \$(this).attr('href');
         window.location.href = href;
   ";
        // line 110
        echo "     });

             \$('#imgmap202141103642 area').each(function () {
                 var alt_name = \$(this).attr('alt');
                 var port_name = \$(this).attr('data-name');
                 var lang = \$('html').attr('lang');

                 var position = \$(this).position();
                 var l = position.left + 20;
                 var t = position.top + 20;

                 \$(this).qtip({
                     content: {
                         text: function (api) {
                             return \"<img src='\" + \$(this).attr(\"data-pic\") + \"' class='dit'>\"+\"<br>\"+ \$(this).attr(\"data-desc\");
                         },
                         title: function (api) {
                             return \"<span style='text-align:center;font-size: 12pt'>\" + port_name + \"</span>\";
                         },
                         style: {
                             name: 'light',
                             title: {'font-size': 12, padding: 5, background: '#A2D959', textAlign: 'center'},
                             background: '#A2D959',
                             color: 'black',
                             textAlign: 'center',
                             border: {
                                 width: 7,
                                 radius: 5,
                                 color: '#A2D959'
                             }
                         }
                     },
                     style: {
                         classes: 'qtip-default  qtip qtip-bootstrap qtip-shadow '
                     },
                     position: {
                         my: 'top left', // Position my top left...
                         at: 'bottom right', // at the bottom right of...
                         target: 'mouse',
                         adjust: {mouse: true, x: 15, y: 15},
                         tooltip: 'bottomRight'
                     }
                 });
             });
         })(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/views/block_home_ports/views-view--ports-and-terminals--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 110,  127 => 96,  118 => 90,  111 => 85,  107 => 74,  104 => 59,  98 => 58,  83 => 54,  80 => 53,  77 => 51,  74 => 50,  71 => 48,  66 => 47,  64 => 46,  59 => 44,  53 => 41,  49 => 40,  44 => 37,  42 => 36,  39 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/views/block_home_ports/views-view--ports-and-terminals--block-1.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/views/block_home_ports/views-view--ports-and-terminals--block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 36, "set" => 46, "for" => 47, "autoescape" => 49);
        static $filters = array("t" => 40, "escape" => 44, "striptags" => 50, "render" => 50, "length" => 54, "slice" => 54, "image_style" => 54);
        static $functions = array("drupal_view_result" => 46, "file_url" => 54, "path" => 54);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for', 'autoescape'],
                ['t', 'escape', 'striptags', 'render', 'length', 'slice', 'image_style'],
                ['drupal_view_result', 'file_url', 'path']
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
