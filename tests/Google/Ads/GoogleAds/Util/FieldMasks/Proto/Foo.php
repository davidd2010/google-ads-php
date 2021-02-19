<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Google/Ads/GoogleAds/Util/FieldMasks/Proto/tester.proto

namespace Google\Ads\GoogleAds\Util\FieldMasks\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.ads.googleads.util.fieldmasks.proto.Foo</code>
 */
class Foo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 num = 1;</code>
     */
    protected $num = 0;
    /**
     * Generated from protobuf field <code>.google.ads.googleads.util.fieldmasks.proto.Bar bar = 2;</code>
     */
    protected $bar = null;
    /**
     * Generated from protobuf field <code>repeated .google.ads.googleads.util.fieldmasks.proto.Bar bars = 3;</code>
     */
    private $bars;
    /**
     * Generated from protobuf field <code>bool bool = 4;</code>
     */
    protected $bool = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $num
     *     @type \Google\Ads\GoogleAds\Util\FieldMasks\Proto\Bar $bar
     *     @type \Google\Ads\GoogleAds\Util\FieldMasks\Proto\Bar[]|\Google\Protobuf\Internal\RepeatedField $bars
     *     @type bool $bool
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\Util\FieldMasks\Proto\Tester::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 num = 1;</code>
     * @return int|string
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Generated from protobuf field <code>int64 num = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNum($var)
    {
        GPBUtil::checkInt64($var);
        $this->num = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.ads.googleads.util.fieldmasks.proto.Bar bar = 2;</code>
     * @return \Google\Ads\GoogleAds\Util\FieldMasks\Proto\Bar
     */
    public function getBar()
    {
        return isset($this->bar) ? $this->bar : null;
    }

    public function hasBar()
    {
        return isset($this->bar);
    }

    public function clearBar()
    {
        unset($this->bar);
    }

    /**
     * Generated from protobuf field <code>.google.ads.googleads.util.fieldmasks.proto.Bar bar = 2;</code>
     * @param \Google\Ads\GoogleAds\Util\FieldMasks\Proto\Bar $var
     * @return $this
     */
    public function setBar($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\Util\FieldMasks\Proto\Bar::class);
        $this->bar = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .google.ads.googleads.util.fieldmasks.proto.Bar bars = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBars()
    {
        return $this->bars;
    }

    /**
     * Generated from protobuf field <code>repeated .google.ads.googleads.util.fieldmasks.proto.Bar bars = 3;</code>
     * @param \Google\Ads\GoogleAds\Util\FieldMasks\Proto\Bar[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBars($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\Util\FieldMasks\Proto\Bar::class);
        $this->bars = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool bool = 4;</code>
     * @return bool
     */
    public function getBool()
    {
        return isset($this->bool) ? $this->bool : false;
    }

    public function hasBool()
    {
        return isset($this->bool);
    }

    public function clearBool()
    {
        unset($this->bool);
    }

    /**
     * Generated from protobuf field <code>bool bool = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setBool($var)
    {
        GPBUtil::checkBool($var);
        $this->bool = $var;

        return $this;
    }

}
