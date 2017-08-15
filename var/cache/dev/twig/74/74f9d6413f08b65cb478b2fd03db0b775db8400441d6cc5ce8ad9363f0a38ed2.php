<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_bb39a7468cd9f10b7c36d6f938ae87d2f517859c64820f496837ac04642d093c extends Twig_Template
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
        $__internal_0d80232dcb81d3261864a76fb9ea90bd117b296466181a445169aaae46761434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d80232dcb81d3261864a76fb9ea90bd117b296466181a445169aaae46761434->enter($__internal_0d80232dcb81d3261864a76fb9ea90bd117b296466181a445169aaae46761434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_50f182506f11ebd51b237082f30d444af0eadd569d380bf7a54880c1475ea9c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f182506f11ebd51b237082f30d444af0eadd569d380bf7a54880c1475ea9c9->enter($__internal_50f182506f11ebd51b237082f30d444af0eadd569d380bf7a54880c1475ea9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_0d80232dcb81d3261864a76fb9ea90bd117b296466181a445169aaae46761434->leave($__internal_0d80232dcb81d3261864a76fb9ea90bd117b296466181a445169aaae46761434_prof);

        
        $__internal_50f182506f11ebd51b237082f30d444af0eadd569d380bf7a54880c1475ea9c9->leave($__internal_50f182506f11ebd51b237082f30d444af0eadd569d380bf7a54880c1475ea9c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
