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

/* hover/template/product/product.twig */
class __TwigTemplate_5cf54a3df64de43427a0359dc95b2ee2a259310d7892886166cdaaf20f41bed6 extends \Twig\Template
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
<div id=\"product-product\" class=\"container\">
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
      <div class=\"row\"> 
\t   <h1 class=\"title\">";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t  ";
        // line 19
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 20
            echo "          <div class=\"row\">
            ";
            // line 21
            if (($context["thumb"] ?? null)) {
                // line 22
                echo "            <div class=\"col-xs-6 col-md-4\"><img class=\"img-responsive\" src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></div>
            ";
            }
            // line 24
            echo "            ";
            if (($context["images"] ?? null)) {
                // line 25
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 26
                    echo "          <div class=\"col-xs-6 col-md-4\"><img class=\"img-responsive\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 26);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" /></div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "            ";
            }
            // line 29
            echo "          </div>
\t\t<hr>
          ";
        }
        // line 32
        echo "\t  
\t  
\t  
\t";
        // line 35
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 36
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 37
            echo "        ";
        } else {
            // line 38
            echo "        ";
            $context["class"] = "col-sm-4";
            // line 39
            echo "        ";
        }
        // line 40
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
          <ul class=\"list-unstyled price\">
            ";
        // line 42
        if (($context["manufacturer"] ?? null)) {
            // line 43
            echo "            <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
            ";
        }
        // line 45
        echo "            <li>";
        echo ($context["text_model"] ?? null);
        echo " ";
        echo ($context["model"] ?? null);
        echo "</li>
            ";
        // line 46
        if (($context["reward"] ?? null)) {
            // line 47
            echo "            <li>";
            echo ($context["text_reward"] ?? null);
            echo " ";
            echo ($context["reward"] ?? null);
            echo "</li>
            ";
        }
        // line 49
        echo "            <li>";
        echo ($context["text_stock"] ?? null);
        echo " ";
        echo ($context["stock"] ?? null);
        echo "</li>
          </ul>
