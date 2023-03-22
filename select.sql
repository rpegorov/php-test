select p.first_name as "Имя участника", count(*) as "Кол-во побед", extract (year from t.tournament_date) as "Год турнира"
from participants p
join tournaments_participants tp on tp.participants_id  = p.id  
join tournaments t on tp.tournaments_id = t.id 
where tp.winner != false and extract (year from t.tournament_date) = extract (year from pg_catalog.now()) 
group by p.first_name, extract (year from t.tournament_date)
having count(*) >= 2