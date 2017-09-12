<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_34511abbf5bb8676f8ba8b0b98e2fa3507e90d4c46868d8967d90403c8bdfc0e extends Twig_Template
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
        $__internal_595c2874f911b168099d9a7ca93c16a83d01875bef4df85b9b822175b80fc44d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_595c2874f911b168099d9a7ca93c16a83d01875bef4df85b9b822175b80fc44d->enter($__internal_595c2874f911b168099d9a7ca93c16a83d01875bef4df85b9b822175b80fc44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_0fa6a6e6b671a11bfea7e4684ea6c30b04870923c4fd3df4d81611b908763ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa6a6e6b671a11bfea7e4684ea6c30b04870923c4fd3df4d81611b908763ada->enter($__internal_0fa6a6e6b671a11bfea7e4684ea6c30b04870923c4fd3df4d81611b908763ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_595c2874f911b168099d9a7ca93c16a83d01875bef4df85b9b822175b80fc44d->leave($__internal_595c2874f911b168099d9a7ca93c16a83d01875bef4df85b9b822175b80fc44d_prof);

        
        $__internal_0fa6a6e6b671a11bfea7e4684ea6c30b04870923c4fd3df4d81611b908763ada->leave($__internal_0fa6a6e6b671a11bfea7e4684ea6c30b04870923c4fd3df4d81611b908763ada_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
