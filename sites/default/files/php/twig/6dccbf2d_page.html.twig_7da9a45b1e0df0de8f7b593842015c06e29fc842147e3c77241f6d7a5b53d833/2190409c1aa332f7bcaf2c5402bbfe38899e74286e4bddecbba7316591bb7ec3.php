<?php

/* themes/infinite/templates/system/page.html.twig */
class __TwigTemplate_44c06e898b37309be3a65d16fcd89772ec0b5af4b2807d41aa59fbad8e4fd987 extends Twig_Template
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
        $__internal_d8d5e8defc49f31542102591ea1efa1679bf66a5a0c412026c1ffd0f4848bb57 = $this->env->getExtension("native_profiler");
        $__internal_d8d5e8defc49f31542102591ea1efa1679bf66a5a0c412026c1ffd0f4848bb57->enter($__internal_d8d5e8defc49f31542102591ea1efa1679bf66a5a0c412026c1ffd0f4848bb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/infinite/templates/system/page.html.twig"));

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
    <header id=\"header\">
        ";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
        ";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()), "html", null, true));
        echo "
    </header>

    ";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "

    <main role=\"main\" id=\"main\" class=\"container-main\">
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
        
        $__internal_d8d5e8defc49f31542102591ea1efa1679bf66a5a0c412026c1ffd0f4848bb57->leave($__internal_d8d5e8defc49f31542102591ea1efa1679bf66a5a0c412026c1ffd0f4848bb57_prof);

    }

    public function getTemplateName()
    {
        return "themes/infinite/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 17,  78 => 16,  71 => 12,  64 => 8,  60 => 7,  54 => 4,  50 => 3,  46 => 1,);
    }
}
/* <div id="page">*/
/*     <header id="header">*/
/*         {{ page.header }}*/
/*         {{ page.secondary_menu }}*/
/*     </header>*/
/* */
/*     {{ page.help }}*/
/*     {{ page.highlighted }}*/
/* */
/*     <main role="main" id="main" class="container-main">*/
/*         <div id="content" class="region-content">*/
/*             {{ page.content }}*/
/*         </div>*/
/*     </main>*/
/* </div>*/
/* {{ page.sidebar }}*/
/* {{ page.modal }}*/
