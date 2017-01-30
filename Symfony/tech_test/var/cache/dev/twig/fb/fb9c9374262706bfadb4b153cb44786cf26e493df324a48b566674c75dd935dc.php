<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_71eabe95e9cfc0d531445abbd1392b37745f1fc51aa6c854845e65142150dc03 extends Twig_Template
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
        $__internal_5a93253e9a01abb3a1566bb9ae4ec723a29a52d442f8b66a793c183ac56ac6a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a93253e9a01abb3a1566bb9ae4ec723a29a52d442f8b66a793c183ac56ac6a8->enter($__internal_5a93253e9a01abb3a1566bb9ae4ec723a29a52d442f8b66a793c183ac56ac6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_dde46c3d43a981c2c0070567073768bb2df3f57de24e7cd65638d61def0548cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde46c3d43a981c2c0070567073768bb2df3f57de24e7cd65638d61def0548cf->enter($__internal_dde46c3d43a981c2c0070567073768bb2df3f57de24e7cd65638d61def0548cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5a93253e9a01abb3a1566bb9ae4ec723a29a52d442f8b66a793c183ac56ac6a8->leave($__internal_5a93253e9a01abb3a1566bb9ae4ec723a29a52d442f8b66a793c183ac56ac6a8_prof);

        
        $__internal_dde46c3d43a981c2c0070567073768bb2df3f57de24e7cd65638d61def0548cf->leave($__internal_dde46c3d43a981c2c0070567073768bb2df3f57de24e7cd65638d61def0548cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
