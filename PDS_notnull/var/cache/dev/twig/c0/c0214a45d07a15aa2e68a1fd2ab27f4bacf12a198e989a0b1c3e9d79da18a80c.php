<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_5050281a025901ccf12f747f91bee6db886e2642bbb06bb5fdcc7fc7bd22c63f extends Twig_Template
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
        $__internal_1c27fa553cb51183139e4b7960001d5b70dd640489fe6d599184aea9079ec459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c27fa553cb51183139e4b7960001d5b70dd640489fe6d599184aea9079ec459->enter($__internal_1c27fa553cb51183139e4b7960001d5b70dd640489fe6d599184aea9079ec459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_55c9f3e50cf65b2a47c56755479b128de6b0d86003a919dcb0e78579c8a5cbff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c9f3e50cf65b2a47c56755479b128de6b0d86003a919dcb0e78579c8a5cbff->enter($__internal_55c9f3e50cf65b2a47c56755479b128de6b0d86003a919dcb0e78579c8a5cbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_1c27fa553cb51183139e4b7960001d5b70dd640489fe6d599184aea9079ec459->leave($__internal_1c27fa553cb51183139e4b7960001d5b70dd640489fe6d599184aea9079ec459_prof);

        
        $__internal_55c9f3e50cf65b2a47c56755479b128de6b0d86003a919dcb0e78579c8a5cbff->leave($__internal_55c9f3e50cf65b2a47c56755479b128de6b0d86003a919dcb0e78579c8a5cbff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
