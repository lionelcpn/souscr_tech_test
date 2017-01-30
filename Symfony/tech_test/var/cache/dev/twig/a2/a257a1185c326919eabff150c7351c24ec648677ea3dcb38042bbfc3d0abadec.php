<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_a1fdff7aafdd46a148527a476088d3fe0b3e05781102cd8f9aad4af5b4799ef9 extends Twig_Template
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
        $__internal_f8c06dd38a67e35de977a9ad1dcc4bd686c73bd55b0d649f7ae12a3e69704b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c06dd38a67e35de977a9ad1dcc4bd686c73bd55b0d649f7ae12a3e69704b87->enter($__internal_f8c06dd38a67e35de977a9ad1dcc4bd686c73bd55b0d649f7ae12a3e69704b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_f1bb62ee1b48b440875e64c57b0205a2071bf6bba706ebf3a88e57e35f3b489f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1bb62ee1b48b440875e64c57b0205a2071bf6bba706ebf3a88e57e35f3b489f->enter($__internal_f1bb62ee1b48b440875e64c57b0205a2071bf6bba706ebf3a88e57e35f3b489f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f8c06dd38a67e35de977a9ad1dcc4bd686c73bd55b0d649f7ae12a3e69704b87->leave($__internal_f8c06dd38a67e35de977a9ad1dcc4bd686c73bd55b0d649f7ae12a3e69704b87_prof);

        
        $__internal_f1bb62ee1b48b440875e64c57b0205a2071bf6bba706ebf3a88e57e35f3b489f->leave($__internal_f1bb62ee1b48b440875e64c57b0205a2071bf6bba706ebf3a88e57e35f3b489f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
