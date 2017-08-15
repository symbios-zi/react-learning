<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_fe41488acc3417521100e0f07c1fec3596110dade835cd2bbecc8d7f60cf9337 extends Twig_Template
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
        $__internal_a06617b7b187df9c20ce8df5b7a717ea122127d05333a6c5b15dbcb6e3bbd506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a06617b7b187df9c20ce8df5b7a717ea122127d05333a6c5b15dbcb6e3bbd506->enter($__internal_a06617b7b187df9c20ce8df5b7a717ea122127d05333a6c5b15dbcb6e3bbd506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_0f277f4f8f179d48ecdf592fc7e8d4d215afc9e0b7f086ac4ed11042c016bce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f277f4f8f179d48ecdf592fc7e8d4d215afc9e0b7f086ac4ed11042c016bce0->enter($__internal_0f277f4f8f179d48ecdf592fc7e8d4d215afc9e0b7f086ac4ed11042c016bce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a06617b7b187df9c20ce8df5b7a717ea122127d05333a6c5b15dbcb6e3bbd506->leave($__internal_a06617b7b187df9c20ce8df5b7a717ea122127d05333a6c5b15dbcb6e3bbd506_prof);

        
        $__internal_0f277f4f8f179d48ecdf592fc7e8d4d215afc9e0b7f086ac4ed11042c016bce0->leave($__internal_0f277f4f8f179d48ecdf592fc7e8d4d215afc9e0b7f086ac4ed11042c016bce0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
