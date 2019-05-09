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

/* modules/contrib/glazed/templates/html.html.twig */
class __TwigTemplate_16920cd0275838000e1d661aaf2f289ce60aead1899881d45ecb18900b7cfb7f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 48, "if" => 68];
        $filters = ["clean_class" => 56, "keys" => 65, "escape" => 73, "raw" => 75, "safe_join" => 76, "t" => 94];
        $functions = ["file_url" => 69];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'keys', 'escape', 'raw', 'safe_join', 't'],
                ['file_url']
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
        // line 48
        $context["html_classes"] = [0 => ((($this->getAttribute($this->getAttribute(        // line 49
($context["theme"] ?? null), "settings", []), "sticky_footer", []) &&  !$this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "boxed_layout", []))) ? ("html--glazed-sticky-footer") : (""))];
        // line 53
        $context["body_classes"] = [0 => "html", 1 => ((        // line 55
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 2 => (( !        // line 56
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null)))))), 3 => ((        // line 57
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null))))) : ("")), 4 => ((        // line 58
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), 5 => (($this->getAttribute($this->getAttribute(        // line 59
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", [])))) : ("")), 6 => (($this->getAttribute(        // line 60
($context["theme"] ?? null), "has_glyphicons", [])) ? ("has-glyphicons") : ("")), 7 => (($this->getAttribute($this->getAttribute(        // line 61
($context["theme"] ?? null), "settings", []), "header_position", [])) ? ("body--glazed-header-side") : ("body--glazed-header-top")), 8 => ((( !$this->getAttribute($this->getAttribute(        // line 62
($context["theme"] ?? null), "settings", []), "header_position", []) && ($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "header_style", []) != "overlay"))) ? ("body--glazed-header-not-overlay") : ("")), 9 => (( !$this->getAttribute($this->getAttribute(        // line 63
($context["theme"] ?? null), "settings", []), "header_position", [])) ? (("body--glazed-header-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "header_style", []))))) : ("")), 10 => (((( !$this->getAttribute($this->getAttribute(        // line 64
($context["theme"] ?? null), "settings", []), "header_position", []) &&  !$this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "header_top_sticky", [])) && $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "header_top_fixed", []))) ? ("body--glazed-header-fixed") : ("")), 11 => ((twig_in_filter(        // line 65
($context["page_title"] ?? null), twig_get_array_keys_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_glazed_hide_regions", []), "getValue", []))))) ? ("body--primary-tabs-float") : (""))];
        // line 68
        if (($this->getAttribute(($context["node"] ?? null), "field_glazed_body_background", []) && $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_glazed_body_background", []), "getValue", []))) {
            // line 69
            echo "  ";
            $context["style"] = (("background-image:url(" . call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_glazed_body_background", []), "entity", []), "getFileUri", []))])) . ");");
            // line 70
            echo "  ";
            $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "setAttribute", [0 => "style", 1 => ($context["style"] ?? null)], "method");
        }
        // line 72
        echo "<!DOCTYPE html>
<html ";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["html_attributes"] ?? null), "addClass", [0 => ($context["html_classes"] ?? null)], "method")), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 75
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
    <title>";
        // line 76
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null)), " | "));
        echo "</title>
    <style>ul.dropdown-menu {display: none;}</style>
    <css-placeholder token=\"";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
    <js-placeholder token=\"";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
  </head>
  <body";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 82
        $context["breakpoint"] = ((($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "header_mobile_breakpoint", []) > 4099)) ? ("99999") : ($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "header_mobile_breakpoint", [])));
        // line 83
        echo "  <script>
  var glazedNavBreakpoint = ";
        // line 84
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breakpoint"] ?? null)), "html", null, true);
        echo ";
  var glazedWindowWidth = window.innerWidth;
  if (glazedWindowWidth > glazedNavBreakpoint) {
    document.body.className += ' body--glazed-nav-desktop';
  }
  else {
    document.body.className += ' body--glazed-nav-mobile';
  }
  </script>
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 94
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 96
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null)), "html", null, true);
        echo "
    ";
        // line 97
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null)), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 98
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
    ";
        // line 99
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null)), "html", null, true);
        echo "
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/glazed/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 99,  141 => 98,  137 => 97,  133 => 96,  128 => 94,  115 => 84,  112 => 83,  110 => 82,  106 => 81,  101 => 79,  97 => 78,  92 => 76,  88 => 75,  83 => 73,  80 => 72,  76 => 70,  73 => 69,  71 => 68,  69 => 65,  68 => 64,  67 => 63,  66 => 62,  65 => 61,  64 => 60,  63 => 59,  62 => 58,  61 => 57,  60 => 56,  59 => 55,  58 => 53,  56 => 49,  55 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/glazed/templates/html.html.twig", "/var/www/html/sitiocarlosb/modules/contrib/glazed/templates/html.html.twig");
    }
}
