<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_3643b764d236f2bcc5787f7b69eb6727fd18c830827d5995479bb6fd821ccf05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3643b764d236f2bcc5787f7b69eb6727fd18c830827d5995479bb6fd821ccf05->enter($__internal_3643b764d236f2bcc5787f7b69eb6727fd18c830827d5995479bb6fd821ccf05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_afcd9107459d0c7487de7de75c04f0bd3d0d2f2cf47729cb060fd59baf38cb73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afcd9107459d0c7487de7de75c04f0bd3d0d2f2cf47729cb060fd59baf38cb73->enter($__internal_afcd9107459d0c7487de7de75c04f0bd3d0d2f2cf47729cb060fd59baf38cb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3643b764d236f2bcc5787f7b69eb6727fd18c830827d5995479bb6fd821ccf05->leave($__internal_3643b764d236f2bcc5787f7b69eb6727fd18c830827d5995479bb6fd821ccf05_prof);

        
        $__internal_afcd9107459d0c7487de7de75c04f0bd3d0d2f2cf47729cb060fd59baf38cb73->leave($__internal_afcd9107459d0c7487de7de75c04f0bd3d0d2f2cf47729cb060fd59baf38cb73_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a82f159757c758928f2fc4fa3179ec502a79631db71d2ae711e4d95e075018e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a82f159757c758928f2fc4fa3179ec502a79631db71d2ae711e4d95e075018e->enter($__internal_0a82f159757c758928f2fc4fa3179ec502a79631db71d2ae711e4d95e075018e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f0bc416c01ea35b8da7de08bef9ebaee66642663adb55ed26954d873a73f5997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0bc416c01ea35b8da7de08bef9ebaee66642663adb55ed26954d873a73f5997->enter($__internal_f0bc416c01ea35b8da7de08bef9ebaee66642663adb55ed26954d873a73f5997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f0bc416c01ea35b8da7de08bef9ebaee66642663adb55ed26954d873a73f5997->leave($__internal_f0bc416c01ea35b8da7de08bef9ebaee66642663adb55ed26954d873a73f5997_prof);

        
        $__internal_0a82f159757c758928f2fc4fa3179ec502a79631db71d2ae711e4d95e075018e->leave($__internal_0a82f159757c758928f2fc4fa3179ec502a79631db71d2ae711e4d95e075018e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_91e9e7037a3c0db528d1b4854728ccd8c4f0f8fa5ee9ffdc171d72e662b8053f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e9e7037a3c0db528d1b4854728ccd8c4f0f8fa5ee9ffdc171d72e662b8053f->enter($__internal_91e9e7037a3c0db528d1b4854728ccd8c4f0f8fa5ee9ffdc171d72e662b8053f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d1aee1d37420748c9aae89713a5732665d6becc50cbd927281f389c3acee3e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1aee1d37420748c9aae89713a5732665d6becc50cbd927281f389c3acee3e53->enter($__internal_d1aee1d37420748c9aae89713a5732665d6becc50cbd927281f389c3acee3e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d1aee1d37420748c9aae89713a5732665d6becc50cbd927281f389c3acee3e53->leave($__internal_d1aee1d37420748c9aae89713a5732665d6becc50cbd927281f389c3acee3e53_prof);

        
        $__internal_91e9e7037a3c0db528d1b4854728ccd8c4f0f8fa5ee9ffdc171d72e662b8053f->leave($__internal_91e9e7037a3c0db528d1b4854728ccd8c4f0f8fa5ee9ffdc171d72e662b8053f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_78e507b1de301f478142d5f0535fbc2f49640c0c04971bde2192a1c7e06c4750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78e507b1de301f478142d5f0535fbc2f49640c0c04971bde2192a1c7e06c4750->enter($__internal_78e507b1de301f478142d5f0535fbc2f49640c0c04971bde2192a1c7e06c4750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ab29a3a9a1d3e3d9a7b8be1c767a73c32fd854e12c110fa9226d33df3087b351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab29a3a9a1d3e3d9a7b8be1c767a73c32fd854e12c110fa9226d33df3087b351->enter($__internal_ab29a3a9a1d3e3d9a7b8be1c767a73c32fd854e12c110fa9226d33df3087b351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ab29a3a9a1d3e3d9a7b8be1c767a73c32fd854e12c110fa9226d33df3087b351->leave($__internal_ab29a3a9a1d3e3d9a7b8be1c767a73c32fd854e12c110fa9226d33df3087b351_prof);

        
        $__internal_78e507b1de301f478142d5f0535fbc2f49640c0c04971bde2192a1c7e06c4750->leave($__internal_78e507b1de301f478142d5f0535fbc2f49640c0c04971bde2192a1c7e06c4750_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
