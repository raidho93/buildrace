<?php

/* themes/adaptivetheme/at_core/templates/navigation/pager.html.twig */
class __TwigTemplate_44973afffe8f1f57382debe74715cc93e6f0730efbda3d0db3efbacd3aaef798 extends Twig_Template
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
        $__internal_fd9fa84ac648a2c40cf72b7a5f6a7f0494692b572a17f0f7f1232a3c2dc12331 = $this->env->getExtension("native_profiler");
        $__internal_fd9fa84ac648a2c40cf72b7a5f6a7f0494692b572a17f0f7f1232a3c2dc12331->enter($__internal_fd9fa84ac648a2c40cf72b7a5f6a7f0494692b572a17f0f7f1232a3c2dc12331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/adaptivetheme/at_core/templates/navigation/pager.html.twig"));

        $tags = array("if" => 37, "for" => 69, "set" => 71);
        $filters = array("t" => 39, "default" => 49, "trim" => 79, "join" => 79);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array('t', 'default', 'trim', 'join'),
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

        // line 37
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 38
            echo "  <nav class=\"pager pager--full\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 id=\"pagination-heading\" class=\"visually-hidden\">";
            // line 39
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Pagination")));
            echo "</h4>
    <ul class=\"pager__items\">
      ";
            // line 41
            if (($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array()) || $this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()))) {
                // line 42
                echo "        <ul class=\"pager__items__first-previous\">
      ";
            }
            // line 44
            echo "        ";
            // line 45
            echo "        ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array())) {
                // line 46
                echo "          <li class=\"pager__item pager__item--first pager__item--text\">
            <a href=\"";
                // line 47
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array()), "href", array()), "html", null, true));
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Go to first page")));
                echo "\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array()), "attributes", array()), "html", null, true));
                echo ">
              <span class=\"visually-hidden\">";
                // line 48
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("First page")));
                echo "</span>
              <span aria-hidden=\"true\">";
                // line 49
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array(), "any", false, true), "text", array()), t("« first"))) : (t("« first"))), "html", null, true));
                echo "</span>
            </a>
          </li>
        ";
            }
            // line 53
            echo "
        ";
            // line 55
            echo "        ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array())) {
                // line 56
                echo "          <li class=\"pager__item pager__item--previous pager__item--text\">
            <a href=\"";
                // line 57
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "href", array()), "html", null, true));
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Go to previous page")));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "attributes", array()), "html", null, true));
                echo ">
              <span class=\"visually-hidden\">";
                // line 58
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Previous page")));
                echo "</span>
              <span aria-hidden=\"true\">";
                // line 59
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array(), "any", false, true), "text", array()), t("‹ previous"))) : (t("‹ previous"))), "html", null, true));
                echo "</span>
            </a>
          </li>
        ";
            }
            // line 63
            echo "      ";
            if (($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array()) || $this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()))) {
                // line 64
                echo "        </ul>
      ";
            }
            // line 66
            echo "
      <ol class=\"pager__items__num-pages\">
        ";
            // line 69
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "pages", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 70
                echo "          ";
                // line 71
                $context["classes"] = array(0 => "pager__item", 1 => "pager__item--num", 2 => (($this->getAttribute(                // line 74
$context["loop"], "first", array())) ? ("pager__item--num-first") : ("")), 3 => (($this->getAttribute(                // line 75
$context["loop"], "last", array())) ? ("pager__item--num-last") : ("")), 4 => (((                // line 76
(isset($context["current"]) ? $context["current"] : null) == $context["key"])) ? ("is-active") : ("")));
                // line 79
                echo "          <li class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, trim(twig_join_filter((isset($context["classes"]) ? $context["classes"] : null), " ")), "html", null, true));
                echo "\">
            ";
                // line 80
                if (((isset($context["current"]) ? $context["current"] : null) == $context["key"])) {
                    // line 81
                    echo "              ";
                    $context["title"] = t("Current page");
                    // line 82
                    echo "            ";
                } else {
                    // line 83
                    echo "              ";
                    $context["title"] = t("Go to page @key", array("@key" => $context["key"]));
                    // line 84
                    echo "            ";
                }
                // line 85
                echo "            <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "href", array()), "html", null, true));
                echo "\" class=\"pager__link";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(((((isset($context["current"]) ? $context["current"] : null) == $context["key"])) ? (" pager__link--is-active") : (""))));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
                echo "\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                echo ">
              <span class=\"visually-hidden\">";
                // line 86
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(((((isset($context["current"]) ? $context["current"] : null) == $context["key"])) ? (t("Current page")) : (t("Page")))));
                echo "</span>
              ";
                // line 88
                echo "              ";
                if (($this->getAttribute((isset($context["ellipses"]) ? $context["ellipses"] : null), "previous", array()) && $this->getAttribute($context["loop"], "first", array()))) {
                    // line 89
                    echo "                <span class=\"pager__ellipsis pager__ellipsis--before\" role=\"presentation\">&hellip;</span>
              ";
                }
                // line 91
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["key"], "html", null, true));
                // line 93
                echo "              ";
                if (($this->getAttribute((isset($context["ellipses"]) ? $context["ellipses"] : null), "next", array()) && $this->getAttribute($context["loop"], "last", array()))) {
                    // line 94
                    echo "                <span class=\"pager__ellipsis pager__ellipsis--after\" role=\"presentation\">&hellip;</span>
              ";
                }
                // line 96
                echo "            </a>
          </li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "      </ol>

      ";
            // line 101
            if (($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()) || $this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array()))) {
                // line 102
                echo "        <ul class=\"pager__items__next-last\">
      ";
            }
            // line 104
            echo "        ";
            // line 105
            echo "        ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array())) {
                // line 106
                echo "          <li class=\"pager__item pager__item--next pager__item--text\">
            <a href=\"";
                // line 107
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "href", array()), "html", null, true));
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Go to next page")));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "attributes", array()), "html", null, true));
                echo ">
              <span class=\"visually-hidden\">";
                // line 108
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Next page")));
                echo "</span>
              <span aria-hidden=\"true\">";
                // line 109
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array(), "any", false, true), "text", array()), t("next ›"))) : (t("next ›"))), "html", null, true));
                echo "</span>
            </a>
          </li>
        ";
            }
            // line 113
            echo "
        ";
            // line 115
            echo "        ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array())) {
                // line 116
                echo "          <li class=\"pager__item pager__item--last pager__item--text\">
            <a href=\"";
                // line 117
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array()), "href", array()), "html", null, true));
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Go to last page")));
                echo "\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array()), "attributes", array()), "html", null, true));
                echo ">
              <span class=\"visually-hidden\">";
                // line 118
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Last page")));
                echo "</span>
              <span aria-hidden=\"true\">";
                // line 119
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array(), "any", false, true), "text", array()), t("last »"))) : (t("last »"))), "html", null, true));
                echo "</span>
            </a>
          </li>
        ";
            }
            // line 123
            echo "      ";
            if (($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()) || $this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array()))) {
                // line 124
                echo "        </ul>
      ";
            }
            // line 126
            echo "    </ul>
  </nav>
