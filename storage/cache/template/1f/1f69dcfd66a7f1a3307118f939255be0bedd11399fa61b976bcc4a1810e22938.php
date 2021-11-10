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

/* olive/template/common/currency.twig */
class __TwigTemplate_5d43c6704f0f387550ecd2c95de6c7639e32b72320ffb5411f4f3c75e5b08a90 extends \Twig\Template
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
            echo "<form action=\"";
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
    <div class=\"btn-group\">
      <button class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 5
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 5) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 5) == ($context["code"] ?? null)))) {
                    echo " <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 5);
                    echo "</strong> ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 5) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 5) == ($context["code"] ?? null)))) {
                    echo " <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 5);
                    echo "</strong> ";
                }
                // line 6
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["text_currency"] ?? null);
            echo "</span>&nbsp;<i class=\"fa fa-caret-down\"></i></button>
      <ul class=\"dropdown-menu\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 9
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "        <li>
          <button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 11
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 11);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 11);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 11);
                    echo "</button>
        </li>
        ";
                } else {
                    // line 14
                    echo "        <li>
          <button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 15
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 15);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 15);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 15);
                    echo "</button>
        </li>
        ";
                }
                // line 18
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "      </ul>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 22
            echo ($context["redirect"] ?? null);
            echo "\" />
  </form>
";
        }
        // line 24
        echo " ";
    }

    public function getTemplateName()
    {
        return "olive/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 24,  115 => 22,  110 => 19,  104 => 18,  94 => 15,  91 => 14,  81 => 11,  78 => 10,  75 => 9,  71 => 8,  60 => 6,  49 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "olive/template/common/currency.twig", "");
    }
}
