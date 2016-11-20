<?php

/* themes/adaptivetheme/at_generator/templates/html.html.twig */
class __TwigTemplate_df623da3ef906673ef72674b480bc2dbc952b4d029f26b255faa1f57f0e9eda0 extends Twig_Template
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
        $__internal_3ce64b3fe7b5587aa17bed8d32c1271497ceacc94fd4db550bc7bafee73f1204 = $this->env->getExtension("native_profiler");
        $__internal_3ce64b3fe7b5587aa17bed8d32c1271497ceacc94fd4db550bc7bafee73f1204->enter($__internal_3ce64b3fe7b5587aa17bed8d32c1271497ceacc94fd4db550bc7bafee73f1204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/adaptivetheme/at_generator/templates/html.html.twig"));

        $tags = array();
        $filters = array("safe_join" => 10);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('safe_join'),
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

        // line 7
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | ")));
        echo "</title>
    <style>
      .messages {
        word-wrap: break-word;
        overflow-wrap: break-word;
        padding: 16px;
        padding: 1rem;
        margin: 26px;
        margin: 1.61803rem;
        border: 1px solid;
        border-radius: 2px;
      }
      .messages--error {
        color: #a51b00;
        background-color: #fcf4f2;
        border-color: #f9c9bf;
      }
    </style>
  </head>
  <body>
    <div class=\"messages messages--error\">
      <h3>Error: The theme \"AT Generator\" cannot be used as the default theme!</h3>
      <p>Set another theme as default, or generate one using AT Generator and set that as default.</p>
    </div>
  </body>
</html>
";
        
        $__internal_3ce64b3fe7b5587aa17bed8d32c1271497ceacc94fd4db550bc7bafee73f1204->leave($__internal_3ce64b3fe7b5587aa17bed8d32c1271497ceacc94fd4db550bc7bafee73f1204_prof);

    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_generator/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  46 => 7,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Custom output if AT Generator is set as default, we really don't want to allow this at all.*/
/*  *//* */
/* #}*/
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <title>{{ head_title|safe_join(' | ') }}</title>*/
/*     <style>*/
/*       .messages {*/
/*         word-wrap: break-word;*/
/*         overflow-wrap: break-word;*/
/*         padding: 16px;*/
/*         padding: 1rem;*/
/*         margin: 26px;*/
/*         margin: 1.61803rem;*/
/*         border: 1px solid;*/
/*         border-radius: 2px;*/
/*       }*/
/*       .messages--error {*/
/*         color: #a51b00;*/
/*         background-color: #fcf4f2;*/
/*         border-color: #f9c9bf;*/
/*       }*/
/*     </style>*/
/*   </head>*/
/*   <body>*/
/*     <div class="messages messages--error">*/
/*       <h3>Error: The theme "AT Generator" cannot be used as the default theme!</h3>*/
/*       <p>Set another theme as default, or generate one using AT Generator and set that as default.</p>*/
/*     </div>*/
/*   </body>*/
/* </html>*/
/* */
