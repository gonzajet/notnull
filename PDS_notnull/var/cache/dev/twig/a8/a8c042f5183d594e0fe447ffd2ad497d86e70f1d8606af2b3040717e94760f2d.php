<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_6886cbef29787afff90251e9e84872c41856f254feaec4ade7c9a87ef4e92692 extends Twig_Template
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
        $__internal_5b77f9356cece6def6ddc1387fc699ef17eb175747f6388765d557f0b712a35f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b77f9356cece6def6ddc1387fc699ef17eb175747f6388765d557f0b712a35f->enter($__internal_5b77f9356cece6def6ddc1387fc699ef17eb175747f6388765d557f0b712a35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_af16a9738d373fcac96a326f357367e72d41c63432cd194819e1908388c215fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af16a9738d373fcac96a326f357367e72d41c63432cd194819e1908388c215fd->enter($__internal_af16a9738d373fcac96a326f357367e72d41c63432cd194819e1908388c215fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_5b77f9356cece6def6ddc1387fc699ef17eb175747f6388765d557f0b712a35f->leave($__internal_5b77f9356cece6def6ddc1387fc699ef17eb175747f6388765d557f0b712a35f_prof);

        
        $__internal_af16a9738d373fcac96a326f357367e72d41c63432cd194819e1908388c215fd->leave($__internal_af16a9738d373fcac96a326f357367e72d41c63432cd194819e1908388c215fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