";
        }
        
        $__internal_fd9fa84ac648a2c40cf72b7a5f6a7f0494692b572a17f0f7f1232a3c2dc12331->leave($__internal_fd9fa84ac648a2c40cf72b7a5f6a7f0494692b572a17f0f7f1232a3c2dc12331_prof);

    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/navigation/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 126,  287 => 124,  284 => 123,  277 => 119,  273 => 118,  265 => 117,  262 => 116,  259 => 115,  256 => 113,  249 => 109,  245 => 108,  237 => 107,  234 => 106,  231 => 105,  229 => 104,  225 => 102,  223 => 101,  219 => 99,  203 => 96,  199 => 94,  196 => 93,  194 => 91,  190 => 89,  187 => 88,  183 => 86,  172 => 85,  169 => 84,  166 => 83,  163 => 82,  160 => 81,  158 => 80,  153 => 79,  151 => 76,  150 => 75,  149 => 74,  148 => 71,  146 => 70,  128 => 69,  124 => 66,  120 => 64,  117 => 63,  110 => 59,  106 => 58,  98 => 57,  95 => 56,  92 => 55,  89 => 53,  82 => 49,  78 => 48,  70 => 47,  67 => 46,  64 => 45,  62 => 44,  58 => 42,  56 => 41,  51 => 39,  48 => 38,  46 => 37,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Adaptivetheme implementation to display a pager.*/
