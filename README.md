<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## TFOLC_Assessment


- RESTful API Design: You're designing a RESTful API endpoint for retrieving user
data with pagination. Describe the appropriate HTTP methods (GET, POST, etc.),
response formats (JSON, XML), and error handling strategies you'd use.

ANS: The HTTP method for retrieving user data with pagination is a GET method, laravel comes with an inbuilt method for pagination with which we can just call the pagination method and specify the number of records we want to pull out in a page. for handling errors we can make use of try and catch and also specify a custom response when we encounter an error. response format comes in JSON and it's formated using status and data, the status might be an error code or a message while the data carries the data we want to display.

- Database Optimization: A back-end query is experiencing performance bottlenecks.
How would you identify and address potential issues using database profiling tools or
by optimizing queries with indexing or JOIN techniques?

ANS: Once you have identified the query, consider optimizing its structure. This may involve restructuring the query to reduce the number of rows examined or the complexity of the JOIN operations.
It involves using indexing to improve query performance by allowing the database to quickly locate rows that match a given condition. using the WHERE, ORDERBY, and JOIN clauses to improve performance.

- Building a Secure Login System:
You're tasked with developing a secure login system using either PHP or Node.js for
the back-end and a front-end framework of your choice (React.js is a popular option).
Describe the steps involved in building this system, focusing on:

ANS: Using PHP framework (Laravel) comes with middleware that we can use for securing our login system the default sanctum middleware helps in doing that but we can also modify the system by adding our own custom case to make sure the system follows the auth system that was designed by the engineer 


- User Login and Authentication: Explain the login process, including credential
verification against the database and session management.

ANS: 

- How would you ensure secure authentication and prevent session hijacking?
  Use secure authentication mechanisms such as token-based authentication to authenticate users and prevent unauthorized access.
  Set a reasonable session lifetime to limit the duration of a session.
  setting logging attempt.

- How would you perform secure queries to validate user credentials and
potentially retrieve user data after successful login?

ANS: using the laravel inbuilt Auth::attempt(). 
