<?php

/* core/themes/classy/templates/navigation/menu-local-action.html.twig */
class __TwigTemplate_b37b7795fe7228a20dff9a0b30a654512c784d925fc44a04a2551b611b26c8df extends Twig_Template
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
        $__internal_2270f38fa17ad516047b23b2bcb59544a2ce6e5b4da07b1e1d41855ac9405303 = $this->env->getExtension("native_profiler");
        $__internal_2270f38fa17ad516047b23b2bcb59544a2ce6e5b4da07b1e1d41855ac9405303->enter($__internal_2270f38fa17ad516047b23b2bcb59544a2ce6e5b4da07b1e1d41855ac9405303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/navigation/menu-local-action.html.twig"));

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
        echo "<li";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
        echo "</li>
";
        
        $__internal_2270f38fa17ad516047b23b2bcb59544a2ce6e5b4da07b1e1d41855ac9405303->leave($__internal_2270f38fa17ad516047b23b2bcb59544a2ce6e5b4da07b1e1d41855ac9405303_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/navigation/menu-local-action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a single local action link.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the wrapper element.*/
/*  * - link: A rendered link element.*/
/*  **/
/*  * @see template_preprocess_menu_local_action()*/
/*  *//* */
/* #}*/
/* <li{{ attributes }}>{{ link }}</li>*/
/* */
