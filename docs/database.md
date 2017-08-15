> EduSentral uses relational database. Administrators can use various relational database like `mysql` `sqlite` `pgsql`


## Statistics:

Total Number of Tables: 16

## List of Models
* Answer
* Board
* CorrectAnswer
* History
* Meta
* User
* Role
* Permission
* Subject
* Set
* Result
* Rule

```
answers
+-------------+------------------+------+-----+---------+----------------+
| Field       | Type             | Null | Key | Default | Extra          |
+-------------+------------------+------+-----+---------+----------------+
| id          | int(10) unsigned | NO   | PRI |         | auto_increment |
| question_id | char(36)         | NO   | MUL |         |                |
| content     | text             | NO   |     |         |                |
| sort        | int(10) unsigned | NO   |     |         |                |
| created_at  | timestamp        | YES  |     |         |                |
| updated_at  | timestamp        | YES  |     |         |                |
+-------------+------------------+------+-----+---------+----------------+

board_subject
+------------+------------------+------+-----+---------+----------------+
| Field      | Type             | Null | Key | Default | Extra          |
+------------+------------------+------+-----+---------+----------------+
| id         | int(10) unsigned | NO   | PRI |         | auto_increment |
| board_id   | int(10) unsigned | NO   | MUL |         |                |
| set_id     | int(10) unsigned | NO   | MUL |         |                |
| created_at | timestamp        | YES  |     |         |                |
| updated_at | timestamp        | YES  |     |         |                |
+------------+------------------+------+-----+---------+----------------+

boards
+-------------+------------------+------+-----+---------+----------------+
| Field       | Type             | Null | Key | Default | Extra          |
+-------------+------------------+------+-----+---------+----------------+
| id          | int(10) unsigned | NO   | PRI |         | auto_increment |
| name        | varchar(191)     | NO   | UNI |         |                |
| description | text             | NO   |     |         |                |
| location    | varchar(191)     | NO   |     |         |                |
| slug        | varchar(191)     | NO   | UNI |         |                |
| image       | varchar(191)     | NO   |     |         |                |
| created_at  | timestamp        | YES  |     |         |                |
| updated_at  | timestamp        | YES  |     |         |                |
+-------------+------------------+------+-----+---------+----------------+

correct_answers
+-------------+------------------+------+-----+---------+----------------+
| Field       | Type             | Null | Key | Default | Extra          |
+-------------+------------------+------+-----+---------+----------------+
| id          | int(10) unsigned | NO   | PRI |         | auto_increment |
| question_id | char(36)         | NO   | MUL |         |                |
| answer_id   | int(10) unsigned | NO   | MUL |         |                |
| created_at  | timestamp        | YES  |     |         |                |
| updated_at  | timestamp        | YES  |     |         |                |
+-------------+------------------+------+-----+---------+----------------+

history
+------------+------------------+------+-----+---------+----------------+
| Field      | Type             | Null | Key | Default | Extra          |
+------------+------------------+------+-----+---------+----------------+
| id         | int(10) unsigned | NO   | PRI |         | auto_increment |
| type_id    | int(10) unsigned | NO   | MUL |         |                |
| user_id    | int(10) unsigned | NO   | MUL |         |                |
| entity_id  | int(10) unsigned | YES  |     |         |                |
| icon       | varchar(191)     | YES  |     |         |                |
| class      | varchar(191)     | YES  |     |         |                |
| text       | varchar(191)     | NO   |     |         |                |
| assets     | text             | YES  |     |         |                |
| created_at | timestamp        | YES  |     |         |                |
| updated_at | timestamp        | YES  |     |         |                |
+------------+------------------+------+-----+---------+----------------+

history_types
+------------+------------------+------+-----+---------+----------------+
| Field      | Type             | Null | Key | Default | Extra          |
+------------+------------------+------+-----+---------+----------------+
| id         | int(10) unsigned | NO   | PRI |         | auto_increment |
| name       | varchar(191)     | NO   |     |         |                |
| created_at | timestamp        | YES  |     |         |                |
| updated_at | timestamp        | YES  |     |         |                |
+------------+------------------+------+-----+---------+----------------+

meta
+--------------+------------------+------+-----+---------+----------------+
| Field        | Type             | Null | Key | Default | Extra          |
+--------------+------------------+------+-----+---------+----------------+
| id           | int(10) unsigned | NO   | PRI |         | auto_increment |
| metable_type | varchar(191)     | NO   | MUL |         |                |
| metable_id   | int(10) unsigned | NO   |     |         |                |
| type         | varchar(191)     | NO   |     | null    |                |
| key          | varchar(191)     | NO   | MUL |         |                |
| value        | longtext         | NO   |     |         |                |
+--------------+------------------+------+-----+---------+----------------+

migrations
+-----------+------------------+------+-----+---------+----------------+
| Field     | Type             | Null | Key | Default | Extra          |
+-----------+------------------+------+-----+---------+----------------+
| id        | int(10) unsigned | NO   | PRI |         | auto_increment |
| migration | varchar(191)     | NO   |     |         |                |
| batch     | int(11)          | NO   |     |         |                |
+-----------+------------------+------+-----+---------+----------------+

password_resets
+------------+--------------+------+-----+---------+-------+
| Field      | Type         | Null | Key | Default | Extra |
+------------+--------------+------+-----+---------+-------+
| email      | varchar(191) | NO   | MUL |         |       |
| token      | varchar(191) | NO   |     |         |       |
| created_at | timestamp    | YES  |     |         |       |
+------------+--------------+------+-----+---------+-------+

permission_role
+---------------+------------------+------+-----+---------+-------+
| Field         | Type             | Null | Key | Default | Extra |
+---------------+------------------+------+-----+---------+-------+
| permission_id | int(10) unsigned | NO   | PRI |         |       |
| role_id       | int(10) unsigned | NO   | PRI |         |       |
+---------------+------------------+------+-----+---------+-------+

permissions
+--------------+------------------+------+-----+---------+----------------+
| Field        | Type             | Null | Key | Default | Extra          |
+--------------+------------------+------+-----+---------+----------------+
| id           | int(10) unsigned | NO   | PRI |         | auto_increment |
| name         | varchar(191)     | NO   | UNI |         |                |
| display_name | varchar(191)     | NO   |     |         |                |
| created_at   | timestamp        | YES  |     |         |                |
| updated_at   | timestamp        | YES  |     |         |                |
+--------------+------------------+------+-----+---------+----------------+

questions
+-------------------+------------------+------+-----+---------+-------+
| Field             | Type             | Null | Key | Default | Extra |
+-------------------+------------------+------+-----+---------+-------+
| id                | char(36)         | NO   | PRI |         |       |
| content           | text             | NO   |     |         |       |
| difficulty        | varchar(191)     | YES  |     |         |       |
| marks             | int(11)          | NO   |     |         |       |
| time              | int(11)          | NO   |     |         |       |
| sort              | int(11)          | NO   |     |         |       |
| questionable_type | varchar(191)     | NO   |     |         |       |
| questionable_id   | int(10) unsigned | NO   | MUL |         |       |
| created_at        | timestamp        | YES  |     |         |       |
| updated_at        | timestamp        | YES  |     |         |       |
+-------------------+------------------+------+-----+---------+-------+

results
+---------------------+------------------+------+-----+---------+----------------+
| Field               | Type             | Null | Key | Default | Extra          |
+---------------------+------------------+------+-----+---------+----------------+
| id                  | int(10) unsigned | NO   | PRI |         | auto_increment |
| user_id             | int(10) unsigned | NO   | MUL |         |                |
| resultable_type     | varchar(191)     | NO   |     |         |                |
| resultable_id       | int(10) unsigned | NO   |     |         |                |
| percentage          | int(10) unsigned | NO   |     |         |                |
| incorrect_questions | text             | NO   |     |         |                |
| exam_data           | text             | NO   |     |         |                |
| created_at          | timestamp        | YES  |     |         |                |
| updated_at          | timestamp        | YES  |     |         |                |
+---------------------+------------------+------+-----+---------+----------------+

role_user
+---------+------------------+------+-----+---------+----------------+
| Field   | Type             | Null | Key | Default | Extra          |
+---------+------------------+------+-----+---------+----------------+
| id      | int(10) unsigned | NO   | PRI |         | auto_increment |
| user_id | int(10) unsigned | NO   | MUL |         |                |
| role_id | int(10) unsigned | NO   | MUL |         |                |
+---------+------------------+------+-----+---------+----------------+

roles
+------------+----------------------+------+-----+---------+----------------+
| Field      | Type                 | Null | Key | Default | Extra          |
+------------+----------------------+------+-----+---------+----------------+
| id         | int(10) unsigned     | NO   | PRI |         | auto_increment |
| name       | varchar(191)         | NO   | UNI |         |                |
| all        | tinyint(1)           | NO   |     | 0       |                |
| sort       | smallint(5) unsigned | NO   |     | 0       |                |
| created_at | timestamp            | YES  |     |         |                |
| updated_at | timestamp            | YES  |     |         |                |
+------------+----------------------+------+-----+---------+----------------+

rules
+------------+------------------+------+-----+---------+----------------+
| Field      | Type             | Null | Key | Default | Extra          |
+------------+------------------+------+-----+---------+----------------+
| id         | int(10) unsigned | NO   | PRI |         | auto_increment |
| name       | varchar(191)     | NO   | UNI |         |                |
| content    | text             | NO   |     |         |                |
| created_at | timestamp        | YES  |     |         |                |
| updated_at | timestamp        | YES  |     |         |                |
+------------+------------------+------+-----+---------+----------------+

sessions
+---------------+------------------+------+-----+---------+-------+
| Field         | Type             | Null | Key | Default | Extra |
+---------------+------------------+------+-----+---------+-------+
| id            | varchar(191)     | NO   | PRI |         |       |
| user_id       | int(10) unsigned | YES  | MUL |         |       |
| ip_address    | varchar(45)      | YES  |     |         |       |
| user_agent    | text             | YES  |     |         |       |
| payload       | text             | NO   |     |         |       |
| last_activity | int(11)          | NO   |     |         |       |
+---------------+------------------+------+-----+---------+-------+

sets
+------------+------------------+------+-----+---------+----------------+
| Field      | Type             | Null | Key | Default | Extra          |
+------------+------------------+------+-----+---------+----------------+
| id         | int(10) unsigned | NO   | PRI |         | auto_increment |
| name       | varchar(191)     | NO   |     |         |                |
| slug       | varchar(191)     | NO   | UNI |         |                |
| year       | int(10) unsigned | NO   |     |         |                |
| rule_id    | int(10) unsigned | YES  | MUL |         |                |
| board_id   | int(10) unsigned | NO   | MUL |         |                |
| created_at | timestamp        | YES  |     |         |                |
| updated_at | timestamp        | YES  |     |         |                |
+------------+------------------+------+-----+---------+----------------+

social_logins
+-------------+------------------+------+-----+---------+----------------+
| Field       | Type             | Null | Key | Default | Extra          |
+-------------+------------------+------+-----+---------+----------------+
| id          | int(10) unsigned | NO   | PRI |         | auto_increment |
| user_id     | int(10) unsigned | NO   | MUL |         |                |
| provider    | varchar(32)      | NO   |     |         |                |
| provider_id | varchar(191)     | NO   |     |         |                |
| token       | varchar(191)     | YES  |     |         |                |
| avatar      | varchar(191)     | YES  |     |         |                |
| created_at  | timestamp        | YES  |     |         |                |
| updated_at  | timestamp        | YES  |     |         |                |
+-------------+------------------+------+-----+---------+----------------+

subjects
+-------------+------------------+------+-----+---------+----------------+
| Field       | Type             | Null | Key | Default | Extra          |
+-------------+------------------+------+-----+---------+----------------+
| id          | int(10) unsigned | NO   | PRI |         | auto_increment |
| name        | varchar(191)     | NO   |     |         |                |
| description | text             | YES  |     |         |                |
| image       | varchar(191)     | NO   |     |         |                |
| board_id    | int(10) unsigned | NO   | MUL |         |                |
| rule_id     | int(10) unsigned | YES  | MUL |         |                |
| created_at  | timestamp        | YES  |     |         |                |
| updated_at  | timestamp        | YES  |     |         |                |
+-------------+------------------+------+-----+---------+----------------+

users
+-------------------+---------------------+------+-----+---------+----------------+
| Field             | Type                | Null | Key | Default | Extra          |
+-------------------+---------------------+------+-----+---------+----------------+
| id                | int(10) unsigned    | NO   | PRI |         | auto_increment |
| first_name        | varchar(191)        | NO   |     |         |                |
| last_name         | varchar(191)        | NO   |     |         |                |
| email             | varchar(191)        | NO   | UNI |         |                |
| password          | varchar(191)        | YES  |     |         |                |
| status            | tinyint(3) unsigned | NO   |     | 1       |                |
| confirmation_code | varchar(191)        | YES  |     |         |                |
| confirmed         | tinyint(1)          | NO   |     | 0       |                |
| remember_token    | varchar(100)        | YES  |     |         |                |
| created_at        | timestamp           | YES  |     |         |                |
| updated_at        | timestamp           | YES  |     |         |                |
| deleted_at        | timestamp           | YES  |     |         |                |
+-------------------+---------------------+------+-----+---------+----------------+

```

