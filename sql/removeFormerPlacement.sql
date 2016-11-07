DELETE
FROM former_placements
WHERE placementID = :placementID
AND userID = :userID;