<?php

/* usuario/show.html.twig */
class __TwigTemplate_b6d57585fc8a3c4bd1ba77b995c8a0caf18a42d7e069e5583a7b8eb39e32efa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuario/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ea77d8b4cea8857970fea996744416293b87e7338d24211add0b44cdbdb0f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea77d8b4cea8857970fea996744416293b87e7338d24211add0b44cdbdb0f6c->enter($__internal_7ea77d8b4cea8857970fea996744416293b87e7338d24211add0b44cdbdb0f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/show.html.twig"));

        $__internal_252ffa62692ebe5173b38f497f3e52a4ac5b4c8cf5c41bd18e490b008f39bf03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_252ffa62692ebe5173b38f497f3e52a4ac5b4c8cf5c41bd18e490b008f39bf03->enter($__internal_252ffa62692ebe5173b38f497f3e52a4ac5b4c8cf5c41bd18e490b008f39bf03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ea77d8b4cea8857970fea996744416293b87e7338d24211add0b44cdbdb0f6c->leave($__internal_7ea77d8b4cea8857970fea996744416293b87e7338d24211add0b44cdbdb0f6c_prof);

        
        $__internal_252ffa62692ebe5173b38f497f3e52a4ac5b4c8cf5c41bd18e490b008f39bf03->leave($__internal_252ffa62692ebe5173b38f497f3e52a4ac5b4c8cf5c41bd18e490b008f39bf03_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e542851c1c4a9787b69829e714f7292bdc644bfc285600f2bed5d905a946641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e542851c1c4a9787b69829e714f7292bdc644bfc285600f2bed5d905a946641->enter($__internal_8e542851c1c4a9787b69829e714f7292bdc644bfc285600f2bed5d905a946641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b456e74545666cf773f997e32fda6137103d999a5e4cf7476322599f58e6d730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b456e74545666cf773f997e32fda6137103d999a5e4cf7476322599f58e6d730->enter($__internal_b456e74545666cf773f997e32fda6137103d999a5e4cf7476322599f58e6d730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Usuario</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["usuario"] ?? $this->getContext($context, "usuario")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Usuario</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["usuario"] ?? $this->getContext($context, "usuario")), "usuario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["usuario"] ?? $this->getContext($context, "usuario")), "password", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["usuario"] ?? $this->getContext($context, "usuario")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellido</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["usuario"] ?? $this->getContext($context, "usuario")), "apellido", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["usuario"] ?? $this->getContext($context, "usuario")), "eMail", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["usuario"] ?? $this->getContext($context, "usuario")), "telefono", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idrol</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["usuario"] ?? $this->getContext($context, "usuario")), "idRol", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idestablecimiento</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["usuario"] ?? $this->getContext($context, "usuario")), "idEstablecimiento", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_edit", array("id" => $this->getAttribute(($context["usuario"] ?? $this->getContext($context, "usuario")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b456e74545666cf773f997e32fda6137103d999a5e4cf7476322599f58e6d730->leave($__internal_b456e74545666cf773f997e32fda6137103d999a5e4cf7476322599f58e6d730_prof);

        
        $__internal_8e542851c1c4a9787b69829e714f7292bdc644bfc285600f2bed5d905a946641->leave($__internal_8e542851c1c4a9787b69829e714f7292bdc644bfc285600f2bed5d905a946641_prof);

    }

    public function getTemplateName()
    {
        return "usuario/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 57,  135 => 55,  129 => 52,  123 => 49,  113 => 42,  106 => 38,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Usuario</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ usuario.id }}</td>
            </tr>
            <tr>
                <th>Usuario</th>
                <td>{{ usuario.usuario }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ usuario.password }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ usuario.nombre }}</td>
            </tr>
            <tr>
                <th>Apellido</th>
                <td>{{ usuario.apellido }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ usuario.eMail }}</td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>{{ usuario.telefono }}</td>
            </tr>
            <tr>
                <th>Idrol</th>
                <td>{{ usuario.idRol }}</td>
            </tr>
            <tr>
                <th>Idestablecimiento</th>
                <td>{{ usuario.idEstablecimiento }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('usuario_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('usuario_edit', { 'id': usuario.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "usuario/show.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\app\\Resources\\views\\usuario\\show.html.twig");
    }
}
