SELECT users.name, posts.name
FROM users
JOIN posts ON users.id = posts.user_id; /* Lấy ra một bảng gồm trường users.name và posts.name với điểm chung là user_id