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
        $__internal_0fab3229b7d08cecf9eb972c4a89279fe37a5f0d7ff4399a919a3e0f866dfef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fab3229b7d08cecf9eb972c4a89279fe37a5f0d7ff4399a919a3e0f866dfef0->enter($__internal_0fab3229b7d08cecf9eb972c4a89279fe37a5f0d7ff4399a919a3e0f866dfef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_0f6f95ac74a091b5ae9bd4359e182eb29550d6c362a402e1597c1bdaf3cedecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6f95ac74a091b5ae9bd4359e182eb29550d6c362a402e1597c1bdaf3cedecb->enter($__internal_0f6f95ac74a091b5ae9bd4359e182eb29550d6c362a402e1597c1bdaf3cedecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fab3229b7d08cecf9eb972c4a89279fe37a5f0d7ff4399a919a3e0f866dfef0->leave($__internal_0fab3229b7d08cecf9eb972c4a89279fe37a5f0d7ff4399a919a3e0f866dfef0_prof);

        
        $__internal_0f6f95ac74a091b5ae9bd4359e182eb29550d6c362a402e1597c1bdaf3cedecb->leave($__internal_0f6f95ac74a091b5ae9bd4359e182eb29550d6c362a402e1597c1bdaf3cedecb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ad1035301c260a450a02ba631f6db78b327979f7315c4eb6f301460f9e79b6bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad1035301c260a450a02ba631f6db78b327979f7315c4eb6f301460f9e79b6bd->enter($__internal_ad1035301c260a450a02ba631f6db78b327979f7315c4eb6f301460f9e79b6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4f5684f7453e007cc5ba851173db7ca57a1a4f977d5292592996e8e674200542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f5684f7453e007cc5ba851173db7ca57a1a4f977d5292592996e8e674200542->enter($__internal_4f5684f7453e007cc5ba851173db7ca57a1a4f977d5292592996e8e674200542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4f5684f7453e007cc5ba851173db7ca57a1a4f977d5292592996e8e674200542->leave($__internal_4f5684f7453e007cc5ba851173db7ca57a1a4f977d5292592996e8e674200542_prof);

        
        $__internal_ad1035301c260a450a02ba631f6db78b327979f7315c4eb6f301460f9e79b6bd->leave($__internal_ad1035301c260a450a02ba631f6db78b327979f7315c4eb6f301460f9e79b6bd_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9e842c55aa7483a3b02d3ff0e0a3e3d65c62419eae5cae0200775bea5c80792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9e842c55aa7483a3b02d3ff0e0a3e3d65c62419eae5cae0200775bea5c80792->enter($__internal_f9e842c55aa7483a3b02d3ff0e0a3e3d65c62419eae5cae0200775bea5c80792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_536368c018be5b179642cc5d483eccb2be8133a27fbf06d87996252a608d5128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_536368c018be5b179642cc5d483eccb2be8133a27fbf06d87996252a608d5128->enter($__internal_536368c018be5b179642cc5d483eccb2be8133a27fbf06d87996252a608d5128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_536368c018be5b179642cc5d483eccb2be8133a27fbf06d87996252a608d5128->leave($__internal_536368c018be5b179642cc5d483eccb2be8133a27fbf06d87996252a608d5128_prof);

        
        $__internal_f9e842c55aa7483a3b02d3ff0e0a3e3d65c62419eae5cae0200775bea5c80792->leave($__internal_f9e842c55aa7483a3b02d3ff0e0a3e3d65c62419eae5cae0200775bea5c80792_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_62c019d393da0ce0909c6d31d647bf0bbe0c28ea8e8271afd3302a8518de852c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62c019d393da0ce0909c6d31d647bf0bbe0c28ea8e8271afd3302a8518de852c->enter($__internal_62c019d393da0ce0909c6d31d647bf0bbe0c28ea8e8271afd3302a8518de852c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6815b9e8be09433f75f691614fe76fdccbeb8524d93a2678d4c8de9badb5c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6815b9e8be09433f75f691614fe76fdccbeb8524d93a2678d4c8de9badb5c69->enter($__internal_d6815b9e8be09433f75f691614fe76fdccbeb8524d93a2678d4c8de9badb5c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_d6815b9e8be09433f75f691614fe76fdccbeb8524d93a2678d4c8de9badb5c69->leave($__internal_d6815b9e8be09433f75f691614fe76fdccbeb8524d93a2678d4c8de9badb5c69_prof);

        
        $__internal_62c019d393da0ce0909c6d31d647bf0bbe0c28ea8e8271afd3302a8518de852c->leave($__internal_62c019d393da0ce0909c6d31d647bf0bbe0c28ea8e8271afd3302a8518de852c_prof);

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
