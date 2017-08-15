<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_010742bacd7922f8c0ef3868b50c1fd85132c12a1b910d45f0522f422e756bf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_dd0f93ed8ebce54e67411ea233ac80cb6fc539208d1466902b71eb8e63adae38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd0f93ed8ebce54e67411ea233ac80cb6fc539208d1466902b71eb8e63adae38->enter($__internal_dd0f93ed8ebce54e67411ea233ac80cb6fc539208d1466902b71eb8e63adae38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_30cc577d1e2bf365770311a6dde91af2c3d6e85c2adc980b0d181a5e3f847121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30cc577d1e2bf365770311a6dde91af2c3d6e85c2adc980b0d181a5e3f847121->enter($__internal_30cc577d1e2bf365770311a6dde91af2c3d6e85c2adc980b0d181a5e3f847121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd0f93ed8ebce54e67411ea233ac80cb6fc539208d1466902b71eb8e63adae38->leave($__internal_dd0f93ed8ebce54e67411ea233ac80cb6fc539208d1466902b71eb8e63adae38_prof);

        
        $__internal_30cc577d1e2bf365770311a6dde91af2c3d6e85c2adc980b0d181a5e3f847121->leave($__internal_30cc577d1e2bf365770311a6dde91af2c3d6e85c2adc980b0d181a5e3f847121_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a2d161f132910012fdef1f0fc0619354e512231cca95673a10289191347a2399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2d161f132910012fdef1f0fc0619354e512231cca95673a10289191347a2399->enter($__internal_a2d161f132910012fdef1f0fc0619354e512231cca95673a10289191347a2399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e69e034baaf5ab99b885b1833ff82df371da01d3e0c3de0b0f3475a4ed044106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e69e034baaf5ab99b885b1833ff82df371da01d3e0c3de0b0f3475a4ed044106->enter($__internal_e69e034baaf5ab99b885b1833ff82df371da01d3e0c3de0b0f3475a4ed044106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e69e034baaf5ab99b885b1833ff82df371da01d3e0c3de0b0f3475a4ed044106->leave($__internal_e69e034baaf5ab99b885b1833ff82df371da01d3e0c3de0b0f3475a4ed044106_prof);

        
        $__internal_a2d161f132910012fdef1f0fc0619354e512231cca95673a10289191347a2399->leave($__internal_a2d161f132910012fdef1f0fc0619354e512231cca95673a10289191347a2399_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_67cc7778a13d8398b0e3a5f7529287d9a0c627a8ce4e591cef701653c08be18e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67cc7778a13d8398b0e3a5f7529287d9a0c627a8ce4e591cef701653c08be18e->enter($__internal_67cc7778a13d8398b0e3a5f7529287d9a0c627a8ce4e591cef701653c08be18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c32b7336a9c8f62b593c204047f743a2a9bcff563f8031681af69fcc0bf904fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32b7336a9c8f62b593c204047f743a2a9bcff563f8031681af69fcc0bf904fa->enter($__internal_c32b7336a9c8f62b593c204047f743a2a9bcff563f8031681af69fcc0bf904fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c32b7336a9c8f62b593c204047f743a2a9bcff563f8031681af69fcc0bf904fa->leave($__internal_c32b7336a9c8f62b593c204047f743a2a9bcff563f8031681af69fcc0bf904fa_prof);

        
        $__internal_67cc7778a13d8398b0e3a5f7529287d9a0c627a8ce4e591cef701653c08be18e->leave($__internal_67cc7778a13d8398b0e3a5f7529287d9a0c627a8ce4e591cef701653c08be18e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_82f2478be215240abadd1dedba2b4a55afc11d78beac1a751379966731c5884c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f2478be215240abadd1dedba2b4a55afc11d78beac1a751379966731c5884c->enter($__internal_82f2478be215240abadd1dedba2b4a55afc11d78beac1a751379966731c5884c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_261c9ad97f0bc22fb36dbe65079703199205fdaf4cf872a5a5ec78d024ddcaae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261c9ad97f0bc22fb36dbe65079703199205fdaf4cf872a5a5ec78d024ddcaae->enter($__internal_261c9ad97f0bc22fb36dbe65079703199205fdaf4cf872a5a5ec78d024ddcaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_261c9ad97f0bc22fb36dbe65079703199205fdaf4cf872a5a5ec78d024ddcaae->leave($__internal_261c9ad97f0bc22fb36dbe65079703199205fdaf4cf872a5a5ec78d024ddcaae_prof);

        
        $__internal_82f2478be215240abadd1dedba2b4a55afc11d78beac1a751379966731c5884c->leave($__internal_82f2478be215240abadd1dedba2b4a55afc11d78beac1a751379966731c5884c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
