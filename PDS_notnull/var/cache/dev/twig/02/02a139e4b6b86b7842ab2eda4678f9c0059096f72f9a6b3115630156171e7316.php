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
        $__internal_f4953629a848301d53c51ead2cd626c8e63ed3c59d2aa42509f3e3aa4eea61be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4953629a848301d53c51ead2cd626c8e63ed3c59d2aa42509f3e3aa4eea61be->enter($__internal_f4953629a848301d53c51ead2cd626c8e63ed3c59d2aa42509f3e3aa4eea61be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_cc8d33590ab9f995464e51493e802735840d4c26d96a9c8a50daa3e394bb08a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc8d33590ab9f995464e51493e802735840d4c26d96a9c8a50daa3e394bb08a3->enter($__internal_cc8d33590ab9f995464e51493e802735840d4c26d96a9c8a50daa3e394bb08a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_f4953629a848301d53c51ead2cd626c8e63ed3c59d2aa42509f3e3aa4eea61be->leave($__internal_f4953629a848301d53c51ead2cd626c8e63ed3c59d2aa42509f3e3aa4eea61be_prof);

        
        $__internal_cc8d33590ab9f995464e51493e802735840d4c26d96a9c8a50daa3e394bb08a3->leave($__internal_cc8d33590ab9f995464e51493e802735840d4c26d96a9c8a50daa3e394bb08a3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a57aa0ecdbfb457cdd274e867d78bfe5605fe1eb21b5ac66e94b86e551cf9bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a57aa0ecdbfb457cdd274e867d78bfe5605fe1eb21b5ac66e94b86e551cf9bc->enter($__internal_5a57aa0ecdbfb457cdd274e867d78bfe5605fe1eb21b5ac66e94b86e551cf9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_33e2d1dac6f270e2aae72711758d6f8ac0aaaeeb60b1c0bda4ae8e884bcb7132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e2d1dac6f270e2aae72711758d6f8ac0aaaeeb60b1c0bda4ae8e884bcb7132->enter($__internal_33e2d1dac6f270e2aae72711758d6f8ac0aaaeeb60b1c0bda4ae8e884bcb7132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_33e2d1dac6f270e2aae72711758d6f8ac0aaaeeb60b1c0bda4ae8e884bcb7132->leave($__internal_33e2d1dac6f270e2aae72711758d6f8ac0aaaeeb60b1c0bda4ae8e884bcb7132_prof);

        
        $__internal_5a57aa0ecdbfb457cdd274e867d78bfe5605fe1eb21b5ac66e94b86e551cf9bc->leave($__internal_5a57aa0ecdbfb457cdd274e867d78bfe5605fe1eb21b5ac66e94b86e551cf9bc_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_33071636834707b4dfec2bc627065c695c386d1ec52537d524df7b825165905d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33071636834707b4dfec2bc627065c695c386d1ec52537d524df7b825165905d->enter($__internal_33071636834707b4dfec2bc627065c695c386d1ec52537d524df7b825165905d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9842bfbbb988f151f06626072929b25a24075f9f6f3fe789942931524c8aa9aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9842bfbbb988f151f06626072929b25a24075f9f6f3fe789942931524c8aa9aa->enter($__internal_9842bfbbb988f151f06626072929b25a24075f9f6f3fe789942931524c8aa9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9842bfbbb988f151f06626072929b25a24075f9f6f3fe789942931524c8aa9aa->leave($__internal_9842bfbbb988f151f06626072929b25a24075f9f6f3fe789942931524c8aa9aa_prof);

        
        $__internal_33071636834707b4dfec2bc627065c695c386d1ec52537d524df7b825165905d->leave($__internal_33071636834707b4dfec2bc627065c695c386d1ec52537d524df7b825165905d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2b03051d189c95279aea8a56869aae30aa0064a4d223b91fc7a05dab100dc3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b03051d189c95279aea8a56869aae30aa0064a4d223b91fc7a05dab100dc3a->enter($__internal_a2b03051d189c95279aea8a56869aae30aa0064a4d223b91fc7a05dab100dc3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2bb19e68559b8faa9315acf72f42a64eff6f4b7194f86352a312abd461f86c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2bb19e68559b8faa9315acf72f42a64eff6f4b7194f86352a312abd461f86c5->enter($__internal_e2bb19e68559b8faa9315acf72f42a64eff6f4b7194f86352a312abd461f86c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e2bb19e68559b8faa9315acf72f42a64eff6f4b7194f86352a312abd461f86c5->leave($__internal_e2bb19e68559b8faa9315acf72f42a64eff6f4b7194f86352a312abd461f86c5_prof);

        
        $__internal_a2b03051d189c95279aea8a56869aae30aa0064a4d223b91fc7a05dab100dc3a->leave($__internal_a2b03051d189c95279aea8a56869aae30aa0064a4d223b91fc7a05dab100dc3a_prof);

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
