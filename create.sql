create table tournaments (
id serial primary key,
tournament_name varchar(255),
tournament_date date
);

create table participants (
id serial primary key,
first_name varchar(50),
last_name varchar(50)
);


create table tournaments_participants (
id serial primary key,
tournaments_id bigint not null constraint tournaments_participants_fk references tournaments(id),
participants_id bigint not null constraint participants_tournaments_fk references participants(id),
winner boolean
);