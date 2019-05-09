# Final Project for IS-601 (hoa44@njit.edu)
## FAQ Application:  Added Polling Feature

### Feature Description:

We are adding a new polling feature to the FAQ application so that we can gather metrics from the user community to better understand
how we can improve our FAQ application.

In order add in the polling feature I used a pre-existing polling package created for Laravel located [here](https://github.com/AbstractEverything/poll).

I also wanted to lay the foundation for having an administrative area so I created an administrator middleware to protect certain routes from being accessed by regular users.  The admin middleware and protected route
functionality was created based on this well written [article.](https://nick-basile.com/blog/post/how-to-build-an-admin-in-laravel-using-tdd) At this time the admin page is simply a place holder page.

Finally I created a series of additional pages that include the polls users should answer. I have included bootstrap navigation buttons to allow users to progress through the poll questions in a logical way, and there is some
conditional routing that indicated when a user has reached the end of the polls.

Both the poll and admin middleware were created using a test driven approach

### Usage Instructions:
