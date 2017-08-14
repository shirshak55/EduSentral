> EduSentral uses relational database. Administrators can use various relational database like `mysql` `sqlite` `pgsql`

```
Statistics:

Total Number of Tables: 16
```

## List Of Tables
|Table Name|
|---|
| answers        |
| board_subject  |
| boards         |
| correct_answers|
| history        |
| history_types  |
| meta           |
| migrations     |
| password_resets|
| permission_role|
| permissions    |
| questions      |
| results        |
| role_user      |
| roles          |
| rules          |
| sessions       |
| sets           |
| social_logins  |
| subjects       |
| users          |

+-------------+------------------+------+-----+---------+----------------+
| Field       | Type             | Null | Key | Default | Extra          |
+-------------+------------------+------+-----+---------+----------------+
| id          | int(10) unsigned | NO   | PRI |         | auto_increment |
| question_id | int(10) unsigned | NO   | MUL |         |                |
| content     | text             | NO   |     |         |                |
| sort        | int(10) unsigned | NO   |     |         |                |
| created_at  | timestamp        | YES  |     |         |                |
| updated_at  | timestamp        | YES  |     |         |                |
+-------------+------------------+------+-----+---------+----------------+

board_subject (rows: 0)
+------------+------------------+------+-----+---------+----------------+
| Field      | Type             | Null | Key | Default | Extra          |
+------------+------------------+------+-----+---------+----------------+
| id         | int(10) unsigned | NO   | PRI |         | auto_increment |
| board_id   | varchar(191)     | NO   |     |         |                |
| set_id     | int(10) unsigned | NO   |     |         |                |
| created_at | timestamp        | YES  |     |         |                |
| updated_at | timestamp        | YES  |     |         |                |
+------------+------------------+------+-----+---------+----------------+

boards (rows: 4)
+-------------+------------------+------+-----+---------+----------------+
| Field       | Type             | Null | Key | Default | Extra          |
+-------------+------------------+------+-----+---------+----------------+
| id          | int(10) unsigned | NO   | PRI |         | auto_increment |
| name        | varchar(191)     | NO   | UNI |         |                |
| description | text             | NO   |     |         |                |
| location    | varchar(191)     | NO   |     |         |                |
| image       | varchar(191)     | NO   |     |         |                |
| created_at  | timestamp        | YES  |     |         |                |
| updated_at  | timestamp        | YES  |     |         |                |
| slug        | varchar(191)     | YES  |     |         |                |
+-------------+------------------+------+-----+---------+----------------+

correct_answers (rows: 25)
+-------------+------------------+------+-----+---------+----------------+
| Field       | Type             | Null | Key | Default | Extra          |
+-------------+------------------+------+-----+---------+----------------+
| id          | int(10) unsigned | NO   | PRI |         | auto_increment |
| question_id | int(10) unsigned | NO   | MUL |         |                |
| answer_id   | int(10) unsigned | NO   | MUL |         |                |
| created_at  | timestamp        | YES  |     |         |                |
| updated_at  | timestamp        | YES  |     |         |                |
+-------------+------------------+------+-----+---------+----------------+

history (rows: 2)
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

history_types (rows: 2)
+------------+------------------+------+-----+---------+----------------+
| Field      | Type             | Null | Key | Default | Extra          |
+------------+------------------+------+-----+---------+----------------+
| id         | int(10) unsigned | NO   | PRI |         | auto_increment |
| name       | varchar(191)     | NO   |     |         |                |
| created_at | timestamp        | YES  |     |         |                |
| updated_at | timestamp        | YES  |     |         |                |
+------------+------------------+------+-----+---------+----------------+

meta (rows: 0)
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

migrations (rows: 21)
+-----------+------------------+------+-----+---------+----------------+
| Field     | Type             | Null | Key | Default | Extra          |
+-----------+------------------+------+-----+---------+----------------+
| id        | int(10) unsigned | NO   | PRI |         | auto_increment |
| migration | varchar(191)     | NO   |     |         |                |
| batch     | int(11)          | NO   |     |         |                |
+-----------+------------------+------+-----+---------+----------------+

password_resets (rows: 0)
+------------+--------------+------+-----+---------+-------+
| Field      | Type         | Null | Key | Default | Extra |
+------------+--------------+------+-----+---------+-------+
| email      | varchar(191) | NO   | MUL |         |       |
| token      | varchar(191) | NO   |     |         |       |
| created_at | timestamp    | YES  |     |         |       |
+------------+--------------+------+-----+---------+-------+

permission_role (rows: 1)
+---------------+------------------+------+-----+---------+----------------+
| Field         | Type             | Null | Key | Default | Extra          |
+---------------+------------------+------+-----+---------+----------------+
| id            | int(10) unsigned | NO   | PRI |         | auto_increment |
| permission_id | int(10) unsigned | NO   | MUL |         |                |
| role_id       | int(10) unsigned | NO   | MUL |         |                |
+---------------+------------------+------+-----+---------+----------------+

