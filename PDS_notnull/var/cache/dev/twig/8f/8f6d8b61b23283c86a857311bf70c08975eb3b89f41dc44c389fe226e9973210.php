<?php

/* usuario/index.html.twig */
class __TwigTemplate_9c3316275d23c1a93ae934c34ff844a50889291c01777a05e7580f0f867c4d2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c22b467698aff929c1e315ae02100db0ca5c4ff5ccf6ef7944f6cf7c93d52e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c22b467698aff929c1e315ae02100db0ca5c4ff5ccf6ef7944f6cf7c93d52e77->enter($__internal_c22b467698aff929c1e315ae02100db0ca5c4ff5ccf6ef7944f6cf7c93d52e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/index.html.twig"));

        $__internal_4a345fc9016a7363eb52d5a403dcb6311c96c4b1a2796a3405336b23ceda5c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a345fc9016a7363eb52d5a403dcb6311c96c4b1a2796a3405336b23ceda5c33->enter($__internal_4a345fc9016a7363eb52d5a403dcb6311c96c4b1a2796a3405336b23ceda5c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">

    <title>Registrar</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  </head>

  <body background=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imagen/fondoauto1.jpg"), "html", null, true);
        echo "\">

    <div class=\"container\">

      <form class=\"form-signin\">
        <h2 class=\"form-signin-heading\"><font color=\"white\">Registrarse</h2>
        <label for=\"inputEmail\" class=\"sr-only\">Direccion de mail</label>
        <input type=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email\" required autofocus>
        <label for=\"inputPassword\" class=\"sr-only\">Contraseña</label>
        <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Contraseña\" required>
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\" value=\"recordar\"> <font color=\"grey\">Recordar cuenta
          </label>
        </div>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">registrar</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>";
        
        $__internal_c22b467698aff929c1e315ae02100db0ca5c4ff5ccf6ef7944f6cf7c93d52e77->leave($__internal_c22b467698aff929c1e315ae02100db0ca5c4ff5ccf6ef7944f6cf7c93d52e77_prof);

        
        $__internal_4a345fc9016a7363eb52d5a403dcb6311c96c4b1a2796a3405336b23ceda5c33->leave($__internal_4a345fc9016a7363eb52d5a403dcb6311c96c4b1a2796a3405336b23ceda5c33_prof);

    }

    public function getTemplateName()
    {
        return "usuario/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 44,  54 => 19,  48 => 16,  42 => 13,  34 => 8,  25 => 1,);
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
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"{{ asset('favicon.ico') }}\">

    <title>Registrar</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"{{ asset('css/signin.css') }}\" rel=\"stylesheet\">
  </head>

  <body background=\"{{ asset('imagen/fondoauto1.jpg') }}\">

    <div class=\"container\">

      <form class=\"form-signin\">
        <h2 class=\"form-signin-heading\"><font color=\"white\">Registrarse</h2>
        <label for=\"inputEmail\" class=\"sr-only\">Direccion de mail</label>
        <input type=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email\" required autofocus>
        <label for=\"inputPassword\" class=\"sr-only\">Contraseña</label>
        <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Contraseña\" required>
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\" value=\"recordar\"> <font color=\"grey\">Recordar cuenta
          </label>
        </div>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">registrar</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"{{ asset('js/ie10-viewport-bug-workaround.js') }}\"></script>
  </body>
</html>", "usuario/index.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\app\\Resources\\views\\usuario\\index.html.twig");
    }
}
