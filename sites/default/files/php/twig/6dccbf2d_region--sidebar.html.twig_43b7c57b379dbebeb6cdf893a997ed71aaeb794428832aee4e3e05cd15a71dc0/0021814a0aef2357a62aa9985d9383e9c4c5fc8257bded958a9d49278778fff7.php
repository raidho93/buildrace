<?php

/* themes/infinite/templates/regions/region--sidebar.html.twig */
class __TwigTemplate_f01a013b467a12f89ace4fd4e1edae7754e6e9ccabddead96282d0a0fdfedae9 extends Twig_Template
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
        $__internal_801bdfa02cc9b210630d39d338def35c4290fbc90165e816e34ed589a7f720ec = $this->env->getExtension("native_profiler");
        $__internal_801bdfa02cc9b210630d39d338def35c4290fbc90165e816e34ed589a7f720ec->enter($__internal_801bdfa02cc9b210630d39d338def35c4290fbc90165e816e34ed589a7f720ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/infinite/templates/regions/region--sidebar.html.twig"));

        $tags = array("set" => 18, "if" => 23);
        $filters = array("t" => 27);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('t'),
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
        echo "
";
        // line 18
        $context["classes"] = array(0 => "container-content");
        // line 21
        echo "
<div id=\"menu-sidebar\">
  ";
        // line 23
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 24
            echo "    <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
      <div class=\"icon icon-close\"></div>

      <a class=\"logo item-sidebar\" href=\"";
            // line 27
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\">
        <img src=\"";
            // line 28
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\"/>
      </a>

      ";
            // line 31
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 34
        echo "</div>
";
        
        $__internal_801bdfa02cc9b210630d39d338def35c4290fbc90165e816e34ed589a7f720ec->leave($__internal_801bdfa02cc9b210630d39d338def35c4290fbc90165e816e34ed589a7f720ec_prof);

    }

    public function getTemplateName()
    {
        return "themes/infinite/templates/regions/region--sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 34,  78 => 31,  70 => 28,  64 => 27,  57 => 24,  55 => 23,  51 => 21,  49 => 18,  46 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a region.*/
/*  **/
/*  * Available variables:*/
/*  * - content: The content for this region, typically blocks.*/
/*  * - attributes: HTML attributes for the region div.*/
/*  * - region: The name of the region variable as defined in the theme's*/
/*  *   .info.yml file.*/
/*  **/
/*  * @see template_preprocess_region()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* */
/* {% set classes = [*/
/* 'container-content',*/
/* ] %}*/
/* */
/* <div id="menu-sidebar">*/
/*   {% if content %}*/
/*     <div{{ attributes.addClass(classes) }}>*/
/*       <div class="icon icon-close"></div>*/
/* */
/*       <a class="logo item-sidebar" href="{{ front_page }}" title="{{ 'Home'|t }}">*/
/*         <img src="{{ logo }}" alt="{{ 'Home'|t }}"/>*/
/*       </a>*/
/* */
/*       {{ content }}*/
/*     </div>*/
/*   {% endif %}*/
/* </div>*/
/* */
