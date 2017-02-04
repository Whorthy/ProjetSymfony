<?php

/* CreatureFantastique/new.html.twig */
class __TwigTemplate_8548d6bee1ad402e62116750e22fc30e3f4e42050bf941a10891962c1da843ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CreatureFantastique/new.html.twig", 1);
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
        $__internal_a01bcf682f4a37494e5374c6789317a11da2bff9d267f46a3dd4545127b329bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a01bcf682f4a37494e5374c6789317a11da2bff9d267f46a3dd4545127b329bb->enter($__internal_a01bcf682f4a37494e5374c6789317a11da2bff9d267f46a3dd4545127b329bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CreatureFantastique/new.html.twig"));

        $__internal_ed1c29e7a6264567048496e7e26d51d54c1ceba097ae929d7a9165e94be4f0b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1c29e7a6264567048496e7e26d51d54c1ceba097ae929d7a9165e94be4f0b6->enter($__internal_ed1c29e7a6264567048496e7e26d51d54c1ceba097ae929d7a9165e94be4f0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CreatureFantastique/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a01bcf682f4a37494e5374c6789317a11da2bff9d267f46a3dd4545127b329bb->leave($__internal_a01bcf682f4a37494e5374c6789317a11da2bff9d267f46a3dd4545127b329bb_prof);

        
        $__internal_ed1c29e7a6264567048496e7e26d51d54c1ceba097ae929d7a9165e94be4f0b6->leave($__internal_ed1c29e7a6264567048496e7e26d51d54c1ceba097ae929d7a9165e94be4f0b6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_04a1be4a1cdfd8dc76cf51ed3070b1385129d3ffdfca034538e880cd2ba19789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04a1be4a1cdfd8dc76cf51ed3070b1385129d3ffdfca034538e880cd2ba19789->enter($__internal_04a1be4a1cdfd8dc76cf51ed3070b1385129d3ffdfca034538e880cd2ba19789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f8a6d15c887d88caa7c2d4646e20ac0dbaa25580db2d1ca65c9a7e549a35948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f8a6d15c887d88caa7c2d4646e20ac0dbaa25580db2d1ca65c9a7e549a35948->enter($__internal_4f8a6d15c887d88caa7c2d4646e20ac0dbaa25580db2d1ca65c9a7e549a35948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " AppBundle:CreatureFantastique:NYU ";
        
        $__internal_4f8a6d15c887d88caa7c2d4646e20ac0dbaa25580db2d1ca65c9a7e549a35948->leave($__internal_4f8a6d15c887d88caa7c2d4646e20ac0dbaa25580db2d1ca65c9a7e549a35948_prof);

        
        $__internal_04a1be4a1cdfd8dc76cf51ed3070b1385129d3ffdfca034538e880cd2ba19789->leave($__internal_04a1be4a1cdfd8dc76cf51ed3070b1385129d3ffdfca034538e880cd2ba19789_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_37b9121462ce2eb0d2e5c2acdd72fe93b8b1f3d1d0bb6fef6c64a95edb9217aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b9121462ce2eb0d2e5c2acdd72fe93b8b1f3d1d0bb6fef6c64a95edb9217aa->enter($__internal_37b9121462ce2eb0d2e5c2acdd72fe93b8b1f3d1d0bb6fef6c64a95edb9217aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10e40b43b594e445e66c8d041ceb02618582aaa882eedd43664346a5e9c4b1cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e40b43b594e445e66c8d041ceb02618582aaa882eedd43664346a5e9c4b1cc->enter($__internal_10e40b43b594e445e66c8d041ceb02618582aaa882eedd43664346a5e9c4b1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the creatureFantastique:New page</h1>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" value=\"LOL\">
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_10e40b43b594e445e66c8d041ceb02618582aaa882eedd43664346a5e9c4b1cc->leave($__internal_10e40b43b594e445e66c8d041ceb02618582aaa882eedd43664346a5e9c4b1cc_prof);

        
        $__internal_37b9121462ce2eb0d2e5c2acdd72fe93b8b1f3d1d0bb6fef6c64a95edb9217aa->leave($__internal_37b9121462ce2eb0d2e5c2acdd72fe93b8b1f3d1d0bb6fef6c64a95edb9217aa_prof);

    }

    public function getTemplateName()
    {
        return "CreatureFantastique/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 10,  75 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} AppBundle:CreatureFantastique:NYU {% endblock %}

{% block body %}
<h1>Welcome to the creatureFantastique:New page</h1>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"LOL\">
    {{ form_end(form) }}
{% endblock %}

", "CreatureFantastique/new.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/CreatureFantastique/new.html.twig");
    }
}
