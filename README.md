# PHP Forms Project

This project includes multiple PHP pages and HTML forms demonstrating how to handle data using GET and POST methods. The project is deployed on Render.com and utilizes Docker for deployment. The application showcases basic web server functionality and form handling.

## Project Overview

### Pages Included:

### Sida 1 (PHP)

This page serves as the starting point for the application. It introduces the basic structure and functionalities of the project. There are no forms on this page but it acts as a foundation for navigating to other pages in the app.

- **Functionality**: Displays a welcome message and an overview of what the project does.

### Sida 2 (PHP)

This page demonstrates handling simple data input from a user. Users can enter a number and click on a button to calculate something, like performing basic arithmetic calculations.

- **Functionality**: Takes user input through a form, processes the data on the server, and displays the result.

### Sida 3 (PHP)

This page performs an operation using user input and outputs results in a similar fashion to the other pages. It also incorporates simple error handling for incorrect input.

- **Functionality**: Processes data, checks for invalid input, and shows either a success message or an error message.

### Sida 4 (PHP)

This page introduces an additional functionality to calculate the area and circumference of a rectangle. It accepts two values from the user (length and width) and calculates the area and circumference based on the formulas.

- **Functionality**:
  - Users enter the length and width of a rectangle.
  - The page validates the inputs, ensuring both values are greater than 0.
  - If valid, the area and circumference are displayed; if invalid, an error message is shown.

### Sida 5 (PHP)

This page displays server-related information such as:

- The server name where the script is running.
- The user’s IP address.
- The file name of the currently running PHP page.
- The port on the user's machine used for communication with the server.
- The HTTP method used to request the page.

- **Functionality**:
  - Utilizes PHP `$_SERVER` superglobal to access various server and environment details.
  - Outputs the gathered information dynamically.

### Sida 6 (HTML and PHP)

This page contains two forms that allow the user to enter their name and phone number using both the **GET** and **POST** methods.

- **Functionality**:

  - **GET Form**:

    - Users can input their name and phone number.
    - The form sends the data via the URL as query parameters.
    - The page shows the user’s inputs, and you can see the data in the URL.

  - **POST Form**:

    - Similar to the GET form, but the data is sent in the body of the request, hidden from the URL.
    - The page shows the user’s inputs without exposing them in the URL.

  - Both forms work independently, and the page displays the data entered in either form.
  - The GET form data is displayed as query parameters in the URL.
  - The POST form data is displayed without appearing in the URL.

  - **Additional Info**:
    - The GET form allows users to see the query string in the browser’s address bar, while the POST form sends data in the background for greater privacy.

## Technologies Used

- **PHP**: Used for server-side logic, including form handling, calculations, and working with server variables (`$_SERVER`).
- **HTML**: The main structure of the web pages, with forms and content.
- **CSS**: Styling and layout, including responsive design using media queries.
- **JavaScript**:
  - Implemented for the hamburger menu to ensure the website is responsive on mobile devices. The JavaScript script handles the toggling of the menu on smaller screens.
  - Enhances user experience by providing smooth navigation for mobile users.
- **Docker**: The project is containerized using Docker, making it easy to deploy on different environments like Render.com.
- **Render.com**: Deployed the application to Render for hosting, ensuring that the app is live and accessible.

## Getting Started

To run this project locally or deploy it to your own server, follow the instructions below.

### Prerequisites

- **PHP**: Ensure PHP is installed on your local machine.
- **Docker**: Required for containerizing and deploying the application.

### Running Locally

- Clone the repository:

  git clone https://github.com/yourusername/php-forms-project.git

- Start the local php hosting server

## Usage

## Conclusion

This project is a simple demonstration of SSR of PHP and handling HTTP requests in PHP using GET and POST methods. It shows how to display server-side information and process form data securely. Docker is used to containerize the application, and it is deployed on Render.com.
