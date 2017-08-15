<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_080b1b81a96a3acaa2397a68fb63b9c44cd5bf2d588c57477472921f0fdcdc20 extends Twig_Template
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
        $__internal_46aa0e69040ecffefc30ebb4f3aa4ccf4b0484a19f5d8a02c362040827dd6d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46aa0e69040ecffefc30ebb4f3aa4ccf4b0484a19f5d8a02c362040827dd6d83->enter($__internal_46aa0e69040ecffefc30ebb4f3aa4ccf4b0484a19f5d8a02c362040827dd6d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_3a1823d0a89a279ebc09da982370a3343b8cd1490af757e6f409ba719cd8cad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a1823d0a89a279ebc09da982370a3343b8cd1490af757e6f409ba719cd8cad6->enter($__internal_3a1823d0a89a279ebc09da982370a3343b8cd1490af757e6f409ba719cd8cad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_46aa0e69040ecffefc30ebb4f3aa4ccf4b0484a19f5d8a02c362040827dd6d83->leave($__internal_46aa0e69040ecffefc30ebb4f3aa4ccf4b0484a19f5d8a02c362040827dd6d83_prof);

        
        $__internal_3a1823d0a89a279ebc09da982370a3343b8cd1490af757e6f409ba719cd8cad6->leave($__internal_3a1823d0a89a279ebc09da982370a3343b8cd1490af757e6f409ba719cd8cad6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
