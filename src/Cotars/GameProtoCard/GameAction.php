<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/cotars_game_proto_card.proto

namespace Cotars\GameProtoCard;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Cotars.GameProtoCard.GameAction</code>
 */
class GameAction extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 action = 1;</code>
     */
    private $action;
    /**
     * Generated from protobuf field <code>repeated uint32 cards = 2;</code>
     */
    private $cards;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $action
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $cards
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\CotarsGameProtoCard::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 action = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 action = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAction($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->action = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 cards = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCards()
    {
        return $this->cards;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 cards = 2;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCards($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->cards = $arr;

        return $this;
    }

}
