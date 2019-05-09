# Final Project for IS-601 (hoa44@njit.edu)
## FAQ Application:  Added Polling Feature

### Story Feature Description:

We are adding a new polling feature to the FAQ application so that we can gather metrics from the user community to better understand
how we can improve our FAQ application.

In order add in the polling feature I used a pre-existing polling package created for Laravel located [here](https://github.com/AbstractEverything/poll).

I also wanted to lay the foundation for having an administrative area so I created an administrator middleware to protect certain routes from being accessed by regular users.  The admin middleware and protected route
functionality was created based on this well written [article.](https://nick-basile.com/blog/post/how-to-build-an-admin-in-laravel-using-tdd) At this time the admin page is simply a place holder page.

Finally I created a series of additional pages that include the polls users should answer. I have included bootstrap navigation buttons to allow users to progress through the poll questions in a logical way, and there is some
conditional routing that indicate when a user has reached the end of the polls.  The poll definition, polls selection options and the vote results are stored in 3 seperate database tables.

Both the poll and admin middleware were created using a test driven approach

### Usage Instructions for Grading:


In order to utilize the User polling feature and to verify that the Admin middleware is setup and working please follow these instructions.

1. Access the FAQ application here [https://faq-hoa44.herokuapp.com/]

2. Use the following user credentials to login to the FAQ App.

    - email:  erik.champlin@example.org
    - pwd: password
    
    You should see at the top of the Home page a link "User Survey Polls Are Open'.  Following this link will take you through 4 survey polls, the 4th and final poll will have a red button labeled "The End" which will 
    redirect you back to the home page.
    
3.  Logout of the FAQ application and log in as an administrator user with the following credentials.
    
    - email: oschultz@example.org
    - pwd: password
    
4.  Under the 'My Account'  drop down menu you should now see and Admin link which, when clicked will take you to the middleware protected admin page that says "For admin users only"

5.  There are 3 Feature tests as follows:  PollControllerTest.php, VoteControllerTest.php, and AdminTest.php.  The Unit UserTest.php was updated to include admin user tests.  If you want to run these test it is
 recommended to backup the current sqlite db, and reseed the database first or tests will fail.
