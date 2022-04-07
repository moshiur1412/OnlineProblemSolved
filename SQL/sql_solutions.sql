# 
select count(city) - count(distinct city) from station;
SELECT COUNT(CITY)-(SELECT COUNT(DISTINCT(CITY))FROM STATION) FROM STATION;

# 
(select city, length(city) from station group by length(city), city limit 1)
union
(select city, length(city) from station group by length(city) desc, city limit 1)

#
select city from station 
where city like '%a' or city like '%e' or city like '%i' or city like '%0'or city like '%u'


# Weather-observation-station-11/problem
SELECT distinct city from station
where LEFT(city,1) not in ('a', 'e','i','o','u')
or right(city,1) not in ('a','e','i','o','u');

# Weather Observation Station 12
SELECT distinct city from station
where LEFT(city,1) not in ('a', 'e','i','o','u')
and right(city,1) not in ('a','e','i','o','u');

# Higher Than 75 Marks
SELECT name from  students
WHERE marks >75
ORDER by RIGHT(name,3) ASC, id

# Employee Names
select name from employee
order by name asc

# Employee Salaries
select name from employee
where salary > 2000
and months < 10
order by employee_id

# African Cities
select city.name  from city
left join country on city.countrycode = country.code
where country.continent = 'Africa'

# Average Population of Each Continent
select country.continent, round(avg(city.population)-0.5) from country
inner join city on country.code = city.countrycode
group by country.continent;

select country.continent, floor(avg(city.population))from city
join country on city.countrycode = country.code
group by country.continent;


# The Report
select case 
    when g.grade < 8 then 'NULL' 
    else s.name end students_name,
    g.grade,s.marks  from students s, grades g 
where s.marks between g.min_mark and g.max_mark 
order by g.grade desc, s.name;


SELECT students.name, 
CASE
	when students.marks >= 90 then 10
	when students.marks >= 80 then 9
	when students.marks >= 70 then 8
    when students.marks >= 60 then 7
    when students.marks >= 50 then 6
    when students.marks >= 40 then 5
    when students.marks >= 30 then 4
    when students.marks >= 20 then 3
    when students.marks >= 10 then 2
    when students.marks >= 0 then 1

END as Grade, students.marks
from students;


# Type of Triangle
SELECT
CASE
    WHEN A + B <= C or A + C <= B or B+C <= A THEN "Not A Triangle"
    WHEN A = B and B = C then "Equilateral"
    WHEN A = B or B = C or A = C THEN "Isosceles"
    WHEN A != B and B != C and A != C THEN "Scalene"
END As Triangles
from TRIANGLES

insert into Triangles(A,B,C)
values 
(10,10,10),
(11,11,11),
(30,32,30),
(40,40,40),
(20,20,21),
(21,21,21),
(20,22,21),
(20,20,40),
(20,22,21),
(30,32,41),
(50,22,51),
(20,12,61),
(20,22,50),
(50,52,51),
(80,80,80)

# The PADS
INSERT INTO OCCUPATIONS(NAME,OCCUPATION)
VALUES
('Ashley','Professor'),
('Samantha','Actor'),
('Julia','Doctor'),
('Britney','Professor'),
('Maria','Professor'),
('Meera','Professor'),
('Priya','Doctor'),
('Priyanka','Professor'),
('Jennifer','Actor'),
('Ketty','Actor'),
('Belvet','Professor'),
('Naomi','Professor'),
('Jane','Singer'),
('Jenny','Singer'),
('Kristeen','Singer'),
('Christeen','Singer'),
('Eve','Actor'),
('Aamina','Doctor')


SELECT concat(name, 
CASE
    WHEN occupation = 'Doctor' THEN '(D)'
    WHEN occupation = 'Actor' THEN '(A)'
    WHEN occupation = 'Singer' THEN '(S)'
    WHEN occupation = 'Professor' THEN '(P)'
END) AS profession

FROM OCCUPATIONS
ORDER BY OCCUPATIONS.name;

