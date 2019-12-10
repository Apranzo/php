SELECT film.id_genre as "id_genre", g.name as "name_genre", d.id_distrib, d.name as 'name_distrib', title as 'title_film'
	FROM film
	    LEFT JOIN genre g on film.id_genre = g.id_genre
		LEFT JOIN distrib d on film.id_distrib = d.id_distrib
	WHERE g.id_genre between 4 AND 8;