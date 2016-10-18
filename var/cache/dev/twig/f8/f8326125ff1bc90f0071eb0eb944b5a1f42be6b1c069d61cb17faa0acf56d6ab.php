<?php

/* @ESIEAPlatform/Advert/assets/header-fixed.css */
class __TwigTemplate_c7d7d1822e57fcb5e0e34556c14fbf8ded140a9c53c1034bb47724ae627e9ebd extends Twig_Template
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
        $__internal_737dddaaace8d419a266088651e403a18d4a95d62e0f7a8f1837dc86a52c8ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_737dddaaace8d419a266088651e403a18d4a95d62e0f7a8f1837dc86a52c8ecf->enter($__internal_737dddaaace8d419a266088651e403a18d4a95d62e0f7a8f1837dc86a52c8ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESIEAPlatform/Advert/assets/header-fixed.css"));

        // line 1
        echo ".header-fixed {
\tbackground-color:#292c2f;
\tbox-shadow:0 1px 1px #ccc;
\tpadding: 20px 40px;
\theight: 80px;
\tcolor: #ffffff;
\tbox-sizing: border-box;
\ttop:-100px;

\t-webkit-transition:top 0.3s;
\ttransition:top 0.3s;
}

.header-fixed .header-limiter {
\tmax-width: 1200px;
\ttext-align: center;
\tmargin: 0 auto;
}

/*\tThe header placeholder. It is displayed when the header is fixed to the top of the
\tbrowser window, in order to prevent the content of the page from jumping up. */

.header-fixed-placeholder{
\theight: 80px;
\tdisplay: none;
}

/* Logo */

.header-fixed .header-limiter h1 {
\tfloat: left;
\tfont: normal 28px Cookie, Arial, Helvetica, sans-serif;
\tline-height: 40px;
\tmargin: 0;
}

.header-fixed .header-limiter h1 span {
\tcolor: #5383d3;
}

/* The navigation links */

.header-fixed .header-limiter a {
\tcolor: #ffffff;
\ttext-decoration: none;
}

.header-fixed .header-limiter nav {
\tfont:16px Arial, Helvetica, sans-serif;
\tline-height: 40px;
\tfloat: right;
}

.header-fixed .header-limiter nav a{
\tdisplay: inline-block;
\tpadding: 0 5px;
\ttext-decoration:none;
\tcolor: #ffffff;
\topacity: 0.9;
}

.header-fixed .header-limiter nav a:hover{
\topacity: 1;
}

.header-fixed .header-limiter nav a.selected {
\tcolor: #608bd2;
\tpointer-events: none;
\topacity: 1;
}

/* Fixed version of the header */

body.fixed .header-fixed {
\tpadding: 10px 40px;
\theight: 50px;
\tposition: fixed;
\twidth: 100%;
\ttop: 0;
\tleft: 0;
\tz-index: 1;
}

body.fixed .header-fixed-placeholder {
\tdisplay: block;
}

body.fixed .header-fixed .header-limiter h1 {
\tfont-size: 24px;
\tline-height: 30px;
}

body.fixed .header-fixed .header-limiter nav {
\tline-height: 28px;
\tfont-size: 13px;
}


/* Making the header responsive */

@media all and (max-width: 600px) {

\t.header-fixed {
\t\tpadding: 20px 0;
\t\theight: 75px;
\t}

\t.header-fixed .header-limiter h1 {
\t\tfloat: none;
\t\tmargin: -8px 0 10px;
\t\ttext-align: center;
\t\tfont-size: 24px;
\t\tline-height: 1;
\t}

\t.header-fixed .header-limiter nav {
\t\tline-height: 1;
\t\tfloat:none;
\t}

\t.header-fixed .header-limiter nav a {
\t\tfont-size: 13px;
\t}

\tbody.fixed .header-fixed {
\t\tdisplay: none;
\t}

}

/*
\t We are clearing the body's margin and padding, so that the header fits properly.
\t We are also adding a height to demonstrate the scrolling behavior. You can remove
\t these styles.
 */

body {
\tmargin: 0;
\tpadding: 0;
\theight: 1500px;
}";
        
        $__internal_737dddaaace8d419a266088651e403a18d4a95d62e0f7a8f1837dc86a52c8ecf->leave($__internal_737dddaaace8d419a266088651e403a18d4a95d62e0f7a8f1837dc86a52c8ecf_prof);

    }

    public function getTemplateName()
    {
        return "@ESIEAPlatform/Advert/assets/header-fixed.css";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return ".header-fixed {
\tbackground-color:#292c2f;
\tbox-shadow:0 1px 1px #ccc;
\tpadding: 20px 40px;
\theight: 80px;
\tcolor: #ffffff;
\tbox-sizing: border-box;
\ttop:-100px;

\t-webkit-transition:top 0.3s;
\ttransition:top 0.3s;
}

.header-fixed .header-limiter {
\tmax-width: 1200px;
\ttext-align: center;
\tmargin: 0 auto;
}

/*\tThe header placeholder. It is displayed when the header is fixed to the top of the
\tbrowser window, in order to prevent the content of the page from jumping up. */

.header-fixed-placeholder{
\theight: 80px;
\tdisplay: none;
}

/* Logo */

.header-fixed .header-limiter h1 {
\tfloat: left;
\tfont: normal 28px Cookie, Arial, Helvetica, sans-serif;
\tline-height: 40px;
\tmargin: 0;
}

.header-fixed .header-limiter h1 span {
\tcolor: #5383d3;
}

/* The navigation links */

.header-fixed .header-limiter a {
\tcolor: #ffffff;
\ttext-decoration: none;
}

.header-fixed .header-limiter nav {
\tfont:16px Arial, Helvetica, sans-serif;
\tline-height: 40px;
\tfloat: right;
}

.header-fixed .header-limiter nav a{
\tdisplay: inline-block;
\tpadding: 0 5px;
\ttext-decoration:none;
\tcolor: #ffffff;
\topacity: 0.9;
}

.header-fixed .header-limiter nav a:hover{
\topacity: 1;
}

.header-fixed .header-limiter nav a.selected {
\tcolor: #608bd2;
\tpointer-events: none;
\topacity: 1;
}

/* Fixed version of the header */

body.fixed .header-fixed {
\tpadding: 10px 40px;
\theight: 50px;
\tposition: fixed;
\twidth: 100%;
\ttop: 0;
\tleft: 0;
\tz-index: 1;
}

body.fixed .header-fixed-placeholder {
\tdisplay: block;
}

body.fixed .header-fixed .header-limiter h1 {
\tfont-size: 24px;
\tline-height: 30px;
}

body.fixed .header-fixed .header-limiter nav {
\tline-height: 28px;
\tfont-size: 13px;
}


/* Making the header responsive */

@media all and (max-width: 600px) {

\t.header-fixed {
\t\tpadding: 20px 0;
\t\theight: 75px;
\t}

\t.header-fixed .header-limiter h1 {
\t\tfloat: none;
\t\tmargin: -8px 0 10px;
\t\ttext-align: center;
\t\tfont-size: 24px;
\t\tline-height: 1;
\t}

\t.header-fixed .header-limiter nav {
\t\tline-height: 1;
\t\tfloat:none;
\t}

\t.header-fixed .header-limiter nav a {
\t\tfont-size: 13px;
\t}

\tbody.fixed .header-fixed {
\t\tdisplay: none;
\t}

}

/*
\t We are clearing the body's margin and padding, so that the header fits properly.
\t We are also adding a height to demonstrate the scrolling behavior. You can remove
\t these styles.
 */

body {
\tmargin: 0;
\tpadding: 0;
\theight: 1500px;
}";
    }
}
