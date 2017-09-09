<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_98cc9add6a81fe5647a7b72f484169234177a571e4365477dfac2117a1eb3208 extends Twig_Template
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
        $__internal_00425393196d5bdd9b22e16bb9fcba6e4c3edbbfdbf9cb556944614094bc2bad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00425393196d5bdd9b22e16bb9fcba6e4c3edbbfdbf9cb556944614094bc2bad->enter($__internal_00425393196d5bdd9b22e16bb9fcba6e4c3edbbfdbf9cb556944614094bc2bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_e7db906fedafce819b55c298690b100088be6a77f0dee99dcf90fc068a14bbc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7db906fedafce819b55c298690b100088be6a77f0dee99dcf90fc068a14bbc8->enter($__internal_e7db906fedafce819b55c298690b100088be6a77f0dee99dcf90fc068a14bbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_00425393196d5bdd9b22e16bb9fcba6e4c3edbbfdbf9cb556944614094bc2bad->leave($__internal_00425393196d5bdd9b22e16bb9fcba6e4c3edbbfdbf9cb556944614094bc2bad_prof);

        
        $__internal_e7db906fedafce819b55c298690b100088be6a77f0dee99dcf90fc068a14bbc8->leave($__internal_e7db906fedafce819b55c298690b100088be6a77f0dee99dcf90fc068a14bbc8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
