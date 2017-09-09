<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9d2db4aa88294e90511aa975433307a98c1fc840227b51864347e2d33ee6f72e extends Twig_Template
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
        $__internal_6d209250afc1a2841802a4b0181947f50a56bc9c3f6d98b9d93e6ce71f33c47b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d209250afc1a2841802a4b0181947f50a56bc9c3f6d98b9d93e6ce71f33c47b->enter($__internal_6d209250afc1a2841802a4b0181947f50a56bc9c3f6d98b9d93e6ce71f33c47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_326f262a580ffe5160bdba2a2fb61ed1cf29de4a0c7046148169341fff7cf591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326f262a580ffe5160bdba2a2fb61ed1cf29de4a0c7046148169341fff7cf591->enter($__internal_326f262a580ffe5160bdba2a2fb61ed1cf29de4a0c7046148169341fff7cf591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_6d209250afc1a2841802a4b0181947f50a56bc9c3f6d98b9d93e6ce71f33c47b->leave($__internal_6d209250afc1a2841802a4b0181947f50a56bc9c3f6d98b9d93e6ce71f33c47b_prof);

        
        $__internal_326f262a580ffe5160bdba2a2fb61ed1cf29de4a0c7046148169341fff7cf591->leave($__internal_326f262a580ffe5160bdba2a2fb61ed1cf29de4a0c7046148169341fff7cf591_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
