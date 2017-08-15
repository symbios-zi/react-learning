<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
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
        $__internal_48b397e50557b4c306240cfa71e4d92c2be4189e8d80ec7d5e8d39e02b014405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b397e50557b4c306240cfa71e4d92c2be4189e8d80ec7d5e8d39e02b014405->enter($__internal_48b397e50557b4c306240cfa71e4d92c2be4189e8d80ec7d5e8d39e02b014405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_64f6ec7ca0702d14925254cfa7c196b4994da54282d83127a7eb084cdd08112a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64f6ec7ca0702d14925254cfa7c196b4994da54282d83127a7eb084cdd08112a->enter($__internal_64f6ec7ca0702d14925254cfa7c196b4994da54282d83127a7eb084cdd08112a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/app.css"), "html", null, true);
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
        
        $__internal_48b397e50557b4c306240cfa71e4d92c2be4189e8d80ec7d5e8d39e02b014405->leave($__internal_48b397e50557b4c306240cfa71e4d92c2be4189e8d80ec7d5e8d39e02b014405_prof);

        
        $__internal_64f6ec7ca0702d14925254cfa7c196b4994da54282d83127a7eb084cdd08112a->leave($__internal_64f6ec7ca0702d14925254cfa7c196b4994da54282d83127a7eb084cdd08112a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f18a1904d5a88ab716139b9b90c51b3c9ede157a111c236359dc62dce9e7781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f18a1904d5a88ab716139b9b90c51b3c9ede157a111c236359dc62dce9e7781->enter($__internal_3f18a1904d5a88ab716139b9b90c51b3c9ede157a111c236359dc62dce9e7781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9c9a03aa8abe0928cf48833adb1072ca161e2249536507ae02667a8e19354889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c9a03aa8abe0928cf48833adb1072ca161e2249536507ae02667a8e19354889->enter($__internal_9c9a03aa8abe0928cf48833adb1072ca161e2249536507ae02667a8e19354889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9c9a03aa8abe0928cf48833adb1072ca161e2249536507ae02667a8e19354889->leave($__internal_9c9a03aa8abe0928cf48833adb1072ca161e2249536507ae02667a8e19354889_prof);

        
        $__internal_3f18a1904d5a88ab716139b9b90c51b3c9ede157a111c236359dc62dce9e7781->leave($__internal_3f18a1904d5a88ab716139b9b90c51b3c9ede157a111c236359dc62dce9e7781_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_715e2605e1faed6a782186232e61d874be2ef2eab9081979bf68fe3fd2c57aad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_715e2605e1faed6a782186232e61d874be2ef2eab9081979bf68fe3fd2c57aad->enter($__internal_715e2605e1faed6a782186232e61d874be2ef2eab9081979bf68fe3fd2c57aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_106bd90341a71bbe4548cafd1158b6b6996f096cd445819f28a3353c45a4a63e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_106bd90341a71bbe4548cafd1158b6b6996f096cd445819f28a3353c45a4a63e->enter($__internal_106bd90341a71bbe4548cafd1158b6b6996f096cd445819f28a3353c45a4a63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_106bd90341a71bbe4548cafd1158b6b6996f096cd445819f28a3353c45a4a63e->leave($__internal_106bd90341a71bbe4548cafd1158b6b6996f096cd445819f28a3353c45a4a63e_prof);

        
        $__internal_715e2605e1faed6a782186232e61d874be2ef2eab9081979bf68fe3fd2c57aad->leave($__internal_715e2605e1faed6a782186232e61d874be2ef2eab9081979bf68fe3fd2c57aad_prof);

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
        <link rel=\"stylesheet\" href=\"{{ asset('build/css/app.css') }}\">
    </head>
    <body>
        {% block body %}{% endblock %}
        <script src=\"{{ asset('build/app.js') }}\"></script>
    </body>
</html>
", "base.html.twig", "/Users/isymbios/projects/shk/react.dev/app/Resources/views/base.html.twig");
    }
}
