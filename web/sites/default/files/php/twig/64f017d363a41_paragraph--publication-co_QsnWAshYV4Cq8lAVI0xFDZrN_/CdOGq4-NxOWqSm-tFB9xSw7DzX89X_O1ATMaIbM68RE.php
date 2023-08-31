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

/* themes/custom/qed_custom/templates/paragraphs/paragraph--publication-cover-image.html.twig */
class __TwigTemplate_58fc5665a6e22f350b43926939b9c03a79f28ea2b23c9e921a6f909e8a12dd4b extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cover_image_url", [], "any", false, false, true, 1)) {
            // line 2
            echo "\t";
            $context["url"] = (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cover_image_url", [], "any", false, false, true, 2)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url"] ?? null) : null);
        }
        // line 4
        if ((twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cover_image_url", [], "any", false, false, true, 4) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cover_image_file", [], "any", false, false, true, 4), 0, [], "any", false, false, true, 4))) {
            // line 5
            echo "\t<a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 5, $this->source), "html", null, true);
            echo "\" class=\"linked\">
\t\t<img src=\"";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cover_image_file", [], "any", false, false, true, 6), 0, [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\"/>
\t</a>
  ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 8
($context["content"] ?? null), "field_cover_image_url", [], "any", false, false, true, 8)) {
            // line 9
            echo "    <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 9, $this->source), "html", null, true);
            echo "\" class=\"nonlinked\"></a>
  ";
        } else {
            // line 11
            echo "    <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cover_image_file", [], "any", false, false, true, 11), 0, [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\"/>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/qed_custom/templates/paragraphs/paragraph--publication-cover-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  59 => 9,  57 => 8,  52 => 6,  47 => 5,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if content.field_cover_image_url  %}
\t{% set url = content.field_cover_image_url[0]['#url'] %}
{% endif %}
{% if content.field_cover_image_url and content.field_cover_image_file.0 %}
\t<a href=\"{{ url }}\" class=\"linked\">
\t\t<img src=\"{{ content.field_cover_image_file.0 }}\"/>
\t</a>
  {% elseif content.field_cover_image_url %}
    <a href=\"{{ url }}\" class=\"nonlinked\"></a>
  {% else %}
    <img src=\"{{ content.field_cover_image_file.0 }}\"/>
{% endif %}
", "themes/custom/qed_custom/templates/paragraphs/paragraph--publication-cover-image.html.twig", "/var/www/html/web/themes/custom/qed_custom/templates/paragraphs/paragraph--publication-cover-image.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2);
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
