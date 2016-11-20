<?php

/* themes/socialbase/templates/navigation/menu--account--socialbase-account-menu.html.twig */
class __TwigTemplate_06650a3bd7c11914ceb3e5fd13b613e1ecb533835ef302329563536cfc9b878a extends Twig_Template
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
        $__internal_4c997433f2b3e6162fd7db8b4a9bd8a299a0b32c8ec496cc3073c3699b21af96 = $this->env->getExtension("native_profiler");
        $__internal_4c997433f2b3e6162fd7db8b4a9bd8a299a0b32c8ec496cc3073c3699b21af96->enter($__internal_4c997433f2b3e6162fd7db8b4a9bd8a299a0b32c8ec496cc3073c3699b21af96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/socialbase/templates/navigation/menu--account--socialbase-account-menu.html.twig"));

        $tags = array("import" => 21, "macro" => 29, "if" => 31, "trans" => 37, "for" => 44);
        $filters = array();
        $functions = array("link" => 45);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'trans', 'for'),
                array(),
                array('link')
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

        // line 21
        $context["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0)));
        echo "

";
        
        $__internal_4c997433f2b3e6162fd7db8b4a9bd8a299a0b32c8ec496cc3073c3699b21af96->leave($__internal_4c997433f2b3e6162fd7db8b4a9bd8a299a0b32c8ec496cc3073c3699b21af96_prof);

    }

    // line 29
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_36c4b249f7f22bbb63a7de3a920adaa06d4cd6c8202bb5e7302da3597ab7a36b = $this->env->getExtension("native_profiler");
            $__internal_36c4b249f7f22bbb63a7de3a920adaa06d4cd6c8202bb5e7302da3597ab7a36b->enter($__internal_36c4b249f7f22bbb63a7de3a920adaa06d4cd6c8202bb5e7302da3597ab7a36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_links"));

            // line 30
            echo "  ";
            $context["menus"] = $this;
            // line 31
            echo "  ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 32
                echo "

  <ul";
                // line 34
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "nav navbar-nav navbar-right"), "method"), "html", null, true));
                echo ">

    <li class=\"dropdown profile\">
      <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"true\" aria-haspopup=\"true\" role=\"button\" title=\"";
                // line 37
                echo t("User menu", array());
                echo "\">
        <svg class=\"icon-white icon-medium\">
          <use xlink:href=\"#icon-account_circle\"></use>
        </svg>
        <span class=\"sr-only\">";
                // line 41
                echo t("User menu", array());
                echo "</span>
      </a>
      <ul class=\"dropdown-menu\">
        ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 45
                    echo "          <li>  ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                    echo "
            ";
                    // line 46
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 47
                        echo "              ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                        echo "
            ";
                    }
                    // line 49
                    echo "          </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "      </ul>
    </li>

  </ul>

  ";
            }
            
            $__internal_36c4b249f7f22bbb63a7de3a920adaa06d4cd6c8202bb5e7302da3597ab7a36b->leave($__internal_36c4b249f7f22bbb63a7de3a920adaa06d4cd6c8202bb5e7302da3597ab7a36b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/socialbase/templates/navigation/menu--account--socialbase-account-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 51,  124 => 49,  118 => 47,  116 => 46,  111 => 45,  107 => 44,  101 => 41,  94 => 37,  88 => 34,  84 => 32,  81 => 31,  78 => 30,  61 => 29,  51 => 27,  48 => 22,  46 => 21,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a menu.*/
/*  **/
/*  * Available variables:*/
/*  * - menu_name: The machine name of the menu.*/
/*  * - items: A nested list of menu items. Each menu item contains:*/
/*  *   - attributes: HTML attributes for the menu item.*/
/*  *   - below: The menu item child items.*/
/*  *   - title: The menu link title.*/
/*  *   - url: The menu link url, instance of \Drupal\Core\Url*/
/*  *   - localized_options: Menu link localized options.*/
/*  *   - is_expanded: TRUE if the link has visible children within the current*/
/*  *     menu tree.*/
/*  *   - is_collapsed: TRUE if the link has children within the current menu tree*/
/*  *     that are not currently visible.*/
/*  *   - in_active_trail: TRUE if the link is in the active trail.*/
/*  *//* */
/* #}*/
/* {% import _self as menus %}*/
/* */
/* {#*/
/*   We call a macro which calls itself to render the full tree.*/
/*   @see http://twig.sensiolabs.org/doc/tags/macro.html*/
/* #}*/
/* {{ menus.menu_links(items, attributes, 0) }}*/
/* */
/* {% macro menu_links(items, attributes, menu_level) %}*/
/*   {% import _self as menus %}*/
/*   {% if items %}*/
/* */
/* */
/*   <ul{{ attributes.addClass('nav navbar-nav navbar-right') }}>*/
/* */
/*     <li class="dropdown profile">*/
/*       <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" aria-haspopup="true" role="button" title="{% trans %} User menu {% endtrans %}">*/
/*         <svg class="icon-white icon-medium">*/
/*           <use xlink:href="#icon-account_circle"></use>*/
/*         </svg>*/
/*         <span class="sr-only">{% trans %} User menu {% endtrans %}</span>*/
/*       </a>*/
/*       <ul class="dropdown-menu">*/
/*         {% for item in items %}*/
/*           <li>  {{ link(item.title, item.url)  }}*/
/*             {% if item.below %}*/
/*               {{ menus.menu_links(item.below, attributes, menu_level + 1) }}*/
/*             {% endif %}*/
/*           </li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </li>*/
/* */
/*   </ul>*/
/* */
/*   {% endif %}*/
/* {% endmacro %}*/
/* */
