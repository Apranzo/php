SELECT UPPER(user_card.last_name) as NAME, user_card.first_name, subscription.price
	FROM user_card
	    INNER JOIN `member`
	        on user_card.id_user = member.id_user_card
	    INNER JOIN subscription
	        on member.id_sub = subscription.id_sub
	WHERE subscription.price > 42
	ORDER BY user_card.last_name, user_card.last_name;
