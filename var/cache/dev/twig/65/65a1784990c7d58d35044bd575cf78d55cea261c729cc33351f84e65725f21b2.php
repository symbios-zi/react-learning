<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_5c8e5e128e6626d47f0b56deb7b86d811267c1cae6af4d2e1dec9934ffcbaf55 extends Twig_Template
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
        $__internal_a73ff5f56a31f97625b45bf9bebdb97ed1c123f6c7b1c1bf7b3f91e47ebe9d17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a73ff5f56a31f97625b45bf9bebdb97ed1c123f6c7b1c1bf7b3f91e47ebe9d17->enter($__internal_a73ff5f56a31f97625b45bf9bebdb97ed1c123f6c7b1c1bf7b3f91e47ebe9d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_9a3b24a9c8a5c9eb505be1892196bde7a250f669b765f8fe8feadfa8f2c6e0b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3b24a9c8a5c9eb505be1892196bde7a250f669b765f8fe8feadfa8f2c6e0b4->enter($__internal_9a3b24a9c8a5c9eb505be1892196bde7a250f669b765f8fe8feadfa8f2c6e0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a73ff5f56a31f97625b45bf9bebdb97ed1c123f6c7b1c1bf7b3f91e47ebe9d17->leave($__internal_a73ff5f56a31f97625b45bf9bebdb97ed1c123f6c7b1c1bf7b3f91e47ebe9d17_prof);

        
        $__internal_9a3b24a9c8a5c9eb505be1892196bde7a250f669b765f8fe8feadfa8f2c6e0b4->leave($__internal_9a3b24a9c8a5c9eb505be1892196bde7a250f669b765f8fe8feadfa8f2c6e0b4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
