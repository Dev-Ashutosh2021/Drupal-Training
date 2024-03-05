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

/* themes/contrib/gin/templates/page/page.html.twig */
class __TwigTemplate_b77b42343084ff14085f216b1256c08c extends \Twig\Template
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
        $__internal_b3d9dd94c58234fbec4409b98abb5cb2->enter($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/gin/templates/page/page.html.twig"));

        // line 42
        $context["page_title_block"] = ($this->sandbox->ensureToStringAllowed(($context["active_admin_theme"] ?? null), 42, $this->source) . "_page_title");
        // line 43
        $context["local_actions_block"] = ($this->sandbox->ensureToStringAllowed(($context["active_admin_theme"] ?? null), 43, $this->source) . "_local_actions");
        // line 44
        echo "
<div class=\"gin-secondary-toolbar layout-container\">
  <div class=\"gin-breadcrumb-wrapper\">
  ";
        // line 47
        if ((($context["route_name"] ?? null) == "entity.node.canonical")) {
            // line 48
            echo "    <div class=\"region region-breadcrumb gin-region-breadcrumb\">
      <nav class=\"breadcrumb\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
        <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Breadcrumb"));
            echo "</h2>
        <ol class=\"breadcrumb__list\">
          <li class=\"breadcrumb__item\">
            ";
            // line 53
            if ((($context["entity_edit_url"] ?? null) && ($context["entity_title"] ?? null))) {
                // line 54
                echo "              <a class=\"breadcrumb__link gin-back-to-admin\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_edit_url"] ?? null), 54, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Edit %title", ["%title" => ($context["entity_title"] ?? null)]));
                echo "</a>
            ";
            } else {
                // line 56
                echo "              <a class=\"breadcrumb__link gin-back-to-admin\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("system.admin_content"));
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Back to Administration"));
                echo "</a>
            ";
            }
            // line 58
            echo "          </li>
        </ol>
      </nav>
    </div>
  ";
        } else {
            // line 63
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 65
        echo "  </div>
  ";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "gin_secondary_toolbar", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "
</div>

<div class=\"region-sticky-watcher\"></div>

<header class=\"region region-sticky\">
  <div class=\"layout-container region-sticky__items\">
    <div class=\"region-sticky__items__inner\">
      ";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 74)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["page_title_block"] ?? null)] ?? null) : null), 74, $this->source), "html", null, true);
        echo "
      ";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 75)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["local_actions_block"] ?? null)] ?? null) : null), 75, $this->source), "html", null, true);
        echo "
    </div>
  </div>
</header>

<div class=\"sticky-shadow\"></div>

<div class=\"content-header clearfix\">
  <div class=\"layout-container\">
    ";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 84), 84, $this->source), $this->sandbox->ensureToStringAllowed(($context["page_title_block"] ?? null), 84, $this->source)), "html", null, true);
        echo "
  </div>
</div>

<div class=\"layout-container\">
  ";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_content", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
        echo "
  <main class=\"page-content clearfix\" role=\"main\">
    <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
    ";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
        echo "
    ";
        // line 93
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 93)) {
            // line 94
            echo "      <div class=\"help\">
        ";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 98
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 98), 98, $this->source), $this->sandbox->ensureToStringAllowed(($context["local_actions_block"] ?? null), 98, $this->source)), "html", null, true);
        echo "
  </main>
</div>
";
        
        $__internal_b3d9dd94c58234fbec4409b98abb5cb2->leave($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 98,  147 => 95,  144 => 94,  142 => 93,  138 => 92,  132 => 89,  124 => 84,  112 => 75,  108 => 74,  97 => 66,  94 => 65,  88 => 63,  81 => 58,  73 => 56,  65 => 54,  63 => 53,  57 => 50,  53 => 48,  51 => 47,  46 => 44,  44 => 43,  42 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/page/page.html.twig", "/var/www/html/drupal/web/themes/contrib/gin/templates/page/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "if" => 47);
        static $filters = array("t" => 50, "escape" => 54, "without" => 84);
        static $functions = array("path" => 56);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['t', 'escape', 'without'],
                ['path']
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