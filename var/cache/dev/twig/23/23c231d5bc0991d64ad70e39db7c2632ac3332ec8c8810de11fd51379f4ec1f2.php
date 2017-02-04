<?php

/* studenttype/show.html.twig */
class __TwigTemplate_51caee2a4177b73923383e482049ba46144e8e10a9ae4cbf528faff762054ff5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "studenttype/show.html.twig", 1);
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
        $__internal_a53eab56d391256ca232a8e6f3c2108219f78c730513b254c06b9c124e0ea3a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a53eab56d391256ca232a8e6f3c2108219f78c730513b254c06b9c124e0ea3a0->enter($__internal_a53eab56d391256ca232a8e6f3c2108219f78c730513b254c06b9c124e0ea3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studenttype/show.html.twig"));

        $__internal_34b9286a59c936c3086c74d73ae67e11ae542d21d8538bd1ab4c6e6e3cf06d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b9286a59c936c3086c74d73ae67e11ae542d21d8538bd1ab4c6e6e3cf06d3c->enter($__internal_34b9286a59c936c3086c74d73ae67e11ae542d21d8538bd1ab4c6e6e3cf06d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studenttype/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a53eab56d391256ca232a8e6f3c2108219f78c730513b254c06b9c124e0ea3a0->leave($__internal_a53eab56d391256ca232a8e6f3c2108219f78c730513b254c06b9c124e0ea3a0_prof);

        
        $__internal_34b9286a59c936c3086c74d73ae67e11ae542d21d8538bd1ab4c6e6e3cf06d3c->leave($__internal_34b9286a59c936c3086c74d73ae67e11ae542d21d8538bd1ab4c6e6e3cf06d3c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b54e145965dc0194d7d5ecb151af8af7450e0c62eed9435ef6b824c666ac419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b54e145965dc0194d7d5ecb151af8af7450e0c62eed9435ef6b824c666ac419->enter($__internal_5b54e145965dc0194d7d5ecb151af8af7450e0c62eed9435ef6b824c666ac419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba2006a7e7c46254ad4d0da21da671e002920fdfca2dae4711e1f311c99ced87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2006a7e7c46254ad4d0da21da671e002920fdfca2dae4711e1f311c99ced87->enter($__internal_ba2006a7e7c46254ad4d0da21da671e002920fdfca2dae4711e1f311c99ced87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Studenttype</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentType"] ?? $this->getContext($context, "studentType")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentType"] ?? $this->getContext($context, "studentType")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["studentType"] ?? $this->getContext($context, "studentType")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["studentType"] ?? $this->getContext($context, "studentType")), "createdAt", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studenttype_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studenttype_edit", array("id" => $this->getAttribute(($context["studentType"] ?? $this->getContext($context, "studentType")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ba2006a7e7c46254ad4d0da21da671e002920fdfca2dae4711e1f311c99ced87->leave($__internal_ba2006a7e7c46254ad4d0da21da671e002920fdfca2dae4711e1f311c99ced87_prof);

        
        $__internal_5b54e145965dc0194d7d5ecb151af8af7450e0c62eed9435ef6b824c666ac419->leave($__internal_5b54e145965dc0194d7d5ecb151af8af7450e0c62eed9435ef6b824c666ac419_prof);

    }

    public function getTemplateName()
    {
        return "studenttype/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  95 => 31,  89 => 28,  83 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Studenttype</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ studentType.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ studentType.name }}</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>{% if studentType.createdAt %}{{ studentType.createdAt|date('Y-m-d') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('studenttype_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('studenttype_edit', { 'id': studentType.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "studenttype/show.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/studenttype/show.html.twig");
    }
}
