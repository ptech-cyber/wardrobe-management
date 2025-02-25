# Wardrobe Management System - Backend (Laravel 11)

This is the backend of the Wardrobe Management System, built using **Laravel 11**. It provides API endpoints for managing clothing items.

## Features
- User authentication (login/registration)
- Add, edit, and delete clothing items
- Categorize items (tops, bottoms, shoes, etc.)
- Filter and search functionality
- REST API for the frontend (Vue 3)

## Installation

1. **Clone the repository**  
   ```sh
   git clone https://github.com/YOUR_USERNAME/wardrobe-management.git
   cd wardrobe-management

2. Install dependencies
composer install

3. Set up environment variables
cp .env.example .env
php artisan key:generate

4. Configure the database
Update the .env file with your database details
Run migrations:
php artisan migrate

5. Run the server
php artisan serve
The backend will run on http://127.0.0.1:8000

###API Endpoints
Method	Endpoint	Description
GET	   /api/items	Get all items
POST	/api/items	Add a new item
PUT	   /api/items/{id}	Update an item
DELETE	 /api/items/{id}	Delete an item
