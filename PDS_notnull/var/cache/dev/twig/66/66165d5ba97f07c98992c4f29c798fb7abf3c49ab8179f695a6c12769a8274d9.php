<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_776cd615b8759ed72317ae086378acc489295d2714037f9e3fc9a0e7d4ba460c extends Twig_Template
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
        $__internal_50f4e8917baa9f227ec0926fdc5eed40b39658d7a194030bf97c4c87390c80dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50f4e8917baa9f227ec0926fdc5eed40b39658d7a194030bf97c4c87390c80dc->enter($__internal_50f4e8917baa9f227ec0926fdc5eed40b39658d7a194030bf97c4c87390c80dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_edff885713b754d8feda2af97631e6e6465f3da643a5169a1b37be7357a623f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edff885713b754d8feda2af97631e6e6465f3da643a5169a1b37be7357a623f3->enter($__internal_edff885713b754d8feda2af97631e6e6465f3da643a5169a1b37be7357a623f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_50f4e8917baa9f227ec0926fdc5eed40b39658d7a194030bf97c4c87390c80dc->leave($__internal_50f4e8917baa9f227ec0926fdc5eed40b39658d7a194030bf97c4c87390c80dc_prof);

        
        $__internal_edff885713b754d8feda2af97631e6e6465f3da643a5169a1b37be7357a623f3->leave($__internal_edff885713b754d8feda2af97631e6e6465f3da643a5169a1b37be7357a623f3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
