<?php

/* themes/socialbase/templates/system/page-title.html.twig */
class __TwigTemplate_9939e576bd4f790b7be9d510b6a1ce2232878a87a887174ad9593b56fd0ca081 extends Twig_Template
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
        $__internal_bfbd45eb9a7729c555f01a80fe515e0ed5963b68308c3417f7fe193c3ab94b9f = $this->env->getExtension("native_profiler");
        $__internal_bfbd45eb9a7729c555f01a80fe515e0ed5963b68308c3417f7fe193c3ab94b9f->enter($__internal_bfbd45eb9a7729c555f01a80fe515e0ed5963b68308c3417f7fe193c3ab94b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/socialbase/templates/system/page-title.html.twig"));

        $tags = array("set" => 21, "if" => 27);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 19
        echo "
";
        // line 21
        $context["classes"] = array(0 => "h4 section-title", 1 => ((        // line 23
(isset($context["stream"]) ? $context["stream"] : null)) ? ("section-title-stream") : ("")));
        // line 26
        echo "
";
        // line 27
        if (((isset($context["node"]) ? $context["node"] : null) &&  !(isset($context["edit"]) ? $context["edit"] : null))) {
            // line 28
            echo "
  ";
            // line 29
            $context["extra_classes"] = array(0 => "section-title-node");
            // line 33
            echo "
";
        }
        // line 35
        echo "

";
        // line 37
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 38
            echo "  <h1";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null), 1 => (isset($context["extra_classes"]) ? $context["extra_classes"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>
";
        }
        
        $__internal_bfbd45eb9a7729c555f01a80fe515e0ed5963b68308c3417f7fe193c3ab94b9f->leave($__internal_bfbd45eb9a7729c555f01a80fe515e0ed5963b68308c3417f7fe193c3ab94b9f_prof);

    }

    public function getTemplateName()
    {
        return "themes/socialbase/templates/system/page-title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 38,  70 => 37,  66 => 35,  62 => 33,  60 => 29,  57 => 28,  55 => 27,  52 => 26,  50 => 23,  49 => 21,  46 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for page titles.*/
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
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* */
/* {%*/
/*   set classes = [*/
/*     'h4 section-title',*/
/*     stream ? 'section-title-stream',*/
/*   ]*/
/* %}*/
/* */
/* {% if node and not edit %}*/
/* */
/*   {% set extra_classes = [*/
/*     'section-title-node',*/
/*     ]*/
/*   %}*/
/* */
/* {% endif %}*/
/* */
/* */
/* {% if title %}*/
/*   <h1{{ title_attributes.addClass(classes, extra_classes) }}>{{ title }}</h1>*/
/* {% endif %}*/
/* */
