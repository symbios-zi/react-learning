<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_27855908a8d2aa753782c8c6fae419a152fb85ec52e589db0780b5dc6a41addb extends Twig_Template
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
        $__internal_886f6443d1f4bf92ac3802a3fb69252283b104c1a5a3d1faaea92ced65e82fc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_886f6443d1f4bf92ac3802a3fb69252283b104c1a5a3d1faaea92ced65e82fc1->enter($__internal_886f6443d1f4bf92ac3802a3fb69252283b104c1a5a3d1faaea92ced65e82fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_eda3037b845faaf91dfab70cbcf63dc688af907fea2bb0c9f11e79f807182a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda3037b845faaf91dfab70cbcf63dc688af907fea2bb0c9f11e79f807182a22->enter($__internal_eda3037b845faaf91dfab70cbcf63dc688af907fea2bb0c9f11e79f807182a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_886f6443d1f4bf92ac3802a3fb69252283b104c1a5a3d1faaea92ced65e82fc1->leave($__internal_886f6443d1f4bf92ac3802a3fb69252283b104c1a5a3d1faaea92ced65e82fc1_prof);

        
        $__internal_eda3037b845faaf91dfab70cbcf63dc688af907fea2bb0c9f11e79f807182a22->leave($__internal_eda3037b845faaf91dfab70cbcf63dc688af907fea2bb0c9f11e79f807182a22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
