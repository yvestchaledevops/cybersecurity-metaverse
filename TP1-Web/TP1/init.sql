USE tp1;

CREATE TABLE IF NOT EXISTS users
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    token VARCHAR(255)
) COLLATE utf8mb4_bin;

INSERT INTO users (username, password) VALUES
    ("guest", "guest")