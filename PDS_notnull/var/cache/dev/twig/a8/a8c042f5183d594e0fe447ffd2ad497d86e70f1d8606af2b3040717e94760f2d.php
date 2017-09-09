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
        $__internal_cfe5e22fa03b21ca9baa6d185de10ee3ca0d130a766d4e9d29f43624c548ae21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfe5e22fa03b21ca9baa6d185de10ee3ca0d130a766d4e9d29f43624c548ae21->enter($__internal_cfe5e22fa03b21ca9baa6d185de10ee3ca0d130a766d4e9d29f43624c548ae21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_963bf03f51810d85ed134df64241cdfee6506ac2537cf0c9622c4d694a813c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963bf03f51810d85ed134df64241cdfee6506ac2537cf0c9622c4d694a813c5e->enter($__internal_963bf03f51810d85ed134df64241cdfee6506ac2537cf0c9622c4d694a813c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_cfe5e22fa03b21ca9baa6d185de10ee3ca0d130a766d4e9d29f43624c548ae21->leave($__internal_cfe5e22fa03b21ca9baa6d185de10ee3ca0d130a766d4e9d29f43624c548ae21_prof);

        
        $__internal_963bf03f51810d85ed134df64241cdfee6506ac2537cf0c9622c4d694a813c5e->leave($__internal_963bf03f51810d85ed134df64241cdfee6506ac2537cf0c9622c4d694a813c5e_prof);

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
