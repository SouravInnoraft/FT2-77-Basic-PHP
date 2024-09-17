create table Matches (
Match_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
Team1_id INT NOT NULL,
Team2_id INT NOT NULL,
Venue VARCHAR(50),
Date_of_match DATE,
Toss_won VARCHAR(50),
Match_won VARCHAR(50),
FOREIGN KEY (Team1_id) REFERENCES Team (Team_id) ON DELETE CASCADE,
FOREIGN KEY (Team2_id) REFERENCES Team (Team_id) ON DELETE CASCADE
);

create table Team (
Team_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
Team_name VARCHAR(50),
Captain_name VARCHAR(50)
);



insert into Team(Team_name,Captain_name) values ('RCB','Faf');
insert into Team(Team_name,Captain_name) values ('CSK','Dhoni');
insert into Team(Team_name,Captain_name) values ('KKR','Shreyas');
insert into Team(Team_name,Captain_name) values ('DC','Pant');
insert into Team(Team_name,Captain_name) values ('SRH','Cummins');
insert into Team(Team_name,Captain_name) values ('GT','Gill');


insert into Matches (Team1_id,Team2_id,Venue,Date_of_match,Toss_won,Match_won)
values (1,2,'Chennai','2024-03-22','RCB','RCB');
insert into Matches (Team1_id,Team2_id,Venue,Date_of_match,Toss_won,Match_won)
values (3,4,'Delhi','2024-03-23','DC','KKR');
insert into Matches (Team1_id,Team2_id,Venue,Date_of_match,Toss_won,Match_won)
values (5,6,'Ahmedabad','2024-03-24','SRH','GT');


select *
from
(select * from Matches as m inner join Team as t on m.Team1_id=t.Team_id)
as m1 inner join Team as t1 on m1.Team2_id=t1.Team_id;

select *
from
Matches as m inner join Team as t on m.Team1_id=t.Team_id
inner join Team as t1 on m.Team2_id=t1.Team_id;
