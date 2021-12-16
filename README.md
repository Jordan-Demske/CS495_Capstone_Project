# CS495_Capstone_Project
This is the repository for the CS495_Capstone_Project for Jordan Demske, Jesse Coker, and Max Braun, working in conjunction with Pharmacist Robert Gold to develop a website/application to evaluate the effectiveness of drug advertisements.

## API documentation

### Each folder is its own page. Index.php, search.php, index.js, and index.css make up the home page.

### Each page has its own index.php, and possibly a stylesheet, script, and/or self-named .php file.
 
### Tools.php
- get_mysql_connection() - Takes no parameters. Returns false if connection fails. Returns a mysqli connection if the connection succeeds.

### Nav.php
- contains an html nav bar. Shows “Add new review” and “log out” links if the user is logged in. Shows “log in” link if the user is not logged in.

### Header.php
- Defines the root directory of the project in $root. Includes main css stylesheet and main javascript file. Imports jQuery and Google Fonts.

### Home
- Uses Ajax request to search.php to fetch reviews and append them to the document. If no search term is provided it returns all reviews. If a search term is provided it returns reviews that match the search term.

### CSS
- Contains general styling rules for the entire website.

### Login
- Login.js detects submission of login form and sends form data to login.php. Login.php checks for matches in the database and returns false if there are no matches, or returns true and sets $_SESSION[‘username’] if it finds a match.

### New Review
- Contains a webpage for creating a drug advertisement review. It contains radio inputs for assessing the 12 criteria points. It also includes text boxes for a rating percent, “did right” description, “could improve” description, and video URLs. When an advertisement is submitted, new-review.js collects the form data and uses AJAX to pass it to new-review.php. New-review.php checks that no fields are empty. If any fields are empty or the database insertion fails, it returns the error, if everything is successful, it returns ‘0’

### Review
- Contains a webpage for a drug advertisement review. It loads a selected review from the database and displays the review’s criteria, rating, “did right” description, and “could improve” description. It uses $_GET["reviewID"] to retrieve review id from the URL

### Components
- Contains header.php, nav.php, and tools.php. These are to be included for use in other files.

### Tests
- Contains unit tests. To execute the tests, run the following command in a terminal from the project’s root folder:
php vendor/bin/phpunit tests/(TEST FILE NAME).php

### Vendor
- Contains libraries used by “Composer,” a dependency manager for PHP.

### Other Credits:
- [20 Mg Label Blister Pack](https://www.pexels.com/photo/20-mg-label-blister-pack-208512/) licensed under [CC0 1.0 Universal](https://creativecommons.org/publicdomain/zero/1.0/).
