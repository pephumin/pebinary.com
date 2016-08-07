---
layout: blog-en
title: "Slideshow added"
date: 2016-07-14 16:06:27 +0700
author: admin
author-email: admin@pebinary.com
category: blog
tags: [website]
quote:
icon: fast-forward
published: true
---

In order to make the website look more appeal to the general public, a `slideshow` has been added.

It is one of the build-in functions provided by [Bootstrap framework] which is called [carousel]. FYI, this framework is developed and maintained by [Twitter] and it has been named as one of the most popular framework.

While it is first developed and installed to the [front page], it may be considered to be included in some other pages in the future as well.

<!--more-->

Currently this section only uses one size of the picture which is 1280x500 pixel. And instead of placing the blur effect directly to the pictures, we currently use `filter` effect by [CSS3] to make them look blur. However we may consider making all pictures blurred from the original photoshop source for a guarantee of consistency output to all viewers from different type of we browsers.

[Bootstrap framework]: http://getbootstrap.com/
[carousel]: http://getbootstrap.com/javascript/#carousel
[Twitter]: http://www.twitter.com
[front page]: {{ "/" | prepend: site.baseurl }}
[CSS3]: http://www.w3.org/TR/CSS/
