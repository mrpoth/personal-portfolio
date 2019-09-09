@extends('_layouts.master')
@section('title', 'Adam Pothitos - A Personal Site')
@section('body')
<nav class="main-nav">
  <ul class="main-menu">
    <li><a href="#">Introduction</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Projects</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</nav>
<div class="introduction">
  <h2>Hi, my name is Adam</h2>
<div class="profile_container">
<img src="https://cdn4.iconfinder.com/data/icons/silhouette-of-user/430/2-512.png" alt="bearded avatar image">
</div>
<h2>I'm a Junior Web Developer with an interest in</h2>
<h3 id="tech-stack"></h3>
</div>
<h2 class="main-heading" style="text-align:center;">A little bit about me</h2>
<div class="about-me">
  <img src="https://images.squarespace-cdn.com/content/51cad0cfe4b0217d60343133/1467625638749-TCOI2EO372FEB8D0S9GE/Converging-on-Castlefield-Manchester-urban-landscape-photograph.jpg?format=750w&content-type=image%2Fjpeg" alt="">
  <p>Originally from Greece, I came over to the UK over six years ago to study at the university. I thought Manchester was pretty great so I decided to stay!</p>
</div>
<h2 class="main-heading" style="text-align:center;">Some of my projects</h2>
@endsection
