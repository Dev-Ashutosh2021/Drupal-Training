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

/* themes/contrib/gin/templates/form/form-element.html.twig */
class __TwigTemplate_f13065033943069afa8343668b3d57c9 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/gin/templates/form/form-element.html.twig"));

        // line 13
        $context["show_description_toggle"] = (($context["description_toggle"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 13));
        // line 15
        $context["classes"] = ["js-form-item", "form-item", ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 18
($context["type"] ?? null), 18, $this->source))), ("form-type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 19
($context["type"] ?? null), 19, $this->source))), ((twig_in_filter(        // line 20
($context["type"] ?? null), ["checkbox", "radio"])) ? ("form-type--boolean") : ("")), ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 21
($context["name"] ?? null), 21, $this->source))), ("form-item--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 22
($context["name"] ?? null), 22, $this->source))), ((!twig_in_filter(        // line 23
($context["title_display"] ?? null), ["after", "before"])) ? ("form-item--no-label") : ("")), (((        // line 24
($context["disabled"] ?? null) == "disabled")) ? ("form-item--disabled") : ("")), ((        // line 25
($context["errors"] ?? null)) ? ("form-item--error") : ("")), ((        // line 26
($context["show_description_toggle"] ?? null)) ? ("help-icon__description-container") : (""))];
        // line 30
        $context["description_classes"] = ["form-item__description", (((        // line 32
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 35
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 35), 35, $this->source), "html", null, true);
        echo ">
  ";
        // line 36
        if (twig_in_filter(($context["label_display"] ?? null), ["before", "invisible"])) {
            // line 37
            echo "    ";
            if (($context["show_description_toggle"] ?? null)) {
                // line 38
                echo "      <div class=\"help-icon\">
        ";
                // line 39
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 39, $this->source), "html", null, true);
                echo "
        ";
                // line 40
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("gin/gin_description_toggle"), "html", null, true);
                echo "
        <button class=\"help-icon__description-toggle\"></button>
      </div>
    ";
            } else {
                // line 44
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 44, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 46
            echo "  ";
        }
        // line 47
        echo "  ";
        if (($context["show_description_toggle"] ?? null)) {
            // line 48
            echo "  <div class=\"help-icon__element-has-description\">
  ";
        }
        // line 50
        echo "  ";
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 51
            echo "    <span class=\"form-item__prefix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["disabled"] ?? null) == "disabled")) ? (" is-disabled") : ("")));
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 51, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 53
        echo "  ";
        if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 53))) {
            // line 54
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 54), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 54), 54, $this->source), "html", null, true);
            echo ">
      ";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 58
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 58, $this->source), "html", null, true);
        echo "
  ";
        // line 59
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 60
            echo "    <span class=\"form-item__suffix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["disabled"] ?? null) == "disabled")) ? (" is-disabled") : ("")));
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 60, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 62
        echo "  ";
        if ((($context["label_display"] ?? null) == "after")) {
            // line 63
            echo "    ";
            if (($context["show_description_toggle"] ?? null)) {
                // line 64
                echo "      <div class=\"help-icon\">
        ";
                // line 65
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 65, $this->source), "html", null, true);
                echo "
        ";
                // line 66
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("gin/gin_description_toggle"), "html", null, true);
                echo "
        <button class=\"help-icon__description-toggle\"></button>
      </div>
    ";
            } else {
                // line 70
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 70, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 72
            echo "  ";
        }
        // line 73
        echo "  ";
        if (($context["show_description_toggle"] ?? null)) {
            // line 74
            echo "  </div>
  ";
        }
        // line 76
        echo "  ";
        if (($context["errors"] ?? null)) {
            // line 77
            echo "    <div class=\"form-item__error-message\">
      ";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 78, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 81
        echo "  ";
        if ((twig_in_filter(($context["description_display"] ?? null), ["after", "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 81))) {
            // line 82
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 82), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 82), 82, $this->source), "html", null, true);
            echo ">
      ";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 86
        echo "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["description_toggle", "description", "type", "name", "title_display", "disabled", "errors", "description_display", "attributes", "label_display", "label", "prefix", "children", "suffix"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/form/form-element.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  200 => 86,  194 => 83,  189 => 82,  186 => 81,  180 => 78,  177 => 77,  174 => 76,  170 => 74,  167 => 73,  164 => 72,  158 => 70,  151 => 66,  147 => 65,  144 => 64,  141 => 63,  138 => 62,  130 => 60,  128 => 59,  123 => 58,  117 => 55,  112 => 54,  109 => 53,  101 => 51,  98 => 50,  94 => 48,  91 => 47,  88 => 46,  82 => 44,  75 => 40,  71 => 39,  68 => 38,  65 => 37,  63 => 36,  58 => 35,  56 => 32,  55 => 30,  53 => 26,  52 => 25,  51 => 24,  50 => 23,  49 => 22,  48 => 21,  47 => 20,  46 => 19,  45 => 18,  44 => 15,  42 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/form/form-element.html.twig", "/var/www/html/drupal/web/themes/contrib/gin/templates/form/form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 36);
        static $filters = array("clean_class" => 18, "escape" => 35);
        static $functions = array("attach_library" => 40);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                ['attach_library']
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