/*  * Notable differences to core include removal of li items for ellipsis and*/
/*  * instead placing ellipsis inside the first or last anchors on numeric items.*/
/*  * Also we add many classes for theming pager items and states.*/
/*  **/
/*  * Available variables:*/
/*  * - items: List of pager items.*/
/*  *   The list is keyed by the following elements:*/
/*  *   - first: Item for the first page; not present on the first page of results.*/
/*  *   - previous: Item for the previous page; not present on the first page*/
/*  *     of results.*/
/*  *   - next: Item for the next page; not present on the last page of results.*/
/*  *   - last: Item for the last page; not present on the last page of results.*/
/*  *   - pages: List of pages, keyed by page number.*/
/*  *   Sub-sub elements:*/
/*  *   items.first, items.previous, items.next, items.last, and each item inside*/
/*  *   items.pages contain the following elements:*/
/*  *   - href: URL with appropriate query parameters for the item.*/
/*  *   - attributes: A keyed list of HTML attributes for the item.*/
/*  *   - text: The visible text used for the item link, such as "‹ previous"*/
/*  *     or "next ›".*/
/*  * - current: The page number of the current page.*/
/*  * - ellipses: If there are more pages than the quantity allows, then an*/
/*  *   ellipsis before or after the listed pages may be present.*/
/*  *   - previous: Present if the currently visible list of pages does not start*/
/*  *     at the first page.*/
/*  *   - next: Present if the visible list of pages ends before the last page.*/
/*  **/
/*  * @see template_preprocess_pager()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if items %}*/
/*   <nav class="pager pager--full" role="navigation" aria-labelledby="pagination-heading">*/
/*     <h4 id="pagination-heading" class="visually-hidden">{{ 'Pagination'|t }}</h4>*/
/*     <ul class="pager__items">*/
/*       {% if items.first or items.previous %}*/
/*         <ul class="pager__items__first-previous">*/
/*       {% endif %}*/
/*         {# Print first item if we are not on the first page. #}*/
/*         {% if items.first %}*/
/*           <li class="pager__item pager__item--first pager__item--text">*/
/*             <a href="{{ items.first.href }}" class="pager__link" title="{{ 'Go to first page'|t }}"{{ items.first.attributes }}>*/
/*               <span class="visually-hidden">{{ 'First page'|t }}</span>*/
/*               <span aria-hidden="true">{{ items.first.text|default('« first'|t) }}</span>*/
/*             </a>*/
/*           </li>*/
/*         {% endif %}*/
/* */
/*         {# Print previous item if we are not on the first page. #}*/
/*         {% if items.previous %}*/
/*           <li class="pager__item pager__item--previous pager__item--text">*/
/*             <a href="{{ items.previous.href }}" class="pager__link" title="{{ 'Go to previous page'|t }}" rel="prev"{{ items.previous.attributes }}>*/
/*               <span class="visually-hidden">{{ 'Previous page'|t }}</span>*/
/*               <span aria-hidden="true">{{ items.previous.text|default('‹ previous'|t) }}</span>*/
/*             </a>*/
/*           </li>*/
/*         {% endif %}*/
/*       {% if items.first or items.previous %}*/
/*         </ul>*/
/*       {% endif %}*/
/* */
/*       <ol class="pager__items__num-pages">*/
/*         {# Now generate the actual pager piece. #}*/
/*         {% for key, item in items.pages %}*/
/*           {%*/
/*             set classes = [*/
/*               'pager__item',*/
/*               'pager__item--num',*/
/*               loop.first ? 'pager__item--num-first',*/
/*               loop.last ? 'pager__item--num-last',*/
/*               current == key ? 'is-active' : '',*/
/*             ]*/
/*           %}*/
/*           <li class="{{ classes|join(' ')|trim }}">*/
/*             {% if current == key %}*/
/*               {% set title = 'Current page'|t %}*/
/*             {% else %}*/
/*               {% set title = 'Go to page @key'|t({'@key': key}) %}*/
/*             {% endif %}*/
/*             <a href="{{ item.href }}" class="pager__link{{ current == key ? ' pager__link--is-active' : '' }}" title="{{ title }}"{{ item.attributes }}>*/
/*               <span class="visually-hidden">{{ current == key ? 'Current page'|t : 'Page'|t }}</span>*/
/*               {# Add an ellipsis if there are further previous pages. #}*/
/*               {% if ellipses.previous and loop.first %}*/
/*                 <span class="pager__ellipsis pager__ellipsis--before" role="presentation">&hellip;</span>*/
/*               {% endif %}*/
/*               {{- key -}}*/
/*               {# Add an ellipsis if there are further next pages. #}*/
/*               {% if ellipses.next and loop.last %}*/
/*                 <span class="pager__ellipsis pager__ellipsis--after" role="presentation">&hellip;</span>*/
/*               {% endif %}*/
/*             </a>*/
/*           </li>*/
/*         {% endfor %}*/
/*       </ol>*/
/* */
/*       {% if items.next or items.last %}*/
/*         <ul class="pager__items__next-last">*/
/*       {% endif %}*/
/*         {# Print next item if we are not on the last page. #}*/
/*         {% if items.next %}*/
/*           <li class="pager__item pager__item--next pager__item--text">*/
/*             <a href="{{ items.next.href }}" class="pager__link" title="{{ 'Go to next page'|t }}" rel="next"{{ items.next.attributes }}>*/
/*               <span class="visually-hidden">{{ 'Next page'|t }}</span>*/
/*               <span aria-hidden="true">{{ items.next.text|default('next ›'|t) }}</span>*/
/*             </a>*/
/*           </li>*/
/*         {% endif %}*/
/* */
/*         {# Print last item if we are not on the last page. #}*/
/*         {% if items.last %}*/
/*           <li class="pager__item pager__item--last pager__item--text">*/
/*             <a href="{{ items.last.href }}" class="pager__link" title="{{ 'Go to last page'|t }}"{{ items.last.attributes }}>*/
/*               <span class="visually-hidden">{{ 'Last page'|t }}</span>*/
/*               <span aria-hidden="true">{{ items.last.text|default('last »'|t) }}</span>*/
/*             </a>*/
/*           </li>*/
/*         {% endif %}*/
/*       {% if items.next or items.last %}*/
/*         </ul>*/
/*       {% endif %}*/
/*     </ul>*/
/*   </nav>*/
/* {% endif %}*/
/* */
