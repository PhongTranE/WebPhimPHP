# Project PHP MVC | Movie Website



| To run this project:
```
    composer install
    php -S localhost:8000
```

Open browser with uri: [http://localhost:8000](http://localhost:8000)

### Structure of project
- public: Contains all assets for frontend
- src: contains all source code
  - Auth: handle auth and session
  - Config: contain variable config
  - Controllers: contains all controller where handle request send from router
  - Databases: handle connect to database
  - Router: handle request from client to controller
  - Views: contains all view for application
  - routes.php: class define route for application
- index.php