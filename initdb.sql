CREATE USER myuser;
CREATE DATABASE mydb;
GRANT ALL PRIVILEGES ON DATABASE mydb TO myuser;
ALTER DATABASE mydb OWNER TO myuser;

\connect mydb 
create table mytable
(
    clave integer NOT NULL,
    nombre character varying,
);
ALTER TABLE mytable OWNER TO myuser;