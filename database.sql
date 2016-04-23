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
	department varchar(60),
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
	values(2, 'Jagpreet Singh', 'jagp@iiita.ac.in', 'http://profile.iiita.ac.in/jagpreets');

insert into course_allotted
	values('B.Tech', 'I.T', 4, 'DAA 430C');
insert into course_allotted
	values('B.tech', 'E.C.E', 4, 'IPPL 422C');

/* Data entries by Mohneesh Khaneja */

insert into course
	values('IDBM 432C', 3, 'Database Management System', 'Learn Database Management System design and concepts');
insert into instructor
	values(3, 'Amrita Chaturvedi', 'amrita@iiita.ac.in', 'http://profile.iiita.ac.in/amrita');

insert into course
	values('SPAS 430C', 4, 'Probability And Statistics', 'Learn fundamentals of Probability And Statistics');
insert into instructor
	values(4, 'Sumit Kumar Upadhyay', 'upsumit@iiita.ac.in', 'http://profile.iiita.ac.in/upsumit');

insert into course
	values('EPOC 432C', 5, 'Principles Of Communication', 'Learn how communication systems work');
insert into instructor
	values(5, 'NP|SY|SB', 'np|suneel|somakb@iiita.ac.in', 'http://profile.iiita.ac.in/np|suneel|somakb');

insert into course_allotted
	values('B.tech', 'I.T', 4, 'IPPL 430C');
insert into course_allotted
	values('B.tech', 'I.T', 4, 'IDBM 432C');
insert into course_allotted
	values('B.tech', 'I.T', 4, 'SPAS 430C');
insert into course_allotted
	values('B.tech', 'I.T', 4, 'EPOC 432C');

/* For 3rd Semester */

insert into course
	values('IOOM 332C', 6, 'Object Oriented Methodologies', 'Learn OOM concetps with Java');
insert into instructor
	values(6, 'Ranjana Vyas', 'ranjana@iiita.ac.in', 'http://profile.iiita.ac.in/ranana');

insert into course
	values('IOPS 332C', 7, 'Operating Systems', 'Learn Operating System concepts');
insert into instructor
	values(7, 'Bibhas Ghoshal', 'bibhas.ghoshal@iiita.ac.in', 'http://profile.iiita.ac.in/bibhas.ghoshal');

insert into course
	values('ITOC 330C', 8, 'Theory Of Computation', 'Learn about Theory Of Computation and Automata');
insert into instructor
	values(8, 'Somenath Biswas', 'sb@iiita.ac.in', 'http://profile.iiita.ac.in/sb');

insert into course
	values('SMAT 330C', 9, 'Mathematics-3', 'Learn Complex Analysis and Transformations');
insert into instructor
	values(9, 'Abdullah Bin Abu Baker', 'abdullah@iiita.ac.in', 'http://profile.iiita.ac.in/abdullah');

insert into course
	values('EMIP 332C', 10, 'Microprocessors', 'Learn Microprocessor Interfacing and Programming');
insert into instructor
	values(10, 'Prasanna Kumar Misra', 'prasanna@iiita.ac.in', 'http://profile.iiita.ac.in/prasanna');

insert into course_allotted
	values('B.tech', 'I.T', 3, 'IOOM 332C');
insert into course_allotted
	values('B.tech', 'I.T', 3, 'IOPS 332C');
insert into course_allotted
	values('B.tech', 'I.T', 3, 'ITOC 330C');
insert into course_allotted
	values('B.tech', 'I.T', 3, 'SMAT 330C');
insert into course_allotted
	values('B.tech', 'I.T', 3, 'EMIP 332C');

/* For 2nd Semester */

insert into course
	values('IDSA 232C', 11, 'Data Structures And Algorithms', 'Learn Data Structures and Algorithms');
insert into instructor
	values(1, 'Sonali Agarwal', 'sonali@iiita.ac.in', 'http://profile.iiita.ac.in/sonali');

insert into course
	values('ICOA 230C', 12, 'Computer Organization And Architecture', 'Learn fundamentals of Computer Organization And Architecture');
insert into instructor
	values(12, 'Satish Kumar Singh', 'sk.singh@iiita.ac.in', 'http://profile.iiita.ac.in/sk.singh');

insert into course
	values('IDIM 230C', 8, 'Discrete Mathematics', 'Learn concepts of Discrete Mathematics');
insert into instructor
	values(8, 'Somenath Biswas', 'sb@iiita.ac.in', 'http://profile.iiita.ac.in/sb');

insert into course
	values('SMAT 232C', 13, 'Mathematics-2', 'Learn about Linear Algebra and Interpolation Techniques');
