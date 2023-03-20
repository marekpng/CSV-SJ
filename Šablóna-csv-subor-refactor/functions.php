<?php

namespace  main;
class Menu {
    //TOTO ISTE LEN V CSV;
    //php create csv file
    //headerMenu.csv
    private $csvFilePath = "source/csvHeaderMenu.csv";
    private $filePath = "source/headerMenu.json";
    public function getCsvMenu(string $type): array {
        $menu = [];
        $isValid = $this->validateMenuType($type);
        if ($isValid) {

            if($type === "header") {
                try {
                    $menuCsv = file_get_contents($this->csvFilePath);
                    $menu = str_getcsv($menuCsv);
//                    $menu = fgetcsv()
//                    var_dump($menu);

                } catch (\Exception $exception) {
                    //echo $exception->getMessage();
                    $menu = [
                        'home' => [
                            'path' => 'index.php',
                            'name' => 'Domov',

                        ],
                    ];
                }

            }

        }
        return $menu;
    }

    public function getMenu(string $type): array {
        $menu = [];
        $isValid = $this->validateMenuType($type);
        if ($isValid) {

            if($type === "header") {
                try {
                    $menuJson = file_get_contents($this->filePath);
                    $menu = json_decode($menuJson, true);
                } catch (\Exception $exception) {
                    //echo $exception->getMessage();
                    $menu = [
                        'home' => [
                            'path' => 'index.php',
                            'name' => 'Domov',

                        ],
                    ];
                }

            }

        }
        return $menu;
    }

    public function printCsvMenu() {

        $handle = fopen($this->csvFilePath, "r");

        // Loop through each line in the file
        while (($data = fgetcsv($handle)) !== FALSE) {
            // Output the columns

            echo '<li><a href="' . $data[0] . '">'.$data[1]. ' </a></li> ';
        }

        // Close the file handle
        fclose($handle);
    }

    public function printMenu(array $menu) {

        foreach ($menu as $key => $value) {
            echo '<li><a href="' . $value['path'] . '">'.$value['name']. ' </a></li> ';
        }

    }

    public function preparePortfolio(int $numberOfRows = 2, int $numberOfCols = 4): array {
        $portfolio = [];
        $colIndex = 1;
        for($i = 1; $i <= $numberOfRows; $i++) {
            for($j = 1; $j <= $numberOfCols; $j++) {
                $portfolio[$i][] = $colIndex;
                $colIndex++;
            }
        }


        return $portfolio;
    }

    private function validateMenuType(string $menuType): bool {
        $validTypes = [
            'header',
            'footer',
            'main'
        ];
        if(in_array($menuType, $validTypes)) {
            return True;
        } else {
            return False;
        }

    }

}

?>
