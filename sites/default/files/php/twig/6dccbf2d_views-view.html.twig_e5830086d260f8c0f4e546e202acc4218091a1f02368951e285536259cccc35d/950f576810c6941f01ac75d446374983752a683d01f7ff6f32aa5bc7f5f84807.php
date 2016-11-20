<?php

/* themes/infinite/templates/views/views-view.html.twig */
class __TwigTemplate_2a6e3c38bb6951d87b6cffce7f7bdba2ac7ba49edb72916269a4d2c4ae023a4a extends Twig_Template
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
        $__internal_ed0c6f88bf4b25add4779e0b283377a01a6c604aa8d8aecd3cb4ffc94b32e573 = $this->env->getExtension("native_profiler");
        $__internal_ed0c6f88bf4b25add4779e0b283377a01a6c604aa8d8aecd3cb4ffc94b32e573->enter($__internal_ed0c6f88bf4b25add4779e0b283377a01a6c604aa8d8aecd3cb4ffc94b32e573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/infinite/templates/views/views-view.html.twig"));

        $tags = array("if" => 36);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
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

        // line 35
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 36
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 37
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "
  ";
        }
        // line 39
        echo "
  ";
        // line 40
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 41
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true));
            echo "
  ";
        }
        // line 43
        echo "  ";
        if ((isset($context["exposed"]) ? $context["exposed"] : null)) {
            // line 44
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["exposed"]) ? $context["exposed"] : null), "html", null, true));
            echo "
  ";
        }
        // line 46
        echo "  ";
        if ((isset($context["attachment_before"]) ? $context["attachment_before"] : null)) {
            // line 47
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_before"]) ? $context["attachment_before"] : null), "html", null, true));
            echo "
  ";
        }
        // line 49
        echo "
  ";
        // line 50
        if ((isset($context["rows"]) ? $context["rows"] : null)) {
            // line 51
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true));
            echo "
  ";
        } elseif (        // line 52
(isset($context["empty"]) ? $context["empty"] : null)) {
            // line 53
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true));
            echo "
  ";
        }
        // line 55
        echo "
  ";
        // line 56
        if ((isset($context["pager"]) ? $context["pager"] : null)) {
            // line 57
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pager"]) ? $context["pager"] : null), "html", null, true));
            echo "
  ";
        }
        // line 59
        echo "  ";
        if ((isset($context["attachment_after"]) ? $context["attachment_after"] : null)) {
            // line 60
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_after"]) ? $context["attachment_after"] : null), "html", null, true));
            echo "
  ";
        }
        // line 62
        echo "  ";
        if ((isset($context["more"]) ? $context["more"] : null)) {
            // line 63
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["more"]) ? $context["more"] : null), "html", null, true));
            echo "
  ";
        }
        // line 65
        echo "  ";
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 66
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer"]) ? $context["footer"] : null), "html", null, true));
            echo "
  ";
        }
        // line 68
        echo "  ";
        if ((isset($context["feed_icons"]) ? $context["feed_icons"] : null)) {
            // line 69
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true));
            echo "
  ";
        }
        // line 71
        echo "
";
        // line 72
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        
        $__internal_ed0c6f88bf4b25add4779e0b283377a01a6c604aa8d8aecd3cb4ffc94b32e573->leave($__internal_ed0c6f88bf4b25add4779e0b283377a01a6c604aa8d8aecd3cb4ffc94b32e573_prof);

    }

    public function getTemplateName()
    {
        return "themes/infinite/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 72,  153 => 71,  147 => 69,  144 => 68,  138 => 66,  135 => 65,  129 => 63,  126 => 62,  120 => 60,  117 => 59,  111 => 57,  109 => 56,  106 => 55,  100 => 53,  98 => 52,  93 => 51,  91 => 50,  88 => 49,  82 => 47,  79 => 46,  73 => 44,  70 => 43,  64 => 41,  62 => 40,  59 => 39,  53 => 37,  51 => 36,  46 => 35,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for main view template.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: Remaining HTML attributes for the element.*/
/*  * - css_name: A css-safe version of the view name.*/
/*  * - css_class: The user-specified classes names, if any.*/
/*  * - header: The optional header.*/
/*  * - footer: The optional footer.*/
/*  * - rows: The results of the view query, if any.*/
/*  * - empty: The content to display if there are no rows.*/
/*  * - pager: The optional pager next/prev links to display.*/
/*  * - exposed: Exposed widget form/info to display.*/
/*  * - feed_icons: Optional feed icons to display.*/
/*  * - more: An optional link to the next page of results.*/
/*  * - title: Title of the view, only used when displaying in the admin preview.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the view title.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the view title.*/
/*  * - attachment_before: An optional attachment view to be displayed before the*/
/*  *   view content.*/
/*  * - attachment_after: An optional attachment view to be displayed after the*/
/*  *   view content.*/
/*  * - dom_id: Unique id for every view being printed to give unique class for*/
/*  *   Javascript.*/
/*  **/
/*  * @see template_preprocess_views_view()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/*   {{ title_prefix }}*/
/*   {% if title %}*/
/*     {{ title }}*/
/*   {% endif %}*/
/* */
/*   {% if header %}*/
/*       {{ header }}*/
/*   {% endif %}*/
/*   {% if exposed %}*/
/*       {{ exposed }}*/
/*   {% endif %}*/
/*   {% if attachment_before %}*/
/*       {{ attachment_before }}*/
/*   {% endif %}*/
/* */
/*   {% if rows %}*/
/*       {{ rows }}*/
/*   {% elseif empty %}*/
/*       {{ empty }}*/
/*   {% endif %}*/
/* */
/*   {% if pager %}*/
/*     {{ pager }}*/
/*   {% endif %}*/
/*   {% if attachment_after %}*/
/*       {{ attachment_after }}*/
/*   {% endif %}*/
/*   {% if more %}*/
/*     {{ more }}*/
/*   {% endif %}*/
/*   {% if footer %}*/
/*       {{ footer }}*/
/*   {% endif %}*/
/*   {% if feed_icons %}*/
/*       {{ feed_icons }}*/
/*   {% endif %}*/
/* */
/* {{ title_suffix }}*/