insert into instructor
	values(13, 'Akhilesh Tiwari', 'atiwari@iiita.ac.in', 'http://profile.iiita.ac.in/atiwari');

insert into course
	values('EDLE 232C', 14, 'Digital Electronics', 'Learn concepts of Digital Electronics');
insert into instructor
	values(14, 'Pramod Kumar', 'pkumar@iiita.ac.in', 'http://profile.iiita.ac.in/pkumar');

insert into course_allotted
	values('B.tech', 'I.T', 2, 'IDSA 232C');
insert into course_allotted
	values('B.tech', 'I.T', 2, 'ICOA 230C');
insert into course_allotted
	values('B.tech', 'I.T', 2, 'IDIM 230C');
insert into course_allotted
	values('B.tech', 'I.T', 2, 'SMAT 232C');
insert into course_allotted
	values('B.tech', 'I.T', 2, 'EDLE 232C');

/* For 1st Semester */

insert into course
	values('ITP 132C', 15, 'Introduction To Programming', 'Learn how to program in a language like C');
insert into instructor
	values(15, 'Venkatesan S', 'venkat@iiita.ac.in', 'http://profile.iiita.ac.in/venkat');

insert into course
	values('ITC 132C', 16, 'Introduction To Computers', 'Learn basic concepts of a computer system');
insert into instructor
	values(16, 'Mithilesh Mishra', 'mithilesh@iiita.ac.in', 'http://profile.iiita.ac.in/mithilesh');

insert into course
	values('EEDC 132C', 17, 'Electronic Devices And Circuits', 'Learn basic concepts of electronics like diode, transistor, oscillator, op amp etc.');
insert into instructor
	values(17, 'Sitangshu Bhattacharya', 'sitangshu@iiita.ac.in', 'http://profile.iiita.ac.in/sitangshu');

insert into course
	values('SMAT 130C', 18, 'Mathematics-1', 'Learn about Ordinary Differential Equations, Sequences and Series, A brief introduction to Multivariable Calculus');
insert into instructor
	values(18, 'Ramji Lal', 'ramji@iiita.ac.in', 'http://profile.iiita.ac.in/ramji');

insert into course
	values('ECAS 130C', 10, 'Circuit Analysis And Synthesis', 'Learn fundamentals of circuit theory');
insert into instructor
	values(10, 'Prasanna Kumar Misra', 'prasanna@iiita.ac.in', 'http://profile.iiita.ac.in/prasanna');

insert into course_allotted
	values('B.tech', 'I.T', 1, 'ITP 132C');
insert into course_allotted
	values('B.tech', 'I.T', 1, 'ITC 132C');
insert into course_allotted
	values('B.tech', 'I.T', 1, 'EEDC 132C');
insert into course_allotted
	values('B.tech', 'I.T', 1, 'SMAT 130C');
insert into course_allotted
	values('B.tech', 'I.T', 1, 'ECAS 130C');

/* For 5th Semester */

insert into course
	values('ICNW 532C', 19, 'Computer Networks', 'Learn how computer network works');
insert into instructor
	values(19, 'Shekhar Verma', 'sverma@iiita.ac.in', 'http://profile.iiita.ac.in/sverma');

insert into course
	values('ISWE 532C', 20, 'Software Engineering', 'Learn how to build quality softwares');
insert into instructor
	values(20, 'Sudip Sanyal', 'ssanyal@iiita.ac.in', 'http://profile.iiita.ac.in/ssanyal');

insert into course
	values('IAIN 532C', 21, 'Artificial Intelligence', 'Learn how to use Artificial Intelligence in computers');
insert into instructor
	values(21, 'Rahul Kala', 'rkala@iiita.ac.in', 'http://profile.iiita.ac.in/rkala');

insert into course
	values('ICOG 532C', 22, 'Computer Graphics', 'Learn how Computer Graphics work');
insert into instructor
	values(22, 'Pavan Chakraborty', 'pavan@iiita.ac.in', 'http://profile.iiita.ac.in/pavan');

insert into course
	values('MPOE 530C', 23, 'Principles Of Economics', 'Learn about basic Principles of Economics');
insert into instructor
	values(23, 'Shailendra Kumar', 'shailendrak@iiita.ac.in', 'http://profile.iiita.ac.in/shailendrak');

insert into course_allotted
	values('B.tech', 'I.T', 5, 'ICNW 532C');
insert into course_allotted
	values('B.tech', 'I.T', 5, 'ISWE 532C');
insert into course_allotted
	values('B.tech', 'I.T', 5, 'IAIN 532C');
