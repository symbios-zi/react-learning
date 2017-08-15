<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b6975709208f12cfaeb9803ffdf6965fac624c0ba52f0f775711970af923f94c extends Twig_Template
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
        $__internal_faa6a74ceae2f6d554617901c59fe586f34d5cf4c4fcb8f3d40d85efc52e6179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faa6a74ceae2f6d554617901c59fe586f34d5cf4c4fcb8f3d40d85efc52e6179->enter($__internal_faa6a74ceae2f6d554617901c59fe586f34d5cf4c4fcb8f3d40d85efc52e6179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_8d9ba21c3b3cf741ea96857e719b94a7b02fe34ba171e1678b5dc24aa58dfee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9ba21c3b3cf741ea96857e719b94a7b02fe34ba171e1678b5dc24aa58dfee1->enter($__internal_8d9ba21c3b3cf741ea96857e719b94a7b02fe34ba171e1678b5dc24aa58dfee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_faa6a74ceae2f6d554617901c59fe586f34d5cf4c4fcb8f3d40d85efc52e6179->leave($__internal_faa6a74ceae2f6d554617901c59fe586f34d5cf4c4fcb8f3d40d85efc52e6179_prof);

        
        $__internal_8d9ba21c3b3cf741ea96857e719b94a7b02fe34ba171e1678b5dc24aa58dfee1->leave($__internal_8d9ba21c3b3cf741ea96857e719b94a7b02fe34ba171e1678b5dc24aa58dfee1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
