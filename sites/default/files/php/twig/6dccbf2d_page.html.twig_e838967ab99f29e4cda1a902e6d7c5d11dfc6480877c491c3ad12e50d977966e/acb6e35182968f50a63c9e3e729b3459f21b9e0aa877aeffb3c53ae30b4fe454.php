<?php

/* themes/multipurpose_corporate_theme/templates/page.html.twig */
class __TwigTemplate_dbd9ea7e7f42878f3ae6edcfaf067875353067b325903dcbbcfd41aad0ab486a extends Twig_Template
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
        $__internal_bb9d5fe63ca15572d23ca8524fec1d4d6bc451e263d4ccc642ca93038ee348cf = $this->env->getExtension("native_profiler");
        $__internal_bb9d5fe63ca15572d23ca8524fec1d4d6bc451e263d4ccc642ca93038ee348cf->enter($__internal_bb9d5fe63ca15572d23ca8524fec1d4d6bc451e263d4ccc642ca93038ee348cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/multipurpose_corporate_theme/templates/page.html.twig"));

        $tags = array("if" => 12);
        $filters = array("t" => 15);
        $functions = array("attach_library" => 8);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attach_library"]) ? $context["attach_library"] : null), "html", null, true));
        echo "
";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("multipurpose_corporate_theme/multipurpose_corporate_theme.layout.page"), "html", null, true));
        echo "

<div id=\"page-wrapper\">
    <div id=\"page\" class=\"container\">
        ";
        // line 12
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "leaderboard", array())) {
            // line 13
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "leaderboard", array()), "html", null, true));
            echo "
        ";
        }
        // line 15
        echo "        <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Site header")));
        echo " \">
            <div class=\"section layout-container clearfix\">
                ";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
            </div>
        </header>
        ";
        // line 20
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "menu_bar", array())) {
            // line 21
            echo "            <div class=\"menu_bar\">
                <div class=\"layout-container section clearfix\" role=\"complementary\">
                    ";
            // line 23
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "menu_bar", array()), "html", null, true));
            echo "
                </div>
            </div>
        ";
        }
        // line 27
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_content", array())) {
            // line 28
            echo "            <div class=\"region-secondary-content\">
                <div class=\"region-inner clearfix\">
                    <div class=\"section\" role=\"complementary\">
                        ";
            // line 31
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_content", array()), "html", null, true));
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        // line 36
        echo "        <div id=\"columns\" class=\"columns clearfix\">
            <main id=\"content-column\" class=\"content-column\" role=\"main\">
                <div class=\"content-inner\">
                    ";
        // line 39
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 40
            echo "                        <div class=\"highlighted\">
                            <div class=\"layout-container section clearfix\" role=\"complementary\">
                                ";
            // line 42
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 46
        echo "                    <section id=\"main-content\" class=\"contextual-links-region\">
                        <div id=\"content\" class=\"region\">
                            ";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
                        </div>
                    </section>
                </div>
            </main>
            ";
        // line 53
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 54
            echo "                <div class=\"region-sidebar-second sidebar\">
                    <div class=\"region-inner clearfix\">
                        <aside class=\"section\" role=\"complementary\">
                            ";
            // line 57
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
                        </aside>
                    </div>
                </div>
            ";
        }
        // line 62
        echo "        </div>
        ";
        // line 63
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "tertiary", array())) {
            // line 64
            echo "            <div class=\"region region-tertiary-content\">
                <div class=\"region-inner clearfix\">
                    ";
            // line 66
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "tertiary", array()), "html", null, true));
            echo "
                </div>
            </div>
        ";
        }
        // line 70
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 71
            echo "        <footer class=\"site-footer\">
            <div class=\"copyright\">
                <div class=\"copyright-container\">
                    Copyright ©&nbsp;2015 Themes by <a href=\"http://adcisolutions.com/\" title=\"drupal development\">ADCI solutions</a>. All Rights Reserved.
                </div>
            </div>
            <div class=\"region region-footer\">
                <div class=\"region-inner clearfix\">
                    ";
            // line 79
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
                </div>
            </div>
        </footer>
        ";
        }
        // line 84
        echo "    </div>
