<?php

/* core/modules/system/templates/input.html.twig */
class __TwigTemplate_9f1b9b64380f4a08e777f8a8e5c1da3668bfd940536178a9bcad8ad10c91e5f7 extends Twig_Template
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
        $__internal_70118e5a34ba1ec20f69cfe879a852e6952b932a7342fff7cc5b8eb3cc48921f = $this->env->getExtension("native_profiler");
        $__internal_70118e5a34ba1ec20f69cfe879a852e6952b932a7342fff7cc5b8eb3cc48921f->enter($__internal_70118e5a34ba1ec20f69cfe879a852e6952b932a7342fff7cc5b8eb3cc48921f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/modules/system/templates/input.html.twig"));

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

        // line 15
        echo "<input";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo " />";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
";
        
        $__internal_70118e5a34ba1ec20f69cfe879a852e6952b932a7342fff7cc5b8eb3cc48921f->leave($__internal_70118e5a34ba1ec20f69cfe879a852e6952b932a7342fff7cc5b8eb3cc48921f_prof);

    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for an 'input' #type form element.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: A list of HTML attributes for the input element.*/
/*  * - children: Optional additional rendered elements.*/
/*  **/
/*  * @see template_preprocess_input()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <input{{ attributes }} />{{ children }}*/
/* */
