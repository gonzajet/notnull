<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_2e228051c03e77a1b82ee3800c4acabc8fe02ca2c249317a943d16608030b111 extends Twig_Template
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
        $__internal_755265d5a120b95b46f901ac7aaccfb720f2cde210e39c1697a9eb6e0e64a436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_755265d5a120b95b46f901ac7aaccfb720f2cde210e39c1697a9eb6e0e64a436->enter($__internal_755265d5a120b95b46f901ac7aaccfb720f2cde210e39c1697a9eb6e0e64a436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_1c449e71c4ce581fd984dd6d24932142e1afcca295604949f5253d01c019adaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c449e71c4ce581fd984dd6d24932142e1afcca295604949f5253d01c019adaa->enter($__internal_1c449e71c4ce581fd984dd6d24932142e1afcca295604949f5253d01c019adaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_755265d5a120b95b46f901ac7aaccfb720f2cde210e39c1697a9eb6e0e64a436->leave($__internal_755265d5a120b95b46f901ac7aaccfb720f2cde210e39c1697a9eb6e0e64a436_prof);

        
        $__internal_1c449e71c4ce581fd984dd6d24932142e1afcca295604949f5253d01c019adaa->leave($__internal_1c449e71c4ce581fd984dd6d24932142e1afcca295604949f5253d01c019adaa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
