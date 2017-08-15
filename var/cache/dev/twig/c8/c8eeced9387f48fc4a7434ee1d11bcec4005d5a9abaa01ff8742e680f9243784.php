<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d0f77dc164e26e520bbffc9446731e225ebe172848d7123bf5f36f7899f13473 extends Twig_Template
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
        $__internal_3f8d99389b382eea373a0f4fcf00d49046b919ba6e30ef0e0fb93a4dfa36baa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f8d99389b382eea373a0f4fcf00d49046b919ba6e30ef0e0fb93a4dfa36baa6->enter($__internal_3f8d99389b382eea373a0f4fcf00d49046b919ba6e30ef0e0fb93a4dfa36baa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_e5c51085a151f9393934723c874ddd5e7847d48b6ce9a233c930a018bc232f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5c51085a151f9393934723c874ddd5e7847d48b6ce9a233c930a018bc232f7a->enter($__internal_e5c51085a151f9393934723c874ddd5e7847d48b6ce9a233c930a018bc232f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_3f8d99389b382eea373a0f4fcf00d49046b919ba6e30ef0e0fb93a4dfa36baa6->leave($__internal_3f8d99389b382eea373a0f4fcf00d49046b919ba6e30ef0e0fb93a4dfa36baa6_prof);

        
        $__internal_e5c51085a151f9393934723c874ddd5e7847d48b6ce9a233c930a018bc232f7a->leave($__internal_e5c51085a151f9393934723c874ddd5e7847d48b6ce9a233c930a018bc232f7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
