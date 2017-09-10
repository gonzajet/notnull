<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_851b499c1a09de6b5ff59e234923a0fa79f12ce372a047b59f3636edf33bcd85 extends Twig_Template
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
        $__internal_1f572f677353425dcc6ba1aba0832ac68bcabc309cdafad70d4ab479eee9fda7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f572f677353425dcc6ba1aba0832ac68bcabc309cdafad70d4ab479eee9fda7->enter($__internal_1f572f677353425dcc6ba1aba0832ac68bcabc309cdafad70d4ab479eee9fda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_df13ae362b1b52e06dc166955a924483e37dfa1bc5672356e2b72115b997f083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df13ae362b1b52e06dc166955a924483e37dfa1bc5672356e2b72115b997f083->enter($__internal_df13ae362b1b52e06dc166955a924483e37dfa1bc5672356e2b72115b997f083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1f572f677353425dcc6ba1aba0832ac68bcabc309cdafad70d4ab479eee9fda7->leave($__internal_1f572f677353425dcc6ba1aba0832ac68bcabc309cdafad70d4ab479eee9fda7_prof);

        
        $__internal_df13ae362b1b52e06dc166955a924483e37dfa1bc5672356e2b72115b997f083->leave($__internal_df13ae362b1b52e06dc166955a924483e37dfa1bc5672356e2b72115b997f083_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
