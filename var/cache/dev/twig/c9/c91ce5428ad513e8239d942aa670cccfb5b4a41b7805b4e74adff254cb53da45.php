<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c4ce776cdc8e5090498641af38149b7c0f19f0a052d446f69ef69ea45e261a9f extends Twig_Template
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
        $__internal_8f3eaf9ce33197487ea33814fabc39d274ba480c02613c442104298831257ffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f3eaf9ce33197487ea33814fabc39d274ba480c02613c442104298831257ffd->enter($__internal_8f3eaf9ce33197487ea33814fabc39d274ba480c02613c442104298831257ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_26d22ccdec538394534537a246cd4d4b153fe2f1d12f83a124603cfef21efd74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d22ccdec538394534537a246cd4d4b153fe2f1d12f83a124603cfef21efd74->enter($__internal_26d22ccdec538394534537a246cd4d4b153fe2f1d12f83a124603cfef21efd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8f3eaf9ce33197487ea33814fabc39d274ba480c02613c442104298831257ffd->leave($__internal_8f3eaf9ce33197487ea33814fabc39d274ba480c02613c442104298831257ffd_prof);

        
        $__internal_26d22ccdec538394534537a246cd4d4b153fe2f1d12f83a124603cfef21efd74->leave($__internal_26d22ccdec538394534537a246cd4d4b153fe2f1d12f83a124603cfef21efd74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
