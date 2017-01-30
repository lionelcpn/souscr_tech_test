<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_da93badab076d58e183c69d35c44eee527bf462fe0fce1d6d6c9310bda6822b5 extends Twig_Template
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
        $__internal_c8cce0ad1924be114217122cdbff1784fec47ded0f43f8d7cc0e3e4a00eeba67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8cce0ad1924be114217122cdbff1784fec47ded0f43f8d7cc0e3e4a00eeba67->enter($__internal_c8cce0ad1924be114217122cdbff1784fec47ded0f43f8d7cc0e3e4a00eeba67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_f6015cf0f9bae561690a930adc250c0e5de70f634ea09289ae6fb31477824a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6015cf0f9bae561690a930adc250c0e5de70f634ea09289ae6fb31477824a5a->enter($__internal_f6015cf0f9bae561690a930adc250c0e5de70f634ea09289ae6fb31477824a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_c8cce0ad1924be114217122cdbff1784fec47ded0f43f8d7cc0e3e4a00eeba67->leave($__internal_c8cce0ad1924be114217122cdbff1784fec47ded0f43f8d7cc0e3e4a00eeba67_prof);

        
        $__internal_f6015cf0f9bae561690a930adc250c0e5de70f634ea09289ae6fb31477824a5a->leave($__internal_f6015cf0f9bae561690a930adc250c0e5de70f634ea09289ae6fb31477824a5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
