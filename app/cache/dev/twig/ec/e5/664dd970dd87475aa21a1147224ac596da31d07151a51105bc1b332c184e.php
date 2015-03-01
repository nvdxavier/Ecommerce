<?php

/* EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig */
class __TwigTemplate_ece5664dd970dd87475aa21a1147224ac596da31d07151a51105bc1b332c184e extends Twig_Template
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
        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("rechercheProduits");
        echo "\" method=\"POST\" class=\"navbar-form form-search pull-right\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche"), 'widget');
        echo "
    <button type=\"submit\" class=\"btn\">Rechercher</button>
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  24 => 2,  19 => 1,  179 => 64,  174 => 31,  169 => 12,  164 => 7,  159 => 6,  153 => 5,  148 => 65,  146 => 64,  142 => 63,  138 => 62,  130 => 57,  121 => 51,  117 => 50,  102 => 40,  91 => 32,  89 => 31,  83 => 27,  81 => 26,  76 => 24,  61 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  35 => 6,  25 => 1,  129 => 51,  125 => 49,  109 => 45,  100 => 39,  94 => 29,  92 => 28,  88 => 27,  84 => 26,  80 => 25,  75 => 23,  71 => 21,  67 => 20,  64 => 19,  62 => 18,  54 => 14,  48 => 12,  42 => 10,  39 => 7,  37 => 8,  31 => 5,  28 => 3,);
    }
}
