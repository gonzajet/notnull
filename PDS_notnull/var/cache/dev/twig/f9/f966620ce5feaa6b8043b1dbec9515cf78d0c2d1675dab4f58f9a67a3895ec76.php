<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_018a74265dafed84df1e4c8cbdb2309779e71d80b055a85859bf080568e3c50c extends Twig_Template
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
        $__internal_9bc6cad559781aa5f01763f10bb744fcd89200217d67c41fe0b1bc6feb1744e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bc6cad559781aa5f01763f10bb744fcd89200217d67c41fe0b1bc6feb1744e7->enter($__internal_9bc6cad559781aa5f01763f10bb744fcd89200217d67c41fe0b1bc6feb1744e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_0eb3c8999cfcf1797fc47e95f8dbd676d2121c6c794693a6fa746c095bdf0589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb3c8999cfcf1797fc47e95f8dbd676d2121c6c794693a6fa746c095bdf0589->enter($__internal_0eb3c8999cfcf1797fc47e95f8dbd676d2121c6c794693a6fa746c095bdf0589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_9bc6cad559781aa5f01763f10bb744fcd89200217d67c41fe0b1bc6feb1744e7->leave($__internal_9bc6cad559781aa5f01763f10bb744fcd89200217d67c41fe0b1bc6feb1744e7_prof);

        
        $__internal_0eb3c8999cfcf1797fc47e95f8dbd676d2121c6c794693a6fa746c095bdf0589->leave($__internal_0eb3c8999cfcf1797fc47e95f8dbd676d2121c6c794693a6fa746c095bdf0589_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
