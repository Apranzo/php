SELECT COUNT(DISTINCT id_film) FROM member_history
    WHERE (DATE(date) between DATE('2006-10-30') AND DATE('2007-07-27')) OR (MONTH(date) = 12 AND DAYOFMONTH(date) = 24);