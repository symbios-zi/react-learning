<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b7672fd1bd113ead2c0a3d16bc7ba79adfc199b9967edf270a93bc36b311b8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b7672fd1bd113ead2c0a3d16bc7ba79adfc199b9967edf270a93bc36b311b8f->enter($__internal_3b7672fd1bd113ead2c0a3d16bc7ba79adfc199b9967edf270a93bc36b311b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_fd3d4407a4daa020a7558d7e87f5804f85e4975b82cb854c8df2e57660a7ef4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd3d4407a4daa020a7558d7e87f5804f85e4975b82cb854c8df2e57660a7ef4c->enter($__internal_fd3d4407a4daa020a7558d7e87f5804f85e4975b82cb854c8df2e57660a7ef4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_3b7672fd1bd113ead2c0a3d16bc7ba79adfc199b9967edf270a93bc36b311b8f->leave($__internal_3b7672fd1bd113ead2c0a3d16bc7ba79adfc199b9967edf270a93bc36b311b8f_prof);

        
        $__internal_fd3d4407a4daa020a7558d7e87f5804f85e4975b82cb854c8df2e57660a7ef4c->leave($__internal_fd3d4407a4daa020a7558d7e87f5804f85e4975b82cb854c8df2e57660a7ef4c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7324357202750740a3dc93a3a1ffff7817f7b841e0bbd3686ce6d3e6782ebc1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7324357202750740a3dc93a3a1ffff7817f7b841e0bbd3686ce6d3e6782ebc1c->enter($__internal_7324357202750740a3dc93a3a1ffff7817f7b841e0bbd3686ce6d3e6782ebc1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6ceccb3c99aa73ef6868b94801bc49b622a2ef80768f42567d5f5dc8660728c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ceccb3c99aa73ef6868b94801bc49b622a2ef80768f42567d5f5dc8660728c2->enter($__internal_6ceccb3c99aa73ef6868b94801bc49b622a2ef80768f42567d5f5dc8660728c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6ceccb3c99aa73ef6868b94801bc49b622a2ef80768f42567d5f5dc8660728c2->leave($__internal_6ceccb3c99aa73ef6868b94801bc49b622a2ef80768f42567d5f5dc8660728c2_prof);

        
        $__internal_7324357202750740a3dc93a3a1ffff7817f7b841e0bbd3686ce6d3e6782ebc1c->leave($__internal_7324357202750740a3dc93a3a1ffff7817f7b841e0bbd3686ce6d3e6782ebc1c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_39381928761502156fc31c61f88cb6bc1354faa749d9e80ad0ce06aa32f3fab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39381928761502156fc31c61f88cb6bc1354faa749d9e80ad0ce06aa32f3fab0->enter($__internal_39381928761502156fc31c61f88cb6bc1354faa749d9e80ad0ce06aa32f3fab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0eaf6b207c7fe022ba99f1defc8a37af816a73ee957a42ec20ea1b1b89ee7616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eaf6b207c7fe022ba99f1defc8a37af816a73ee957a42ec20ea1b1b89ee7616->enter($__internal_0eaf6b207c7fe022ba99f1defc8a37af816a73ee957a42ec20ea1b1b89ee7616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0eaf6b207c7fe022ba99f1defc8a37af816a73ee957a42ec20ea1b1b89ee7616->leave($__internal_0eaf6b207c7fe022ba99f1defc8a37af816a73ee957a42ec20ea1b1b89ee7616_prof);

        
        $__internal_39381928761502156fc31c61f88cb6bc1354faa749d9e80ad0ce06aa32f3fab0->leave($__internal_39381928761502156fc31c61f88cb6bc1354faa749d9e80ad0ce06aa32f3fab0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_38a38af9ae1441c99c6f78560fec3561d87ca5144d4826b32745de7b87b21e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a38af9ae1441c99c6f78560fec3561d87ca5144d4826b32745de7b87b21e2a->enter($__internal_38a38af9ae1441c99c6f78560fec3561d87ca5144d4826b32745de7b87b21e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d66e8e6661d54adfacce670139cf3f2ba17e078a28ba0b33b951174b4021cd07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66e8e6661d54adfacce670139cf3f2ba17e078a28ba0b33b951174b4021cd07->enter($__internal_d66e8e6661d54adfacce670139cf3f2ba17e078a28ba0b33b951174b4021cd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d66e8e6661d54adfacce670139cf3f2ba17e078a28ba0b33b951174b4021cd07->leave($__internal_d66e8e6661d54adfacce670139cf3f2ba17e078a28ba0b33b951174b4021cd07_prof);

        
        $__internal_38a38af9ae1441c99c6f78560fec3561d87ca5144d4826b32745de7b87b21e2a->leave($__internal_38a38af9ae1441c99c6f78560fec3561d87ca5144d4826b32745de7b87b21e2a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
