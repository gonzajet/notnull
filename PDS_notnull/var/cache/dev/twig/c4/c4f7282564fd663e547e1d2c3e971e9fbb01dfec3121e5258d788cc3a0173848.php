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
        $__internal_3b828f8c97cc52ad4055c260a3d239ff558a9353e410133c06ee6d095200f79e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b828f8c97cc52ad4055c260a3d239ff558a9353e410133c06ee6d095200f79e->enter($__internal_3b828f8c97cc52ad4055c260a3d239ff558a9353e410133c06ee6d095200f79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_6fe67b9973520d7fb972f142e4cb5058ac4370f9495a631cebc306a73327c992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe67b9973520d7fb972f142e4cb5058ac4370f9495a631cebc306a73327c992->enter($__internal_6fe67b9973520d7fb972f142e4cb5058ac4370f9495a631cebc306a73327c992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_3b828f8c97cc52ad4055c260a3d239ff558a9353e410133c06ee6d095200f79e->leave($__internal_3b828f8c97cc52ad4055c260a3d239ff558a9353e410133c06ee6d095200f79e_prof);

        
        $__internal_6fe67b9973520d7fb972f142e4cb5058ac4370f9495a631cebc306a73327c992->leave($__internal_6fe67b9973520d7fb972f142e4cb5058ac4370f9495a631cebc306a73327c992_prof);

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
