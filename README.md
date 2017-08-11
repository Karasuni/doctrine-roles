# Doctrine Roles

Simple example of a doctrine environment featuring users and groups.

## How to use

1. Install packages

        composer install

2. Update references to namespaces      

        composer refresh

3. Configure the database

    3.1. Create the file database-secret.json in `/config/` and fill in the parameters

    3.2. Create the database tables
    
        composer doctrine-update
        
4. Setup initial data

    Creates a user `tomb` and group `admin`. Then adds the user to the group. 

        composer setup
        
        
5. Test target code

    Tests if user `tomb` is part of the group `admin`.   

        composer test
 

## The Model

### User

| field        | type     |
|--------------|----------|
| id           | string   |
| firstName    | string   |
| lastName     | string   |
| mailAddress  | string   |
| office       | string   |
| lastModified | DateTime |
| groups       | Group[]  |

### Group

| field       | type   |
|-------------|--------|
| id          | int    |
| name        | string |
| description | string |
| users       | User[] |

### Groups_Users

A table to manage the many-to-many relationship with additional properties [[Ref](https://groups.google.com/d/msg/doctrine-user/0dh8lgUudvc/-NB_cOXT9ggJ)].

| field    | type   |
|----------|--------|
| group_id | Group  |
| user_id  | User   |
| role     | string |