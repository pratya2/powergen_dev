<?php

/* powergenBundle:Owner:index.html.twig */
class __TwigTemplate_a1375350cda1f439a26648b79ebaa039 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Owner list</h1>

<table class=\"records_list\">
    <thead>
        <tr>
            <th>Name</th>
            <th>Registerdate</th>
            <th>Registernumber</th>
            <th>Birthday</th>
            <th>Nationality</th>
            <th>Idcard</th>
            <th>Districtofissue</th>
            <th>Proviceofissue</th>
            <th>Adressnumber</th>
            <th>Lane</th>
            <th>Street</th>
            <th>Villagenumber</th>
            <th>Subdistrict</th>
            <th>District</th>
            <th>Province</th>
            <th>Poscode</th>
            <th>Telnumber</th>
            <th>Faxnumber</th>
            <th>Iscorp</th>
            <th>Mobilephone</th>
            <th>Website</th>
            <th>Email</th>
            <th>Id</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 34
            echo "        <tr>
            <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("owner_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 36
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "registerDate")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "registerDate"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "registerNumber"), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "birthDay")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "birthDay"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nationality"), "html", null, true);
            echo "</td>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idCard"), "html", null, true);
            echo "</td>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "districtOfIssue"), "html", null, true);
            echo "</td>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "proviceOfIssue"), "html", null, true);
            echo "</td>
            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adressNumber"), "html", null, true);
            echo "</td>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lane"), "html", null, true);
            echo "</td>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "street"), "html", null, true);
            echo "</td>
            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "villageNumber"), "html", null, true);
            echo "</td>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "subDistrict"), "html", null, true);
            echo "</td>
            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "district"), "html", null, true);
            echo "</td>
            <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "province"), "html", null, true);
            echo "</td>
            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "poscode"), "html", null, true);
            echo "</td>
            <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telNumber"), "html", null, true);
            echo "</td>
            <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "faxNumber"), "html", null, true);
            echo "</td>
            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "iscorp"), "html", null, true);
            echo "</td>
            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "mobilePhone"), "html", null, true);
            echo "</td>
            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "website"), "html", null, true);
            echo "</td>
            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</td>
            <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("owner_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("owner_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 70
        echo "    </tbody>
</table>

<ul>
    <li>
        <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("owner_new"), "html", null, true);
        echo "\">
            Create a new entry
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "powergenBundle:Owner:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 75,  179 => 70,  167 => 64,  161 => 61,  154 => 57,  150 => 56,  146 => 55,  142 => 54,  138 => 53,  134 => 52,  130 => 51,  126 => 50,  122 => 49,  118 => 48,  114 => 47,  110 => 46,  106 => 45,  102 => 44,  98 => 43,  94 => 42,  90 => 41,  86 => 40,  82 => 39,  76 => 38,  72 => 37,  66 => 36,  60 => 35,  57 => 34,  53 => 33,  19 => 1,);
    }
}
