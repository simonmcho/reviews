## Creating a review application for ___

### How to get started:
1. Run `composer update` to update your packages
2. Start `mysql` by running `brew services start mysql
3. Run the app in your local by running `php artisan serve`

### Pre-requisites
- PHP knowledge
- OOP concepts
- Some sql queries
- ORM concepts

### Included Pages/Endpoints
- Homepage
- User registration
- User login
- Product
- Schedule meeting
- Payment
- Notifications

### Relationships
- User has one or more services
- Service belongs to user
- Service has one or more reviews
- Review belongs to service

### WIP
- `SessionsController.php`
- Login/Logout functionality and view
- Archives for sessions. Using query scope to pass filter functionality to model [Video for ref](https://laracasts.com/series/laravel-from-scratch-2017/episodes/20)

#### Important/Further readings:
- [Facades](https://laravel.com/docs/5.7/facades)

### Room for improvement:
- Avoid helper functions. Look at reasons to use facade interfaces and its "static" methods as opposed to helper functions
- Separate the area of concerns in controller(?)
- Comment on functions in Models and Controllers
- Create cleaner views
- Create a consistent styling theme


