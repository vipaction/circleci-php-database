# Demo of basic symfony 4 project and circle CI config

Shows how to create a test that talks to a database. 

Make sure your test database config (see: `.env.test`) matches the database setup in `.circleci/config.yml`. In this example:

`.env.test`
```
DATABASE_URL=mysql://demo:mypass@127.0.0.1:3306/demo
```

`.circleci/config.yml`
```
    - run: mysql -h 127.0.0.1 -u root -e "CREATE DATABASE demo;"
    - run: mysql -h 127.0.0.1 -u root -e "CREATE USER demo IDENTIFIED BY 'mypass';"
    - run: mysql -h 127.0.0.1 -u root -e "GRANT ALL ON demo.* TO demo;"
```
