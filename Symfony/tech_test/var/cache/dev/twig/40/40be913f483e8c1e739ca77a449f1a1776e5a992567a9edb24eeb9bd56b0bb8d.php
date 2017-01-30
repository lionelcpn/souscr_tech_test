<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_82ba383184c3e7eea6fd4fc91c5f90ac93f4643875a645f8063060334e432ebb extends Twig_Template
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
        $__internal_72065a701544c98c0275b7ecab3ee7a0bfc92a505a03626908ed02d53ededd46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72065a701544c98c0275b7ecab3ee7a0bfc92a505a03626908ed02d53ededd46->enter($__internal_72065a701544c98c0275b7ecab3ee7a0bfc92a505a03626908ed02d53ededd46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_673c14acaa0e26ea270d50a0f74a0122ddbd513e0528a096345565e6073acadd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673c14acaa0e26ea270d50a0f74a0122ddbd513e0528a096345565e6073acadd->enter($__internal_673c14acaa0e26ea270d50a0f74a0122ddbd513e0528a096345565e6073acadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_72065a701544c98c0275b7ecab3ee7a0bfc92a505a03626908ed02d53ededd46->leave($__internal_72065a701544c98c0275b7ecab3ee7a0bfc92a505a03626908ed02d53ededd46_prof);

        
        $__internal_673c14acaa0e26ea270d50a0f74a0122ddbd513e0528a096345565e6073acadd->leave($__internal_673c14acaa0e26ea270d50a0f74a0122ddbd513e0528a096345565e6073acadd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
