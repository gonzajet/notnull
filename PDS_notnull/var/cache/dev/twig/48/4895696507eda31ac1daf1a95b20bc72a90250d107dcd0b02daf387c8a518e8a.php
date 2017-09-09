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
        $__internal_56dda079e9be6bcb577641fb863026f22333e1feb7257f8fdbfe4ee660db4954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56dda079e9be6bcb577641fb863026f22333e1feb7257f8fdbfe4ee660db4954->enter($__internal_56dda079e9be6bcb577641fb863026f22333e1feb7257f8fdbfe4ee660db4954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_95f556a2489da8a02f1c39979ec862001b6cac1b5f11e318fbb579ac3c0ed9d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f556a2489da8a02f1c39979ec862001b6cac1b5f11e318fbb579ac3c0ed9d8->enter($__internal_95f556a2489da8a02f1c39979ec862001b6cac1b5f11e318fbb579ac3c0ed9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_56dda079e9be6bcb577641fb863026f22333e1feb7257f8fdbfe4ee660db4954->leave($__internal_56dda079e9be6bcb577641fb863026f22333e1feb7257f8fdbfe4ee660db4954_prof);

        
        $__internal_95f556a2489da8a02f1c39979ec862001b6cac1b5f11e318fbb579ac3c0ed9d8->leave($__internal_95f556a2489da8a02f1c39979ec862001b6cac1b5f11e318fbb579ac3c0ed9d8_prof);

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
