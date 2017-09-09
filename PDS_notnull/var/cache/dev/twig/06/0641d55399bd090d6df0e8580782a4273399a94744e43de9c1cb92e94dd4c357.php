<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_3d5e943cc8f8fed9d099f1bc78b4627410a2d022699f6b6f147ae1065ccb6f2f extends Twig_Template
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
        $__internal_ed8e8570f2e90b98d09abcaae4accce5bde7717b1c3b43232895ba4fb6d7fe98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed8e8570f2e90b98d09abcaae4accce5bde7717b1c3b43232895ba4fb6d7fe98->enter($__internal_ed8e8570f2e90b98d09abcaae4accce5bde7717b1c3b43232895ba4fb6d7fe98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_bd3d8bff06cd6cd8154c5fd1a6c29e1ec81ef116cce2e3ef908e8feaa0e588e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3d8bff06cd6cd8154c5fd1a6c29e1ec81ef116cce2e3ef908e8feaa0e588e3->enter($__internal_bd3d8bff06cd6cd8154c5fd1a6c29e1ec81ef116cce2e3ef908e8feaa0e588e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ed8e8570f2e90b98d09abcaae4accce5bde7717b1c3b43232895ba4fb6d7fe98->leave($__internal_ed8e8570f2e90b98d09abcaae4accce5bde7717b1c3b43232895ba4fb6d7fe98_prof);

        
        $__internal_bd3d8bff06cd6cd8154c5fd1a6c29e1ec81ef116cce2e3ef908e8feaa0e588e3->leave($__internal_bd3d8bff06cd6cd8154c5fd1a6c29e1ec81ef116cce2e3ef908e8feaa0e588e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
