# Virtual Campus Bulletin Board (TaarifaBoard)

Prerequisites
-------------

Before proceeding with the setup, ensure you have the following installed:

-   [ ]  PHP (>= 7.3.0)
-   [ ]  Composer
-   [ ]  Node.js (with npm or yarn)
-   [ ]  MySQL or any other database system supported by Laravel

Steps to install the project
-----

1.  Clone the Repository

    `git clone https://github.com/iamuendo/virtualbulletinboard.git`

    ## Or

    Copy the project files from CD then paste in the `Htdocs` folder

2.  Navigate to the Project Directory


    `cd virtualbulletinboard`

3.  Install Composer Dependencies

    `composer install`

4.  Install NPM Dependencies

    `npm install`

    or if using Yarn:


    `yarn install`

5.  Create a Copy of the Environment File

    `cp .env.example .env`

6.  Generate an Application Key

    `php artisan key:generate`

7.  Configure Database

    -   Open the `.env` file and configure database settings such as `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD`.
8.  Run Migrations

    `php artisan migrate`

9.  Link Storage Directory

    `php artisan storage:link`

10. Install NPM Assets

    `npm run dev`

    or if using Yarn:

    `yarn dev`

11. Start the Development Server

    `php artisan serve`

12. Access the Application Visit `http://localhost:8000` in your browser to access the application.