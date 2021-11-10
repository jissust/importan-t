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

/* olive/template/extension/module/featured.twig */
class __TwigTemplate_ec9235065fde288a25b320454b935bad9fa81d6b67249f3676d38ab589cd43e4 extends \Twig\Template
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
        echo "<div class=\"container\">
   <h3 class=\"title\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</h3>
   <div class=\"row\">
      ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 5
            echo "      <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
         <div class=\"product-thumb transition\">
            <div class=\"button-group\">
               <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 8
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 8);
            echo "');\"><i class=\"bi bi-shuffle\"></i></button>
               <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 9
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 9);
            echo "');\"><i class=\"bi bi-heart\"></i></button>
               <button class=\"btn-modal\" type=\"button\" data-toggle=\"modal\" data-target=\"#";
            // line 10
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["product"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["product_id"] ?? null) : null);
            echo "\"><i class=\"bi bi-eye\"></i></button>
               <button type=\"button\" onclick=\"cart.add('";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 11);
            echo "');\"><i class=\"bi bi-basket2\"></i></button>
            </div>
            <div class=\"image\"><a href=\"";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 13);
            echo "\">
               <img itemprop=\"image\" src=\"";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 14);
            echo "\" img-aux-src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 14);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 14);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 14);
            echo "\" onmouseover=\"productListImageChangeHover(\$(this))\" onmouseout=\"productListImageChangeHover(\$(this))\" class=\"img-responsive\" /></a>
            </div>
            <div class=\"caption\">
               <h4><a href=\"";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 17);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
            echo "</a></h4>
               ";
            // line 18
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 18)) {
                // line 19
                echo "               <p class=\"price\">
                  ";
                // line 20
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "                  ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 21);
                    echo "
                  ";
                } else {
                    // line 23
                    echo "                  <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 23);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 23);
                    echo "</span>
                  ";
                }
                // line 25
                echo "               </p>
               ";
            }
            // line 27
            echo "            </div>
            <div id=\"";
            // line 28
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["product"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["product_id"] ?? null) : null);
            echo "\" class=\"modal fade\">
               <div class=\"modal-dialog\">
                  <div class=\"modal-content\">
                     <div class=\"modal-header\">
                        <h4 class=\"modal-title\">";
            // line 32
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32);
            echo "</h4>
                     </div>
                     <div class=\"modal-body\" >
                        <div class=\"row\">
                           <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                              <div class=\"images\"><a href=\"";
            // line 37
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 37);
            echo "\"><img src=\"";
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["product"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["thumb"] ?? null) : null);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 37);
            echo "\" /></a></div>
                           </div>
                           <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                              <h2>";
            // line 40
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 40);
            echo "</h2>
                              ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 41)) {
                // line 42
                echo "                              <ul class=\"list-unstyled\">
                                 ";
                // line 43
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 43)) {
                    // line 44
                    echo "                                 <li>
                                    <h2> ";
                    // line 45
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 45);
                    echo "</h2>
                                 </li>
                                 ";
                } else {
                    // line 47
                    echo " 
                                 <li>
                                    <h2>";
                    // line 49
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 49);
                    echo "</h2>
                                    <span style=\"text-decoration: line-through;\">";
                    // line 50
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 50);
                    echo "</span>
                                 </li>
                                 ";
                }
                // line 52
                echo " 
                              </ul>
                              ";
            }
            // line 54
            echo " 
                              <div class=\"rating\">
                                 ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 57
                echo "                                 ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 57) < $context["i"])) {
                    // line 58
                    echo "                                 <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                 ";
                } else {
                    // line 60
                    echo "                                 <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                 ";
                }
                // line 62
                echo "                                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                              </div>
                              <p>";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 64);
            echo "</p>
                           </div>
                           <div class=\"col-xs-12\">
                              <table class=\"table table-bordered\">
                                 ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "attribute_groups", [], "any", false, false, false, 68));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 69
                echo "                                 <thead>
                                    <tr>
                                       <td colspan=\"2\"><strong>";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 71);
                echo "</strong></td>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    ";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 75));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 76
                    echo "                                    <tr>
                                       <td>";
                    // line 77
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 77);
                    echo "</td>
                                       <td>";
                    // line 78
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 78);
                    echo "</td>
                                    </tr>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "                                 </tbody>
                                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                              </table>
                           </div>
                        </div>
                     </div>
                     <div class=\"modal-footer\">
                        <a href=\"";
            // line 88
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 88);
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
        // line 96
        echo " 
   </div>
</div>";
    }

    public function getTemplateName()
    {
        return "olive/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 96,  273 => 88,  266 => 83,  259 => 81,  250 => 78,  246 => 77,  243 => 76,  239 => 75,  232 => 71,  228 => 69,  224 => 68,  217 => 64,  214 => 63,  208 => 62,  204 => 60,  200 => 58,  197 => 57,  193 => 56,  189 => 54,  184 => 52,  178 => 50,  174 => 49,  170 => 47,  164 => 45,  161 => 44,  159 => 43,  156 => 42,  154 => 41,  150 => 40,  140 => 37,  132 => 32,  125 => 28,  122 => 27,  118 => 25,  110 => 23,  104 => 21,  102 => 20,  99 => 19,  97 => 18,  91 => 17,  79 => 14,  75 => 13,  70 => 11,  66 => 10,  60 => 9,  54 => 8,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "olive/template/extension/module/featured.twig", "");
    }
}
