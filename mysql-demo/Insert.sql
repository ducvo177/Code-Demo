INSERT INTO users (id, name, created_at) VALUES 
(1, 'John Doe', '2023-04-05 09:00:00'),
(2, 'Jane Smith', '2023-04-05 09:01:00'),
(3, 'Bob Johnson', '2023-04-05 09:02:00');

INSERT INTO books (id, name, user_id) VALUES 
(1, 'The Great Gatsby', 1),
(2, 'To Kill a Mockingbird', 2),
(3, 'Pride and Prejudice', 3);

INSERT INTO posts (id, name, user_id) VALUES 
(1, 'Hello', 1),
(2, 'React', 2),
(3, 'PHP', 3);