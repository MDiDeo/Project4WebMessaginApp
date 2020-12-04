# Project4WebMessagingApp
Class project for COP 4331C
I honestly do not know why I kept everything in a login folder. However I am honestly too lazy to change it.

The SQL files for the database are included, they may need to either be moved into the login folder, or have everything moved out.

If there are any issues, please email me at migueldideo@knights.ucf.edu

The files work as follows:

  errors.php: sets up an errors array that can be pushed to every time there is an error, preventing non-applicable data from being entered.
  
  inbox.php: page entered from the index, allows user to see all messages sent to them, and allows them to easily reply.
  
  index.php: the main landing page after logging in to your account, or registering for an account.

  login.php: the main login page for the site. also allows user to click a link to register, if they have not yet registered.

  navbar.php: Acts as the navigation bar at the top of all screens after the user has logged in/registered.

  register.php: Account registration page. Includes a link where the user can access the login page for if they already have an account.

  send_message.php: Allows a user to fill out a form to send a message to another specified user.

  server.php: All of the backend stuff that happens to make the site work. Also manages all mysqli database querying and insertion.

  style.css: the design of the whole website (except for the navbar).

  user_list.php: A page that shows a list of all users, their names, and roles, to allow for users who may not know a specific person's username, to be able to message that person.
 
