<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d98b0c2773a3c7bfe63b0a47c916c6696e556b995fae5644ca221356273ec173 extends Twig_Template
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
        $__internal_a11d5acf3ecd43c8faa0084bbef2e71e72e182ab30a8cae37e2ae0ca1eb70a71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11d5acf3ecd43c8faa0084bbef2e71e72e182ab30a8cae37e2ae0ca1eb70a71->enter($__internal_a11d5acf3ecd43c8faa0084bbef2e71e72e182ab30a8cae37e2ae0ca1eb70a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_1d16fe27d68a9a6270f52fb9a3a7cc4745cde2667412a22e2039d247f1ca7df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d16fe27d68a9a6270f52fb9a3a7cc4745cde2667412a22e2039d247f1ca7df6->enter($__internal_1d16fe27d68a9a6270f52fb9a3a7cc4745cde2667412a22e2039d247f1ca7df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a11d5acf3ecd43c8faa0084bbef2e71e72e182ab30a8cae37e2ae0ca1eb70a71->leave($__internal_a11d5acf3ecd43c8faa0084bbef2e71e72e182ab30a8cae37e2ae0ca1eb70a71_prof);

        
        $__internal_1d16fe27d68a9a6270f52fb9a3a7cc4745cde2667412a22e2039d247f1ca7df6->leave($__internal_1d16fe27d68a9a6270f52fb9a3a7cc4745cde2667412a22e2039d247f1ca7df6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
