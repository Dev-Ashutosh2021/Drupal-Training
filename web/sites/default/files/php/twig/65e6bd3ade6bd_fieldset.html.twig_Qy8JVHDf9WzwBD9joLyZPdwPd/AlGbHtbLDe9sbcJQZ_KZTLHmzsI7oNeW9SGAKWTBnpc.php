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

/* themes/contrib/gin/templates/form/fieldset.html.twig */
class __TwigTemplate_3e436936e551f26c8c0fa26c532257dd extends \Twig\Template
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
        $__internal_b3d9dd94c58234fbec4409b98abb5cb2 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b3d9dd94c58234fbec4409b98abb5cb2->enter($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/gin/templates/form/fieldset.html.twig"));

        // line 29
        $context["show_description_toggle"] = (($context["description_toggle"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 29));
        // line 31
        $context["classes"] = [0 => "fieldset", 1 => ((twig_get_attribute($this->env, $this->source,         // line 33
($context["attributes"] ?? null), "hasClass", [0 => "fieldgroup"], "method", false, false, true, 33)) ? ("fieldset--group") : ("")), 2 => "js-form-item", 3 => "form-item", 4 => "js-form-wrapper", 5 => "form-wrapper", 6 => ((        // line 38
($context["show_description_toggle"] ?? null)) ? ("help-icon__description-container") : (""))];
        // line 42
        $context["wrapper_classes"] = [0 => "fieldset__wrapper", 1 => ((twig_get_attribute($this->env, $this->source,         // line 44
($context["attributes"] ?? null), "hasClass", [0 => "fieldgroup"], "method", false, false, true, 44)) ? ("fieldset__wrapper--group") : (""))];
        // line 48
        $context["legend_span_classes"] = [0 => "fieldset__label", 1 => ((twig_get_attribute($this->env, $this->source,         // line 50
($context["attributes"] ?? null), "hasClass", [0 => "fieldgroup"], "method", false, false, true, 50)) ? ("fieldset__label--group") : ("")), 2 => ((        // line 51
($context["required"] ?? null)) ? ("js-form-required") : ("")), 3 => ((        // line 52
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 56
        $context["legend_classes"] = [0 => "fieldset__legend", 1 => (((twig_get_attribute($this->env, $this->source,         // line 58
($context["attributes"] ?? null), "hasClass", [0 => "fieldgroup"], "method", false, false, true, 58) &&  !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", [0 => "form-composite"], "method", false, false, true, 58))) ? ("fieldset__legend--group") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,         // line 59
($context["attributes"] ?? null), "hasClass", [0 => "form-composite"], "method", false, false, true, 59)) ? ("fieldset__legend--composite") : ("")), 3 => (((        // line 60
($context["title_display"] ?? null) == "invisible")) ? ("fieldset__legend--invisible") : ("fieldset__legend--visible"))];
        // line 64
        $context["description_classes"] = [0 => "fieldset__description", 1 => (((        // line 66
($context["show_description_toggle"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 69
        echo "<fieldset";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 69), 69, $this->source), "html", null, true);
        echo ">
  ";
        // line 70
        if (($context["show_description_toggle"] ?? null)) {
            // line 71
            echo "    <div class=\"help-icon\">
  ";
        }
        // line 73
        echo "  ";
        // line 74
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 74)) {
            // line 75
            echo "    <legend";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["legend"] ?? null), "attributes", [], "any", false, false, true, 75), "addClass", [0 => ($context["legend_classes"] ?? null)], "method", false, false, true, 75), 75, $this->source), "html", null, true);
            echo ">
      <span";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["legend_span"] ?? null), "attributes", [], "any", false, false, true, 76), "addClass", [0 => ($context["legend_span_classes"] ?? null)], "method", false, false, true, 76), 76, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "</span>
    </legend>
  ";
        }
        // line 79
        echo "  ";
        if (($context["show_description_toggle"] ?? null)) {
            // line 80
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("gin/gin_description_toggle"), "html", null, true);
            echo "
      <button class=\"help-icon__description-toggle\"></button>
    </div>
  ";
        }
        // line 84
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["wrapper_classes"] ?? null)], "method", false, false, true, 84), 84, $this->source), "html", null, true);
        echo ">
    ";
        // line 85
        if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 85))) {
            // line 86
            echo "      <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 86), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 86), 86, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
            echo "</div>
    ";
        }
        // line 88
        echo "    ";
        if (($context["inline_items"] ?? null)) {
            // line 89
            echo "    <div class=\"container-inline\">
      ";
        }
        // line 91
        echo "
      ";
        // line 92
        if (($context["prefix"] ?? null)) {
            // line 93
            echo "        <span class=\"fieldset__prefix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 93, $this->source), "html", null, true);
            echo "</span>
      ";
        }
        // line 95
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 95, $this->source), "html", null, true);
        echo "
      ";
        // line 96
        if (($context["suffix"] ?? null)) {
            // line 97
            echo "        <span class=\"fieldset__suffix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 97, $this->source), "html", null, true);
            echo "</span>
      ";
        }
        // line 99
        echo "      ";
        if (($context["errors"] ?? null)) {
            // line 100
            echo "        <div class=\"fieldset__error-message\">
          ";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 101, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 104
        echo "      ";
        if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 104))) {
            // line 105
            echo "        <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 105), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 105), 105, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "</div>
      ";
        }
        // line 107
        echo "
      ";
        // line 108
        if (($context["inline_items"] ?? null)) {
            // line 109
            echo "    </div>
    ";
        }
        // line 111
        echo "  </div>
</fieldset>
";
        
        $__internal_b3d9dd94c58234fbec4409b98abb5cb2->leave($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/form/fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 111,  178 => 109,  176 => 108,  173 => 107,  165 => 105,  162 => 104,  156 => 101,  153 => 100,  150 => 99,  144 => 97,  142 => 96,  137 => 95,  131 => 93,  129 => 92,  126 => 91,  122 => 89,  119 => 88,  111 => 86,  109 => 85,  104 => 84,  96 => 80,  93 => 79,  85 => 76,  80 => 75,  77 => 74,  75 => 73,  71 => 71,  69 => 70,  64 => 69,  62 => 66,  61 => 64,  59 => 60,  58 => 59,  57 => 58,  56 => 56,  54 => 52,  53 => 51,  52 => 50,  51 => 48,  49 => 44,  48 => 42,  46 => 38,  45 => 33,  44 => 31,  42 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/form/fieldset.html.twig", "/var/www/html/drupal/web/themes/contrib/gin/templates/form/fieldset.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "if" => 70);
        static $filters = array("escape" => 69);
        static $functions = array("attach_library" => 80);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
