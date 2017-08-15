<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2d53362d5fd36a3d30e2f56b1c274010097ef26b923f47ddb38f1001b86b65b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be5ba4d2686a096a4a511be012e5eb84fadf0913f0dedc91964ae166456008cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be5ba4d2686a096a4a511be012e5eb84fadf0913f0dedc91964ae166456008cf->enter($__internal_be5ba4d2686a096a4a511be012e5eb84fadf0913f0dedc91964ae166456008cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e56625987bbef680ac0802289c3cf810c4002b32c5cf2a9586ce58c7a89acbb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56625987bbef680ac0802289c3cf810c4002b32c5cf2a9586ce58c7a89acbb5->enter($__internal_e56625987bbef680ac0802289c3cf810c4002b32c5cf2a9586ce58c7a89acbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_be5ba4d2686a096a4a511be012e5eb84fadf0913f0dedc91964ae166456008cf->leave($__internal_be5ba4d2686a096a4a511be012e5eb84fadf0913f0dedc91964ae166456008cf_prof);

        
        $__internal_e56625987bbef680ac0802289c3cf810c4002b32c5cf2a9586ce58c7a89acbb5->leave($__internal_e56625987bbef680ac0802289c3cf810c4002b32c5cf2a9586ce58c7a89acbb5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bef222d26a9670ba26864854531afd0f58b3f0bfb9ed27c553a8a9486d04c2c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bef222d26a9670ba26864854531afd0f58b3f0bfb9ed27c553a8a9486d04c2c1->enter($__internal_bef222d26a9670ba26864854531afd0f58b3f0bfb9ed27c553a8a9486d04c2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9aa165072157305be33829ab5b074d42d3f464c8b729591751dddaf704a25bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa165072157305be33829ab5b074d42d3f464c8b729591751dddaf704a25bf5->enter($__internal_9aa165072157305be33829ab5b074d42d3f464c8b729591751dddaf704a25bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9aa165072157305be33829ab5b074d42d3f464c8b729591751dddaf704a25bf5->leave($__internal_9aa165072157305be33829ab5b074d42d3f464c8b729591751dddaf704a25bf5_prof);

        
        $__internal_bef222d26a9670ba26864854531afd0f58b3f0bfb9ed27c553a8a9486d04c2c1->leave($__internal_bef222d26a9670ba26864854531afd0f58b3f0bfb9ed27c553a8a9486d04c2c1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
