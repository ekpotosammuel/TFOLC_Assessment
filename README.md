<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## TFOLC_Assessment


-2 You're tasked with optimizing the loading speed of a critical web page component.
Describe several techniques you'd employ.

ANS: first I will check where the data that are been displayed on the page are coming from, if it's from the data base i will look through the query and restructure it. by doing this I will be able to tailor the query to do the specified task and remove every other unwanted query. 

- 3 How would you implement a real-time chat functionality using WebSockets or
Server-Sent Events (SSE)?

ANS: we can accomplish this using laravel-websockets with Laravel Echo and Pusher package. 

- 5 RESTful API Design: You're designing a RESTful API endpoint for retrieving user
data with pagination. Describe the appropriate HTTP methods (GET, POST, etc.),
response formats (JSON, XML), and error handling strategies you'd use.

ANS: The HTTP method for retrieving user data with pagination is a GET method, laravel comes with an inbuilt method for pagination with which we can just call the pagination method and specify the number of records we want to pull out in a page. for handling errors we can make use of try and catch and also specify a custom response when we encounter an error. response format comes in JSON and it's formated using status and data, the status might be an error code or a message while the data carries the data we want to display.

- 6 Database Optimization: A back-end query is experiencing performance bottlenecks.
How would you identify and address potential issues using database profiling tools or
by optimizing queries with indexing or JOIN techniques?

ANS: Once you have identified the query, consider optimizing its structure. This may involve restructuring the query to reduce the number of rows examined or the complexity of the JOIN operations.
It involves using indexing to improve query performance by allowing the database to quickly locate rows that match a given condition. using the WHERE, ORDERBY, and JOIN clauses to improve performance.

- 8 Building a Secure Login System:
You're tasked with developing a secure login system using either PHP or Node.js for
the back-end and a front-end framework of your choice (React.js is a popular option).
Describe the steps involved in building this system, focusing on:

ANS: Using PHP framework (Laravel) comes with middleware that we can use for securing our login system the default sanctum middleware helps in doing that but we can also modify the system by adding our own custom case to make sure the system follows the auth system that was designed by the engineer 


- 10 User Login and Authentication: Explain the login process, including credential
verification against the database and session management.

ANS: Receiving User Credentials: The client sends a request to the API endpoint with the user's credentials, such as email and password.
Validation: The API validates the incoming request data to ensure that it meets the required format and that all necessary fields are present.
Credential Verification: Once the request is validated, the API uses Laravel's authentication functionality to verify the user's credentials against the database. This typically involves checking if the provided email exists and if the password matches the hashed password stored in the database.
Generating a Token: If the credentials are valid, the API generates a bearer token using Laravel. This token serves as a secure way to authenticate the user for subsequent requests without the need to send their credentials every time.
Handling Failed Login Attempts: If the credentials are invalid, the API returns an error response indicating that the login attempt failed. This helps prevent brute force attacks by limiting the number of failed login attempts allowed within a certain period.
Logout: To logout, the client can simply destroy the generated bearer token 

- 11 How would you ensure secure authentication and prevent session hijacking?
  Use secure authentication mechanisms such as token-based authentication to authenticate users and prevent unauthorized access.
  Set a reasonable session lifetime to limit the duration of a session.
  setting logging attempt.
  
ANS: Use Token-Based Authentication Instead of using session-based authentication.
Set a reasonable expiration time for access tokens to limit their lifespan and reduce the risk of session hijacking.
Ensure that the API is served over HTTPS to encrypt data transmitted between the client and server, preventing eavesdropping and man-in-the-middle attacks.
Rate limit: laravel comes with throttling we can use that to prevent brute-force password combination hack to limit the request that will be sent to the logging phase with the user email trying to use brute-force password combination hack.
Login Attempt: set a number of login attempts before locking an account if all attempts are used up.

- 12 Discuss the technologies or libraries you'd use to connect to a database (MySQL or
other) from your chosen back-end language (PHP or Node.js).

ANS: PHP(Laravel Framework) comes with MySQL default connection which made it easy for us to connect our data to the MySql database it also comes with other database connections eg PgSql. 

- 16 Briefly explain the MVC (Model-View-Controller) architecture and how it's
implemented in Laravel or in any framework of your choice.

ANS: M: this is where the business logic of the application is. In Laravel, also models are PHP classes that interact with the database.
V: this is where all the views i.e. HTML(frontend) of the application, are constructed.
C: Controllers in Laravel are PHP classes that define methods (or actions) to handle incoming requests and they act as an intermediary between the models and views

- 17 How would you perform secure queries to validate user credentials and
potentially retrieve user data after successful login?

ANS: using the laravel inbuilt Auth::attempt(). 

## POSTMAN DOCUMENTATION
- **[DOC](https://documenter.getpostman.com/view/15914392/2sA358dQwh)**

