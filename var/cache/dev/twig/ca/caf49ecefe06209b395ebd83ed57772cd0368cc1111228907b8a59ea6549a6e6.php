<?php

/* CreatureFantastique/index.html.twig */
class __TwigTemplate_41065d86984756d01e5ab8c0225cabc799176288290c6cf8f9648175fdba27b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CreatureFantastique/index.html.twig", 1);
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
        $__internal_9c8785a7c1fd3b38ad4c9994e12e326b91e108835db7f38780209d0bff0e62e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c8785a7c1fd3b38ad4c9994e12e326b91e108835db7f38780209d0bff0e62e6->enter($__internal_9c8785a7c1fd3b38ad4c9994e12e326b91e108835db7f38780209d0bff0e62e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CreatureFantastique/index.html.twig"));

        $__internal_b5dde352361242dfbeff5a4cae4b8bf036a0ac98b64ce914fa6ae1c98e187358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5dde352361242dfbeff5a4cae4b8bf036a0ac98b64ce914fa6ae1c98e187358->enter($__internal_b5dde352361242dfbeff5a4cae4b8bf036a0ac98b64ce914fa6ae1c98e187358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CreatureFantastique/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c8785a7c1fd3b38ad4c9994e12e326b91e108835db7f38780209d0bff0e62e6->leave($__internal_9c8785a7c1fd3b38ad4c9994e12e326b91e108835db7f38780209d0bff0e62e6_prof);

        
        $__internal_b5dde352361242dfbeff5a4cae4b8bf036a0ac98b64ce914fa6ae1c98e187358->leave($__internal_b5dde352361242dfbeff5a4cae4b8bf036a0ac98b64ce914fa6ae1c98e187358_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ab41ddfd5c844a006385bed997c281ba24ed2bfd63751643ee5a371552721db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ab41ddfd5c844a006385bed997c281ba24ed2bfd63751643ee5a371552721db->enter($__internal_7ab41ddfd5c844a006385bed997c281ba24ed2bfd63751643ee5a371552721db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_446b72606126c6f51dfea2cb819a947922cdb611432e0fdfb049f349f8e4a8ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_446b72606126c6f51dfea2cb819a947922cdb611432e0fdfb049f349f8e4a8ce->enter($__internal_446b72606126c6f51dfea2cb819a947922cdb611432e0fdfb049f349f8e4a8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " AppBundle:CreatureFantastique:index ";
        
        $__internal_446b72606126c6f51dfea2cb819a947922cdb611432e0fdfb049f349f8e4a8ce->leave($__internal_446b72606126c6f51dfea2cb819a947922cdb611432e0fdfb049f349f8e4a8ce_prof);

        
        $__internal_7ab41ddfd5c844a006385bed997c281ba24ed2bfd63751643ee5a371552721db->leave($__internal_7ab41ddfd5c844a006385bed997c281ba24ed2bfd63751643ee5a371552721db_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdec04e76e536023be581681582c2f582df8b7a5734aad00fa46fd661c01a6c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdec04e76e536023be581681582c2f582df8b7a5734aad00fa46fd661c01a6c9->enter($__internal_bdec04e76e536023be581681582c2f582df8b7a5734aad00fa46fd661c01a6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a46ea38bdeaa07d8c96113768410e7803df29b88bae949df644fb9ae226144d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46ea38bdeaa07d8c96113768410e7803df29b88bae949df644fb9ae226144d2->enter($__internal_a46ea38bdeaa07d8c96113768410e7803df29b88bae949df644fb9ae226144d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the CreatureFantastique:index page</h1>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["creatureFantastiques"] ?? $this->getContext($context, "creatureFantastiques")));
        foreach ($context['_seq'] as $context["_key"] => $context["creatureFantastique"]) {
            // line 8
            echo "    <div>
        <h2>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["creatureFantastique"], "nom", array()), "html", null, true);
            echo "</h2>
        <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["creatureFantastique"], "superPower", array()), "html", null, true);
            echo "</p>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['creatureFantastique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a46ea38bdeaa07d8c96113768410e7803df29b88bae949df644fb9ae226144d2->leave($__internal_a46ea38bdeaa07d8c96113768410e7803df29b88bae949df644fb9ae226144d2_prof);

        
        $__internal_bdec04e76e536023be581681582c2f582df8b7a5734aad00fa46fd661c01a6c9->leave($__internal_bdec04e76e536023be581681582c2f582df8b7a5734aad00fa46fd661c01a6c9_prof);

    }

    public function getTemplateName()
    {
        return "CreatureFantastique/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 10,  78 => 9,  75 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %} AppBundle:CreatureFantastique:index {% endblock %}

{% block body %}
<h1>Welcome to the CreatureFantastique:index page</h1>
    {% for creatureFantastique in creatureFantastiques %}
    <div>
        <h2>{{ creatureFantastique.nom }}</h2>
        <p>{{ creatureFantastique.superPower }}</p>
    </div>
    {% endfor %}
{% endblock %}
", "CreatureFantastique/index.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/CreatureFantastique/index.html.twig");
    }
}
