<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_0fe20de790e04fd2b620675530ee2f85f512ba7de5aef281748e72aaaa8a7575 extends Twig_Template
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
        $__internal_a2fe454980312d143c604e18db5ff862567caf60641a8ddce4b2fc2e39894451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2fe454980312d143c604e18db5ff862567caf60641a8ddce4b2fc2e39894451->enter($__internal_a2fe454980312d143c604e18db5ff862567caf60641a8ddce4b2fc2e39894451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_6325bc7cae811883d176d02e5e8ec0b35bf06d55af137141968b63d1976e1209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6325bc7cae811883d176d02e5e8ec0b35bf06d55af137141968b63d1976e1209->enter($__internal_6325bc7cae811883d176d02e5e8ec0b35bf06d55af137141968b63d1976e1209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a2fe454980312d143c604e18db5ff862567caf60641a8ddce4b2fc2e39894451->leave($__internal_a2fe454980312d143c604e18db5ff862567caf60641a8ddce4b2fc2e39894451_prof);

        
        $__internal_6325bc7cae811883d176d02e5e8ec0b35bf06d55af137141968b63d1976e1209->leave($__internal_6325bc7cae811883d176d02e5e8ec0b35bf06d55af137141968b63d1976e1209_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
