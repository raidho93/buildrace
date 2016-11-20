<?php

/* themes/adaptivetheme/at_core/templates/form/form--search-block-form.html.twig */
class __TwigTemplate_fd6fdd44a5f5967599636762e327228b87909af037d8ed2dc83ca2b390d21c1b extends Twig_Template
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
        $__internal_706d1e5136fff3ac513991679d54075408dcd19e45e97efa1fceb0bead4f4b6a = $this->env->getExtension("native_profiler");
        $__internal_706d1e5136fff3ac513991679d54075408dcd19e45e97efa1fceb0bead4f4b6a->enter($__internal_706d1e5136fff3ac513991679d54075408dcd19e45e97efa1fceb0bead4f4b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/adaptivetheme/at_core/templates/form/form--search-block-form.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 13
        echo "<form";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "search-block-form__form"), "method"), "html", null, true));
        echo ">
  ";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
</form>
";
        
        $__internal_706d1e5136fff3ac513991679d54075408dcd19e45e97efa1fceb0bead4f4b6a->leave($__internal_706d1e5136fff3ac513991679d54075408dcd19e45e97efa1fceb0bead4f4b6a_prof);

    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/form/form--search-block-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  46 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a 'form' element.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: A list of HTML attributes for the wrapper element.*/
/*  * - children: The child elements of the form.*/
/*  **/
/*  * @see template_preprocess_form()*/
/*  *//* */
/* #}*/
/* <form{{ attributes.addClass('search-block-form__form') }}>*/
/*   {{ children }}*/
/* </form>*/
/* */
