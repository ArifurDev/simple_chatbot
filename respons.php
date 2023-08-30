<?php
function getResponse($userInput){
    switch ($userInput) {
        case 'hi':
            return "hello";
            break;

        case 'i love you':
            return "i love you too";
            break;

        case 'i miss you':
            return "i miss you baby";
            break;

        default:
            return "I'm sorry, I don't understand. Please ask another question.";
            break;
    }
}
?>