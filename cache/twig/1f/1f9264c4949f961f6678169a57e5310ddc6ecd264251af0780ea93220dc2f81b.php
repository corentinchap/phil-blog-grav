<?php

/* default.html.twig */
class __TwigTemplate_0c1600ce06098293f9b0097e2a76be40a57307286f938c3b700f9a92c09e2ede extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", [], "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        // line 5
        echo "<header class=\"main-header\">
        <img class=\"header-image\" src=\"";
        // line 6
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", []), "images", [])), "url", []);
        echo "\" srcset=\"";
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", []), "images", [])), "srcset", [], "method");
        echo "\">

    <nav class=\"main-nav overlay clearfix\">
        ";
        // line 9
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", [])) {
            // line 10
            echo "            <a class=\"blog-logo\" href=\"";
            echo (isset($context["home_url"]) ? $context["home_url"] : null);
            echo "\"><img src=\"";
            echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
            echo "/images/";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", []);
            echo "\" alt=\"";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", []);
            echo "\" width=\"100%\" height=\"100%\" /></a>
        ";
        }
        // line 12
        echo "
        <a class=\"menu-button icon-menu\" href=\"#\">
            <label for=\"show-menu\" class=\"word\">";
        // line 14
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_MASONRY.MENU_TITLE");
        echo "</label>
        </a>
    </nav>
    <div class=\"vertical\">
        <div class=\"main-header-content inner\">
            <h1 class=\"page-title\">";
        // line 19
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", []);
        echo "</h1>
            <h2 class=\"page-description\">";
        // line 20
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", []);
        echo "</h2>
        </div>
    </div>
    <a class=\"scroll-down icon-arrow-left\" href=\"#content\" data-offset=\"-45\"><span class=\"hidden\">Scroll Down</span></a>
</header>

<main id=\"content\" class=\"content\" role=\"main\">
    <div class=\"wrapper\">
        <section class=\"masonry\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo " ";
            $this->loadTemplate("partials/article.html.twig", "default.html.twig", 29)->display($context);
            echo " ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </section>
    </div>
    ";
        // line 32
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", []), "pagination", []))) {
            // line 33
            echo "        ";
            $this->loadTemplate("partials/pagination.html.twig", "default.html.twig", 33)->display(array_merge($context, ["base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", []), "pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", []), "pagination", [])]));
            // line 34
            echo "    ";
        }
        // line 35
        echo "</main>

";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 35,  128 => 34,  125 => 33,  123 => 32,  119 => 30,  87 => 29,  75 => 20,  71 => 19,  63 => 14,  59 => 12,  47 => 10,  45 => 9,  37 => 6,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
{% set collection = page.collection() %}

{% block content %}
<header class=\"main-header\">
        <img class=\"header-image\" src=\"{{page.media.images|first.url}}\" srcset=\"{{page.media.images|first.srcset()}}\">

    <nav class=\"main-nav overlay clearfix\">
        {% if site.logo %}
            <a class=\"blog-logo\" href=\"{{home_url}}\"><img src=\"{{ theme_url }}/images/{{site.logo}}\" alt=\"{{ site.title }}\" width=\"100%\" height=\"100%\" /></a>
        {% endif %}

        <a class=\"menu-button icon-menu\" href=\"#\">
            <label for=\"show-menu\" class=\"word\">{{ 'THEME_MASONRY.MENU_TITLE'|t }}</label>
        </a>
    </nav>
    <div class=\"vertical\">
        <div class=\"main-header-content inner\">
            <h1 class=\"page-title\">{{ site.title }}</h1>
            <h2 class=\"page-description\">{{ site.description}}</h2>
        </div>
    </div>
    <a class=\"scroll-down icon-arrow-left\" href=\"#content\" data-offset=\"-45\"><span class=\"hidden\">Scroll Down</span></a>
</header>

<main id=\"content\" class=\"content\" role=\"main\">
    <div class=\"wrapper\">
        <section class=\"masonry\">
            {% for post in collection %} {% include 'partials/article.html.twig' %} {% endfor %}
        </section>
    </div>
    {% if config.plugins.pagination.enabled and collection.params.pagination %}
        {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination':collection.params.pagination} %}
    {% endif %}
</main>

{% endblock %}
", "default.html.twig", "C:\\Users\\Coco_\\Documents\\GitHub\\blog-phil\\user\\themes\\masonry\\templates\\default.html.twig");
    }
}
