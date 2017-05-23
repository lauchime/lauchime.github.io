/* Group 2                                                                 */
/* LoadPACE.sql inserts data into tables of the PACE database  */
/* Run this script after logging in to SQL*Plus                      */
/* From the SQL> prompt, type @[path:\]InsertPACE.sql        */
/* For example: SQL> @C:\MyScripts\InsertACE.sql             */



INSERT INTO ORGANIZATION VALUES ('or001','SHIELD','555 Marvel Ct','Atlanta','GA','30349','www.shield.gov');
INSERT INTO ORGANIZATION VALUES ('or002','Atlanta Pet Home','6789 Marietta St','Atlanta','GA','30349','www.atlantapethome.org');
INSERT INTO ORGANIZATION VALUES ('or003','Ranger Satellite','604 Locust Rd ','Mcdougnh','GA','30256','www.resdish.com');
INSERT INTO ORGANIZATION VALUES ('or004','GA Tech','10 St NE','Atlanta','GA','30313','www.gatech.edu');
INSERT INTO ORGANIZATION VALUES ('or005','Habitat for Humanity','567 Peathtree St','Atlanta','GA','30313','www.habitats.org');
commit;

INSERT INTO CONTACT_CENTER VALUES ('cc001','or001','Black','Widow','555-555-5033','bwidow@shield.org');
INSERT INTO CONTACT_CENTER VALUES ('cc002','or002','Michael','Cotton','555-555-5034','mc@clayton.edu');
INSERT INTO CONTACT_CENTER VALUES ('cc003','or003','Larryn','Uchime','555-534-5033','lu@clayton.edu');
INSERT INTO CONTACT_CENTER VALUES ('cc004','or004','Candis','Thomas','555-534-5086','ct@gatech.org');
INSERT INTO CONTACT_CENTER VALUES ('cc005','or005','Clark','Jone','555-505-5033','cjone@habit.org');
commit;

INSERT INTO COORDINATOR VALUES (1,'Johnny','Ross','jross@clayton.edu','555-666-7777');
commit;

INSERT INTO CLASSES VALUES ('cl001','ITDB 4201','Advance Database','Database','10','FALL',2015,'Booth');
INSERT INTO CLASSES VALUES ('cl002','ITFN 4501','Infomatic Intergrate','Informatic','20','FALL',2015,'Booth');
INSERT INTO CLASSES VALUES ('cl003','ENG 2201','American Literature','English','25','FALL',2015,'Goodman');
INSERT INTO CLASSES VALUES ('cl004','ITDB 4203','Super Advance Database','Database','10','FALL',2015,'Qu');
INSERT INTO CLASSES VALUES ('cl005','ITFN 3601','Operation System','Comp Science','30','Spring',2016,'Jeff');
commit;




insert into ENGAGEMENT values ('e001','Forest Guy','Run throught the wood','Intern','www.forestguy.org',to_date('01-12-2016','mm/dd/yyyy'),to_date('02-14-2016','mm/dd/yyyy'),'All',1);
insert into ENGAGEMENT values ('e002','Clean Water','Work for the City of Atlanta front','Intern','www.atl.org',to_date('01-12-2016','mm/dd/yyyy'),to_date('05-14-2016','mm/dd/yyyy'),'Junior',1);
insert into ENGAGEMENT values ('e003','Clean Air','Work for DDT','Intern','www.ddt.org',to_date('01-12-2016','mm/dd/yyyy'),to_date('06-14-2016','mm/dd/yyyy'),'All',1);
insert into ENGAGEMENT values ('e004','Database Built','Help Dr. Jeff with PACE','Intern','www.clayton.edu',to_date('01-01-2016','mm/dd/yyyy'),to_date('05-14-2016','mm/dd/yyyy'),'Senior',1);
insert into ENGAGEMENT values ('e005','Adapt a Pet','Build website for Pet Home','Intern','www.atlantapethome.org',to_date('01-12-2016','mm/dd/yyyy'),to_date('05-04-2016','mm/dd/yyyy'),'Junior',1);
commit;

INSERT INTO LOCATION VALUES ('L001','e001','Forest Park Wood','555 Forest Rd','Forest Park','30260',0);
INSERT INTO LOCATION VALUES ('L002','e002','City Hall','555 Atlanta Rd','Atlanta','30349',0);
INSERT INTO LOCATION VALUES ('L003','e003','DDT Headquarter','55 Don Rd','Atlanta','30312',0);
INSERT INTO LOCATION VALUES ('L004','e004','Clayton State','2003 Clayton BLVD','Morrow','30260',1);
INSERT INTO LOCATION VALUES ('L005','e005','Atlanta Pet','6789 Marietta St','Atlanta','30349',0);
commit;

INSERT INTO RELATE_COURSE VALUES ('e001','cour01','ITFN 2201','Learning how to apply db to web');
INSERT INTO RELATE_COURSE VALUES ('e002','cour02','ITFN 3601','Learning about OS');
INSERT INTO RELATE_COURSE VALUES ('e003','cour03','ENG 1102','Learning how to write');
INSERT INTO RELATE_COURSE VALUES ('e004','cour04','ITDB 4201','Learning how to apply db');
INSERT INTO RELATE_COURSE VALUES ('e005','cour05','ITFN 1101','Learning about computer');

INSERT INTO TOPIC_AREA VALUES ('e001','ta01','Programming');
INSERT INTO TOPIC_AREA VALUES ('e002','ta02','Database');
INSERT INTO TOPIC_AREA VALUES ('e003','ta03','Informatic');
INSERT INTO TOPIC_AREA VALUES ('e004','ta04','Database');
INSERT INTO TOPIC_AREA VALUES ('e005','ta05','Webmaster');
commit;

INSERT INTO ORGAN_ENGAGE VALUES ('e001','oe001','or001',1);
INSERT INTO ORGAN_ENGAGE VALUES ('e002','oe002','or002',0);
INSERT INTO ORGAN_ENGAGE VALUES ('e003','oe003','or003',0);
INSERT INTO ORGAN_ENGAGE VALUES ('e004','oe004','or004',0);
INSERT INTO ORGAN_ENGAGE VALUES ('e005','oe005','or005',0);
commit;

INSERT INTO ACADEMIC_DISCIPLINE VALUES ('a001','e001','IT');
INSERT INTO ACADEMIC_DISCIPLINE VALUES ('a002','e002','Computer Science');
INSERT INTO ACADEMIC_DISCIPLINE VALUES ('a003','e003','IT');
INSERT INTO ACADEMIC_DISCIPLINE VALUES ('a004','e004','Computer Science');
INSERT INTO ACADEMIC_DISCIPLINE VALUES ('a005','e005','IT');
commit;

INSERT INTO PROJECTS VALUES ('e001','p001','Jogging through some wood.',50,'n/a','cl004');
INSERT INTO PROJECTS VALUES ('e002','p002','Make sure all water meters are working.',20,'n/a','cl002');
INSERT INTO PROJECTS VALUES ('e003','p003','Work on improving the db.',10,'n/a','cl001');
INSERT INTO PROJECTS VALUES ('e004','p004','Work on PACE db.',10,'n/a','cl004');
INSERT INTO PROJECTS VALUES ('e005','p005','Work on website.',5,'n/a','cl005');
commit;