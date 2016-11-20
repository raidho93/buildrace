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
        $__internal_6addd957dedeac4dec1d8e5e792d81fd4edf2726eaaa51b5b5e30cff2c235173 = $this->env->getExtension("native_profiler");
        $__internal_6addd957dedeac4dec1d8e5e792d81fd4edf2726eaaa51b5b5e30cff2c235173->enter($__internal_6addd957dedeac4dec1d8e5e792d81fd4edf2726eaaa51b5b5e30cff2c235173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/socialbase/templates/form/form-element-label.html.twig"));

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
        
        $__internal_6addd957dedeac4dec1d8e5e792d81fd4edf2726eaaa51b5b5e30cff2c235173->leave($__internal_6addd957dedeac4dec1d8e5e792d81fd4edf2726eaaa51b5b5e30cff2c235173_prof);

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
        return array (  73 => 38,  71 => 37,  69 => 36,  64 => 34,  62 => 33,  58 => 32,  54 => 31,  52 => 30,  50 => 26,  49 => 25,  48 => 24,  47 => 23,  46 => 21,);
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
