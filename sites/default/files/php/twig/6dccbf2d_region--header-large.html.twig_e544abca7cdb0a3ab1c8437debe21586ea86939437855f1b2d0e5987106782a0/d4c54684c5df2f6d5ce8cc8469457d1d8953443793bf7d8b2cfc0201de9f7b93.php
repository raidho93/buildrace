<?php

/* themes/infinite/templates/regions/region--header-large.html.twig */
class __TwigTemplate_4d22e7b929d6fa347355f5554dde524274b5616f98b53badead49067ebcbddb9 extends Twig_Template
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
        $__internal_7758a2ef16f8ca980cbb883ea4bfa0a4fb8bc013abe555a1f90db6e9ef388674 = $this->env->getExtension("native_profiler");
        $__internal_7758a2ef16f8ca980cbb883ea4bfa0a4fb8bc013abe555a1f90db6e9ef388674->enter($__internal_7758a2ef16f8ca980cbb883ea4bfa0a4fb8bc013abe555a1f90db6e9ef388674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/infinite/templates/regions/region--header-large.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo "<div id=\"header-home\" class=\"region-full-content\">
  <div class=\"container-content region-fixed-content\">
    ";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
  </div>
</div>
";
        
        $__internal_7758a2ef16f8ca980cbb883ea4bfa0a4fb8bc013abe555a1f90db6e9ef388674->leave($__internal_7758a2ef16f8ca980cbb883ea4bfa0a4fb8bc013abe555a1f90db6e9ef388674_prof);

    }

    public function getTemplateName()
    {
        return "themes/infinite/templates/regions/region--header-large.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  46 => 1,);
    }
}
/* <div id="header-home" class="region-full-content">*/
/*   <div class="container-content region-fixed-content">*/
/*     {{ content }}*/
/*   </div>*/
/* </div>*/
/* */
