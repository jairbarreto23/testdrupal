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

/* modules/contrib/glazed/templates/page.html.twig */
class __TwigTemplate_ef8173b2dbdba6407809ae900ed1340b97d51ce7c908a30dbb8f016008d94a6d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'secondary_header' => [$this, 'block_secondary_header'],
            'navbar' => [$this, 'block_navbar'],
            'highlighted' => [$this, 'block_highlighted'],
            'page_title' => [$this, 'block_page_title'],
            'content_top' => [$this, 'block_content_top'],
            'main' => [$this, 'block_main'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'content_bottom' => [$this, 'block_content_bottom'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 60, "block" => 67, "set" => 68];
        $filters = ["escape" => 69, "clean_class" => 69, "trim" => 188, "striptags" => 188, "render" => 188];
        $functions = ["file_url" => 155, "create_attribute" => 156];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'set'],
                ['escape', 'clean_class', 'trim', 'striptags', 'render'],
                ['file_url', 'create_attribute']
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
        // line 60
        if ((( !$this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_glazed_page_layout", []), "getString", [], "method") && $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "boxed_layout", [])) || ($this->getAttribute($this->getAttribute(        // line 61
($context["node"] ?? null), "field_glazed_page_layout", []), "getString", [], "method") == "boxed"))) {
            // line 62
            echo "<div class=\"glazed-boxed-container\">
";
        }
        // line 64
        echo "
";
        // line 66
        if ($this->getAttribute(($context["page"] ?? null), "secondary_header", [])) {
            // line 67
            echo "  ";
            $this->displayBlock('secondary_header', $context, $blocks);
        }
        // line 82
        echo "
";
        // line 84
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []))) {
            // line 85
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 140
        echo "
<div class=\"wrap-containers\">

";
        // line 144
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 145
            echo "  ";
            $this->displayBlock('highlighted', $context, $blocks);
        }
        // line 149
        echo "
";
        // line 151
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "page_title_home_hide", []) && ($context["is_front"] ?? null)))) {
            // line 152
            echo "
  ";
            // line 153
            $this->displayBlock('page_title', $context, $blocks);
        }
        // line 166
        echo "
";
        // line 168
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 169
            echo "  ";
            $this->displayBlock('content_top', $context, $blocks);
        }
        // line 182
        echo "
";
        // line 184
        $this->displayBlock('main', $context, $blocks);
        // line 261
        echo "
";
        // line 263
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", [])) {
            // line 264
            echo "  ";
            $this->displayBlock('content_bottom', $context, $blocks);
        }
        // line 277
        echo "</div>

";
        // line 280
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 281
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 296
        echo "
