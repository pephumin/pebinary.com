---
title: "Search function added"
date: 2016-08-19 18:03:42 +0700
category: [updates]
tags: [website, blog]
quote:
icon: gears
published: true
---

The `search function` has been added to our website.

It is a simple and quick search which will take no efforts from users to click too many times. This clearly allows a much greater experience to users on site browsing. And hopefully it will increase the rate of site accessing, and reading in the future.

The search function itself is coded by using a combination of [Ruby] {% include 0-base/ext.html %} and [javascript] {% include 0-base/ext.html %} which is simple enough to be integrated to our website.

We currently use this function only for the Blog section. And we will soon expand the usage to our sister website, __[http://www.pebinary.net]__, which would be very beneficial for all members and clients in the future on searching for the right help documents to read quicker.

The `search function` can be easily found in the [Blog] section on the right menu. Below is the example on how it looks like although its function is not working (just a demo here).

<div id="s-container">
  <div class="form-group has-feedback">
  <input type="text" class="form-control" placeholder="type keyword here">
  <i class="pe-search form-control-feedback"></i>
  </div>
</div>


[Blog]: {{ "/blog/" | prepend: site.baseurl }}
[http://www.pebinary.net]: http://www.pebinary.net
[Ruby]: https://www.ruby-lang.org
[ruby-logo]: {{ "/assets/img/others/ruby.svg" | prepend: site.baseurl }} "Logo of Ruby"
[javascript]: https://www.javascript.com
