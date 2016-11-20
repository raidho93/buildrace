<?php

/* themes/multipurpose_corporate_theme/templates/html.html.twig */
class __TwigTemplate_fd9e222d393d258e1f8b04bd0d42b64f6d51803c005dc65fd3f33fa649748eb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c43ab5523d1fb7efe8302b136ff6d84a23b5c86c4edb583735b48ccfc4383b1 = $this->env->getExtension("native_profiler");
        $__internal_6c43ab5523d1fb7efe8302b136ff6d84a23b5c86c4edb583735b48ccfc4383b1->enter($__internal_6c43ab5523d1fb7efe8302b136ff6d84a23b5c86c4edb583735b48ccfc4383b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/multipurpose_corporate_theme/templates/html.html.twig"));

        $tags = array("set" => 42, "if" => 49);
        $filters = array("raw" => 66, "safe_join" => 67, "clean_class" => 74, "t" => 86);
        $functions = array("attach_library" => 39);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('raw', 'safe_join', 'clean_class', 't'),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary(($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "name", array()) . "/global-styling")), "html", null, true));
        echo "
<!DOCTYPE html>
";
        // line 42
        $context["html_classes"] = array(0 => "no-js", 1 => "adaptivetheme");
        // line 47
        echo "<html";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["html_attributes"]) ? $context["html_attributes"] : null), "addClass", array(0 => (isset($context["html_classes"]) ? $context["html_classes"] : null)), "method"), "html", null, true));
        echo ">
  <head>
    ";
        // line 49
        if (((isset($context["touch_icons"]) ? $context["touch_icons"] : null) == true)) {
            // line 50
            echo "      ";
            if ((isset($context["touch_icon_ipad_retina"]) ? $context["touch_icon_ipad_retina"] : null)) {
                // line 51
                echo "        <link href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_icon_ipad_retina"]) ? $context["touch_icon_ipad_retina"] : null), "html", null, true));
                echo "\" rel=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_rel"]) ? $context["touch_rel"] : null), "html", null, true));
                echo "\" sizes=\"152x152\" />
      ";
            }
            // line 53
            echo "      ";
            if ((isset($context["touch_icon_iphone_retina"]) ? $context["touch_icon_iphone_retina"] : null)) {
                // line 54
                echo "        <link href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_icon_iphone_retina"]) ? $context["touch_icon_iphone_retina"] : null), "html", null, true));
                echo "\" rel=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_rel"]) ? $context["touch_rel"] : null), "html", null, true));
                echo "\" sizes=\"120x120\" />
      ";
            }
            // line 56
            echo "      ";
            if ((isset($context["touch_icon_ipad"]) ? $context["touch_icon_ipad"] : null)) {
                // line 57
                echo "        <link href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_icon_ipad"]) ? $context["touch_icon_ipad"] : null), "html", null, true));
                echo "\" rel=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_rel"]) ? $context["touch_rel"] : null), "html", null, true));
                echo "\" sizes=\"76x76\" />
      ";
            }
            // line 59
            echo "      ";
            if ((isset($context["touch_icon_default"]) ? $context["touch_icon_default"] : null)) {
                // line 60
                echo "        <link href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_icon_default"]) ? $context["touch_icon_default"] : null), "html", null, true));
                echo "\" rel=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_rel"]) ? $context["touch_rel"] : null), "html", null, true));
                echo "\" sizes=\"60x60\" />
      ";
            }
            // line 62
            echo "      ";
            if ((isset($context["touch_icon_nokia"]) ? $context["touch_icon_nokia"] : null)) {
                // line 63
                echo "        <link href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_icon_nokia"]) ? $context["touch_icon_nokia"] : null), "html", null, true));
                echo "\" rel=\"shortcut icon\" />
      ";
            }
            // line 65
            echo "    ";
        }
        // line 66
        echo "    <head-placeholder token=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <title>";
        // line 67
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | ")));
        echo "</title>
    <css-placeholder token=\"";
        // line 68
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <js-placeholder token=\"";
        // line 69
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
  </head>
  ";
        // line 72
        $context["body_classes"] = array(0 => ((        // line 73
(isset($context["logged_in"]) ? $context["logged_in"] : null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 74
(isset($context["root_path"]) ? $context["root_path"] : null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass((isset($context["root_path"]) ? $context["root_path"] : null))))), 2 => (($this->getAttribute(        // line 75
(isset($context["path_info"]) ? $context["path_info"] : null), "args", array())) ? (("path-" . $this->getAttribute((isset($context["path_info"]) ? $context["path_info"] : null), "args", array()))) : ("")), 3 => (($this->getAttribute(        // line 76
(isset($context["path_info"]) ? $context["path_info"] : null), "query", array())) ? (("path-query-" . $this->getAttribute((isset($context["path_info"]) ? $context["path_info"] : null), "query", array()))) : ("")), 4 => ((        // line 77
(isset($context["node_type"]) ? $context["node_type"] : null)) ? (("node--type-" . (isset($context["node_type"]) ? $context["node_type"] : null))) : ("")), 5 => (($this->getAttribute(        // line 78
(isset($context["url"]) ? $context["url"] : null), "path", array())) ? (("page--url-" . $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "path", array()))) : ("")), 6 => (($this->getAttribute(        // line 79
(isset($context["head_title_array"]) ? $context["head_title_array"] : null), "name", array())) ? (("site-name--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute((isset($context["head_title_array"]) ? $context["head_title_array"] : null), "name", array())))) : ("")), 7 => (($this->getAttribute(        // line 80
(isset($context["theme"]) ? $context["theme"] : null), "name", array())) ? (("theme-name--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "name", array())))) : ("")), 8 => ((        // line 81
(isset($context["db_offline"]) ? $context["db_offline"] : null)) ? ("db-offline") : ("")), 9 => (($this->getAttribute(        // line 82
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) ? ("one-sidebar sidebar-second") : ("")));
        // line 85
        echo "  <body ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["body_classes"]) ? $context["body_classes"] : null)), "method"), "html", null, true));
        echo ">
    <a href=\"";
        // line 86
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["skip_link_target"]) ? $context["skip_link_target"] : null), "html", null, true));
        echo "\" class=\"visually-hidden focusable skip-link\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Skip to main content")));
        echo "</a>
    ";
        // line 87
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
    ";
        // line 88
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
    ";
        // line 89
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
        echo "
    <js-bottom-placeholder token=\"";
        // line 90
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
  </body>
