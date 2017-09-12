<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_03aa938eff914b1994a708e7be68a2bea04bb846366d3fd1ea4e8aacc9edf4f8 extends Twig_Template
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
        $__internal_b1433434e6e91d06f236512f9add2798efc55995f94f433da6676cc779e39c2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1433434e6e91d06f236512f9add2798efc55995f94f433da6676cc779e39c2e->enter($__internal_b1433434e6e91d06f236512f9add2798efc55995f94f433da6676cc779e39c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_4bae6a7af6dcfc42279a856ca61a9addc1b89f5e21a824bc4afc98a46016e404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bae6a7af6dcfc42279a856ca61a9addc1b89f5e21a824bc4afc98a46016e404->enter($__internal_4bae6a7af6dcfc42279a856ca61a9addc1b89f5e21a824bc4afc98a46016e404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b1433434e6e91d06f236512f9add2798efc55995f94f433da6676cc779e39c2e->leave($__internal_b1433434e6e91d06f236512f9add2798efc55995f94f433da6676cc779e39c2e_prof);

        
        $__internal_4bae6a7af6dcfc42279a856ca61a9addc1b89f5e21a824bc4afc98a46016e404->leave($__internal_4bae6a7af6dcfc42279a856ca61a9addc1b89f5e21a824bc4afc98a46016e404_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
