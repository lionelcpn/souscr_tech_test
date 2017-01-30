<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_0cbd9c888264907070ac7495bccc5f60b10ebd4ca8e75d0e8ad4922427374b86 extends Twig_Template
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
        $__internal_ecbc3e0a1606f63a0d6acf26868bc397fc8db8d43803a31c1c5666aef8e24719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecbc3e0a1606f63a0d6acf26868bc397fc8db8d43803a31c1c5666aef8e24719->enter($__internal_ecbc3e0a1606f63a0d6acf26868bc397fc8db8d43803a31c1c5666aef8e24719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_8499baa6cbc0d6267d45375b90f2f976e5ae79db0982ee1c0484a652e5784aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8499baa6cbc0d6267d45375b90f2f976e5ae79db0982ee1c0484a652e5784aa7->enter($__internal_8499baa6cbc0d6267d45375b90f2f976e5ae79db0982ee1c0484a652e5784aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ecbc3e0a1606f63a0d6acf26868bc397fc8db8d43803a31c1c5666aef8e24719->leave($__internal_ecbc3e0a1606f63a0d6acf26868bc397fc8db8d43803a31c1c5666aef8e24719_prof);

        
        $__internal_8499baa6cbc0d6267d45375b90f2f976e5ae79db0982ee1c0484a652e5784aa7->leave($__internal_8499baa6cbc0d6267d45375b90f2f976e5ae79db0982ee1c0484a652e5784aa7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
