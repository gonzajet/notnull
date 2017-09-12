<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7b1d2c5b49c16962cad41052fea34be7b55498728da807bb8af97ae522d4da5d extends Twig_Template
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
        $__internal_855449d775325ae619c213804e5fd2544a28c6d49b67b7fd54a5128bf99818be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_855449d775325ae619c213804e5fd2544a28c6d49b67b7fd54a5128bf99818be->enter($__internal_855449d775325ae619c213804e5fd2544a28c6d49b67b7fd54a5128bf99818be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_b6690fca9a9d50c001d253e43a9a35ca2aef117f864ff91c1a67bdec207ac948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6690fca9a9d50c001d253e43a9a35ca2aef117f864ff91c1a67bdec207ac948->enter($__internal_b6690fca9a9d50c001d253e43a9a35ca2aef117f864ff91c1a67bdec207ac948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_855449d775325ae619c213804e5fd2544a28c6d49b67b7fd54a5128bf99818be->leave($__internal_855449d775325ae619c213804e5fd2544a28c6d49b67b7fd54a5128bf99818be_prof);

        
        $__internal_b6690fca9a9d50c001d253e43a9a35ca2aef117f864ff91c1a67bdec207ac948->leave($__internal_b6690fca9a9d50c001d253e43a9a35ca2aef117f864ff91c1a67bdec207ac948_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
