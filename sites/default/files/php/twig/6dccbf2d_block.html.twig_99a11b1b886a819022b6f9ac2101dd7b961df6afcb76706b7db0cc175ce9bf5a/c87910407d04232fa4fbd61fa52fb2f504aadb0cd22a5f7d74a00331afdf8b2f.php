<?php

/* themes/adaptivetheme/at_core/templates/block/block.html.twig */
class __TwigTemplate_c2b67454b385419abe3d45454a8b61de3cf92017dc7ba449e90c49afe4d3f440 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14eb1ca20d866571c0be1268abf4eb3bbb7d8f72b5659b2eb7d08ce64960ae44 = $this->env->getExtension("native_profiler");
        $__internal_14eb1ca20d866571c0be1268abf4eb3bbb7d8f72b5659b2eb7d08ce64960ae44->enter($__internal_14eb1ca20d866571c0be1268abf4eb3bbb7d8f72b5659b2eb7d08ce64960ae44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/adaptivetheme/at_core/templates/block/block.html.twig"));

        $tags = array("set" => 28, "if" => 40, "block" => 45);
        $filters = array("clean_class" => 30, "clean_id" => 32);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 'clean_id'),
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

        // line 28
        $context["classes"] = array(0 => "block", 1 => ("block-config-provider--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 30
(isset($context["configuration"]) ? $context["configuration"] : null), "provider", array()))), 2 => ("block-derivative-plugin--" . \Drupal\Component\Utility\Html::getClass(        // line 31
(isset($context["derivative_plugin_id"]) ? $context["derivative_plugin_id"] : null))), 3 => ("block-id--" . \Drupal\Component\Utility\Html::getId($this->getAttribute(        // line 32
(isset($context["attributes"]) ? $context["attributes"] : null), "id", array()))), 4 => ((        // line 33
(isset($context["label"]) ? $context["label"] : null)) ? ("has-title") : ("")));
        // line 36
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  <div class=\"block__inner\">

    ";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
    ";
        // line 40
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 41
            echo "      <h2 id=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["heading_id"]) ? $context["heading_id"] : null), "html", null, true));
            echo "\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "block__title"), "method"), "html", null, true));
            echo "><span>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</span></h2>
    ";
        }
        // line 43
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "

    ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "
  </div>
</div>
";
        
        $__internal_14eb1ca20d866571c0be1268abf4eb3bbb7d8f72b5659b2eb7d08ce64960ae44->leave($__internal_14eb1ca20d866571c0be1268abf4eb3bbb7d8f72b5659b2eb7d08ce64960ae44_prof);

    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        $__internal_12cd2a8cb894cd439ef9cb09c18142ed20117f6899e55f1ff6d1a7f4cede5c8a = $this->env->getExtension("native_profiler");
        $__internal_12cd2a8cb894cd439ef9cb09c18142ed20117f6899e55f1ff6d1a7f4cede5c8a->enter($__internal_12cd2a8cb894cd439ef9cb09c18142ed20117f6899e55f1ff6d1a7f4cede5c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 46
        echo "      <div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "block__content"), "method"), "html", null, true));
        echo ">
        ";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
      </div>
    ";
        
        $__internal_12cd2a8cb894cd439ef9cb09c18142ed20117f6899e55f1ff6d1a7f4cede5c8a->leave($__internal_12cd2a8cb894cd439ef9cb09c18142ed20117f6899e55f1ff6d1a7f4cede5c8a_prof);

    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/block/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 47,  100 => 46,  94 => 45,  84 => 50,  82 => 45,  76 => 43,  66 => 41,  64 => 40,  60 => 39,  53 => 36,  51 => 33,  50 => 32,  49 => 31,  48 => 30,  47 => 28,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Adaptivetheme implementation to display a block.*/
/*  **/
/*  * Available variables:*/
/*  * - plugin_id: The ID of the block implementation.*/
/*  * - label: The configured label of the block if visible.*/
/*  * - configuration: A list of the block's configuration values.*/
/*  *   - label: The configured label for the block.*/
/*  *   - label_display: The display settings for the label.*/
/*  *   - provider: The module or other provider that provided this block plugin.*/
/*  *   - Block plugin specific settings will also be stored here.*/
/*  * - content: The content of this block.*/
/*  * - attributes: array of HTML attributes populated by modules, intended to*/
/*  *   be added to the main container tag of this template.*/
/*  *   - id: A valid HTML ID and guaranteed unique.*/
/*  * - title_attributes: Same as attributes, except applied to the main title*/
/*  *   tag that appears in the template.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * @see template_preprocess_block()*/
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'block',*/
/*     'block-config-provider--' ~ configuration.provider|clean_class,*/
/*     'block-derivative-plugin--' ~ derivative_plugin_id|clean_class,*/
/*     'block-id--' ~ attributes.id|clean_id,*/
/*     label ? 'has-title'*/
/*   ]*/
/* %}*/
/* <div{{ attributes.addClass(classes) }}>*/
/*   <div class="block__inner">*/
/* */
/*     {{ title_prefix }}*/
/*     {% if label %}*/
/*       <h2 id="{{ heading_id }}"{{ title_attributes.addClass('block__title') }}><span>{{ label }}</span></h2>*/
/*     {% endif %}*/
/*     {{ title_suffix }}*/
/* */
/*     {% block content %}*/
/*       <div{{ content_attributes.addClass('block__content') }}>*/
/*         {{ content }}*/
/*       </div>*/
/*     {% endblock %}*/
/* */
/*   </div>*/
/* </div>*/
/* */
