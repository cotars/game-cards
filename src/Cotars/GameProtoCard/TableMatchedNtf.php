<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/cotars_game_proto_card.proto

namespace Cotars\GameProtoCard;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *桌子匹配到的通知 server -> client
 *
 * Generated from protobuf message <code>Cotars.GameProtoCard.TableMatchedNtf</code>
 */
class TableMatchedNtf extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Cotars.GameProtoCard.TableMatched matchs = 1;</code>
     */
    private $matchs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cotars\GameProtoCard\TableMatched[]|\Google\Protobuf\Internal\RepeatedField $matchs
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\CotarsGameProtoCard::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Cotars.GameProtoCard.TableMatched matchs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMatchs()
    {
        return $this->matchs;
    }

    /**
     * Generated from protobuf field <code>repeated .Cotars.GameProtoCard.TableMatched matchs = 1;</code>
     * @param \Cotars\GameProtoCard\TableMatched[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMatchs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cotars\GameProtoCard\TableMatched::class);
        $this->matchs = $arr;

        return $this;
    }

}
