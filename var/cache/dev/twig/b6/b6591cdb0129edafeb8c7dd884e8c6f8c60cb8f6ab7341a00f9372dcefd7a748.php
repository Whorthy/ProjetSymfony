<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_fa3da2ac6ddc0b103b1317bd6ce393bbef536390c4131503339cfd40dea08b9f extends Twig_Template
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
        $__internal_6bdee70b09e12efea5d839151c5a3322ec62fe1296fa2a9e9b0c436ecf94f9dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bdee70b09e12efea5d839151c5a3322ec62fe1296fa2a9e9b0c436ecf94f9dd->enter($__internal_6bdee70b09e12efea5d839151c5a3322ec62fe1296fa2a9e9b0c436ecf94f9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_677d123c53c48e07738ad09826afa29437fd0d259c92bb23ca8f398fab3953ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677d123c53c48e07738ad09826afa29437fd0d259c92bb23ca8f398fab3953ab->enter($__internal_677d123c53c48e07738ad09826afa29437fd0d259c92bb23ca8f398fab3953ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6bdee70b09e12efea5d839151c5a3322ec62fe1296fa2a9e9b0c436ecf94f9dd->leave($__internal_6bdee70b09e12efea5d839151c5a3322ec62fe1296fa2a9e9b0c436ecf94f9dd_prof);

        
        $__internal_677d123c53c48e07738ad09826afa29437fd0d259c92bb23ca8f398fab3953ab->leave($__internal_677d123c53c48e07738ad09826afa29437fd0d259c92bb23ca8f398fab3953ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
