<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_196fc751e8eff37053a59b16d65991cef582337b190b691419e76d75fd72247f extends Twig_Template
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
        $__internal_6e1b19e7145bb6cf48f37a7ef872c8a90196f8c9c16f7f5dfa0f137167a4463b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e1b19e7145bb6cf48f37a7ef872c8a90196f8c9c16f7f5dfa0f137167a4463b->enter($__internal_6e1b19e7145bb6cf48f37a7ef872c8a90196f8c9c16f7f5dfa0f137167a4463b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_9b62dec8bc5bfa7f53a3b98733bb6f17040b9c11729748f2365d66188ece0d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b62dec8bc5bfa7f53a3b98733bb6f17040b9c11729748f2365d66188ece0d77->enter($__internal_9b62dec8bc5bfa7f53a3b98733bb6f17040b9c11729748f2365d66188ece0d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_6e1b19e7145bb6cf48f37a7ef872c8a90196f8c9c16f7f5dfa0f137167a4463b->leave($__internal_6e1b19e7145bb6cf48f37a7ef872c8a90196f8c9c16f7f5dfa0f137167a4463b_prof);

        
        $__internal_9b62dec8bc5bfa7f53a3b98733bb6f17040b9c11729748f2365d66188ece0d77->leave($__internal_9b62dec8bc5bfa7f53a3b98733bb6f17040b9c11729748f2365d66188ece0d77_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
