<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ffc540076ad108b276181233f3963c17097e3086f8b116dad433a6818a56c8f1 extends Twig_Template
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
        $__internal_f7ed2d0344e3f8002c912bd6f6491af20fd05e5bb0a2abfc88e78d91ece7c13c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ed2d0344e3f8002c912bd6f6491af20fd05e5bb0a2abfc88e78d91ece7c13c->enter($__internal_f7ed2d0344e3f8002c912bd6f6491af20fd05e5bb0a2abfc88e78d91ece7c13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_9c8fd58e8f06207bc65ce07eb99cd2a6d7b400d697c57ef19d3e10bd482a1442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8fd58e8f06207bc65ce07eb99cd2a6d7b400d697c57ef19d3e10bd482a1442->enter($__internal_9c8fd58e8f06207bc65ce07eb99cd2a6d7b400d697c57ef19d3e10bd482a1442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f7ed2d0344e3f8002c912bd6f6491af20fd05e5bb0a2abfc88e78d91ece7c13c->leave($__internal_f7ed2d0344e3f8002c912bd6f6491af20fd05e5bb0a2abfc88e78d91ece7c13c_prof);

        
        $__internal_9c8fd58e8f06207bc65ce07eb99cd2a6d7b400d697c57ef19d3e10bd482a1442->leave($__internal_9c8fd58e8f06207bc65ce07eb99cd2a6d7b400d697c57ef19d3e10bd482a1442_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
