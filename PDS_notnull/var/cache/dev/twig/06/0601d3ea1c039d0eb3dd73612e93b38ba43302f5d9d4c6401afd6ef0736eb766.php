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
        $__internal_6e5e82fd228680fedb040fbb8ce04737d23b3dc03afcb4657927e1c0ab5afd45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e5e82fd228680fedb040fbb8ce04737d23b3dc03afcb4657927e1c0ab5afd45->enter($__internal_6e5e82fd228680fedb040fbb8ce04737d23b3dc03afcb4657927e1c0ab5afd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_eec46695e5e9dd12f4abce05a0e423fd9d62ff4d407a01ae8f6fb416b28f58ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec46695e5e9dd12f4abce05a0e423fd9d62ff4d407a01ae8f6fb416b28f58ec->enter($__internal_eec46695e5e9dd12f4abce05a0e423fd9d62ff4d407a01ae8f6fb416b28f58ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6e5e82fd228680fedb040fbb8ce04737d23b3dc03afcb4657927e1c0ab5afd45->leave($__internal_6e5e82fd228680fedb040fbb8ce04737d23b3dc03afcb4657927e1c0ab5afd45_prof);

        
        $__internal_eec46695e5e9dd12f4abce05a0e423fd9d62ff4d407a01ae8f6fb416b28f58ec->leave($__internal_eec46695e5e9dd12f4abce05a0e423fd9d62ff4d407a01ae8f6fb416b28f58ec_prof);

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
