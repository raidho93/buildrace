<?php

/* core/modules/system/templates/form.html.twig */
class __TwigTemplate_ca0ba57312cbd303a6dd6d3e2bb528e54ced47cab54f82eeee26bd9c0aa5c690 extends Twig_Template
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
        $__internal_739d45de59d75f9aca6126ce22853511391d801765670a9a945b4ca62c993436 = $this->env->getExtension("native_profiler");
        $__internal_739d45de59d75f9aca6126ce22853511391d801765670a9a945b4ca62c993436->enter($__internal_739d45de59d75f9aca6126ce22853511391d801765670a9a945b4ca62c993436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/modules/system/templates/form.html.twig"));

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
        echo "<form";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
</form>
";
        
        $__internal_739d45de59d75f9aca6126ce22853511391d801765670a9a945b4ca62c993436->leave($__internal_739d45de59d75f9aca6126ce22853511391d801765670a9a945b4ca62c993436_prof);

    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  46 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a 'form' element.*/
/*  **/
/*  * Available variables*/
/*  * - attributes: A list of HTML attributes for the wrapper element.*/
/*  * - children: The child elements of the form.*/
/*  **/
/*  * @see template_preprocess_form()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <form{{ attributes }}>*/
/*   {{ children }}*/
/* </form>*/
/* */
