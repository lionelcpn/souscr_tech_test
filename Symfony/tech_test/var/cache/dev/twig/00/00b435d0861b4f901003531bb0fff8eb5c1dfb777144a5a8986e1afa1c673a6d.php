<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6beb572cc3349330119da77b7d8d71fae0f27a564e0daff9d84425bdee21270f extends Twig_Template
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
        $__internal_1d2dde7d76154a4261886c3074fec637942c5f4335365e33eb3ead6d6277ce86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d2dde7d76154a4261886c3074fec637942c5f4335365e33eb3ead6d6277ce86->enter($__internal_1d2dde7d76154a4261886c3074fec637942c5f4335365e33eb3ead6d6277ce86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_97e3a7d4fd68b411a51e9917ee6ebe8a83c4730d13e24040eca5308fe1912502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e3a7d4fd68b411a51e9917ee6ebe8a83c4730d13e24040eca5308fe1912502->enter($__internal_97e3a7d4fd68b411a51e9917ee6ebe8a83c4730d13e24040eca5308fe1912502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_1d2dde7d76154a4261886c3074fec637942c5f4335365e33eb3ead6d6277ce86->leave($__internal_1d2dde7d76154a4261886c3074fec637942c5f4335365e33eb3ead6d6277ce86_prof);

        
        $__internal_97e3a7d4fd68b411a51e9917ee6ebe8a83c4730d13e24040eca5308fe1912502->leave($__internal_97e3a7d4fd68b411a51e9917ee6ebe8a83c4730d13e24040eca5308fe1912502_prof);

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
", "@Framework/Form/hidden_widget.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
