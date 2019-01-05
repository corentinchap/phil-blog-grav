<?php

/* forms/fields/hidden/hidden.html.twig */
class __TwigTemplate_a464e4bd28b70ae307e4036c0a6cfda8a20b80a0f98706da2c2eda54b2e56965 extends Twig_Template
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
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "evaluate", array())) ? ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->evaluateStringFunc($context, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array()))) : ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())))) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 2
        echo "
<input data-grav-field=\"hidden\" data-grav-disabled=\"false\" type=\"hidden\" class=\"input\" name=\"";
        // line 3
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())));
        echo "\" value=\"";
        echo twig_join_filter((isset($context["value"]) ? $context["value"] : null), ", ");
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "forms/fields/hidden/hidden.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set value = (value is null ? (field.evaluate ? evaluate(field.default) : field.default) : value) %}

<input data-grav-field=\"hidden\" data-grav-disabled=\"false\" type=\"hidden\" class=\"input\" name=\"{{ (scope ~ field.name)|fieldName }}\" value=\"{{ value|join(', ') }}\" />
", "forms/fields/hidden/hidden.html.twig", "C:\\Users\\Coco_\\Documents\\GitHub\\blog-phil\\user\\plugins\\form\\templates\\forms\\fields\\hidden\\hidden.html.twig");
    }
}
