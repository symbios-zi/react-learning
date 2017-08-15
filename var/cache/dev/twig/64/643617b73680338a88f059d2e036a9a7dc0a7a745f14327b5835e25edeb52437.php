<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_0276c52c211fe8c0e2c968491d68e7f9a877bfdcde0b99ea58ca9834a619fa8f extends Twig_Template
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
        $__internal_bad5c01e888af3eb510093234896d14cafd3680c12e2edafbd6b7cd0accd5a58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bad5c01e888af3eb510093234896d14cafd3680c12e2edafbd6b7cd0accd5a58->enter($__internal_bad5c01e888af3eb510093234896d14cafd3680c12e2edafbd6b7cd0accd5a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_cedf7f42dfc19115cecdf45820848e3fa350b0950eff28de1994eef3178da1eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cedf7f42dfc19115cecdf45820848e3fa350b0950eff28de1994eef3178da1eb->enter($__internal_cedf7f42dfc19115cecdf45820848e3fa350b0950eff28de1994eef3178da1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_bad5c01e888af3eb510093234896d14cafd3680c12e2edafbd6b7cd0accd5a58->leave($__internal_bad5c01e888af3eb510093234896d14cafd3680c12e2edafbd6b7cd0accd5a58_prof);

        
        $__internal_cedf7f42dfc19115cecdf45820848e3fa350b0950eff28de1994eef3178da1eb->leave($__internal_cedf7f42dfc19115cecdf45820848e3fa350b0950eff28de1994eef3178da1eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