\t\t    <hr>
          ";
        // line 52
        if (($context["price"] ?? null)) {
            // line 53
            echo "          <ul class=\"list-unstyled price\">
            ";
            // line 54
            if ( !($context["special"] ?? null)) {
                // line 55
                echo "            <li>
              <h2 class=\"price-new\">";
                // line 56
                echo ($context["price"] ?? null);
                echo "</h2>
            </li>
            ";
            } else {
                // line 59
                echo "            <li><span class=\"price-old\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
            <li>
              <h2 class=\"price-new\">";
                // line 61
                echo ($context["special"] ?? null);
                echo "</h2>
            </li>
            ";
            }
            // line 64
            echo "            ";
            if (($context["tax"] ?? null)) {
                // line 65
                echo "            <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
            ";
            }
            // line 67
            echo "            ";
            if (($context["points"] ?? null)) {
                // line 68
                echo "            <li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
            ";
            }
            // line 70
            echo "            ";
            if (($context["discounts"] ?? null)) {
                // line 71
                echo "            <li>
              <hr>
            </li>
            ";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 75
                    echo "            <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 75);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 75);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "            ";
            }
            // line 78
            echo "          </ul>
          ";
        }
        // line 80
        echo "          <div id=\"product\" class=\"price\"> ";
        if (($context["options"] ?? null)) {
            // line 81
            echo "            <hr>
            <h3>";
            // line 82
            echo ($context["text_option"] ?? null);
            echo "</h3>
            ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 84
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 84) == "select")) {
                    // line 85
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 85)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 86
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 86);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 86);
                    echo "</label>
              <select name=\"option[";
                    // line 87
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 87);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 87);
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 88
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 89
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 89));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 90
                        echo "                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 90);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 90);
                        echo "
                ";
                        // line 91
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 91)) {
                            // line 92
                            echo "                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 92);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 92);
                            echo ")
                ";
                        }
                        // line 93
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 95
                    echo "              </select>
            </div>
            ";
                }
                // line 98
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 98) == "radio")) {
                    // line 99
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 99)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 100
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 100);
                    echo "</label>
              <div id=\"input-option";
                    // line 101
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 101);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 101));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 102
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 104
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 104);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 104);
                        echo "\" />
                    ";
                        // line 105
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 105)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 105);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 105);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 105)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 105);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 105);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
                    ";
                        // line 106
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 106);
                        echo "
                    ";
                        // line 107
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 107)) {
                            // line 108
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 108);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 108);
                            echo ")
                    ";
                        }
                        // line 109
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 111
                    echo " </div>
            </div>
            ";
                }
                // line 114
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 114) == "checkbox")) {
                    // line 115
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 115)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 116
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 116);
                    echo "</label>
              <div id=\"input-option";
                    // line 117
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 117);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 117));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 118
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 120
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 120);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 120);
                        echo "\" />
                    ";
                        // line 121
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 121)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 121);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 121);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 121)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 121);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 121);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 122
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 122);
                        echo "
                    ";
                        // line 123
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 123)) {
                            // line 124
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 124);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 124);
                            echo ")
                    ";
                        }
                        // line 125
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 127
                    echo " </div>
            </div>
            ";
                }
                // line 130
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 130) == "text")) {
                    // line 131
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 131)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 132
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 132);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 132);
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 133
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 133);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 133);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 133);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 133);
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 136
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 136) == "textarea")) {
                    // line 137
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 137)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 138
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 138);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 138);
                    echo "</label>
              <textarea name=\"option[";
                    // line 139
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 139);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 139);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 139);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 139);
                    echo "</textarea>
            </div>
            ";
                }
                // line 142
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 142) == "file")) {
                    // line 143
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 143)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 144
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 144);
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 145
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 145);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 146
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 146);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 146);
                    echo "\" />
            </div>
            ";
                }
                // line 149
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 149) == "date")) {
                    // line 150
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 150)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 151
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 151);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 151);
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 153
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 153);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 153);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 153);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 159
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 159) == "datetime")) {
                    // line 160
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 160)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 161
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 161);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 161);
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 163
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 163);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 163);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 163);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 169
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 169) == "time")) {
                    // line 170
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 170)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 171
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 171);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 171);
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 173
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 173);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 173);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 173);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 179
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "            ";
        }
        // line 181
        echo "            ";
        if (($context["recurrings"] ?? null)) {
            // line 182
            echo "            <hr>
            <h3>";
            // line 183
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 186
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 188
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 188);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 188);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 194
        echo "            <div class=\"form-group\">
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 195
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 196
        echo ($context["product_id"] ?? null);
        echo "\" />
              <br />
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 198
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
            </div>
            ";
        // line 200
        if ((($context["minimum"] ?? null) > 1)) {
            // line 201
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 202
        echo "</div>
          ";
        // line 203
        if (($context["review_status"] ?? null)) {
            // line 204
            echo "          <div class=\"rating\">
            <p>";
            // line 205
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 206
                echo "              ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 207
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo ($context["reviews"] ?? null);
            echo "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo ($context["text_write"] ?? null);
            echo "</a></p>
            <hr>
          </div>
          ";
        }
        // line 210
        echo " </div>
     
  ";
        // line 212
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 213
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 214
            echo "        ";
        } else {
            // line 215
            echo "        ";
            $context["class"] = "col-sm-8";
            // line 216
            echo "        ";
        }
        // line 217
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\"> 
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 219
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
            ";
        // line 220
        if (($context["attribute_groups"] ?? null)) {
            // line 221
            echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
            ";
        }
        // line 223
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 224
            echo "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
            ";
        }
        // line 226
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 228
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 229
        if (($context["attribute_groups"] ?? null)) {
            // line 230
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 232
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 233
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 235
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 235);
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 239
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 239));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 240
                    echo "                <tr>
                  <td>";
                    // line 241
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 241);
                    echo "</td>
                  <td>";
                    // line 242
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 242);
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 245
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "              </table>
            </div>
            ";
        }
        // line 250
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 251
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2>";
            // line 254
            echo ($context["text_write"] ?? null);
            echo "</h2>
                ";
            // line 255
            if (($context["review_guest"] ?? null)) {
                // line 256
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 258
                echo ($context["entry_name"] ?? null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 259
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 264
                echo ($context["entry_review"] ?? null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 266
                echo ($context["text_note"] ?? null);
                echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 271
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 272
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                // line 282
                echo ($context["entry_good"] ?? null);
                echo "</div>
                </div>
                ";
                // line 284
                echo ($context["captcha"] ?? null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 287
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 291
                echo "                ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 293
            echo "              </form>
            </div>
            ";
        }
        // line 295
        echo "</div>
        </div>
        \t </div>
        ";
        // line 298
        if (($context["tags"] ?? null)) {
            // line 299
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
        ";
            // line 300
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 301
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 301);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 301);
                    echo "</a>,
        ";
                } else {
                    // line 302
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 302);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 302);
                    echo "</a> ";
                }
                // line 303
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 305
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 306
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 384
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 389
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 395
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 462
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 466
        echo ($context["product_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script> 
";
        // line 504
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "hover/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1248 => 504,  1207 => 466,  1200 => 462,  1130 => 395,  1121 => 389,  1113 => 384,  1032 => 306,  1027 => 305,  1018 => 303,  1011 => 302,  1001 => 301,  997 => 300,  992 => 299,  990 => 298,  985 => 295,  980 => 293,  974 => 291,  965 => 287,  959 => 284,  954 => 282,  941 => 272,  937 => 271,  929 => 266,  924 => 264,  916 => 259,  912 => 258,  908 => 256,  906 => 255,  902 => 254,  897 => 251,  894 => 250,  889 => 247,  882 => 245,  873 => 242,  869 => 241,  866 => 240,  862 => 239,  855 => 235,  851 => 233,  847 => 232,  843 => 230,  841 => 229,  837 => 228,  833 => 226,  827 => 224,  824 => 223,  818 => 221,  816 => 220,  812 => 219,  806 => 217,  803 => 216,  800 => 215,  797 => 214,  794 => 213,  792 => 212,  788 => 210,  773 => 207,  766 => 206,  762 => 205,  759 => 204,  757 => 203,  754 => 202,  748 => 201,  746 => 200,  739 => 198,  734 => 196,  730 => 195,  727 => 194,  721 => 190,  710 => 188,  706 => 187,  702 => 186,  696 => 183,  693 => 182,  690 => 181,  687 => 180,  681 => 179,  668 => 173,  661 => 171,  654 => 170,  651 => 169,  638 => 163,  631 => 161,  624 => 160,  621 => 159,  608 => 153,  601 => 151,  594 => 150,  591 => 149,  583 => 146,  575 => 145,  571 => 144,  564 => 143,  561 => 142,  549 => 139,  543 => 138,  536 => 137,  533 => 136,  521 => 133,  515 => 132,  508 => 131,  505 => 130,  500 => 127,  492 => 125,  485 => 124,  483 => 123,  478 => 122,  462 => 121,  456 => 120,  452 => 118,  446 => 117,  442 => 116,  435 => 115,  432 => 114,  427 => 111,  419 => 109,  412 => 108,  410 => 107,  406 => 106,  388 => 105,  382 => 104,  378 => 102,  372 => 101,  368 => 100,  361 => 99,  358 => 98,  353 => 95,  346 => 93,  339 => 92,  337 => 91,  330 => 90,  326 => 89,  322 => 88,  316 => 87,  310 => 86,  303 => 85,  300 => 84,  296 => 83,  292 => 82,  289 => 81,  286 => 80,  282 => 78,  279 => 77,  268 => 75,  264 => 74,  259 => 71,  256 => 70,  248 => 68,  245 => 67,  237 => 65,  234 => 64,  228 => 61,  222 => 59,  216 => 56,  213 => 55,  211 => 54,  208 => 53,  206 => 52,  197 => 49,  189 => 47,  187 => 46,  180 => 45,  170 => 43,  168 => 42,  162 => 40,  159 => 39,  156 => 38,  153 => 37,  150 => 36,  148 => 35,  143 => 32,  138 => 29,  135 => 28,  122 => 26,  117 => 25,  114 => 24,  104 => 22,  102 => 21,  99 => 20,  97 => 19,  93 => 18,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "hover/template/product/product.twig", "");
    }
}
