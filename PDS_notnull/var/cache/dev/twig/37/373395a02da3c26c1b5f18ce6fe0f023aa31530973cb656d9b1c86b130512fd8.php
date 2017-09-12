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
        $__internal_da2089857d8f2bb72f3529d5df11e9bdfed20dbb76a520b3c29d7dc1b34eee24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da2089857d8f2bb72f3529d5df11e9bdfed20dbb76a520b3c29d7dc1b34eee24->enter($__internal_da2089857d8f2bb72f3529d5df11e9bdfed20dbb76a520b3c29d7dc1b34eee24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_3d71d403c6d7e9e8a012dd1b0b6f082e4b57eb78a7f73f905ca628f47b655a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d71d403c6d7e9e8a012dd1b0b6f082e4b57eb78a7f73f905ca628f47b655a73->enter($__internal_3d71d403c6d7e9e8a012dd1b0b6f082e4b57eb78a7f73f905ca628f47b655a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_da2089857d8f2bb72f3529d5df11e9bdfed20dbb76a520b3c29d7dc1b34eee24->leave($__internal_da2089857d8f2bb72f3529d5df11e9bdfed20dbb76a520b3c29d7dc1b34eee24_prof);

        
        $__internal_3d71d403c6d7e9e8a012dd1b0b6f082e4b57eb78a7f73f905ca628f47b655a73->leave($__internal_3d71d403c6d7e9e8a012dd1b0b6f082e4b57eb78a7f73f905ca628f47b655a73_prof);

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
