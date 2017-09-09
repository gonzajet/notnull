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
        $__internal_cff8f1a812f1ee4911bf844ca22c17a7b5b011f7e93bb2b96c91bd472b266c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cff8f1a812f1ee4911bf844ca22c17a7b5b011f7e93bb2b96c91bd472b266c4f->enter($__internal_cff8f1a812f1ee4911bf844ca22c17a7b5b011f7e93bb2b96c91bd472b266c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_40038ccb9bbfd91c03eab122015e1b880f852c552196b67262d8cc71cc35ab57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40038ccb9bbfd91c03eab122015e1b880f852c552196b67262d8cc71cc35ab57->enter($__internal_40038ccb9bbfd91c03eab122015e1b880f852c552196b67262d8cc71cc35ab57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_cff8f1a812f1ee4911bf844ca22c17a7b5b011f7e93bb2b96c91bd472b266c4f->leave($__internal_cff8f1a812f1ee4911bf844ca22c17a7b5b011f7e93bb2b96c91bd472b266c4f_prof);

        
        $__internal_40038ccb9bbfd91c03eab122015e1b880f852c552196b67262d8cc71cc35ab57->leave($__internal_40038ccb9bbfd91c03eab122015e1b880f852c552196b67262d8cc71cc35ab57_prof);

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
