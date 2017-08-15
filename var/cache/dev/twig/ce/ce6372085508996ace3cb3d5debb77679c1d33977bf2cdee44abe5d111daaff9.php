<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5290a5a34246a26095d6bb3b1e2a021f3e474a6860c4498366d440b6a0a3d82b extends Twig_Template
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
        $__internal_09271e547a2dd49faa247f6173f4bce7f673fb7b57604893a72a8b64111e3b06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09271e547a2dd49faa247f6173f4bce7f673fb7b57604893a72a8b64111e3b06->enter($__internal_09271e547a2dd49faa247f6173f4bce7f673fb7b57604893a72a8b64111e3b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_76eb86014b6e8a9e03b51ea669337d88f8b9554c0d13db73acf88342e643a01b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76eb86014b6e8a9e03b51ea669337d88f8b9554c0d13db73acf88342e643a01b->enter($__internal_76eb86014b6e8a9e03b51ea669337d88f8b9554c0d13db73acf88342e643a01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_09271e547a2dd49faa247f6173f4bce7f673fb7b57604893a72a8b64111e3b06->leave($__internal_09271e547a2dd49faa247f6173f4bce7f673fb7b57604893a72a8b64111e3b06_prof);

        
        $__internal_76eb86014b6e8a9e03b51ea669337d88f8b9554c0d13db73acf88342e643a01b->leave($__internal_76eb86014b6e8a9e03b51ea669337d88f8b9554c0d13db73acf88342e643a01b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
