<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3e3f39508b4382a848393181ef1fb966c38c4ff5a26a2d0ff786833e01e587dc extends Twig_Template
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
        $__internal_c0103119e1823ece9d11f0d55caff6c7934fdd2f0225d19cc38ea23bf8906f45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0103119e1823ece9d11f0d55caff6c7934fdd2f0225d19cc38ea23bf8906f45->enter($__internal_c0103119e1823ece9d11f0d55caff6c7934fdd2f0225d19cc38ea23bf8906f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_e3ad02c81906592a3985de270c897c997b7f021814d8b30dec85809f164b7ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ad02c81906592a3985de270c897c997b7f021814d8b30dec85809f164b7ec3->enter($__internal_e3ad02c81906592a3985de270c897c997b7f021814d8b30dec85809f164b7ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c0103119e1823ece9d11f0d55caff6c7934fdd2f0225d19cc38ea23bf8906f45->leave($__internal_c0103119e1823ece9d11f0d55caff6c7934fdd2f0225d19cc38ea23bf8906f45_prof);

        
        $__internal_e3ad02c81906592a3985de270c897c997b7f021814d8b30dec85809f164b7ec3->leave($__internal_e3ad02c81906592a3985de270c897c997b7f021814d8b30dec85809f164b7ec3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
