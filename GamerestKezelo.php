<?php
    require_once("restkezelo.php");
    require_once("Games.php");

class Gamesrestkezelo extends restkezelo {
function getAllGames(): void {
$games= new Games();
$sorAdat=$games->getAllGames();
    if (empty($sorAdat)) {
$statusCode = 404;
$sorAdat = array('error' => 'No Games found!');
    }
    else
    {
    }
$statusCode = 200;
$this->setHttpFejlec (statuskod: $statusCode);
$result["games"] = $sorAdat;
// Válasz küldése JSON formátumban
$response = $this->encodeJson(responseData: $result);
echo $response;
}

function getGamesById($id): void {
    $games= new Games();
    $sorAdat=$games->getGamesById(GameId: $id);
    if(empty($sorAdat)) {
    $statusCode = 404;
    $sorAdat = array('error' => 'No Games found by this id!');
    } else {
    $statusCode = 200;
    }

    function getGamesById($id): void {
        $games= new Games();
        $sorAdat=$games->getGamesById(GameId: $id);
        if(empty($sorAdat)) {
        $statusCode = 404;
        $sorAdat = array('error' => 'No Games found by this id!');
        } else {
        $statusCode = 200;
        }
        1124 IKTU 203 :3/24
        2
        1
        $this->setHttpFejlec (statuskod: $statusCode);
        $result["GamesById"] = $sorAdat;
        // Válasz küldése JSON formátumban
        $response = $this->encodeJson (responseData: $result);
        echo $response;
    $this->setHttpFejlec (statuskod: $statusCode);
    $result["GamesById"] = $sorAdat;
    // Válasz küldése JSON formátumban
    $response = $this->encodeJson (responseData: $result);
    echo $response;


    function getFault(): void
{
    
$statusCode = 400;
$this->setHttpFejlec (statuskod: $statusCode);
$sorAdat = array('error' => 'Bad Request!');
$result["Fault"] = $sorAdat;
// Válasz küldése JSON formátumban
$response = $this->encodeJson(responseData: $result);
echo $response;
function encodeJson($responseData): bool string {
$jsonResponse = json_encode(value: $responseData);
return $jsonResponse;
}

}
?>