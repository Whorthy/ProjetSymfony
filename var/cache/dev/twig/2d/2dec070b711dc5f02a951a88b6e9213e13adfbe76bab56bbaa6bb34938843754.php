<?php

/* studenttype/new.html.twig */
class __TwigTemplate_062ed430e4139e594b8388846c7614f60d46b8fcee0f6fdb396af5c52a9c39eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "studenttype/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7028d3ef4b433e90c6943daa83481034eac058cc5ae54d6e9f9008894c7844b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7028d3ef4b433e90c6943daa83481034eac058cc5ae54d6e9f9008894c7844b6->enter($__internal_7028d3ef4b433e90c6943daa83481034eac058cc5ae54d6e9f9008894c7844b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studenttype/new.html.twig"));

        $__internal_3aad40878c3f1474b57864b7c5b3e0d559a07ff66f3102c24f1c7ef5fce65db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aad40878c3f1474b57864b7c5b3e0d559a07ff66f3102c24f1c7ef5fce65db6->enter($__internal_3aad40878c3f1474b57864b7c5b3e0d559a07ff66f3102c24f1c7ef5fce65db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studenttype/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7028d3ef4b433e90c6943daa83481034eac058cc5ae54d6e9f9008894c7844b6->leave($__internal_7028d3ef4b433e90c6943daa83481034eac058cc5ae54d6e9f9008894c7844b6_prof);

        
        $__internal_3aad40878c3f1474b57864b7c5b3e0d559a07ff66f3102c24f1c7ef5fce65db6->leave($__internal_3aad40878c3f1474b57864b7c5b3e0d559a07ff66f3102c24f1c7ef5fce65db6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f8f513e980521e1c8edc7040ced749459a3a03a312bf1b5aca15b6684ae1c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f8f513e980521e1c8edc7040ced749459a3a03a312bf1b5aca15b6684ae1c83->enter($__internal_9f8f513e980521e1c8edc7040ced749459a3a03a312bf1b5aca15b6684ae1c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a88055d53d20eba2a2549b55e0ef108739976eadb8b17d36efeab5ba2d575fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88055d53d20eba2a2549b55e0ef108739976eadb8b17d36efeab5ba2d575fe6->enter($__internal_a88055d53d20eba2a2549b55e0ef108739976eadb8b17d36efeab5ba2d575fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Studenttype creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studenttype_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a88055d53d20eba2a2549b55e0ef108739976eadb8b17d36efeab5ba2d575fe6->leave($__internal_a88055d53d20eba2a2549b55e0ef108739976eadb8b17d36efeab5ba2d575fe6_prof);

        
        $__internal_9f8f513e980521e1c8edc7040ced749459a3a03a312bf1b5aca15b6684ae1c83->leave($__internal_9f8f513e980521e1c8edc7040ced749459a3a03a312bf1b5aca15b6684ae1c83_prof);

    }

    public function getTemplateName()
    {
        return "studenttype/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Studenttype creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('studenttype_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "studenttype/new.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/studenttype/new.html.twig");
    }
}
