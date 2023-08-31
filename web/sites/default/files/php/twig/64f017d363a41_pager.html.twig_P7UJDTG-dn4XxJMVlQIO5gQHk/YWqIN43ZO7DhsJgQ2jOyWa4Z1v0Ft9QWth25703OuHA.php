<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/qed_custom/templates/navigation/pager.html.twig */
class __TwigTemplate_7dc105201ab658ed4fdc3d8391d891075f33a0d9707db888bff9992a240e5cc8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        if (($context["items"] ?? null)) {
            // line 34
            echo "\t<nav class=\"pager\" role=\"navigation\" aria-labelledby=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 34, $this->source), "html", null, true);
            echo "\">
\t\t<h4 id=\"";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 35, $this->source), "html", null, true);
            echo "\" class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "</h4>
\t\t<ul
\t\t\tclass=\"pager__items js-pager__items\">
\t\t\t";
            // line 39
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 39)) {
                // line 40
                echo "\t\t\t\t<li class=\"pager__item pager__item--first\">
\t\t\t\t\t<a href=\"";
                // line 41
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 41), "href", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                echo "\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 41), "attributes", [], "any", false, false, true, 41), 41, $this->source), "href", "title"), "html", null, true);
                echo ">
\t\t\t\t\t\t<span class=\"visually-hidden\">";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                echo "</span>
\t\t\t\t\t\t<span aria-hidden=\"true\">";
                // line 43
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 43), "text", [], "any", true, true, true, 43)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 43), "text", [], "any", false, false, true, 43), 43, $this->source), t("« First"))) : (t("« First"))), "html", null, true);
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 47
            echo "\t\t\t";
            // line 48
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 48)) {
                // line 49
                echo "\t\t\t\t<li class=\"pager__item pager__item--previous\">
\t\t\t\t\t<a href=\"";
                // line 50
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 50), "href", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 50), "attributes", [], "any", false, false, true, 50), 50, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
\t\t\t\t\t\t<span class=\"visually-hidden\">";
                // line 51
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                echo "</span>
\t\t\t\t\t\t<span aria-hidden=\"true\">";
                // line 52
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 52), "text", [], "any", true, true, true, 52)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 52), "text", [], "any", false, false, true, 52), 52, $this->source), t("‹ Previous"))) : (t("‹ Previous"))), "html", null, true);
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 56
            echo "\t\t\t";
            // line 57
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 57)) {
                // line 58
                echo "\t\t\t\t<li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
\t\t\t";
            }
            // line 60
            echo "\t\t\t";
            // line 61
            echo "
\t\t\t<!-- Example single danger button -->
\t\t\t<li>
\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t<button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t1
\t\t\t\t\t</button>
\t\t\t\t\t<ul class=\"dropdown-menu\">
            ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 69));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 70
                echo "            ";
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 71
                    echo "\t\t\t\t\t\t\t\t";
                    $context["title"] = t("Current page");
                    // line 72
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 73
                    echo "\t\t\t\t\t\t\t\t";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 74
                    echo "\t\t\t\t\t\t\t";
                }
                // line 75
                echo "\t\t\t\t\t\t<li>
              <a href=\"";
                // line 76
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 76, $this->source), "html", null, true);
                echo "\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 76), 76, $this->source), "href", "title"), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 76), "addClass", [0 => "dropdown-item"], "method", false, false, true, 76), 76, $this->source), "html", null, true);
                echo ">
\t\t\t\t\t\t\t\t<span class=\"visually-hidden\">
\t\t\t\t\t\t\t\t\t";
                // line 78
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "
\t\t\t\t\t\t\t\t</span>";
                // line 80
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 80, $this->source), "html", null, true);
                // line 81
                echo "</a>
\t\t\t\t\t\t</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</li>

\t\t\t";
            // line 89
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 89)) {
                // line 90
                echo "\t\t\t\t<li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
\t\t\t";
            }
            // line 92
            echo "\t\t\t";
            // line 93
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 93)) {
                // line 94
                echo "\t\t\t\t<li class=\"pager__item pager__item--next\">
\t\t\t\t\t<a href=\"";
                // line 95
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 95), "href", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                echo "\" rel=\"next\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 95), "attributes", [], "any", false, false, true, 95), 95, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
\t\t\t\t\t\t<span class=\"visually-hidden\">";
                // line 96
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                echo "</span>
\t\t\t\t\t\t<span aria-hidden=\"true\">";
                // line 97
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 97), "text", [], "any", true, true, true, 97)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 97), "text", [], "any", false, false, true, 97), 97, $this->source), t("Next ›"))) : (t("Next ›"))), "html", null, true);
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 101
            echo "\t\t</ul>
