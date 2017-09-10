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
        $__internal_86b7660ee31cd2f3792bb8594e463f3da7c76c7d5db0321d52c78ebf0ad22a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b7660ee31cd2f3792bb8594e463f3da7c76c7d5db0321d52c78ebf0ad22a72->enter($__internal_86b7660ee31cd2f3792bb8594e463f3da7c76c7d5db0321d52c78ebf0ad22a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_947cf2cc60b0be699c2035452a54ed77395e96c77008e18e25fee1d2fd9fa1ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947cf2cc60b0be699c2035452a54ed77395e96c77008e18e25fee1d2fd9fa1ae->enter($__internal_947cf2cc60b0be699c2035452a54ed77395e96c77008e18e25fee1d2fd9fa1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_86b7660ee31cd2f3792bb8594e463f3da7c76c7d5db0321d52c78ebf0ad22a72->leave($__internal_86b7660ee31cd2f3792bb8594e463f3da7c76c7d5db0321d52c78ebf0ad22a72_prof);

        
        $__internal_947cf2cc60b0be699c2035452a54ed77395e96c77008e18e25fee1d2fd9fa1ae->leave($__internal_947cf2cc60b0be699c2035452a54ed77395e96c77008e18e25fee1d2fd9fa1ae_prof);

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
