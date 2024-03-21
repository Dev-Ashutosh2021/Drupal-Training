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

/* themes/contrib/gin/templates/navigation/toolbar--gin.html.twig */
class __TwigTemplate_05a56989ab59d0e66d068796f924a7c2 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/gin/templates/navigation/toolbar--gin.html.twig"));

        // line 23
        $context["gin_toolbar_id"] = (((($context["toolbar_variant"] ?? null) != "classic")) ? ("gin-toolbar-bar") : ("toolbar-bar"));
        // line 24
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["toolbar"], "method", false, false, true, 24), 24, $this->source), "html", null, true);
        echo ">
  <nav";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["toolbar_attributes"] ?? null), "addClass", ["toolbar-bar", "clearfix"], "method", false, false, true, 25), "setAttribute", ["id", ($context["gin_toolbar_id"] ?? null)], "method", false, false, true, 25), 25, $this->source), "html", null, true);
        echo ">
    <h2 class=\"visually-hidden\">";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["toolbar_heading"] ?? null), 26, $this->source), "html", null, true);
        echo "</h2>
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 28
            echo "      ";
            $context["tray"] = (($__internal_compile_0 = ($context["trays"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null);
            // line 29
            echo "      ";
            $context["user_menu"] = (((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "links", [], "any", false, false, true, 29)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["user_links"] ?? null) : null)) ? ("user-menu") : (false));
            // line 30
            echo "      ";
            if (((            // line 31
($context["toolbar_variant"] ?? null) != "classic") && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 32
$context["tab"], "attributes", [], "any", false, false, true, 32), "id", [], "any", false, false, true, 32) == "admin-toolbar-search-tab") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 33
$context["tab"], "attributes", [], "any", false, false, true, 33), "id", [], "any", false, false, true, 33) == "responsive-preview-toolbar-tab")))) {
                // line 36
                echo "        ";
                // line 37
                echo "      ";
            } else {
                // line 38
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, true, 38), "id", [], "any", false, false, true, 38) == "toolbar-tab-tour") && (($context["toolbar_variant"] ?? null) != "classic"))) {
                    // line 39
                    echo "        <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, true, 39), "addClass", ["toolbar-tab", ($context["user_menu"] ?? null), (((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 39)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#id"] ?? null) : null)) ? (("toolbar-tab--" . $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 39)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#id"] ?? null) : null), 39, $this->source))) : (null))], "method", false, false, true, 39), "removeAttribute", ["id"], "method", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo ">
        ";
                } else {
                    // line 41
                    echo "        <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, true, 41), "addClass", ["toolbar-tab", ($context["user_menu"] ?? null), (((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 41)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#id"] ?? null) : null)) ? (("toolbar-tab--" . $this->sandbox->ensureToStringAllowed((($__internal_compile_5 = twig_get_attribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 41)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#id"] ?? null) : null), 41, $this->source))) : (null))], "method", false, false, true, 41), 41, $this->source), "html", null, true);
                    echo ">
        ";
                }
                // line 43
                echo "          ";
                if (((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 43)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#id"] ?? null) : null) == "toolbar-item-administration")) {
                    // line 44
                    echo "            <a class=\"toolbar-menu__logo\" href=\"/admin/content\" aria-label=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toolbar Menu Logo"));
                    echo "\">
              <span class=\"visually-hidden\">";
                    // line 45
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toolbar Menu Logo"));
                    echo "</span>
            </a>
            ";
                    // line 47
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                    echo "
          ";
                } else {
                    // line 49
                    echo "            ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                    echo "
          ";
                }
                // line 51
                echo "          <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "attributes", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                echo ">
            ";
                // line 52
                if (twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 52)) {
                    // line 53
                    echo "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                    echo "\">
                <h3 class=\"toolbar-tray-name visually-hidden\">";
                    // line 54
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                    echo "</h3>
            ";
                } else {
                    // line 56
                    echo "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
            ";
                }
                // line 58
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "links", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                echo "
            </nav>
          </div>
        </div>
      ";
            }
            // line 63
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "  </nav>
  ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["remainder"] ?? null), 65, $this->source), "html", null, true);
        echo "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["toolbar_variant", "attributes", "toolbar_attributes", "toolbar_heading", "tabs", "trays", "remainder"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/navigation/toolbar--gin.html.twig";
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
        return array (  156 => 65,  153 => 64,  147 => 63,  138 => 58,  134 => 56,  129 => 54,  124 => 53,  122 => 52,  117 => 51,  111 => 49,  106 => 47,  101 => 45,  96 => 44,  93 => 43,  87 => 41,  81 => 39,  78 => 38,  75 => 37,  73 => 36,  71 => 33,  70 => 32,  69 => 31,  67 => 30,  64 => 29,  61 => 28,  57 => 27,  53 => 26,  49 => 25,  44 => 24,  42 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for the administrative toolbar.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper.
 * - toolbar_attributes: HTML attributes to apply to the toolbar.
 * - toolbar_heading: The heading or label for the toolbar.
 * - tabs: List of tabs for the toolbar.
 *   - attributes: HTML attributes for the tab container.
 *   - link: Link or button for the menu tab.
 * - trays: Toolbar tray list, each associated with a tab. Each tray in trays
 *   contains:
 *   - attributes: HTML attributes to apply to the tray.
 *   - label: The tray's label.
 *   - links: The tray menu links.
 * - remainder: Any non-tray, non-tab elements left to be rendered.
 *
 * @see template_preprocess_toolbar()
 */
#}
{% set gin_toolbar_id = toolbar_variant != 'classic' ? 'gin-toolbar-bar' : 'toolbar-bar' %}
<div{{ attributes.addClass('toolbar') }}>
  <nav{{ toolbar_attributes.addClass('toolbar-bar', 'clearfix').setAttribute('id', gin_toolbar_id) }}>
    <h2 class=\"visually-hidden\">{{ toolbar_heading }}</h2>
    {% for key, tab in tabs %}
      {% set tray = trays[key] %}
      {% set user_menu = tray.links['user_links'] ? 'user-menu' : false %}
      {% if
        toolbar_variant != 'classic' and (
          tab.attributes.id == 'admin-toolbar-search-tab' or
          tab.attributes.id == 'responsive-preview-toolbar-tab'
        )
      %}
        {# render nothing #}
      {% else %}
        {% if tab.attributes.id == 'toolbar-tab-tour' and toolbar_variant != 'classic' %}
        <div{{ tab.attributes.addClass('toolbar-tab', user_menu, tab.link['#id'] ? 'toolbar-tab--' ~ tab.link['#id'] : null).removeAttribute('id') }}>
        {% else %}
        <div{{ tab.attributes.addClass('toolbar-tab', user_menu, tab.link['#id'] ? 'toolbar-tab--' ~ tab.link['#id'] : null) }}>
        {% endif %}
          {% if tab.link['#id'] == 'toolbar-item-administration' %}
            <a class=\"toolbar-menu__logo\" href=\"/admin/content\" aria-label=\"{{ 'Toolbar Menu Logo'|t }}\">
              <span class=\"visually-hidden\">{{ 'Toolbar Menu Logo'|t }}</span>
            </a>
            {{ tab.link }}
          {% else %}
            {{ tab.link }}
          {% endif %}
          <div{{ tray.attributes }}>
            {% if tray.label %}
              <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"{{ tray.label }}\">
                <h3 class=\"toolbar-tray-name visually-hidden\">{{ tray.label }}</h3>
            {% else %}
              <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
            {% endif %}
            {{ tray.links }}
            </nav>
          </div>
        </div>
      {% endif %}
    {% endfor %}
  </nav>
  {{ remainder }}
</div>
", "themes/contrib/gin/templates/navigation/toolbar--gin.html.twig", "/var/www/html/drupal/web/themes/contrib/gin/templates/navigation/toolbar--gin.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 23, "for" => 27, "if" => 30);
        static $filters = array("escape" => 24, "t" => 44);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 't'],
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
