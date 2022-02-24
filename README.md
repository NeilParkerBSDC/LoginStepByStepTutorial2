# Login Step By Step Tutorial 1
This is the basic version of a login for a website. This version adds a bit more security, using session variablles t stop users bypassing the **ServerSideValidator.php** Page

It consists of the following files:

## ServerSide1.php

This file creates a form to be submited to the **ServerSideValidator.php file** which checks the password.

### Added from the [previous version:](https://github.com/NeilParkerBSDC/LoginStepByStepTutorial1)

-  The file is not saved as PHP rather than html
-  PHP code checks to see if the user has been returned from the **ServerSideValidator.php** - if the "verified" session variable is not empty then the user must have been returned from the verifyer file, and so an error message is triggered
-  CSS added to display the error message in red

## ServerSideValidator.php

This checks the password submitted from the form on ServerSide1.html. If it is the same as the stored password then it send you on to the secure page (ServerSide2.html), otherwise it sends you back to the login page (ServerSide1.html)

### Added from the [previous version:](https://github.com/NeilParkerBSDC/LoginStepByStepTutorial1)

-  creates a session variable to pass on a "stamp" saying whether the use has been verified or not

## ServerSide2.html

The "secure" desitniation page

### Added from the [previous version:](https://github.com/NeilParkerBSDC/LoginStepByStepTutorial1)

- Checks whether the session vartiable shows the user has been verified

## Diagram
```
+------------------+
| ServerSide1.html | --Submit----+
+------------------+             |
         ^                       v
         |           +-------------------------+                          
         |           | ServerSideValidator.php |
         |           |                         |
         No ---------|Submitted PW = Stored PW?|
                     +-------------------------+                               
                                 |
                                Yes
+------------------+             |     
| ServerSide2.html | <-----------+
+------------------+

```
