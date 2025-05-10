CREATE TABLE Users (
  ID INT PRIMARY KEY IDENTITY,
  Name NVARCHAR(100),
  Email NVARCHAR(100),
  Password NVARCHAR(100),
  User_ID NVARCHAR(50)
);

CREATE TABLE Notifications (
  ID INT PRIMARY KEY IDENTITY,
  message NVARCHAR(500),
  CreatedAt DATETIME DEFAULT GETDATE()
);


select * from Users

select * from Notifications

insert into Users
values
('U1','U1@gmail.com','U1U1','123')