UPDATE former_placement_siblings
SET
  name = :name,
  phone = :phone,
  email = :email,
  facebook = :facebook,
  twitter = :twitter,
  instagram = :instagram
WHERE siblingID = :siblingID;