```
Simple View Of Table
answers
  id  int(10) unsigned
  question_id  char(36)
  content  text
  sort  int(10) unsigned
  created_at  timestamp
  updated_at  timestamp

board_subject
  id  int(10) unsigned
  board_id  int(10) unsigned
  set_id  int(10) unsigned
  created_at  timestamp
  updated_at  timestamp

boards
  id  int(10) unsigned
  name  varchar(191)
  description  text
  location  varchar(191)
  slug  varchar(191)
  image  varchar(191)
  created_at  timestamp
  updated_at  timestamp

correct_answers
  id  int(10) unsigned
  question_id  char(36)
  answer_id  int(10) unsigned
  created_at  timestamp
  updated_at  timestamp

history
  id  int(10) unsigned
  type_id  int(10) unsigned
  user_id  int(10) unsigned
  entity_id  int(10) unsigned
  icon  varchar(191)
  class  varchar(191)
  text  varchar(191)
  assets  text
  created_at  timestamp
  updated_at  timestamp

history_types
  id  int(10) unsigned
  name  varchar(191)
  created_at  timestamp
  updated_at  timestamp

meta
  id  int(10) unsigned
  metable_type  varchar(191)
  metable_id  int(10) unsigned
  type  varchar(191)
  key  varchar(191)
  value  longtext

migrations
  id  int(10) unsigned
  migration  varchar(191)
  batch  int(11)

password_resets
  email  varchar(191)
  token  varchar(191)
  created_at  timestamp

permission_role
  permission_id  int(10) unsigned
  role_id  int(10) unsigned

permissions
  id  int(10) unsigned
  name  varchar(191)
  display_name  varchar(191)
  created_at  timestamp
  updated_at  timestamp

questions
  id  char(36)
  content  text
  difficulty  varchar(191)
  marks  int(11)
  time  int(11)
  sort  int(11)
  questionable_type  varchar(191)
  questionable_id  int(10) unsigned
  created_at  timestamp
  updated_at  timestamp

results
  id  int(10) unsigned
  user_id  int(10) unsigned
  resultable_type  varchar(191)
  resultable_id  int(10) unsigned
  percentage  int(10) unsigned
  incorrect_questions  text
  exam_data  text
  created_at  timestamp
  updated_at  timestamp

role_user
  id  int(10) unsigned
  user_id  int(10) unsigned
  role_id  int(10) unsigned

roles
  id  int(10) unsigned
  name  varchar(191)
  all  tinyint(1)
  sort  smallint(5) unsigned
  created_at  timestamp
  updated_at  timestamp

rules
  id  int(10) unsigned
  name  varchar(191)
  content  text
  created_at  timestamp
  updated_at  timestamp

sessions
  id  varchar(191)
  user_id  int(10) unsigned
  ip_address  varchar(45)
  user_agent  text
  payload  text
  last_activity  int(11)

sets
  id  int(10) unsigned
  name  varchar(191)
  slug  varchar(191)
  year  int(10) unsigned
  rule_id  int(10) unsigned
  board_id  int(10) unsigned
  created_at  timestamp
  updated_at  timestamp

social_logins
  id  int(10) unsigned
  user_id  int(10) unsigned
  provider  varchar(32)
  provider_id  varchar(191)
  token  varchar(191)
  avatar  varchar(191)
  created_at  timestamp
  updated_at  timestamp

subjects
  id  int(10) unsigned
  name  varchar(191)
  description  text
  image  varchar(191)
  board_id  int(10) unsigned
  rule_id  int(10) unsigned
  created_at  timestamp
  updated_at  timestamp

users
  id  int(10) unsigned
  first_name  varchar(191)
  last_name  varchar(191)
  email  varchar(191)
  password  varchar(191)
  status  tinyint(3) unsigned
  confirmation_code  varchar(191)
  confirmed  tinyint(1)
  remember_token  varchar(100)
  created_at  timestamp
  updated_at  timestamp
  deleted_at  timestamp
```

```

```