<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f8d63f96e59730aa31ded04d89d5ea9d3c00c754f5589fe6da826ecc8d295fd3 extends Twig_Template
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
        $__internal_6f761a7e8426dde811dbfa5842132aa1fc4eecca4cd128b79fd9a98153a87c39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f761a7e8426dde811dbfa5842132aa1fc4eecca4cd128b79fd9a98153a87c39->enter($__internal_6f761a7e8426dde811dbfa5842132aa1fc4eecca4cd128b79fd9a98153a87c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_95ba2948654b1d24af3cf9bfdbf4c9ba16865012419c65609a7787a1c78b801f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95ba2948654b1d24af3cf9bfdbf4c9ba16865012419c65609a7787a1c78b801f->enter($__internal_95ba2948654b1d24af3cf9bfdbf4c9ba16865012419c65609a7787a1c78b801f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6f761a7e8426dde811dbfa5842132aa1fc4eecca4cd128b79fd9a98153a87c39->leave($__internal_6f761a7e8426dde811dbfa5842132aa1fc4eecca4cd128b79fd9a98153a87c39_prof);

        
        $__internal_95ba2948654b1d24af3cf9bfdbf4c9ba16865012419c65609a7787a1c78b801f->leave($__internal_95ba2948654b1d24af3cf9bfdbf4c9ba16865012419c65609a7787a1c78b801f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
