<?php

/* themes/adaptivetheme/at_core/templates/content/page-title.html.twig */
class __TwigTemplate_2b7b6c2a55dfac07c8b663ea1c69a1efbcfedfe1fc7b624c5730228eb44f6468 extends Twig_Template
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
        $__internal_f2280b23bdc7da58e48d5763f751e4a62178f9af0c0194b5a57dee58527e6cc3 = $this->env->getExtension("native_profiler");
        $__internal_f2280b23bdc7da58e48d5763f751e4a62178f9af0c0194b5a57dee58527e6cc3->enter($__internal_f2280b23bdc7da58e48d5763f751e4a62178f9af0c0194b5a57dee58527e6cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/adaptivetheme/at_core/templates/content/page-title.html.twig"));

        $tags = array("if" => 18);
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

        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
";
        // line 18
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 19
            echo "  <h1";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "page__title"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>
";
        }
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
";
        
        $__internal_f2280b23bdc7da58e48d5763f751e4a62178f9af0c0194b5a57dee58527e6cc3->leave($__internal_f2280b23bdc7da58e48d5763f751e4a62178f9af0c0194b5a57dee58527e6cc3_prof);

    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/content/page-title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 21,  52 => 19,  50 => 18,  46 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for page titles.*/
/*  **/
/*  * Available variables:*/
/*  * - title_attributes: HTML attributes for the page title element.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * @see template_preprocess_page_title()*/
/*  *//* */
/* #}*/
/* {{ title_prefix }}*/
/* {% if title %}*/
/*   <h1{{ title_attributes.addClass('page__title') }}>{{ title }}</h1>*/
/* {% endif %}*/
/* {{ title_suffix }}*/
/* */
