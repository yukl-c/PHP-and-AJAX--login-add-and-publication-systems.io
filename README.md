# PHP-and-AJAX-login-input-and-publication-systems
PHP-and-AJAX-login-input-and-publication-systems

(Users in login system (username, password, admin or not):
adam, secret1, is admin
james, secret2, is not admin)

# Login system
- users are required to login with username and password with “*” noticed and hints
- Only assigned users that in the user.csv are allowed to login as security
- secret.php: includes a welcome notice, message for users to choose their following actions: administrate, add book, load data, logout
-  Actions of administrate and add book require validation that whether they are admin firstly. Users can access to those pages if they are admin as security.

# Input system
- User can add new book information from login system.
- Some information, e.g. title and author name, are required to input. 
- All input need validation:
  1. Year: between year of 1000 and 2022.
  2. DOI: started with https://.
  3. Others: at least 2 characters.

# Publication system 
- Opens to public: Submit.php used to submit data to booklist1.csv. List.php used to generate booklist table from the csv file with AJAX.
- A button generated to each record in list.php.
- Users can view the details of each record if they press the button.
