<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_88f11b1e857296202947b18f268b2cc539470e8047fba297f0948838878d304b extends Twig_Template
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
        $__internal_f18631e5053959ab5e126c7e01a9a7190382693d1f2c23e6d6664abb20689249 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f18631e5053959ab5e126c7e01a9a7190382693d1f2c23e6d6664abb20689249->enter($__internal_f18631e5053959ab5e126c7e01a9a7190382693d1f2c23e6d6664abb20689249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_4fd9c404404a5cbb05e96232ee919235ab6ea9d395704a095db9b6b52bfbb840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd9c404404a5cbb05e96232ee919235ab6ea9d395704a095db9b6b52bfbb840->enter($__internal_4fd9c404404a5cbb05e96232ee919235ab6ea9d395704a095db9b6b52bfbb840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f18631e5053959ab5e126c7e01a9a7190382693d1f2c23e6d6664abb20689249->leave($__internal_f18631e5053959ab5e126c7e01a9a7190382693d1f2c23e6d6664abb20689249_prof);

        
        $__internal_4fd9c404404a5cbb05e96232ee919235ab6ea9d395704a095db9b6b52bfbb840->leave($__internal_4fd9c404404a5cbb05e96232ee919235ab6ea9d395704a095db9b6b52bfbb840_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
