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
        $__internal_d3b015c54126fa53a20a9502a6737256cd79d7613053c272fe8f3f8f25497230 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3b015c54126fa53a20a9502a6737256cd79d7613053c272fe8f3f8f25497230->enter($__internal_d3b015c54126fa53a20a9502a6737256cd79d7613053c272fe8f3f8f25497230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_49bbb5e1be214af0b93f18de31af1f4938e76cfb72916673e1147bd818c3f7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49bbb5e1be214af0b93f18de31af1f4938e76cfb72916673e1147bd818c3f7f2->enter($__internal_49bbb5e1be214af0b93f18de31af1f4938e76cfb72916673e1147bd818c3f7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3b015c54126fa53a20a9502a6737256cd79d7613053c272fe8f3f8f25497230->leave($__internal_d3b015c54126fa53a20a9502a6737256cd79d7613053c272fe8f3f8f25497230_prof);

        
        $__internal_49bbb5e1be214af0b93f18de31af1f4938e76cfb72916673e1147bd818c3f7f2->leave($__internal_49bbb5e1be214af0b93f18de31af1f4938e76cfb72916673e1147bd818c3f7f2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8bf0ef1b236d09352c61a6391fe3e6ab5853a3d57bb253a2f02cd243575c8c4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf0ef1b236d09352c61a6391fe3e6ab5853a3d57bb253a2f02cd243575c8c4e->enter($__internal_8bf0ef1b236d09352c61a6391fe3e6ab5853a3d57bb253a2f02cd243575c8c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_19d8d7cb69f038e9cb72fd0bfcaefc24b95be5b4d3de0d40e5f00588dc7dade3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d8d7cb69f038e9cb72fd0bfcaefc24b95be5b4d3de0d40e5f00588dc7dade3->enter($__internal_19d8d7cb69f038e9cb72fd0bfcaefc24b95be5b4d3de0d40e5f00588dc7dade3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_19d8d7cb69f038e9cb72fd0bfcaefc24b95be5b4d3de0d40e5f00588dc7dade3->leave($__internal_19d8d7cb69f038e9cb72fd0bfcaefc24b95be5b4d3de0d40e5f00588dc7dade3_prof);

        
        $__internal_8bf0ef1b236d09352c61a6391fe3e6ab5853a3d57bb253a2f02cd243575c8c4e->leave($__internal_8bf0ef1b236d09352c61a6391fe3e6ab5853a3d57bb253a2f02cd243575c8c4e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_37b83e73c0041b9b346192a871ebfd2138a9f9ca19926763e288afd8640097f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b83e73c0041b9b346192a871ebfd2138a9f9ca19926763e288afd8640097f4->enter($__internal_37b83e73c0041b9b346192a871ebfd2138a9f9ca19926763e288afd8640097f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a341c089fc60a6152113154b6440aee2eb47770c010e5e57cb0c5eafe725488b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a341c089fc60a6152113154b6440aee2eb47770c010e5e57cb0c5eafe725488b->enter($__internal_a341c089fc60a6152113154b6440aee2eb47770c010e5e57cb0c5eafe725488b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a341c089fc60a6152113154b6440aee2eb47770c010e5e57cb0c5eafe725488b->leave($__internal_a341c089fc60a6152113154b6440aee2eb47770c010e5e57cb0c5eafe725488b_prof);

        
        $__internal_37b83e73c0041b9b346192a871ebfd2138a9f9ca19926763e288afd8640097f4->leave($__internal_37b83e73c0041b9b346192a871ebfd2138a9f9ca19926763e288afd8640097f4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8344d49a82c191e32f05027fb51920f31e23928f842d1a95baeac2d7f4e8974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8344d49a82c191e32f05027fb51920f31e23928f842d1a95baeac2d7f4e8974->enter($__internal_b8344d49a82c191e32f05027fb51920f31e23928f842d1a95baeac2d7f4e8974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c110c60a64f2bab27b31eadc342b4bb3421783c608a6e0a423ea74b8006bb2f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c110c60a64f2bab27b31eadc342b4bb3421783c608a6e0a423ea74b8006bb2f9->enter($__internal_c110c60a64f2bab27b31eadc342b4bb3421783c608a6e0a423ea74b8006bb2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_c110c60a64f2bab27b31eadc342b4bb3421783c608a6e0a423ea74b8006bb2f9->leave($__internal_c110c60a64f2bab27b31eadc342b4bb3421783c608a6e0a423ea74b8006bb2f9_prof);

        
        $__internal_b8344d49a82c191e32f05027fb51920f31e23928f842d1a95baeac2d7f4e8974->leave($__internal_b8344d49a82c191e32f05027fb51920f31e23928f842d1a95baeac2d7f4e8974_prof);

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
