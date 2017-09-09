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
        $__internal_52ed469186031300bb9bdc0fb7096fa3bde7624414faa3100b719dc1e75ae220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52ed469186031300bb9bdc0fb7096fa3bde7624414faa3100b719dc1e75ae220->enter($__internal_52ed469186031300bb9bdc0fb7096fa3bde7624414faa3100b719dc1e75ae220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_728ed593111245530aed2e8bdf9295b78b9537fca9fe1c5003ee39ffa6d17b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_728ed593111245530aed2e8bdf9295b78b9537fca9fe1c5003ee39ffa6d17b90->enter($__internal_728ed593111245530aed2e8bdf9295b78b9537fca9fe1c5003ee39ffa6d17b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_52ed469186031300bb9bdc0fb7096fa3bde7624414faa3100b719dc1e75ae220->leave($__internal_52ed469186031300bb9bdc0fb7096fa3bde7624414faa3100b719dc1e75ae220_prof);

        
        $__internal_728ed593111245530aed2e8bdf9295b78b9537fca9fe1c5003ee39ffa6d17b90->leave($__internal_728ed593111245530aed2e8bdf9295b78b9537fca9fe1c5003ee39ffa6d17b90_prof);

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
