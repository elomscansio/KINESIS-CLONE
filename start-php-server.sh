#!/bin/bash

PORT=8000  # Change this if you want a different port

echo "Starting PHP development server on http://localhost:$PORT"
php -S localhost:$PORT
