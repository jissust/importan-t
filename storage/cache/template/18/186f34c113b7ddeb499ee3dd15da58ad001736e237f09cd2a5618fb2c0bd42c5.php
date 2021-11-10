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

/* era/template/common/header.twig */
class __TwigTemplate_0b71155410292bdf935104eab67c1baacc35aafaea0c836acc8917cf9f6b649c extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>

<link rel=\"stylesheet\" type=\"text/css\" href=\"https://storage.googleapis.com/cdn-era/eraframework.css\" rel=\"stylesheet\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/era/stylesheet/settings-default.css\"rel=\"stylesheet\" />
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons\" media=\"all\" />

";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 28
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 28);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 28);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 28);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 31
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 35
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 35);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 35);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 38
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</head>
<body>
<nav class=\"navbar navbar-fixed-top navbar-color-on-scroll navbar-transparent\" color-on-scroll=\"100\" id=\"top\">
<div class=\"container hidden-xs\">
\t<div id=\"top-links\" class=\"nav pull-right\">
     \t <ul class=\"list-inline\">
        \t
        \t<li class=\"dropdown\"><a href=\"";
        // line 47
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_account"] ?? null);
        echo "</span> <span class=\"caret\"></span></a>
         \t <ul class=\"dropdown-menu dropdown-menu-right\">
            \t";
        // line 49
        if (($context["logged"] ?? null)) {
            // line 50
            echo "           \t\t <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
            \t\t<li><a href=\"";
            // line 51
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
            \t\t<li><a href=\"";
            // line 52
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
            \t\t<li><a href=\"";
            // line 53
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
            \t\t<li><a href=\"";
            // line 54
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
            \t\t";
        } else {
            // line 56
            echo "            \t\t<li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
            \t\t<li><a href=\"";
            // line 57
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
            \t\t";
        }
        // line 59
        echo "          </ul>
        </li>
        <li><a href=\"";
        // line 61
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a></li>
        <li><a href=\"";
        // line 62
        echo ($context["shopping_cart"] ?? null);
        echo "\" title=\"";
        echo ($context["text_shopping_cart"] ?? null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span></a></li>
        <li><a href=\"";
        // line 63
        echo ($context["checkout"] ?? null);
        echo "\" title=\"";
        echo ($context["text_checkout"] ?? null);
        echo "\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_checkout"] ?? null);
        echo "</span></a></li>
      </ul>
    </div>
<div\">";
        // line 66
        echo ($context["currency"] ?? null);
        echo ($context["language"] ?? null);
        echo "</div>

<!-- Brand and toggle get grouped for better mobile display -->
        \t<div class=\"navbar-header\">
\t\t\t    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\">
            \t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t            <span class=\"icon-bar\" style=\"color: #df01d7;\"></span>
\t\t            <span class=\"icon-bar\" style=\"color: #df01d7;\"></span>
\t\t            <span class=\"icon-bar\" style=\"color: #df01d7;\"></span>
        \t\t</button>
\t\t
<div class=\"row\">
<div class=\"col-xs-4\">\t\t\t
<a class=\"navbar-brand visible-xs\" href=\"";
        // line 79
        echo ($context["home"] ?? null);
        echo "\"><img src=\"";
        echo ($context["logo"] ?? null);
        echo "\" title=\"";
        echo ($context["name"] ?? null);
        echo "\" alt=\"";
        echo ($context["name"] ?? null);
        echo "\" class=\"img-responsive\" /></a>
</div>
<div class=\"col-xs-2\">
<a class=\"navbar-brand text-right btn btn-just-icon btn-simple btn-info hidden-lg hidden-md\" href=\"index.php?route=checkout/cart\"><i class=\"material-icons\">shopping_cart</i></a>

</div>
<div class=\"col-xs-2 navbar-brand text-right btn btn-just-icon btn-simple btn-info hidden-lg\">
     \t <ul class=\"list-inline\">
        \t<li class=\"dropdown\"><a href=\"";
        // line 87
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_account"] ?? null);
        echo "</span> <span class=\"caret\"></span></a>
         \t <ul class=\"dropdown-menu dropdown-menu-right\">
            \t";
        // line 89
        if (($context["logged"] ?? null)) {
            // line 90
            echo "           \t\t <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
            \t\t<li><a href=\"";
            // line 91
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
            \t\t<li><a href=\"";
            // line 92
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
            \t\t<li><a href=\"";
            // line 93
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
            \t\t<li><a href=\"";
            // line 94
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
            \t\t";
        } else {
            // line 96
            echo "            \t\t<li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
            \t\t<li><a href=\"";
            // line 97
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
            \t\t";
        }
        // line 99
        echo "          </ul></div></div>
<div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4 hidden-xs\">
        <div id=\"logo\">";
        // line 103
        if (($context["logo"] ?? null)) {
            echo "<a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            // line 104
            echo "          <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
          ";
        }
        // line 105
        echo "</div>
      </div>
      <div class=\"col-sm-5 hidden-xs form-group form-white is-empty\">";
        // line 107
        echo ($context["search"] ?? null);
        echo "</div>
      <div class=\"col-sm-3 hidden-xs\">";
        // line 108
        echo ($context["cart"] ?? null);
        echo "</div>
    </div>
  </div>
</div>
</nav>
<header>
</header>
 <nav class=\"visible-xs\">
     <div class=\"collapse navbar-collapse visible-xs\">
\t     <ul class=\"nav navbar-nav visible-xs\">
       ";
        // line 118
        echo ($context["menu"] ?? null);
        echo "
 </nav>

 <nav id=\"menu\" class=\"navbar hidden-xs\">
 <div class=\"collapse navbar-collapse navbar-ex1-collapse hidden-xs\">
      <ul class=\"nav navbar-nav hidden-xs\">
";
        // line 124
        echo ($context["menu"] ?? null);
        echo "
 </nav>


";
    }

    public function getTemplateName()
    {
        return "era/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 124,  392 => 118,  379 => 108,  375 => 107,  371 => 105,  363 => 104,  351 => 103,  345 => 99,  338 => 97,  331 => 96,  324 => 94,  318 => 93,  312 => 92,  306 => 91,  299 => 90,  297 => 89,  288 => 87,  271 => 79,  254 => 66,  244 => 63,  236 => 62,  228 => 61,  224 => 59,  217 => 57,  210 => 56,  203 => 54,  197 => 53,  191 => 52,  185 => 51,  178 => 50,  176 => 49,  167 => 47,  158 => 40,  150 => 38,  146 => 37,  135 => 35,  131 => 34,  128 => 33,  119 => 31,  115 => 30,  102 => 28,  98 => 27,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "era/template/common/header.twig", "");
    }
}
