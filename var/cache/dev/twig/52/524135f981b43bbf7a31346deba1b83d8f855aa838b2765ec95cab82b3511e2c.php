<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_02d845a49bdd57a4be066814fe8a9768b23f387ad2777b19ef633ba46046768f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_013fef5421c7b5eedde3dbe23cae0a265f1c2a1b7523019c3b77edd83fe07b31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_013fef5421c7b5eedde3dbe23cae0a265f1c2a1b7523019c3b77edd83fe07b31->enter($__internal_013fef5421c7b5eedde3dbe23cae0a265f1c2a1b7523019c3b77edd83fe07b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_0731c97fa6a25a6827ec095e76c789397a44ed8ab3fc1fd016642ba0890e661f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0731c97fa6a25a6827ec095e76c789397a44ed8ab3fc1fd016642ba0890e661f->enter($__internal_0731c97fa6a25a6827ec095e76c789397a44ed8ab3fc1fd016642ba0890e661f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_013fef5421c7b5eedde3dbe23cae0a265f1c2a1b7523019c3b77edd83fe07b31->leave($__internal_013fef5421c7b5eedde3dbe23cae0a265f1c2a1b7523019c3b77edd83fe07b31_prof);

        
        $__internal_0731c97fa6a25a6827ec095e76c789397a44ed8ab3fc1fd016642ba0890e661f->leave($__internal_0731c97fa6a25a6827ec095e76c789397a44ed8ab3fc1fd016642ba0890e661f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3f23f77679156e464776856008195307c2a1f5e5a214e1b1257a52f38607d12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3f23f77679156e464776856008195307c2a1f5e5a214e1b1257a52f38607d12->enter($__internal_d3f23f77679156e464776856008195307c2a1f5e5a214e1b1257a52f38607d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c47d2ee5e09c14ebf0d78b6ad56e0e1deff2e1e89a5d850f7e5434905ceedf7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47d2ee5e09c14ebf0d78b6ad56e0e1deff2e1e89a5d850f7e5434905ceedf7a->enter($__internal_c47d2ee5e09c14ebf0d78b6ad56e0e1deff2e1e89a5d850f7e5434905ceedf7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c47d2ee5e09c14ebf0d78b6ad56e0e1deff2e1e89a5d850f7e5434905ceedf7a->leave($__internal_c47d2ee5e09c14ebf0d78b6ad56e0e1deff2e1e89a5d850f7e5434905ceedf7a_prof);

        
        $__internal_d3f23f77679156e464776856008195307c2a1f5e5a214e1b1257a52f38607d12->leave($__internal_d3f23f77679156e464776856008195307c2a1f5e5a214e1b1257a52f38607d12_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_03371fe0129e8bd2b5b0b05059840d2a7eea0f08811e52038e31894466a78934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03371fe0129e8bd2b5b0b05059840d2a7eea0f08811e52038e31894466a78934->enter($__internal_03371fe0129e8bd2b5b0b05059840d2a7eea0f08811e52038e31894466a78934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c0e1d289080c301a57c8ce5f53c3bbf6d4bd689dd0dfc4134cba01674ef76b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c0e1d289080c301a57c8ce5f53c3bbf6d4bd689dd0dfc4134cba01674ef76b3->enter($__internal_5c0e1d289080c301a57c8ce5f53c3bbf6d4bd689dd0dfc4134cba01674ef76b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5c0e1d289080c301a57c8ce5f53c3bbf6d4bd689dd0dfc4134cba01674ef76b3->leave($__internal_5c0e1d289080c301a57c8ce5f53c3bbf6d4bd689dd0dfc4134cba01674ef76b3_prof);

        
        $__internal_03371fe0129e8bd2b5b0b05059840d2a7eea0f08811e52038e31894466a78934->leave($__internal_03371fe0129e8bd2b5b0b05059840d2a7eea0f08811e52038e31894466a78934_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
