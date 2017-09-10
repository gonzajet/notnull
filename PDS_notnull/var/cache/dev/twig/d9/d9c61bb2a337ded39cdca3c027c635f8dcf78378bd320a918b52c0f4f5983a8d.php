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
        $__internal_9f14e459f89b7d30508cdfb1faaa92c59e9808dbc1b52b811814b97dfb42650a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f14e459f89b7d30508cdfb1faaa92c59e9808dbc1b52b811814b97dfb42650a->enter($__internal_9f14e459f89b7d30508cdfb1faaa92c59e9808dbc1b52b811814b97dfb42650a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_c5830160bfc155cdc5f0c88c1b661f3a04524e68effabdc0c9aea9ec0dd450c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5830160bfc155cdc5f0c88c1b661f3a04524e68effabdc0c9aea9ec0dd450c6->enter($__internal_c5830160bfc155cdc5f0c88c1b661f3a04524e68effabdc0c9aea9ec0dd450c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9f14e459f89b7d30508cdfb1faaa92c59e9808dbc1b52b811814b97dfb42650a->leave($__internal_9f14e459f89b7d30508cdfb1faaa92c59e9808dbc1b52b811814b97dfb42650a_prof);

        
        $__internal_c5830160bfc155cdc5f0c88c1b661f3a04524e68effabdc0c9aea9ec0dd450c6->leave($__internal_c5830160bfc155cdc5f0c88c1b661f3a04524e68effabdc0c9aea9ec0dd450c6_prof);

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
