---
title: "Slideshow added"
date: 2016-07-14 16:06:27 +0700
category: [updates]
tags: [website]
quote:
icon: fast-forward
published: true
---

In order to make the website look more appeal to the general public, a `slideshow` has been added.

It is one of the build-in functions provided by [Bootstrap framework] {% include 0-base/ext.html %} which is called [carousel] {% include 0-base/ext.html %}. FYI, this framework is developed and maintained by [Twitter] {% include 0-base/ext.html %} and it has been named as one of the most popular framework.

While it is first developed and installed to the [front page], it may be considered to be included in some other pages in the future as well.

Below is the example of how the `slideshow` looks like.

<section class="slideshow">
  <div id="slideshow" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#slideshow" data-slide-to="0" class="active"></li>
      <li data-target="#slideshow" data-slide-to="1"></li>
      <li data-target="#slideshow" data-slide-to="2"></li>
      <li data-target="#slideshow" data-slide-to="3"></li>
      <li data-target="#slideshow" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      {% for entry in site.data.slideshow %}
      {% if forloop.first %}
      <div class="item active">
      {% else %}
      <div class="item">
      {% endif %}
      {% capture img %}/assets/img/carousel/{{ entry.picture }}{% endcapture %}
        <img class="slide img-responsive" src="{{ img | prepend: site.baseurl }}" alt="{{ entry.title }}">
        <div class="container">
          <div class="carousel-caption">
            <h2>{{ entry.title }}</h2>
            <p>{{ entry.description }}</p>
            <p><a class="{{ entry.button-type }}" href="{{ entry.button-url | prepend: site.baseurl }}" role="button">{{ entry.button }} <i class="pe-{{ entry.button-icon }} pe-fw"></i></a></p>
          </div>
        </div>
      </div>
      {% endfor %}
      <a class="left carousel-control" href="#slideshow" role="button" data-slide="prev"><i class="pe-chevron-left"></i></a>
      <a class="right carousel-control" href="#slideshow" role="button" data-slide="next"><i class="pe-chevron-right"></i></a>
    </div>
  </div>
</section>

**And please be noted that it is just an example and therefore we only show with a smaller size than the actual one we put on the front page.**

Currently this section only uses one size of the picture which is 1280x500 pixel. ~~And instead of placing the blur effect directly to the pictures, we currently use `filter` effect by [CSS3] {% include 0-base/ext.html %} to make them look blur. However we may consider making all pictures blurred from the original photoshop source for a guarantee of consistency output to all viewers from different type of web browsers.~~

**We have finally built-in all the pictures in this section as well as other sections with blur effect. And the effect itself is called _[Gaussian Blur]_ {% include 0-base/ext.html %} in [Adobe Photoshop] {% include 0-base/ext.html %}.**

<!--more-->

[Bootstrap framework]: http://getbootstrap.com/
[carousel]: http://getbootstrap.com/javascript/#carousel
[Twitter]: http://www.twitter.com
[front page]: {{ "/" | prepend: site.baseurl }}
[CSS3]: http://www.w3.org/TR/CSS/
[Adobe Photoshop]: http://www.adobe.com/sea/products/photoshop.html
[Gaussian Blur]: https://helpx.adobe.com/photoshop/using/blur-gallery.html
