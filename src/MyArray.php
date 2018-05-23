<?php

namespace YangQiaBo\Package;

use InvalidArgumentException;

class MyArray
{
    public static function arrayGroup(array $array, $groupKey)
    {
        if (empty($groupKey)) {
            throw new InvalidArgumentException('The key cannot be empty!');
        }

        $newArray = [];
        foreach ($array as $key => $item) {
            if (!key_exists($groupKey, $item)) {
                continue;
            }
            $value = $item[$groupKey];
            $newArray[$value][] = $item;
        }
        return $newArray;
    }
}
