# Kinesis Clone

A clone of the Kinesis platform built with PHP and Tailwind CSS.

## Prerequisites

Before you begin, ensure you have the following installed on your system:

- **PHP** (>= 8.3.19)
- **Node.js** (>= 14.x) and **npm** (or **yarn**) for managing frontend dependencies

## Installation

Follow these steps to set up the project on your local machine:

1. **Clone the repository**:
   ```bash
   git clone https://github.com/your-username/kinesis-clone.git
   cd kinesis-clone
   ```

2. **Install Node.js dependencies**:
   ```bash
   npm install
   ```

3. **Set up the environment**:
   - Ensure the `start-php-server.sh` script is executable:
     ```bash
     chmod +x ./start-php-server.sh
     ```

4. **Build Tailwind CSS**:
   - If you want to build Tailwind CSS manually, run:
     ```bash
     npm run tailwind
     ```

## Running the Project

1. **Start the development server**:
   Use the following command to start both the PHP server and Tailwind CSS in watch mode:
   ```bash
   npm run dev
   ```

2. Open your browser and navigate to:
   ```
   http://localhost:8000
   ```

## Project Structure

- **PHP Server**: The PHP development server is started using the `start-php-server.sh` script.
- **Tailwind CSS**: Tailwind CSS is built using the `@tailwindcss/cli` and outputs to `./assets/css/tailwind.css`.

## Scripts

Here are the available npm scripts:

- **`npm run dev`**: Starts the PHP server and Tailwind CSS in watch mode concurrently.
- **`npm run tailwind`**: Builds Tailwind CSS and watches for changes.
- **`npm run start`**: Starts the PHP server only.

## Contributing

Feel free to fork this repository and submit pull requests. Contributions are welcome!

## License

This project is licensed under the [MIT License](LICENSE).
