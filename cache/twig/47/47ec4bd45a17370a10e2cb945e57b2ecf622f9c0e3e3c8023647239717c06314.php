<?php

/* post.html.twig */
class __TwigTemplate_1c9a9e57a1e3c718e8da5c3cfe95d4fcca4f4553ecf4fe56ec9d67b10fe5955d extends Twig_Template
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
        // line 1
        $this->loadTemplate("post.html.twig", "post.html.twig", 1, "41005687")->display($context);
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

{% block body %}
<body class=\"post-template nav-closed\" itemscope itemtype=\"http://schema.org/Article\">
{% endblock %}

{% block content %}

{% include 'partials/header.html.twig' %}

<main class=\"content\" role=\"main\">
    <article class=\"post\">
        <header class=\"post-header\">
            {% include 'partials/breadcrumbs.html.twig' %}
            <h1 class=\"post-title\">{{page.title}}</h1>
            <section class=\"post-meta\">
               <time class=\"post-date\" datetime=\"{{ page.date | date(site.date_short) }}\">{{ page.date | date(site.date_short) }}</time>
                {% if page.taxonomy.tag|length > 0 %}
                    on {% for tag in page.taxonomy.tag %}<span class=\"post-tag-{{tag}}\"><a href=\"{{ base_url }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}</a></span>{%if not loop.last %}, {% endif %}{% endfor %}
                {% endif %}
            </section>
        </header>

        <section class=\"post-content\">
            {{content}}
            {% if config.plugins.jscomments.enabled %}
                
                {{ jscomments()|raw }}
                
            {% endif %}
        </section>


    </article>
</main>
 {{ dump(page.nextSibling.header) }} 
{% if page.nextSibling.header.image %}
   <aside class=\"read-next\">
    {% if not page.isFirst %}
    <a class=\"read-next-story {% if page.nextSibling.header.image %}\" style=\"background-image: url({{ page.nextSibling.media[page.nextSibling.header.image].url }}){% else %}no-cover{% endif %}\" href=\"{{page.nextSibling.url}}\">
        <section class=\"post\">
            <h2>{{page.nextSibling.title}}</h2>
            <p>{{ page.nextSibling.content | striptags | truncate(140) }}&hellip;</p>
        </section>
    </a>
    {% endif %}
    {% if not page.isLast %}
    <a class=\"read-next-story prev {% if page.prevSibling.header.image %}\" style=\"background-image: url({{ page.prevSibling.media[page.prevSibling.header.image].url }}){% else %}no-cover{% endif %}\" href=\"{{page.prevSibling.url}}\">
        <section class=\"post\">
            <h2>{{page.prevSibling.title}}</h2>
            <p>{{ page.prevSibling.content | striptags | truncate(140) }}&hellip;</p>
        </section>
    </a>
    {% endif %}
</aside> 
{% endif %}



{% endblock %}

{% block bottom %}

    {% if site.disqus %}
        <script>
        (function() {
        var d = document, s = d.createElement('script');
        s.src = '//{{site.disqus}}.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
        </script>
    {% endif %}

{% endblock %}

{% endembed %}
", "post.html.twig", "C:\\Users\\Coco_\\Documents\\GitHub\\blog-phil\\user\\themes\\masonry\\templates\\post.html.twig");
    }
}


/* post.html.twig */
class __TwigTemplate_1c9a9e57a1e3c718e8da5c3cfe95d4fcca4f4553ecf4fe56ec9d67b10fe5955d_41005687 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "post.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<body class=\"post-template nav-closed\" itemscope itemtype=\"http://schema.org/Article\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        $this->loadTemplate("partials/header.html.twig", "post.html.twig", 9)->display($context);
        // line 10
        echo "
<main class=\"content\" role=\"main\">
    <article class=\"post\">
        <header class=\"post-header\">
            ";
        // line 14
        $this->loadTemplate("partials/breadcrumbs.html.twig", "post.html.twig", 14)->display($context);
        // line 15
        echo "            <h1 class=\"post-title\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>
            <section class=\"post-meta\">
               <time class=\"post-date\" datetime=\"";
        // line 17
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "date_short", array()));
        echo "\">";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "date_short", array()));
        echo "</time>
                ";
        // line 18
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) > 0)) {
            // line 19
            echo "                    on ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                echo "<span class=\"post-tag-";
                echo $context["tag"];
                echo "\"><a href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/tag";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a></span>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
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
            // line 20
            echo "                ";
        }
        // line 21
        echo "            </section>
        </header>

        <section class=\"post-content\">
            ";
        // line 25
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
            ";
        // line 26
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "jscomments", array()), "enabled", array())) {
            // line 27
            echo "                
                ";
            // line 28
            echo $this->env->getExtension('Grav\Plugin\JSComments\Twig\JSCommentsTwigExtension')->funcJSComments();
            echo "
                
            ";
        }
        // line 31
        echo "        </section>


    </article>
</main>
 ";
        // line 36
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "header", array()));
        echo " 
