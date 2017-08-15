<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_955cc17dfa719928ac111330d7ce96faccd6f0e26aba2e98b93882afbcaf683f extends Twig_Template
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
        $__internal_9b63a3d67b6d70119c0c16b9c9910a2ffe6ab99cfd04a5bc3547ce7e0fa828c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b63a3d67b6d70119c0c16b9c9910a2ffe6ab99cfd04a5bc3547ce7e0fa828c2->enter($__internal_9b63a3d67b6d70119c0c16b9c9910a2ffe6ab99cfd04a5bc3547ce7e0fa828c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_a326d9950883dfffb02ba5d1f40a7088cac9766555c37b38ca4ae456ac13320e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a326d9950883dfffb02ba5d1f40a7088cac9766555c37b38ca4ae456ac13320e->enter($__internal_a326d9950883dfffb02ba5d1f40a7088cac9766555c37b38ca4ae456ac13320e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_9b63a3d67b6d70119c0c16b9c9910a2ffe6ab99cfd04a5bc3547ce7e0fa828c2->leave($__internal_9b63a3d67b6d70119c0c16b9c9910a2ffe6ab99cfd04a5bc3547ce7e0fa828c2_prof);

        
        $__internal_a326d9950883dfffb02ba5d1f40a7088cac9766555c37b38ca4ae456ac13320e->leave($__internal_a326d9950883dfffb02ba5d1f40a7088cac9766555c37b38ca4ae456ac13320e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
