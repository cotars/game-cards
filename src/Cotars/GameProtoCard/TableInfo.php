<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/cotars_game_proto_card.proto

namespace Cotars\GameProtoCard;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Cotars.GameProtoCard.TableInfo</code>
 */
class TableInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 id = 1;</code>
     */
    private $id = 0;
    /**
     * Generated from protobuf field <code>.Cotars.GameProtoCard.TableStatus status = 2;</code>
     */
    private $status = 0;
    /**
     * Generated from protobuf field <code>repeated .Cotars.GameProtoCard.PlayerInfo players = 3;</code>
     */
    private $players;
    /**
     * Generated from protobuf field <code>uint32 baseScore = 4;</code>
     */
    private $baseScore = 0;
    /**
     *座位数
     *
     * Generated from protobuf field <code>uint32 sits = 5;</code>
     */
    private $sits = 0;
    /**
     *共几轮
     *
     * Generated from protobuf field <code>uint32 rounds = 6;</code>
     */
    private $rounds = 0;
    /**
     *每轮局数
     *
     * Generated from protobuf field <code>uint32 subRounds = 7;</code>
     */
    private $subRounds = 0;
    /**
     *当前第几轮
     *
     * Generated from protobuf field <code>uint32 nowRound = 8;</code>
     */
    private $nowRound = 0;
    /**
     *每轮第几局
     *
     * Generated from protobuf field <code>uint32 nowSubRound = 9;</code>
     */
    private $nowSubRound = 0;
    /**
     *房间拥有者
     *
     * Generated from protobuf field <code>uint32 ownerUid = 10;</code>
     */
    private $ownerUid = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type int $status
     *     @type \Cotars\GameProtoCard\PlayerInfo[]|\Google\Protobuf\Internal\RepeatedField $players
     *     @type int $baseScore
     *     @type int $sits
     *          座位数
     *     @type int $rounds
     *          共几轮
     *     @type int $subRounds
     *          每轮局数
     *     @type int $nowRound
     *          当前第几轮
     *     @type int $nowSubRound
     *          每轮第几局
     *     @type int $ownerUid
     *          房间拥有者
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
     * Generated from protobuf field <code>.Cotars.GameProtoCard.TableStatus status = 2;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.Cotars.GameProtoCard.TableStatus status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Cotars\GameProtoCard\TableStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Cotars.GameProtoCard.PlayerInfo players = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Generated from protobuf field <code>repeated .Cotars.GameProtoCard.PlayerInfo players = 3;</code>
     * @param \Cotars\GameProtoCard\PlayerInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPlayers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cotars\GameProtoCard\PlayerInfo::class);
        $this->players = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 baseScore = 4;</code>
     * @return int
     */
    public function getBaseScore()
    {
        return $this->baseScore;
    }

    /**
     * Generated from protobuf field <code>uint32 baseScore = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setBaseScore($var)
    {
        GPBUtil::checkUint32($var);
        $this->baseScore = $var;

        return $this;
    }

    /**
     *座位数
     *
     * Generated from protobuf field <code>uint32 sits = 5;</code>
     * @return int
     */
    public function getSits()
    {
        return $this->sits;
    }

    /**
     *座位数
     *
     * Generated from protobuf field <code>uint32 sits = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setSits($var)
    {
        GPBUtil::checkUint32($var);
        $this->sits = $var;

        return $this;
    }

    /**
     *共几轮
     *
     * Generated from protobuf field <code>uint32 rounds = 6;</code>
     * @return int
     */
    public function getRounds()
    {
        return $this->rounds;
    }

    /**
     *共几轮
     *
     * Generated from protobuf field <code>uint32 rounds = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setRounds($var)
    {
        GPBUtil::checkUint32($var);
        $this->rounds = $var;

        return $this;
    }

    /**
     *每轮局数
     *
     * Generated from protobuf field <code>uint32 subRounds = 7;</code>
     * @return int
     */
    public function getSubRounds()
    {
        return $this->subRounds;
    }

    /**
     *每轮局数
     *
     * Generated from protobuf field <code>uint32 subRounds = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setSubRounds($var)
    {
        GPBUtil::checkUint32($var);
        $this->subRounds = $var;

        return $this;
    }

    /**
     *当前第几轮
     *
     * Generated from protobuf field <code>uint32 nowRound = 8;</code>
     * @return int
     */
    public function getNowRound()
    {
        return $this->nowRound;
    }

    /**
     *当前第几轮
     *
     * Generated from protobuf field <code>uint32 nowRound = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setNowRound($var)
    {
        GPBUtil::checkUint32($var);
        $this->nowRound = $var;

        return $this;
    }

    /**
     *每轮第几局
     *
     * Generated from protobuf field <code>uint32 nowSubRound = 9;</code>
     * @return int
     */
    public function getNowSubRound()
    {
        return $this->nowSubRound;
    }

    /**
     *每轮第几局
     *
     * Generated from protobuf field <code>uint32 nowSubRound = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setNowSubRound($var)
    {
        GPBUtil::checkUint32($var);
        $this->nowSubRound = $var;

        return $this;
    }

    /**
     *房间拥有者
     *
     * Generated from protobuf field <code>uint32 ownerUid = 10;</code>
     * @return int
     */
    public function getOwnerUid()
    {
        return $this->ownerUid;
    }

    /**
     *房间拥有者
     *
     * Generated from protobuf field <code>uint32 ownerUid = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setOwnerUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->ownerUid = $var;

        return $this;
    }

}
