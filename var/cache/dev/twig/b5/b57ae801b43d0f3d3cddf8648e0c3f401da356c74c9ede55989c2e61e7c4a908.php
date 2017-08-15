<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6a70998442965774cc90829eee21db4b47643f5cea3c586197cc7950b57ea4af extends Twig_Template
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
        $__internal_963767b100a77331af92d924695e9d76f20cb2c6d16fba3d6ed9a20349d198fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_963767b100a77331af92d924695e9d76f20cb2c6d16fba3d6ed9a20349d198fd->enter($__internal_963767b100a77331af92d924695e9d76f20cb2c6d16fba3d6ed9a20349d198fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_9e3f18c0a7e0ccd9213c0734a69f44ec06ce82d398401202f03db3f278c4a91c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e3f18c0a7e0ccd9213c0734a69f44ec06ce82d398401202f03db3f278c4a91c->enter($__internal_9e3f18c0a7e0ccd9213c0734a69f44ec06ce82d398401202f03db3f278c4a91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_963767b100a77331af92d924695e9d76f20cb2c6d16fba3d6ed9a20349d198fd->leave($__internal_963767b100a77331af92d924695e9d76f20cb2c6d16fba3d6ed9a20349d198fd_prof);

        
        $__internal_9e3f18c0a7e0ccd9213c0734a69f44ec06ce82d398401202f03db3f278c4a91c->leave($__internal_9e3f18c0a7e0ccd9213c0734a69f44ec06ce82d398401202f03db3f278c4a91c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
