<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4b7edc73be1df84354e2b6fcc211065fce6f5b9fedf694944c129d535991b375 extends Twig_Template
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
        $__internal_8696c753392ac9b55c096f2f5423a7d92209798636af060c412e9397d12313b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8696c753392ac9b55c096f2f5423a7d92209798636af060c412e9397d12313b9->enter($__internal_8696c753392ac9b55c096f2f5423a7d92209798636af060c412e9397d12313b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_6147e18637c75b1867429ac4163f2c5aff5faabb7ebb6d68c3475b30e0cf0968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6147e18637c75b1867429ac4163f2c5aff5faabb7ebb6d68c3475b30e0cf0968->enter($__internal_6147e18637c75b1867429ac4163f2c5aff5faabb7ebb6d68c3475b30e0cf0968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8696c753392ac9b55c096f2f5423a7d92209798636af060c412e9397d12313b9->leave($__internal_8696c753392ac9b55c096f2f5423a7d92209798636af060c412e9397d12313b9_prof);

        
        $__internal_6147e18637c75b1867429ac4163f2c5aff5faabb7ebb6d68c3475b30e0cf0968->leave($__internal_6147e18637c75b1867429ac4163f2c5aff5faabb7ebb6d68c3475b30e0cf0968_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
