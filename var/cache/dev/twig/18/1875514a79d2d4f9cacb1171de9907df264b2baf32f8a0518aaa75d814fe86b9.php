<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0f52fd5d75bf84a2e90fc07ec2872336c4eb2373bdaef862c6473dde17dc8724 extends Twig_Template
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
        $__internal_ba7834ad92cdb1d8471003fa9c86c194e85bbe7b337131d4da6906de9792dade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba7834ad92cdb1d8471003fa9c86c194e85bbe7b337131d4da6906de9792dade->enter($__internal_ba7834ad92cdb1d8471003fa9c86c194e85bbe7b337131d4da6906de9792dade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_3c66386d5db385110fdc75a8a740695fd6729c2c1905c9d90e72a568fe3356ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c66386d5db385110fdc75a8a740695fd6729c2c1905c9d90e72a568fe3356ed->enter($__internal_3c66386d5db385110fdc75a8a740695fd6729c2c1905c9d90e72a568fe3356ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ba7834ad92cdb1d8471003fa9c86c194e85bbe7b337131d4da6906de9792dade->leave($__internal_ba7834ad92cdb1d8471003fa9c86c194e85bbe7b337131d4da6906de9792dade_prof);

        
        $__internal_3c66386d5db385110fdc75a8a740695fd6729c2c1905c9d90e72a568fe3356ed->leave($__internal_3c66386d5db385110fdc75a8a740695fd6729c2c1905c9d90e72a568fe3356ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
