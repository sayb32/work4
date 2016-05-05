<?php
namespace Model\Repository;

use Model\Entity\QuestionSimple as QuestionSimple;

class QuestionRepository {
public function __construct() {
    if (file_exists(Q_DB_PATH . Q_DB_NAME) === false ) {
    file_put_contents(Q_DB_PATH . Q_DB_NAME, "[]");
    }
}
public function fetchDatabase() {
    return json_decode($this->readDatabase(), true);
}

public function readDatabase() {
    return file_get_contents(Q_DB_PATH . Q_DB_NAME);
}

public function addQuestion($newQuestion) {
    $questions = $this->fetchDatabase();
    array_push($questions, serialize($newQuestion));
    file_put_contents(Q_DB_PATH . Q_DB_NAME, json_encode($questions, true));
}

public function removeQuestion($leWildPost) {
    $questions = $this->getQuestions();
        for($i = 0, $n = count($questions); $i < $n; $i++) {
            if(strcmp($questions[$i]->getId(), $leWildPost['id']) === 0) {
             unset($questions[$i]);
             break;
            }
        }
        $questions = array_values($questions);
        $newQuestions = array();
        // renew the values 
        foreach($questions as $q) {
           array_push($newQuestions, serialize($q));
        }
        file_put_contents(Q_DB_PATH . Q_DB_NAME, json_encode($newQuestions, true));
        header('Location: ' . ADMIN_VIEW_OPTIONS);
        die();
            
}  

public function getQuestions() {
    $questionsFromDb = array();
    $dataFromDb = $this->fetchDatabase();
        foreach($dataFromDb as $serQuestin) {
            array_push($questionsFromDb, unserialize($serQuestin));
        }
    return $questionsFromDb;
}
public function prettyPrint() {
    $allQuestions = $this->getQuestions();
    include SEND_BUTTON_HEADER;
    foreach($allQuestions as $question) {
        include QUESTION_VIEW;
    }
    include SEND_BUTTON_FOOTER;
    
}
}
/*
 load(id)
 save($entity)
 loadAll()
 loadPage( ...  , p, c)
  
 
 */