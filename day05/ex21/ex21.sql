SELECT MD5(REPLACE(phone_number, '7', '9') + '42') as 'ft5'
FROM distrib WHERE id_distrib = 84;