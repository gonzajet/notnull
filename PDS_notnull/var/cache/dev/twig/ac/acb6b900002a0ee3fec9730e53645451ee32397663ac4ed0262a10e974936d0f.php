<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_318816ca07eee82e6969e1299dd2c3bc57c76f2be658898ca129199b24b1f7a6 extends Twig_Template
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
        $__internal_bbe83a860bd20ecaa01084f9808879b1cf3537b9c8f3342cb63226e938f98dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbe83a860bd20ecaa01084f9808879b1cf3537b9c8f3342cb63226e938f98dfb->enter($__internal_bbe83a860bd20ecaa01084f9808879b1cf3537b9c8f3342cb63226e938f98dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_b402928bec989c97f06906d21589b4a85a549359c33eb8c769bfdbbae13deb42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b402928bec989c97f06906d21589b4a85a549359c33eb8c769bfdbbae13deb42->enter($__internal_b402928bec989c97f06906d21589b4a85a549359c33eb8c769bfdbbae13deb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_bbe83a860bd20ecaa01084f9808879b1cf3537b9c8f3342cb63226e938f98dfb->leave($__internal_bbe83a860bd20ecaa01084f9808879b1cf3537b9c8f3342cb63226e938f98dfb_prof);

        
        $__internal_b402928bec989c97f06906d21589b4a85a549359c33eb8c769bfdbbae13deb42->leave($__internal_b402928bec989c97f06906d21589b4a85a549359c33eb8c769bfdbbae13deb42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
