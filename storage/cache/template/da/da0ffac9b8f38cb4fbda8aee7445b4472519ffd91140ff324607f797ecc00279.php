<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* hover/template/common/currency.twig */
class __TwigTemplate_c5ca2bd3cc01511ab97f253ecb705c69b02dc12e4f296e9b8846afa992504e10 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ((twig_length_filter($this->env, ($context["currencies"] ?? null)) > 1)) {
            // line 2
            echo "
  <form action=\"";
            // line 3
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
 <ul class=\"lang\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 6
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 6)) {
                    // line 7
                    echo "     
          <button class=\"currency-select language-select\" type=\"button\" name=\"";
                    // line 8
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 8);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 8);
                    echo "</button>
   
        ";
                } else {
                    // line 11
                    echo "        
          <button class=\"currency-select language-select\" type=\"button\" name=\"";
                    // line 12
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 12);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 12);
                    echo "</button>
    
        ";
                }
                // line 15
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "      </ul>

    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 19
            echo ($context["redirect"] ?? null);
            echo "\" />
  </form>

";
        }
        // line 22
        echo " ";
    }

    public function getTemplateName()
    {
        return "hover/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  87 => 19,  82 => 16,  76 => 15,  68 => 12,  65 => 11,  57 => 8,  54 => 7,  51 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "hover/template/common/currency.twig", "");
    }
}
