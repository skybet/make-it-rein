create user 'user1'@'localhost' identified by 'mypass';

grant select, insert, update, delete, create, drop on MakeItRein.* to 'user1'@'localhost';
