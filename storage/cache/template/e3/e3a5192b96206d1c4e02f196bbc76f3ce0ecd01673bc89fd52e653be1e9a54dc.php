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

/* olive/template/product/product.twig */
class __TwigTemplate_659c07351c7ebfb424283dcc4296a37796d6ba428edff76ce0d27b3eded18e1b extends \Twig\Template
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
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
    <li><a href=\"";
            // line 5
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo " 
  </ul>
  <div class=\"row\">
    <div class=\"left-column\">
      ";
        // line 10
        echo ($context["column_left"] ?? null);
        echo " 
    </div>
\t <div class=\"right-column\">
      ";
        // line 13
        echo ($context["column_right"] ?? null);
        echo " 
    </div>
    <div id=\"content\">
\t";
        // line 16
        echo ($context["content_top"] ?? null);
        echo " 
\t     <div class=\"sidebar\">
        ";
        // line 18
        if (($context["column_left"] ?? null)) {
            echo " 
        <button type=\"button\" id=\"left\" class=\"btn btn-grid\"><i class=\"fa fa-align-left\" aria-hidden=\"true\"></i></button>
        ";
        }
        // line 20
        echo " 
        ";
        // line 21
        if (($context["column_right"] ?? null)) {
            echo " 
        <button type=\"button\" id=\"right\" class=\"btn btn-grid\"><i class=\"fa fa-align-right\" aria-hidden=\"true\"></i></button>
        ";
        }
        // line 23
        echo " 
      </div>
\t  <h1 class=\"title-category\">";
        // line 25
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <div class=\"product-flex\">
          ";
        // line 27
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            echo " 
          <ul class=\"thumbnails\">
            ";
            // line 29
            if (($context["thumb"] ?? null)) {
                echo " 
            <li><img src=\"";
                // line 30
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></li>
            ";
            }
            // line 31
            echo " 
            ";
            // line 32
            if (($context["images"] ?? null)) {
                echo " 
            ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    echo " 
            <li><img src=\"";
                    // line 34
                    echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["image"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["popup"] ?? null) : null);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"  /></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo " 
            ";
            }
            // line 36
            echo " 
          </ul>
          ";
        }
        // line 38
        echo " 
        <div class=\"relative\">
