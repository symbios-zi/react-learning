<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_a6258756c609d9966ea5b8713a098e1f5e2e153dc3abde0ae0e67a7b662fcdeb extends Twig_Template
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
        $__internal_93e7822452b6746a73a99a5bb0b6dc573de4c5e9f0f9cd74e55220f020966103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93e7822452b6746a73a99a5bb0b6dc573de4c5e9f0f9cd74e55220f020966103->enter($__internal_93e7822452b6746a73a99a5bb0b6dc573de4c5e9f0f9cd74e55220f020966103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_7898e69040fee294000e3b47069cdada137c0f99e0342352242d0a107f81fadf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7898e69040fee294000e3b47069cdada137c0f99e0342352242d0a107f81fadf->enter($__internal_7898e69040fee294000e3b47069cdada137c0f99e0342352242d0a107f81fadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_93e7822452b6746a73a99a5bb0b6dc573de4c5e9f0f9cd74e55220f020966103->leave($__internal_93e7822452b6746a73a99a5bb0b6dc573de4c5e9f0f9cd74e55220f020966103_prof);

        
        $__internal_7898e69040fee294000e3b47069cdada137c0f99e0342352242d0a107f81fadf->leave($__internal_7898e69040fee294000e3b47069cdada137c0f99e0342352242d0a107f81fadf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
