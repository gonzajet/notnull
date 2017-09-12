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
        $__internal_10896215fc24af152501641c7bcb392cb0b148226e74f3fd3935ed9957d64448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10896215fc24af152501641c7bcb392cb0b148226e74f3fd3935ed9957d64448->enter($__internal_10896215fc24af152501641c7bcb392cb0b148226e74f3fd3935ed9957d64448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_8e0d916b290a75d2577ce3479c5e0b5347f8ac8bac242d7c380b20a1aa1a9e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0d916b290a75d2577ce3479c5e0b5347f8ac8bac242d7c380b20a1aa1a9e29->enter($__internal_8e0d916b290a75d2577ce3479c5e0b5347f8ac8bac242d7c380b20a1aa1a9e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_10896215fc24af152501641c7bcb392cb0b148226e74f3fd3935ed9957d64448->leave($__internal_10896215fc24af152501641c7bcb392cb0b148226e74f3fd3935ed9957d64448_prof);

        
        $__internal_8e0d916b290a75d2577ce3479c5e0b5347f8ac8bac242d7c380b20a1aa1a9e29->leave($__internal_8e0d916b290a75d2577ce3479c5e0b5347f8ac8bac242d7c380b20a1aa1a9e29_prof);

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
