<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c784234235a7ff887bc50d174fd272f250a41d940cce5594db2bbeb23d36505b extends Twig_Template
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
        $__internal_a8711c65e401471c215ff4136aa0584deda00aae7cec04e6dc57c7b9ba131350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8711c65e401471c215ff4136aa0584deda00aae7cec04e6dc57c7b9ba131350->enter($__internal_a8711c65e401471c215ff4136aa0584deda00aae7cec04e6dc57c7b9ba131350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_4270abb1b5dc243ecf4f6eae0bb29bea880bc92643e4382d4a152933270be9ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4270abb1b5dc243ecf4f6eae0bb29bea880bc92643e4382d4a152933270be9ba->enter($__internal_4270abb1b5dc243ecf4f6eae0bb29bea880bc92643e4382d4a152933270be9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a8711c65e401471c215ff4136aa0584deda00aae7cec04e6dc57c7b9ba131350->leave($__internal_a8711c65e401471c215ff4136aa0584deda00aae7cec04e6dc57c7b9ba131350_prof);

        
        $__internal_4270abb1b5dc243ecf4f6eae0bb29bea880bc92643e4382d4a152933270be9ba->leave($__internal_4270abb1b5dc243ecf4f6eae0bb29bea880bc92643e4382d4a152933270be9ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
