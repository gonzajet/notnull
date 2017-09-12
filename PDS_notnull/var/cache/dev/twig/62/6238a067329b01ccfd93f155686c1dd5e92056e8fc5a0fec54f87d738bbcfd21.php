<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f794bac01edc92477b475ede6c7c781008181ff6bbc724cf8c87ab652aee584c extends Twig_Template
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
        $__internal_d31c1059769baaab987eaf9862b7f2a927c52628d03e8610c548b1e69bb011aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d31c1059769baaab987eaf9862b7f2a927c52628d03e8610c548b1e69bb011aa->enter($__internal_d31c1059769baaab987eaf9862b7f2a927c52628d03e8610c548b1e69bb011aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ca7324739ce682ca6f26930b1ab3eae1145de68a496bfebe22a1bfb0102cb21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7324739ce682ca6f26930b1ab3eae1145de68a496bfebe22a1bfb0102cb21d->enter($__internal_ca7324739ce682ca6f26930b1ab3eae1145de68a496bfebe22a1bfb0102cb21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d31c1059769baaab987eaf9862b7f2a927c52628d03e8610c548b1e69bb011aa->leave($__internal_d31c1059769baaab987eaf9862b7f2a927c52628d03e8610c548b1e69bb011aa_prof);

        
        $__internal_ca7324739ce682ca6f26930b1ab3eae1145de68a496bfebe22a1bfb0102cb21d->leave($__internal_ca7324739ce682ca6f26930b1ab3eae1145de68a496bfebe22a1bfb0102cb21d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
