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

/* INSTRUCTORS */



insert into instructor
	values(1, 'Amit Dhar', 'amit@iiita.ac.in', 'http://profile.iiita.ac.in/amitdhar');
insert into instructor
	values(2, 'Jagpreet Singh', 'jagp@iiita.ac.in', 'http://profile.iiita.ac.in/jagpreets');
insert into instructor
	values(3, 'Amrita Chaturvedi', 'amrita@iiita.ac.in', 'http://profile.iiita.ac.in/amrita');
insert into instructor
	values(4, 'Sumit Kumar Upadhyay', 'upsumit@iiita.ac.in', 'http://profile.iiita.ac.in/upsumit');
insert into instructor
	values(5, 'Niteesh Purohit', 'np@iiita.ac.in', 'http://profile.iiita.ac.in/np|suneel|somakb');
insert into instructor
	values(6, 'Ranjana Vyas', 'ranjana@iiita.ac.in', 'http://profile.iiita.ac.in/ranana');
insert into instructor
	values(7, 'Bibhas Ghoshal', 'bibhas.ghoshal@iiita.ac.in', 'http://profile.iiita.ac.in/bibhas.ghoshal');
insert into instructor
	values(8, 'Somenath Biswas', 'sb@iiita.ac.in', 'http://profile.iiita.ac.in/sb');
insert into instructor
	values(9, 'Abdullah Bin Abu Baker', 'abdullah@iiita.ac.in', 'http://profile.iiita.ac.in/abdullah');
insert into instructor
	values(10, 'Prasanna Kumar Misra', 'prasanna@iiita.ac.in', 'http://profile.iiita.ac.in/prasanna');
insert into instructor
	values(11, 'Sonali Agarwal', 'sonali@iiita.ac.in', 'http://profile.iiita.ac.in/sonali');
insert into instructor
	values(12, 'Satish Kumar Singh', 'sk.singh@iiita.ac.in', 'http://profile.iiita.ac.in/sk.singh');
insert into instructor
	values(13, 'Akhilesh Tiwari', 'atiwari@iiita.ac.in', 'http://profile.iiita.ac.in/atiwari');
insert into instructor
	values(14, 'Pramod Kumar', 'pkumar@iiita.ac.in', 'http://profile.iiita.ac.in/pkumar');
insert into instructor
	values(15, 'Venkatesan S', 'venkat@iiita.ac.in', 'http://profile.iiita.ac.in/venkat');
insert into instructor
	values(16, 'Mithilesh Mishra', 'mithilesh@iiita.ac.in', 'http://profile.iiita.ac.in/mithilesh');
insert into instructor
	values(17, 'Sitangshu Bhattacharya', 'sitangshu@iiita.ac.in', 'http://profile.iiita.ac.in/sitangshu');
insert into instructor
	values(18, 'Ramji Lal', 'ramji@iiita.ac.in', 'http://profile.iiita.ac.in/ramji');
insert into instructor
	values(19, 'Shekhar Verma', 'sverma@iiita.ac.in', 'http://profile.iiita.ac.in/sverma');
insert into instructor
	values(20, 'Sudip Sanyal', 'ssanyal@iiita.ac.in', 'http://profile.iiita.ac.in/ssanyal');
insert into instructor
	values(21, 'Rahul Kala', 'rkala@iiita.ac.in', 'http://profile.iiita.ac.in/rkala');
insert into instructor
	values(22, 'Pavan Chakraborty', 'pavan@iiita.ac.in', 'http://profile.iiita.ac.in/pavan');
insert into instructor
	values(23, 'Shailendra Kumar', 'shailendrak@iiita.ac.in', 'http://profile.iiita.ac.in/shailendrak');
insert into instructor
	values(24, 'Manish Kumar', 'manish@iiita.ac.in', 'http://profile.iiita.ac.in/manish');
insert into instructor
	values(25, 'Vrijendra Singh', 'vrij@iiita.ac.in', 'http://profile.iiita.ac.in/vrij');
insert into instructor
	values(26, 'U. S. Tiwary', 'ust@iiita.ac.in', 'http://profile.iiita.ac.in/ust');
insert into instructor
	values(27, 'Ratna Sanyal', 'rsanyal@iiita.ac.in', 'http://profile.iiita.ac.in/rsanyal');
