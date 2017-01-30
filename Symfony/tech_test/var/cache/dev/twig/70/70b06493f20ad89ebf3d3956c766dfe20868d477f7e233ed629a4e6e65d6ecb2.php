<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_656542e63b73636bb4cc63eb611de1f16d3f23a1c63243464d3c2e1c23a62604 extends Twig_Template
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
        $__internal_d99ef937f7557a294d40c1ae7b0c3e6d2fe1dc8ac73f0cf489542c74f4b9969b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d99ef937f7557a294d40c1ae7b0c3e6d2fe1dc8ac73f0cf489542c74f4b9969b->enter($__internal_d99ef937f7557a294d40c1ae7b0c3e6d2fe1dc8ac73f0cf489542c74f4b9969b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_d8961bf222816f72bcae5b99fe606df18773975be76af7aa54703b30d94032d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8961bf222816f72bcae5b99fe606df18773975be76af7aa54703b30d94032d3->enter($__internal_d8961bf222816f72bcae5b99fe606df18773975be76af7aa54703b30d94032d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_d99ef937f7557a294d40c1ae7b0c3e6d2fe1dc8ac73f0cf489542c74f4b9969b->leave($__internal_d99ef937f7557a294d40c1ae7b0c3e6d2fe1dc8ac73f0cf489542c74f4b9969b_prof);

        
        $__internal_d8961bf222816f72bcae5b99fe606df18773975be76af7aa54703b30d94032d3->leave($__internal_d8961bf222816f72bcae5b99fe606df18773975be76af7aa54703b30d94032d3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
