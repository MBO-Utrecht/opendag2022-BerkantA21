<?php
require("./classes/functions.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

    try{
    $db = new Database();

    $db->query("INSERT INTO `enquetereparatie` (`id`,
                                       `info`,
                                       `medewerker`,
                                       `software`,
                                       `allround`,
                                       `gesprek`,
                                       `ervaring`,
                                       `tips`)
                VALUES                 (:id,
                                        :info,
                                        :medewerker,
                                        :software,
                                        :allround,
                                        :gesprek,
                                        :ervaring,
                                        :tips)");

    $db->bind(':id', NULL, PDO::PARAM_INT);
    $db->bind(':info', $_POST['info'], PDO::PARAM_STR);
    $db->bind(':medewerker', $_POST['medewerker'], PDO::PARAM_STR);
    $db->bind(':software', $_POST['software'], PDO::PARAM_INT);
    $db->bind(':allround', $_POST['allround'], PDO::PARAM_INT);
    $db->bind(':gesprek', $_POST['gesprek'], PDO::PARAM_STR);
    $db->bind(':ervaring', $_POST['ervaring'], PDO::PARAM_STR);
    $db->bind(':tips', $_POST['tips'], PDO::PARAM_STR);

    $db->execute();
    header("Location: ./enquete_lezen.php");
    } catch(PDOException $e){
        var_dump($e);exit();
    }
} else {
    echo "dit is een array niet in behandeling genomen";
}
?>