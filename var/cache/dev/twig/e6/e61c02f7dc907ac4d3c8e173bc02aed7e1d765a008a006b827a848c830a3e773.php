<?php

/* @ESIEAPlatform/Advert/assets/header-basic-light.css */
class __TwigTemplate_4c670e7ebecf31ada1a01ad1c6d75da5872fdb287b95134215e197cc601e504a extends Twig_Template
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
        $__internal_2012bac8b6e295534d7efc57faf6f18e29e6dc24d07a4bbed9069413aff80181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2012bac8b6e295534d7efc57faf6f18e29e6dc24d07a4bbed9069413aff80181->enter($__internal_2012bac8b6e295534d7efc57faf6f18e29e6dc24d07a4bbed9069413aff80181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESIEAPlatform/Advert/assets/header-basic-light.css"));

        // line 1
        echo ".header-basic-light{
\tpadding: 20px 40px;
\tbox-sizing:border-box;
\tbox-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.15);
\theight: 80px;
\tbackground-color: #fff;
}

.header-basic-light .header-limiter {
\tmax-width: 1200px;
\ttext-align: center;
\tmargin: 0 auto;
}

/* Logo */

.header-basic-light .header-limiter h1{
\tfloat: left;
\tfont: normal 28px Cookie, Arial, Helvetica, sans-serif;
\tline-height: 40px;
\tmargin: 0;
}

.header-basic-light .header-limiter h1 span {
\tcolor: #5383d3;
}

/* The header links */

.header-basic-light .header-limiter a {
\tcolor: #5c616a;
\ttext-decoration: none;
}

.header-basic-light .header-limiter nav{
\tfont:15px Arial, Helvetica, sans-serif;
\tline-height: 40px;
\tfloat: right;
}

.header-basic-light .header-limiter nav a{
\tdisplay: inline-block;
\tpadding: 0 5px;
\topacity: 0.9;
\ttext-decoration:none;
\tcolor: #5c616a;
\tline-height:1;
}

.header-basic-light .header-limiter nav a.selected {
\tbackground-color: #86a3d5;
\tcolor: #ffffff;
\tborder-radius: 3px;
\tpadding:6px 10px;
}

/* Making the header responsive. */

@media all and (max-width: 600px) {

\t.header-basic-light {
\t\tpadding: 20px 0;
\t\theight: 85px;
\t}

\t.header-basic-light .header-limiter h1 {
\t\tfloat: none;
\t\tmargin: -8px 0 10px;
\t\ttext-align: center;
\t\tfont-size: 24px;
\t\tline-height: 1;
\t}

\t.header-basic-light .header-limiter nav {
\t\tline-height: 1;
\t\tfloat:none;
\t}

\t.header-basic-light .header-limiter nav a {
\t\tfont-size: 13px;
\t}

}

/* For the headers to look good, be sure to reset the margin and padding of the body */

body {
\tmargin:0;
\tpadding:0;
}";
        
        $__internal_2012bac8b6e295534d7efc57faf6f18e29e6dc24d07a4bbed9069413aff80181->leave($__internal_2012bac8b6e295534d7efc57faf6f18e29e6dc24d07a4bbed9069413aff80181_prof);

    }

    public function getTemplateName()
    {
        return "@ESIEAPlatform/Advert/assets/header-basic-light.css";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return ".header-basic-light{
\tpadding: 20px 40px;
\tbox-sizing:border-box;
\tbox-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.15);
\theight: 80px;
\tbackground-color: #fff;
}

.header-basic-light .header-limiter {
\tmax-width: 1200px;
\ttext-align: center;
\tmargin: 0 auto;
}

/* Logo */

.header-basic-light .header-limiter h1{
\tfloat: left;
\tfont: normal 28px Cookie, Arial, Helvetica, sans-serif;
\tline-height: 40px;
\tmargin: 0;
}

.header-basic-light .header-limiter h1 span {
\tcolor: #5383d3;
}

/* The header links */

.header-basic-light .header-limiter a {
\tcolor: #5c616a;
\ttext-decoration: none;
}

.header-basic-light .header-limiter nav{
\tfont:15px Arial, Helvetica, sans-serif;
\tline-height: 40px;
\tfloat: right;
}

.header-basic-light .header-limiter nav a{
\tdisplay: inline-block;
\tpadding: 0 5px;
\topacity: 0.9;
\ttext-decoration:none;
\tcolor: #5c616a;
\tline-height:1;
}

.header-basic-light .header-limiter nav a.selected {
\tbackground-color: #86a3d5;
\tcolor: #ffffff;
\tborder-radius: 3px;
\tpadding:6px 10px;
}

/* Making the header responsive. */

@media all and (max-width: 600px) {

\t.header-basic-light {
\t\tpadding: 20px 0;
\t\theight: 85px;
\t}

\t.header-basic-light .header-limiter h1 {
\t\tfloat: none;
\t\tmargin: -8px 0 10px;
\t\ttext-align: center;
\t\tfont-size: 24px;
\t\tline-height: 1;
\t}

\t.header-basic-light .header-limiter nav {
\t\tline-height: 1;
\t\tfloat:none;
\t}

\t.header-basic-light .header-limiter nav a {
\t\tfont-size: 13px;
\t}

}

/* For the headers to look good, be sure to reset the margin and padding of the body */

body {
\tmargin:0;
\tpadding:0;
}";
    }
}
