<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9d2db4aa88294e90511aa975433307a98c1fc840227b51864347e2d33ee6f72e extends Twig_Template
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
        $__internal_767778bcd30acd835ff12941349174c6724bd6b78feaca131dd7b52438cd447e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_767778bcd30acd835ff12941349174c6724bd6b78feaca131dd7b52438cd447e->enter($__internal_767778bcd30acd835ff12941349174c6724bd6b78feaca131dd7b52438cd447e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f68931fa09678a02958d2cc812a1cbec969f67e860182c0bb2f74c3c1938e2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f68931fa09678a02958d2cc812a1cbec969f67e860182c0bb2f74c3c1938e2c4->enter($__internal_f68931fa09678a02958d2cc812a1cbec969f67e860182c0bb2f74c3c1938e2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_767778bcd30acd835ff12941349174c6724bd6b78feaca131dd7b52438cd447e->leave($__internal_767778bcd30acd835ff12941349174c6724bd6b78feaca131dd7b52438cd447e_prof);

        
        $__internal_f68931fa09678a02958d2cc812a1cbec969f67e860182c0bb2f74c3c1938e2c4->leave($__internal_f68931fa09678a02958d2cc812a1cbec969f67e860182c0bb2f74c3c1938e2c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
