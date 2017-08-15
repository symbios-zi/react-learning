<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cf7706c416b3cd469acab90c3254bc1c3067848e1cba22ce48f7f6bcc68a10f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9d224650c22df37de5dfd4fee4760f38c3c45bad55cac711814b574a238a97de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d224650c22df37de5dfd4fee4760f38c3c45bad55cac711814b574a238a97de->enter($__internal_9d224650c22df37de5dfd4fee4760f38c3c45bad55cac711814b574a238a97de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_5eb1cd7f64116da21ab5ae631db0f835a32cbcb54887fe777be237be3a1ba67d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb1cd7f64116da21ab5ae631db0f835a32cbcb54887fe777be237be3a1ba67d->enter($__internal_5eb1cd7f64116da21ab5ae631db0f835a32cbcb54887fe777be237be3a1ba67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d224650c22df37de5dfd4fee4760f38c3c45bad55cac711814b574a238a97de->leave($__internal_9d224650c22df37de5dfd4fee4760f38c3c45bad55cac711814b574a238a97de_prof);

        
        $__internal_5eb1cd7f64116da21ab5ae631db0f835a32cbcb54887fe777be237be3a1ba67d->leave($__internal_5eb1cd7f64116da21ab5ae631db0f835a32cbcb54887fe777be237be3a1ba67d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8889cc0d09bd627b89b48b522163317e4c76fdfe6ce81c0f78cb40d9b4e7d624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8889cc0d09bd627b89b48b522163317e4c76fdfe6ce81c0f78cb40d9b4e7d624->enter($__internal_8889cc0d09bd627b89b48b522163317e4c76fdfe6ce81c0f78cb40d9b4e7d624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_30430c1a1c1db21df56d50a9e7a7475a0b3682ac413191934bfca031ee3095f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30430c1a1c1db21df56d50a9e7a7475a0b3682ac413191934bfca031ee3095f4->enter($__internal_30430c1a1c1db21df56d50a9e7a7475a0b3682ac413191934bfca031ee3095f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_30430c1a1c1db21df56d50a9e7a7475a0b3682ac413191934bfca031ee3095f4->leave($__internal_30430c1a1c1db21df56d50a9e7a7475a0b3682ac413191934bfca031ee3095f4_prof);

        
        $__internal_8889cc0d09bd627b89b48b522163317e4c76fdfe6ce81c0f78cb40d9b4e7d624->leave($__internal_8889cc0d09bd627b89b48b522163317e4c76fdfe6ce81c0f78cb40d9b4e7d624_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_539dbd8b045b6403141ea7aef7d2b27ac93f46160555c3087942e93e7648ca9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_539dbd8b045b6403141ea7aef7d2b27ac93f46160555c3087942e93e7648ca9b->enter($__internal_539dbd8b045b6403141ea7aef7d2b27ac93f46160555c3087942e93e7648ca9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_69febf848a722cf723097b8f745edbb1dfaa9d46658c294ef95ca8bfc6d9f63a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69febf848a722cf723097b8f745edbb1dfaa9d46658c294ef95ca8bfc6d9f63a->enter($__internal_69febf848a722cf723097b8f745edbb1dfaa9d46658c294ef95ca8bfc6d9f63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_69febf848a722cf723097b8f745edbb1dfaa9d46658c294ef95ca8bfc6d9f63a->leave($__internal_69febf848a722cf723097b8f745edbb1dfaa9d46658c294ef95ca8bfc6d9f63a_prof);

        
        $__internal_539dbd8b045b6403141ea7aef7d2b27ac93f46160555c3087942e93e7648ca9b->leave($__internal_539dbd8b045b6403141ea7aef7d2b27ac93f46160555c3087942e93e7648ca9b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0265a7c16093d11f953baa325c6e979a9af2ac097cd90bbd496b56b23e47e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0265a7c16093d11f953baa325c6e979a9af2ac097cd90bbd496b56b23e47e32->enter($__internal_f0265a7c16093d11f953baa325c6e979a9af2ac097cd90bbd496b56b23e47e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd8d30b8d6eea8b837d6baa4295b505cc0cb365e428e1965e5fa447b2ec0a063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd8d30b8d6eea8b837d6baa4295b505cc0cb365e428e1965e5fa447b2ec0a063->enter($__internal_fd8d30b8d6eea8b837d6baa4295b505cc0cb365e428e1965e5fa447b2ec0a063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_fd8d30b8d6eea8b837d6baa4295b505cc0cb365e428e1965e5fa447b2ec0a063->leave($__internal_fd8d30b8d6eea8b837d6baa4295b505cc0cb365e428e1965e5fa447b2ec0a063_prof);

        
        $__internal_f0265a7c16093d11f953baa325c6e979a9af2ac097cd90bbd496b56b23e47e32->leave($__internal_f0265a7c16093d11f953baa325c6e979a9af2ac097cd90bbd496b56b23e47e32_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
