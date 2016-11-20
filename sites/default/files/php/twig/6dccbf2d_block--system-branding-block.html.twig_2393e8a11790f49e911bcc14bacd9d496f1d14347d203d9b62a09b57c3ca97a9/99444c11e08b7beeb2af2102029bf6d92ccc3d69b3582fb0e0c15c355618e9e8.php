<?php

/* core/modules/system/templates/block--system-branding-block.html.twig */
class __TwigTemplate_ae1767bef3e7297fdab7146029eb7fadf4ba5ec3239a0ef36d9ccba63a326611 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "core/modules/system/templates/block--system-branding-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc38d13454fe776d92ba0df7cba60a0d28c8238d8d5467f68c6b7e5e28a273ce = $this->env->getExtension("native_profiler");
        $__internal_bc38d13454fe776d92ba0df7cba60a0d28c8238d8d5467f68c6b7e5e28a273ce->enter($__internal_bc38d13454fe776d92ba0df7cba60a0d28c8238d8d5467f68c6b7e5e28a273ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/modules/system/templates/block--system-branding-block.html.twig"));

        $tags = array("if" => 19);
        $filters = array("t" => 20);
        $functions = array("path" => 20);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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
        
        $__internal_bc38d13454fe776d92ba0df7cba60a0d28c8238d8d5467f68c6b7e5e28a273ce->leave($__internal_bc38d13454fe776d92ba0df7cba60a0d28c8238d8d5467f68c6b7e5e28a273ce_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_04df10f86dbeecf3a6a0448c42d9ebe7295d6ec69a8409f97214cd2636a81bfa = $this->env->getExtension("native_profiler");
        $__internal_04df10f86dbeecf3a6a0448c42d9ebe7295d6ec69a8409f97214cd2636a81bfa->enter($__internal_04df10f86dbeecf3a6a0448c42d9ebe7295d6ec69a8409f97214cd2636a81bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "  ";
        if ((isset($context["site_logo"]) ? $context["site_logo"] : null)) {
            // line 20
            echo "    <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\">
      <img src=\"";
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" />
    </a>
  ";
        }
        // line 24
        echo "  ";
        if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
            // line 25
            echo "    <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
            echo "</a>
  ";
        }
        // line 27
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
        echo "
";
        
        $__internal_04df10f86dbeecf3a6a0448c42d9ebe7295d6ec69a8409f97214cd2636a81bfa->leave($__internal_04df10f86dbeecf3a6a0448c42d9ebe7295d6ec69a8409f97214cd2636a81bfa_prof);

    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 27,  85 => 25,  82 => 24,  74 => 21,  67 => 20,  64 => 19,  58 => 18,  11 => 1,);
    }
}
/* {% extends "block.html.twig" %}*/
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
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% block content %}*/
/*   {% if site_logo %}*/
/*     <a href="{{ path('<front>') }}" title="{{ 'Home'|t }}" rel="home">*/
/*       <img src="{{ site_logo }}" alt="{{ 'Home'|t }}" />*/
/*     </a>*/
/*   {% endif %}*/
/*   {% if site_name %}*/
/*     <a href="{{ path('<front>') }}" title="{{ 'Home'|t }}" rel="home">{{ site_name }}</a>*/
/*   {% endif %}*/
/*   {{ site_slogan }}*/
/* {% endblock %}*/
/* */
