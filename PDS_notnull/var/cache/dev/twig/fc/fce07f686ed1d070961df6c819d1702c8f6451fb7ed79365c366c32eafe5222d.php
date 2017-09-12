<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f483fb8eb43fd5139bc5a55397d4158c4140f40505b81b81151a3f167637455b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a5eb38d40098e0a6c6178b8be8a47eb8d1e83f483e131b548311981b9ab85e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5eb38d40098e0a6c6178b8be8a47eb8d1e83f483e131b548311981b9ab85e0e->enter($__internal_a5eb38d40098e0a6c6178b8be8a47eb8d1e83f483e131b548311981b9ab85e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_4ec153177ac5a31e1c1c3bc0e90fe353d4a97e6445cabacf500ea4ccaa17a1f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec153177ac5a31e1c1c3bc0e90fe353d4a97e6445cabacf500ea4ccaa17a1f4->enter($__internal_4ec153177ac5a31e1c1c3bc0e90fe353d4a97e6445cabacf500ea4ccaa17a1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5eb38d40098e0a6c6178b8be8a47eb8d1e83f483e131b548311981b9ab85e0e->leave($__internal_a5eb38d40098e0a6c6178b8be8a47eb8d1e83f483e131b548311981b9ab85e0e_prof);

        
        $__internal_4ec153177ac5a31e1c1c3bc0e90fe353d4a97e6445cabacf500ea4ccaa17a1f4->leave($__internal_4ec153177ac5a31e1c1c3bc0e90fe353d4a97e6445cabacf500ea4ccaa17a1f4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a4447e2215695c8e88402f8f343559152ee3cab2293e6119ae0a229bf5c189b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4447e2215695c8e88402f8f343559152ee3cab2293e6119ae0a229bf5c189b7->enter($__internal_a4447e2215695c8e88402f8f343559152ee3cab2293e6119ae0a229bf5c189b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_883f96418870bbae2addf68237d50d8ab934728f9d77c0b2753c1f37d1781e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_883f96418870bbae2addf68237d50d8ab934728f9d77c0b2753c1f37d1781e86->enter($__internal_883f96418870bbae2addf68237d50d8ab934728f9d77c0b2753c1f37d1781e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_883f96418870bbae2addf68237d50d8ab934728f9d77c0b2753c1f37d1781e86->leave($__internal_883f96418870bbae2addf68237d50d8ab934728f9d77c0b2753c1f37d1781e86_prof);

        
        $__internal_a4447e2215695c8e88402f8f343559152ee3cab2293e6119ae0a229bf5c189b7->leave($__internal_a4447e2215695c8e88402f8f343559152ee3cab2293e6119ae0a229bf5c189b7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0dc291cc22bc3df5016fd434e585aedcb8de30a571104a93edb7c142a380aa70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dc291cc22bc3df5016fd434e585aedcb8de30a571104a93edb7c142a380aa70->enter($__internal_0dc291cc22bc3df5016fd434e585aedcb8de30a571104a93edb7c142a380aa70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ebb0bb6e8664b85653afe88942d87882256042b02743a9b8705caa6ebe06b37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb0bb6e8664b85653afe88942d87882256042b02743a9b8705caa6ebe06b37c->enter($__internal_ebb0bb6e8664b85653afe88942d87882256042b02743a9b8705caa6ebe06b37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ebb0bb6e8664b85653afe88942d87882256042b02743a9b8705caa6ebe06b37c->leave($__internal_ebb0bb6e8664b85653afe88942d87882256042b02743a9b8705caa6ebe06b37c_prof);

        
        $__internal_0dc291cc22bc3df5016fd434e585aedcb8de30a571104a93edb7c142a380aa70->leave($__internal_0dc291cc22bc3df5016fd434e585aedcb8de30a571104a93edb7c142a380aa70_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_05cd504dee3c64cd7cc451d6e936f34e2a819f931acc28df8dc4269982b3212d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05cd504dee3c64cd7cc451d6e936f34e2a819f931acc28df8dc4269982b3212d->enter($__internal_05cd504dee3c64cd7cc451d6e936f34e2a819f931acc28df8dc4269982b3212d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_171f50ce724b173585fa6105bcfd12e7832fb12515e545874ebe7658d60921e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171f50ce724b173585fa6105bcfd12e7832fb12515e545874ebe7658d60921e1->enter($__internal_171f50ce724b173585fa6105bcfd12e7832fb12515e545874ebe7658d60921e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_171f50ce724b173585fa6105bcfd12e7832fb12515e545874ebe7658d60921e1->leave($__internal_171f50ce724b173585fa6105bcfd12e7832fb12515e545874ebe7658d60921e1_prof);

        
        $__internal_05cd504dee3c64cd7cc451d6e936f34e2a819f931acc28df8dc4269982b3212d->leave($__internal_05cd504dee3c64cd7cc451d6e936f34e2a819f931acc28df8dc4269982b3212d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
