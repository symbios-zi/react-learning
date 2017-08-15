<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_6078d66a3b1cce9386b9eab8f49655299b3c02aa4525f8330013081a37aee740 extends Twig_Template
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
        $__internal_0ea9b042b6be8e213fe0327d4e130761c561fe783b2f600a09d9da99343109f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea9b042b6be8e213fe0327d4e130761c561fe783b2f600a09d9da99343109f6->enter($__internal_0ea9b042b6be8e213fe0327d4e130761c561fe783b2f600a09d9da99343109f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_3c24392b6b0aca99fbae492f266643a1a70991cf2bd72f9792def72ed6701992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c24392b6b0aca99fbae492f266643a1a70991cf2bd72f9792def72ed6701992->enter($__internal_3c24392b6b0aca99fbae492f266643a1a70991cf2bd72f9792def72ed6701992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0ea9b042b6be8e213fe0327d4e130761c561fe783b2f600a09d9da99343109f6->leave($__internal_0ea9b042b6be8e213fe0327d4e130761c561fe783b2f600a09d9da99343109f6_prof);

        
        $__internal_3c24392b6b0aca99fbae492f266643a1a70991cf2bd72f9792def72ed6701992->leave($__internal_3c24392b6b0aca99fbae492f266643a1a70991cf2bd72f9792def72ed6701992_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
