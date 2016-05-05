<!DOCTYPE html>
<html>
    <head>
        <title>
            Adding a question!
        </title>
    </head>
    <body>
        <form action="/index.php?handler=QuestionController&action=addQuestionSimple" method="post">
            Question text:
            <input type="text" name="questionText" required="true" value="Coffee?"><br>
            <strong>A:</strong>
                <input type="text" name="answer0" value="Yes"> 
                <input type="radio" name="correctAnswer" value="0" required="true"> <br>
            <strong>B:</strong>
                <input type="text" name="answer1" value="No"> 
                <input type="radio" name="correctAnswer" value="1" required="true"><br>
            <strong>C:</strong>
                <input type="text" name="answer2" value="Maybe">     
                <input type="radio" name="correctAnswer" value="2" required="true"><br>
            <strong>D:</strong>
                <input type="text" name="answer3" value="Not Sure"> 
                <input type="radio" name="correctAnswer" value="35" required="true"><br>
            <button type="submit" value="Submit">Add Question Simple</button>
        </form>
        
    </body>
</html>