SELECT concat('There are a total of', ' ',COUNT(Occupation),' ',CASE
    WHEN occupation = 'Doctor' THEN 'doctors.'
    WHEN occupation = 'Actor' THEN 'actors.'
    WHEN occupation = 'Singer' THEN 'singers.'
    WHEN occupation = 'Professor' THEN 'professors.'
END) AS total
FROM OCCUPATIONS
GROUP BY total
ORDER BY COUNT(Occupation);

select concat(Name,'(',Substring(Occupation,1,1),')') as Name from occupations Order by Name;
select concat('There are a total of',' ',count(occupation),' ',lower(occupation),'s.') as total 
from occupations group by occupation order by total;



# Occupations

select min(Doctor), min(Professor),min(Singer),  min(Actor)
from(
select ROW_NUMBER() OVER(PARTITION By Doctor,Actor,Singer,Professor order by name asc) AS Rownum, 
case when Doctor=1 then name else Null end as Doctor,
case when Actor=1 then name else Null end as Actor,
case when Singer=1 then name else Null end as Singer,
case when Professor=1 then name else Null end as Professor
from occupations
    pivot
        ( count(occupation)
            for occupation in(Doctor, Actor, Singer, Professor)) as p
        ) temp

group by Rownum;



/*
MYSQL CODE
*/
SET @dRow = 0, @pRow = 0, @sRow = 0, @aRow = 0;

SELECT MIN(Doctor), MIN(Professor), MIN(Singer), MIN(Actor)
FROM (
    SELECT  CASE Occupation    
                WHEN 'Doctor'       THEN @dRow := @dRow + 1
                WHEN 'Professor'    THEN @pRow := @pRow + 1
                WHEN 'Singer'       THEN @sRow := @sRow + 1
                WHEN 'Actor'        THEN @aRow := @aRow + 1
            END AS row,
            IF (Occupation = 'Doctor', Name, NULL) AS Doctor,
            IF (Occupation = 'Professor', Name, NULL) AS Professor,
            IF (Occupation = 'Singer', Name, NULL) AS Singer,
            IF (Occupation = 'Actor', Name, NULL) AS Actor
    FROM    OCCUPATIONS
    ORDER BY Name
) a
GROUP BY row;


/* My Solutions */
SET @r1 =0, @r2 =0, @r3=0, @r4= 0;
SELECT MIN(d), MIN(p), MIN(s), MIN(a)
FROM (
    SELECT 
        CASE Occupation
            WHEN 'Doctor' then @r1 :=@r1+1
            WHEN 'Professor' then @r2 :=@r2+1
            WHEN 'Singer' then @r3 :=@r3+1
            WHEN 'Actor' THEN @r4 :=@r4+1
        END as rowNumber,
        IF (Occupation = 'Doctor', Name, NULL) As d,
        IF (Occupation = 'Professor', Name, NULL) as p,
        IF (Occupation = 'Singer', Name, NULL) as s,
        IF (Occupation = 'Actor', Name, NULL) as a
    FROM occupations
    ORDER BY Name
) subquery
GROUP BY rowNumber;



# New Companies 
================

CREATE TABLE Company(
    company_code varchar(10), 
    founder varchar(10)
);

CREATE TABLE Lead_Manager(
    lead_manager_code varchar(10),
    company_code varchar(10)
);


CREATE TABLE Senior_Manager(
    senior_manager_code VARCHAR(10),
    lead_manager_code VARCHAR(10),
    company_code VARCHAR(10)
);

CREATE TABLE Senior_Manager(
    senior_manager_code VARCHAR(10),
    lead_manager_code VARCHAR(10),
    company_code VARCHAR(10)
);

CREATE TABLE Senior_Manager(
    senior_manager_code VARCHAR(10),
    lead_manager_code VARCHAR(10),
    company_code VARCHAR(10)
);


INSERT INTO Company
VALUES('C1', 'Monika'),('C2', 'Samantha');


INSERT INTO Lead_Manager
VALUES('LM1', 'C1'),('LM2', 'C2');


