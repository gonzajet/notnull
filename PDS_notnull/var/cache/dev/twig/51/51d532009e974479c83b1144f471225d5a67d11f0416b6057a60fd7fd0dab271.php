<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
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
        $__internal_98fca32dfa03c9ebae0d52b2a4a0074a4d204657b81e5ef66604222135b6701f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98fca32dfa03c9ebae0d52b2a4a0074a4d204657b81e5ef66604222135b6701f->enter($__internal_98fca32dfa03c9ebae0d52b2a4a0074a4d204657b81e5ef66604222135b6701f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_9b465cf056847657e545eddf173459d029016a7db9f1d84254394d3c775517d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b465cf056847657e545eddf173459d029016a7db9f1d84254394d3c775517d2->enter($__internal_9b465cf056847657e545eddf173459d029016a7db9f1d84254394d3c775517d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_98fca32dfa03c9ebae0d52b2a4a0074a4d204657b81e5ef66604222135b6701f->leave($__internal_98fca32dfa03c9ebae0d52b2a4a0074a4d204657b81e5ef66604222135b6701f_prof);

        
        $__internal_9b465cf056847657e545eddf173459d029016a7db9f1d84254394d3c775517d2->leave($__internal_9b465cf056847657e545eddf173459d029016a7db9f1d84254394d3c775517d2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c2cb7b4e72eee6b2f496ee0305bcd10f378e8e71f1a204a18a3dc5b1657757f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c2cb7b4e72eee6b2f496ee0305bcd10f378e8e71f1a204a18a3dc5b1657757f->enter($__internal_3c2cb7b4e72eee6b2f496ee0305bcd10f378e8e71f1a204a18a3dc5b1657757f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b5f00a28c9764b6478d551e2af887c7823a347106cdb63c87cd1ac49aaee659f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f00a28c9764b6478d551e2af887c7823a347106cdb63c87cd1ac49aaee659f->enter($__internal_b5f00a28c9764b6478d551e2af887c7823a347106cdb63c87cd1ac49aaee659f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b5f00a28c9764b6478d551e2af887c7823a347106cdb63c87cd1ac49aaee659f->leave($__internal_b5f00a28c9764b6478d551e2af887c7823a347106cdb63c87cd1ac49aaee659f_prof);

        
        $__internal_3c2cb7b4e72eee6b2f496ee0305bcd10f378e8e71f1a204a18a3dc5b1657757f->leave($__internal_3c2cb7b4e72eee6b2f496ee0305bcd10f378e8e71f1a204a18a3dc5b1657757f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_02265a838f0db4ebc0a109007af14ae6d4196cc519ccefdc39652f007c25796b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02265a838f0db4ebc0a109007af14ae6d4196cc519ccefdc39652f007c25796b->enter($__internal_02265a838f0db4ebc0a109007af14ae6d4196cc519ccefdc39652f007c25796b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e025a2966945620db8dc19abe4f7042966ce006c9c4723bbd6310477704c253f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e025a2966945620db8dc19abe4f7042966ce006c9c4723bbd6310477704c253f->enter($__internal_e025a2966945620db8dc19abe4f7042966ce006c9c4723bbd6310477704c253f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e025a2966945620db8dc19abe4f7042966ce006c9c4723bbd6310477704c253f->leave($__internal_e025a2966945620db8dc19abe4f7042966ce006c9c4723bbd6310477704c253f_prof);

        
        $__internal_02265a838f0db4ebc0a109007af14ae6d4196cc519ccefdc39652f007c25796b->leave($__internal_02265a838f0db4ebc0a109007af14ae6d4196cc519ccefdc39652f007c25796b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f7a26135526aefda9253247053fc7b82a0ece3da31c3f478bbbe826ab3c542b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f7a26135526aefda9253247053fc7b82a0ece3da31c3f478bbbe826ab3c542b->enter($__internal_7f7a26135526aefda9253247053fc7b82a0ece3da31c3f478bbbe826ab3c542b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5b26d03ed442cb32dbf9ada7c4182369e69c0033fb3ea06c9a707885d853c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b26d03ed442cb32dbf9ada7c4182369e69c0033fb3ea06c9a707885d853c76->enter($__internal_d5b26d03ed442cb32dbf9ada7c4182369e69c0033fb3ea06c9a707885d853c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d5b26d03ed442cb32dbf9ada7c4182369e69c0033fb3ea06c9a707885d853c76->leave($__internal_d5b26d03ed442cb32dbf9ada7c4182369e69c0033fb3ea06c9a707885d853c76_prof);

        
        $__internal_7f7a26135526aefda9253247053fc7b82a0ece3da31c3f478bbbe826ab3c542b->leave($__internal_7f7a26135526aefda9253247053fc7b82a0ece3da31c3f478bbbe826ab3c542b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "/home/gonzalo/notnull/PDS_notnull/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
