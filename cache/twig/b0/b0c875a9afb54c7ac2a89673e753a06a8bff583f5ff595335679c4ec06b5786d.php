<?php

/* partials/article.html.twig */
class __TwigTemplate_8c722c63d5a385db38bd15243c5c5b5937f6d7bafc71094eb2cb3a05c2a6727e extends Twig_Template
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
        echo "<article class=\"post\" itemscope itemtype=\"http://schema.org/BlogPosting\" role=\"article\">
    ";
        // line 2
        if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "header", []), "cover", [])) {
            // line 3
            echo "        <figure class=\"post-image\" itemprop=\"image\">
            <a href=\"";
            // line 4
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "url", []);
            echo "\" class=\"js-ajax-link\">
            <img src=\"";
            // line 5
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "media", []), $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "header", []), "cover", [])), "name", []), [], "array"), "cropResize", [0 => 350, 1 => 350], "method"), "url", []);
            echo "\" width=\"100%\" height=\"100%\" alt=\"\"></a>
        </figure>
    ";
        }
        // line 8
        echo "    <header class=\"post-header\">
        <h2 class=\"post-title\" itemprop=\"name\"><a href=\"";
        // line 9
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "url", []);
        echo "\" itemprop=\"url\">";
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", []);
        echo "</a></h2>
    </header>
    <section class=\"post-excerpt\" itemprop=\"description\">
        <p>";
        // line 12
        echo \Grav\Common\Utils::truncate(strip_tags($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content", [])), 140);
        echo " <a class=\"read-more\" href=\"";
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "url", []);
        echo "\">";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_MASONRY.BLOG.CONTINUE_READING");
        echo "</a></p>
    </section>
    <footer class=\"post-meta\">
        ";
        // line 15
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "taxonomy", []), "tag", [])) > 0)) {
            // line 16
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "taxonomy", []), "tag", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                echo "<span class=\"post-tag-";
                echo $context["tag"];
                echo "\"><a href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/tag";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", []), "param_sep", []);
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a></span>";
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        ";
        }
        // line 18
        echo "        <time class=\"post-date\" datetime=\"";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date", []), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "date_short", []));
        echo "\">";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date", []), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "date_short", []));
        echo "</time>
    </footer>
</article>
";
    }

    public function getTemplateName()
    {
        return "partials/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 18,  103 => 17,  60 => 16,  58 => 15,  48 => 12,  40 => 9,  37 => 8,  31 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<article class=\"post\" itemscope itemtype=\"http://schema.org/BlogPosting\" role=\"article\">
    {% if post.header.cover %}
        <figure class=\"post-image\" itemprop=\"image\">
            <a href=\"{{ post.url }}\" class=\"js-ajax-link\">
            <img src=\"{{ post.media[post.header.cover|first.name].cropResize(350, 350).url }}\" width=\"100%\" height=\"100%\" alt=\"\"></a>
        </figure>
    {% endif %}
    <header class=\"post-header\">
        <h2 class=\"post-title\" itemprop=\"name\"><a href=\"{{post.url}}\" itemprop=\"url\">{{post.title}}</a></h2>
    </header>
    <section class=\"post-excerpt\" itemprop=\"description\">
        <p>{{ post.content | striptags | truncate(140) }} <a class=\"read-more\" href=\"{{post.url}}\">{{ 'THEME_MASONRY.BLOG.CONTINUE_READING'|t }}</a></p>
    </section>
    <footer class=\"post-meta\">
        {% if post.taxonomy.tag|length > 0 %}
            {% for tag in post.taxonomy.tag %}<span class=\"post-tag-{{tag}}\"><a href=\"{{ base_url }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}</a></span>{%if not loop.last %}, {% endif %}{% endfor %}
        {% endif %}
        <time class=\"post-date\" datetime=\"{{ post.date | date(site.date_short) }}\">{{ post.date | date(site.date_short) }}</time>
    </footer>
</article>
", "partials/article.html.twig", "C:\\Users\\Coco_\\Documents\\GitHub\\blog-phil\\user\\themes\\masonry\\templates\\partials\\article.html.twig");
    }
}
