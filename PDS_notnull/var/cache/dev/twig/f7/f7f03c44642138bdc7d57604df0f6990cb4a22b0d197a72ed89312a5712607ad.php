<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_2c2d447461bc0c9ce1817b7b237f48738c78ad63435d698f4d1d2a11fe122b39 extends Twig_Template
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
        $__internal_b4d4d3bad2a20430cee5d7658a8f3f19aa5ca94756adfdb03c98d2f9eeda2a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4d4d3bad2a20430cee5d7658a8f3f19aa5ca94756adfdb03c98d2f9eeda2a7e->enter($__internal_b4d4d3bad2a20430cee5d7658a8f3f19aa5ca94756adfdb03c98d2f9eeda2a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_d9eae09ff74f9575ab3d7d6410c3752a459d15cd139ea132a8fe6097c69e782c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9eae09ff74f9575ab3d7d6410c3752a459d15cd139ea132a8fe6097c69e782c->enter($__internal_d9eae09ff74f9575ab3d7d6410c3752a459d15cd139ea132a8fe6097c69e782c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b4d4d3bad2a20430cee5d7658a8f3f19aa5ca94756adfdb03c98d2f9eeda2a7e->leave($__internal_b4d4d3bad2a20430cee5d7658a8f3f19aa5ca94756adfdb03c98d2f9eeda2a7e_prof);

        
        $__internal_d9eae09ff74f9575ab3d7d6410c3752a459d15cd139ea132a8fe6097c69e782c->leave($__internal_d9eae09ff74f9575ab3d7d6410c3752a459d15cd139ea132a8fe6097c69e782c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
