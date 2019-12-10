SELECT last_name, first_name, DATE_FORMAT(birthdate, '%Y-%m-%d') as 'birthday'
FROM user_card
WHERE birthdate >= '1989-01-01 00:00:00'
  AND birthdate < '1990-01-01 00:00:00'
order by last_name;