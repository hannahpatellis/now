# Now

This idea was fully inspired by [Stephen Hackett and his blog _512 pixels_](https://512pixels.net/now/)

## Databases

- Now currently is designed to use a single MySQL database with two tables:
  - `entries` where each row is an individual entry on the Now page, current or archived
  - `users` where each row is a username/password for logging into Now

Schemas for these tables are located in the `schemas` directory.

## env.json

A `env.json` file is expected in the `app` directory. The `env.json` file follows this template:

```
{
  "sql_cert": "/absolute/path/to/.crt",
  "sql_uri": "",
  "sql_port": "",
  "sql_user": "",
  "sql_password": "",
  "sql_db": ""
}
```

Notes:
- The `sql_cert` may not be applicable to your MySQL setup and could be removed, although the `public/resource/db.php` file will need to be edited

---

Developed by Alexandria 'Hannah' I. Patellis, starting in 2025

[hannahap.com](https://hannahap.com)