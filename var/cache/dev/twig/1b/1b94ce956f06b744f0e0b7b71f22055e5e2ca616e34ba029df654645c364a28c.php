<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b540404aeab9a48a4a94eb6f18db8f94cbfc282f202af1e096a1191ff7269ba1 extends Twig_Template
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
        $__internal_a2aaa72f88bad7be775c139e290ef37a3d86067b7b0a54427d34a80deb185bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2aaa72f88bad7be775c139e290ef37a3d86067b7b0a54427d34a80deb185bb0->enter($__internal_a2aaa72f88bad7be775c139e290ef37a3d86067b7b0a54427d34a80deb185bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_cc5ad2a22ce80b8eb76599afb37bb2a5fb1d4bd157d1671f01f38eb7540460f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5ad2a22ce80b8eb76599afb37bb2a5fb1d4bd157d1671f01f38eb7540460f2->enter($__internal_cc5ad2a22ce80b8eb76599afb37bb2a5fb1d4bd157d1671f01f38eb7540460f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a2aaa72f88bad7be775c139e290ef37a3d86067b7b0a54427d34a80deb185bb0->leave($__internal_a2aaa72f88bad7be775c139e290ef37a3d86067b7b0a54427d34a80deb185bb0_prof);

        
        $__internal_cc5ad2a22ce80b8eb76599afb37bb2a5fb1d4bd157d1671f01f38eb7540460f2->leave($__internal_cc5ad2a22ce80b8eb76599afb37bb2a5fb1d4bd157d1671f01f38eb7540460f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
