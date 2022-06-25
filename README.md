<p>
<a href="https://packagist.org/packages/eklausme/saaze-jpilot"><img src="https://img.shields.io/packagist/v/eklausme/saaze-jpilot" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/eklausme/saaze-jpilot"><img src="https://img.shields.io/packagist/l/eklausme/saaze-jpilot" alt="License"></a>
</p>


# Example theme for Simplified Saaze

This J-Pilot example will generate a full website for the J-Pilot desktop organizer software. It features:
* a top-menu with sub-menus
* documentation pages in English and German
* a blog
* bottom shows various social media icons: e-mail, LinkedIn, GitHub, RSS
* the theme has some responsive elements

It is a modified version of the original website found here: [J-Pilot](https://www.jpilot.org).

Building this website lasts 0.02 seconds on a AMD Ryzen 7 5700G.

You can see the result here: [J-Pilot](https://eklausmeier.goip.de/jpilot).


# Simplified Saaze

_Simplified Saaze_ is a fast, all-inclusive, flat-file CMS for simple websites and blogs.

Static site builders are fast but normally have a steep learning curve and require lots of tooling to make them work. We believe building a personal site should be stupidly simple. That's why _Simplified Saaze_ is built on the following principles.

* Easy to run - All you need is PHP8, a C compiler, and Composer
* Easy to host - Serve dynamically or statically
* Easy to edit - Edit content using simple Markdown files
* Easy to theme - Templates use plain PHP/HTML
* Fast and secure - No database = less moving parts + more speed
* Simple to understand - Everything is a collection of entries

Read [_Simplified Saaze_](https://eklausmeier.goip.de/blog/2021/10-31-simplified-saaze) for installation and usage.


# Installation

Run
```bash
composer create-project eklausme/saaze-jpilot
```
This will copy the files of this Git repository, it will also install _Simplified Saaze_. To run _Simplified Saaze_ you still need to compile one C program, install one PECL (PHP extension), and configure one PHP file. This is something you have to do only once.


# Deployment for static site

Once you have run `php saaze` and the static files have been generated in the build directory, the following directories and files need to be copied to your web root:
1. build/blog
2. build/doc
3. build/index.html

The following directories and files only need to be copied if they have been changed:
1. public/img
2. pkg  (contains only example files)
3. jpilot.css
4. index.html


# Credits

_Simplified Saaze_ was created by [Elmar Klausmeier](https://eklausmeier.goip.de).

Saaze was created by [Gilbert Pellegrom](https://gilbitron.me) from [Dev7studios](https://dev7studios.co). Released under the MIT license.

[J-Pilot](https://www.jpilot.org) web-site from Judd Montgomery.

