<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_2a84195f80aa6238e7cf8df97bc1765a89e796fd7a9b56905858e4c316871b2b extends Twig_Template
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
        $__internal_493edfdba31414cdfc62d3db8253e5e2b4c1de8bfd206bbd0cf5cc2023ebe889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_493edfdba31414cdfc62d3db8253e5e2b4c1de8bfd206bbd0cf5cc2023ebe889->enter($__internal_493edfdba31414cdfc62d3db8253e5e2b4c1de8bfd206bbd0cf5cc2023ebe889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_c5c4597054d1c152cd1a7710723c23efba3da7c0c6b3b2d6870697974b864f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c4597054d1c152cd1a7710723c23efba3da7c0c6b3b2d6870697974b864f80->enter($__internal_c5c4597054d1c152cd1a7710723c23efba3da7c0c6b3b2d6870697974b864f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_493edfdba31414cdfc62d3db8253e5e2b4c1de8bfd206bbd0cf5cc2023ebe889->leave($__internal_493edfdba31414cdfc62d3db8253e5e2b4c1de8bfd206bbd0cf5cc2023ebe889_prof);

        
        $__internal_c5c4597054d1c152cd1a7710723c23efba3da7c0c6b3b2d6870697974b864f80->leave($__internal_c5c4597054d1c152cd1a7710723c23efba3da7c0c6b3b2d6870697974b864f80_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
