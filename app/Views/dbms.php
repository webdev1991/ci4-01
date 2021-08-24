<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h2>Hello World</h2>

<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "rootadmin", "dbms_class");


$sql = "SELECT student.id, student.roll_no, student.s_name, course.c_name
        FROM student
        INNER JOIN course ON student.course_id=course.id";

$result = mysqli_query($conn, $sql);

/*
$sql = "SELECT * FROM student ";

$result = mysqli_query($conn, $sql);

*/
/*
$sql = "SELECT id, roll_no, s_name, s_phone, s_address, course_id FROM student";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row["id"]. " - Roll no: " . $row["roll_no"]. "- Name: " . $row["s_name"]. "- Phone: " . $row["s_phone"]. "- Address: " . $row["address"]. "- Course_id: " . $row["course_id"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
*/
/*
$sql = "CREATE TABLE course (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    c_code VARCHAR(50) NOT NULL UNIQUE ,
    c_name VARCHAR(50) NOT NULL  
    )";

*/
/*
$sql = "CREATE TABLE test2 (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    hod VARCHAR(50) NOT NULL  ,
    phone VARCHAR(50) NOT NULL,
    course_id INT NOT NULL,

    FOREIGN KEY (course_id) REFERENCES test1(id)  
    )";
*/
/*
$sql = "DROP TABLE test2";
*/

/*
$sql = "ALTER TABLE student
        ADD yoy int not null ";
*/

/*
$sql = "ALTER TABLE student 
        DROP COLUMN yoy ";
*/


/*
$sql = "ALTER TABLE student CHANGE s_id id int not null AUTO_INCREMENT";
*/
/*
$sql = "DELETE FROM faculty WHERE id='2'";
*/

/*
$sql = "UPDATE course SET c_name = ' Networking ' WHERE c_id = 10";
*/

/*
$sql = "CREATE TABLE faculty (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    f_name VARCHAR(50) NOT NULL,
    course_id INT NOT NULL,

    FOREIGN KEY (course_id) REFERENCES course(id)
    
)";
*/

/*
$sql = "CREATE TABLE student (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    roll_no VARCHAR(50) NOT NULL,
    s_name VARCHAR(50) NOT NULL,
    s_phone VARCHAR(50) NOT NULL,
    s_address VARCHAR(50) NOT NULL,
    course_id INT NOT NULL,

    FOREIGN KEY (course_id) REFERENCES course(id)
)";  

*/

/*
$sql = "CREATE TABLE faculty_contact (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    phone VARCHAR(50) NOT NULL,
  

    FOREIGN KEY (name) REFERENCES faculty(f_name)
    ON DELETE CASCADE
)";  

*/

/*
$sql = "SELECT course.c_name, faculty.f_name
        FROM course
        INNER JOIN faculty ON course.id=faculty.course_id";

*/
/*
if ($conn->multi_query($sql) === TRUE) {
  echo " test2 table create successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
*/
/*
$sql = "INSERT INTO `test2`(`hod`, `phone`, `course_id`) VALUES ('Yadav', '9090876876', '1');";
$sql .= "INSERT INTO `test2`(`hod`, `phone`, `course_id`) VALUES ('Dravid','9090876876', '2');";
$sql .= "INSERT INTO `test2`(`hod`, `phone`, `course_id`) VALUES ('Dhoni', '9090876876', '2');";
$sql .= "INSERT INTO `test2`(`hod`, `phone`, `course_id`) VALUES ('Sachine', '9090876876', '3');";
$sql .= "INSERT INTO `test2`(`hod`, `phone`, `course_id`) VALUES ('Ganguly', '9090876876', '3');";
$sql .= "INSERT INTO `test2`(`hod`, `phone`, `course_id`) VALUES ('Laxman', '9090876889', '4');";
$sql .= "INSERT INTO `test2`(`hod`, `phone`, `course_id`) VALUES ('Liman', '9090876800', '5');";
$sql .= "INSERT INTO `test2`(`hod`, `phone`, `course_id`) VALUES ('Gili', '9090876822', '6');";
$sql .= "INSERT INTO `test2`(`hod`, `phone`, `course_id`) VALUES ('Ricky', '9090876832', '6');";
*/

/*
$sql = "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291001', 'Rajesh', '9090881122', 'Mumbai', '1');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291001', 'Rajesh', '9090881122', 'Mumbai', '5');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291001', 'Rajesh', '9090881122', 'Mumbai', '10');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291002', 'Lohit', '9861023456', 'Kolkata', '1');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291002', 'Lohit', '9861023456', 'Kolkata', '2');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291002', 'Lohit', '9861023456', 'Kolkata', '4');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291002', 'Lohit', '9861023456', 'Kolkata', '5');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291003', 'Ankit', '9090845345', 'Kerla', '3');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291004', 'Sambit', '9040897654', 'Cochi', '4');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291005', 'Sarmista', '9437876789', 'Mumbai', '5');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291005', 'Sarmista', '9437876789', 'Mumbai', '6');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291005', 'Sarmista', '9437876789', 'Mumbai', '7');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291005', 'Sarmista', '9437876789', 'Mumbai', '9');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291006', 'Dharam', '9090563456', 'Vizag', '1');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291006', 'Dharam', '9090563456', 'Vizag', '2');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291006', 'Dharam', '9090563456', 'Vizag', '3');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291007', 'Sudhankar', '9090987234', 'Chandigarh', '1');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291007', 'Sudhankar', '9090987234', 'Chandigarh', '7');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291007', 'Sudhankar', '9090987234', 'Chandigarh', '8');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291008', 'Jitendra', '9090764234', 'Mumbai', '3');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291008', 'Jitendra', '9090764234', 'Mumbai', '6');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291008', 'Jitendra', '9090764234', 'Mumbai', '9');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291010', 'Dhiren', '9437675345', 'Delhi', '4');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291010', 'Dhiren', '9437675345', 'Delhi', '5');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291010', 'Dhiren', '9437675345', 'Delhi', '7');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291011', 'Sarat', '9090676645', 'Delhi', '1');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291011', 'Sarat', '9090676645', 'Delhi', '3');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291012', 'Abhinas', '9861454545', 'Banglore', '1');";
$sql .= "INSERT INTO student (roll_no, s_name, s_phone, s_address, course_id) VALUES ('3291012', 'Abhinas', '9861454545', 'Banglore', '7');";

if ($conn->multi_query($sql) === TRUE) {
  echo "Multi data store successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

*/

