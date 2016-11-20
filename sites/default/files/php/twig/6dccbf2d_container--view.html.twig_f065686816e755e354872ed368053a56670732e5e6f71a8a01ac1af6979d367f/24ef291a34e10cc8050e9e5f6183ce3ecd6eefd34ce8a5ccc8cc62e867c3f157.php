<?php

/* themes/socialbase/templates/system/container--view.html.twig */
class __TwigTemplate_d2b39c9fcd28c8788cde0b35dd2835d42922cd9ccf7a481996e08eb6a59bf79a extends Twig_Template
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
        $__internal_962a4181007e845d1a802888bd6aa12a74f998d721428350887a6dae76cc114c = $this->env->getExtension("native_profiler");
        $__internal_962a4181007e845d1a802888bd6aa12a74f998d721428350887a6dae76cc114c->enter($__internal_962a4181007e845d1a802888bd6aa12a74f998d721428350887a6dae76cc114c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/socialbase/templates/system/container--view.html.twig"));

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

        // line 20
        echo "
";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
";
        
        $__internal_962a4181007e845d1a802888bd6aa12a74f998d721428350887a6dae76cc114c->leave($__internal_962a4181007e845d1a802888bd6aa12a74f998d721428350887a6dae76cc114c_prof);

    }

    public function getTemplateName()
    {
        return "themes/socialbase/templates/system/container--view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 21,  46 => 20,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override of a container used to wrap child elements.*/
/*  **/
/*  * Used for grouped form items. Can also be used as a theme wrapper for any*/
/*  * renderable element, to surround it with a <div> and HTML attributes.*/
/*  * See the @link forms_api_reference.html Form API reference @endlink for more*/
/*  * information on the #theme_wrappers render array property.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  * - children: The rendered child elements of the container.*/
/*  * - has_parent: A flag to indicate that the container has one or more parent*/
/*      containers.*/
/*  **/
/*  * @see template_preprocess_container()*/
/*  *//* */
/* #}*/
/* */
/* {{ children }}*/
/* */
