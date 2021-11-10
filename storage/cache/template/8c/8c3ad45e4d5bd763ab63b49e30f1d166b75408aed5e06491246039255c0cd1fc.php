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

/* hover/template/extension/module/featured.twig */
class __TwigTemplate_e4abf57741cd1b843ec35d3df82124e1eea29e15400030538f559a72c3e6f010 extends \Twig\Template
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
        echo "<h3 class=\"title\">";
        echo ($context["heading_title"] ?? null);
        echo "</h3>
<div class=\"row\">
 ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 4
            echo "  <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-6\">
                        <div class=\"text-center\">
                            <div class=\"product-img\"><img src=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 6);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 6);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 6);
            echo "\" class=\"img-responsive\" /></a>
\t\t\t\t\t\t\t </div>
                            <div class=\"product-caption\">
        <h4><a href=\"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
            echo "</a></h4>
        ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 10)) {
                // line 11
                echo "        <p class=\"price\">
          ";
                // line 12
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 12)) {
                    // line 13
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 13);
                    echo "
          ";
                } else {
                    // line 15
                    echo "          <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 15);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 15);
                    echo "</span>
          ";
                }
                // line 17
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 17)) {
                    // line 18
                    echo "          <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 18);
                    echo "</span>
          ";
                }
                // line 20
                echo "        </p>
        ";
            }
            // line 22
            echo "      </div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "hover/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 26,  103 => 22,  99 => 20,  91 => 18,  88 => 17,  80 => 15,  74 => 13,  72 => 12,  69 => 11,  67 => 10,  61 => 9,  51 => 6,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "hover/template/extension/module/featured.twig", "");
    }
}
