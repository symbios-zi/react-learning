<?php

/* app/index.html.twig */
class __TwigTemplate_923578dc3c4b0b0a7176dd5e983f17a0ad1c3f4d8285e9ed9966fdb0e9d50d79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "app/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e788dd42f71dc20a689d2d88b1f64f16029262035979d6e3fa72468167e14a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e788dd42f71dc20a689d2d88b1f64f16029262035979d6e3fa72468167e14a1->enter($__internal_8e788dd42f71dc20a689d2d88b1f64f16029262035979d6e3fa72468167e14a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/index.html.twig"));

        $__internal_b11e6d91ae3b48edc2973559b8bc35171b8b1748602564c368d22c0a48f97c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11e6d91ae3b48edc2973559b8bc35171b8b1748602564c368d22c0a48f97c76->enter($__internal_b11e6d91ae3b48edc2973559b8bc35171b8b1748602564c368d22c0a48f97c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e788dd42f71dc20a689d2d88b1f64f16029262035979d6e3fa72468167e14a1->leave($__internal_8e788dd42f71dc20a689d2d88b1f64f16029262035979d6e3fa72468167e14a1_prof);

        
        $__internal_b11e6d91ae3b48edc2973559b8bc35171b8b1748602564c368d22c0a48f97c76->leave($__internal_b11e6d91ae3b48edc2973559b8bc35171b8b1748602564c368d22c0a48f97c76_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe6294c2746fb7967d70a2455f1d84518ee08ecf6859b19cf5f824387985e2bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe6294c2746fb7967d70a2455f1d84518ee08ecf6859b19cf5f824387985e2bc->enter($__internal_fe6294c2746fb7967d70a2455f1d84518ee08ecf6859b19cf5f824387985e2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7eaaeba3f04892f1ea81eb3582b3a3507184f443941bb7885bd981b9cea9d844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eaaeba3f04892f1ea81eb3582b3a3507184f443941bb7885bd981b9cea9d844->enter($__internal_7eaaeba3f04892f1ea81eb3582b3a3507184f443941bb7885bd981b9cea9d844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <h1>Hello World!!!</h1>

        </div>
    </div>
";
        
        $__internal_7eaaeba3f04892f1ea81eb3582b3a3507184f443941bb7885bd981b9cea9d844->leave($__internal_7eaaeba3f04892f1ea81eb3582b3a3507184f443941bb7885bd981b9cea9d844_prof);

        
        $__internal_fe6294c2746fb7967d70a2455f1d84518ee08ecf6859b19cf5f824387985e2bc->leave($__internal_fe6294c2746fb7967d70a2455f1d84518ee08ecf6859b19cf5f824387985e2bc_prof);

    }

    public function getTemplateName()
    {
        return "app/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"wrapper\">
        <div id=\"container\">
            <h1>Hello World!!!</h1>

        </div>
    </div>
{% endblock %}

", "app/index.html.twig", "/var/www/react.dev/app/Resources/views/app/index.html.twig");
    }
}
