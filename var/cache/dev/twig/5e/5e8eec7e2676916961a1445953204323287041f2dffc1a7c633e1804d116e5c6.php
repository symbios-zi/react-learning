<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d78503504fb6b096f928955d266daa015d957a8b58d47e03bfb63bdce6b1203b extends Twig_Template
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
        $__internal_5d277b37d8bf3e05c4ad91a279d8eedd88ea4443a47e4d371f8c5b612732e6f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d277b37d8bf3e05c4ad91a279d8eedd88ea4443a47e4d371f8c5b612732e6f5->enter($__internal_5d277b37d8bf3e05c4ad91a279d8eedd88ea4443a47e4d371f8c5b612732e6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_c6f682463d6436dc5ecb241d4ea820b1a290b1d7fa4f8534c12d37cad9e67497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f682463d6436dc5ecb241d4ea820b1a290b1d7fa4f8534c12d37cad9e67497->enter($__internal_c6f682463d6436dc5ecb241d4ea820b1a290b1d7fa4f8534c12d37cad9e67497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_5d277b37d8bf3e05c4ad91a279d8eedd88ea4443a47e4d371f8c5b612732e6f5->leave($__internal_5d277b37d8bf3e05c4ad91a279d8eedd88ea4443a47e4d371f8c5b612732e6f5_prof);

        
        $__internal_c6f682463d6436dc5ecb241d4ea820b1a290b1d7fa4f8534c12d37cad9e67497->leave($__internal_c6f682463d6436dc5ecb241d4ea820b1a290b1d7fa4f8534c12d37cad9e67497_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
