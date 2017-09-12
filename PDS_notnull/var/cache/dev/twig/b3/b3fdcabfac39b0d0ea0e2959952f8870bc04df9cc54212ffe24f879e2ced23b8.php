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
        $__internal_96bd0bedc72662da3149249dfbd513fa860c9d632d24195d153e275538fd3479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96bd0bedc72662da3149249dfbd513fa860c9d632d24195d153e275538fd3479->enter($__internal_96bd0bedc72662da3149249dfbd513fa860c9d632d24195d153e275538fd3479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_964c76c7ffeaea777f64db035be73673b8764ed1af0577f265549b5c1ca04268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964c76c7ffeaea777f64db035be73673b8764ed1af0577f265549b5c1ca04268->enter($__internal_964c76c7ffeaea777f64db035be73673b8764ed1af0577f265549b5c1ca04268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_96bd0bedc72662da3149249dfbd513fa860c9d632d24195d153e275538fd3479->leave($__internal_96bd0bedc72662da3149249dfbd513fa860c9d632d24195d153e275538fd3479_prof);

        
        $__internal_964c76c7ffeaea777f64db035be73673b8764ed1af0577f265549b5c1ca04268->leave($__internal_964c76c7ffeaea777f64db035be73673b8764ed1af0577f265549b5c1ca04268_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e08d5258de4e50a51362c23aa56ce5d218f133743513483f8ea279729b70c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e08d5258de4e50a51362c23aa56ce5d218f133743513483f8ea279729b70c8c->enter($__internal_2e08d5258de4e50a51362c23aa56ce5d218f133743513483f8ea279729b70c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d42c15c6e69ac993cb245344726fe87566a4326ad68408b0dfbda62c67238347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42c15c6e69ac993cb245344726fe87566a4326ad68408b0dfbda62c67238347->enter($__internal_d42c15c6e69ac993cb245344726fe87566a4326ad68408b0dfbda62c67238347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d42c15c6e69ac993cb245344726fe87566a4326ad68408b0dfbda62c67238347->leave($__internal_d42c15c6e69ac993cb245344726fe87566a4326ad68408b0dfbda62c67238347_prof);

        
        $__internal_2e08d5258de4e50a51362c23aa56ce5d218f133743513483f8ea279729b70c8c->leave($__internal_2e08d5258de4e50a51362c23aa56ce5d218f133743513483f8ea279729b70c8c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_de335803f6c4d6eae2f73bcb699fbe315be004b654639eb6bc37a057858bca5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de335803f6c4d6eae2f73bcb699fbe315be004b654639eb6bc37a057858bca5a->enter($__internal_de335803f6c4d6eae2f73bcb699fbe315be004b654639eb6bc37a057858bca5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bcd8ad4e7e47a0e518f1e47c23ae14f986370dd9e6ba53a02a962e10931ca31b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd8ad4e7e47a0e518f1e47c23ae14f986370dd9e6ba53a02a962e10931ca31b->enter($__internal_bcd8ad4e7e47a0e518f1e47c23ae14f986370dd9e6ba53a02a962e10931ca31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_bcd8ad4e7e47a0e518f1e47c23ae14f986370dd9e6ba53a02a962e10931ca31b->leave($__internal_bcd8ad4e7e47a0e518f1e47c23ae14f986370dd9e6ba53a02a962e10931ca31b_prof);

        
        $__internal_de335803f6c4d6eae2f73bcb699fbe315be004b654639eb6bc37a057858bca5a->leave($__internal_de335803f6c4d6eae2f73bcb699fbe315be004b654639eb6bc37a057858bca5a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_865952c7c8a84c4fc780f6a6954224d181012907bba111593c1b25d20b953c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_865952c7c8a84c4fc780f6a6954224d181012907bba111593c1b25d20b953c0f->enter($__internal_865952c7c8a84c4fc780f6a6954224d181012907bba111593c1b25d20b953c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef01f862a2a35bbd2f7061c69f26a30bd5249be11ab16c7fa75ad7943f561eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef01f862a2a35bbd2f7061c69f26a30bd5249be11ab16c7fa75ad7943f561eb1->enter($__internal_ef01f862a2a35bbd2f7061c69f26a30bd5249be11ab16c7fa75ad7943f561eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ef01f862a2a35bbd2f7061c69f26a30bd5249be11ab16c7fa75ad7943f561eb1->leave($__internal_ef01f862a2a35bbd2f7061c69f26a30bd5249be11ab16c7fa75ad7943f561eb1_prof);

        
        $__internal_865952c7c8a84c4fc780f6a6954224d181012907bba111593c1b25d20b953c0f->leave($__internal_865952c7c8a84c4fc780f6a6954224d181012907bba111593c1b25d20b953c0f_prof);

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
