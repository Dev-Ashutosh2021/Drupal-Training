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

/* @gin/navigation/menu--toolbar--gin.html.twig */
class __TwigTemplate_5ed686d2bc72773f252462a0922a9da2 extends \Twig\Template
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
        $__internal_b3d9dd94c58234fbec4409b98abb5cb2->enter($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@gin/navigation/menu--toolbar--gin.html.twig"));

        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, false, ($context["menu_name"] ?? null), ($context["icon_default"] ?? null), ($context["icon_path"] ?? null), ($context["toolbar_variant"] ?? null)], 29, $context, $this->getSourceContext()));
        echo "

";
        
        $__internal_b3d9dd94c58234fbec4409b98abb5cb2->leave($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof);

    }

    // line 31
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__parent__ = null, $__menu_name__ = null, $__icon_default__ = null, $__icon_path__ = null, $__toolbar_variant__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "parent" => $__parent__,
            "menu_name" => $__menu_name__,
            "icon_default" => $__icon_default__,
            "icon_path" => $__icon_path__,
            "toolbar_variant" => $__toolbar_variant__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_b3d9dd94c58234fbec4409b98abb5cb2 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
            $__internal_b3d9dd94c58234fbec4409b98abb5cb2->enter($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "menu_links"));

            // line 32
            echo "  ";
            $macros["menus"] = $this;
            // line 33
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 34
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 35
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "toolbar-menu"], "method", false, false, true, 35), 35, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 37
                    echo "      <ul class=\"toolbar-menu\">
    ";
                }
                // line 39
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
                    // line 40
                    echo "      ";
                    // line 41
                    $context["classes"] = [0 => "menu-item", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 43
$context["item"], "is_expanded", [], "any", false, false, true, 43)) ? ("menu-item--expanded") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 44
$context["item"], "is_collapsed", [], "any", false, false, true, 44)) ? ("menu-item--collapsed") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 45
$context["item"], "in_active_trail", [], "any", false, false, true, 45)) ? ("menu-item--active-trail") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                     // line 46
$context["item"], "gin_id", [], "any", false, false, true, 46)) ? (("menu-item__" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "gin_id", [], "any", false, false, true, 46), 46, $this->source))) : (""))];
                    // line 49
                    echo "
      ";
                    // line 51
                    echo "      ";
                    if ((((($context["menu_level"] ?? null) == 0) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 51) == 1)) && (twig_get_attribute($this->env, $this->source, $context["item"], "gin_id", [], "any", false, false, true, 51) != "admin_toolbar_tools-help"))) {
                        // line 52
                        echo "        <li class=\"menu-item menu-item--expanded menu-item__tools\">
          ";
                        // line 53
                        if (((($context["icon_default"] ?? null) == false) && (($context["icon_path"] ?? null) != ""))) {
                            // line 54
                            echo "            <a href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                            echo "\" class=\"toolbar-logo\" data-drupal-link-system-path=\"<front>\">
              <img src=\"";
                            // line 55
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["icon_path"] ?? null), 55, $this->source)), "html", null, true);
                            echo "\" class=\"toolbar-icon-home\" alt=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                            echo "\" />
            </a>
          ";
                        } else {
                            // line 58
                            echo "            <a href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                            echo "\" class=\"toolbar-icon toolbar-icon-admin-toolbar-tools-help toolbar-icon-default\" data-drupal-link-system-path=\"<front>\">
              ";
                            // line 59
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                            echo "
            </a>
          ";
                        }
                        // line 62
                        echo "        </li>
      ";
                    }
                    // line 64
                    echo "
      ";
                    // line 68
                    echo "
      ";
                    // line 70
                    echo "      ";
                    if (((($context["menu_level"] ?? null) == 1) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 70) == 1))) {
                        // line 71
                        echo "        <li class=\"menu-item-title\">
          <h2 class=\"toolbar-menu__title\">
            <a href=\"";
                        // line 73
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "title", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                        echo "</a>
          </h2>
        </li>
        ";
                        // line 76
                        if ((($context["toolbar_variant"] ?? null) == "vertical")) {
                            // line 77
                            echo "          <li class=\"menu-item\">
            <a href=\"";
                            // line 78
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                            echo "\" class=\"toolbar-icon\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Overview"));
                            echo "</a>
          </li>
        ";
                        }
                        // line 81
                        echo "      ";
                    } elseif (((($context["menu_level"] ?? null) > 1) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 81) == 1))) {
                        // line 82
                        echo "        <li class=\"menu-item-title\">
          <h3 class=\"toolbar-menu__sub-title\">
            <a href=\"";
                        // line 84
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "title", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                        echo "</a>
          </h3>
        </li>
        ";
                        // line 87
                        if ((($context["toolbar_variant"] ?? null) == "vertical")) {
                            // line 88
                            echo "          <li class=\"menu-item\">
            <a href=\"";
                            // line 89
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                            echo "\" class=\"toolbar-icon\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Overview"));
                            echo "</a>
          </li>
        ";
                        }
                        // line 92
                        echo "      ";
                    }
                    // line 93
                    echo "
      <li";
                    // line 94
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 94), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 94), 94, $this->source), "html", null, true);
                    echo ">
        ";
                    // line 95
                    if ((((twig_get_attribute($this->env, $this->source, $context["item"], "gin_id", [], "any", false, false, true, 95) == "admin_toolbar_tools-help") && (($context["icon_default"] ?? null) == false)) && (($context["icon_path"] ?? null) != ""))) {
                        // line 96
                        echo "          <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                        echo "\" class=\"toolbar-logo\" data-drupal-link-system-path=\"<front>\">
            <img src=\"";
                        // line 97
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["icon_path"] ?? null), 97, $this->source)), "html", null, true);
                        echo "\" class=\"toolbar-icon-home\" alt=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                        echo "\" />
          </a>
        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 99
