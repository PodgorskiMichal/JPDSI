<?php
namespace app\controllers;

class ResultCtrl
{
    private $records;

    public function action_result()
    {
        try {
            $this->records = getDB()->select("wyniki", [
                "kw",
                "ll",
                "op",
                "rata",
                "DATA",
            ]);
        } catch (\PDOException $ex) {
            getMessages()->addError("DB Error: " . $ex->getMessage());
        }
        getSmarty()->assign('wyniki',$this->records);
        getSmarty()->display('Result.tpl');
    }
}