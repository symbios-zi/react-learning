<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_482493807b321864015701795b9c0793e8becb90ab70cf8b176d7d5542d98406 extends Twig_Template
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
        $__internal_468df09a336662181a77e7a22d02ff081c2eb23eb82035355d44a1c50cd6fe4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_468df09a336662181a77e7a22d02ff081c2eb23eb82035355d44a1c50cd6fe4a->enter($__internal_468df09a336662181a77e7a22d02ff081c2eb23eb82035355d44a1c50cd6fe4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_44514e4d15dfb2ea1efe73bd93c97cb085ab550ba8966c7c8ec72f6af2b91269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44514e4d15dfb2ea1efe73bd93c97cb085ab550ba8966c7c8ec72f6af2b91269->enter($__internal_44514e4d15dfb2ea1efe73bd93c97cb085ab550ba8966c7c8ec72f6af2b91269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_468df09a336662181a77e7a22d02ff081c2eb23eb82035355d44a1c50cd6fe4a->leave($__internal_468df09a336662181a77e7a22d02ff081c2eb23eb82035355d44a1c50cd6fe4a_prof);

        
        $__internal_44514e4d15dfb2ea1efe73bd93c97cb085ab550ba8966c7c8ec72f6af2b91269->leave($__internal_44514e4d15dfb2ea1efe73bd93c97cb085ab550ba8966c7c8ec72f6af2b91269_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
