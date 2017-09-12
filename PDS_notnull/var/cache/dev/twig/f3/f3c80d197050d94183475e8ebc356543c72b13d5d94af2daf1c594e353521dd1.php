<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_f1ad46441adaaa876ead5e4032cec652eb0eb235e9271099cffa72e8f8522253 extends Twig_Template
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
        $__internal_af71ffb685d995e81937f9babfaee4de56008094906af984242e38e2cf7e7367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af71ffb685d995e81937f9babfaee4de56008094906af984242e38e2cf7e7367->enter($__internal_af71ffb685d995e81937f9babfaee4de56008094906af984242e38e2cf7e7367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_8c91815fd7bc4bea0b6d7f459df1414bf4924e7bc6c535d38016e94317e77e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c91815fd7bc4bea0b6d7f459df1414bf4924e7bc6c535d38016e94317e77e01->enter($__internal_8c91815fd7bc4bea0b6d7f459df1414bf4924e7bc6c535d38016e94317e77e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_af71ffb685d995e81937f9babfaee4de56008094906af984242e38e2cf7e7367->leave($__internal_af71ffb685d995e81937f9babfaee4de56008094906af984242e38e2cf7e7367_prof);

        
        $__internal_8c91815fd7bc4bea0b6d7f459df1414bf4924e7bc6c535d38016e94317e77e01->leave($__internal_8c91815fd7bc4bea0b6d7f459df1414bf4924e7bc6c535d38016e94317e77e01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
