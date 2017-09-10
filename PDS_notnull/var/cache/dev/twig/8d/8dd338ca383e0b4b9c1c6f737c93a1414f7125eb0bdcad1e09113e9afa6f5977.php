<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_40e6854ef7dcd4193fa676e5c642ea304680c9250d91e61f11cc10d57283ccf0 extends Twig_Template
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
        $__internal_f80756745e8c058f20edd9416bdfb312bb6fc53cc77f36351e272551f6c49bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80756745e8c058f20edd9416bdfb312bb6fc53cc77f36351e272551f6c49bcc->enter($__internal_f80756745e8c058f20edd9416bdfb312bb6fc53cc77f36351e272551f6c49bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_96fa3e3045cff8c4202dcd198cbe4863cea27bb1debb91d512cdfcf0733283cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96fa3e3045cff8c4202dcd198cbe4863cea27bb1debb91d512cdfcf0733283cb->enter($__internal_96fa3e3045cff8c4202dcd198cbe4863cea27bb1debb91d512cdfcf0733283cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f80756745e8c058f20edd9416bdfb312bb6fc53cc77f36351e272551f6c49bcc->leave($__internal_f80756745e8c058f20edd9416bdfb312bb6fc53cc77f36351e272551f6c49bcc_prof);

        
        $__internal_96fa3e3045cff8c4202dcd198cbe4863cea27bb1debb91d512cdfcf0733283cb->leave($__internal_96fa3e3045cff8c4202dcd198cbe4863cea27bb1debb91d512cdfcf0733283cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
