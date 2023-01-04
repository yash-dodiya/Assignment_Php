TASK:-1 TOPIC-SQL
-------------------------------------------------
*CREATE DATABASE:-

1) CREATE DATABASE TEST;
----------------------------------------------------------------------------------------
*CREATE TABLE:-

2)CREATE TABLE employee(EM_ID INT PRIMARY KEY AUTO_INCREMENT,
	FIRST_NAME VARCHAR(50) NOT NULL,
	LAST_NAME VARCHAR(50) NOT NULL,
	SALARY INT(10) NOT NULL,
	JOINING_DATE DATE,
	DEPARTMEN VARCHAR(40)	
	);

*INSERT TABLE DATA:-

3)INSERT INTO employee(EM_ID,FIRST_NAME,LAST_NAME,SALARY,JOINING_DATE,DEPARTMEN) 
			VALUES 
			(1,"JOHAN","ABRAHAM",1000000,"2013-01-01","BANKING"),
			(2,"MICHAEL","CLERK",800000,"2013-01-01","INSURANCE"),
			(3,"ROY","THOMAS",700000,"2013-02-01","BANKING"),
			(4,"TOM","JOSE",600000,"2013-02-01","INSURANCE"),
			(5,"JERRY","PINTO",650000,"2013-01-01","INSURANCE"),
			(6,"PHILIP","MATHEW",750000,"2013-01-01","SARVISH"),
			(7,"TESTNAME1","123",650000,"2013-01-01","SARVISH"),
			(8,"TESTNME2","LNAME%",600000,"2013-02-01","INSURANCE");

---------------------------------------------------------------------------------------------------
*CREATE TABLE:-
 
1) CREATE TABLE Incentives(Incentive_Id INT PRIMARY KEY AUTO_INCREMENT,
	employee_ref_Id INT(10) NOT NULL ,
	Incentive_date DATE NOT NULL ,
	incentive_amt int(10) NOT NULL 	
	);

*INSERT TABLE DATA:-

2)INSERT INTO incentives(Incentive_Id,employee_ref_Id,Incentive_date,Incentive_amt)
			VALUES 
			(1,1,"2013-02-01",5000),
			(2,2,"2013-02-01",3000),
			(3,3,"2013-02-01",4000),
			(4,1,"2013-01-01",4500),
			(5,2,"2013-01-01",3500);
-------------------------------------------------------------------------------------------------------

					//QUESTION//


a) Get First_Name from employee table using alias name “Employee Name”.
-> SELECT EmployeeName.FIRST_NAME FROM employee EmployeeName;
-> SELECT FIRST_NAME EMPLOYEE_NAME FROM EMPLOYEE;

b) Get FIRST_NAME, Joining year, Joining Month and Joining Date from employee table. 
-> SELECT e.FIRST_NAME, DATE_FORMAT(e.JOINING_DATE, "%Y") JOINYEAR , 
   DATE_FORMAT(e.JOINING_DATE, "%m") JOINMONTH,
   DATE_FORMAT(e.JOINING_DATE, "%d") JOINDATE FROM employee e;

c) Get all employee details from the employee table order by First Name Ascending And Salary descending?
-> SELECT * FROM employee e ORDER BY e.FIRST_NAME ASC,e.SALARY DESC ;

d) Get employee details from employee table whose first name contains „o‟.
-> SELECT * FROM employee e WHERE (e.FIRST_NAME LIKE '%o%');

e) Get employee details from employee table whose joining month is “January”. 
-> SELECT * FROM employee e WHERE DATE_FORMAT(e.JOINING_DATE, "%M") = "january";

f) Get department, total salary with respect to a department from employee table Order By total salary descending.
-> SELECT e.DEPARTMEN,SUM(e.SALARY) TOTAL_SALARY FROM employee e GROUP BY e.DEPARTMEN ORDER BY TOTAL_SALARY DESC;

g) Get department wise maximum salary from employee table order by salary ascending? 
-> SELECT e.DEPARTMEN,MAX(e.SALARY) MAXSALARY FROM employee e GROUP BY e.DEPARTMEN ORDER BY e.SALARY ASC; 

h) Select first_name, incentive amount from employee and incentives table for those Employees who have incentives and incentive amount greater than 3000	 
-> SELECT e.FIRST_NAME,i.incentive_amt FROM employee e INNER JOIN INCENTIVES i ON e.EM_ID=i.employee_ref_Id AND i.incentive_amt >3000; 

i) Select 2nd Highest salary from employee table.
-> SELECT * from employee where salary!=(select Max(salary) from employee ) ORDER BY salary DESC LIMIT 1;
->(select * from employee group by salary order by  salary desc LIMIT 1,1 ;)

j) Select first_name, incentive amount from employee and incentives table for all Employees who got incentives using left join.
-> SELECT e.FIRST_NAME,NVL(i.incentive_amt,0) AS incentives_amt FROM employee e LEFT JOIN incentives i ON e.EM_ID=i.employee_ref_Id;

k) Create View OF Employee table in which store first name, last name and salary only.
-> CREATE VIEW employee_view AS SELECT e.FIRST_NAME,e.LAST_NAME,e.SALARY FROM employee e;


l) Create Procedure to find out department wise highest salary. 
-> CREATE PROCEDURE emp_maxsalary(INOUT SALARY INT(10))
	SELECT e.DEPARTMEN, MAX(e.SALARY) FROM employee e
	GROUP BY e.DEPARTMEN;

	CALL emp_maxsalary(1);

m) Create after Insert trigger on Employee table which insert records in view table. 
->	CREATE TRIGGER insert_into_view AFTER INSERT ON employee 
	FOR EACH ROW 
         	INSERT INTO employee_view (FIRST_NAME,LAST_NAME,SALARY,)
            VALUES 
            (NEW.FIRST_NAME, NEW.LAST_NAME,NEW.SALARY);

INSERT INTO employee(EM_ID,FIRST_NAME,LAST_NAME,SALARY,JOINING_DATE,DEPARTMEN) 
		VALUES 
		(9,"yash","dodiya",750000,"2022-01-01","BANKING");