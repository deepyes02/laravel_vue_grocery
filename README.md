# Full Stack Decoupled Web Application

### Note: This is a work in progress. 
## Introduction
I have been coding for a while and I decided to build something that's functional
from the ground up. Of course, this is a personal project and it's only aim is to make me a better
person as a developer.

Right now, the app is able to display data and post data, however,
complex implementation remains to be done.

## Application
A web application that stores grocery shopping and shows budget based on it.
May be later the user will be able to view data based on months, prices, spendings, but right now it's in infant stage.

## Updating done
This application was first written on php 7.4 and earlier version of laravel. Then later I
installed php 8 and updated __composer and package json__ files accordingly.

At the time of writing all the dependencies were at the latest updated versions.

## Goals
- Create, Read, Update & Destory functions and classes
- Create a Laravel Backend Framework with Rest API

## Stacks / Software Used
- Laravel 8.4.0
- PHP 8
- Vue JS 3.1.2
- tailwind CSS
- nodejs => npm/yarn
- composer
- laragon
- PHP Storm / VS Code Editor
- Eloquent ORM for MYSQL
- To implement
    - PHP Unit
    - X-Debug
    - Vue Router and more ....
    
## Documentation
### API Endpoints
- Get Products: http://localhost/api/products/
- Post Products: http://localhost/api/products/
- Get Products By id: http://localhost/api/products/{id:integer}
- Post Products By id: http://localhost/api/products/{id:integer}

## Testing the application
I've not started doing it yet. But will soon do this.

## Challenges
- Encoding POST Data properly with Axios.
- Understanding Components and their implementations with props.
- Configuring server to send response based on data posted. (Right now duplicate data shows 200 ok, even though it's not updated)


## Helpful Resources
- Laravel 8 Documentation
- Vue 3 Documentation
- Laragon Documentation
