<?php
define('VIEW_ADMIN_PATH', __DIR__ . "\Src\View\Admin\AdminView.php");
define('HEADER_PATH', __DIR__ . '\Src\View\\header.php');
define('FOOTER_PATH', __DIR__ . '\Src\View\\footer.php'); 
define('LOGIN_PATH', __DIR__ . '\Src\View\\User\\login.php'); 
define('REGISTER_PATH', __DIR__ . '\Src\View\\User\\register.php'); 
define('DB_PATH', __DIR__ . '\Src\DataBase\\'); 
define('DB_NAME', "userDataBase.json");
define('DB', __DIR__ . "\Src\DataBase\userDataBase.json");
define('HASH', 'LEMON');
define('RANDOM_WORD', 'admin');
define('Q_DB_PATH', __DIR__ . "\Src\DataBase\\");
define('Q_DB_NAME', "questionsDataBase.json");
define('QUESTION_VIEW', __DIR__ . "\Src\View\Question\QuestionView.php");
define('SEND_BUTTON_HEADER',__DIR__ . "\Src\View\Question\\removeSectionHeader.php");
define('SEND_BUTTON_FOOTER',__DIR__ . "\Src\View\Question\\removeSectionFooter.php");
define('ADMIN_VIEW_OPTIONS', "http://localhost/index.php?handler=QuestionController&action=viewQuestions");
define('ADD_QUESTIONS', "http://localhost/index.php?handler=QuestionController&action=addQuestionForms");







