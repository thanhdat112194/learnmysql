<?php
"mysql is a freely available open source relational database management System
(RDBMS) that uses structured query language (SQL)
";
// console cmd
//----------------------thanhdathse   
//cd  you open inside page
//cd .. before  page
/// A temporary password is generated for root@localhost: j3&GpYwV)ly3
////new password         
// ALTER USER "root"@"localhost" IDENTIFIED BY "";this password       : 
//start server 
// mysqld --console
//open terminal mysql
//mysql -uroot -p
//select database();
// \s status
//seve story  \T C:/mysql8/story.log  \t off record
//you can change (;)exit    ( | ) 
//\c delete wrong cmd
//\. C:\....... put  file cmd
//\h ducumentation
//exit



///********* */
//show databases;
//change name table   ALTER TABLE table1 RENAME newname;
//view table  desc nametable;
//add new row       ALTER TABLE newname  add address char(10);
//change  name row and type   ALTER TABLE newname change email gmail char(25) not null; 
//add comment  
//change  Default   ALtER TABLE newname MODIFY password  varchar(20) not null;
//delete  alter table newname drop column age;
//\q exit


//
//  insert into newname
//     (name,gmail,password,address)
//        value
//      ("Tom","tome@gmail.com","457878","st.5");
//*** */
//select
// take all from table   select * FROM  newname;
//only name      select name from  newname;  
//if   name email  and  id <2  select name,gmail from newname where id<2; 
//take  email  if name = tom  and id<3 
//  
//update ***
//update newname
// set  address="st.78"
 //where id=2;



 //choose database  use nametable;
 //create table

 // //create table(
   //  create table Computer(
   //       id int(11) primary key auto_increment,
   //        model varchar(50),
   //        price DECIMAL(7,3),
   //        seria char(10),
   //        id_seria char(11) 
   //       );
//);
// insert into cars
// -> (model,seria,price,id_seria)
// -> values
// -> ("bmw","x5","7000","454"),
// -> ("opel","astra","2500","44888");
//or

// insert into cars
// -> set id = 5,model = "bmw",seria = "m3",price = "3000",id_seria="5485";
 //create database  if not exists  project;


//" (min   or  max )"
// insert into cars
// -> set id = 5,model = "bmw",seria = "m3",price = "3000",id_seria="5485";


// count() ?returns number of rows that matches specified criteria
//sum 
//group by   statement  is often used with (sum,max,min and  cound)
//avg return  number of row that matches a  specified criteria
// insert into cars
//  (model,price,seria,id_seria,color)
//  values
//  ("mers","3000","e250","555","red"),
//  ("mers","3500","e250","555","red"),
//  ("mers","3200","e350","555","black"),
//  ("mers","3500","e350","555","black"),
//  ("bmw","3000","x5","15654","green"),
//  ("bmw","3500","x6","1d654","green"),
//  ("bmw","3200","x3","1s5654","blue"),
//  ("bmw","3000","x5","156c54","black"),
//  ("opel","2500","astra","156ff54","white"),
//  ("opel","2500","astra","156ff54","white"),
//  ("opel","3200","astra","156ff54","black");



//select count(model),color from cars group by cars.color;
//****
//we have 3 mers where  all < 3500 and 1 red
//and 2  black
//select count(model),price,color from cars where model = "mers" group by cars.color,cars.price
   // -> having price<3500;
   // select count(model),color,price from cars
   // where color = "black" and color = "red"
   // group by cars.price  ;

   // new lesson
   // ENUM
   //Enum value must by one of those listed in column definition,or
   //internal numberic equivalent
    create table newcar2(
        id int(11) auto_increment primary key,
        model varchar(200),
        color  varchar(200),
        year  varchar(200)
        
        
   );
  // color enum("red","black","green")
   // insert into enumTAB
   // (id,model,eng,color)
   // values
   // ("1","mers","1.5","white");

   // update  enumTAB
   // -> set color = "green" where color = "red";
  
  
  // record  table to  other table 
  
  insert into  enumTAB(id,model,eng,color)
  values 
  ("2","mers","25","red"),
  ("3","bmw","25","black");


  insert into newtable(id,model,eng,color)
  select  "1",model,eng,color from enumTAB;

  insert into newtable(id,model,eng,color)
  select "3",model,eng,color 
  from  enumTAB
  where id like "3%";
  

 // temporary 

//  create temporary table if not exists tmptable(
//    -> id int(11),
//    -> tmp char(10)
//    -> );

//load and outfile 
LOAD DATA
 INFILE "mydb.txt"
 INTO TABLE newcar
 FIELDS TERMINATED BY ","
 LINES TERMINATED BY "\n";

// outfile
select * into outfile "newdb2.txt"
FIELDS TERMINATED BY "," OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY "\n"
from newcar;

create table row1
  select * from(values row("hello","by","goods"),row("a1","a2","a3")) as v(a,b,c);