<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e376c751e330419d3f9a1a4b0a70adfbd1d2211ad6355062ee234a1596327f48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_314259ae023f4834f40d9916f2e25842b2b8ca1da68eeb4d8742c98c0ee01025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_314259ae023f4834f40d9916f2e25842b2b8ca1da68eeb4d8742c98c0ee01025->enter($__internal_314259ae023f4834f40d9916f2e25842b2b8ca1da68eeb4d8742c98c0ee01025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_bd192c9d2319f455cdb8bc4340f9e29fade0ea20bf4e5f41b84e870d39e942b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd192c9d2319f455cdb8bc4340f9e29fade0ea20bf4e5f41b84e870d39e942b4->enter($__internal_bd192c9d2319f455cdb8bc4340f9e29fade0ea20bf4e5f41b84e870d39e942b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_314259ae023f4834f40d9916f2e25842b2b8ca1da68eeb4d8742c98c0ee01025->leave($__internal_314259ae023f4834f40d9916f2e25842b2b8ca1da68eeb4d8742c98c0ee01025_prof);

        
        $__internal_bd192c9d2319f455cdb8bc4340f9e29fade0ea20bf4e5f41b84e870d39e942b4->leave($__internal_bd192c9d2319f455cdb8bc4340f9e29fade0ea20bf4e5f41b84e870d39e942b4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da747938a8128548206f242bd61e95f50d27fd35332ed8f753d06b466fd6c9da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da747938a8128548206f242bd61e95f50d27fd35332ed8f753d06b466fd6c9da->enter($__internal_da747938a8128548206f242bd61e95f50d27fd35332ed8f753d06b466fd6c9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e423d6aad63dc6af27235a37872acee34321c4e2555df76b21e14f4f180e96ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e423d6aad63dc6af27235a37872acee34321c4e2555df76b21e14f4f180e96ac->enter($__internal_e423d6aad63dc6af27235a37872acee34321c4e2555df76b21e14f4f180e96ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e423d6aad63dc6af27235a37872acee34321c4e2555df76b21e14f4f180e96ac->leave($__internal_e423d6aad63dc6af27235a37872acee34321c4e2555df76b21e14f4f180e96ac_prof);

        
        $__internal_da747938a8128548206f242bd61e95f50d27fd35332ed8f753d06b466fd6c9da->leave($__internal_da747938a8128548206f242bd61e95f50d27fd35332ed8f753d06b466fd6c9da_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe21d9c1f931bdf63f0ee8049bdf654a8eb19c503b42dea0571ab12890f5536e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe21d9c1f931bdf63f0ee8049bdf654a8eb19c503b42dea0571ab12890f5536e->enter($__internal_fe21d9c1f931bdf63f0ee8049bdf654a8eb19c503b42dea0571ab12890f5536e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8a0bea2c0fc9ef904a381d8aa6a2f4afa38ca3eb135ff36e700f43a59b2c04a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0bea2c0fc9ef904a381d8aa6a2f4afa38ca3eb135ff36e700f43a59b2c04a4->enter($__internal_8a0bea2c0fc9ef904a381d8aa6a2f4afa38ca3eb135ff36e700f43a59b2c04a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8a0bea2c0fc9ef904a381d8aa6a2f4afa38ca3eb135ff36e700f43a59b2c04a4->leave($__internal_8a0bea2c0fc9ef904a381d8aa6a2f4afa38ca3eb135ff36e700f43a59b2c04a4_prof);

        
        $__internal_fe21d9c1f931bdf63f0ee8049bdf654a8eb19c503b42dea0571ab12890f5536e->leave($__internal_fe21d9c1f931bdf63f0ee8049bdf654a8eb19c503b42dea0571ab12890f5536e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a7eb3e9eb7b82983878cdf543177b2ac71d19d23684a33ffc07cc5ed73f7f0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a7eb3e9eb7b82983878cdf543177b2ac71d19d23684a33ffc07cc5ed73f7f0f->enter($__internal_2a7eb3e9eb7b82983878cdf543177b2ac71d19d23684a33ffc07cc5ed73f7f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_732a5e55804faa24675e869b70ede2dcb45758d65b01cac0f5cf5ed7153b7afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_732a5e55804faa24675e869b70ede2dcb45758d65b01cac0f5cf5ed7153b7afb->enter($__internal_732a5e55804faa24675e869b70ede2dcb45758d65b01cac0f5cf5ed7153b7afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_732a5e55804faa24675e869b70ede2dcb45758d65b01cac0f5cf5ed7153b7afb->leave($__internal_732a5e55804faa24675e869b70ede2dcb45758d65b01cac0f5cf5ed7153b7afb_prof);

        
        $__internal_2a7eb3e9eb7b82983878cdf543177b2ac71d19d23684a33ffc07cc5ed73f7f0f->leave($__internal_2a7eb3e9eb7b82983878cdf543177b2ac71d19d23684a33ffc07cc5ed73f7f0f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
