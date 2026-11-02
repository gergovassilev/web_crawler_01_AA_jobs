# Work with SQLite
SQLite databases are saved in file, so they are highly portable and no SQL server has to be installed, so no networking settings are required.
SQLite can be installed on Linux or Windows. The Windows SQLite DLL does not have convenient built in cli.

Create/Connect SQLite database
``` bash
sqlite3 test01.db
```

Exit with 
```
.exit
```

Create table, insert data, select data, etc. is done using the common SQL syntax. Some examples:
``` bash
CREATE TABLE jobs (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    company TEXT NOT NULL,
    title TEXT NOT NULL,
    location TEXT,
    url TEXT,
    first_seen DATE,
    last_seen DATE
);
```
``` bash
INSERT INTO jobs
(company, title, location, first_seen)
VALUES
('company_A', 'Software Engineer', 'Berlin', DATE('now'));
```
``` bash
show all data from this table
SELECT * FROM jobs;
```







