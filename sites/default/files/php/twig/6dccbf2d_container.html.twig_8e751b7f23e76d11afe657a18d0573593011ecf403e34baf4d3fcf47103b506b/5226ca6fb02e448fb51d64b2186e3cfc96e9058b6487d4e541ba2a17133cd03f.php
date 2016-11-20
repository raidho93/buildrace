<?php

/* themes/infinite/templates/containers/container.html.twig */
class __TwigTemplate_701ce2e320e42cf6d3158a76b8b35de55e1131ed652c4dcc83056377cd565162 extends Twig_Template
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
        $__internal_5d2fc9eeff54610012a2ce049f97ec36f43d2f6dde17a41b3586be838993fc3e = $this->env->getExtension("native_profiler");
        $__internal_5d2fc9eeff54610012a2ce049f97ec36f43d2f6dde17a41b3586be838993fc3e->enter($__internal_5d2fc9eeff54610012a2ce049f97ec36f43d2f6dde17a41b3586be838993fc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/infinite/templates/containers/container.html.twig"));

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

        // line 1
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        
        $__internal_5d2fc9eeff54610012a2ce049f97ec36f43d2f6dde17a41b3586be838993fc3e->leave($__internal_5d2fc9eeff54610012a2ce049f97ec36f43d2f6dde17a41b3586be838993fc3e_prof);

    }

    public function getTemplateName()
    {
        return "themes/infinite/templates/containers/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {{ children }}*/
