<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_32933b0dfd2a5074f0eb9d22a082b4fab743a42f9d3929281de967e3f57ce89d extends Twig_Template
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
        $__internal_7f3e86bc52e02f1444f166b481cd0891bb2c13442285d68eabf8b398df23dd50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f3e86bc52e02f1444f166b481cd0891bb2c13442285d68eabf8b398df23dd50->enter($__internal_7f3e86bc52e02f1444f166b481cd0891bb2c13442285d68eabf8b398df23dd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_49bfe22ab284ffa82801a2de5221dc71a0e2c3892d31e07c159aea8d86460c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49bfe22ab284ffa82801a2de5221dc71a0e2c3892d31e07c159aea8d86460c42->enter($__internal_49bfe22ab284ffa82801a2de5221dc71a0e2c3892d31e07c159aea8d86460c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7f3e86bc52e02f1444f166b481cd0891bb2c13442285d68eabf8b398df23dd50->leave($__internal_7f3e86bc52e02f1444f166b481cd0891bb2c13442285d68eabf8b398df23dd50_prof);

        
        $__internal_49bfe22ab284ffa82801a2de5221dc71a0e2c3892d31e07c159aea8d86460c42->leave($__internal_49bfe22ab284ffa82801a2de5221dc71a0e2c3892d31e07c159aea8d86460c42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
