---
title: "Support site"
date: 2016-08-12 12:13:07 +0700
category: [setup]
tags: [website, support]
quote:
icon: university
published: true
---

We start building a new section of the website which can be considered as a `mini-website` because it will be a standalone website under its own sub-domain name.

The new `mini-website` that we are building is the `Support section` which will contain all guiding and instruction documents for both clients and menbers.

At this stage, we will use __[http://support.pebinary.com]__ as the sub-domain name for this `mini-website`, and it will be divided into two main sections which are section specifically for clients and members.

And, as one would have expected, similar to the main website we will build it by using a combination of [HTML] {% include 0-base/ext.html %}, [Cascading Style Sheets] {% include 0-base/ext.html %}, [Ruby] {% include 0-base/ext.html %} (programming language), and [Markdown] {% include 0-base/ext.html %}.

To be more specific, the [HTML] {% include 0-base/ext.html %} we use is the most advanced version which is [HTML5] {% include 0-base/ext.html %}, and similarly for the [Cascading Style Sheets] {% include 0-base/ext.html %} where we also use the most updated version of [CSS3] {% include 0-base/ext.html %}.

<table class="table table-striped" width="80%" border="0">
  <tr>
    <td align="center"><img src="{{ "/assets/img/others/html5.svg" | prepend: site.baseurl }}" class="img-thumbnail"></td>
    <td align="center"><img src="{{ "/assets/img/others/css3.svg" | prepend: site.baseurl }}" class="img-thumbnail"></td>
    <td align="center"><img src="{{ "/assets/img/others/ruby.svg" | prepend: site.baseurl }}" class="img-thumbnail"></td>
    <td align="center"><img src="{{ "/assets/img/others/markdown.svg" | prepend: site.baseurl }}" class="img-thumbnail"></td>
  </tr>
  <tr>
    <td align="center"><small><a href="http://www.w3.org/TR/html5/"><strong>HTML5</strong></a> {% include 0-base/ext.html %}</small></td>
    <td align="center"><small><a href="http://www.w3.org/TR/CSS/"><strong>CSS3</strong></a> {% include 0-base/ext.html %}</small></td>
    <td align="center"><small><a href="https://www.ruby-lang.org"><strong>Ruby</strong></a> {% include 0-base/ext.html %}</small></td>
    <td align="center"><small><a href="https://en.wikipedia.org/wiki/Markdown"><strong>Markdown</strong></a> {% include 0-base/ext.html %}</small></td>
  </tr>
</table>

<!--more-->

We plan to finish the template within a month from now. And we will then complete this `mini-website` by filling-in with the relevant contents afterwards. All cotents are planned to be arranged into sections making it easy for users to navigate and find their answers.

Some additional functions are also currently considered which can be listed out below:

- [ ] Bilingual (English/Thai)
- [ ] Breadcrumb
- [ ] Similar topics
- [ ] Other topics that other clients/members also read
- [ ] Read if the current topic is helpful (usiung Yes/No)
- [ ] Submit function for new topic (or need more help)


And lastly, the ultimate objective is to use both the layout and the typography that are very easy to read for users. A slightly larger font size (than normal) is currently under our consideration.


[http://support.pebinary.com]: http://support.pebinary.com
[HTML]: https://www.w3.org/html/
[HTML5]: http://www.w3.org/TR/html5/
[html5-logo]: {{ "/assets/img/others/html5.svg" | prepend: site.baseurl }} "Logo of HTML5"
[Cascading Style Sheets]: https://www.w3.org/Style/CSS/
[CSS3]: http://www.w3.org/TR/CSS/
[css3-logo]: {{ "/assets/img/others/css3.svg" | prepend: site.baseurl }} "Logo of CSS3"
[Ruby]: https://www.ruby-lang.org
[ruby-logo]: {{ "/assets/img/others/ruby.svg" | prepend: site.baseurl }} "Logo of Ruby"
[Markdown]: https://en.wikipedia.org/wiki/Markdown
[markdown-logo]: {{ "/assets/img/others/markdown.svg" | prepend: site.baseurl }} "Logo of Markdown"
