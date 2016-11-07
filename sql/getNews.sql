SELECT
  posts.postID,
  posts.userID,
  posts.content,
  posts.date_published,
  concat(user_information.first_name, ' ' , user_information.last_name) AS poster_name
FROM posts
  JOIN user_information ON user_information.userID = posts.userID
ORDER BY posts.date_published desc
