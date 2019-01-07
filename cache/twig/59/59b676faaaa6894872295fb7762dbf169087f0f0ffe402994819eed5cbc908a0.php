<?php

/* archive.html.twig */
class __TwigTemplate_11aa22c8382026ab9becde01c84563ffd99f36bd95acbb359b5cda000d8bfcb5 extends Twig_Template
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
        $this->loadTemplate("archive.html.twig", "archive.html.twig", 1, "1938111795")->display($context);
    }

    public function getTemplateName()
    {
        return "archive.html.twig";
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
    <article class=\"post page\">
        <header class=\"post-header\">
            {% include 'partials/breadcrumbs.html.twig' %}
            <h1 class=\"post-title\">{{page.title}}</h1>
        </header>
        <section class=\"post-content\">        
            {% include 'partials/archive_plus.html.twig' %}
        </section>
    </article>
</main>

{% endblock %}

{% block footer %}{% endblock %}

{% endembed %}", "archive.html.twig", "C:\\Users\\Coco_\\Documents\\GitHub\\blog-phil\\user\\themes\\masonry\\templates\\archive.html.twig");
    }
}


/* archive.html.twig */
class __TwigTemplate_11aa22c8382026ab9becde01c84563ffd99f36bd95acbb359b5cda000d8bfcb5_1938111795 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "archive.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
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
        $this->loadTemplate("partials/header.html.twig", "archive.html.twig", 9)->display($context);
        // line 10
        echo "
<main class=\"content\" role=\"main\">
    <article class=\"post page\">
        <header class=\"post-header\">
            ";
        // line 14
        $this->loadTemplate("partials/breadcrumbs.html.twig", "archive.html.twig", 14)->display($context);
        // line 15
        echo "            <h1 class=\"post-title\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>
        </header>
        <section class=\"post-content\">        
            ";
        // line 18
        $this->loadTemplate("partials/archive_plus.html.twig", "archive.html.twig", 18)->display($context);
        // line 19
        echo "        </section>
    </article>
</main>

";
    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 25,  132 => 19,  130 => 18,  123 => 15,  121 => 14,  115 => 10,  113 => 9,  110 => 8,  107 => 7,  102 => 4,  99 => 3,  19 => 1,);
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
    <article class=\"post page\">
        <header class=\"post-header\">
            {% include 'partials/breadcrumbs.html.twig' %}
            <h1 class=\"post-title\">{{page.title}}</h1>
        </header>
        <section class=\"post-content\">        
            {% include 'partials/archive_plus.html.twig' %}
        </section>
    </article>
</main>

{% endblock %}

{% block footer %}{% endblock %}

{% endembed %}", "archive.html.twig", "C:\\Users\\Coco_\\Documents\\GitHub\\blog-phil\\user\\themes\\masonry\\templates\\archive.html.twig");
    }
}
