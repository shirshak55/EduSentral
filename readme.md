# Edusentral Educational System

## Description
Edusentral is an online learning portal made for students who want to increase their productivity in studies. It is mainly for student who are going to give entrance examination.

## Initial Setup
* Clone this repo
* Run `$ composer install`

## ToDo
* Add Trackable Type And Total Number of tracks in Board

### How website works?
* First user need to choose `board`	like `KU`, `IOE`, `St. Xavier`
* If they choose board:
* They need to choose whether they want to use Sets Or Subjects
* If they click sets, Various Sets like `KU Question Set 2010`, `KU Question Set 2011` will appear.
* If they click subjects, Various Subjects like `Physics`, `Chemistry`, `Maths` will appear.
* If they choose sets examination will start immediatly.
* If they choose `Physics`, `Chemistry` etc. they can choose various topics like `Measurement`, `Light` or `Random One`.
* If they choosed `General Subjects` like `Maths`


## Database Organization
* Tracks stores like KU Physics, KU Sets 1,IOE Physics, IOE Set 1

## Tables
> EduSentral uses relational database. Administrators can use various relational database like `mysql` `sqlite` `pgsql`

```
Statistics:

Total Number of Tables: 16
```

### User

```
Table Name: users
Description: It stores basic user informations like their login details etc..
```

| Attribute | Type | Details |
|---|---|---|
| id | integer | autoincrement |
| name | string | Full Name of User |
| username | string | unique |
| email_address | string | unique, Nullable |
| password | string | encrypted using bcrypt |
| avatar | string | Default: default-avatar.png |
| remember_token | string | encrypted  |

### Password Reset

```
Table Name: password_reset
Description: It stores unique token and user email for facilating password reset
```

| Attribute | Type | Details |
|---|---|---|
|email|string||
|token|string||
|created_at|timestamps||

### Metable

```
Table Name: meta
Description: It stores additional details using polymorphism. Like We can add more details about `user` like this `bio`
```

| Attribute | Type | Details |
|---|---|---|
|id|Integer|autoincremented|
|metable_type|string|like User,Board etc.|
|metable_id|integer|like corresponding user_id, board_id|
|type|string|default:null like array, json etc.|
|key|string|indexed|
|value|longtext||


### Board


```
Table Name: boards
Description: It includes details of boards like `St Xavier` `Kathmandu University` `IOE` `IOM`.
```

| Attribute | Type | Details |
|---|---|---|
| id| integer| autoincrement|
| name| string||
| description| text|nullable|
| location| string|nullable|
| image| string|nullable,path to image including its name|

### Set


```
Table Name: sets
Description: Example is `IOE SET 2017` `KU Set 2016`
```

| Attribute | Type | Details |
|---|---|---|
| id | integer| autoincrement|
| name | string|  |
| year | Timestamp|  |
| board_id|unsigned integer| ID of corresponding board|
| question_rules_id| integer| indexed,nullable, points to row in question_rules table  |


###  Subjects


```
Table Name: subjects
Description: It stores subjects like `Physics`, `Chemistry` etc..
```

| Attribute | Type | Details |
|---|---|---|
| id| integer||
| name| string||
| description| text|nullable|
| image| text|nullable|


### Board Subject


```
Table Name: board_subject
Description: It  relates subjects and boards
```

| Attribute | Type | Details |
|---|---|---|
| id | integer|  autoincrement|
| board_id | unsigned integer | Board ID |
| subject_id | unsigned integer | Subject ID  |

### Question

```
Table Name: questions
Description: It is the table which store details of question like its content, difficulty, marks, time.
```

| Attribute | Type | Details |
|---|---|---|
| id| integer| autoincrement|
| content| text|  |
| difficulty| string| nullable |
| marks| integer| |
| time| integer| Time in second|



### Answer

```
Table Name: answers
Description: It contains answer to MCQ . It contains both correct and wrong answer.
```

| Attribute | Type | Details |
|---|---|---|
| id |integer| autoincrement |
| question_id| integer| indexed, unsigned, points to question table |
| content| text|  |

### Correct Answer


```
Table Name: correct_answers
Description: It is pivot table for addressing correct answer from the question.
```

| Attribute | Type | Details |
|---|---|---|
| id |integer| autoincrement |
| question_id| integer| indexed,unsigned, references id on questions table |
| answer_id| integer| indexed,unsigned, references id on answers table|


### Rule


```
Table Name: rules
Description: Various Rules like `IOE Rules`, `St. Xavier` Rules will be stored here.
```

| Attribute | Type | Details |
|---|---|---|
| id| integer| autoincrement|
| name| string|  |
| content| text|

## Tables Regarding Roles And Permissions

> There are altogether 5 tables for roles and permission management.