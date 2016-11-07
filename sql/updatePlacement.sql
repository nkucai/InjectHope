UPDATE former_placements
SET
  name = :name,
  email = :email,
  phone = :phone,
  address = :address,
  dateRange = :dateRange
WHERE userID = :userID;