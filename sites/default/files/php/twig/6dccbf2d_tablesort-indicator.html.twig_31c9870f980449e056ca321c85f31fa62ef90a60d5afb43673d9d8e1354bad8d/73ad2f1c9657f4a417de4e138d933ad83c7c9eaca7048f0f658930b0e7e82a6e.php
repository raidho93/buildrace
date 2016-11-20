<?php

/* core/themes/stable/templates/admin/tablesort-indicator.html.twig */
class __TwigTemplate_5a8374f55eebf6d0ad50127e1dabb120a2e292f4f849476bb701cfdd56ba6242 extends Twig_Template
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
        $__internal_3984d5b9f3bfa786fb92c25e2c16cd1fb0b7403c0aaf04072ca1e3bf68f33815 = $this->env->getExtension("native_profiler");
        $__internal_3984d5b9f3bfa786fb92c25e2c16cd1fb0b7403c0aaf04072ca1e3bf68f33815->enter($__internal_3984d5b9f3bfa786fb92c25e2c16cd1fb0b7403c0aaf04072ca1e3bf68f33815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/tablesort-indicator.html.twig"));

        $tags = array("set" => 11, "if" => 18);
        $filters = array("t" => 19);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('t'),
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

        // line 11
        $context["classes"] = array(0 => "tablesort", 1 => ("tablesort--" .         // line 13
(isset($context["style"]) ? $context["style"] : null)));
        // line 16
        echo "<span";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  <span class=\"visually-hidden\">
    ";
        // line 18
        if (((isset($context["style"]) ? $context["style"] : null) == "asc")) {
            // line 19
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Sort ascending")));
            echo "
    ";
        } else {
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Sort descending")));
            echo "
    ";
        }
        // line 23
        echo "  </span>
</span>
";
        
        $__internal_3984d5b9f3bfa786fb92c25e2c16cd1fb0b7403c0aaf04072ca1e3bf68f33815->leave($__internal_3984d5b9f3bfa786fb92c25e2c16cd1fb0b7403c0aaf04072ca1e3bf68f33815_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/tablesort-indicator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 23,  62 => 21,  57 => 19,  55 => 18,  49 => 16,  47 => 13,  46 => 11,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for displaying a tablesort indicator.*/
/*  **/
/*  * Available variables:*/
/*  * - style: Either 'asc' or 'desc', indicating the sorting direction.*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'tablesort',*/
/*     'tablesort--' ~ style,*/
/*   ]*/
/* %}*/
/* <span{{ attributes.addClass(classes) }}>*/
/*   <span class="visually-hidden">*/
/*     {% if style == 'asc' -%}*/
/*       {{ 'Sort ascending'|t }}*/
/*     {% else -%}*/
/*       {{ 'Sort descending'|t }}*/
/*     {% endif %}*/
/*   </span>*/
/* </span>*/
/* */
