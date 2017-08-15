<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_8c1b7229f37d58e1983aba035fb09422e2028941705f2b5c0631ef2ce67dc990 extends Twig_Template
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
        $__internal_fe2dd69b2181e17c83174b3755b6d3d40350cb5c273c3bda5b977fed7a06b2fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe2dd69b2181e17c83174b3755b6d3d40350cb5c273c3bda5b977fed7a06b2fa->enter($__internal_fe2dd69b2181e17c83174b3755b6d3d40350cb5c273c3bda5b977fed7a06b2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_8684178d01dea8292f8c5f3742bdb0d962ed4ea6b0fdba5821be759b963c5f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8684178d01dea8292f8c5f3742bdb0d962ed4ea6b0fdba5821be759b963c5f66->enter($__internal_8684178d01dea8292f8c5f3742bdb0d962ed4ea6b0fdba5821be759b963c5f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_fe2dd69b2181e17c83174b3755b6d3d40350cb5c273c3bda5b977fed7a06b2fa->leave($__internal_fe2dd69b2181e17c83174b3755b6d3d40350cb5c273c3bda5b977fed7a06b2fa_prof);

        
        $__internal_8684178d01dea8292f8c5f3742bdb0d962ed4ea6b0fdba5821be759b963c5f66->leave($__internal_8684178d01dea8292f8c5f3742bdb0d962ed4ea6b0fdba5821be759b963c5f66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
