<?php

/* themes/socialbase/templates/form/form-element-label.html.twig */
class __TwigTemplate_68945415d8b02e15c8916d503024adc9b0abaf7cfdea5c7872d04c3a09c03ce8 extends Twig_Template
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
        $tags = array("set" => 21, "if" => 30);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 21
        $context["classes"] = array(0 => "control-label", 1 => (((        // line 23
(isset($context["title_display"]) ? $context["title_display"] : null) == "after")) ? ("option") : ("")), 2 => (((        // line 24
(isset($context["title_display"]) ? $context["title_display"] : null) == "invisible")) ? ("sr-only") : ("")), 3 => ((        // line 25
(isset($context["required"]) ? $context["required"] : null)) ? ("js-form-required") : ("")), 4 => ((        // line 26
(isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : ("")));
        // line 30
        if ( !twig_test_empty((isset($context["title"]) ? $context["title"] : null))) {
            // line 31
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["element"]) ? $context["element"] : null), "html", null, true));
            echo "
  <label";
            // line 32
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            // line 33
            if ((isset($context["description"]) ? $context["description"] : null)) {
                // line 34
                echo "<p class=\"help-block\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true));
                echo "</p>";
            }
            // line 36
            echo "</label>";
            // line 37
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 38
                echo "<span class=\"form-required\">*</span>";
            }
        }
    }

    public function getTemplateName()
    {
        return "themes/socialbase/templates/form/form-element-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 38,  68 => 37,  66 => 36,  61 => 34,  59 => 33,  55 => 32,  51 => 31,  49 => 30,  47 => 26,  46 => 25,  45 => 24,  44 => 23,  43 => 21,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a form element label.*/
/*  **/
/*  * Available variables:*/
/*  * - element: an input element.*/
/*  * - title: The label's text.*/
/*  * - title_display: Elements title_display setting.*/
/*  * - description: element description.*/
/*  * - required: An indicator for whether the associated form element is required.*/
/*  * - attributes: A list of HTML attributes for the label.*/
/*  **/
/*  * @see template_preprocess_form_element_label()*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* */
/* {%-*/
/*   set classes = [*/
/*     'control-label',*/
/*     title_display == 'after' ? 'option',*/
/*     title_display == 'invisible' ? 'sr-only',*/
/*     required ? 'js-form-required',*/
/*     required ? 'form-required',*/
/*   ]*/
/* -%}*/
/* */
/* {%- if title is not empty -%}*/
/*   {{ element }}*/
/*   <label{{ attributes.addClass(classes) }}>{{ title }}*/
/*     {%- if description -%}*/
/*       <p class="help-block">{{ description }}</p>*/
/*     {%- endif -%}*/
/*   </label>*/
/*   {%- if required -%}*/
/*     <span class="form-required">*</span>*/
/*   {%- endif -%}*/
/* {%- endif -%}*/
/* */
