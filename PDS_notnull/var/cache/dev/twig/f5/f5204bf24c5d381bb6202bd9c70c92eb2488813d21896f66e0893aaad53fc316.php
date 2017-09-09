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
        $__internal_907f33b942207798e255a2ec2bc8e9de41c6470ef0801d4569332c15de05176b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_907f33b942207798e255a2ec2bc8e9de41c6470ef0801d4569332c15de05176b->enter($__internal_907f33b942207798e255a2ec2bc8e9de41c6470ef0801d4569332c15de05176b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_2c3b2aaad7d7946b460ff3ac299d3217532e25b44101c4ff0bb860703e04ecde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3b2aaad7d7946b460ff3ac299d3217532e25b44101c4ff0bb860703e04ecde->enter($__internal_2c3b2aaad7d7946b460ff3ac299d3217532e25b44101c4ff0bb860703e04ecde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_907f33b942207798e255a2ec2bc8e9de41c6470ef0801d4569332c15de05176b->leave($__internal_907f33b942207798e255a2ec2bc8e9de41c6470ef0801d4569332c15de05176b_prof);

        
        $__internal_2c3b2aaad7d7946b460ff3ac299d3217532e25b44101c4ff0bb860703e04ecde->leave($__internal_2c3b2aaad7d7946b460ff3ac299d3217532e25b44101c4ff0bb860703e04ecde_prof);

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
