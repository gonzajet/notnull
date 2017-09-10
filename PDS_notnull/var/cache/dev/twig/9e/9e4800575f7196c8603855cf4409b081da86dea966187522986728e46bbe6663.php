<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_6d6c06b96e364367f395c82483451daac5fae51592a7cdd84884e1d19a39a9a5 extends Twig_Template
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
        $__internal_536fea7b1176a5162e8d94a134bbd0ba564b6fcf3f32cd8a220ec988cfc1b91b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_536fea7b1176a5162e8d94a134bbd0ba564b6fcf3f32cd8a220ec988cfc1b91b->enter($__internal_536fea7b1176a5162e8d94a134bbd0ba564b6fcf3f32cd8a220ec988cfc1b91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_152fb985323935642e063535cd491020d510807959d69d6d4f4cd7998594742c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152fb985323935642e063535cd491020d510807959d69d6d4f4cd7998594742c->enter($__internal_152fb985323935642e063535cd491020d510807959d69d6d4f4cd7998594742c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_536fea7b1176a5162e8d94a134bbd0ba564b6fcf3f32cd8a220ec988cfc1b91b->leave($__internal_536fea7b1176a5162e8d94a134bbd0ba564b6fcf3f32cd8a220ec988cfc1b91b_prof);

        
        $__internal_152fb985323935642e063535cd491020d510807959d69d6d4f4cd7998594742c->leave($__internal_152fb985323935642e063535cd491020d510807959d69d6d4f4cd7998594742c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
