<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_af532fd45c90dc18c02268b12b5eb324e68c93d7669b7347f9156860d997db56 extends Twig_Template
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
        $__internal_4448c2091fb9c7606fef1d94f1037352a31ca7a4cf91d15cc700459a85024fa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4448c2091fb9c7606fef1d94f1037352a31ca7a4cf91d15cc700459a85024fa7->enter($__internal_4448c2091fb9c7606fef1d94f1037352a31ca7a4cf91d15cc700459a85024fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_4dbb2bf9d36d7f662cd4d31f7522533ce4d1d9104501c41c6f7ec3ec03a67f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dbb2bf9d36d7f662cd4d31f7522533ce4d1d9104501c41c6f7ec3ec03a67f04->enter($__internal_4dbb2bf9d36d7f662cd4d31f7522533ce4d1d9104501c41c6f7ec3ec03a67f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4448c2091fb9c7606fef1d94f1037352a31ca7a4cf91d15cc700459a85024fa7->leave($__internal_4448c2091fb9c7606fef1d94f1037352a31ca7a4cf91d15cc700459a85024fa7_prof);

        
        $__internal_4dbb2bf9d36d7f662cd4d31f7522533ce4d1d9104501c41c6f7ec3ec03a67f04->leave($__internal_4dbb2bf9d36d7f662cd4d31f7522533ce4d1d9104501c41c6f7ec3ec03a67f04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