$context["item"], "gin_id", [], "any", false, false, true, 99) == "admin_toolbar_tools-help")) {
                        // line 100
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink("Drupal", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 100), 100, $this->source), ["class" => [0 => "toolbar-icon-default"]]), "html", null, true);
                        echo "
        ";
                    } else {
                        // line 102
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 102), 102, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 102), 102, $this->source), ["class" => [0 => ((twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 102)) ? ("is-active") : (""))]]), "html", null, true);
                        echo "
        ";
                    }
                    // line 104
                    echo "        ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 104)) {
                        // line 105
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 105), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), $context["item"], ($context["menu_name"] ?? null), ($context["icon_default"] ?? null), ($context["icon_path"] ?? null), ($context["toolbar_variant"] ?? null)], 105, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 107
                    echo "      </li>
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
                // line 109
                echo "    </ul>
  ";
            }
            // line 111
            echo "
  ";
            // line 112
            if ((($context["menu_level"] ?? null) == 0)) {
                // line 113
                echo "    ";
                // line 114
                echo "    <a href=\"#\" class=\"toolbar-menu__trigger trigger\" role=\"button\" aria-pressed=\"false\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close"));
                echo "</a>
  ";
            }
            
            $__internal_b3d9dd94c58234fbec4409b98abb5cb2->leave($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@gin/navigation/menu--toolbar--gin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 114,  297 => 113,  295 => 112,  292 => 111,  288 => 109,  273 => 107,  267 => 105,  264 => 104,  258 => 102,  252 => 100,  250 => 99,  243 => 97,  238 => 96,  236 => 95,  232 => 94,  229 => 93,  226 => 92,  218 => 89,  215 => 88,  213 => 87,  205 => 84,  201 => 82,  198 => 81,  190 => 78,  187 => 77,  185 => 76,  177 => 73,  173 => 71,  170 => 70,  167 => 68,  164 => 64,  160 => 62,  154 => 59,  149 => 58,  141 => 55,  136 => 54,  134 => 53,  131 => 52,  128 => 51,  125 => 49,  123 => 46,  122 => 45,  121 => 44,  120 => 43,  119 => 41,  117 => 40,  99 => 39,  95 => 37,  89 => 35,  86 => 34,  83 => 33,  80 => 32,  57 => 31,  47 => 29,  44 => 24,  42 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "@gin/navigation/menu--toolbar--gin.html.twig", "/var/www/html/drupal/web/themes/contrib/gin/templates/navigation/menu--toolbar--gin.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "macro" => 31, "if" => 33, "for" => 39, "set" => 41);
        static $filters = array("escape" => 35, "t" => 55);
        static $functions = array("path" => 54, "file_url" => 55, "link" => 100);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 't'],
                ['path', 'file_url', 'link']
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