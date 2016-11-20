<?php

/* themes/zircon/templates/views/views-view.html.twig */
class __TwigTemplate_556af03320c6a439770ec14e398331155de1f388bd716708d29987590ac4cf86 extends Twig_Template
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
        $__internal_5452d368401586a8ae980310547d4b6a3da246c3eb1d3b71067c718206881a24 = $this->env->getExtension("native_profiler");
        $__internal_5452d368401586a8ae980310547d4b6a3da246c3eb1d3b71067c718206881a24->enter($__internal_5452d368401586a8ae980310547d4b6a3da246c3eb1d3b71067c718206881a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/zircon/templates/views/views-view.html.twig"));

        $tags = array("if" => 41);
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

        // line 40
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 41
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 42
            echo "    <div class=\"view-header\">
      ";
            // line 43
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 46
        echo "  ";
        if ((isset($context["exposed"]) ? $context["exposed"] : null)) {
            // line 47
            echo "    <div class=\"view-filters\">
      ";
            // line 48
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["exposed"]) ? $context["exposed"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 51
        echo "  ";
        if ((isset($context["attachment_before"]) ? $context["attachment_before"] : null)) {
            // line 52
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 53
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_before"]) ? $context["attachment_before"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 56
        echo "
  ";
        // line 57
        if ((isset($context["rows"]) ? $context["rows"] : null)) {
            // line 58
            echo "    <div class=\"view-content\">
      ";
            // line 59
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true));
            echo "
    </div>
  ";
        } elseif (        // line 61
(isset($context["empty"]) ? $context["empty"] : null)) {
            // line 62
            echo "    <div class=\"view-empty\">
      ";
            // line 63
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 66
        echo "
  ";
        // line 67
        if ((isset($context["pager"]) ? $context["pager"] : null)) {
            // line 68
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pager"]) ? $context["pager"] : null), "html", null, true));
            echo "
  ";
        }
        // line 70
        echo "  ";
        if ((isset($context["attachment_after"]) ? $context["attachment_after"] : null)) {
            // line 71
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 72
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_after"]) ? $context["attachment_after"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 75
        echo "  ";
        if ((isset($context["more"]) ? $context["more"] : null)) {
            // line 76
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["more"]) ? $context["more"] : null), "html", null, true));
            echo "
  ";
        }
        // line 78
        echo "  ";
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 79
            echo "    <div class=\"view-footer\">
      ";
            // line 80
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer"]) ? $context["footer"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 83
        echo "  ";
        if ((isset($context["feed_icons"]) ? $context["feed_icons"] : null)) {
            // line 84
            echo "    <div class=\"feed-icons\">
      ";
            // line 85
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 88
        echo "</div>
";
        
        $__internal_5452d368401586a8ae980310547d4b6a3da246c3eb1d3b71067c718206881a24->leave($__internal_5452d368401586a8ae980310547d4b6a3da246c3eb1d3b71067c718206881a24_prof);

    }

    public function getTemplateName()
    {
        return "themes/zircon/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 88,  160 => 85,  157 => 84,  154 => 83,  148 => 80,  145 => 79,  142 => 78,  136 => 76,  133 => 75,  127 => 72,  124 => 71,  121 => 70,  115 => 68,  113 => 67,  110 => 66,  104 => 63,  101 => 62,  99 => 61,  94 => 59,  91 => 58,  89 => 57,  86 => 56,  80 => 53,  77 => 52,  74 => 51,  68 => 48,  65 => 47,  62 => 46,  56 => 43,  53 => 42,  51 => 41,  46 => 40,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for main view template.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: Remaining HTML attributes for the element including:*/
/*  *   - class: HTML classes that can be used to style contextually*/
/*  *     through CSS, including:*/
/*  *     - view*/
/*  *     - view-[css_name]*/
/*  *     - view-id-[view_name]*/
/*  *     - view-display-id-[display_name]*/
/*  *     - view-dom-id-[dom_id]*/
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
/*  **/
/*  * @see template_preprocess_views_view()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div{{ attributes }}>*/
/*   {% if header %}*/
/*     <div class="view-header">*/
/*       {{ header }}*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if exposed %}*/
/*     <div class="view-filters">*/
/*       {{ exposed }}*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if attachment_before %}*/
/*     <div class="attachment attachment-before">*/
/*       {{ attachment_before }}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {% if rows %}*/
/*     <div class="view-content">*/
/*       {{ rows }}*/
/*     </div>*/
/*   {% elseif empty %}*/
/*     <div class="view-empty">*/
/*       {{ empty }}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {% if pager %}*/
/*     {{ pager }}*/
/*   {% endif %}*/
/*   {% if attachment_after %}*/
/*     <div class="attachment attachment-after">*/
/*       {{ attachment_after }}*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if more %}*/
/*     {{ more }}*/
/*   {% endif %}*/
/*   {% if footer %}*/
/*     <div class="view-footer">*/
/*       {{ footer }}*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if feed_icons %}*/
/*     <div class="feed-icons">*/
/*       {{ feed_icons }}*/
/*     </div>*/
/*   {% endif %}*/
/* </div>*/
/* */
