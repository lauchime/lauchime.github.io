create view projectclass_view("Project ID", "Project Detail", "Group Size Needed", "Stat Report", "Professor Name", "Course Name", "Semester","Year")
AS Select project_id, project_desc, group_size, status_report, instructor_lname,course_name,semester, years
From projects, classes
Where projects.class_id= classes.class_id;

create view wholocation_view ("Location ID","Location Name","Engagement Name","Engage Detail", "Start Date", "End Date", "Prime Location")
AS Select location_id, location_name, engage_name, engage_desc,start_engage,end_engage,primary_location
from engagement,location
where engagement.engage_id=location.engage_id
AND primary_location='1';


create view moneygroup_view ("Organ Name", "Engage Name", "Project Detail", "Stat Report" ,"Professor", "Contact Name", "Coordinator Name")
AS Select organ_name, engage_name, project_desc, status_report, instructor_lname,contact_lname,c_lname
From engagement e,classes c,projects p,organization o, contact_center cc,organ_engage oe, coordinator co
Where e.coord_id=co.coord_id
AND e.engage_id=oe.engage_id
AND e.engage_id=p.engage_id
AND o.organ_id=oe.organ_id
AND o.organ_id=cc.organ_id
AND p.class_id=c.class_id
AND oe.primary_company='1'

create or replace view contact_view ("Organ Name","Organ Address","STATE", "Contact First Name","Contact Last Name", "Phone")
AS Select organ_name, organ_StreetName,organ_state,contact_fname,contact_lname,phone
From organization, contact_center
Where organization.organ_id=contact_center.organ_id;