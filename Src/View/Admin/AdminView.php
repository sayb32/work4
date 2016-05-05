<!DOCTYPE html>
<html>
    <head>
        <title> Add Question View Page </title>
    </head>
    <body>
        <form action="/Src/View/Admin/AddQuestionSimpleView.php">
            <button type="submit" value="Submit">Create Question</button>
        </form>

        <form action="/index.php?handler=QuestionController&action=removeQuestion" method="post">
            <button type="submit" value="Submit">Remove Question</button>
        </form>
        
        <form action="/index.php?handler=QuestionController&action=viewQuestions" method="post">
            <button type="submit" value="Submit">View Questions</button>
        </form>
    </body>
</html>