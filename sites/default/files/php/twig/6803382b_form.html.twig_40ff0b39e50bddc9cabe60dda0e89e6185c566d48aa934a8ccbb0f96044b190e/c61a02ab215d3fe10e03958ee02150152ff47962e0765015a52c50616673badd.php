<?php

/* themes/socialbase/templates/form/form.html.twig */
class __TwigTemplate_21544ff73bb160e9cfea0e39c87afb86f892368cde67b0fd3deb4cdd1d8b32fc extends Twig_Template
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
        $tags = array("if" => 16);
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

        // line 15
        echo "
";
        // line 16
        if ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "hasClass", array(0 => "card"), "method")) {
            // line 17
            echo "  <form";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeClass", array(0 => "card"), "method"), "html", null, true));
            echo ">
    <div class=\"card\">
      <div class=\"card-body\">
        ";
            // line 20
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
            echo "
    </form>

    ";
            // line 26
            echo "
";
        } elseif (        // line 27
(isset($context["is_search_form"]) ? $context["is_search_form"] : null)) {
            // line 28
            echo "
  ";
            // line 29
            if ((isset($context["in_hero_region"]) ? $context["in_hero_region"] : null)) {
                // line 30
                echo "
    <form";
                // line 31
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
                echo ">
      <div class=\"form-group\">
        ";
                // line 33
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
                echo "
      </div>
    </form>

  ";
            } else {
                // line 38
                echo "
    <form";
                // line 39
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
                echo ">
      <div class=\"form-group\" id=\"navbar-search\">
        ";
                // line 41
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
                echo "
      </div>
    </form>

  ";
            }
            // line 46
            echo "
";
        } else {
            // line 48
            echo "
  <form";
            // line 49
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
            echo ">
    ";
            // line 50
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
            echo "
  </form>

";
        }
    }

    public function getTemplateName()
    {
        return "themes/socialbase/templates/form/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 50,  110 => 49,  107 => 48,  103 => 46,  95 => 41,  90 => 39,  87 => 38,  79 => 33,  74 => 31,  71 => 30,  69 => 29,  66 => 28,  64 => 27,  61 => 26,  55 => 20,  48 => 17,  46 => 16,  43 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a 'form' element.*/
/*  **/
/*  * Available variables*/
/*  * - attributes: A list of HTML attributes for the wrapper element.*/
/*  * - children: The child elements of the form.*/
/*  **/
/*  * @see template_preprocess_form()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* */
/* {% if attributes.hasClass('card') %}*/
/*   <form{{ attributes.removeClass('card') }}>*/
/*     <div class="card">*/
/*       <div class="card-body">*/
/*         {{ children }}*/
/*     </form>*/
/* */
/*     {#*/
/*       The card is closed function socialbase_form_alter in the info_text suffix*/
/*     #}*/
/* */
/* {% elseif is_search_form %}*/
/* */
/*   {% if in_hero_region %}*/
/* */
/*     <form{{ attributes }}>*/
/*       <div class="form-group">*/
/*         {{ children }}*/
/*       </div>*/
/*     </form>*/
/* */
/*   {% else %}*/
/* */
/*     <form{{ attributes }}>*/
/*       <div class="form-group" id="navbar-search">*/
/*         {{ children }}*/
/*       </div>*/
/*     </form>*/
/* */
/*   {% endif %}*/
/* */
/* {% else %}*/
/* */
/*   <form{{ attributes }}>*/
/*     {{ children }}*/
/*   </form>*/
/* */
/* {% endif %}*/
/* */
