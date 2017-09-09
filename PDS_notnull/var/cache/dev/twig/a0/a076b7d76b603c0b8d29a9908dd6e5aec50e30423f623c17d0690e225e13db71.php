<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c1c6d9174d573178796b3159335813abc7dff9cbd033779c19d1ee5b9c5fa108 extends Twig_Template
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
        $__internal_f74fd0e5f4e82a5652df818c2dc688aa0a96ac597cb1aec6f72ba19ba326c067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f74fd0e5f4e82a5652df818c2dc688aa0a96ac597cb1aec6f72ba19ba326c067->enter($__internal_f74fd0e5f4e82a5652df818c2dc688aa0a96ac597cb1aec6f72ba19ba326c067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_dfb331ad36186a2c8b86b4989a063fbf94e2bfd675e287503aa528ea665ec756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb331ad36186a2c8b86b4989a063fbf94e2bfd675e287503aa528ea665ec756->enter($__internal_dfb331ad36186a2c8b86b4989a063fbf94e2bfd675e287503aa528ea665ec756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f74fd0e5f4e82a5652df818c2dc688aa0a96ac597cb1aec6f72ba19ba326c067->leave($__internal_f74fd0e5f4e82a5652df818c2dc688aa0a96ac597cb1aec6f72ba19ba326c067_prof);

        
        $__internal_dfb331ad36186a2c8b86b4989a063fbf94e2bfd675e287503aa528ea665ec756->leave($__internal_dfb331ad36186a2c8b86b4989a063fbf94e2bfd675e287503aa528ea665ec756_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
