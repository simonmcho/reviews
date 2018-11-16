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

#### Important/Further readings:
- [Facades](https://laravel.com/docs/5.7/facades)