<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a0fe85de2ce7e12397ff4f3653200f0f4e1be013b2e0ae3153b456626ccda2b0 extends Twig_Template
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
        $__internal_8d760836cc24fc4126ab90a438e5423da90386f19e0344f992d25d18ec1c9b0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d760836cc24fc4126ab90a438e5423da90386f19e0344f992d25d18ec1c9b0a->enter($__internal_8d760836cc24fc4126ab90a438e5423da90386f19e0344f992d25d18ec1c9b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_3bd36a46f81e8a4ae5fa8981af140765b7136707f1bfc25097f6949bc15f0d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd36a46f81e8a4ae5fa8981af140765b7136707f1bfc25097f6949bc15f0d5b->enter($__internal_3bd36a46f81e8a4ae5fa8981af140765b7136707f1bfc25097f6949bc15f0d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8d760836cc24fc4126ab90a438e5423da90386f19e0344f992d25d18ec1c9b0a->leave($__internal_8d760836cc24fc4126ab90a438e5423da90386f19e0344f992d25d18ec1c9b0a_prof);

        
        $__internal_3bd36a46f81e8a4ae5fa8981af140765b7136707f1bfc25097f6949bc15f0d5b->leave($__internal_3bd36a46f81e8a4ae5fa8981af140765b7136707f1bfc25097f6949bc15f0d5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
