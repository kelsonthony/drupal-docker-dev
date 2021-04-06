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

/* modules/contrib/edsapi-drupal8-plugin/templates/ebsco-results.html.twig */
class __TwigTemplate_8a3e8293e072d005e27999188041d5322f3e4621ee93ac3646f94766160b7702 extends \Twig\Template
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

";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["search_form"] ?? null), 28, $this->source), "html", null, true);
        echo "
<br style=\"clear:both\"/>
";
        // line 30
        if (array_key_exists("record_count", $context)) {
            // line 31
            echo "
\t ";
            // line 32
            if ((($context["record_count"] ?? null) == 0)) {
                echo " 
\t\t<div class=\"error\">";
                // line 33
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["msg_no_results"] ?? null), 33, $this->source), "html", null, true);
                echo " </div>
\t ";
            } else {
                // line 35
                echo "\t\t";
                // line 36
                echo "\t\t";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Showing"));
                echo "  <strong>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["record_start"] ?? null), 36, $this->source), "html", null, true);
                echo " </strong> - <strong> ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["record_end"] ?? null), 36, $this->source), "html", null, true);
                echo "</strong> ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("of"));
                echo "  <strong>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["record_count"] ?? null), 36, $this->source), "html", null, true);
                echo "</strong> 

\t\t";
                // line 38
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("for search"));
                echo " <strong>' ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["lookfor"] ?? null), 38, $this->source), "html", null, true);
                echo "'</strong>

\t\t";
                // line 40
                if (array_key_exists("search_time", $context)) {
                    // line 41
                    echo "\t\t\t, ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("query time"));
                    echo ": ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["search_time"] ?? null), 41, $this->source), "html", null, true);
                    echo " s
\t\t";
                }
                // line 43
                echo "
\t\t<div style=\"margin-left:auto;padding-bottom:20px;width:400px\">
\t\t";
                // line 45
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sort_form"] ?? null), 45, $this->source), "html", null, true);
                echo "
\t\t</div>
\t\t<!-- upper pager -->
\t\t";
                // line 48
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 48, $this->source));
                echo "
\t\t\t\t
\t\t <div class=\"resultslist-2columns\">
\t\t\t";
                // line 56
                echo "\t\t\t<div class=\"resultslist-facets\">
\t\t\t\t";
                // line 57
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["processHtmlFacets"] ?? null), 57, $this->source));
                echo "
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t
\t\t\t";
                // line 67
                echo "\t\t\t<div class=\"resultslist-records\">

\t\t\t\t";
                // line 69
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["guest_banner"] ?? null), 69, $this->source), "html", null, true);
                echo "
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t";
                // line 73
                echo "\t\t\t\t";
                if ( !twig_test_empty(($context["autoSuggestTerms"] ?? null))) {
                    // line 74
                    echo "\t\t\t\t\t ";
                    $context["suggestString"] = "";
                    // line 75
                    echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<p><strong>";
                    // line 77
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Did you mean"));
                    echo "  ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suggestString"] ?? null), 77, $this->source), "html", null, true);
                    echo "</strong></p>
\t\t\t\t";
                }
                // line 79
                echo "\t\t\t\t 

\t\t\t\t<br style=\"clear:both\" />
\t\t\t\t
\t\t\t\t";
                // line 83
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["relatedContent"] ?? null), 83, $this->source));
                echo "
\t\t\t\t<br/>
\t\t\t\t";
                // line 85
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["processHtmlRecords"] ?? null), 85, $this->source));
                echo "
\t\t\t\t<br/>
\t\t\t\t<!-- bottom pager -->
\t\t\t\t";
                // line 88
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 88, $this->source));
                echo "\t\t\t
\t\t\t</div>
\t\t</div> 
\t\t
\t\t
\t\t\t
\t\t 
\t ";
            }
            // line 96
            echo "\t 

";
        } else {
            // line 99
            echo "\t<p><strong class=\"color : red;\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Error : "));
            echo "  Please check EDS API definitions in the admin </strong></p>
";
        }
        // line 101
        echo " 
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/edsapi-drupal8-plugin/templates/ebsco-results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 101,  182 => 99,  177 => 96,  166 => 88,  160 => 85,  155 => 83,  149 => 79,  142 => 77,  138 => 75,  135 => 74,  132 => 73,  126 => 69,  122 => 67,  114 => 57,  111 => 56,  105 => 48,  99 => 45,  95 => 43,  87 => 41,  85 => 40,  78 => 38,  64 => 36,  62 => 35,  57 => 33,  53 => 32,  50 => 31,  48 => 30,  43 => 28,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/edsapi-drupal8-plugin/templates/ebsco-results.html.twig", "/var/www/html/web/modules/contrib/edsapi-drupal8-plugin/templates/ebsco-results.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 30, "set" => 74);
        static $filters = array("escape" => 28, "t" => 36, "raw" => 48);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 't', 'raw'],
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
