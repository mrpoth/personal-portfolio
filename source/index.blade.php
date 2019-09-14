@extends('_layouts.master')
@section('title', 'Adam Pothitos - A Personal Site')
@section('body')
  <body>
<nav class="main-nav">
  <ul class="main-menu">
    <li><a href="#intro">Introduction</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#skills">Skills & Tech</a></li>
    <li><a href="#projects">Projects</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</nav>
<nav class="main-nav" id="mobile-nav">
  <a href="#menu" class="box-shadow-menu" id="mobile-menu">
    Menu
  <ul class="main-menu"  id="mobile-list">
    <li><a href="#intro">Introduction</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#skills">Skills & Tech</a></li>
    <li><a href="#projects">Projects</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</nav>
</a>

<div class="introduction" id="intro">
  <div class="intro-text">
  <h2>Hi, I'm Adam,</h2>
<h2>a Manchester-based Junior Web Developer</h2>
</div>
{{-- <h3 id="tech-stack"></h3> --}}
</div>
<h2 class="main-heading"  id="about">A little bit about me</h2>
<div class="about-me-container">
  <div class="about-me-text">
  <p>I've been doing dev work professionally since August 2019. Before that, I've been involved with tech in other ways, including writing for numerous publications.
</p>
</div>
<div class="about-me">
  <img src="https://svgsilh.com/svg/1781443.svg" alt="bearded avatar image">
  </div>
</div>
<h2 class="main-heading"  id="skills">Skills</h2>
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
<h2 class="main-heading"  id="projects">Some of my projects</h2>
<div class="projects-container">
  <div class="single-project">
  <img src="https://i.imgur.com/KxqnkFJ.png" alt="">
  <div class="project-description">
    <h3>Careermap</h3>
    <p>Redeveloped various pages of Careermap, a growing jobs site with more than 100k monthly visitors</p>
    <p>Tech used:</p>
    <p>HTML & CSS, JS, PHP, MySQL</p>
    <a href="https://www.careermap.co.uk">Visit the homepage</a>
    <br>
    <a href="https://www.careermap.co.uk/careermag">Visit Careermag</a>
  </div>
  </div>
  <div class="single-project">
  <img src="https://i.imgur.com/8dxcHeG.png" alt="">
  <div class="project-description">
    <h3>FAQ Project</h3>
    <p>Built for a support intranet, this version is specific to emails but could be applied to any topic.</p>
    <p>Tech used:</p>
    <p>HTML & CSS, JS</p>
    <a href="https://www.adampothitos.me/email-project/">Test it for yourself!</a>
  </div>
  </div>
</div>
</body>
@endsection
@section('footer')

  <div id="footer">
      <p>Built by Adam Pothitos with Jigsaw, hosted on Netlify</p>
      <div class="social-container">
    <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-linkedin-512.png"
    ><a href="https://www.linkedin.com/in/adam-pothitos-378154145/">LinkedIn</a>
        <img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png"><a href="https://github.com/mrpoth/">GitHub</a>
</div>
  </div>

@endsection
@push('scripts')
  <script src="{{mix('js/main.js', 'assets/build')}}"></script>
@endpush
