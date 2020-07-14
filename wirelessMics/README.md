
# Project 3

+ By: *Norcius Noel*
+ Production URL: <https://wirelessmics.nnoel.xyz>

## Feature summary

There are about three hundred wireless microphones for the Harvard FAS campus alone. Some of these wireless mics are installed in classrooms, some are portable and some others only get used for special VIP events. The situation get even more complicated when outside Vendors bring bring their microphones.In order to avoid frequency interference and improve frequency coordination, I develop the application to help technicians figure out the correct microphones to bring to a specific location.

+ Full Auth implementation where user can register, logIn, reset password.
+ Browser and server Validations for all form inputs
+ Regular Users can search for microphones by location, by room and by frequency band.They can view all installed and portable microphones. 
+ Admin users have access to both the front and back end of the Application. In the back-end, depending on the admin access level, they can manage users, microphones, roles, tags and locations.
+ Each user has their own account page where they can view their bio, email.
+ Non-Admin Users can search Microphones and view all front-end resources.
+ Using Gate policies and middleware to restrict users access to different part of the application
+ Adding four feature tests to test login, redirectIfNotLoginTest.
+ Create Form has both browser and sever validation.
+ Edit Form has browser validation.
+ CRUD functionality at the back-end of the application where Admin Users can manage all resources
+ TableSeeders to seed microphones, tags, microphone_tag, users, roles, role_user tables and locations tables
+ implemented delete confirmation form.
+ implemented pagination feature to both location and microphone list in the back-end.
+ implemented HTTPS traffic via "Let’s Encrypt" for the wireless Mics App.

## Database summary

+ My application has 3 tables in total (`users`, `roles`,`role_user`,`tags`,`microphones`, `microphone_tag`, `locations`)
+ There's a many-to-many relationship between `User` and `Role`
+ There's a many-to-many relationship between `Microphone` and `Tag`
+ There's a belongsTo/hasMany relationship between `Microphone` and `Location`

## Testing

+ Total tests : 23 tests, 28 assertions

+ Browser with Seeding: AuthTest (contains register, login, registerFailTest, loginFailTest, AuthorizationRequiredTest).

+ Browser Testing with Model Factory:
  + MicrophonesTest:(testAddingMicrophone, testAddingMicrophoneWithExistingSlug,testEditingMicrophone)
  + ListTest:(testMicrophoneList,testLocationList,testTagList,testRoleList)
  + PageTest:(testWelcomePage,testSupportPage,testAllMicrophonesPage,testInstalledMicrophonesPage,testPortableMicrophonesPage)
  + RoleTest:(testRolesTableHasExpectedColumns,testRoleBelongsToManyUsers)
  + TagTest: (testTagsTableHasExpectedColumns,testTagBelongsToManyMicrophones)
  + UserTest: (testUsersTableHasExpectedColumns,testUserBelongsToManyRoles)

## Outside resources

+ <<https://github.com/jeroennoten/Laravel-AdminLTE> :I customized AdminLTE template for the back-end layout.

+ <<https://github.com/Hujjat/laravel-crud/blob/master/resources/views/category/index.blade.php>: Table blade view.

+ <<https://laracasts.com/discuss/channels/laravel/laravel-confirm-delete-in-an-alert-in-my-view>: Delete confirmation using modal form. But it ended up using Laravel route instead for delete confirmation.

+ <<https://www.5balloons.info/filling-form-data-laravel-dusk/>: Help with Laravel Model factory Test.

+ <https://www.dwightwatson.com/posts/element-is-not-clickable-at-point-laravel-dusk>:Help with page scroll during testing.

+ <https://laravel.com/docs/7.x/testing>


## Notes for instructor
