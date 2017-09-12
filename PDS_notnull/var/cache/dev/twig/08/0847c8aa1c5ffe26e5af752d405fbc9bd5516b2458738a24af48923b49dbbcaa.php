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
        $__internal_6d95c1382ad1a721a6a84c46d7ab288dd57f7448a6b12ab67042d32d5534b708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d95c1382ad1a721a6a84c46d7ab288dd57f7448a6b12ab67042d32d5534b708->enter($__internal_6d95c1382ad1a721a6a84c46d7ab288dd57f7448a6b12ab67042d32d5534b708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f85bb46f12a581fbf7edc95f6850bd86616344c4f3d58ba9c8ef53fb2295b311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f85bb46f12a581fbf7edc95f6850bd86616344c4f3d58ba9c8ef53fb2295b311->enter($__internal_f85bb46f12a581fbf7edc95f6850bd86616344c4f3d58ba9c8ef53fb2295b311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_6d95c1382ad1a721a6a84c46d7ab288dd57f7448a6b12ab67042d32d5534b708->leave($__internal_6d95c1382ad1a721a6a84c46d7ab288dd57f7448a6b12ab67042d32d5534b708_prof);

        
        $__internal_f85bb46f12a581fbf7edc95f6850bd86616344c4f3d58ba9c8ef53fb2295b311->leave($__internal_f85bb46f12a581fbf7edc95f6850bd86616344c4f3d58ba9c8ef53fb2295b311_prof);

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
