# Edusentral Educational System

## Description
Edusentral is an online learning portal made for students who want to increase their productivity in studies. It is mainly for student who are going to give entrance examination.

## Initial Setup
* Clone this app
```
$ git clone git@github.com:bloggervista/EduSentral.git
```
* After cloning copy the environment files
```
cp .env.example .env
```
* Edit database details so we have database access.
* For google, facebook login add providers respective public and private key and use proper redirection url
* Migrate the database using
```
$ php artisan migrate
```
* After that generate RSA key
```
$ php artisan key:generate
```
* Point your nginx to public folder which is inside the main folder.

### Api Endpoints
> This app is made mostly for mobile so you can easily use our public api . Those documentations are inside docs/api.md file

### How website works?
* First user need to choose `board`	like `KU`, `IOE`, `St. Xavier`
* If they choose board:
* They need to choose whether they want to use Sets Or Subjects
* If they click sets, Various Sets like `KU Question Set 2010`, `KU Question Set 2011` will appear.
* If they click subjects, Various Subjects like `Physics`, `Chemistry`, `Maths` will appear.
* If they choose sets examination will start immediatly.
* If they choose `Physics`, `Chemistry` etc. they can choose various topics like `Measurement`, `Light` or `Random One`.
* If they choosed `General Subjects` like `Maths`

## Tables
> Please see inside docs/database.md for database tables.