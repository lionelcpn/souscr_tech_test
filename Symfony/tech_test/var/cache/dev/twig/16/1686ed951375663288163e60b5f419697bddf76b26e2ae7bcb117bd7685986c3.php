<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_de90c5e5eb9e288272d6f5c720f211d5bfd238d4b4094c8797d2175df0c4ac97 extends Twig_Template
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
        $__internal_892e0e6fb1a732a39d8768e4d42a52a7903a3d2df858905666dc4aa594899a61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_892e0e6fb1a732a39d8768e4d42a52a7903a3d2df858905666dc4aa594899a61->enter($__internal_892e0e6fb1a732a39d8768e4d42a52a7903a3d2df858905666dc4aa594899a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_4ac91ee35d99a98271aaa69afbccedbe2ea03d61ab1470755ce7482da5cfb4a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac91ee35d99a98271aaa69afbccedbe2ea03d61ab1470755ce7482da5cfb4a5->enter($__internal_4ac91ee35d99a98271aaa69afbccedbe2ea03d61ab1470755ce7482da5cfb4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_892e0e6fb1a732a39d8768e4d42a52a7903a3d2df858905666dc4aa594899a61->leave($__internal_892e0e6fb1a732a39d8768e4d42a52a7903a3d2df858905666dc4aa594899a61_prof);

        
        $__internal_4ac91ee35d99a98271aaa69afbccedbe2ea03d61ab1470755ce7482da5cfb4a5->leave($__internal_4ac91ee35d99a98271aaa69afbccedbe2ea03d61ab1470755ce7482da5cfb4a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
