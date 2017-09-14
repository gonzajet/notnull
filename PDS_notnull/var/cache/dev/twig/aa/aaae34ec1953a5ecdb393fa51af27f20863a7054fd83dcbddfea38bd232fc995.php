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
        $__internal_5da8ac0f517ca8bbfe32d63f761274793592567b222f86a7dd82ff21b71b5b64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5da8ac0f517ca8bbfe32d63f761274793592567b222f86a7dd82ff21b71b5b64->enter($__internal_5da8ac0f517ca8bbfe32d63f761274793592567b222f86a7dd82ff21b71b5b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f9b154958bb79b882a912ffd9891aed8d568f8edb7529311daf6c4764aedcb48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b154958bb79b882a912ffd9891aed8d568f8edb7529311daf6c4764aedcb48->enter($__internal_f9b154958bb79b882a912ffd9891aed8d568f8edb7529311daf6c4764aedcb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5da8ac0f517ca8bbfe32d63f761274793592567b222f86a7dd82ff21b71b5b64->leave($__internal_5da8ac0f517ca8bbfe32d63f761274793592567b222f86a7dd82ff21b71b5b64_prof);

        
        $__internal_f9b154958bb79b882a912ffd9891aed8d568f8edb7529311daf6c4764aedcb48->leave($__internal_f9b154958bb79b882a912ffd9891aed8d568f8edb7529311daf6c4764aedcb48_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_48526a622365a48c9da6d91774c88f3b6ae6883f20212ffdc1df8109b69ac024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48526a622365a48c9da6d91774c88f3b6ae6883f20212ffdc1df8109b69ac024->enter($__internal_48526a622365a48c9da6d91774c88f3b6ae6883f20212ffdc1df8109b69ac024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f525fef84850c53f1ead65ab3570cc5acf3fb61eb7623fb7354977c4d1f681fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f525fef84850c53f1ead65ab3570cc5acf3fb61eb7623fb7354977c4d1f681fd->enter($__internal_f525fef84850c53f1ead65ab3570cc5acf3fb61eb7623fb7354977c4d1f681fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f525fef84850c53f1ead65ab3570cc5acf3fb61eb7623fb7354977c4d1f681fd->leave($__internal_f525fef84850c53f1ead65ab3570cc5acf3fb61eb7623fb7354977c4d1f681fd_prof);

        
        $__internal_48526a622365a48c9da6d91774c88f3b6ae6883f20212ffdc1df8109b69ac024->leave($__internal_48526a622365a48c9da6d91774c88f3b6ae6883f20212ffdc1df8109b69ac024_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d8104bbaff4e7bc88c4c6d1a5e6d9e89e7153e6fa49d8ee771a62e1ad90516f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d8104bbaff4e7bc88c4c6d1a5e6d9e89e7153e6fa49d8ee771a62e1ad90516f->enter($__internal_3d8104bbaff4e7bc88c4c6d1a5e6d9e89e7153e6fa49d8ee771a62e1ad90516f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6c52d90c37391c8450aecefa7c543ff95d30cfde7c72a8e7cdddc4cd370af148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c52d90c37391c8450aecefa7c543ff95d30cfde7c72a8e7cdddc4cd370af148->enter($__internal_6c52d90c37391c8450aecefa7c543ff95d30cfde7c72a8e7cdddc4cd370af148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6c52d90c37391c8450aecefa7c543ff95d30cfde7c72a8e7cdddc4cd370af148->leave($__internal_6c52d90c37391c8450aecefa7c543ff95d30cfde7c72a8e7cdddc4cd370af148_prof);

        
        $__internal_3d8104bbaff4e7bc88c4c6d1a5e6d9e89e7153e6fa49d8ee771a62e1ad90516f->leave($__internal_3d8104bbaff4e7bc88c4c6d1a5e6d9e89e7153e6fa49d8ee771a62e1ad90516f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7622af78ea9b461b73dcf728bd16d6e68e458b143c5756e3d77ded363f22c677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7622af78ea9b461b73dcf728bd16d6e68e458b143c5756e3d77ded363f22c677->enter($__internal_7622af78ea9b461b73dcf728bd16d6e68e458b143c5756e3d77ded363f22c677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_115c0f8caf507dfbfccf0ef7664bd7a06128ed2e2ad390e60f98e6f6bf8716cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115c0f8caf507dfbfccf0ef7664bd7a06128ed2e2ad390e60f98e6f6bf8716cc->enter($__internal_115c0f8caf507dfbfccf0ef7664bd7a06128ed2e2ad390e60f98e6f6bf8716cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_115c0f8caf507dfbfccf0ef7664bd7a06128ed2e2ad390e60f98e6f6bf8716cc->leave($__internal_115c0f8caf507dfbfccf0ef7664bd7a06128ed2e2ad390e60f98e6f6bf8716cc_prof);

        
        $__internal_7622af78ea9b461b73dcf728bd16d6e68e458b143c5756e3d77ded363f22c677->leave($__internal_7622af78ea9b461b73dcf728bd16d6e68e458b143c5756e3d77ded363f22c677_prof);

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
", "@Twig/Exception/exception_full.html.twig", "E:\\Users\\Carlitos\\Documents\\EstacionAR\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
