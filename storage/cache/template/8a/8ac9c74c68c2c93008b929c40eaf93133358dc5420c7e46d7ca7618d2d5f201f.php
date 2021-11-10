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

/* olive/template/common/footer.twig */
class __TwigTemplate_7628bafcea1af5a0d8181d963b7778ad6c401c196f69c4a68ea8741264010e99 extends \Twig\Template
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
        echo "<footer>
   <div class=\"container\">
      <div class=\"flex-footer\">
         ";
        // line 4
        if (($context["informations"] ?? null)) {
            // line 5
            echo "         <div class=\"footer-block\">
            <h5>";
            // line 6
            echo ($context["text_information"] ?? null);
            echo "</h5>
            <ul class=\"list-unstyled\">
               ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 9
                echo "               <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 9);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 9);
                echo "</a></li>
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "               <li><a href=\"";
            echo ($context["sitemap"] ?? null);
            echo "\">";
            echo ($context["text_sitemap"] ?? null);
            echo "</a></li>
            </ul>
         </div>
         ";
        }
        // line 15
        echo "         <div class=\"footer-block\">
            <h5>";
        // line 16
        echo ($context["text_account"] ?? null);
        echo "</h5>
            <ul class=\"list-unstyled\">
               <li><a href=\"";
        // line 18
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
               <li><a href=\"";
        // line 19
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
               <li><a href=\"";
        // line 20
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
               <li><a href=\"";
        // line 21
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
               <li><a href=\"";
        // line 22
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
            </ul>
         </div>
         ";
        // line 25
        if ((($context["admin_footertext_status"] ?? null) == 1)) {
            echo " 
         <div class=\"footer-block\">
            <h5>";
            // line 27
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["admin_map_text1"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["lang"] ?? null)] ?? null) : null);
            echo "</h5>
            <ul>
               <li>";
            // line 29
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["admin_map_text2"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["lang"] ?? null)] ?? null) : null);
            echo "</li>
               <li>";
            // line 30
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["admin_map_text3"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["lang"] ?? null)] ?? null) : null);
            echo "</li>
               <li>";
            // line 31
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["admin_map_text4"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["lang"] ?? null)] ?? null) : null);
            echo "</li>
               <li>";
            // line 32
            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["admin_map_text5"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["lang"] ?? null)] ?? null) : null);
            echo "</li>
            </uL>
         </div>
         ";
        }
        // line 36
        echo "         <div class=\"footer-block\">
            <ul class=\"footerlink-block\">
               ";
        // line 38
        if ((($context["admin_footerlink1_status"] ?? null) == 1)) {
            // line 39
            echo "               <li><a href=\"";
            echo ($context["admin_footerlink1_text"] ?? null);
            echo "\" target=\"_blank\"><img src=\"image/";
            echo ($context["admin_footerlink1_img"] ?? null);
            echo "\" /></a></li>
               ";
        }
        // line 40
        echo " 
               ";
        // line 41
        if ((($context["admin_footerlink2_status"] ?? null) == 1)) {
            // line 42
            echo "               <li><a href=\"";
            echo ($context["admin_footerlink2_text"] ?? null);
            echo "\" target=\"_blank\"><img src=\"image/";
            echo ($context["admin_footerlink2_img"] ?? null);
            echo "\" /></a></li>
               ";
        }
        // line 43
        echo " 
               ";
        // line 44
        if ((($context["admin_footerlink3_status"] ?? null) == 1)) {
            // line 45
            echo "               <li><a href=\"";
            echo ($context["admin_footerlink3_text"] ?? null);
            echo "\" target=\"_blank\"><img src=\"image/";
            echo ($context["admin_footerlink3_img"] ?? null);
            echo "\" /></a></li>
               ";
        }
        // line 46
        echo " 
               ";
        // line 47
        if ((($context["admin_footerlink4_status"] ?? null) == 1)) {
            // line 48
            echo "               <li><a href=\"";
            echo ($context["admin_footerlink4_text"] ?? null);
            echo "\" target=\"_blank\"><img src=\"image/";
            echo ($context["admin_footerlink4_img"] ?? null);
            echo "\" /></a></li>
               ";
        }
        // line 49
        echo " 
               ";
        // line 50
        if ((($context["admin_footerlink5_status"] ?? null) == 1)) {
            // line 51
            echo "               <li><a href=\"";
            echo ($context["admin_footerlink5_text"] ?? null);
            echo "\" target=\"_blank\"><img src=\"image/";
            echo ($context["admin_footerlink5_img"] ?? null);
            echo "\" /></a></li>
               ";
        }
        // line 52
        echo " 
            </ul>
            <ul class=\"footerlink-block\">
               ";
        // line 55
        if ((($context["admin_footerpay1_status"] ?? null) == 1)) {
            // line 56
            echo "               <li><img src=\"image/";
            echo ($context["admin_footerpay1_img"] ?? null);
            echo "\" /></li>
               ";
        }
        // line 57
        echo " 
               ";
        // line 58
        if ((($context["admin_footerpay2_status"] ?? null) == 1)) {
            // line 59
            echo "               <li><img src=\"image/";
            echo ($context["admin_footerpay2_img"] ?? null);
            echo "\" /></li>
               ";
        }
        // line 60
        echo " 
               ";
        // line 61
        if ((($context["admin_footerpay3_status"] ?? null) == 1)) {
            // line 62
            echo "               <li><img src=\"image/";
            echo ($context["admin_footerpay3_img"] ?? null);
            echo "\" /></li>
               ";
        }
        // line 63
        echo " 
               ";
        // line 64
        if ((($context["admin_footerpay4_status"] ?? null) == 1)) {
            // line 65
            echo "               <li><img src=\"image/";
            echo ($context["admin_footerpay4_img"] ?? null);
            echo "\" /></li>
               ";
        }
        // line 66
        echo " 
               ";
        // line 67
        if ((($context["admin_footerpay5_status"] ?? null) == 1)) {
            // line 68
            echo "               <li><img src=\"image/";
            echo ($context["admin_footerpay5_img"] ?? null);
            echo "\" /></li>
               ";
        }
        // line 69
        echo " 
            </ul>
         </div>
      </div>
   </div>
