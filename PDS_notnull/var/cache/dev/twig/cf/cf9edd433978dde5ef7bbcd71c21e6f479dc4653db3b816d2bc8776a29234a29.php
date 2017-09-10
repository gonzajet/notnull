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
        $__internal_78acc0b9a81a9c0b4d1608884e225f9737db341d45893f9e435877b57e4bc39b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78acc0b9a81a9c0b4d1608884e225f9737db341d45893f9e435877b57e4bc39b->enter($__internal_78acc0b9a81a9c0b4d1608884e225f9737db341d45893f9e435877b57e4bc39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_9da756d6396383c73728789e69b8375b7396f097c36e6a88ff56b2d6d027fcf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da756d6396383c73728789e69b8375b7396f097c36e6a88ff56b2d6d027fcf9->enter($__internal_9da756d6396383c73728789e69b8375b7396f097c36e6a88ff56b2d6d027fcf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_78acc0b9a81a9c0b4d1608884e225f9737db341d45893f9e435877b57e4bc39b->leave($__internal_78acc0b9a81a9c0b4d1608884e225f9737db341d45893f9e435877b57e4bc39b_prof);

        
        $__internal_9da756d6396383c73728789e69b8375b7396f097c36e6a88ff56b2d6d027fcf9->leave($__internal_9da756d6396383c73728789e69b8375b7396f097c36e6a88ff56b2d6d027fcf9_prof);

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
