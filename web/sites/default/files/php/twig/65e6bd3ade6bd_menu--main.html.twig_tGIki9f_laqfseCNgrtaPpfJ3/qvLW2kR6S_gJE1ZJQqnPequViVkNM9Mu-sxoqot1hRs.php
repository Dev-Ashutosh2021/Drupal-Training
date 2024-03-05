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

/* themes/contrib/bootstrap5/templates/navigation/menu--main.html.twig */
class __TwigTemplate_3d949afa348aa89a116d01df494da5b6 extends \Twig\Template
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
        $__internal_b3d9dd94c58234fbec4409b98abb5cb2->enter($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/bootstrap5/templates/navigation/menu--main.html.twig"));

        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_build_menu", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 27, $context, $this->getSourceContext()));
        echo "

";
        // line 46
        echo "
";
        
        $__internal_b3d9dd94c58234fbec4409b98abb5cb2->leave($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof);

    }

    // line 29
    public function macro_build_menu($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_b3d9dd94c58234fbec4409b98abb5cb2 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
            $__internal_b3d9dd94c58234fbec4409b98abb5cb2->enter($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "build_menu"));

            // line 30
            echo "  ";
            $macros["menus"] = $this;
            // line 31
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 32
                echo "    ";
                // line 33
                $context["ul_classes"] = [0 => (((                // line 34
($context["menu_level"] ?? null) == 0)) ? ("navbar-nav justify-content-end flex-wrap") : ("")), 1 => (((                // line 35
($context["menu_level"] ?? null) > 0)) ? ("dropdown-menu") : ("")), 2 => ("nav-level-" . $this->sandbox->ensureToStringAllowed(                // line 36
($context["menu_level"] ?? null), 36, $this->source))];
                // line 39
                echo "    <ul";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["ul_classes"] ?? null)], "method", false, false, true, 39), 39, $this->source), "html", null, true);
                echo ">
    ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 41
                    echo "      ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_add_link", [$context["item"], twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["ul_classes"] ?? null)], "method", false, false, true, 41), ($context["menu_level"] ?? null)], 41, $context, $this->getSourceContext()));
                    echo "
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "    </ul>
  ";
            }
            
            $__internal_b3d9dd94c58234fbec4409b98abb5cb2->leave($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 47
    public function macro_add_link($__item__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_b3d9dd94c58234fbec4409b98abb5cb2 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
            $__internal_b3d9dd94c58234fbec4409b98abb5cb2->enter($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "add_link"));

            // line 48
            echo "  ";
            $macros["menus"] = $this;
            // line 49
            echo "  ";
            // line 50
            $context["list_item_classes"] = [0 => "nav-item", 1 => ((twig_get_attribute($this->env, $this->source,             // line 52
($context["item"] ?? null), "is_expanded", [], "any", false, false, true, 52)) ? ("dropdown") : (""))];
            // line 55
            echo "  ";
            // line 56
            $context["link_class"] = [0 => (((            // line 57
($context["menu_level"] ?? null) == 0)) ? ("nav-link") : ("")), 1 => ((twig_get_attribute($this->env, $this->source,             // line 58
($context["item"] ?? null), "in_active_trail", [], "any", false, false, true, 58)) ? ("active") : ("")), 2 => ((((            // line 59
($context["menu_level"] ?? null) == 0) && (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "is_expanded", [], "any", false, false, true, 59) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "is_collapsed", [], "any", false, false, true, 59)))) ? ("dropdown-toggle") : ("")), 3 => (((            // line 60
($context["menu_level"] ?? null) > 0)) ? ("dropdown-item") : (""))];
            // line 63
            echo "  ";
            // line 64
            $context["toggle_class"] = [];
            // line 67
            echo "  <li";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, false, true, 67), "addClass", [0 => ($context["list_item_classes"] ?? null)], "method", false, false, true, 67), 67, $this->source), "html", null, true);
            echo ">
    ";
            // line 68
            if (((($context["menu_level"] ?? null) == 0) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 68))) {
                // line 69
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, true, 69), 69, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 69), 69, $this->source), ["class" => ($context["link_class"] ?? null), "role" => "button", "data-bs-toggle" => "dropdown", "aria-expanded" => "false", "title" => ((t("Expand menu") . " ") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, true, 69), 69, $this->source))]), "html", null, true);
                echo "
      ";
                // line 70
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_build_menu", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 70), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 70, $context, $this->getSourceContext()));
                echo "
    ";
            } else {
                // line 72
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, true, 72), 72, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 72), 72, $this->source), ["class" => ($context["link_class"] ?? null)]), "html", null, true);
                echo "
    ";
            }
            // line 74
            echo "  </li>
";
            
            $__internal_b3d9dd94c58234fbec4409b98abb5cb2->leave($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap5/templates/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 74,  178 => 72,  173 => 70,  168 => 69,  166 => 68,  161 => 67,  159 => 64,  157 => 63,  155 => 60,  154 => 59,  153 => 58,  152 => 57,  151 => 56,  149 => 55,  147 => 52,  146 => 50,  144 => 49,  141 => 48,  123 => 47,  109 => 43,  100 => 41,  96 => 40,  91 => 39,  89 => 36,  88 => 35,  87 => 34,  86 => 33,  84 => 32,  81 => 31,  78 => 30,  60 => 29,  52 => 46,  47 => 27,  44 => 22,  42 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap5/templates/navigation/menu--main.html.twig", "/var/www/html/drupal/web/themes/contrib/bootstrap5/templates/navigation/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "macro" => 29, "if" => 31, "set" => 33, "for" => 40);
        static $filters = array("escape" => 39, "t" => 69);
        static $functions = array("link" => 69);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'set', 'for'],
                ['escape', 't'],
                ['link']
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
