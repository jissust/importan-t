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

/* olive/template/common/home.twig */
class __TwigTemplate_47ec7de2cacfb95363eccfa6d2be62c6ec887a7c0c754b860817031c6456ad02 extends \Twig\Template
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
";
        // line 2
        if ((($context["admin_homeslide_status"] ?? null) == 1)) {
            echo " 
<div class=\"homeslide\">
<div class=\"container\">
<div class=\"flex-banner\">
";
            // line 6
            if ((($context["admin_homeslidestatus_status"] ?? null) == 0)) {
                echo " 
<div class=\"flex-catwall\">
 ";
                // line 8
                if ((($context["admin_catwallitem1_status"] ?? null) == 1)) {
                    echo " 
<div class=\"catwall-item ";
                    // line 9
                    if ((($context["admin_catwallitemtype1_status"] ?? null) == 1)) {
                        echo "w100";
                    }
                    echo "\">
 <a href=\"";
                    // line 10
                    echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["admin_catwallitem1_link"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["lang"] ?? null)] ?? null) : null);
                    echo "\"><img src=\"image/";
                    echo ($context["admin_catwallitem1_img"] ?? null);
                    echo "\" />
";
                    // line 11
                    echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["admin_catwallitem1_text"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["lang"] ?? null)] ?? null) : null);
                    echo "</a>
</div>
";
                }
                // line 13
                echo " 
 ";
                // line 14
                if ((($context["admin_catwallitem2_status"] ?? null) == 1)) {
                    echo " 
<div class=\"catwall-item ";
                    // line 15
                    if ((($context["admin_catwallitemtype2_status"] ?? null) == 1)) {
                        echo "w100";
                    }
                    echo "\">
 <a href=\"";
                    // line 16
                    echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["admin_catwallitem2_link"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["lang"] ?? null)] ?? null) : null);
                    echo "\"><img src=\"image/";
                    echo ($context["admin_catwallitem2_img"] ?? null);
                    echo "\" />
";
                    // line 17
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["admin_catwallitem2_text"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["lang"] ?? null)] ?? null) : null);
                    echo "</a>
</div>
";
                }
                // line 19
                echo " 
 ";
                // line 20
                if ((($context["admin_catwallitem3_status"] ?? null) == 1)) {
                    echo " 
<div class=\"catwall-item ";
                    // line 21
                    if ((($context["admin_catwallitemtype3_status"] ?? null) == 1)) {
                        echo "w100";
                    }
                    echo "\">
 <a href=\"";
                    // line 22
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["admin_catwallitem3_link"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["lang"] ?? null)] ?? null) : null);
                    echo "\"><img src=\"image/";
                    echo ($context["admin_catwallitem3_img"] ?? null);
                    echo "\" />
";
                    // line 23
                    echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["admin_catwallitem3_text"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["lang"] ?? null)] ?? null) : null);
                    echo "</a>
</div>
";
                }
                // line 25
                echo " 
 ";
                // line 26
                if ((($context["admin_catwallitem4_status"] ?? null) == 1)) {
                    echo " 
<div class=\"catwall-item ";
                    // line 27
                    if ((($context["admin_catwallitemtype4_status"] ?? null) == 1)) {
                        echo "w100";
                    }
                    echo "\">
<a href=\"";
                    // line 28
                    echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["admin_catwallitem4_link"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["lang"] ?? null)] ?? null) : null);
                    echo "\"><img src=\"image/";
                    echo ($context["admin_catwallitem4_img"] ?? null);
                    echo "\" />
";
                    // line 29
                    echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["admin_catwallitem4_text"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["lang"] ?? null)] ?? null) : null);
                    echo "</a>
</div>
";
                }
                // line 31
                echo " 
 ";
                // line 32
                if ((($context["admin_catwallitem5_status"] ?? null) == 1)) {
                    echo " 
<div class=\"catwall-item ";
                    // line 33
                    if ((($context["admin_catwallitemtype5_status"] ?? null) == 1)) {
                        echo "w100";
                    }
                    echo "\">
 <a href=\"";
                    // line 34
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["admin_catwallitem5_link"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[($context["lang"] ?? null)] ?? null) : null);
                    echo "\"><img src=\"image/";
                    echo ($context["admin_catwallitem5_img"] ?? null);
                    echo "\" />
";
                    // line 35
                    echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["admin_catwallitem5_text"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[($context["lang"] ?? null)] ?? null) : null);
                    echo "</a>
</div>
";
                }
                // line 37
                echo " 
 ";
                // line 38
                if ((($context["admin_catwallitem6_status"] ?? null) == 1)) {
                    echo " 
<div class=\"catwall-item ";
                    // line 39
                    if ((($context["admin_catwallitemtype6_status"] ?? null) == 1)) {
                        echo "w100";
                    }
                    echo "\">
<a href=\"";
                    // line 40
                    echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["admin_catwallitem6_link"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[($context["lang"] ?? null)] ?? null) : null);
                    echo "\"> <img src=\"image/";
                    echo ($context["admin_catwallitem6_img"] ?? null);
                    echo "\" />
";
                    // line 41
                    echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["admin_catwallitem6_text"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[($context["lang"] ?? null)] ?? null) : null);
                    echo "</a>
</div>
";
                }
                // line 43
                echo " 
</div>
<div class=\"banner\" style=\"background: url('image/";
                // line 45
                echo ($context["admin_homeslide_img"] ?? null);
                echo "')\" >
 ";
                // line 46
                if ((($context["admin_homeslide_text_status"] ?? null) == 1)) {
                    echo " 
<div class=\"banner-text\">
<h3>";
                    // line 48
                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["admin_homeslide_title"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[($context["lang"] ?? null)] ?? null) : null);
                    echo "</h3>
