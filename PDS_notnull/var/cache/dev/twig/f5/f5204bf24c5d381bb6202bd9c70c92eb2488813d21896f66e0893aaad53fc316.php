<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_34511abbf5bb8676f8ba8b0b98e2fa3507e90d4c46868d8967d90403c8bdfc0e extends Twig_Template
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
        $__internal_0c06db1626c0dfa91dbd63a095d7ebe1b2c99141fbb3e05a28461a3d9c567025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c06db1626c0dfa91dbd63a095d7ebe1b2c99141fbb3e05a28461a3d9c567025->enter($__internal_0c06db1626c0dfa91dbd63a095d7ebe1b2c99141fbb3e05a28461a3d9c567025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_7e623a913904921f6d957fafc3730a00c1734de470b684cced9ea9f22053486d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e623a913904921f6d957fafc3730a00c1734de470b684cced9ea9f22053486d->enter($__internal_7e623a913904921f6d957fafc3730a00c1734de470b684cced9ea9f22053486d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_0c06db1626c0dfa91dbd63a095d7ebe1b2c99141fbb3e05a28461a3d9c567025->leave($__internal_0c06db1626c0dfa91dbd63a095d7ebe1b2c99141fbb3e05a28461a3d9c567025_prof);

        
        $__internal_7e623a913904921f6d957fafc3730a00c1734de470b684cced9ea9f22053486d->leave($__internal_7e623a913904921f6d957fafc3730a00c1734de470b684cced9ea9f22053486d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
