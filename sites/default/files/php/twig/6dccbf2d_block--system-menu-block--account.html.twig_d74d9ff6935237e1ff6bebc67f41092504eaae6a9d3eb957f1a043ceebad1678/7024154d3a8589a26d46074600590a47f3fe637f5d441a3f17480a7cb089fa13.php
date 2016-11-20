<?php

/* themes/socialbase/templates/block/block--system-menu-block--account.html.twig */
class __TwigTemplate_81646212f30aebfcf1f888e454701dee9d3215b9115d303e109ecae90ea42fe7 extends Twig_Template
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
        $__internal_9572dda5eaa09b96f582c3964a57d855916a438d081e4a445f4290087adc28c7 = $this->env->getExtension("native_profiler");
        $__internal_9572dda5eaa09b96f582c3964a57d855916a438d081e4a445f4290087adc28c7->enter($__internal_9572dda5eaa09b96f582c3964a57d855916a438d081e4a445f4290087adc28c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/socialbase/templates/block/block--system-menu-block--account.html.twig"));

        $tags = array("if" => 36, "set" => 42);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set'),
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

        // line 34
        echo "
";
        // line 36
        if ((isset($context["logged_in"]) ? $context["logged_in"] : null)) {
            // line 37
            echo "  <div class=\"block--user-menu\">
";
        }
        // line 39
        echo "
";
        // line 41
        if ( !$this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label_display", array())) {
            // line 42
            echo "  ";
            $context["title_attributes"] = $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "visually-hidden"), "method");
        }
        // line 44
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
<h2";
        // line 45
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array()), "html", null, true));
        echo "</h2>
";
        // line 46
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "

";
        // line 49
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "

";
        // line 51
        if ((isset($context["logged_in"]) ? $context["logged_in"] : null)) {
            // line 52
            echo "  </div>
";
        }
        
        $__internal_9572dda5eaa09b96f582c3964a57d855916a438d081e4a445f4290087adc28c7->leave($__internal_9572dda5eaa09b96f582c3964a57d855916a438d081e4a445f4290087adc28c7_prof);

    }

    public function getTemplateName()
    {
        return "themes/socialbase/templates/block/block--system-menu-block--account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 52,  84 => 51,  79 => 49,  74 => 46,  68 => 45,  64 => 44,  60 => 42,  58 => 41,  55 => 39,  51 => 37,  49 => 36,  46 => 34,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a menu block.*/
/*  **/
/*  * Available variables:*/
/*  * - plugin_id: The ID of the block implementation.*/
/*  * - label: The configured label of the block if visible.*/
/*  * - configuration: A list of the block's configuration values.*/
/*  *   - label: The configured label for the block.*/
/*  *   - label_display: The display settings for the label.*/
/*  *   - provider: The module or other provider that provided this block plugin.*/
/*  *   - Block plugin specific settings will also be stored here.*/
/*  * - content: The content of this block.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  *   - id: A valid HTML ID and guaranteed unique.*/
/*  * - title_attributes: HTML attributes for the title element.*/
/*  * - content_attributes: HTML attributes for the content element.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * Headings should be used on navigation menus that consistently appear on*/
/*  * multiple pages. When this menu block's label is configured to not be*/
/*  * displayed, it is automatically made invisible using the 'visually-hidden' CSS*/
/*  * class, which still keeps it visible for screen-readers and assistive*/
/*  * technology. Headings allow screen-reader and keyboard only users to navigate*/
/*  * to or skip the links.*/
/*  * See http://juicystudio.com/article/screen-readers-display-none.php and*/
/*  * http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.*/
/*  *//* */
/* #}*/
/* */
/* {# Extra wrapper, only when it is a logged in user #}*/
/* {% if logged_in %}*/
/*   <div class="block--user-menu">*/
/* {% endif %}*/
/* */
/* {# Label. If not displayed, we still provide it for screen readers. #}*/
/* {% if not configuration.label_display %}*/
/*   {% set title_attributes = title_attributes.addClass('visually-hidden') %}*/
/* {% endif %}*/
/* {{ title_prefix }}*/
/* <h2{{ title_attributes }}>{{ configuration.label }}</h2>*/
/* {{ title_suffix }}*/
/* */
/* {# Menu. #}*/
/* {{ content }}*/
/* */
/* {% if logged_in %}*/
/*   </div>*/
/* {% endif %}*/
/* */
