<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object describes the position on faces where a mask should be placed by default.
 *
 * @package TelegramBot\Api\Types
 */
class MaskPosition extends BaseType implements TypeInterface
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $requiredParams = ['point', 'x_shift', 'y_shift', 'scale'];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $map = [
        'point' => true,
        'x_shift' => true,
        'y_shift' => true,
        'scale' => true,
    ];

    /**
     * The part of the face relative to which the mask should be placed. One of “forehead”, “eyes”, “mouth”, or “chin”.
     *
     * @var string
     */
    protected $point;

    /**
     * Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. For example, choosing -1.0 will place mask just to the left of the default mask position.
     *
     * @var float
     */
    protected $xShift;
    /**
     * Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. For example, 1.0 will place the mask just below the default mask position.
     *
     * @var float
     */
    protected $yShift;
    /**
     * Mask scaling coefficient. For example, 2.0 means double size.
     *
     * @var float
     */
    protected $scale;

    /**
     * @return string
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * @param string $point
     */
    public function setPoint($point)
    {
        $this->point = $point;
    }

    /**
     * @return float
     */
    public function getXShift()
    {
        return $this->xShift;
    }

    /**
     * @param float $xShift
     */
    public function setXShift($xShift)
    {
        $this->xShift = $xShift;
    }

    /**
     * @return float
     */
    public function getYShift()
    {
        return $this->yShift;
    }

    /**
     * @param float $yShift
     */
    public function setYShift($yShift)
    {
        $this->yShift = $yShift;
    }

    /**
     * @return float
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * @param float $scale
     */
    public function setScale($scale)
    {
        $this->scale = $scale;
    }

}
