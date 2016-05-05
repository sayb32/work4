<?php

namespace Model\Entity;

class QuestionSimple implements QuestionInterface{
    public function __construct($questionData) {
        $this->id = uniqid();
        
        // taking this for call_user_func
        $this->type = 'QuestionSimple';

        // Getting the question text
        $this->questionText = $questionData['questionText'];
        unset($questionData['questionText']);
        
        // Getting the correct answer [0, 1, 2, 3, n-1]
        $this->corectAnswer = $questionData['correctAnswer'];
        unset($questionData['correctAnswer']);

        // remaining data => n answers(4)
        $this->createPossibleAnswers($questionData);
    }
    
    public function createPossibleAnswers($questionData) {
        for($i = 0, $n = count($questionData); $i < $n; $i++) {
            array_push($this->answer,$questionData['answer' . $i]);
        }
        unset($questionData);
    }

    public function getAnswers() {
        return $this->answer;
    }

    public function getRightAnswers() {
        return $this->corectAnswer;
    }

    public function getText() {
        return $this->questionText;
    }

    public function getType() {
        return $this->type;
    }
    
    public function getId() {
        return $this->id;
    }

    private $id;
    private $questionText;
    private $answer = array();
    private $corectAnswer;
    private $type;
    
}