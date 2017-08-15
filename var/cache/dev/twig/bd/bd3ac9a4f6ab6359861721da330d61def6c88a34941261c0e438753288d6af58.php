<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5472197a9615cca948475b890f8f9dbf7313921e10924c2903bc9d99a179f2d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1339352462ef983eb5f2f5f211e80aa22e4d3ce06b7950cf1a032bb7788612cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1339352462ef983eb5f2f5f211e80aa22e4d3ce06b7950cf1a032bb7788612cc->enter($__internal_1339352462ef983eb5f2f5f211e80aa22e4d3ce06b7950cf1a032bb7788612cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_afdc6ea0a57dd5a6850c568c2d941b7671c97092239be2c610f2ff264c6176f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afdc6ea0a57dd5a6850c568c2d941b7671c97092239be2c610f2ff264c6176f3->enter($__internal_afdc6ea0a57dd5a6850c568c2d941b7671c97092239be2c610f2ff264c6176f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1339352462ef983eb5f2f5f211e80aa22e4d3ce06b7950cf1a032bb7788612cc->leave($__internal_1339352462ef983eb5f2f5f211e80aa22e4d3ce06b7950cf1a032bb7788612cc_prof);

        
        $__internal_afdc6ea0a57dd5a6850c568c2d941b7671c97092239be2c610f2ff264c6176f3->leave($__internal_afdc6ea0a57dd5a6850c568c2d941b7671c97092239be2c610f2ff264c6176f3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_da8ed7738fc062aaa17acce23028f96f6631061865423f4645492a5095d3b3be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da8ed7738fc062aaa17acce23028f96f6631061865423f4645492a5095d3b3be->enter($__internal_da8ed7738fc062aaa17acce23028f96f6631061865423f4645492a5095d3b3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b6a1092860795b21838d49e4fe54886b06ddfb142c5ae9c6a4ea5a443a096d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a1092860795b21838d49e4fe54886b06ddfb142c5ae9c6a4ea5a443a096d08->enter($__internal_b6a1092860795b21838d49e4fe54886b06ddfb142c5ae9c6a4ea5a443a096d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b6a1092860795b21838d49e4fe54886b06ddfb142c5ae9c6a4ea5a443a096d08->leave($__internal_b6a1092860795b21838d49e4fe54886b06ddfb142c5ae9c6a4ea5a443a096d08_prof);

        
        $__internal_da8ed7738fc062aaa17acce23028f96f6631061865423f4645492a5095d3b3be->leave($__internal_da8ed7738fc062aaa17acce23028f96f6631061865423f4645492a5095d3b3be_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
