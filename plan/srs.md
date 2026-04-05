### User
This table is already there in Laravel

| Field             | Type      | Required | Description                   |
| ----------------- | --------- | -------- | ----------------------------- |
| id                | bigint    | yes      | unique identifier             |
| name              | string    | yes      | name of the user              |
| email             | string    | yes      | email of the user             |
| email_verified_at | timestamp | yes      | if null email is not verified |
| password          | string    | yes      | stored as hash                |
## Events
This table contains events and its description

| Field                 | Type      | Required | Description                    |
| --------------------- | --------- | -------- | ------------------------------ |
| id                    | bigint    | yes      | unique identifier              |
| title                 | string    | yes      | name of the event              |
| slug                  | string    | yes      | url friendly identifier        |
| content               | json      | yes      | description of the event       |
| published_verified_at | timestamp | yes      | if null event is not published |
## News
This table contains news of an event and details of it

| Field                 | Type      | Required | Description                    |
| --------------------- | --------- | -------- | ------------------------------ |
| id                    | bigint    | yes      | unique identifier              |
| title                 | string    | yes      | name of the event              |
| slug                  | string    | yes      | url friendly identifier        |
| content               | json      | yes      | description of the event       |
| event_id              | int       | yes      | foreign key to events          |
| published_verified_at | timestamp | yes      | if null event is not published |
## Pages
This table contains other pages that admin wants to include

| Field                 | Type      | Required | Description                    |
| --------------------- | --------- | -------- | ------------------------------ |
| id                    | bigint    | yes      | unique identifier              |
| title                 | string    | yes      | name of the event              |
| slug                  | string    | yes      | url friendly identifier        |
| content               | json      | yes      | description of the event       |
| published_verified_at | timestamp | yes      | if null event is not published |
## Saptie
For following functions use spatie and any other relevant to the project
- Images and general settings of the page use [spatie media](https://spatie.be/docs/laravel-medialibrary/v11/introduction)
- Menu building for both header and footer [spatie menu builder](https://spatie.be/docs/menu/v3/introduction)
- for global settings use spatie settings  
