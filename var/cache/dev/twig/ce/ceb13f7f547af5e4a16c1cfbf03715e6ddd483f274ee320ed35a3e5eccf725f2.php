<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_c1378f42193d4f7b23b1915b7440c50c6a8ff2b6d8a416c16bef78faf3ae96e3 extends Twig_Template
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
        $__internal_1ff34b2edefb1926c06458076bd7ede5e3c3bcdea8565004938880a3013b7ac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ff34b2edefb1926c06458076bd7ede5e3c3bcdea8565004938880a3013b7ac9->enter($__internal_1ff34b2edefb1926c06458076bd7ede5e3c3bcdea8565004938880a3013b7ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_99f34811cf68e1b1e9c3ced4cbc67c80a4de1578f818cab22d952cf34de70a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f34811cf68e1b1e9c3ced4cbc67c80a4de1578f818cab22d952cf34de70a63->enter($__internal_99f34811cf68e1b1e9c3ced4cbc67c80a4de1578f818cab22d952cf34de70a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_1ff34b2edefb1926c06458076bd7ede5e3c3bcdea8565004938880a3013b7ac9->leave($__internal_1ff34b2edefb1926c06458076bd7ede5e3c3bcdea8565004938880a3013b7ac9_prof);

        
        $__internal_99f34811cf68e1b1e9c3ced4cbc67c80a4de1578f818cab22d952cf34de70a63->leave($__internal_99f34811cf68e1b1e9c3ced4cbc67c80a4de1578f818cab22d952cf34de70a63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
