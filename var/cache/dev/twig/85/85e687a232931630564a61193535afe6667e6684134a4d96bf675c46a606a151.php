<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_58f482e80d81a8d82618b132a63d527961c6902fb254e84dcaf76cf1bb6dc008 extends Twig_Template
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
        $__internal_afc5a5ee77de02f2ddbbdb06c02ef75e3889891ab76f2c13955db8e40c0a95d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afc5a5ee77de02f2ddbbdb06c02ef75e3889891ab76f2c13955db8e40c0a95d3->enter($__internal_afc5a5ee77de02f2ddbbdb06c02ef75e3889891ab76f2c13955db8e40c0a95d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_368812cd9288f0d7273b3b401a1dc948ad6a4898857351183ac07fe70657c071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_368812cd9288f0d7273b3b401a1dc948ad6a4898857351183ac07fe70657c071->enter($__internal_368812cd9288f0d7273b3b401a1dc948ad6a4898857351183ac07fe70657c071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_afc5a5ee77de02f2ddbbdb06c02ef75e3889891ab76f2c13955db8e40c0a95d3->leave($__internal_afc5a5ee77de02f2ddbbdb06c02ef75e3889891ab76f2c13955db8e40c0a95d3_prof);

        
        $__internal_368812cd9288f0d7273b3b401a1dc948ad6a4898857351183ac07fe70657c071->leave($__internal_368812cd9288f0d7273b3b401a1dc948ad6a4898857351183ac07fe70657c071_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
