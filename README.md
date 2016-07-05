# Vulnerable Web-App

##Objective

Let’s introduce Walter Waichai. He likes to use a vulnerable web-app at http://badapp.bloffen.de. He also has an e-mail account which uses the same password as his account in the vulnerable web-app. He also has a Facebook account which uses the aforementioned e-mail address.

Your goal is to use security vulnerabilities in the vulnerable web app to:

- Find out Walter’s e-mail address
- Find out his password
- Hack into his e-mail and facebook  accounts using this information
- The first one who can post the status update “JavaScript Coding Nights Munich Rocks -  a lot” + her / his name on Walter Facebook timeline is the winner :)

You can create accounts on the vulnerable web app using the “register” function. Use the comment function to try an inject JS.

A good way to get started, is to steal Walter’s PHP cookies and then hijack his PHP session using the PHPSESSID cookie. You could also hack other participants and delete their comments and accounts.

 To Help you, we have provided an attack server with the following:

http://attack.bloffen.de/attack.php
- Will save the caller’s IP, a time stamp and all GET parameters passed

http://attack.bloffen.de/data.php
- Will display all data provided by attack.php

# Setup
1. Register at http://badapp.bloffen.de
2. Find JS-injection or other vulnerabilities
3. Use them to get others users cookies
4. Hijack others users' sessions using their cookies
5. Find a find to get passwords in clear text
