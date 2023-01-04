TASK-2 MYSQLI
----------------------------------------------------
*CREATE DATABASE:-

1)CREATE DATABASE sqltask2;
------------------------------------------------
*CREATE TABLE:-

2)CREATE TABLE SALES_PERSON(SNO INT(10)PRIMARY KEY,
	SNAME VARCHAR(50) NOT NULL,
	CITY VARCHAR(20) NOT NULL,
	COMM FLOAT(20) NOT NULL);

*INSERT DATA:-

3)INSERT INTO sales_person(SNO,SNAME,CITY,COMM)
	VALUES
	(1001,"PEEL","LONDON","0.12"),
	(1002,"SERRES","SAN JOSE","0.13"),
	(1003,"AXELROD","NEW YORK","0.1"),
	(1004,"MOTIKA","LONDON","0.11"),
	(1007,"RAFKIN","BARCELONA","0.15");
----------------------------------------------------------------------
*CREATE TABLE:-

1)CREATE TABLE CUSTOMER(CNM INT(10)PRIMARY KEY,
	CNAME VARCHAR(50) NOT NULL,
	CITY VARCHAR(20) NOT NULL,
	RATING INT(10) NOT NULL,
	SNO INT(10) NOT NULL); 

*INSERT DATA:-

2)INSERT INTO customer(CNM,CNAME,CITY,RATING,SNO)
			VALUES
			(201,"HOFFMAN","LONDON",100,1001),
			(202,"GIOVANNE","ROME",200,1003),
			(203,"LIU","SAN JOSE",300,1002),
			(204,"GRASS","BARCELONA",100,1002),
			(206,"CLEMENS","LONDON",300,1007),
			(207,"PEREIRA","ROME",100,1004);
---------------------------------------------------------------------
*CREATE TABLE:-

1)CREATE TABLE _ORDER(ONM INT(10) PRIMARY KEY,
			AMT FLOAT(5) NOT NULL,
			ODE DATE NOT NULL,
			CNM INT(5) NOT NULL,
			SNO INT(10) NOT NULL);

*INSERT DATA:-

2)INSERT INTO _order(ONM,AMT,ODE,CNM,SNO) 
		VALUES
		(3001,18.69,"1994-10-03",201,1007),
		(3002,1900.1,"1994-10-03",207,1004),
		(3003,767.19,"1994-10-03",201,1001),
		(3005,3005,"1994-10-03",203,1002),
		(3006,3006,"1994-10-04",201,1007),
		(3007,3007,"1994-10-05",204,1002),
		(3008,3008,"1994-10-05",206,1001),
		(3009,3009,"1994-10-04",202,1003),
		(3010,3010,"1994-10-06",204,1002),
		(3011,3011,"1994-10-06",206,1001);
-----------------------------------------------------------------
			//QUESTION//
a) All orders for more than $1000. 
-> SELECT * FROM _order o WHERE o.AMT >1000 ;

b) Names and cities of all salespeople in London with commission above 0.10.
-> SELECT s.SNAME,s.CITY FROM sales_person s WHERE comm > 0.10 and CITY='LONDON';

c) All salespeople either in Barcelona or in London.
->- SELECT s.SNAME,s.CITY FROM sales_person s WHERE s.CITY IN('BARCELONA','LONDON');

d) All salespeople with commission between 0.10 and 0.12. (Boundary values should be excluded).
-> SELECT SNAME,COMM FROM sales_person WHERE COMM > 0.10 AND COMM <0.12;

e) All customers with NULL values in city column.
-> SELECT CNAME FROM customer WHERE CITY IS NULL


f) All orders taken on Oct 3Rd and Oct 4th 1994.
-> SELECT * FROM _order WHERE ODE IN ('1994-10-03','1994-10-04');


g) All customers serviced by peel or Motika.
-> SELECT * FROM customer WHERE SNO IN (1001,1004);


h) All customers whose names begin with a letter from A to B
-> SELECT * FROM customer WHERE CNAME LIKE 'A%' OR CITY LIKE 'B%';


i) All customers excluding those with rating <= 100 unless they are located in Rome.
-> SELECT * FROM customer WHERE RATING <=100 AND CITY ='ROME';

j) All orders except those with 0 or NULL value in amt field.
-> SELECT * FROM _order WHERE AMT IS NOT  NULL

k) Count the number of salespeople currently listing orders in the order table. 
->	SELECT COUNT(DISTINCT SNO) AS SNO FROM _order;
