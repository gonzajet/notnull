<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_37d7b5f1d36ff5ea377199294e58ae7ab5404c716386dd5877c6a9c12b30e3e0 extends Twig_Template
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
        $__internal_8c431a6e0e04cf5037bebe224e88e22f396224519f2d25a2737627dd3804d68b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c431a6e0e04cf5037bebe224e88e22f396224519f2d25a2737627dd3804d68b->enter($__internal_8c431a6e0e04cf5037bebe224e88e22f396224519f2d25a2737627dd3804d68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_51afd75bebab4117970b367fcd4b2c63110f69aefe34e5790a729a033706d9d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51afd75bebab4117970b367fcd4b2c63110f69aefe34e5790a729a033706d9d3->enter($__internal_51afd75bebab4117970b367fcd4b2c63110f69aefe34e5790a729a033706d9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_8c431a6e0e04cf5037bebe224e88e22f396224519f2d25a2737627dd3804d68b->leave($__internal_8c431a6e0e04cf5037bebe224e88e22f396224519f2d25a2737627dd3804d68b_prof);

        
        $__internal_51afd75bebab4117970b367fcd4b2c63110f69aefe34e5790a729a033706d9d3->leave($__internal_51afd75bebab4117970b367fcd4b2c63110f69aefe34e5790a729a033706d9d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