</html>
";
        
        $__internal_6c43ab5523d1fb7efe8302b136ff6d84a23b5c86c4edb583735b48ccfc4383b1->leave($__internal_6c43ab5523d1fb7efe8302b136ff6d84a23b5c86c4edb583735b48ccfc4383b1_prof);

    }

    public function getTemplateName()
    {
        return "themes/multipurpose_corporate_theme/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 90,  166 => 89,  162 => 88,  158 => 87,  152 => 86,  147 => 85,  145 => 82,  144 => 81,  143 => 80,  142 => 79,  141 => 78,  140 => 77,  139 => 76,  138 => 75,  137 => 74,  136 => 73,  135 => 72,  130 => 69,  126 => 68,  122 => 67,  117 => 66,  114 => 65,  108 => 63,  105 => 62,  97 => 60,  94 => 59,  86 => 57,  83 => 56,  75 => 54,  72 => 53,  64 => 51,  61 => 50,  59 => 49,  53 => 47,  51 => 42,  46 => 39,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Adaptivetheme implementation for the basic structure of a single Drupal page.*/
/*  **/
/*  * Variables:*/
/*  * - placeholder_token: The token for generating head, css, js and js-bottom*/
/*  *   placeholders.*/
/*  * - head_title: A modified version of the page title, for use in the TITLE tag.*/
/*  * - head_title_array: List of text elements that make up the head_title*/
/*  *   variable. May contain or more of the following:*/
/*  *   - title: The title of the page.*/
/*  *   - name: The name of the site.*/
/*  *   - slogan: The slogan of the site.*/
/*  * - page_top: Initial rendered markup. This should be printed before 'page'.*/
/*  * - page: The rendered page markup.*/
/*  * - page_bottom: Closing rendered markup. This variable should be printed after*/
/*  *   'page'.*/
/*  * - db_offline: A flag indicating if the database is offline.*/
/*  * - touch_icons: bool, true if touch icons extension is enabled.*/
/*  * - touch_rel: string, defaults to apple-touch-icon, or apple-touch-icon-precomposed*/
/*  *   if set in appearance settings.*/
/*  * - touch_icon_ipad_retina: path to ipad retina touch icon.*/
/*  * - touch_icon_iphone_retina: path to iphone retina touch icon.*/
/*  * - touch_icon_ipad: path to ipad touch icon.*/
/*  * - touch_icon_default: path to old iphone touch icon.*/
/*  * - touch_icon_nokia: path to old school nokia touch icon.*/
/*  * - googlefonts_url: URL as supplied by the Google fonts wizard.*/
/*  * - typekit_id: Typekit ID as supplied by the Typekit embed wizard.*/
/*  * - theme: List (array) with two or more items, at least:*/
/*  *   - name: The name of the theme.*/
/*  *   - path: The path to the active theme.*/
/*  **/
/*  * @see template_preprocess_html()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {{ attach_library(theme.name ~ '/global-styling') }}*/
/* <!DOCTYPE html>*/
/* {%*/
/*   set html_classes = [*/
/*     'no-js',*/
/*     'adaptivetheme',*/
/*   ]*/
/* %}*/
/* <html{{ html_attributes.addClass(html_classes) }}>*/
/*   <head>*/
/*     {% if touch_icons == true %}*/
/*       {% if touch_icon_ipad_retina %}*/
/*         <link href="{{ touch_icon_ipad_retina }}" rel="{{ touch_rel }}" sizes="152x152" />*/
/*       {% endif %}*/
/*       {% if touch_icon_iphone_retina %}*/
/*         <link href="{{ touch_icon_iphone_retina }}" rel="{{ touch_rel }}" sizes="120x120" />*/
/*       {% endif %}*/
/*       {% if touch_icon_ipad %}*/
/*         <link href="{{ touch_icon_ipad }}" rel="{{ touch_rel }}" sizes="76x76" />*/
/*       {% endif %}*/
/*       {% if touch_icon_default %}*/
/*         <link href="{{ touch_icon_default }}" rel="{{ touch_rel }}" sizes="60x60" />*/
/*       {% endif %}*/
/*       {% if touch_icon_nokia %}*/
/*         <link href="{{ touch_icon_nokia }}" rel="shortcut icon" />*/
/*       {% endif %}*/
/*     {% endif %}*/
/*     <head-placeholder token="{{ placeholder_token|raw }}">*/
/*     <title>{{ head_title|safe_join(' | ') }}</title>*/
/*     <css-placeholder token="{{ placeholder_token|raw }}">*/
/*     <js-placeholder token="{{ placeholder_token|raw }}">*/
/*   </head>*/
/*   {%*/
/*     set body_classes = [*/
/*       logged_in ? 'user-logged-in',*/
/*       not root_path ? 'path-frontpage' : 'path-' ~ root_path|clean_class,*/
/*       path_info.args ? 'path-' ~ path_info.args,*/
/*       path_info.query ? 'path-query-' ~ path_info.query,*/
/*       node_type ? 'node--type-' ~ node_type,*/
/*       url.path ? 'page--url-' ~ url.path,*/
/*       head_title_array.name ? 'site-name--' ~ head_title_array.name|clean_class,*/
/*       theme.name ? 'theme-name--' ~ theme.name|clean_class,*/
/*       db_offline ? 'db-offline',*/
/*       page.sidebar_second ? 'one-sidebar sidebar-second'*/
/*     ]*/
/*   %}*/
/*   <body {{ attributes.addClass(body_classes) }}>*/
/*     <a href="{{ skip_link_target }}" class="visually-hidden focusable skip-link">{{ 'Skip to main content'|t }}</a>*/
/*     {{ page_top }}*/
/*     {{ page }}*/
/*     {{ page_bottom }}*/
/*     <js-bottom-placeholder token="{{ placeholder_token|raw }}">*/
/*   </body>*/
/* </html>*/
/* */
