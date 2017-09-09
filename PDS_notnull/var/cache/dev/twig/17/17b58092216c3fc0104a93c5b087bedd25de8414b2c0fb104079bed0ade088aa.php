<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_af2117130abf5bcacf87e2b63e32640f77062e16e1e828690d94fbc760c093ca extends Twig_Template
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
        $__internal_10acc9c4963622f21cdb7bdee2535cd572e5269789868e16095c0137a6bdaf58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10acc9c4963622f21cdb7bdee2535cd572e5269789868e16095c0137a6bdaf58->enter($__internal_10acc9c4963622f21cdb7bdee2535cd572e5269789868e16095c0137a6bdaf58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_6ad4630806e8e5f987815b7fb8775ba75b55f0ee3215dd116b9c6b4720ce4895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad4630806e8e5f987815b7fb8775ba75b55f0ee3215dd116b9c6b4720ce4895->enter($__internal_6ad4630806e8e5f987815b7fb8775ba75b55f0ee3215dd116b9c6b4720ce4895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_10acc9c4963622f21cdb7bdee2535cd572e5269789868e16095c0137a6bdaf58->leave($__internal_10acc9c4963622f21cdb7bdee2535cd572e5269789868e16095c0137a6bdaf58_prof);

        
        $__internal_6ad4630806e8e5f987815b7fb8775ba75b55f0ee3215dd116b9c6b4720ce4895->leave($__internal_6ad4630806e8e5f987815b7fb8775ba75b55f0ee3215dd116b9c6b4720ce4895_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
