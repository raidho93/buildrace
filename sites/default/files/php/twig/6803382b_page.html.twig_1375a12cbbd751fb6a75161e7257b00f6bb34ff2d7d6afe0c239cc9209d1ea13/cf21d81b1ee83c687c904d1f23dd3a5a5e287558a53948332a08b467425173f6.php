<?php

/* themes/socialbase/templates/layout/page.html.twig */
class __TwigTemplate_fe59d7bb982fcd7bce5227cbd5f1e9cc79b4818d8e48d5acfd4a71b609a7ee36 extends Twig_Template
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
        $tags = array("if" => 43, "block" => 82);
        $filters = array("raw" => 118);
        $functions = array("attach_library" => 89);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'block'),
                array('raw'),
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

        // line 35
        echo "
<nav class=\"navbar navbar-default navbar-fixed-top z-depth-2\" role=\"navigation\" aria-labelledby=\"";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["heading_id"]) ? $context["heading_id"] : null), "html", null, true));
        echo "\">
  <div class=\"container\">";
        // line 37
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "</div>
</nav>

<main id=\"content\" class=\"main-container\" role=\"main\">
  ";
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "

  ";
        // line 43
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "hero", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_navigation", array()))) {
            // line 44
            echo "    <div class=\"container hero-container\">

      ";
            // line 46
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "hero", array()), "html", null, true));
            echo "

      ";
            // line 48
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_navigation", array())) {
                // line 49
                echo "        <div class=\"brand-secondary z-depth-1\">
          ";
                // line 50
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_navigation", array()), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 53
            echo "
    </div>
  ";
        }
        // line 56
        echo "
  <a id=\"main-content\" tabindex=\"-1\"></a>

  <div class=\"container\">

    ";
        // line 61
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array())) {
            // line 62
            echo "      <div class=\"row margin-top-l\">
        <div class=\"col-xs-12\">
          ";
            // line 64
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array()), "html", null, true));
            echo "
        </div>
      </div>
    ";
        }
        // line 68
        echo "
    <div class=\"row margin-top-l\">

      ";
        // line 71
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "complementary_top", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "complementary_bottom", array()))) {
            // line 72
            echo "        <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "col-xs-12 col-md-4 col-md-last complementary-top"), "method"), "setAttribute", array(0 => "role", 1 => "complementary"), "method"), "html", null, true));
            echo ">
          ";
            // line 73
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "complementary_top", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 76
        echo "
      <div class=\"col-xs-12 col-md-8\">
        ";
        // line 78
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()) && (isset($context["display_page_title"]) ? $context["display_page_title"] : null))) {
            // line 79
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true));
            echo "
        ";
        }
        // line 81
        echo "
        ";
        // line 82
        $this->displayBlock('content', $context, $blocks);
        // line 85
        echo "
      </div>

      ";
        // line 88
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "complementary_bottom", array())) {
            // line 89
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("socialbase/responsive-dom"), "html", null, true));
            echo "
        <div role=\"complementary\" class=\"col-xs-12 hidden-md hidden-lg\">
          <div class=\"complementary-bottom\">
            ";
            // line 92
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "complementary_bottom", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 96
        echo "
      ";
        // line 97
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array())) {
            // line 98
            echo "        <div class=\"row margin-top-sm\">
          <div class=\"col-xs-12\">
            ";
            // line 100
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 104
        echo "
    </div>
  </div>

</main>

";
        // line 110
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 111
            echo "  <footer class=\"brand-secondary\" role=\"contentinfo\">
    <div class=\"container clearfix\">
      ";
            // line 113
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
    </div>
  </footer>
";
        }
        // line 117
        echo "
";
        // line 118
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["svg_icons"]) ? $context["svg_icons"] : null)));
        echo "
";
    }

    // line 82
    public function block_content($context, array $blocks = array())
    {
        // line 83
        echo "          ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "themes/socialbase/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 83,  212 => 82,  206 => 118,  203 => 117,  196 => 113,  192 => 111,  190 => 110,  182 => 104,  175 => 100,  171 => 98,  169 => 97,  166 => 96,  159 => 92,  152 => 89,  150 => 88,  145 => 85,  143 => 82,  140 => 81,  134 => 79,  132 => 78,  128 => 76,  122 => 73,  117 => 72,  115 => 71,  110 => 68,  103 => 64,  99 => 62,  97 => 61,  90 => 56,  85 => 53,  79 => 50,  76 => 49,  74 => 48,  69 => 46,  65 => 44,  63 => 43,  58 => 41,  51 => 37,  47 => 36,  44 => 35,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Bartik's theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template normally located in the*/
/*  * core/modules/system directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* */
/* <nav class="navbar navbar-default navbar-fixed-top z-depth-2" role="navigation" aria-labelledby="{{ heading_id }}">*/
/*   <div class="container">{{ page.header }}</div>*/
/* </nav>*/
/* */
/* <main id="content" class="main-container" role="main">*/
/*   {{ page.breadcrumb }}*/
/* */
/*   {% if (page.hero or page.secondary_navigation) %}*/
/*     <div class="container hero-container">*/
/* */
/*       {{ page.hero }}*/
/* */
/*       {% if page.secondary_navigation %}*/
/*         <div class="brand-secondary z-depth-1">*/
/*           {{ page.secondary_navigation }}*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*     </div>*/
/*   {% endif %}*/
/* */
/*   <a id="main-content" tabindex="-1"></a>*/
/* */
/*   <div class="container">*/
/* */
/*     {% if page.content_top %}*/
/*       <div class="row margin-top-l">*/
/*         <div class="col-xs-12">*/
/*           {{ page.content_top }}*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     <div class="row margin-top-l">*/
/* */
/*       {% if page.complementary_top or page.complementary_bottom %}*/
/*         <div{{ attributes.addClass('col-xs-12 col-md-4 col-md-last complementary-top').setAttribute('role', 'complementary') }}>*/
/*           {{ page.complementary_top }}*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       <div class="col-xs-12 col-md-8">*/
/*         {% if page.title and display_page_title %}*/
/*           {{ page.title }}*/
/*         {% endif %}*/
/* */
/*         {% block content %}*/
/*           {{ page.content }}*/
/*         {% endblock %}*/
/* */
/*       </div>*/
/* */
/*       {% if page.complementary_bottom %}*/
/*       {{ attach_library('socialbase/responsive-dom') }}*/
/*         <div role="complementary" class="col-xs-12 hidden-md hidden-lg">*/
/*           <div class="complementary-bottom">*/
/*             {{ page.complementary_bottom }}*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.content_bottom %}*/
/*         <div class="row margin-top-sm">*/
/*           <div class="col-xs-12">*/
/*             {{ page.content_bottom }}*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*     </div>*/
/*   </div>*/
/* */
/* </main>*/
/* */
/* {% if page.footer %}*/
/*   <footer class="brand-secondary" role="contentinfo">*/
/*     <div class="container clearfix">*/
/*       {{ page.footer }}*/
/*     </div>*/
/*   </footer>*/
/* {% endif %}*/
/* */
/* {{ svg_icons|raw }}*/
/* */
