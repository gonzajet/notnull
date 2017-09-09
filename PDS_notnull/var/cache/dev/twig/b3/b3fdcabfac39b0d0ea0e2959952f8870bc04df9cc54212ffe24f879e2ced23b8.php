<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0ef46ff3e00be850b375145c4de69a72941605b1b30816a42d1a36aa92bc080f extends Twig_Template
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
        $__internal_72e5832022f5d579bdce14b012083e666fefaa29029b5bdb75cbf4f745cd6f96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72e5832022f5d579bdce14b012083e666fefaa29029b5bdb75cbf4f745cd6f96->enter($__internal_72e5832022f5d579bdce14b012083e666fefaa29029b5bdb75cbf4f745cd6f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_6ed9051e939bd85d8e95a104bf6b4fe54c20fd40110b6724cfa4936ed31852a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed9051e939bd85d8e95a104bf6b4fe54c20fd40110b6724cfa4936ed31852a4->enter($__internal_6ed9051e939bd85d8e95a104bf6b4fe54c20fd40110b6724cfa4936ed31852a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_72e5832022f5d579bdce14b012083e666fefaa29029b5bdb75cbf4f745cd6f96->leave($__internal_72e5832022f5d579bdce14b012083e666fefaa29029b5bdb75cbf4f745cd6f96_prof);

        
        $__internal_6ed9051e939bd85d8e95a104bf6b4fe54c20fd40110b6724cfa4936ed31852a4->leave($__internal_6ed9051e939bd85d8e95a104bf6b4fe54c20fd40110b6724cfa4936ed31852a4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dcdc76667d177fefe1e5ce17aeaf42ad5eec9e6b42abfab706ede626c10d1e66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcdc76667d177fefe1e5ce17aeaf42ad5eec9e6b42abfab706ede626c10d1e66->enter($__internal_dcdc76667d177fefe1e5ce17aeaf42ad5eec9e6b42abfab706ede626c10d1e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0acda2c7327187389ae2ca3ece8d124883503cba8bc922f9971e06dc707ce476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0acda2c7327187389ae2ca3ece8d124883503cba8bc922f9971e06dc707ce476->enter($__internal_0acda2c7327187389ae2ca3ece8d124883503cba8bc922f9971e06dc707ce476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0acda2c7327187389ae2ca3ece8d124883503cba8bc922f9971e06dc707ce476->leave($__internal_0acda2c7327187389ae2ca3ece8d124883503cba8bc922f9971e06dc707ce476_prof);

        
        $__internal_dcdc76667d177fefe1e5ce17aeaf42ad5eec9e6b42abfab706ede626c10d1e66->leave($__internal_dcdc76667d177fefe1e5ce17aeaf42ad5eec9e6b42abfab706ede626c10d1e66_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e755426779dfce25345ddfbf028be39eedb8c4101b30ad5f1807874a01e7d87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e755426779dfce25345ddfbf028be39eedb8c4101b30ad5f1807874a01e7d87->enter($__internal_7e755426779dfce25345ddfbf028be39eedb8c4101b30ad5f1807874a01e7d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b83d227561f716b7411a9604d2a1550ce6c41ca7f2eb500f6d2d3ba2c0783bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83d227561f716b7411a9604d2a1550ce6c41ca7f2eb500f6d2d3ba2c0783bbe->enter($__internal_b83d227561f716b7411a9604d2a1550ce6c41ca7f2eb500f6d2d3ba2c0783bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b83d227561f716b7411a9604d2a1550ce6c41ca7f2eb500f6d2d3ba2c0783bbe->leave($__internal_b83d227561f716b7411a9604d2a1550ce6c41ca7f2eb500f6d2d3ba2c0783bbe_prof);

        
        $__internal_7e755426779dfce25345ddfbf028be39eedb8c4101b30ad5f1807874a01e7d87->leave($__internal_7e755426779dfce25345ddfbf028be39eedb8c4101b30ad5f1807874a01e7d87_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcf7d63bc172a5a70282772ff944b3008951e95f55ec4df2b17a79c415ee9a18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcf7d63bc172a5a70282772ff944b3008951e95f55ec4df2b17a79c415ee9a18->enter($__internal_bcf7d63bc172a5a70282772ff944b3008951e95f55ec4df2b17a79c415ee9a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c08c983a11f777d3a3ffb9bc487d690290768a317868beb8536292554992ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c08c983a11f777d3a3ffb9bc487d690290768a317868beb8536292554992ea5->enter($__internal_1c08c983a11f777d3a3ffb9bc487d690290768a317868beb8536292554992ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1c08c983a11f777d3a3ffb9bc487d690290768a317868beb8536292554992ea5->leave($__internal_1c08c983a11f777d3a3ffb9bc487d690290768a317868beb8536292554992ea5_prof);

        
        $__internal_bcf7d63bc172a5a70282772ff944b3008951e95f55ec4df2b17a79c415ee9a18->leave($__internal_bcf7d63bc172a5a70282772ff944b3008951e95f55ec4df2b17a79c415ee9a18_prof);

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
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
