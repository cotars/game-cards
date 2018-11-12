<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/cotars_game_proto_card.proto

namespace Cotars\GameProtoCard;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *玩家桌子操作 client->server
 *
 * Generated from protobuf message <code>Cotars.GameProtoCard.TableActionReq</code>
 */
class TableActionReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 id = 1;</code>
     */
    private $id = 0;
    /**
     * Generated from protobuf field <code>uint32 seatid = 2;</code>
     */
    private $seatid = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 targetSeatids = 3;</code>
     */
    private $targetSeatids;
    /**
     * Generated from protobuf field <code>.Cotars.GameProtoCard.TableAction action = 4;</code>
     */
    private $action = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type int $seatid
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $targetSeatids
     *     @type int $action
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\CotarsGameProtoCard::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 seatid = 2;</code>
     * @return int
     */
    public function getSeatid()
    {
        return $this->seatid;
    }

    /**
     * Generated from protobuf field <code>uint32 seatid = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSeatid($var)
    {
        GPBUtil::checkUint32($var);
        $this->seatid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 targetSeatids = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTargetSeatids()
    {
        return $this->targetSeatids;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 targetSeatids = 3;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTargetSeatids($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->targetSeatids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Cotars.GameProtoCard.TableAction action = 4;</code>
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Generated from protobuf field <code>.Cotars.GameProtoCard.TableAction action = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkEnum($var, \Cotars\GameProtoCard\TableAction::class);
        $this->action = $var;

        return $this;
    }

}

