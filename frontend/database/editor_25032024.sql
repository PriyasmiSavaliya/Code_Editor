-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2024 at 12:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `editor`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(11) NOT NULL,
  `c_name` varchar(200) NOT NULL,
  `c_email` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `c_name`, `c_email`, `message`, `is_active`) VALUES
(1, 'rajvi', 'rajvi@gmail.com', 'this is test message', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lang`
--

CREATE TABLE `lang` (
  `langid` int(11) NOT NULL,
  `lang_name` varchar(200) NOT NULL,
  `lang_type` varchar(200) NOT NULL,
  `is_active` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lang`
--

INSERT INTO `lang` (`langid`, `lang_name`, `lang_type`, `is_active`) VALUES
(1, 'PHP', 'Back-End', 1),
(2, 'C', 'Back-End', 1),
(3, 'C++', 'Back-End', 1),
(4, 'Java', 'Back-End', 1),
(6, 'Python', 'Back-End', 1),
(7, 'HTML', 'Front-End', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(200) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_name`, `is_active`) VALUES
(1, 'Home', 1),
(2, 'Start Code', 1),
(3, 'Practice', 1),
(4, 'Quize', 1),
(5, 'About', 1),
(6, 'Login', 1),
(7, 'Sign Up', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `reg_id` int(11) NOT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`reg_id`, `fullname`, `mobile`, `email`, `pwd`, `created_date`) VALUES
(1, 'rajvi', '7984443157', 'test@gmail.com', '123456', '2024-01-17'),
(2, 'Rajvi Makadiya', '7984443156', 'rajvi@gmail.com', '112233', '2024-01-17'),
(3, 'test', '1234567890', 'rajvi@gmail.com', '23451', '2024-01-17'),
(8, 'priyasmi', '8780314592', 'priyasmisavaliya01@gmail.com', 'piyu12345', '2024-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE `tutorial` (
  `t_id` int(11) NOT NULL,
  `language` varchar(200) NOT NULL,
  `topic_name` varchar(200) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `t_code` varchar(3000) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tutorial`
--

INSERT INTO `tutorial` (`t_id`, `language`, `topic_name`, `description`, `t_code`, `is_active`) VALUES
(1, 'PHP', 'PHP Array', 'What is an Array?\nAn array is a special variable that can hold many values under a single name, and you can access the values by referring to an index number or name.', '$cars = array(\"Volvo\", \"BMW\", \"Toyota\");', 1),
(3, 'java', 'JAVA Array', 'Arrays are used to store multiple values in a single variable, instead of declaring separate variables for each value.', 'String[] cars = {\"Volvo\", \"BMW\", \"Ford\", \"Mazda\"};', 1),
(4, 'PHP', 'PHP Function', 'The real power of PHP comes from its functions.\n\nPHP has more than 1000 built-in functions, and in addition you can create your own custom functions.', 'function myMessage() {\n  echo \"Hello world!\";\n}', 1),
(5, 'c', 'C Syntax', 'You have already seen the following code a couple of times in the first chapters. Let\'s break it down to understand it better:', '#include <stdio.h>\r\n\r\nint main() {\r\n  printf(\"Hello World!\");\r\n  return 0;\r\n}\r\n', 1),
(9, 'cpp', 'C++ Variables', 'Variables are containers for storing data values.\r\n\r\nIn C++, there are different types of variables (defined with different keywords)', 'int x = 5;\r\nint y = 6;\r\nint sum = x + y;\r\ncout << sum;', 1),
(10, '-- Select Language --', 'Python if ... else', 'Python supports the usual logical conditions from mathematics:\r\n\r\nEquals: a == b\r\nNot Equals: a != b\r\nLess than: a < b\r\nLess than or equal to: a <= b\r\nGreater than: a > b\r\nGreater than or equal to: a >= b\r\nThese conditions can be used in several ways, most commonly in \"if statements\" and loops.\r\n\r\nAn \"if statement\" is written by using the if keyword.', 'a = 33\r\nb = 33\r\nif b > a:\r\n  print(\"b is greater than a\")\r\nelif a == b:\r\n  print(\"a and b are equal\")', 1),
(11, 'html', 'HTML Tables', 'HTML tables allow web developers to arrange data into rows and columns.\r\n\r\n', '<table>\r\n  <tr>\r\n    <th>Company</th>\r\n    <th>Contact</th>\r\n    <th>Country</th>\r\n  </tr>\r\n  <tr>\r\n    <td>Alfreds Futterkiste</td>\r\n    <td>Maria Anders</td>\r\n    <td>Germany</td>\r\n  </tr>\r\n  <tr>\r\n    <td>Centro comercial Moctezuma</td>\r\n    <td>Francisco Chang</td>\r\n    <td>Mexico</td>\r\n  </tr>\r\n</table>', 1),
(12, 'PHP', 'PHP If...Else', 'The if...else statement executes some code if a condition is true and another code if that condition is false.', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n<?php\r\n$t = date(\"H\");\r\n\r\nif ($t < \"20\") {\r\n  echo \"Have a good day!\";\r\n} else {\r\n  echo \"Have a good night!\";\r\n}\r\n?>\r\n \r\n</body>\r\n</html>', 1),
(13, 'PHP', 'PHP Variables', 'Variables are \"containers\" for storing information.\r\n\r\nRules for PHP variables:\r\n\r\nA variable starts with the $ sign, followed by the name of the variable\r\nA variable name must start with a letter or the underscore character\r\nA variable name cannot start with a number\r\nA variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )\r\nVariable names are case-sensitive ($age and $AGE are two different variables)', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n<?php\r\n$x = 5;\r\n$y = \"John\";\r\n\r\necho $x;\r\necho \"<br>\";\r\necho $y;\r\n?>\r\n\r\n</body>\r\n</html>', 1),
(14, 'PHP', 'PHP Loops', 'Often when you write code, you want the same block of code to run over and over again a certain number of times. So, instead of adding several almost equal code-lines in a script, we can use loops.\r\n\r\nLoops are used to execute the same block of code again and again, as long as a certain condition is true.\r\n\r\nIn PHP, we have the following loop types:\r\n\r\nwhile - loops through a block of code as long as the specified condition is true\r\ndo...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true\r\nfor - loops through a block of code a specified number of times', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n<?php  \r\n$i = 1;\r\n\r\nwhile ($i < 6) {\r\n  echo $i;\r\n  $i++;\r\n} \r\n?>  \r\n\r\n</body>\r\n</html>\r\n', 1),
(15, 'C', 'C Comments', 'Comments can be used to explain code, and to make it more readable. It can also be used to prevent execution when testing alternative code.\r\n\r\nComments can be singled-lined or multi-lined.\r\n\r\n\r\nSingle-line comments start with two forward slashes (//).\r\n\r\nAny text between // and the end of the line is ignored by the compiler (will not be executed).\r\n\r\n\r\nMulti-line comments start with /* and ends with */.\r\n\r\nAny text between /* and */ will be ignored by the compiler:', '#include <stdio.h>\r\n\r\nint main() {\r\n  /* The code below will print the words Hello World!\r\n  to the screen, and it is amazing */\r\n  printf(\"Hello World!\");  //this is comment\r\n  return 0;\r\n}', 1),
(16, 'HTML', 'HTML Elements', 'The HTML element is everything from the start tag to the end tag:\r\n\r\n<tagname>Content goes here...</tagname>\r\nExamples of some HTML elements:\r\n\r\n<h1>My First Heading</h1>\r\n<p>My first paragraph.</p>', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n<h1>My First Heading</h1>\r\n<p>My first paragraph.</p>\r\n\r\n</body>\r\n</html>\r\n', 1),
(17, 'HTML', 'HTML Attributes', 'HTML attributes provide additional information about HTML elements.\r\n\r\nThe <a> tag defines a hyperlink. The href attribute specifies the URL of the page\r\n\r\nThe <img> tag is used to embed an image in an HTML page. The src attribute specifies the path to the image', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n<h2>The href Attribute</h2>\r\n\r\n<p>HTML links are defined with the a tag. \r\nThe link address is specified in the href attribute:</p>\r\n\r\n<a href=\"https://www.w3schools.com\">Visit W3Schools</a>\r\n\r\n\r\n<p>HTML images are defined with the img tag, \r\nand the filename of the image source is specified in the src attribute:</p>\r\n\r\n<img src=\"img_girl.jpg\" width=\"500\" height=\"600\">\r\n\r\n</body>\r\n</html>', 1),
(18, 'HTML', 'HTML Forms', 'The HTML <form> element is used to create an HTML form for user input:\r\n\r\nThe HTML <input> element is the most used form element.\r\n\r\nAn <input> element can be displayed in many ways, depending on the type attribute.\r\n\r\nHere are some examples:\r\n\r\nType	Description\r\n<input type=\"text\">	Displays a single-line text input field\r\n<input type=\"radio\">	Displays a radio button (for selecting one of many choices)\r\n<input type=\"checkbox\">	Displays a checkbox (for selecting zero or more of many choices)\r\n<input type=\"submit\">	Displays a submit button (for submitting the form)\r\n<input type=\"button\">	Displays a clickable button', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n<h2>Text input fields</h2>\r\n\r\n<form>\r\n  <label for=\"fname\">First name:</label><br>\r\n  <input type=\"text\" id=\"fname\" name=\"fname\" value=\"John\"><br>\r\n  <label for=\"lname\">Last name:</label><br>\r\n  <input type=\"text\" id=\"lname\" name=\"lname\" value=\"Doe\">\r\n</form>\r\n\r\n<p>Note that the form itself is not visible.</p>\r\n\r\n<p>Also note that the default width of text input fields is 20 characters.</p>\r\n\r\n</body>\r\n</html>', 1),
(19, 'HTML', 'HTML Video', 'The HTML <video> element is used to show a video on a web page.', '<!DOCTYPE html> \r\n<html> \r\n<body> \r\n\r\n<video width=\"400\" controls>\r\n  <source src=\"mov_bbb.mp4\" type=\"video/mp4\">\r\n  <source src=\"mov_bbb.ogg\" type=\"video/ogg\">\r\n  Your browser does not support HTML video.\r\n</video>\r\n\r\n<p>\r\nVideo courtesy of \r\n<a href=\"https://www.bigbuckbunny.org/\" target=\"_blank\">Big Buck Bunny</a>.\r\n</p>\r\n\r\n</body> \r\n</html>', 1),
(20, 'Java', 'JAVA If.....Else', 'Use the if statement to specify a block of Java code to be executed if a condition is true.\r\n\r\nUse the else statement to specify a block of code to be executed if the condition is false\r\n\r\nUse the else if statement to specify a new condition if the first condition is false.', 'public class Main {\r\n  public static void main(String[] args) {\r\n    int time = 22;\r\n    if (time < 10) {\r\n      System.out.println(\"Good morning.\");\r\n    } else if (time < 18) {\r\n      System.out.println(\"Good day.\");\r\n    }  else {\r\n      System.out.println(\"Good evening.\");\r\n    }\r\n  }\r\n}', 1),
(21, 'Java', 'JAVA While Loop', 'Loops can execute a block of code as long as a specified condition is reached.\r\n\r\nLoops are handy because they save time, reduce errors, and they make code more readable.\r\n\r\nThe while loop loops through a block of code as long as a specified condition is true:', 'public class Main {\r\n  public static void main(String[] args) {\r\n    int i = 0;\r\n    while (i < 5) {\r\n      System.out.println(i);\r\n      i++;\r\n    }  \r\n  }\r\n}\r\n', 1),
(22, 'Java', 'JAVA For Loop', 'When you know exactly how many times you want to loop through a block of code, use the for loop instead of a while loop:', 'public class Main {\r\n  public static void main(String[] args) {\r\n    for (int i = 0; i < 5; i++) {\r\n      System.out.println(i);\r\n    }  \r\n  }\r\n}', 1),
(23, 'Java', 'JAVA Recursion', 'Recursion is the technique of making a function call itself. This technique provides a way to break complicated problems down into simple problems which are easier to solve.\r\n\r\nRecursion may be a bit difficult to understand. The best way to figure out how it works is to experiment with it.\r\n\r\nAdding two numbers together is easy to do, but adding a range of numbers is more complicated. In the following example, recursion is used to add a range of numbers together by breaking it down into the simple task of adding two numbers:', 'public class Main {\r\n  public static void main(String[] args) {\r\n    int result = sum(10);\r\n    System.out.println(result);\r\n  }\r\n  public static int sum(int k) {\r\n    if (k > 0) {\r\n      return k + sum(k - 1);\r\n    } else {\r\n      return 0;\r\n    }\r\n  }\r\n}\r\n', 1),
(24, 'Python', 'PYTHON Lists', 'Lists are used to store multiple items in a single variable.\r\n\r\nLists are one of 4 built-in data types in Python used to store collections of data, the other 3 are Tuple, Set, and Dictionary, all with different qualities and usage.\r\n\r\nLists are created using square brackets:', 'thislist = [\"apple\", \"banana\", \"cherry\"]\r\nprint(thislist)\r\n', 1),
(25, 'Python', 'PYTHON Tuples', 'Tuples are used to store multiple items in a single variable.\r\n\r\nTuple is one of 4 built-in data types in Python used to store collections of data, the other 3 are List, Set, and Dictionary, all with different qualities and usage.\r\n\r\nA tuple is a collection which is ordered and unchangeable.\r\n\r\nTuples are written with round brackets.', 'thistuple = (\"apple\", \"banana\", \"cherry\")\r\nprint(thistuple)\r\n', 1),
(26, 'Python', 'PYTHON Functions', 'A function is a block of code which only runs when it is called.\r\n\r\nYou can pass data, known as parameters, into a function.\r\n\r\nA function can return data as a result.\r\n\r\nCreating a Function\r\nIn Python a function is defined using the def keyword:', 'def my_function():\r\n  print(\"Hello from a function\")\r\n\r\nmy_function()', 1),
(27, 'Python', 'PYTHON Modules', 'Consider a module to be the same as a code library.\r\n\r\nA file containing a set of functions you want to include in your application.\r\n\r\nCreate a Module\r\nTo create a module just save the code you want in a file with the file extension .py:', 'import mymodule\r\n\r\nmymodule.greeting(\"Jonathan\")', 1),
(28, 'C++', 'C++ Structures', 'To create a structure, use the struct keyword and declare each of its members inside curly braces.\r\n\r\nAfter the declaration, specify the name of the structure variable (myStructure in the example below):', '#include <iostream>\r\n#include <string>\r\nusing namespace std;\r\n\r\nint main() {\r\n  struct {\r\n    int myNum;\r\n    string myString;\r\n  } myStructure;\r\n\r\n  myStructure.myNum = 1;\r\n  myStructure.myString = \"Hello World!\";\r\n\r\n  cout << myStructure.myNum << \"\n\";\r\n  cout << myStructure.myString << \"\n\";\r\n  return 0;\r\n}\r\n', 1),
(29, 'C++', 'C++ Arrays', 'Arrays are used to store multiple values in a single variable, instead of declaring separate variables for each value.\r\n\r\nTo declare an array, define the variable type, specify the name of the array followed by square brackets and specify the number of elements it should store:', '#include <iostream>\r\n#include <string>\r\nusing namespace std;\r\n\r\nint main() {\r\n  string cars[4] = {\"Volvo\", \"BMW\", \"Ford\", \"Mazda\"};\r\n  cout << cars[0];\r\n  return 0;\r\n}\r\n', 1),
(30, 'C++', 'C++ Pointers', 'You learned from the previous chapter, that we can get the memory address of a variable by using the & operator:', '#include <iostream>\r\n#include <string>\r\nusing namespace std;\r\n\r\nint main() {\r\n  string food = \"Pizza\";\r\n\r\n  cout << food << \"\n\";\r\n  cout << &food << \"\n\";\r\n  return 0;\r\n}\r\n', 1),
(31, 'C++', 'C++ Recursion', 'Adding two numbers together is easy to do, but adding a range of numbers is more complicated. In the following example, recursion is used to add a range of numbers together by breaking it down into the simple task of adding two numbers:', '#include <iostream>\r\nusing namespace std;\r\n\r\nint sum(int k) {\r\n  if (k > 0) {\r\n    return k + sum(k - 1);\r\n  } else {\r\n    return 0;\r\n  }\r\n}\r\n\r\nint main() {\r\n  int result = sum(10);\r\n  cout << result;\r\n  return 0;\r\n}\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `u_image` varchar(200) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0,
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `number` varchar(10) NOT NULL,
  `city` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `u_image`, `name`, `email`, `passwd`, `is_active`, `created_date`, `number`, `city`) VALUES
(7, '65e352150b6b6.jpg', 'Rajvi', 'rajvi123@gmail.com', 'rajvi123', 1, '2024-02-25', '7984443190', 'surat'),
(8, '65e358c7719be.jpg', 'piyu', 'piyu@gmail.com', 'piyu123', 0, '2024-03-02', '8888888888', 'surat'),
(9, '65f69b4360645.jpg', 'Abhi', 'abhi@gmail.com', 'abhi123', 1, '2024-03-17', '8460504236', 'Surat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`langid`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lang`
--
ALTER TABLE `lang`
  MODIFY `langid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tutorial`
--
ALTER TABLE `tutorial`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
