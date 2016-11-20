<?php

/* core/modules/system/templates/form-element-label.html.twig */
class __TwigTemplate_9d8882ec75bc4ac532223fb63352fce54e74733ce887894d5a6635564f4b3e50 extends Twig_Template
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
        $__internal_a2f6c043e34290f8fc8383580224eb7f0e27dfd765d2019dd9d406f42e7f9dc0 = $this->env->getExtension("native_profiler");
        $__internal_a2f6c043e34290f8fc8383580224eb7f0e27dfd765d2019dd9d406f42e7f9dc0->enter($__internal_a2f6c043e34290f8fc8383580224eb7f0e27dfd765d2019dd9d406f42e7f9dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/modules/system/templates/form-element-label.html.twig"));

        $tags = array("set" => 18, "if" => 25);
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

        // line 18
        $context["classes"] = array(0 => (((        // line 19
(isset($context["title_display"]) ? $context["title_display"] : null) == "after")) ? ("option") : ("")), 1 => (((        // line 20
(isset($context["title_display"]) ? $context["title_display"] : null) == "invisible")) ? ("visually-hidden") : ("")), 2 => ((        // line 21
(isset($context["required"]) ? $context["required"] : null)) ? ("js-form-required") : ("")), 3 => ((        // line 22
(isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : ("")));
        // line 25
        if (( !twig_test_empty((isset($context["title"]) ? $context["title"] : null)) || (isset($context["required"]) ? $context["required"] : null))) {
            // line 26
            echo "<label";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</label>";
        }
        
        $__internal_a2f6c043e34290f8fc8383580224eb7f0e27dfd765d2019dd9d406f42e7f9dc0->leave($__internal_a2f6c043e34290f8fc8383580224eb7f0e27dfd765d2019dd9d406f42e7f9dc0_prof);

    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/form-element-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 26,  52 => 25,  50 => 22,  49 => 21,  48 => 20,  47 => 19,  46 => 18,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a form element label.*/
/*  **/
/*  * Available variables:*/
/*  * - title: The label's text.*/
/*  * - title_display: Elements title_display setting.*/
/*  * - required: An indicator for whether the associated form element is required.*/
/*  * - attributes: A list of HTML attributes for the label.*/
/*  **/
/*  * @see template_preprocess_form_element_label()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     title_display == 'after' ? 'option',*/
/*     title_display == 'invisible' ? 'visually-hidden',*/
/*     required ? 'js-form-required',*/
/*     required ? 'form-required',*/
/*   ]*/
/* %}*/
/* {% if title is not empty or required -%}*/
/*   <label{{ attributes.addClass(classes) }}>{{ title }}</label>*/
/* {%- endif %}*/
/* */
