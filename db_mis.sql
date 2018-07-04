create table students(
 stu_id bigint primary key,
 stu_email varchar(100),
 stu_password varchar(100),
 stu_fname varchar(100),
 stu_mname varchar(100),
 stu_lname varchar(100),
 stu_dob date,
 stu_gender int,
 stu_blood varchar(10),
 stu_year int,
 stu_year_of_joining int,
 stu_division varchar(10),
 stu_branch int,
 stu_add1 varchar(100),
 stu_add_locality varchar(100),
 stu_add_city varchar(100),
 stu_add_district varchar(100),
 stu_add_state varchar(100),
 stu_add_pincode bigint,
 stu_add_country int,
 stu_father_name varchar(100),
 stu_father_number bigint,
 stu_father_email varchar(100),
 stu_mother_name varchar(100),
 stu_mother_number bigint,
 stu_mother_email varchar(100),
 stu_img_path text,
 stu_status int default 1,
 stu_timestamp timestamp
);

create table main_activity(
	main_act_id int auto_increment primary key,
	main_act_name varchar(100),
	main_act_time timestamp
);

create table add_type_activity(
	add_type_act_id int auto_increment primary key,
	add_type_act_name varchar(100),
	add_type_main_act_id,
	add_type_act_time timestamp
);

create table internship(
	internship_id int auto_increment primary key,
	internship_stu_id bigint,
	internship_start_date text,
	internship_end_date text,
	internship_org varchar(100),
	internship_super_name varchar(100),
	internship_super_email varchar(100),
	internship_super_number varchar(100),
	internship_report_path text,
	internship_certificate_path text,
	internship_timestamp timestamp
);


create table social_service(
	social_service_id int auto_increment primary key,
	social_service_stu_id bigint,
	social_service_start_date text,
	social_service_end_date text,
	social_service_org varchar(100),
	social_service_incharge_name varchar(100),
	social_service_incharge_email varchar(100),
	social_service_incharge_number varchar(100),
	social_service_description text,
	social_service_report_path text,
	social_service_certificate_path text,
	social_service_timestamp timestamp
);
