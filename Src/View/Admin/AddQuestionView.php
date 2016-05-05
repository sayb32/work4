<!DOCTYPE html>
<html>
    <head>
        <title> User Page </title>
    </head>
    <body>
        <form action="/index.php?handler=QuestionController&action=addQuestionSimple" method="post">
            <button type="submit" value="Submit">Question with one answer</button>
        </form>

        <form action="/index.php?handler=QuestionController&action=addQuestionMultiple" method="post">
            <button type="submit" value="Submit">Question with multiple choices</button>
        </form>

        <form action="/index.php?handler=QuestionController&action=addQuestionInput" method="post">
            <button type="submit" value="Submit">Question with input</button>
        </form>
    </body>
</html

