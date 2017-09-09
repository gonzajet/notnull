<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c8c02e2e7c4c1be191f60bfcf969a441b80a59321483a91ca09e2dd35689d1c2 extends Twig_Template
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
        $__internal_9d7f618f98400ba21d8a013c146801dea4ed87fd52e50a9a4dc4212c9583abb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d7f618f98400ba21d8a013c146801dea4ed87fd52e50a9a4dc4212c9583abb0->enter($__internal_9d7f618f98400ba21d8a013c146801dea4ed87fd52e50a9a4dc4212c9583abb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_cabcf5f2cc6baca403c5714db08bfe823f9965be53aeaa3561a5c31fa06fecdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cabcf5f2cc6baca403c5714db08bfe823f9965be53aeaa3561a5c31fa06fecdf->enter($__internal_cabcf5f2cc6baca403c5714db08bfe823f9965be53aeaa3561a5c31fa06fecdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9d7f618f98400ba21d8a013c146801dea4ed87fd52e50a9a4dc4212c9583abb0->leave($__internal_9d7f618f98400ba21d8a013c146801dea4ed87fd52e50a9a4dc4212c9583abb0_prof);

        
        $__internal_cabcf5f2cc6baca403c5714db08bfe823f9965be53aeaa3561a5c31fa06fecdf->leave($__internal_cabcf5f2cc6baca403c5714db08bfe823f9965be53aeaa3561a5c31fa06fecdf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
