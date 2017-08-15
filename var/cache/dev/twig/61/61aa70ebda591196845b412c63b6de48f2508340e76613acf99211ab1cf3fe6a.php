<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d851f2e88206afd775c879a81d472d79f5f0112e7fcd98ca143285efcd3b9731 extends Twig_Template
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
        $__internal_a792a75d6dbe2f94b2164e430b0d25f7261ee7aec29acc9f9790b18f137c2032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a792a75d6dbe2f94b2164e430b0d25f7261ee7aec29acc9f9790b18f137c2032->enter($__internal_a792a75d6dbe2f94b2164e430b0d25f7261ee7aec29acc9f9790b18f137c2032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_a5a46f97fbafe9d2620bb925f8ed81b6000583f87a29ed89d00cd5c5bdfdad9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a46f97fbafe9d2620bb925f8ed81b6000583f87a29ed89d00cd5c5bdfdad9f->enter($__internal_a5a46f97fbafe9d2620bb925f8ed81b6000583f87a29ed89d00cd5c5bdfdad9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a792a75d6dbe2f94b2164e430b0d25f7261ee7aec29acc9f9790b18f137c2032->leave($__internal_a792a75d6dbe2f94b2164e430b0d25f7261ee7aec29acc9f9790b18f137c2032_prof);

        
        $__internal_a5a46f97fbafe9d2620bb925f8ed81b6000583f87a29ed89d00cd5c5bdfdad9f->leave($__internal_a5a46f97fbafe9d2620bb925f8ed81b6000583f87a29ed89d00cd5c5bdfdad9f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
