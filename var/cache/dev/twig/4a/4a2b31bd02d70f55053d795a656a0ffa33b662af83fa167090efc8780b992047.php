<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_5a662e8eec515ce4837d24b725f3c9d672780393ed74b053347a015fe109fc8c extends Twig_Template
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
        $__internal_a63eaa27ad2da5df06cb9098783e4ab42406bc267f1114f70977a85376ba8492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a63eaa27ad2da5df06cb9098783e4ab42406bc267f1114f70977a85376ba8492->enter($__internal_a63eaa27ad2da5df06cb9098783e4ab42406bc267f1114f70977a85376ba8492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_debf0eabb221561e86f99c91c28a79f8dd940ac4935a04be456cdd0df3d08c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_debf0eabb221561e86f99c91c28a79f8dd940ac4935a04be456cdd0df3d08c0e->enter($__internal_debf0eabb221561e86f99c91c28a79f8dd940ac4935a04be456cdd0df3d08c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a63eaa27ad2da5df06cb9098783e4ab42406bc267f1114f70977a85376ba8492->leave($__internal_a63eaa27ad2da5df06cb9098783e4ab42406bc267f1114f70977a85376ba8492_prof);

        
        $__internal_debf0eabb221561e86f99c91c28a79f8dd940ac4935a04be456cdd0df3d08c0e->leave($__internal_debf0eabb221561e86f99c91c28a79f8dd940ac4935a04be456cdd0df3d08c0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
