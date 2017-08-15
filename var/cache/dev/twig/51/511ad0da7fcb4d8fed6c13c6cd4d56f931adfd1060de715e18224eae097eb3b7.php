<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2238b248ff0f46ca21dbcfe21b99cf074d67efd9ad9c11370b8ff3be4595c417 extends Twig_Template
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
        $__internal_76e8d3371ab5051e456a624ae4c74ac65c9beee705c4fc9c9445b4e824f6d044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76e8d3371ab5051e456a624ae4c74ac65c9beee705c4fc9c9445b4e824f6d044->enter($__internal_76e8d3371ab5051e456a624ae4c74ac65c9beee705c4fc9c9445b4e824f6d044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_a913aa3b6b89237a3815bb03c0ac5c948ad7e5c4ba6c7f0ae19c73017d19f6c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a913aa3b6b89237a3815bb03c0ac5c948ad7e5c4ba6c7f0ae19c73017d19f6c2->enter($__internal_a913aa3b6b89237a3815bb03c0ac5c948ad7e5c4ba6c7f0ae19c73017d19f6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_76e8d3371ab5051e456a624ae4c74ac65c9beee705c4fc9c9445b4e824f6d044->leave($__internal_76e8d3371ab5051e456a624ae4c74ac65c9beee705c4fc9c9445b4e824f6d044_prof);

        
        $__internal_a913aa3b6b89237a3815bb03c0ac5c948ad7e5c4ba6c7f0ae19c73017d19f6c2->leave($__internal_a913aa3b6b89237a3815bb03c0ac5c948ad7e5c4ba6c7f0ae19c73017d19f6c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
