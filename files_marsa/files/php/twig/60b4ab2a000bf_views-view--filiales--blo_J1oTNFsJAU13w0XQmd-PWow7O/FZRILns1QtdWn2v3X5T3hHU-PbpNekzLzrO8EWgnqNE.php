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

/* themes/custom/marsa/templates/views/block_filiales/views-view--filiales--block-1.html.twig */
class __TwigTemplate_71d28dd05380ce8317e25ae6a498c5f1c5c13b78af9ceb491ad9b884a1218487 extends \Twig\Template
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
    
      <div class=\"container-fluid cont_filiales\">
        <div class=\"container cont_filiale\">
            <p class=\"title_1\">";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Our Subsidiaries"));
            echo "</p>
            <p class=\"title_2\"> ";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Our Subsidiaries"));
            echo "</p>
            <div class=\"filiales\">
                  ";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 44, $this->source), "html", null, true);
            echo "
                
            </div>            
        </div>
    </div>
 
";
        }
        // line 51
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/marsa/templates/views/block_filiales/views-view--filiales--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 51,  59 => 44,  54 => 42,  50 => 41,  44 => 37,  42 => 36,  39 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/marsa/templates/views/block_filiales/views-view--filiales--block-1.html.twig", "/var/www/marsa/web/themes/custom/marsa/templates/views/block_filiales/views-view--filiales--block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 36);
        static $filters = array("t" => 41, "escape" => 44);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
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
