<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5c0c67b2c3ca5c864a666f379b4c0c1385f0015a6543fd938ee148f3a2cd6912 extends Twig_Template
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
        $__internal_716a26bbc279552b0d7c3601fe7ca5f4d3d6d858fb0bf564355dad41c9b42e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_716a26bbc279552b0d7c3601fe7ca5f4d3d6d858fb0bf564355dad41c9b42e0e->enter($__internal_716a26bbc279552b0d7c3601fe7ca5f4d3d6d858fb0bf564355dad41c9b42e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_666355b1dd2a4d1689b31408939073d9c7c1378975bf30199d263f8538b6e2b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666355b1dd2a4d1689b31408939073d9c7c1378975bf30199d263f8538b6e2b3->enter($__internal_666355b1dd2a4d1689b31408939073d9c7c1378975bf30199d263f8538b6e2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_716a26bbc279552b0d7c3601fe7ca5f4d3d6d858fb0bf564355dad41c9b42e0e->leave($__internal_716a26bbc279552b0d7c3601fe7ca5f4d3d6d858fb0bf564355dad41c9b42e0e_prof);

        
        $__internal_666355b1dd2a4d1689b31408939073d9c7c1378975bf30199d263f8538b6e2b3->leave($__internal_666355b1dd2a4d1689b31408939073d9c7c1378975bf30199d263f8538b6e2b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}