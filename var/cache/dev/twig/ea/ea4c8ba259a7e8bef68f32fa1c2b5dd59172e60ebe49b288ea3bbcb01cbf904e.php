<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0b0ad4263d379055fb73f54e032e575e75e67954236cd3422b3514e51cd7388c extends Twig_Template
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
        $__internal_d24c61f710004c4a8284d06ab487ea4e9d54ee65e6ab8700b39d877b25e083d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d24c61f710004c4a8284d06ab487ea4e9d54ee65e6ab8700b39d877b25e083d6->enter($__internal_d24c61f710004c4a8284d06ab487ea4e9d54ee65e6ab8700b39d877b25e083d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_ab089238d9e78c04de96aff9e49ccc9b0630d528f0f997b5f5be3eed1c818980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab089238d9e78c04de96aff9e49ccc9b0630d528f0f997b5f5be3eed1c818980->enter($__internal_ab089238d9e78c04de96aff9e49ccc9b0630d528f0f997b5f5be3eed1c818980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d24c61f710004c4a8284d06ab487ea4e9d54ee65e6ab8700b39d877b25e083d6->leave($__internal_d24c61f710004c4a8284d06ab487ea4e9d54ee65e6ab8700b39d877b25e083d6_prof);

        
        $__internal_ab089238d9e78c04de96aff9e49ccc9b0630d528f0f997b5f5be3eed1c818980->leave($__internal_ab089238d9e78c04de96aff9e49ccc9b0630d528f0f997b5f5be3eed1c818980_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
