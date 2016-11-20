<?php

/* themes/socialbase/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_6c07bfc04cd4e4f86a69b2117c7573adf581fef41830310875ca12ae69c80f64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block--bare.html.twig", "themes/socialbase/templates/block/block--system-branding-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block--bare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7357e346cc0b0bfd11aabbd99279fbf60f8c6a56d361373f090dfe7385175351 = $this->env->getExtension("native_profiler");
        $__internal_7357e346cc0b0bfd11aabbd99279fbf60f8c6a56d361373f090dfe7385175351->enter($__internal_7357e346cc0b0bfd11aabbd99279fbf60f8c6a56d361373f090dfe7385175351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/socialbase/templates/block/block--system-branding-block.html.twig"));

        $tags = array("if" => 20, "trans" => 22);
        $filters = array();
        $functions = array("path" => 22);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'trans'),
                array(),
                array('path')
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7357e346cc0b0bfd11aabbd99279fbf60f8c6a56d361373f090dfe7385175351->leave($__internal_7357e346cc0b0bfd11aabbd99279fbf60f8c6a56d361373f090dfe7385175351_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_587b8e1f1d582e46d2d5b26f37bc41a33941ed2f752f6d6fdbafbf4a509da4c2 = $this->env->getExtension("native_profiler");
        $__internal_587b8e1f1d582e46d2d5b26f37bc41a33941ed2f752f6d6fdbafbf4a509da4c2->enter($__internal_587b8e1f1d582e46d2d5b26f37bc41a33941ed2f752f6d6fdbafbf4a509da4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "  ";
        if ((isset($context["site_logo"]) ? $context["site_logo"] : null)) {
            // line 21
            echo "  <div class=\"navbar-header\">
    <a class=\"navbar-brand\" href=\"";
            // line 22
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo t("Home", array());
            echo "\" rel=\"home\">
      <img src=\"";
            // line 23
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
            echo "\" />
    </a>
    <button href=\"#\" data-toggle=\"collapse\" data-target=\"#main-navigation\" type=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"navbar-toggle collapsed\">
      <span>";
            // line 26
            echo t("Menu", array());
            echo "</span>
      <span class=\"sr-only\">
        ";
            // line 28
            echo t("Toggle navigation", array());
            // line 29
            echo "      </span>

    </button>

  </div>
  ";
        }
        
        $__internal_587b8e1f1d582e46d2d5b26f37bc41a33941ed2f752f6d6fdbafbf4a509da4c2->leave($__internal_587b8e1f1d582e46d2d5b26f37bc41a33941ed2f752f6d6fdbafbf4a509da4c2_prof);

    }

    public function getTemplateName()
    {
        return "themes/socialbase/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  89 => 28,  84 => 26,  76 => 23,  70 => 22,  67 => 21,  64 => 20,  58 => 19,  11 => 1,);
    }
}
/* {% extends "block--bare.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a branding block.*/
/*  **/
/*  * Each branding element variable (logo, name, slogan) is only available if*/
/*  * enabled in the block configuration.*/
/*  **/
/*  * Available variables:*/
/*  * - site_logo: Logo for site as defined in Appearance or theme settings.*/
/*  * - site_name: Name for site as defined in Site information settings.*/
/*  * - site_slogan: Slogan for site as defined in Site information settings.*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* */
/* {% block content %}*/
/*   {% if site_logo %}*/
/*   <div class="navbar-header">*/
/*     <a class="navbar-brand" href="{{ path('<front>') }}" title="{% trans %} Home {% endtrans %}" rel="home">*/
/*       <img src="{{ site_logo }}" alt="{{ site_name }}" />*/
/*     </a>*/
/*     <button href="#" data-toggle="collapse" data-target="#main-navigation" type="button" aria-haspopup="true" aria-expanded="false" class="navbar-toggle collapsed">*/
/*       <span>{% trans %} Menu {% endtrans %}</span>*/
/*       <span class="sr-only">*/
/*         {% trans %} Toggle navigation {% endtrans %}*/
/*       </span>*/
/* */
/*     </button>*/
/* */
/*   </div>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
