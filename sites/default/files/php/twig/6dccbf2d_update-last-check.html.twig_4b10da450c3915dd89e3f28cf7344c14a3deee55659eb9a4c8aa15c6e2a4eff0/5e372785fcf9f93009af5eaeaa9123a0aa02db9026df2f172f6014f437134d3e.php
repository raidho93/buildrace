<?php

/* core/themes/stable/templates/admin/update-last-check.html.twig */
class __TwigTemplate_d1c4a4f5b87c1149a4fbefee66af22980a3ad982f11eeb3bf0771d456e44027a extends Twig_Template
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
        $__internal_cebc7d2a78a3df49784c20269465f699d37ed5b664affb107ab0d6df71588586 = $this->env->getExtension("native_profiler");
        $__internal_cebc7d2a78a3df49784c20269465f699d37ed5b664affb107ab0d6df71588586->enter($__internal_cebc7d2a78a3df49784c20269465f699d37ed5b664affb107ab0d6df71588586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/update-last-check.html.twig"));

        $tags = array("if" => 15);
        $filters = array("t" => 16);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 14
        echo "<p>
  ";
        // line 15
        if ((isset($context["last"]) ? $context["last"] : null)) {
            // line 16
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Last checked: @time ago", array("@time" => (isset($context["time"]) ? $context["time"] : null)))));
            echo "
  ";
        } else {
            // line 18
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Last checked: never")));
            echo "
  ";
        }
        // line 20
        echo "  (";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
        echo ")
</p>
";
        
        $__internal_cebc7d2a78a3df49784c20269465f699d37ed5b664affb107ab0d6df71588586->leave($__internal_cebc7d2a78a3df49784c20269465f699d37ed5b664affb107ab0d6df71588586_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/update-last-check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  57 => 18,  51 => 16,  49 => 15,  46 => 14,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for the last time update data was checked.*/
/*  **/
/*  * Available variables:*/
/*  * - last: The timestamp that the site was last checked for updates.*/
/*  * - time: The formatted time since the site last checked for updates.*/
/*  * - link: A link to check for updates manually.*/
/*  **/
/*  * @see template_preprocess_update_last_check()*/
/*  *//* */
/* #}*/
/* <p>*/
/*   {% if last %}*/
/*     {{ 'Last checked: @time ago'|t({'@time': time}) }}*/
/*   {% else %}*/
/*     {{ 'Last checked: never'|t }}*/
/*   {% endif %}*/
/*   ({{ link }})*/
/* </p>*/
/* */
