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

/* olive/template/common/header.twig */
class __TwigTemplate_9ee96a17dbdd76eede4285b37cdd29858542cefba21027637807ba7579250290 extends \Twig\Template
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
<!--[if IE 8 ]>
<html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\">
   <![endif]-->
   <!--[if IE 9 ]>
   <html dir=\"";
        // line 7
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\">
      <![endif]-->
      <!--[if (gt IE 9)|!(IE)]><!-->
      <html dir=\"";
        // line 10
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
        // line 16
        echo ($context["title"] ?? null);
        echo "</title>
            <base href=\"";
        // line 17
        echo ($context["base"] ?? null);
        echo "\" />
            ";
        // line 18
        if (($context["description"] ?? null)) {
            // line 19
            echo "            <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
            ";
        }
        // line 21
        echo "            ";
        if (($context["keywords"] ?? null)) {
            // line 22
            echo "            <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
            ";
        }
        // line 24
        echo "            <script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
            <link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
            <script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
            <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css\">
            <link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"catalog/view/theme/olive/stylesheet/stylesheet.css\" rel=\"stylesheet\">
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 31
            echo "            <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 31);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 31);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 31);
            echo "\" />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 34
            echo "            <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            <script src=\"catalog/view/theme/olive/common.js\" type=\"text/javascript\"></script>
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 38
            echo "            <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 38);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 38);
            echo "\" />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 41
            echo "            ";
            echo $context["analytic"];
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            ";
        if ((($context["admin_font"] ?? null) == 0)) {
            echo "\t\t
            ";
            // line 44
            $context["regfonts"] = [0 => "", 1 => "Arial", 2 => "Verdana", 3 => "Helvetica", 4 => "Lucida Grande", 5 => "Trebuchet MS", 6 => "Times New Roman", 7 => "Tahoma", 8 => "Georgia"];
            // line 45
            echo "            ";
            if (!twig_in_filter(($context["admin_font"] ?? null), ($context["regfonts"] ?? null))) {
                // line 46
                echo "            <link href='//fonts.googleapis.com/css?family=";
                echo ($context["admin_font"] ?? null);
                echo "' rel='stylesheet' type='text/css'>
            ";
            }
            // line 48
            echo "            ";
        }
        // line 49
        echo "            <style type=\"text/css\">
               ";
        // line 50
        if (($context["admin_font"] ?? null)) {
            // line 51
            echo "               ";
            $context["font"] = twig_replace_filter(($context["admin_font"] ?? null), ["+" => " "]);
            // line 52
            echo "               body {font-family:";
            echo ($context["font"] ?? null);
            echo ";
               }
               ";
        }
        // line 54
        echo "\t\t
               ";
        // line 55
        if (($context["admin_color_main"] ?? null)) {
            // line 56
            echo "               :root {
               --main-color:  ";
            // line 57
            echo ($context["admin_color_main"] ?? null);
            echo "!important;
               }
               ";
        }
        // line 60
        echo "               ";
        if (($context["admin_second_color"] ?? null)) {
            // line 61
            echo "               :root {
               --second-color:  ";
            // line 62
            echo ($context["admin_second_color"] ?? null);
            echo "!important;
               }
               ";
        }
        // line 65
        echo "\t\t\t    ";
        if (($context["admin_text_color"] ?? null)) {
            // line 66
            echo "               :root {
               --text-color:  ";
            // line 67
            echo ($context["admin_text_color"] ?? null);
            echo "!important;
               }
               ";
        }
        // line 70
        echo "\t\t\t    ";
        if (($context["admin_texthover_color"] ?? null)) {
            // line 71
            echo "               :root {
               --texthover-color:  ";
            // line 72
            echo ($context["admin_texthover_color"] ?? null);
            echo "!important;
               }
               ";
        }
        // line 75
        echo "\t\t\t   ";
        if (($context["admin_name_color"] ?? null)) {
            // line 76
            echo "               :root {
               --name-color:  ";
            // line 77
            echo ($context["admin_name_color"] ?? null);
            echo "!important;
               }
               ";
        }
        // line 80
        echo "\t\t\t    ";
        if (($context["admin_namehover_color"] ?? null)) {
            // line 81
            echo "               :root {
               --namehover-color:  ";
            // line 82
            echo ($context["admin_namehover_color"] ?? null);
            echo "!important;
               }
               ";
        }
        // line 85
        echo "               ";
        if (($context["admin_custom_css"] ?? null)) {
            // line 86
            echo "               ";
            echo ($context["admin_custom_css"] ?? null);
            echo "
               }
               ";
        }
        // line 89
        echo "            </style>
         </head>
         <body>
            <header>
               <div class=\"container\">
                  <div class=\"row\">
                     <div class=\"col-xs-5\">";
        // line 95
        echo ($context["search"] ?? null);
        echo "</div>
                     <div class=\"col-xs-2\">
                        <div id=\"logo\">
                           ";
        // line 98
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
            // line 99
            echo "                           <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
                           ";
        }
        // line 101
        echo "                        </div>
                     </div>
                     <div class=\"col-xs-5\">
                        <ul class=\"header-list\">
                        <li class=\"w-back\">";
        // line 105
        echo ($context["currency"] ?? null);
        echo " ";
        echo ($context["language"] ?? null);
        echo "</li>
                        <li class=\"dropdown\">
                           <a href=\"";
        // line 107
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle account-link\" data-toggle=\"dropdown\"><i class=\"bi bi-person-video\"></i></a>
                           <ul class=\"dropdown-menu dropdown-menu-right\">
                              ";
        // line 109
        if (($context["logged"] ?? null)) {
            // line 110
            echo "                              <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
                              <li><a href=\"";
            // line 111
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
                              <li><a href=\"";
            // line 112
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
                              <li><a href=\"";
            // line 113
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
                              <li><a href=\"";
            // line 114
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
                              ";
        } else {
            // line 116
            echo "                              <li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
                              <li><a href=\"";
            // line 117
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
                              ";
        }
        // line 119
        echo "                           </ul>
                        </li>
                        ";
        // line 121
        echo ($context["cart"] ?? null);
        echo "
                     </div>
                  </div>
               </div>
               ";
        // line 125
        if (($context["categories"] ?? null)) {
            // line 126
            echo "               <div class=\"container\">
                  <nav id=\"menu\" class=\"navbar\">
                     <div class=\"navbar-header\"><span id=\"category\" class=\"visible-xs\">";
            // line 128
            echo ($context["text_category"] ?? null);
            echo "</span>
                        <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
                     </div>
                     <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                        <ul class=\"nav navbar-nav\">
                           ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 134
                echo "                           ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 134)) {
                    // line 135
                    echo "                           <li class=\"dropdown\">
                              <a href=\"";
                    // line 136
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 136);
                    echo "\" class=\"dropdown-toggle main-link\" >";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 136);
                    echo " <i class=\"bi bi-chevron-down\"></i></a>
                              <div class=\"dropdown-menu\">
                                 <div class=\"dropdown-block\">
                                    ";
                    // line 139
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 139), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 139)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 139), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 140
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            echo " 
                                    <ul class=\"list-unstyled\">
                                       ";
                            // line 142
                            if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["child"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["children"] ?? null) : null)) {
                                // line 143
                                echo "                                       <li class=\"dropdown-submenu\">
                                          <a href=\"";
                                // line 144
                                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["child"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["href"] ?? null) : null);
                                echo "\" class=\"submenu-title\">";
                                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["child"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["name"] ?? null) : null);
                                echo "</a>
                                          <ul class=\"list-unstyled menu-child\">
                                             ";
                                // line 146
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["child"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["children"] ?? null) : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                    echo " 
                                             <li><a href=\"";
                                    // line 147
                                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["child"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["href"] ?? null) : null);
                                    echo "\">";
                                    echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["child"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["name"] ?? null) : null);
                                    echo "</a></li>
                                             ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 148
                                echo " 
                                          </ul>
                                       </li>
                                       ";
                            } else {
                                // line 151
                                echo " 
                                       <li><a href=\"";
                                // line 152
                                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["child"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["href"] ?? null) : null);
                                echo "\" class=\"submenu-title\">";
                                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["child"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["name"] ?? null) : null);
                                echo "</a></li>
                                       ";
                            }
                            // line 153
                            echo " 
                                    </ul>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 155
                        echo " 
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 157
                    echo "                                 </div>
                              </div>
                           </li>
                           ";
                } else {
                    // line 161
                    echo "                           <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 161);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 161);
                    echo "</a></li>
                           ";
                }
                // line 163
                echo "                           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "                        </ul>
                     </div>
                  </nav>
               </div>
               ";
        }
        // line 168
        echo " 
            </header>";
    }

    public function getTemplateName()
    {
        return "olive/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  526 => 168,  519 => 164,  513 => 163,  505 => 161,  499 => 157,  492 => 155,  484 => 153,  477 => 152,  474 => 151,  468 => 148,  458 => 147,  452 => 146,  445 => 144,  442 => 143,  440 => 142,  432 => 140,  428 => 139,  420 => 136,  417 => 135,  414 => 134,  410 => 133,  402 => 128,  398 => 126,  396 => 125,  389 => 121,  385 => 119,  378 => 117,  371 => 116,  364 => 114,  358 => 113,  352 => 112,  346 => 111,  339 => 110,  337 => 109,  330 => 107,  323 => 105,  317 => 101,  309 => 99,  297 => 98,  291 => 95,  283 => 89,  276 => 86,  273 => 85,  267 => 82,  264 => 81,  261 => 80,  255 => 77,  252 => 76,  249 => 75,  243 => 72,  240 => 71,  237 => 70,  231 => 67,  228 => 66,  225 => 65,  219 => 62,  216 => 61,  213 => 60,  207 => 57,  204 => 56,  202 => 55,  199 => 54,  192 => 52,  189 => 51,  187 => 50,  184 => 49,  181 => 48,  175 => 46,  172 => 45,  170 => 44,  165 => 43,  156 => 41,  151 => 40,  140 => 38,  136 => 37,  133 => 36,  124 => 34,  119 => 33,  106 => 31,  102 => 30,  94 => 24,  88 => 22,  85 => 21,  79 => 19,  77 => 18,  73 => 17,  69 => 16,  58 => 10,  50 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "olive/template/common/header.twig", "");
    }
}
