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
        $__internal_283c54d2ddc0cab8e1f03e204ac181846ddce0934036a86240225647fd2b6d77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_283c54d2ddc0cab8e1f03e204ac181846ddce0934036a86240225647fd2b6d77->enter($__internal_283c54d2ddc0cab8e1f03e204ac181846ddce0934036a86240225647fd2b6d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_53ca89d016ecce9f4b709580df4037f83c794796cc58f4676ddfb6423e060378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ca89d016ecce9f4b709580df4037f83c794796cc58f4676ddfb6423e060378->enter($__internal_53ca89d016ecce9f4b709580df4037f83c794796cc58f4676ddfb6423e060378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_283c54d2ddc0cab8e1f03e204ac181846ddce0934036a86240225647fd2b6d77->leave($__internal_283c54d2ddc0cab8e1f03e204ac181846ddce0934036a86240225647fd2b6d77_prof);

        
        $__internal_53ca89d016ecce9f4b709580df4037f83c794796cc58f4676ddfb6423e060378->leave($__internal_53ca89d016ecce9f4b709580df4037f83c794796cc58f4676ddfb6423e060378_prof);

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
