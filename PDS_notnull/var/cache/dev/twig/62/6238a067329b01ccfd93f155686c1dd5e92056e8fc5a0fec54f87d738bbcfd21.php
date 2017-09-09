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
        $__internal_e78270e6cff56c629022a13bd610e0fc2d375f339782a0c6556036349ec98b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e78270e6cff56c629022a13bd610e0fc2d375f339782a0c6556036349ec98b2c->enter($__internal_e78270e6cff56c629022a13bd610e0fc2d375f339782a0c6556036349ec98b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_7ee02b1acfb7a2ed0d90cf93efc78a724086da95060232bc69fec951a47fd88c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee02b1acfb7a2ed0d90cf93efc78a724086da95060232bc69fec951a47fd88c->enter($__internal_7ee02b1acfb7a2ed0d90cf93efc78a724086da95060232bc69fec951a47fd88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_e78270e6cff56c629022a13bd610e0fc2d375f339782a0c6556036349ec98b2c->leave($__internal_e78270e6cff56c629022a13bd610e0fc2d375f339782a0c6556036349ec98b2c_prof);

        
        $__internal_7ee02b1acfb7a2ed0d90cf93efc78a724086da95060232bc69fec951a47fd88c->leave($__internal_7ee02b1acfb7a2ed0d90cf93efc78a724086da95060232bc69fec951a47fd88c_prof);

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
