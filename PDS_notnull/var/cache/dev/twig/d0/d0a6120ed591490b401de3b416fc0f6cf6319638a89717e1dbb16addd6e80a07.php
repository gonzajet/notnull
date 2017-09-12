<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_38a17e55abeb754a46cfb2c3d136d1a878c5a8271d53dacbf4b7a137bdf499d9 extends Twig_Template
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
        $__internal_2350ae029861ad3e6a7d9dcb0070750123b82b7045a339d0d39b0c79b261d8d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2350ae029861ad3e6a7d9dcb0070750123b82b7045a339d0d39b0c79b261d8d6->enter($__internal_2350ae029861ad3e6a7d9dcb0070750123b82b7045a339d0d39b0c79b261d8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_1e70158aade6279ec4c8a64e71bbcc724ea0c3d7b2c500864696de9d4e14b275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e70158aade6279ec4c8a64e71bbcc724ea0c3d7b2c500864696de9d4e14b275->enter($__internal_1e70158aade6279ec4c8a64e71bbcc724ea0c3d7b2c500864696de9d4e14b275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_2350ae029861ad3e6a7d9dcb0070750123b82b7045a339d0d39b0c79b261d8d6->leave($__internal_2350ae029861ad3e6a7d9dcb0070750123b82b7045a339d0d39b0c79b261d8d6_prof);

        
        $__internal_1e70158aade6279ec4c8a64e71bbcc724ea0c3d7b2c500864696de9d4e14b275->leave($__internal_1e70158aade6279ec4c8a64e71bbcc724ea0c3d7b2c500864696de9d4e14b275_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
