![](https://user-images.githubusercontent.com/970858/63474771-d6734700-c469-11e9-83bb-9429da563909.png)

# PHP | ADVANCED

## Introduction

Alright! Let's go a little deeper into the use of PHP. We are going to use everything he have learned up to today to create a cool dynamic website: our own version of Youtube: WiiTube!

Warning! This lab will require you to do some research on your own!

Ready? Let's start

## Requirements

- [Learn how to fork this repo](https://guides.github.com/activities/forking/)
- Clone this repo into your code/labs folder
- An HTTP server installed and configured
- Knowledge on HTML and CSS

## Before we start
As we learned in **Welcome to the Internet** webpages need to be hosted in a server for web browsers to have access to them.

Until now, we have used the VSCode extension **Live Server** to solve this issue, but this presents a problem with PHP: Live Server doesn't run PHP code. To run it, we need an HTTP server configured to run PHP code.

Lucky for you, Reboot laptops have already Apache set up, with PHP already configured, so you can start the lab straight away.

**Warning**
If you want to replicate this lab **at home** you need to set up your own environment.

There are multiple options, like installing an Apache server on your own with PHP, or downloading and installing a similar environment.

Our recommendation if you try to solve this lab at home is to download and install XAMPP, a development environment that already includes Apache, PHP and MariaDB, an SQL database very similar to MySQL.

- [XAMPP](https://www.apachefriends.org/)

There are multiple tutorials online on how to configure it.

## Iteration 1 - Create a site and the starting page

HTTP servers are prepared to hold multiple websites at the same time. Before we start, we need to create a space for ours.

1. Go to `/var/www/html`. This is the folder Apache uses as the root space for the web server.
2. Create a folder called `wiitube` and change directory to access it.
3. Create an `index.php` file inside `shop`.
4. Edit `index.php` and add the following piece of code:
```
<?php
  echo "<h1>Welcome to WiiTube</h1>"
?>
```
5. Open a web browser and access to `http://localhost:80/wiitube`. As we leant in **Welcome to the Internet** `localhost` references our computer and `shop` is the folder we just created. Notice that we need to specify the protocol as `http` and not `https`.

If everything worked out correctly, you should see a page with the heading we just created in `index.php`.

## Iteration 2 - Create you home page

Modify `index.php` to create a normal HTML5 page. Create a layout with:
- A **header** with the text **WiiTube** to the left and a **Login** button to the right
- A **footer** with a centered copyright message
- A empty **main section** with a background color and a **h2** on top with the text "HOME".

Use your knowledge of HTML and CSS to style it amazing

## Iteration 3 - Dynamic content

1. Create a variable in PHP called `$title` and assign the site title to it. Make sure that both the title in the `<head>` and the title in the **header** are rendered from that variable.

2. Create a variable called `$copyright` and assign the copyright text to it. Load the footer text from it.

## Iteration 3 - Database

Create a WiiTube database locally using TablePlus. Create a table called `videos` with the columns `id`, `title`, `description`, and `url`. Make `id` the Primary Key, while all the other fields are required.

- Title: title of the video.
- Description: A short description of the video
- Url: The url for the video.

Add five videos to the table, using urls from actual Youtube videos.

## Iteration 4 - List the Videos
Set up MySQLi as we saw in today's lesson. Get the list of Videos from the DB.

Use a loop to render the list of your products in the **main** section of your site. You can use an Unordered List.

## Iteration 5 - Link to YouTube

Modify each item in the list to link to its respective YouTube video.

## Iteration 6 - Create a Video page

Create a new file called `video.php`. Edit it so it has the same layout as the home page but with the text "Video" on the main section.

Modify your video list so that when you click on any product it redirects you to `video.php`.

## Iteration 7 - Show the correct video

Use **GET** and **query params** so when clicking on a video in the home, the video title and url are sent to `video.php`.

Get the title and show it in place of the text Video.

Look for information on Google on how to embed YouTube videos in HTML. HINT: You may want to look for **<iframe>**.

Embed the Url of the selected video.


## BONUS 1

Style the whole site and make it look as similar to YouTube as possible.

## BONUS 2

Make it responsive.

## BONUS 3

Create a **Users** table in the database, that includes email and password. Create a `login.php` file with a Login form. Check that the username and password introduced belong to an existing user. If so, redirect the user to a new file, listing all movies added by that user.

NOTE - You have to modify the Videos table to make this work.

## Submission

Upon completion, run the following commands:

```
$ git add .
$ git commit -m "done"
$ git push origin main
```

Then create a Pull Request!!

![happy_coding](https://user-images.githubusercontent.com/970858/63899010-c23fc480-c9ea-11e9-84a2-542907e42362.png)
