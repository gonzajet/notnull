<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_03aa938eff914b1994a708e7be68a2bea04bb846366d3fd1ea4e8aacc9edf4f8 extends Twig_Template
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
        $__internal_237150291acfccd9640a50e0a69f359e7015bdd4c89eac42cec6452558fe75aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_237150291acfccd9640a50e0a69f359e7015bdd4c89eac42cec6452558fe75aa->enter($__internal_237150291acfccd9640a50e0a69f359e7015bdd4c89eac42cec6452558fe75aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_c0fc0890259673e584a5e027a2c520e11d07b785a3cbae2ddbdc1da04d3dc89b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0fc0890259673e584a5e027a2c520e11d07b785a3cbae2ddbdc1da04d3dc89b->enter($__internal_c0fc0890259673e584a5e027a2c520e11d07b785a3cbae2ddbdc1da04d3dc89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_237150291acfccd9640a50e0a69f359e7015bdd4c89eac42cec6452558fe75aa->leave($__internal_237150291acfccd9640a50e0a69f359e7015bdd4c89eac42cec6452558fe75aa_prof);

        
        $__internal_c0fc0890259673e584a5e027a2c520e11d07b785a3cbae2ddbdc1da04d3dc89b->leave($__internal_c0fc0890259673e584a5e027a2c520e11d07b785a3cbae2ddbdc1da04d3dc89b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
