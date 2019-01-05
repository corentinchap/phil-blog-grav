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
        $this->loadTemplate("post.html.twig", "post.html.twig", 1, "1337521569")->display($context);
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

        <footer class=\"post-footer\">
            {%if site.author %}
                {%if site.author.image %}
                    <figure class=\"author-image\">
                        <a class=\"img\" href=\"{{base_url}}\" style=\"background-image: url({{ theme_url }}/images/{{ site.author.image }})\">
                            <span class=\"hidden\">{{site.author.name}}'s Picture</span>
                        </a>
                    </figure>
                {% endif %}
        <section class=\"author\">
           {%if page.taxonomy.author %}
              {% for author in page.taxonomy.author %}
                 <h4><a href=\"{{base_url}}/author:{{ author }}\">{{ author }}</a></h4>
                 <p><a href=\"{{base_url}}/author:{{ author }}\">{{ 'THEME_MASONRY.BLOG.POST.MORE.SPEC_AUTHOR'|t }} {{ author }}.</a></p>
              {% endfor %}
           {% else %}
              <h4><a href=\"{{base_url}}\">{{site.author.name}}</a></h4>
              {%if site.author.bio %}
                 <p>{{site.author.bio}}</p>
              {% else %}
                 <p><a href=\"{{base_url}}\">{{ 'THEME_MASONRY.BLOG.POST.MORE.AUTHOR'|t }}</a></p>
              {% endif %}
           {% endif %}
           <div class=\"author-meta\">
           {% if site.author.location %}<span class=\"author-location icon-location\">{{site.author.location}}</span>{% endif %}
           {% if site.author.website %}<span class=\"author-link icon-link\"><a href=\"{{site.author.website}}\">{{site.author.website}}</a></span>{% endif %}
           </div>
        </section>
            {% endif %}

            <section class=\"share\">
                <h4>{{ 'THEME_MASONRY.BLOG.POST.SHARE'|t }}</h4>
                <a class=\"icon-twitter\" href=\"https://twitter.com/share?text={{page.title | escape}}&amp;url={{page.url(true)}}\"
                    onclick=\"window.open(this.href, 'twitter-share', 'width=550,height=235');return false;\">
                    <span class=\"hidden\">Twitter</span>
                </a>
                <a class=\"icon-facebook\" href=\"https://www.facebook.com/sharer/sharer.php?u={{page.url(true)}}\"
                    onclick=\"window.open(this.href, 'facebook-share','width=580,height=296');return false;\">
                    <span class=\"hidden\">Facebook</span>
                </a>
                <a class=\"icon-google-plus\" href=\"https://plus.google.com/share?url={{page.url(true)}}\"
                   onclick=\"window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;\">
                    <span class=\"hidden\">Google+</span>
                </a>
            </section>
           {% if config.plugins.comments.enabled %}
              {% include 'partials/comments.html.twig' with {'page': page} %}
           {% endif %}
        </footer>

    </article>
