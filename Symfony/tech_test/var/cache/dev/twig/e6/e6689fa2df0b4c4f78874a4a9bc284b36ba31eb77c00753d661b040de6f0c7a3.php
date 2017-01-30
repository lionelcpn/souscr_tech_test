<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f03da5bf6ff20eb61a1beab852060880a3dae0ef0791dfe919ec11c308d081e7 extends Twig_Template
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
        $__internal_251abee91352d855464f2ec0ba3e699be4b89e114faece546fad43e95a808aa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_251abee91352d855464f2ec0ba3e699be4b89e114faece546fad43e95a808aa6->enter($__internal_251abee91352d855464f2ec0ba3e699be4b89e114faece546fad43e95a808aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_c74e0885b3635d4f8622a2e586c0bfaeaeace3702d905dc52e6ec7e20b39a462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74e0885b3635d4f8622a2e586c0bfaeaeace3702d905dc52e6ec7e20b39a462->enter($__internal_c74e0885b3635d4f8622a2e586c0bfaeaeace3702d905dc52e6ec7e20b39a462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_251abee91352d855464f2ec0ba3e699be4b89e114faece546fad43e95a808aa6->leave($__internal_251abee91352d855464f2ec0ba3e699be4b89e114faece546fad43e95a808aa6_prof);

        
        $__internal_c74e0885b3635d4f8622a2e586c0bfaeaeace3702d905dc52e6ec7e20b39a462->leave($__internal_c74e0885b3635d4f8622a2e586c0bfaeaeace3702d905dc52e6ec7e20b39a462_prof);

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
", "@Framework/Form/collection_widget.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
