<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_12ceef6175538e89135020ff8cfbd7ecffadfea54fc0de7930b6cc798711c3a9 extends Twig_Template
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
        $__internal_59d7d4fe62cf90ae444a8d1aa682ad2505bc9a26574a5ab5f5e1051c14a0a4fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d7d4fe62cf90ae444a8d1aa682ad2505bc9a26574a5ab5f5e1051c14a0a4fa->enter($__internal_59d7d4fe62cf90ae444a8d1aa682ad2505bc9a26574a5ab5f5e1051c14a0a4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_bd3b3f9c32b1c0115e81f94e0819a878491527841ceb3f87eea6069102494023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3b3f9c32b1c0115e81f94e0819a878491527841ceb3f87eea6069102494023->enter($__internal_bd3b3f9c32b1c0115e81f94e0819a878491527841ceb3f87eea6069102494023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_59d7d4fe62cf90ae444a8d1aa682ad2505bc9a26574a5ab5f5e1051c14a0a4fa->leave($__internal_59d7d4fe62cf90ae444a8d1aa682ad2505bc9a26574a5ab5f5e1051c14a0a4fa_prof);

        
        $__internal_bd3b3f9c32b1c0115e81f94e0819a878491527841ceb3f87eea6069102494023->leave($__internal_bd3b3f9c32b1c0115e81f94e0819a878491527841ceb3f87eea6069102494023_prof);

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
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
