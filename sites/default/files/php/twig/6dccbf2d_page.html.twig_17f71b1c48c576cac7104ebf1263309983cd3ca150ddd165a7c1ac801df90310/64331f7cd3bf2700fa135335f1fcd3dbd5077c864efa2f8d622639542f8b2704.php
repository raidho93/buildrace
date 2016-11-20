<?php

/* themes/zircon/templates/page.html.twig */
class __TwigTemplate_68c086046d8d78ebe14e92e45c8e8fa74354044295ca021da9175e75b5d3f297 extends Twig_Template
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
        $__internal_896631615b06cf72ff682a3e040a0792630c16012ff1253d521493de20b9a52e = $this->env->getExtension("native_profiler");
        $__internal_896631615b06cf72ff682a3e040a0792630c16012ff1253d521493de20b9a52e->enter($__internal_896631615b06cf72ff682a3e040a0792630c16012ff1253d521493de20b9a52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/zircon/templates/page.html.twig"));

        $tags = array("if" => 5);
        $filters = array("t" => 6);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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
        echo "<div class=\"page\">
<a name=\"Top\" id=\"Top\"></a>
<header id=\"header\" class=\"header\" role=\"header\">
  <div class=\"container\">
    ";
        // line 5
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 6
            echo "      <a id=\"logo\" href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\">
        <img src=\"";
            // line 7
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\"/>
      </a>
    ";
        }
        // line 10
        echo "
    ";
        // line 11
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 12
            echo "      <div class=\"name-and-slogan\">

        ";
            // line 15
            echo "        ";
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 16
                echo "          <strong class=\"site-name\">
            <a href=\"";
                // line 17
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</a>
          </strong>
        ";
            } else {
                // line 20
                echo "          <h1 class=\"site-name\">
            <a href=\"";
                // line 21
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</a>
          </h1>
        ";
            }
            // line 24
            echo "
        ";
            // line 25
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 26
                echo "          <div class=\"site-slogan\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "</div>
        ";
            }
            // line 28
            echo "      </div>
   ";
        }
        // line 30
        echo "   <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-menu-inner\">
      <span class=\"sr-only\">Toggle navigation</span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button>

    ";
        // line 37
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
    
  </div>
</header>

  ";
        // line 42
        if (((isset($context["main_menu"]) ? $context["main_menu"] : null) || (isset($context["secondary_menu"]) ? $context["secondary_menu"] : null))) {
            // line 43
            echo "    <nav id=\"navigation\" class=\"navigation\" role=\"navigation\">
      <div class=\"container\">
        ";
            // line 45
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["main_menu"]) ? $context["main_menu"] : null), "html", null, true));
            echo "
        ";
            // line 46
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["secondary_menu"]) ? $context["secondary_menu"] : null), "html", null, true));
            echo "
      </div>
    </nav>
  ";
        }
        // line 50
        echo "
  ";
        // line 51
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array())) {
            // line 52
            echo "    <nav id=\"main-menu\" class=\"navbar navbar-default\" role=\"navigation\">\t
  \t\t  <div class=\"collapse navbar-collapse\" id=\"main-menu-inner\">
          <div class=\"container\">
            ";
            // line 55
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array()), "html", null, true));
            echo "\t\t\t\t\t\t
          </div>
        </div>
    </nav>
  ";
        }
        // line 60
        echo "
  ";
        // line 61
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array())) {
            // line 62
            echo "    <section id=\"slideshow\" class=\"slideshow\">
      <div class=\"container\">
        ";
            // line 64
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array()), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 68
        echo "
  ";
        // line 69
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array())) {
            // line 70
            echo "    <section id=\"featured\" class=\"featured\">
      <div class=\"container\">
        ";
            // line 72
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array()), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 76
        echo "
  ";
        // line 77
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 78
            echo "    <section id=\"messages\" class=\"messages\">
      <div class=\"container\">
        ";
            // line 80
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 84
        echo "
  ";
        // line 85
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 86
            echo "    <section id=\"help\" class=\"help\">
      <div class=\"container\">
        ";
            // line 88
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 91
        echo "    

  <section id=\"main\" class=\"main\" role=\"main\">
    <a id=\"main-content\"></a>
    <div class=\"container\">
      <div class=\"row\">
        
        ";
        // line 98
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 99
            echo "          <aside class=\"sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
            ";
            // line 100
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
          </aside>
        ";
        }
        // line 103
        echo "\t\t
        <div class=\"content col-lg-";
        // line 104
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_content_width", array()), "html", null, true));
        echo " col-md-";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_content_width", array()), "html", null, true));
        echo " col-sm-12 col-xs-12\">
          ";
        // line 105
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "

          ";
        // line 107
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
          ";
        // line 108
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 109
            echo "            <h1>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>
          ";
        }
        // line 111
        echo "          ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "

          ";
        // line 113
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
        echo "

          ";
        // line 115
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 116
            echo "            <nav class=\"action-links\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
            echo "</nav>
          ";
        }
        // line 118
        echo "
          ";
        // line 119
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "

          <!--";
        // line 121
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true));
        echo "-->
        </div>

        ";
        // line 124
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 125
            echo "          <aside class=\"sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
            ";
            // line 126
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
          </aside>
        ";
        }
        // line 129
        echo "      </div>
    </div>
  </section>

  ";
        // line 133
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_first_1", array())) {
            // line 134
            echo "    <section id=\"panel_first\" class=\"panel_first\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            ";
            // line 138
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_first_1", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 144
        echo "    
  ";
        // line 145
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_4", array()))) {
            // line 146
            echo "    <section id=\"panel_second\" class=\"panel_second\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 150
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_1", array()), "html", null, true));
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 153
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_2", array()), "html", null, true));
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 156
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_3", array()), "html", null, true));
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 159
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_4", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 165
        echo "  
  ";
        // line 166
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 167
            echo "    <section id=\"breadcrumb\" class=\"breadcrumb\">
      <div class=\"container\">
        ";
            // line 169
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 173
        echo "  <a href=\"#Top\" class=\"btn-btt\" title=\"Back to Top\" style=\"display: block;\"></a>          

  ";
        // line 175
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 176
            echo "    <footer id=\"footer\" class=\"footer\" role=\"contentinfo\">
      <div class=\"container\">
        ";
            // line 178
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
      </div>
    </footer>
  ";
        }
        // line 182
        echo "
