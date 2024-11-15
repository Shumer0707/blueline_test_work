# Project Installation Guide

## 1. Clone the Repository
Open a terminal and run the following command to clone the repository:
```bash
	git clone https://github.com/Shumer0707/blueline_test_work.git
```
## 2. Navigate to the Project Folder
Move into the directory where the project was cloned:
```bash
	cd blueline_test_work
```
## 3. Install Dependencies
Ensure that Composer is installed, then run the following command to install the dependencies:
```bash
	composer install
```
## 4. Install NPM Dependencies
Ensure that Node.js is installed, as it is required for working with Vite. Then, run the command:
```bash
	npm install

	Do not disable this command in the future. Open another terminal.
```
## Create the .env File
If the .env file is missing, create it by copying .env.example:
```bash
	cp .env.example .env
```
## 6. Configure the Database
Open the .env file and specify your database connection details:
```bash
	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=имя_вашей_базы
	DB_USERNAME=ваш_пользователь
	DB_PASSWORD=ваш_пароль
```
## 7. Generate the Application Key
Run the following command:
```bash
	php artisan key:generate
```
## 8. Run the Migrations
Create the database tables by running:
```bash
	php artisan migrate
```
## 9. Clear Caches
Run the following command to clear caches:
```bash
	php artisan optimize:clear
```
## 10. Start the Development Server
Now you can start the Laravel development server:
```bash
	php artisan serve
```
## New users are automatically created as clients.
## To log in as a manager, use the following credentials: 
'email' => admin@mail.ru
'password' => 11111111
