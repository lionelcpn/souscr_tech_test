<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_53b499e9700e9227e65ed83fc6ff4397e9c6ac2ead38c2f540131efc88aa6332 extends Twig_Template
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
        $__internal_1627a403d7e606f979c143d5b89debd0269425be371d1f20847af50fe0ae6499 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1627a403d7e606f979c143d5b89debd0269425be371d1f20847af50fe0ae6499->enter($__internal_1627a403d7e606f979c143d5b89debd0269425be371d1f20847af50fe0ae6499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_21c3a2024ea901fcd8d4e51f732f22f4d8f80522858a655f11ef48d86344b90c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c3a2024ea901fcd8d4e51f732f22f4d8f80522858a655f11ef48d86344b90c->enter($__internal_21c3a2024ea901fcd8d4e51f732f22f4d8f80522858a655f11ef48d86344b90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1627a403d7e606f979c143d5b89debd0269425be371d1f20847af50fe0ae6499->leave($__internal_1627a403d7e606f979c143d5b89debd0269425be371d1f20847af50fe0ae6499_prof);

        
        $__internal_21c3a2024ea901fcd8d4e51f732f22f4d8f80522858a655f11ef48d86344b90c->leave($__internal_21c3a2024ea901fcd8d4e51f732f22f4d8f80522858a655f11ef48d86344b90c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
