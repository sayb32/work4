<?php
namespace Controller;

use Model\Entity\QuestionSimple as QuestionSimple;
use Model\Repository\QuestionRepository as QuestionRepository;

class QuestionController {
    public function addQuestionSimple() {
       $questionSimple = new QuestionSimple($_POST);
       $questionRepository = new QuestionRepository();
       $questionRepository->addQuestion($questionSimple);
       $this->viewQuestions();
    }
    public function addQuestionMultiple() {
        echo "Question Multiple";
    }
    public function addQuestionInput() {
        echo "Question Input";
    }
    public function viewQuestions() {
        include HEADER_PATH;
       $questionRepository = new QuestionRepository();
       $questionRepository->prettyPrint();
        include FOOTER_PATH;    
        
    }
    public function removeQuestion() {
        $questionRepository = new QuestionRepository();
        $questionRepository->removeQuestion($_POST);
        echo "Select what to delete, and baaam, delete!";
    }
    
}
// add()


// remove()