# Exercise in Symfony
This is an empty Symfony project where you should add the missing functionality.
Please *email* the result to me.
For routes use annotations.
For services use XML.

Please implement an API for a todo list.
If there are any questions, please don't hesitate to contact me.

# API
Create a RESTful API to access the two entities explained below (CRUD).
Your endpoints should fit the generally suggested REST standards.
Do not use a rest bundle like FOSRestBundle, that would defeat the purpose of this exercise.

# Entities
Create two entities (and their repositories):

* `List`
* `Item`

Lists have at least an ID and a name.
Items have at least an ID and text.
Items are part of a list.
One item always belongs to one list.
One list can have many items.

# Services
Create at least two API services:

* `ListService`
* `ItemService`

These services manage the items in relation to the API.

Create Manager Services (e.g. `ItemManager)`, which manage database operations on entities.
Implement at least the following methods for the managers:

* `create()`
* `update(Entity $entity)`
* `findById($id)`


# Tests
Also submit all tests you wrote