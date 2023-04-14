# Source_code


This is our project from our Web Programming class. The main concept in this project is MVC(Model-View-Controller) model.


Main topic:
- In this project, we build a application for 2 main actor, user and admin:
  + In this context, users can do some actions like many actions in e-commerce webs application(login, buy product, edit profile - include name, gender,... and upload avatar).
  + Admins can do some actions that user can do. In addition, admin can manage user account - edit some users information fields, create, delete user account, can manage product - edit, create, delete products. Also, we have implemented pagination for user and product in admin sites. we can search according to the user's information or product's information provided.

According MVC architectural pattern, we use:

Set up:
- HTML, CSS, JS: front-end(no additional framework).
- PHP: back-end(no additional framework).
- MySQL: database.

All back-end set up (MySQL and PHP) can be finished by installing XAMPP technical stack (can download XAMPP follow this link: "https://www.apachefriends.org/download.html"). You can find the way to run back-end in XAMPP on many platforms. With XAMPP, server can run on localhost that's very effective to develop for personal purposes.
Once you finished setting up for XAMPP, you should upload database.sql into phpadmin or something similar in different in platform or IDE.

Note:
- When setting up XAMPP, you should let everything at default. If you change something like password of phpadmin, you cannot connect to phpadmin to get database. If you have password been changed, you can find the way to handle it with this project in here "https://github.com/GiaPhong132/Demo-Database-Cinema/blob/main/README.md".

Run:
- After all, copy this "localhost/Source_code/" and past into URL bar in your browser to get the result.

Improvement:
- In the future, we build a similar project, but replace MySQL with MongoDB. With XAMPP + MongoDB, we build IoT application to track operation of IoT devices in customer's house. In addition, we also build mobile app for client side to interact with customer's devices. We will publish it as soon as we can. 
