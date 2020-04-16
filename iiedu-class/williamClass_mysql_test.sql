新增 ---------
insert into `dataBase`('sid', 'sName', 'sAge') 
values 
    ('001', 'william', '29'),
    ('002', 'alex', '21'),
    ('003', 'wills', '25');

 
修改 ---------
update `dataBase`
set 
    `sName` = '雞掰' // 即將修改的 欄位內容
where 
    `sid` = '001'; // 修改的 欄位 (條件)


刪除 ---------
delete from `dataBase` // 其實就等於 delete * from `dataBase`
where 
    `sid` = '001'; // 刪除的 欄位 (條件)


查找 ---------
select * 
from `dataBase` 
where 
    `sid` = '001'; // 查找的 欄位 (條件)


查找 - AND - 必須 ---------
select * 
from `dataBase` 
where 
    `sid` = '001'
AND
    `sName` = 'william'


查找 - OR - 或者 ---------
select * 
from `dataBase` 
where 
    `sid` = '001'
OR
    `sName` = 'william'


排序 - ORDER BY ---------
select * 
from `dataBase` 
ORDER BY
    `dataBase`.'sid'
DESC    // Z -> A
ASC     // A -> Z


找出相似 - like %小% or like _小_ ---------
"%" 是 無限
"_" 是 一個
select `sid`, `sName`
from `dataBase` 
where 
    `sAge` like %2%
    `sAge` like _2_


替代 - AS ---------
select `DB`.`sid`, `DB`.`sName`
from `dataBase` AS `DB`
where
    `DB`.`sAge` = '29'


擷取不同 - DISTINCT ---------
SELECT DISTINCT `sid`
from `dataBase`


左邊資料為主，結合 - left join  or right join or inner join(A&B的交集) ---------
找出 與 左邊一樣的條件，並與左邊的結合 
SELECT `sid`，`pid` // 2張表格
from 
    `dataBase` // 左邊
left join 
    `product`  // 右邊
on 
    `dataBase`.`sName` = `product`.`pName`
---------
SELECT `sid`，`pid` // 3張表格
from 
    `dataBase` // 左邊
left join 
    `product`  // 右邊
on 
    `dataBase`.`sName` = `product`.`pName`
left join 
    `detail`  
on 
    `product`.`pid` = `detail`.`did`


最大值 - MAX(``) ---------
SELECT MAX(`sid`)
from `dataBase`


個數 - GROUP BY ---------
SELECT `dataBase`.`sid`, `dataBase`.`sName`, SUM(`分數欄位`) // 小明有幾個87分？
FROM `dataBase`
GROUP BY `dataBase`.`sid`, `dataBase`.`sName`


綜和 - SUM() ---------
SELECT `dataBase`.`sid`, `dataBase`.`sName`, SUM(`分數欄位`) // 小明分數全部多少分？
FROM `dataBase`
GROUP BY `dataBase`.`sid`, `dataBase`.`sName`


最大值 - COUNT() ---------
SELECT `dataBase`.`sid`, `dataBase`.`sName`, COUNT(`分數(栏位)`)
FROM `dataBase`
GROUP BY `dataBase`.`sid`, `dataBase`.`sName`

判斷 - CASE() ---------
SELECT `sId`, `cId`, `score`, 
CASE  
    WHEN `score` >= 90 THEN '成績在 90 分以上'  
    WHEN `score` < 90 AND `score` >= 70 THEN '成績在 70 到 89 分之間'  
    ELSE '成績低於 70'  
END AS `msg` // 將以上判斷放入 自創的 ”msg“ 欄位中
FROM `scores`; 



-----------------------------------------
SELECT `Fname`, `Lname`, `Address` 
FROM `employee`, `department` 
WHERE `Dname` = 'Research' 
AND `Dnumber` = `Dno`; 

SELECT *
FROM `employee` 
WHERE (`Fname` = 'John' AND `Minit` = 'B') 
OR (`Fname` = 'Franklin' AND `Minit` = 'T')


SELECT `sName`, `sNickname` 
FROM `students` 
WHERE `sId` like '_8_'; 

SELECT `sName`, `sGender` 
FROM `students` 
WHERE `sNickname` like '%人%' ;


SELECT `s`.`sName` 
FROM `students` AS `s` 
WHERE `s`.`sGender` = '女' 
AND `s`.`sNickname` = '小白';


SELECT `employee`.`Fname`, `employee`.`Lname`, `employee`.`Address` 
FROM `employee`, `department` 
WHERE `department`.`Dname` = 'Research'  
AND `department`.`Dnumber` = `employee`.`Dno`; 


SELECT * 
FROM `employee` AS `eml` 
INNER JOIN `employee` AS `emr` 
ON `eml`.`Super_ssn`=`emr`.`Ssn`;

SELECT `eml`.`Fname`, `eml`.`Lname`,`eml`.`Super_ssn`,`emr`.`Fname`,`emr`.`Lname`,`emr`.`Ssn` 
FROM `employee` AS `eml` 
INNER JOIN `employee` AS `emr` 
ON `eml`.`Super_ssn`=`emr`.`Ssn`;


SELECT `sId`, `cId`, `score`, 
CASE  
    WHEN `score` >= 90 THEN '成績在 90 分以上'  
    WHEN `score` < 90 AND `score` >= 70 THEN '成績在 70 到 89 分之間'  
    ELSE '成績低於 70'  
END AS `msg` 
FROM `scores`; 

SELECT `sId`, `cId`, `score`, 
IF(`score` >= 90, "大於 90 分", "低於 90 分") AS `msg` 
FROM `scores`;

SELECT `project`.`Dnum`, `employee`.`Lname`, `department`.`Dname`
FROM `project`
INNER JOIN `department`
ON `project`.`Dnum` = `department`.`Dnumber`
INNER JOIN `employee`
ON `department`.`Mgr_ssn` = `employee`.`Ssn`
AND `project`.`Plocation` = 'Stafford'
