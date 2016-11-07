DELETE
FROM former_placement_siblings
WHERE siblingID = :siblingID
AND userID = :userID;
