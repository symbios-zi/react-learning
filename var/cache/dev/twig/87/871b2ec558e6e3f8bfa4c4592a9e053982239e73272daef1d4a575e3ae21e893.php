<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ec1d7375e20d3f49b5b347decaa1bb97b35616e5a49d90689b7e87f4c24acf28 extends Twig_Template
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
        $__internal_023945d30f2af9e8e30398771ac5f0d4e34f9c6f3066121cb2df4144afd7c993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_023945d30f2af9e8e30398771ac5f0d4e34f9c6f3066121cb2df4144afd7c993->enter($__internal_023945d30f2af9e8e30398771ac5f0d4e34f9c6f3066121cb2df4144afd7c993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_a58a36dd6e2e96e72679b8201178a4e630f654f6e479d83391ce261e608468e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a58a36dd6e2e96e72679b8201178a4e630f654f6e479d83391ce261e608468e3->enter($__internal_a58a36dd6e2e96e72679b8201178a4e630f654f6e479d83391ce261e608468e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_023945d30f2af9e8e30398771ac5f0d4e34f9c6f3066121cb2df4144afd7c993->leave($__internal_023945d30f2af9e8e30398771ac5f0d4e34f9c6f3066121cb2df4144afd7c993_prof);

        
        $__internal_a58a36dd6e2e96e72679b8201178a4e630f654f6e479d83391ce261e608468e3->leave($__internal_a58a36dd6e2e96e72679b8201178a4e630f654f6e479d83391ce261e608468e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
