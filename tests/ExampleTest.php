<?php
    /*
    IN ORDER TO RUN TESTS,
    EXECUTE IN TERMINAL:

    php vendor/bin/phpunit tests/ExampleTest.php
    */

    class ExampleTest extends \PHPUnit\Framework\TestCase
    {
        
        public function testTheTesting()
        {
            $this->assertTrue(true, true);
        }

        public function testMySQLConnection()
        {
            include $_SERVER["DOCUMENT_ROOT"]."/Capstone/components/tools.php";
            $mysqli = get_mysql_connection();
            $this->assertTrue($mysqli, true);
        }

    }
?>