<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_26ce063fe9be192b956753213ac612bba2e41dc305aa519593807e55e9632f55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b81282cd25b8490024f572784035fb3513eca3e2edb4e1d2a33116f78a3a0bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b81282cd25b8490024f572784035fb3513eca3e2edb4e1d2a33116f78a3a0bcf->enter($__internal_b81282cd25b8490024f572784035fb3513eca3e2edb4e1d2a33116f78a3a0bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_e41ec38342c08623e421f9f9e94be61c590a70e1a8305add4cc4f0978ab458f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e41ec38342c08623e421f9f9e94be61c590a70e1a8305add4cc4f0978ab458f0->enter($__internal_e41ec38342c08623e421f9f9e94be61c590a70e1a8305add4cc4f0978ab458f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_b81282cd25b8490024f572784035fb3513eca3e2edb4e1d2a33116f78a3a0bcf->leave($__internal_b81282cd25b8490024f572784035fb3513eca3e2edb4e1d2a33116f78a3a0bcf_prof);

        
        $__internal_e41ec38342c08623e421f9f9e94be61c590a70e1a8305add4cc4f0978ab458f0->leave($__internal_e41ec38342c08623e421f9f9e94be61c590a70e1a8305add4cc4f0978ab458f0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_56a12541c7199a344b5f5c192140cf55cf9ba19b4d889720943834122ff4e900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56a12541c7199a344b5f5c192140cf55cf9ba19b4d889720943834122ff4e900->enter($__internal_56a12541c7199a344b5f5c192140cf55cf9ba19b4d889720943834122ff4e900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eddd6c022836edc6f292c8e7cbc2e33085cd0b12948bcfc1fc62aedf705881f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eddd6c022836edc6f292c8e7cbc2e33085cd0b12948bcfc1fc62aedf705881f7->enter($__internal_eddd6c022836edc6f292c8e7cbc2e33085cd0b12948bcfc1fc62aedf705881f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_eddd6c022836edc6f292c8e7cbc2e33085cd0b12948bcfc1fc62aedf705881f7->leave($__internal_eddd6c022836edc6f292c8e7cbc2e33085cd0b12948bcfc1fc62aedf705881f7_prof);

        
        $__internal_56a12541c7199a344b5f5c192140cf55cf9ba19b4d889720943834122ff4e900->leave($__internal_56a12541c7199a344b5f5c192140cf55cf9ba19b4d889720943834122ff4e900_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_691b4e1c62ea8aeee35f92bc4ffd9939b25cdc5073b65222e57e7eb8df2f85f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_691b4e1c62ea8aeee35f92bc4ffd9939b25cdc5073b65222e57e7eb8df2f85f0->enter($__internal_691b4e1c62ea8aeee35f92bc4ffd9939b25cdc5073b65222e57e7eb8df2f85f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3afe2ba396e1e23335efd3e19697eb9fcf03a90462a5dba23be995d25557383f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3afe2ba396e1e23335efd3e19697eb9fcf03a90462a5dba23be995d25557383f->enter($__internal_3afe2ba396e1e23335efd3e19697eb9fcf03a90462a5dba23be995d25557383f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3afe2ba396e1e23335efd3e19697eb9fcf03a90462a5dba23be995d25557383f->leave($__internal_3afe2ba396e1e23335efd3e19697eb9fcf03a90462a5dba23be995d25557383f_prof);

        
        $__internal_691b4e1c62ea8aeee35f92bc4ffd9939b25cdc5073b65222e57e7eb8df2f85f0->leave($__internal_691b4e1c62ea8aeee35f92bc4ffd9939b25cdc5073b65222e57e7eb8df2f85f0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c1706ef9569d46da6bb123bbfcf0b738b00803a90f677930c11b7b76c82614c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c1706ef9569d46da6bb123bbfcf0b738b00803a90f677930c11b7b76c82614c->enter($__internal_8c1706ef9569d46da6bb123bbfcf0b738b00803a90f677930c11b7b76c82614c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8bf1103ffd8742a6e7afc24b4f372bc397124ab151bfc8784c73ae882673304a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf1103ffd8742a6e7afc24b4f372bc397124ab151bfc8784c73ae882673304a->enter($__internal_8bf1103ffd8742a6e7afc24b4f372bc397124ab151bfc8784c73ae882673304a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8bf1103ffd8742a6e7afc24b4f372bc397124ab151bfc8784c73ae882673304a->leave($__internal_8bf1103ffd8742a6e7afc24b4f372bc397124ab151bfc8784c73ae882673304a_prof);

        
        $__internal_8c1706ef9569d46da6bb123bbfcf0b738b00803a90f677930c11b7b76c82614c->leave($__internal_8c1706ef9569d46da6bb123bbfcf0b738b00803a90f677930c11b7b76c82614c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
