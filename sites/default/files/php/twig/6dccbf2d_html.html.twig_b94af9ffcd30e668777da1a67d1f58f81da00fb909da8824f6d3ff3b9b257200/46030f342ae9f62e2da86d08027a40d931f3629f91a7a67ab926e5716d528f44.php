<?php

/* themes/infinite/templates/system/html.html.twig */
class __TwigTemplate_cdd94f122d99b7da27d0d26570c8f85e807bb8922783e2e9e03be983e920a307 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'api_gtm' => array($this, 'block_api_gtm'),
            'api_fb' => array($this, 'block_api_fb'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec70d8c692228aab6eab179568563d833992b0245416310b11297a3299e58432 = $this->env->getExtension("native_profiler");
        $__internal_ec70d8c692228aab6eab179568563d833992b0245416310b11297a3299e58432->enter($__internal_ec70d8c692228aab6eab179568563d833992b0245416310b11297a3299e58432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/infinite/templates/system/html.html.twig"));

        $tags = array("set" => 1, "block" => 20, "if" => 21, "embed" => 22);
        $filters = array("clean_class" => 3, "raw" => 13, "safe_join" => 14);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'block', 'if', 'embed'),
                array('clean_class', 'raw', 'safe_join'),
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
        $context["body_classes"] = array(0 => ((        // line 2
(isset($context["logged_in"]) ? $context["logged_in"] : null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 3
(isset($context["root_path"]) ? $context["root_path"] : null)) ? ("page-front") : (("page-" . \Drupal\Component\Utility\Html::getClass((isset($context["root_path"]) ? $context["root_path"] : null))))), 2 => ((        // line 4
(isset($context["node_type"]) ? $context["node_type"] : null)) ? (("page-" . \Drupal\Component\Utility\Html::getClass((isset($context["node_type"]) ? $context["node_type"] : null)))) : ("")), 3 => ((        // line 5
(isset($context["db_offline"]) ? $context["db_offline"] : null)) ? ("db-offline") : ("")));
        // line 7
        echo "
<!DOCTYPE html>
<html";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true));
        echo ">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <head-placeholder token=\"";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
        <title>";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | ")));
        echo "</title>
        <css-placeholder token=\"";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
        <js-placeholder token=\"";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">

    </head>
    <body class=\"";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["body_classes"]) ? $context["body_classes"] : null)), "method"), "class", array()), "html", null, true));
        echo "\">
        ";
        // line 20
        $this->displayBlock('api_gtm', $context, $blocks);
        // line 25
        echo "        ";
        $this->displayBlock('api_fb', $context, $blocks);
        // line 30
        echo "        <div id=\"page-wrapper\">
            ";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
            ";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
            ";
        // line 33
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
        echo "

        </div>
        <js-bottom-placeholder token=\"";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    </body>
</html>
";
        
        $__internal_ec70d8c692228aab6eab179568563d833992b0245416310b11297a3299e58432->leave($__internal_ec70d8c692228aab6eab179568563d833992b0245416310b11297a3299e58432_prof);

    }

    // line 20
    public function block_api_gtm($context, array $blocks = array())
    {
        $__internal_71194218da907c21364f40ab99f4cf8b0951c59bcb4af3e89237d338813cfbde = $this->env->getExtension("native_profiler");
        $__internal_71194218da907c21364f40ab99f4cf8b0951c59bcb4af3e89237d338813cfbde->enter($__internal_71194218da907c21364f40ab99f4cf8b0951c59bcb4af3e89237d338813cfbde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "api_gtm"));

        // line 21
        echo "            ";
        if ((isset($context["gtm_vars"]) ? $context["gtm_vars"] : null)) {
            // line 22
            echo "                ";
            $this->loadTemplate("themes/infinite/templates/system/html.html.twig", "themes/infinite/templates/system/html.html.twig", 22, "1360873326")->display(array_merge($context, (isset($context["gtm_vars"]) ? $context["gtm_vars"] : null)));
            // line 23
            echo "            ";
        }
        // line 24
        echo "        ";
        
        $__internal_71194218da907c21364f40ab99f4cf8b0951c59bcb4af3e89237d338813cfbde->leave($__internal_71194218da907c21364f40ab99f4cf8b0951c59bcb4af3e89237d338813cfbde_prof);

    }

    // line 25
    public function block_api_fb($context, array $blocks = array())
    {
        $__internal_bd5180bb937bc7a5ce08b43a7192cf4f859e1181c9de3c412a8f6ab872c4f810 = $this->env->getExtension("native_profiler");
        $__internal_bd5180bb937bc7a5ce08b43a7192cf4f859e1181c9de3c412a8f6ab872c4f810->enter($__internal_bd5180bb937bc7a5ce08b43a7192cf4f859e1181c9de3c412a8f6ab872c4f810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "api_fb"));

        // line 26
        echo "            ";
        if ((isset($context["fb_vars"]) ? $context["fb_vars"] : null)) {
            // line 27
            echo "                ";
            $this->loadTemplate("themes/infinite/templates/system/html.html.twig", "themes/infinite/templates/system/html.html.twig", 27, "531694852")->display(array_merge($context, (isset($context["fb_vars"]) ? $context["fb_vars"] : null)));
            // line 28
            echo "            ";
        }
        // line 29
        echo "        ";
        
        $__internal_bd5180bb937bc7a5ce08b43a7192cf4f859e1181c9de3c412a8f6ab872c4f810->leave($__internal_bd5180bb937bc7a5ce08b43a7192cf4f859e1181c9de3c412a8f6ab872c4f810_prof);

    }

    public function getTemplateName()
    {
        return "themes/infinite/templates/system/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 29,  154 => 28,  151 => 27,  148 => 26,  142 => 25,  135 => 24,  132 => 23,  129 => 22,  126 => 21,  120 => 20,  109 => 36,  103 => 33,  99 => 32,  95 => 31,  92 => 30,  89 => 25,  87 => 20,  83 => 19,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  58 => 9,  54 => 7,  52 => 5,  51 => 4,  50 => 3,  49 => 2,  48 => 1,);
    }
}


