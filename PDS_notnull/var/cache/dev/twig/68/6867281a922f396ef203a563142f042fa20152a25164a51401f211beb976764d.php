<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a19bda121ee4596e3f49be1d55380b502617e75c6213f5a735ef4dbf693a42c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74328701ca19bcf8ec780f1df6d80a2cd6c0986b22aea86d052e8c032c409b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74328701ca19bcf8ec780f1df6d80a2cd6c0986b22aea86d052e8c032c409b3a->enter($__internal_74328701ca19bcf8ec780f1df6d80a2cd6c0986b22aea86d052e8c032c409b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_02447a509d9503333b7f1c7055b63b5262e10658df8f006ee1b9ba5d270e6d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02447a509d9503333b7f1c7055b63b5262e10658df8f006ee1b9ba5d270e6d72->enter($__internal_02447a509d9503333b7f1c7055b63b5262e10658df8f006ee1b9ba5d270e6d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74328701ca19bcf8ec780f1df6d80a2cd6c0986b22aea86d052e8c032c409b3a->leave($__internal_74328701ca19bcf8ec780f1df6d80a2cd6c0986b22aea86d052e8c032c409b3a_prof);

        
        $__internal_02447a509d9503333b7f1c7055b63b5262e10658df8f006ee1b9ba5d270e6d72->leave($__internal_02447a509d9503333b7f1c7055b63b5262e10658df8f006ee1b9ba5d270e6d72_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9678f98286b0836382b85d5a5a35925d4cb92fb92da60957848afa59bb2946a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9678f98286b0836382b85d5a5a35925d4cb92fb92da60957848afa59bb2946a->enter($__internal_e9678f98286b0836382b85d5a5a35925d4cb92fb92da60957848afa59bb2946a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7480d9855e40859ff41ac03ea399d6f11dc0c12c8faf19304f48767e6f8019cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7480d9855e40859ff41ac03ea399d6f11dc0c12c8faf19304f48767e6f8019cf->enter($__internal_7480d9855e40859ff41ac03ea399d6f11dc0c12c8faf19304f48767e6f8019cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7480d9855e40859ff41ac03ea399d6f11dc0c12c8faf19304f48767e6f8019cf->leave($__internal_7480d9855e40859ff41ac03ea399d6f11dc0c12c8faf19304f48767e6f8019cf_prof);

        
        $__internal_e9678f98286b0836382b85d5a5a35925d4cb92fb92da60957848afa59bb2946a->leave($__internal_e9678f98286b0836382b85d5a5a35925d4cb92fb92da60957848afa59bb2946a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3fabd365060011d703df346b747ef95f108841f9f6c085773cb45bff9b4d256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3fabd365060011d703df346b747ef95f108841f9f6c085773cb45bff9b4d256->enter($__internal_f3fabd365060011d703df346b747ef95f108841f9f6c085773cb45bff9b4d256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b68a63201994a378ae7ffc51d1d67cdb2a7a318ecd1e9d70c9eff39e10455353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68a63201994a378ae7ffc51d1d67cdb2a7a318ecd1e9d70c9eff39e10455353->enter($__internal_b68a63201994a378ae7ffc51d1d67cdb2a7a318ecd1e9d70c9eff39e10455353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b68a63201994a378ae7ffc51d1d67cdb2a7a318ecd1e9d70c9eff39e10455353->leave($__internal_b68a63201994a378ae7ffc51d1d67cdb2a7a318ecd1e9d70c9eff39e10455353_prof);

        
        $__internal_f3fabd365060011d703df346b747ef95f108841f9f6c085773cb45bff9b4d256->leave($__internal_f3fabd365060011d703df346b747ef95f108841f9f6c085773cb45bff9b4d256_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
