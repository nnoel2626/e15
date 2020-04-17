*Any instructions/notes in italics should be removed from the template before submitting*

# Project 3
+ By: *Norcius Noel*
+ Production URL: <http://wirelessmics.nnoel.xyz>

## Feature summary

+ Visitors can register/log in
+ Regular Users can search for microphones in their collection, view installed and portable mics. 
+ Admin users have access to both the front and back end of the Application. In the back-end, depending on the admin access level, they can manage users, microphones, and assisting listening devices.
+ Each user has their own account page where they can edit their bio, email, password
+ Users can clone movies from another user's public collection into their collection
+ Using Gate policies and middleware to restrict users access to different part of the application
+ Adding four feature tests to test login, redirectIfNotLoginTest.
+ Create Form has both browser and sever validation.
+ Edit Form browser validation.
+ Create TableSeeders to seed microphones, tags, microphone_tag, users, roles, role_user tables.
  
## Database summary
*Describe the tables and relationships used in your database. Delete the examples below and replace with your own info.*

+ My application has 3 tables in total (`users`, `roles`,`role_user`,`tags`,`microphones`, `microphone_tag`)
+ There's a many-to-many relationship between `User` and `Role`
+ There's a many-to-many relationship between `Microphone` and `Tag`

## Outside resources

*How to implement delete confirmation*
 + https://github.com/Hujjat/laravel-crud/blob/master/resources/views/category/index.blade.php

 + https://laracasts.com/discuss/channels/laravel/laravel-confirm-delete-in-an-alert-in-my-view

## Notes for instructor
*Any notes for me to refer to while grading; if none, omit this section*
