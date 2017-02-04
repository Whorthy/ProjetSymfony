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
        $__internal_151ee98fc3be3c33201b0d46d2cdc0a20192e963211005b17fcca773f3846224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_151ee98fc3be3c33201b0d46d2cdc0a20192e963211005b17fcca773f3846224->enter($__internal_151ee98fc3be3c33201b0d46d2cdc0a20192e963211005b17fcca773f3846224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CreatureFantastique/index.html.twig"));

        $__internal_fbbd9e3894c4b9ea6e4d8533503ab45ed6a64e485203151a438d0fb5374bcc4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbbd9e3894c4b9ea6e4d8533503ab45ed6a64e485203151a438d0fb5374bcc4d->enter($__internal_fbbd9e3894c4b9ea6e4d8533503ab45ed6a64e485203151a438d0fb5374bcc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CreatureFantastique/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_151ee98fc3be3c33201b0d46d2cdc0a20192e963211005b17fcca773f3846224->leave($__internal_151ee98fc3be3c33201b0d46d2cdc0a20192e963211005b17fcca773f3846224_prof);

        
        $__internal_fbbd9e3894c4b9ea6e4d8533503ab45ed6a64e485203151a438d0fb5374bcc4d->leave($__internal_fbbd9e3894c4b9ea6e4d8533503ab45ed6a64e485203151a438d0fb5374bcc4d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aabc72fb847bce885cff4fb8c9bd0a79098171224b759f2d8541998834ac38c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aabc72fb847bce885cff4fb8c9bd0a79098171224b759f2d8541998834ac38c8->enter($__internal_aabc72fb847bce885cff4fb8c9bd0a79098171224b759f2d8541998834ac38c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_209f6c5d08f391317e28437567d1761ea6aa8ba54f71faf56a897127b3f4b25f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_209f6c5d08f391317e28437567d1761ea6aa8ba54f71faf56a897127b3f4b25f->enter($__internal_209f6c5d08f391317e28437567d1761ea6aa8ba54f71faf56a897127b3f4b25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " AppBundle:CreatureFantastique:index ";
        
        $__internal_209f6c5d08f391317e28437567d1761ea6aa8ba54f71faf56a897127b3f4b25f->leave($__internal_209f6c5d08f391317e28437567d1761ea6aa8ba54f71faf56a897127b3f4b25f_prof);

        
        $__internal_aabc72fb847bce885cff4fb8c9bd0a79098171224b759f2d8541998834ac38c8->leave($__internal_aabc72fb847bce885cff4fb8c9bd0a79098171224b759f2d8541998834ac38c8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0123c66cd1e84f0e7a9a633d0912dc7b6eb93efd187e5708356b578ffe65c338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0123c66cd1e84f0e7a9a633d0912dc7b6eb93efd187e5708356b578ffe65c338->enter($__internal_0123c66cd1e84f0e7a9a633d0912dc7b6eb93efd187e5708356b578ffe65c338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b025ad12f3cee4e873962da1d5a980010ca625c6b1b6b8935b81c17d8a59aa2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b025ad12f3cee4e873962da1d5a980010ca625c6b1b6b8935b81c17d8a59aa2d->enter($__internal_b025ad12f3cee4e873962da1d5a980010ca625c6b1b6b8935b81c17d8a59aa2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b025ad12f3cee4e873962da1d5a980010ca625c6b1b6b8935b81c17d8a59aa2d->leave($__internal_b025ad12f3cee4e873962da1d5a980010ca625c6b1b6b8935b81c17d8a59aa2d_prof);

        
        $__internal_0123c66cd1e84f0e7a9a633d0912dc7b6eb93efd187e5708356b578ffe65c338->leave($__internal_0123c66cd1e84f0e7a9a633d0912dc7b6eb93efd187e5708356b578ffe65c338_prof);

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