\t</nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/qed_custom/templates/navigation/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 101,  207 => 97,  203 => 96,  195 => 95,  192 => 94,  189 => 93,  187 => 92,  183 => 90,  180 => 89,  174 => 84,  166 => 81,  164 => 80,  160 => 78,  149 => 76,  146 => 75,  143 => 74,  140 => 73,  137 => 72,  134 => 71,  131 => 70,  127 => 69,  117 => 61,  115 => 60,  111 => 58,  108 => 57,  106 => 56,  99 => 52,  95 => 51,  87 => 50,  84 => 49,  81 => 48,  79 => 47,  72 => 43,  68 => 42,  60 => 41,  57 => 40,  54 => 39,  46 => 35,  41 => 34,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a pager.
 *
 * Available variables:
 * - heading_id: Pagination heading ID.
 * - items: List of pager items.
 *   The list is keyed by the following elements:
 *   - first: Item for the first page; not present on the first page of results.
 *   - previous: Item for the previous page; not present on the first page
 *     of results.
 *   - next: Item for the next page; not present on the last page of results.
 *   - last: Item for the last page; not present on the last page of results.
 *   - pages: List of pages, keyed by page number.
 *   Sub-sub elements:
 *   items.first, items.previous, items.next, items.last, and each item inside
 *   items.pages contain the following elements:
 *   - href: URL with appropriate query parameters for the item.
 *   - attributes: A keyed list of HTML attributes for the item.
 *   - text: The visible text used for the item link, such as \"‹ Previous\"
 *     or \"Next ›\".
 * - current: The page number of the current page.
 * - ellipses: If there are more pages than the quantity allows, then an
 *   ellipsis before or after the listed pages may be present.
 *   - previous: Present if the currently visible list of pages does not start
 *     at the first page.
 *   - next: Present if the visible list of pages ends before the last page.
 *
 * @see template_preprocess_pager()
 */
#}
{% if items %}
\t<nav class=\"pager\" role=\"navigation\" aria-labelledby=\"{{ heading_id }}\">
\t\t<h4 id=\"{{ heading_id }}\" class=\"visually-hidden\">{{ 'Pagination'|t }}</h4>
\t\t<ul
\t\t\tclass=\"pager__items js-pager__items\">
\t\t\t{# Print first item if we are not on the first page. #}
\t\t\t{% if items.first %}
\t\t\t\t<li class=\"pager__item pager__item--first\">
\t\t\t\t\t<a href=\"{{ items.first.href }}\" title=\"{{ 'Go to first page'|t }}\" {{ items.first.attributes|without('href', 'title') }}>
\t\t\t\t\t\t<span class=\"visually-hidden\">{{ 'First page'|t }}</span>
\t\t\t\t\t\t<span aria-hidden=\"true\">{{ items.first.text|default('« First'|t) }}</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t\t{# Print previous item if we are not on the first page. #}
\t\t\t{% if items.previous %}
\t\t\t\t<li class=\"pager__item pager__item--previous\">
\t\t\t\t\t<a href=\"{{ items.previous.href }}\" title=\"{{ 'Go to previous page'|t }}\" rel=\"prev\" {{ items.previous.attributes|without('href', 'title', 'rel') }}>
\t\t\t\t\t\t<span class=\"visually-hidden\">{{ 'Previous page'|t }}</span>
\t\t\t\t\t\t<span aria-hidden=\"true\">{{ items.previous.text|default('‹ Previous'|t) }}</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t\t{# Add an ellipsis if there are further previous pages. #}
\t\t\t{% if ellipses.previous %}
\t\t\t\t<li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
\t\t\t{% endif %}
\t\t\t{# Now generate the actual pager piece. #}

\t\t\t<!-- Example single danger button -->
\t\t\t<li>
\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t<button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t1
\t\t\t\t\t</button>
\t\t\t\t\t<ul class=\"dropdown-menu\">
            {% for key, item in items.pages %}
            {% if current == key %}
\t\t\t\t\t\t\t\t{% set title = 'Current page'|t %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t{% set title = 'Go to page @key'|t({'@key': key}) %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<li>
              <a href=\"{{ item.href }}\" title=\"{{ title }}\" {{ item.attributes|without('href', 'title') }} {{ item.attributes.addClass('dropdown-item') }}>
\t\t\t\t\t\t\t\t<span class=\"visually-hidden\">
\t\t\t\t\t\t\t\t\t{{ current == key ? 'Current page'|t : 'Page'|t }}
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{{- key -}}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
            {% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</li>

\t\t\t{# Add an ellipsis if there are further next pages. #}
\t\t\t{% if ellipses.next %}
\t\t\t\t<li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
\t\t\t{% endif %}
\t\t\t{# Print next item if we are not on the last page. #}
\t\t\t{% if items.next %}
\t\t\t\t<li class=\"pager__item pager__item--next\">
\t\t\t\t\t<a href=\"{{ items.next.href }}\" title=\"{{ 'Go to next page'|t }}\" rel=\"next\" {{ items.next.attributes|without('href', 'title', 'rel') }}>
\t\t\t\t\t\t<span class=\"visually-hidden\">{{ 'Next page'|t }}</span>
\t\t\t\t\t\t<span aria-hidden=\"true\">{{ items.next.text|default('Next ›'|t) }}</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t</ul>
\t</nav>
{% endif %}
", "themes/custom/qed_custom/templates/navigation/pager.html.twig", "/var/www/html/web/themes/custom/qed_custom/templates/navigation/pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 33, "for" => 69, "set" => 71);
        static $filters = array("escape" => 34, "t" => 35, "without" => 41, "default" => 43);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 't', 'without', 'default'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
