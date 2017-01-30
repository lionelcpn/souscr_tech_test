<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1d3eef94652388398d071ee1bc7ba190954aee55bdf26614531d3f6538f75a07 extends Twig_Template
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
        $__internal_95a5d74aca17a8f1f8d1cd1e3dfa7a1e178832ff2813b9ef0523869f5cc6eb33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95a5d74aca17a8f1f8d1cd1e3dfa7a1e178832ff2813b9ef0523869f5cc6eb33->enter($__internal_95a5d74aca17a8f1f8d1cd1e3dfa7a1e178832ff2813b9ef0523869f5cc6eb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_43a9dcdc2ea78c1a6b1bb1472eb658265d2acbd7c10b97d0c5874503c35a9a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a9dcdc2ea78c1a6b1bb1472eb658265d2acbd7c10b97d0c5874503c35a9a23->enter($__internal_43a9dcdc2ea78c1a6b1bb1472eb658265d2acbd7c10b97d0c5874503c35a9a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_95a5d74aca17a8f1f8d1cd1e3dfa7a1e178832ff2813b9ef0523869f5cc6eb33->leave($__internal_95a5d74aca17a8f1f8d1cd1e3dfa7a1e178832ff2813b9ef0523869f5cc6eb33_prof);

        
        $__internal_43a9dcdc2ea78c1a6b1bb1472eb658265d2acbd7c10b97d0c5874503c35a9a23->leave($__internal_43a9dcdc2ea78c1a6b1bb1472eb658265d2acbd7c10b97d0c5874503c35a9a23_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
