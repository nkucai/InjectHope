UPDATE user_information
SET
  insurance_company = :company_name
WHERE userID = :userID;