<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f1375f2854ee9c43923ee702f6f1c76072318d7fe79fcd15d2f2b0e72c516968 extends Twig_Template
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
        $__internal_a7d799e2ba9cec5a3c65153a19dbc9b8ae8316bb96e6b97bb2e164ebe8708b93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d799e2ba9cec5a3c65153a19dbc9b8ae8316bb96e6b97bb2e164ebe8708b93->enter($__internal_a7d799e2ba9cec5a3c65153a19dbc9b8ae8316bb96e6b97bb2e164ebe8708b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_9d06fcae38eb2601679aa5723c61204cf2e24959e0bbf6dd82bb088b05cd102a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d06fcae38eb2601679aa5723c61204cf2e24959e0bbf6dd82bb088b05cd102a->enter($__internal_9d06fcae38eb2601679aa5723c61204cf2e24959e0bbf6dd82bb088b05cd102a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a7d799e2ba9cec5a3c65153a19dbc9b8ae8316bb96e6b97bb2e164ebe8708b93->leave($__internal_a7d799e2ba9cec5a3c65153a19dbc9b8ae8316bb96e6b97bb2e164ebe8708b93_prof);

        
        $__internal_9d06fcae38eb2601679aa5723c61204cf2e24959e0bbf6dd82bb088b05cd102a->leave($__internal_9d06fcae38eb2601679aa5723c61204cf2e24959e0bbf6dd82bb088b05cd102a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
