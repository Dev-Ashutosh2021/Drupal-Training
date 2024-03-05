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

/* themes/contrib/gin/templates/admin/admin-block-content.html.twig */
class __TwigTemplate_fdf70c908a99af7c8857258672b0edad extends \Twig\Template
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
        $__internal_b3d9dd94c58234fbec4409b98abb5cb2->enter($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/gin/templates/admin/admin-block-content.html.twig"));

        // line 19
        $context["item_classes"] = [0 => "admin-item"];
        // line 23
        if (($context["content"] ?? null)) {
            // line 24
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "admin-list", 1 => "gin-layer-wrapper"], "method", false, false, true, 24), 24, $this->source), "html", null, true);
            echo ">
    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 26
                echo "      ";
                $context["description_id"] = (\Drupal\Component\Utility\Html::getId($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 26), 26, $this->source))) . "-desc");
                // line 27
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => ($context["item_classes"] ?? null)]), "html", null, true);
                echo ">
        ";
                // line 28
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "
        <div class=\"admin-item__title\" aria-details=\"";
                // line 29
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description_id"] ?? null), 29, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "</div>
        ";
                // line 30
                if (twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 30)) {
                    // line 31
                    echo "          <div class=\"admin-item__description\" id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description_id"] ?? null), 31, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                    echo "</div>
        ";
                }
                // line 33
                echo "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "  </div>
";
        }
        
        $__internal_b3d9dd94c58234fbec4409b98abb5cb2->leave($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/admin/admin-block-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 35,  83 => 33,  75 => 31,  73 => 30,  67 => 29,  63 => 28,  58 => 27,  55 => 26,  51 => 25,  46 => 24,  44 => 23,  42 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/admin/admin-block-content.html.twig", "/var/www/html/drupal/web/themes/contrib/gin/templates/admin/admin-block-content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 19, "if" => 23, "for" => 25);
        static $filters = array("escape" => 24, "clean_id" => 26, "render" => 26);
        static $functions = array("create_attribute" => 27);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'clean_id', 'render'],
                ['create_attribute']
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
