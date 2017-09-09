<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4ed3b32a2c8f1e1cb568fdee9d3edf3099294f4695be017a3bbb6b97b328ba4e extends Twig_Template
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
        $__internal_c78c8c51d135a051cb20d5fab965fd0c688640d0ef5260d9ef9c908df6d332da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c78c8c51d135a051cb20d5fab965fd0c688640d0ef5260d9ef9c908df6d332da->enter($__internal_c78c8c51d135a051cb20d5fab965fd0c688640d0ef5260d9ef9c908df6d332da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_8f8dac854b4f5ef861790a078a28d23d385f813bb0188184dafdc086e4fd83c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8dac854b4f5ef861790a078a28d23d385f813bb0188184dafdc086e4fd83c3->enter($__internal_8f8dac854b4f5ef861790a078a28d23d385f813bb0188184dafdc086e4fd83c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_c78c8c51d135a051cb20d5fab965fd0c688640d0ef5260d9ef9c908df6d332da->leave($__internal_c78c8c51d135a051cb20d5fab965fd0c688640d0ef5260d9ef9c908df6d332da_prof);

        
        $__internal_8f8dac854b4f5ef861790a078a28d23d385f813bb0188184dafdc086e4fd83c3->leave($__internal_8f8dac854b4f5ef861790a078a28d23d385f813bb0188184dafdc086e4fd83c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
