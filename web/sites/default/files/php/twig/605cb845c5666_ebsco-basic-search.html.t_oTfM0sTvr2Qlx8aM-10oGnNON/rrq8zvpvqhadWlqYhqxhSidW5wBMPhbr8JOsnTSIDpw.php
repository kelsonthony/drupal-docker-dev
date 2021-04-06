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

/* modules/contrib/edsapi-drupal8-plugin/templates/ebsco-basic-search.html.twig */
class __TwigTemplate_ca184e8a3fdf0712b35f7640505b17a3d28e3e0e72261f93f224508fb3cf08be extends \Twig\Template
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
        // line 26
        echo "
<div class=\"container-inline\">
\t";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Search form basic search"));
        echo "
\t<br/>
\t<form  action=\"";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["results_url"] ?? null), 30, $this->source), "html", null, true);
        echo "\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "search-form", 1 => "search-block-form"], "method", false, false, true, 30), 30, $this->source), "html", null, true);
        echo " >
\t\t";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["search_form"] ?? null), 31, $this->source), "html", null, true);
        echo "
\t</form>\t
\t<a href=\"";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["advanced_search_url"] ?? null), 33, $this->source), "html", null, true);
        echo "\" alt=\"Advanced search\"> advanced search</a>
</div>

";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["edsinfo"] ?? null), 36, $this->source), "html", null, true);
        echo "

";
        // line 38
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["error_message"] ?? null)))) {
            // line 39
            echo "\t\t<p><strong class=\"color : red;\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Error : "));
            echo "  Please check EDS API definitions in the admin </strong></p>
";
        }
        // line 41
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/edsapi-drupal8-plugin/templates/ebsco-basic-search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 41,  72 => 39,  70 => 38,  65 => 36,  59 => 33,  54 => 31,  48 => 30,  43 => 28,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/edsapi-drupal8-plugin/templates/ebsco-basic-search.html.twig", "/var/www/html/web/modules/contrib/edsapi-drupal8-plugin/templates/ebsco-basic-search.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 38);
        static $filters = array("t" => 28, "escape" => 30, "render" => 38);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape', 'render'],
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
