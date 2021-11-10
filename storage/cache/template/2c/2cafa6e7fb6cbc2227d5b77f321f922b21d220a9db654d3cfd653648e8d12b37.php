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

/* hover/template/product/category.twig */
class __TwigTemplate_dcf98c77b56ec289ef1ab5e0de99656f96459d33241e64252db6599589a6c5b1 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"product-category\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h2 class=\"title\">";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h2> 
      ";
        // line 18
        if (($context["categories"] ?? null)) {
            // line 19
            echo "      ";
            if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                // line 20
                echo "      <div class=\"row\">
        <div class=\"col-sm-3\">
          <ul>
            ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 24
                    echo "            <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 24);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 24);
                    echo "</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "          </ul>
        </div>
      </div>
      ";
            } else {
                // line 30
                echo "      <div class=\"row\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 31
                    echo "        <div class=\"col-sm-3\">
          <ul>
            ";
                    // line 33
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 34
                        echo "            <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 34);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 34);
                        echo "</a></li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "          </ul>
        </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "</div>
      <br />
      ";
            }
            // line 41
            echo "\t  <hr>
      ";
        }
        // line 43
        echo "      ";
        if (($context["products"] ?? null)) {
            // line 44
            echo "      <div class=\"row\">
      ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 46
                echo "     <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-6\">
                        <div class=\"text-center\">
                            <div class=\"product-img\"><img src=\"";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 48);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 48);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 48);
                echo "\" class=\"img-responsive\" /></a>
\t\t\t\t\t\t\t </div>
                            <div class=\"product-caption\">
        <h4><a href=\"";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 51);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 51);
                echo "</a></h4>
        ";
                // line 52
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 52)) {
                    // line 53
                    echo "        <p class=\"price\">
          ";
                    // line 54
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 54)) {
                        // line 55
                        echo "          ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 55);
                        echo "
          ";
                    } else {
                        // line 57
                        echo "          <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 57);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 57);
                        echo "</span>
          ";
                    }
                    // line 59
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 59)) {
                        // line 60
                        echo "          <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 60);
                        echo "</span>
          ";
                    }
                    // line 62
                    echo "        </p>
        ";
                }
                // line 64
                echo "      </div>
    </div>
  </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo " </div>
\t\t     ";
            // line 68
            if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
                // line 69
                echo "\t\t\t  <hr>
      <div class=\"row\"> ";
                // line 70
                if (($context["thumb"] ?? null)) {
                    // line 71
                    echo "        <div class=\"col-sm-2\"><img src=\"";
                    echo ($context["thumb"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" class=\"img-thumbnail\" /></div>
        ";
                }
                // line 73
                echo "        ";
                if (($context["description"] ?? null)) {
                    // line 74
                    echo "        <div class=\"col-sm-10\">";
                    echo ($context["description"] ?? null);
                    echo "</div>
        ";
                }
                // line 75
                echo "</div>
      <hr>
      ";
            }
            // line 78
            echo "      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 79
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 80
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        }
        // line 83
        echo "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 84
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 86
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 89
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 90
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 92
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "hover/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 92,  312 => 90,  307 => 89,  299 => 86,  293 => 84,  290 => 83,  284 => 80,  280 => 79,  277 => 78,  272 => 75,  266 => 74,  263 => 73,  253 => 71,  251 => 70,  248 => 69,  246 => 68,  243 => 67,  234 => 64,  230 => 62,  222 => 60,  219 => 59,  211 => 57,  205 => 55,  203 => 54,  200 => 53,  198 => 52,  192 => 51,  182 => 48,  178 => 46,  174 => 45,  171 => 44,  168 => 43,  164 => 41,  159 => 38,  151 => 36,  140 => 34,  136 => 33,  132 => 31,  127 => 30,  121 => 26,  110 => 24,  106 => 23,  101 => 20,  98 => 19,  96 => 18,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "hover/template/product/category.twig", "");
    }
}
