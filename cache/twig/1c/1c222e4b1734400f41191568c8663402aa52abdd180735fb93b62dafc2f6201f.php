<?php

/* partials/header.html.twig */
class __TwigTemplate_20d9f8e9c9e9c68ae9fab60dac552cdaacd39456efd04201fe4290c61f439ae8 extends Twig_Template
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
        echo "<header class=\"main-header post-head\">
        ";
        // line 2
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "cover", [])) {
            // line 3
            echo "         <img class=\"header-image\" src=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", []), $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", []), "cover", [])), "name", []), [], "array"), "url", []);
            echo "\" srcset=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", []), $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", []), "cover", [])), "name", []), [], "array"), "srcset", [], "method");
            echo "\">
        ";
        }
        // line 5
        echo "    <nav class=\"main-nav ";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "image", [])) {
            echo "overlay";
        }
        echo " clearfix\">
        ";
        // line 6
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", [])) {
            // line 7
            echo "            <a class=\"blog-logo\" href=\"";
            echo (isset($context["home_url"]) ? $context["home_url"] : null);
            echo "\"><img src=\"";
            echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
            echo "/images/";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", []);
            echo "\" alt=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", []), "title", []);
            echo "\" /></a>
        ";
        }
        // line 9
        echo "        <a class=\"menu-button icon-menu\" href=\"#\"><span class=\"word\">";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_MASONRY.MENU_TITLE");
        echo "</span></a>
    </nav>
</header> 
   ";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  41 => 7,  39 => 6,  32 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"main-header post-head\">
        {% if header.cover %}
         <img class=\"header-image\" src=\"{{page.media[page.header.cover|first.name].url}}\" srcset=\"{{page.media[page.header.cover|first.name].srcset()}}\">
        {% endif %}
    <nav class=\"main-nav {% if header.image %}overlay{% endif %} clearfix\">
        {% if site.logo %}
            <a class=\"blog-logo\" href=\"{{home_url}}\"><img src=\"{{ theme_url }}/images/{{site.logo}}\" alt=\"{{ site.author.title}}\" /></a>
        {% endif %}
        <a class=\"menu-button icon-menu\" href=\"#\"><span class=\"word\">{{ 'THEME_MASONRY.MENU_TITLE'|t }}</span></a>
    </nav>
</header> 
   ", "partials/header.html.twig", "C:\\Users\\Coco_\\Documents\\GitHub\\blog-phil\\user\\themes\\masonry\\templates\\partials\\header.html.twig");
    }
}
