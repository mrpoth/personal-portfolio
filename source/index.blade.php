@extends('_layouts.master')
@section('title', 'Adam Pothitos - A Personal Site')
@section('body')
<nav class="main-nav">
  <ul class="main-menu">
    <li><a href="#intro">Introduction</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#skills">Skills & Tech</a></li>
    <li><a href="#projects">Projects</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</nav>
<div class="introduction" id="intro">
  <div class="intro-text">
    <h2>Hi, I'm Adam,</h2>
    <h2>a Manchester-based Junior Web Developer</h2>
  </div>
  {{-- <h3 id="tech-stack"></h3> --}}
</div>
<h2 class="main-heading" id="about">A little bit about me</h2>
<div class="about-me-container">
  <div class="about-me-text">
    <p>I've been doing dev work professionally since August 2019. Before that, I've been involved with tech in other ways, including writing for numerous publications.
    </p>
  </div>
  <div class="about-me">
    <img src="https://cdn4.iconfinder.com/data/icons/silhouette-of-user/430/2-512.png" alt="bearded avatar image">
  </div>
</div>
<h2 class="main-heading" id="skills">Skills</h2>
<div class="content-container">
  <i class="devicon-javascript-plain colored"></i>
  <i class="devicon-php-plain colored"></i>
  <i class="devicon-mysql-plain colored"></i>
  <i class="devicon-html5-plain colored"></i>
</div>
<div class="content-container">
  <i class="devicon-sass-original colored"></i>
  <i class="devicon-bootstrap-plain colored"></i>
  <i class="devicon-laravel-plain colored"></i>
  <i class="devicon-wordpress-plain colored"></i>
</div>
<h2 class="main-heading">Tech</h2>
<div class="content-container" id="tech">
  <i class="devicon-git-plain colored"></i>
  <i class="devicon-github-plain colored"></i>
  <i class="devicon-atom-original colored"></i>
</div>
<h2 class="main-heading" id="projects">Some of my projects</h2>
<div class="projects-container">
  <div class="single-project">
    <img src="https://i.imgur.com/KxqnkFJ.png" alt="Careermap Homepage">
    <div class="project-description">
      <h3>Careermap Redesign</h3>
      <p>Working off a design template, I developed the front and backend of the Careermap homepage, a growing jobs site in the UK with more than 100k monthly visitors</p>
      <p>Tech used:</p>
      <p>HTML & CSS, JS, PHP, MySQL</p>
      <a href="https://www.careermap.co.uk" target="_blank">Check out the homepage</a>
    </div>
  </div>
  <div class="single-project">
    <img src="https://i.imgur.com/KxqnkFJ.png" alt="">
    <div class="project-description">
      <h3>Animated FAQ</h3>
      <p>A simple, animated FAQ I created for the company's intranet. This version focuses on email questions only.</p>
      <p>Tech used:</p>
      <p>HTML & CSS, JS</p>
      <a href="#">Test it here</a>
    </div>
  </div>
  <div class="single-project">
    <img src="https://i.imgur.com/KxqnkFJ.png" alt="">
  </div>
  <div class="single-project">
    <img src="https://i.imgur.com/KxqnkFJ.png" alt="">
  </div>
</div>
@endsection
