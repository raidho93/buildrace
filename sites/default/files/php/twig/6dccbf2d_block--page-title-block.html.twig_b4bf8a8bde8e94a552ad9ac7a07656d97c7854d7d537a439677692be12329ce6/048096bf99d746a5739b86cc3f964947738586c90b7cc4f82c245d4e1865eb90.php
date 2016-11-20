<?php

/* themes/contrib/bootstrap/templates/block/block--page-title-block.html.twig */
class __TwigTemplate_2d67dcf10d15c9dff6a75a5e5042e6337b955554cdaceaaf66aded3d97b2a6c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("block--bare.html.twig", "themes/contrib/bootstrap/templates/block/block--page-title-block.html.twig", 9);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "block--bare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7dc55c2d07960d3d302329e4017e528f2e49dbcbc56c15c2b5144972b79f6ae4 = $this->env->getExtension("native_profiler");
        $__internal_7dc55c2d07960d3d302329e4017e528f2e49dbcbc56c15c2b5144972b79f6ae4->enter($__internal_7dc55c2d07960d3d302329e4017e528f2e49dbcbc56c15c2b5144972b79f6ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/contrib/bootstrap/templates/block/block--page-title-block.html.twig"));

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
        
        $__internal_7dc55c2d07960d3d302329e4017e528f2e49dbcbc56c15c2b5144972b79f6ae4->leave($__internal_7dc55c2d07960d3d302329e4017e528f2e49dbcbc56c15c2b5144972b79f6ae4_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/block/block--page-title-block.html.twig";
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
/*  * Theme override for page title block.*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {% extends "block--bare.html.twig" %}*/
/* */
