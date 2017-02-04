<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_1b841a0b3139e957cd3754c62f4e119376d531a1c42b9608dee6998931ac60ca extends Twig_Template
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
        $__internal_4019cd274845357862f02847f78a1fdab2a5e7aa7bb3229bf9adab4474601d7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4019cd274845357862f02847f78a1fdab2a5e7aa7bb3229bf9adab4474601d7b->enter($__internal_4019cd274845357862f02847f78a1fdab2a5e7aa7bb3229bf9adab4474601d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_ffc7f2985ce32ed5e58f3b5df543e6f41ff28682f5cf6e09391bdafdb75b2d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc7f2985ce32ed5e58f3b5df543e6f41ff28682f5cf6e09391bdafdb75b2d53->enter($__internal_ffc7f2985ce32ed5e58f3b5df543e6f41ff28682f5cf6e09391bdafdb75b2d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_4019cd274845357862f02847f78a1fdab2a5e7aa7bb3229bf9adab4474601d7b->leave($__internal_4019cd274845357862f02847f78a1fdab2a5e7aa7bb3229bf9adab4474601d7b_prof);

        
        $__internal_ffc7f2985ce32ed5e58f3b5df543e6f41ff28682f5cf6e09391bdafdb75b2d53->leave($__internal_ffc7f2985ce32ed5e58f3b5df543e6f41ff28682f5cf6e09391bdafdb75b2d53_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
