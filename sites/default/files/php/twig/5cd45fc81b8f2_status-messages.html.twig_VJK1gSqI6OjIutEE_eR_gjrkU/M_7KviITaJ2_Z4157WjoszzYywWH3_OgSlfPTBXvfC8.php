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

/* modules/contrib/glazed/templates/status-messages.html.twig */
class __TwigTemplate_35d7a146923445799e0c25972c42188d275837f33319789a43e23bfa3403e5ff extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 30, "for" => 48, "if" => 59];
        $filters = ["default" => 30, "t" => 33, "escape" => 57, "length" => 62, "first" => 69];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['default', 't', 'escape', 'length', 'first'],
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
        // line 30
        $context["classes"] = (($this->getAttribute(($context["attributes"] ?? null), "offsetGet", [0 => "class"], "method", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "offsetGet", [0 => "class"], "method")), [])) : ([]));
        // line 32
        $context["status_heading"] = ["status" => t("Status message"), "error" => t("Error message"), "warning" => t("Warning message"), "info" => t("Informative message")];
        // line 40
        $context["status_classes"] = ["status" => "success", "error" => "danger", "warning" => "warning", "info" => "info"];
        // line 47
        echo "<div class=\"wrap-messages\">
";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 49
            echo "  ";
            // line 50
            $context["message_classes"] = [0 => "alert", 1 => ("alert-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(            // line 52
($context["status_classes"] ?? null), $context["type"], [], "array"))), 2 => "alert-dismissible"];
            // line 56
            echo "  ";
            // line 57
            echo "  <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "setAttribute", [0 => "class", 1 => ($context["classes"] ?? null)], "method"), "addClass", [0 => ($context["message_classes"] ?? null)], "method"), "setAttribute", [0 => "role", 1 => "alert"], "method")), "html", null, true);
            echo ">
    <button role=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"";
            // line 58
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close"));
            echo "\"><span aria-hidden=\"true\">&times;</span></button>
    ";
            // line 59
            if ($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")) {
                // line 60
                echo "      <h4 class=\"sr-only\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
                echo "</h4>
    ";
            }
            // line 62
            echo "    ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 63
                echo "      <ul class=\"item-list item-list--messages\">
        ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 65
                    echo "          <li class=\"item item--message\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"]), "html", null, true);
                    echo "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "      </ul>
    ";
            } else {
                // line 69
                echo "      ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"])), "html", null, true);
                echo "
    ";
            }
            // line 71
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/glazed/templates/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 73,  121 => 71,  115 => 69,  111 => 67,  102 => 65,  98 => 64,  95 => 63,  92 => 62,  86 => 60,  84 => 59,  80 => 58,  75 => 57,  73 => 56,  71 => 52,  70 => 50,  68 => 49,  64 => 48,  61 => 47,  59 => 40,  57 => 32,  55 => 30,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/glazed/templates/status-messages.html.twig", "/var/www/html/drupal/modules/contrib/glazed/templates/status-messages.html.twig");
    }
}
