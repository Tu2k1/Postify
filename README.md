# Postify

![GitHub](https://img.shields.io/github/license/Tu2k1/Postify?style=flat-square)
![GitHub repo size](https://img.shields.io/github/repo-size/Tu2k1/Postify?style=flat-square)
![GitHub last commit](https://img.shields.io/github/last-commit/Tu2k1/Postify?style=flat-square)

Postify is a web application developed using the Laravel PHP framework for creating and managing posts.

## Table of Contents
- [Installation](#installation)
- [Usage](#usage)
- [License](#license)

## Installation
Follow these steps to get Postify up and running on your local machine:

1. Clone the repository using the following command:
```
git clone https://github.com/Tu2k1/Postify.git
```
2. Change your working directory to the project folder:
```
cd Postify
```
3. Install the project dependencies using Composer:
```
composer install
```

4. Create a copy of the `.env.example` file and rename it to `.env`. Update the `.env` file with your database configuration.

5. Generate an application key:
```
php artisan key:generate
```
6. Run the database migrations to create the necessary tables:
```
php artisan migrate
```
7. Run the tailwind so the styles of the website shows:
```
npm run dev
```
8. Open another terminal and serve the application:
```
php artisan serve
```
Your Postify application should now be accessible at `http://localhost:8000`.

## Usage
Here are some basic usage instructions for Postify:

- Create a new account or log in if you already have one.
- Create and manage posts by adding, editing, or deleting them.
- Explore the features and functionalities to discover more about Postify.

## License
This project is open-source and available under the [MIT License](https://github.com/Tu2k1/Postify/blob/main/LICENSE). You can find more details in the [LICENSE](LICENSE) file.

---

Happy posting with Postify! If you encounter any issues or have questions, feel free to open an issue on the GitHub repository.   
