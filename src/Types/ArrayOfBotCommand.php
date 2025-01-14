<?php

namespace TelegramBot\Api\Types;

abstract class ArrayOfBotCommand
{
    /**
     * @throws \TelegramBot\Api\InvalidArgumentException
     */
    public static function fromResponse($data)
    {
        $arrayOfBotCommand = [];
        foreach ($data as $botCommand) {
            $arrayOfBotCommand[] = BotCommand::fromResponse($botCommand);
        }

        return $arrayOfBotCommand;
    }
}
