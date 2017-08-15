<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_c560977e18401a34ecd7186d332416c9d7348a919654ecc2feb311c4f7da4722 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b9355bc178e54c087c637a8ee6cf29a60bd74b71b5f1fdefa0d00272f35c1db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b9355bc178e54c087c637a8ee6cf29a60bd74b71b5f1fdefa0d00272f35c1db->enter($__internal_1b9355bc178e54c087c637a8ee6cf29a60bd74b71b5f1fdefa0d00272f35c1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_c848328fc305d9afeb73ace4abab8bc00765228825f5b646ae57d7472cce7b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c848328fc305d9afeb73ace4abab8bc00765228825f5b646ae57d7472cce7b04->enter($__internal_c848328fc305d9afeb73ace4abab8bc00765228825f5b646ae57d7472cce7b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_1b9355bc178e54c087c637a8ee6cf29a60bd74b71b5f1fdefa0d00272f35c1db->leave($__internal_1b9355bc178e54c087c637a8ee6cf29a60bd74b71b5f1fdefa0d00272f35c1db_prof);

        
        $__internal_c848328fc305d9afeb73ace4abab8bc00765228825f5b646ae57d7472cce7b04->leave($__internal_c848328fc305d9afeb73ace4abab8bc00765228825f5b646ae57d7472cce7b04_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
