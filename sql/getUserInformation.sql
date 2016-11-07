SELECT userID, insurance_company, first_name, last_name, insurance_contact, insurance_phone, insurance_policy, social_worker
FROM user_information
WHERE userID = :userID