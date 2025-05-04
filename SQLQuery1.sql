CREATE TABLE ContactMessages (
    id INT IDENTITY(1,1) PRIMARY KEY,
    name NVARCHAR(100),
    email NVARCHAR(100),
	PAssWord NVARCHAR(100),
    message NVARCHAR(MAX)
);

select * from ContactMessages

