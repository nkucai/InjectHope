INSERT INTO posts
(userID, content, category, date_published)
VALUES (:userID, :content, :category, NOW())