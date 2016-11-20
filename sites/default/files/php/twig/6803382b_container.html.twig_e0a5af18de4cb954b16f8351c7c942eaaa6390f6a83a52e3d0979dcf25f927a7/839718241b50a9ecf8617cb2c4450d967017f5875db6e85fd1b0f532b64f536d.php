<?php

/* themes/socialbase/templates/system/container.html.twig */
class __TwigTemplate_ef107631ac681712bb86c302da1657ee0952e1a18c63749efce7e8ead2495ac7 extends Twig_Template
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
        $tags = array("set" => 22, "if" => 31);
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

        // line 20
        echo "
";
        // line 22
        $context["classes"] = array(0 => (( !$this->getAttribute(        // line 23
(isset($context["attributes"]) ? $context["attributes"] : null), "hasClass", array(0 => "toolbar-menu-administration"), "method")) ? ("form-group") : ("")), 1 => ((        // line 24
(isset($context["has_parent"]) ? $context["has_parent"] : null)) ? ("js-form-wrapper") : ("")), 2 => ((        // line 25
(isset($context["has_parent"]) ? $context["has_parent"] : null)) ? ("form-wrapper") : ("")), 3 => ((        // line 26
(isset($context["has_floats"]) ? $context["has_floats"] : null)) ? ("clearfix margin-top-xxl") : ("")), 4 => (($this->getAttribute(        // line 27
(isset($context["attributes"]) ? $context["attributes"] : null), "hasClass", array(0 => "field--name-field-comment-body"), "method")) ? ("media-body") : ("")));
        // line 30
        echo "
";
        // line 31
        if ((isset($context["search_context"]) ? $context["search_context"] : null)) {
            // line 32
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
            echo "
";
        } else {
            // line 34
            echo "  ";
            if ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "hasClass", array(0 => "more-link"), "method")) {
                // line 35
                echo "    <div";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "btn btn-block btn-flat"), "method"), "html", null, true));
                echo ">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
                echo "</div>";
            } elseif ($this->getAttribute(            // line 36
(isset($context["attributes"]) ? $context["attributes"] : null), "hasClass", array(0 => "crop-preview-wrapper"), "method")) {
                // line 37
                echo "<div";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
                echo ">
      ";
                // line 38
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
                echo "
    </div>";
            } elseif ($this->getAttribute(            // line 40
(isset($context["attributes"]) ? $context["attributes"] : null), "hasClass", array(0 => "crop-preview-wrapper__value"), "method")) {
                // line 41
                echo "<div";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
                echo ">
      ";
                // line 42
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
                echo "
    </div>
  ";
            } else {
                // line 45
                echo "    ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
                echo "
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "themes/socialbase/templates/system/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 45,  91 => 42,  86 => 41,  84 => 40,  80 => 38,  75 => 37,  73 => 36,  67 => 35,  64 => 34,  58 => 32,  56 => 31,  53 => 30,  51 => 27,  50 => 26,  49 => 25,  48 => 24,  47 => 23,  46 => 22,  43 => 20,);
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
/* {%*/
/*   set classes = [*/
/*     not attributes.hasClass('toolbar-menu-administration') ? 'form-group',*/
/*     has_parent ? 'js-form-wrapper',*/
/*     has_parent ? 'form-wrapper',*/
/*     has_floats ? 'clearfix margin-top-xxl',*/
/*     attributes.hasClass('field--name-field-comment-body') ? 'media-body',*/
/*   ]*/
/* %}*/
/* */
/* {% if search_context %}*/
/*   {{ children }}*/
/* {% else %}*/
/*   {% if attributes.hasClass('more-link') %}*/
/*     <div{{ attributes.addClass('btn btn-block btn-flat') }}>{{ children }}</div>*/
/*   {%- elseif attributes.hasClass('crop-preview-wrapper') -%}*/
/*     <div{{ attributes.addClass(classes) }}>*/
/*       {{ children }}*/
/*     </div>*/
/*   {%- elseif attributes.hasClass('crop-preview-wrapper__value') -%}*/
/*     <div{{ attributes.addClass(classes) }}>*/
/*       {{ children }}*/
/*     </div>*/
/*   {% else %}*/
/*     {{ children }}*/
/*   {% endif %}*/
/* {% endif %}*/
/* */
