<?php

/* themes/socialbase/templates/views/views-view.html.twig */
class __TwigTemplate_c8d05bf39d2d77bff18f8735def9477309bb34d6b853e3057b49b7b0e939f2d8 extends Twig_Template
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
        $__internal_3584833c4a300576b6e266953f6e7636b62725c2af86ddd125c7d113ea1a7709 = $this->env->getExtension("native_profiler");
        $__internal_3584833c4a300576b6e266953f6e7636b62725c2af86ddd125c7d113ea1a7709->enter($__internal_3584833c4a300576b6e266953f6e7636b62725c2af86ddd125c7d113ea1a7709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/socialbase/templates/views/views-view.html.twig"));

        $tags = array("set" => 36, "if" => 49);
        $filters = array("clean_class" => 38);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
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

        // line 36
        $context["classes"] = array(0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass(        // line 38
(isset($context["id"]) ? $context["id"] : null))), 2 => ("view-id-" .         // line 39
(isset($context["id"]) ? $context["id"] : null)), 3 => ("view-display-id-" .         // line 40
(isset($context["display_id"]) ? $context["display_id"] : null)), 4 => ((        // line 41
(isset($context["dom_id"]) ? $context["dom_id"] : null)) ? (("js-view-dom-id-" . (isset($context["dom_id"]) ? $context["dom_id"] : null))) : ("")));
        // line 44
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 45
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 46
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "
  ";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "

  ";
        // line 49
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 50
            echo "    <div class=\"view-header\">
      ";
            // line 51
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 54
        echo "
  ";
        // line 55
        if ((isset($context["exposed"]) ? $context["exposed"] : null)) {
            // line 56
            echo "    <div class=\"view-filters form-group\">
      ";
            // line 57
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["exposed"]) ? $context["exposed"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 60
        echo "
  ";
        // line 61
        if ((isset($context["attachment_before"]) ? $context["attachment_before"] : null)) {
            // line 62
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 63
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_before"]) ? $context["attachment_before"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 66
        echo "
  ";
        // line 67
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true));
        echo "
  ";
        // line 68
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true));
        echo "
  ";
        // line 69
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pager"]) ? $context["pager"] : null), "html", null, true));
        echo "

  ";
        // line 71
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_after"]) ? $context["attachment_after"] : null), "html", null, true));
        echo "
  ";
        // line 72
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["more"]) ? $context["more"] : null), "html", null, true));
        echo "

  ";
        // line 74
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 75
            echo "    <div class=\"view-footer\">
      ";
            // line 76
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer"]) ? $context["footer"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 79
        echo "
  ";
        // line 80
        if ((isset($context["feed_icons"]) ? $context["feed_icons"] : null)) {
            // line 81
            echo "    <div class=\"feed-icons\">
      ";
            // line 82
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 85
        echo "</div>
";
        
        $__internal_3584833c4a300576b6e266953f6e7636b62725c2af86ddd125c7d113ea1a7709->leave($__internal_3584833c4a300576b6e266953f6e7636b62725c2af86ddd125c7d113ea1a7709_prof);

    }

    public function getTemplateName()
    {
        return "themes/socialbase/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 85,  153 => 82,  150 => 81,  148 => 80,  145 => 79,  139 => 76,  136 => 75,  134 => 74,  129 => 72,  125 => 71,  120 => 69,  116 => 68,  112 => 67,  109 => 66,  103 => 63,  100 => 62,  98 => 61,  95 => 60,  89 => 57,  86 => 56,  84 => 55,  81 => 54,  75 => 51,  72 => 50,  70 => 49,  65 => 47,  61 => 46,  57 => 45,  52 => 44,  50 => 41,  49 => 40,  48 => 39,  47 => 38,  46 => 36,);
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
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'view',*/
/*     'view-' ~ id|clean_class,*/
/*     'view-id-' ~ id,*/
/*     'view-display-id-' ~ display_id,*/
/*     dom_id ? 'js-view-dom-id-' ~ dom_id,*/
/*   ]*/
/* %}*/
/* <div{{ attributes.addClass(classes) }}>*/
/*   {{ title_prefix }}*/
/*   {{ title }}*/
/*   {{ title_suffix }}*/
/* */
/*   {% if header %}*/
/*     <div class="view-header">*/
/*       {{ header }}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {% if exposed %}*/
/*     <div class="view-filters form-group">*/
/*       {{ exposed }}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {% if attachment_before %}*/
/*     <div class="attachment attachment-before">*/
/*       {{ attachment_before }}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {{ rows }}*/
/*   {{ empty }}*/
/*   {{ pager }}*/
/* */
/*   {{ attachment_after }}*/
/*   {{ more }}*/
/* */
/*   {% if footer %}*/
/*     <div class="view-footer">*/
/*       {{ footer }}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {% if feed_icons %}*/
/*     <div class="feed-icons">*/
/*       {{ feed_icons }}*/
/*     </div>*/
/*   {% endif %}*/
/* </div>*/
/* */
