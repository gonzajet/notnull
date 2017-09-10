<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f794bac01edc92477b475ede6c7c781008181ff6bbc724cf8c87ab652aee584c extends Twig_Template
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
        $__internal_a05e5f566c37fbe3b0e93f62e76cc02505c1b45499da4451cf5d0e13bb681a5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a05e5f566c37fbe3b0e93f62e76cc02505c1b45499da4451cf5d0e13bb681a5b->enter($__internal_a05e5f566c37fbe3b0e93f62e76cc02505c1b45499da4451cf5d0e13bb681a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_2b7b5ceccde75e84c1746e73819c925fb4e2b5efac908b89af7be94d4b1da183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7b5ceccde75e84c1746e73819c925fb4e2b5efac908b89af7be94d4b1da183->enter($__internal_2b7b5ceccde75e84c1746e73819c925fb4e2b5efac908b89af7be94d4b1da183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_a05e5f566c37fbe3b0e93f62e76cc02505c1b45499da4451cf5d0e13bb681a5b->leave($__internal_a05e5f566c37fbe3b0e93f62e76cc02505c1b45499da4451cf5d0e13bb681a5b_prof);

        
        $__internal_2b7b5ceccde75e84c1746e73819c925fb4e2b5efac908b89af7be94d4b1da183->leave($__internal_2b7b5ceccde75e84c1746e73819c925fb4e2b5efac908b89af7be94d4b1da183_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
