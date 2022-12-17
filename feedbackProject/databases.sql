create table feedback(
    id integer primary key auto_increment,
    name varchar(255) not null,
    email varchar(255) not null unique,
    body text default '',
    date datetime
);

insert into feedback(name, email, body, date) values
('Viet', 'leviet1612@gmail.com', 'Hihi', current_timestamp()),
('Tuan', 'tuannguyen@gmail.com', 'Tuantuan', current_timestamp()),
('Bich', 'bichpham@gmail.com', 'bichbich', current_timestamp());
