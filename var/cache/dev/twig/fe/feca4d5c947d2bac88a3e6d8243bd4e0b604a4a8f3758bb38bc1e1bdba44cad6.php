<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_71e9dcbef320040219a1db1e2fb8b698e8c8d462086ee2564e2982396dc53d5e extends Twig_Template
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
        $__internal_b17eeb8dfe69c6f546ed68cfc86910761865c369ce2de94039f85e301deaac28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b17eeb8dfe69c6f546ed68cfc86910761865c369ce2de94039f85e301deaac28->enter($__internal_b17eeb8dfe69c6f546ed68cfc86910761865c369ce2de94039f85e301deaac28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_7754793a5f24953f90ebd7e44299e609d6e42667c24f6047a134916c170b7f3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7754793a5f24953f90ebd7e44299e609d6e42667c24f6047a134916c170b7f3d->enter($__internal_7754793a5f24953f90ebd7e44299e609d6e42667c24f6047a134916c170b7f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_b17eeb8dfe69c6f546ed68cfc86910761865c369ce2de94039f85e301deaac28->leave($__internal_b17eeb8dfe69c6f546ed68cfc86910761865c369ce2de94039f85e301deaac28_prof);

        
        $__internal_7754793a5f24953f90ebd7e44299e609d6e42667c24f6047a134916c170b7f3d->leave($__internal_7754793a5f24953f90ebd7e44299e609d6e42667c24f6047a134916c170b7f3d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
