<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d190c8eb8212fd21ba767679ac936bf4bc16ecd729c80d7b6d5e107d31acd0c0 extends Twig_Template
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
        $__internal_273a8b7495cad1037b50f5817ff598e88b84d97a62c6dce9197643208233ed3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_273a8b7495cad1037b50f5817ff598e88b84d97a62c6dce9197643208233ed3a->enter($__internal_273a8b7495cad1037b50f5817ff598e88b84d97a62c6dce9197643208233ed3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_8a4fe82a4ad88c80025914b68b52cc45abe61e2322d8e977d7077ed1678b66f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4fe82a4ad88c80025914b68b52cc45abe61e2322d8e977d7077ed1678b66f1->enter($__internal_8a4fe82a4ad88c80025914b68b52cc45abe61e2322d8e977d7077ed1678b66f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_273a8b7495cad1037b50f5817ff598e88b84d97a62c6dce9197643208233ed3a->leave($__internal_273a8b7495cad1037b50f5817ff598e88b84d97a62c6dce9197643208233ed3a_prof);

        
        $__internal_8a4fe82a4ad88c80025914b68b52cc45abe61e2322d8e977d7077ed1678b66f1->leave($__internal_8a4fe82a4ad88c80025914b68b52cc45abe61e2322d8e977d7077ed1678b66f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
