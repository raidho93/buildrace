<?php

/* themes/infinite/templates/system/page--front.html.twig */
class __TwigTemplate_1c82a24d407794facf5d4f3bfec5a8d4ed87fb6c8440c6ef67f341d9adcad83c extends Twig_Template
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
        $__internal_5f8d43c466a4b80b21a7e96afb603c49b13de21862e6843ccd0d84f86e403c2d = $this->env->getExtension("native_profiler");
        $__internal_5f8d43c466a4b80b21a7e96afb603c49b13de21862e6843ccd0d84f86e403c2d->enter($__internal_5f8d43c466a4b80b21a7e96afb603c49b13de21862e6843ccd0d84f86e403c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/infinite/templates/system/page--front.html.twig"));

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
        echo "<div id=\"page\">
    <main role=\"main\" id=\"main\" class=\"container-main\">
        <header id=\"header\">
            ";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_large", array()), "html", null, true));
        echo "
            ";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
        </header>

        ";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
        ";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "

        <div id=\"content\" class=\"region-content\">
            ";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        </div>
    </main>
</div>
";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar", array()), "html", null, true));
        echo "
";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "modal", array()), "html", null, true));
        
        $__internal_5f8d43c466a4b80b21a7e96afb603c49b13de21862e6843ccd0d84f86e403c2d->leave($__internal_5f8d43c466a4b80b21a7e96afb603c49b13de21862e6843ccd0d84f86e403c2d_prof);

    }

    public function getTemplateName()
    {
        return "themes/infinite/templates/system/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 17,  78 => 16,  71 => 12,  65 => 9,  61 => 8,  55 => 5,  51 => 4,  46 => 1,);
    }
}
/* <div id="page">*/
/*     <main role="main" id="main" class="container-main">*/
/*         <header id="header">*/
/*             {{ page.header_large }}*/
/*             {{ page.header }}*/
/*         </header>*/
/* */
/*         {{ page.help }}*/
/*         {{ page.highlighted }}*/
/* */
/*         <div id="content" class="region-content">*/
/*             {{ page.content }}*/
/*         </div>*/
/*     </main>*/
/* </div>*/
/* {{ page.sidebar }}*/
/* {{ page.modal }}*/
