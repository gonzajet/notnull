<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a92cbbfa89cf4291d5cd0d4b349a43cb1b7e0e7cd48659c3f8735b3fe74d4a28 extends Twig_Template
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
        $__internal_84fc9b3afd090f82881cc7491d415003ea7334e4795f1197c29dd4e1ec5f78d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84fc9b3afd090f82881cc7491d415003ea7334e4795f1197c29dd4e1ec5f78d1->enter($__internal_84fc9b3afd090f82881cc7491d415003ea7334e4795f1197c29dd4e1ec5f78d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_6eb982c9ea7d07950579a4a3a0b85fb57a2dad5a6ff81b4944735d72c1c576df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eb982c9ea7d07950579a4a3a0b85fb57a2dad5a6ff81b4944735d72c1c576df->enter($__internal_6eb982c9ea7d07950579a4a3a0b85fb57a2dad5a6ff81b4944735d72c1c576df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_84fc9b3afd090f82881cc7491d415003ea7334e4795f1197c29dd4e1ec5f78d1->leave($__internal_84fc9b3afd090f82881cc7491d415003ea7334e4795f1197c29dd4e1ec5f78d1_prof);

        
        $__internal_6eb982c9ea7d07950579a4a3a0b85fb57a2dad5a6ff81b4944735d72c1c576df->leave($__internal_6eb982c9ea7d07950579a4a3a0b85fb57a2dad5a6ff81b4944735d72c1c576df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
