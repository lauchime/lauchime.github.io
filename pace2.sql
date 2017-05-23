drop table class cascade constraints purge;
drop table contact_csu cascade constraints purge;
drop table location cascade constraints purge;
drop table organization cascade constraints purge;
drop table contact_org cascade constraints purge;
drop table engagement cascade constraints purge;
drop table engageclass cascade constraints purge;
drop table relate_courses cascade constraints purge;
drop table topic_areas cascade constraints purge;
drop table engloc cascade constraints purge;
drop table academic_disciplines cascade constraints purge;
drop table engageorg cascade constraints purge;
--Jessica Wilson
CREATE TABLE CLASS (
                Class_ID NUMBER(6) NOT NULL,
                CRN_Num CHAR(5) NOT NULL,
                Term VARCHAR2(10) NOT NULL,
                Class_Num CHAR(8) NOT NULL,
                Class_Title VARCHAR2(50) NOT NULL,
                Instructor_Name VARCHAR2(35) NOT NULL,
                Student_Count NUMBER(3) NOT NULL,
                CONSTRAINT CLASS_ID PRIMARY KEY (Class_ID)
);


CREATE TABLE CONTACT_CSU (
                Contact_CSU_ID NUMBER(6) NOT NULL,
                Contact_CSU_Name VARCHAR2(25) NOT NULL,
                Contact_CSU_Phone_Area_Code CHAR(3) NOT NULL,
                Contact_CSU_Phone_Numb CHAR(7) NOT NULL,
                Contact_CSU_Phone_Ext VARCHAR2(6) DEFAULT NULL,
                Contact_CSU_Email VARCHAR2(30) NOT NULL,
                CONSTRAINT CONTACT_CSU_ID PRIMARY KEY (Contact_CSU_ID)
);


-CREATE TABLE LOCATION (
                Loc_ID NUMBER(6) NOT NULL,
                Loc_Name VARCHAR2(50) NOT NULL,
                Loc_Address1 VARCHAR2(40) NOT NULL,
                Loc_City VARCHAR2(30) NOT NULL,
                Loc_State CHAR(2) NOT NULL,
                Loc_Zip CHAR(5) NOT NULL,
                Loc_County VARCHAR2(20),
                CONSTRAINT LOCATION_PK PRIMARY KEY (Loc_ID)
);


CREATE TABLE ORGANIZATION (
                Org_ID NUMBER(6) NOT NULL,
                Org_Name VARCHAR2(50) NOT NULL,
                Org_Address1 VARCHAR2(40) NOT NULL,
                Org_City CHAR(30) NOT NULL,
                Org_State VARCHAR2(2) NOT NULL,
                Org_Zip CHAR(5) NOT NULL,
                Org_Website VARCHAR2(50) NOT NULL,
                CONSTRAINT ORGANIZATION_PK PRIMARY KEY (Org_ID)
);


CREATE TABLE CONTACT_ORG (
                Org_ID NUMBER(6) NOT NULL,
                Contact_Org_ID NUMBER(6) NOT NULL,
                Contact_Org_Name VARCHAR2(50) NOT NULL,
                Contact_Org_Phone_Area_Code CHAR(3) NOT NULL,
                Contact_Org_Phone_Numb CHAR(7) NOT NULL,
                Contact_Org_Phone_Ext VARCHAR2(6) DEFAULT NULL,
                Contact_Org_Email VARCHAR2(50) NOT NULL,
                CONSTRAINT CONTACT_ORG_PK PRIMARY KEY (Org_ID, Contact_Org_ID)
);

CREATE TABLE ENGAGEMENT (
                Eng_ID NUMBER(6) NOT NULL,
                Eng_Name VARCHAR2(50) NOT NULL,
                Eng_Type VARCHAR2(35),
                Eng_Desc VARCHAR2(2500) NOT NULL,
                Eng_Details VARCHAR2(2500),
                Eng_Website VARCHAR2(200) NOT NULL,
                Eng_Student_Lvl VARCHAR2(15),
                Eng_Course_Level CHAR(4) NOT NULL,
                Eng_Time_Frame VARCHAR2(30),
                Eng_Start_Date DATE FORMAT 'DDMMYYYY' NOT NULL,
                Eng_End_Date DATE FORMAT 'DDMMYYYY' NOT NULL,
                Eng_Contact_CSU_ID NUMBER(6) NOT NULL,
                Eng_Date_Updated DATE FORMAT 'DDMMYYYY'NOT NULL,
                CONSTRAINT ENGAGEMENT_PK PRIMARY KEY (Eng_ID)
);


CREATE TABLE ENGAGECLASS (
                Eng_ID NUMBER(6) NOT NULL,
                Class_ID NUMBER(6) NOT NULL,
                Assessment VARCHAR2(2500) NOT NULL,
                Assessment_Date DATE FORMAT 'DDMMYYYY'NOT NULL,
                Student_Participants NUMBER(3) NOT NULL,
                CONSTRAINT ENGAGECLASS_PK PRIMARY KEY (Eng_ID, Class_ID)
);


CREATE TABLE RELATED_COURSES (
                Eng_ID NUMBER(6) NOT NULL,
                Course_Num CHAR(8) NOT NULL,
                Course_Title VARCHAR2(50) NOT NULL,
                CONSTRAINT RELATED_COURSES_PK PRIMARY KEY (Eng_ID, Course_Num)
);

CREATE TABLE TOPIC_AREAS (
                Eng_ID NUMBER(6) NOT NULL,
                Topic_ID NUMBER(6) NOT NULL,
                Topic_Name VARCHAR2(50) NOT NULL,
                CONSTRAINT TOPIC_AREAS_PK PRIMARY KEY (Eng_ID, Topic_ID)
);


CREATE TABLE ENGLOC (
                Eng_ID NUMBER(6) NOT NULL,
                Loc_ID NUMBER(6) NOT NULL,
                OnCamus CHAR(1) NOT NULL,
                Primary_Loc CHAR(1) NOT NULL,
                CONSTRAINT ENGLOC_PK PRIMARY KEY (Eng_ID, Loc_ID)
);


CREATE TABLE ACADEMIC_DISCIPLINES (
                Eng_ID NUMBER(6) NOT NULL,
                Disc_ID NUMBER(6) NOT NULL,
                Disc_Name VARCHAR2(50) NOT NULL,
                Disc_Desc VARCHAR2(250) NOT NULL,
                CONSTRAINT ACADEMIC_DISCIPLINES_PK PRIMARY KEY (Eng_ID, Disc_ID)
);


CREATE TABLE ENGAGE_ORG (
                Eng_ID NUMBER(6) NOT NULL,
                Org_ID NUMBER(6) NOT NULL,
                Principle_Org CHAR(1) NOT NULL,
                CONSTRAINT ENGAGEORG_PK PRIMARY KEY (Eng_ID, Org_ID)
);


