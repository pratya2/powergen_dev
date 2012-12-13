<?php

/* powergenBundle:Owner:show.html.twig */
class __TwigTemplate_7d1a54b5f5b28cbcfddf1218c04b7290 extends Twig_Template
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
        echo "<h1>Owner</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Name</th>
            <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Registerdate</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "registerDate"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Registernumber</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "registerNumber"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Birthday</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "birthDay"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nationality</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nationality"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Idcard</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idCard"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Districtofissue</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "districtOfIssue"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Proviceofissue</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "proviceOfIssue"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Adressnumber</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adressNumber"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Lane</th>
            <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lane"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Street</th>
            <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "street"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Villagenumber</th>
            <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "villageNumber"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Subdistrict</th>
            <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "subDistrict"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>District</th>
            <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "district"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Province</th>
            <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "province"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Poscode</th>
            <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "poscode"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Telnumber</th>
            <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telNumber"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Faxnumber</th>
            <td>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "faxNumber"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Iscorp</th>
            <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "iscorp"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Mobilephone</th>
            <td>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "mobilePhone"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Website</th>
            <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "website"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Id</th>
            <td>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("owner"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("owner_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("owner_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "powergenBundle:Owner:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 113,  207 => 112,  199 => 107,  191 => 102,  181 => 95,  174 => 91,  167 => 87,  160 => 83,  153 => 79,  146 => 75,  139 => 71,  132 => 67,  125 => 63,  118 => 59,  111 => 55,  104 => 51,  97 => 47,  90 => 43,  83 => 39,  76 => 35,  69 => 31,  62 => 27,  55 => 23,  48 => 19,  41 => 15,  34 => 11,  27 => 7,  19 => 1,);
    }
}
