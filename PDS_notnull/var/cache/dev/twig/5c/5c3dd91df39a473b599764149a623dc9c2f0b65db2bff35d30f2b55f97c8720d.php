<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_004ed2c035a0936893d03c557d3f66e4ffb22ea4677e43bb1b574f1910da27c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_8d0c95c6132b42de5914d908a3eba6801f81731773cd41d0720ff9f2151635c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d0c95c6132b42de5914d908a3eba6801f81731773cd41d0720ff9f2151635c1->enter($__internal_8d0c95c6132b42de5914d908a3eba6801f81731773cd41d0720ff9f2151635c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_72ba29eaa0297dc601794d7ff647f67f03fbbd1e802967a205c92ec48d5c1ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ba29eaa0297dc601794d7ff647f67f03fbbd1e802967a205c92ec48d5c1ba9->enter($__internal_72ba29eaa0297dc601794d7ff647f67f03fbbd1e802967a205c92ec48d5c1ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d0c95c6132b42de5914d908a3eba6801f81731773cd41d0720ff9f2151635c1->leave($__internal_8d0c95c6132b42de5914d908a3eba6801f81731773cd41d0720ff9f2151635c1_prof);

        
        $__internal_72ba29eaa0297dc601794d7ff647f67f03fbbd1e802967a205c92ec48d5c1ba9->leave($__internal_72ba29eaa0297dc601794d7ff647f67f03fbbd1e802967a205c92ec48d5c1ba9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1df8bf0940e400f5e5cf0ed757a2972d733f98a4a32948ac53ea3e16e7406887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df8bf0940e400f5e5cf0ed757a2972d733f98a4a32948ac53ea3e16e7406887->enter($__internal_1df8bf0940e400f5e5cf0ed757a2972d733f98a4a32948ac53ea3e16e7406887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_790b3cfeaa0eec21846ee3a03e2a17563d87c435bcbb7e770311151426e8670d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790b3cfeaa0eec21846ee3a03e2a17563d87c435bcbb7e770311151426e8670d->enter($__internal_790b3cfeaa0eec21846ee3a03e2a17563d87c435bcbb7e770311151426e8670d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_790b3cfeaa0eec21846ee3a03e2a17563d87c435bcbb7e770311151426e8670d->leave($__internal_790b3cfeaa0eec21846ee3a03e2a17563d87c435bcbb7e770311151426e8670d_prof);

        
        $__internal_1df8bf0940e400f5e5cf0ed757a2972d733f98a4a32948ac53ea3e16e7406887->leave($__internal_1df8bf0940e400f5e5cf0ed757a2972d733f98a4a32948ac53ea3e16e7406887_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_15b4d4abaea1e32eda4ba745bb2928037dee9a13e2fbe35093f7fa7e65e299a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15b4d4abaea1e32eda4ba745bb2928037dee9a13e2fbe35093f7fa7e65e299a7->enter($__internal_15b4d4abaea1e32eda4ba745bb2928037dee9a13e2fbe35093f7fa7e65e299a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4354e926d6d631e2663b0c0215a3d56770f1924b5f43fe714a4be3a1739b30e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4354e926d6d631e2663b0c0215a3d56770f1924b5f43fe714a4be3a1739b30e1->enter($__internal_4354e926d6d631e2663b0c0215a3d56770f1924b5f43fe714a4be3a1739b30e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4354e926d6d631e2663b0c0215a3d56770f1924b5f43fe714a4be3a1739b30e1->leave($__internal_4354e926d6d631e2663b0c0215a3d56770f1924b5f43fe714a4be3a1739b30e1_prof);

        
        $__internal_15b4d4abaea1e32eda4ba745bb2928037dee9a13e2fbe35093f7fa7e65e299a7->leave($__internal_15b4d4abaea1e32eda4ba745bb2928037dee9a13e2fbe35093f7fa7e65e299a7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
