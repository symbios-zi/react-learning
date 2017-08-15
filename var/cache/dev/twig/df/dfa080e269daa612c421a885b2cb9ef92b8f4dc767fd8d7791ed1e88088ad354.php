<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4ea0fb61e9124b98a6f4fefb8c5442657a9fecd68064b979a47c6009818ead9b extends Twig_Template
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
        $__internal_0a482722a961c52fa5603cf50c9648d5908086c98d649d06138591d839495e1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a482722a961c52fa5603cf50c9648d5908086c98d649d06138591d839495e1d->enter($__internal_0a482722a961c52fa5603cf50c9648d5908086c98d649d06138591d839495e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d816dfe972e61e69da0b96e096deb4a4ddb802da91d2222bf821e48d5ceaa3fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d816dfe972e61e69da0b96e096deb4a4ddb802da91d2222bf821e48d5ceaa3fb->enter($__internal_d816dfe972e61e69da0b96e096deb4a4ddb802da91d2222bf821e48d5ceaa3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0a482722a961c52fa5603cf50c9648d5908086c98d649d06138591d839495e1d->leave($__internal_0a482722a961c52fa5603cf50c9648d5908086c98d649d06138591d839495e1d_prof);

        
        $__internal_d816dfe972e61e69da0b96e096deb4a4ddb802da91d2222bf821e48d5ceaa3fb->leave($__internal_d816dfe972e61e69da0b96e096deb4a4ddb802da91d2222bf821e48d5ceaa3fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