<div class=\"fix\">
<ul class=\"list-unstyled\">
            ";
        // line 42
        if (($context["manufacturer"] ?? null)) {
            echo " 
            <li>";
            // line 43
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
            ";
        }
        // line 44
        echo " 
            <li>";
        // line 45
        echo ($context["text_model"] ?? null);
        echo " ";
        echo ($context["model"] ?? null);
        echo "</li>
            ";
        // line 46
        if (($context["reward"] ?? null)) {
            echo " 
            <li>";
            // line 47
            echo ($context["text_reward"] ?? null);
            echo " ";
            echo ($context["reward"] ?? null);
            echo "</li>
            ";
        }
        // line 48
        echo " 
            <li>";
        // line 49
        echo ($context["text_stock"] ?? null);
        echo " ";
        echo ($context["stock"] ?? null);
        echo "</li>
          </ul>
          ";
        // line 51
        if (($context["price"] ?? null)) {
            echo " 
          <ul class=\"list-unstyled\">
            ";
            // line 53
            if ( !($context["special"] ?? null)) {
                echo " 
            <li class=\"price\">
              <h2>";
                // line 55
                echo ($context["price"] ?? null);
                echo "</h2>
            </li>
            ";
            } else {
                // line 57
                echo " 
            <li class=\"price\"><h2>";
                // line 58
                echo ($context["special"] ?? null);
                echo "</h2><span style=\"text-decoration: line-through; margin-left: 10px;\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
            ";
            }
            // line 59
            echo " 
            ";
            // line 60
            if (($context["tax"] ?? null)) {
                echo " 
            <li>";
                // line 61
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
            ";
            }
            // line 62
            echo " 
            ";
            // line 63
            if (($context["points"] ?? null)) {
                echo " 
            <li>";
                // line 64
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
            ";
            }
            // line 65
            echo " 
            ";
            // line 66
            if (($context["discounts"] ?? null)) {
                echo " 
            <li>
              <hr>
            </li>
            ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    echo " 
            <li>";
                    // line 71
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["discount"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["quantity"] ?? null) : null);
                    echo ($context["text_discount"] ?? null);
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["discount"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["price"] ?? null) : null);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo " 
            ";
            }
            // line 73
            echo " 
          </ul>
          ";
        }
        // line 75
        echo " 
            <div id=\"product\">
                  ";
        // line 77
        if (($context["options"] ?? null)) {
            // line 78
            echo "                  <hr>
                  <h3>";
            // line 79
            echo ($context["text_option"] ?? null);
            echo "</h3>
                  ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 81
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 81) == "select")) {
                    // line 82
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 82)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 83
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 83);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 83);
                    echo "</label>
                     <select name=\"option[";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 84);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 84);
                    echo "\" class=\"form-control\">
                        <option value=\"\">";
                    // line 85
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                        ";
                    // line 86
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 86));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 87
                        echo "                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 87);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 87);
                        echo "
                           ";
                        // line 88
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 88)) {
                            // line 89
                            echo "                           (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 89);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 89);
                            echo ")
                           ";
                        }
                        // line 90
                        echo " 
                        </option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 93
                    echo "                     </select>
                  </div>
                  ";
                }
                // line 96
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 96) == "radio")) {
                    // line 97
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 97)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\">";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 98);
                    echo "</label>
                     <div id=\"input-option";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 99);
                    echo "\">
                        ";
                    // line 100
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 100));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 101
                        echo "                        <div class=\"radio\">
                           <label>
                           <input type=\"radio\" name=\"option[";
                        // line 103
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 103);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 103);
                        echo "\" />
                           ";
                        // line 104
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 104)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 104);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 104);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 104)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 104);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 104);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
                           ";
                        // line 105
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 105);
                        echo "
                           ";
                        // line 106
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 106)) {
                            // line 107
                            echo "                           (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 107);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 107);
                            echo ")
                           ";
                        }
                        // line 108
                        echo " </label>
                        </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 110
                    echo " 
                     </div>
                  </div>
                  ";
                }
                // line 114
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 114) == "checkbox")) {
                    // line 115
                    echo "                  <div class=\"form-group";
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
                    echo "\">
                        ";
                    // line 118
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 118));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 119
                        echo "                        <div class=\"checkbox\">
                           <label>
                           <input type=\"checkbox\" name=\"option[";
                        // line 121
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 121);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 121);
                        echo "\" />
                           ";
                        // line 122
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 122)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 122);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 122);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 122)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 122);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 122);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 123
                        echo "                           ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 123);
                        echo "
                           ";
                        // line 124
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 124)) {
                            // line 125
                            echo "                           (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 125);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 125);
                            echo ")
                           ";
                        }
                        // line 126
                        echo " </label>
                        </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 128
                    echo " 
                     </div>
                  </div>
                  ";
                }
                // line 132
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 132) == "text")) {
                    // line 133
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 133)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 134
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 134);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 134);
                    echo "</label>
                     <input type=\"text\" name=\"option[";
                    // line 135
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 135);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 135);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 135);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 135);
                    echo "\" class=\"form-control\" />
                  </div>
                  ";
                }
                // line 138
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 138) == "textarea")) {
                    // line 139
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 139)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 140
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 140);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 140);
                    echo "</label>
                     <textarea name=\"option[";
                    // line 141
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 141);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 141);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 141);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 141);
                    echo "</textarea>
                  </div>
                  ";
                }
                // line 144
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 144) == "file")) {
                    // line 145
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 145)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\">";
                    // line 146
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 146);
                    echo "</label>
                     <button type=\"button\" id=\"button-upload";
                    // line 147
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 147);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                     <input type=\"hidden\" name=\"option[";
                    // line 148
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 148);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 148);
                    echo "\" />
                  </div>
                  ";
                }
                // line 151
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 151) == "date")) {
                    // line 152
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 152)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 153
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 153);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 153);
                    echo "</label>
                     <div class=\"input-group date\">
                        <input type=\"text\" name=\"option[";
                    // line 155
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 155);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 155);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 155);
                    echo "\" class=\"form-control\" />
                        <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span>
                     </div>
                  </div>
                  ";
                }
                // line 162
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 162) == "datetime")) {
                    // line 163
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 163)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 164
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 164);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 164);
                    echo "</label>
                     <div class=\"input-group datetime\">
                        <input type=\"text\" name=\"option[";
                    // line 166
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 166);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 166);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 166);
                    echo "\" class=\"form-control\" />
                        <span class=\"input-group-btn\">
                        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                        </span>
                     </div>
                  </div>
                  ";
                }
                // line 173
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 173) == "time")) {
                    // line 174
                    echo "                  <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 174)) {
                        echo " required ";
                    }
                    echo "\">
                     <label class=\"control-label\" for=\"input-option";
                    // line 175
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 175);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 175);
                    echo "</label>
                     <div class=\"input-group time\">
                        <input type=\"text\" name=\"option[";
                    // line 177
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 177);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 177);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 177);
                    echo "\" class=\"form-control\" />
                        <span class=\"input-group-btn\">
                        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                        </span>
                     </div>
                  </div>
                  ";
                }
                // line 184
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "                  ";
        }
        // line 186
        echo "                  ";
        if (($context["recurrings"] ?? null)) {
            // line 187
            echo "                  <hr>
                  <h3>";
            // line 188
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
                  <div class=\"form-group required\">
                     <select name=\"recurring_id\" class=\"form-control\">
                        <option value=\"\">";
            // line 191
            echo ($context["text_select"] ?? null);
            echo "</option>
                        ";
            // line 192
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 193
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 193);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 193);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            echo "                     </select>
                     <div class=\"help-block\" id=\"recurring-description\"></div>
                  </div>
                  ";
        }
        // line 199
        echo "                  <div class=\"form-group\">
                     <div class=\"product-input\">
                        <div class=\"input-group plus-minus\">
                           <span class=\"input-group-btn\">
                           <button class=\"btn btn-default\" data-dir=\"dwn\"><i class=\"fa fa-minus\" aria-hidden=\"true\"></i></button>
                           </span>
                           <input type=\"text\" name=\"quantity\" value=\"";
        // line 205
        echo ($context["minimum"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control text-center\" />
                           <span class=\"input-group-btn\">
                           <button class=\"btn btn-default\" data-dir=\"up\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></button>
                           </span>
                        </div>
                        <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 210
        echo ($context["product_id"] ?? null);
        echo "\" />
                        <br />
                        <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 212
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
                     </div>
                  </div>
               ";
        // line 215
        if ((($context["minimum"] ?? null) > 1)) {
            echo " 
            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            // line 216
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 217
        echo " 
          </div>
          ";
        // line 219
        if (($context["review_status"] ?? null)) {
            echo " 
          <div class=\"rating\">
            <p>
              ";
            // line 222
            $context["i"] = 1;
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo " 
              ";
                // line 223
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo " 
              <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
              ";
                } else {
                    // line 225
                    echo " 
              <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
              ";
                }
                // line 227
                echo " 
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo " 
              <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 229
            echo ($context["reviews"] ?? null);
            echo "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo ($context["text_write"] ?? null);
            echo "</a></p>
        
          </div>
          ";
        }
        // line 232
        echo " 
        </div>  
\t\t</div>
      <div class=\"col-sm-12\">
\t      <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 237
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
            ";
        // line 238
        if (($context["attribute_groups"] ?? null)) {
            echo " 
            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            // line 239
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
            ";
        }
        // line 240
        echo " 
            ";
        // line 241
        if (($context["review_status"] ?? null)) {
            echo " 
            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            // line 242
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
            ";
        }
        // line 243
        echo " 
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 246
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 247
        if (($context["attribute_groups"] ?? null)) {
            echo " 
            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 250
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                echo " 
                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 253
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["attribute_group"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["name"] ?? null) : null);
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                  ";
                // line 257
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["attribute_group"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["attribute"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    echo " 
                  <tr>
                    <td>";
                    // line 259
                    echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["attribute"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["name"] ?? null) : null);
                    echo "</td>
                    <td>";
                    // line 260
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["attribute"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["text"] ?? null) : null);
                    echo "</td>
                  </tr>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 262
                echo " 
                </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 264
            echo " 
              </table>
            </div>
            ";
        }
        // line 267
        echo " 
            ";
        // line 268
        if (($context["review_status"] ?? null)) {
            echo " 
            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2>";
            // line 272
            echo ($context["text_write"] ?? null);
            echo "</h2>
                ";
            // line 273
            if (($context["review_guest"] ?? null)) {
                echo " 
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 276
                echo ($context["entry_name"] ?? null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 277
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 282
                echo ($context["entry_review"] ?? null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 284
                echo ($context["text_note"] ?? null);
                echo "</div>
                  </div>
                </div>
               <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 289
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                   <div class=\"stars-rating\">
\t\t\t\t<input name=\"rating\" id=\"s_rating\" value=\"0\" type=\"hidden\">
\t\t\t\t<div class=\"wrap\" data-rate=\"0\">
\t\t\t\t\t<span title=\"Ужасно\" data-rate=\"1\"></span>
\t\t\t\t\t<span title=\"Плохо\" data-rate=\"2\"></span>
\t\t\t\t\t<span title=\"Нормально\" data-rate=\"3\"></span>
\t\t\t\t\t<span title=\"Хорошо\" data-rate=\"4\"></span>
\t\t\t\t\t<span title=\"Отлично\" data-rate=\"5\"></span>
\t\t\t\t</div>
\t\t\t</div>
         \t</div>
\t\t\t\t</div>
                ";
                // line 302
                echo ($context["captcha"] ?? null);
                echo " 
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 305
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 308
                echo " 
                ";
                // line 309
                echo ($context["text_login"] ?? null);
                echo " 
                ";
            }
            // line 310
            echo " 
              </form>
            </div>
            ";
        }
        // line 313
        echo " 
          </div>
\t  </div>
\t  </div>
      ";
        // line 317
        echo ($context["content_bottom"] ?? null);
        echo "</div>
</div></div>
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
\t\t\t\$('.alert, .text-danger').remove();

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
\t\t\t\$('.alert, .text-danger').remove();
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
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-success\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#cart > button').html('<i class=\"bi bi-basket2\"></i><span id=\"cart-total\"> ' + json['total'] + '</span>');

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
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
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
        // line 470
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 474
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
\t\t\t\$('.alert-success, .alert-danger').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\">
  <!--
  \$('#left').click(function() {
    \$('.left-column').toggleClass('show-left');
  });
\$('#right').click(function() {
    \$('.right-column').toggleClass('show-right');
  });
  //
  -->
</script>
<script>
   \$(document).on('click', '.plus-minus button', function () {    
   \tvar btn = \$(this),
   \t\toldValue = btn.closest('.plus-minus').find('input').val().trim(),
   \t\tnewVal = 1;
   \tif (btn.attr('data-dir') == 'up') {
   \t\tnewVal = parseInt(oldValue) + 1;
   \t} else {
   \t\tif (oldValue > 1) {
   \t\t\tnewVal = parseInt(oldValue) - 1;
   \t\t} else {
   \t\t\tnewVal = 1;
   \t\t}
   \t}
   \tbtn.closest('.plus-minus').find('input').val(newVal);
   });
</script>
<style>
   .stars-rating label {display: block;}
   .stars-rating .wrap {display: inline-block; font-size: 0;}
   .stars-rating .wrap span {font-size: 24px; line-height: 20px; cursor: pointer;}
   .stars-rating .wrap span:before {content: \"\\2606\"; color: #bbb;}
   .stars-rating .wrap:not([data-rate=\"0\"]) span:before {content: \"\\2605\";}
   .stars-rating .wrap:hover span:before {content: \"\\2605\"; color: #fe2;}
   .stars-rating .wrap:hover span:hover ~ span:before {color: #bbb;}
   .stars-rating .wrap[data-rate=\"1\"] span:nth-child(-n+1):before,
   .stars-rating .wrap[data-rate=\"2\"] span:nth-child(-n+2):before,
   .stars-rating .wrap[data-rate=\"3\"] span:nth-child(-n+3):before,
   .stars-rating .wrap[data-rate=\"4\"] span:nth-child(-n+4):before,
   .stars-rating .wrap[data-rate=\"5\"] span:nth-child(-n+5):before {color: #fa0;}
</style>
<script>
   \$(document).ready(function(){
       \$('.stars-rating span').click(function(e){
           var rate = \$(this).attr('data-rate');
           \$('.stars-rating .wrap').attr('data-rate', rate);
           \$('#s_rating').val(rate);               
       });
   });
</script>
<script type=\"text/javascript\"><!--
   function price_format(price) { 
   c=";
        // line 555
        echo twig_get_attribute($this->env, $this->source, ($context["autocalc_currency"] ?? null), "decimals", [], "any", false, false, false, 555);
        echo ";d='";
        echo twig_get_attribute($this->env, $this->source, ($context["autocalc_currency"] ?? null), "decimal_point", [], "any", false, false, false, 555);
        echo "';t='";
        echo twig_get_attribute($this->env, $this->source, ($context["autocalc_currency"] ?? null), "thousand_point", [], "any", false, false, false, 555);
        echo "';sl='";
        echo twig_get_attribute($this->env, $this->source, ($context["autocalc_currency"] ?? null), "symbol_left", [], "any", false, false, false, 555);
        echo "';sr='";
        echo twig_get_attribute($this->env, $this->source, ($context["autocalc_currency"] ?? null), "symbol_right", [], "any", false, false, false, 555);
        echo "';n=price*";
        echo twig_get_attribute($this->env, $this->source, ($context["autocalc_currency"] ?? null), "value", [], "any", false, false, false, 555);
        echo ";i=parseInt(n=Math.abs(n).toFixed(c))+''; j=((j=i.length)>3)?j%3:0;price_text=sl+(j?i.substr(0,j)+t:'')+i.substr(j).replace(/(\\d{3})(?=\\d)/g,\"\$1\"+t)+(c?d+Math.abs(n-i).toFixed(c).slice(2):'')+sr;";
        if (($context["autocalc_currency2"] ?? null)) {
            echo "c=";
            echo twig_get_attribute($this->env, $this->source, ($context["autocalc_currency2"] ?? null), "decimals", [], "any", false, false, false, 555);
            echo ";d='";
            echo twig_get_attribute($this->env, $this->source, ($context["autocalc_currency2"] ?? null), "decimal_point", [], "any", false, false, false, 555);
            echo "';t='";
            echo twig_get_attribute($this->env, $this->source, ($context["autocalc_currency2"] ?? null), "thousand_point", [], "any", false, false, false, 555);
            echo "';sl='";
            echo twig_get_attribute($this->env, $this->source, ($context["autocalc_currency2"] ?? null), "symbol_left", [], "any", false, false, false, 555);
            echo "';sr='";
            echo twig_get_attribute($this->env, $this->source, ($context["autocalc_currency2"] ?? null), "symbol_right", [], "any", false, false, false, 555);
            echo "';n=price*";
            echo twig_get_attribute($this->env, $this->source, ($context["autocalc_currency2"] ?? null), "value", [], "any", false, false, false, 555);
            echo ";i=parseInt(n=Math.abs(n).toFixed(c))+''; j=((j=i.length)>3)?j%3:0; price_text+='  <span class=\"currency2\">(' + sl+(j?i.substr(0,j)+t:'')+i.substr(j).replace(/(\\d{3})(?=\\d)/g,\"\$1\"+t)+(c?d+Math.abs(n-i).toFixed(c).slice(2):'')+sr + ')</span>';";
        }
        echo "return price_text;
   }
   function points_format(v) {
   return v.toFixed(0);
   }
   function process_discounts(price, quantity) {
   ";
        // line 561
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["discounts_raw"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["discounts"]) {
            echo "if(quantity>=";
            echo twig_get_attribute($this->env, $this->source, $context["discounts"], "quantity", [], "any", false, false, false, 561);
            echo "){price=";
            echo twig_get_attribute($this->env, $this->source, $context["discounts"], "price", [], "any", false, false, false, 561);
            echo ";}";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discounts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "return price;}
   function calculate_tax(price) {
   var p=price;";
        // line 563
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_rates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_rate"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["tax_rate"], "type", [], "any", false, false, false, 563) == "F")) {
                echo "p+=";
                echo twig_get_attribute($this->env, $this->source, $context["tax_rate"], "rate", [], "any", false, false, false, 563);
                echo ";";
            }
            if ((twig_get_attribute($this->env, $this->source, $context["tax_rate"], "type", [], "any", false, false, false, 563) == "P")) {
                echo "p+=price*";
                echo (twig_get_attribute($this->env, $this->source, $context["tax_rate"], "rate", [], "any", false, false, false, 563) / 100.0);
                echo ";";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_rate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "return p;}
   function autocalc_aap(s,p,ff){\$(s).each(function(){var \$t=\$(this);\$({value:\$t.data('value')||0}).animate({value:p},{easing:'swing',duration:500,step:function(value){\$t.html(ff(value));\$t.data('value',value);}});});}
   function recalculateprice() {
   var main_price = ";
        // line 566
        echo (($context["apo_price_value"] ?? null) + 0.0);
        echo ";
   var special = ";
        // line 567
        echo (($context["apo_special_value"] ?? null) + 0.0);
        echo ";
   var input_quantity = Number(\$('#product input[name=\"quantity\"]').val()) || 1;
   var discount_coefficient = 1;
   var option_price = 0;
   var discount_quantity = 0;
   \$('#product .owq-option input[type=\"checkbox\"]').each(function() {
        \$qty = \$(this).closest('tr').find('.owq-input');
        if (\$(this).data('split')=='/') discount_quantity += Number(\$qty.val()) || 0;});  
   if (discount_quantity == 0) discount_quantity = input_quantity;
    ";
        // line 576
        if (($context["special"] ?? null)) {
            // line 577
            echo "    special_coefficient = ";
            echo (($context["apo_price_value"] ?? null) / ($context["apo_special_value"] ?? null));
            echo ";
    ";
        } else {
            // line 579
            echo "    ";
            if (($context["autocalc_option_discount"] ?? null)) {
                // line 580
                echo "    if (main_price) discount_coefficient = process_discounts(main_price, discount_quantity) / main_price;
    ";
            } else {
                // line 582
                echo "    main_price = process_discounts(main_price, discount_quantity);
    ";
            }
            // line 584
            echo "    ";
        }
        // line 585
        echo "    ";
        if (($context["points"] ?? null)) {
            // line 586
            echo "    var points = ";
            echo ($context["apo_points_value"] ?? null);
            echo ";
    \$('#product input:checked,#product option:selected').each(function() {
        if (\$(this).data('points')) points += Number(\$(this).data('points'));
    });
    autocalc_aap('.autocalc-product-points', points, points_format);
    ";
        }
        // line 592
        echo "    \$('#product input:checked,#product option:selected').each(function() {
    if (\$(this).data('prefix') == '=') {
        option_price += Number(\$(this).data('price'));
        main_price = 0;
        special = 0;
    }
    });
    \$('#product input:checked,#product option:selected').each(function() {
    if (\$(this).data('prefix') == '+') {
        option_price += Number(\$(this).data('price'));
    }
    if (\$(this).data('prefix') == '-') {
        option_price -= Number(\$(this).data('price'));
    }
    if (\$(this).data('prefix') == '%') {
        pcnt = 1.0 + (Number(\$(this).data('price')) / 100.0);
        option_price *= pcnt;
        main_price *= pcnt;
        special *= pcnt;
    }
    if (\$(this).data('prefix') == '*') {
        option_price *= Number(\$(this).data('price'));
        main_price *= Number(\$(this).data('price'));
        special *= Number(\$(this).data('price'));
    }
    if (\$(this).data('prefix') == '/') {
        option_price /= Number(\$(this).data('price'));
        main_price /= Number(\$(this).data('price'));
        special /= Number(\$(this).data('price'));
    }
    });
    special += option_price;
    main_price += option_price;
    ";
        // line 625
        if (($context["special"] ?? null)) {
            // line 626
            echo "    ";
            if (($context["autocalc_option_special"] ?? null)) {
                // line 627
                echo "    special = main_price / special_coefficient;
    ";
            } else {
                // line 629
                echo "    main_price = special * special_coefficient;
    ";
            }
            // line 631
            echo "    tax = special;
    ";
        } else {
            // line 633
            echo "    ";
            if (($context["autocalc_option_discount"] ?? null)) {
                // line 634
                echo "    main_price *= discount_coefficient;
    ";
            }
            // line 636
            echo "    tax = main_price;
    ";
        }
        // line 638
        echo "    ";
        if (($context["tax"] ?? null)) {
            // line 639
            echo "    main_price = calculate_tax(main_price);
    ";
            // line 640
            if (($context["special"] ?? null)) {
                // line 641
                echo "    special = calculate_tax(special);
    ";
            }
            // line 643
            echo "    ";
        }
        // line 644
        echo "    ";
        if ( !($context["autocalc_not_mul_qty"] ?? null)) {
            // line 645
            echo "    if (input_quantity > 0) {
        main_price *= input_quantity;
        special *= input_quantity;
        ";
            // line 648
            if (($context["tax"] ?? null)) {
                echo "tax *= input_quantity;";
            }
            // line 649
            echo "    }
    ";
        }
        // line 651
        echo "    autocalc_aap('.autocalc-product-price', main_price, price_format);
    ";
        // line 652
        if (($context["special"] ?? null)) {
            echo "autocalc_aap('.autocalc-product-special', special, price_format);";
        }
        // line 653
        echo "    ";
        if (($context["tax"] ?? null)) {
            echo "autocalc_aap('.autocalc-product-tax', tax, price_format);";
        }
        // line 654
        echo "   }
   \$(document).ready(function() {
    \$('#product input[type=\"checkbox\"],#product input[type=\"radio\"],#product select').each(function(){if(\$(this).data('autocalc'))return;\$(this).data('autocalc',1).on('change',function(){recalculateprice();});});    
    \$('#product input[name=\"quantity\"]').each(function(){if(\$(this).data('autocalc'))return;var \$q=\$(this);\$q.data('autocalc',1).data('val',\$q.val());(function(){if(\$q.val()!=\$q.data('val')){\$q.data('val',\$q.val());recalculateprice();}setTimeout(arguments.callee,250);})();});
    ";
        // line 658
        if (($context["autocalc_select_first"] ?? null)) {
            // line 659
            echo "    \$('#product select[name^=\"option\"] option[value=\"\"]').remove();
    last_name='';\$('#product input[type=\"radio\"][name^=\"option\"]').each(function(){if(\$(this).attr('name')!=last_name)\$(this).prop('checked',true);last_name=\$(this).attr('name');});
    ";
        }
        // line 662
        echo "    recalculateprice();
   });
   //-->
</script>
";
        // line 666
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "olive/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1523 => 666,  1517 => 662,  1512 => 659,  1510 => 658,  1504 => 654,  1499 => 653,  1495 => 652,  1492 => 651,  1488 => 649,  1484 => 648,  1479 => 645,  1476 => 644,  1473 => 643,  1469 => 641,  1467 => 640,  1464 => 639,  1461 => 638,  1457 => 636,  1453 => 634,  1450 => 633,  1446 => 631,  1442 => 629,  1438 => 627,  1435 => 626,  1433 => 625,  1398 => 592,  1388 => 586,  1385 => 585,  1382 => 584,  1378 => 582,  1374 => 580,  1371 => 579,  1365 => 577,  1363 => 576,  1351 => 567,  1347 => 566,  1325 => 563,  1309 => 561,  1274 => 555,  1190 => 474,  1183 => 470,  1027 => 317,  1021 => 313,  1015 => 310,  1010 => 309,  1007 => 308,  998 => 305,  992 => 302,  976 => 289,  968 => 284,  963 => 282,  955 => 277,  951 => 276,  945 => 273,  941 => 272,  934 => 268,  931 => 267,  925 => 264,  917 => 262,  908 => 260,  904 => 259,  897 => 257,  890 => 253,  882 => 250,  876 => 247,  872 => 246,  867 => 243,  862 => 242,  858 => 241,  855 => 240,  850 => 239,  846 => 238,  842 => 237,  835 => 232,  826 => 229,  823 => 228,  816 => 227,  811 => 225,  805 => 223,  798 => 222,  792 => 219,  788 => 217,  783 => 216,  779 => 215,  771 => 212,  766 => 210,  758 => 205,  750 => 199,  744 => 195,  733 => 193,  729 => 192,  725 => 191,  719 => 188,  716 => 187,  713 => 186,  710 => 185,  704 => 184,  690 => 177,  683 => 175,  676 => 174,  673 => 173,  659 => 166,  652 => 164,  645 => 163,  642 => 162,  628 => 155,  621 => 153,  614 => 152,  611 => 151,  603 => 148,  595 => 147,  591 => 146,  584 => 145,  581 => 144,  569 => 141,  563 => 140,  556 => 139,  553 => 138,  541 => 135,  535 => 134,  528 => 133,  525 => 132,  519 => 128,  511 => 126,  504 => 125,  502 => 124,  497 => 123,  481 => 122,  475 => 121,  471 => 119,  467 => 118,  463 => 117,  459 => 116,  452 => 115,  449 => 114,  443 => 110,  435 => 108,  428 => 107,  426 => 106,  422 => 105,  404 => 104,  398 => 103,  394 => 101,  390 => 100,  386 => 99,  382 => 98,  375 => 97,  372 => 96,  367 => 93,  359 => 90,  352 => 89,  350 => 88,  343 => 87,  339 => 86,  335 => 85,  329 => 84,  323 => 83,  316 => 82,  313 => 81,  309 => 80,  305 => 79,  302 => 78,  300 => 77,  296 => 75,  291 => 73,  287 => 72,  277 => 71,  271 => 70,  264 => 66,  261 => 65,  254 => 64,  250 => 63,  247 => 62,  240 => 61,  236 => 60,  233 => 59,  226 => 58,  223 => 57,  217 => 55,  212 => 53,  207 => 51,  200 => 49,  197 => 48,  190 => 47,  186 => 46,  180 => 45,  177 => 44,  168 => 43,  164 => 42,  158 => 38,  153 => 36,  149 => 35,  137 => 34,  131 => 33,  127 => 32,  124 => 31,  115 => 30,  111 => 29,  106 => 27,  101 => 25,  97 => 23,  91 => 21,  88 => 20,  82 => 18,  77 => 16,  71 => 13,  65 => 10,  59 => 6,  49 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "olive/template/product/product.twig", "");
    }
}