</div>";
        
        $__internal_bb9d5fe63ca15572d23ca8524fec1d4d6bc451e263d4ccc642ca93038ee348cf->leave($__internal_bb9d5fe63ca15572d23ca8524fec1d4d6bc451e263d4ccc642ca93038ee348cf_prof);

    }

    public function getTemplateName()
    {
        return "themes/multipurpose_corporate_theme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 84,  180 => 79,  170 => 71,  167 => 70,  160 => 66,  156 => 64,  154 => 63,  151 => 62,  143 => 57,  138 => 54,  136 => 53,  128 => 48,  124 => 46,  117 => 42,  113 => 40,  111 => 39,  106 => 36,  98 => 31,  93 => 28,  90 => 27,  83 => 23,  79 => 21,  77 => 20,  71 => 17,  65 => 15,  59 => 13,  57 => 12,  50 => 8,  46 => 7,);
    }
}
/* {#*/
/* /***/
/*  * site-builder page template.*/
/*  * Generated on: Mon, 14 Dec 15 10:18:17 +1300*/
/*  *//* */
/* #}*/
/* {{ attach_library }}*/
/* {{ attach_library('multipurpose_corporate_theme/multipurpose_corporate_theme.layout.page') }}*/
/* */
/* <div id="page-wrapper">*/
/*     <div id="page" class="container">*/
/*         {% if page.leaderboard %}*/
/*             {{ page.leaderboard }}*/
/*         {% endif %}*/
/*         <header id="header" class="header" role="banner" aria-label="{{ 'Site header'|t }} ">*/
/*             <div class="section layout-container clearfix">*/
/*                 {{ page.header }}*/
/*             </div>*/
/*         </header>*/
/*         {% if page.menu_bar %}*/
/*             <div class="menu_bar">*/
/*                 <div class="layout-container section clearfix" role="complementary">*/
/*                     {{ page.menu_bar  }}*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*         {% if page.secondary_content %}*/
/*             <div class="region-secondary-content">*/
/*                 <div class="region-inner clearfix">*/
/*                     <div class="section" role="complementary">*/
/*                         {{ page.secondary_content }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div id="columns" class="columns clearfix">*/
/*             <main id="content-column" class="content-column" role="main">*/
/*                 <div class="content-inner">*/
/*                     {% if page.highlighted %}*/
/*                         <div class="highlighted">*/
/*                             <div class="layout-container section clearfix" role="complementary">*/
/*                                 {{ page.highlighted }}*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     <section id="main-content" class="contextual-links-region">*/
/*                         <div id="content" class="region">*/
/*                             {{ page.content }}*/
/*                         </div>*/
/*                     </section>*/
/*                 </div>*/
/*             </main>*/
/*             {% if page.sidebar_second %}*/
/*                 <div class="region-sidebar-second sidebar">*/
/*                     <div class="region-inner clearfix">*/
/*                         <aside class="section" role="complementary">*/
/*                             {{ page.sidebar_second }}*/
/*                         </aside>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*         {% if page.tertiary %}*/
/*             <div class="region region-tertiary-content">*/
/*                 <div class="region-inner clearfix">*/
/*                     {{ page.tertiary }}*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*         {% if page.footer %}*/
/*         <footer class="site-footer">*/
/*             <div class="copyright">*/
/*                 <div class="copyright-container">*/
/*                     Copyright ©&nbsp;2015 Themes by <a href="http://adcisolutions.com/" title="drupal development">ADCI solutions</a>. All Rights Reserved.*/
/*                 </div>*/
/*             </div>*/
/*             <div class="region region-footer">*/
/*                 <div class="region-inner clearfix">*/
/*                     {{ page.footer }}*/
/*                 </div>*/
/*             </div>*/
/*         </footer>*/
/*         {% endif %}*/
/*     </div>*/
/* </div>*/