";
        // line 297
        if ((( !$this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_glazed_page_layout", []), "getString", [], "method") && $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "boxed_layout", [])) || ($this->getAttribute($this->getAttribute(        // line 298
($context["node"] ?? null), "field_glazed_page_layout", []), "getString", [], "method") == "boxed"))) {
            // line 299
            echo "</div><!-- end glazed-boxed-container -->
";
        }
    }

    // line 67
    public function block_secondary_header($context, array $blocks = [])
    {
        // line 68
        echo "    ";
        $context["container"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "full_width_containers", []), "cnt_secondary_header", [])) ? ("glazed-fluid") : ("container"));
        // line 69
        echo "    <header id=\"secondary-header\" class=\"glazed-secondary-header clearfix ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "secondary_header_hide", []))), "html", null, true);
        echo "\" role=\"banner\">
      <div class=\"";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " secondary-header-container\">
        ";
        // line 71
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "full_width_containers", []), "cnt_secondary_header", [])) {
            // line 72
            echo "          <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
        ";
        }
        // line 74
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_header", [])), "html", null, true);
        echo "
        ";
        // line 75
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "full_width_containers", []), "cnt_secondary_header", [])) {
            // line 76
            echo "          </div></div>
        ";
        }
        // line 78
        echo "      </div>
    </header>
  ";
    }

    // line 85
    public function block_navbar($context, array $blocks = [])
    {
        // line 86
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "header_position", [])) {
            // line 87
            echo "      ";
            // line 88
            $context["navbar_classes"] = [0 => "navbar glazed-header glazed-header--top", 1 => (($this->getAttribute($this->getAttribute(            // line 90
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", [])))) : ("")), 2 => $this->getAttribute($this->getAttribute(            // line 91
($context["theme"] ?? null), "settings", []), "header_side_align", [])];
            // line 94
            echo "    ";
        } else {
            // line 95
            echo "      ";
            // line 96
            $context["navbar_classes"] = [0 => "navbar glazed-header", 1 => (($this->getAttribute($this->getAttribute(            // line 98
($context["theme"] ?? null), "settings", []), "header_position", [])) ? ("glazed-header--side") : ("glazed-header--top")), 2 => (($this->getAttribute($this->getAttribute(            // line 99
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", [])))) : ("")), 3 => (($this->getAttribute($this->getAttribute(            // line 100
($context["theme"] ?? null), "settings", []), "header_top_layout", [])) ? (("glazed-header--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "header_top_layout", []))))) : ("")), 4 => (($this->getAttribute($this->getAttribute(            // line 101
($context["theme"] ?? null), "settings", []), "header_style", [])) ? (("glazed-header--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "header_style", []))))) : ("")), 5 => (($this->getAttribute($this->getAttribute(            // line 102
($context["theme"] ?? null), "settings", []), "menu_hover", [])) ? (("glazed-header--hover-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "menu_hover", []))))) : ("")), 6 => ((($this->getAttribute($this->getAttribute(            // line 103
($context["theme"] ?? null), "settings", []), "header_top_fixed", []) && $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "header_top_sticky", []))) ? ("glazed-header--sticky") : ("")), 7 => ((($this->getAttribute($this->getAttribute(            // line 104
($context["theme"] ?? null), "settings", []), "header_top_fixed", []) &&  !$this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "header_top_sticky", []))) ? ("glazed-header--fixed") : (""))];
            // line 107
            echo "    ";
        }
        // line 108
        echo "    ";
        $context["navbar_attributes"] = $this->getAttribute($this->getAttribute(($context["navbar_attributes"] ?? null), "removeClass", [0 => "container"], "method"), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method");
        // line 109
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "header_top_fixed", []) && $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "header_top_sticky", []))) {
            // line 110
            echo "      ";
            $context["navbar_attributes"] = $this->getAttribute($this->getAttribute(($context["navbar_attributes"] ?? null), "setAttribute", [0 => "data-spy", 1 => "affix"], "method"), "setAttribute", [0 => "data-offset-top", 1 => $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "header_top_height_sticky_offset", [])], "method");
            // line 111
            echo "    ";
        }
        // line 112
        echo "
    <header";
        // line 113
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null)), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 114
        $context["container"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "full_width_containers", []), "cnt_header_nav", [])) ? ("glazed-fluid") : ("container"));
        // line 115
        echo "      <div class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " navbar-container\">
        ";
        // line 116
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "full_width_containers", []), "cnt_header_nav", [])) {
            // line 117
            echo "          <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
        ";
        }
        // line 119
        echo "        <div class=\"navbar-header\">
          ";
        // line 120
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
          ";
        // line 122
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 123
            echo "            <a id=\"glazed-menu-toggle\" href=\"#\"><span></span></a>
          ";
        }
        // line 125
        echo "        </div>

        ";
        // line 128
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 129
            echo "            <nav role=\"navigation\" id=\"glazed-main-menu\" class=\"glazed-main-menu\">
            ";
            // line 130
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])), "html", null, true);
            echo "
            </nav>
        ";
        }
        // line 133
        echo "        ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "full_width_containers", []), "cnt_header_nav", [])) {
            // line 134
            echo "          </div></div>
        ";
        }
        // line 136
        echo "      </div>
    </header>
  ";
    }

    // line 145
    public function block_highlighted($context, array $blocks = [])
    {
        // line 146
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
  ";
    }

    // line 153
    public function block_page_title($context, array $blocks = [])
    {
        // line 154
        echo "  ";
        if (($this->getAttribute(($context["node"] ?? null), "field_glazed_page_title_backgrou", []) && $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_glazed_page_title_backgrou", []), "getValue", []))) {
            // line 155
            echo "    ";
            $context["data_bg_img"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_glazed_page_title_backgrou", []), "entity", []), "getFileUri", []))]);
            // line 156
            echo "    ";
            $context["page_title_attributes"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute(["data-bg-img" => ($context["data_bg_img"] ?? null)]);
            // line 157
            echo "  ";
        }
        // line 158
        echo "    <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title_attributes"] ?? null)), "html", null, true);
        echo " class=\"page-title-full-width-container\" id=\"page-title-full-width-container\">
    ";
        // line 159
        $context["container"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "full_width_containers", []), "cnt_page_title", [])) ? ("glazed-fluid") : ("container"));
        // line 160
        echo "      <header role=\"banner\" id=\"page-title\" class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " page-title-container\">
        ";
        // line 161
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
        echo "
      </header>
    </div>
  ";
    }

    // line 169
    public function block_content_top($context, array $blocks = [])
    {
        // line 170
        echo "    ";
        $context["container"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "full_width_containers", []), "cnt_content_top", [])) ? ("glazed-fluid") : ("container"));
        // line 171
        echo "    <div class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " content-top-container\">
      ";
        // line 172
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "full_width_containers", []), "cnt_content_top", [])) {
            // line 173
            echo "      <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
      ";
        }
        // line 175
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
        echo "
      ";
        // line 176
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "full_width_containers", []), "cnt_content_top", [])) {
            // line 177
            echo "      </div></div>
      ";
        }
        // line 179
        echo "    </div>
  ";
    }

    // line 184
    public function block_main($context, array $blocks = [])
    {
        // line 185
        echo "  ";
        $context["container"] = (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "full_width_containers", []), "cnt_content", []) || ($this->getAttribute($this->getAttribute(        // line 186
($context["node"] ?? null), "field_glazed_main_content_width", []), "getString", [], "method") == "glazed-util-full-width-content")) || (((        // line 187
($context["node"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "full_width_content_types", []), $this->getAttribute(($context["node"] ?? null), "getType", []))) &&  !twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 188
($context["page"] ?? null), "sidebar_first", [])))))) &&  !twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 189
($context["page"] ?? null), "sidebar_second", [])))))))) ? ("") : ("container"));
        // line 190
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content clearfix\">
    ";
        // line 191
        if ((($context["container"] ?? null) != "")) {
            // line 192
            echo "    <div class=\"row\">
    ";
        }
        // line 194
        echo "      ";
        // line 195
        echo "      ";
        if (twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_first", []))))) {
            // line 196
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 201
            echo "      ";
        }
        // line 202
        echo "
      ";
        // line 204
        echo "      ";
        if ( !$this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_glazed_main_content_width", []), "getString", [], "method")) {
            // line 205
            echo "        ";
            // line 206
            $context["content_classes"] = [0 => (((twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(            // line 207
($context["page"] ?? null), "sidebar_first", []))))) && twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", []))))))) ? ("col-sm-6") : ("")), 1 => (((twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(            // line 208
($context["page"] ?? null), "sidebar_first", []))))) && twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))))))) ? ("col-sm-9") : ("")), 2 => (((twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(            // line 209
($context["page"] ?? null), "sidebar_second", []))))) && twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))))))) ? ("col-sm-9") : ("")), 3 => (((((            // line 210
($context["container"] ?? null) != "") && twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", []))))))) && twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))))))) ? ("col-sm-12") : (""))];
            // line 213
            echo "      ";
        } else {
            // line 214
            echo "        ";
            $context["col"] = $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_glazed_main_content_width", []), "getString", [], "method");
            // line 215
            echo "        ";
            // line 216
            $context["content_classes"] = [0 => (((            // line 217
($context["col"] ?? null) == "glazed-util-content-center-4-col")) ? ("col-md-4 col-md-offset-4") : ("")), 1 => (((            // line 218
($context["col"] ?? null) == "glazed-util-content-center-6-col")) ? ("col-md-6 col-md-offset-3") : ("")), 2 => (((            // line 219
($context["col"] ?? null) == "glazed-util-content-center-8-col")) ? ("col-md-8 col-md-offset-2") : ("")), 3 => (((            // line 220
($context["col"] ?? null) == "glazed-util-content-center-10-col")) ? ("col-md-10 col-md-offset-1") : (""))];
            // line 223
            echo "      ";
        }
        // line 224
        echo "
      <section";
        // line 225
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

        ";
        // line 228
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 229
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 232
            echo "        ";
        }
        // line 233
        echo "
        ";
        // line 235
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 236
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 239
            echo "        ";
        }
        // line 240
        echo "
        ";
        // line 242
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 246
        echo "      </section>

      ";
        // line 249
        echo "      ";
        if (twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_second", []))))) {
            // line 250
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 255
            echo "      ";
        }
        // line 256
        echo "    ";
        if ((($context["container"] ?? null) != "")) {
            // line 257
            echo "    </div><!-- end .ow -->
    ";
        }
        // line 259
        echo "  </div><!-- end main-container -->
";
    }

    // line 196
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 197
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 198
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 229
    public function block_action_links($context, array $blocks = [])
    {
        // line 230
        echo "            <ul class=\"action-links\" style=\"border: 2px dashed blue\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
        echo "</ul>
          ";
    }

    // line 236
    public function block_help($context, array $blocks = [])
    {
        // line 237
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 242
    public function block_content($context, array $blocks = [])
    {
        // line 243
        echo "          <a id=\"main-content\"></a>
          ";
        // line 244
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 250
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 251
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 252
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 264
    public function block_content_bottom($context, array $blocks = [])
    {
        // line 265
        echo "    ";
        $context["container"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "full_width_containers", []), "cnt_content_bottom", [])) ? ("glazed-fluid") : ("container"));
        // line 266
        echo "    <div class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " content-bottom-container\">
      ";
        // line 267
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "full_width_containers", []), "cnt_content_bottom", [])) {
            // line 268
            echo "      <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
      ";
        }
        // line 270
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom", [])), "html", null, true);
        echo "
      ";
        // line 271
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "full_width_containers", []), "cnt_content_bottom", [])) {
            // line 272
            echo "      </div></div>
      ";
        }
        // line 274
        echo "    </div>
  ";
    }

    // line 281
    public function block_footer($context, array $blocks = [])
    {
        // line 282
        echo "    <footer class=\"glazed-footer clearfix\" role=\"contentinfo\">
      ";
        // line 283
        $context["container"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "full_width_containers", []), "cnt_footer", [])) ? ("glazed-fluid") : ("container"));
        // line 284
        echo "      <div class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " footer-container\">
        ";
        // line 285
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "full_width_containers", []), "cnt_footer", [])) {
            // line 286
            echo "        <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
        ";
        }
        // line 288
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
        ";
        // line 289
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "full_width_containers", []), "cnt_footer", [])) {
            // line 290
            echo "        </div></div>
        ";
        }
        // line 292
        echo "      </div>
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "modules/contrib/glazed/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  624 => 292,  620 => 290,  618 => 289,  613 => 288,  609 => 286,  607 => 285,  602 => 284,  600 => 283,  597 => 282,  594 => 281,  589 => 274,  585 => 272,  583 => 271,  578 => 270,  574 => 268,  572 => 267,  567 => 266,  564 => 265,  561 => 264,  554 => 252,  551 => 251,  548 => 250,  542 => 244,  539 => 243,  536 => 242,  529 => 237,  526 => 236,  519 => 230,  516 => 229,  509 => 198,  506 => 197,  503 => 196,  498 => 259,  494 => 257,  491 => 256,  488 => 255,  485 => 250,  482 => 249,  478 => 246,  475 => 242,  472 => 240,  469 => 239,  466 => 236,  463 => 235,  460 => 233,  457 => 232,  454 => 229,  451 => 228,  446 => 225,  443 => 224,  440 => 223,  438 => 220,  437 => 219,  436 => 218,  435 => 217,  434 => 216,  432 => 215,  429 => 214,  426 => 213,  424 => 210,  423 => 209,  422 => 208,  421 => 207,  420 => 206,  418 => 205,  415 => 204,  412 => 202,  409 => 201,  406 => 196,  403 => 195,  401 => 194,  397 => 192,  395 => 191,  390 => 190,  388 => 189,  387 => 188,  386 => 187,  385 => 186,  383 => 185,  380 => 184,  375 => 179,  371 => 177,  369 => 176,  364 => 175,  360 => 173,  358 => 172,  353 => 171,  350 => 170,  347 => 169,  339 => 161,  334 => 160,  332 => 159,  327 => 158,  324 => 157,  321 => 156,  318 => 155,  315 => 154,  312 => 153,  305 => 146,  302 => 145,  296 => 136,  292 => 134,  289 => 133,  283 => 130,  280 => 129,  277 => 128,  273 => 125,  269 => 123,  266 => 122,  262 => 120,  259 => 119,  255 => 117,  253 => 116,  248 => 115,  246 => 114,  242 => 113,  239 => 112,  236 => 111,  233 => 110,  230 => 109,  227 => 108,  224 => 107,  222 => 104,  221 => 103,  220 => 102,  219 => 101,  218 => 100,  217 => 99,  216 => 98,  215 => 96,  213 => 95,  210 => 94,  208 => 91,  207 => 90,  206 => 88,  204 => 87,  201 => 86,  198 => 85,  192 => 78,  188 => 76,  186 => 75,  181 => 74,  177 => 72,  175 => 71,  171 => 70,  166 => 69,  163 => 68,  160 => 67,  154 => 299,  152 => 298,  151 => 297,  148 => 296,  144 => 281,  142 => 280,  138 => 277,  134 => 264,  132 => 263,  129 => 261,  127 => 184,  124 => 182,  120 => 169,  118 => 168,  115 => 166,  112 => 153,  109 => 152,  107 => 151,  104 => 149,  100 => 145,  98 => 144,  93 => 140,  89 => 85,  87 => 84,  84 => 82,  80 => 67,  78 => 66,  75 => 64,  71 => 62,  69 => 61,  68 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/glazed/templates/page.html.twig", "/var/www/html/drupal/modules/contrib/glazed/templates/page.html.twig");
    }
}