</div>
";
        
        $__internal_896631615b06cf72ff682a3e040a0792630c16012ff1253d521493de20b9a52e->leave($__internal_896631615b06cf72ff682a3e040a0792630c16012ff1253d521493de20b9a52e_prof);

    }

    public function getTemplateName()
    {
        return "themes/zircon/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 182,  415 => 178,  411 => 176,  409 => 175,  405 => 173,  398 => 169,  394 => 167,  392 => 166,  389 => 165,  380 => 159,  374 => 156,  368 => 153,  362 => 150,  356 => 146,  354 => 145,  351 => 144,  342 => 138,  336 => 134,  334 => 133,  328 => 129,  322 => 126,  319 => 125,  317 => 124,  311 => 121,  306 => 119,  303 => 118,  297 => 116,  295 => 115,  290 => 113,  284 => 111,  278 => 109,  276 => 108,  272 => 107,  267 => 105,  261 => 104,  258 => 103,  252 => 100,  249 => 99,  247 => 98,  238 => 91,  231 => 88,  227 => 86,  225 => 85,  222 => 84,  215 => 80,  211 => 78,  209 => 77,  206 => 76,  199 => 72,  195 => 70,  193 => 69,  190 => 68,  183 => 64,  179 => 62,  177 => 61,  174 => 60,  166 => 55,  161 => 52,  159 => 51,  156 => 50,  149 => 46,  145 => 45,  141 => 43,  139 => 42,  131 => 37,  122 => 30,  118 => 28,  112 => 26,  110 => 25,  107 => 24,  97 => 21,  94 => 20,  84 => 17,  81 => 16,  78 => 15,  74 => 12,  72 => 11,  69 => 10,  61 => 7,  54 => 6,  52 => 5,  46 => 1,);
    }
}
/* <div class="page">*/
/* <a name="Top" id="Top"></a>*/
/* <header id="header" class="header" role="header">*/
/*   <div class="container">*/
/*     {% if logo %}*/
/*       <a id="logo" href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home">*/
/*         <img src="{{ logo }}" alt="{{ 'Home'|t }}"/>*/
/*       </a>*/
/*     {% endif %}*/
/* */
/*     {% if site_name or site_slogan %}*/
/*       <div class="name-and-slogan">*/
/* */
/*         {# Use h1 when the content title is empty #}*/
/*         {% if title %}*/
/*           <strong class="site-name">*/
/*             <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home">{{ site_name }}</a>*/
/*           </strong>*/
/*         {% else %}*/
/*           <h1 class="site-name">*/
/*             <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home">{{ site_name }}</a>*/
/*           </h1>*/
/*         {% endif %}*/
/* */
/*         {% if site_slogan %}*/
/*           <div class="site-slogan">{{ site_slogan }}</div>*/
/*         {% endif %}*/
/*       </div>*/
/*    {% endif %}*/
/*    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu-inner">*/
/*       <span class="sr-only">Toggle navigation</span>*/
/*       <span class="icon-bar"></span>*/
/*       <span class="icon-bar"></span>*/
/*       <span class="icon-bar"></span>*/
/*     </button>*/
/* */
/*     {{ page.header }}*/
/*     */
/*   </div>*/
/* </header>*/
/* */
/*   {% if main_menu or secondary_menu %}*/
/*     <nav id="navigation" class="navigation" role="navigation">*/
/*       <div class="container">*/
/*         {{ main_menu }}*/
/*         {{ secondary_menu }}*/
/*       </div>*/
/*     </nav>*/
/*   {% endif %}*/
/* */
/*   {% if page.main_menu %}*/
/*     <nav id="main-menu" class="navbar navbar-default" role="navigation">	*/
/*   		  <div class="collapse navbar-collapse" id="main-menu-inner">*/
/*           <div class="container">*/
/*             {{ page.main_menu }}						*/
/*           </div>*/
/*         </div>*/
/*     </nav>*/
/*   {% endif %}*/
/* */
/*   {% if page.slideshow %}*/
/*     <section id="slideshow" class="slideshow">*/
/*       <div class="container">*/
/*         {{ page.slideshow }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/*   {% if page.featured %}*/
/*     <section id="featured" class="featured">*/
/*       <div class="container">*/
/*         {{ page.featured }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/*   {% if messages %}*/
/*     <section id="messages" class="messages">*/
/*       <div class="container">*/
/*         {{ messages }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/*   {% if page.help %}*/
/*     <section id="help" class="help">*/
/*       <div class="container">*/
/*         {{ page.help }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}    */
/* */
/*   <section id="main" class="main" role="main">*/
/*     <a id="main-content"></a>*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         */
/*         {% if page.sidebar_first %}*/
/*           <aside class="sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12" role="complementary">*/
/*             {{ page.sidebar_first }}*/
/*           </aside>*/
/*         {% endif %}*/
/* 		*/
/*         <div class="content col-lg-{{ page.main_content_width }} col-md-{{ page.main_content_width }} col-sm-12 col-xs-12">*/
/*           {{ page.highlighted }}*/
/* */
/*           {{ title_prefix }}*/
/*           {% if title %}*/
/*             <h1>{{ title }}</h1>*/
/*           {% endif %}*/
/*           {{ title_suffix }}*/
/* */
/*           {{ tabs }}*/
/* */
/*           {% if action_links %}*/
/*             <nav class="action-links">{{ action_links }}</nav>*/
/*           {% endif %}*/
/* */
/*           {{ page.content }}*/
/* */
/*           <!--{{ feed_icons }}-->*/
/*         </div>*/
/* */
/*         {% if page.sidebar_second %}*/
/*           <aside class="sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12" role="complementary">*/
/*             {{ page.sidebar_second }}*/
/*           </aside>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*   </section>*/
/* */
/*   {% if page.panel_first_1 %}*/
/*     <section id="panel_first" class="panel_first">*/
/*       <div class="container">*/
/*         <div class="row">*/
/*           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">*/
/*             {{ page.panel_first_1 }}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/*     */
/*   {% if page.panel_second_1 or page.panel_second_2 or page.panel_second_3 or page.panel_second_4 %}*/
/*     <section id="panel_second" class="panel_second">*/
/*       <div class="container">*/
/*         <div class="row">*/
/*           <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">*/
/*             {{ page.panel_second_1 }}*/
/*           </div>*/
/*           <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">*/
/*             {{ page.panel_second_2 }}*/
/*           </div>*/
/*           <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">*/
/*             {{ page.panel_second_3 }}*/
/*           </div>*/
/*           <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">*/
/*             {{ page.panel_second_4 }}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/*   */
/*   {% if breadcrumb %}*/
/*     <section id="breadcrumb" class="breadcrumb">*/
/*       <div class="container">*/
/*         {{ breadcrumb }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/*   <a href="#Top" class="btn-btt" title="Back to Top" style="display: block;"></a>          */
/* */
/*   {% if page.footer %}*/
/*     <footer id="footer" class="footer" role="contentinfo">*/
/*       <div class="container">*/
/*         {{ page.footer }}*/
/*       </div>*/
/*     </footer>*/
/*   {% endif %}*/
/* */
/* </div>*/
/* */
