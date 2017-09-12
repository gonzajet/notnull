<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_6a31ac09c53be5bba0b56227d772a48cc39efd5140ee17c25e826170a1f8784e extends Twig_Template
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
        $__internal_4dc07a48048ace26ea53264d4063f334e05d48cc1cd7295a5c6228a57090916e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc07a48048ace26ea53264d4063f334e05d48cc1cd7295a5c6228a57090916e->enter($__internal_4dc07a48048ace26ea53264d4063f334e05d48cc1cd7295a5c6228a57090916e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_7ec6ba80779bf5f4ef02fec31ca818c2241f38d836e3bdf2dc7ea6fcac17d6f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec6ba80779bf5f4ef02fec31ca818c2241f38d836e3bdf2dc7ea6fcac17d6f0->enter($__internal_7ec6ba80779bf5f4ef02fec31ca818c2241f38d836e3bdf2dc7ea6fcac17d6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4dc07a48048ace26ea53264d4063f334e05d48cc1cd7295a5c6228a57090916e->leave($__internal_4dc07a48048ace26ea53264d4063f334e05d48cc1cd7295a5c6228a57090916e_prof);

        
        $__internal_7ec6ba80779bf5f4ef02fec31ca818c2241f38d836e3bdf2dc7ea6fcac17d6f0->leave($__internal_7ec6ba80779bf5f4ef02fec31ca818c2241f38d836e3bdf2dc7ea6fcac17d6f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
