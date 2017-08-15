<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a82370ae76458a5c61e4c6d4c883fbaab43d42597c85b0b54beaf4400025eb71 extends Twig_Template
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
        $__internal_14dbd17176f48de6d4ce1079cebb445e8a65e897d13c864068a10542c07e9bd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14dbd17176f48de6d4ce1079cebb445e8a65e897d13c864068a10542c07e9bd8->enter($__internal_14dbd17176f48de6d4ce1079cebb445e8a65e897d13c864068a10542c07e9bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_70e49b425af6ed8da7d305c06be17c6a1683b2b85853b9e47dfee51988b6aa29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e49b425af6ed8da7d305c06be17c6a1683b2b85853b9e47dfee51988b6aa29->enter($__internal_70e49b425af6ed8da7d305c06be17c6a1683b2b85853b9e47dfee51988b6aa29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_14dbd17176f48de6d4ce1079cebb445e8a65e897d13c864068a10542c07e9bd8->leave($__internal_14dbd17176f48de6d4ce1079cebb445e8a65e897d13c864068a10542c07e9bd8_prof);

        
        $__internal_70e49b425af6ed8da7d305c06be17c6a1683b2b85853b9e47dfee51988b6aa29->leave($__internal_70e49b425af6ed8da7d305c06be17c6a1683b2b85853b9e47dfee51988b6aa29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
