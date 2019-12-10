SELECT last_name, first_name
    FROM `member` LEFT JOIN user_card ON  user_card.id_user = `member`.id_user_card
WHERE last_name LIKE '%-%' OR first_name LIKE '%-%' OR last_name LIKE '%_ _%' OR first_name LIKE '%_ _%'
	ORDER BY last_name, first_name;