/* themes/infinite/templates/system/html.html.twig */
class __TwigTemplate_cdd94f122d99b7da27d0d26570c8f85e807bb8922783e2e9e03be983e920a307_1360873326 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("@infinite/embeds/api_gtm.html.twig", "themes/infinite/templates/system/html.html.twig", 22);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@infinite/embeds/api_gtm.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12560673558ef82324636efe48391ff8d76ceeefd9ae19432a8b29e2a4d386ea = $this->env->getExtension("native_profiler");
        $__internal_12560673558ef82324636efe48391ff8d76ceeefd9ae19432a8b29e2a4d386ea->enter($__internal_12560673558ef82324636efe48391ff8d76ceeefd9ae19432a8b29e2a4d386ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/infinite/templates/system/html.html.twig"));

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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12560673558ef82324636efe48391ff8d76ceeefd9ae19432a8b29e2a4d386ea->leave($__internal_12560673558ef82324636efe48391ff8d76ceeefd9ae19432a8b29e2a4d386ea_prof);

    }

    public function getTemplateName()
    {
        return "themes/infinite/templates/system/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 22,  157 => 29,  154 => 28,  151 => 27,  148 => 26,  142 => 25,  135 => 24,  132 => 23,  129 => 22,  126 => 21,  120 => 20,  109 => 36,  103 => 33,  99 => 32,  95 => 31,  92 => 30,  89 => 25,  87 => 20,  83 => 19,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  58 => 9,  54 => 7,  52 => 5,  51 => 4,  50 => 3,  49 => 2,  48 => 1,);
    }
}


/* themes/infinite/templates/system/html.html.twig */
class __TwigTemplate_cdd94f122d99b7da27d0d26570c8f85e807bb8922783e2e9e03be983e920a307_531694852 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 27
        $this->parent = $this->loadTemplate("@infinite/embeds/api_fb.html.twig", "themes/infinite/templates/system/html.html.twig", 27);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@infinite/embeds/api_fb.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3e1b42ce4f97d857853988e8e991f56246cbfb121d9bfd6c5b1b0aa456b8a00 = $this->env->getExtension("native_profiler");
        $__internal_e3e1b42ce4f97d857853988e8e991f56246cbfb121d9bfd6c5b1b0aa456b8a00->enter($__internal_e3e1b42ce4f97d857853988e8e991f56246cbfb121d9bfd6c5b1b0aa456b8a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/infinite/templates/system/html.html.twig"));

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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3e1b42ce4f97d857853988e8e991f56246cbfb121d9bfd6c5b1b0aa456b8a00->leave($__internal_e3e1b42ce4f97d857853988e8e991f56246cbfb121d9bfd6c5b1b0aa456b8a00_prof);

    }

    public function getTemplateName()
    {
        return "themes/infinite/templates/system/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 27,  188 => 22,  157 => 29,  154 => 28,  151 => 27,  148 => 26,  142 => 25,  135 => 24,  132 => 23,  129 => 22,  126 => 21,  120 => 20,  109 => 36,  103 => 33,  99 => 32,  95 => 31,  92 => 30,  89 => 25,  87 => 20,  83 => 19,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  58 => 9,  54 => 7,  52 => 5,  51 => 4,  50 => 3,  49 => 2,  48 => 1,);
    }
}
/* {% set body_classes = [*/
/* logged_in ? 'user-logged-in',*/
/* not root_path ? 'page-front' : 'page-' ~ root_path|clean_class,*/
/* node_type ? 'page-' ~ node_type|clean_class,*/
/* db_offline ? 'db-offline',*/
/* ] %}*/
/* */
/* <!DOCTYPE html>*/
/* <html{{ html_attributes }}>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <head-placeholder token="{{ placeholder_token|raw }}">*/
/*         <title>{{ head_title|safe_join(' | ') }}</title>*/
/*         <css-placeholder token="{{ placeholder_token|raw }}">*/
/*         <js-placeholder token="{{ placeholder_token|raw }}">*/
/* */
/*     </head>*/
/*     <body class="{{ attributes.addClass(body_classes).class }}">*/
/*         {% block api_gtm %}*/
/*             {% if gtm_vars %}*/
/*                 {% embed '@infinite/embeds/api_gtm.html.twig' with gtm_vars %}{% endembed %}*/
/*             {% endif %}*/
/*         {% endblock %}*/
/*         {% block api_fb %}*/
/*             {% if fb_vars %}*/
/*                 {% embed '@infinite/embeds/api_fb.html.twig' with fb_vars %}{% endembed %}*/
/*             {% endif %}*/
/*         {% endblock %}*/
/*         <div id="page-wrapper">*/
/*             {{ page_top }}*/
/*             {{ page }}*/
/*             {{ page_bottom }}*/
/* */
/*         </div>*/
/*         <js-bottom-placeholder token="{{ placeholder_token|raw }}">*/
/*     </body>*/
/* </html>*/
/* */
