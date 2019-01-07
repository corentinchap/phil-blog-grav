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
        // line 7
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, (isset($context["archive_plus"]) ? $context["archive_plus"] : null));
        echo "
";
        // line 9
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
                // line 10
                echo "  ";
                // line 11
                echo "  ";
                $context["year_index"] = $this->getAttribute($context["loop"], "index", array());
                // line 12
                echo "  ";
                if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "Y") == $context["year"])) {
                    // line 13
                    echo "    ";
                    $context["checked"] = "checked=\"checked\" ";
                    // line 14
                    echo "  ";
                } else {
                    // line 15
                    echo "    ";
                    $context["checked"] = "";
                    // line 16
                    echo "  ";
                }
                // line 17
                echo "
  ";
                // line 19
                echo "  ";
                if ($this->getAttribute($this->getAttribute((isset($context["archive_plus"]) ? $context["archive_plus"] : null), "show", array()), "year", array())) {
                    // line 20
                    echo "    <li>
      <input type=\"checkbox\" id=\"input-archive-";
                    // line 21
                    echo (isset($context["year_index"]) ? $context["year_index"] : null);
                    echo "\" ";
                    echo (isset($context["checked"]) ? $context["checked"] : null);
                    echo "/>
      ";
                    // line 22
                    if ($this->getAttribute($this->getAttribute((isset($context["archive_plus"]) ? $context["archive_plus"] : null), "show", array()), "counter", array())) {
                        // line 23
                        echo "        ";
                        // line 24
                        echo "        ";
                        $context["count"] = 0;
                        // line 25
                        echo "        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["months"]);
                        foreach ($context['_seq'] as $context["month"] => $context["items"]) {
                            // line 26
                            echo "          ";
                            $context["count"] = ((isset($context["count"]) ? $context["count"] : null) + twig_length_filter($this->env, $context["items"]));
                            // line 27
                            echo "        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['month'], $context['items'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 28
                        echo "
        <label for=\"input-archive-";
                        // line 29
                        echo (isset($context["year_index"]) ? $context["year_index"] : null);
                        echo "\" class=\"label counter\">";
                        echo (isset($context["count"]) ? $context["count"] : null);
                        echo "</label>
      ";
                    } else {
                        // line 31
                        echo "        <label for=\"input-archive-";
                        echo (isset($context["year_index"]) ? $context["year_index"] : null);
                        echo "\"></label>
      ";
                    }
                    // line 33
                    echo "
      <a href=\"";
                    // line 34
                    echo (isset($context["base_url"]) ? $context["base_url"] : null);
                    echo "/";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGINS.ARCHIVE_PLUS.NAME");
                    echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                    echo twig_escape_filter($this->env, $context["year"], "url");
                    echo "\">
        <span class=\"archive_year\">";
                    // line 35
                    echo $context["year"];
                    echo "</span>
      </a>

      ";
                    // line 38
                    if ($this->getAttribute($this->getAttribute((isset($context["archive_plus"]) ? $context["archive_plus"] : null), "show", array()), "month", array())) {
                        // line 39
                        echo "        <ul>
      ";
                    } else {
                        // line 41
                        echo "        <ul class=\"last\">
      ";
                    }
                    // line 43
                    echo "  ";
                }
                // line 44
                echo "
  ";
                // line 45
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
                        // line 46
                        echo "    ";
                        // line 47
                        echo "    ";
                        if (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "Y") == $context["year"]) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "n") == $context["month"]))) {
                            // line 48
                            echo "      ";
                            $context["checked"] = "checked=\"checked\" ";
                            // line 49
                            echo "    ";
                        } else {
                            // line 50
                            echo "      ";
                            $context["checked"] = "";
                            // line 51
                            echo "    ";
                        }
                        // line 52
                        echo "
    ";
                        // line 54
                        echo "    ";
                        if ($this->getAttribute($this->getAttribute((isset($context["archive_plus"]) ? $context["archive_plus"] : null), "show", array()), "month", array())) {
                            // line 55
                            echo "      <li>
        ";
                            // line 56
                            if ($this->getAttribute($this->getAttribute((isset($context["archive_plus"]) ? $context["archive_plus"] : null), "show", array()), "items", array())) {
                                // line 57
                                echo "          <input type=\"checkbox\" id=\"input-archive-";
                                echo (isset($context["year_index"]) ? $context["year_index"] : null);
                                echo "-";
                                echo $this->getAttribute($context["loop"], "index", array());
                                echo "\" ";
                                echo (isset($context["checked"]) ? $context["checked"] : null);
                                echo "/>
        ";
                            }
                            // line 59
                            echo "
        ";
                            // line 60
                            if ($this->getAttribute($this->getAttribute((isset($context["archive_plus"]) ? $context["archive_plus"] : null), "show", array()), "counter", array())) {
                                // line 61
                                echo "          <label for=\"input-archive-";
                                echo (isset($context["year_index"]) ? $context["year_index"] : null);
                                echo "-";
                                echo $this->getAttribute($context["loop"], "index", array());
                                echo "\" class=\"label counter\">";
                                echo twig_length_filter($this->env, $context["items"]);
                                echo "</label>
        ";
                            } else {
                                // line 63
                                echo "          <label for=\"input-archive-";
                                echo (isset($context["year_index"]) ? $context["year_index"] : null);
                                echo "-";
                                echo $this->getAttribute($context["loop"], "index", array());
                                echo "\"></label>
        ";
                            }
                            // line 65
                            echo "
        ";
                            // line 66
                            $context["month_time"] = mktime(0, 0, 0, ($context["month"] + 1), 0, $context["year"]);
                            // line 67
                            echo "        ";
                            $context["short_month"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translateArray("PLUGINS.ARCHIVE_PLUS.SHORT_MONTHS", ($context["month"] - 1));
                            // line 68
                            echo "        <a href=\"";
                            echo (isset($context["base_url"]) ? $context["base_url"] : null);
                            echo "/";
                            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGINS.ARCHIVE_PLUS.NAME");
                            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (((isset($context["short_month"]) ? $context["short_month"] : null) . "_") . $context["year"])), "url");
                            echo "\">
          <span class=\"archive_month\">";
                            // line 69
                            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translateArray("PLUGINS.ARCHIVE_PLUS.MONTHS", ($context["month"] - 1));
                            echo " ";
                            echo $context["year"];
                            echo "</span>
        </a>

        <ul class=\"last\">
    ";
                        }
                        // line 74
                        echo "
    ";
                        // line 75
                        if ($this->getAttribute($this->getAttribute((isset($context["archive_plus"]) ? $context["archive_plus"] : null), "show", array()), "items", array())) {
                            // line 76
                            echo "      ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["items"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                // line 77
                                echo "        ";
                                // line 78
                                echo "        ";
                                $context["active"] = "";
                                // line 79
                                echo "        ";
                                if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array()) == $this->getAttribute($context["item"], "id", array()))) {
                                    // line 80
                                    echo "          ";
                                    $context["active"] = " class=\"active\"";
                                    // line 81
                                    echo "        ";
                                }
                                // line 82
                                echo "
        <li>
          <a href=\"";
                                // line 84
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
                            // line 87
                            echo "    ";
                        }
                        // line 88
                        echo "
    ";
                        // line 90
                        echo "    ";
                        if ($this->getAttribute($this->getAttribute((isset($context["archive_plus"]) ? $context["archive_plus"] : null), "show", array()), "month", array())) {
                            // line 91
                            echo "      </ul></li>
    ";
                        }
                        // line 93
                        echo "  ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['month'], $context['items'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "
  ";
                // line 96
                echo "  ";
                if ($this->getAttribute($this->getAttribute((isset($context["archive_plus"]) ? $context["archive_plus"] : null), "show", array()), "year", array())) {
                    // line 97
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
        // line 100
        echo "</ul>

";
        // line 102
        if ($this->getAttribute((isset($context["archive_plus"]) ? $context["archive_plus"] : null), "show_more", array())) {
            // line 103
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
        return array (  336 => 103,  334 => 102,  330 => 100,  318 => 97,  315 => 96,  312 => 94,  302 => 93,  298 => 91,  295 => 90,  292 => 88,  289 => 87,  276 => 84,  272 => 82,  269 => 81,  266 => 80,  263 => 79,  260 => 78,  258 => 77,  253 => 76,  251 => 75,  248 => 74,  238 => 69,  229 => 68,  226 => 67,  224 => 66,  221 => 65,  213 => 63,  203 => 61,  201 => 60,  198 => 59,  188 => 57,  186 => 56,  183 => 55,  180 => 54,  177 => 52,  174 => 51,  171 => 50,  168 => 49,  165 => 48,  162 => 47,  160 => 46,  149 => 45,  146 => 44,  143 => 43,  139 => 41,  135 => 39,  133 => 38,  127 => 35,  119 => 34,  116 => 33,  110 => 31,  103 => 29,  100 => 28,  94 => 27,  91 => 26,  86 => 25,  83 => 24,  81 => 23,  79 => 22,  73 => 21,  70 => 20,  67 => 19,  64 => 17,  61 => 16,  58 => 15,  55 => 14,  52 => 13,  49 => 12,  46 => 11,  44 => 10,  33 => 9,  29 => 7,  25 => 5,  21 => 3,  19 => 2,);
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
{{ dump(archive_plus) }}
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
