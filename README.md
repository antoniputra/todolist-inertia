# Todolist

Demonstrate how start a project with Laravel, Inertia, Vue, Tailwind.

This project are for Educational Purpose due this talk: LinkPresentationHere

## How To

```bash
# Clone this project
git clone https://github.com/antoniputra/todolist-inertia.git

# Enter to the project folder
cd todolist-inertia

# Install PHP Dependencies
composer install

# Install JS Dependencies
npm install

# Create database (at this case we use sqlite)
touch database/database.sqlite

# copy example environment
cp .env.example .env

# Generate security key
php artisan key:generate

# Build the assets to start development
npm run dev

# or build the assets as production
# when we finish development
npm run build
```

## Credits

Mockup: [https://codepen.io/robstinson/pen/YzGLMYw](https://codepen.io/robstinson/pen/YzGLMYw)