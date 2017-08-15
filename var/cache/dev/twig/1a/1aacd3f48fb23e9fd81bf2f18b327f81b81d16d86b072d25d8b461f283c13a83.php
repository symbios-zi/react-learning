<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_32e4c481536383d50cd9dd37f75507a360c64fe4de6b769666c5d971623fa9e5 extends Twig_Template
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
        $__internal_f772445e129e9e893fc2d794e06c9e72b5079a2d8b2fe86dadd27252f6aa7a7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f772445e129e9e893fc2d794e06c9e72b5079a2d8b2fe86dadd27252f6aa7a7f->enter($__internal_f772445e129e9e893fc2d794e06c9e72b5079a2d8b2fe86dadd27252f6aa7a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_f92ba80aa864cff7cbc38fb37ad1701c32ef6532da35f64f8f534ef7185505b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92ba80aa864cff7cbc38fb37ad1701c32ef6532da35f64f8f534ef7185505b2->enter($__internal_f92ba80aa864cff7cbc38fb37ad1701c32ef6532da35f64f8f534ef7185505b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f772445e129e9e893fc2d794e06c9e72b5079a2d8b2fe86dadd27252f6aa7a7f->leave($__internal_f772445e129e9e893fc2d794e06c9e72b5079a2d8b2fe86dadd27252f6aa7a7f_prof);

        
        $__internal_f92ba80aa864cff7cbc38fb37ad1701c32ef6532da35f64f8f534ef7185505b2->leave($__internal_f92ba80aa864cff7cbc38fb37ad1701c32ef6532da35f64f8f534ef7185505b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
