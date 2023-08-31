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

/* themes/custom/qed_custom/templates/views/views-view-fields--publication.html.twig */
class __TwigTemplate_58f0652bfb92267c9f279011893df81d0ccbeb0da60353d65843d2ce43932def extends \Twig\Template
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
        // line 1
        echo "<div class=\"card card--publication\">
\t<div class=\"container\">
     ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_cover_image", [], "any", false, false, true, 3)) {
            echo " 
    <div class=\"card__image\">
     ";
            // line 5
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_cover_image", [], "any", false, false, true, 5), "content", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "
\t  </div>
    ";
        }
        // line 8
        echo "\t<div class=\"card__content\">
\t\t<div class=\"content__category\"><i class=\"ri-send-plane-fill\"></i> ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_content_category", [], "any", false, false, true, 9), "content", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</div>
\t\t<div class=\"content__title\">
\t\t\t<h3>";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 11), "content", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "</h3>
\t\t</div>
\t\t<div class=\"content__body\">";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "body", [], "any", false, false, true, 13), "content", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "</div>
\t\t<div class=\"content__languages\">
      ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_languages", [], "any", false, false, true, 15), "content", [], "any", false, false, true, 15)) {
            // line 16
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_languages", [], "any", false, false, true, 16), "content", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 18
        echo "\t\t</div>
\t</div>
\t<div class=\"card__right\">
\t\t<div class=\"date\"><i class=\"ri-send-plane-fill\"></i> ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_published_date", [], "any", false, false, true, 21), "content", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "</div>
\t</div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/qed_custom/templates/views/views-view-fields--publication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  80 => 18,  74 => 16,  72 => 15,  67 => 13,  62 => 11,  57 => 9,  54 => 8,  48 => 5,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card card--publication\">
\t<div class=\"container\">
     {% if fields.field_cover_image %} 
    <div class=\"card__image\">
     {{ fields.field_cover_image.content }}
\t  </div>
    {% endif %}
\t<div class=\"card__content\">
\t\t<div class=\"content__category\"><i class=\"ri-send-plane-fill\"></i> {{ fields.field_content_category.content }}</div>
\t\t<div class=\"content__title\">
\t\t\t<h3>{{ fields.title.content }}</h3>
\t\t</div>
\t\t<div class=\"content__body\">{{ fields.body.content }}</div>
\t\t<div class=\"content__languages\">
      {% if fields.field_languages.content %}
        {{ fields.field_languages.content }}
      {% endif %}
\t\t</div>
\t</div>
\t<div class=\"card__right\">
\t\t<div class=\"date\"><i class=\"ri-send-plane-fill\"></i> {{ fields.field_published_date.content }}</div>
\t</div>
  </div>
</div>
", "themes/custom/qed_custom/templates/views/views-view-fields--publication.html.twig", "/var/www/html/web/themes/custom/qed_custom/templates/views/views-view-fields--publication.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3);
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
