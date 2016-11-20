<?php

/* themes/infinite/templates/blocks/block--system-menu-block.html.twig */
class __TwigTemplate_fbf5be95e21098ae4d89624a008fa18665910251da74d8f51844ba9cd003d261 extends Twig_Template
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
        $__internal_04b4ae8e597fce884dd69abdba4e198b3484294966aff0a4e909c9e5bd2d560f = $this->env->getExtension("native_profiler");
        $__internal_04b4ae8e597fce884dd69abdba4e198b3484294966aff0a4e909c9e5bd2d560f->enter($__internal_04b4ae8e597fce884dd69abdba4e198b3484294966aff0a4e909c9e5bd2d560f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/infinite/templates/blocks/block--system-menu-block.html.twig"));

        $tags = array("set" => 43, "if" => 47, "block" => 53);
        $filters = array("clean_id" => 43);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_id'),
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

        // line 43
        $context["heading_id"] = \Drupal\Component\Utility\Html::getId($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array()));
        // line 44
        echo "<nav role=\"navigation\" id=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["heading_id"]) ? $context["heading_id"] : null), "html", null, true));
        echo "\" ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 46
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 47
        if ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label_display", array())) {
            // line 48
            echo "    <div class=\"title-component\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array()), "html", null, true));
            echo "</div>
  ";
        }
        // line 50
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "

  ";
        // line 53
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "</nav>
";
        
        $__internal_04b4ae8e597fce884dd69abdba4e198b3484294966aff0a4e909c9e5bd2d560f->leave($__internal_04b4ae8e597fce884dd69abdba4e198b3484294966aff0a4e909c9e5bd2d560f_prof);

    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        $__internal_a54a7bf3e07f1bbacbcef0d218da326983abc3ba527a0bcc390c2edde8f88aaf = $this->env->getExtension("native_profiler");
        $__internal_a54a7bf3e07f1bbacbcef0d218da326983abc3ba527a0bcc390c2edde8f88aaf->enter($__internal_a54a7bf3e07f1bbacbcef0d218da326983abc3ba527a0bcc390c2edde8f88aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 54
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
  ";
        
        $__internal_a54a7bf3e07f1bbacbcef0d218da326983abc3ba527a0bcc390c2edde8f88aaf->leave($__internal_a54a7bf3e07f1bbacbcef0d218da326983abc3ba527a0bcc390c2edde8f88aaf_prof);

    }

    public function getTemplateName()
    {
        return "themes/infinite/templates/blocks/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 54,  86 => 53,  78 => 56,  75 => 53,  69 => 50,  63 => 48,  61 => 47,  56 => 46,  49 => 44,  47 => 43,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a menu block.*/
/*  **/
/*  * Available variables:*/
/*  * - plugin_id: The ID of the block implementation.*/
/*  * - label: The configured label of the block if visible.*/
/*  * - configuration: A list of the block's configuration values.*/
/*  *   - label: The configured label for the block.*/
/*  *   - label_display: The display settings for the label.*/
/*  *   - module: The module that provided this block plugin.*/
/*  *   - cache: The cache settings.*/
/*  *   - Block plugin specific settings will also be stored here.*/
/*  * - block - The full block entity.*/
/*  *   - label_hidden: The hidden block title value if the block was*/
/*  *     configured to hide the title ('label' is empty in this case).*/
/*  *   - module: The module that generated the block.*/
/*  *   - delta: An ID for the block, unique within each module.*/
/*  *   - region: The block region embedding the current block.*/
/*  * - content: The content of this block.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  *   - id: A valid HTML ID and guaranteed unique.*/
/*  * - title_attributes: HTML attributes for the title element.*/
/*  * - content_attributes: HTML attributes for the content element.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * Headings should be used on navigation menus that consistently appear on*/
/*  * multiple pages. When this menu block's label is configured to not be*/
/*  * displayed, it is automatically made invisible using the 'visually-hidden' CSS*/
/*  * class, which still keeps it visible for screen-readers and assistive*/
/*  * technology. Headings allow screen-reader and keyboard only users to navigate*/
/*  * to or skip the links.*/
/*  * See http://juicystudio.com/article/screen-readers-display-none.php and*/
/*  * http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% set heading_id = attributes.id|clean_id %}*/
/* <nav role="navigation" id="{{ heading_id }}" {{ attributes }}>*/
/*   {# Label. If not displayed, we still provide it for screen readers. #}*/
/*   {{ title_prefix }}*/
/*   {% if configuration.label_display %}*/
/*     <div class="title-component">{{ configuration.label }}</div>*/
/*   {% endif %}*/
/*   {{ title_suffix }}*/
/* */
/*   {# Menu. #}*/
/*   {% block content %}*/
/*     {{ content }}*/
/*   {% endblock %}*/
/* </nav>*/
/* */
