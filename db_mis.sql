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
	internship_stu_current_year int,
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
	social_service_stu_current_year int,
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

create table tech_council(
	tech_council_id int auto_increment primary key,
	tech_council_stu_id bigint,
	tech_council_stu_current_year int,
	tech_council_start_date text,
	tech_council_end_date text,
	tech_council_name_id int,
	tech_council_position varchar(100),
	tech_council_description text,
	tech_council_certificate_path text,
	tech_council_timestamp timestamp
);


create table cultural_council(
	cultural_council_id int auto_increment primary key,
	cultural_council_stu_id bigint,
	cultural_council_stu_current_year int,
	cultural_council_start_date text,
	cultural_council_end_date text,
	cultural_council_name_id int,
	cultural_council_position varchar(100),
	cultural_council_description text,
	cultural_council_certificate_path text,
	cultural_council_timestamp timestamp
);

create table project(
	project_id int auto_increment primary key,
	project_stu_id bigint,
	project_stu_current_year int,
	project_start_date text,
	project_end_date text,
	project_title varchar(100),
	project_description text,
	project_abstract_path text,
	project_report_path text,
	project_timestamp timestamp
);

create table cultural_activity(
	cultural_activity_id int auto_increment primary key,
	cultural_activity_stu_id bigint,
	cultural_activity_stu_current_year int,
	cultural_activity_start_date text,
	cultural_activity_end_date text,
	cultural_activity_name text,
	cultural_activity_description text,
	cultural_activity_certificate_path text,
	cultural_activity_timestamp timestamp
);

create table sports(
	sports_id int auto_increment primary key,
	sports_stu_id bigint,
	sports_stu_current_year int,
	sports_start_date text,
	sports_end_date text,
	sports_name text,
	sports_description text,
	sports_certificate_path text,
	sports_timestamp timestamp
);