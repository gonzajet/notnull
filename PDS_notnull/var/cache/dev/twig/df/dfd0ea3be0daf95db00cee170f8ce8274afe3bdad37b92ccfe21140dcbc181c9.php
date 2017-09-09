<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_69a85e0faeb202fdc80d16685991e6004823954fd1e5ed4efc384fb53cb8c638 extends Twig_Template
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
        $__internal_baff400cd1a97e8516f91d72e56e4d4527a7512f37333d430c934f49ea035cd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baff400cd1a97e8516f91d72e56e4d4527a7512f37333d430c934f49ea035cd8->enter($__internal_baff400cd1a97e8516f91d72e56e4d4527a7512f37333d430c934f49ea035cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_6b1b983cb08855a6f8fa99ad21485a229cbdff971ccef9663c73f1f86181c4b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b1b983cb08855a6f8fa99ad21485a229cbdff971ccef9663c73f1f86181c4b8->enter($__internal_6b1b983cb08855a6f8fa99ad21485a229cbdff971ccef9663c73f1f86181c4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_baff400cd1a97e8516f91d72e56e4d4527a7512f37333d430c934f49ea035cd8->leave($__internal_baff400cd1a97e8516f91d72e56e4d4527a7512f37333d430c934f49ea035cd8_prof);

        
        $__internal_6b1b983cb08855a6f8fa99ad21485a229cbdff971ccef9663c73f1f86181c4b8->leave($__internal_6b1b983cb08855a6f8fa99ad21485a229cbdff971ccef9663c73f1f86181c4b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
