<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_5ab903d2ed46b8e66e0508e580195b650add5419b40af9a721f11e26e6ff19d3 extends Twig_Template
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
        $__internal_617f4c004a7e55ffd4e177d60eea4f811d4769e8ee8f9d4e208dfd6598ab978f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_617f4c004a7e55ffd4e177d60eea4f811d4769e8ee8f9d4e208dfd6598ab978f->enter($__internal_617f4c004a7e55ffd4e177d60eea4f811d4769e8ee8f9d4e208dfd6598ab978f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_95c97fdd5d8bc6bbc36c6cb47f58160b28d7d03a2af955dcc38252bab2985c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c97fdd5d8bc6bbc36c6cb47f58160b28d7d03a2af955dcc38252bab2985c33->enter($__internal_95c97fdd5d8bc6bbc36c6cb47f58160b28d7d03a2af955dcc38252bab2985c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_617f4c004a7e55ffd4e177d60eea4f811d4769e8ee8f9d4e208dfd6598ab978f->leave($__internal_617f4c004a7e55ffd4e177d60eea4f811d4769e8ee8f9d4e208dfd6598ab978f_prof);

        
        $__internal_95c97fdd5d8bc6bbc36c6cb47f58160b28d7d03a2af955dcc38252bab2985c33->leave($__internal_95c97fdd5d8bc6bbc36c6cb47f58160b28d7d03a2af955dcc38252bab2985c33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
