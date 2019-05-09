<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/glazed/templates/block--system-menu-block--main.html.twig */
class __TwigTemplate_185e520c9fab58e97cd5fc94165221539782edd2c6b09dd13326fb4764c5dc77 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 36, "for" => 37, "if" => 38, "block" => 73];
        $filters = ["merge" => 39, "clean_class" => 45, "escape" => 57];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'block'],
                ['merge', 'clean_class', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 36
        $context["designRegions"] = [];
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "block_design_regions", []));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 38
            echo "   ";
            if ($context["name"]) {
                // line 39
                echo "   ";
                $context["designRegions"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["designRegions"] ?? null)), [0 => $context["name"]]);
                // line 40
                echo "   ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 45
($context["configuration"] ?? null), "provider", [])))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 46
($context["plugin_id"] ?? null)))), 3 => "clearfix", 4 => ((($this->getAttribute($this->getAttribute(        // line 48
($context["theme"] ?? null), "settings", []), "block_well", []) && twig_in_filter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) ? ($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "block_well", [])) : (""))];
        // line 52
        $context["title_classes"] = [0 => "block-title", 1 => ((($this->getAttribute($this->getAttribute(        // line 54
($context["theme"] ?? null), "settings", []), "title_well", []) && twig_in_filter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) ? ($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "title_well", [])) : (""))];
        // line 57
        echo "<section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 59
        if (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "title_sticker", []) && twig_in_filter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) {
            // line 60
            echo "    <div class=\"wrap-block-title\">
  ";
        }
        // line 62
        echo "  ";
        if (($context["label"] ?? null)) {
            // line 63
            echo "    <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</h2>
  ";
        }
        // line 65
        echo "  ";
        if (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "title_sticker", []) && twig_in_filter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) {
            // line 66
            echo "    </div>
  ";
        }
        // line 68
        echo "  ";
        if ((($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "block_divider", []) && $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "block_divider_thickness", [])) && twig_in_filter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) {
            // line 69
            echo "    <hr class=\"block-hr\">
  ";
        }
        // line 71
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

  ";
        // line 73
        $this->displayBlock('content', $context, $blocks);
        // line 76
        echo "</section>
";
    }

    // line 73
    public function block_content($context, array $blocks = [])
    {
        // line 74
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "modules/contrib/glazed/templates/block--system-menu-block--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 74,  136 => 73,  131 => 76,  129 => 73,  123 => 71,  119 => 69,  116 => 68,  112 => 66,  109 => 65,  101 => 63,  98 => 62,  94 => 60,  92 => 59,  88 => 58,  83 => 57,  81 => 54,  80 => 52,  78 => 48,  77 => 46,  76 => 45,  75 => 43,  68 => 40,  65 => 39,  62 => 38,  58 => 37,  56 => 36,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/glazed/templates/block--system-menu-block--main.html.twig", "/var/www/html/drupal/modules/contrib/glazed/templates/block--system-menu-block--main.html.twig");
    }
}
