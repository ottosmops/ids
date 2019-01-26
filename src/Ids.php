<?php

namespace Ottosmops\Ids;

class Ids
{
    static public function parse(string $ids) : array
    {
        if (!static::isValid($ids)) {
            throw new \InvalidArgumentException('Is not a valid ids-string: ' . $ids);
        }

        if (strpos($ids, '-') && strpos($ids, ',')) {
            $array = explode(',', $ids);
            $return = [];
            foreach($array as $v) {
                if (strpos($v, '-')) {
                    $return = array_merge($return, static::createRange($v));
                } else {
                    $return[] = $v;
                }
            }
            return $return;
        }

        if (strpos($ids, '-')) {
            return static::createRange($ids);
        }

        if (strpos($ids, ',')) {
            return explode(',', $ids);
        }

        return [$ids];
    }

    static public function isValid(string $string): bool
    {
        return  preg_match('/^[0-9].*/', $string) &&
                preg_match('/.*[0-9]$/', $string) &&
                !preg_match('/(--|,,|,-|-,|[a-zA-Z&%$§!*_:.;\/])/', $string) &&
                preg_match('/[1-9][1-9,-]*/', $string);
    }

    static private function createRange(string $string): array
    {
        list($start, $end) = explode('-', $string);
        return range(trim($start), trim($end));
    }
}
