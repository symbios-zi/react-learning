<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6a312865dff10bc0533f3c37be125a17e91023579d9711e8d478be100cd8c786 extends Twig_Template
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
        $__internal_040ec523a9a8a9a2910dc55c61ead0dce2a5d4bae083b48daeb73c837d50f0d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040ec523a9a8a9a2910dc55c61ead0dce2a5d4bae083b48daeb73c837d50f0d4->enter($__internal_040ec523a9a8a9a2910dc55c61ead0dce2a5d4bae083b48daeb73c837d50f0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_9a6e96d5be12a06d971db32fae6868f5a82f5410f627ad36d040502e2d93cc32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a6e96d5be12a06d971db32fae6868f5a82f5410f627ad36d040502e2d93cc32->enter($__internal_9a6e96d5be12a06d971db32fae6868f5a82f5410f627ad36d040502e2d93cc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_040ec523a9a8a9a2910dc55c61ead0dce2a5d4bae083b48daeb73c837d50f0d4->leave($__internal_040ec523a9a8a9a2910dc55c61ead0dce2a5d4bae083b48daeb73c837d50f0d4_prof);

        
        $__internal_9a6e96d5be12a06d971db32fae6868f5a82f5410f627ad36d040502e2d93cc32->leave($__internal_9a6e96d5be12a06d971db32fae6868f5a82f5410f627ad36d040502e2d93cc32_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
