<?php

/* LCTech_testBundle:Souscritoo:index.html.twig */
class __TwigTemplate_c4d1951fdf7df86a3478993f0ba88016674681837d773963e6800b110813b6d3 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Souscritoo</title>
    </head>
    <body>
        <p>
            <a href=\"https://www.souscritoo.com/\">Souscritoo</a>
        </p>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "LCTech_testBundle:Souscritoo:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LCTech_testBundle:Souscritoo:index.html.twig", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/src/LC/Tech_testBundle/Resources/views/Souscritoo/index.html.twig");
    }
}
