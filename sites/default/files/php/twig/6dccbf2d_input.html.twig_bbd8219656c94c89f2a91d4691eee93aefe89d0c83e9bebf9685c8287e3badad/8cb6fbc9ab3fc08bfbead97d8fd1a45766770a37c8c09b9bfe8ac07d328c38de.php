<?php

/* input.html.twig */
class __TwigTemplate_b7d984ba19aa529310f8976dcb55a8fa427d1aefc461e308e148111955a13f6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37889ff8d72174403a6d938ea3701abcabe312052ff2f5997d64a7f66af066e2 = $this->env->getExtension("native_profiler");
        $__internal_37889ff8d72174403a6d938ea3701abcabe312052ff2f5997d64a7f66af066e2->enter($__internal_37889ff8d72174403a6d938ea3701abcabe312052ff2f5997d64a7f66af066e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "input.html.twig"));

        $tags = array("spaceless" => 22, "if" => 23, "block" => 31);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('spaceless', 'if', 'block'),
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

        // line 22
        ob_start();
        // line 23
        echo "  ";
        if ((isset($context["input_group"]) ? $context["input_group"] : null)) {
            // line 24
            echo "    <div class=\"input-group\">
  ";
        }
        // line 26
        echo "
  ";
        // line 27
        if ((isset($context["prefix"]) ? $context["prefix"] : null)) {
            // line 28
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true));
            echo "
  ";
        }
        // line 30
        echo "
  ";
        // line 31
        $this->displayBlock('input', $context, $blocks);
        // line 34
        echo "
  ";
        // line 35
        if ((isset($context["suffix"]) ? $context["suffix"] : null)) {
            // line 36
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["suffix"]) ? $context["suffix"] : null), "html", null, true));
            echo "
  ";
        }
        // line 38
        echo "
  ";
        // line 39
        if ((isset($context["input_group"]) ? $context["input_group"] : null)) {
            // line 40
            echo "    </div>
  ";
        }
        // line 42
        echo "
  ";
        // line 43
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_37889ff8d72174403a6d938ea3701abcabe312052ff2f5997d64a7f66af066e2->leave($__internal_37889ff8d72174403a6d938ea3701abcabe312052ff2f5997d64a7f66af066e2_prof);

    }

    // line 31
    public function block_input($context, array $blocks = array())
    {
        $__internal_4d54d617300b4d8f5480830e24145e71725c16c9747d4313333e88366bed3a04 = $this->env->getExtension("native_profiler");
        $__internal_4d54d617300b4d8f5480830e24145e71725c16c9747d4313333e88366bed3a04->enter($__internal_4d54d617300b4d8f5480830e24145e71725c16c9747d4313333e88366bed3a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "input"));

        // line 32
        echo "    <input";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo " />
  ";
        
        $__internal_4d54d617300b4d8f5480830e24145e71725c16c9747d4313333e88366bed3a04->leave($__internal_4d54d617300b4d8f5480830e24145e71725c16c9747d4313333e88366bed3a04_prof);

    }

    public function getTemplateName()
    {
        return "input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 32,  105 => 31,  95 => 43,  92 => 42,  88 => 40,  86 => 39,  83 => 38,  77 => 36,  75 => 35,  72 => 34,  70 => 31,  67 => 30,  61 => 28,  59 => 27,  56 => 26,  52 => 24,  49 => 23,  47 => 22,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for an 'input' #type form element.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: A list of HTML attributes for the input element.*/
/*  * - children: Optional additional rendered elements.*/
/*  * - icon: An icon.*/
/*  * - input_group: Flag to display as an input group.*/
/*  * - icon_position: Where an icon should be displayed.*/
/*  * - prefix: Markup to display before the input element.*/
/*  * - suffix: Markup to display after the input element.*/
/*  * - type: The type of input.*/
/*  **/
/*  * @see \Drupal\bootstrap\Plugin\Preprocess\Input*/
/*  * @see template_preprocess_input()*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {% spaceless %}*/
/*   {% if input_group %}*/
/*     <div class="input-group">*/
/*   {% endif %}*/
/* */
/*   {% if prefix %}*/
/*     {{ prefix }}*/
/*   {% endif %}*/
/* */
/*   {% block input %}*/
/*     <input{{ attributes }} />*/
/*   {% endblock %}*/
/* */
/*   {% if suffix %}*/
/*     {{ suffix }}*/
/*   {% endif %}*/
/* */
/*   {% if input_group %}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {{ children }}*/
/* {% endspaceless %}*/
/* */