\t<p>";
                    // line 49
                    echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["admin_homeslide_text"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[($context["lang"] ?? null)] ?? null) : null);
                    echo "</p>
</div>
 ";
                }
                // line 51
                echo " 
</div>
   ";
            } else {
                // line 54
                echo "<div class=\"banner-full\" style=\"background: url('image/";
                echo ($context["admin_homeslide_img"] ?? null);
                echo "')\" >
 ";
                // line 55
                if ((($context["admin_homeslide_text_status"] ?? null) == 1)) {
                    echo " 
<div class=\"banner-text\">
<h3>";
                    // line 57
                    echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["admin_homeslide_title"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[($context["lang"] ?? null)] ?? null) : null);
                    echo "</h3>
\t<p>";
                    // line 58
                    echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["admin_homeslide_text"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[($context["lang"] ?? null)] ?? null) : null);
                    echo "</p>
</div>
 ";
                }
                // line 60
                echo " 
</div>
 ";
            }
            // line 62
            echo " 
</div>
</div>
</div>
 ";
        }
        // line 66
        echo " 
 ";
        // line 67
        if ((($context["admin_underslide_status"] ?? null) == 1)) {
            echo " 
<div class=\"underslide\">
<div class=\"container\">
<div class=\"flex-banner\">
<div class=\"underslide-text\">
<div class=\"text-right\">
<span>";
            // line 73
            echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["admin_underslideleft1_text"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[($context["lang"] ?? null)] ?? null) : null);
            echo "</span>
<img src=\"image/";
            // line 74
            echo ($context["admin_underslideleft1_img"] ?? null);
            echo "\" />
</div>
<div class=\"text-right\">
<span>";
            // line 77
            echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["admin_underslideleft2_text"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[($context["lang"] ?? null)] ?? null) : null);
            echo "</span>
<img src=\"image/";
            // line 78
            echo ($context["admin_underslideleft2_img"] ?? null);
            echo "\" />
</div>
</div>
<div class=\"underslide-banner\" >
<img src=\"image/";
            // line 82
            echo ($context["admin_underslide_img"] ?? null);
            echo "\" />
</div>
<div class=\"underslide-text\">
<div>
<img src=\"image/";
            // line 86
            echo ($context["admin_underslideright1_img"] ?? null);
            echo "\" />
<span>";
            // line 87
            echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["admin_underslideright1_text"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[($context["lang"] ?? null)] ?? null) : null);
            echo "</span>
</div>
<div>
<img src=\"image/";
            // line 90
            echo ($context["admin_underslideright2_img"] ?? null);
            echo "\" />
<span>";
            // line 91
            echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["admin_underslideright2_text"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[($context["lang"] ?? null)] ?? null) : null);
            echo "</span>
</div>
</div>
</div>
</div>
</div>
";
        }
        // line 97
        echo " 
<div id=\"common-home\" class=\"container-fluid\">
<div class=\"row\">
<div id=\"content\" class=\"";
        // line 100
        echo ($context["class"] ?? null);
        echo "\">
";
        // line 101
        echo ($context["content_top"] ?? null);
        echo "
";
        // line 102
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
</div>
</div>
 ";
        // line 106
        if ((($context["admin_map_status"] ?? null) == 1)) {
            echo " 
 <div class=\"map\" style=\"background: url('image/";
            // line 107
            echo ($context["admin_map_img"] ?? null);
            echo "')\" >
<div class=\"container\">
<div class=\"map-text\">
<h3>";
            // line 110
            echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["admin_map_text1"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[($context["lang"] ?? null)] ?? null) : null);
            echo "</h3>
<ul>
<li>";
            // line 112
            echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["admin_map_text2"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[($context["lang"] ?? null)] ?? null) : null);
            echo "</li>
<li>";
            // line 113
            echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["admin_map_text3"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[($context["lang"] ?? null)] ?? null) : null);
            echo "</li>
<li>";
            // line 114
            echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["admin_map_text4"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[($context["lang"] ?? null)] ?? null) : null);
            echo "</li>
<li>";
            // line 115
            echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["admin_map_text5"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[($context["lang"] ?? null)] ?? null) : null);
            echo "</li>
</uL>
</div>
</div>
</div>
 ";
        }
        // line 120
        echo " 
";
        // line 121
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "olive/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 121,  380 => 120,  371 => 115,  367 => 114,  363 => 113,  359 => 112,  354 => 110,  348 => 107,  344 => 106,  337 => 102,  333 => 101,  329 => 100,  324 => 97,  314 => 91,  310 => 90,  304 => 87,  300 => 86,  293 => 82,  286 => 78,  282 => 77,  276 => 74,  272 => 73,  263 => 67,  260 => 66,  253 => 62,  248 => 60,  242 => 58,  238 => 57,  233 => 55,  228 => 54,  223 => 51,  217 => 49,  213 => 48,  208 => 46,  204 => 45,  200 => 43,  194 => 41,  188 => 40,  182 => 39,  178 => 38,  175 => 37,  169 => 35,  163 => 34,  157 => 33,  153 => 32,  150 => 31,  144 => 29,  138 => 28,  132 => 27,  128 => 26,  125 => 25,  119 => 23,  113 => 22,  107 => 21,  103 => 20,  100 => 19,  94 => 17,  88 => 16,  82 => 15,  78 => 14,  75 => 13,  69 => 11,  63 => 10,  57 => 9,  53 => 8,  48 => 6,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "olive/template/common/home.twig", "");
    }
}
