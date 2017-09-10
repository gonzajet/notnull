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
        $__internal_74b71f575697c2306a97c82e2b6c1b994085aaddfd50b63c027f9c0d7fb3d44d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74b71f575697c2306a97c82e2b6c1b994085aaddfd50b63c027f9c0d7fb3d44d->enter($__internal_74b71f575697c2306a97c82e2b6c1b994085aaddfd50b63c027f9c0d7fb3d44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_2af9d58effd1e0402d9df6145626a16c53ea1a9f3b06ed67710e2001f3410a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af9d58effd1e0402d9df6145626a16c53ea1a9f3b06ed67710e2001f3410a06->enter($__internal_2af9d58effd1e0402d9df6145626a16c53ea1a9f3b06ed67710e2001f3410a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_74b71f575697c2306a97c82e2b6c1b994085aaddfd50b63c027f9c0d7fb3d44d->leave($__internal_74b71f575697c2306a97c82e2b6c1b994085aaddfd50b63c027f9c0d7fb3d44d_prof);

        
        $__internal_2af9d58effd1e0402d9df6145626a16c53ea1a9f3b06ed67710e2001f3410a06->leave($__internal_2af9d58effd1e0402d9df6145626a16c53ea1a9f3b06ed67710e2001f3410a06_prof);

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
