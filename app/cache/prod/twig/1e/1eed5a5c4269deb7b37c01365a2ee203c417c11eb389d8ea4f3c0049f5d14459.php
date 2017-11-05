<?php

/* PrestaShopBundle:Admin/Common/_partials:_form_field.html.twig */
class __TwigTemplate_e2f414da3b9d25ac4765827bb43ff186e2cd9b37c1ad007f0f0832c345a80dd4 extends Twig_Template
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
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("id" => ($context["formId"] ?? null)));
        echo "
";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Common/_partials:_form_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 26,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/Common/_partials:_form_field.html.twig", "D:\\xampp\\htdocs\\ksiegarnia\\src\\PrestaShopBundle/Resources/views/Admin/Common/_partials/_form_field.html.twig");
    }
}
