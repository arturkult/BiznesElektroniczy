<?php

/* PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig */
class __TwigTemplate_9f422b48d42fbc3150b746b7673eb7d4ac535212022abd048b0b4d1f78372de9 extends Twig_Template
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
        echo "<div class=\"module-top-menu\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"input-group module-search-block\">
                <input id=\"module-search-bar\" class=\"module-search-bar form-control\" type=\"text\">
                <button class=\"btn btn-primary pull-right search-button\">
                    <i class=\"material-icons\">search</i>
                    ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", array(), "Admin.Actions"), "html", null, true);
        echo "
                </button>
            </div>
        </div>

        <div class=\"col-md-4 module-menu-item\">    
            ";
        // line 38
        if (array_key_exists("topMenuData", $context)) {
            // line 39
            echo "                ";
            $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:dropdown_categories.html.twig", "PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig", 39)->display(array_merge($context, array("topMenuData" => ($context["topMenuData"] ?? null))));
            // line 40
            echo "            ";
        }
        // line 41
        echo "            ";
        if ((array_key_exists("requireFilterStatus", $context) && (($context["requireFilterStatus"] ?? null) == true))) {
            // line 42
            echo "                ";
            $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:dropdown_status.html.twig", "PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig", 42)->display($context);
            // line 43
            echo "            ";
        }
        // line 44
        echo "        </div>
    </div>
</div>

<hr class=\"top-menu-separator\"/>

";
        // line 50
        $context["js_translatable"] = twig_array_merge(array("Search - placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search modules: keyword, name, author...", array(), "Admin.Modules.Help")),         // line 52
($context["js_translatable"] ?? null));
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 52,  62 => 50,  54 => 44,  51 => 43,  48 => 42,  45 => 41,  42 => 40,  39 => 39,  37 => 38,  28 => 32,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig", "D:\\xampp\\htdocs\\ksiegarnia\\src\\PrestaShopBundle/Resources/views/Admin/Module/Includes/menu_top.html.twig");
    }
}
