---
extends: _layouts.blog
title: Setting up this site
date: 2020-05-13
featured_image: https://www.consignor.co.uk/wp-content/uploads/2019/06/Senior-Front-End-Developer-1080x675.jpg
excerpt: Why and how I set up my personal site.
section: content
---

After working as a junior web developer in a marketing agency for a while, I figured it was about time I did something for myself as well.

Though I didn't have a lot of projects under my belt by then, it seemed like the best thing to do was create my own site that I could update whenever I needed to and where any potential future projects could be showcased at.

Back then, I had started working with Laravel and wanted to do more with it. However, I didn't want anything too heavy for this site as it would be kept very simple with an emphasis on loading fast and displaying all the relevant info right away.

As I was researching static site generators, I came across <a href="https://jigsaw.tighten.co" target="_blank">Jigsaw</a>, which uses Laravel's Blade templating so it seemed like the obvious choice.

![alt text](https://raw.githubusercontent.com/tightenco/jigsaw/master/jigsaw-banner.png "Jigsaw Logo")

This was actually the first time I came across various other tools as well, such as BrowserSync, as Jigsaw supports them out of the box, which was a great learning experience.

After trying out a few different things with the site, I settled on this simple but clean design and spent more time than I should on picking the "dev icons" that I liked (find them <a href="https://konpa.github.io/devicon/" target="_blank">here</a>).

Once I had completed the build and secured the domain, it was time to find a hosting provider, which is when I found <a href="https://netlify.com" target="_blank">Netlify</a>.

![alt text](https://doconfig.netlify.app/images/logos/netlify.jpg "Netlify Logo")

Not only is Netlify free, it also integrated with Jigsaw incredibly easily. All I had to do was connect Netlify to my GitHub repository, create a netlify.toml file with some basic build commands, and that's it!

Now, whenever I push a change to the master branch of the repository, Netlify will automatically create and publish a new build of the website. This was also my first experience with continuous development and it's definitely incredible.

And that about sums it all up! Hopefully I've covered everything here and maybe I've introduced you to a new tool or two.
