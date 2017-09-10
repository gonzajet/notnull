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
        $__internal_d13dbd7fe2d5e6f9c7b761840364ae0e2a2df26df5f8f98264359fef084c2b51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d13dbd7fe2d5e6f9c7b761840364ae0e2a2df26df5f8f98264359fef084c2b51->enter($__internal_d13dbd7fe2d5e6f9c7b761840364ae0e2a2df26df5f8f98264359fef084c2b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_197ca6ce68bc6aba966803a447e158479df0c07227fff0aeca6b86a32561777e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197ca6ce68bc6aba966803a447e158479df0c07227fff0aeca6b86a32561777e->enter($__internal_197ca6ce68bc6aba966803a447e158479df0c07227fff0aeca6b86a32561777e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d13dbd7fe2d5e6f9c7b761840364ae0e2a2df26df5f8f98264359fef084c2b51->leave($__internal_d13dbd7fe2d5e6f9c7b761840364ae0e2a2df26df5f8f98264359fef084c2b51_prof);

        
        $__internal_197ca6ce68bc6aba966803a447e158479df0c07227fff0aeca6b86a32561777e->leave($__internal_197ca6ce68bc6aba966803a447e158479df0c07227fff0aeca6b86a32561777e_prof);

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
