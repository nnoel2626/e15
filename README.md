# e15

CSCI E-15 Web Server Frameworks with Laravel/PHP


# Step to push code to Github

git status
git add --all
git commit -m "added StringProcessor class and initial commit for bookmark."
git push

# Production server

ssh root@198.211.101.26
composer create-project --prefer-dist laravel/laravel p2 "6.*.*"
cd p2
chmod -R 777 storage
chmod -R 777 bootstrap/cache


how to retain data with invalid form input using balde syntx

Any instructions/notes in italics should be removed from the template before submitting

Project 3
By: your first and last name
Production URL: http://e15p3.yourdomain.com
Feature summary
Outline a summary of features that your application has. The following details are from a hypothetical project called "Movie Tracker". Note that it is similar to Bookmark, yet it has its own unique features. Delete this example and replace with your own feature summary

Visitors can register/log in
Users can add/update/delete movies in their collection (title, release date, director, writer, summary, category)
There's a file uploader that's used to upload poster images for each movie
User's can toggle whether movies in their collection are public or private
Each user has a public profile page which presents a short bio about their movie tastes, as well as a list of public movies in their collection
Each user has their own account page where they can edit their bio, email, password
Users can clone movies from another user's public collection into their collection
The home page features
a stream of recently added public movies
a list of categories, with a link to each category that shows a page of movies (with links) within that category
Database summary
Describe the tables and relationships used in your database. Delete the examples below and replace with your own info.

My application has 3 tables in total (users, movies, categories)
There's a many-to-many relationship between movies and categories
There's a one-to-many relationship between movies and users
Outside resources
Your list of outside resources go here

Notes for instructor
Any notes for me to refer to while grading; if none, omit this section