insert into instructor
	values(28, 'Sanjeev B. S.', 'sanjeev@iiita.ac.in', 'https://iws44.iiita.ac.in/bss/website');
insert into instructor
	values(29, 'O. P. Vyas', 'opvyas@iiita.ac.in', 'http://profile.iiita.ac.in/opvyas');
insert into instructor
	values(30, 'Rahul Kala', 'rkala@iiita.ac.in', 'http://profile.iiita.ac.in/rkala');
insert into instructor
	values(31, 'Sunny Sharma', 'sunnys{at}iiita.ac.in', 'http://profile.iiita.ac.in/venkat');	/* NO PROFILE */	
insert into instructor
	values(32, 'Dr. K. P. Singh', 'kpsingh{at}iiita.ac.in', 'http://profile.iiita.ac.in/kpsingh');
insert into instructor
	values(33, 'Dr. Manish Goswami', 'manishgoswami{at}iiita.ac.in', 'http://profile.iiita.ac.in/manishgoswami');
insert into instructor
	values(34, 'Ms. Pooja Jain', 'poojajain{at}iiita.ac.in', 'http://profile.iiita.ac.in/poojajain');
insert into instructor
	values(35, 'Dr.Somak-Bhattacharyya', 'somakb{at}iiita.ac.in', 'http://profile.iiita.ac.in/somakb');
insert into instructor
	values(36, 'Dr. Rajat Kumar Singh', 'rajatsingh{at}iiita.ac.in', 'http://profile.iiita.ac.in/rajatsingh');	
insert into instructor
	values(37, 'Dr. Vrijendra Singh', 'vrij{at}iiita.ac.in', 'http://profile.iiita.ac.in/vrij');
insert into instructor
	values(38, 'Dr. Anupam', 'anupam{at}iiita.ac.in', 'http://profile.iiita.ac.in/anupam');
insert into instructor
	values(39, 'Dr. Vijay K. Chaurasiya', 'vijayk{at}iiita.ac.in', 'http://profile.iiita.ac.in/vijayk');
insert into instructor
	values(40, 'Prof. G. C. Nandi', 'gcnandi{at}iiita.ac.in', 'http://profile.iiita.ac.in/gcnandi');
insert into instructor
	values(41, 'Dr. Ranjit Singh', '	ranjitsingh{at}iiita.ac.in', 'http://profile.iiita.ac.in/ranjitsingh');
insert into instructor
	values(42, 'Dr. Shirshu Varma', 'shirshu{at}iiita.ac.in', 'http://profile.iiita.ac.in/shirshu');
insert into instructor
	values(43, 'Dr. Rekha Verma', 'r.verma{at}iiita.ac.in', 'http://profile.iiita.ac.in/r.verma');
insert into instructor
	values(44, 'Dr. Vijayshri Tewari', 'vijayshri{at}iiita.ac.in', 'http://profile.iiita.ac.in/vijayshri');
insert into instructor
	values(45, 'Dr. Arun Kant Singh', 'aks{at}iiita.ac.in', 'http://profile.iiita.ac.in/aks');
insert into instructor
	values(46, 'Dr. Abhishek Vaish', 'http://profile.iiita.ac.in/abhishek', 'abhishek{at}iiita.ac.in');






/* 4th Semester */




insert into course
	values('DAA 430C', 1, 'Design and Analysis of Algorithms', 'Learn Algorithms and their design and analysis as to their efficiency');

insert into course
	values('IPPL 422C', 2, 'Principles of programming languages', 'Learn syntax and semantics of programming languages');

insert into course_allotted
	values('B.Tech', 'I.T', 4, 'DAA 430C');
insert into course_allotted
	values('B.tech', 'I.T', 4, 'IPPL 422C');

insert into course
	values('IDBM 432C', 3, 'Database Management System', 'Learn Database Management System design and concepts');

insert into course
	values('SPAS 430C', 4, 'Probability And Statistics', 'Learn fundamentals of Probability And Statistics');

insert into course
	values('EPOC 432C', 5, 'Principles Of Communication', 'Learn how communication systems work');

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
	values('IOOM 332C', 6, 'Object Oriented Methodologies', 'Learn OOM concepts with Java');

insert into course
	values('IOPS 332C', 7, 'Operating Systems', 'Learn Operating System concepts');


