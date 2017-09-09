<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_cab5a67889bd3a426ce6a939f99ae35d294977358932f5d4e077defbbb342f18 extends Twig_Template
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
        $__internal_500c381bc4ac368bbd00063f660441d2a37cf71cd6674b2f8faae12267ae3cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_500c381bc4ac368bbd00063f660441d2a37cf71cd6674b2f8faae12267ae3cb5->enter($__internal_500c381bc4ac368bbd00063f660441d2a37cf71cd6674b2f8faae12267ae3cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_8d6cec4735bba660f3dcb253c2b381f7e6df5e77595edaa288ec486c6b8f4ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6cec4735bba660f3dcb253c2b381f7e6df5e77595edaa288ec486c6b8f4ac0->enter($__internal_8d6cec4735bba660f3dcb253c2b381f7e6df5e77595edaa288ec486c6b8f4ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_500c381bc4ac368bbd00063f660441d2a37cf71cd6674b2f8faae12267ae3cb5->leave($__internal_500c381bc4ac368bbd00063f660441d2a37cf71cd6674b2f8faae12267ae3cb5_prof);

        
        $__internal_8d6cec4735bba660f3dcb253c2b381f7e6df5e77595edaa288ec486c6b8f4ac0->leave($__internal_8d6cec4735bba660f3dcb253c2b381f7e6df5e77595edaa288ec486c6b8f4ac0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