</main>

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
class __TwigTemplate_1c9a9e57a1e3c718e8da5c3cfe95d4fcca4f4553ecf4fe56ec9d67b10fe5955d_1337521569 extends Twig_Template
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
            echo "                ";
            echo $this->env->getExtension('Grav\Plugin\JSComments\Twig\JSCommentsTwigExtension')->funcJSComments();
            echo "
            ";
        }
        // line 29
        echo "        </section>

        <footer class=\"post-footer\">
            ";
        // line 32
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array())) {
            // line 33
            echo "                ";
            if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "image", array())) {
                // line 34
                echo "                    <figure class=\"author-image\">
                        <a class=\"img\" href=\"";
                // line 35
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "\" style=\"background-image: url(";
                echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
                echo "/images/";
                echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "image", array());
                echo ")\">
                            <span class=\"hidden\">";
                // line 36
                echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
                echo "'s Picture</span>
                        </a>
                    </figure>
                ";
            }
            // line 40
            echo "        <section class=\"author\">
           ";
            // line 41
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "author", array())) {
                // line 42
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "author", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                    // line 43
                    echo "                 <h4><a href=\"";
                    echo (isset($context["base_url"]) ? $context["base_url"] : null);
                    echo "/author:";
                    echo $context["author"];
                    echo "\">";
                    echo $context["author"];
                    echo "</a></h4>
                 <p><a href=\"";
                    // line 44
                    echo (isset($context["base_url"]) ? $context["base_url"] : null);
                    echo "/author:";
                    echo $context["author"];
                    echo "\">";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_MASONRY.BLOG.POST.MORE.SPEC_AUTHOR");
                    echo " ";
                    echo $context["author"];
                    echo ".</a></p>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "           ";
            } else {
                // line 47
                echo "              <h4><a href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "\">";
                echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
                echo "</a></h4>
              ";
                // line 48
                if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "bio", array())) {
                    // line 49
                    echo "                 <p>";
                    echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "bio", array());
                    echo "</p>
              ";
                } else {
                    // line 51
                    echo "                 <p><a href=\"";
                    echo (isset($context["base_url"]) ? $context["base_url"] : null);
                    echo "\">";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_MASONRY.BLOG.POST.MORE.AUTHOR");
                    echo "</a></p>
              ";
                }
                // line 53
                echo "           ";
            }
            // line 54
            echo "           <div class=\"author-meta\">
           ";
            // line 55
            if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "location", array())) {
                echo "<span class=\"author-location icon-location\">";
                echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "location", array());
                echo "</span>";
            }
            // line 56
            echo "           ";
            if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "website", array())) {
                echo "<span class=\"author-link icon-link\"><a href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "website", array());
                echo "\">";
                echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "website", array());
                echo "</a></span>";
            }
            // line 57
            echo "           </div>
        </section>
            ";
        }
        // line 60
        echo "
            <section class=\"share\">
                <h4>";
        // line 62
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_MASONRY.BLOG.POST.SHARE");
        echo "</h4>
                <a class=\"icon-twitter\" href=\"https://twitter.com/share?text=";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()));
        echo "&amp;url=";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "\"
                    onclick=\"window.open(this.href, 'twitter-share', 'width=550,height=235');return false;\">
                    <span class=\"hidden\">Twitter</span>
                </a>
                <a class=\"icon-facebook\" href=\"https://www.facebook.com/sharer/sharer.php?u=";
        // line 67
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "\"
                    onclick=\"window.open(this.href, 'facebook-share','width=580,height=296');return false;\">
                    <span class=\"hidden\">Facebook</span>
                </a>
                <a class=\"icon-google-plus\" href=\"https://plus.google.com/share?url=";
        // line 71
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "\"
                   onclick=\"window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;\">
                    <span class=\"hidden\">Google+</span>
                </a>
            </section>
           ";
        // line 76
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "comments", array()), "enabled", array())) {
            // line 77
            echo "              ";
            $this->loadTemplate("partials/comments.html.twig", "post.html.twig", 77)->display(array_merge($context, array("page" => (isset($context["page"]) ? $context["page"] : null))));
            // line 78
            echo "           ";
        }
        // line 79
        echo "        </footer>

    </article>
</main>

<aside class=\"read-next\">
    ";
        // line 85
        if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
            // line 86
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
            // line 88
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "title", array());
            echo "</h2>
            <p>";
            // line 89
            echo \Grav\Common\Utils::truncate(strip_tags($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "content", array())), 140);
            echo "&hellip;</p>
        </section>
    </a>
    ";
        }
        // line 93
        echo "    ";
        if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
            // line 94
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
            // line 96
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "title", array());
            echo "</h2>
            <p>";
            // line 97
            echo \Grav\Common\Utils::truncate(strip_tags($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "content", array())), 140);
            echo "&hellip;</p>
        </section>
    </a>
    ";
        }
        // line 101
        echo "</aside>


