---
layout: post
title:  "Assignment 1 Questions"
date:   2019-11-18 07:18:38 -0600
categories: posts
---

- **What do you think of pre-compiling your CSS?**

I think it's good idea that we have the possibility to divide our CSS-files into smaller objects and have them easily be put back together into one single layout for the website. They also give us the added functionality of nesting which I like, it makes the code easier to write and read in my mind. Pre-processors also makes it easier to reuse code, less DRY, less clutter and more clear code.

- **Compare to regular CSS**

Regular CSS code can not be organized as easily. For example the CSS code in my previous course in HTML and CSS is very cluttered compared to the one I have made in this first assignment. That is of course partly because I had all the CSS in one file at that time. Mixins, inheritance, variables and math functions are also harder to do or impossible in normal CSS-code. For now I also like working with VSCode more than with Dreamweaver, that we used in the last course for HTML and CSS.

- **Which techniques did you use?**

On this site I have used mostly partials to divide my CSS code into multiple .scss-files and nesting on for example the menu items. I divided the entire minima theme _layout file together with my own CSS into different partials for each section that I saw nessesary, with the same kind of mindset I've used when programming javascript, one object, page or part of the website per file. I've also modified the existing variables that came with the theme and created some of my own.

- **Pros and cons?**

It was quite complex to get into both CSS Pre-Processors and Jekyll at first. Just navigating through the theme-files, learning about several new file types and searching the documentation for answers, made me feel like I spent more time reading than actually making anything useful. But after making this site I can appreciate this way of making webites more. Being able to have all project files in one editor together with the terminal is great. Markdown makes it easy to write posts and organized CSS makes it easier to find what you need. Also the possibility to work from a theme with full control over everything is very good.

I feel that I'm only scratching the surface of what I can do with Jekyll and SASS and there are still a lot of functionalities that I want to explore, like using mixins and inheritance.

In a small project such as this the ease of debugging my CSS is not much of an issue and I can't notice any change in compile time. I can see how this could be an issue in very large projects, but for now using SASS is definitely mostly a good experience.
  
- **What do you think of static site generators?**

Even though it took a while to get into the mentality of Jekyll and what I could do with it, in the end it was quite easy to build a pretty good looking site with a easy to understand stucture. It was also nice to so easily be able to add blog posts and comment sections, which I had not done before. The fact that it is static, safe and stable on git pages is good and beeing able to use git and github to make commits is making more and more sense. As I said before markdown is simple to use, being able to reuse code through includes 

- **What type of projects are they suitable for?**

I would say this kind of tool is great for getting small to medium size websites up quick and easy. I can see myself putting up these kind of sites fairly quickly once I have done it a few times. Very large websites with it's own servers I guess would be better of with a database-driven design, but I don't have any insight in such projects.

- **What is robots.txt and how have you configure it for your site?**

Robots.txt is a file that allows or disallows search engines from indexing pages and content on a webiste. It is not a security feature in that it doesent prevent people or programs from accessing those parts of your website, it is more of a courtesy. In fact, by listing what you don't want people to access you are directly providing them with that information, since robots.txt is a public file. 

On my website I have only included a basic robots.txt without much content. I have prevented the image and audio files from being listed by search engines, but it is otherwise completly public.

- **What is humans.txt and how have you configure it for your site?**

Humans.txt is a human-readable file that shows the authors and technologies involved in making the website. On this website I have included myself as author and listed the tools that I've used, such as Jekyll.

- **How did you implements comments to blog posts**

I am using Disqus for blog posts on this webiste, try it out below!

- **What is Open Graph and how do you make use of it?**

Open Graph is a format for showing websites in a certain way on other social media platforms. I have included this websites title and piture for example, which will show up when posting the link to this website on for example facebook.