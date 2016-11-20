<?php

/* core/modules/outside_in/templates/outside-in-page-wrapper.html.twig */
class __TwigTemplate_0d6be80e353ff4e9ebd176180bd15d24a61d5067f7c5e62840e1acd992bdcb17 extends Twig_Template
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
        $__internal_296177b59e7e05b649afbf31bae19f086f35fef1f8dcd7eed7883b129c45c192 = $this->env->getExtension("native_profiler");
        $__internal_296177b59e7e05b649afbf31bae19f086f35fef1f8dcd7eed7883b129c45c192->enter($__internal_296177b59e7e05b649afbf31bae19f086f35fef1f8dcd7eed7883b129c45c192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/modules/outside_in/templates/outside-in-page-wrapper.html.twig"));

        $tags = array("if" => 14);
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

        // line 14
        if ((isset($context["children"]) ? $context["children"] : null)) {
            // line 15
            echo "  <div id=\"main-canvas-wrapper\">
    <div id=\"main-canvas\">
      ";
            // line 17
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
            echo "
    </div>
  </div>
  <div class=\"offcanvas-lining\"></div>
";
        }
        
        $__internal_296177b59e7e05b649afbf31bae19f086f35fef1f8dcd7eed7883b129c45c192->leave($__internal_296177b59e7e05b649afbf31bae19f086f35fef1f8dcd7eed7883b129c45c192_prof);

    }

    public function getTemplateName()
    {
        return "core/modules/outside_in/templates/outside-in-page-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  48 => 15,  46 => 14,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a page wrapper.*/
/*  **/
/*  * For consistent wrapping to {{ page }} render in all themes.*/
/*  **/
/*  * Available variables:*/
/*  * - children: Contains the child elements of the page.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if children %}*/
/*   <div id="main-canvas-wrapper">*/
/*     <div id="main-canvas">*/
/*       {{ children }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="offcanvas-lining"></div>*/
/* {% endif %}*/
/* */
