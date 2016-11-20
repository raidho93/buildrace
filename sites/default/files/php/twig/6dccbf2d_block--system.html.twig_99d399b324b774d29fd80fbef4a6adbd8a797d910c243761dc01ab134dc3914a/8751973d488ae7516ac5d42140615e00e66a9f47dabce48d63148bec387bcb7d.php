<?php

/* themes/contrib/bootstrap/templates/block/block--system.html.twig */
class __TwigTemplate_29f4942ebee69ca15846274f8078992d953729b6e56b757531ef53232da1f783 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("block--bare.html.twig", "themes/contrib/bootstrap/templates/block/block--system.html.twig", 9);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "block--bare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8d74d14282d1c31f01923dff3792d62dad22f249c91b3b61779012e406b12c9 = $this->env->getExtension("native_profiler");
        $__internal_c8d74d14282d1c31f01923dff3792d62dad22f249c91b3b61779012e406b12c9->enter($__internal_c8d74d14282d1c31f01923dff3792d62dad22f249c91b3b61779012e406b12c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/contrib/bootstrap/templates/block/block--system.html.twig"));

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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8d74d14282d1c31f01923dff3792d62dad22f249c91b3b61779012e406b12c9->leave($__internal_c8d74d14282d1c31f01923dff3792d62dad22f249c91b3b61779012e406b12c9_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/block/block--system.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 9,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for system blocks.*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {% extends "block--bare.html.twig" %}*/
/* */
