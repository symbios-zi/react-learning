<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_b65ab6b1d8e7083f1e0f3d23a73dbf55dc3df57b434c7617b736abb9ea4a4b99 extends Twig_Template
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
        $__internal_57f1fafca9103c623399c016cc3b8c6004e336a6a7fcb5c4cfbf92b0ea278908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f1fafca9103c623399c016cc3b8c6004e336a6a7fcb5c4cfbf92b0ea278908->enter($__internal_57f1fafca9103c623399c016cc3b8c6004e336a6a7fcb5c4cfbf92b0ea278908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_3807bdbcb0a4a441b1de0047563e8a1fd5b86d5035f9334aa09adb0223039d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3807bdbcb0a4a441b1de0047563e8a1fd5b86d5035f9334aa09adb0223039d9b->enter($__internal_3807bdbcb0a4a441b1de0047563e8a1fd5b86d5035f9334aa09adb0223039d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_57f1fafca9103c623399c016cc3b8c6004e336a6a7fcb5c4cfbf92b0ea278908->leave($__internal_57f1fafca9103c623399c016cc3b8c6004e336a6a7fcb5c4cfbf92b0ea278908_prof);

        
        $__internal_3807bdbcb0a4a441b1de0047563e8a1fd5b86d5035f9334aa09adb0223039d9b->leave($__internal_3807bdbcb0a4a441b1de0047563e8a1fd5b86d5035f9334aa09adb0223039d9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/isymbios/projects/shk/react.dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
