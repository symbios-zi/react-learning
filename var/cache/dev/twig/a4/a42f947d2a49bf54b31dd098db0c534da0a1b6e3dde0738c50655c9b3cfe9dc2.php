<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0946aa9808eb3669f4271ee15f43e945b9013509a84b464884d1fbc4440d7f5d extends Twig_Template
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
        $__internal_5edd9bfa6792bc11af72997b97862c07f87883a53baef97abcac829835d86f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5edd9bfa6792bc11af72997b97862c07f87883a53baef97abcac829835d86f83->enter($__internal_5edd9bfa6792bc11af72997b97862c07f87883a53baef97abcac829835d86f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_f370311d603c05c298cb1855d55f0df17b2734897d7929c0fed340956da2ba42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f370311d603c05c298cb1855d55f0df17b2734897d7929c0fed340956da2ba42->enter($__internal_f370311d603c05c298cb1855d55f0df17b2734897d7929c0fed340956da2ba42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5edd9bfa6792bc11af72997b97862c07f87883a53baef97abcac829835d86f83->leave($__internal_5edd9bfa6792bc11af72997b97862c07f87883a53baef97abcac829835d86f83_prof);

        
        $__internal_f370311d603c05c298cb1855d55f0df17b2734897d7929c0fed340956da2ba42->leave($__internal_f370311d603c05c298cb1855d55f0df17b2734897d7929c0fed340956da2ba42_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
