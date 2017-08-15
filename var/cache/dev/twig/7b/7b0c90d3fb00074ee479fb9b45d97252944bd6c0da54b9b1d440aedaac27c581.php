<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b094c942eed047b1dcae948b51a534926feeb7f044d2de7051993600738ab7ba extends Twig_Template
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
        $__internal_e8373c36fab112f7c16448bec488f1cb8bf9bdbe64fb52402055f194507fdd1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8373c36fab112f7c16448bec488f1cb8bf9bdbe64fb52402055f194507fdd1a->enter($__internal_e8373c36fab112f7c16448bec488f1cb8bf9bdbe64fb52402055f194507fdd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_9f0eb4de94a3b8d47ea2c7438ef1ff133a503ad61aa8f81004bb6b52ec63bdb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f0eb4de94a3b8d47ea2c7438ef1ff133a503ad61aa8f81004bb6b52ec63bdb2->enter($__internal_9f0eb4de94a3b8d47ea2c7438ef1ff133a503ad61aa8f81004bb6b52ec63bdb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e8373c36fab112f7c16448bec488f1cb8bf9bdbe64fb52402055f194507fdd1a->leave($__internal_e8373c36fab112f7c16448bec488f1cb8bf9bdbe64fb52402055f194507fdd1a_prof);

        
        $__internal_9f0eb4de94a3b8d47ea2c7438ef1ff133a503ad61aa8f81004bb6b52ec63bdb2->leave($__internal_9f0eb4de94a3b8d47ea2c7438ef1ff133a503ad61aa8f81004bb6b52ec63bdb2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
