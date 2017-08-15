<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a4ab2ab5081cb2d301b1b36facf3aa3304ef06c5b0f5956a5429d86cde43e6fb extends Twig_Template
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
        $__internal_a350fb64b7cc06f906345355803f30d8d6920abd7fbca3330e9b39ce8f0f746f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a350fb64b7cc06f906345355803f30d8d6920abd7fbca3330e9b39ce8f0f746f->enter($__internal_a350fb64b7cc06f906345355803f30d8d6920abd7fbca3330e9b39ce8f0f746f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_6eb533185a59c2883e6a0b7da10dfbb564708369eff0f26c8f7a5698de4be892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eb533185a59c2883e6a0b7da10dfbb564708369eff0f26c8f7a5698de4be892->enter($__internal_6eb533185a59c2883e6a0b7da10dfbb564708369eff0f26c8f7a5698de4be892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_a350fb64b7cc06f906345355803f30d8d6920abd7fbca3330e9b39ce8f0f746f->leave($__internal_a350fb64b7cc06f906345355803f30d8d6920abd7fbca3330e9b39ce8f0f746f_prof);

        
        $__internal_6eb533185a59c2883e6a0b7da10dfbb564708369eff0f26c8f7a5698de4be892->leave($__internal_6eb533185a59c2883e6a0b7da10dfbb564708369eff0f26c8f7a5698de4be892_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
