<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_064306b11b2fc307636309c1f554ac643bb58d326efb324da11179df7e587ec7 extends Twig_Template
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
        $__internal_81c8a7ffc88fe71e8c687386bd5433099d547f33cd046ecfaa0edabf56331134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81c8a7ffc88fe71e8c687386bd5433099d547f33cd046ecfaa0edabf56331134->enter($__internal_81c8a7ffc88fe71e8c687386bd5433099d547f33cd046ecfaa0edabf56331134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_977efcfe155bc4549bc0a94ffa5c9b9c10a2155e868082cecc00527ba2a8b781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977efcfe155bc4549bc0a94ffa5c9b9c10a2155e868082cecc00527ba2a8b781->enter($__internal_977efcfe155bc4549bc0a94ffa5c9b9c10a2155e868082cecc00527ba2a8b781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_81c8a7ffc88fe71e8c687386bd5433099d547f33cd046ecfaa0edabf56331134->leave($__internal_81c8a7ffc88fe71e8c687386bd5433099d547f33cd046ecfaa0edabf56331134_prof);

        
        $__internal_977efcfe155bc4549bc0a94ffa5c9b9c10a2155e868082cecc00527ba2a8b781->leave($__internal_977efcfe155bc4549bc0a94ffa5c9b9c10a2155e868082cecc00527ba2a8b781_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