";
        // line 37
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "header", array()), "image", array())) {
            // line 38
            echo "   <aside class=\"read-next\">
    ";
            // line 39
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
                // line 40
                echo "    <a class=\"read-next-story ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "header", array()), "image", array())) {
                    echo "\" style=\"background-image: url(";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "media", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "header", array()), "image", array()), array(), "array"), "url", array());
                    echo ")";
                } else {
                    echo "no-cover";
                }
                echo "\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "url", array());
                echo "\">
        <section class=\"post\">
            <h2>";
                // line 42
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "title", array());
                echo "</h2>
            <p>";
                // line 43
                echo \Grav\Common\Utils::truncate(strip_tags($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "content", array())), 140);
                echo "&hellip;</p>
        </section>
    </a>
    ";
            }
            // line 47
            echo "    ";
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
                // line 48
                echo "    <a class=\"read-next-story prev ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "header", array()), "image", array())) {
                    echo "\" style=\"background-image: url(";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "media", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "header", array()), "image", array()), array(), "array"), "url", array());
                    echo ")";
                } else {
                    echo "no-cover";
                }
                echo "\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "url", array());
                echo "\">
        <section class=\"post\">
            <h2>";
                // line 50
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "title", array());
                echo "</h2>
            <p>";
                // line 51
                echo \Grav\Common\Utils::truncate(strip_tags($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "content", array())), 140);
                echo "&hellip;</p>
        </section>
    </a>
    ";
            }
            // line 55
            echo "</aside> 
";
        }
        // line 57
        echo "


";
    }

    // line 62
    public function block_bottom($context, array $blocks = array())
    {
        // line 63
        echo "
    ";
        // line 64
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "disqus", array())) {
            // line 65
            echo "        <script>
        (function() {
        var d = document, s = d.createElement('script');
        s.src = '//";
            // line 68
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "disqus", array());
            echo ".disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
        </script>
    ";
        }
        // line 74
        echo "
";
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 74,  350 => 68,  345 => 65,  343 => 64,  340 => 63,  337 => 62,  330 => 57,  326 => 55,  319 => 51,  315 => 50,  301 => 48,  298 => 47,  291 => 43,  287 => 42,  273 => 40,  271 => 39,  268 => 38,  266 => 37,  262 => 36,  255 => 31,  249 => 28,  246 => 27,  244 => 26,  240 => 25,  234 => 21,  231 => 20,  188 => 19,  186 => 18,  180 => 17,  174 => 15,  172 => 14,  166 => 10,  164 => 9,  161 => 8,  158 => 7,  153 => 4,  150 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

{% block body %}
<body class=\"post-template nav-closed\" itemscope itemtype=\"http://schema.org/Article\">
{% endblock %}

{% block content %}

{% include 'partials/header.html.twig' %}

<main class=\"content\" role=\"main\">
    <article class=\"post\">
        <header class=\"post-header\">
            {% include 'partials/breadcrumbs.html.twig' %}
            <h1 class=\"post-title\">{{page.title}}</h1>
            <section class=\"post-meta\">
               <time class=\"post-date\" datetime=\"{{ page.date | date(site.date_short) }}\">{{ page.date | date(site.date_short) }}</time>
                {% if page.taxonomy.tag|length > 0 %}
                    on {% for tag in page.taxonomy.tag %}<span class=\"post-tag-{{tag}}\"><a href=\"{{ base_url }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}</a></span>{%if not loop.last %}, {% endif %}{% endfor %}
                {% endif %}
            </section>
        </header>

        <section class=\"post-content\">
            {{content}}
            {% if config.plugins.jscomments.enabled %}
                
                {{ jscomments()|raw }}
                
            {% endif %}
        </section>


    </article>
</main>
 {{ dump(page.nextSibling.header) }} 
{% if page.nextSibling.header.image %}
   <aside class=\"read-next\">
    {% if not page.isFirst %}
    <a class=\"read-next-story {% if page.nextSibling.header.image %}\" style=\"background-image: url({{ page.nextSibling.media[page.nextSibling.header.image].url }}){% else %}no-cover{% endif %}\" href=\"{{page.nextSibling.url}}\">
        <section class=\"post\">
            <h2>{{page.nextSibling.title}}</h2>
            <p>{{ page.nextSibling.content | striptags | truncate(140) }}&hellip;</p>
        </section>
    </a>
    {% endif %}
    {% if not page.isLast %}
    <a class=\"read-next-story prev {% if page.prevSibling.header.image %}\" style=\"background-image: url({{ page.prevSibling.media[page.prevSibling.header.image].url }}){% else %}no-cover{% endif %}\" href=\"{{page.prevSibling.url}}\">
        <section class=\"post\">
            <h2>{{page.prevSibling.title}}</h2>
            <p>{{ page.prevSibling.content | striptags | truncate(140) }}&hellip;</p>
        </section>
    </a>
    {% endif %}
</aside> 
{% endif %}



{% endblock %}

{% block bottom %}

    {% if site.disqus %}
        <script>
        (function() {
        var d = document, s = d.createElement('script');
        s.src = '//{{site.disqus}}.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
        </script>
    {% endif %}

{% endblock %}

{% endembed %}
", "post.html.twig", "C:\\Users\\Coco_\\Documents\\GitHub\\blog-phil\\user\\themes\\masonry\\templates\\post.html.twig");
    }
}
