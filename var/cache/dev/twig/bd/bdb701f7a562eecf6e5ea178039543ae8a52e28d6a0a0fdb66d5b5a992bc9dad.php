<?php

/* student/index.html.twig */
class __TwigTemplate_a8cd51dbcbd0adac7e33032ba33ac56206847c539991a3a691b35006c41704d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("base.html.twig", "student/index.html.twig", 9);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13a72bd4fb3f2650682c2ab9f2c6c3c2ee3c7f1226297ce7da587c6eb4de4a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a72bd4fb3f2650682c2ab9f2c6c3c2ee3c7f1226297ce7da587c6eb4de4a35->enter($__internal_13a72bd4fb3f2650682c2ab9f2c6c3c2ee3c7f1226297ce7da587c6eb4de4a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        $__internal_513b09ba96e52be7ff5bc9281a87f95cc9a3f0341f4092b68cd09c5e5797218c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513b09ba96e52be7ff5bc9281a87f95cc9a3f0341f4092b68cd09c5e5797218c->enter($__internal_513b09ba96e52be7ff5bc9281a87f95cc9a3f0341f4092b68cd09c5e5797218c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13a72bd4fb3f2650682c2ab9f2c6c3c2ee3c7f1226297ce7da587c6eb4de4a35->leave($__internal_13a72bd4fb3f2650682c2ab9f2c6c3c2ee3c7f1226297ce7da587c6eb4de4a35_prof);

        
        $__internal_513b09ba96e52be7ff5bc9281a87f95cc9a3f0341f4092b68cd09c5e5797218c->leave($__internal_513b09ba96e52be7ff5bc9281a87f95cc9a3f0341f4092b68cd09c5e5797218c_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_f869b16defb03923ccfd71f428b3faec223659ecac5db8c96c92cce261160ff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f869b16defb03923ccfd71f428b3faec223659ecac5db8c96c92cce261160ff5->enter($__internal_f869b16defb03923ccfd71f428b3faec223659ecac5db8c96c92cce261160ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5fa16d1aca46878c9c211c7c871de721094ac9202c0322e353da8bcdfe0f18b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fa16d1aca46878c9c211c7c871de721094ac9202c0322e353da8bcdfe0f18b5->enter($__internal_5fa16d1aca46878c9c211c7c871de721094ac9202c0322e353da8bcdfe0f18b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "JustBundle:StudentController:index";
        
        $__internal_5fa16d1aca46878c9c211c7c871de721094ac9202c0322e353da8bcdfe0f18b5->leave($__internal_5fa16d1aca46878c9c211c7c871de721094ac9202c0322e353da8bcdfe0f18b5_prof);

        
        $__internal_f869b16defb03923ccfd71f428b3faec223659ecac5db8c96c92cce261160ff5->leave($__internal_f869b16defb03923ccfd71f428b3faec223659ecac5db8c96c92cce261160ff5_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c1ebdd65d782fe375f2ff2ede9c637f9dcaf411babc54b9a84fa7860fdb83d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c1ebdd65d782fe375f2ff2ede9c637f9dcaf411babc54b9a84fa7860fdb83d1->enter($__internal_8c1ebdd65d782fe375f2ff2ede9c637f9dcaf411babc54b9a84fa7860fdb83d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_92733d2277e37bd8d1b569a421dd0cdef71618cf44e35dce78ad67ad246767d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92733d2277e37bd8d1b569a421dd0cdef71618cf44e35dce78ad67ad246767d0->enter($__internal_92733d2277e37bd8d1b569a421dd0cdef71618cf44e35dce78ad67ad246767d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <h1>Welcome to the StudentController:index page</h1>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["students"] ?? $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 16
            echo "        <p>
            ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "lastname", array()), "html", null, true);
            echo "

            ";
            // line 19
            if (array_key_exists("ages", $context)) {
                // line 20
                echo "                , age: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["ages"] ?? $this->getContext($context, "ages")), ($this->getAttribute($context["student"], "id", array()) - 1), array(), "array"), "html", null, true);
                echo "
            ";
            }
            // line 22
            echo "        </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    ";
        // line 25
        if ( !array_key_exists("ages", $context)) {
            // line 26
            echo "        Go to <a href=\"http://localhost:8000/index\">http://localhost:8000/index</a> to see view with ages.
    ";
        }
        // line 28
        echo "
";
        
        $__internal_92733d2277e37bd8d1b569a421dd0cdef71618cf44e35dce78ad67ad246767d0->leave($__internal_92733d2277e37bd8d1b569a421dd0cdef71618cf44e35dce78ad67ad246767d0_prof);

        
        $__internal_8c1ebdd65d782fe375f2ff2ede9c637f9dcaf411babc54b9a84fa7860fdb83d1->leave($__internal_8c1ebdd65d782fe375f2ff2ede9c637f9dcaf411babc54b9a84fa7860fdb83d1_prof);

    }

    public function getTemplateName()
    {
        return "student/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 28,  107 => 26,  105 => 25,  102 => 24,  95 => 22,  89 => 20,  87 => 19,  78 => 17,  75 => 16,  71 => 15,  68 => 14,  59 => 13,  41 => 11,  11 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#{% extends \"base.html.twig\" %}

{% block title %}JustBundle:StudentController:index{% endblock %}

{% block body %}
<h1>Welcome to the StudentController:index page</h1>
{% endblock %}#}

{% extends \"base.html.twig\" %}

{% block title %}JustBundle:StudentController:index{% endblock %}

{% block body %}
    <h1>Welcome to the StudentController:index page</h1>
    {% for student in students %}
        <p>
            {{ student.id }}: {{ student.firstname }} {{ student.lastname }}

            {% if ages is defined %}
                , age: {{ ages[student.id -1] }}
            {% endif %}
        </p>
    {% endfor %}

    {% if ages is not defined %}
        Go to <a href=\"http://localhost:8000/index\">http://localhost:8000/index</a> to see view with ages.
    {% endif %}

{% endblock %}
", "student/index.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/student/index.html.twig");
    }
}
