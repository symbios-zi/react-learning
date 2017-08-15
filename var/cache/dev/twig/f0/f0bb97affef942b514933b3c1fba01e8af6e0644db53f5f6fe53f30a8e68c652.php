<?php

/* :app:index.html.twig */
class __TwigTemplate_e7a1afca8823b370f2f51f409258989b5ddee94ec6850946461cd680b43aab42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":app:index.html.twig", 1);
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
        $__internal_81448f492871c893f173c04e4b53a3b6edb2163d892f4908111313e8ae647724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81448f492871c893f173c04e4b53a3b6edb2163d892f4908111313e8ae647724->enter($__internal_81448f492871c893f173c04e4b53a3b6edb2163d892f4908111313e8ae647724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":app:index.html.twig"));

        $__internal_44a4082811fdf4413a140a6c21d7d66519f8d56bfeb1366d2d96ecb98df9bcab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a4082811fdf4413a140a6c21d7d66519f8d56bfeb1366d2d96ecb98df9bcab->enter($__internal_44a4082811fdf4413a140a6c21d7d66519f8d56bfeb1366d2d96ecb98df9bcab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":app:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81448f492871c893f173c04e4b53a3b6edb2163d892f4908111313e8ae647724->leave($__internal_81448f492871c893f173c04e4b53a3b6edb2163d892f4908111313e8ae647724_prof);

        
        $__internal_44a4082811fdf4413a140a6c21d7d66519f8d56bfeb1366d2d96ecb98df9bcab->leave($__internal_44a4082811fdf4413a140a6c21d7d66519f8d56bfeb1366d2d96ecb98df9bcab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca533dc634abb437ae88ea376443670915ab0a3e8b9b4bb52bb6cf7c69df1d56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca533dc634abb437ae88ea376443670915ab0a3e8b9b4bb52bb6cf7c69df1d56->enter($__internal_ca533dc634abb437ae88ea376443670915ab0a3e8b9b4bb52bb6cf7c69df1d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_631cbdaddfba7efaa590914f0f0cb9eb9c8bda8d827d0bcd75f663e85aa9aa49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_631cbdaddfba7efaa590914f0f0cb9eb9c8bda8d827d0bcd75f663e85aa9aa49->enter($__internal_631cbdaddfba7efaa590914f0f0cb9eb9c8bda8d827d0bcd75f663e85aa9aa49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">


        </div>
    </div>
";
        
        $__internal_631cbdaddfba7efaa590914f0f0cb9eb9c8bda8d827d0bcd75f663e85aa9aa49->leave($__internal_631cbdaddfba7efaa590914f0f0cb9eb9c8bda8d827d0bcd75f663e85aa9aa49_prof);

        
        $__internal_ca533dc634abb437ae88ea376443670915ab0a3e8b9b4bb52bb6cf7c69df1d56->leave($__internal_ca533dc634abb437ae88ea376443670915ab0a3e8b9b4bb52bb6cf7c69df1d56_prof);

    }

    public function getTemplateName()
    {
        return ":app:index.html.twig";
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


        </div>
    </div>
{% endblock %}

", ":app:index.html.twig", "/Users/isymbios/projects/shk/react.dev/app/Resources/views/app/index.html.twig");
    }
}