/*
$sql = "INSERT INTO course ( c_name) VALUES ( 'TALLY');";
$sql .= "INSERT INTO course ( c_name) VALUES ( 'PHP');";
$sql .= "INSERT INTO course ( c_name) VALUES ( 'jQuery');";
$sql .= "INSERT INTO course ( c_name) VALUES ( 'Assembly');";
$sql .= "INSERT INTO course ( c_name) VALUES ( 'Modelling');";
$sql .= "INSERT INTO course ( c_name) VALUES ( 'Databases');";
$sql .= "INSERT INTO course ( c_name) VALUES ( 'Cyber Security');";
$sql .= "INSERT INTO course ( c_name) VALUES ( 'User interfaces');";
$sql .= "INSERT INTO course ( c_name) VALUES ( 'Software testing');";
$sql .= "INSERT INTO course ( c_name) VALUES ( 'OpenGL');";
$sql .= "INSERT INTO course ( c_name) VALUES ( 'C++');";
$sql .= "INSERT INTO course ( c_name) VALUES ( 'JAVA');";
$sql .= "INSERT INTO course ( c_name) VALUES ( 'C##');";
$sql .= "INSERT INTO course ( c_name) VALUES ( 'DAA');";
$sql .= "INSERT INTO course ( c_name) VALUES ( 'Data Science');";
$sql .= "INSERT INTO course ( c_name) VALUES ( 'AI');";
$sql .= "INSERT INTO course ( c_name) VALUES ( 'Web Development');";
$sql .= "INSERT INTO course ( c_name) VALUES ( 'Cyber Security');";
$sql .= "INSERT INTO course ( c_name) VALUES ( 'Networking');";
$sql .= "INSERT INTO course ( c_name) VALUES ( 'Data Analyst');";
*/

/*
$sql = "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mr.Yang', '1');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mr.Wasington', '1');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mrs.Xavior', '1');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mr.Nutor', '2');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mrs.Warner', '2');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mrs.Zenda', '2');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mr.Hood', '3');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mr.Harrison', '3');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mrs.Gita', '4');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mr.Qasim', '4');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mrs.Vetti', '4');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mr.Tagor', '5');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mr.Tango', '5');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mr.Waping', '5');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mr.Ramp', '5');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mr.Sarner', '6');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mrs.Yarner', '6');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mr.Orner', '6');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mrs.Viarner', '7');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mr.Wang', '7');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mr.Yanar', '8');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mrs.Oparner', '8');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mr.Sirop', '8');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mr.Quarino', '9');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mrs.Waping', '9');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mrs.Gigali', '10');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mr.Zinga', '10');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mr.Saripa', '10');";
$sql .= "INSERT INTO `faculty`(`f_name`, `course_id`) VALUES ('Mrs.Surner', '10');";
*/

/*
$sql = "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mr.Yang', '9090123456');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mr.Wasington', '9090123451');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mrs.Xavior', '9090123452');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mr.Nutor', '9090123453');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mrs.Warner', '9090123454');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mrs.Zenda', '9090123455');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mr.Hood', '9090123457');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mr.Harrison', '9090123458');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mrs.Gita', '9090123459');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mr.Qasim', '9090123410');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mrs.Vetti', '9090123411');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mr.Tagor', '9090123412');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mr.Tango', '9090123413');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mr.Waping', '9090123414');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mr.Ramp', '9090123415');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mr.Sarner', '9090123416');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mrs.Yarner', '9090123417');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mr.Orner', '9090123418');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mrs.Viarner', '9090123419');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mr.Wang', '9090123420');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mr.Yanar', '9090123421');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mrs.Oparner', '9090123422');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mr.Sirop', '9090123423');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mr.Quarino', '9090123424');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mrs.Waping', '9090123425');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mrs.Gigali', '9090123426');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mr.Zinga', '9090123427');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mr.Saripa', '9090123428');";
$sql .= "INSERT INTO `faculty_contact`(`name`, `phone`) VALUES ('Mrs.Surner', '9090123429');";
*/

/*
if ($conn->multi_query($sql) === TRUE) {
  echo "Multi data store successfully in faculti";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

*/

?>



<div class="container">
  <h3>Fetch Inner Joinig Data.</h3>
  <table class="table table-striped">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Roll No.</th>
      <th scope="col">Name</th>
      
      <th scope="col">Course Name</th>

    </tr>
    <?php 

    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
    ?>
    <tr>
      <td><?php echo $row["id"];?></td>
      <td><?php echo $row["roll_no"];?></td>
      <td><?php echo $row["s_name"];?></td>
      
      <td><?php echo $row["c_name"];?></td>
    </tr>
    <?php
        }

    } 
    ?>
  </table>  
</div>



</body>
</html>