</footer>
";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 76
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 76);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 76);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 76);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 79
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "<script>
   function productListImageChangeHover(element) {
       var src = element.attr('img-aux-src');
       var dataauxsrc = element.attr('src');
       if (element.length > 0 && element.attr('img-aux-src')) {
           element.attr('src', src);
           element.attr('img-aux-src', dataauxsrc);
       }
   }
</script>
<button id=\"toTop\" title=\"Top\"><i class=\"bi bi-arrow-up\"></i></button>
<script type=\"text/javascript\">
   <!--
   \$(document).ready(function () {
   var scrollTop = \$(\"#toTop\");
   \$(window).scroll(function () {
   var topPos = \$(this).scrollTop();
   if (topPos > 300) {
   \$(scrollTop).css(\"display\", \"block\");
   } else {
   \$(scrollTop).css(\"display\", \"none\");
   }
   });
   \$(scrollTop).click(function () {
   \$('html, body').animate({
   scrollTop: 0
   }, 800);
   return false;
   });
   });
   //-->
</script>
<!-- Theme created by made HTML5 me, visit https://madehtml5.github.io/ for more detail. Please contact us if you need support or wish to fund our work -->
</body></html>";
    }

    public function getTemplateName()
    {
        return "olive/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 81,  298 => 79,  294 => 78,  281 => 76,  277 => 75,  269 => 69,  263 => 68,  261 => 67,  258 => 66,  252 => 65,  250 => 64,  247 => 63,  241 => 62,  239 => 61,  236 => 60,  230 => 59,  228 => 58,  225 => 57,  219 => 56,  217 => 55,  212 => 52,  204 => 51,  202 => 50,  199 => 49,  191 => 48,  189 => 47,  186 => 46,  178 => 45,  176 => 44,  173 => 43,  165 => 42,  163 => 41,  160 => 40,  152 => 39,  150 => 38,  146 => 36,  139 => 32,  135 => 31,  131 => 30,  127 => 29,  122 => 27,  117 => 25,  109 => 22,  103 => 21,  97 => 20,  91 => 19,  85 => 18,  80 => 16,  77 => 15,  67 => 11,  56 => 9,  52 => 8,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "olive/template/common/footer.twig", "");
    }
}
