<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e4c16c19f8f2434e75928f1a7ab60aa30c50591555f8553767133b1a1101f476 extends Twig_Template
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
        $__internal_c5e332f1b72b01ed96e5db4180f12ff4157020bf498895e3301633b6a59c1af8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e332f1b72b01ed96e5db4180f12ff4157020bf498895e3301633b6a59c1af8->enter($__internal_c5e332f1b72b01ed96e5db4180f12ff4157020bf498895e3301633b6a59c1af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_3f7cbfa3a68bc4609037a5f2a790b6ec1474a0e1ca74f2627d2bf9d916ca7721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7cbfa3a68bc4609037a5f2a790b6ec1474a0e1ca74f2627d2bf9d916ca7721->enter($__internal_3f7cbfa3a68bc4609037a5f2a790b6ec1474a0e1ca74f2627d2bf9d916ca7721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c5e332f1b72b01ed96e5db4180f12ff4157020bf498895e3301633b6a59c1af8->leave($__internal_c5e332f1b72b01ed96e5db4180f12ff4157020bf498895e3301633b6a59c1af8_prof);

        
        $__internal_3f7cbfa3a68bc4609037a5f2a790b6ec1474a0e1ca74f2627d2bf9d916ca7721->leave($__internal_3f7cbfa3a68bc4609037a5f2a790b6ec1474a0e1ca74f2627d2bf9d916ca7721_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
