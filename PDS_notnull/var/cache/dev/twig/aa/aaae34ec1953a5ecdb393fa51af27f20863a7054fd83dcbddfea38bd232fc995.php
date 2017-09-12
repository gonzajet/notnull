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
        $__internal_d557569ec6643c8da48ca05fd5510ddcf20420fd0c69f7c9f174c45c60d03d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d557569ec6643c8da48ca05fd5510ddcf20420fd0c69f7c9f174c45c60d03d3e->enter($__internal_d557569ec6643c8da48ca05fd5510ddcf20420fd0c69f7c9f174c45c60d03d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_386b66fb09f162e1caa6952d4c7b8778b8987e4931bc54a197deb79b20a432a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386b66fb09f162e1caa6952d4c7b8778b8987e4931bc54a197deb79b20a432a7->enter($__internal_386b66fb09f162e1caa6952d4c7b8778b8987e4931bc54a197deb79b20a432a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d557569ec6643c8da48ca05fd5510ddcf20420fd0c69f7c9f174c45c60d03d3e->leave($__internal_d557569ec6643c8da48ca05fd5510ddcf20420fd0c69f7c9f174c45c60d03d3e_prof);

        
        $__internal_386b66fb09f162e1caa6952d4c7b8778b8987e4931bc54a197deb79b20a432a7->leave($__internal_386b66fb09f162e1caa6952d4c7b8778b8987e4931bc54a197deb79b20a432a7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9b744545f15997533f782b1d09d250b4588cff32d76e734cdd8fc74ea516803a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b744545f15997533f782b1d09d250b4588cff32d76e734cdd8fc74ea516803a->enter($__internal_9b744545f15997533f782b1d09d250b4588cff32d76e734cdd8fc74ea516803a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a997ad854eff05982425d550e77965f073252294a05f624cda9ac00c93d86eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a997ad854eff05982425d550e77965f073252294a05f624cda9ac00c93d86eb8->enter($__internal_a997ad854eff05982425d550e77965f073252294a05f624cda9ac00c93d86eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a997ad854eff05982425d550e77965f073252294a05f624cda9ac00c93d86eb8->leave($__internal_a997ad854eff05982425d550e77965f073252294a05f624cda9ac00c93d86eb8_prof);

        
        $__internal_9b744545f15997533f782b1d09d250b4588cff32d76e734cdd8fc74ea516803a->leave($__internal_9b744545f15997533f782b1d09d250b4588cff32d76e734cdd8fc74ea516803a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fae130bd6fcd95052fc68503b1fceb45eee1329d70d0dc2ec3450c9193562f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fae130bd6fcd95052fc68503b1fceb45eee1329d70d0dc2ec3450c9193562f5->enter($__internal_7fae130bd6fcd95052fc68503b1fceb45eee1329d70d0dc2ec3450c9193562f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_97441cd27290b609394476d6916e323d51004e1e0dccf93fcb1c5cd0a97db217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97441cd27290b609394476d6916e323d51004e1e0dccf93fcb1c5cd0a97db217->enter($__internal_97441cd27290b609394476d6916e323d51004e1e0dccf93fcb1c5cd0a97db217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_97441cd27290b609394476d6916e323d51004e1e0dccf93fcb1c5cd0a97db217->leave($__internal_97441cd27290b609394476d6916e323d51004e1e0dccf93fcb1c5cd0a97db217_prof);

        
        $__internal_7fae130bd6fcd95052fc68503b1fceb45eee1329d70d0dc2ec3450c9193562f5->leave($__internal_7fae130bd6fcd95052fc68503b1fceb45eee1329d70d0dc2ec3450c9193562f5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0554bd033712beb1461ade4052f313b570b580d5be6be4c80855667050eafa97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0554bd033712beb1461ade4052f313b570b580d5be6be4c80855667050eafa97->enter($__internal_0554bd033712beb1461ade4052f313b570b580d5be6be4c80855667050eafa97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20ff34f9fd4da2bc54bdedc26ff39937057d7a1564b01197645c541765b35e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ff34f9fd4da2bc54bdedc26ff39937057d7a1564b01197645c541765b35e1f->enter($__internal_20ff34f9fd4da2bc54bdedc26ff39937057d7a1564b01197645c541765b35e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_20ff34f9fd4da2bc54bdedc26ff39937057d7a1564b01197645c541765b35e1f->leave($__internal_20ff34f9fd4da2bc54bdedc26ff39937057d7a1564b01197645c541765b35e1f_prof);

        
        $__internal_0554bd033712beb1461ade4052f313b570b580d5be6be4c80855667050eafa97->leave($__internal_0554bd033712beb1461ade4052f313b570b580d5be6be4c80855667050eafa97_prof);

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
