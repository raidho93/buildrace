<?php

/* themes/infinite/templates/blocks/block--system-menu-block--main.html.twig */
class __TwigTemplate_c8a38e126d04e6131b0f0974208463461ceb2259a74bdc88e80af14234bbb7ed extends Twig_Template
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
        $__internal_4508cb7053c669b81a4ea16223f8fdd32ac02726e706f108353c4db6bc75403d = $this->env->getExtension("native_profiler");
        $__internal_4508cb7053c669b81a4ea16223f8fdd32ac02726e706f108353c4db6bc75403d->enter($__internal_4508cb7053c669b81a4ea16223f8fdd32ac02726e706f108353c4db6bc75403d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/infinite/templates/blocks/block--system-menu-block--main.html.twig"));

        $tags = array();
        $filters = array("t" => 6);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo "<nav id=\"menu-main-navigation\" class=\"region-full-content\">
    <button id=\"menu-open-btn\" class=\"icon icon-menu\" type=\"button\"><span class=\"label-menu\">Menü</span></button>

    <div class=\"container-content region-fixed-content\">
        <div class=\"logo\" data-internal-url=\"";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
        echo "\">
            <img src=\"";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true));
        echo "\" alt=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
        echo "\"/>
        </div>

        ";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
    </div>

    <button id=\"search-open-btn\" class=\"icon icon-search\" type=\"button\"></button>
</nav>
";
        
        $__internal_4508cb7053c669b81a4ea16223f8fdd32ac02726e706f108353c4db6bc75403d->leave($__internal_4508cb7053c669b81a4ea16223f8fdd32ac02726e706f108353c4db6bc75403d_prof);

    }

    public function getTemplateName()
    {
        return "themes/infinite/templates/blocks/block--system-menu-block--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  56 => 6,  52 => 5,  46 => 1,);
    }
}
/* <nav id="menu-main-navigation" class="region-full-content">*/
/*     <button id="menu-open-btn" class="icon icon-menu" type="button"><span class="label-menu">Menü</span></button>*/
/* */
/*     <div class="container-content region-fixed-content">*/
/*         <div class="logo" data-internal-url="{{ front_page }}">*/
/*             <img src="{{ logo }}" alt="{{ 'Home'|t }}"/>*/
/*         </div>*/
/* */
/*         {{ content }}*/
/*     </div>*/
/* */
/*     <button id="search-open-btn" class="icon icon-search" type="button"></button>*/
/* </nav>*/
/* */