insert into course
	values('ITOC 330C', 8, 'Theory Of Computation', 'Learn about Theory Of Computation and Automata');


insert into course
	values('SMAT 330C', 9, 'Mathematics-3', 'Learn Complex Analysis and Transformations');

insert into course
	values('EMIP 332C', 10, 'Microprocessors', 'Learn Microprocessor Interfacing and Programming');

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

insert into course
	values('ICOA 230C', 12, 'Computer Organization And Architecture', 'Learn fundamentals of Computer Organization And Architecture');

insert into course
	values('IDIM 230C', 8, 'Discrete Mathematics', 'Learn concepts of Discrete Mathematics');


insert into course
	values('SMAT 232C', 13, 'Mathematics-2', 'Learn about Linear Algebra and Interpolation Techniques');

insert into course
	values('EDLE 232C', 5, 'Digital Electronics', 'Learn concepts of Digital Electronics');


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
	values('ITP 232C', 15, 'Introduction To Programming', 'Learn how to program in a language like C');

insert into course
	values('ITC 232C', 16, 'Introduction To Computers', 'Learn basic concepts of a computer system');

insert into course
	values('EEDC 232C', 17, 'Electronic Devices And Circuits', 'Learn basic concepts of electronics like diode, transistor, oscillator, op amp etc.');

insert into course
	values('SMAT 230C', 18, 'Mathematics-1', 'Learn about Ordinary Differential Equations, Sequences and Series, A brief introduction to Multivariable Calculus');

insert into course
	values('ECAS 230C', 10, 'Circuit Analysis And Synthesis', 'Learn fundamentals of circuit theory');


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

insert into course
	values('ISWE 532C', 20, 'Software Engineering', 'Learn how to build quality softwares');

insert into course
	values('IAIN 532C', 21, 'Artificial Intelligence', 'Learn how to use Artificial Intelligence in computers');

insert into course
	values('ICOG 532C', 22, 'Computer Graphics', 'Learn how Computer Graphics work');

insert into course
	values('MPOE 530C', 23, 'Principles Of Economics', 'Learn about basic Principles of Economics');

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

insert into course
	values('IDMW 632C', 24, 'Data Mining', 'Learn about concepts of Data Mining');

insert into course
	values('IOOT 630E', 25, 'Optimization Technologies', 'Learn about Optimization Techniques and how to apply them');

insert into course
	values('IIVP 632C', 26, 'Image and Voice Processing', 'Learn how Computer processes images and voice');

insert into course
	values('INLP 630E', 27, 'Natural Language Processing', 'Learn how is natural language processed');

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
	values('IE1 7', 1, 'Elective 1', 'Learn about chosen Elective 1');

insert into course
	values('IE2 7', 28, 'Elective 2', 'Learn about chosen Elective 2');

insert into course
	values('IMP 7', 29, 'Mini Project', 'Project Evaluation');

insert into course_allotted
	values('B.tech', 'I.T', 7, 'IE1');
insert into course_allotted
	values('B.tech', 'I.T', 7, 'IE2');
insert into course_allotted
	values('B.tech', 'I.T', 7, 'IMP');


/* For 8th Semester 8 */



insert into course
	values('IE1 8', 30, 'Elective 1', 'Learn about chosen Elective 1');

insert into course
	values('IE2 8', 2, 'Elective 2', 'Learn about chosen Elective 2');

insert into course
	values('IMP 8', 20, 'Mini Project', 'Project Evaluation');

insert into course_allotted
	values('B.tech', 'I.T', 8, 'IE1');
insert into course_allotted
	values('B.tech', 'I.T', 8, 'IE2');
insert into course_allotted
	values('B.tech', 'I.T', 8, 'IMP');


/* For 1st Semester Ece*/


insert into course_allotted
	values('B.tech', 'E.C.E', 1, 'IIPG 132C');
insert into course_allotted
	values('B.tech', 'E.C.E', 1, 'SEGP 132C');
insert into course_allotted
	values('B.tech', 'E.C.E', 1, 'EEDC 132C');
insert into course_allotted
	values('B.tech', 'E.C.E', 1, 'SCDE 130C');
insert into course_allotted
	values('B.tech', 'E.C.E', 1, 'ECAS 130C');
insert into course_allotted
	values('B.tech', 'E.C.E', 1, 'ITC 132C');



