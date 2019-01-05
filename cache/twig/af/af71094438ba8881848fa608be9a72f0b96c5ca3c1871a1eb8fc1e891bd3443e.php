<?php

/* partials/navigation.html.twig */
class __TwigTemplate_9072fadfa15d847c1591b7734e72452a55084731c162716532484917fcd20e07 extends Twig_Template
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
        echo "<input type=\"checkbox\" id=\"show-menu\" class=\"show-menu\" />
<div class=\"nav\">
    <h3 class=\"nav-title\">";
        // line 3
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_MASONRY.MENU_TITLE");
        echo "</h3>
    <a href=\"#\" class=\"nav-close\">
        <span class=\"hidden\">Close</span>
    </a>
    <ul>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 9
            echo "        ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 10
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("nav-current") : (""));
                // line 11
                echo "        <li class=\"nav-";
                echo $this->getAttribute($context["page"], "slug", array());
                echo " ";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\" role=\"presentation\"><a href=\"";
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</a></li>
        ";
            }
            // line 13
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </ul>
    <div class=\"subscribe-button\">
        <a class=\"link-subscribe\" href=\"https://www.instagram.com/fairmont1388/\"> Follow me on <img class=\"insta-icon\" src=\"";
        // line 16
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/user/instagram.svg\" alt=\"instagram\"></a>
    </div>
</div>
<span class=\"nav-cover\"></span>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  59 => 14,  53 => 13,  41 => 11,  38 => 10,  35 => 9,  31 => 8,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\" id=\"show-menu\" class=\"show-menu\" />
<div class=\"nav\">
    <h3 class=\"nav-title\">{{ 'THEME_MASONRY.MENU_TITLE'|t }}</h3>
    <a href=\"#\" class=\"nav-close\">
        <span class=\"hidden\">Close</span>
    </a>
    <ul>
        {% for page in pages.children %}
        {% if page.visible %}
        {% set current_page = (page.active or page.activeChild) ? 'nav-current' : '' %}
        <li class=\"nav-{{page.slug}} {{ current_page }}\" role=\"presentation\"><a href=\"{{ page.url }}\">{{ page.menu }}</a></li>
        {% endif %}
        {% endfor %}
    </ul>
    <div class=\"subscribe-button\">
        <a class=\"link-subscribe\" href=\"https://www.instagram.com/fairmont1388/\"> Follow me on <img class=\"insta-icon\" src=\"{{ theme_url }}/images/user/instagram.svg\" alt=\"instagram\"></a>
    </div>
</div>
<span class=\"nav-cover\"></span>
", "partials/navigation.html.twig", "C:\\Users\\Coco_\\Documents\\GitHub\\blog-phil\\user\\themes\\masonry\\templates\\partials\\navigation.html.twig");
    }
}
