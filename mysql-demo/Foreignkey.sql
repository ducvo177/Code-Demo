CREATE TABLE books(
    id INT PRIMARY KEY,
    name VARCHAR(50),
    user_id int NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
)
CREATE TABLE posts(
    id INT PRIMARY KEY,
    name VARCHAR(50),
    user_id int NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
)