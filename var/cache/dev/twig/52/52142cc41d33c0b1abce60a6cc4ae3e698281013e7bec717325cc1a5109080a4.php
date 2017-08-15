<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c9bae5203b5f622841ee972dd404aabacc43f83c37f85914e94ff6cacd161c1e extends Twig_Template
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
        $__internal_4cfba4af9d17a79bcc9dd04f0dbf4a1323adda6d623915061e6a6c5866ca8fca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cfba4af9d17a79bcc9dd04f0dbf4a1323adda6d623915061e6a6c5866ca8fca->enter($__internal_4cfba4af9d17a79bcc9dd04f0dbf4a1323adda6d623915061e6a6c5866ca8fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_197c41b1aab0d52fed695c9a272758c91d897b9022bb78abc00b19e52e8d245e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197c41b1aab0d52fed695c9a272758c91d897b9022bb78abc00b19e52e8d245e->enter($__internal_197c41b1aab0d52fed695c9a272758c91d897b9022bb78abc00b19e52e8d245e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4cfba4af9d17a79bcc9dd04f0dbf4a1323adda6d623915061e6a6c5866ca8fca->leave($__internal_4cfba4af9d17a79bcc9dd04f0dbf4a1323adda6d623915061e6a6c5866ca8fca_prof);

        
        $__internal_197c41b1aab0d52fed695c9a272758c91d897b9022bb78abc00b19e52e8d245e->leave($__internal_197c41b1aab0d52fed695c9a272758c91d897b9022bb78abc00b19e52e8d245e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
