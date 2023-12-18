CREATE TABLE
    teman(
        nim INT(10) PRIMARY KEY,
        nama VARCHAR(100) NOT NULL,
        gender VARCHAR(100) NOT NULL,
        prodi VARCHAR(100) NOT NULL,
        ciri VARCHAR(100) NOT NULL
    );

CREATE TABLE
    akun(
        username VARCHAR(50),
        password VARCHAR(50)
    );

INSERT INTO akun (username, password) VALUES ('aiwa', '131103');

ALTER TABLE akun ADD PRIMARY KEY (username);