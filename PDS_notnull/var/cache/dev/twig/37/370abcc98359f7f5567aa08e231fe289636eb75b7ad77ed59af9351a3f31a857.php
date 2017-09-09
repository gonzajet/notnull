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
        $__internal_b171ba3012707871209ccf4ffea5a8fc095331d45d763671c7428172351a59f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b171ba3012707871209ccf4ffea5a8fc095331d45d763671c7428172351a59f1->enter($__internal_b171ba3012707871209ccf4ffea5a8fc095331d45d763671c7428172351a59f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_6c5d7d445bc17c800eb4ea3018db84d9135e1835c27f0421b6b5905246cb6ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5d7d445bc17c800eb4ea3018db84d9135e1835c27f0421b6b5905246cb6ee2->enter($__internal_6c5d7d445bc17c800eb4ea3018db84d9135e1835c27f0421b6b5905246cb6ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b171ba3012707871209ccf4ffea5a8fc095331d45d763671c7428172351a59f1->leave($__internal_b171ba3012707871209ccf4ffea5a8fc095331d45d763671c7428172351a59f1_prof);

        
        $__internal_6c5d7d445bc17c800eb4ea3018db84d9135e1835c27f0421b6b5905246cb6ee2->leave($__internal_6c5d7d445bc17c800eb4ea3018db84d9135e1835c27f0421b6b5905246cb6ee2_prof);

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
