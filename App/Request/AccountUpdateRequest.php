<?php

namespace Bank\App\Request;
use Bank\App\Message;

class AccountUpdateRequest
{
    public static function validate($request)
    {

        $addMoney = $request['addMoney'] ?? null;
        $remMoney = $request['withdraw'] ?? null;

        if ($addMoney !== null){
            $money = $addMoney;
        } elseif ($remMoney !== null){
            $money = $remMoney;
        } else {
            $money = null;
        }
        // $addmoney = $request['addMoney'] ?? null;

        if (!is_numeric($money)) {
            Message::get()->set('danger', "Input must be a number.");
        } elseif ($money <= 0) {
            Message::get()->set('danger', "Input must be more than 0.");
        }
        if (Message::get()->hasErrors()) {
            return false;
        }
        return true;
    }
}