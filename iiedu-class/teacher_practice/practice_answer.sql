-- // 第一题
SELECT `em`.`Fname`,`em`.`Lname`,`em`.`Ssn`,`em`.`Sex`,`em`.`Salary`
FROM `employee` AS `em`
ORDER BY
    `em`.`Salary`
DESC


-- // 第二题
SELECT `em`.`Fname`,`em`.`Lname`,`em`.`Ssn`,`em`.`Bdate`,`de`.`Dname`
FROM `employee` AS `em`
LEFT JOIN 
 `department`AS`de`
 ON 
 `em`.`Dno` = `de`.`Dnumber`


-- // 第三题
SELECT `em`.`Fname`,`em`.`Lname`,`em`.`Ssn`,
IF(`em`.`Sex` = 'M',"男","女") AS `employee_Sex`,
`de`.`Dependent_name`,`de`.`Bdate`,`de`.`Relationship`,
IF(`de`.`Sex` = 'M',"男","女") AS `Dependent_Sex`
FROM 
    `employee` AS `em`
INNER JOIN  -- // JOIN & INNER JOIN ，INNER JOIN 是JOIN默认值
    `dependent` as `de`
ON
	`em`.`Ssn` = `de`.`Essn`
ORDER BY
    `de`.`Bdate`
ASC
--------------------- 第三題 的 第二種 解法
SELECT `em`.`Fname`,`em`.`Lname`,`em`.`Ssn`,
REPLACE(REPLACE(`em`.`Sex`,'M','男'),'F','女') AS `employee_Sex`,
`de`.`Dependent_name`,`de`.`Bdate`,`de`.`Relationship`,
REPLACE(REPLACE(`de`.`Sex`,'M','男'),'F','女') AS `Dependent_Sex`
FROM 
    `employee` AS `em`
INNER JOIN  
    `dependent` as `de`
ON
	`em`.`Ssn` = `de`.`Essn`
ORDER BY
    `de`.`Bdate`
ASC


-- // 第四题
SELECT 
	`employee`.`Fname`,
	`employee`.`Lname`, 
	`employee`.`Bdate`,
	DATE_FORMAT(`employee`.`Bdate`,'%Y') AS `Byear`,
	`works_on`.`Hours`, 
	`project`.`Pname`, 
	`project`.`Plocation`
FROM
	`employee`
LEFT JOIN 
	`works_on`
ON
	`employee`.`Ssn` = `works_on`.`Essn`
LEFT JOIN 
	`project`
ON
	`works_on`.`Pno`= `project`.`Pnumber`
WHERE 
	DATE_FORMAT(`Bdate`,'%Y') > 1954
ORDER BY
    `Byear`
ASC
