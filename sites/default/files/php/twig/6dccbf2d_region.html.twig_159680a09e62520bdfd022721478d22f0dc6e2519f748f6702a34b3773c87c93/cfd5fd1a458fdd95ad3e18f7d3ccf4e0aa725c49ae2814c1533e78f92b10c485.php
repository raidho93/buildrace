<?php

/* themes/socialbase/templates/layout/region.html.twig */
class __TwigTemplate_3cc2c01b419f02e7dc023a61f026167412fd40fac02c8a9c4e3c0e0ced175388 extends Twig_Template
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
        $__internal_ebfe89fff78a025b5694fa680f097b33218bfef82a604871a84a9faaac7aeac7 = $this->env->getExtension("native_profiler");
        $__internal_ebfe89fff78a025b5694fa680f097b33218bfef82a604871a84a9faaac7aeac7->enter($__internal_ebfe89fff78a025b5694fa680f097b33218bfef82a604871a84a9faaac7aeac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/socialbase/templates/layout/region.html.twig"));

        $tags = array("if" => 1);
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

        // line 1
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 2
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
";
        }
        
        $__internal_ebfe89fff78a025b5694fa680f097b33218bfef82a604871a84a9faaac7aeac7->leave($__internal_ebfe89fff78a025b5694fa680f097b33218bfef82a604871a84a9faaac7aeac7_prof);

    }

    public function getTemplateName()
    {
        return "themes/socialbase/templates/layout/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 2,  46 => 1,);
    }
}
/* {% if content %}*/
/*   {{ content }}*/
/* {% endif %}*/
/* */
