-- Tables
create table employee_code_table (
  employee_code varchar(50) PRIMARY KEY,
  employee_code_name varchar(50),
  employee_domain varchar(50)
);

create table employee_salary_table (
  employee_id varchar(10) PRIMARY KEY,
  employee_salary INT,
  employee_code varchar(50),
  FOREIGN KEY(employee_code)
  REFERENCES employee_code_table(employee_code)
  ON DELETE CASCADE
);

create table employee_details_table (
  employee_id varchar(10),
  employee_first_name varchar(20),
  employee_last_name varchar(20),
  Graduation_percentile INT,
  FOREIGN KEY(employee_id)
  REFERENCES employee_salary_table(employee_id)
  ON DELETE CASCADE
);


-- Queries
-- 1
select
employee_first_name,employee_salary
from
employee_details_table as e1
inner join
employee_salary_table as e2
on
e1.employee_id=e2.employee_id
where employee_salary > 50;

-- 2
select employee_last_name
from
employee_details_table
where
Graduation_percentile > 70;

-- 3
select
employee_code_name,Graduation_percentile
from
employee_details_table as e1
inner join
employee_salary_table as e2
on
e1.employee_id=e2.employee_id
inner join
employee_code_table as e3
on
e2.employee_code=e3.employee_code
where
Graduation_percentile < 70;

-- 4
select
concat(employee_first_name,' ',employee_last_name)
as
employee_full_name
from
employee_details_table as e1
inner join
employee_salary_table as e2
on
e1.employee_id=e2.employee_id
inner join
employee_code_table as e3
on
e2.employee_code = e3.employee_code
where
employee_domain !='Java';

-- 5
select
employee_domain,sum(employee_salary)
from
employee_salary_table as e1
inner join
employee_code_table as e2
on
e1.employee_code=e2.employee_code
group by
employee_domain;

-- 6
select
employee_domain,sum(employee_salary) as total_salary
from
employee_salary_table as e1
inner join
employee_code_table as e2
on
e1.employee_code=e2.employee_code
group by
employee_domain
having
total_salary >= 30;

-- 7
select
employee_id
from
employee_salary_table
where
employee_code=NULL;
