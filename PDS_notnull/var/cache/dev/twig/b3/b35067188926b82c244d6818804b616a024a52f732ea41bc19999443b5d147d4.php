<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_12ceef6175538e89135020ff8cfbd7ecffadfea54fc0de7930b6cc798711c3a9 extends Twig_Template
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
        $__internal_98a046d5823f639f1c39bc92cf5977dce23f6d58342f79c8b2ffe713293c4650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98a046d5823f639f1c39bc92cf5977dce23f6d58342f79c8b2ffe713293c4650->enter($__internal_98a046d5823f639f1c39bc92cf5977dce23f6d58342f79c8b2ffe713293c4650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_5dfdb29a979a3a34aa93e3ef621cd8ec62c06290697dad969c70b596848bfbb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dfdb29a979a3a34aa93e3ef621cd8ec62c06290697dad969c70b596848bfbb7->enter($__internal_5dfdb29a979a3a34aa93e3ef621cd8ec62c06290697dad969c70b596848bfbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_98a046d5823f639f1c39bc92cf5977dce23f6d58342f79c8b2ffe713293c4650->leave($__internal_98a046d5823f639f1c39bc92cf5977dce23f6d58342f79c8b2ffe713293c4650_prof);

        
        $__internal_5dfdb29a979a3a34aa93e3ef621cd8ec62c06290697dad969c70b596848bfbb7->leave($__internal_5dfdb29a979a3a34aa93e3ef621cd8ec62c06290697dad969c70b596848bfbb7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
