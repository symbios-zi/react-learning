<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_ddbd517106433870c1648854a6afeadd58b2cc4e2a3d776bd94ad89ca1cd9b46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af3bbdd4d00ee9d78e8aa5efa95e1d054a01def02219fa0bdd1b97fb8ab7579c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af3bbdd4d00ee9d78e8aa5efa95e1d054a01def02219fa0bdd1b97fb8ab7579c->enter($__internal_af3bbdd4d00ee9d78e8aa5efa95e1d054a01def02219fa0bdd1b97fb8ab7579c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_d8ee9ba6cb8f83740cd92eaf4574325148c4723f36ee5be49f9beb15837d4b54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ee9ba6cb8f83740cd92eaf4574325148c4723f36ee5be49f9beb15837d4b54->enter($__internal_d8ee9ba6cb8f83740cd92eaf4574325148c4723f36ee5be49f9beb15837d4b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af3bbdd4d00ee9d78e8aa5efa95e1d054a01def02219fa0bdd1b97fb8ab7579c->leave($__internal_af3bbdd4d00ee9d78e8aa5efa95e1d054a01def02219fa0bdd1b97fb8ab7579c_prof);

        
        $__internal_d8ee9ba6cb8f83740cd92eaf4574325148c4723f36ee5be49f9beb15837d4b54->leave($__internal_d8ee9ba6cb8f83740cd92eaf4574325148c4723f36ee5be49f9beb15837d4b54_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d815cf311433b728a33ffac2412765a8e1ddc403731c6f24caeaec2712fc08cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d815cf311433b728a33ffac2412765a8e1ddc403731c6f24caeaec2712fc08cf->enter($__internal_d815cf311433b728a33ffac2412765a8e1ddc403731c6f24caeaec2712fc08cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_9e1682c5a8bea27baf05f71c038ce378e7e851a66ed6cd07c5d5f8d0c80db554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1682c5a8bea27baf05f71c038ce378e7e851a66ed6cd07c5d5f8d0c80db554->enter($__internal_9e1682c5a8bea27baf05f71c038ce378e7e851a66ed6cd07c5d5f8d0c80db554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_9e1682c5a8bea27baf05f71c038ce378e7e851a66ed6cd07c5d5f8d0c80db554->leave($__internal_9e1682c5a8bea27baf05f71c038ce378e7e851a66ed6cd07c5d5f8d0c80db554_prof);

        
        $__internal_d815cf311433b728a33ffac2412765a8e1ddc403731c6f24caeaec2712fc08cf->leave($__internal_d815cf311433b728a33ffac2412765a8e1ddc403731c6f24caeaec2712fc08cf_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_69064664230400d25ff950a632def512f7032c8ab0b1ed82fc89daeecf367d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69064664230400d25ff950a632def512f7032c8ab0b1ed82fc89daeecf367d3d->enter($__internal_69064664230400d25ff950a632def512f7032c8ab0b1ed82fc89daeecf367d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0485e516987f2e28fceda1a8e9ef5739e9ea5e55798461a5d51b496036a71a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0485e516987f2e28fceda1a8e9ef5739e9ea5e55798461a5d51b496036a71a98->enter($__internal_0485e516987f2e28fceda1a8e9ef5739e9ea5e55798461a5d51b496036a71a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_0485e516987f2e28fceda1a8e9ef5739e9ea5e55798461a5d51b496036a71a98->leave($__internal_0485e516987f2e28fceda1a8e9ef5739e9ea5e55798461a5d51b496036a71a98_prof);

        
        $__internal_69064664230400d25ff950a632def512f7032c8ab0b1ed82fc89daeecf367d3d->leave($__internal_69064664230400d25ff950a632def512f7032c8ab0b1ed82fc89daeecf367d3d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
