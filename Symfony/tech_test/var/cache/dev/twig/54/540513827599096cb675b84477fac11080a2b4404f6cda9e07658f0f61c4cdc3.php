<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_24463ec574760a3154e4b6f6933bae07c9c68ce4ba4c0a2afedd816775fe0756 extends Twig_Template
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
        $__internal_e8faf9d1b76b697e1ea5a97280310b870af6bd0324259f5f8fe11e2581b8dc37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8faf9d1b76b697e1ea5a97280310b870af6bd0324259f5f8fe11e2581b8dc37->enter($__internal_e8faf9d1b76b697e1ea5a97280310b870af6bd0324259f5f8fe11e2581b8dc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_451e5e935879bc858e3a9f502ad50caa8783bbed4a387fac464585b5694caf89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_451e5e935879bc858e3a9f502ad50caa8783bbed4a387fac464585b5694caf89->enter($__internal_451e5e935879bc858e3a9f502ad50caa8783bbed4a387fac464585b5694caf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e8faf9d1b76b697e1ea5a97280310b870af6bd0324259f5f8fe11e2581b8dc37->leave($__internal_e8faf9d1b76b697e1ea5a97280310b870af6bd0324259f5f8fe11e2581b8dc37_prof);

        
        $__internal_451e5e935879bc858e3a9f502ad50caa8783bbed4a387fac464585b5694caf89->leave($__internal_451e5e935879bc858e3a9f502ad50caa8783bbed4a387fac464585b5694caf89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
