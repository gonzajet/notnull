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
        $__internal_1a53cfb241f13ca2b621e110420f16a476ba4307008064762354ec0df887766f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a53cfb241f13ca2b621e110420f16a476ba4307008064762354ec0df887766f->enter($__internal_1a53cfb241f13ca2b621e110420f16a476ba4307008064762354ec0df887766f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_070732a8ddd409c852f0b695c7533849aa015a043259cd3b10a98aabc0736abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070732a8ddd409c852f0b695c7533849aa015a043259cd3b10a98aabc0736abe->enter($__internal_070732a8ddd409c852f0b695c7533849aa015a043259cd3b10a98aabc0736abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_1a53cfb241f13ca2b621e110420f16a476ba4307008064762354ec0df887766f->leave($__internal_1a53cfb241f13ca2b621e110420f16a476ba4307008064762354ec0df887766f_prof);

        
        $__internal_070732a8ddd409c852f0b695c7533849aa015a043259cd3b10a98aabc0736abe->leave($__internal_070732a8ddd409c852f0b695c7533849aa015a043259cd3b10a98aabc0736abe_prof);

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
