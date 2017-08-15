<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_820c3fa1dd363d295486b680cc8d50ef7f8b7edbde760e33ea225f1c1ffc5973 extends Twig_Template
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
        $__internal_7964fef79f01bcaa774f7d11e650aaa0fa87604f2b1f862054753d2ac4e582b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7964fef79f01bcaa774f7d11e650aaa0fa87604f2b1f862054753d2ac4e582b8->enter($__internal_7964fef79f01bcaa774f7d11e650aaa0fa87604f2b1f862054753d2ac4e582b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_d084269a5596fcfa96d0e4693ca911b0f4f1685e6d461b086897a5585494b3f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d084269a5596fcfa96d0e4693ca911b0f4f1685e6d461b086897a5585494b3f8->enter($__internal_d084269a5596fcfa96d0e4693ca911b0f4f1685e6d461b086897a5585494b3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7964fef79f01bcaa774f7d11e650aaa0fa87604f2b1f862054753d2ac4e582b8->leave($__internal_7964fef79f01bcaa774f7d11e650aaa0fa87604f2b1f862054753d2ac4e582b8_prof);

        
        $__internal_d084269a5596fcfa96d0e4693ca911b0f4f1685e6d461b086897a5585494b3f8->leave($__internal_d084269a5596fcfa96d0e4693ca911b0f4f1685e6d461b086897a5585494b3f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
