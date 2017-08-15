<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_cd51f700ad647e562be98ad3b02868fd8b86a17a5ef2bd8021a18c9de9ad2f5d extends Twig_Template
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
        $__internal_8839b7ba87d3b0ffbef9d7f81534790e043dcffcedf1f253d2d33693af3fdc0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8839b7ba87d3b0ffbef9d7f81534790e043dcffcedf1f253d2d33693af3fdc0c->enter($__internal_8839b7ba87d3b0ffbef9d7f81534790e043dcffcedf1f253d2d33693af3fdc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_b0fcf68fd2d7fae9e5b414042f0ea97a0ecdd1b3c1c741ebf408fcfb11704ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0fcf68fd2d7fae9e5b414042f0ea97a0ecdd1b3c1c741ebf408fcfb11704ae3->enter($__internal_b0fcf68fd2d7fae9e5b414042f0ea97a0ecdd1b3c1c741ebf408fcfb11704ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_8839b7ba87d3b0ffbef9d7f81534790e043dcffcedf1f253d2d33693af3fdc0c->leave($__internal_8839b7ba87d3b0ffbef9d7f81534790e043dcffcedf1f253d2d33693af3fdc0c_prof);

        
        $__internal_b0fcf68fd2d7fae9e5b414042f0ea97a0ecdd1b3c1c741ebf408fcfb11704ae3->leave($__internal_b0fcf68fd2d7fae9e5b414042f0ea97a0ecdd1b3c1c741ebf408fcfb11704ae3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
