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

/* era/template/common/menu.twig */
class __TwigTemplate_457306b23833efadd4450a66c9c6153a351d7a11506ec08c056816ceb8b6c4ca extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "
 
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 5
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 5)) {
                    // line 6
                    echo "        <li class=\"dropdown\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 6);
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 6);
                    echo "</a>
          <div class=\"dropdown-menu\">
            <div class=\"dropdown-inner\"> ";
                    // line 8
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 8), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 8)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 8), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 9
                        echo "              <ul class=\"list-unstyled\">
                ";
                        // line 10
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 11
                            echo "                <li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 11);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 11);
                            echo "</a></li>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 13
                        echo "              </ul>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "</div>
            <a href=\"";
                    // line 15
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 15);
                    echo "\" class=\"see-all\">";
                    echo ($context["text_all"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 15);
                    echo "</a> </div>
        </li>
        ";
                } else {
                    // line 18
                    echo "        <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 18);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 18);
                    echo "</a></li>
        ";
                }
                // line 20
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "      </ul>
    </div>
 

";
        }
        // line 25
        echo " ";
    }

    public function getTemplateName()
    {
        return "era/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 25,  114 => 21,  108 => 20,  100 => 18,  90 => 15,  87 => 14,  80 => 13,  69 => 11,  65 => 10,  62 => 9,  58 => 8,  50 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "era/template/common/menu.twig", "");
    }
}
