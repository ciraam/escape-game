<?php 

Class test {
    private $id;
    private $code;

    function __construct($id, $code) {
        $this -> id = $id;
        $this -> code = $code;
    }

    function getId() {
        return $this -> id;
    }
    function getCode() {
        return $this -> code;
    }
    function setId($id) {
        $this -> id = $id;
    }
    function setCode($code) {
        $this -> code = $code;
    }
}
Class testProjet {
    private $bd;

    function __construct() {
        $this-> bd = new PDO("mysql:host=localhost;dbname=escape_game", 'root', '');
    }
    public function getLeaderBoardGeneral() {
        
        
    
            // $sql = "select * from leader_board group by score & id_user order by score desc";
            $sql1 = "select *, sum(score) from leader_board where guest_name is not null group by guest_name order by sum(score) desc limit 5;";
            $sql2 = "select *, sum(score) from leader_board where id_user is not null group by id_user order by sum(score) desc limit 5;";
            $requete1 = $this -> bd -> prepare($sql1);
        $requete1 -> execute();
        $scoresGuest = $requete1 -> fetchAll();
        $requete2 = $this -> bd -> prepare($sql2);
        $requete2 -> execute();
        $scoresUser = $requete2 -> fetchAll();
            $leaderBoardGeneral = array();
            // for ($i = 0; $i < 10; $i++) {
            //     array_push($leaderBoardGeneral, [
            //         'id_categ' => 1,
            //         'id_quizz' => 1,
            //         'guest_name' => 'test',
            //         'score' => 0
            //     ]); // test unitaire 
            //     if ($scoresGuest[3][$i] > $scoresUser[3][$i]) {
            //         // array_push($leaderBoardGeneral, [$scoresGuest['id_categ'][$i], $scoresGuest['id_quizz'][$i], strval($scoresGuest['guest_name'][$i]), $scoresGuest['sum(score)'][$i]]);
            //         // array_push($leaderBoardGeneral, [$scoresUser['id_categ'][$i], $scoresUser['id_quizz'][$i], $scoresUser['id_user'][$i], $scoresUser['sum(score)'][$i]]);
            //         array_push($leaderBoardGeneral, [
            //             'id_categ' => $scoresGuest['id_categ'][$i],
            //             'id_quizz' => $scoresGuest['id_quizz'][$i],
            //             'guest_name' => strval($scoresGuest['guest_name'][$i]),
            //             'score' => $scoresGuest['sum(score)'][$i]
            //         ]);
            //         array_push($leaderBoardGeneral, [
            //             'id_categ' => $scoresUser['id_categ'][$i],
            //             'id_quizz' => $scoresUser['id_quizz'][$i],
            //             'guest_name' => $scoresUser['id_user'][$i],
            //             'score' => $scoresUser['sum(score)'][$i]
            //         ]);
            //     } else {
            //         // array_push($leaderBoardGeneral, [$scoresUser['id_categ'][$i], $scoresUser['id_quizz'][$i], $scoresUser['id_user'][$i], $scoresUser['sum(score)'][$i]]);
            //         // array_push($leaderBoardGeneral, [$scoresGuest['id_categ'][$i], $scoresGuest['id_quizz'][$i], strval($scoresGuest['guest_name'])[$i], $scoresGuest['sum(score)'][$i]]);
            //         array_push($leaderBoardGeneral, [
            //             'id_categ' => $scoresUser['id_categ'][$i],
            //             'id_quizz' => $scoresUser['id_quizz'][$i],
            //             'guest_name' => $scoresUser['id_user'][$i],
            //             'score' => $scoresUser['sum(score)'][$i]
            //         ]);
            //         array_push($leaderBoardGeneral, [
            //             'id_categ' => $scoresGuest['id_categ'][$i],
            //             'id_quizz' => $scoresGuest['id_quizz'][$i],
            //             'guest_name' => strval($scoresGuest['guest_name'][$i]),
            //             'score' => $scoresGuest['sum(score)'][$i]
            //         ]);
            //     }
            // }
            $leaderBoardGeneral = array();
            
            for ($i = 0; $i < count($scoresGuest); $i++) {   
                array_push($leaderBoardGeneral, [
                    'guest_name' => strval($scoresGuest[$i]['guest_name']),
                    'score' => $scoresGuest[$i]['sum(score)']
                ]);
            }
    
            for ($i = 0; $i < count($scoresUser); $i++) {   
                array_push($leaderBoardGeneral, [
                    'id_user' => $scoresUser[$i]['id_user'],
                    'score' => $scoresUser[$i]['sum(score)']
                ]);
            }
    
            array_push($leaderBoardGeneral, [
                'guest_name' => 'test',
                'score' => 0
            ]);
    
            usort($leaderBoardGeneral, function ($a, $b) {
                return $b['score'] <=> $a['score'];
            });
    
            return $leaderBoardGeneral;
        }

}