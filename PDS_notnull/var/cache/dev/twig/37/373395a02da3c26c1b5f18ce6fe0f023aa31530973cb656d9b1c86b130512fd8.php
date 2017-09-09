<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c1e0b93695c65a4be7240a0661dad4b1f7d3ad14833b5a373cc0d1d5785b6f25 extends Twig_Template
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
        $__internal_826435c11b65e69bf6961e3c4bb77137c8009ffec75819185ea7cea31f60a9d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_826435c11b65e69bf6961e3c4bb77137c8009ffec75819185ea7cea31f60a9d2->enter($__internal_826435c11b65e69bf6961e3c4bb77137c8009ffec75819185ea7cea31f60a9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_4195dc119b915bc4c7222cef6f3fd86dddfc12b1f12820eaf9cc18ef1e9da3f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4195dc119b915bc4c7222cef6f3fd86dddfc12b1f12820eaf9cc18ef1e9da3f9->enter($__internal_4195dc119b915bc4c7222cef6f3fd86dddfc12b1f12820eaf9cc18ef1e9da3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_826435c11b65e69bf6961e3c4bb77137c8009ffec75819185ea7cea31f60a9d2->leave($__internal_826435c11b65e69bf6961e3c4bb77137c8009ffec75819185ea7cea31f60a9d2_prof);

        
        $__internal_4195dc119b915bc4c7222cef6f3fd86dddfc12b1f12820eaf9cc18ef1e9da3f9->leave($__internal_4195dc119b915bc4c7222cef6f3fd86dddfc12b1f12820eaf9cc18ef1e9da3f9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
