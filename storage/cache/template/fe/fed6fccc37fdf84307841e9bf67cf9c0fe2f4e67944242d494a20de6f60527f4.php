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

/* olive/template/product/category.twig */
class __TwigTemplate_3b66679243f5770feac07b122a02a8dba82e0f7d24b30bceb7dd5464635b31fb extends \Twig\Template
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
      <h2>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      ";
        // line 18
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 19
            echo "      <div class=\"row\"> ";
            if (($context["thumb"] ?? null)) {
                // line 20
                echo "        <div class=\"col-sm-2\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\" /></div>
        ";
            }
            // line 22
            echo "        ";
            if (($context["description"] ?? null)) {
                // line 23
                echo "        <div class=\"col-sm-10\">";
                echo ($context["description"] ?? null);
                echo "</div>
        ";
            }
            // line 24
            echo "</div>
      <hr>
      ";
        }
        // line 27
        echo "      ";
        if (($context["categories"] ?? null)) {
            // line 28
            echo "      <h4>";
            echo ($context["text_refine"] ?? null);
            echo "</h4>
      ";
            // line 29
            if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                // line 30
                echo "      <div class=\"row\">
        <div class=\"col-sm-3\">
          <ul>
            ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 34
                    echo "            <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 34);
                    echo "\" class=\"btn\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 34);
                    echo "</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "          </ul>
        </div>
      </div>
      ";
            } else {
                // line 40
                echo "      <div class=\"row\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 41
                    echo "        <div class=\"col-sm-3\">
          <ul>
            ";
                    // line 43
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 44
                        echo "            <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 44);
                        echo "\" class=\"btn\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 44);
                        echo "</a></li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 46
                    echo "          </ul>
        </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "</div>
      <br />
      ";
            }
            // line 51
            echo "      ";
        }
        // line 52
        echo "\t  <hr>
      ";
        // line 53
        if (($context["products"] ?? null)) {
            // line 54
            echo "   <div class=\"row\"> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 55
                echo "      <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
         <div class=\"product-thumb transition\">
            <div class=\"button-group\">
               <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 58
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 58);
                echo "');\"><i class=\"bi bi-shuffle\"></i></button>
               <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 59
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 59);
                echo "');\"><i class=\"bi bi-heart\"></i></button>
               <button class=\"btn-modal\" type=\"button\" data-toggle=\"modal\" data-target=\"#";
                // line 60
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["product"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["product_id"] ?? null) : null);
                echo "\"><i class=\"bi bi-eye\"></i></button>
               <button type=\"button\" onclick=\"cart.add('";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 61);
                echo "');\"><i class=\"bi bi-basket2\"></i></button>
            </div>
            <div class=\"image\"><a href=\"";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 63);
                echo "\">
               <img itemprop=\"image\" src=\"";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 64);
                echo "\" img-aux-src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 64);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 64);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 64);
                echo "\" onmouseover=\"productListImageChangeHover(\$(this))\" onmouseout=\"productListImageChangeHover(\$(this))\" class=\"img-responsive\" /></a>
            </div>
            <div class=\"caption\">
               <h4><a href=\"";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 67);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 67);
                echo "</a></h4>
               ";
                // line 68
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 68)) {
                    // line 69
                    echo "               <p class=\"price\">
                  ";
                    // line 70
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 70)) {
                        // line 71
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 71);
                        echo "
                  ";
                    } else {
                        // line 73
                        echo "                  <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 73);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 73);
                        echo "</span>
                  ";
                    }
                    // line 75
                    echo "               </p>
               ";
                }
                // line 77
                echo "            </div>
            <div id=\"";
                // line 78
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["product"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["product_id"] ?? null) : null);
                echo "\" class=\"modal fade\">
               <div class=\"modal-dialog\">
                  <div class=\"modal-content\">
                     <div class=\"modal-header\">
                        <h4 class=\"modal-title\">";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 82);
                echo "</h4>
                     </div>
                     <div class=\"modal-body\" >
                        <div class=\"row\">
                           <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                              <div class=\"images\"><a href=\"";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 87);
                echo "\"><img src=\"";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["product"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["thumb"] ?? null) : null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 87);
                echo "\" /></a></div>
                           </div>
                           <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                              <h2>";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 90);
                echo "</h2>
                              ";
                // line 91
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 91)) {
                    // line 92
                    echo "                              <ul class=\"list-unstyled\">
                                 ";
                    // line 93
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 93)) {
                        // line 94
                        echo "                                 <li>
                                    <h2> ";
                        // line 95
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 95);
                        echo "</h2>
                                 </li>
                                 ";
                    } else {
                        // line 97
                        echo " 
                                 <li>
                                    <h2>";
                        // line 99
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 99);
                        echo "</h2>
                                    <span style=\"text-decoration: line-through;\">";
                        // line 100
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 100);
                        echo "</span>
                                 </li>
                                 ";
                    }
                    // line 102
                    echo " 
                              </ul>
                              ";
                }
                // line 104
                echo " 
                              <div class=\"rating\">
                                 ";
                // line 106
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 107
                    echo "                                 ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 107) < $context["i"])) {
                        // line 108
                        echo "                                 <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                 ";
                    } else {
                        // line 110
                        echo "                                 <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                 ";
                    }
                    // line 112
                    echo "                                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                              </div>
                              <p>";
                // line 114
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 114);
                echo "</p>
                           </div>
                           <div class=\"col-xs-12\">
                              <table class=\"table table-bordered\">
                                 ";
                // line 118
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "attribute_groups", [], "any", false, false, false, 118));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                    // line 119
                    echo "                                 <thead>
                                    <tr>
                                       <td colspan=\"2\"><strong>";
                    // line 121
                    echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 121);
                    echo "</strong></td>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    ";
                    // line 125
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 125));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                        // line 126
                        echo "                                    <tr>
                                       <td>";
                        // line 127
                        echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 127);
                        echo "</td>
                                       <td>";
                        // line 128
                        echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 128);
                        echo "</td>
                                    </tr>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 131
                    echo "                                 </tbody>
                                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "                              </table>
                           </div>
                        </div>
                     </div>
                     <div class=\"modal-footer\">
                        <a href=\"";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 138);
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
            // line 146
            echo " </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 148
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 149
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        }
        // line 152
        echo "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 153
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 155
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 158
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 159
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
</div>
";
        // line 162
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "olive/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  492 => 162,  486 => 159,  481 => 158,  473 => 155,  467 => 153,  464 => 152,  458 => 149,  454 => 148,  450 => 146,  435 => 138,  428 => 133,  421 => 131,  412 => 128,  408 => 127,  405 => 126,  401 => 125,  394 => 121,  390 => 119,  386 => 118,  379 => 114,  376 => 113,  370 => 112,  366 => 110,  362 => 108,  359 => 107,  355 => 106,  351 => 104,  346 => 102,  340 => 100,  336 => 99,  332 => 97,  326 => 95,  323 => 94,  321 => 93,  318 => 92,  316 => 91,  312 => 90,  302 => 87,  294 => 82,  287 => 78,  284 => 77,  280 => 75,  272 => 73,  266 => 71,  264 => 70,  261 => 69,  259 => 68,  253 => 67,  241 => 64,  237 => 63,  232 => 61,  228 => 60,  222 => 59,  216 => 58,  211 => 55,  206 => 54,  204 => 53,  201 => 52,  198 => 51,  193 => 48,  185 => 46,  174 => 44,  170 => 43,  166 => 41,  161 => 40,  155 => 36,  144 => 34,  140 => 33,  135 => 30,  133 => 29,  128 => 28,  125 => 27,  120 => 24,  114 => 23,  111 => 22,  101 => 20,  98 => 19,  96 => 18,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "olive/template/product/category.twig", "");
    }
}
