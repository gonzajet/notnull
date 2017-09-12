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
        $__internal_2aa8253b13d1ce878f566ddec346a0c232a1f14dffadfbc87048f1f49aeb242b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aa8253b13d1ce878f566ddec346a0c232a1f14dffadfbc87048f1f49aeb242b->enter($__internal_2aa8253b13d1ce878f566ddec346a0c232a1f14dffadfbc87048f1f49aeb242b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_f15675890f0b4db88a36b0ef9a20a0ce3ca1059cc97721bf22083c2cd8ca0a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f15675890f0b4db88a36b0ef9a20a0ce3ca1059cc97721bf22083c2cd8ca0a7d->enter($__internal_f15675890f0b4db88a36b0ef9a20a0ce3ca1059cc97721bf22083c2cd8ca0a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2aa8253b13d1ce878f566ddec346a0c232a1f14dffadfbc87048f1f49aeb242b->leave($__internal_2aa8253b13d1ce878f566ddec346a0c232a1f14dffadfbc87048f1f49aeb242b_prof);

        
        $__internal_f15675890f0b4db88a36b0ef9a20a0ce3ca1059cc97721bf22083c2cd8ca0a7d->leave($__internal_f15675890f0b4db88a36b0ef9a20a0ce3ca1059cc97721bf22083c2cd8ca0a7d_prof);

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