insert into course_allotted
	values('B.tech', 'I.T', 5, 'ICOG 532C');
insert into course_allotted
	values('B.tech', 'I.T', 5, 'MPOE 532C');

/* For 6th Semester */


insert into course
	values('ICOD 632C', 15, 'Compiler Designing', 'Learn how to build a compiler for a language');
insert into instructor
	values(15, 'Venkatesan S', 'venkat@iiita.ac.in', 'http://profile.iiita.ac.in/venkat');

insert into course
	values('IDMW 632C', 24, 'Data Mining', 'Learn about concepts of Data Mining');
insert into instructor
	values(24, 'Manish Kumar', 'manish@iiita.ac.in', 'http://profile.iiita.ac.in/manish');

insert into course
	values('IOOT 630E', 25, 'Optimization Technologies', 'Learn about Optimization Techniques and how to apply them');
insert into instructor
	values(25, 'Vrijendra Singh', 'vrij@iiita.ac.in', 'http://profile.iiita.ac.in/vrij');

insert into course
	values('IIVP 632C', 26, 'Image and Voice Processing', 'Learn how Computer processes images and voice');
insert into instructor
	values(26, 'U. S. Tiwary', 'ust@iiita.ac.in', 'http://profile.iiita.ac.in/ust');

insert into course
	values('INLP 630E', 27, 'Natural Language Processing', 'Learn how is natural language processed');
insert into instructor
	values(27, 'Ratna Sanyal', 'rsanyal@iiita.ac.in', 'http://profile.iiita.ac.in/rsanyal');

insert into course_allotted
	values('B.tech', 'I.T', 6, 'ICOD 632C');
insert into course_allotted
	values('B.tech', 'I.T', 6, 'IDMW 632C');
insert into course_allotted
	values('B.tech', 'I.T', 6, 'IOOT 630E');
insert into course_allotted
	values('B.tech', 'I.T', 6, 'IIVP 632C');
insert into course_allotted
	values('B.tech', 'I.T', 6, 'INLP 630E');

/* For 7th Semester */

insert into course
	values('IE1 7', 15, 'Elective 1', 'Learn about chosen Elective 1');
insert into instructor
	values(15, 'Venkatesan S', 'venkat@iiita.ac.in', 'http://profile.iiita.ac.in/venkat');

insert into course
	values('IE2 7', 28, 'Elective 2', 'Learn about chosen Elective 2');
insert into instructor
	values(28, 'Sanjeev B. S.', 'sanjeev@iiita.ac.in', 'https://iws44.iiita.ac.in/bss/website');

insert into course
	values('IMP 7', 29, 'Mini Project', 'Project Evaluation');
insert into instructor
	values(29, 'O. P. Vyas', 'opvyas@iiita.ac.in', 'http://profile.iiita.ac.in/opvyas');

insert into course_allotted
	values('B.tech', 'I.T', 7, 'IE1');
insert into course_allotted
	values('B.tech', 'I.T', 7, 'IE2');
insert into course_allotted
	values('B.tech', 'I.T', 7, 'IMP');

/* For 8th Semester 8 */

insert into course
	values('IE1 8', 21, 'Elective 1', 'Learn about chosen Elective 1');
insert into instructor
	values(21, 'Rahul Kala', 'rkala@iiita.ac.in', 'http://profile.iiita.ac.in/rkala');

insert into course
	values('IE2 8', 2, 'Elective 2', 'Learn about chosen Elective 2');
insert into instructor
	values(2, 'Jagpreet Singh', 'jagp@iiita.ac.in', 'http://profile.iiita.ac.in/jagpreets');

insert into course
	values('IMP 8', 30, 'Mini Project', 'Project Evaluation');
insert into instructor
	values(30, 'Sudip Sanyal', 'ssanyal@iiita.ac.in', 'http://profile.iiita.ac.in/ssanyal');

insert into course_allotted
	values('B.tech', 'I.T', 8, 'IE1');
insert into course_allotted
	values('B.tech', 'I.T', 8, 'IE2');
insert into course_allotted
	values('B.tech', 'I.T', 8, 'IMP');

/* For 1st Semester Ece -- Same as 1st Semester IT */

insert into course_allotted
	values('B.tech', 'E.C.E', 1, 'ITP 132C');
insert into course_allotted
	values('B.tech', 'E.C.E', 1, 'ITC 132C');
insert into course_allotted
	values('B.tech', 'E.C.E', 1, 'EEDC 132C');
insert into course_allotted
	values('B.tech', 'E.C.E', 1, 'SMAT 130C');
insert into course_allotted
	values('B.tech', 'E.C.E', 1, 'ECAS 130C');
