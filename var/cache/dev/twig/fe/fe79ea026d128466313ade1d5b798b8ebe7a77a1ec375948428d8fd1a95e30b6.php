<?php

/* @ESIEAPlatform/Advert/assets/header-basic.css */
class __TwigTemplate_6b31cd2c0e609f9a85154271fb2af806248585981b4dc3d34fd514f2b389b7cf extends Twig_Template
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
        $__internal_eea20d8f273fcf309d0b8e307d6f5bc05b842aa6d310051147d7c6d7a2c0ff5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea20d8f273fcf309d0b8e307d6f5bc05b842aa6d310051147d7c6d7a2c0ff5b->enter($__internal_eea20d8f273fcf309d0b8e307d6f5bc05b842aa6d310051147d7c6d7a2c0ff5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESIEAPlatform/Advert/assets/header-basic.css"));

        // line 1
        echo ".header-basic {
\tbackground-color: #292c2f;
\tbox-shadow: 1px 2px 2px rgba(0, 0, 0, 0.15);
\tpadding: 20px 40px;
\theight: 80px;
\tbox-sizing: border-box;
}

.header-basic .header-limiter {
\tmax-width: 1200px;
\ttext-align: center;
\tmargin: 0 auto;
}

/* Logo */

.header-basic .header-limiter h1 {
\tfloat: left;
\tfont: normal 28px Cookie, Arial, Helvetica, sans-serif;
\tline-height: 40px;
\tmargin: 0;
}

.header-basic .header-limiter h1 span {
\tcolor: #5383d3;
}

/* The header links */

.header-basic .header-limiter a {
\tcolor: #ffffff;
\ttext-decoration: none;
}

.header-basic .header-limiter nav{
\tfont:16px Arial, Helvetica, sans-serif;
\tline-height: 40px;
\tfloat: right;
}

.header-basic .header-limiter nav a{
\tdisplay: inline-block;
\tpadding: 0 5px;
\ttext-decoration:none;
\tcolor: #ffffff;
\tfont-size: 16px;
\topacity: 0.9;
}

.header-basic .header-limiter nav a:hover{
\topacity: 1;
}

.header-basic .header-limiter nav a.selected {
\tcolor: #608bd2;
\tpointer-events: none;
\topacity: 1;
}

/* Making the header responsive */

@media all and (max-width: 600px) {

\t.header-basic {
\t\tpadding: 20px 0;
\t\theight: 75px;
\t}

\t.header-basic .header-limiter h1 {
\t\tfloat: none;
\t\tmargin: -8px 0 10px;
\t\ttext-align: center;
\t\tfont-size: 24px;
\t\tline-height: 1;
\t}

\t.header-basic .header-limiter nav {
\t\tline-height: 1;
\t\tfloat:none;
\t}

\t.header-basic .header-limiter nav a {
\t\tfont-size: 13px;
\t}

}

/* For the headers to look good, be sure to reset the margin and padding of the body */

body {
\tmargin:0;
\tpadding:0;
}";
        
        $__internal_eea20d8f273fcf309d0b8e307d6f5bc05b842aa6d310051147d7c6d7a2c0ff5b->leave($__internal_eea20d8f273fcf309d0b8e307d6f5bc05b842aa6d310051147d7c6d7a2c0ff5b_prof);

    }

    public function getTemplateName()
    {
        return "@ESIEAPlatform/Advert/assets/header-basic.css";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return ".header-basic {
\tbackground-color: #292c2f;
\tbox-shadow: 1px 2px 2px rgba(0, 0, 0, 0.15);
\tpadding: 20px 40px;
\theight: 80px;
\tbox-sizing: border-box;
}

.header-basic .header-limiter {
\tmax-width: 1200px;
\ttext-align: center;
\tmargin: 0 auto;
}

/* Logo */

.header-basic .header-limiter h1 {
\tfloat: left;
\tfont: normal 28px Cookie, Arial, Helvetica, sans-serif;
\tline-height: 40px;
\tmargin: 0;
}

.header-basic .header-limiter h1 span {
\tcolor: #5383d3;
}

/* The header links */

.header-basic .header-limiter a {
\tcolor: #ffffff;
\ttext-decoration: none;
}

.header-basic .header-limiter nav{
\tfont:16px Arial, Helvetica, sans-serif;
\tline-height: 40px;
\tfloat: right;
}

.header-basic .header-limiter nav a{
\tdisplay: inline-block;
\tpadding: 0 5px;
\ttext-decoration:none;
\tcolor: #ffffff;
\tfont-size: 16px;
\topacity: 0.9;
}

.header-basic .header-limiter nav a:hover{
\topacity: 1;
}

.header-basic .header-limiter nav a.selected {
\tcolor: #608bd2;
\tpointer-events: none;
\topacity: 1;
}

/* Making the header responsive */

@media all and (max-width: 600px) {

\t.header-basic {
\t\tpadding: 20px 0;
\t\theight: 75px;
\t}

\t.header-basic .header-limiter h1 {
\t\tfloat: none;
\t\tmargin: -8px 0 10px;
\t\ttext-align: center;
\t\tfont-size: 24px;
\t\tline-height: 1;
\t}

\t.header-basic .header-limiter nav {
\t\tline-height: 1;
\t\tfloat:none;
\t}

\t.header-basic .header-limiter nav a {
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
