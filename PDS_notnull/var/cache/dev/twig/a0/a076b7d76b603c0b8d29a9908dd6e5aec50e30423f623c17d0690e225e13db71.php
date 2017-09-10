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
        $__internal_60778670e5551114f4e1b170c1ad78154646cd36e0192e5aad034a52148ca34a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60778670e5551114f4e1b170c1ad78154646cd36e0192e5aad034a52148ca34a->enter($__internal_60778670e5551114f4e1b170c1ad78154646cd36e0192e5aad034a52148ca34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_70c694e116255a7fabb0b79a76718d755fe37285826dffa02acb3174e9c96668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c694e116255a7fabb0b79a76718d755fe37285826dffa02acb3174e9c96668->enter($__internal_70c694e116255a7fabb0b79a76718d755fe37285826dffa02acb3174e9c96668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_60778670e5551114f4e1b170c1ad78154646cd36e0192e5aad034a52148ca34a->leave($__internal_60778670e5551114f4e1b170c1ad78154646cd36e0192e5aad034a52148ca34a_prof);

        
        $__internal_70c694e116255a7fabb0b79a76718d755fe37285826dffa02acb3174e9c96668->leave($__internal_70c694e116255a7fabb0b79a76718d755fe37285826dffa02acb3174e9c96668_prof);

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
