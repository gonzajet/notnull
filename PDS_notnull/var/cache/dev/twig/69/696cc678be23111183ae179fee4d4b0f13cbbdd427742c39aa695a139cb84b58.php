<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_bc002d44418fb8c0d656c09dc978a8bb939752af74fb4075f3ebda5498ebbe2f extends Twig_Template
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
        $__internal_31580251562e2b6cfddec400ec222c7e14e26723c77fd0f8c14f203194d6f81b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31580251562e2b6cfddec400ec222c7e14e26723c77fd0f8c14f203194d6f81b->enter($__internal_31580251562e2b6cfddec400ec222c7e14e26723c77fd0f8c14f203194d6f81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_a3d9b5b087603ef43bca71cb6c115a7b7579e81d46c10366288c222a4bc7d24f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3d9b5b087603ef43bca71cb6c115a7b7579e81d46c10366288c222a4bc7d24f->enter($__internal_a3d9b5b087603ef43bca71cb6c115a7b7579e81d46c10366288c222a4bc7d24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_31580251562e2b6cfddec400ec222c7e14e26723c77fd0f8c14f203194d6f81b->leave($__internal_31580251562e2b6cfddec400ec222c7e14e26723c77fd0f8c14f203194d6f81b_prof);

        
        $__internal_a3d9b5b087603ef43bca71cb6c115a7b7579e81d46c10366288c222a4bc7d24f->leave($__internal_a3d9b5b087603ef43bca71cb6c115a7b7579e81d46c10366288c222a4bc7d24f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
