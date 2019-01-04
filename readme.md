## WISE - personal finances made easy

#### Application for managing your personal incomes and expenses made in Laravel framework.

Future features:

- Graphical representation of your incomes and expenses.
- Automatic transfer of balance from saving to checking account when goal is reached.
- Prediction of incomes and expenses with ML library.
- Client side rendering of data with React.
- REST API for getting data.
- Better UI.


#### HOW TO CONTRIBUTE
- Fork this project
- Clone your git project locally
```
git clone https://github.com/YOURUSERNAME/wise.git 
cd wise
```
- Add remote stream
```
git remote add upstream https://github.com/RokZabukovec/wise.git
```
- Get the latest changes and push them to your project
```
git pull upstream master && git push origin master
```
- Set up .env configuration files for developing environment
```
cp .env.dev .env
cp laradock-wise/.env.dev laradock-wise/.env
```
- Build the Docker environment and run it
```
cd laradock-wise
docker-compose up -d nginx mysql
```
- Login to workspace (all artisan commands are executed here)
```
docker-compose exec workspace bash
```
- Download vendors
```
composer update
```
- Make a database migration
```
php artisan migrate
```
- Project should be now accessible in the browser
```
http://localhost/
```

Make sure you are in docker-wise folder
- Close all running Containers
```
docker-compose stop
```
- Delete all existing Containers
```
docker-compose down
```
- Build the Docker environment and run it again (if deleted)
```
docker-compose up -d nginx mysql
```
- Enter any container using 
```
docker-compose exec {container-name} bash
docker-compose exec workspace bash
docker-compose exec mysql bash
...
```
- To exit a container, type exit.


#### MODELS
- User => has many Accounts.
- Account => has many Expenses.
- Account => has many Incomes.

#### CONTROLLERS

- LandingPageController
    - index returns a welcome view that is a static page
     with a description of application and linkt to register and login.

- HomeController
    - index returns a users dashboard with users data.
    - updateAvatar method so that the user can change their avatar.
    
- AccountController
    - getAll method returns all accounts that are registered to the user that is currently logged in.
    - getAccount method get the specific account with the id.
    - create method creates new account for the user that is logged in.
    
- ExpenseController
    - addExpense method adds expense which is entered to a form on a account. Expense is then saved in the table expenses.
    - addExpenseToBalance method adds entered amount to a total balance of an account.
    
- IncomeController
    - addIncome method adds income which is entered to a form on a account. Income is then saved in the table incomes.
    - addIncomeToBalance method adds entered amount to a total balance of an account.
