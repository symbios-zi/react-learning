<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c09c788c97fcfe769fd1fc583cad0308563fb9c1b65a8a4ac2db1eb23b87e82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c09c788c97fcfe769fd1fc583cad0308563fb9c1b65a8a4ac2db1eb23b87e82->enter($__internal_0c09c788c97fcfe769fd1fc583cad0308563fb9c1b65a8a4ac2db1eb23b87e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_8465c3cb8f945fe9f036ced4c88e8a7b197864572d74abfe8bc3ee014f9a5446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8465c3cb8f945fe9f036ced4c88e8a7b197864572d74abfe8bc3ee014f9a5446->enter($__internal_8465c3cb8f945fe9f036ced4c88e8a7b197864572d74abfe8bc3ee014f9a5446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c09c788c97fcfe769fd1fc583cad0308563fb9c1b65a8a4ac2db1eb23b87e82->leave($__internal_0c09c788c97fcfe769fd1fc583cad0308563fb9c1b65a8a4ac2db1eb23b87e82_prof);

        
        $__internal_8465c3cb8f945fe9f036ced4c88e8a7b197864572d74abfe8bc3ee014f9a5446->leave($__internal_8465c3cb8f945fe9f036ced4c88e8a7b197864572d74abfe8bc3ee014f9a5446_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c5b7f96e439517c71b354f990acd70a113f9c94aaf2d21467898a1e3627b5f39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b7f96e439517c71b354f990acd70a113f9c94aaf2d21467898a1e3627b5f39->enter($__internal_c5b7f96e439517c71b354f990acd70a113f9c94aaf2d21467898a1e3627b5f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a71d696316ad0e4ea2440819fa03f46266f78f8861b6773f1656868fc6523843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a71d696316ad0e4ea2440819fa03f46266f78f8861b6773f1656868fc6523843->enter($__internal_a71d696316ad0e4ea2440819fa03f46266f78f8861b6773f1656868fc6523843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a71d696316ad0e4ea2440819fa03f46266f78f8861b6773f1656868fc6523843->leave($__internal_a71d696316ad0e4ea2440819fa03f46266f78f8861b6773f1656868fc6523843_prof);

        
        $__internal_c5b7f96e439517c71b354f990acd70a113f9c94aaf2d21467898a1e3627b5f39->leave($__internal_c5b7f96e439517c71b354f990acd70a113f9c94aaf2d21467898a1e3627b5f39_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7bd8ca15a7297c8720a197b07cc6472ec9c95965e09cc0f2d8eb25e673e22a81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bd8ca15a7297c8720a197b07cc6472ec9c95965e09cc0f2d8eb25e673e22a81->enter($__internal_7bd8ca15a7297c8720a197b07cc6472ec9c95965e09cc0f2d8eb25e673e22a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_be45e3f1e0aeb2a35c8c70c4ed84b60977fa53c84d79f96d4a89af77dbec5d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be45e3f1e0aeb2a35c8c70c4ed84b60977fa53c84d79f96d4a89af77dbec5d8d->enter($__internal_be45e3f1e0aeb2a35c8c70c4ed84b60977fa53c84d79f96d4a89af77dbec5d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_be45e3f1e0aeb2a35c8c70c4ed84b60977fa53c84d79f96d4a89af77dbec5d8d->leave($__internal_be45e3f1e0aeb2a35c8c70c4ed84b60977fa53c84d79f96d4a89af77dbec5d8d_prof);

        
        $__internal_7bd8ca15a7297c8720a197b07cc6472ec9c95965e09cc0f2d8eb25e673e22a81->leave($__internal_7bd8ca15a7297c8720a197b07cc6472ec9c95965e09cc0f2d8eb25e673e22a81_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_16dc52ea6a2585a2c9360e34f0c66dc2866630d7eaa4deaa4e1257a70a2930ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16dc52ea6a2585a2c9360e34f0c66dc2866630d7eaa4deaa4e1257a70a2930ed->enter($__internal_16dc52ea6a2585a2c9360e34f0c66dc2866630d7eaa4deaa4e1257a70a2930ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b8c6a0c4d9477359348f13e5ef22eb4f6f0f28fb7fd182a94b1898ccbc54d768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c6a0c4d9477359348f13e5ef22eb4f6f0f28fb7fd182a94b1898ccbc54d768->enter($__internal_b8c6a0c4d9477359348f13e5ef22eb4f6f0f28fb7fd182a94b1898ccbc54d768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b8c6a0c4d9477359348f13e5ef22eb4f6f0f28fb7fd182a94b1898ccbc54d768->leave($__internal_b8c6a0c4d9477359348f13e5ef22eb4f6f0f28fb7fd182a94b1898ccbc54d768_prof);

        
        $__internal_16dc52ea6a2585a2c9360e34f0c66dc2866630d7eaa4deaa4e1257a70a2930ed->leave($__internal_16dc52ea6a2585a2c9360e34f0c66dc2866630d7eaa4deaa4e1257a70a2930ed_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