insert into course
	values('ITP 132C', 15, 'Introduction To Programming', 'Learn how to program in a language like C');

insert into course
	values('ITC 132C', 14, 'Engineering Physics', 'Learn basic electrical concepts and classical and quantum mechanics');

insert into course
	values('EEDC 132C', 17, 'Electronic Devices And Circuits', 'Learn basic concepts of electronics like diode, transistor, oscillator, op amp etc.');

insert into course
	values('SMAT 130C', 18, 'Mathematics-1', 'Learn about Ordinary Differential Equations, Sequences and Series, A brief introduction to Multivariable Calculus');

insert into course
	values('ECAS 130C', 10, 'Circuit Analysis And Synthesis', 'Learn fundamentals of circuit theory');




/* For 2nd Semester Ece */



insert into course_allotted
	values('B.tech', 'E.C.E', 2, 'EDES 232C');
insert into course_allotted
	values('B.tech', 'E.C.E', 2, 'IDMS 230C');
insert into course_allotted
	values('B.tech', 'E.C.E', 2, 'IDST 232C');
insert into course_allotted
	values('B.tech', 'E.C.E', 2, 'SPAS 230C');
insert into course_allotted
	values('B.tech', 'E.C.E', 2, 'ICOA 230C');
insert into course_allotted
	values('B.tech', 'E.C.E', 2, 'MPOM 230C');



insert into course
	values('EDES 232C', 14, 'Digital Electronics', 'Introduction to components and logical design of a Electronic Circuit');

insert into course
	values('IDMS 230C', 8, 'Discrete Mathematics', 'Learn logic calculus and appropriate techniques of proofs');

insert into course
	values('IDST 232C', 11, 'Data Structures', 'Learn about the basic data structures needed to build complex programs');

insert into course
	values('SPAS 230C', 4, 'Probability And Statistics', 'Learn fundamentals of Probability And Statistics');

insert into course
	values('MPOM 230C', 44, 'Principles of Management', 'Get acquainted with the basic principles of management');


/* For 3rd Semester Ece */


insert into course_allotted
	values('B.tech', 'E.C.E', 3, 'IOSY 332C');
insert into course_allotted
	values('B.tech', 'E.C.E', 3, 'EAES 332C');
insert into course_allotted
	values('B.tech', 'E.C.E', 3, 'EACN 332C');
insert into course_allotted
	values('B.tech', 'E.C.E', 3, 'EEFW 330C');
insert into course_allotted
	values('B.tech', 'E.C.E', 3, 'EBEE 332C');



insert into course
	values('IOSY 332C', 7, 'Operating System', 'Learn the inner workings behind an Operating System');

insert into course
	values('EAES 332C', 43, 'Analog Electronics', 'Learn about the components required to build an analog circuit');

insert into course
	values('EACN 332C', 5, 'Analog Communication', 'Learn about signals, their modulation techniques and noise');

insert into course
	values('EEFW 330C', 36, 'Electromagnetic Fields and Waves', 'Learn about Electrostatics, Magnetostatics and application of waves');

insert into course
	values('EBEE 330C', 17, 'Basic Electrical Engineering', 'Learn about the components of a AC or DC circuit');



/* For 4th Semester Ece */


insert into course_allotted
	values('B.tech', 'E.C.E', 4, 'MMAM 420F');
insert into course_allotted
	values('B.tech', 'E.C.E', 4, 'ESAS 430C');
insert into course_allotted
	values('B.tech', 'E.C.E', 4, 'EMIP 432C');
insert into course_allotted
	values('B.tech', 'E.C.E', 4, 'EEMI 432C');
insert into course_allotted
	values('B.tech', 'E.C.E', 4, 'EICT 430C');
insert into course_allotted
	values('B.tech', 'E.C.E', 4, 'EMWE 432C');



insert into course
	values('MMAM 420F', 44, 'Marketing Management', 'Learn how to program in a language like C');

insert into course
	values('ESAS 430C',34, 'Discrete Time Signals and Systems', 'Learn about Signals and Systems and their discrete time fourier series and transforms and Z-tranforms');

insert into course
	values('EMIP 432C', 10, 'Microprocessor Interface and Programming', 'Learn Microprocessor Interfacing and Programming');

