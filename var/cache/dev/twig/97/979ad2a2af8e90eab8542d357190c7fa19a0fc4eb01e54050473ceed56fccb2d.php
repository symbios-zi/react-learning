<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_273cee18401e8a5901317d10a7dc788bd2884c50b01d2a5e78fa1c5587033ef0 extends Twig_Template
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
        $__internal_e5a233b605b4020ff06d0fd9b7a6f9649168e16ba8156cf42dfb80fec3430565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5a233b605b4020ff06d0fd9b7a6f9649168e16ba8156cf42dfb80fec3430565->enter($__internal_e5a233b605b4020ff06d0fd9b7a6f9649168e16ba8156cf42dfb80fec3430565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_6730a00a0ee2e0645b6d67b03f323604e3bdb72fbbb4c433d6fa9b709ee0baf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6730a00a0ee2e0645b6d67b03f323604e3bdb72fbbb4c433d6fa9b709ee0baf9->enter($__internal_6730a00a0ee2e0645b6d67b03f323604e3bdb72fbbb4c433d6fa9b709ee0baf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e5a233b605b4020ff06d0fd9b7a6f9649168e16ba8156cf42dfb80fec3430565->leave($__internal_e5a233b605b4020ff06d0fd9b7a6f9649168e16ba8156cf42dfb80fec3430565_prof);

        
        $__internal_6730a00a0ee2e0645b6d67b03f323604e3bdb72fbbb4c433d6fa9b709ee0baf9->leave($__internal_6730a00a0ee2e0645b6d67b03f323604e3bdb72fbbb4c433d6fa9b709ee0baf9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
