<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
use TelegramBot\Api\InvalidArgumentException;

/**
 * Class User
 * This object represents a Telegram user or bot.
 *
 * @package TelegramBot\Api\Types
 */
class User extends BaseType implements TypeInterface
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $requiredParams = ['id', 'first_name'];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $map = [
        'id' => true,
        'first_name' => true,
        'last_name' => true,
        'username' => true,
        'language_code' => true,
        'is_bot' => true,
        'can_join_groups' => true,
        'can_read_all_group_messages' => true,
        'supports_inline_queries' => true,
    ];

    /**
     * Unique identifier for this user or bot
     *
     * @var int
     */
    protected $id;

    /**
     * User‘s or bot’s first name
     *
     * @var string
     */
    protected $firstName;

    /**
     * Optional. User‘s or bot’s last name
     *
     * @var string
     */
    protected $lastName;

    /**
     * Optional. User‘s or bot’s username
     *
     * @var string
     */
    protected $username;

    /**
     * Optional. IETF language tag of the user's language
     *
     * @var string
     */
    protected $languageCode;

    /**
     * True, if this user is a bot
     *
     * @var bool
     */
    protected $isBot;

    /**
     * Optional. True, if the bot can be invited to groups. Returned only in getMe.
     *
     * @var bool
     */
    protected $canJoinGroups;

    /**
     * Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
     *
     * @var bool
     */
    protected $canReadAllGroupMessages;

    /**
     * Optional. True, if the bot supports inline queries. Returned only in getMe.
     *
     * @var bool
     */
    protected $supportsInlineQueries;

    /**
     * @return bool
     */
    public function isCanJoinGroups()
    {
        return $this->canJoinGroups;
    }

    /**
     * @param bool $canJoinGroups
     */
    public function setCanJoinGroups($canJoinGroups)
    {
        $this->canJoinGroups = $canJoinGroups;
    }

    /**
     * @return bool
     */
    public function isSupportsInlineQueries()
    {
        return $this->supportsInlineQueries;
    }

    /**
     * @param bool $supportsInlineQueries
     */
    public function setSupportsInlineQueries($supportsInlineQueries)
    {
        $this->supportsInlineQueries = $supportsInlineQueries;
    }

    /**
     * @return bool
     */
    public function isCanReadAllGroupMessages()
    {
        return $this->canReadAllGroupMessages;
    }

    /**
     * @param bool $canReadAllGroupMessages
     */
    public function setCanReadAllGroupMessages($canReadAllGroupMessages)
    {
        $this->canReadAllGroupMessages = $canReadAllGroupMessages;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int|float $id
     *
     * @throws InvalidArgumentException
     */
    public function setId($id)
    {
        if (is_int($id) || is_float($id)) {
            $this->id = $id;
        } else {
            throw new InvalidArgumentException();
        }
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * @param string $languageCode
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
    }

    /**
     * @return bool
     */
    public function isBot()
    {
        return $this->isBot;
    }

    /**
     * @param bool $isBot
     */
    public function setIsBot($isBot)
    {
        $this->isBot = $isBot;
    }
}
