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
        $__internal_8b558b0766402bbb829785b5b3d66c8252fbe4cc72385c482330180157f5a240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b558b0766402bbb829785b5b3d66c8252fbe4cc72385c482330180157f5a240->enter($__internal_8b558b0766402bbb829785b5b3d66c8252fbe4cc72385c482330180157f5a240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_da153e0fcfba6f92ac892ef35ad20a096e75a0c291671ed37cb888fb957d1e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da153e0fcfba6f92ac892ef35ad20a096e75a0c291671ed37cb888fb957d1e96->enter($__internal_da153e0fcfba6f92ac892ef35ad20a096e75a0c291671ed37cb888fb957d1e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8b558b0766402bbb829785b5b3d66c8252fbe4cc72385c482330180157f5a240->leave($__internal_8b558b0766402bbb829785b5b3d66c8252fbe4cc72385c482330180157f5a240_prof);

        
        $__internal_da153e0fcfba6f92ac892ef35ad20a096e75a0c291671ed37cb888fb957d1e96->leave($__internal_da153e0fcfba6f92ac892ef35ad20a096e75a0c291671ed37cb888fb957d1e96_prof);

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
