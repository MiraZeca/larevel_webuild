SRB:
Za pokretanje ove aplikacije potrebno da upalite XAMPP, pokrenete start na Apache i MySQL, i da izvršite sledeće komande u terminalu:

1. npm install
2. composer install
3. cp .env.example .env
4. php artisan key:generate
5. u .env fajlu stavite da vam stoji DB_CONNECTION=mysql
6. zatim u .env fajlu odtagujte sledece stavke:
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=webuild
    DB_USERNAME=root
    DB_PASSWORD=
7. php artisan migrate
8. php artisan db:seed
9. php artisan serve
10. Da bi kontakt forma radila ispravno, potrebno je da u .env fajlu prilagodite sledeće vrednosti:
    MAIL_MAILER=smtp  
    MAIL_HOST=smtp.gmail.com  
    MAIL_PORT=587                        # Gmail koristi port 587 za TLS  
    MAIL_USERNAME=tvojemail@gmail.com   # Tvoj Gmail nalog  
    MAIL_PASSWORD=###########    # Unesi svoju lozinku ili specijalnu lozinku (ako koristiš 2FA)  
    MAIL_ENCRYPTION=tls                   # Gmail koristi TLS enkripciju  
    MAIL_FROM_ADDRESS=tvojemail@gmail.com  
    MAIL_FROM_NAME="${APP_NAME}" 

####################################################################################

ENG:
To run this application, you need to enable XAMPP, start Apache and MySQL, and execute the following commands in the terminal:

1. npm install
2. composer install
3. cp .env.example .env
4. php artisan key:generate
5. In the .env file, make sure you set DB_CONNECTION=mysql
6. Then, uncomment and set the following values in the .env file:
    DB_HOST=127.0.0.1  
    DB_PORT=3306  
    DB_DATABASE=webuild  
    DB_USERNAME=root  
    DB_PASSWORD=  
7. php artisan migrate
8. php artisan db:seed
9. php artisan serve
10. In order for the contact form to work correctly, you need to adjust the following values ​​in the .env file:
    MAIL_MAILER=smtp  
    MAIL_HOST=smtp.gmail.com  
    MAIL_PORT=587                        # Gmail uses port 587 for TLS  
    MAIL_USERNAME=youremail@gmail.com   # Your Gmail account  
    MAIL_PASSWORD=###########    # Enter your password or an App Password (if using 2FA)  
    MAIL_ENCRYPTION=tls                   # Gmail uses TLS encryption  
    MAIL_FROM_ADDRESS=youremail@gmail.com  
    MAIL_FROM_NAME="${APP_NAME}"  

