<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_124d9dd75c929b55d18962f6bf938051c898074126861dbd40238066259d66b2 extends Twig_Template
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
        $__internal_5e225e5980004b9420f1d9f9da0633fe1195813dc1552b19012e3687890620ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e225e5980004b9420f1d9f9da0633fe1195813dc1552b19012e3687890620ce->enter($__internal_5e225e5980004b9420f1d9f9da0633fe1195813dc1552b19012e3687890620ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_28d7d02c4fea4ee54ee4a38aed825e8454b0796817f3b4bfe8e720ac0fe185b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d7d02c4fea4ee54ee4a38aed825e8454b0796817f3b4bfe8e720ac0fe185b2->enter($__internal_28d7d02c4fea4ee54ee4a38aed825e8454b0796817f3b4bfe8e720ac0fe185b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_5e225e5980004b9420f1d9f9da0633fe1195813dc1552b19012e3687890620ce->leave($__internal_5e225e5980004b9420f1d9f9da0633fe1195813dc1552b19012e3687890620ce_prof);

        
        $__internal_28d7d02c4fea4ee54ee4a38aed825e8454b0796817f3b4bfe8e720ac0fe185b2->leave($__internal_28d7d02c4fea4ee54ee4a38aed825e8454b0796817f3b4bfe8e720ac0fe185b2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
