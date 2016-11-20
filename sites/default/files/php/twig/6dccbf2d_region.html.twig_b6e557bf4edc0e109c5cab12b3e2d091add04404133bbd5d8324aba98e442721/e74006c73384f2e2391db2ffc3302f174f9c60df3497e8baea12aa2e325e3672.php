<?php

/* themes/infinite/templates/regions/region.html.twig */
class __TwigTemplate_ff99421333022183a6049e9275758a64462685f8eb78baa9716f46ad87090910 extends Twig_Template
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
        $__internal_fcbff4db26406e3ebe7da23cfd897427031fc213f59c072ab0c6c5547f4539ef = $this->env->getExtension("native_profiler");
        $__internal_fcbff4db26406e3ebe7da23cfd897427031fc213f59c072ab0c6c5547f4539ef->enter($__internal_fcbff4db26406e3ebe7da23cfd897427031fc213f59c072ab0c6c5547f4539ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/infinite/templates/regions/region.html.twig"));

        $tags = array("if" => 23);
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

        // line 18
        echo "  ";
        // line 19
        echo "    ";
        // line 20
        echo "    ";
        // line 21
        echo "  ";
        // line 23
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 24
            echo "  ";
            // line 25
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
  ";
        }
        
        $__internal_fcbff4db26406e3ebe7da23cfd897427031fc213f59c072ab0c6c5547f4539ef->leave($__internal_fcbff4db26406e3ebe7da23cfd897427031fc213f59c072ab0c6c5547f4539ef_prof);

    }

    public function getTemplateName()
    {
        return "themes/infinite/templates/regions/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 25,  56 => 24,  54 => 23,  52 => 21,  50 => 20,  48 => 19,  46 => 18,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a region.*/
/*  **/
/*  * Available variables:*/
/*  * - content: The content for this region, typically blocks.*/
/*  * - attributes: HTML attributes for the region div.*/
/*  * - region: The name of the region variable as defined in the theme's*/
/*  *   .info.yml file.*/
/*  **/
/*  * @see template_preprocess_region()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {#{%#}*/
/*   {#set classes = [#}*/
/*     {#'region',#}*/
/*     {#'region-' ~ region|clean_class,#}*/
/*   {#]#}*/
/* {#%}#}*/
/* {% if content %}*/
/*   {#<div{{ attributes.addClass(classes) }}>#}*/
/*     {{ content }}*/
/*   {#</div>#}*/
/* {% endif %}*/
/* */
