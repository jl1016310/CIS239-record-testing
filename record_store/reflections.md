1. In your own words, explain what require_login() does in index.php. When does it run, and what does it enforce?
require_login() in index.php 
The require_login function checks if a user is logged in and it will redirect to the login page if they are not.


2. Describe the login process step-by-step: from clicking the “Login” button on the form to the moment the user is redirected. Which file and which case handles the logic? What session variables are set after a successful login?


3. When you click “Add to Cart,” what exactly gets stored in $_SESSION['cart']? Which action adds items to the cart, and what type of data is being stored?

 add_to_cart, $_SESSION['cart] will be created if it doesn't exist and the record ID will be added to that array and the data that is being store in the cart is the record ID

4. On the cart page, you use $records_in_cart. Where does that variable come from, and why do we need records_by_ids() instead of just using the raw IDs in the session?
records_in_cart is defined in index.php and we need it because it contains what the user has added to their cart


5. Explain what happens when you click “Complete Purchase.” Which action in index.php runs, what loop is executed, which function writes each record to the database, and which table is updated?



