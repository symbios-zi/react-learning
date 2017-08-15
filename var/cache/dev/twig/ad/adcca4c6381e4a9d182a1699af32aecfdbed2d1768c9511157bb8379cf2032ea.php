<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9ec463a5141422177decfe70c9e2421022bc554f5e1b060402d014ad6f52df54 extends Twig_Template
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
        $__internal_a65839a2ee5f759e1875a98f4cb22fcc3fdc77709b4d9a0baa3c76f6746f0adc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a65839a2ee5f759e1875a98f4cb22fcc3fdc77709b4d9a0baa3c76f6746f0adc->enter($__internal_a65839a2ee5f759e1875a98f4cb22fcc3fdc77709b4d9a0baa3c76f6746f0adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_ac917bd07df6a4eb734f640954f5d003b4006cd5212bf562c9406721acb48269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac917bd07df6a4eb734f640954f5d003b4006cd5212bf562c9406721acb48269->enter($__internal_ac917bd07df6a4eb734f640954f5d003b4006cd5212bf562c9406721acb48269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a65839a2ee5f759e1875a98f4cb22fcc3fdc77709b4d9a0baa3c76f6746f0adc->leave($__internal_a65839a2ee5f759e1875a98f4cb22fcc3fdc77709b4d9a0baa3c76f6746f0adc_prof);

        
        $__internal_ac917bd07df6a4eb734f640954f5d003b4006cd5212bf562c9406721acb48269->leave($__internal_ac917bd07df6a4eb734f640954f5d003b4006cd5212bf562c9406721acb48269_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
