CREATE TABLE ContactMessages (
    id INT IDENTITY(1,1) PRIMARY KEY,
    name NVARCHAR(100),
    email NVARCHAR(100),
	PAssWord NVARCHAR(100),
    message NVARCHAR(MAX)
);



ALTER TABLE ContactMessages
ADD Esp32ID NVARCHAR(100);

select * from ContactMessages

insert into ContactMessages
values
('','@gmail.com','','',''),

delete from ContactMessages where id = 

