<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class SantaService
{
    /**
     * Генерация пары
     * @param array $arInputData
     * @return array
     */
    public function generatePairs(array $arInputData) : array
    {
        shuffle($arInputData);

        $arPairs = [];

        // Генерируем пары
        $count = count($arInputData);
        for ($i = 0; $i < $count; $i++) {
            $sGiver = $arInputData[$i];
            // Если последный то выберим первый элемент
            if ($i == ($count - 1)) {
                $sReceiverIndex = 0;
            } else { // Иначе след. элемент
                $sReceiverIndex = $i + 1;
            }
            $sReceiver = $arInputData[$sReceiverIndex];
            $arPairs[] = ['giver' => $sGiver, 'receiver' => $sReceiver];
        }

        return $arPairs;
    }

    /**
     * Отправка сообщении
     * @param array $arPairs
     */
    public function sendMessages(array $arPairs)
    {
        foreach ($arPairs as $arPair) {
            $this->sendMessage($arPair['giver'], "Вы выбраны тайным сантой для {$arPair['receiver']}");
        }
    }

    /**
     * Имитация отправки на почту
     * @param $giver
     * @param $message
     */
    private function sendMessage($giver, $message)
    {
        // Заглушка для отправки сообщения пользователю
        Log::info("Сообщение отправлено: $giver - $message");
    }
}
