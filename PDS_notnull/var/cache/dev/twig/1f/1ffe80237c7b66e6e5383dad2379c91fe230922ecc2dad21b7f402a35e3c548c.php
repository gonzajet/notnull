<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_1e8fb82b3f2bcde7dd2b6e9f6e2fb7a746007be899b0b9ab536a0fd3d25354d0 extends Twig_Template
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
        $__internal_d20cf50d93165a05cb6e231b00d9a16ef1deb1104b1ee7058b1d88683d7622f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d20cf50d93165a05cb6e231b00d9a16ef1deb1104b1ee7058b1d88683d7622f8->enter($__internal_d20cf50d93165a05cb6e231b00d9a16ef1deb1104b1ee7058b1d88683d7622f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_56ec21e6ffdd073d171c7d089dfc9825451d028521096fc32bbebe1b5bd4219a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ec21e6ffdd073d171c7d089dfc9825451d028521096fc32bbebe1b5bd4219a->enter($__internal_56ec21e6ffdd073d171c7d089dfc9825451d028521096fc32bbebe1b5bd4219a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_d20cf50d93165a05cb6e231b00d9a16ef1deb1104b1ee7058b1d88683d7622f8->leave($__internal_d20cf50d93165a05cb6e231b00d9a16ef1deb1104b1ee7058b1d88683d7622f8_prof);

        
        $__internal_56ec21e6ffdd073d171c7d089dfc9825451d028521096fc32bbebe1b5bd4219a->leave($__internal_56ec21e6ffdd073d171c7d089dfc9825451d028521096fc32bbebe1b5bd4219a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
