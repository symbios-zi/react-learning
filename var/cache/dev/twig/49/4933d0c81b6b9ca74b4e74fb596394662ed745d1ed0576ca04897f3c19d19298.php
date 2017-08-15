<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c73a916adef90294612b3e613cdcdd32c28385911d292c192a5857bfa5acb0c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68b757d5f8c09febb5fe05926d56c57529799d781afcb98e1b6ca94caf41fbdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68b757d5f8c09febb5fe05926d56c57529799d781afcb98e1b6ca94caf41fbdc->enter($__internal_68b757d5f8c09febb5fe05926d56c57529799d781afcb98e1b6ca94caf41fbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_70dcbd52d36cbd2562fa44b49a4abc33a7dae22851a5988870882e4121ca6c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70dcbd52d36cbd2562fa44b49a4abc33a7dae22851a5988870882e4121ca6c41->enter($__internal_70dcbd52d36cbd2562fa44b49a4abc33a7dae22851a5988870882e4121ca6c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68b757d5f8c09febb5fe05926d56c57529799d781afcb98e1b6ca94caf41fbdc->leave($__internal_68b757d5f8c09febb5fe05926d56c57529799d781afcb98e1b6ca94caf41fbdc_prof);

        
        $__internal_70dcbd52d36cbd2562fa44b49a4abc33a7dae22851a5988870882e4121ca6c41->leave($__internal_70dcbd52d36cbd2562fa44b49a4abc33a7dae22851a5988870882e4121ca6c41_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8729bdf6be64b7a0b718c5716db680db0f47beb15986ec274a40248e657dc501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8729bdf6be64b7a0b718c5716db680db0f47beb15986ec274a40248e657dc501->enter($__internal_8729bdf6be64b7a0b718c5716db680db0f47beb15986ec274a40248e657dc501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b8106c3bbbf5bcc95546e09fc0f497bcf296924c6a1381d694af723cd690f1fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8106c3bbbf5bcc95546e09fc0f497bcf296924c6a1381d694af723cd690f1fb->enter($__internal_b8106c3bbbf5bcc95546e09fc0f497bcf296924c6a1381d694af723cd690f1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b8106c3bbbf5bcc95546e09fc0f497bcf296924c6a1381d694af723cd690f1fb->leave($__internal_b8106c3bbbf5bcc95546e09fc0f497bcf296924c6a1381d694af723cd690f1fb_prof);

        
        $__internal_8729bdf6be64b7a0b718c5716db680db0f47beb15986ec274a40248e657dc501->leave($__internal_8729bdf6be64b7a0b718c5716db680db0f47beb15986ec274a40248e657dc501_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_59c111fc7b46a0e2ffa3f3e23b60c82f93f7dabc61ca8cdd3c0aba0237a85dfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59c111fc7b46a0e2ffa3f3e23b60c82f93f7dabc61ca8cdd3c0aba0237a85dfe->enter($__internal_59c111fc7b46a0e2ffa3f3e23b60c82f93f7dabc61ca8cdd3c0aba0237a85dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c305b65d6d12e834773d22ca8573132edeb0625c21521c5a0e0389fc55d96ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c305b65d6d12e834773d22ca8573132edeb0625c21521c5a0e0389fc55d96ce->enter($__internal_4c305b65d6d12e834773d22ca8573132edeb0625c21521c5a0e0389fc55d96ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_4c305b65d6d12e834773d22ca8573132edeb0625c21521c5a0e0389fc55d96ce->leave($__internal_4c305b65d6d12e834773d22ca8573132edeb0625c21521c5a0e0389fc55d96ce_prof);

        
        $__internal_59c111fc7b46a0e2ffa3f3e23b60c82f93f7dabc61ca8cdd3c0aba0237a85dfe->leave($__internal_59c111fc7b46a0e2ffa3f3e23b60c82f93f7dabc61ca8cdd3c0aba0237a85dfe_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
