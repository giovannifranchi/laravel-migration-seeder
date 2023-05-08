<?php

namespace app\Functions\Helper;

class Helper
{
    static function getCSV($file)
    {
        $row = 0;
        if (($handle = fopen($file, 'r')) !== FALSE) {
            $labels = [];
            $result = [];
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

                if ($row === 0) {
                    foreach ($data as $label) {
                        array_push($labels, $label);
                    }
                } else {
                    $rowData = [];
                    foreach ($data as $key => $value) {
                        $rowData[$labels[$key]] = $value;
                    }
                    array_push($result, $rowData);
                }


                $row++;
            }
            fclose($handle);
            return $result;
        }
    }
}
