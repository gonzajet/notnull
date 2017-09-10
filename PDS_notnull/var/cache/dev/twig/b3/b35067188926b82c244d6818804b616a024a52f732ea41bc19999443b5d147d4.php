<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_12ceef6175538e89135020ff8cfbd7ecffadfea54fc0de7930b6cc798711c3a9 extends Twig_Template
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
        $__internal_90bf4e6d2e6f452ae996055e34450b17e27cab3cfb5b9e3af772cd313cb446f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90bf4e6d2e6f452ae996055e34450b17e27cab3cfb5b9e3af772cd313cb446f7->enter($__internal_90bf4e6d2e6f452ae996055e34450b17e27cab3cfb5b9e3af772cd313cb446f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_f4957d9aaa03636795919f9ab47e4b17076c4342cd45ed86e6c3c9ba589704b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4957d9aaa03636795919f9ab47e4b17076c4342cd45ed86e6c3c9ba589704b5->enter($__internal_f4957d9aaa03636795919f9ab47e4b17076c4342cd45ed86e6c3c9ba589704b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_90bf4e6d2e6f452ae996055e34450b17e27cab3cfb5b9e3af772cd313cb446f7->leave($__internal_90bf4e6d2e6f452ae996055e34450b17e27cab3cfb5b9e3af772cd313cb446f7_prof);

        
        $__internal_f4957d9aaa03636795919f9ab47e4b17076c4342cd45ed86e6c3c9ba589704b5->leave($__internal_f4957d9aaa03636795919f9ab47e4b17076c4342cd45ed86e6c3c9ba589704b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