insert into course
	values('EEMI 432C', 35, 'Electronics Measurement and Instrumentation', 'Learn about Instruments needed for measurements');

insert into course
	values('EICT 430C', 17, 'Integrated Circuits Technology', 'Learn how to synthesize an integrated circuit');

insert into course
	values('EICT 432C', 35, 'Microwave Engineering', 'Learn about micro waves');



/* For 5th Semester Ece */


insert into course_allotted
	values('B.tech', 'E.C.E', 5, 'EDCN 532C');
insert into course_allotted
	values('B.tech', 'E.C.E', 5, 'ECSY 532C');
insert into course_allotted
	values('B.tech', 'E.C.E', 5, 'ECNW 532C');
insert into course_allotted
	values('B.tech', 'E.C.E', 5, 'EAWP 532C');
insert into course_allotted
	values('B.tech', 'E.C.E', 5, 'MMEC 520F');
insert into course_allotted
	values('B.tech', 'E.C.E', 5, 'EPOP 503P');


insert into course
	values('EDCN 532C', 46, 'Digital Communication', 'Learn about Digital Signals and their modulation techniques');

insert into course
	values('ECSY 532C', 45, 'Control Systems', 'Introduction to Control Systems');


insert into course
	values('ECNW 532C', 39, 'Computer Networks', 'Learn about Computer Networks');

insert into course
	values('EAWP 532C', 35, 'Antenna and Wave Propagation', 'Learn Antenna theory and behaviour of waves');

insert into course
	values('MMEC 520F', 44, 'Managerial Economics', 'Learn about Economics involved in management');

insert into course
	values('EPOP 503P', 5, 'Project Oriented Practices', 'Group Project');



/* For 6th Semester Ece */


insert into course_allotted
	values('B.tech', 'E.C.E', 6, 'EOCN 632C');
insert into course_allotted
	values('B.tech', 'E.C.E', 6, 'EVSD 632C');
insert into course_allotted
	values('B.tech', 'E.C.E', 6, 'EDSP 632C');
insert into course_allotted
	values('B.tech', 'E.C.E', 6, 'Elective 1');
insert into course_allotted
	values('B.tech', 'E.C.E', 6, 'Elective 2');
insert into course_allotted
	values('B.tech', 'E.C.E', 6, 'EGPJ 604P');



insert into course
	values('EOCN 632C', 5, 'Optical Communication', 'Learn about opticla communication');

insert into course
	values('EVSD 632C', 36, 'VLSI System Design', 'Learn to design a functioning VLSI system');

insert into course
	values('EDSP 632C', 43, 'Digital Signal Processing', 'Learn basic concepts of processing a digital signal');


insert into course
	values('Elective 1', 10, 'Elective 1', 'Elective 1');

insert into course
	values('Elective 2', 17, 'Elective 2', 'Elective 2');

insert into course
	values('EGPJ 604P', 35, 'Group Project', 'Group Project');



/* For 7th Semester Ece */


insert into course_allotted
	values('B.tech', 'E.C.E', 7, 'EESD 732C');
insert into course_allotted
	values('B.tech', 'E.C.E', 7, 'EWCN 732C');
insert into course_allotted
	values('B.tech', 'E.C.E', 7, 'Elective 3');
insert into course_allotted
	values('B.tech', 'E.C.E', 7, 'Elective 4');
insert into course_allotted
	values('B.tech', 'E.C.E', 7, 'Elective 5');
insert into course_allotted
	values('B.tech', 'E.C.E', 7, 'EGPJ 706P');



insert into course
	values('EESD 732C', 17, 'Embedded System Design', 'Learn to design an embedded system');

insert into course
	values('EWCN 732C', 5, 'Wireless Communication', 'Learn basic concepts of wireless communication');

insert into course
	values('Elective 3', 10, 'Elective 3', 'Elective 3');

insert into course
	values('Elective 4', 17, 'Elective 4', 'Elective 4');

insert into course
	values('Elective 5', 35, 'Elective 5', 'Elective 5');

insert into course
	values('EGPJ 706P', 34, 'Group Project', 'Group Project');



/* For 8th Semester Ece */

insert into course_allotted
	values('B.tech', 'ECE', 8  , 'EPRJ 802P');


insert into course
	values('EPRJ 802P', 5, 'Individual Project', 'Individual Project');



