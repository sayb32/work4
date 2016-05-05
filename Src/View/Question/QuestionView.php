<!DOCTYPE HTML>
<strong>Question Text:<?=$question->getText()?></strong><br>
<strong>Possible Answers<br><?=print_r($question->getAnswers())?></strong><br>
<strong>Right Answer:<?=$question->getRightAnswers()?></strong><br>
<strong>Type:<?=$question->getType()?></strong>
<input type="checkbox" name="id" value="<?=$question->getId()?>">
<br><br>