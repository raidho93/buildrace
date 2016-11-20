<?php

/* themes/socialbase/templates/block/block--system-menu-block--main.html.twig */
class __TwigTemplate_f5a4f46f67a7c98b73777be1adbed1dd4e65fff8e722864d70b2079b05ce6298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_379f7ac1b0422292e94dd4e164ad04830aa37c28cc9f14cabcaf4f45f1c14eb3 = $this->env->getExtension("native_profiler");
        $__internal_379f7ac1b0422292e94dd4e164ad04830aa37c28cc9f14cabcaf4f45f1c14eb3->enter($__internal_379f7ac1b0422292e94dd4e164ad04830aa37c28cc9f14cabcaf4f45f1c14eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/socialbase/templates/block/block--system-menu-block--main.html.twig"));

        $tags = array("block" => 38, "trans" => 41);
        $filters = array();
        $functions = array("attach_library" => 46);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'trans'),
                array(),
                array('attach_library')
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

        // line 36
        echo "<div id=\"main-navigation\" class=\"collapse navbar-collapse\">
  <div class=\"navbar-collapse-order\">
    ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "    <div class='navbar-search' title='";
        echo t("Click to open", array());
        echo "'>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links", array()), "search_block", array()), "html", null, true));
        echo "</div>
  </div>
</div>

";
        // line 46
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("social_core/navbar-search"), "html", null, true));
        echo "
";
        
        $__internal_379f7ac1b0422292e94dd4e164ad04830aa37c28cc9f14cabcaf4f45f1c14eb3->leave($__internal_379f7ac1b0422292e94dd4e164ad04830aa37c28cc9f14cabcaf4f45f1c14eb3_prof);

    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        $__internal_22cbad3000a48c7081be87f36574953534b40286b51f43a5b00d8db54b4c1b8e = $this->env->getExtension("native_profiler");
        $__internal_22cbad3000a48c7081be87f36574953534b40286b51f43a5b00d8db54b4c1b8e->enter($__internal_22cbad3000a48c7081be87f36574953534b40286b51f43a5b00d8db54b4c1b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 39
        echo "      ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
    ";
        
        $__internal_22cbad3000a48c7081be87f36574953534b40286b51f43a5b00d8db54b4c1b8e->leave($__internal_22cbad3000a48c7081be87f36574953534b40286b51f43a5b00d8db54b4c1b8e_prof);

    }

    public function getTemplateName()
    {
        return "themes/socialbase/templates/block/block--system-menu-block--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 39,  72 => 38,  63 => 46,  53 => 41,  51 => 38,  47 => 36,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a menu block.*/
/*  **/
/*  * Available variables:*/
/*  * - plugin_id: The ID of the block implementation.*/
/*  * - label: The configured label of the block if visible.*/
/*  * - configuration: A list of the block's configuration values.*/
/*  *   - label: The configured label for the block.*/
/*  *   - label_display: The display settings for the label.*/
/*  *   - provider: The module or other provider that provided this block plugin.*/
/*  *   - Block plugin specific settings will also be stored here.*/
/*  * - content: The content of this block.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  *   - id: A valid HTML ID and guaranteed unique.*/
/*  * - title_attributes: HTML attributes for the title element.*/
/*  * - content_attributes: HTML attributes for the content element.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * Headings should be used on navigation menus that consistently appear on*/
/*  * multiple pages. When this menu block's label is configured to not be*/
/*  * displayed, it is automatically made invisible using the 'visually-hidden' CSS*/
/*  * class, which still keeps it visible for screen-readers and assistive*/
/*  * technology. Headings allow screen-reader and keyboard only users to navigate*/
/*  * to or skip the links.*/
/*  * See http://juicystudio.com/article/screen-readers-display-none.php and*/
/*  * http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* <div id="main-navigation" class="collapse navbar-collapse">*/
/*   <div class="navbar-collapse-order">*/
/*     {% block content %}*/
/*       {{ content }}*/
/*     {% endblock %}*/
/*     <div class='navbar-search' title='{% trans %} Click to open {% endtrans %}'>{{ content.links.search_block }}</div>*/
/*   </div>*/
/* </div>*/
/* */
/* {# We attach a library for the search block. #}*/
/* {{ attach_library('social_core/navbar-search') }}*/
/* */
