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
        $__internal_0a3aca2044c7963705c76359d2023eb8b02fd54dbd661145e10f2e514f08ffcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a3aca2044c7963705c76359d2023eb8b02fd54dbd661145e10f2e514f08ffcd->enter($__internal_0a3aca2044c7963705c76359d2023eb8b02fd54dbd661145e10f2e514f08ffcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_f13b199b067dabbea2a28ea35a32e9d65da8dcc86e1b4660480c3c5833c8fd4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13b199b067dabbea2a28ea35a32e9d65da8dcc86e1b4660480c3c5833c8fd4c->enter($__internal_f13b199b067dabbea2a28ea35a32e9d65da8dcc86e1b4660480c3c5833c8fd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0a3aca2044c7963705c76359d2023eb8b02fd54dbd661145e10f2e514f08ffcd->leave($__internal_0a3aca2044c7963705c76359d2023eb8b02fd54dbd661145e10f2e514f08ffcd_prof);

        
        $__internal_f13b199b067dabbea2a28ea35a32e9d65da8dcc86e1b4660480c3c5833c8fd4c->leave($__internal_f13b199b067dabbea2a28ea35a32e9d65da8dcc86e1b4660480c3c5833c8fd4c_prof);

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
