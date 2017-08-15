<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_ffab92275824e73ac33adcd297be5b98e43b623c6007dcbde585b2925ecca0d1 extends Twig_Template
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
        $__internal_7845599411ad43c2f7e765dc01e0022f6ed5e8e5b6bbf53f811e4975ee6ce13a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7845599411ad43c2f7e765dc01e0022f6ed5e8e5b6bbf53f811e4975ee6ce13a->enter($__internal_7845599411ad43c2f7e765dc01e0022f6ed5e8e5b6bbf53f811e4975ee6ce13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_2ca859f9acc2c11d089e18ff97611b3409d04f90d23d179699f3e1333d50e6dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca859f9acc2c11d089e18ff97611b3409d04f90d23d179699f3e1333d50e6dd->enter($__internal_2ca859f9acc2c11d089e18ff97611b3409d04f90d23d179699f3e1333d50e6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_7845599411ad43c2f7e765dc01e0022f6ed5e8e5b6bbf53f811e4975ee6ce13a->leave($__internal_7845599411ad43c2f7e765dc01e0022f6ed5e8e5b6bbf53f811e4975ee6ce13a_prof);

        
        $__internal_2ca859f9acc2c11d089e18ff97611b3409d04f90d23d179699f3e1333d50e6dd->leave($__internal_2ca859f9acc2c11d089e18ff97611b3409d04f90d23d179699f3e1333d50e6dd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
