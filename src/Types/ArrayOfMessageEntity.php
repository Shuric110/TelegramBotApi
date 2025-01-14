<?php
/**
 * Created by PhpStorm.
 * User: iGusev
 * Date: 13/04/16
 * Time: 04:16
 */

namespace TelegramBot\Api\Types;

abstract class ArrayOfMessageEntity
{
    /**
     * @throws \TelegramBot\Api\InvalidArgumentException
     */
    public static function fromResponse($data)
    {
        $arrayOfMessageEntity = [];
        foreach ($data as $messageEntity) {
            $arrayOfMessageEntity[] = MessageEntity::fromResponse($messageEntity);
        }

        return $arrayOfMessageEntity;
    }
}
