# tf-schwimmbadbau

**tf-schwimmbadbau** is a project repository for building and managing swimming pool construction projects. This repository contains a mix of CSS, JavaScript, PHP, and SCSS files for handling various aspects of the project including planning, portfolio management, and services.

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
- [Features](#features)
- [Getting Started](#getting-started)
- [Contributing](#contributing)
- [License](#license)

## Installation

To install and run the project locally, please follow these steps:

1. **Clone the repository:**

    ```bash
    git clone https://github.com/enisgjinii/tf-schwimmbadbau.git
    cd tf-schwimmbadbau
    ```

2. **Install dependencies:**

    Ensure your system has PHP and Composer installed. Then, from the project directory, run:

    ```bash
    composer install
    ```

3. **Set up the environment:**

    Make sure your local environment is set up to run PHP applications. For example, if using Apache, set your document root to the project directory.

## Usage

Once the installation is complete, you can run the project on your local server, or deploy it to a web server. The main entry point is `index.php`.

You can navigate through the following pages:

- `index.php` - Home Page
- `about.php` - About Us Page
- `contact.php` - Contact Page
- `portfolio.php` - Portfolio Page
- `service.php` - Services Page

## Features

- **Planning**: Interactive planning tools for swimming pool projects (`planung.php`).
- **Portfolio**: Display of previous projects and accomplishments (`portfolio.php`).
- **Service Management**: Comprehensive service offerings page (`service.php`).
- **Contact**: Integrated contact form with email functionality (`contact.php`, `send_email.php`).
- **User Interface**: Clean and responsive design utilizing SCSS and JavaScript.

## Getting Started

To get started with development or deployment, here are the basic steps for setting up your environment:

1. **Set Up Local Server**: Ensure PHP is installed and properly configured on your local machine.
2. **Database Configuration**: Configure your database settings if your project requires database connection.
3. **Run the Server**: Launch your local server and navigate to `localhost` to see the application in action.

    ```bash
    php -S localhost:8000
    ```

    Alternatively, you can set up an Apache or Nginx server pointing to the project root.

## Contributing

Contributions are welcome! If you find any issues or have ideas for improvements, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-name`).
3. Make your changes.
4. Commit your changes (`git commit -m 'Add feature'`).
5. Push to the branch (`git push origin feature-name`).
6. Open a pull request.

Please make sure to update tests as appropriate.

## License

This project is licensed under the MIT License - see the `LICENSE.md` file for details.