<?php

/* partials/pagination.html.twig */
class __TwigTemplate_04219441295e33482a75aaeb87613b3f7900c0a6bc086c06ce11b8c42d9795e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == "")) {
            // line 2
            echo "    ";
            $context["base_url"] = "/";
        }
        // line 4
        echo "
<nav class=\"pagination\" role=\"navigation\">
    ";
        // line 6
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasNext", [])) {
            // line 7
            echo "        ";
            $context["url"] = twig_replace_filter((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", [])) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "nextUrl", [])), ["//" => "/"]);
            // line 8
            echo "        <a class=\"older-posts\" href=\"";
            echo (isset($context["url"]) ? $context["url"] : null);
            echo "\">&larr; ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_MASONRY.BLOG.PAGINATION.OLDER");
            echo "</a>
    ";
        }
        // line 10
        echo "    <span class=\"page-number\">";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_MASONRY.BLOG.PAGINATION.PAGE.PAGE");
        echo " ";
        echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "currentPage", []);
        echo " ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_MASONRY.BLOG.PAGINATION.PAGE.OF");
        echo " ";
        echo twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
        echo "</span>
    ";
        // line 11
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasPrev", [])) {
            // line 12
            echo "        ";
            $context["url"] = twig_replace_filter((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", [])) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "prevUrl", [])), ["//" => "/"]);
            // line 13
            echo "        <a class=\"newer-posts\" href=\"";
            echo (isset($context["url"]) ? $context["url"] : null);
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_MASONRY.BLOG.PAGINATION.NEWER");
            echo " &rarr;</a>
    ";
        }
        // line 15
        echo "</nav>
";
    }

    public function getTemplateName()
    {
        return "partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  58 => 13,  55 => 12,  53 => 11,  42 => 10,  34 => 8,  31 => 7,  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if base_url == '' %}
    {% set base_url = '/' %}
{% endif %}

<nav class=\"pagination\" role=\"navigation\">
    {% if pagination.hasNext %}
        {% set url = (base_url ~ pagination.params ~ pagination.nextUrl)|replace({'//':'/'}) %}
        <a class=\"older-posts\" href=\"{{ url }}\">&larr; {{ 'THEME_MASONRY.BLOG.PAGINATION.OLDER'|t }}</a>
    {% endif %}
    <span class=\"page-number\">{{ 'THEME_MASONRY.BLOG.PAGINATION.PAGE.PAGE'|t }} {{ uri.currentPage }} {{ 'THEME_MASONRY.BLOG.PAGINATION.PAGE.OF'|t }} {{ pagination|length }}</span>
    {% if pagination.hasPrev %}
        {% set url =  (base_url ~ pagination.params ~ pagination.prevUrl)|replace({'//':'/'}) %}
        <a class=\"newer-posts\" href=\"{{ url }}\">{{ 'THEME_MASONRY.BLOG.PAGINATION.NEWER'|t }} &rarr;</a>
    {% endif %}
</nav>
", "partials/pagination.html.twig", "C:\\Users\\Coco_\\Documents\\GitHub\\blog-phil\\user\\themes\\masonry\\templates\\partials\\pagination.html.twig");
    }
}
