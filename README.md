# Electronic Medical Book

Educational PHP/PostgreSQL prototype for patient records and doctor-oriented workflows.

## Files

index.php and signup-doctor.php provide account entry points. add_person.php and view_and_delete_patient.php implement patient-oriented pages. connection.php configures PostgreSQL; functions.php contains shared logic.

## Local setup

Install PHP with pgsql and run a local PostgreSQL server. Configure DATABASE_URL in the server process, for example with a local-only PostgreSQL connection URI. Start PHP from the repository directory with:

~~~sh
php -S 127.0.0.1:8000
~~~

This repository does not include a verified schema migration. Supply the schema required by the SQL statements before exercising the pages. PostgreSQL is the database; starting MySQL is not a substitute.

## Scope

Use synthetic records only. This is not a production medical-record system. Authentication, authorization, SQL safety, CSRF protection, retention and operational security need a separate review before real patient data is processed.

## Maintenance

Preserve the existing source and sample assets when making changes. Do not commit credentials, personal data or generated build output. This review documents the checked-in project; it does not certify production readiness or a successful build on every platform.
