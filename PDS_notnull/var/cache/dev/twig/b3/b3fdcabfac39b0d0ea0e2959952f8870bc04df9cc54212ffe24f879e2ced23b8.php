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
        $__internal_1e97d5ae9073c1f72b122607e2cf538a1ed5c98cfaeecf8b35cb1663f87cab82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e97d5ae9073c1f72b122607e2cf538a1ed5c98cfaeecf8b35cb1663f87cab82->enter($__internal_1e97d5ae9073c1f72b122607e2cf538a1ed5c98cfaeecf8b35cb1663f87cab82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_53d7293bdd4dfa6345de098d29a51c2a37e94166532602d33b24b41521b2585a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d7293bdd4dfa6345de098d29a51c2a37e94166532602d33b24b41521b2585a->enter($__internal_53d7293bdd4dfa6345de098d29a51c2a37e94166532602d33b24b41521b2585a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_1e97d5ae9073c1f72b122607e2cf538a1ed5c98cfaeecf8b35cb1663f87cab82->leave($__internal_1e97d5ae9073c1f72b122607e2cf538a1ed5c98cfaeecf8b35cb1663f87cab82_prof);

        
        $__internal_53d7293bdd4dfa6345de098d29a51c2a37e94166532602d33b24b41521b2585a->leave($__internal_53d7293bdd4dfa6345de098d29a51c2a37e94166532602d33b24b41521b2585a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_de5c4423d534df305397cfe9380d3b58c90078c4f320e3995b782bdec3dce763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de5c4423d534df305397cfe9380d3b58c90078c4f320e3995b782bdec3dce763->enter($__internal_de5c4423d534df305397cfe9380d3b58c90078c4f320e3995b782bdec3dce763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_472e89c952b49496cb4c9e4bb9904ab31d18ece50f2fc503da183071e59eaf32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472e89c952b49496cb4c9e4bb9904ab31d18ece50f2fc503da183071e59eaf32->enter($__internal_472e89c952b49496cb4c9e4bb9904ab31d18ece50f2fc503da183071e59eaf32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_472e89c952b49496cb4c9e4bb9904ab31d18ece50f2fc503da183071e59eaf32->leave($__internal_472e89c952b49496cb4c9e4bb9904ab31d18ece50f2fc503da183071e59eaf32_prof);

        
        $__internal_de5c4423d534df305397cfe9380d3b58c90078c4f320e3995b782bdec3dce763->leave($__internal_de5c4423d534df305397cfe9380d3b58c90078c4f320e3995b782bdec3dce763_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8981e2ecdef0b9430948badf860c1ca381324496acdaea0c2fb4c5e589763ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8981e2ecdef0b9430948badf860c1ca381324496acdaea0c2fb4c5e589763ec->enter($__internal_f8981e2ecdef0b9430948badf860c1ca381324496acdaea0c2fb4c5e589763ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3d35f3655f4ec8477c5296f024884cfe99dab2996dbfcc529ac16de71cb44543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d35f3655f4ec8477c5296f024884cfe99dab2996dbfcc529ac16de71cb44543->enter($__internal_3d35f3655f4ec8477c5296f024884cfe99dab2996dbfcc529ac16de71cb44543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3d35f3655f4ec8477c5296f024884cfe99dab2996dbfcc529ac16de71cb44543->leave($__internal_3d35f3655f4ec8477c5296f024884cfe99dab2996dbfcc529ac16de71cb44543_prof);

        
        $__internal_f8981e2ecdef0b9430948badf860c1ca381324496acdaea0c2fb4c5e589763ec->leave($__internal_f8981e2ecdef0b9430948badf860c1ca381324496acdaea0c2fb4c5e589763ec_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a38ebb202bd122dc0291330a1b96c903d3f8a74a9a9baec1315b421c44d2d093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a38ebb202bd122dc0291330a1b96c903d3f8a74a9a9baec1315b421c44d2d093->enter($__internal_a38ebb202bd122dc0291330a1b96c903d3f8a74a9a9baec1315b421c44d2d093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b7708b0bde7aa141c4ced1ed60afdc5dd0d4028fdf1a529660b3d779740697b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b7708b0bde7aa141c4ced1ed60afdc5dd0d4028fdf1a529660b3d779740697b->enter($__internal_9b7708b0bde7aa141c4ced1ed60afdc5dd0d4028fdf1a529660b3d779740697b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9b7708b0bde7aa141c4ced1ed60afdc5dd0d4028fdf1a529660b3d779740697b->leave($__internal_9b7708b0bde7aa141c4ced1ed60afdc5dd0d4028fdf1a529660b3d779740697b_prof);

        
        $__internal_a38ebb202bd122dc0291330a1b96c903d3f8a74a9a9baec1315b421c44d2d093->leave($__internal_a38ebb202bd122dc0291330a1b96c903d3f8a74a9a9baec1315b421c44d2d093_prof);

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
