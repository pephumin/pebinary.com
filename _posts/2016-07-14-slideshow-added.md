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
      <div class="item active">
        <img class="slide img-responsive" src="{{ "/assets/img/carousel/c1.jpg" | prepend: site.baseurl }}" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h2>Bored of waiting months for survey results?</h2>
            <p>Our core value is to provide survey results as quickly as possible as we know that time is important.
               We help you make quicker business actions and be ahead of the competition.</p>
            <p><a class="button-lg-x" href="{{ "/contact/" | prepend: site.baseurl }}" role="button">contact <span class="hidden-xs hidden-sm">us</span> <i class="pe-envelope-o pe-fw"></i></a></p>
          </div>
        </div>
      </div>
      <div class="item">
        <img class="slide img-responsive" src="{{ "/assets/img/carousel/c2.jpg" | prepend: site.baseurl }}" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h2>Data is collected with the mobile platform</h2>
            <p>We leverage the high mobile penetration in the modern world.
               The ability to connect directly with respondents provide us with an opportunity to draw insights from them directly.</p>
            <p><a class="button-lg-x" href="{{ "#" | prepend: site.baseurl }}" role="button"><span class="hidden-xs hidden-sm">View</span> demo <i class="pe-paper-plane-o pe-fw"></i></a></p>
          </div>
        </div>
      </div>
      <div class="item">
        <img class="slide img-responsive" src="{{ "/assets/img/carousel/c3.jpg" | prepend: site.baseurl }}" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h2>We help you move faster</h2>
            <p>The market has changed where things move much quicker, and so does your business. Failing to keep pace is not an option.
               We provide data very quickly so you can cope better with the fast-moving world.</p>
            <p><a class="button-lg-x" href="{{ "/contact/" | prepend: site.baseurl }}" role="button">contact <span class="hidden-xs hidden-sm">us</span> <i class="pe-envelope-o pe-fw"></i></a></p>
          </div>
        </div>
      </div>
      <div class="item">
        <img class="slide img-responsive" src="{{ "/assets/img/carousel/c4.jpg" | prepend: site.baseurl }}" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h2>Members give opinions when they want</h2>
            <p>We design our system to support members with continuity where multiple devices are accepted.
               This gives the most flexibility for our members in terms of providing their opinions to our survey.</p>
            <p><a class="button-lg-x" href="{{ "/contact/" | prepend: site.baseurl }}" role="button"><span class="hidden-xs hidden-sm">View</span> demo <i class="pe-paper-plane-o pe-fw"></i></a></p>
          </div>
        </div>
      </div>
      <div class="item">
        <img class="slide img-responsive" src="{{ "/assets/img/carousel/c5.jpg" | prepend: site.baseurl }}" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h2>Connect directly with your targets</h2>
            <p>With our system, you can connect with your target audiences even they are difficult to reach.
               No more difficulties to reach rural upcountry consumers or the high net-worths.</p>
            <p><a class="button-lg-x" href="{{ "/contact/" | prepend: site.baseurl }}" role="button">contact <span class="hidden-xs hidden-sm">us</span> <i class="pe-envelope-o pe-fw"></i></a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#slideshow" role="button" data-slide="prev">
      <i class="pe-chevron-left"></i>
    </a>
    <a class="right carousel-control" href="#slideshow" role="button" data-slide="next">
      <i class="pe-chevron-right"></i>
    </a>
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
