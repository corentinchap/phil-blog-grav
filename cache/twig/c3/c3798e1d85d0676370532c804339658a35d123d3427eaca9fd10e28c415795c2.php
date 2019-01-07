<?php

/* partials/archive_plus.html.twig */
class __TwigTemplate_d9c20f01aabb95338087020e306c103dda736bab2b6e30712152c5a793ed946a extends Twig_Template
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
        // line 2
        if ( !($this->getAttribute($this->getAttribute((isset($context["archive_plus"]) ? $context["archive_plus"] : null), "show", array()), "year", array()) || $this->getAttribute($this->getAttribute((isset($context["archive_plus"]) ? $context["archive_plus"] : null), "show", array()), "month", array()))) {
            // line 3
            echo "  <ul class=\"archive-plus last\">
";
        } else {
            // line 5
            echo "  <ul class=\"archive-plus\">
";
        }
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["archive_plus"]) ? $context["archive_plus"] : null), "data", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["year"] => $context["months"]) {
            if ((twig_length_filter($this->env, $context["months"]) > 0)) {
                // line 9
                echo "  ";
                // line 10
                echo "  ";
                $context["year_index"] = $this->getAttribute($context["loop"], "index", array());
                // line 11
                echo "  ";
                if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "Y") == $context["year"])) {
                    // line 12
                    echo "    ";
                    $context["checked"] = "checked=\"checked\" ";
                    // line 13
                    echo "  ";
                } else {
                    // line 14
                    echo "    ";
                    $context["checked"] = "";
                    // line 15
                    echo "  ";
                }
                // line 16
                echo "
  ";
                // line 18
                echo "  ";
                if ($this->getAttribute($this->getAttribute((isset($context["archive_plus"]) ? $context["archive_plus"] : null), "show", array()), "year", array())) {
                    // line 19
                    echo "    <li>
      <input type=\"checkbox\" id=\"input-archive-";
                    // line 20
                    echo (isset($context["year_index"]) ? $context["year_index"] : null);
                    echo "\" ";
                    echo (isset($context["checked"]) ? $context["checked"] : null);
                    echo "/>
      ";
                    // line 21
                    if ($this->getAttribute($this->getAttribute((isset($context["archive_plus"]) ? $context["archive_plus"] : null), "show", array()), "counter", array())) {
                        // line 22
                        echo "        ";
                        // line 23
                        echo "        ";
                        $context["count"] = 0;
                        // line 24
                        echo "        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["months"]);
                        foreach ($context['_seq'] as $context["month"] => $context["items"]) {
                            // line 25
                            echo "          ";
                            $context["count"] = ((isset($context["count"]) ? $context["count"] : null) + twig_length_filter($this->env, $context["items"]));
                            // line 26
                            echo "        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['month'], $context['items'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 27
                        echo "
        <label for=\"input-archive-";
                        // line 28
                        echo (isset($context["year_index"]) ? $context["year_index"] : null);
                        echo "\" class=\"label counter\">";
                        echo (isset($context["count"]) ? $context["count"] : null);
                        echo "</label>
      ";
                    } else {
                        // line 30
                        echo "        <label for=\"input-archive-";
                        echo (isset($context["year_index"]) ? $context["year_index"] : null);
                        echo "\"></label>
      ";
                    }
                    // line 32
                    echo "
      <a href=\"";
                    // line 33
                    echo (isset($context["base_url"]) ? $context["base_url"] : null);
                    echo "/";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGINS.ARCHIVE_PLUS.NAME");
                    echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                    echo twig_escape_filter($this->env, $context["year"], "url");
                    echo "\">
        <span class=\"archive_year\">";
                    // line 34
                    echo $context["year"];
                    echo "</span>
      </a>

      ";
                    // line 37
                    if ($this->getAttribute($this->getAttribute((isset($context["archive_plus"]) ? $context["archive_plus"] : null), "show", array()), "month", array())) {
                        // line 38
                        echo "        <ul>
      ";
                    } else {
                        // line 40
                        echo "        <ul class=\"last\">
      ";
                    }
                    // line 42
                    echo "  ";
                }
                // line 43
                echo "
  ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["months"]);
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                foreach ($context['_seq'] as $context["month"] => $context["items"]) {
                    if ((twig_length_filter($this->env, $context["items"]) > 0)) {
                        // line 45
                        echo "    ";
                        // line 46
                        echo "    ";
                        if (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "Y") == $context["year"]) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "n") == $context["month"]))) {
                            // line 47
                            echo "      ";
                            $context["checked"] = "checked=\"checked\" ";
                            // line 48
                            echo "    ";
                        } else {
                            // line 49
                            echo "      ";
                            $context["checked"] = "";
                            // line 50
                            echo "    ";
                        }
                        // line 51
                        echo "
    ";
                        // line 53
                        echo "    ";
                        if ($this->getAttribute($this->getAttribute((isset($context["archive_plus"]) ? $context["archive_plus"] : null), "show", array()), "month", array())) {
                            // line 54
                            echo "      <li>
        ";
                            // line 55
                            if ($this->getAttribute($this->getAttribute((isset($context["archive_plus"]) ? $context["archive_plus"] : null), "show", array()), "items", array())) {
                                // line 56
                                echo "          <input type=\"checkbox\" id=\"input-archive-";
                                echo (isset($context["year_index"]) ? $context["year_index"] : null);
                                echo "-";
                                echo $this->getAttribute($context["loop"], "index", array());
                                echo "\" ";
                                echo (isset($context["checked"]) ? $context["checked"] : null);
                                echo "/>
        ";
                            }
                            // line 58
                            echo "
        ";
                            // line 59
                            if ($this->getAttribute($this->getAttribute((isset($context["archive_plus"]) ? $context["archive_plus"] : null), "show", array()), "counter", array())) {
                                // line 60
                                echo "          <label for=\"input-archive-";
                                echo (isset($context["year_index"]) ? $context["year_index"] : null);
                                echo "-";
                                echo $this->getAttribute($context["loop"], "index", array());
                                echo "\" class=\"label counter\">";
                                echo twig_length_filter($this->env, $context["items"]);
                                echo "</label>
        ";
                            } else {
                                // line 62
                                echo "          <label for=\"input-archive-";
                                echo (isset($context["year_index"]) ? $context["year_index"] : null);
                                echo "-";
                                echo $this->getAttribute($context["loop"], "index", array());
                                echo "\"></label>
        ";
                            }
                            // line 64
                            echo "
        ";
                            // line 65
                            $context["month_time"] = mktime(0, 0, 0, ($context["month"] + 1), 0, $context["year"]);
                            // line 66
                            echo "        ";
                            $context["short_month"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translateArray("PLUGINS.ARCHIVE_PLUS.SHORT_MONTHS", ($context["month"] - 1));
                            // line 67
                            echo "        <a href=\"";
                            echo (isset($context["base_url"]) ? $context["base_url"] : null);
                            echo "/";
                            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGINS.ARCHIVE_PLUS.NAME");
                            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (((isset($context["short_month"]) ? $context["short_month"] : null) . "_") . $context["year"])), "url");
                            echo "\">
          <span class=\"archive_month\">";
                            // line 68
                            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translateArray("PLUGINS.ARCHIVE_PLUS.MONTHS", ($context["month"] - 1));
                            echo " ";
                            echo $context["year"];
                            echo "</span>
        </a>

        <ul class=\"last\">
    ";
                        }
                        // line 73
                        echo "
    ";
                        // line 74
                        if ($this->getAttribute($this->getAttribute((isset($context["archive_plus"]) ? $context["archive_plus"] : null), "show", array()), "items", array())) {
                            // line 75
                            echo "      ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["items"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                // line 76
                                echo "        ";
                                // line 77
                                echo "        ";
                                $context["active"] = "";
                                // line 78
                                echo "        ";
                                if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array()) == $this->getAttribute($context["item"], "id", array()))) {
                                    // line 79
                                    echo "          ";
                                    $context["active"] = " class=\"active\"";
                                    // line 80
                                    echo "        ";
                                }
                                // line 81
                                echo "
        <li>
          <a href=\"";
                                // line 83
                                echo $this->getAttribute($context["item"], "url", array());
                                echo "\"";
                                echo (isset($context["active"]) ? $context["active"] : null);
                                echo ">";
                                echo $this->getAttribute($context["item"], "title", array());
                                echo "</a>
        </li>
      ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 86
                            echo "    ";
                        }
                        // line 87
                        echo "
    ";
                        // line 89
                        echo "    ";
                        if ($this->getAttribute($this->getAttribute((isset($context["archive_plus"]) ? $context["archive_plus"] : null), "show", array()), "month", array())) {
                            // line 90
                            echo "      </ul></li>
    ";
                        }
                        // line 92
                        echo "  ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['month'], $context['items'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "
  ";
                // line 95
                echo "  ";
                if ($this->getAttribute($this->getAttribute((isset($context["archive_plus"]) ? $context["archive_plus"] : null), "show", array()), "year", array())) {
                    // line 96
                    echo "    </ul></li>
  ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['year'], $context['months'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "</ul>

";
        // line 101
        if ($this->getAttribute((isset($context["archive_plus"]) ? $context["archive_plus"] : null), "show_more", array())) {
            // line 102
            echo "  <a class=\"button\" href=\"";
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGINS.ARCHIVE_PLUS.NAME");
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGINS.ARCHIVE_PLUS.SHOW_MORE");
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/archive_plus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 102,  330 => 101,  326 => 99,  314 => 96,  311 => 95,  308 => 93,  298 => 92,  294 => 90,  291 => 89,  288 => 87,  285 => 86,  272 => 83,  268 => 81,  265 => 80,  262 => 79,  259 => 78,  256 => 77,  254 => 76,  249 => 75,  247 => 74,  244 => 73,  234 => 68,  225 => 67,  222 => 66,  220 => 65,  217 => 64,  209 => 62,  199 => 60,  197 => 59,  194 => 58,  184 => 56,  182 => 55,  179 => 54,  176 => 53,  173 => 51,  170 => 50,  167 => 49,  164 => 48,  161 => 47,  158 => 46,  156 => 45,  145 => 44,  142 => 43,  139 => 42,  135 => 40,  131 => 38,  129 => 37,  123 => 34,  115 => 33,  112 => 32,  106 => 30,  99 => 28,  96 => 27,  90 => 26,  87 => 25,  82 => 24,  79 => 23,  77 => 22,  75 => 21,  69 => 20,  66 => 19,  63 => 18,  60 => 16,  57 => 15,  54 => 14,  51 => 13,  48 => 12,  45 => 11,  42 => 10,  40 => 9,  29 => 8,  25 => 5,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Setup block #}
{% if not (archive_plus.show.year or archive_plus.show.month) %}
  <ul class=\"archive-plus last\">
{% else %}
  <ul class=\"archive-plus\">
{% endif %}
{# Iterate over all data #}
{% for year ,months in archive_plus.data if months|length > 0  %}
  {# Set current year #}
  {% set year_index = loop.index %}
  {% if page.date|date('Y') == year %}
    {% set checked = 'checked=\"checked\" ' %}
  {% else %}
    {% set checked = '' %}
  {% endif %}

  {# Toggle year + BEGIN: Wrap list #}
  {% if archive_plus.show.year %}
    <li>
      <input type=\"checkbox\" id=\"input-archive-{{ year_index }}\" {{ checked }}/>
      {% if archive_plus.show.counter %}
        {# Calculate total number of posts #}
        {% set count = 0 %}
        {% for month,items in months %}
          {% set count = count + items|length %}
        {% endfor %}

        <label for=\"input-archive-{{ year_index }}\" class=\"label counter\">{{ count }}</label>
      {% else %}
        <label for=\"input-archive-{{ year_index }}\"></label>
      {% endif %}

      <a href=\"{{ base_url }}/{{ 'PLUGINS.ARCHIVE_PLUS.NAME'|t }}{{ config.system.param_sep }}{{ year|e('url') }}\">
        <span class=\"archive_year\">{{ year }}</span>
      </a>

      {% if archive_plus.show.month %}
        <ul>
      {% else %}
        <ul class=\"last\">
      {% endif %}
  {% endif %}

  {% for month, items in months if items|length > 0 %}
    {# Set current month #}
    {% if (page.date|date('Y') == year) and (page.date|date('n') == month) %}
      {% set checked = 'checked=\"checked\" ' %}
    {% else %}
      {% set checked = '' %}
    {% endif %}

    {# Toggle month + BEGIN: Wrap list #}
    {% if archive_plus.show.month %}
      <li>
        {% if archive_plus.show.items %}
          <input type=\"checkbox\" id=\"input-archive-{{ year_index }}-{{ loop.index }}\" {{ checked }}/>
        {% endif %}

        {% if archive_plus.show.counter %}
          <label for=\"input-archive-{{ year_index }}-{{ loop.index }}\" class=\"label counter\">{{ items|length }}</label>
        {% else %}
          <label for=\"input-archive-{{ year_index }}-{{ loop.index }}\"></label>
        {% endif %}

        {% set month_time = mktime(0, 0, 0, month+1, 0, year) %}
        {% set short_month = 'PLUGINS.ARCHIVE_PLUS.SHORT_MONTHS'|ta(month-1) %}
        <a href=\"{{ base_url }}/{{ 'PLUGINS.ARCHIVE_PLUS.NAME'|t }}{{ config.system.param_sep }}{{ (short_month ~ '_' ~ year)|lower|e('url') }}\">
          <span class=\"archive_month\">{{ 'PLUGINS.ARCHIVE_PLUS.MONTHS'|ta(month-1) }} {{ year }}</span>
        </a>

        <ul class=\"last\">
    {% endif %}

    {% if archive_plus.show.items %}
      {% for item in items %}
        {# Label active link #}
        {% set active = '' %}
        {% if page.id == item.id %}
          {% set active = ' class=\"active\"' %}
        {% endif %}

        <li>
          <a href=\"{{ item.url }}\"{{ active }}>{{ item.title }}</a>
        </li>
      {% endfor %}
    {% endif %}

    {# END: Wrap list (month) #}
    {% if archive_plus.show.month %}
      </ul></li>
    {% endif %}
  {% endfor %}

  {# END: Wrap list (year) #}
  {% if archive_plus.show.year %}
    </ul></li>
  {% endif %}
{% endfor %}
</ul>

{% if archive_plus.show_more %}
  <a class=\"button\" href=\"{{ base_url }}/{{ 'PLUGINS.ARCHIVE_PLUS.NAME'|t }}{{ config.system.param_sep }}\">{{ 'PLUGINS.ARCHIVE_PLUS.SHOW_MORE'|t }}</a>
{% endif %}
", "partials/archive_plus.html.twig", "C:\\Users\\Coco_\\Documents\\GitHub\\blog-phil\\user\\themes\\masonry\\templates\\partials\\archive_plus.html.twig");
    }
}
