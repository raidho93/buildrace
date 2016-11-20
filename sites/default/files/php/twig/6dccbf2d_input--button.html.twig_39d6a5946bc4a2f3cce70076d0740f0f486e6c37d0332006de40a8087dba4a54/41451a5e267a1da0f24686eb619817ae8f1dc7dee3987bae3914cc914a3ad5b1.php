<?php

/* themes/socialbase/templates/form/input--button.html.twig */
class __TwigTemplate_0c3e6e1cce6d4b62481e465662f0153650220d525f9bddb5745cadec1c4ee4d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("input.html.twig", "themes/socialbase/templates/form/input--button.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "input.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c137aa3d50c7e3090226a94583bb24230c5db4c9ef75d4b0a59f05c16be34c9 = $this->env->getExtension("native_profiler");
        $__internal_2c137aa3d50c7e3090226a94583bb24230c5db4c9ef75d4b0a59f05c16be34c9->enter($__internal_2c137aa3d50c7e3090226a94583bb24230c5db4c9ef75d4b0a59f05c16be34c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/socialbase/templates/form/input--button.html.twig"));

        $tags = array("spaceless" => 25, "set" => 28, "if" => 39);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('spaceless', 'set', 'if'),
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

        // line 25
        ob_start();
        // line 28
        $context["classes"] = array(0 => "btn", 1 => (((        // line 30
(isset($context["type"]) ? $context["type"] : null) == "submit")) ? ("js-form-submit") : ("")), 2 => ((        // line 31
(isset($context["float_right"]) ? $context["float_right"] : null)) ? ("pull-right") : ("")), 3 => (((        // line 32
(isset($context["button_type"]) ? $context["button_type"] : null) == "flat")) ? ("btn-flat") : ("")), 4 => (((        // line 33
(isset($context["button_type"]) ? $context["button_type"] : null) == "primary")) ? ("btn-primary") : ("")), 5 => ((((        // line 34
(isset($context["icon"]) ? $context["icon"] : null) && (isset($context["icon_position"]) ? $context["icon_position"] : null)) &&  !(isset($context["icon_only"]) ? $context["icon_only"] : null))) ? (("icon-" . (isset($context["icon_position"]) ? $context["icon_position"] : null))) : ("")));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c137aa3d50c7e3090226a94583bb24230c5db4c9ef75d4b0a59f05c16be34c9->leave($__internal_2c137aa3d50c7e3090226a94583bb24230c5db4c9ef75d4b0a59f05c16be34c9_prof);

    }

    // line 38
    public function block_input($context, array $blocks = array())
    {
        $__internal_760843ae12257dcce7d45bfaacfc828cab4025df91d692bdec1af6a7602a1019 = $this->env->getExtension("native_profiler");
        $__internal_760843ae12257dcce7d45bfaacfc828cab4025df91d692bdec1af6a7602a1019->enter($__internal_760843ae12257dcce7d45bfaacfc828cab4025df91d692bdec1af6a7602a1019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "input"));

        // line 39
        echo "    ";
        if ((isset($context["icon_only"]) ? $context["icon_only"] : null)) {
            // line 40
            echo "      <button";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null), 1 => "icon-only"), "method"), "html", null, true));
            echo ">
        <span class=\"sr-only\">";
            // line 41
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</span>
        ";
            // line 42
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true));
            echo "
      </button>
    ";
        } else {
            // line 45
            echo "      ";
            if (((isset($context["icon_position"]) ? $context["icon_position"] : null) == "after")) {
                // line 46
                echo "        <button";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "removeClass", array(0 => "btn-danger"), "method"), "html", null, true));
                echo ">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true));
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "caret", array()), "html", null, true));
                echo "</button>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
                echo "
      ";
            } else {
                // line 48
                echo "        ";
                if ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "hasClass", array(0 => "btn-primary"), "method")) {
                    // line 49
                    echo "          <button";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "addClass", array(0 => "pull-right"), "method"), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "caret", array()), "html", null, true));
                    echo "</button>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
                    echo "
        ";
                } else {
                    // line 51
                    echo "          <button";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "removeClass", array(0 => "btn-danger"), "method"), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "caret", array()), "html", null, true));
                    echo "</button>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
                    echo "
        ";
                }
                // line 53
                echo "      ";
            }
            // line 54
            echo "    ";
        }
        // line 55
        echo "    ";
        if ((isset($context["add_search_icon"]) ? $context["add_search_icon"] : null)) {
            // line 56
            echo "      <span class=\"search-icon\">
        <svg>
          <use xlink:href=\"#icon-search\"></use>
        </svg>
      </span>
    ";
        }
        // line 62
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
  ";
        
        $__internal_760843ae12257dcce7d45bfaacfc828cab4025df91d692bdec1af6a7602a1019->leave($__internal_760843ae12257dcce7d45bfaacfc828cab4025df91d692bdec1af6a7602a1019_prof);

    }

    public function getTemplateName()
    {
        return "themes/socialbase/templates/form/input--button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 62,  144 => 56,  141 => 55,  138 => 54,  135 => 53,  123 => 51,  111 => 49,  108 => 48,  96 => 46,  93 => 45,  87 => 42,  83 => 41,  78 => 40,  75 => 39,  69 => 38,  62 => 1,  59 => 34,  58 => 33,  57 => 32,  56 => 31,  55 => 30,  54 => 28,  52 => 25,  11 => 1,);
    }
}
/* {% extends "input.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme suggestion for "button" input form element.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: A list of HTML attributes for the input element.*/
/*  * - children: Optional additional rendered elements.*/
/*  * - icon: An icon.*/
/*  * - icon_only: Flag to display only the icon and not the label.*/
/*  * - icon_position: Where an icon should be displayed.*/
/*  * - label: button label.*/
/*  * - prefix: Markup to display before the input element.*/
/*  * - suffix: Markup to display after the input element.*/
/*  * - type: The type of input.*/
/*  **/
/*  * @see \Drupal\bootstrap\Plugin\Preprocess\InputButton*/
/*  * @see \Drupal\bootstrap\Plugin\Preprocess\Input*/
/*  * @see template_preprocess_input()*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {% spaceless %}*/
/* */
/*   {%*/
/*     set classes = [*/
/*       'btn',*/
/*       type == 'submit' ? 'js-form-submit',*/
/*       float_right ? 'pull-right',*/
/*       button_type == 'flat' ? 'btn-flat',*/
/*       button_type == 'primary' ? 'btn-primary',*/
/*       icon and icon_position and not icon_only ? 'icon-' ~ icon_position,*/
/*     ]*/
/*   %}*/
/* */
/*   {% block input %}*/
/*     {% if icon_only %}*/
/*       <button{{ attributes.addClass(classes, 'icon-only') }}>*/
/*         <span class="sr-only">{{ label }}</span>*/
/*         {{ icon }}*/
/*       </button>*/
/*     {% else %}*/
/*       {% if icon_position == 'after' %}*/
/*         <button{{ attributes.addClass(classes).removeClass('btn-danger') }}>{{ label }}{{ icon }}{{ element.caret }}</button>{{ children }}*/
/*       {% else %}*/
/*         {% if attributes.hasClass('btn-primary') %}*/
/*           <button{{ attributes.addClass(classes).addClass('pull-right') }}>{{ icon }}{{ label }}{{ element.caret }}</button>{{ children }}*/
/*         {% else %}*/
/*           <button{{ attributes.addClass(classes).removeClass('btn-danger') }}>{{ icon }}{{ label }}{{ element.caret }}</button>{{ children }}*/
/*         {% endif %}*/
/*       {% endif %}*/
/*     {% endif %}*/
/*     {% if add_search_icon %}*/
/*       <span class="search-icon">*/
/*         <svg>*/
/*           <use xlink:href="#icon-search"></use>*/
/*         </svg>*/
/*       </span>*/
/*     {% endif %}*/
/*     {{ children }}*/
/*   {% endblock %}*/
/* {% endspaceless %}*/
/* */
