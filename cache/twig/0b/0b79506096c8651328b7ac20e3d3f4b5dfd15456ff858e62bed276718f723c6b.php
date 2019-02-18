<?php

/* partials/base.html.twig */
class __TwigTemplate_17c123d0da8228e38ba9ac9488751e74a0ce17d13177373b8c90ef169cea5ea9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", []), "getLanguage", [])) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", []), "getLanguage", [])) : ("en"));
        echo "\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 38
        echo "    </head>

    ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "
        ";
        // line 44
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 44)->display($context);
        // line 45
        echo "
        <div class=\"site-wrapper\">

            ";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "
            <footer class=\"site-footer clearfix\">
                <section class=\"copyright\"><a href=\"";
        // line 51
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "\">";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", []);
        echo "</a> &copy; 2019</section>
                <section class=\"poweredby\">Developed by <a href=\"http://chapatte.co\">Corentin Chapatte</a> with Grav
                 <a href=\"https://www.iubenda.com/privacy-policy/87963699\" class=\"iubenda-white iubenda-embed\" title=\"Privacy Policy \">Privacy Policy</a>
                    <script type=\"text/javascript\">(function (w,d) {var loader = function () {var s = d.createElement(\"script\"), tag = d.getElementsByTagName(\"script\")[0]; s.src=\"https://cdn.iubenda.com/iubenda.js\"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener(\"load\", loader, false);}else if(w.attachEvent){w.attachEvent(\"onload\", loader);}else{w.onload = loader;}})(window, document);</script>
                
                </section>
            </footer>
        </div>

        ";
        // line 61
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 76
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", [], "method");
        echo "
    </body>
    ";
        // line 78
        $this->displayBlock('bottom', $context, $blocks);
        // line 79
        echo "</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"HandheldFriendly\" content=\"True\" />
        ";
        // line 9
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", [])) {
            // line 10
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", []);
            echo "\">
        ";
        } else {
            // line 12
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", []);
            echo "\">
        ";
        }
        // line 14
        echo "        ";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", [])) {
            // line 15
            echo "        <meta name=\"robots\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", []);
            echo "\">
        ";
        }
        // line 17
        echo "
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 18
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\">

        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "metadata", []));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 21
            echo "        <meta ";
            if ($this->getAttribute($context["meta"], "name", [])) {
                echo "name=\"";
                echo $this->getAttribute($context["meta"], "name", []);
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "http_equiv", [])) {
                echo "http-equiv=\"";
                echo $this->getAttribute($context["meta"], "http_equiv", []);
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "charset", [])) {
                echo "charset=\"";
                echo $this->getAttribute($context["meta"], "charset", []);
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "property", [])) {
                echo "property=\"";
                echo $this->getAttribute($context["meta"], "property", []);
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "content", [])) {
                echo "content=\"";
                echo $this->getAttribute($context["meta"], "content", []);
                echo "\" ";
            }
            echo "/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
        <title>";
        // line 24
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", [])) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", []);
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", []);
        echo "</title>

        ";
        // line 27
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Merriweather:300,700,700italic,300italic|Open+Sans:700,400\" />
       
        ";
        // line 29
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "        
        ";
        // line 35
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", [0 => "system://assets/jquery/jquery-2.x.min.js", 1 => ["priority" => 1, "group" => "top"]], "method");
        // line 36
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", [0 => "top"], "method");
        echo "
        ";
    }

    // line 29
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 30
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", [0 => "theme://css/screen.css", 1 => 102], "method");
        // line 31
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", [0 => "theme://css/custom.css", 1 => 100], "method");
        // line 32
        echo "            ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", [], "method");
        echo "
        ";
    }

    // line 40
    public function block_body($context, array $blocks = [])
    {
        // line 41
        echo "    <body class=\"home-template nav-closed\">
    ";
    }

    // line 48
    public function block_content($context, array $blocks = [])
    {
    }

    // line 61
    public function block_javascripts($context, array $blocks = [])
    {
        // line 62
        echo "    
            ";
        // line 64
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", [0 => "theme://js/index.js"], "method");
        // line 65
        echo "
            ";
        // line 67
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", [0 => "theme://js/prism.js"], "method");
        // line 68
        echo "
            ";
        // line 69
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", []) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", []) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", []) <= 9))) {
            // line 70
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", [0 => "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"], "method");
            // line 71
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", [0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"], "method");
            // line 72
            echo "            ";
        }
        // line 73
        echo "
           
        ";
    }

    // line 78
    public function block_bottom($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 78,  252 => 73,  249 => 72,  246 => 71,  243 => 70,  241 => 69,  238 => 68,  235 => 67,  232 => 65,  229 => 64,  226 => 62,  223 => 61,  218 => 48,  213 => 41,  210 => 40,  203 => 32,  200 => 31,  197 => 30,  194 => 29,  187 => 36,  185 => 35,  182 => 34,  180 => 29,  176 => 27,  167 => 24,  164 => 23,  131 => 21,  127 => 20,  122 => 18,  119 => 17,  113 => 15,  110 => 14,  104 => 12,  98 => 10,  96 => 9,  90 => 5,  87 => 4,  82 => 79,  80 => 78,  74 => 76,  71 => 61,  57 => 51,  53 => 49,  51 => 48,  46 => 45,  44 => 44,  41 => 43,  39 => 40,  35 => 38,  33 => 4,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
    <head>
        {% block head %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"HandheldFriendly\" content=\"True\" />
        {% if header.description %}
        <meta name=\"description\" content=\"{{ header.description }}\">
        {% else %}
        <meta name=\"description\" content=\"{{ site.description }}\">
        {% endif %}
        {% if header.robots %}
        <meta name=\"robots\" content=\"{{ header.robots }}\">
        {% endif %}

        <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.png\">

        {% for meta in page.metadata %}
        <meta {% if meta.name %}name=\"{{ meta.name }}\" {% endif %}{% if meta.http_equiv %}http-equiv=\"{{ meta.http_equiv }}\" {% endif %}{% if meta.charset %}charset=\"{{ meta.charset }}\" {% endif %}{% if meta.property %}property=\"{{ meta.property }}\" {% endif %}{% if meta.content %}content=\"{{ meta.content }}\" {% endif %}/>
        {% endfor %}

        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>

        {# Fonts #}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Merriweather:300,700,700italic,300italic|Open+Sans:700,400\" />
       
        {% block stylesheets %}
            {% do assets.add('theme://css/screen.css',102) %}
            {% do assets.add('theme://css/custom.css',100) %}
            {{ assets.css() }}
        {% endblock %}
        
        {% do assets.addJs('system://assets/jquery/jquery-2.x.min.js', {'priority':1, 'group':'top'}) %}
        {{ assets.js('top') }}
        {% endblock head %}
    </head>

    {% block body %}
    <body class=\"home-template nav-closed\">
    {% endblock %}

        {% include 'partials/navigation.html.twig' %}

        <div class=\"site-wrapper\">

            {% block content %}{% endblock %}

            <footer class=\"site-footer clearfix\">
                <section class=\"copyright\"><a href=\"{{base_url}}\">{{site.title}}</a> &copy; 2019</section>
                <section class=\"poweredby\">Developed by <a href=\"http://chapatte.co\">Corentin Chapatte</a> with Grav
                 <a href=\"https://www.iubenda.com/privacy-policy/87963699\" class=\"iubenda-white iubenda-embed\" title=\"Privacy Policy \">Privacy Policy</a>
                    <script type=\"text/javascript\">(function (w,d) {var loader = function () {var s = d.createElement(\"script\"), tag = d.getElementsByTagName(\"script\")[0]; s.src=\"https://cdn.iubenda.com/iubenda.js\"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener(\"load\", loader, false);}else if(w.attachEvent){w.attachEvent(\"onload\", loader);}else{w.onload = loader;}})(window, document);</script>
                
                </section>
            </footer>
        </div>

        {# Footer JS #}
        {% block javascripts %}
    
            {# Main JS #}
            {% do assets.add('theme://js/index.js') %}

            {# Highlighting #}
            {% do assets.add('theme://js/prism.js') %}

            {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
                {% do assets.add('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') %}
                {% do assets.add('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') %}
            {% endif %}

           
        {% endblock %}
        {{ assets.js() }}
    </body>
    {% block bottom %}{% endblock %}
</html>
", "partials/base.html.twig", "C:\\Users\\Coco_\\Documents\\GitHub\\blog-phil\\user\\themes\\masonry\\templates\\partials\\base.html.twig");
    }
}
