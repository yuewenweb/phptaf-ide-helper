<?php

namespace Taf;

class PHPTAF {

    /**
     * @param Int $iVersion
     * @param Int $iRequestId
     * @param String $servantName
     * @param String $funcName
     * @param Int $cPacketType
     * @param Int $iMessageType
     * @param Int $iTimeout
     * @param array $contexts
     * @param array $statuses
     * @param array $inbuf_arr
     * @return string
     */
    public static function encode_v2($iVersion, $iRequestId, $servantName, $funcName, $cPacketType, $iMessageType, $iTimeout, $contexts, $statuses, $inbuf_arr) {}

    /**
     * @param String $respBuffer
     * @return array
     */
    public static function decode_v2($respBuffer) {}

    /**
     * @param  string $name
     * @param  $clazz [expect object]
     * @return string
     */
    public static function putStruct_v2($name, $clazz) {}

    /**
     * @param string $name
     * @param $clazz [expect object]
     * @param string $buf
     * @return array
     */
    public static function getStruct_v2($name, $clazz, $buf) {}

    /**
     * @param string $name
     * @param $value
     * @return string
     */
    public static function putBool_v2($name, $value) {}

    /**
     * @param $name
     * @param $buf
     * @return bool
     */
    public static function getBool_v2($name, &$buf) {}

    /**
     * @param $name
     * @param $value
     * @return string
     */
    public static function putChar_v2($name, $value) {}

    /**
     * @param $name
     * @param $buf
     * @return string
     */
    public static function getChar_v2($name, &$buf) {}

    /**
     * @param $name
     * @param $value
     * @return string
     */
    public static function putUInt8_v2($name, $value) {}

    /**
     * @param $name
     * @param $buf
     * @return int
     */
    public static function getUInt8_v2($name, &$buf) {}

    /**
     * @param $name
     * @param $value
     * @return string
     */
    public static function putShort_v2($name, $value) {}

    /**
     * @param $name
     * @param $buf
     * @return int
     */
    public static function getShort_v2($name, &$buf) {}

    /**
     * @param $name
     * @param $value
     * @return string
     */
    public static function putUInt16_v2($name, $value) {}

    /**
     * @param $name
     * @param $buf
     * @return int
     */
    public static function getUInt16_v2($name, &$buf) {}

    /**
     * @param $name
     * @param $value
     * @return string
     */
    public static function putInt32_v2($name, $value) {}

    /**
     * @param $name
     * @param $buf
     * @return int
     */
    public static function getInt32_v2($name, &$buf) {}

    /**
     * @param $name
     * @param $value
     * @return string
     */
    public static function putUInt32_v2($name, $value) {}

    /**
     * @param $name
     * @param $buf
     * @return int
     */
    public static function getUInt32_v2($name, &$buf) {}

    /**
     * @param $name
     * @param $value
     * @return string
     */
    public static function putInt64_v2($name, $value) {}

    /**
     * @param $name
     * @param $buf
     * @return int
     */
    public static function getInt64_v2($name, &$buf) {}

    /**
     * @param $name
     * @param $value
     * @return string
     */
    public static function putDouble_v2($name, $value) {}

    /**
     * @param $name
     * @param $buf
     * @return double
     */
    public static function getDouble_v2($name, &$buf) {}

    /**
     * @param $name
     * @param $value
     * @return mixed
     */
    public static function putFloat_v2($name, $value) {}

    /**
     * @param $name
     * @param $buf
     * @return double
     */
    public static function getFloat_v2($name, &$buf) {}

    /**
     * @param $name
     * @param $value
     * @return mixed
     */
    public static function putString_v2($name, $value) {}

    /**
     * @param $name
     * @param $buf
     * @return string
     */
    public static function getString_v2($name, &$buf) {}

    /**
     * @param $name
     * @param \Taf\TJCE_Vector $clazz
     * @return string
     */
    public static function putVector_v2($name, TJCE_Vector $clazz) {}

    /**
     * @param $name
     * @param \Taf\TJCE_Vector $clazz
     * @param $buf
     * @return mixed
     */
    public static function getVector_v2($name, TJCE_Vector $clazz, &$buf) {}

    /**
     * @param $name
     * @param \Taf\TJCE_Map $clazz
     * @return string
     */
    public static function putMap_v2($name, TJCE_Map $clazz) {}

    /**
     * @param $name
     * @param \Taf\TJCE_Map $clazz
     * @param $buf
     * @return array
     */
    public static function getMap_v2($name, TJCE_Map $clazz, &$buf) {}
}