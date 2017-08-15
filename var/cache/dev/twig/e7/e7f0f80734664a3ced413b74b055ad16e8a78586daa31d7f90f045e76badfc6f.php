<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_65745dacfda34bf8ca86fd3d02a00a1cfd699b81d46dae317ac597c2e881dfc0 extends Twig_Template
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
        $__internal_99bfbeb667784916fe1dbaf8d74bd46dba72fd2fd8ccfe31f3b2b779d9a88226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99bfbeb667784916fe1dbaf8d74bd46dba72fd2fd8ccfe31f3b2b779d9a88226->enter($__internal_99bfbeb667784916fe1dbaf8d74bd46dba72fd2fd8ccfe31f3b2b779d9a88226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_9a866e5d47dc7d43873b2fe09ae63e6b9372ed1014b9c4753475635a59036e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a866e5d47dc7d43873b2fe09ae63e6b9372ed1014b9c4753475635a59036e2a->enter($__internal_9a866e5d47dc7d43873b2fe09ae63e6b9372ed1014b9c4753475635a59036e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_99bfbeb667784916fe1dbaf8d74bd46dba72fd2fd8ccfe31f3b2b779d9a88226->leave($__internal_99bfbeb667784916fe1dbaf8d74bd46dba72fd2fd8ccfe31f3b2b779d9a88226_prof);

        
        $__internal_9a866e5d47dc7d43873b2fe09ae63e6b9372ed1014b9c4753475635a59036e2a->leave($__internal_9a866e5d47dc7d43873b2fe09ae63e6b9372ed1014b9c4753475635a59036e2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
