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
        $__internal_877a2184dadb10c1df5cb467904347da7da1115d0c3b630bda8c0ed127ebba3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_877a2184dadb10c1df5cb467904347da7da1115d0c3b630bda8c0ed127ebba3b->enter($__internal_877a2184dadb10c1df5cb467904347da7da1115d0c3b630bda8c0ed127ebba3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_386c87b9ac69d8271ad98b78421ba4030328aad32da113b36c5b72003be256b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386c87b9ac69d8271ad98b78421ba4030328aad32da113b36c5b72003be256b5->enter($__internal_386c87b9ac69d8271ad98b78421ba4030328aad32da113b36c5b72003be256b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_877a2184dadb10c1df5cb467904347da7da1115d0c3b630bda8c0ed127ebba3b->leave($__internal_877a2184dadb10c1df5cb467904347da7da1115d0c3b630bda8c0ed127ebba3b_prof);

        
        $__internal_386c87b9ac69d8271ad98b78421ba4030328aad32da113b36c5b72003be256b5->leave($__internal_386c87b9ac69d8271ad98b78421ba4030328aad32da113b36c5b72003be256b5_prof);

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
