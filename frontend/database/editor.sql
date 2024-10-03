-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2024 at 03:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `c_name`, `c_email`, `message`, `is_active`, `created_date`) VALUES
(1, 'rajvi', 'rajvi@gmail.com', 'this is test message', 1, '2024-03-31'),
(2, 'mayank', 'mayank@gmail.com', 'i like to get your service i want to know more information about your premiums.', 1, '2024-03-31');

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
(3, 'Java', 'Back-End', 1),
(4, 'Python', 'Back-End', 1);

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
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `bank_name` varchar(200) NOT NULL,
  `account_num` varchar(200) NOT NULL,
  `amount` int(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `email`, `bank_name`, `account_num`, `amount`, `type`, `duration`, `created_date`) VALUES
(1, 'priyasmi', 'priyasmisavaliya01@gmail.com', 'hdfc', '34567890765', 100, 'Free', 'Weekly', '2024-04-08'),
(19, 'abhi', 'abhi123@gmail.com', 'hdfc', '34567812345', 100, 'Premium', 'Monthly', '2024-04-08'),
(23, 'Rajvi Makadiya', 'rajvi@gmail.com', 'SBI', '234567891234', 240, 'Premium', 'M', '2024-04-08'),
(25, 'Rajvi Makadiya', 'rajvi04aug@gmail.com', 'BOB', '11009087890987', 2800, 'Platinum', 'Y', '2024-04-08'),
(26, 'abhi', 'rajpurohita264@gmail.com', 'HDFC', '34567890765', 240, 'Premium', 'M', '2024-04-11'),
(27, 'priya', 'hirsavaliya22@gmail.com', 'ICICI', '34567890700', 240, 'Premium', 'M', '2024-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `practice`
--

CREATE TABLE `practice` (
  `id` int(200) NOT NULL,
  `prc_lang` varchar(200) NOT NULL,
  `prc_pdf` varchar(200) NOT NULL,
  `prc_name` varchar(200) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `practice`
--

INSERT INTO `practice` (`id`, `prc_lang`, `prc_pdf`, `prc_name`, `detail`, `is_active`, `created_date`) VALUES
(1, 'php', 'php.pdf', 'PHP programming', '<p>The HTML element is everything from the start tag to the end tag: Content goes here... Examples of some HTML elements:</p>\r\n\r\n<h1>My First Heading</h1>\r\n\r\n<p>My first paragraph.</p>\r\n', 1, '2024-03-31'),
(2, 'java', 'java.pdf', 'Java theory', 'this is java notes for practices session', 1, '2024-03-31'),
(3, 'java', 'java2.pdf', 'java programming', 'java', 1, '2024-04-06'),
(4, 'php', 'php2.pdf', 'php theory', 'php', 1, '2024-04-06'),
(5, 'python', 'python.pdf', 'python programming', 'python', 1, '2024-04-06'),
(6, 'python', 'python2.pdf', 'python theory', 'python', 1, '2024-04-06'),
(7, 'c', 'c.pdf', 'c programming', 'c', 1, '2024-04-06'),
(8, 'c', 'c2.pdf', 'c theory', 'c', 1, '2024-04-06');

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
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`reg_id`, `fullname`, `mobile`, `email`, `pwd`, `created_date`, `city`) VALUES
(1, 'rajvi', '7984443157', 'test@gmail.com', '123456', '2024-01-17', ''),
(2, 'Rajvi Makadiya', '7984443156', 'rajvi@gmail.com', '112233', '2024-01-17', ''),
(3, 'test', '1234567890', 'rajvi@gmail.com', '23451', '2024-01-17', ''),
(8, 'priyasmi', '8780314592', 'priyasmisavaliya01@gmail.com', 'piyu12345', '2024-02-02', ''),
(9, 'abhi', '8780314592', 'abhi123@gmail.com', 'abhi123', '2024-03-19', 'surat'),
(10, 'abhi', '8780314592', 'abhi123@gmail.com', 'abhi123', '2024-03-19', 'surat'),
(11, 'hir', '8780314592', 'admin@example.com', '123456', '2024-03-19', 'surat'),
(12, 'priyasmi', '8780314592', 'priyasmisavaliya01@gmail.com', 'piyu123', '2024-04-03', 'surat'),
(13, 'piyu', '8780314592', 'priyasmisavaliya01@gmail.com', 'priyasmi123', '2024-04-04', 'surat'),
(14, 'heer', '8780314592', 'priyasmisavaliya01@gmail.com', 'piyu123', '2024-04-07', 'surat'),
(15, 'priya', '8780314592', 'hirsavaliya22@gmail.com', 'hir22', '2024-04-11', 'surat'),
(16, 'abhi', '8780314592', 'rajpurohita264@gmail.com', 'abhi123', '2024-04-11', 'surat');

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
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tutorial`
--

INSERT INTO `tutorial` (`t_id`, `language`, `topic_name`, `description`, `t_code`, `is_active`, `created_date`) VALUES
(1, 'PHP', 'PHP Array', 'What is an Array?\nAn array is a special variable that can hold many values under a single name, and you can access the values by referring to an index number or name.', '<!DOCTYPE html>\n<html>\n<body>\n\n<?php\n$cars = array(\"Volvo\", \"BMW\", \"Toyota\");\necho count($cars);\n?>\n\n</body>\n</html>\n', 1, '2024-03-31'),
(3, 'java', 'JAVA Array', 'Arrays are used to store multiple values in a single variable, instead of declaring separate variables for each value.', 'String[] cars = {\"Volvo\", \"BMW\", \"Ford\", \"Mazda\"};', 1, '2024-03-31'),
(4, 'PHP', 'PHP Function', 'The real power of PHP comes from its functions.\n\nPHP has more than 1000 built-in functions, and in addition you can create your own custom functions.', '<!DOCTYPE html>\n<html>\n<body>\n\n<?php\nfunction familyName($fname, $year) {\n  echo \"$fname Refsnes. Born in $year <br>\";\n}\n\nfamilyName(\"Hege\",\"1975\");\nfamilyName(\"Stale\",\"1978\");\nfamilyName(\"Kai Jim\",\"1983\");\n?>\n\n</body>\n</html>\n', 1, '2024-03-31'),
(5, 'c', 'C Syntax', 'You have already seen the following code a couple of times in the first chapters. Let\'s break it down to understand it better:', '#include <stdio.h>\r\n\r\nint main() {\r\n  printf(\"Hello World!\");\r\n  return 0;\r\n}\r\n', 1, '2024-03-31'),
(9, 'cpp', 'C++ Variables', 'Variables are containers for storing data values.\r\n\r\nIn C++, there are different types of variables (defined with different keywords)', 'int x = 5;\r\nint y = 6;\r\nint sum = x + y;\r\ncout << sum;', 1, '2024-03-31'),
(10, '', 'Python if ... else', '<p>Python supports the usual logical conditions from mathematics: Equals: a == b Not Equals: a != b Less than: a < b Less than or equal to: a <= b Greater than: a > b Greater than or equal to: a >= b These conditions can be used in several ways, most commonly in \"if statements\" and loops. An \"if statement\" is written by using the if keyword.</p>\r\n', 'a = 33\r\nb = 33\r\nif b > a:\r\n  print(\"b is greater than a\")\r\nelif a == b:\r\n  print(\"a and b are equal\")', 1, '2024-03-31'),
(11, 'html', 'HTML Tables', 'HTML tables allow web developers to arrange data into rows and columns.\r\n\r\n', '<table>\r\n  <tr>\r\n    <th>Company</th>\r\n    <th>Contact</th>\r\n    <th>Country</th>\r\n  </tr>\r\n  <tr>\r\n    <td>Alfreds Futterkiste</td>\r\n    <td>Maria Anders</td>\r\n    <td>Germany</td>\r\n  </tr>\r\n  <tr>\r\n    <td>Centro comercial Moctezuma</td>\r\n    <td>Francisco Chang</td>\r\n    <td>Mexico</td>\r\n  </tr>\r\n</table>', 1, '2024-03-31'),
(12, 'PHP', 'PHP If...Else', 'The if...else statement executes some code if a condition is true and another code if that condition is false.', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n<?php\r\n$t = date(\"H\");\r\n\r\nif ($t < \"20\") {\r\n  echo \"Have a good day!\";\r\n} else {\r\n  echo \"Have a good night!\";\r\n}\r\n?>\r\n \r\n</body>\r\n</html>', 1, '2024-03-31'),
(13, 'PHP', 'PHP Variables', 'Variables are \"containers\" for storing information.\r\n\r\nRules for PHP variables:\r\n\r\nA variable starts with the $ sign, followed by the name of the variable\r\nA variable name must start with a letter or the underscore character\r\nA variable name cannot start with a number\r\nA variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )\r\nVariable names are case-sensitive ($age and $AGE are two different variables)', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n<?php\r\n$x = 5;\r\n$y = \"John\";\r\n\r\necho $x;\r\necho \"<br>\";\r\necho $y;\r\n?>\r\n\r\n</body>\r\n</html>', 1, '2024-03-31'),
(14, 'PHP', 'PHP Loops', 'Often when you write code, you want the same block of code to run over and over again a certain number of times. So, instead of adding several almost equal code-lines in a script, we can use loops.\r\n\r\nLoops are used to execute the same block of code again and again, as long as a certain condition is true.\r\n\r\nIn PHP, we have the following loop types:\r\n\r\nwhile - loops through a block of code as long as the specified condition is true\r\ndo...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true\r\nfor - loops through a block of code a specified number of times', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n<?php  \r\n$i = 1;\r\n\r\nwhile ($i < 6) {\r\n  echo $i;\r\n  $i++;\r\n} \r\n?>  \r\n\r\n</body>\r\n</html>\r\n', 1, '2024-03-31'),
(15, 'C', 'C Comments', 'Comments can be used to explain code, and to make it more readable. It can also be used to prevent execution when testing alternative code.\r\n\r\nComments can be singled-lined or multi-lined.\r\n\r\n\r\nSingle-line comments start with two forward slashes (//).\r\n\r\nAny text between // and the end of the line is ignored by the compiler (will not be executed).\r\n\r\n\r\nMulti-line comments start with /* and ends with */.\r\n\r\nAny text between /* and */ will be ignored by the compiler:', '#include <stdio.h>\r\n\r\nint main() {\r\n  /* The code below will print the words Hello World!\r\n  to the screen, and it is amazing */\r\n  printf(\"Hello World!\");  //this is comment\r\n  return 0;\r\n}', 1, '2024-03-31'),
(16, 'HTML', 'HTML Elements', 'The HTML element is everything from the start tag to the end tag:\r\n\r\n<tagname>Content goes here...</tagname>\r\nExamples of some HTML elements:\r\n\r\n<h1>My First Heading</h1>\r\n<p>My first paragraph.</p>', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n<h1>My First Heading</h1>\r\n<p>My first paragraph.</p>\r\n\r\n</body>\r\n</html>\r\n', 1, '2024-03-31'),
(17, 'HTML', 'HTML Attributes', 'HTML attributes provide additional information about HTML elements.\r\n\r\nThe <a> tag defines a hyperlink. The href attribute specifies the URL of the page\r\n\r\nThe <img> tag is used to embed an image in an HTML page. The src attribute specifies the path to the image', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n<h2>The href Attribute</h2>\r\n\r\n<p>HTML links are defined with the a tag. \r\nThe link address is specified in the href attribute:</p>\r\n\r\n<a href=\"https://www.w3schools.com\">Visit W3Schools</a>\r\n\r\n\r\n<p>HTML images are defined with the img tag, \r\nand the filename of the image source is specified in the src attribute:</p>\r\n\r\n<img src=\"img_girl.jpg\" width=\"500\" height=\"600\">\r\n\r\n</body>\r\n</html>', 1, '2024-03-31'),
(18, 'HTML', 'HTML Forms', 'The HTML <form> element is used to create an HTML form for user input:\n\nThe HTML <input> element is the most used form element.\n\nAn <input> element can be displayed in many ways, depending on the type attribute.\n\nHere are some examples:\n\nType	Description\n<input type=\"text\">	Displays a single-line text input field\n<input type=\"radio\">	Displays a radio button (for selecting one of many choices)\n<input type=\"checkbox\">	Displays a checkbox (for selecting zero or more of many choices)\n<input type=\"submit\">	Displays a submit button (for submitting the form)\n<input type=\"button\">	Displays a clickable button', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n<h2>Text input fields</h2>\r\n\r\n<form>\r\n  <label for=\"fname\">First name:</label><br>\r\n  <input type=\"text\" id=\"fname\" name=\"fname\" value=\"John\"><br>\r\n  <label for=\"lname\">Last name:</label><br>\r\n  <input type=\"text\" id=\"lname\" name=\"lname\" value=\"Doe\">\r\n</form>\r\n\r\n<p>Note that the form itself is not visible.</p>\r\n\r\n<p>Also note that the default width of text input fields is 20 characters.</p>\r\n\r\n</body>\r\n</html>', 1, '2024-03-31'),
(19, 'HTML', 'HTML Video', 'The HTML <video> element is used to show a video on a web page.', '<!DOCTYPE html> \r\n<html> \r\n<body> \r\n\r\n<video width=\"400\" controls>\r\n  <source src=\"mov_bbb.mp4\" type=\"video/mp4\">\r\n  <source src=\"mov_bbb.ogg\" type=\"video/ogg\">\r\n  Your browser does not support HTML video.\r\n</video>\r\n\r\n<p>\r\nVideo courtesy of \r\n<a href=\"https://www.bigbuckbunny.org/\" target=\"_blank\">Big Buck Bunny</a>.\r\n</p>\r\n\r\n</body> \r\n</html>', 1, '2024-03-31'),
(20, 'Java', 'JAVA If.....Else', 'Use the if statement to specify a block of Java code to be executed if a condition is true.\r\n\r\nUse the else statement to specify a block of code to be executed if the condition is false\r\n\r\nUse the else if statement to specify a new condition if the first condition is false.', 'public class Main {\r\n  public static void main(String[] args) {\r\n    int time = 22;\r\n    if (time < 10) {\r\n      System.out.println(\"Good morning.\");\r\n    } else if (time < 18) {\r\n      System.out.println(\"Good day.\");\r\n    }  else {\r\n      System.out.println(\"Good evening.\");\r\n    }\r\n  }\r\n}', 1, '2024-03-31'),
(21, 'Java', 'JAVA While Loop', 'Loops can execute a block of code as long as a specified condition is reached.\r\n\r\nLoops are handy because they save time, reduce errors, and they make code more readable.\r\n\r\nThe while loop loops through a block of code as long as a specified condition is true:', 'public class Main {\r\n  public static void main(String[] args) {\r\n    int i = 0;\r\n    while (i < 5) {\r\n      System.out.println(i);\r\n      i++;\r\n    }  \r\n  }\r\n}\r\n', 1, '2024-03-31'),
(22, 'Java', 'JAVA For Loop', 'When you know exactly how many times you want to loop through a block of code, use the for loop instead of a while loop:', 'public class Main {\r\n  public static void main(String[] args) {\r\n    for (int i = 0; i < 5; i++) {\r\n      System.out.println(i);\r\n    }  \r\n  }\r\n}', 1, '2024-03-31'),
(23, 'Java', 'JAVA Recursion', 'Recursion is the technique of making a function call itself. This technique provides a way to break complicated problems down into simple problems which are easier to solve.\r\n\r\nRecursion may be a bit difficult to understand. The best way to figure out how it works is to experiment with it.\r\n\r\nAdding two numbers together is easy to do, but adding a range of numbers is more complicated. In the following example, recursion is used to add a range of numbers together by breaking it down into the simple task of adding two numbers:', 'public class Main {\r\n  public static void main(String[] args) {\r\n    int result = sum(10);\r\n    System.out.println(result);\r\n  }\r\n  public static int sum(int k) {\r\n    if (k > 0) {\r\n      return k + sum(k - 1);\r\n    } else {\r\n      return 0;\r\n    }\r\n  }\r\n}\r\n', 1, '2024-03-31'),
(24, 'Python', 'PYTHON Lists', 'Lists are used to store multiple items in a single variable.\r\n\r\nLists are one of 4 built-in data types in Python used to store collections of data, the other 3 are Tuple, Set, and Dictionary, all with different qualities and usage.\r\n\r\nLists are created using square brackets:', 'thislist = [\"apple\", \"banana\", \"cherry\"]\r\nprint(thislist)\r\n', 1, '2024-03-31'),
(25, 'Python', 'PYTHON Tuples', 'Tuples are used to store multiple items in a single variable.\r\n\r\nTuple is one of 4 built-in data types in Python used to store collections of data, the other 3 are List, Set, and Dictionary, all with different qualities and usage.\r\n\r\nA tuple is a collection which is ordered and unchangeable.\r\n\r\nTuples are written with round brackets.', 'thistuple = (\"apple\", \"banana\", \"cherry\")\r\nprint(thistuple)\r\n', 1, '2024-03-31'),
(26, 'Python', 'PYTHON Functions', 'A function is a block of code which only runs when it is called.\r\n\r\nYou can pass data, known as parameters, into a function.\r\n\r\nA function can return data as a result.\r\n\r\nCreating a Function\r\nIn Python a function is defined using the def keyword:', 'def my_function():\r\n  print(\"Hello from a function\")\r\n\r\nmy_function()', 1, '2024-03-31'),
(27, 'Python', 'PYTHON Modules', 'Consider a module to be the same as a code library.\r\n\r\nA file containing a set of functions you want to include in your application.\r\n\r\nCreate a Module\r\nTo create a module just save the code you want in a file with the file extension .py:', 'import mymodule\r\n\r\nmymodule.greeting(\"Jonathan\")', 1, '2024-03-31'),
(28, 'C++', 'C++ Structures', 'To create a structure, use the struct keyword and declare each of its members inside curly braces.\r\n\r\nAfter the declaration, specify the name of the structure variable (myStructure in the example below):', '#include <iostream>\r\n#include <string>\r\nusing namespace std;\r\n\r\nint main() {\r\n  struct {\r\n    int myNum;\r\n    string myString;\r\n  } myStructure;\r\n\r\n  myStructure.myNum = 1;\r\n  myStructure.myString = \"Hello World!\";\r\n\r\n  cout << myStructure.myNum << \"\n\";\r\n  cout << myStructure.myString << \"\n\";\r\n  return 0;\r\n}\r\n', 1, '2024-03-31'),
(29, 'C++', 'C++ Arrays', 'Arrays are used to store multiple values in a single variable, instead of declaring separate variables for each value.\r\n\r\nTo declare an array, define the variable type, specify the name of the array followed by square brackets and specify the number of elements it should store:', '#include <iostream>\r\n#include <string>\r\nusing namespace std;\r\n\r\nint main() {\r\n  string cars[4] = {\"Volvo\", \"BMW\", \"Ford\", \"Mazda\"};\r\n  cout << cars[0];\r\n  return 0;\r\n}\r\n', 1, '2024-03-31'),
(30, 'C++', 'C++ Pointers', 'You learned from the previous chapter, that we can get the memory address of a variable by using the & operator:', '#include <iostream>\r\n#include <string>\r\nusing namespace std;\r\n\r\nint main() {\r\n  string food = \"Pizza\";\r\n\r\n  cout << food << \"\n\";\r\n  cout << &food << \"\n\";\r\n  return 0;\r\n}\r\n', 1, '2024-03-31'),
(31, 'C++', 'C++ Recursion', 'Adding two numbers together is easy to do, but adding a range of numbers is more complicated. In the following example, recursion is used to add a range of numbers together by breaking it down into the simple task of adding two numbers:', '#include <iostream>\r\nusing namespace std;\r\n\r\nint sum(int k) {\r\n  if (k > 0) {\r\n    return k + sum(k - 1);\r\n  } else {\r\n    return 0;\r\n  }\r\n}\r\n\r\nint main() {\r\n  int result = sum(10);\r\n  cout << result;\r\n  return 0;\r\n}\r\n', 1, '2024-03-31'),
(32, 'c', 'C Switch', 'Instead of writing many if..else statements, you can use the switch statement.\r\n\r\nThe switch statement selects one of many code blocks to be executed:', '#include <stdio.h>\r\n\r\nint main() {\r\n  int day = 4;\r\n  \r\n  switch (day) {\r\n    case 1:\r\n      printf(\"Monday\");\r\n      break;\r\n    case 2:\r\n      printf(\"Tuesday\");\r\n      break;\r\n    case 3:\r\n      printf(\"Wednesday\");\r\n      break;\r\n    case 4:\r\n      printf(\"Thursday\");\r\n      break;\r\n    case 5:\r\n      printf(\"Friday\");\r\n      break;\r\n    case 6:\r\n      printf(\"Saturday\");\r\n      break;\r\n    case 7:\r\n      printf(\"Sunday\");\r\n      break;\r\n  }\r\n    \r\n  return 0;\r\n}', 1, '2024-03-31'),
(34, 'php', 'php Global variables', 'Variables of the outer most scope are automatically global variables, and can be used by any scope, e.g. inside a function.', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n<?php  \r\n$x = 75;\r\n  \r\nfunction myfunction() {\r\n  echo $GLOBALS[\'x\'];\r\n}\r\n\r\nmyfunction()\r\n?>  \r\n\r\n</body>\r\n</html>\r\n', 1, '2024-04-06'),
(35, 'php', 'php echo and print', 'echo and print are more or less the same. They are both used to output data to the screen.\r\n\r\nThe differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n<?php\r\n$txt1 = \"Learn PHP\";\r\n$txt2 = \"W3Schools.com\";\r\n$x = 5;\r\n$y = 4;\r\n\r\necho \"<h2>\" . $txt1 . \"</h2>\";\r\necho \"Study PHP at \" . $txt2 . \"<br>\";\r\necho $x + $y;\r\n?>\r\n\r\n</body>\r\n</html>\r\n', 1, '2024-04-06'),
(36, 'php', 'PHP Constants', 'A constant is an identifier (name) for a simple value. The value cannot be changed during the script.\r\n\r\nA valid constant name starts with a letter or underscore (no $ sign before the constant name).', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n<?php\r\nconst MYCAR = \"Volvo\";\r\n\r\necho MYCAR;\r\n?> \r\n\r\n</body>\r\n</html>\r\n', 1, '2024-04-06'),
(37, 'php', 'PHP OOP - Inheritance', 'Inheritance in OOP = When a class derives from another class.\r\n\r\nThe child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.\r\n\r\nAn inherited class is defined by using the extends keyword.', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n<?php\r\nclass Fruit {\r\n  public $name;\r\n  public $color;\r\n  public function __construct($name, $color) {\r\n    $this->name = $name;\r\n    $this->color = $color; \r\n  }\r\n  public function intro() {\r\n    echo \"The fruit is {$this->name} and the color is {$this->color}.\"; \r\n  }\r\n}\r\n\r\n// Strawberry is inherited from Fruit\r\nclass Strawberry extends Fruit {\r\n  public function message() {\r\n    echo \"Am I a fruit or a berry? \"; \r\n  }\r\n}\r\n\r\n$strawberry = new Strawberry(\"Strawberry\", \"red\");\r\n$strawberry->message();\r\n$strawberry->intro();\r\n?>\r\n \r\n</body>\r\n</html>\r\n', 1, '2024-04-06'),
(38, 'php', 'PHP Namespaces', 'Namespaces are qualifiers that solve two different problems:\r\n\r\nThey allow for better organization by grouping classes that work together to perform a task\r\nThey allow the same name to be used for more than one class', '<?php\r\nnamespace Html;\r\nclass Table {\r\n  public $title = \"\";\r\n  public $numRows = 0;\r\n  public function message() {\r\n    echo \"<p>Table \'{$this->title}\' has {$this->numRows} rows.</p>\";\r\n  }\r\n}\r\n$table = new Table();\r\n$table->title = \"My table\";\r\n$table->numRows = 5;\r\n?>\r\n\r\n<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n<?php\r\n$table->message();\r\n?>\r\n\r\n</body>\r\n</html>', 1, '2024-04-06'),
(39, 'php', 'PHP - Static Methods', 'Static methods can be called directly - without creating an instance of the class first.\r\n\r\nStatic methods are declared with the static keyword:', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n<?php\r\nclass greeting {\r\n  public static function welcome() {\r\n    echo \"Hello World!\";\r\n  }\r\n}\r\n\r\n// Call static method\r\ngreeting::welcome();\r\n?>\r\n \r\n</body>\r\n</html>\r\n', 1, '2024-04-06'),
(40, 'php', 'PHP - Access Modifiers', 'There are three access modifiers:\r\n\r\npublic - the property or method can be accessed from everywhere. This is default\r\nprotected - the property or method can be accessed within the class and by classes derived from that class\r\nprivate - the property or method can ONLY be accessed within the class', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n<?php\r\nclass Fruit {\r\n  public $name;\r\n  public $color;\r\n  public function __construct($name, $color) {\r\n    $this->name = $name;\r\n    $this->color = $color; \r\n  }\r\n  public function intro() {\r\n    echo \"The fruit is {$this->name} and the color is {$this->color}.\"; \r\n  }\r\n}\r\n\r\n// Strawberry is inherited from Fruit\r\nclass Strawberry extends Fruit {\r\n  public function message() {\r\n    echo \"Am I a fruit or a berry? \"; \r\n  }\r\n}\r\n\r\n$strawberry = new Strawberry(\"Strawberry\", \"red\");\r\n$strawberry->message();\r\n$strawberry->intro();\r\n?>\r\n \r\n</body>\r\n</html>\r\n', 1, '2024-04-06'),
(41, 'php', 'PHP OOP - Destructor', 'A destructor is called when the object is destructed or the script is stopped or exited.\r\n\r\nIf you create a __destruct() function, PHP will automatically call this function at the end of the script.\r\n\r\nNotice that the destruct function starts with two underscores (__)!', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n<?php\r\nclass Fruit {\r\n  public $name;\r\n  public $color;\r\n\r\n  function __construct($name) {\r\n    $this->name = $name; \r\n  }\r\n  function __destruct() {\r\n    echo \"The fruit is {$this->name}.\"; \r\n  }\r\n}\r\n\r\n$apple = new Fruit(\"Apple\");\r\n?>\r\n \r\n</body>\r\n</html>\r\n', 1, '2024-04-06'),
(42, 'php', 'PHP OOP - Classes and Objects', 'Let\'s assume we have a class named Fruit. A Fruit can have properties like name, color, weight, etc. We can define variables like $name, $color, and $weight to hold the values of these properties.\r\n\r\nWhen the individual objects (apple, banana, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n<?php\r\nclass Fruit {\r\n  // Properties\r\n  public $name;\r\n  public $color;\r\n\r\n  // Methods\r\n  function set_name($name) {\r\n    $this->name = $name;\r\n  }\r\n  function get_name() {\r\n    return $this->name;\r\n  }\r\n}\r\n\r\n$apple = new Fruit();\r\n$banana = new Fruit();\r\n$apple->set_name(\'Apple\');\r\n$banana->set_name(\'Banana\');\r\n\r\necho $apple->get_name();\r\necho \"<br>\";\r\necho $banana->get_name();\r\n?>\r\n \r\n</body>\r\n</html>\r\n', 1, '2024-04-06'),
(43, 'c', 'C Variables', 'Variables are containers for storing data values, like numbers and characters.\r\n\r\nIn C, there are different types of variables (defined with different keywords), for example:\r\n\r\nint - stores integers (whole numbers), without decimals, such as 123 or -123\r\nfloat - stores floating point numbers, with decimals, such as 19.99 or -19.99\r\nchar - stores single characters, such as \'a\' or \'B\'. Characters are surrounded by single quotes', '#include <stdio.h>\r\n\r\nint main() {\r\n  printf(\"Hello World!\");\r\n  return 0;\r\n}', 1, '2024-04-06'),
(44, 'c', 'C Data Types', 'As explained in the Variables chapter, a variable in C must be a specified data type, and you must use a format specifier inside the printf() function to display it:', '#include <stdio.h>\r\n\r\nint main() {\r\n  // Create variables\r\n  int myNum = 5;               // Integer (whole number)\r\n  float myFloatNum = 5.99;     // Floating point number\r\n  char myLetter = \'D\';         // Character\r\n  \r\n  // Print variables\r\n  printf(\"%d\\n\", myNum);\r\n  printf(\"%f\\n\", myFloatNum);\r\n  printf(\"%c\\n\", myLetter);\r\n  return 0;\r\n}', 1, '2024-04-06'),
(45, 'c', 'C Operators\r\n', 'Operators are used to perform operations on variables and values.\r\n\r\nIn the example below, we use the + operator to add together two values:', '#include <stdio.h>\r\n\r\nint main() {\r\n  int sum1 = 100 + 50;        // 150 (100 + 50)\r\n  int sum2 = sum1 + 250;      // 400 (150 + 250)\r\n  int sum3 = sum2 + sum2;     // 800 (400 + 400)\r\n  printf(\"%d\\n\", sum1);\r\n  printf(\"%d\\n\", sum2);\r\n  printf(\"%d\\n\", sum3);\r\n  return 0;\r\n}', 1, '2024-04-06'),
(46, 'c', 'C Booleans', 'Very often, in programming, you will need a data type that can only have one of two values, like:\r\n\r\nYES / NO\r\nON / OFF\r\nTRUE / FALSE\r\nFor this, C has a bool data type, which is known as booleans.\r\n\r\nBooleans represent values that are either true or false.\r\n\r\n', '#include <stdio.h>\r\n#include <stdbool.h>  // Import the boolean header file \r\n\r\nint main() {\r\n  bool isProgrammingFun = true;\r\n  bool isFishTasty = false;\r\n  printf(\"%d\\n\", isProgrammingFun);  // Returns 1 (true)\r\n  printf(\"%d\", isFishTasty);         // Returns 0 (false)\r\n  \r\n  return 0;\r\n}', 1, '2024-04-06'),
(47, 'c', 'C If ... Else', 'You have already learned that C supports the usual logical conditions from mathematics:\r\n\r\nLess than: a < b\r\nLess than or equal to: a <= b\r\nGreater than: a > b\r\nGreater than or equal to: a >= b\r\nEqual to a == b\r\nNot Equal to: a != b\r\nYou can use these conditions to perform different actions for different decisions.', '#include <stdio.h>\r\n\r\nint main() {\r\n  int x = 20;\r\n  int y = 18;\r\n  if (x > y) {\r\n    printf(\"x is greater than y\");\r\n  }  \r\n  return 0;\r\n}', 1, '2024-04-06'),
(48, 'c', 'C Arrays', 'Arrays are used to store multiple values in a single variable, instead of declaring separate variables for each value.\r\n\r\nTo create an array, define the data type (like int) and specify the name of the array followed by square brackets [].', '#include <stdio.h>\r\n\r\nint main() {\r\n  // Declare an array of four integers:\r\n  int myNumbers[4];\r\n\r\n  // Add elements to it\r\n  myNumbers[0] = 25;\r\n  myNumbers[1] = 50;\r\n  myNumbers[2] = 75;\r\n  myNumbers[3] = 100;\r\n\r\n  printf(\"%d\\n\", myNumbers[0]);\r\n \r\n  return 0;\r\n}', 1, '2024-04-06'),
(49, 'c', 'C Strings', 'Strings are used for storing text/characters.\r\n\r\nFor example, \"Hello World\" is a string of characters.\r\n\r\nUnlike many other programming languages, C does not have a String type to easily create string variables. Instead, you must use the char type and create an array of characters to make a string in C:', '#include <stdio.h>\r\n\r\nint main() {\r\n  char carName[] = \"Volvo\";\r\n  int length = sizeof(carName) / sizeof(carName[0]);\r\n  int i;\r\n  \r\n  for (i = 0; i < length; ++i) {\r\n    printf(\"%c\\n\", carName[i]);\r\n  }\r\n\r\n  return 0;\r\n}', 1, '2024-04-06'),
(50, 'c', 'C Memory Address', 'When a variable is created in C, a memory address is assigned to the variable.\r\n\r\nThe memory address is the location of where the variable is stored on the computer.\r\n\r\nWhen we assign a value to the variable, it is stored in this memory address.\r\n\r\nTo access it, use the reference operator (&), and the result represents where the variable is stored:', '#include <stdio.h>\r\n\r\nint main() {\r\n  int myAge = 43;\r\n  printf(\"%p\", &myAge);\r\n  return 0;\r\n}', 1, '2024-04-06'),
(51, 'c', 'C Functions', 'A function is a block of code which only runs when it is called.\r\n\r\nYou can pass data, known as parameters, into a function.\r\n\r\nFunctions are used to perform certain actions, and they are important for reusing code: Define the code once, and use it many times.', '#include <stdio.h>\r\n\r\n// Create a function\r\nvoid myFunction() {\r\n  printf(\"I just got executed!\");\r\n}\r\n\r\nint main() {\r\n  myFunction(); // call the function\r\n  return 0;\r\n}', 1, '2024-04-06'),
(52, 'c', 'C Pointers', 'You learned from the previous chapter, that we can get the memory address of a variable with the reference operator &:', '#include <stdio.h>\r\n\r\nint main() {\r\n  int myAge = 43;  // An int variable\r\n  int* ptr = &myAge;  // A pointer variable, with the name ptr, that stores the address of myAge\r\n\r\n  // Output the value of myAge (43)\r\n  printf(\"%d\\n\", myAge);\r\n\r\n  // Output the memory address of myAge (0x7ffe5367e044)\r\n  printf(\"%p\\n\", &myAge);\r\n\r\n  // Output the memory address of myAge with the pointer (0x7ffe5367e044)\r\n  printf(\"%p\\n\", ptr);\r\n\r\n  return 0;\r\n}', 1, '2024-04-06'),
(55, 'PYTHON', 'Python Comments', 'Comments can be used to explain Python code.\r\n\r\nComments can be used to make the code more readable.\r\n\r\nComments can be used to prevent execution when testing code.', '#print(\"Hello, World!\")\r\nprint(\"Cheers, Mate!\")', 1, '2024-04-06'),
(56, 'PYTHON', 'Python Variables', 'Creating Variables\r\nPython has no command for declaring a variable.\r\n\r\nA variable is created the moment you first assign a value to it.', 'x = str(3)\r\ny = int(3)\r\nz = float(3)\r\n\r\nprint(x)\r\nprint(y)\r\nprint(z)\r\n', 1, '2024-04-06'),
(57, 'python', 'Python Casting', 'Casting in python is therefore done using constructor functions:\r\n\r\nint() - constructs an integer number from an integer literal, a float literal (by removing all decimals), or a string literal (providing the string represents a whole number)\r\nfloat() - constructs a float number from an integer literal, a float literal or a string literal (providing the string represents a float or an integer)\r\nstr() - constructs a string from a wide variety of data types, including strings, integer literals and float literals', 'x = str(\"s1\")\r\ny = str(2)\r\nz = str(3.0)\r\nprint(x)\r\nprint(y)\r\nprint(z)\r\n', 1, '2024-04-06'),
(58, 'python', 'Python Strings', 'Strings in python are surrounded by either single quotation marks, or double quotation marks.\r\n\r\n\'hello\' is the same as \"hello\".\r\n\r\nYou can display a string literal with the print() function:', 'a = \'\'\'Lorem ipsum dolor sit amet,\r\nconsectetur adipiscing elit,\r\nsed do eiusmod tempor incididunt\r\nut labore et dolore magna aliqua.\'\'\'\r\nprint(a)\r\n', 1, '2024-04-06'),
(59, 'python', 'Python Lists', 'Lists are used to store multiple items in a single variable.\r\n\r\nLists are one of 4 built-in data types in Python used to store collections of data, the other 3 are Tuple, Set, and Dictionary, all with different qualities and usage.\r\n\r\nLists are created using square brackets:', 'thislist = [\"apple\", \"banana\", \"cherry\", \"apple\", \"cherry\"]\r\n\r\nprint(thislist)', 1, '2024-04-06'),
(60, 'python', 'Python If ... Else', 'Python supports the usual logical conditions from mathematics:\r\n\r\nEquals: a == b\r\nNot Equals: a != b\r\nLess than: a < b\r\nLess than or equal to: a <= b\r\nGreater than: a > b\r\nGreater than or equal to: a >= b\r\nThese conditions can be used in several ways, most commonly in \"if statements\" and loops.', 'a = 33\r\nb = 200\r\n\r\nif b > a:\r\n  print(\"b is greater than a\")\r\n', 1, '2024-04-06'),
(61, 'python', 'Python Arrays', 'An array is a special variable, which can hold more than one value at a time.\r\n\r\nIf you have a list of items (a list of car names, for example), storing the cars in single variables could look like this:', 'cars = [\"Ford\", \"Volvo\", \"BMW\"]\r\n\r\nx = len(cars)\r\n\r\nprint(x)\r\n', 1, '2024-04-06'),
(62, 'python', 'Python Try Except', 'The try block lets you test a block of code for errors.\r\n\r\nThe except block lets you handle the error.\r\n\r\nThe else block lets you execute code when there is no error.\r\n\r\nThe finally block lets you execute code, regardless of the result of the try- and except blocks.\r\n\r\n', 'The try block lets you test a block of code for errors.\r\n\r\nThe except block lets you handle the error.\r\n\r\nThe else block lets you execute code when there is no error.\r\n\r\nThe finally block lets you execute code, regardless of the result of the try- and except blocks.\r\n\r\n', 1, '2024-04-06'),
(63, 'python', 'Python Classes and Objects\r\n', 'Python is an object oriented programming language.\r\n\r\nAlmost everything in Python is an object, with its properties and methods.\r\n\r\nA Class is like an object constructor, or a \"blueprint\" for creating objects.', 'class Person:\r\n  def __init__(self, name, age):\r\n    self.name = name\r\n    self.age = age\r\n\r\np1 = Person(\"John\", 36)\r\n\r\nprint(p1.name)\r\nprint(p1.age)\r\n', 1, '2024-04-06'),
(64, 'python', 'Python Iterators', 'An iterator is an object that contains a countable number of values.\r\n\r\nAn iterator is an object that can be iterated upon, meaning that you can traverse through all the values.\r\n\r\nTechnically, in Python, an iterator is an object which implements the iterator protocol, which consist of the methods __iter__() and __next__().\r\n\r\n', 'mystr = \"banana\"\r\nmyit = iter(mystr)\r\n\r\nprint(next(myit))\r\nprint(next(myit))\r\nprint(next(myit))\r\nprint(next(myit))\r\nprint(next(myit))\r\nprint(next(myit))\r\n', 1, '2024-04-06'),
(65, 'java', 'Java Variables', 'Variables are containers for storing data values.\r\n\r\nIn Java, there are different types of variables, for example:\r\n\r\nString - stores text, such as \"Hello\". String values are surrounded by double quotes\r\nint - stores integers (whole numbers), without decimals, such as 123 or -123\r\nfloat - stores floating point numbers, with decimals, such as 19.99 or -19.99\r\nchar - stores single characters, such as \'a\' or \'B\'. Char values are surrounded by single quotes\r\nboolean - stores values with two states: true or false', 'public class Main {\r\n  public static void main(String[] args) {\r\n    int myNum = 15;\r\n    myNum = 20;  // myNum is now 20\r\n    System.out.println(myNum);\r\n  }\r\n}\r\n', 1, '2024-04-06'),
(66, 'java', 'Java Data Types\r\n', 'Data types are divided into two groups:\r\n\r\nPrimitive data types - includes byte, short, int, long, float, double, boolean and char\r\nNon-primitive data types - such as String, Arrays and Classes (you will learn more about these in a later chapter)', 'public class Main {\r\n  public static void main(String[] args) {\r\n    long myNum = 15000000000L;\r\n    System.out.println(myNum);  \r\n  }\r\n}\r\n', 1, '2024-04-06'),
(67, 'java', 'Java Type Casting', 'In Java, there are two types of casting:\r\n\r\nWidening Casting (automatically) - converting a smaller type to a larger type size\r\nbyte -> short -> char -> int -> long -> float -> double\r\n\r\nNarrowing Casting (manually) - converting a larger type to a smaller size type\r\ndouble -> float -> long -> int -> char -> short -> byte', 'public class Main {\r\n  public static void main(String[] args) {\r\n    double myDouble = 9.78d;\r\n    int myInt = (int) myDouble; // Explicit casting: double to int\r\n\r\n    System.out.println(myDouble);\r\n    System.out.println(myInt);\r\n  }\r\n}', 1, '2024-04-06'),
(68, 'java', 'Java Operators', 'Operators are used to perform operations on variables and values.\r\n\r\nIn the example below, we use the + operator to add together two values:\r\nAlthough the + operator is often used to add together two values, like in the example above, it can also be used to add together a variable and a value, or a variable and another variable:', 'public class Main {\r\n  public static void main(String[] args) {\r\n    int x = 10;\r\n    x += 5;\r\n    System.out.println(x);\r\n  }\r\n}\r\n', 1, '2024-04-06'),
(69, 'java', 'Java Strings', 'Strings are used for storing text.\r\n\r\nA String variable contains a collection of characters surrounded by double quotes:\r\n\r\nA String in Java is actually an object, which contain methods that can perform certain operations on strings. For example, the length of a string can be found with the length() method:', 'public class Main {\r\n  public static void main(String[] args) {\r\n    String txt = \"Hello World\";\r\n    System.out.println(txt.toUpperCase());\r\n    System.out.println(txt.toLowerCase());\r\n  }\r\n}\r\n', 1, '2024-04-06'),
(70, 'java', 'Java Break and Continue', 'You have already seen the break statement used in an earlier chapter of this tutorial. It was used to \"jump out\" of a switch statement.\r\n\r\nThe break statement can also be used to jump out of a loop.\r\n\r\nThis example stops the loop when i is equal to 4:', 'public class Main {\r\n  public static void main(String[] args) {\r\n    int i = 0;\r\n    while (i < 10) {\r\n      if (i == 4) {\r\n        i++;\r\n        continue;\r\n      }\r\n      System.out.println(i);\r\n      i++;\r\n    }  \r\n  }\r\n}\r\n', 1, '2024-04-06'),
(71, 'java', 'Java Classes and Objects', 'Java is an object-oriented programming language.\r\n\r\nEverything in Java is associated with classes and objects, along with its attributes and methods. For example: in real life, a car is an object. The car has attributes, such as weight and color, and methods, such as drive and brake.\r\n\r\nA Class is like an object constructor, or a \"blueprint\" for creating objects.', 'public class Main {\r\n  int x = 5;\r\n\r\n  public static void main(String[] args) {\r\n    Main myObj = new Main();\r\n    System.out.println(myObj.x);\r\n  }\r\n}\r\n', 1, '2024-04-06'),
(72, 'java', 'Java Inheritance', 'In Java, it is possible to inherit attributes and methods from one class to another. We group the \"inheritance concept\" into two categories:\r\n\r\nsubclass (child) - the class that inherits from another class\r\nsuperclass (parent) - the class being inherited from\r\nTo inherit from a class, use the extends keyword.\r\n\r\nIn the example below, the Car class (subclass) inherits the attributes and methods from the Vehicle class (superclass):', 'class Vehicle {\r\n  protected String brand = \"Ford\";\r\n  public void honk() {\r\n    System.out.println(\"Tuut, tuut!\");\r\n  }\r\n}\r\n\r\nclass Car extends Vehicle {\r\n  private String modelName = \"Mustang\";\r\n  public static void main(String[] args) {\r\n    Car myFastCar = new Car();\r\n    myFastCar.honk();\r\n    System.out.println(myFastCar.brand + \" \" + myFastCar.modelName);\r\n  }\r\n}\r\n', 1, '2024-04-06'),
(73, 'PHP', 'PHP OOP - Traits', '<p>PHP only supports single inheritance: a child class can inherit only from one single parent.</p>\r\n\r\n<p>So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.</p>\r\n\r\n<p>Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).</p>\r\n\r\n<p>Traits are declared with the&nbsp;<code>trait</code>&nbsp;keyword:</p>\r\n', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n<?php\r\ntrait message1 {\r\n  public function msg1() {\r\n    echo \"OOP is fun! \"; \r\n  }\r\n}\r\n\r\nclass Welcome {\r\n  use message1;\r\n}\r\n\r\n$obj = new Welcome();\r\n$obj->msg1();\r\n?>\r\n \r\n</body>\r\n</html>\r\n', 1, '2024-04-10');

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
(9, '660913bcda5ee.jpg', 'Abhi', 'abhi@gmail.com', 'abhi123', 1, '2024-03-17', '8460504236', 'Surat');

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
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practice`
--
ALTER TABLE `practice`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `practice`
--
ALTER TABLE `practice`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tutorial`
--
ALTER TABLE `tutorial`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
