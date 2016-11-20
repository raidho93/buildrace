<?php

/* {# inline_template_start #}<div class="block-place-region">{{ link }}</div> */
class __TwigTemplate_05aa63e50b46508c97cc3a3fbad5a245b46e7a0309380a63d43a42e98d0a7f71 extends Twig_Template
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
        $__internal_3058c5e261c01e17b2d71a061ebd0d045e170542389bdedcccb229b1c98861f7 = $this->env->getExtension("native_profiler");
        $__internal_3058c5e261c01e17b2d71a061ebd0d045e170542389bdedcccb229b1c98861f7->enter($__internal_3058c5e261c01e17b2d71a061ebd0d045e170542389bdedcccb229b1c98861f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<div class=\"block-place-region\">{{ link }}</div>"));

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
        echo "<div class=\"block-place-region\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
        echo "</div>";
        
        $__internal_3058c5e261c01e17b2d71a061ebd0d045e170542389bdedcccb229b1c98861f7->leave($__internal_3058c5e261c01e17b2d71a061ebd0d045e170542389bdedcccb229b1c98861f7_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"block-place-region\">{{ link }}</div>";
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
/* {# inline_template_start #}<div class="block-place-region">{{ link }}</div>*/
