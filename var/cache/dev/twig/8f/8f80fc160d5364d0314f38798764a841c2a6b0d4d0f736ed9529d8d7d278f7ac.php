<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ff745af4c9785908df5f50f3220a611a7a8150c8acb4b2d4fa58002236a15742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_4aaa08f0af41adf2fc69a16aae3329067882d8edde4559bf12e5b459ff4ef312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aaa08f0af41adf2fc69a16aae3329067882d8edde4559bf12e5b459ff4ef312->enter($__internal_4aaa08f0af41adf2fc69a16aae3329067882d8edde4559bf12e5b459ff4ef312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7bbf7bc9f86a3c2b5ac321c69b62b88d7c9f0bbc712e5b68c445ee8021a75e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bbf7bc9f86a3c2b5ac321c69b62b88d7c9f0bbc712e5b68c445ee8021a75e12->enter($__internal_7bbf7bc9f86a3c2b5ac321c69b62b88d7c9f0bbc712e5b68c445ee8021a75e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aaa08f0af41adf2fc69a16aae3329067882d8edde4559bf12e5b459ff4ef312->leave($__internal_4aaa08f0af41adf2fc69a16aae3329067882d8edde4559bf12e5b459ff4ef312_prof);

        
        $__internal_7bbf7bc9f86a3c2b5ac321c69b62b88d7c9f0bbc712e5b68c445ee8021a75e12->leave($__internal_7bbf7bc9f86a3c2b5ac321c69b62b88d7c9f0bbc712e5b68c445ee8021a75e12_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b4549a8eab68db6ba07f9775d8d75638924da5520a85b6b05338947d7c61fbf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4549a8eab68db6ba07f9775d8d75638924da5520a85b6b05338947d7c61fbf7->enter($__internal_b4549a8eab68db6ba07f9775d8d75638924da5520a85b6b05338947d7c61fbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6c986450e7d91af28d9c51c6532023daaa05702d842ebee481b965cb08dc7323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c986450e7d91af28d9c51c6532023daaa05702d842ebee481b965cb08dc7323->enter($__internal_6c986450e7d91af28d9c51c6532023daaa05702d842ebee481b965cb08dc7323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6c986450e7d91af28d9c51c6532023daaa05702d842ebee481b965cb08dc7323->leave($__internal_6c986450e7d91af28d9c51c6532023daaa05702d842ebee481b965cb08dc7323_prof);

        
        $__internal_b4549a8eab68db6ba07f9775d8d75638924da5520a85b6b05338947d7c61fbf7->leave($__internal_b4549a8eab68db6ba07f9775d8d75638924da5520a85b6b05338947d7c61fbf7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_36e2ec0d0bcc8272f6d0b522b5770794fb696516200570dc02600e72b8b2567e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36e2ec0d0bcc8272f6d0b522b5770794fb696516200570dc02600e72b8b2567e->enter($__internal_36e2ec0d0bcc8272f6d0b522b5770794fb696516200570dc02600e72b8b2567e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3d4ad279b361c03e6e85de0db4b2986e09614d31b0957ee7a999a7d5744d50e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d4ad279b361c03e6e85de0db4b2986e09614d31b0957ee7a999a7d5744d50e2->enter($__internal_3d4ad279b361c03e6e85de0db4b2986e09614d31b0957ee7a999a7d5744d50e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3d4ad279b361c03e6e85de0db4b2986e09614d31b0957ee7a999a7d5744d50e2->leave($__internal_3d4ad279b361c03e6e85de0db4b2986e09614d31b0957ee7a999a7d5744d50e2_prof);

        
        $__internal_36e2ec0d0bcc8272f6d0b522b5770794fb696516200570dc02600e72b8b2567e->leave($__internal_36e2ec0d0bcc8272f6d0b522b5770794fb696516200570dc02600e72b8b2567e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dff5fc966f4ebe2534a44593013d033d7b3cd552ac55ff4d5d1a6440df28fdb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff5fc966f4ebe2534a44593013d033d7b3cd552ac55ff4d5d1a6440df28fdb8->enter($__internal_dff5fc966f4ebe2534a44593013d033d7b3cd552ac55ff4d5d1a6440df28fdb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_95776c08d2898f370635123015189ab8d2e7af6a5e7b4173e80ce3601a8f7e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95776c08d2898f370635123015189ab8d2e7af6a5e7b4173e80ce3601a8f7e61->enter($__internal_95776c08d2898f370635123015189ab8d2e7af6a5e7b4173e80ce3601a8f7e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_95776c08d2898f370635123015189ab8d2e7af6a5e7b4173e80ce3601a8f7e61->leave($__internal_95776c08d2898f370635123015189ab8d2e7af6a5e7b4173e80ce3601a8f7e61_prof);

        
        $__internal_dff5fc966f4ebe2534a44593013d033d7b3cd552ac55ff4d5d1a6440df28fdb8->leave($__internal_dff5fc966f4ebe2534a44593013d033d7b3cd552ac55ff4d5d1a6440df28fdb8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
