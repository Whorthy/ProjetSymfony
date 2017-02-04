<?php

/* studenttype/index.html.twig */
class __TwigTemplate_e1bd30d4f86bf3e20ed278e3077f0af0e6c95eeb09954bf4b6ffe1878c436cc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "studenttype/index.html.twig", 1);
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
        $__internal_0cbf918c61288e7b47070f6bdd5e9a75fe05c25bb25884bf89e8fcd5134200a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cbf918c61288e7b47070f6bdd5e9a75fe05c25bb25884bf89e8fcd5134200a2->enter($__internal_0cbf918c61288e7b47070f6bdd5e9a75fe05c25bb25884bf89e8fcd5134200a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studenttype/index.html.twig"));

        $__internal_c7567c619c14d0295771e18f90d6634a2982eb0e707659b21705b24fa1110f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7567c619c14d0295771e18f90d6634a2982eb0e707659b21705b24fa1110f4f->enter($__internal_c7567c619c14d0295771e18f90d6634a2982eb0e707659b21705b24fa1110f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studenttype/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cbf918c61288e7b47070f6bdd5e9a75fe05c25bb25884bf89e8fcd5134200a2->leave($__internal_0cbf918c61288e7b47070f6bdd5e9a75fe05c25bb25884bf89e8fcd5134200a2_prof);

        
        $__internal_c7567c619c14d0295771e18f90d6634a2982eb0e707659b21705b24fa1110f4f->leave($__internal_c7567c619c14d0295771e18f90d6634a2982eb0e707659b21705b24fa1110f4f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea39ab63a042cd0a989402c3ca1b58acad3c342471c716f404bfc82e79d5ee60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea39ab63a042cd0a989402c3ca1b58acad3c342471c716f404bfc82e79d5ee60->enter($__internal_ea39ab63a042cd0a989402c3ca1b58acad3c342471c716f404bfc82e79d5ee60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a214d4756c9348267d1f409c07fd64fb06768f8889f593190ef67267856d34d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a214d4756c9348267d1f409c07fd64fb06768f8889f593190ef67267856d34d->enter($__internal_6a214d4756c9348267d1f409c07fd64fb06768f8889f593190ef67267856d34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Studenttypes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Createdat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["studentTypes"] ?? $this->getContext($context, "studentTypes")));
        foreach ($context['_seq'] as $context["_key"] => $context["studentType"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studenttype_show", array("id" => $this->getAttribute($context["studentType"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentType"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentType"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["studentType"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["studentType"], "createdAt", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studenttype_show", array("id" => $this->getAttribute($context["studentType"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studenttype_edit", array("id" => $this->getAttribute($context["studentType"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['studentType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studenttype_new");
        echo "\">Create a new studentType</a>
        </li>
    </ul>
";
        
        $__internal_6a214d4756c9348267d1f409c07fd64fb06768f8889f593190ef67267856d34d->leave($__internal_6a214d4756c9348267d1f409c07fd64fb06768f8889f593190ef67267856d34d_prof);

        
        $__internal_ea39ab63a042cd0a989402c3ca1b58acad3c342471c716f404bfc82e79d5ee60->leave($__internal_ea39ab63a042cd0a989402c3ca1b58acad3c342471c716f404bfc82e79d5ee60_prof);

    }

    public function getTemplateName()
    {
        return "studenttype/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 38,  107 => 33,  95 => 27,  89 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Studenttypes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Createdat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for studentType in studentTypes %}
            <tr>
                <td><a href=\"{{ path('studenttype_show', { 'id': studentType.id }) }}\">{{ studentType.id }}</a></td>
                <td>{{ studentType.name }}</td>
                <td>{% if studentType.createdAt %}{{ studentType.createdAt|date('Y-m-d') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('studenttype_show', { 'id': studentType.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('studenttype_edit', { 'id': studentType.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('studenttype_new') }}\">Create a new studentType</a>
        </li>
    </ul>
{% endblock %}
", "studenttype/index.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/studenttype/index.html.twig");
    }
}
