---
image: 'cover.jpg'
title: 'titlelol'
sitemap:
    changefreq: weekly
    priority: 1.03
content:
    items: '@self.children'
    order:
        by: date
        dir: desc
    limit: 8
    pagination: true
feed:
    description: 'Sample Blog Description'
    limit: 3
pagination: true
---

# Mediator Origins

The Mediator theme for Grav is a direct port of the [Mediator Theme for Jekyll](https://github.com/dirkfabisch/mediator) designed by [Dirk Fabisch](http://blog.base68.com/about/) which in turn was inspired by the [Readium 2.0 Theme for Ghost](http://www.svenread.com/readium-ghost-theme/).

A couple of minor tweaks and adjustments have been made to better take advantage of Grav features and functionality.

# Features

* Fully Responsive layout
* Use header images in articles, if you want to (add tag "image" and url to the image in the front matter section of a post)
* Minimal design
* Featured article support
* FontAwesome implemented for easy use of icons fonts
* Free & Open Source Font usage

## Basic Setup for a new Grav site