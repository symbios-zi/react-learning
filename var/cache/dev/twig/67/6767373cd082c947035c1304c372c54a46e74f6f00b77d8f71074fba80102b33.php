<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_af193a305e15e92105d5ffb823e9a400347a32c6e416ee74f13d00ce1a949e52 extends Twig_Template
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
        $__internal_fa762c20a9c4e2c4e43a4ca5d826827a2cefae62c273df770b43c54bd169f1e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa762c20a9c4e2c4e43a4ca5d826827a2cefae62c273df770b43c54bd169f1e8->enter($__internal_fa762c20a9c4e2c4e43a4ca5d826827a2cefae62c273df770b43c54bd169f1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_1773a7b09ad5463e862b5b91708fd0001aeb78cf3d539c068a1069850f0ae6ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1773a7b09ad5463e862b5b91708fd0001aeb78cf3d539c068a1069850f0ae6ad->enter($__internal_1773a7b09ad5463e862b5b91708fd0001aeb78cf3d539c068a1069850f0ae6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_fa762c20a9c4e2c4e43a4ca5d826827a2cefae62c273df770b43c54bd169f1e8->leave($__internal_fa762c20a9c4e2c4e43a4ca5d826827a2cefae62c273df770b43c54bd169f1e8_prof);

        
        $__internal_1773a7b09ad5463e862b5b91708fd0001aeb78cf3d539c068a1069850f0ae6ad->leave($__internal_1773a7b09ad5463e862b5b91708fd0001aeb78cf3d539c068a1069850f0ae6ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