INSERT INTO Senior_Manager
VALUES('SM1', 'LM1', 'C1'),('SM2', 'LM1', 'C1'),('SM3', 'LM2', 'C2');

INSERT INTO Manager
VALUES('M1', 'SM1', 'LM1', 'C1'),('M2', 'SM3', 'LM2', 'C2'),('M3', 'SM3', 'LM2', 'C2');


INSERT INTO Employee
VALUES('E1', 'M1', 'SM1', 'LM1', 'C1'),('E2', 'M1', 'SM1', 'LM1', 'C1'),('E3', 'M2', 'SM3', 'LM2', 'C2'),('E4', 'M3', 'SM3', 'LM2', 'C2');

---- QUERY ---
SELECT
    c.company_code,
    c.founder,
    COUNT(DISTINCT e.lead_manager_code),
    COUNT(DISTINCT e.senior_manager_code),
    COUNT(DISTINCT e.manager_code),
    COUNT(DISTINCT e.employee_code)
FROM
    Employee e,
    Company c
WHERE
    c.company_code = e.company_code
GROUP BY
    e.company_code,
    c.founder
ORDER BY
    c.company_code;



# Revising Aggregations - The Count Function
SELECT COUNT(NAME) FROM CITY
WHERE POPULATION > 100000;


# Revising Aggregations - The Sum Function
SELECT SUM(POPULATION) FROM CITY 
WHERE DISTRICT = 'California';

# Revising Aggregations - The AVG Function
SELECT AVG(Population) FROM CITY
WHERE District = 'California';

# Average Population
SELECT Round(AVG(Population)) FROM CITY;

# Japan Population
SELECT SUM(POPULATION) FROM CITY
WHERE COUNTRYCODE = 'JPN';

# Population Density Difference
SELECT MAX(POPULATION) - MIN(POPULATION)
FROM CITY;

# The Blunder
SELECT ceil(AVG(salary) - AVG( REPLACE (Salary, 0, ''))) FROM Employees


# Top Earners
SELECT *, (months * salary) as earnings, count(months * salary)  FROM TopEarners
GROUP by earnings
ORDER BY earnings DESC
limit 1;


# Latitiute & longtitute
SELECT ROUND(sum(lat_n), 2), ROUND(sum(long_w), 2)
FROM station;

# Weather Observation Station 13
SELECT TRUNCATE(sum(lat_n), 4) as lat FROM station WHERE lat_n BETWEEN 38.7880 and 137.2345

# Weather Observation Station 14
SELECT TRUNCATE(lat_n, 4) as lat FROM station WHERE lat_n < 137.2345 order by lat_n desc limit 1;

# Weather Observation Station 15
SELECT round(LONG_W, 4) FROM station WHERE lat_n = (select max(lat_n) from station where lat_n < 137.2345);

# Weather Observation Station 16
SELECT ROUND(MIN(LAT_N), 4) FROM STATION WHERE lat_n > 38.7780;

# Weather Observation Station 17
SELECT ROUND(LONG_W,4) FROM STATION WHERE LAT_N = (SELECT MIN(LAT_N) FROM STATION WHERE lat_n > 38.7780);

# Weather Observation Station 18 
SELECT
    ROUND(
        MAX(LAT_N) - MIN(LAT_N) + MAX(LONG_W) - MIN(LONG_W), 4)
FROM STATION;

# Weather Observation Station 19
SELECT ROUND(
        SQRT( POW(MAX(LAT_N) - MIN(LAT_N), 2) + POW(MAX(LONG_W) - MIN(LONG_W), 2) ), 4 )
FROM STATION;

# Weather Observation Station 20


# Asian Population
select sum(city.population)
from city 
join country on city.countrycode = country.code
where continent = 'Asia';


# Weather Observation Station 20
select round(S.LAT_N,4) mediam from station S where (select count(Lat_N) from station where Lat_N < S.LAT_N ) = (select count(Lat_N) from station where Lat_N > S.LAT_N)









