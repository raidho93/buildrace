<?php

/* modules/ctools/templates/ctools-wizard-trail.html.twig */
class __TwigTemplate_0271839aaa965cd5fea1ca897199cde6e79f3c73df5ee07eab138b7644625e07 extends Twig_Template
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
        $__internal_138953b4514e9729ebf3eed009188929cc6eb4885a01365db32dde9d50a4626d = $this->env->getExtension("native_profiler");
        $__internal_138953b4514e9729ebf3eed009188929cc6eb4885a01365db32dde9d50a4626d->enter($__internal_138953b4514e9729ebf3eed009188929cc6eb4885a01365db32dde9d50a4626d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/ctools/templates/ctools-wizard-trail.html.twig"));

        $tags = array("if" => 1, "for" => 3);
        $filters = array("last" => 9);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array('last'),
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
        if ((isset($context["trail"]) ? $context["trail"] : null)) {
            // line 2
            echo "<div class=\"wizard-trail\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["trail"]) ? $context["trail"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 4
                echo "        ";
                if (($context["key"] === (isset($context["step"]) ? $context["step"] : null))) {
                    // line 5
                    echo "            <strong>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["value"], "html", null, true));
                    echo "</strong>
        ";
                } else {
                    // line 7
                    echo "            ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["value"], "html", null, true));
                    echo "
        ";
                }
                // line 9
                echo "        ";
                if ( !($context["value"] === twig_last($this->env, (isset($context["trail"]) ? $context["trail"] : null)))) {
                    // line 10
                    echo "            ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["divider"]) ? $context["divider"] : null), "html", null, true));
                    echo "
        ";
                }
                // line 12
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "</div>
";
        }
        
        $__internal_138953b4514e9729ebf3eed009188929cc6eb4885a01365db32dde9d50a4626d->leave($__internal_138953b4514e9729ebf3eed009188929cc6eb4885a01365db32dde9d50a4626d_prof);

    }

    public function getTemplateName()
    {
        return "modules/ctools/templates/ctools-wizard-trail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  79 => 12,  73 => 10,  70 => 9,  64 => 7,  58 => 5,  55 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }
}
/* {% if trail %}*/
/* <div class="wizard-trail">*/
/*     {% for key, value in trail %}*/
/*         {% if key is same as(step) %}*/
/*             <strong>{{ value }}</strong>*/
/*         {% else %}*/
/*             {{ value }}*/
/*         {% endif %}*/
/*         {% if value is not same as(trail|last) %}*/
/*             {{ divider }}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* </div>*/
/* {% endif %}*/
/* */
