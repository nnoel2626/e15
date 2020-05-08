
# Project 3

+ By: *Norcius Noel*
+ Production URL: <http://wirelessmics.nnoel.xyz>

## Feature summary

+ Full Auth implementation where user can register, logIn, reset password.
+ Browser and server Validations for all form inputs
+ Regular Users can search for microphones in their collection, view installed and portable mics. 
+ Admin users have access to both the front and back end of the Application. In the back-end, depending on the admin access level, they can manage users, microphones, and assisting listening devices.
+ Each user has their own account page where they can view their bio, email, password
+ Non-Admin Users can search Microphones and view all front-end resources.
+ Using Gate policies and middleware to restrict users access to different part of the application
+ Adding four feature tests to test login, redirectIfNotLoginTest.
+ Create Form has both browser and sever validation.
+ Edit Form has browser validation.
+ CRUD functionality at the back-end of the application where Admin Users can manage all resources
+ TableSeeders to seed microphones, tags, microphone_tag, users, roles, role_user tables and locations tables
+ implemented delete confirmation form.
+ implement pagination feature to both location and microphone list.

## Database summary

*Describe the tables and relationships used in your database. Delete the examples below and replace with your own info.*

+ My application has 3 tables in total (`users`, `roles`,`role_user`,`tags`,`microphones`, `microphone_tag`, `locations`)
+ There's a many-to-many relationship between `User` and `Role`
+ There's a many-to-many relationship between `Microphone` and `Tag`
+ There's a belongsTo/hasMany relationship between `Microphone` and `Location`

## Testing

    + Browser AuthTest: register, login, registerFailTest, loginFailTest, AuthorizationRequiredTest
         
    + Browser MicrophonesTest:   

## Outside resources

+ https://github.com/Hujjat/laravel-crud/blob/master/resources/views/category/index.blade.php

+ <https://laracasts.com/discuss/channels/laravel/laravel-confirm-delete-in-an-alert-in-my-view>

## Notes for instructor

*Any notes for me to refer to while grading; if none, omit this section*