permissions (rows: 1)
+--------------+------------------+------+-----+---------+----------------+
| Field        | Type             | Null | Key | Default | Extra          |
+--------------+------------------+------+-----+---------+----------------+
| id           | int(10) unsigned | NO   | PRI |         | auto_increment |
| name         | varchar(191)     | NO   | UNI |         |                |
| display_name | varchar(191)     | NO   |     |         |                |
| created_at   | timestamp        | YES  |     |         |                |
| updated_at   | timestamp        | YES  |     |         |                |
+--------------+------------------+------+-----+---------+----------------+

questions (rows: 22)
+-------------------+------------------+------+-----+---------+----------------+
| Field             | Type             | Null | Key | Default | Extra          |
+-------------------+------------------+------+-----+---------+----------------+
| id                | int(10) unsigned | NO   | PRI |         | auto_increment |
| content           | text             | YES  |     |         |                |
| difficulty        | varchar(191)     | YES  |     |         |                |
| marks             | int(11)          | NO   |     |         |                |
| time              | int(11)          | NO   |     |         |                |
| sort              | int(11)          | NO   |     |         |                |
| questionable_type | varchar(191)     | NO   |     |         |                |
| questionable_id   | int(10) unsigned | NO   |     |         |                |
| created_at        | timestamp        | YES  |     |         |                |
| updated_at        | timestamp        | YES  |     |         |                |
+-------------------+------------------+------+-----+---------+----------------+

results (rows: 12)
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

role_user (rows: 5)
+---------+------------------+------+-----+---------+----------------+
| Field   | Type             | Null | Key | Default | Extra          |
+---------+------------------+------+-----+---------+----------------+
| id      | int(10) unsigned | NO   | PRI |         | auto_increment |
| user_id | int(10) unsigned | NO   | MUL |         |                |
| role_id | int(10) unsigned | NO   | MUL |         |                |
+---------+------------------+------+-----+---------+----------------+

roles (rows: 3)
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

rules (rows: 5)
+------------+------------------+------+-----+---------+----------------+
| Field      | Type             | Null | Key | Default | Extra          |
+------------+------------------+------+-----+---------+----------------+
| id         | int(10) unsigned | NO   | PRI |         | auto_increment |
| name       | varchar(191)     | NO   | UNI |         |                |
| content    | text             | NO   |     |         |                |
| created_at | timestamp        | YES  |     |         |                |
| updated_at | timestamp        | YES  |     |         |                |
+------------+------------------+------+-----+---------+----------------+

sessions (rows: 6)
+---------------+------------------+------+-----+---------+-------+
| Field         | Type             | Null | Key | Default | Extra |
+---------------+------------------+------+-----+---------+-------+
| id            | varchar(191)     | NO   | PRI |         |       |
| user_id       | int(10) unsigned | YES  |     |         |       |
| ip_address    | varchar(45)      | YES  |     |         |       |
| user_agent    | text             | YES  |     |         |       |
| payload       | text             | NO   |     |         |       |
| last_activity | int(11)          | NO   |     |         |       |
+---------------+------------------+------+-----+---------+-------+

sets (rows: 4)
+------------+------------------+------+-----+---------+----------------+
| Field      | Type             | Null | Key | Default | Extra          |
+------------+------------------+------+-----+---------+----------------+
| id         | int(10) unsigned | NO   | PRI |         | auto_increment |
| name       | varchar(191)     | NO   |     |         |                |
| year       | int(10) unsigned | NO   |     |         |                |
| rule_id    | int(10) unsigned | YES  |     |         |                |
| board_id   | int(10) unsigned | NO   |     |         |                |
| created_at | timestamp        | YES  |     |         |                |
| updated_at | timestamp        | YES  |     |         |                |
| slug       | varchar(191)     | YES  |     |         |                |
+------------+------------------+------+-----+---------+----------------+

social_logins (rows: 3)
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

subjects (rows: 0)
+-------------+------------------+------+-----+---------+----------------+
| Field       | Type             | Null | Key | Default | Extra          |
+-------------+------------------+------+-----+---------+----------------+
| id          | int(10) unsigned | NO   | PRI |         | auto_increment |
| name        | varchar(191)     | NO   |     |         |                |
| description | text             | YES  |     |         |                |
| image       | varchar(191)     | NO   |     |         |                |
| created_at  | timestamp        | YES  |     |         |                |
| updated_at  | timestamp        | YES  |     |         |                |
+-------------+------------------+------+-----+---------+----------------+

users (rows: 5)
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
