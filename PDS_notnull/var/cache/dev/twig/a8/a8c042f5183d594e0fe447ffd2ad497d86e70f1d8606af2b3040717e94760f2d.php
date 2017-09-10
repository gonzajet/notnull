<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_6886cbef29787afff90251e9e84872c41856f254feaec4ade7c9a87ef4e92692 extends Twig_Template
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
        $__internal_526b495d8fead832a2fbffb881a0f97dd7aa059a739993e947fa5b561b966646 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526b495d8fead832a2fbffb881a0f97dd7aa059a739993e947fa5b561b966646->enter($__internal_526b495d8fead832a2fbffb881a0f97dd7aa059a739993e947fa5b561b966646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_fc053f063e0696dc35dbd76f263c258199df3f934a2e769020130ed8c1e23ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc053f063e0696dc35dbd76f263c258199df3f934a2e769020130ed8c1e23ec3->enter($__internal_fc053f063e0696dc35dbd76f263c258199df3f934a2e769020130ed8c1e23ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_526b495d8fead832a2fbffb881a0f97dd7aa059a739993e947fa5b561b966646->leave($__internal_526b495d8fead832a2fbffb881a0f97dd7aa059a739993e947fa5b561b966646_prof);

        
        $__internal_fc053f063e0696dc35dbd76f263c258199df3f934a2e769020130ed8c1e23ec3->leave($__internal_fc053f063e0696dc35dbd76f263c258199df3f934a2e769020130ed8c1e23ec3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
