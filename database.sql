create table users (
		rollno varchar(60),
		
		fname varchar(60),
		lname varchar(60),

		sex varchar(10),

		date_dob varchar(5),
		month_dob varchar(5),
		year_dob varchar(10),

		father varchar(60),
		mother varchar(60),

		contact_number varchar(20),


		address_1 varchar(60),
		address_2 varchar(60),
		address_3 varchar(60),
		
		category varchar(10),

		department varchar(60),

		programme varchar(20),

		batch varchar(10),

		semester int,

		password varchar(128),
		
		regdate varchar(60),

		primary key (rollno)
);

create table course (
	course_id varchar(20),
	instructor_id int,
	course_name varchar(100),
	course_details varchar(300),
	primary key (course_id)
);

create table course_allotted (
	programme varchar(20),
	semester int,
	course_id varchar(20)
);

create table instructor (
	instructor_id int,
	instructor_name varchar(60),
	contact_email varchar(30),
	profile_link varchar(60)
);

insert into course
	values('DAA 430C', 1, 'Design and Analysis of Algorithms', 'Learn Algorithms and their design');
insert into instructor
	values(1, 'Amit Dhar', 'amit@iiita.ac.in', 'http://profile.iiita.ac.in/amitdhar');

insert into course
	values('IPPL 422C', 2, 'Principles of programming languages', 'Learn syntax and semantics of programming languages');
insert into instructor
	values(2, 'Jagpreet Singh', 'jagp@iiita.ac.in', "http://profile.iiita.ac.in/jagpreets");

insert into course_allotted
	values('B.Tech', 4, 'DAA 430C');
insert into course_allotted
	values('B.tech', 4, 'IPPL 422C');