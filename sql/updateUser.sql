UPDATE user_information
SET
  first_name    = :first_name,
  last_name     = :last_name,
  /*profile_image = :profile_image,*/
  insurance_company = :insurance_company,
  insurance_contact = :insurance_contact,
  insurance_phone = :insurance_phone,
  insurance_policy = :insurance_policy
WHERE userID = :userID;
