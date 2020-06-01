@extends('_layouts.master')
@section('title', 'Adam Pothitos - Web Developer')
@section('body')
<body>
  @include('_partials.nav')
  <div class="introduction" id="intro">
    <div class="intro-text">
      <h2>Hi, I'm Adam,</h2>
      <h2>a Manchester-based Web Developer</h2>
    </div>
  </div>
  <h2 class="main-heading" id="about">A little bit about me</h2>
  <div class="about-me-container">
    <div class="about-me-text">
      <p>I've been doing dev work professionally since August 2018. Before that, I was involved with tech in other ways,
        including writing for numerous publications.
      </p>
    </div>
    <div class="about-me">
      <img src="https://svgsilh.com/svg/1781443.svg" alt="bearded avatar image">
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
  <div class="content-container">
    <i class="devicon-vuejs-plain"></i>
    <i class="devicon-nodejs-plain"></i>
    <i class="devicon-express-original"></i>
    <i class="devicon-mongodb-plain"></i>
  </div>
  <h2 class="main-heading">Tech</h2>
  <div class="content-container" id="tech">
    <i class="devicon-git-plain colored"></i>
    <i class="devicon-github-plain colored"></i>
    <i class="devicon-visualstudio-plain"></i>
    <i class="devicon-phpstorm-plain"></i>
  </div>
  <h2 class="main-heading" id="projects">Some of my projects</h2>
  <div class="projects-container">
    <div class="single-project">
      <img src="https://i.imgur.com/CcYJOCE.png" alt="careermap homepage screenshot">
      <div class="project-description">
        <h3>Careermap</h3>
        <p>Redeveloped various pages of Careermap, a growing jobs site with more than 100k monthly visitors</p>
        <p>Tech used:</p>
        <p>HTML & CSS, JS, PHP, MySQL</p>
        <a href="https://www.careermap.co.uk" target="_blank">Visit the homepage</a>
        <br>
        <a href="http://www.careermap.co.uk/careermag" target="_blank">Visit Careermag</a>
      </div>
    </div>
    <div class="single-project">
      <img src="https://i.imgur.com/7KyOAF3.png" alt="MoviesRoulette homepage">
      <div class="project-description">
        <h3>Movies Roulette</h3>
        <p>A movie generator for random top-rated movies as I never know what to watch!</p>
        <p>Tech used:</p>
        <p>Vue, Node/Express, MongoDB</p>
        <a href="http://www.moviesroulette.com" target="_blank">Find a movie to watch</a>
      </div>
    </div>
    <div class="single-project">
      <img src="https://i.imgur.com/8dxcHeG.png" alt="custom FAQ project screenshot">
      <div class="project-description">
        <h3>FAQ Project</h3>
        <p>Built for a support intranet, this version is specific to emails but could be applied to any topic.</p>
        <p>Tech used:</p>
        <p>HTML & CSS, JS</p>
        <a href="https://www.adampothitos.me/email-project/" target="_blank">Test it for yourself!</a>
      </div>
    </div>
  </div>
  <h2 class="main-heading" id="contact">Contact</h2>
  <div class="contact-container">
    <form name="contact" method="POST" data-netlify="true" id="main-form">
      <label for="name">Name*</label><input type="text" name="name" id="name" required>
      <label for="email">Email*</label><input type="email" name="email" id="email" required>
      <label for="number">Number</label> <input type="tel" name="number" id="number">
      <label for="message">Message</label><textarea name="message" rows="8" cols="80" id="message"></textarea>
      <button type="submit" name="submit">Get in Touch!</button>
    </form>
  </div>
</body>
@endsection
@section('footer')
@push('scripts')
<script src="{{mix('js/main.js', 'assets/build')}}"></script>
@endpush
@include('_partials.main-footer')

@endsection
