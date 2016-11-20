<?php

/* core/themes/seven/templates/block--local-actions-block.html.twig */
class __TwigTemplate_38c379f64cbafa44531c924745c8310399ec93a61bc8204b5cb96c17a72a38ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@block/block.html.twig", "core/themes/seven/templates/block--local-actions-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@block/block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dae01de637f90b1626846222724c82ea2bc828f451776de84b9bab955d80ce7e = $this->env->getExtension("native_profiler");
        $__internal_dae01de637f90b1626846222724c82ea2bc828f451776de84b9bab955d80ce7e->enter($__internal_dae01de637f90b1626846222724c82ea2bc828f451776de84b9bab955d80ce7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/seven/templates/block--local-actions-block.html.twig"));

        $tags = array("if" => 9);
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dae01de637f90b1626846222724c82ea2bc828f451776de84b9bab955d80ce7e->leave($__internal_dae01de637f90b1626846222724c82ea2bc828f451776de84b9bab955d80ce7e_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_2f468bd67057cea0ddaf201a72162c2f8cc4a442e889e24b9882d63c1eb909ea = $this->env->getExtension("native_profiler");
        $__internal_2f468bd67057cea0ddaf201a72162c2f8cc4a442e889e24b9882d63c1eb909ea->enter($__internal_2f468bd67057cea0ddaf201a72162c2f8cc4a442e889e24b9882d63c1eb909ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 10
            echo "    <ul class=\"action-links\">
      ";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </ul>
  ";
        }
        
        $__internal_2f468bd67057cea0ddaf201a72162c2f8cc4a442e889e24b9882d63c1eb909ea->leave($__internal_2f468bd67057cea0ddaf201a72162c2f8cc4a442e889e24b9882d63c1eb909ea_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/block--local-actions-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  67 => 10,  64 => 9,  58 => 8,  11 => 1,);
    }
}
/* {% extends "@block/block.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for local actions (primary admin actions.)*/
/*  *//* */
/* #}*/
/* {% block content %}*/
/*   {% if content %}*/
/*     <ul class="action-links">*/
/*       {{ content }}*/
/*     </ul>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
