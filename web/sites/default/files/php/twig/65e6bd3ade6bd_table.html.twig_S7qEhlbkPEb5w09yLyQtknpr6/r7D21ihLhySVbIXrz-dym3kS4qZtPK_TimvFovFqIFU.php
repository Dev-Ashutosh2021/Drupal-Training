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

/* themes/contrib/gin/templates/dataset/table.html.twig */
class __TwigTemplate_a38faff1adb1789c40160592fa36c152 extends \Twig\Template
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
        $__internal_b3d9dd94c58234fbec4409b98abb5cb2->enter($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/gin/templates/dataset/table.html.twig"));

        // line 42
        echo "<div class=\"layer-wrapper gin-layer-wrapper\">
  ";
        // line 43
        if (($context["header"] ?? null)) {
            // line 44
            echo "  <div class=\"gin-table-scroll-wrapper\">
  ";
        }
        // line 46
        echo "    <table";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 46, $this->source), "html", null, true);
        echo ">
      ";
        // line 47
        if (($context["caption"] ?? null)) {
            // line 48
            echo "        <caption>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption"] ?? null), 48, $this->source), "html", null, true);
            echo "</caption>
      ";
        }
        // line 50
        echo "
      ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["colgroups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["colgroup"]) {
            // line 52
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["colgroup"], "cols", [], "any", false, false, true, 52)) {
                // line 53
                echo "          <colgroup";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["colgroup"], "attributes", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                echo ">
            ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["colgroup"], "cols", [], "any", false, false, true, 54));
                foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                    // line 55
                    echo "              <col";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["col"], "attributes", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                    echo " />
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "          </colgroup>
        ";
            } else {
                // line 59
                echo "          <colgroup";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["colgroup"], "attributes", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                echo " />
        ";
            }
            // line 61
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['colgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
      ";
        // line 63
        if (($context["header"] ?? null)) {
            // line 64
            echo "        <thead>
          <tr>
            ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 67
                echo "              ";
                if (twig_in_filter("<a", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, $context["cell"], "content", [], "any", false, false, true, 67))))) {
                    // line 68
                    echo "                ";
                    // line 69
                    $context["cell_classes"] = [0 => "th__item", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 71
$context["cell"], "active_table_sort", [], "any", false, false, true, 71)) ? ("is-active") : (""))];
                    // line 74
                    echo "              ";
                } else {
                    // line 75
                    echo "                ";
                    // line 76
                    $context["cell_classes"] = [0 => ("th__" . \Drupal\Component\Utility\Html::getClass($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                     // line 77
$context["cell"], "content", [], "any", false, false, true, 77), 77, $this->source)))), 1 => ((twig_get_attribute($this->env, $this->source,                     // line 78
$context["cell"], "active_table_sort", [], "any", false, false, true, 78)) ? ("is-active") : (""))];
                    // line 81
                    echo "              ";
                }
                // line 82
                echo "              <";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cell"], "attributes", [], "any", false, false, true, 82), "addClass", [0 => ($context["cell_classes"] ?? null)], "method", false, false, true, 82), 82, $this->source), "html", null, true);
                echo ">";
                // line 83
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "content", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                // line 84
                echo "</";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                echo ">
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "          </tr>
        </thead>
      ";
        }
        // line 89
        echo "
      ";
        // line 90
        if (($context["rows"] ?? null)) {
            // line 91
            echo "        <tbody>
          ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 93
                echo "            ";
                // line 94
                $context["row_classes"] = [0 => (( !                // line 95
($context["no_striping"] ?? null)) ? (twig_cycle([0 => "odd", 1 => "even"], $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 95), 95, $this->source))) : (""))];
                // line 98
                echo "            <tr";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 98), "addClass", [0 => ($context["row_classes"] ?? null)], "method", false, false, true, 98), 98, $this->source), "html", null, true);
                echo ">
              ";
                // line 99
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "cells", [], "any", false, false, true, 99));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 100
                    echo "                <";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "attributes", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                    echo ">";
                    // line 101
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "content", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
                    // line 102
                    echo "</";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                    echo ">
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo "            </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "        </tbody>
      ";
        } elseif (        // line 107
($context["empty"] ?? null)) {
            // line 108
            echo "        <tbody>
          <tr class=\"odd\">
            <td colspan=\"";
            // line 110
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_columns"] ?? null), 110, $this->source), "html", null, true);
            echo "\" class=\"empty message\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 110, $this->source), "html", null, true);
            echo "</td>
          </tr>
        </tbody>
      ";
        }
        // line 114
        echo "      ";
        if (($context["footer"] ?? null)) {
            // line 115
            echo "        <tfoot>
          ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["footer"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 117
                echo "            <tr";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
                echo ">
              ";
                // line 118
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "cells", [], "any", false, false, true, 118));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 119
                    echo "                <";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "attributes", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
                    echo ">";
                    // line 120
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "content", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
                    // line 121
                    echo "</";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
                    echo ">
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                echo "            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "        </tfoot>
      ";
        }
        // line 127
        echo "    </table>
  ";
        // line 128
        if (($context["header"] ?? null)) {
            // line 129
            echo "  </div>
  ";
        }
        // line 131
        echo "</div>
";
        
        $__internal_b3d9dd94c58234fbec4409b98abb5cb2->leave($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/dataset/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 131,  301 => 129,  299 => 128,  296 => 127,  292 => 125,  285 => 123,  276 => 121,  274 => 120,  269 => 119,  265 => 118,  260 => 117,  256 => 116,  253 => 115,  250 => 114,  241 => 110,  237 => 108,  235 => 107,  232 => 106,  217 => 104,  208 => 102,  206 => 101,  201 => 100,  197 => 99,  192 => 98,  190 => 95,  189 => 94,  187 => 93,  170 => 92,  167 => 91,  165 => 90,  162 => 89,  157 => 86,  148 => 84,  146 => 83,  141 => 82,  138 => 81,  136 => 78,  135 => 77,  134 => 76,  132 => 75,  129 => 74,  127 => 71,  126 => 69,  124 => 68,  121 => 67,  117 => 66,  113 => 64,  111 => 63,  108 => 62,  102 => 61,  96 => 59,  92 => 57,  83 => 55,  79 => 54,  74 => 53,  71 => 52,  67 => 51,  64 => 50,  58 => 48,  56 => 47,  51 => 46,  47 => 44,  45 => 43,  42 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/dataset/table.html.twig", "/var/www/html/drupal/web/themes/contrib/gin/templates/dataset/table.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 43, "for" => 51, "set" => 69);
        static $filters = array("escape" => 46, "render" => 67, "clean_class" => 77);
        static $functions = array("cycle" => 95);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'render', 'clean_class'],
                ['cycle']
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
