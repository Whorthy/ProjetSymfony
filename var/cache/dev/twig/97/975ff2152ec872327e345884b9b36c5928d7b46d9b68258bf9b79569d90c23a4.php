<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ab32176a561edf7eb15c88bb409bd3cb4a59c900e57b197253baaf1d9670db19 extends Twig_Template
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
        $__internal_823d29f9c53caba3ad6303496dc97023ed07b2c4f9cf7aee49910e487faf371f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_823d29f9c53caba3ad6303496dc97023ed07b2c4f9cf7aee49910e487faf371f->enter($__internal_823d29f9c53caba3ad6303496dc97023ed07b2c4f9cf7aee49910e487faf371f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_1316eab22a0ba2e2ccc90a82c676f9c479b1752073df58ba49d7f65026072c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1316eab22a0ba2e2ccc90a82c676f9c479b1752073df58ba49d7f65026072c71->enter($__internal_1316eab22a0ba2e2ccc90a82c676f9c479b1752073df58ba49d7f65026072c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_823d29f9c53caba3ad6303496dc97023ed07b2c4f9cf7aee49910e487faf371f->leave($__internal_823d29f9c53caba3ad6303496dc97023ed07b2c4f9cf7aee49910e487faf371f_prof);

        
        $__internal_1316eab22a0ba2e2ccc90a82c676f9c479b1752073df58ba49d7f65026072c71->leave($__internal_1316eab22a0ba2e2ccc90a82c676f9c479b1752073df58ba49d7f65026072c71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
