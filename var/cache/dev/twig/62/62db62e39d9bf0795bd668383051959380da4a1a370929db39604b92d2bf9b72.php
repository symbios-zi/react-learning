<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_701dcdd97d37dad2e87d66c4193097c3165f41f9a0e608fa8208817dd4d44b31 extends Twig_Template
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
        $__internal_d94a811e7714c631292f0699bcae45ff3c59fa34941ca423957686477e2f4e3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d94a811e7714c631292f0699bcae45ff3c59fa34941ca423957686477e2f4e3a->enter($__internal_d94a811e7714c631292f0699bcae45ff3c59fa34941ca423957686477e2f4e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_4923be36f345d9bde9f74eb3ae7d60cafb35e610c0684349a1960d316dab777f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4923be36f345d9bde9f74eb3ae7d60cafb35e610c0684349a1960d316dab777f->enter($__internal_4923be36f345d9bde9f74eb3ae7d60cafb35e610c0684349a1960d316dab777f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d94a811e7714c631292f0699bcae45ff3c59fa34941ca423957686477e2f4e3a->leave($__internal_d94a811e7714c631292f0699bcae45ff3c59fa34941ca423957686477e2f4e3a_prof);

        
        $__internal_4923be36f345d9bde9f74eb3ae7d60cafb35e610c0684349a1960d316dab777f->leave($__internal_4923be36f345d9bde9f74eb3ae7d60cafb35e610c0684349a1960d316dab777f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
