<?php

/* base.html.twig */
class __TwigTemplate_47fd51b039e5f4fb7e336b9f260737cefed48cbce97d781ee1d74e5c39c4c062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52e925e315a4562a88d717c0d051d45d1cd66a0684b831aec9f3e4d6df7d531f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52e925e315a4562a88d717c0d051d45d1cd66a0684b831aec9f3e4d6df7d531f->enter($__internal_52e925e315a4562a88d717c0d051d45d1cd66a0684b831aec9f3e4d6df7d531f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1c7d505526c8a19a55f5a76f924de57774cfaac925627ec56b9357c777cb88c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c7d505526c8a19a55f5a76f924de57774cfaac925627ec56b9357c777cb88c0->enter($__internal_1c7d505526c8a19a55f5a76f924de57774cfaac925627ec56b9357c777cb88c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/global.css"), "html", null, true);
        echo "\">
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/app.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_52e925e315a4562a88d717c0d051d45d1cd66a0684b831aec9f3e4d6df7d531f->leave($__internal_52e925e315a4562a88d717c0d051d45d1cd66a0684b831aec9f3e4d6df7d531f_prof);

        
        $__internal_1c7d505526c8a19a55f5a76f924de57774cfaac925627ec56b9357c777cb88c0->leave($__internal_1c7d505526c8a19a55f5a76f924de57774cfaac925627ec56b9357c777cb88c0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_78fb68e61e0000548e1ba1fcd18b942f94959cb7d3f9b7847e814bbece174f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78fb68e61e0000548e1ba1fcd18b942f94959cb7d3f9b7847e814bbece174f81->enter($__internal_78fb68e61e0000548e1ba1fcd18b942f94959cb7d3f9b7847e814bbece174f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6506137584dd2f5e9192e2d2700860ed4f83e2f985c40f06b3dd41e4e9449e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6506137584dd2f5e9192e2d2700860ed4f83e2f985c40f06b3dd41e4e9449e70->enter($__internal_6506137584dd2f5e9192e2d2700860ed4f83e2f985c40f06b3dd41e4e9449e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6506137584dd2f5e9192e2d2700860ed4f83e2f985c40f06b3dd41e4e9449e70->leave($__internal_6506137584dd2f5e9192e2d2700860ed4f83e2f985c40f06b3dd41e4e9449e70_prof);

        
        $__internal_78fb68e61e0000548e1ba1fcd18b942f94959cb7d3f9b7847e814bbece174f81->leave($__internal_78fb68e61e0000548e1ba1fcd18b942f94959cb7d3f9b7847e814bbece174f81_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7114bd8bc5a311a581f7fe2173007d190fcd5b541edcb4ae44dc617612d2f175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7114bd8bc5a311a581f7fe2173007d190fcd5b541edcb4ae44dc617612d2f175->enter($__internal_7114bd8bc5a311a581f7fe2173007d190fcd5b541edcb4ae44dc617612d2f175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e1da42cd92f6c0b11fbb804c8f4aef3f0a584314afb079fcba180c1e032dc7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1da42cd92f6c0b11fbb804c8f4aef3f0a584314afb079fcba180c1e032dc7f->enter($__internal_0e1da42cd92f6c0b11fbb804c8f4aef3f0a584314afb079fcba180c1e032dc7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0e1da42cd92f6c0b11fbb804c8f4aef3f0a584314afb079fcba180c1e032dc7f->leave($__internal_0e1da42cd92f6c0b11fbb804c8f4aef3f0a584314afb079fcba180c1e032dc7f_prof);

        
        $__internal_7114bd8bc5a311a581f7fe2173007d190fcd5b541edcb4ae44dc617612d2f175->leave($__internal_7114bd8bc5a311a581f7fe2173007d190fcd5b541edcb4ae44dc617612d2f175_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 10,  64 => 5,  49 => 11,  47 => 10,  41 => 7,  37 => 6,  33 => 5,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('build/global.css') }}\">
    </head>
    <body>
        {% block body %}{% endblock %}
        <script src=\"{{ asset('build/app.js') }}\"></script>
    </body>
</html>
", "base.html.twig", "/var/www/react.dev/app/Resources/views/base.html.twig");
    }
}