";
    }

    // line 106
    public function block_bottom($context, array $blocks = array())
    {
        // line 107
        echo "
    ";
        // line 108
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "disqus", array())) {
            // line 109
            echo "        <script>
        (function() {
        var d = document, s = d.createElement('script');
        s.src = '//";
            // line 112
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "disqus", array());
            echo ".disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
        </script>
    ";
        }
        // line 118
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
        return array (  541 => 118,  532 => 112,  527 => 109,  525 => 108,  522 => 107,  519 => 106,  512 => 101,  505 => 97,  501 => 96,  487 => 94,  484 => 93,  477 => 89,  473 => 88,  459 => 86,  457 => 85,  449 => 79,  446 => 78,  443 => 77,  441 => 76,  433 => 71,  426 => 67,  417 => 63,  413 => 62,  409 => 60,  404 => 57,  395 => 56,  389 => 55,  386 => 54,  383 => 53,  375 => 51,  369 => 49,  367 => 48,  360 => 47,  357 => 46,  343 => 44,  334 => 43,  329 => 42,  327 => 41,  324 => 40,  317 => 36,  309 => 35,  306 => 34,  303 => 33,  301 => 32,  296 => 29,  290 => 27,  288 => 26,  284 => 25,  278 => 21,  275 => 20,  232 => 19,  230 => 18,  224 => 17,  218 => 15,  216 => 14,  210 => 10,  208 => 9,  205 => 8,  202 => 7,  197 => 4,  194 => 3,  19 => 1,);
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

        <footer class=\"post-footer\">
            {%if site.author %}
                {%if site.author.image %}
                    <figure class=\"author-image\">
                        <a class=\"img\" href=\"{{base_url}}\" style=\"background-image: url({{ theme_url }}/images/{{ site.author.image }})\">
                            <span class=\"hidden\">{{site.author.name}}'s Picture</span>
                        </a>
                    </figure>
                {% endif %}
        <section class=\"author\">
           {%if page.taxonomy.author %}
              {% for author in page.taxonomy.author %}
                 <h4><a href=\"{{base_url}}/author:{{ author }}\">{{ author }}</a></h4>
                 <p><a href=\"{{base_url}}/author:{{ author }}\">{{ 'THEME_MASONRY.BLOG.POST.MORE.SPEC_AUTHOR'|t }} {{ author }}.</a></p>
              {% endfor %}
           {% else %}
              <h4><a href=\"{{base_url}}\">{{site.author.name}}</a></h4>
              {%if site.author.bio %}
                 <p>{{site.author.bio}}</p>
              {% else %}
                 <p><a href=\"{{base_url}}\">{{ 'THEME_MASONRY.BLOG.POST.MORE.AUTHOR'|t }}</a></p>
              {% endif %}
           {% endif %}
           <div class=\"author-meta\">
           {% if site.author.location %}<span class=\"author-location icon-location\">{{site.author.location}}</span>{% endif %}
           {% if site.author.website %}<span class=\"author-link icon-link\"><a href=\"{{site.author.website}}\">{{site.author.website}}</a></span>{% endif %}
           </div>
        </section>
            {% endif %}

            <section class=\"share\">
                <h4>{{ 'THEME_MASONRY.BLOG.POST.SHARE'|t }}</h4>
                <a class=\"icon-twitter\" href=\"https://twitter.com/share?text={{page.title | escape}}&amp;url={{page.url(true)}}\"
                    onclick=\"window.open(this.href, 'twitter-share', 'width=550,height=235');return false;\">
                    <span class=\"hidden\">Twitter</span>
                </a>
                <a class=\"icon-facebook\" href=\"https://www.facebook.com/sharer/sharer.php?u={{page.url(true)}}\"
                    onclick=\"window.open(this.href, 'facebook-share','width=580,height=296');return false;\">
                    <span class=\"hidden\">Facebook</span>
                </a>
                <a class=\"icon-google-plus\" href=\"https://plus.google.com/share?url={{page.url(true)}}\"
                   onclick=\"window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;\">
                    <span class=\"hidden\">Google+</span>
                </a>
            </section>
           {% if config.plugins.comments.enabled %}
              {% include 'partials/comments.html.twig' with {'page': page} %}
           {% endif %}
        </footer>

    </article>
</main>

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
