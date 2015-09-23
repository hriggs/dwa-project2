# DWA-15 P2: PHP Basics / xkcd Password Generator 

## Live URL
<http://p2.hriggs.me>

## Description
The Project 2 xkcd password generator site for the class CSCI E-15: Dynamic Web Applications. 
It explains what a xkcd password, includes a comic about the subject, and allows the user 
to randomly generate this style of password. The user has the option to customize her password 
via a form. 

## Demo
<https://youtu.be/o1Ioq2hB_6I>

## Details for teaching team
The challenges I chose to implement are: allowing the user to specify how many numbers and 
symbols to include and whether or not they will be at the end or randomly placed between words 
(there can be a different number of letters and symbols and they can be placed differently),
allowing the user to choose what the words are separated by (hyphens, spaces or no characters), and 
allowing the user to choose the case of the words (all upper, all lower or the starting letter
capitalized). I also scraped the pages of <http://www.paulnoll.com/Books/Clear-English/> to populate
an array of words that is saved in a separate PHP file (so that the pages are not scraped every time the 
page is loaded in order to speed up loading time). I also did some form error checking: if the user puts in 
a character that is not a digit, then a message saying a password cannot be created (and why) is displayed.  
The site is also responsive via Boostrap and media queries. 
I also want to apologize about the white noise in the background of my demo video! I tried to record the video 
in different ways, but nothing seemed to fix the issue. 

## Outside code
* Bootstrap: <http://getbootstrap.com/>
* Image: <http://xkcd.com/license.html>
