# Session with Justin 11/11
## Laravel Library
    -   One database seeder to populate books and authors, etc.
    -   3 tables given as a requirement, but we will need more than that.
    -   Don't need seeders or factories, we can use Tinker to sumulate data.
    -   Use POST when you Create
    -   Read is GET
    -   Update is a PUT
    -   Delete is DELETE
    -   Google has a book API that we could use instead of Faker

### MODELS
    -   User -- CRUD
    -   Book -- same CRUD as User
    -   Author -- same CRUD as User
    -   BookAuthor -- same CRUD as User
        -   CRUD the Checkouts
        -   Probably won't ever need a Delete for this one
    -   Registrar (checked in/out) or BookStatus

### CONTROLLERS
    -   UserController
    -   BooksController
    -   AuthorsController
    -   BookAuthorController
    -   RegistrarController

### ROUTES
    -   Done in api.php
