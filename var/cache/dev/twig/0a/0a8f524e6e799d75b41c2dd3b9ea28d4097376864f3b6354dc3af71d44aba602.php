<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_1bcf04f79a07a7b747895dce410c4ed7d20be6d8d701c9c88b0e2ce8b2d7dc02 extends Twig_Template
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
        $__internal_ff20d27896314bc1a9ad7343032a651dee873232324aa83e58c5f2ba44f5dca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff20d27896314bc1a9ad7343032a651dee873232324aa83e58c5f2ba44f5dca1->enter($__internal_ff20d27896314bc1a9ad7343032a651dee873232324aa83e58c5f2ba44f5dca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_e8c0afae5d92af51f371c4352a51e3f8cb0b3e961c9ffe701b02bebb76260113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c0afae5d92af51f371c4352a51e3f8cb0b3e961c9ffe701b02bebb76260113->enter($__internal_e8c0afae5d92af51f371c4352a51e3f8cb0b3e961c9ffe701b02bebb76260113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ff20d27896314bc1a9ad7343032a651dee873232324aa83e58c5f2ba44f5dca1->leave($__internal_ff20d27896314bc1a9ad7343032a651dee873232324aa83e58c5f2ba44f5dca1_prof);

        
        $__internal_e8c0afae5d92af51f371c4352a51e3f8cb0b3e961c9ffe701b02bebb76260113->leave($__internal_e8c0afae5d92af51f371c4352a51e3f8cb0b3e961c9ffe701b02bebb76260113_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
