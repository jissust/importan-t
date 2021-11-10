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

/* olive/template/product/manufacturer_info.twig */
class __TwigTemplate_bb4d31e4c81726c0c78d00a4fc927470714104c5429a3e7da0f7a0e9c3408757 extends \Twig\Template
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
<div id=\"product-manufacturer\" class=\"container\">
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
      <h2>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      ";
        // line 18
        if (($context["products"] ?? null)) {
            // line 19
            echo "       <div class=\"row\"> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 20
                echo "               <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
         <div class=\"product-thumb transition\">
            <div class=\"button-group\">
               <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 23
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 23);
                echo "');\"><i class=\"bi bi-shuffle\"></i></button>
               <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 24
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 24);
                echo "');\"><i class=\"bi bi-heart\"></i></button>
               <button class=\"btn-modal\" type=\"button\" data-toggle=\"modal\" data-target=\"#";
                // line 25
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["product"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["product_id"] ?? null) : null);
                echo "\"><i class=\"bi bi-eye\"></i></button>
               <button type=\"button\" onclick=\"cart.add('";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 26);
                echo "');\"><i class=\"bi bi-basket2\"></i></button>
            </div>
            <div class=\"image\"><a href=\"";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 28);
                echo "\">
               <img itemprop=\"image\" src=\"";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 29);
                echo "\" img-aux-src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 29);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 29);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 29);
                echo "\" onmouseover=\"productListImageChangeHover(\$(this))\" onmouseout=\"productListImageChangeHover(\$(this))\" class=\"img-responsive\" /></a>
            </div>
            <div class=\"caption\">
               <h4><a href=\"";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 32);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32);
                echo "</a></h4>
               ";
                // line 33
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "               <p class=\"price\">
                  ";
                    // line 35
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 35)) {
                        // line 36
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 36);
                        echo "
                  ";
                    } else {
                        // line 38
                        echo "                  <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 38);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 38);
                        echo "</span>
                  ";
                    }
                    // line 40
                    echo "               </p>
               ";
                }
                // line 42
                echo "            </div>
            <div id=\"";
                // line 43
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["product"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["product_id"] ?? null) : null);
                echo "\" class=\"modal fade\">
               <div class=\"modal-dialog\">
                  <div class=\"modal-content\">
                     <div class=\"modal-header\">
                        <h4 class=\"modal-title\">";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 47);
                echo "</h4>
                     </div>
                     <div class=\"modal-body\" >
                        <div class=\"row\">
                           <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                              <div class=\"images\"><a href=\"";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 52);
                echo "\"><img src=\"";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["product"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["thumb"] ?? null) : null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 52);
                echo "\" /></a></div>
                           </div>
                           <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                              <h2>";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 55);
                echo "</h2>
                              ";
                // line 56
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 56)) {
                    // line 57
                    echo "                              <ul class=\"list-unstyled\">
                                 ";
                    // line 58
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 58)) {
                        // line 59
                        echo "                                 <li>
                                    <h2> ";
                        // line 60
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 60);
                        echo "</h2>
                                 </li>
                                 ";
                    } else {
                        // line 62
                        echo " 
                                 <li>
                                    <h2>";
                        // line 64
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 64);
                        echo "</h2>
                                    <span style=\"text-decoration: line-through;\">";
                        // line 65
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 65);
                        echo "</span>
                                 </li>
                                 ";
                    }
                    // line 67
                    echo " 
                              </ul>
                              ";
                }
                // line 69
                echo " 
                              <div class=\"rating\">
                                 ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 72
                    echo "                                 ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 72) < $context["i"])) {
                        // line 73
                        echo "                                 <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                 ";
                    } else {
                        // line 75
                        echo "                                 <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                 ";
                    }
                    // line 77
                    echo "                                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "                              </div>
                              <p>";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 79);
                echo "</p>
                           </div>
                           <div class=\"col-xs-12\">
                              <table class=\"table table-bordered\">
                                 ";
                // line 83
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "attribute_groups", [], "any", false, false, false, 83));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                    // line 84
                    echo "                                 <thead>
                                    <tr>
                                       <td colspan=\"2\"><strong>";
                    // line 86
                    echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 86);
                    echo "</strong></td>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    ";
                    // line 90
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 90));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                        // line 91
                        echo "                                    <tr>
                                       <td>";
                        // line 92
                        echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 92);
                        echo "</td>
                                       <td>";
                        // line 93
                        echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 93);
                        echo "</td>
                                    </tr>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 96
                    echo "                                 </tbody>
                                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "                              </table>
                           </div>
                        </div>
                     </div>
                     <div class=\"modal-footer\">
                        <a href=\"";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 103);
                echo "\"><button class=\"btn btn-default\" type=\"button\"><i class=\"bi bi-eye\"></i></button></a>
                        <button class=\"btn btn-default\" type=\"button\" data-dismiss=\"modal\"><i class=\"bi bi-x-lg\"></i></button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo " </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 113
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 114
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 117
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 119
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 122
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 123
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 125
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "olive/template/product/manufacturer_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 125,  375 => 123,  370 => 122,  362 => 119,  356 => 117,  350 => 114,  346 => 113,  342 => 111,  327 => 103,  320 => 98,  313 => 96,  304 => 93,  300 => 92,  297 => 91,  293 => 90,  286 => 86,  282 => 84,  278 => 83,  271 => 79,  268 => 78,  262 => 77,  258 => 75,  254 => 73,  251 => 72,  247 => 71,  243 => 69,  238 => 67,  232 => 65,  228 => 64,  224 => 62,  218 => 60,  215 => 59,  213 => 58,  210 => 57,  208 => 56,  204 => 55,  194 => 52,  186 => 47,  179 => 43,  176 => 42,  172 => 40,  164 => 38,  158 => 36,  156 => 35,  153 => 34,  151 => 33,  145 => 32,  133 => 29,  129 => 28,  124 => 26,  120 => 25,  114 => 24,  108 => 23,  103 => 20,  98 => 19,  96 => 18,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "olive/template/product/manufacturer_info.twig", "");
    }
}
