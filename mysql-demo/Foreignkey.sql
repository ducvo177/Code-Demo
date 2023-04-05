CREATE TABLE books(
    id INT PRIMARY KEY,
    name VARCHAR(50),
    FOREIGN KEY (user_id) REFERENCES users(id)
)